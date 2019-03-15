<?php 
require 'displayutils.php';
require 'userutils.php';

function currentTime(){
	return Date('Y-m-d H:i:s');
}
// echo currentTime();
function checkIfAtleast_ThisTimeHasElapsed($dbtime, $timelapse){
	// this script checks whether $timelapse has passed compared to the current time yaani x time on the timepassed is 
	//compared to the current time
	// timelapse like 5 second -> '5 seconds'
	// $dbtime in -> 'Y-m-d H:i:s'
	$extended_db_time = timeDeltaExtendTime_return($dbtime, $timelapse, 'Y-m-d H:i:s');
	// this extends the database time by x timelapse
	// now compare this time to the current time...-> current time should be 
	// echo '<br>'.$extended_db_time.'<br>';
	if(currentTime() > $extended_db_time){
		return True;
	}else{
		return False;
	}
}
// echo checkIfAtleast_ThisTimeHasElapsed('2019-02-11 16:34:00', '1 minutes');

function getAutotestTime($conn, $field){
	// this willl retrieve the time from the autotest table
	$query = "SELECT `time` FROM `autotest` WHERE `test` = '$field'";
	$query_run = mysqli_query($conn, $query);
	$query_row = mysqli_fetch_assoc($query_run);
	return $query_row['time'];
}

function getUnUpdatedCarts($conn, $state){
	// This will return all the incomplete carts not yet reflected on the pickup table
	$query = "SELECT * FROM `checkoutcarts` WHERE `updated` = $state AND `pickupstat` = 'INCOMPLETE' AND `clear` = '1'";
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

function retrieveProductField($conn, $table, $field, $itemid){
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

function retrieveproductAllFields($conn, $table, $itemid){
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

function createNewPickUpIdEntry($conn, $currentitem, $modseller, $currenttime, $cartname){
	$query = "INSERT INTO `pickupds` (`id`,`item`,`seller`,`time`,`cart`,`agent`,`otheragent`,`pickupmode`,`date`,`handoverperp`,`name`,`idnumber`,`paymentmode`,`sign`,`trnsupt`)
	VALUES ('','$currentitem','$modseller','$currenttime','$cartname','','','','','','','','','0','0')";
	if($query_run = mysqli_query($conn, $query)){
		// success
		echo "Entry created successfully";
	}else{
		die(mysqli_error($conn));
	}
}

function updateCheckoutCart($conn, $currentcart){
	$query = "UPDATE `checkoutcarts` SET `updated`='1' WHERE `cartid`= $currentcart AND `pickupstat`='INCOMPLETE' AND `updated`='0'";
	if(mysqli_query($conn, $query)){
		echo "sucess";
	}else{
		die(mysqli_error($conn));
	}
}

function updateAutotestField($conn, $field, $time){
	$query = "UPDATE `autotest` SET `time`='$time' WHERE `test`= '$field'";
	if(mysqli_query($conn, $query)){
		echo "success";
	}else{
		die(mysqli_error($conn));
	}
}

function retrieveAllPickedUpRows($conn){
	$query = "SELECT * FROM `pickupds` WHERE `sign`='1' AND `idnumber`!='0' AND `name`!='' AND `trnsupt`='0'";
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

function createAnArraySpecialItems($row){
	$Arraycontainer = array();
	// loop througth the array provided
	for($x = 0; $x < count($row); $x++){
		if(in_array($row[$x]['cart'],$Arraycontainer)){
     		// don't add cart
	    }else{
	      // add cart
	      array_push($Arraycontainer,$row[$x]['cart']);
	      
	    }
	}
	return $Arraycontainer;
}

function retrieveSoldValuesforCart($conn, $cart){
	$query = "SELECT * FROM `sold` WHERE `cartname`='$cart'";
	$query_run = mysqli_query($conn, $query);
	if(mysqli_num_rows($query_run) != 0){
		//continue
		return mysqli_fetch_assoc($query_run);
	}else{
		echo "nothing found in the cart";
	}
}

function createTransitEntry($conn, $transititemid, $cartnametdbs, $from, $to, $pickupagent, $initialtrnstime, $centredestination, $shiptype, $deadline){
	$query = "INSERT INTO `transitdbs` (`id`,`itemid`,`cartname`,`from`,`exchlocs`,`handlers`,`exchdattimes`,`exchcenters`,`centredestination`,`shiptype`,`deadline`,`dstatus`,`integrity`)
      VALUES ('','$transititemid','$cartnametdbs','$from','$to','$pickupagent','$initialtrnstime','$from','$centredestination','$shiptype','$deadline','','')";
    if($query_run = mysqli_query($conn, $query)){
    	echo "transit successfully created";
    }else{
    	die(mysqli_error($conn));
    }
}

function updateTrnsuptPickupid($conn, $transititemid){
	$query = "UPDATE `pickupds` SET `trnsupt`='1' WHERE `id`='$transititemid'";
	if($query_run = mysqli_query($conn, $query)){
		echo "successfully updated trsnsupt to 1";
	}else{
		die("error could not update trsupt to this item");
	}

}

function retrieveFinalItemInCommadString($commadString){
	$itemArray = explode(',', $commadString);
	$finalItemPosition = count($itemArray);
	return $itemArray[$finalItemPosition - 1];
	// minus one cause numbering starts at zero to total count minus 1
}

function queryAllitemsInTransit($conn){
	//retrieve all the items that are currently in transit
	$query = "SELECT * FROM `transitdbs` WHERE `dstatus` = 0";
	$query_run = mysqli_query($conn, $query);
	$transitItems = array();
	if(mysqli_num_rows($query_run) != 0){
		// continue
		while($query_row = mysqli_fetch_assoc($query_run)){
			array_push($transitItems, $query_row);
		}
		return $transitItems;
	}else{
		return 0;
	}

}

function queryAllitemsDelivered($conn){
	//retrieve all the items that are currently in transit
	$query = "SELECT * FROM `transitdbs` WHERE `dstatus` = '1'";
	$query_run = mysqli_query($conn, $query);
	$transitItems = array();
	if(mysqli_num_rows($query_run) != 0){
		// continue
		while($query_row = mysqli_fetch_assoc($query_run)){
			array_push($transitItems, $query_row);
		}
		return $transitItems;
	}else{
		return 0;
	}

}

function returnItemidShop($conn, $rowid){
	// this will return the complex item id that is the shop letter and the id combined
	$query = "SELECT `item` FROM `pickupds` WHERE `id`='$rowid'";
	$query_run = mysqli_query($conn, $query);
	if(mysqli_num_rows($query_run) == 1){
		$row = mysqli_fetch_assoc($query_run);
		return $row['item'];
	}
}

function appendNewValueToCommaSeperatedData($data, $newValue){
	$itemArray = explode(',', $data);
	array_push($itemArray, $newValue);
	return implode(',', $itemArray);
}

function updateTransitLocationTime($conn, $newlocations, $newExchTimes, $transitid){
	// this is triggered by the staff in transit location change inputing the new location to the system
	$query = "UPDATE `transitdbs` SET `exchlocs` = '$newlocations', `exchdattimes` = '$newExchTimes' WHERE `itemid` =  '$transitid'";
	if($query_run = mysqli_query($conn, $query)){
		// success
		echo "successfully updated the transit location";
	}else{
		die("could not update the transit and time location");
	}
}

function getTransitItemsDstatusPerCart($conn, $cartname, $dstatus){
	$query = "SELECT * FROM `transitdbs` WHERE `cartname`='$cartname' AND `dstatus`='$dstatus'";
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

function convertCommaSeperateStringIntoArray($commadString){
	$itemArray = explode(',', $commadString);
	return $itemArray;
}

function updateCheckOutCartToComplete($conn, $cartname){
	$query = "UPDATE `checkoutcarts` SET `pickupstat`='COMPLETE' WHERE `cartname`='$cartname'";
	if($query_run = mysqli_query($conn, $query)){
		// update successfull
		echo "successfully updated the carts to Complete";
	}else{
		// update not successfull
		echo "Ran into an error trying to update the checkout carts to complete";
	}

}
function retrieveTransitDetailsPerCart($conn, $cartname){
	// this function is used in conjection with the complete carts so it might look funky at first
	$query = "SELECT * FROM `transitdbs` WHERE `cartname` = '$cartname'";
	$query_run = mysqli_query($conn, $query);
	if(mysqli_num_rows($query_run) != 0){
		return mysqli_fetch_assoc($query_run);
	}else{
		return 0;
	}
}

function getMerchantLocationViaId($conn, $merchId){
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

function getMerchantDetailsviaNatID($conn, $natID){
	$query = "SELECT * FROM `merchants` WHERE `idno` = '$natID'";
	$query_run = mysqli_query($conn, $query);
	if(mysqli_num_rows($query_run) != 0){
		$row = mysqli_fetch_assoc($query_run);
		return $row;
	}else{
		return 0;
	}
}

function updateActivateMerchant($conn, $gps, $natID){
	// this will update the merchant gps location and activate account
	$agent = getStaffName($conn);
	$query = "UPDATE `merchants` SET `gps` = '$gps', `activate` = '1', `agent` = '$agent' WHERE `idno` = '$natID'";
	if($query_run = mysqli_query($conn, $query)){
		echo "successfully updated";
	}else{
		die("could not update merch records");
	}
}

function retrieveallCartsBasedonClearing($conn, $clear, $status){
	// this will be used to retrieve cleared and non cleared carts depening on the argument passed
	// 1 for cleared 0 for not cleared
	$query = "SELECT * FROM `checkoutcarts` WHERE `clear` = '$clear' AND `pickupstat` = '$status' ORDER BY `cartid` ASC";
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

function retreiveCompleteAndIncompleteCarts($conn, $clear){
	// this will be used to retrieve cleared and non cleared carts depening on the argument passed
	// 1 for cleared 0 for not cleared
	$query = "SELECT * FROM `checkoutcarts` WHERE `clear` = '$clear' ORDER BY `cartid` ASC";
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

function retrieveCartsBasedOnVerification($conn, $verificationCode, $status, $clear){
	// this will use the like functionality to return pending carts with similar verification codes
	$query = "SELECT * FROM `checkoutcarts` WHERE `paymentverification` LIKE '%$verificationCode%' AND `pickupstat` = '$status' AND `clear` = '$clear'";
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

function clearOrUnclearCart($conn, $cartname, $clear){
	// this will update the value of checkout cart to 1 or 0 implying a verification or lack of 
	$query = "UPDATE `checkoutcarts` SET `clear` = '$clear' WHERE `cartname` = '$cartname'";
	if($query_run = mysqli_query($conn, $query)){
		return "validation successfull";
	}else{
		return "Error validating";
		// echo mysqli_error($conn);
	}


}

function logCartVerifications($conn, $cartname, $verificationCode){
	// this will always run before the clear or unclear to ensure that the verification code
	// has been logged and made unique
	$now = currentTime();
	$verifiedby = getStaffName($conn);
	$query = "INSERT INTO `cartverificationlogs` (`id`, `cartname`, `verifiedby`, `verificationCode`, `verifiedon`) VALUES ('', '$cartname', '$verifiedby', '$verificationCode', '$now')";
	if($query_run = mysqli_query($conn, $query)){
		// successfully run
		return 1;
	}else{
		return 0;
	}
}

function retrieveVerificationCartDetails($conn, $transactioncode){
	// this will retrieve the cart verification details via the transaction code
	$query = "SELECT * FROM `cartverificationlogs` WHERE `verificationcode` = '$transactioncode'";
	$query_run = mysqli_query($conn, $query);
	if(mysqli_num_rows($query_run) != 0){
		$row = mysqli_fetch_assoc($query_run);
		return $row;
	}else{
		return 0;
	}
}

function retrieveCartsBasedOnVerificationBothCompandIncomplete($conn, $verificationCode, $clear){
	// this will use the like functionality to return pending carts with similar verification codes
	// thsi will return both complete and incomplete carts
	$query = "SELECT * FROM `checkoutcarts` WHERE `paymentverification` LIKE '%$verificationCode%' AND `clear` = '$clear'";
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

function deleteCartVerificationLog($conn, $verificationcode){
	// thsi will delete a row entry with the unique verifiacation code provided
	$query = "DELETE FROM `cartverificationlogs` WHERE `verificationcode` = '$verificationcode'";
	if($query_run = mysqli_query($conn, $query)){
		return 1;
	}else{
		return 0;
	}
}

function retrieveSingleCartsContents($conn, $cartname){
	// this will return the itemids of transit items belonging to the cart
	// a combination of cartname and item id will be used as item trackers on the packaging..
	// eg k33lk-142
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
}

function loopArrayRetrieveItemids($rows, $item){
	$emptyString = '';
	for($x =0; $x < count($rows); $x++){
		$emptyString.= '#'.$rows[$x][$item];
		// $emptyString = $rows[$x][$item].'-';
	}
	return chop($emptyString, '#');
}

function retrievecartsbasedonCartname($conn, $cartname){
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

function checkWhetherCartisCompleteDelivery($conn, $table, $cartname){
	// this will return true or false on whether the cartname was delivered as a complete delivery
	$query = "SELECT `id` FROM `$table` WHERE `cartno` = '$cartname'";
	$query_run = mysqli_query($conn, $query);
	if(mysqli_num_rows($query_run) != 0){
		return True;
	}else{
		return False;
	}

}

function retrieveCartstatsFromComDeliv($conn, $cartname){
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

function retrieveCartstatsFromIncompDeliv($conn, $cartname){
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

function retrieveIncDeliverySingleRecord($conn, $itemid, $cartname){
	// retrieve a sigle record from teh incdelivery via its itemid note the item id the transitdb id
	$query = "SELECT * FROM `incdelivery` WHERE `cartno` = '$cartname' AND `itemid` = '$itemid'";
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

function createNewReturnEntryByAgent($conn, $productid, $cartname, $buyer, $reason, $details, $returnedOn, $pickupdate, $agenttrigger, $locationto, $locationFrom){
	// this will create a new return entry 
	$query = "INSERT INTO `returns` (`id`,`productid`,`cartname`,`buyer`,`reason`,`details`, `returnTo`, `returnFrom`,`returnedOn`,`exchdates`,`pickstat`,`triggerBy`,`agenttrigger`,`handler`, `flagged`, `flaggedBy`, `refundStat`, `flagreason`, `dstatus`) VALUES ('','$productid','$cartname','$buyer','$reason','$details', '$locationto', '$locationFrom','$returnedOn','','0','agent','$agenttrigger','', '0', '0', '0', '', '0')";
	if($query_run = mysqli_query($conn, $query)){
		// success
		return True;
	}else{
		// did not run
		return False;
	}
}

function retrieveReturns($conn, $status){
	// retrieve active returns
	$query = "SELECT * FROM `returns` WHERE `dstatus` = '$status'";
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

function checkWhertherPaymentRecordExists($conn, $prodid){
	// this will chekc whether an item id exists in the payment record
	// the record simply means that the particular item's uploader was paid if it exists
	$query = "SELECT * FROM `deliveranpaidfor` WHERE `prodid` = '$prodid'";
	$query_run = mysqli_query($conn, $query);
	if(mysqli_num_rows($query_run) == 1){
		return True;
	}else{
		return False;
	}
}

function getMerchantDetailsViaID($conn, $merchid){
// retreive merchant details via their merchant id
$user = $_SESSION['$user_id'];
$query = "SELECT * FROM `merchants` WHERE `userid`='$merchid'";
$query_run = mysqli_query($conn, $query);
$query_row = mysqli_num_rows($query_run);
if($query_row == 1){
	$row = mysqli_fetch_assoc($query_run);
	return $row;
}else{
	return False;
}
}

function checkwhetheritemisOnReturnList($conn, $productid){
	// this will use the returns database to check and see whether item id is there marked for return
	$query = "SELECT * FROM `returns` WHERE `productid` = '$productid'";
	$query_run = mysqli_query($conn, $query);
	if(mysqli_num_rows($query_run) == 1){
		// found so item was or is being returned
		return True;
	}else{
		// item not returned
		return False;
	}
}

function checkStaffFieldAlreadyExists($conn, $field, $Fvalue){
	// check whether Staff field already exists
	$query = "SELECT `$field` FROM `staff` WHERE `$field` = '$Fvalue'";
	$query_run = mysqli_query($conn, $query);
	if(mysqli_num_rows($query_run) == 0){
		return 1;//field is available
	}else{
		return 0;// field is alrady taken
	}
}

function checkUserFieldExists($conn, $field, $value){
	// check whether user field exists
	if($field != 'password'){
		$query = "SELECT `$field` FROM `users` WHERE `$field` = '$value'";
		$query_run = mysqli_query($conn, $query);
		if(mysqli_num_rows($query_run) == 1){
			// unique user field found
			return 1;
		}else{
			return 0;
		}
	}else{
		return 0;
	}
}

function retrieveUserDetialfromField($conn, $field, $retField, $uniqueval){
	// retrieve field from user using unique field
	$query = "SELECT `$retField` FROM `users` WHERE `$field` = '$uniqueval'";
	$query_run = mysqli_query($conn, $query);
	if(mysqli_num_rows($query_run) == 1){
		return mysqli_fetch_assoc($query_run)[$retField];
	}else{
		return 0;
	}
}


function createNewStaffer($conn, $fullnames, $username, $nickname, $password, $center, $userid, $ppic){
	// thsi will create a new staff row
	$query = "INSERT INTO `staff`(`id`, `fullnames`, `username`, `password`, `tiivanick`, `ips`, `tiivacenter`, `userid`, `profileimage`) VALUES ('', '$fullnames','$username','$password','$nickname','0','$center','$userid', '$ppic')";
	if($query_run = mysqli_query($conn, $query)){
		return 1;
	}else{
		return 0;
	}

}
?>