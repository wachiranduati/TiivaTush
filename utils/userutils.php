<?php
function userLoggedIn(){
	#checks whether user is logged in
	if(isset($_SESSION['$user_id'])){
		return True;
	}else{
		return False;
	}
}

function getUserName($conn){
	# use this with the userloggedin fnc
$userState = userLoggedIn();
if ($userState == True){
	$user = $_SESSION['$user_id'];
	$query = "SELECT `username` FROM `users` WHERE `id`='".mysqli_real_escape_string($conn, $user)."'";
	$query_run = mysqli_query($conn, $query);
	$query_row = mysqli_fetch_assoc($query_run);
	$user = $query_row['username'];
	return $user;
}else{
	#redirect user or sth
	header('Location:index.php');
}

}

function usernameIsStaff($conn){
	// we will check the userid to confirm that the user is a staff member
	$userid = getUserID($conn);
	$query = "SELECT `username` FROM `staff` WHERE `userid` = '$userid'";
	$query_run = mysqli_query($conn, $query);
	if(mysqli_num_rows($query_run) == 1){
		return True;
	}else{
		return False;
	}
}

function getUserID(){
$userState = userLoggedIn();
if ($userState == True){
	$user = $_SESSION['$user_id'];
	return $user;
}
}

function isUserMerchant($conn){
	#check whether the signed in user is also a merchant
$userState = userLoggedIn();
if ($userState == True){
	$user = $_SESSION['$user_id'];
	$query = "SELECT * FROM `merchants` WHERE `userid`='".mysqli_real_escape_string($conn, $user)."'";
	$query_run = mysqli_query($conn, $query);
	$query_row = mysqli_num_rows($query_run);
	if($query_row == 1){
		return True;
	}else{
		return False;
	}
}
}

function getMerchantId($conn){
	#retrieve merchant id
$userState = userLoggedIn();
if ($userState == True){
	$user = $_SESSION['$user_id'];
	$query = "SELECT * FROM `merchants` WHERE `userid`='".mysqli_real_escape_string($conn, $user)."'";
	$query_run = mysqli_query($conn, $query);
	$query_row = mysqli_num_rows($query_run);
	if($query_row == 1){
		$row = mysqli_fetch_assoc($query_run);
		return $row['id'];
	}else{
		return False;
	}
}
}

function getMerchantStoreName($conn, $id){
	#retrieve merchant store name
	$query = "SELECT `businessname` FROM `merchants` WHERE `userid`='".mysqli_real_escape_string($conn, $id)."'";
	$query_run = mysqli_query($conn, $query);
	$query_row = mysqli_num_rows($query_run);
	if($query_row == 1){
		$row = mysqli_fetch_assoc($query_run);
		return $row['businessname'];
	}else{
		return False;
	}

}

function userWithEmailExists($conn, $mobilenumber){
	# check whether user with that email address already exists| should be unique
    //$mobilenumber = '0705780775';

    $query = "SELECT `mobilenumber` FROM `users` WHERE `mobilenumber`='".mysqli_real_escape_string($conn, $mobilenumber)."'";
    $query_run = mysqli_query($conn, $query);
    $query_num_rows = mysqli_num_rows($query_run);
    if(!empty($mobilenumber)){
        if($query_num_rows < 1){
           echo "<span class=\"glyphicon glyphicon-ok\" style=\"color:rgb(0, 230, 0);\"></span>";
       }else{
           echo "mobi is <strong>already taken</strong>";
       }
    }else{
        echo "Please provide a number";
    }
}

function checkUserLocation(){
	// this will be the function homing in to know the whereabouts of the user
}

function returnCartCount($conn, $table){
	if(userLoggedIn() == True){
		// continue
		$userid = getUserID();
		$query = "SELECT * FROM `$table` WHERE `availability` = 0 AND `sold` = 0 AND `buyer` = $userid";
		$query_run = mysqli_query($conn, $query);
		$num_rows = mysqli_num_rows($query_run);
		return  $num_rows;
	}else{
		return 0;
	}
}

function returncartItems($conn, $table){
	if(returnCartCount($conn, $table) != 0){
		// continue
		$userid = getUserID();
		$query = "SELECT * FROM `$table` WHERE `availability` = 0 AND `sold` = 0 AND `buyer` = $userid";
		$query_run = mysqli_query($conn, $query);
		$records = array();
		while($row = mysqli_fetch_assoc($query_run)){
			array_push($records, $row);
		}
		return $records;
	}else{
		return "Your cart is empty";
	}
}

function getMerchantDetails($conn){
$userState = userLoggedIn();
if ($userState == True){
	$user = $_SESSION['$user_id'];
	$query = "SELECT * FROM `merchants` WHERE `userid`='".mysqli_real_escape_string($conn, $user)."'";
	$query_run = mysqli_query($conn, $query);
	$query_row = mysqli_num_rows($query_run);
	if($query_row == 1){
		$row = mysqli_fetch_assoc($query_run);
		return $row;
	}else{
		return False;
	}
}
}

function isStaffLoggedIn(){
	if(isset($_SESSION['$staff'])){
		return True;
	}else{
		return False;
	}
}

function getStaffID(){
$userState = isStaffLoggedIn();
if ($userState == True){
	$user = $_SESSION['$staff'];
	return $user;
}
}

function redirectAndDie(){
	header('Location:index.php');
	die("You do not have permission to be on this page");
}

function getSpecificMerchantDetails($conn, $sellerid){
$query = "SELECT * FROM `merchants` WHERE `userid`='".mysqli_real_escape_string($conn, $sellerid)."'";
$query_run = mysqli_query($conn, $query);
$query_row = mysqli_num_rows($query_run);
	if($query_row == 1){
		$row = mysqli_fetch_assoc($query_run);
		return $row;
	}else{
		return False;
	}
}

function getStaffName($conn){
	$staffId = getStaffID();
	$query = "SELECT `tiivanick` FROM `staff` WHERE `id` = '$staffId'";
	$query_run = mysqli_query($conn, $query);
	if(mysqli_num_rows($query_run) == 1){
		// staff found
		$row = mysqli_fetch_assoc($query_run);
		return $row['tiivanick'];
	}else{
		// something is terribly wrong
		die('Staff Name request could not be completed');
	}
}

function retrieveUserDetails($conn){
	// this will retrieve all user details for the currently logged in user
	$user = getUserID();
	$query = "SELECT * FROM `users` WHERE `id` = '$user'";
	$query_run = mysqli_query($conn, $query);
	if(mysqli_num_rows($query_run) == 1){
		// continue
		return mysqli_fetch_assoc($query_run);
	}else{
		die("something's wrong");
	}
}

function showUserCartHistory($conn){
	// this should return a list of carts checked out by the current user..
	// retrieved from the checkout tables
	$currentUser = getUserID();
	$query = "SELECT * FROM `checkoutcarts` WHERE `customer_id` = '$currentUser'";
	$query_run = mysqli_query($conn, $query);
	$row = array();
	if(mysqli_num_rows($query_run) != 0){
		// continue
		while($query_row = mysqli_fetch_assoc($query_run)){
			array_push($row, $query_row);
		}
		return $row;
	}else{
		return 0;
	}
}

function convertcartContentsStringToArray($commadString){
	$itemArray = explode(',', $commadString);
	return $itemArray;
}

function checkwhetherCompDeliveryExist($conn, $cartname){
	// this should also tell whether was delivered
	$query = "SELECT * FROM `deliveries` WHERE `cartno` = '$cartname'";
	$query_run = mysqli_query($conn, $query);
	if(mysqli_num_rows($query_run) == 1){
		// delivery was made
		return True;
	}else{
		// delivery yet to be made
		return False;
	}

}

function checkforincompCartsdelv($conn, $cartname){
	// Not to be confused with the function below..this one just checks whether a cart by the name exists
	$query = "SELECT * FROM `incdelivery` WHERE `cartno` = '$cartname'";
	$query_run = mysqli_query($conn, $query);
	if(mysqli_num_rows($query_run) != 0){
		// delivery not complete on the cart..it may be partial
		return True;
	}else{
		return False;
	}
}

function returnFromIncompDelivSingleRow($conn, $itemid, $cartname){
	// Not to be confused with the function below..this one just checks whether a cart by the name exists
	$query = "SELECT * FROM `incdelivery` WHERE `cartno` = '$cartname' AND `itemid` = '$itemid'";
	$query_run = mysqli_query($conn, $query);
	if(mysqli_num_rows($query_run) != 0){
		// delivery not complete on the cart..it may be partial
		return mysqli_fetch_assoc($query_run);
	}else{
		return False;
	}
}

function checkwhethercartincExists($conn, $cartname, $count){
	// this is a bit tricky since we need to know how many items there are
	// this should check to see whether all items have been delivered
	// check whether a cartname exists
	// chekc whether the original content matches the rows with the cartname
	// just pass the item count
	$query = "SELECT * FROM `incdelivery` WHERE `cartno` = '$cartname'";
	$query_run = mysqli_query($conn, $query);
	if(mysqli_num_rows($query_run) != $count){
		// delivery not complete on the cart..it may be partial
		return False;
	}else{
		return True;
	}
}

function checkwhetherCartDelivered($conn, $cartname, $cartcount){
	// thsi will use two other functions to figure out whether the cart was delivered
	if(checkwhetherCompDeliveryExist($conn, $cartname) == True){
		// cart has been completed
		return 1;
	}else{
		// no complete cart found
		// check for incomplete complete delivery
		if(checkwhethercartincExists($conn, $cartname, $cartcount) == True){
			// incomplete cart actually completed
			return 1;
		}else{
			// incomplete cart not done
			return 0;
		}
	}
}

function retrieveFinalItemInCommadStringUsersProf($commadString){
	$itemArray = explode(',', $commadString);
	$finalItemPosition = count($itemArray);
	return $itemArray[$finalItemPosition - 1];
	// minus one cause numbering starts at zero to total count minus 1
}

function returncartcardslooped($conn, $row){
	for($x = 0; $x < count($row); $x++){
		$cartname = $row[$x]['cartname'];
		$carttotal = $row[$x]['carttotal'];
		$paymentverification = $row[$x]['paymentverification'];
		$Date = $row[$x]['Date'].' '.$row[$x]['time'];
		$cartcontents = $row[$x]['cartcontents'];
		$cartcontentsArray = convertcartContentsStringToArray($cartcontents);
		$cartcount = count($cartcontentsArray);

		$delivery_state = checkwhetherCartDelivered($conn, $cartname, $cartcount);
		if($delivery_state == True){
			$status = "Delivery Complete";
		}else{
			$status = "InTransit";
		}
		echo "
		<div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                      <div class=\"thumbnail text-center\">
                          <div class=\"caption\">
                            <h4><span class=\"mdi mdi-cart\"></span>cart</h4>
                            <h4>$cartname</h4>
                            <p>Checkout Date : $Date</p>

                            <p>Carttotal : $carttotal Ksh</p>
                            <p>Shipping : 150 Ksh</p>

                            <p>Verification Code : $paymentverification</p>
                            <span class=\"mdi mdi-truck-fast mdi-36px\"></span><p>$status</p>
                            
                            <a href=\"#cartcontents\" data-cart=\"$cartname\" class=\"btn btn-info btn-block view-cart-info\" role=\"button\">View More</a>
                        </div>
                      </div>
                    </div>
	";
	}
}

function checkWhetherCartBelongsToUser($conn, $cartname){
	// this will check whether the cart submitted belongs to the currently logged in user
	$currentUser = getUserID();
	$query = "SELECT * FROM `checkoutcarts` WHERE `customer_id` = '$currentUser' AND `cartname` = '$cartname'";
	$query_run = mysqli_query($conn, $query);
	if(mysqli_num_rows($query_run) == 1){
		// proceed
		return True;
	}else{
		// dont continue
		return False;
	}


}


function retrieveTransitDetailsPerCartUserProf($conn, $cartname){
	// this will return transit contents of given cartname
	// first confirm that the current user owns the cart
	if(checkWhetherCartBelongsToUser($conn, $cartname) == True){
		// continue
		$query = "SELECT * FROM `transitdbs` WHERE `cartname` = '$cartname'";
		$query_run = mysqli_query($conn, $query);
		$row = array();
		if(mysqli_num_rows($query_run) != 0){
			while($query_row = mysqli_fetch_assoc($query_run)){
			array_push($row, $query_row);
			}
			return $row;
		}else{
			return 0;
		}
	}else{
		die("You do not own this cart");
	}
}

function retrieveItemIdviaTransitItemid($conn, $itemid, $cartname){
	// itemid is actually the pickup id an item is assigned once its picked up and is only used in the pickupds table
	// so retrieve the cartcontent now
	$query = "SELECT * FROM `pickupds` WHERE `id` = '$itemid' AND `cart` = '$cartname'";
	$query_run = mysqli_query($conn, $query);
	if(mysqli_num_rows($query_run) != 0){
		// continue
		return mysqli_fetch_assoc($query_run);
	}else{
		return 0;
	}

}

function retrieveproductAllFieldsUserProf($conn, $table, $itemid){
	$query = "SELECT * FROM `$table` WHERE `id`='$itemid'";
	$query_run = mysqli_query($conn, $query);
	$query_num_rows = mysqli_num_rows($query_run);
	if($query_num_rows == 1){
		$query_row = mysqli_fetch_assoc($query_run);
		return $query_row;
	}else{
		return 0;
	}
}

function returnSubstrProdIdfromCompoundKey($compoundKey){
	return substr($compoundKey, 1);
}
	
function checkwhetherReturnExpired($itemdeliverytime){
	return checkIfAtleast_ThisTimeHasElapsed($itemdeliverytime, '1 days');
}

function retrieveCartstatsFromComDelivUserProf($conn, $cartname){
	// retrieve content from both the delivery - complete and incdelivery - incomplete cart delivery options
	$query = "SELECT * FROM `deliveries` WHERE `cartno` = '$cartname'";
	$query_run = mysqli_query($conn, $query);
	$row = array();
	if(mysqli_num_rows($query_run) != 0){
		// continue
		$row = mysqli_fetch_assoc($query_run);
		return $row;
	}else{
		return 0;
	}
}

function retrieveCartstatsFromIncompDelivUserProf($conn, $cartname){
	// retrieve content from both the delivery - complete and incdelivery - incomplete cart delivery options
	$query = "SELECT * FROM `incdelivery` WHERE `cartno` = '$cartname'";
	$query_run = mysqli_query($conn, $query);
	$row = array();
	if(mysqli_num_rows($query_run) != 0){
		// continue
		while($query_row = mysqli_fetch_assoc($query_run)){
			array_push($row, $query_row);
		}
		return $row;
	}else{
		return 0;
	}

}

function currentTimeUserProf(){
	return Date('Y-m-d H:i:s');
}

function checkIfAtleast_ThisTimeHasElapsedUserprof($dbtime, $timelapse){
	// this script checks whether $timelapse has passed compared to the current time yaani x time on the timepassed is 
	//compared to the current time
	// timelapse like 5 second -> '5 seconds'
	// $dbtime in -> 'Y-m-d H:i:s'
	$extended_db_time = timeDeltaExtendTime_return($dbtime, $timelapse, 'Y-m-d H:i:s');
	// this extends the database time by x timelapse
	// now compare this time to the current time...-> current time should be 
	// echo '<br>'.$extended_db_time.'<br>';
	if(currentTimeUserProf() > $extended_db_time){
		return True;
	}else{
		return False;
	}
}

function createNewReturnEntryByUser($conn, $productid, $cartname, $buyer, $reason, $details, $returnedOn, $pickupdate, $agenttrigger, $locationto, $locationFrom){
	// this will create a new return entry 
	$query = "INSERT INTO `returns` (`id`,`productid`,`cartname`,`buyer`,`reason`,`details`, `returnTo`, `returnFrom`,`returnedOn`,`exchdates`,`pickstat`,`triggerBy`,`agenttrigger`,`handler`, `flagged`, `flaggedBy`, `refundStat`, `flagreason`, `dstatus`) VALUES ('','$productid','$cartname','$buyer','$reason','$details', '$locationto', '$locationFrom','$returnedOn','','0','user','$agenttrigger','', '0', '0', '0', '', '0')";
	if($query_run = mysqli_query($conn, $query)){
		// success
		return True;
	}else{
		// did not run
		return False;
	}
}

function retrievecartsbasedonCartnameUserProf($conn, $cartname){
	// this will use the like functionality to return pending carts with similar verification codes
	$query = "SELECT * FROM `checkoutcarts` WHERE `cartname` LIKE '%$cartname%' AND `updated` = '1'";
	$query_run = mysqli_query($conn, $query);
	$row = array();
	if(mysqli_num_rows($query_run) != 0){
		while($query_row = mysqli_fetch_assoc($query_run)){
			array_push($row, $query_row);
		}
		return $row;
	}else{
		return 0;
	}
}

function retrieveProductFieldUserProf($conn, $table, $field, $itemid){
	$query = "SELECT `$field` FROM `$table` WHERE `id`='$itemid'";
	$query_run = mysqli_query($conn, $query);
	$query_num_rows = mysqli_num_rows($query_run);
	if($query_num_rows == 1){
		$query_row = mysqli_fetch_assoc($query_run);
		return $query_row[$field];
	}else{
		return 0;
	}
}

function getMerchantLocationViaIdUserProf($conn, $merchId){
	// note that this is minus the modification to the id
	// return the county-township if no gps coordinates found
	$query = "SELECT * FROM `merchants` WHERE `id` = '$merchId'";
	$query_run = mysqli_query($conn, $query);
	if(mysqli_num_rows($query_run) != 0){
		$row = mysqli_fetch_assoc($query_run);
		return $row;
	}else{
		return 0;
	}
}

function retrieveSoldValuesforCartUserProf($conn, $cart){
	$query = "SELECT * FROM `sold` WHERE `cartname`='$cart'";
	$query_run = mysqli_query($conn, $query);
	if(mysqli_num_rows($query_run) != 0){
		//continue
		return mysqli_fetch_assoc($query_run);
	}else{
		echo "nothing found in the cart";
	}
}

function returnImagePreAddrMtushUserProf(){
    $imageaddr = 'mtumbauploads/compresseduploads/';
    return $imageaddr;
}

function getUnUpdatedCartsUserProf($conn){
	// This will return all the incomplete carts not yet reflected on the pickup table
	$query = "SELECT * FROM `checkoutcarts` WHERE `pickupstat` = 'INCOMPLETE' AND `clear` = '1'";
	// only return carts that have already been cleared
	$query_run = mysqli_query($conn, $query);
	$query_num_rows = mysqli_num_rows($query_run);
	$row = array();
	if($query_num_rows != 0){
		//return the rows
		while($query_row = mysqli_fetch_assoc($query_run)){
			array_push($row, $query_row);
		}
		return $row;
	}else{
		// no incomplete carts found
		return 0;
	}
}

function checkWhetherItemIdExists($conn, $itemid){
	// this will just check whether the itemid row exists
	$user = getUserID();
	$query = "SELECT * FROM `wishlist` WHERE `prodid` = '$itemid'";
	$query_run = mysqli_query($conn, $query);
	if(mysqli_num_rows($query_run) == 1){
		// continue
		return mysqli_fetch_assoc($query_run);
	}else{
		return False;
	}
}

function createNewItemidWishlist($conn, $itemid){
	// thsi will create a new wishlist row...remember that it has to be accompanied by a user
	$user = getUserID();
	$now = currentTimeUserProf();
	$query = "INSERT INTO `wishlist` (`id`,`prodid`,`users`,`date`) VALUES ('','$itemid','$user','$now')";
	if($query_run = mysqli_query($conn, $query)){
		return True;
	}else{
		return False;
	}

}

function checkWhetherUserExistsinWishlist($conn, $wishlistArray){
	// this will recieve row details as an array and check for the user in the users
	$user = getUserID();
	$usersList = $wishlistArray['users'];
	$userArray = explode(',', $usersList);
		if(in_array($user, $userArray)){
			return True;
		}else{
			return False;
		}

}

function appendNewValueToCommaSeperatedDataUserProf($data, $newValue){
	$itemArray = explode(',', $data);
	array_push($itemArray, $newValue);
	return implode(',', $itemArray);
}

function updateWishlist($conn, $prodid, $newuserlist, $newdateslist){
	//this will add a new user and update this with the user time too
	$query = "UPDATE `wishlist` SET `users` = '$newuserlist', `date` = '$newdateslist' WHERE `prodid` = '$prodid'";
	if($query_run = mysqli_query($conn, $query)){
		return True;
	}else{
		return False;
	}

}

function returnallWishlistItems($conn){
	// this will return a list of all the wishlist rows
	$query = "SELECT * FROM `wishlist`";
	$query_run = mysqli_query($conn, $query);
	$row = array();
	if(mysqli_num_rows($query_run) != 0){
		//continue
		while($query_row = mysqli_fetch_assoc($query_run)){
			array_push($row, $query_row);
		}
		return $row;
	}else{
		return 0;
	}
}

function retrieveCartActivityDetail($conn, $prodid){
	//this will retrieve details from the cart activity for the logged in user id
	$query = "SELECT * FROM `cartactivity` WHERE `itemid` = '$prodid' AND `checked` = '0'";
	$query_run = mysqli_query($conn, $query);
	$row = mysqli_fetch_assoc($query_run);
	return $row;
}

function retrieveAutotestLastTime($conn, $test){
	//this will retrieve the last autotest time a test was run
	$query = "SELECT `time` FROM `autotest` WHERE `test` = '$test'";
	$query_run = mysqli_query($conn, $query);
	if(mysqli_num_rows($query_run) == 1){
		return mysqli_fetch_assoc($query_run)['time'];
	}else{
		return 0;
	}
}

function updateAutotestTime($conn, $test){
	// update the the autotest field with the current time
	$now = currentTimeUserProf();
	$query = "UPDATE `autotest` SET `time` = '$now' WHERE `test` = '$test'";
	if($query_run = mysqli_query($conn, $query)){
		return 	1;
	}else{
		return 0;
	}
}

function retrieveVerifiedVerificationCodes($conn, $field){
	// this will retrieve verification codes from cartverification logs
	// we should only compare carts against verified codes...else they could just as well exist if entered randomly by a twat
	$query = "SELECT `$field` FROM `cartverificationlogs`";
	$query_run = mysqli_query($conn, $query);
	$verifcodes = array();
	if(mysqli_num_rows($query_run) != 0){
		while($row = mysqli_fetch_assoc($query_run)[$field]){
			array_push($verifcodes, $row);
		}
		return $verifcodes;
	}else{
		return 0;
	}
}

function retrieveUnclearedCarts($conn){
	//  this will retrieve uncleared carts just so that
	$query = "SELECT * FROM `checkoutcarts` WHERE `clear` = '0' ORDER BY `cartid` ASC";
	$query_run = mysqli_query($conn, $query);
	$carts = array();
	if(mysqli_num_rows($query_run) != 0){
		while($row = mysqli_fetch_assoc($query_run)){
			array_push($carts, $row);
		}
		return $carts;
	}else{
		return 0;
	}
}

function retrieveSingleCartBasedOnField($conn, $field, $fieldValue, $otherfield, $otherfieldVal){
	// this will retrieve a cart from checkout carts which meets a certain criteria
	$query = "SELECT * FROM `checkoutcarts` WHERE `$field` = '$fieldValue' AND `clear` = '0' ";
	$query_run = mysqli_query($conn, $query);
	if(mysqli_num_rows($query_run) == 1){
		$row = mysqli_fetch_assoc($query_run);
		return $row;
	}else{
		return 0;
	}
}

// flag carts when they are insufficient and all
function createNewTweakCartRecord($conn, $action, $cartname, $carttotal, $formerverif, $newverif){
	// this will create a new entry to the tweaked carts table to show the new changes made to them
	$today = currentTimeUserProf();
	$staff = getStaffID();
	$query = "INSERT INTO `modcarts`(`id`, `action`, `cartname`, `carttotal`, `formerverif`, `newverif`, `modedBy`, `modDate`) VALUES ('', '$action','$cartname', '$carttotal', '$formerverif', '$newverif', '$staff','$today')";
	if($query_run = mysqli_query($conn, $query)){
		return 1;
	}else{
		return 0;
	}

}

function updateCartRecordVerif($conn, $cartname, $newVerif){
	//this will update the checkout records verif sasa
	$query = "UPDATE `checkoutcarts` SET `paymentverification` = '$newVerif' WHERE `cartname` = '$cartname'";
	if($query_run = mysqli_query($conn, $query)){
		return 1;
	}else{
		return 0;
	}
}

function makeCartItemsAvailable($conn, $prodid){
	// this will make an item avaible after deleting a ghost cart
	$query = "UPDATE `products` SET `buyer` = '0', `availability` = '1', `sold` = '0' WHERE `id` = '$prodid'";
	if($query_run = mysqli_query($conn, $query)){
		return 1;
	}else{
		return 0;
	}
}

function removeItemsFromCartActivity($conn, $prodid){
	// this will remove unghosted item from cartactivity records
	$query = "DELETE FROM `cartactivity` WHERE `itemid` = '$prodid'";
	if($query_run = mysqli_query($conn, $query)){
		return 1;
	}else{
		return 0;
	}
}

function DelCheckoutCart($conn, $cartname, $clearState){
	// thsi will delete a checkoutcart via its id
	$query = "DELETE FROM `checkoutcarts` WHERE `cartname` = '$cartname' AND `clear` = '$clearState'";
	if($query_run = mysqli_query($conn, $query)){
		return 1;
	}else{
		return 0;
	} 
}

function retriveStaffFieldFromStaffUsername($conn, $username){
	// thiw will retreive user details for staff
	$query = "SELECT * FROM `Staff` WHERE `username` = '$username'";
	$query_run = mysqli_query($conn, $query);
	if(mysqli_num_rows($query_run) == 1){
		$userDetails = mysqli_fetch_assoc($query_run);
		$userDetails['password'] = '0';
		return $userDetails;
	}else{
		return 0;
	}
}

function retrieveHandlerUsernameFrompickupds($conn, $prodid){
	// this will return the pickup agent from pickupds
	// thsi users a compound id like M123
	$itemid = 'M'.$prodid;
	$query = "SELECT * FROM `pickupds` WHERE `item` = '$itemid'";
	$query_run = mysqli_query($conn, $query);
	if(mysqli_num_rows($query_run) == 1){
		return mysqli_fetch_assoc($query_run);
	}else{
		return 0;
	}
}
?>