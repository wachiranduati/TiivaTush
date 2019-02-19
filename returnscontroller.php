<?php
ob_start();
session_start();
require 'connect.php';
require 'utils/adminutils.php';

// QUICK QUESTION.....ARE WE RETRIEVING ALL ITEMS OR ONY THE ONES THAT HAVE BEEN CLEARED?
// WE SHOULD JUST CHECK FOR DELIVERY..ONCE UPDATED CLEARED THEN WE CAN USE IT THEN AND THERE

if(isStaffLoggedIn() != True){
	redirectAndDie();
}


function returnAllMatchingCarts($conn, $cart){
	// this will return all the possible carts for the user
	// criterias included is it has to be an updated cart and also has to be cleared<--NOTE
	$Matchcarts = retrievecartsbasedonCartname($conn, $cart);
	if($Matchcarts != 0){
		echo "
			<table class=\"table table-responsive table-hover\">
			
			<tbody>
		";
		for($x = 0; $x < count($Matchcarts); $x++){
			$cartname = $Matchcarts[$x]['cartname'];
			$customer = $Matchcarts[$x]['customer_id'];
			echo "
				<tr class=\"cart_rows\" data-cart=\"$cartname\">
					<td>$cartname</td>
					<td>click on your cart</td>
				</tr>
			";
		}
		echo "
					</tbody>
		</table>
		";
	}else{
		showHeaderMessage('h3', 'No matches found');
	}

}

function returnCartContent($conn, $cartname){
	// this will return the cart content but only after making some checks.
	// it will check the complete carts first for deliveries made
	// if not it will check the incomplete carts made
	// then it will check whether the 1 day report period has already passed
	// if item passes all checks then its content will be returned
	$compl = checkWhetherCartisCompleteDelivery($conn, 'deliveries', $cartname);
	// reason for checking complete and incomplete is to check the time....since complete delv has one time
	// incomplete delv has multiple times and hence return times are different for each item
	$incompl = checkWhetherCartisCompleteDelivery($conn, 'incdelivery', $cartname);
	$imageaddr = 'mtumbauploads/compresseduploads/';

	echo "
			<table class=\"table table-responsive table-striped\">
			<thead>
				<tr>
					<th></th>
				</tr>
			</thead>
			<tbody>
		";
	if($compl == True){
		// complete delivery
		echo "
				<tr class=\"info\">
			<td colspan=\"5\">$cartname delivered as an complete cart</td>
				</tr>
			";
		$completeCartContent = retrieveCartstatsFromComDeliv($conn, $cartname);
		// print_r($completeCartContent);
		// check whether content is still valid- 1 day
		$cartdeliverytm = $completeCartContent['date'];
		
		if(checkIfAtleast_ThisTimeHasElapsed($cartdeliverytm, '1 days') == True){
			// the cart has already expired
			$cartexpiryret = timeDeltaExtendTimeReturn($cartdeliverytm, '1 day', 'Y-m-d H:i:s');
			echo "
				<tr class=\"danger\">
			<td>sorry cart [$cartname] return period expired on $cartexpiryret</td>
				</tr>
			";
		}else{
			// we can show you the items
			// the return the items from this cart..get the items from transit belonging to the cart
			$cartitemsTransit = getTransitItemsDstatusPerCart($conn, $cartname, '1');
			// loop throught the items and then retrieve the item details from products
			for($crtItmsTr = 0; $crtItmsTr < count($cartitemsTransit); $crtItmsTr++){
				$item =  $cartitemsTransit[$crtItmsTr]['itemid'];// wrong id
				// retrieve the actual product id from pickupds ..the one used is a pickupds id
				$actualItem = retrieveItemIdviaTransitItemid($conn, $item, $cartname)['item'];
				$actualcartitemsdelivered = returnSubstrProdIdfromCompoundKey($actualItem);

				$productdetails = retrieveproductAllFields($conn, 'products', $actualcartitemsdelivered);// product fields
				// return the items now
				echo returnthesearchresultstable($productdetails, $imageaddr, $cartname);
				// function that returns all the results displayed as a table
			}

		}
		
	}elseif($incompl == True){
		// incomplete delivery
		echo "
				<tr class=\"info\">
			<td colspan=\"5\">$cartname delivered as an incomplete cart</td>
				</tr>
			";
		$incompleteCartsContent = retrieveCartstatsFromIncompDeliv($conn, $cartname);
		// print_r($incompleteCartsContent);
		// check whether content is still valid- 1 day
		for($x = 0; $x < count($incompleteCartsContent); $x++){
			$incompitemtm = $incompleteCartsContent[$x]['date'];
			$itemid = $incompleteCartsContent[$x]['id'];
			// retrieve product details
			$productdetails = retrieveproductAllFields($conn, 'products', $itemid);
			// return the items to be returned now...maybe the title or the item now
			$prodid = $productdetails['id'];
		    $category = $productdetails['category'];
		    $subcategory = $productdetails['subcategory'];
		    $size = $productdetails['size'];
		    $sex = $productdetails['sex'];
		    $label = $productdetails['label'];
		    $titles = substr($productdetails['itemtitle'],0,15);
		    $formatvat = number_format($productdetails['price']);
		    $titlesLarge = substr($productdetails['itemtitle'],0,35);

			if(checkIfAtleast_ThisTimeHasElapsed($incompitemtm, '1 days') == True){
				// item has already expired
				$cartexpiryret = timeDeltaExtendTimeReturn($incompitemtm, '1 day', 'Y-m-d H:i:s');
				echo "
			<tr class=\"danger\">
		        <td><a target=\"_blank\" href=\"productdetails.php?id=$prodid\"><img src=\"$imageaddr$productdetails[imageone]\" class=\"img-responsive\" Style=\"max-height:40px;\"/></a></td>
		        <td><p style=\"cursor:default;\" class=\"text-capitalize visible-lg visible-md\">$titlesLarge</p><p style=\"color:blue;cursor:default;\" class=\"text-capitalize visible-sm visible-xs\">$titles...</p></td>
		        <td>$category / $subcategory</td>
		        <td>$size / $sex / $label</td>
		        <td><span class=\"text-capitalize visible-lg visible-md\">$formatvat&nbsp;<p style=\"display:inline;\">Ksh</p></a></p><p class=\"text-capitalize visible-sm visible-xs\">$formatvat&nbsp; Ksh</a></span></td>
		        <td><a class=\"btn btn-danger btn-sm retbtnitem disabled\">Expired on $cartexpiryret</a></td>
	        </tr>
				";
			}else{
				// item yet to expire
				$cartexpiryret = timeDeltaExtendTimeReturn($incompitemtm, '1 day', 'Y-m-d H:i:s');
				echo "
			<tr>
		        <td><a target=\"_blank\" href=\"productdetails.php?id=$prodid\"><img src=\"$imageaddr$productdetails[imageone]\" class=\"img-responsive\" Style=\"max-height:40px;\"/></a></td>
		        <td><p style=\"cursor:default;\" class=\"text-capitalize visible-lg visible-md\">$titlesLarge</p><p style=\"color:blue;cursor:default;\" class=\"text-capitalize visible-sm visible-xs\">$titles...</p></td>
		        <td>$category / $subcategory</td>
		        <td>$size / $sex / $label</td>
		        <td><span class=\"text-capitalize visible-lg visible-md\">$formatvat&nbsp;<p style=\"display:inline;\">Ksh</p></a></p><p class=\"text-capitalize visible-sm visible-xs\">$formatvat&nbsp; Ksh</a></span></td>
		        <td><a class=\"btn btn-danger btn-sm retbtnitem\" data-prod=\"$prodid\" data-cart=\"$cartname\">Return me?</a></td>
	        </tr>
				";
			}

		}
	}else{
		echo "
			<tr>
				<td class=\"danger\">This cart is yet to be delivered</td>
			</tr>
		";
	}
	echo "
					</tbody>
		</table>
		";
}

function returnForm($conn, $itemid){
	//this will show the return form with item being returned,
	//reason etc
	$prelink = returnImagePreAddrMtush();
	$productdetails = retrieveproductAllFields($conn, 'products', $itemid);
		    $category = $productdetails['category'];
		    $subcategory = $productdetails['subcategory'];
		    $size = $productdetails['size'];
		    $sex = $productdetails['sex'];
		    $label = $productdetails['label'];
		    $title = $productdetails['itemtitle'];
		    $price = $productdetails['price'];
		    $imageone = $productdetails['imageone'];
		    $imagetwo = $productdetails['imagetwo'];
		    $imagethree = $productdetails['imagethree'];
	$staffname = getStaffName($conn);
	return "
	<div class=\"row\">
          <div class=\"col-lg-3\">
              <img src=\"$prelink$imageone\" class=\"img-responsive\">
          </div>
          <div class=\"col-lg-6\">
              <img src=\"$prelink$imagetwo\" class=\"img-responsive\">
          </div>
          <div class=\"col-lg-3\">
              <img src=\"$prelink$imagethree\" class=\"img-responsive\">
          </div>
      </div>
      <div class=\"row\">
          <div class=\"col-12\">
              <h4 class=\"text-center\">$title</h4>
              <p class=\"text-center\">Size: $size | Sex: $sex | Label: $label | Price: $price</p>
          </div>
      </div>
      <div class=\"row\">
          <div class=\"col-lg-12\">
                <label for=\"agent\">Agent Returning</label>
              <input class=\"form-control\" disabled type=\"text\" value=\"$staffname\">
              <label for=\"reasons\">Reasons for returning item</label>
              <select class=\"form-control reason\" name=\"reason\" id=\"reason\">
                <option value=\"size\">Incorrect Product Size Ordered</option>
                <option value=\"match\">Product Does Not Match Description on Website or in Catalog</option>
                <option value=\"expectations\">Product Did Not Meet Customer’s Expectations</option>
                <option value=\"product\">Company Shipped Wrong Product</option>
                <option value=\"interface\">Customer unfamiliar with retail interface</option>
              </select>
              <label for=\"reasonDetail\">Reason in detail</label>
              <textarea class=\"form-control\" name=\"reasonDetail\" rows=\"8\" maxlength=\"430\" id=\"reasonDetail\"></textarea>
              <div class=\"well\" style=\"color: red;margin-top: 2px;\">Notify the user that they're account is logged every time they make a return to prevent misuse of the feature and many unrealistic returns might result in disabling of the return feature in their account. <br><br>Also that a refund will be done after inspection of the item by us and the merchant to confirm that the item was in the state it was delivered in</div>
              <a class=\"btn-completereturn btn btn-block btn-primary btn-lg\" data-item=\"$itemid\">Finalize Return</a>
          </div>
      </div>
	";
}

// echo returnForm($conn, 5);

function returnItem($conn, $returnitem, $cartname, $reason, $reasonDetail){
	//this function will create a new entry to return an item
	// fields used are  id, productid, cartname, buyer, reason, details, retdates, pickupdate, pickstat, agenttrigger, agentretur, handler, >>from, destination, dstatus,  
	// pickstat will be used to check whether the item has been picked up
	// so we can now use this to return an item

	// check whether item has already been returned...proceed..made the prodid unique

	// create a new return entry
	// retrieve all items from the cartname
	$returnitemparentcart = retrievecartsbasedonCartname($conn, $cartname);
	$buyer = $returnitemparentcart[0]['customer_id'];
	$returnedOn = currentTime();
	$agenttrigger = getStaffID();
	// retrieve from from merchant
	// first retrieve seller from products
	$merchId = retrieveProductField($conn, 'products', 'sellerid', $returnitem);
	// use seller id to retrieve merchant location
	$seller = getMerchantLocationViaId($conn, $merchId);
	$locationto = $seller['county'].'-'.$seller['township'];
	//and destination from the deliveries
	// retieve details from sold then retrieve county and area
	$deliverydets = retrieveSoldValuesforCart($conn, $cartname);
	$locationFrom = $deliverydets['county'].'-'.$deliverydets['area'];



	$newreturnStat = createNewReturnEntryByAgent($conn, $returnitem, $cartname, $buyer, $reason, $reasonDetail, $returnedOn, 0, $agenttrigger, $locationto, $locationFrom);
	if($newreturnStat == True){
		//continue on
		echo "Item has successfully been marked for return";
	}else{
		echo "Item return record already exists";
	}

}

// echo returnitem($conn, 2, 'b8542423c8c1e79ced46b6ddf685c361', 'nothing', 'more and more');

function activereturns($conn){
	// this should show all the items that are currently been marked to be returned
	$returns = retrieveReturns($conn, 0);
	echo "<div class=\"table-responsive\">
			<table class=\"table table-responsive table-striped\">
			<thead>
				<tr>
					<th>No</th>
					<th>prodid</th>
					<th>reason</th>
					<th>ReturnTo</th>
					<th>ReturnFrom</th>
					<th>returnedOn</th>
					<th>exchdates</th>
					<th>pickstat</th>
					<th>agenttrigger</th>
					<th>handler</th>
					<th>refundStat</th>
				</tr>
			</thead>
			<tbody>
		";

	if($returns != 0){
		if(count($returns) != 0){
		for($x = 0; $x < count($returns); $x++){
			$prodid = $returns[$x]['productid'];
			$cartname = $returns[$x]['cartname'];
			$reason = $returns[$x]['reason'];
			$buyer = $returns[$x]['buyer'];
			$details = $returns[$x]['details'];
			$returnTo = $returns[$x]['returnTo'];
			$ReturnFrom = $returns[$x]['returnFrom'];
			$returnedOn = $returns[$x]['returnedOn'];
			$exchdates = $returns[$x]['exchdates'];
			$pickstat = $returns[$x]['pickstat'];
			$triggerBy = $returns[$x]['triggerBy'];
			$agenttrigger = $returns[$x]['agenttrigger'];
			$handler = $returns[$x]['handler'];
			$flagged = $returns[$x]['flagged'];
			$flaggedBy = $returns[$x]['flaggedBy'];
			$refundstat = $returns[$x]['refundstat'];
			$flagreason = $returns[$x]['flagreason'];
			$dstatus = $returns[$x]['dstatus'];


			$nom = $x+1;
			echo "
			<tr data-reason-detail=\"$details\" data-cart=\"$cartname\" data-status=\"$dstatus\" data-triggeredBy=\"$triggerBy\" data-flagged=\"flagged\" data-flagged-by=\"flaggedBy\" data-flagged-reason=\"flagreason\">
				<td>$nom</td>
				<td>$prodid</td>
				<td>$reason</td>
				<td>$returnTo</td>
				<td>$ReturnFrom</td>
				<td>$returnedOn</td>
				<td>$exchdates</td>
				<td>$pickstat</td>
				<td>$agenttrigger</td>
				<td>$handler</td>
				<td>$refundstat</td>
			</tr>
		";
		}
	}else{
		echo "
			<tr>
				<td class=\"danger\">No active returns found</td>
			</tr>
		";
	}
}else{
	echo "
			<tr>
				<td class=\"danger\">No active returns found</td>
			</tr>
		";
}

	echo "
					</tbody>
		</table></div>
		";
}

// echo activereturns($conn);

if(isset($_POST['cart']) && isset($_POST['show']) && $_POST['show'] == 'all' && !empty($_POST['cart'])){
	$userCart = mysqli_real_escape_string($conn, $_POST['cart']);
	returnAllMatchingCarts($conn, $userCart);
}elseif(isset($_POST['selectCart']) && !empty($_POST['selectCart'])){
	$selectCart = mysqli_real_escape_string($conn, $_POST['selectCart']);
	returnCartContent($conn, $selectCart);
}elseif(isset($_POST['returnForm']) && $_POST['returnForm'] == 'nilR54' && isset($_POST['returnitem']) && !empty($_POST['returnitem'])){
	$returnitem = mysqli_real_escape_string($conn, $_POST['returnitem']);
	echo returnForm($conn, $returnitem);
}elseif(isset($_POST['retcart']) && !empty($_POST['retcart']) && isset($_POST['finalizeitem']) && !empty($_POST['finalizeitem']) && isset($_POST['reasonDetail']) && !empty($_POST['reasonDetail']) && isset($_POST['reason']) && !empty($_POST['reason'])){
	$retcart = mysqli_escape_string($conn, $_POST['retcart']);
	$finalizeitem = mysqli_escape_string($conn, $_POST['finalizeitem']);
	$reason = mysqli_escape_string($conn, $_POST['reason']);
	$reasonDetail = mysqli_escape_string($conn, $_POST['reasonDetail']);
	returnitem($conn, $finalizeitem, $retcart, $reason, $reasonDetail);
}elseif(isset($_POST['activereturns']) && $_POST['activereturns'] == 'pending4U4k'){
	activereturns($conn);
}

?>	

	
		
	