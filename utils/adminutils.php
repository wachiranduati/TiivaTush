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
	$query = "SELECT * FROM `checkoutcarts` WHERE `updated` = $state AND `pickupstat` = 'INCOMPLETE'";
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
		die("There are no items in transit");
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
?>