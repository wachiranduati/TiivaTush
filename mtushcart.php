<?php
session_start();
ob_start();
require 'connect.php';
require 'utils/displayutils.php';
require 'utils/userutils.php';

$ctime = Date('H:i:s');
$booktime = 5; // minutes with activity
$bootktimeNo = 2; // minutes with no activity
$carttime = 2; // hours with no activity
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

function createProductActivityStamp($conn, $itemid, $ctime, $exptime, $userid, $state){
	// create a new entry to a book
	// create a new entry to a addtocart
	// cols -> id, itemid, user, exptime, book, cart,  
	// cart entries will be deleted when cart is checked out
	$query = "INSERT INTO `cartactivity`(`id`, `itemid`, `ctime`, `exptime`, `userid`, `state`) VALUES ('',$itemid,'$ctime','$exptime',$userid, '$state')";
	if($query_run = mysqli_query($conn, $query)){
		return True;
	}else{
		return False;
	}

}

// echo createProductActivityStamp($conn, 409, $ctime, $exptime, 1, 'book');
// echo createProductActivityStamp($conn, 49, $ctime, $exptime, 1, 'cart');

function destroyProductActivityStamp($conn, $table, $itemid, $userid){
	// this will delete an entry normally when a user checksout the cart or the cart expires
	$query = "DELETE FROM `$table` WHERE `itemid` =  $itemid AND `userid` = $userid";
	if($query_run = mysqli_query($conn, $query)){
		return True;
	}else{
		return False;
	}
}

// echo destroyProductActivityStamp($conn, 'cartactivity', 49, 1);

function checkIfProdActivityExist($conn){
	// check whether an entry exists....virtually impossible but should prevent one prod having two entries
	// $query = "SELECT * FROM `cartactivity` WHERE ``";
}

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

function itemAddToWishlist(){
	// this will add cart items that expired to be added to users wishlist
	// just an id, itemid, time
}

function cartActivity($conn, $availability, $itemid, $userid){
	// this will set item availability to 0 - item added
	// this will set item availability to 1 - item removed
	$query = "UPDATE `products` SET `availability` = $availability WHERE `sold` = 0 AND `buyer` = $userid";
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

// <<<<<<<<<<<<<<<<<<<<<<<<< AddtoCart ITEM ALGO >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

// <<<<<<<<<<<<<<<<<<<<<<<<< AddtoCart ITEM ALGO >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>



// <<<<<<<<<<<<<<<<<<<<<<<<< BOOK ITEM ALGO >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

if(isset($_POST['action']) && $_POST['action'] == 'book' && isset($_POST['prod']) && is_numeric($_POST['prod']) && !empty($_POST['prod'])){
	$prod = $_POST['prod'];
	if(checkItemAvailability($conn, 'products', $prod) == True){
		// available for booking
		if(bookFunctionality($conn, 'products', $userid, $prod) == True){
			
			// create a timestamp for the new booking
			if(createProductActivityStamp($conn, $prod, $ctime, $exptime, $userid, 'book') == True){
				// time entry created for the booking
				echo bootstrapAlert('info', 'glyphicon-info-sign', 'Niaje ', "Item has been successfully booked. For the next 5 minutes no one else ,but you, can buy this item.", 'A0');
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
			if(timestampExtendexpiry($conn, $prod, $booktime) == True){
				// time updated for this item
				echo bootstrapAlert('info', 'glyphicon-info-sign', 'Surprise!!! ', "You have booked this item again. No one else can buy it for the next 5 mins", 'A0');
			}else{
				// time could not be updated
				echo bootstrapAlert('danger', 'glyphicon-info-sign', 'Surprise!!! ', "We ran into an error trying to extend your book time", 'A0');
			}
			
		}else{
			echo bootstrapAlert('warning', 'glyphicon-info-sign', 'Sorry ', "The item is currently booked by someone else", 'A0');
		}
	}
}

// <<<<<<<<<<<<<<<<<<<<<<<<< BOOK ITEM ALGO >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

// <<<<<<<<<<<<<<<<<<<<<<<<< UNBOOK ITEM ALGO >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

if(isset($_POST['action']) && $_POST['action'] == 'unbook' && isset($_POST['prod']) && is_numeric($_POST['prod']) && !empty($_POST['prod'])){
	$prod = $_POST['prod'];
	if(checkIfBuyerBookedItem($conn, $userid, $prod) == True){
			// continue
		if(bookFunctionality($conn, 'products', 0, $prod) == True){
			// successfully unbooked item
			// destroy entry
			if(destroyProductActivityStamp($conn, 'cartactivity', $prod, $userid) == True){
				echo bootstrapAlert('warning', 'glyphicon-info-sign', 'Error ', "Item has successfully been unbooked", 'A0');
			}else{
				// destroy not successful
				echo bootstrapAlert('warning', 'glyphicon-info-sign', 'Sorry  ', "unbooking ran into an error", 'A0');
			}
		}else{
			echo bootstrapAlert('warning', 'glyphicon-info-sign', 'Error ', "Sorry we ran into an error trying to unbook this item", 'A0');
		}
	}else{
		echo bootstrapAlert('danger', 'glyphicon-info-sign', 'Error ', "Attempted to unbook an item currently book by another user", 'A0');
	}
}

// <<<<<<<<<<<<<<<<<<<<<<<<< UNBOOK ITEM ALGO >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
?>