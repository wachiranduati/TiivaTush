<?php 
session_start();
require 'connect.php';
require 'utils/adminutils.php';

if(isStaffLoggedIn() != True){
	redirectAndDie();
}
echo getStaffID();

//setup a request payments db too

function retrieveallUnpaidClearDeliveries($conn){
	$imagepre = returnImagePreAddrMtushUserProf();

	//Note that thsi script assumes that the delivery was made then obviously the devl modes are only two
	// check line 30 to understand more
	//thsi will retrieve all the transit items
	// it will then check to see whether they have been returned or sth
	// check whether the 1 day return period has passed
	// it should return all the items but also provide the button on only the matured ones
	// the rest be waiting and maybe show the time remaining
	// bam we return the list with an option to payout and the proper amount set with the 12.5% take out
	$deliveries = queryAllitemsDelivered($conn);
	echo "<div class=\"table-responsive\" style=\"height: 80vh;\">
	<h4 class=\"text-center text-uppercase\">PAY ROLL</h4>
	  <table class=\"table\">
	    <thead>
	      <tr>
	        <th>No</th>
	        <th>Image</th>
	        <th>Name</th>
	        <th>Category</th>
	        <th>Price</th>
	        <th>Label</th>
	        <th>sex</th>
	        <th>Merchant</th>
	        <th>Maturing</th>
	        <th>Payment Status</th>
	        <!--<th>id</th>-->

	      </tr>
	    </thead>
	    <tbody>";
	// check whether they exist in delivered and paid for database
	if($deliveries != 0){
		// continue
		if(count($deliveries) != 0){
			// continue
			// loop througt the items to check whether they already exist in the payment database
			for($x = 0; $x < count($deliveries); $x++){
				// this is transtdb so first retrieve the actual prodid from the pickupds
				$numb = $x + 1;
				$itemid = $deliveries[$x]['itemid'];
				$cartname = $deliveries[$x]['cartname'];
				// actually first check whether the deliveries return frame has elapsed
				// first check whether its a complete or incdelivery
				$pickupContent = retrieveItemIdviaTransitItemid($conn, $itemid, $cartname);
				$actualproductid = substr($pickupContent['item'], 1);
				$productDetails = retrieveproductAllFields($conn, 'products', $actualproductid);
				// echo $actualproductid;
				$productName = $productDetails['itemtitle'];
				$image = $imagepre.''.$productDetails['imageone'];
				$category = $productDetails['category'];
				$subcategory = $productDetails['subcategory'];
				$price = number_format($productDetails['price']);
				$label = $productDetails['label'];
				// $size = $productDetails['size'];
				$sex = $productDetails['sex'];
				$seller = $productDetails['sellerid'];
				// retreive teh merchant details so that we can retreive their name and phonenumber
				$merchantdetails = getMerchantDetailsViaID($conn, $seller);
				$merchName = $merchantdetails['surname'].' '.$merchantdetails['firstname'].' '.$merchantdetails['lastname'];
				// echo $merchName;
				// print_r($itemDetails);
				echo "
						<tr>
							<td>$numb</td>
							<td><img src=\"$image\" class=\"img-responsive\" style=\"max-height:50px;\"></td>
							<td>$productName</td>
							<td>$category/$subcategory</td>
							<td>$price Ksh</td>
							<td>$label</td>
							<td>$sex</td>
							<td>$merchName</td>
						
					";

				$cartdelvstat = checkWhetherCartisCompleteDelivery($conn, 'deliveries', $cartname);
				if($cartdelvstat == True){
					// cart was delivered as a complete delivery so ....deliveries
					$delvdb = 'deliveries';
					// retrieve the delivery time
					$delvdate = retrieveCartstatsFromComDeliv($conn, $cartname)['date'];
					// echo "$delvdate Compdelv ->";
					// check whether expired
					$expiredstat = checkIfAtleast_ThisTimeHasElapsed($delvdate, '1 day');
					$maturetime = timeDeltaExtendTime_return($delvdate, '1 day', 'Y-m-d H:i:s');
					// if return date has expired then the merch should be paid for this
					// but first check whether the item already exists in the paid db
					if($expiredstat == True){
						// pay merchant
						// echo "niice your eligible to get paid";
						// check whether they exist in the payment db
						$paymentmade = checkWhertherPaymentRecordExists($conn, $actualproductid);
						if($paymentmade == True){
							// payment already made
							echo "<td>$maturetime</td>";
							echo "<td class=\"success\">PAID</td>";
							// echo "<td>$actualproductid</td>";
						}else{
							// payment pending// request payment
							// check whether item being returned
							$returnstatus = checkwhetheritemisOnReturnList($conn, $actualproductid);
							if($returnstatus == True){
								// item being returned
								echo "<td>$maturetime</td>";
								echo "<td class=\"danger\">Return Requested</td>";
								// echo "<td class=\"danger\">$actualproductid</td>";
							}else{
								// item okaay with the client
								echo "<td>$maturetime</td>";
								echo "<td><a class=\"btn btn-danger btn-sm\">Request Payment</></td>";
								// echo "<td>$actualproductid</td>";
							}
							
						}
					}else{
						// pending till 24 hours are over
						// possibly retrieve the deadline
						echo "<td>$maturetime</td>";
						echo "<td>Not Yet</td>";
						// echo "<td>$actualproductid</td>";
					}
				}else{
					// cart was delivered as an incomplete delivery so ....incdeliveries
					$delvdb = 'incdelivery';
					// retrieve teh delivery time
					$transitid = $deliveries[$x]['id'];
					$delvdate = retrieveIncDeliverySingleRecord($conn, $transitid, $cartname)['date'];
					// echo "$delvdate incompdelv ->";
					// check whether expired
					$expiredstat = checkIfAtleast_ThisTimeHasElapsed($delvdate, '1 day');
					$maturetime = timeDeltaExtendTime_return($delvdate, '1 day', 'Y-m-d H:i:s');
					// if return date has expired then the merch should be paid for this
					// but first check whether the item already exists in the paid db
					if($expiredstat == True){
						// pay merchant
						// echo "niice your eligible to get paid";
						// check whether they exist in the payment db
						$paymentmade = checkWhertherPaymentRecordExists($conn, $actualproductid);
						if($paymentmade == True){
							// payment already made
							echo "<td>$maturetime</td>";
							echo "<td class=\"success\">PAID</td>";
							// echo "<td>$actualproductid</td>";
						}else{
							// payment pending// request payment
							$returnstatus = checkwhetheritemisOnReturnList($conn, $actualproductid);
							if($returnstatus == True){
								// item being returned
								echo "<td>$maturetime</td>";
								echo "<td class=\"danger\">Return Requested</td>";
								// echo "<td class=\"danger\">$actualproductid</td>";
							}else{
								// item okaay with the client
								echo "<td>$maturetime</td>";
								echo "<td><a class=\"btn btn-danger btn-sm\">Request Payment</></td>";
								// echo "<td>$actualproductid</td>";
							}
							
						}
					}else{
						// pending till 24 hours are over
						// possibly retrieve the deadline
						echo "<td>$maturetime</td>";
						echo "<td>Not Yet</td>";
						// echo "<td>$actualproductid</td>";

					}

				}
				echo "</tr>";
				// check whether item has matured or not

				

			}
		}else{
			// no record found
			echo "
				<tr>
					<td>No records found</td>
				</tr>
			";
		}
	}else{
		// no record found
		echo "
				<tr>
					<td>No records found</td>
				</tr>
			";
	}
	// print_r($deliveries);
	echo "</tbody>
				</table>
				</div>";

}

function retrievepaymentstoAward($conn){
	$imagepre = returnImagePreAddrMtushUserProf();

	//Note that thsi script assumes that the delivery was made then obviously the devl modes are only two
	// check line 30 to understand more
	//thsi will retrieve all the transit items
	// it will then check to see whether they have been returned or sth
	// check whether the 1 day return period has passed
	// it should return all the items but also provide the button on only the matured ones
	// the rest be waiting and maybe show the time remaining
	// bam we return the list with an option to payout and the proper amount set with the 12.5% take out
	$deliveries = queryAllitemsDelivered($conn);
	echo "<div class=\"table-responsive\">
	<h4 class=\"text-center text-uppercase\">PAYMENTS TO MAKE</h4>
	  <table class=\"table\">
	    <thead>
	      <tr>
	        <th>No</th>
	        <th>Image</th>
	        <th>Name</th>
	        <th>Category</th>
	        <th>Price</th>
	        <th>Label</th>
	        <th>sex</th>
	        <th>Merchant</th>
	        <th>Maturing</th>
	        <th>Payment Status</th>
	        <!--<th>id</th>-->

	      </tr>
	    </thead>
	    <tbody>";
	// check whether they exist in delivered and paid for database
	if($deliveries != 0){
		// continue
		if(count($deliveries) != 0){
			// continue
			// loop througt the items to check whether they already exist in the payment database
				$numb = 0;
			for($x = 0; $x < count($deliveries); $x++){
				// this is transtdb so first retrieve the actual prodid from the pickupds
				
				$itemid = $deliveries[$x]['itemid'];
				$cartname = $deliveries[$x]['cartname'];
				// actually first check whether the deliveries return frame has elapsed
				// first check whether its a complete or incdelivery
				$pickupContent = retrieveItemIdviaTransitItemid($conn, $itemid, $cartname);
				$actualproductid = substr($pickupContent['item'], 1);
				$productDetails = retrieveproductAllFields($conn, 'products', $actualproductid);
				// echo $actualproductid;
				$productName = $productDetails['itemtitle'];
				$image = $imagepre.''.$productDetails['imageone'];
				$category = $productDetails['category'];
				$subcategory = $productDetails['subcategory'];
				$price = number_format($productDetails['price']);
				$label = $productDetails['label'];
				// $size = $productDetails['size'];
				$sex = $productDetails['sex'];
				$seller = $productDetails['sellerid'];
				// retreive teh merchant details so that we can retreive their name and phonenumber
				$merchantdetails = getMerchantDetailsViaID($conn, $seller);
				$merchName = $merchantdetails['surname'].' '.$merchantdetails['firstname'].' '.$merchantdetails['lastname'];
				// echo $merchName;
				// print_r($itemDetails);
				

				$cartdelvstat = checkWhetherCartisCompleteDelivery($conn, 'deliveries', $cartname);
				// echo $cartname;
				if($cartdelvstat == True){
					// cart was delivered as a complete delivery so ....deliveries
					$delvdb = 'deliveries';
					// retrieve the delivery time
					$delvdate = retrieveCartstatsFromComDeliv($conn, $cartname)['date'];
					// echo "$delvdate Compdelv ->";
					// check whether expired
					// echo $cartname;
					$expiredstat = checkIfAtleast_ThisTimeHasElapsed($delvdate, '1 day');
					$maturetime = timeDeltaExtendTime_return($delvdate, '1 day', 'Y-m-d H:i:s');
					// if return date has expired then the merch should be paid for this
					// but first check whether the item already exists in the paid db
					// echo $cartname;
					if($expiredstat == True){
						// pay merchant
						// echo "niice your eligible to get paid";
						// check whether they exist in the payment db
						$paymentmade = checkWhertherPaymentRecordExists($conn, $actualproductid);
						if($paymentmade == True){
							// payment already made
							// echo "<td>$maturetime</td>";
							// echo "<td class=\"success\">PAID</td>";
							// echo "<td>$actualproductid</td>";
						}else{
							// payment pending// request payment
							// check whether item being returned
							$returnstatus = checkwhetheritemisOnReturnList($conn, $actualproductid);
							if($returnstatus == True){
								// item being returned
								// echo "<td>$maturetime</td>";
								// echo "<td class=\"danger\">Return Requested</td>";
								// echo "<td class=\"danger\">$actualproductid</td>";
							}else{
								// item okaay with the client
								// echo $cartname.' >>>>>>>>>>>>';

								$numb += 1;
								echo "
									<tr>
										<td>$numb</td>
										<td><img src=\"$image\" class=\"img-responsive\" style=\"max-height:50px;\"></td>
										<td>$productName</td>
										<td>$category/$subcategory</td>
										<td>$price Ksh</td>
										<td>$label</td>
										<td>$sex</td>
										<td>$merchName</td>
									
								";
								echo "<td>$maturetime</td>";
								echo "<td><a href=\"#awardPayment\" data-cart=\"$cartname\" data-prod=\"$actualproductid\" class=\"btn btn-danger btn-sm btn-payMerch\">Make Payment</></td>";
								// echo "<td>$actualproductid</td>";
							}
							
						}
					}else{
						// pending till 24 hours are over
						// possibly retrieve the deadline
						// echo "<td>$maturetime</td>";
						// echo "<td>Not Yet</td>";
						// echo "<td>$actualproductid</td>";
					}
				}else{
					// cart was delivered as an incomplete delivery so ....incdeliveries
					$delvdb = 'incdelivery';
					// retrieve teh delivery time
					$transitid = $deliveries[$x]['id'];
					$delvdate = retrieveIncDeliverySingleRecord($conn, $transitid, $cartname)['date'];
					// echo "$delvdate incompdelv ->";
					// check whether expired
					$expiredstat = checkIfAtleast_ThisTimeHasElapsed($delvdate, '1 day');
					$maturetime = timeDeltaExtendTime_return($delvdate, '1 day', 'Y-m-d H:i:s');
					// if return date has expired then the merch should be paid for this
					// but first check whether the item already exists in the paid db
					if($expiredstat == True){
						// pay merchant
						// echo "niice your eligible to get paid";
						// check whether they exist in the payment db
						$paymentmade = checkWhertherPaymentRecordExists($conn, $actualproductid);
						if($paymentmade == True){
							// payment already made
							// echo "<td>$maturetime</td>";
							// echo "<td class=\"success\">PAID</td>";
							// echo "<td>$actualproductid</td>";
						}else{
							// payment pending// request payment
							$returnstatus = checkwhetheritemisOnReturnList($conn, $actualproductid);
							if($returnstatus == True){
								// item being returned
								// echo "<td>$maturetime</td>";
								// echo "<td class=\"danger\">Return Requested</td>";
								// echo "<td class=\"danger\">$actualproductid</td>";
							}else{
								// item okaay with the client
								// echo $cartname.' >>>>>>>>>>>>';
								$numb += 1;
								echo "
									<tr>
										<td>$numb</td>
										<td><img src=\"$image\" class=\"img-responsive\" style=\"max-height:50px;\"></td>
										<td>$productName</td>
										<td>$category/$subcategory</td>
										<td>$price Ksh</td>
										<td>$label</td>
										<td>$sex</td>
										<td>$merchName</td>
									
								";
								echo "<td>$maturetime</td>";
								echo "<td><a href=\"#awardPayment\" data-cart=\"$cartname\" data-prod=\"$actualproductid\" class=\"btn btn-danger btn-sm btn-payMerch\">Make Payment</></td>";
								// echo "<td>$actualproductid</td>";
							}
							
						}
					}else{
						// pending till 24 hours are over
						// possibly retrieve the deadline
						// echo "<td>$maturetime</td>";
						// echo "<td>Not Yet</td>";
						// echo "<td>$actualproductid</td>";

					}

				}
				echo "</tr>";
				// check whether item has matured or not

				

			}
		}else{
			// no record found
			echo "
				<tr>
					<td>No records found</td>
				</tr>
			";
		}
	}else{
		// no record found
		echo "
				<tr>
					<td>No records found</td>
				</tr>
			";
	}
	// print_r($deliveries);
	echo "</tbody>
				</table>
				</div><div class=\"row\"><div id=\"awardPayment\" class=\"col-lg-12\"></div></div>";

}

function retrievepaymentsnotMatured($conn){
	$imagepre = returnImagePreAddrMtushUserProf();

	//Note that thsi script assumes that the delivery was made then obviously the devl modes are only two
	// check line 30 to understand more
	//thsi will retrieve all the transit items
	// it will then check to see whether they have been returned or sth
	// check whether the 1 day return period has passed
	// it should return all the items but also provide the button on only the matured ones
	// the rest be waiting and maybe show the time remaining
	// bam we return the list with an option to payout and the proper amount set with the 12.5% take out
	$deliveries = queryAllitemsDelivered($conn);
	echo "<div class=\"table-responsive\">
	<h4 class=\"text-center text-uppercase\">PAYMENTS YET TO MATURE</h4>
	  <table class=\"table\">
	    <thead>
	      <tr>
	        <th>No</th>
	        <th>Image</th>
	        <th>Name</th>
	        <th>Category</th>
	        <th>Price</th>
	        <th>Label</th>
	        <th>sex</th>
	        <th>Merchant</th>
	        <th>Maturing</th>
	        <th>Payment Status</th>
	        <!--<th>id</th>-->

	      </tr>
	    </thead>
	    <tbody>";
	// check whether they exist in delivered and paid for database
	if($deliveries != 0){
		// continue
		if(count($deliveries) != 0){
			// continue
			// loop througt the items to check whether they already exist in the payment database
				$numb = 0;
			for($x = 0; $x < count($deliveries); $x++){
				// this is transtdb so first retrieve the actual prodid from the pickupds
				
				$itemid = $deliveries[$x]['itemid'];
				$cartname = $deliveries[$x]['cartname'];
				// actually first check whether the deliveries return frame has elapsed
				// first check whether its a complete or incdelivery
				$pickupContent = retrieveItemIdviaTransitItemid($conn, $itemid, $cartname);
				$actualproductid = substr($pickupContent['item'], 1);
				$productDetails = retrieveproductAllFields($conn, 'products', $actualproductid);
				// echo $actualproductid;
				$productName = $productDetails['itemtitle'];
				$image = $imagepre.''.$productDetails['imageone'];
				$category = $productDetails['category'];
				$subcategory = $productDetails['subcategory'];
				$price = number_format($productDetails['price']);
				$label = $productDetails['label'];
				// $size = $productDetails['size'];
				$sex = $productDetails['sex'];
				$seller = $productDetails['sellerid'];
				// retreive teh merchant details so that we can retreive their name and phonenumber
				$merchantdetails = getMerchantDetailsViaID($conn, $seller);
				$merchName = $merchantdetails['surname'].' '.$merchantdetails['firstname'].' '.$merchantdetails['lastname'];
				// echo $merchName;
				// print_r($itemDetails);
				

				$cartdelvstat = checkWhetherCartisCompleteDelivery($conn, 'deliveries', $cartname);
				if($cartdelvstat == True){
					// cart was delivered as a complete delivery so ....deliveries
					$delvdb = 'deliveries';
					// retrieve the delivery time
					$delvdate = retrieveCartstatsFromComDeliv($conn, $cartname)['date'];
					// echo "$delvdate Compdelv ->";
					// check whether expired
					$expiredstat = checkIfAtleast_ThisTimeHasElapsed($delvdate, '1 day');
					$maturetime = timeDeltaExtendTime_return($delvdate, '1 day', 'Y-m-d H:i:s');
					// if return date has expired then the merch should be paid for this
					// but first check whether the item already exists in the paid db
					if($expiredstat == True){
						// pay merchant
						// echo "niice your eligible to get paid";
						// check whether they exist in the payment db
						$paymentmade = checkWhertherPaymentRecordExists($conn, $actualproductid);
						if($paymentmade == True){
							// payment already made
							// echo "<td>$maturetime</td>";
							// echo "<td class=\"success\">PAID</td>";
							// echo "<td>$actualproductid</td>";
						}else{
							// payment pending// request payment
							// check whether item being returned
							$returnstatus = checkwhetheritemisOnReturnList($conn, $actualproductid);
							if($returnstatus == True){
								// item being returned
								// echo "<td>$maturetime</td>";
								// echo "<td class=\"danger\">Return Requested</td>";
								// echo "<td class=\"danger\">$actualproductid</td>";
							}else{
								// item okaay with the client
								
								// echo "<td>$maturetime</td>";
								// echo "<td><a class=\"btn btn-danger btn-sm\">Request Payment</></td>";
								// echo "<td>$actualproductid</td>";
							}
							
						}
					}else{
						// pending till 24 hours are over
						// possibly retrieve the deadline
						$numb += 1;
								echo "
									<tr>
										<td>$numb</td>
										<td><img src=\"$image\" class=\"img-responsive\" style=\"max-height:50px;\"></td>
										<td>$productName</td>
										<td>$category/$subcategory</td>
										<td>$price Ksh</td>
										<td>$label</td>
										<td>$sex</td>
										<td>$merchName</td>
									
								";
						echo "<td>$maturetime</td>";
						echo "<td class=\"info\">Not Yet</td>";
						// echo "<td>$actualproductid</td>";
					}
				}else{
					// cart was delivered as an incomplete delivery so ....incdeliveries
					$delvdb = 'incdelivery';
					// retrieve teh delivery time
					$transitid = $deliveries[$x]['id'];
					$delvdate = retrieveIncDeliverySingleRecord($conn, $transitid, $cartname)['date'];
					// echo "$delvdate incompdelv ->";
					// check whether expired
					$expiredstat = checkIfAtleast_ThisTimeHasElapsed($delvdate, '1 day');
					$maturetime = timeDeltaExtendTime_return($delvdate, '1 day', 'Y-m-d H:i:s');
					// if return date has expired then the merch should be paid for this
					// but first check whether the item already exists in the paid db
					if($expiredstat == True){
						// pay merchant
						// echo "niice your eligible to get paid";
						// check whether they exist in the payment db
						$paymentmade = checkWhertherPaymentRecordExists($conn, $actualproductid);
						if($paymentmade == True){
							// payment already made
							// echo "<td>$maturetime</td>";
							// echo "<td class=\"success\">PAID</td>";
							// echo "<td>$actualproductid</td>";
						}else{
							// payment pending// request payment
							$returnstatus = checkwhetheritemisOnReturnList($conn, $actualproductid);
							if($returnstatus == True){
								// item being returned
								// echo "<td>$maturetime</td>";
								// echo "<td class=\"danger\">Return Requested</td>";
								// echo "<td class=\"danger\">$actualproductid</td>";
							}else{
								// item okaay with the client
								
								// echo "<td>$maturetime</td>";
								// echo "<td><a class=\"btn btn-danger btn-sm\">Request Payment</></td>";
								// echo "<td>$actualproductid</td>";
							}
							
						}
					}else{
						// pending till 24 hours are over
						// possibly retrieve the deadline
						$numb += 1;
								echo "
									<tr>
										<td>$numb</td>
										<td><img src=\"$image\" class=\"img-responsive\" style=\"max-height:50px;\"></td>
										<td>$productName</td>
										<td>$category/$subcategory</td>
										<td>$price Ksh</td>
										<td>$label</td>
										<td>$sex</td>
										<td>$merchName</td>
									
								";
						echo "<td>$maturetime</td>";
						echo "<td class=\"info\">Not Yet</td>";
						// echo "<td>$actualproductid</td>";

					}

				}
				echo "</tr>";
				// check whether item has matured or not

				

			}
		}else{
			// no record found
			echo "
				<tr>
					<td>No records found</td>
				</tr>
			";
		}
	}else{
		// no record found
		echo "
				<tr>
					<td>No records found</td>
				</tr>
			";
	}
	// print_r($deliveries);
	echo "</tbody>
				</table>
				</div>";

}

function retrieveReturnRecords($conn){
	$imagepre = returnImagePreAddrMtushUserProf();

	//Note that thsi script assumes that the delivery was made then obviously the devl modes are only two
	// check line 30 to understand more
	//thsi will retrieve all the transit items
	// it will then check to see whether they have been returned or sth
	// check whether the 1 day return period has passed
	// it should return all the items but also provide the button on only the matured ones
	// the rest be waiting and maybe show the time remaining
	// bam we return the list with an option to payout and the proper amount set with the 12.5% take out
	$deliveries = queryAllitemsDelivered($conn);
	echo "<div class=\"table-responsive\">
	<h4 class=\"text-center text-uppercase\">PAYMENTS ON HOLD (PRODUCT RETURN REQUESTED)</h4>
	  <table class=\"table\">
	    <thead>
	      <tr>
	        <th>No</th>
	        <th>Image</th>
	        <th>Name</th>
	        <th>Category</th>
	        <th>Price</th>
	        <th>Label</th>
	        <th>sex</th>
	        <th>Merchant</th>
	        <th>Maturing</th>
	        <th>Payment Status</th>
	        <!--<th>id</th>-->

	      </tr>
	    </thead>
	    <tbody>";
	// check whether they exist in delivered and paid for database
	if($deliveries != 0){
		// continue
		if(count($deliveries) != 0){
			// continue
			// loop througt the items to check whether they already exist in the payment database
				$numb = 0;
			for($x = 0; $x < count($deliveries); $x++){
				// this is transtdb so first retrieve the actual prodid from the pickupds
				
				$itemid = $deliveries[$x]['itemid'];
				$cartname = $deliveries[$x]['cartname'];
				// actually first check whether the deliveries return frame has elapsed
				// first check whether its a complete or incdelivery
				$pickupContent = retrieveItemIdviaTransitItemid($conn, $itemid, $cartname);
				$actualproductid = substr($pickupContent['item'], 1);
				$productDetails = retrieveproductAllFields($conn, 'products', $actualproductid);
				// echo $actualproductid;
				$productName = $productDetails['itemtitle'];
				$image = $imagepre.''.$productDetails['imageone'];
				$category = $productDetails['category'];
				$subcategory = $productDetails['subcategory'];
				$price = number_format($productDetails['price']);
				$label = $productDetails['label'];
				// $size = $productDetails['size'];
				$sex = $productDetails['sex'];
				$seller = $productDetails['sellerid'];
				// retreive teh merchant details so that we can retreive their name and phonenumber
				$merchantdetails = getMerchantDetailsViaID($conn, $seller);
				$merchName = $merchantdetails['surname'].' '.$merchantdetails['firstname'].' '.$merchantdetails['lastname'];
				// echo $merchName;
				// print_r($itemDetails);
				

				$cartdelvstat = checkWhetherCartisCompleteDelivery($conn, 'deliveries', $cartname);
				if($cartdelvstat == True){
					// cart was delivered as a complete delivery so ....deliveries
					$delvdb = 'deliveries';
					// retrieve the delivery time
					$delvdate = retrieveCartstatsFromComDeliv($conn, $cartname)['date'];
					// echo "$delvdate Compdelv ->";
					// check whether expired
					$expiredstat = checkIfAtleast_ThisTimeHasElapsed($delvdate, '1 day');
					$maturetime = timeDeltaExtendTime_return($delvdate, '1 day', 'Y-m-d H:i:s');
					// if return date has expired then the merch should be paid for this
					// but first check whether the item already exists in the paid db
					if($expiredstat == True){
						// pay merchant
						// echo "niice your eligible to get paid";
						// check whether they exist in the payment db
						$paymentmade = checkWhertherPaymentRecordExists($conn, $actualproductid);
						if($paymentmade == True){
							// payment already made
							// echo "<td>$maturetime</td>";
							// echo "<td class=\"success\">PAID</td>";
							// echo "<td>$actualproductid</td>";
						}else{
							// payment pending// request payment
							// check whether item being returned
							$returnstatus = checkwhetheritemisOnReturnList($conn, $actualproductid);
							if($returnstatus == True){
								// item being returned
								$numb += 1;
								echo "
									<tr>
										<td>$numb</td>
										<td><img src=\"$image\" class=\"img-responsive\" style=\"max-height:50px;\"></td>
										<td>$productName</td>
										<td>$category/$subcategory</td>
										<td>$price Ksh</td>
										<td>$label</td>
										<td>$sex</td>
										<td>$merchName</td>
									
								";
								echo "<td>$maturetime</td>";
								echo "<td class=\"danger\">Return Requested</td>";
								// echo "<td class=\"danger\">$actualproductid</td>";
							}else{
								// item okaay with the client
								
								// echo "<td>$maturetime</td>";
								// echo "<td><a class=\"btn btn-danger btn-sm\">Request Payment</></td>";
								// echo "<td>$actualproductid</td>";
							}
							
						}
					}else{
						// pending till 24 hours are over
						// possibly retrieve the deadline
						
						// echo "<td>$maturetime</td>";
						// echo "<td class=\"info\">Not Yet</td>";
						// echo "<td>$actualproductid</td>";
					}
				}else{
					// cart was delivered as an incomplete delivery so ....incdeliveries
					$delvdb = 'incdelivery';
					// retrieve teh delivery time
					$transitid = $deliveries[$x]['id'];
					$delvdate = retrieveIncDeliverySingleRecord($conn, $transitid, $cartname)['date'];
					// echo "$delvdate incompdelv ->";
					// check whether expired
					$expiredstat = checkIfAtleast_ThisTimeHasElapsed($delvdate, '1 day');
					$maturetime = timeDeltaExtendTime_return($delvdate, '1 day', 'Y-m-d H:i:s');
					// if return date has expired then the merch should be paid for this
					// but first check whether the item already exists in the paid db
					if($expiredstat == True){
						// pay merchant
						// echo "niice your eligible to get paid";
						// check whether they exist in the payment db
						$paymentmade = checkWhertherPaymentRecordExists($conn, $actualproductid);
						if($paymentmade == True){
							// payment already made
							// echo "<td>$maturetime</td>";
							// echo "<td class=\"success\">PAID</td>";
							// echo "<td>$actualproductid</td>";
						}else{
							// payment pending// request payment
							$returnstatus = checkwhetheritemisOnReturnList($conn, $actualproductid);
							if($returnstatus == True){
								// item being returned
								$numb += 1;
								echo "
									<tr>
										<td>$numb</td>
										<td><img src=\"$image\" class=\"img-responsive\" style=\"max-height:50px;\"></td>
										<td>$productName</td>
										<td>$category/$subcategory</td>
										<td>$price Ksh</td>
										<td>$label</td>
										<td>$sex</td>
										<td>$merchName</td>
									
								";
								echo "<td>$maturetime</td>";
								echo "<td class=\"danger\">Return Requested</td>";
								// echo "<td class=\"danger\">$actualproductid</td>";
							}else{
								// item okaay with the client
								
								// echo "<td>$maturetime</td>";
								// echo "<td><a class=\"btn btn-danger btn-sm\">Request Payment</></td>";
								// echo "<td>$actualproductid</td>";
							}
							
						}
					}else{
						// pending till 24 hours are over
						// possibly retrieve the deadline
						
						// echo "<td>$maturetime</td>";
						// echo "<td class=\"info\">Not Yet</td>";
						// echo "<td>$actualproductid</td>";

					}

				}
				echo "</tr>";
				// check whether item has matured or not

				

			}
		}else{
			// no record found
			echo "
				<tr>
					<td>No records found</td>
				</tr>
			";
		}
	}else{
		// no record found
		echo "
				<tr>
					<td>No records found</td>
				</tr>
			";
	}
	// print_r($deliveries);
	echo "</tbody>
				</table>
				</div>";

}

function retrieveclearedpayments($conn){
	$imagepre = returnImagePreAddrMtushUserProf();

	//Note that thsi script assumes that the delivery was made then obviously the devl modes are only two
	// check line 30 to understand more
	//thsi will retrieve all the transit items
	// it will then check to see whether they have been returned or sth
	// check whether the 1 day return period has passed
	// it should return all the items but also provide the button on only the matured ones
	// the rest be waiting and maybe show the time remaining
	// bam we return the list with an option to payout and the proper amount set with the 12.5% take out
	$deliveries = queryAllitemsDelivered($conn);
	echo "<div class=\"table-responsive\">
	<h4 class=\"text-center text-uppercase\">PAYMENTS ALREADY MADE</h4>
	  <table class=\"table\">
	    <thead>
	      <tr>
	        <th>No</th>
	        <th>Image</th>
	        <th>Name</th>
	        <th>Category</th>
	        <th>Price</th>
	        <th>Label</th>
	        <th>sex</th>
	        <th>Merchant</th>
	        <th>Maturing</th>
	        <th>Payment Status</th>
	        <!--<th>id</th>-->

	      </tr>
	    </thead>
	    <tbody>";
	// check whether they exist in delivered and paid for database
	if($deliveries != 0){
		// continue
		if(count($deliveries) != 0){
			// continue
			// loop througt the items to check whether they already exist in the payment database
				$numb = 0;
			for($x = 0; $x < count($deliveries); $x++){
				// this is transtdb so first retrieve the actual prodid from the pickupds
				
				$itemid = $deliveries[$x]['itemid'];
				$cartname = $deliveries[$x]['cartname'];
				// actually first check whether the deliveries return frame has elapsed
				// first check whether its a complete or incdelivery
				$pickupContent = retrieveItemIdviaTransitItemid($conn, $itemid, $cartname);
				$actualproductid = substr($pickupContent['item'], 1);
				$productDetails = retrieveproductAllFields($conn, 'products', $actualproductid);
				// echo $actualproductid;
				$productName = $productDetails['itemtitle'];
				$image = $imagepre.''.$productDetails['imageone'];
				$category = $productDetails['category'];
				$subcategory = $productDetails['subcategory'];
				$price = number_format($productDetails['price']);
				$label = $productDetails['label'];
				// $size = $productDetails['size'];
				$sex = $productDetails['sex'];
				$seller = $productDetails['sellerid'];
				// retreive teh merchant details so that we can retreive their name and phonenumber
				$merchantdetails = getMerchantDetailsViaID($conn, $seller);
				$merchName = $merchantdetails['surname'].' '.$merchantdetails['firstname'].' '.$merchantdetails['lastname'];
				// echo $merchName;
				// print_r($itemDetails);
				

				$cartdelvstat = checkWhetherCartisCompleteDelivery($conn, 'deliveries', $cartname);
				if($cartdelvstat == True){
					// cart was delivered as a complete delivery so ....deliveries
					$delvdb = 'deliveries';
					// retrieve the delivery time
					$delvdate = retrieveCartstatsFromComDeliv($conn, $cartname)['date'];
					// echo "$delvdate Compdelv ->";
					// check whether expired
					$expiredstat = checkIfAtleast_ThisTimeHasElapsed($delvdate, '1 day');
					$maturetime = timeDeltaExtendTime_return($delvdate, '1 day', 'Y-m-d H:i:s');
					// if return date has expired then the merch should be paid for this
					// but first check whether the item already exists in the paid db
					if($expiredstat == True){
						// pay merchant
						// echo "niice your eligible to get paid";
						// check whether they exist in the payment db
						$paymentmade = checkWhertherPaymentRecordExists($conn, $actualproductid);
						if($paymentmade == True){
							// payment already made
							$numb += 1;
								echo "
									<tr>
										<td>$numb</td>
										<td><img src=\"$image\" class=\"img-responsive\" style=\"max-height:50px;\"></td>
										<td>$productName</td>
										<td>$category/$subcategory</td>
										<td>$price Ksh</td>
										<td>$label</td>
										<td>$sex</td>
										<td>$merchName</td>
									
								";
							echo "<td>$maturetime</td>";
							echo "<td class=\"success\">PAID</td>";
							// echo "<td>$actualproductid</td>";
						}else{
							// payment pending// request payment
							// check whether item being returned
							$returnstatus = checkwhetheritemisOnReturnList($conn, $actualproductid);
							if($returnstatus == True){
								// item being returned
								
								// echo "<td>$maturetime</td>";
								// echo "<td class=\"danger\">Return Requested</td>";
								// echo "<td class=\"danger\">$actualproductid</td>";
							}else{
								// item okaay with the client
								
								// echo "<td>$maturetime</td>";
								// echo "<td><a class=\"btn btn-danger btn-sm\">Request Payment</></td>";
								// echo "<td>$actualproductid</td>";
							}
							
						}
					}else{
						// pending till 24 hours are over
						// possibly retrieve the deadline
						
						// echo "<td>$maturetime</td>";
						// echo "<td class=\"info\">Not Yet</td>";
						// echo "<td>$actualproductid</td>";
					}
				}else{
					// cart was delivered as an incomplete delivery so ....incdeliveries
					$delvdb = 'incdelivery';
					// retrieve teh delivery time
					$transitid = $deliveries[$x]['id'];
					$delvdate = retrieveIncDeliverySingleRecord($conn, $transitid, $cartname)['date'];
					// echo "$delvdate incompdelv ->";
					// check whether expired
					$expiredstat = checkIfAtleast_ThisTimeHasElapsed($delvdate, '1 day');
					$maturetime = timeDeltaExtendTime_return($delvdate, '1 day', 'Y-m-d H:i:s');
					// if return date has expired then the merch should be paid for this
					// but first check whether the item already exists in the paid db
					if($expiredstat == True){
						// pay merchant
						// echo "niice your eligible to get paid";
						// check whether they exist in the payment db
						$paymentmade = checkWhertherPaymentRecordExists($conn, $actualproductid);
						if($paymentmade == True){
							// payment already made
							$numb += 1;
								echo "
									<tr>
										<td>$numb</td>
										<td><img src=\"$image\" class=\"img-responsive\" style=\"max-height:50px;\"></td>
										<td>$productName</td>
										<td>$category/$subcategory</td>
										<td>$price Ksh</td>
										<td>$label</td>
										<td>$sex</td>
										<td>$merchName</td>
									
								";
							echo "<td>$maturetime</td>";
							echo "<td class=\"success\">PAID</td>";
							// echo "<td>$actualproductid</td>";
						}else{
							// payment pending// request payment
							$returnstatus = checkwhetheritemisOnReturnList($conn, $actualproductid);
							if($returnstatus == True){
								// item being returned
								
								// echo "<td>$maturetime</td>";
								// echo "<td class=\"danger\">Return Requested</td>";
								// echo "<td class=\"danger\">$actualproductid</td>";
							}else{
								// item okaay with the client
								
								// echo "<td>$maturetime</td>";
								// echo "<td><a class=\"btn btn-danger btn-sm\">Request Payment</></td>";
								// echo "<td>$actualproductid</td>";
							}
							
						}
					}else{
						// pending till 24 hours are over
						// possibly retrieve the deadline
						
						// echo "<td>$maturetime</td>";
						// echo "<td class=\"info\">Not Yet</td>";
						// echo "<td>$actualproductid</td>";

					}

				}
				echo "</tr>";
				// check whether item has matured or not

				

			}
		}else{
			// no record found
			echo "
				<tr>
					<td>No records found</td>
				</tr>
			";
		}
	}else{
		// no record found
		echo "
				<tr>
					<td>No records found</td>
				</tr>
			";
	}
	// print_r($deliveries);
	echo "</tbody>
				</table>
				</div>";

}

function cashflowonTiiva($conn, $prodid){
	// these is the money passing through tiiva
	// we should probably just retreive the money from the cart total + shipping
	// then subtract that from returns
	$imagepre = returnImagePreAddrMtushUserProf();
	// shouldnt be for carts since with incomplete carts, once can
	$productDetails  = retrieveproductAllFields($conn, 'products', $prodid);
	$sellerid = $productDetails['sellerid'];
	$sellerdetails = getMerchantDetailsViaID($conn, $sellerid);
	// print_r($sellerdetails);
	$productName = $productDetails['itemtitle'];
	$imageone = $imagepre.''.$productDetails['imageone'];
	$imagetwo = $imagepre.''.$productDetails['imagetwo'];
	$imagethree = $imagepre.''.$productDetails['imagethree'];
	$category = $productDetails['category'];
	$subcategory = $productDetails['subcategory'];
	$price = $productDetails['price'];
	$finalprice = number_format($price*0.875);
	$label = $productDetails['label'];
	$size = $productDetails['size'];

	$merchphoneno = $sellerdetails['phonenumber'];
	$sellername = $sellerdetails['surname'].' '.$sellerdetails['firstname'].' '.$sellerdetails['lastname'];
	echo "
		<div class=\"row\">
			<div class=\"col-lg-12\">
				<h4 class=\"text-center text-capitalize\">Merchant Payment Form</h4>
				<div class=\"row\">
					<div class=\"col-lg-5\">
						<h4 class=\"text-center\">Product Details</h4>
						<div class=\"row\">
							<div class=\"col-lg-3\"><img src=\"$imageone\" class=\"img-responsive\"></div>
							<div class=\"col-lg-6\"><img src=\"$imagetwo\" class=\"img-responsive\"></div>
							<div class=\"col-lg-3\"><img src=\"$imagethree\" class=\"img-responsive\"></div>
						</div>
						<div class=\"row\">
							<div class=\"col-lg-12\">
								<p class=\"text-center\">$productName</p>
								<p class=\"text-center\">$category | $subcategory | $size</p>
							</div>
						</div>
					</div>
					<div class=\"col-lg-7\">
						<h4 class=\"text-center\">Merchant Details</h4>
						
						<div class=\"row\" style=\"margin:2% 2%;\">
							<div class=\"col-lg-12\">
								<p>MERCHANT: James Mathikoroe Muthongorima</p>
								<div class=\"well\"> PHONENUMBER: $merchphoneno</div>
								<p>PAYOUT AMOUNT</p>
								<div class=\"well\"><span class=\"text-center\">$finalprice Ksh</span></div>
								<label for=\"Transaction\">TRANSACTION CODE</label>
								<input class=\"form-control input-lg text-uppercase recordpaymentcode\" placeholder=\"\" >
								<a class=\"btn btn-primary btn-block btn-lg processPayment\" data-phonenum=\"$merchphoneno\" data-sellername=\"$sellername\" style=\"margin-top:1%;\">RECORD PAYMENT</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	";


}

// retrieveallUnpaidClearDeliveries($conn);

function processpayment($conn, $prodid, $verifcode, $cartname, $sellername, $phonenum){
	// this will record the final payment records into the actual database
	$timenow = currentTime();
	$staffid = getStaffID();

	$query = "INSERT INTO `deliveranpaidfor` (`id`, `prodid`, `cartname`, `verificationcode`, `sellername`, `sellerphoneno`, `paidon`, `agent`) VALUES (NULL, '$prodid', '$cartname', '$verifcode', '$sellername', '$phonenum', '$timenow', '$staffid')";
	if($query_run = mysqli_query($conn, $query)){
		// continue
		echo "Payment Recorded Successfully";
	}else{
		echo "Error trying to record payment";
		// echo mysqli_error($conn);
	}

}

function showUnVerifiedCarts($conn){
	// thsi will retrieve uncleared carts ...means not yet verified...confirm they do or do not exist
	$carts = retrieveUnclearedCarts($conn);// these are the unverified carts so you can edit/destroy them but not 
	echo "<div class=\"table-responsive\">
	<h4 class=\"text-center text-uppercase\">Unverified carts</h4>
	  <table class=\"table table-hover\">
	    <thead>
	      <tr>
	        <th>No</th>
	        <th>Cartname</th>
	        <th>CartTotal</th>
	        <th>Date</th>
	        <th>Vefirication</th>
	        <th>Flag</th>
	        <th>Delete</th>
	        <th>Edit</th>
	      </tr>
	    </thead>
	    <tbody>";
	if($carts != 0){
		if(count($carts) != 0){
			for($x = 0; $x < count($carts); $x++){
				$numb = $x + 1;
				$singleCart = $carts[$x];
				$cartname = $singleCart['cartname'];
				$carttotal = number_format($singleCart['carttotal'] + 150);
				$date = $singleCart['Date'].' '.$singleCart['time'];
				$paymentverification = $singleCart['paymentverification'];
				echo "
					<tr>
						<td>$numb</td>
						<td>$cartname</td>
						<td>Ksh $carttotal</td>
						<td>$date</td>
						<td class=\"text-uppercase\">$paymentverification</td>
						<td><a class=\"btn btn-sm btn-warning cartverifflg\" data-cart=\"$cartname\">Flag</a></td>
						<td><a class=\"btn btn-sm btn-danger cartverifdel\" data-cart=\"$cartname\">Delete</a></td>
						<td><a href=\"#retFrmCnt\" class=\"btn btn-sm btn-info cartverifedt\" data-cart=\"$cartname\">Edit</a></td>
					";
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
				</div><div id=\"retFrmCnt\"></div>";
}
// showUnVerifiedCarts($conn);

function reCartFormEditReturn($conn, $cartname){
	// retrieve cart details and return a form with the cart details and an input to update the verif code
	$cartDetails = retrieveSingleCartBasedOnField($conn, 'cartname', $cartname, 'clear', '0');
	if($cartDetails != 0){
		$cartprice = number_format($cartDetails['carttotal'] + 150);
		$cartVerif = $cartDetails['paymentverification'];
		$date = $cartDetails['Date'];
		// echo "the carts";
		echo "<div class=\"row\">
				<div class=\"col-lg-12\">
					<h4 class=\"text-center\">Edit Cart Verif</h4>
					<table class=\"table table-responsive table-inverse\">
						<thead>
							<tr>
								<th>cartname</th>
								<th>carttotal</th>
								<th>Verifcode</th>
								<th>Date</th>
								<th class=\"info\">NewVerifCode</th>
								<th class=\"info\">Submit</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>$cartname</td>
								<td>$cartprice Ksh</td>
								<td class=\"text-uppercase\">$cartVerif</td>
								<td>$date</td>
								<td class=\"success\"><input class=\"form-control text-uppercase newVerifCode\" type=\"text\" placeholder=\"Paste New Verification Code\"/></td>
								<td class=\"success\"><a class=\"btn btn-success btn-sm renewVerif\" data-cart-renew=\"$cartname\">Submit</a></td>
							</tr>
							
						</tbody>
					</table>
				</div>
			</div>";
	}else{
		echo 0;
	}

}

// echo reCartFormEditReturn($conn, '12dc73817b38bca793154c9f9e3b4db8');

function udpateCartVerif($conn, $cart, $newVerif){
	// this will update the cart verification code being edited
	// it will also create a log to indicate that this cart has been edited...loggint its name, total, formerverif, new verif
	$cartDetails = retrieveSingleCartBasedOnField($conn, 'cartname', $cart, 'clear', '0');
	if($cartDetails != 0){
		$cartprice = number_format($cartDetails['carttotal'] + 150);
		$cartVerif = $cartDetails['paymentverification'];
		$date = $cartDetails['Date'];

		$LogVerifChange = createNewTweakCartRecord($conn, 'edit', $cart, $cartprice, $cartVerif, $newVerif);
		if($LogVerifChange != 0){
			$updateVerifCheckoutCrt = updateCartRecordVerif($conn, $cart, $newVerif);
			if($updateVerifCheckoutCrt == 1){
				echo "UPDATED";
			}else{
				echo "error";
			}
		}else{
			echo 0;
		}

	}else{
		echo 0;
	}
}

function flagCart($conn, $cartname){
	//this will flag a cart by first creating a row with value flag simply put
	$cartDetails = retrieveSingleCartBasedOnField($conn, 'cartname', $cartname, 'clear', '0');
	if($cartDetails != 0){
		$cartprice = number_format($cartDetails['carttotal'] + 150);
		$cartVerif = $cartDetails['paymentverification'];
		$date = $cartDetails['Date'];
		$LogVerifChange = createNewTweakCartRecord($conn, 'flag', $cartname, $cartprice, $cartVerif, '');
		if($LogVerifChange != 0){
			echo "flagged";
		}else{
			echo "error";
		}
	}else{
		echo 0;
	}

}

function deleteCart($conn, $cartname){
	//TODO remember that sold will contain deleted carts too...ghost carts comprende
	// this will create a delete row in the modcart record
	// then it will delete the checkoutcart value----I think we can leave behind the sold for now to be able to follow throught
	// delete the items from cartactivity too
	// it will then clear all the items previously in the cart
	// also for now only I can and should delete carts to we'll check whether current user is me
	$user = getStaffID();
	if($user == 1){
		//1 is me then proceed
		$cartDetails = retrieveSingleCartBasedOnField($conn, 'cartname', $cartname, 'clear', '0');
		$cartprice = number_format($cartDetails['carttotal'] + 150);
		$cartVerif = $cartDetails['paymentverification'];
		$date = $cartDetails['Date'];
		$cartcontents = $cartDetails['cartcontents'];
		$cartcontentsArray =convertcartContentsStringToArray($cartcontents);
		for($x = 0; $x < count($cartcontentsArray); $x++){
			$singleItem = substr($cartcontentsArray[$x], 1);
			$makeavail = makeCartItemsAvailable($conn, $singleItem);
			if($makeavail == 1){
				$rmvCartActv = removeItemsFromCartActivity($conn, $singleItem);
				if($rmvCartActv == 1){
					//done
				}else{
					echo "error2";
				}
			}else{
				echo "error1";
			}
		}
		//TODO this is wrong the loop above as if the code breaks we're not stopping it....
		$logCartDel = createNewTweakCartRecord($conn, 'del', $cartname, $cartprice, $cartVerif, '');
		if($logCartDel == 1){
			//continue
			$delCheckoutCrts = DelCheckoutCart($conn, $cartname, '0');
			if($delCheckoutCrts == 1){
				echo "Success";
			}else{
				echo "error4";
			}
		}else{
			echo "error3";
		}
	}else{
		echo "denied";
	}

}

// deleteCart($conn, '220ef38f01e3dd79ec41a35ec5b006fd');

if(isset($_POST['deliveries']) && $_POST['deliveries'] == '43lk489'){
	retrieveallUnpaidClearDeliveries($conn);
}elseif(isset($_POST['deliveries']) && $_POST['deliveries'] == 'kl23l239832'){
	retrievepaymentstoAward($conn);
}elseif(isset($_POST['deliveries']) && $_POST['deliveries'] == 'unamtured43lk34P'){
	retrievepaymentsnotMatured($conn);
}elseif(isset($_POST['deliveries']) && $_POST['deliveries'] == 'returns298349'){
	retrieveReturnRecords($conn);
}elseif(isset($_POST['deliveries']) && $_POST['deliveries'] == 'paymentscleared202l2k3389'){
	retrieveclearedpayments($conn);
}elseif(isset($_POST['returnform']) && $_POST['returnform'] == '45lk9834' && isset($_POST['prodid']) && !empty($_POST['prodid'])){
	$prodid = mysqli_real_escape_string($conn, $_POST['prodid']);
	cashflowonTiiva($conn, $prodid);
}elseif(isset($_POST['prodid']) && !empty($_POST['prodid']) && isset($_POST['verifcode']) && !empty($_POST['verifcode']) && isset($_POST['cartname']) && !empty($_POST['cartname']) && isset($_POST['sellername']) && !empty($_POST['sellername']) && isset($_POST['phonenum']) && !empty($_POST['phonenum'])){
	$prodid = mysqli_real_escape_string($conn, $_POST['prodid']);
	$verifcode = mysqli_real_escape_string($conn, $_POST['verifcode']);
	$cartname = mysqli_real_escape_string($conn, $_POST['cartname']);
	$sellername = mysqli_real_escape_string($conn, $_POST['sellername']);
	$phonenum = mysqli_real_escape_string($conn, $_POST['phonenum']);
	processpayment($conn, $prodid, $verifcode, $cartname, $sellername, $phonenum);
}elseif(isset($_POST['viewTwkCarts']) && $_POST['viewTwkCarts'] == 'lk439lk9843D4_08'){
	showUnVerifiedCarts($conn);
}elseif(isset($_POST['retfrm']) && $_POST['retfrm'] == 'klsdko439834_sd98' && isset($_POST['cart']) && !empty($_POST['cart'])){
	$cartname = mysqli_real_escape_string($conn, $_POST['cart']);
	echo reCartFormEditReturn($conn, $cartname);
}elseif(isset($_POST['sbtmNewVerif']) && $_POST['sbtmNewVerif'] == '43lk48_04k3l9' && isset($_POST['cartname']) && !empty($_POST['cartname']) && isset($_POST['newVerif']) && !empty($_POST['newVerif'])){
	$cartname = mysqli_real_escape_string($conn, $_POST['cartname']);
	$newVerif = mysqli_real_escape_string($conn, $_POST['newVerif']);
	echo udpateCartVerif($conn, $cartname, $newVerif);
}elseif(isset($_POST['noewkliuw']) && $_POST['noewkliuw'] == '32lk3_32j78' && isset($_POST['flag']) && !empty($_POST['flag'])){
	$cartname = mysqli_real_escape_string($conn, $_POST['flag']);
	echo flagCart($conn, $cartname);
}elseif(isset($_POST['deliosete']) && $_POST['deliosete'] == '_kds983_23lk' && isset($_POST['delt']) && !empty($_POST['delt'])){
	$cartname = mysqli_real_escape_string($conn, $_POST['delt']);
	echo deleteCart($conn, $cartname);
}else{
	echo "empty err";
}


// "prodid="+productitem+"&verifcode="+verifcode+"&cartname="+productcart+"&sellername="+sellername+"&phonenum"+sellerphoneno
?>
