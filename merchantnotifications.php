<?php 
session_start();
require 'connect.php';
require 'utils/adminutils.php';
require 'utils/merchantutils.php';
//this is a notifications bar for merchnants alone
//this will only check for sales made
// this will categorise the info on a date by date basis kinda like telegram
// messages will have different styling...like returns will have a red theme
// sales will have a green theme
// pickups will have a blue theme
// categories teh messsages into tabs with returns...pickups...deliveries...sales
// notifications will be added to a notifications table
if(isUserMerchant($conn) != True){
	redirectAndDie();
}

function createNewNotifEntry($conn, $prodid, $status, $itemtitle, $sellerid, $image, $price, $date, $viewed){
	//This will create a new entry inot the merhcnat notifications table
	$query = "INSERT INTO `merchnotifs` (`id`, `prodid`, `status`, `itemtitle`, `image`, `price`, `sellerid`, `date`, `viewed`) VALUES (NULL, '$prodid', '$status', '$itemtitle', '$image', '$price', '$sellerid', '$date', '$viewed')";
	if($query_run = mysqli_query($conn, $query)){
		//continue
		return 1;
	}else{
		return 0;
	}

}

function checkWhetherREcordalreadyExists($conn, $prodid, $status){
	// this will check whether a record exists as per the item id and the status
	$query = "SELECT * FROM `merchnotifs` WHERE `prodid` = '$prodid' AND `status` = '$status'";
	$query_run = mysqli_query($conn, $query);
	if(mysqli_num_rows($query_run) != 0){
		//it already exists...do not add
		return 1;
	}else{
		// add a new entry...it does not exist
		return 0;
	}
}

function updateAllSalesNotifs($conn){
	$imagepre = returnImagePreAddrMtushUserProf();
	$status = "SOLD";
	// thsi will be a cron job updating all the new notifications on the site
	// this should show items that have been sold but are not yet in transit..i.e not yet pickeup
	// checked translates to sold....
	// retrieve all the incomplete carts
	// check their contents against our sellers id
	// also ensure that the item has not been picked up else itll appear twice..not in pickedup
	
	$carts = getUnUpdatedCartsUserProf($conn);
	if($carts != 0){
			// continue
		$FreshlySold = retrieveCartContentsFromCarts($conn, $carts);// items that have been sold but yet to be picked
			// now loop to find those that belong to this merchant
			// print_r($FreshlySold);
			if(count($FreshlySold) != 0){
					for($x = 0; $x < count($FreshlySold); $x++){
						$item = $FreshlySold[$x];
						// we opted to go with everyones sales instead so that someone viewing their's will pop all the necessary notifications for sales
						// first check whether the item has already been aded
						$notifAlreadyExists = checkWhetherREcordalreadyExists($conn, $item, $status);
						if($notifAlreadyExists == 0){
							//continue
							$productDetails = retrieveproductAllFields($conn, 'products', $item);
							$date = currentTime();
							$viewed = 0;
							$productName = $productDetails['itemtitle'];
		    				$image = $imagepre.''.$productDetails['imageone'];
		    				$price = $productDetails['price'];
		    				$sellerid = $productDetails['sellerid'];
		    				$creationStat = createNewNotifEntry($conn, $item, $status, $productName, $sellerid, $image, $price, $date, $viewed);
		    				if($creationStat == 0){
		    					echo "error";
		    				}
						}else{
							// echo "already exists";
						}
							
					}
						}
			}else{
				// cart empty
			}
	
}

// updateAllSalesNotifs($conn);

function updateAllTransitNotifs($conn){
	//thsi will retrieve all the items that are in transit and update the records in the notifs table
	$imagepre = returnImagePreAddrMtushUserProf();
	$merchant = getMerchantId($conn);
	$status = "TRANSIT";

	// this should show all the items in transit begonging to this merchant
	// remember transit id is the pickup id
	$transitItems = queryAllitemsInTransit($conn);
	// loop throught the item ids to retrieve the itemid and then figure out if item belongs to merchant
	
	if($transitItems != 0){
		// continue
		if(count($transitItems) != 0){
			// continue
			$numb = 0;
			for($x = 0; $x < count($transitItems); $x++){
				// retrieve itemid
				$itemid = $transitItems[$x]['itemid'];
				$exchlocations = $transitItems[$x]['exchlocs'];
				$lastlocation = retrieveFinalItemInCommadString($exchlocations);

				$exchtime = $transitItems[$x]['exchdattimes'];
				$lasttime = retrieveFinalItemInCommadString($exchtime);

				$centredesti = $transitItems[$x]['centredestination'];

				$compoundProductId = returnItemidShop($conn, $itemid);
				$actualProdId = substr($compoundProductId, 1);
				//check whether the item already exists as a notification
				$notifAlreadyExists = checkWhetherREcordalreadyExists($conn, $actualProdId, $status);
				if($notifAlreadyExists == 0){
					$productDetails = retrieveproductAllFields($conn, 'products', $actualProdId);
				
					$idforcurrentprod = $productDetails['id'];
					$date = currentTime();
					$viewed = 0;
					$productName = $productDetails['itemtitle'];
					$image = $imagepre.''.$productDetails['imageone'];
    				$sellerid = $productDetails['sellerid'];
    				$price = $productDetails['price'];
    				$creationStat = createNewNotifEntry($conn, $actualProdId, $status, $productName, $sellerid, $image, $price, $date, $viewed);
	    				if($creationStat == 0){
	    					echo "error";
	    				}
				}else{
					// echo "record already exists";
				}
			}
		}else{
			// no transit itesm found
		}
	}else{
		// no items in transit
	}
	
}

// updateAllTransitNotifs($conn);

function updateAllDeliveryNotifs($conn){
	//this will collect all product deliveries ever made and create notifications of the new deliveries
	// thsi should hshow all items that have been delivered and belongs to me
	// we'll use the transit code since everthing is literally similar
	$status = "DELIVERY";

	$imagepre = returnImagePreAddrMtushUserProf();
	// this should show all the items in transit begonging to this merchant
	// remember transit id is the pickup id
	$transitItems = queryAllitemsDelivered($conn);
	// loop throught the item ids to retrieve the itemid and then figure out if item belongs to merchant
	
	if($transitItems != 0){
		// continue
		if(count($transitItems) != 0){
			// continue
			$numb = 0;
			for($x = 0; $x < count($transitItems); $x++){
				// retrieve itemid
				$itemid = $transitItems[$x]['itemid'];
				$compoundProductId = returnItemidShop($conn, $itemid);
				$actualProdId = substr($compoundProductId, 1);
				// check whether this notification already exists
				$notifAlreadyExists = checkWhetherREcordalreadyExists($conn, $actualProdId, $status);
				if($notifAlreadyExists == 0){
					$productDetails = retrieveproductAllFields($conn, 'products', $actualProdId);
				
					// continue
					$date = currentTime();
					$viewed = 0;
					$productName = $productDetails['itemtitle'];
					$image = $imagepre.''.$productDetails['imageone'];
					$category = $productDetails['category'];
					$subcategory = $productDetails['subcategory'];
					$sellerid = $productDetails['sellerid'];
					$price = $productDetails['price'];

					$creationStat = createNewNotifEntry($conn, $actualProdId, $status, $productName, $sellerid, $image, $price, $date, $viewed);
	    				if($creationStat == 0){
	    					echo "error";
	    				}
				}else{
					//notification already exists
				}
			}
		}else{
			// no delivery itesm found
		}
	}else{
		// no items in delivered
	}
	
}

// updateAllDeliveryNotifs($conn);

function updateAllReturnNotifs($conn){
	// this will return all the return requests made in time
	$status = "RETURN";

	// thsi will return all the items currently in the returns panel
	// this will check the return table
	$imagepre = returnImagePreAddrMtushUserProf();
	$allreturns = retrieveReturns($conn, 0);
	
	if($allreturns != 0){
		// continue
		if(count($allreturns) != 0){
			// continue
			$numb = 0;
			// loop to retrieve the product id
			for($x = 0; $x < count($allreturns); $x++){
				$productid = $allreturns[$x]['productid'];
				// check whether notification has already been logged
				$notifAlreadyExists = checkWhetherREcordalreadyExists($conn, $productid, $status);
				if($notifAlreadyExists == 0){
					//create notif
					$productContent = retrieveproductAllFields($conn, 'products', $productid);
					$date = currentTime();
					$viewed = 0;
					$productName = $productContent['itemtitle'];
					$image = $imagepre.''.$productContent['imageone'];
					$sellerid = $productContent['sellerid'];
					$price = $productContent['price'];
					$creationStat = createNewNotifEntry($conn, $productid, $status, $productName, $sellerid, $image, $price, $date, $viewed);
	    				if($creationStat == 0){
	    					echo "error";
	    				}
				}else{
					//already exists
				}
			}
		}else{	
			// no returns found
		}
	}else{
		// no returns found
	}
	
}

// updateAllReturnNotifs($conn);

// we wont make this a cronjob as it needs to run much more frequently....this will be activated by the merchants themselves...the more times they run this the more updated it is

if(isset($_POST['update']) && $_POST['update'] == 'lsekw89s8d'){
	$lastRan = retrieveAutotestLastTime($conn, 'merchnotif');
	if(checkIfAtleast_ThisTimeHasElapsed($lastRan, '10 seconds') == True){
		//run all the codes 
		updateAllSalesNotifs($conn);
		updateAllReturnNotifs($conn);
		updateAllTransitNotifs($conn);
		updateAllDeliveryNotifs($conn);
		//update the time now
		if(updateAutotestTime($conn, 'merchnotif') == 1){
			echo "notifications updated";
		}

	}else{
		echo "time has not elapsed";
	}
}

?>