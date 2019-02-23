<?php
session_start(); 
require 'connect.php';
require 'utils/userutils.php';
require 'utils/displayutils.php';

if(userLoggedIn() != True){
	redirectAndDie();
}
// this should return all functionalities related to the user profile obvious enought a user should be logged in to be 
// able to use this
function showUserCarts($conn){
	$row = showUserCartHistory($conn);
	echo "<h3 class=\"text-center text-capitalize\">My carts</h3>";
	if($row != 0){
		returncartcardslooped($conn, $row);
	}else{
		echo "<h5 class=\"text-center\">You currently don't have any carts<h5>";
	}
}
// showUserCarts($conn);

function showCartDetails($conn, $cart){
	$transitdetailsArray = retrieveTransitDetailsPerCartUserProf($conn, $cart);
	if($transitdetailsArray != 0){
		// show records
		echo "
					<div class=\"table-responsive\">
					<h4 class=\"text-center\">CARTCONTENTS FOR: $cart</h4>
		<table class=\"table table-responsive table-inverse\">
			<thead>
				<tr>
					<th>No</th>
					<th>item</th>
					<th>item</th>
					<th>shippedFrom</th>
					<th>shippingTo</th>
					<th>LastLocation</th>
					<th>LastLogged</th>
					<th>status</th>
					<th>delivery</th>
					<th>return</th>
				</tr>
			</thead>
			<tbody>
		";
		// print_r($transitdetailsArray);
				$expired = '';
		for($x = 0; $x < count($transitdetailsArray); $x++){
			$position = $x + 1;
			$item = $transitdetailsArray[$x]['itemid'];
			$incid = $transitdetailsArray[$x]['id'];//retrieve the transit id to use on line 81
			$actualItem = retrieveItemIdviaTransitItemid($conn, $item, $cart)['item'];
			$actualItem = returnSubstrProdIdfromCompoundKey($actualItem);
			$productdetails = retrieveproductAllFieldsUserProf($conn, 'products', $actualItem);

			$itemtitle = $productdetails['itemtitle'];
			$imageone = $productdetails['imageone'];
			$image = returnImagePreAddrMtush().''.$imageone;

			$shippingFrom = $transitdetailsArray[$x]['from'];
			$shippingTo = $transitdetailsArray[$x]['centredestination'];
			$LastLocation = $transitdetailsArray[$x]['exchlocs'];
			$lastCheckedAt = retrieveFinalItemInCommadStringUsersProf($LastLocation);

			$when = $transitdetailsArray[$x]['exchdattimes'];
			$status = $transitdetailsArray[$x]['dstatus'];
			if($status == 1){
				$status = "DELIVERED";
			}else{
				$status = "InTransit";
			}

			if(checkwhetherCompDeliveryExist($conn, $cart) == True){
				// this is a complete cart delivered
				// retrieve delivery time
				$delivtime = retrieveCartstatsFromComDelivUserProf($conn, $cart)['date'];
			}elseif(checkforincompCartsdelv($conn, $cart) == True){
				// thsi is an incomplete cart
				// retrieve delivery time
				// $delivtime = retrieveCartstatsFromIncompDelivUserProf($conn, $cart)[0]['date'];
				$delivtime = returnFromIncompDelivSingleRow($conn, $incid, $cart)['date'];
			}else{
				// die("something's wrong");
				$delivtime = 0;
				$expired = "N/A";
			}

			if($delivtime != 0){
				// deliv was set to zero since incomplete carts were also trying to show delivery time yet they've
				// not yet been delivered
				if(checkIfAtleast_ThisTimeHasElapsedUserprof($delivtime, '1 days') == True){
					$expired = "EXPIRED";
				}else{
					$expired = "<a class=\"btn btn-warning btn-sm retUserBtn\" href=\"#returnContainer\" data-ret-cart=\"$cart\" data-ret-item=\"$actualItem\">Return?</a>";
				}
			}

			echo "
				<tr>
					<td>$position</td>
					<td><a target=\"_blank\" href=\"productdetails.php?id=$actualItem\"><img src=\"$image\" class=\"img-responsive\" Style=\"max-height:40px;\"/></a></td>
					<td><a href=\"productdetails.php?id=$actualItem\">$itemtitle</a></td>
					<td>$shippingFrom</td>
					<td>$shippingTo</td>
					<td>$lastCheckedAt</td>
					<td>$when</td>
					<td>$status</td>
					<td>$delivtime</td>
					<td>$expired</td>
				</tr>
			";
		}
		echo "
					</tbody>
		</table>
		</div>
		";
	}else{
		echo "<h5 class=\"text-center\">Cart is currently in que to verification<h5>";
	}
}
// showCartDetails($conn, 'b8542423c8c1e79ced46b6ddf685c361');

function returnForm($conn, $itemid){
	//this will show the return form with item being returned,
	// use cartavitity to proove that current user owns this item| no need to validate..only form being shown
	//reason etc
	$prelink = returnImagePreAddrMtush();
	$productdetails = retrieveproductAllFieldsUserProf($conn, 'products', $itemid);
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
	return "
	<div class=\"row\">
				<h4 class=\"text-center text-uppercase\">Product Return Form</h4>
          <div class=\"col-lg-3 col-md-3 col-sm-4 col-xs-4\">
              <img src=\"$prelink$imageone\" class=\"img-responsive\">
          </div>
          <div class=\"col-lg-6 col-md-6 col-sm-4 col-xs-4\">
              <img src=\"$prelink$imagetwo\" class=\"img-responsive\">
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-4 col-xs-4\">
              <img src=\"$prelink$imagethree\" class=\"img-responsive\">
          </div>
      </div>
      <div class=\"row\">
          <div class=\"col-12\">
              <h4 class=\"text-center\">$title</h4>
              <p class=\"text-center\">Size: $size | Sex: $sex | Label: $label | Price: $price Ksh</p>
          </div>
      </div>
      <div class=\"row\">
          <div class=\"col-lg-12\">
                
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
              <div class=\"well\" style=\"color: red;margin-top: 2px;\">We encourage our users to make legitimate returns, but should the feature be misused, then the feature is disabled for that account.<br><br>
              Lastly note that a refund will be made only after the item has successfully passed inspection by the receiving tiiva center and the merchant.</div>
              <a class=\"btn-usercompleteReturn btn btn-block btn-primary btn-lg\" data-item=\"$itemid\">Finalize Return</a>
          </div>
      </div>
	";
}

function returnItem($conn, $returnitem, $cartname, $reason, $reasonDetail){
	//this function will create a new entry to return an item
	// fields used are  id, productid, cartname, buyer, reason, details, retdates, pickupdate, pickstat, agenttrigger, agentretur, handler, >>from, destination, dstatus,  
	// pickstat will be used to check whether the item has been picked up
	// so we can now use this to return an item

	// check whether item has already been returned...proceed..made the prodid unique

	// create a new return entry
	// retrieve all items from the cartname
	$returnitemparentcart = retrievecartsbasedonCartnameUserProf($conn, $cartname);
	$buyer = $returnitemparentcart[0]['customer_id'];
	$returnedOn = currentTimeUserProf();
	$agenttrigger = getUserID();
	// retrieve from from merchant
	// first retrieve seller from products
	$merchId = retrieveProductFieldUserProf($conn, 'products', 'sellerid', $returnitem);
	// use seller id to retrieve merchant location
	$seller = getMerchantLocationViaIdUserProf($conn, $merchId);
	$locationto = $seller['county'].'-'.$seller['township'];
	//and destination from the deliveries
	// retieve details from sold then retrieve county and area
	$deliverydets = retrieveSoldValuesforCartUserProf($conn, $cartname);
	$locationFrom = $deliverydets['county'].'-'.$deliverydets['area'];



	$newreturnStat = createNewReturnEntryByUser($conn, $returnitem, $cartname, $buyer, $reason, $reasonDetail, $returnedOn, 0, $agenttrigger, $locationto, $locationFrom);
	if($newreturnStat == True){
		//continue on
		echo "Item has successfully been marked for return";
	}else{
		echo "Item return record already exists";
	}

}

if(isset($_POST['retievecarts']) && $_POST['retievecarts'] == '4l3ko4i'){
	// show user carts
	showUserCarts($conn);
}elseif(isset($_POST['showcartdets']) && !empty($_POST['showcartdets'])){
	// return cart content
	$cartname = mysqli_real_escape_string($conn, $_POST['showcartdets']);
	showCartDetails($conn, $cartname);
}elseif(isset($_POST['returnform']) && $_POST['returnform'] == '43lk3' && isset($_POST['cartitem']) && !empty($_POST['cartitem'])){
	// return form with detials for item being returned
	$itemid = mysqli_real_escape_string($conn, $_POST['cartitem']);
	echo returnForm($conn, $itemid);
}elseif(isset($_POST['finalizereturn']) && $_POST['finalizereturn'] == 'ksdiu23' && isset($_POST['returnitem']) && !empty($_POST['returnitem']) && isset($_POST['finalcart']) && !empty($_POST['finalcart']) && isset($_POST['reason']) && !empty($_POST['reason']) && isset($_POST['reason']) && !empty($_POST['reason'])){

	$returnitem = mysqli_real_escape_string($conn, $_POST['returnitem']);
	$cartname = mysqli_real_escape_string($conn, $_POST['finalcart']);
	$reason = mysqli_real_escape_string($conn, $_POST['reason']);
	$reasonDetail = mysqli_real_escape_string($conn, $_POST['finalcart']);

	returnItem($conn, $returnitem, $cartname, $reason, $reasonDetail);
}

?>
