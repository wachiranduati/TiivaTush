<?php
ob_start();
session_start();
require 'connect.php';
require 'utils/adminutils.php';
// Decided to rewrite the entire thing and make it more scalable
// i RECKON THIS SHOULD CONTROL THE ENTIRE IN TRANSIT THINGY ONCE AN ITEM HAS BEEN PICKED UP 
// f

function updatetransitdatabase($conn){
	// This script will retrieve all carts that have been picked up and move them to the transit db
	// use the autoloop to restric overloading the database...maybe 3 mins///for now 5 seconds
	// This script will retrieve all the updated carts
	// Then retrieve per cart id all the items in pickups where transupt is 0
	// retrieve cart delivery details from the sold table i.e. shiptype, checkout date, shipping destination
	// finally create new transitdbs entry to indicate that the item is now in transit
	// update the transupt to prevent looping again through the item
	$current_time_on_pickup_row_autotest = getAutotestTime($conn, 'transit');

	if(checkIfAtleast_ThisTimeHasElapsed($current_time_on_pickup_row_autotest, '5 seconds') == True){
		// atleast 5 seconds have elapsed
		// udpating this to be less server expensive non need to loop throught all the 
		// updated carts as this wont be scalable with time
		$row = retrieveAllPickedUpRows($conn);
		// print_r($row);
		$UniqueCarts = createAnArraySpecialItems($row);
		// This returns all the unique carts found in the pickupds
		// retrieve the sold data i.e. shiptype etc
		for($x = 0; $x < count($UniqueCarts); $x++){
			$currentCart = $UniqueCarts[$x];
			// retrieve cart details the sold thingy
			$cartContents = retrieveSoldValuesforCart($conn, $currentCart);
			// print_r($cartContents);
			$finalDestination = $cartContents['county'].'-'.$cartContents['area'];
			// echo $finalDestination;
			$shiptype = $cartContents['shipping'];
			// echo $shiptype;
			if($cartContents['shipping'] == 'free'){
				$extend = 5;
			}else{
				$extend = 3;
			}
			// echo $extend;
			// retrieve the cart item deadline
			$deadline = timeDeltaExtendTime_return($cartContents['date'], "$extend days", 'Y-m-d');
			// loop throuth the row ...if the cart name is similar
			// retrieve values....create the transit entry...then update the row transupt to 1
			
			for($y = 0; $y < count($row); $y++){
				// retrieve this current loops cartname
				$currentLoopCart = $row[$y]['cart'];
				if($currentLoopCart == $currentCart){
					// retrieve itemid for // transititemid
					$transititemid = $row[$y]['id'];
					// echo $transititemid;
					//retrieve pickup agent
					$pickupagent = $row[$y]['agent'];
					// echo $pickupagent;
					//retrieve initialtrnstime
					$initialtrnstime = $row[$y]['date'];
					// echo $initialtrnstime;
					// retrieve seller for the item in transit
					$modedseller = $row[$y]['seller']; // this is the + 21
					$normSeller = ceil($modedseller - 21);
					$merchdetails = getSpecificMerchantDetails($conn, $normSeller);
					// echo $normSeller;
					// print_r($merchdetails);
					$merchantLocation = $merchdetails['county'].'-'.$merchdetails['township'];
					// echo $merchantLocation;
					// create the new entry
					createTransitEntry($conn, $transititemid, $currentLoopCart, $merchantLocation, $merchantLocation, $pickupagent, $initialtrnstime, $finalDestination, $shiptype, $deadline);
					// update the item row now transup to 1
					updateTrnsuptPickupid($conn, $transititemid);
				}else{
					// do nothing
				}
			}

		}

	}else{
		echo "The transit update is very fresh no need to refresh";
	}

}

updatetransitdatabase($conn);
?>