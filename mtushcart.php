<?php
session_start();
ob_start();
require 'connect.php';
require 'utils/displayutils.php';
require 'utils/userutils.php';

$ctime = Date('Y-m-d H:i:s');
$booktime = 5; // minutes with activity
$bootktimeNo = 2; // minutes with no activity
$carttime = 3; // hours with no activity
$carttimeextend = 15; // minutes with no activity// this is to prevent one from hoarding the cart..just adds 2 mins to the exp
// echo $ctime;
$exptime = timeDeltaCurrentTime('+5 minutes');


if(userLoggedIn() == True){
	// do nothing...this is the master function to be reused by the entire page
	$userid = getUserID();
}else{
	die(bootstrapAlert('warning', 'glyphicon-info-sign', 'Psst!', "As an unlogged in user, you can only view items", 'A0'));
}
// echo timeDeltaExtendTime('12:20:07', '30 minutes', 'H:i:s');
// This will book items for users using the products table using buyer and availability
// we will just use buyer instead so that we can know what booked what but 
// availabilty will be used when you add item to cart
// it will also timestamp items to prevent hoarding

// unbooking will be done using the phone homing back...so should the user not phone back home in say 3 mins....unbook item
// should the user show to phone back home from a different page then unbook the item that's clearly not in their cart

// maybe we can also timestamp a particular thing to prevent users from long booking one single item
// timestamp will be used to check in with book time max being 3 mins
// book with no activity is 3 mins
// book with activity is 5 mins  as long as still on the same page on different page original 3 is used
// so create a new table to have timestamp....book time....add to cart time if any....product being watched....last seen at....last phone home time
// abandoned carts....should the user not phone home in 2 hours with a cart already then boot them out
// prevent user from booking other items if they have one already booked and not in the cart
// if user has an item in their cart for more than 3 hours at a time prevent them from booking it
// enable user to add item to wishlist  or automatically add items that were serially booked into wishlist upon expiration
// availability will be used only on items added to cart comprende
// buyer is only dependent on the booker

function checkItemAvailability($conn, $table, $itemid){
	// check to see whether the item id is available
	$query = "SELECT * FROM `$table` WHERE `id` = '$itemid' AND `buyer` = 0 AND `availability` = 1 AND `sold` = 0";
	$query_run = mysqli_query($conn, $query);
	$num_rows = mysqli_num_rows($query_run);
	if($num_rows == 1){
		return True;
	}else{
		return False;
	}

}
// echo checkItemAvailability($conn, 'products', 1);

function bookFunctionality($conn, $table, $userid, $itemid){
	// book item BY ONLY SETTING THE BUYERID
	// unbook item by ONLY SETTING THE BUYERID to 0
	// you shouldn't unbook an item thats in a cart
	$query = "UPDATE `$table` SET `buyer` = $userid WHERE `id` = $itemid AND `sold` = 0 AND `availability` = 1";
	if($query_run = mysqli_query($conn, $query)){
		return True;
	}else{
		return False;
	}
}

// echo bookFunctionality($conn, 'products', 1, 2); // this will book item
// echo bookFunctionality($conn, 'products', 0, 2); // this will unbook item

function unbookallotherbookeditems($conn, $table, $userid, $itemid){
	// this is called to unbook items once a user books another item
	// this will unbook all other items except this current item
	// we have to also destory the cart activity
	$query = "UPDATE `$table` SET `buyer` = $userid WHERE `id` != $itemid AND `sold` = 0 AND `availability` = 1";
	if($query_run = mysqli_query($conn, $query)){
		return True;
	}else{
		return False;
	}
}
// unbookallotherbookeditems($conn, 'products', 0, 2);

function checkIfBuyerBookedItem($conn, $userid, $itemid){
	// this will check whether current user booked the item
	$query = "SELECT * FROM `products` WHERE `sold` = 0 AND `buyer` = $userid AND `id` = $itemid";
	$query_run = mysqli_query($conn, $query);
	$num_rows = mysqli_num_rows($query_run);
	if($num_rows == 1){
		return True;
	}else{
		return False;
	}
}

// echo checkIfBuyerBookedItem($conn, 1, 2);

function checkWhetherInCart($conn, $userid, $itemid){
	// ensure that the item has not been added to the cart..how? check whether both fields have been filled
	$query = "SELECT * FROM `products` WHERE `sold` = 0 AND `buyer` = $userid AND `id` = $itemid AND `availability` = 0";
	$query_run = mysqli_query($conn, $query);
	$num_rows = mysqli_num_rows($query_run);
	if($num_rows == 1){
		return True;
	}else{
		return False;
	}

}

// echo checkWhetherInCart($conn, 12, 2);

function createProductActivityStamp($conn, $itemid, $ctime, $exptime, $userid, $state){
	// create a new entry to a book
	// create a new entry to a addtocart
	// cols -> id, itemid, user, exptime, book, cart,  
	// cart entries will be deleted when cart is checked out
	$query = "INSERT INTO `cartactivity`(`id`, `itemid`, `ctime`, `exptime`, `userid`, `state`, `checked`) VALUES ('','$itemid','$ctime','$exptime','$userid', 'book', '0')";
	if($query_run = mysqli_query($conn, $query)){
		return True;
	}else{
		return False;
	}

}

// echo createProductActivityStamp($conn, 900, $ctime, $exptime, 1, 'book');
// echo createProductActivityStamp($conn, 49, $ctime, $exptime, 1, 'cart');

function destroyProductActivityStamp($conn, $table, $itemid, $userid){
	// this will delete an entry normally when a user checksout the cart or the cart expires
	$query = "DELETE FROM `$table` WHERE `itemid` =  $itemid AND `userid` = $userid AND `checked` = 0";
	if($query_run = mysqli_query($conn, $query)){
		return True;
	}else{
		return False;
	}
}

// echo destroyProductActivityStamp($conn, 'cartactivity', 49, 1);

function destroyProductActivityStampforallotherbookeditems($conn, $table, $itemid, $userid){
	// this will destroy an entry once a user has booked another item 
	// simply deleting all booked items except this one
	$query = "DELETE FROM `$table` WHERE `itemid` !=  $itemid AND `userid` = $userid AND `state` = 'book' AND `checked` = 0";
	if($query_run = mysqli_query($conn, $query)){
		return True;
	}else{
		return False;
	}
}
// destroyProductActivityStampforallotherbookeditems($conn, 'cartactivity', 49, 1);


function timestampExtendexpiry($conn, $itemid, $booktime){
	// this will extend the expirty time for an item for an active user
	$query = "SELECT `exptime` FROM `cartActivity` WHERE `itemid` = $itemid";
	$query_run = mysqli_query($conn, $query);
	$num_rows = mysqli_num_rows($query_run);
	if($num_rows == 1){
		$row = mysqli_fetch_assoc($query_run);
		$oldexpTime = $row['exptime']; 
		$newtime = timeDeltaCurrentTime('+'.$booktime.'minutes');
		$query_update_time = "UPDATE `cartActivity` SET `exptime` = '$newtime' WHERE `itemid` = $itemid";
		if($query_update_run = mysqli_query($conn, $query_update_time)){
			return True;
		}else{
			return False;
		}

	}else{
		return False;
	}

}

// echo timestampExtendexpiry($conn, 3, $booktime);

function extendExpirytime($conn, $itemid, $booktime){
	// unlinek the function above this will not extedn on the current itme...this will extend on the expiry time
	$query = "SELECT `exptime` FROM `cartActivity` WHERE `itemid` = $itemid";
	$query_run = mysqli_query($conn, $query);
	$num_rows = mysqli_num_rows($query_run);
	if($num_rows == 1){
		$row = mysqli_fetch_assoc($query_run);
		$oldexpTime = $row['exptime']; 
		$newtime = timeDeltaExtendTimeReturn($oldexpTime, '+'.$booktime.'minutes', 'Y-m-d H:i:s');
		$query_update_time = "UPDATE `cartActivity` SET `exptime` = '$newtime' WHERE `itemid` = $itemid";
		if($query_update_run = mysqli_query($conn, $query_update_time)){
			return True;
		}else{
			return False;
		}

	}else{
		return False;
	}

}


function itemAddToWishlist(){
	// this will add cart items that expired to be added to users wishlist
	// just an id, itemid, time
}

function cartActivity($conn, $availability, $itemid, $userid){
	// this will set item availability to 0 - item added
	// this will set item availability to 1 - item removed
	$query = "UPDATE `products` SET `availability` = $availability WHERE `sold` = 0 AND `buyer` = $userid AND `id` = $itemid";
	if($query_run = mysqli_query($conn, $query)){
		return True;
	}else{
		return False;
	}
}

// echo cartActivity($conn, 0, 2, 1);// add to cart
// echo cartActivity($conn, 1, 2, 1);// remove from cart

function updateProdActivityAddCart($conn, $carttime, $itemid){
	// this will be called when a user adds the item to cart
	// remember that item id is unique
	$newtime = timeDeltaCurrentTime('+'.$carttime.'hours');
	$query = "UPDATE `cartActivity` SET `exptime` = '$newtime', `state` = 'cart' WHERE `itemid` =  $itemid";
	if($query_run = mysqli_query($conn, $query)){
		return True;
	}else{
		return False;
	}
	
}

// echo updateProdActivityAddCart($conn, $carttime, 49);

function retrieveusersCartsunexpired($conn, $userid){
	// this will retrieve all carts belonging to current user unchecked rows okay
	// also where the exptime has not arrived
	$now = Date('Y-m-d H:i:s');
	$query = "SELECT * FROM `cartactivity` WHERE `userid` = '$userid' AND `checked` = '0' AND `state` = 'cart'";
	$query_run = mysqli_query($conn, $query);
	$row = array();
	if(mysqli_num_rows($query_run) != 0){
		// continue
		while($query_row = mysqli_fetch_assoc($query_run)){
			array_push($row, $query_row);
			}
			return $row;
	}else{
		// return 0;
		echo mysqli_error($conn);
	}

}

// print_r(retrieveusersCartsunexpired($conn, 1));


function UnbookIfExpired($conn, $ctime){
	// this will check exp time compare it with current time to know whether book already expired
	$now = Date('Y-m-d H:i:s');
	$query = "SELECT * FROM `cartactivity` WHERE `exptime` < '$now' AND `checked`= 0";
	$query_run = mysqli_query($conn, $query);
	$num_rows = mysqli_num_rows($query_run);
	if($num_rows != 0){
		while($row = mysqli_fetch_assoc($query_run)){
			$prod = $row['itemid'];
			$userid = $row['userid'];
			if(cartActivity($conn, 1, $prod, $userid) == True){
				// make item available again
				if(bookFunctionality($conn, 'products', 0, $prod) == True){
					// unbook item
					// now delete the occurence on cartactivity
					if(destroyProductActivityStamp($conn, 'cartactivity', $prod, $userid) == True){
						//finally done
						echo "Item has expired. Unbooking completed";
					}else{
						// could not finish
						echo "Error occured trying to unbook item";
					}
				}else{
					// could not unbook item
				}
			}else{
				// could not make item available again
			}
		}
	}else{
		return "found nothing";
	}
}

// echo UnbookIfExpired($conn, $ctime);
if(isset($_POST['action']) && $_POST['action'] == 'auto'){
echo UnbookIfExpired($conn, $ctime);
}
// <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<AUTOMATED UNBOOK >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

// <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<AUTOMATED UNBOOK >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>


// <<<<<<<<<<<<<<<<<<<<<<<<< AddtoCart ITEM ALGO >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
if(isset($_POST['action']) && $_POST['action'] == 'addtocart' && isset($_POST['prod']) && is_numeric($_POST['prod']) && !empty($_POST['prod'])){
	$prod = $_POST['prod'];
	// check if we booked the item
	if(checkIfBuyerBookedItem($conn, $userid, $prod) == True){
		// add item to our cart
		if(checkWhetherInCart($conn, $userid, $prod) != True){
			// item not in cart
			if(cartActivity($conn, 0, $prod, $userid) == True){
				if(updateProdActivityAddCart($conn, $carttime, $prod) == True){
					echo bootstrapAlert('success', 'glyphicon-info-sign', 'Hurray!! ', "Item successfully added to your cart. Proceed to checkout to buy the item <a href=\"checkout.php\">checkout</a> ", 'A0');
				}else{
					echo bootstrapAlert('warning', 'glyphicon-info-sign', 'Sorry ', "We couldn't complete processing the request. Please try again later", 'A0');
				}
			}else{
				echo bootstrapAlert('warning', 'glyphicon-info-sign', 'Yikes!! ', " We couldn't complete the request, Please try again later", 'A0');

			}

		}else{
			// item already in cart
			echo bootstrapAlert('info', 'glyphicon-info-sign', 'All Clear ', "You already have this item in your cart.", 'A0');
		}
		
	}else{
		echo bootstrapAlert('warning', 'glyphicon-info-sign', 'Sorry ', " There's a chance someone else has just booked this item, refresh the page to try and book it again", 'A0');
	}
}
// <<<<<<<<<<<<<<<<<<<<<<<<< AddtoCart ITEM ALGO >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

// <<<<<<<<<<<<<<<<<<<<<<<<< RemoveFromCart ITEM ALGO >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
if(isset($_POST['action']) && $_POST['action'] == 'removeFrCart' && isset($_POST['prod']) && is_numeric($_POST['prod']) && !empty($_POST['prod'])){
	// check whether he put it in his cart
	$prod = $_POST['prod'];
	if(checkWhetherInCart($conn, $userid, $prod) == True){
		// in his cart
		if(destroyProductActivityStamp($conn, 'cartactivity', $prod, $userid) == True){
				// revert values in the product dbs to available and no buyer
			if(cartActivity($conn, 1, $prod, $userid) == True && bookFunctionality($conn, 'products', 0, $prod) == True){
				//reset values to available and reset buyer
				echo bootstrapAlert('warning', 'glyphicon-info-sign', 'Hey ', "Item has successfully been removed from your cart", 'A0');
			}else{
				// couldn't reset values to availabe
				echo bootstrapAlert('warning', 'glyphicon-info-sign', 'Error ', "We could not complete your request, please try again later", 'A0');
			}
		}else{
			// destroy not successful
			echo bootstrapAlert('warning', 'glyphicon-info-sign', 'Sorry  ', "unbooking ran into an error", 'A0');
		}
	}else{
		echo bootstrapAlert('warning', 'glyphicon-info-sign', 'Error ', "Could not complete your request", 'A0');
	}
}
// <<<<<<<<<<<<<<<<<<<<<<<<< RemoveFromCart ITEM ALGO >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

// <<<<<<<<<<<<<<<<<<<<<<<<< BOOK ITEM ALGO >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

if(isset($_POST['action']) && $_POST['action'] == 'book' && isset($_POST['prod']) && is_numeric($_POST['prod']) && !empty($_POST['prod'])){
	$prod = $_POST['prod'];
	if(checkItemAvailability($conn, 'products', $prod) == True){
		// available for booking
		
		if(bookFunctionality($conn, 'products', $userid, $prod) == True){
			
			// create a timestamp for the new booking
			if(createProductActivityStamp($conn, $prod, $ctime, $exptime, $userid, 'book') == True){
				// time entry created for the booking
				// echo bootstrapAlert('info', 'glyphicon-info-sign', 'Niaje ', "Item has been successfully booked. For the next 5 minutes no one else ,but you, can buy this item.", 'A0');
				// unbook any other item user has booked
				if(unbookallotherbookeditems($conn, 'products', 0, $prod) == True){
					// proceed to destroy those items carts
					if(destroyProductActivityStampforallotherbookeditems($conn, 'cartactivity', $prod, $userid) == True){
						//all done all other booked items unbooked successfully
						echo bootstrapAlert('info', 'glyphicon-info-sign', 'Niaje ', "Item has been successfully booked. For the next 5 minutes no one else ,but you, can buy this item.", 'A0');
					}else{
						// error occured trying to unbook items Crap
					}
				}else{
					// error trying to unbook item
				}
			}else{
				// entry could not be created error
				echo bootstrapAlert('danger', 'glyphicon-info-sign', 'Sorry ', "encountered an error trying to book item", 'A0');
			}
		}else{
			echo bootstrapAlert('danger', 'glyphicon-info-sign', 'Yikes !! ', "Error encountered trying to book item", 'A0');
		}
	}else{
		// not available for booking
		// check whether we are the ones who booked it
		if(checkIfBuyerBookedItem($conn, $userid, $prod) == True){
			// extend the time here TODO
			// update time with the new time
			if(checkWhetherInCart($conn, $userid, $prod) != True){
			// check whether item is already in users cart
				if(timestampExtendexpiry($conn, $prod, $booktime) == True){
				// time updated for this item
				echo bootstrapAlert('info', 'glyphicon-info-sign', 'Surprise!!! ', "You have booked this item again. No one else can buy it for the next 5 mins", 'A0');
				}else{
					// time could not be updated
					echo bootstrapAlert('danger', 'glyphicon-info-sign', 'Sorry ', "We ran into an error trying to extend your book time", 'A0');
				}
			}else{
				echo bootstrapAlert('info', 'glyphicon-info-sign', 'All Clear ', "You already have this item in your cart.", 'A0');
			}
			
		}else{
			echo bootstrapAlert('warning', 'glyphicon-info-sign', 'Sorry ', "The item is currently booked by someone else", 'A0');
		}
	}
}

// <<<<<<<<<<<<<<<<<<<<<<<<< BOOK ITEM ALGO >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

// <<<<<<<<<<<<<<<<<<<<<<<<< UNBOOK ITEM ALGO COMPLETE>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

if(isset($_POST['action']) && $_POST['action'] == 'unbook' && isset($_POST['prod']) && is_numeric($_POST['prod']) && !empty($_POST['prod'])){
	$prod = $_POST['prod'];
	if(checkIfBuyerBookedItem($conn, $userid, $prod) == True){
			// continue
		if(checkWhetherInCart($conn, $userid, $prod) != True){
			// first check whether in cart....an item in the cart shouldn't be unbooked only expired or removed from cart
			// falls in here
			if(bookFunctionality($conn, 'products', 0, $prod) == True){
				// successfully unbooked item
				// destroy entry
				if(destroyProductActivityStamp($conn, 'cartactivity', $prod, $userid) == True){
					// revert values in the product dbs to available and no buyer
					if(cartActivity($conn, 1, $prod, $userid) == True && bookFunctionality($conn, 'products', 0, $prod) == True){
						//reset values to available and reset buyer
						echo bootstrapAlert('warning', 'glyphicon-info-sign', 'Hey ', "Item has successfully been unbooked", 'A0');
					}else{
						// couldn't reset values to availabe
						echo bootstrapAlert('warning', 'glyphicon-info-sign', 'Error ', "We could not complete your request, please try again later", 'A0');
					}
				}else{
					// destroy not successful
					echo bootstrapAlert('warning', 'glyphicon-info-sign', 'Sorry  ', "unbooking ran into an error", 'A0');
				}
			}else{
				echo bootstrapAlert('warning', 'glyphicon-info-sign', 'Error ', "Sorry we ran into an error trying to unbook this item", 'A0');
			}
			// falls in here
		}else{
			echo bootstrapAlert('danger', 'glyphicon-info-sign', 'Error ', "Attempted to unbook an item currently in users cart, shopping cart disables unbooking", 'A0');
		}
	}else{
		echo bootstrapAlert('danger', 'glyphicon-info-sign', 'Error ', "Attempted to unbook an item currently book by another user", 'A0');
	}
}

// <<<<<<<<<<<<<<<<<<<<<<<<< UNBOOK ITEM ALGO COMPLETE>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
// ONLY UNBOOK ITEMS NOT IN THE CART user incart function
// EXTEND THE EXPIRY OF CARTS IN THE CHECKOUTPAGE
if(isset($_POST['action']) && $_POST['action'] == '343mk34j'){
	// retrieve all unchecked out carts belonging to current user
	$userid = getUserID();
	$viablecarts = retrieveusersCartsunexpired($conn, $userid);
	if($viablecarts != 0){
		if(count($viablecarts) != 0){
			for($x = 0; $x < count($viablecarts); $x++){
				$itemid = $viablecarts[$x]['itemid'];
				// echo $itemid;
				$cartExtendState = extendExpirytime($conn, $itemid, $carttimeextend);
				if($cartExtendState == True){
					echo "cart expiry extended";
				}else{
					echo "could not extend cart expiry";
				}
			}
		}
	}
}
// EXTEND THE EXPIRY OF CARTS IN THE CHECKOUTPAGE

?>