<?php
session_start();
ob_start();
require '../connect.php';
require 'displayutils.php';
require 'userutils.php';

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

echo UnbookIfExpired($conn, $ctime);
// this script has been left behind simply to just unbook expired items

?>