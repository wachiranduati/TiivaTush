<?php
ob_start();
session_start();
require 'connect.php';
require 'utils/adminutils.php';

function updateInTransitLocation($conn, $currentLocation){
	// This script will enable the staff member currently in transit to update his location
	// By updating his location this should automatically update the location in items he currently holds
	$currentTime = currentTime();
	// so retrieve all the transit items currently in my possession
	// update the location, timestamp
	// appendNewValueToCommaSeperatedData($data, $newValue);
	$staffTiivaNick = getStaffName($conn);
	// retrieve all the items in transit
	$transitItems = queryAllitemsInTransit($conn);// this will die if nothing is in transit
	for($x = 0; $x < count($transitItems); $x++){
	    $handlers = $transitItems[$x]['handlers'];
	    // retrieve the final handler
	    $finalHandler = retrieveFinalItemInCommadString($handlers);
	    if($staffTiivaNick == $finalHandler){
	    	// continue
	    	// now we have all the items we currently have in transit
	    	// updated the location
	    	$exchlocs = $transitItems[$x]['exchlocs'];
	    	$exchdattimes = $transitItems[$x]['exchdattimes'];
	    	// append the new value to the location and time
	    	$newlocations appendNewValueToCommaSeperatedData($exchlocs, $currentLocation);// new location
	    	$newExchTimes appendNewValueToCommaSeperatedData($exchdattimes, $currentTime);// new times
	    	// The item id will be passed as the row filter specifying which row to update
	    	$itemid = $transitItems[$x]['itemid'];// remember this is the transit row unique id / primary key
	    	updateTransitLocationTime($conn, $newlocations, $newExchTimes, $transitid)

	    }else{
	    	// do nothing
	    }
	}

}
updateInTransitLocation($conn);

?>