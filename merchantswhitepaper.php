<?php 
session_start();
ob_start();
require 'connect.php';
require 'utils/merchantutils.php';
require 'utils/adminutils.php';

if(userLoggedIn() != True){
     redirectAndDie();
}

if(isUserMerchant($conn) != True){
     redirectAndDie();
}

function showsMerchantsItemsOnline($conn){
	$imagepre = returnImagePreAddrMtushUserProf();
	// this will return all the merchant uploads taht are currently listed and are not yet sold
	// sit will go a bit further to only return items currently not booked nor carted
	$allonlineitems = showMerchantOnlineNotBookedNorCarted($conn);
	// remove all the items that appear in the cartactvitiy...remove booked/carted
	echo "<div class=\"table-responsive\">
	<h4 class=\"text-center text-uppercase\">Currently Being Viewed</h4>
	  <table class=\"table\">
	    <thead>
	      <tr>
	        <th>Items</th>
	        <th>Image</th>
	        <th>Name</th>
	        <th>Category</th>
	        <th>Subcategory</th>
	        <th>Price</th>
	        <th>Label</th>
	        <th>size</th>
	        <th>sex</th>
	        <th>Pause</th>
	        <th>Takedown</th>

	      </tr>
	    </thead>
	    <tbody>";
	if($allonlineitems != 0){
		// continue
		$numb = 0;
		// loop througth the items
		if(count($allonlineitems) != 0){
			// continue
			for($x = 0; $x < count($allonlineitems); $x++){
				$prodid = $allonlineitems[$x]['id'];
				$numb += 1;
				$productName = $allonlineitems[$x]['itemtitle'];
				$image = $imagepre.''.$allonlineitems[$x]['imageone'];
				$category = $allonlineitems[$x]['category'];
				$subcategory = $allonlineitems[$x]['subcategory'];
				$price = $allonlineitems[$x]['price'];
				$label = $allonlineitems[$x]['label'];
				$size = $allonlineitems[$x]['size'];
				$sex = $allonlineitems[$x]['sex'];
				// print_r($itemDetails);
				echo "
						<tr>
							<td>$numb</td>
							<td><img src=\"$image\" class=\"img-responsive\" style=\"max-height:50px;\"></td>
							<td>$productName</td>
							<td>$category</td>
							<td>$subcategory</td>
							<td>$price</td>
							<td>$label</td>
							<td>$size</td>
							<td>$sex</td>
							<td><a href=\"#responsemessage\" class=\"btn btn-primary pauseproductbtn\" data-prod=\"$prodid\">Pause Item</a></td>
							<td><a href=\"#responsemessage\" class=\"btn btn-danger deleteproductbtn\" data-prod=\"$prodid\">Delete Item</a></td>
						</tr>
					";
			}
		}else{
			// no records found
			echo "
				<tr>
					<td>No records found</td>
				</tr>
			";
		}
	}else{
		// no records found
		echo "
				<tr>
					<td>No records found</td>
				</tr>
			";
	}
	echo "</tbody>
				</table>
				</div><div class=\"well\" style=\"color:red\" id=\"responsemessage\"></div>";

}
// showsMerchantsItemsOnline($conn);

function showMerchantsItemsCurrentlyBooked($conn){
	// this will retrieve all the items that are currently booked
	$imagepre = returnImagePreAddrMtushUserProf();
	$row = bookeditem($conn);
	echo "<div class=\"table-responsive\">
	<h4 class=\"text-center text-uppercase\">Currently Being Viewed</h4>
	  <table class=\"table\">
	    <thead>
	      <tr>
	        <th>Items</th>
	        <th>Image</th>
	        <th>Name</th>
	        <th>Category</th>
	        <th>Subcategory</th>
	        <th>Price</th>
	        <th>Label</th>
	        <th>size</th>
	        <th>sex</th>

	      </tr>
	    </thead>
	    <tbody>";

	    if($row != 0){
	    	// continue
	    	if(count($row) != 0){
	    		// continue
	    		for($x = 0; $x < count($row); $x++){
	    			$no = $x+1;
	    			$image = $imagepre.''.$row[$x]['imageone'];
	    			$name = $row[$x]['itemtitle'];
	    			$category = $row[$x]['category'];
	    			$subcategory = $row[$x]['subcategory'];
	    			$price = $row[$x]['price'];
	    			$label = $row[$x]['label'];
	    			$size = $row[$x]['size'];
	    			$sex = $row[$x]['sex'];


	    			echo "
					<tr>
						<td>$no</td>
						<td><img src=\"$image\" class=\"img-responsive\" style=\"max-height:50px;\"></td>
						<td>$name</td>
						<td>$category</td>
						<td>$subcategory</td>
						<td>$price</td>
						<td>$label</td>
						<td>$size</td>
						<td>$sex</td>
					</tr>
				";
	    		}
	    	}else{
	    		//no results
	    		echo "
					<tr>
						<td>No records found</td>
					</tr>
				";
	    	}
	    }else{
	    	// no results
	    	echo "
				<tr>
					<td>No records found</td>
				</tr>
			";
	    }
	echo "</tbody>
				</table>
				</div>";

}
// print_r(showMerchantsItemsCurrentlyBooked($conn));

function showMerchantItemsCurrentlyAddedToCart($conn){
	// this will retrieve all the items that are currently booked
	$imagepre = returnImagePreAddrMtushUserProf();
	$row = AddedtoCartItems($conn);
	echo "<div class=\"table-responsive\">
	<h4 class=\"text-center text-uppercase\">Currently Being Viewed</h4>
	  <table class=\"table\">
	    <thead>
	      <tr>
	        <th>Items</th>
	        <th>Image</th>
	        <th>Name</th>
	        <th>Category</th>
	        <th>Subcategory</th>
	        <th>Price</th>
	        <th>Label</th>
	        <th>size</th>
	        <th>sex</th>

	      </tr>
	    </thead>
	    <tbody>";

	    if($row != 0){
	    	// continue
	    	if(count($row) != 0){
	    		// continue
	    		for($x = 0; $x < count($row); $x++){
	    			$no = $x+1;
	    			$image = $imagepre.''.$row[$x]['imageone'];
	    			$name = $row[$x]['itemtitle'];
	    			$category = $row[$x]['category'];
	    			$subcategory = $row[$x]['subcategory'];
	    			$price = $row[$x]['price'];
	    			$label = $row[$x]['label'];
	    			$size = $row[$x]['size'];
	    			$sex = $row[$x]['sex'];


	    			echo "
					<tr>
						<td>$no</td>
						<td><img src=\"$image\" class=\"img-responsive\" style=\"max-height:50px;\"></td>
						<td>$name</td>
						<td>$category</td>
						<td>$subcategory</td>
						<td>$price</td>
						<td>$label</td>
						<td>$size</td>
						<td>$sex</td>
					</tr>
				";
	    		}
	    	}else{
	    		//no results
	    		echo "
					<tr>
						<td>No records found</td>
					</tr>
				";
	    	}
	    }else{
	    	// no results
	    	echo "
				<tr>
					<td>No records found</td>
				</tr>
			";
	    }
	echo "</tbody>
				</table>
				</div>";

}
// print_r(showMerchantItemsCurrentlyAddedToCart($conn));

function showItemsFreshlySold($conn){
	$imagepre = returnImagePreAddrMtushUserProf();
	// this should show items that have been sold but are not yet in transit..i.e not yet pickeup
	// checked translates to sold....
	// retrieve all the incomplete carts
	// check their contents against our sellers id
	// also ensure that the item has not been picked up else itll appear twice..not in pickedup
	echo "<div class=\"table-responsive\">
	<h4 class=\"text-center text-uppercase\">FRESHLY MADE SALES</h4>
	  <table class=\"table\">
	    <thead>
	      <tr>
	        <th>No</th>
	        <th>Image</th>
	        <th>Item</th>
	        <th>Name</th>
	        <th>Category</th>
	        <th>Subcategory</th>
	        <th>Price</th>
	        <th>Label</th>
	        <th>size</th>
	        <th>sex</th>

	      </tr>
	    </thead>
	    <tbody>";
	$carts = getUnUpdatedCartsUserProf($conn);
	$numb = 0;
	if($carts != 0){
			// continue
		$FreshlySold = retrieveCartContentsFromCarts($conn, $carts);// items that have been sold but yet to be picked
			// now loop to find those that belong to this merchant
			// print_r($FreshlySold);
			if(count($FreshlySold) != 0){
					for($x = 0; $x < count($FreshlySold); $x++){
						$item = $FreshlySold[$x];
						$itemDetails = checkWhetherItemBelongsToMerchant($conn, $item);
						if($itemDetails != 0){
							$numb += 1;
							$itemDetails = checkWhetherItemBelongsToMerchant($conn, $item);
							$productName = $itemDetails['itemtitle'];
							$image = $imagepre.''.$itemDetails['imageone'];
		    				$category = $itemDetails['category'];
		    				$subcategory = $itemDetails['subcategory'];
		    				$price = $itemDetails['price'];
		    				$label = $itemDetails['label'];
		    				$size = $itemDetails['size'];
		    				$sex = $itemDetails['sex'];
							// print_r($itemDetails);
							echo "
									<tr>
										<td>$numb</td>
										<td><img src=\"$image\" class=\"img-responsive\" style=\"max-height:50px;\"></td>
										<td>$productName</td>
										<td>$category</td>
										<td>$subcategory</td>
										<td>$price</td>
										<td>$label</td>
										<td>$size</td>
										<td>$sex</td>
									</tr>
								";
						}else{
							// item does not beong to this seller
						}
					}
			}else{
				// cart empty
				echo "
				<tr>
					<td>No records found</td>
				</tr>
			";
			}
	}else{
		// no carts found
		echo "
				<tr>
					<td>No records found</td>
				</tr>
			";
	}
	echo "</tbody>
				</table>
				</div>";
}
// showItemsFreshlySold($conn);

function retrieveMerchantProductsinTransit($conn){
	$imagepre = returnImagePreAddrMtushUserProf();
	$merchant = getMerchantId($conn);
	// this should show all the items in transit begonging to this merchant
	// remember transit id is the pickup id
	$transitItems = queryAllitemsInTransit($conn);
	// loop throught the item ids to retrieve the itemid and then figure out if item belongs to merchant
	echo "<div class=\"table-responsive\">
	<h4 class=\"text-center text-uppercase\">MY ITEMS CURRENTLY BEING DELIVERED</h4>
	  <table class=\"table\">
	    <thead>
	      <tr>
	        <th>No</th>
	        <th>Image</th>
	        <th>Item</th>
	        <th>Name</th>
	        <th>Category</th>
	        <th>Subcategory</th>
	        <th>Price</th>
	        <th>Label</th>
	        <th>size</th>
	        <th>sex</th>

	      </tr>
	    </thead>
	    <tbody>";

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
				$prodState = showMerchantContent($conn, $actualProdId);
				if($prodState != 0){
					// continue
					$numb += 1;
					$productName = $prodState['itemtitle'];
					$image = $imagepre.''.$prodState['imageone'];
    				$category = $prodState['category'];
    				$subcategory = $prodState['subcategory'];
    				$price = $prodState['price'];
    				$label = $prodState['label'];
    				$size = $prodState['size'];
    				$sex = $prodState['sex'];
					// print_r($itemDetails);
					echo "
							<tr>
								<td>$numb</td>
								<td><img src=\"$image\" class=\"img-responsive\" style=\"max-height:50px;\"></td>
								<td>$productName</td>
								<td>$category</td>
								<td>$subcategory</td>
								<td>$price</td>
								<td>$label</td>
								<td>$size</td>
								<td>$sex</td>
							</tr>
						";

				}else{
					// not a match
				}

			}
		}else{
			// no transit itesm found
			echo "
				<tr>
					<td>No records found</td>
				</tr>
			";
		}
	}else{
		// no items in transit
		echo "
				<tr>
					<td>No records found</td>
				</tr>
			";
	}
	echo "</tbody>
				</table>
				</div>";
}

// retrieveMerchantProductsinTransit($conn);

function retrieveMechantProductsAlreadyDelivered($conn){
	// thsi should hshow all items that have been delivered and belongs to me
	// we'll use the transit code since everthing is literally similar
	$imagepre = returnImagePreAddrMtushUserProf();
	$merchant = getMerchantId($conn);
	// this should show all the items in transit begonging to this merchant
	// remember transit id is the pickup id
	$transitItems = queryAllitemsDelivered($conn);
	// loop throught the item ids to retrieve the itemid and then figure out if item belongs to merchant
	echo "<div class=\"table-responsive\">
	<h4 class=\"text-center text-uppercase\">MY ITEMS THAT HAVE ALREADY BEEN DELIVERED</h4>
	  <table class=\"table\">
	    <thead>
	      <tr>
	        <th>No</th>
	        <th>Image</th>
	        <th>Item</th>
	        <th>Name</th>
	        <th>Category</th>
	        <th>Subcategory</th>
	        <th>Price</th>
	        <th>Label</th>
	        <th>size</th>
	        <th>sex</th>

	      </tr>
	    </thead>
	    <tbody>";

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
				$prodState = showMerchantContent($conn, $actualProdId);
				if($prodState != 0){
					// continue
					$numb += 1;
					$productName = $prodState['itemtitle'];
					$image = $imagepre.''.$prodState['imageone'];
    				$category = $prodState['category'];
    				$subcategory = $prodState['subcategory'];
    				$price = $prodState['price'];
    				$label = $prodState['label'];
    				$size = $prodState['size'];
    				$sex = $prodState['sex'];
					// print_r($itemDetails);
					echo "
							<tr>
								<td>$numb</td>
								<td><img src=\"$image\" class=\"img-responsive\" style=\"max-height:50px;\"></td>
								<td>$productName</td>
								<td>$category</td>
								<td>$subcategory</td>
								<td>$price</td>
								<td>$label</td>
								<td>$size</td>
								<td>$sex</td>
							</tr>
						";

				}else{
					// not a match
				}

			}
		}else{
			// no transit itesm found
			echo "
				<tr>
					<td>No records found</td>
				</tr>
			";
		}
	}else{
		// no items in transit
		echo "
				<tr>
					<td>No records found</td>
				</tr>
			";
	}
	echo "</tbody>
				</table>
				</div>";
}

// retrieveMechantProductsAlreadyDelivered($conn);

function retrieveMerchantReturns($conn){
	// thsi will return all the items currently in the returns panel
	// this will check the return table
	$imagepre = returnImagePreAddrMtushUserProf();
	$merchant = getMerchantId($conn);
	$allreturns = retrieveReturns($conn, 0);
	echo "<div class=\"table-responsive\">
	<h4 class=\"text-center text-uppercase\">MY ITEMS THAT HAVE ALREADY BEEN DELIVERED</h4>
	  <table class=\"table\">
	    <thead>
	      <tr>
	        <th>No</th>
	        <th>Image</th>
	        <th>Item</th>
	        <th>Name</th>
	        <th>Category</th>
	        <th>Subcategory</th>
	        <th>Price</th>
	        <th>Label</th>
	        <th>size</th>
	        <th>sex</th>

	      </tr>
	    </thead>
	    <tbody>";
	if($allreturns != 0){
		// continue
		if(count($allreturns) != 0){
			// continue
			$numb = 0;
			// loop to retrieve the product id
			for($x = 0; $x < count($allreturns); $x++){
				$productid = $allreturns[$x]['productid'];
				$productContent = retrieveproductAllFields($conn, 'products', $productid);
				if($productContent['sellerid'] == $merchant){
					// continue
					// echo "found one";
					$numb += 1;
					$productName = $productContent['itemtitle'];
					$image = $imagepre.''.$productContent['imageone'];
    				$category = $productContent['category'];
    				$subcategory = $productContent['subcategory'];
    				$price = $productContent['price'];
    				$label = $productContent['label'];
    				$size = $productContent['size'];
    				$sex = $productContent['sex'];
					// print_r($itemDetails);
					echo "
							<tr>
								<td>$numb</td>
								<td><img src=\"$image\" class=\"img-responsive\" style=\"max-height:50px;\"></td>
								<td>$productName</td>
								<td>$category</td>
								<td>$subcategory</td>
								<td>$price</td>
								<td>$label</td>
								<td>$size</td>
								<td>$sex</td>
							</tr>
						";
				}else{
					// do nothing
				}
			}
		}else{	
			// no returns found
			echo "
				<tr>
					<td>No records found</td>
				</tr>
			";
		}
	}else{
		// no returns found
		echo "
				<tr>
					<td>No records found</td>
				</tr>
			";
	}
	echo "</tbody>
				</table>
				</div>";
}

// retrieveMerchantReturns($conn);

function pauseMerchantsProduct($conn, $productid){
	// thsi functionality will enable the user to pause an item to later repause it like when they get to work
	$merchant = getMerchantId($conn);
	// echo $merchant;
	$bookcartstatus = checkWhetherItemBookedorCarted($conn, $productid);
	if($bookcartstatus == True){
		//continue
		$ownerState = ConfirmProductBelongsToCurrentMerchant($conn, $productid, $merchant);
	if($ownerState == True){
		// continue
		// check whether item already paused
		// delete the item and recreate it in the paused database
		$pausedState = checkWhetherItemPausedOrNot($conn, $productid, $merchant);
		if($pausedState == True){
			// item already booked
			echo "item already booked";
		}else{
			// continue
			$productdetails = retrieveproductAllFields($conn, 'products', $productid);
			$itemtitle = $productdetails['itemtitle'];
			$sellerid = $productdetails['sellerid'];
			$category = $productdetails['category'];
			$subcategory = $productdetails['subcategory'];
			$imageone = $productdetails['imageone'];
			$imagetwo = $productdetails['imagetwo'];
			$imagethree = $productdetails['imagethree'];
			$price = $productdetails['price'];
			$availability = $productdetails['availability'];
			$buyer = $productdetails['buyer'];
			$size = $productdetails['size'];
			$details = $productdetails['details'];
			$sex = $productdetails['sex'];
			$rating = $productdetails['rating'];
			$label = $productdetails['label'];
			$sold = $productdetails['sold'];
			$up_date = $productdetails['up_date'];
			$up_time = $productdetails['up_time'];

			$NewPauseCreationState = createnewPauseRow($conn, $productid, $itemtitle, $sellerid, $category, $subcategory, $imageone, $imagetwo, $imagethree, $price, $availability, $buyer, $size, $details, $sex, $rating, $label, $sold, $up_date, $up_time);
			if($NewPauseCreationState == True){
				// continue
				$deleteState = deleteEntryProductRow($conn, $productid, $merchant);
				if($deleteState == True){
					echo "Item successfully Paused. It has temporarily been hidden from users. To make it visible unpause it in the Pause Items section below";
				}else{
					echo "Error Could not Pause";
				}
			}else{
				// error
				echo "Error could not complete task";
			}
		}
	}else{
		echo "You do not own this item";
	}
	}else{
		echo "item currently booked/carted";
	}
	
}

function takeDownMerchantProduct($conn, $productid){
	// thsi will enable a merchant to be able to take down a product he's probably just sold on the streets
	// this should also take down the row shoudl it exist in the paused database
	// check whether item exists in both databases
	$merchant = getMerchantId($conn);

	$bookcartstatus = checkWhetherItemBookedorCarted($conn, $productid);
	if($bookcartstatus == True){
		// not booked nor carted continue
		$merchant = getMerchantId($conn);
		$ownerState = ConfirmProductBelongsToCurrentMerchant($conn, $productid, $merchant);
		if($ownerState == True){
			// continue
			$pausedState = checkWhetherItemPausedOrNot($conn, $productid, $merchant);
			if($pausedState == True){
				// delete it here.. delete the pause row
				$pausedproddeletedstate = deletePauseEntryRow($conn, $productid, $merchant);
				if($pausedproddeletedstate == True){
					echo "product deleted p";
				}else{
					echo "paused could not be deleted";
				}
			}else{
				// item paused// delete it here// the products row
				$productdeleteprod = deleteEntryProductRow($conn, $productid, $merchant);
				if($productdeleteprod == True){
					echo "Product deleted permanently from tiiva";
				}else{
					echo "product could not be deleted";
				}
			}
		}else{
			echo "Error you do not own this item";
		}
	}else{
		// sorry you cannot take down this item ...currently booked/carted
		echo "Item currently booked";
	}
	
}

function unpauseproductByMerchant($conn, $productid){
	// this will unpause an item held up by a merchant
	// check whether item paused
	$merchant = getMerchantId($conn);

	$pausedState = checkWhetherItemPausedOrNot($conn, $productid, $merchant);
	if($pausedState == True){
		// continue
		$ownerState = ConfirmPausedProductBelongsToCurrentMerchant($conn, $productid, $merchant);
		if($ownerState == True){
			//continue
			$ProductDetails = retrievePausedProdstAllFields($conn, 'pausedprods', $productid);
			$itemtitle = $ProductDetails['itemtitle'];
			$sellerid = $ProductDetails['sellerid'];
			$category = $ProductDetails['category'];
			$subcategory = $ProductDetails['subcategory'];
			$imageone = $ProductDetails['imageone'];
			$imagetwo = $ProductDetails['imagetwo'];
			$imagethree = $ProductDetails['imagethree'];
			$price = $ProductDetails['price'];
			$availability = $ProductDetails['availability'];
			$buyer = $ProductDetails['buyer'];
			$size = $ProductDetails['size'];
			$details = $ProductDetails['details'];
			$sex = $ProductDetails['sex'];
			$rating = $ProductDetails['rating'];
			$label = $ProductDetails['label'];
			$sold = $ProductDetails['sold'];
			$up_date = $ProductDetails['up_date'];
			$up_time = $ProductDetails['up_time'];
			$prodrecreateState = createANewProductRow($conn, $itemtitle, $sellerid, $category, $subcategory, $imageone, $imagetwo, $imagethree, $price, $availability, $buyer, $size, $details, $sex, $rating, $label, $sold, $up_date, $up_time);
			if($prodrecreateState == True){
				// continue
				// delete the paused row now
				$pausedproddeletedstate = deletePauseEntryRow($conn, $productid, $merchant);
				if($pausedproddeletedstate == True){
					echo "Item successfully unpaused. It can now be viewed by other users who might wish to buy it.";
				}else{
					echo "paused could not be deleted";
				}
			}else{
				// do nothing
				// echo "Could not recreate item";
			}
		}else{
			echo "You do not own the item";
		}
	}else{
		echo "Item not paused";
	}
}

function showMerchantsPausedItems($conn){
	// thsi will return a table with all the merchants paused item 
	// with the option to unpause the items and also to delete the items
	$merchant = getMerchantId($conn);
	$imagepre = returnImagePreAddrMtushUserProf();

	$pausedprods = retrievePausedProductsMerchant($conn, $merchant);
	echo "<div class=\"table-responsive\">
	<h4 class=\"text-center text-uppercase\">Currently Paused Items</h4>
	  <table class=\"table\">
	    <thead>
	      <tr>
	        <th>Items</th>
	        <th>Image</th>
	        <th>Name</th>
	        <th>Category</th>
	        <th>Subcategory</th>
	        <th>Price</th>
	        <th>Label</th>
	        <th>size</th>
	        <th>sex</th>
	        <th>Unpause</th>
	        <th>Delete</th>

	      </tr>
	    </thead>
	    <tbody>";
	if($pausedprods != 0){
		// continue
		if(count($pausedprods) != 0){
			// continue
			for($x = 0; $x < count($pausedprods); $x++){
				$numb = $x + 1;
				$prodid = $pausedprods[$x]['prodid'];
				$itemtitle = $pausedprods[$x]['itemtitle'];
				$sellerid = $pausedprods[$x]['sellerid'];
				$category = $pausedprods[$x]['category'];
				$subcategory = $pausedprods[$x]['subcategory'];
				$imageone = $pausedprods[$x]['imageone'];
				$imagetwo = $pausedprods[$x]['imagetwo'];
				$imagethree = $pausedprods[$x]['imagethree'];
				$price = $pausedprods[$x]['price'];
				$availability = $pausedprods[$x]['availability'];
				$buyer = $pausedprods[$x]['buyer'];
				$size = $pausedprods[$x]['size'];
				$details = $pausedprods[$x]['details'];
				$sex = $pausedprods[$x]['sex'];
				$rating = $pausedprods[$x]['rating'];
				$label = $pausedprods[$x]['label'];
				$sold = $pausedprods[$x]['sold'];
				$up_date = $pausedprods[$x]['up_date'];
				$up_time = $pausedprods[$x]['up_time'];
				echo "
						<tr>
							<td>$numb</td>
							<td><img src=\"$imagepre$imageone\" class=\"img-responsive\" style=\"max-height:50px;\"></td>
							<td>$itemtitle</td>
							<td>$category</td>
							<td>$subcategory</td>
							<td>$price</td>
							<td>$label</td>
							<td>$size</td>
							<td>$sex</td>
							<td><a href=\"#responsemessage\" class=\"btn btn-primary unpauseitem\" data-prod=\"$prodid\">Unpause Item</a></td>
							<td><a href=\"#responsemessage\" class=\"btn btn-danger deletepauseditem\" data-prod=\"$prodid\">Delete Item</a></td>
							
						</tr>
					";
			}
		}else{
			// you have no paused items
			echo "
				<tr>
					<td>No records found</td>
				</tr>
			";
		}
	}else{
		// you have no paused items
		echo "
				<tr>
					<td>No records found</td>
				</tr>
			";
	}
	echo "</tbody>
				</table>
				</div><div class=\"well\" style=\"color:red\" id=\"responsemessage\"></div>";


}

function deletepausedItem($conn, $productid){
	// delete paused item...
	// check whether merchant owns the item and whether it exists
	$merchant = getMerchantId($conn);
	$pausedprodstate = deletePauseEntryRow($conn, $productid, $merchant);
	if($pausedprodstate == True){
		// continue....the product shouldn't exist
		echo "Item successfully deleted from Tiiva";
	}else{
		// error
		echo "Error item is not paused";
	}
}

if(isset($_POST['myuploads']) && $_POST['myuploads'] == 'booked'){
	showMerchantsItemsCurrentlyBooked($conn);
}elseif(isset($_POST['myuploads']) && $_POST['myuploads'] == 'addedtocart'){
	showMerchantItemsCurrentlyAddedToCart($conn);
}elseif(isset($_POST['myuploads']) && $_POST['myuploads'] == 'sold'){
	showItemsFreshlySold($conn);
}elseif(isset($_POST['myuploads']) && $_POST['myuploads'] == 'transit'){
	retrieveMerchantProductsinTransit($conn);
}elseif(isset($_POST['myuploads']) && $_POST['myuploads'] == 'delivered'){
	retrieveMechantProductsAlreadyDelivered($conn);
}elseif(isset($_POST['myuploads']) && $_POST['myuploads'] == 'returns'){
	retrieveMerchantReturns($conn);
}elseif(isset($_POST['myuploads']) && $_POST['myuploads'] == 'online'){
	showsMerchantsItemsOnline($conn);
}elseif(isset($_POST['pauseProduct']) && !empty($_POST['pauseProduct'])){
	$productid = mysqli_real_escape_string($conn, $_POST['pauseProduct']);
	pauseMerchantsProduct($conn, $productid);
}elseif(isset($_POST['deleteproduct']) && !empty($_POST['deleteproduct'])){
	$productid = mysqli_real_escape_string($conn, $_POST['deleteproduct']);
	takeDownMerchantProduct($conn, $productid);
}elseif(isset($_POST['myuploads']) && $_POST['myuploads'] == 'paused'){
	showMerchantsPausedItems($conn);
}elseif(isset($_POST['unpause']) && !empty($_POST['unpause'])){
	$productid = mysqli_real_escape_string($conn, $_POST['unpause']);
	unpauseproductByMerchant($conn, $productid);
}elseif(isset($_POST['deletepauseditem']) && !empty($_POST['deletepauseditem'])){
	$productid = mysqli_real_escape_string($conn, $_POST['deletepauseditem']);
	deletepausedItem($conn, $productid);
}

 ?>