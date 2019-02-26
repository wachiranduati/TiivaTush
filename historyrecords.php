<?php  
session_start();
require 'connect.php';
require 'utils/adminutils.php';
require 'utils/historyrecutils.php';
if(isStaffLoggedIn() != True){
	redirectAndDie();
}
//This script will retrieve all the records that matter as far as tiiva has been alive

function returnallsaleRecords($conn){
	//this will return all sale records made on tiiva
	// thsi will leave out any returns....more like a grey area// Fuck it ..retrun all sales returns will have their own table
	$imagepre = returnImagePreAddrMtushUserProf();
	$allSales = showSales($conn, 1);
	// print_r($allSales);
	$numb = 0;
	echo "<div class=\"table-responsive\">
	<h4 class=\"text-center text-uppercase\">All Sales + Returns</h4>
	  <table class=\"table\">
	    <thead>
	      <tr>
	        <th>Items</th>
	        <th>Productid</th>
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
	if($allSales != 0){
		// continue
		if(count($allSales) != 0){
			// continue
			for($x = 0; $x < count($allSales); $x++){
				$prodid = $allSales[$x]['id'];
				$numb += 1;
				$productName = $allSales[$x]['itemtitle'];
				$image = $imagepre.''.$allSales[$x]['imageone'];
				$category = $allSales[$x]['category'];
				$subcategory = $allSales[$x]['subcategory'];
				$price = $allSales[$x]['price'];
				$label = $allSales[$x]['label'];
				$size = $allSales[$x]['size'];
				$sex = $allSales[$x]['sex'];
				// print_r($itemDetails);
				echo "
						<tr>
							<td>$numb</td>
							<td>$prodid</td>
							<td><a href=\"productdetails.php?id=$prodid\"><img src=\"$image\" class=\"img-responsive\" style=\"max-height:50px;\"></a></td>
							<td>$productName</td>
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
			// no records found
			echo "
				<tr>
					<td>No records found</td>
				</tr>
			";
		}
	}else{
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
// returnallsaleRecords($conn);

function returnallReturnRecords($conn){
	// this will return all returns made regardless of their status....update this later maybe
	$returns = retrieveAllReturns($conn);
	$imagepre = returnImagePreAddrMtushUserProf();
	// print_r($returns);
	$numb = 0;
	echo "<div class=\"table-responsive\">
	<h4 class=\"text-center text-uppercase\">All Returns</h4>
	  <table class=\"table\">
	    <thead>
	      <tr>
	        <th>Items</th>
	        <th>Productid</th>
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

	if($returns != 0){
		// continue
		if(count($returns) != 0){
			// continue
			for($x = 0; $x < count($returns); $x++){
					$productid = $returns[$x]['productid'];
					$produdctdetails = retrieveproductAllFields($conn, 'products', $productid);
					// print_r($produdctdetails);
					if($produdctdetails != 0){
						if(count($produdctdetails) != 0){
							// continue
							$prodid = $produdctdetails['id'];
							$numb += 1;
							$productName = $produdctdetails['itemtitle'];
							$image = $imagepre.''.$produdctdetails['imageone'];
							$category = $produdctdetails['category'];
							$subcategory = $produdctdetails['subcategory'];
							$price = $produdctdetails['price'];
							$label = $produdctdetails['label'];
							$size = $produdctdetails['size'];
							$sex = $produdctdetails['sex'];
							// print_r($itemDetails);
							echo "
									<tr>
										<td>$numb</td>
										<td>$prodid</td>
							<td><a href=\"productdetails.php?id=$prodid\"><img src=\"$image\" class=\"img-responsive\" style=\"max-height:50px;\"></a></td>
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
							echo "
									<tr>
										<td>No records found</td>
									</tr>
								";
						}
					}else{
						echo "
								<tr>
									<td>No records found</td>
								</tr>
							";
					}
				}
		}else{
			echo "
				<tr>
					<td>No records found</td>
				</tr>
			";
		}
	}else{
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

// returnallReturnRecords($conn);

function returnallonlineRecords($conn){
	//this will return all sale records made on tiiva
	// thsi will leave out any returns....more like a grey area// Fuck it ..retrun all sales returns will have their own table
	$imagepre = returnImagePreAddrMtushUserProf();
	$allSales = showSales($conn, 0);
	// print_r($allSales);
	$numb = 0;
	echo "<div class=\"table-responsive\">
	<h4 class=\"text-center text-uppercase\">Online Products</h4>
	  <table class=\"table\">
	    <thead>
	      <tr>
	        <th>Items</th>
	        <th>Productid</th>
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
	if($allSales != 0){
		// continue
		if(count($allSales) != 0){
			// continue
			for($x = 0; $x < count($allSales); $x++){
				$prodid = $allSales[$x]['id'];
				$numb += 1;
				$productName = $allSales[$x]['itemtitle'];
				$image = $imagepre.''.$allSales[$x]['imageone'];
				$category = $allSales[$x]['category'];
				$subcategory = $allSales[$x]['subcategory'];
				$price = $allSales[$x]['price'];
				$label = $allSales[$x]['label'];
				$size = $allSales[$x]['size'];
				$sex = $allSales[$x]['sex'];
				// print_r($itemDetails);
				echo "
						<tr>
							<td>$numb</td>
							<td>$prodid</td>
							<td><a href=\"productdetails.php?id=$prodid\"><img src=\"$image\" class=\"img-responsive\" style=\"max-height:50px;\"></a></td>
							<td>$productName</td>
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
			// no records found
			echo "
				<tr>
					<td>No records found</td>
				</tr>
			";
		}
	}else{
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
// returnallonlineRecords($conn);

function returndeliveryRecords($conn){
	// return all delivery records and the items delivered
	// actually just retrieve all records form transitdbs where dstatus = 1
	echo "<div class=\"table-responsive\">
	<h4 class=\"text-center text-uppercase\">Deliveries Already Made</h4>
	  <table class=\"table table-hover\">
	    <thead>
	      <tr>
	        <th>Items</th>
	        <th>Productid</th>
	        <th>Image</th>
	        <th>Name</th>
	        <th>Category</th>
	        <th>Subcategory</th>
	        <th>Price</th>
	        <th>Label</th>
	        <th>size</th>
	        <th>sex</th>
	      </tr>
	    </thead>";

	$imagepre = returnImagePreAddrMtushUserProf();
	$deliveries = queryAllitemsDelivered($conn);
	if($deliveries != 0){
		// continue
		if(count($deliveries) != 0){
			// continue
			for($x = 0; $x < count($deliveries); $x++){
				$numb = $x + 1;
				$itemid = $deliveries[$x]['itemid'];
				$cartname = $deliveries[$x]['cartname'];
				$from = $deliveries[$x]['from'];
				$exchlocs = $deliveries[$x]['exchlocs'];
				$handlers = $deliveries[$x]['handlers'];
				$exchdattimes = $deliveries[$x]['exchdattimes'];
				$exchcenters = $deliveries[$x]['exchcenters'];
				$centredestination = $deliveries[$x]['centredestination'];
				$deadline = $deliveries[$x]['deadline'];

				$actualidComp = returnItemidShop($conn, $itemid);
				$productid = substr($actualidComp, 1);
				// echo $productid;
				$productdetails = retrieveproductAllFields($conn, 'products', $productid);
				$prodid = $productdetails['id'];
				$numb += 1;
				$productName = $productdetails['itemtitle'];
				$image = $imagepre.''.$productdetails['imageone'];
				$category = $productdetails['category'];
				$subcategory = $productdetails['subcategory'];
				$price = $productdetails['price'];
				$label = $productdetails['label'];
				$size = $productdetails['size'];
				$sex = $productdetails['sex'];
				// print_r($itemDetails);
				echo "
						<tr class=\"delivrow\" data-prod=\"$prodid\"\">
							<td>$numb</td>
							<td>$prodid</td>
							<td><a href=\"productdetails.php?id=$prodid\"><img src=\"$image\" class=\"img-responsive\" style=\"max-height:50px;\"></a></td>
							<td>$productName</td>
							<td>$category</td>
							<td>$subcategory</td>
							<td>$price</td>
							<td>$label</td>
							<td>$size</td>
							<td>$sex</td>
						</tr>
						<tr class=\"info deliv-extr tab-rw-$prodid\" style=\"display:none;\" class=\"info\">
						<td>CARTNAME:</td>
						<td>$cartname</td>
						<td></td>
						<td>FROM:</td>
						<td>$from</td>
						<td></td>
						<td>DESTINATION:</td>
						<td></td>
						<td>$centredestination</td>
						<td></td>
						</tr>
						<tr class=\"info deliv-extr tab-rw-$prodid\" style=\"display:none;\" class=\"info\">
						<td>HANDLERS:</td>
						<td colspan=\"2\">$handlers</td>
						<td>EXCH-LOCS:</td>
						<td colspan=\"3\">$exchlocs</td>
						<td>DEADLINE:</td>
						<td>$deadline</td>
						<td></td>
						</tr>
						<tr class=\"info deliv-extr tab-rw-$prodid\" style=\"display:none;\" class=\"info\">
						<td>EXCH CENTERS:</td>
						<td colspan=\"2\">$exchcenters</td>
						<td></td>
						<td>EXCH TIMES:</td>
						<td colspan=\"5\">$exchdattimes</td>
						
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
				</div>";
}
// returndeliveryRecords($conn);

if(isset($_POST['salesall']) && $_POST['salesall'] == 'lk4j3lkds'){
	returnallsaleRecords($conn);
}elseif(isset($_POST['allreturns']) && $_POST['allreturns'] == 'klewelkwo'){
	returnallReturnRecords($conn);
}elseif(isset($_POST['onlinerecords']) && $_POST['onlinerecords'] == 'k43lkri34'){
	returnallonlineRecords($conn);
}elseif(isset($_POST['deliveryrecord']) && $_POST['deliveryrecord'] == '4lk334mkj'){
	returndeliveryRecords($conn);
}

?>