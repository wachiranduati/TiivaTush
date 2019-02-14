<?php
ob_start();
session_start();
require 'connect.php';
require 'utils/adminutils.php';

if(isStaffLoggedIn() != True){
	redirectAndDie();
}

function pendingCarts($conn){
	// this will return all the information pertaining to carts that have been checked out 
	// but their payment verification is currently pending
	$row = retrieveallCartsBasedonClearing($conn, 0, 'INCOMPLETE');// retrieve incomplete and 0 clear
	// incomplete means they've not already been delivered
	// insist that no pickup/delivery be made on carts not cleared else you might deliver an item for free
	echo showHeaderMessage("h3", "Pending Carts");
	echo "
		<div class=\"form-row\" style=\"margin:1% 0 0 0;\">
			<input class=\"form-control text-uppercase\" id=\"transactionCode\" placeholder=\"Enter transaction code in here to clear pending carts\" style=\"border-radius-bottom-right:0;border-radius-bottom-left:0;\"/>
		</div>
		<div class=\"form-row pendingCartsResulsts\" style=\"position:absolute;z-index:3;background-color:gainsboro;width:97%;display:none;\"><h3 class=\"text-center\">Nothing to claim here</h3></div>
	";
	echo "
		<table class=\"table table-responsive table-striped\">
	<thead>
		<tr>
			<th>Number</th>
			<th>cart</th>
			<th>Time</th>
			<th>Shiptype</th>
			<th>Total</th>
			<th>verification</th>
		</tr>
	</thead>
	<tbody>
	";
	// table columns to create..
	// number, cart, total, time, total, shiptype, action, 
	if($row != 0){
		for($x = 0; $x < count($row); $x++){
			$numbering = ceil($x+1);
			$cart = $row[$x]['cartname'];
			$time = $row[$x]['Date'].' '.$row[$x]['time'];
			$shiptype = $row[$x]['cartname'];
			$total = $row[$x]['carttotal'];
			$verification = substr($row[$x]['paymentverification'], 0, 2).'******'.substr($row[$x]['paymentverification'], 10);
			$soldval = retrieveSoldValuesforCart($conn, $cart);
			$shiptype = $soldval['shipping']; 
			if(strtolower($shiptype) == 'free'){
				$shippingCost = 0;
			}else{
				$shippingCost = 400;
			}
			$grandtotal = ceil($total + $shippingCost);
			
			echo "
				<tr>
					<td>$numbering</td>
					<td>$cart</td>
					<td>$time</td>
					<td>$shiptype</td>
					<td>$grandtotal</td>
					<td>$verification</td>
				</tr>
			";
		}
	}else{
		echo showHeaderMessage('h3', 'No Pending carts At the Moment');
	}
	// final segment of the table
	echo "
		</tbody>
	</table>
	";
}

 // echo pendingCarts($conn);

 function verifyPendingCart($conn, $verificationCode){
 	// this will return a list of all the matching pending carts for that particular verification code
 	$verifpendingMatches = retrieveCartsBasedOnVerification($conn, $verificationCode, 'INCOMPLETE', 0);
 	echo showHeaderMessage("h3", "Matching Pending Carts");
 	echo "
		<table class=\"table table-responsive table-hover\">
	<thead>
		<tr>
			<th>cart</th>
			<th>Time</th>
			<th>Shiptype</th>
			<th>Total</th>
			<th>TransactionCd</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	";
	if($verifpendingMatches != 0){
		// continue
		for($x = 0; $x < count($verifpendingMatches); $x++){
			$cart = $verifpendingMatches[$x]['cartname'];
			$time = $verifpendingMatches[$x]['Date'].' '.$verifpendingMatches[$x]['time'];
			$shiptype = $verifpendingMatches[$x]['cartname'];
			$total = $verifpendingMatches[$x]['carttotal'];
			$verification = $verifpendingMatches[$x]['paymentverification'];
			$soldval = retrieveSoldValuesforCart($conn, $cart);
			$shiptype = $soldval['shipping']; 
			if(strtolower($shiptype) == 'free'){
				$shippingCost = 0;
			}else{
				$shippingCost = 400;
			}
			$grandtotal = ceil($total + $shippingCost);
			
			echo "
				<tr>
					<td>$cart</td>
					<td>$time</td>
					<td>$shiptype</td>
					<td>$grandtotal</td>
					<td>$verification</td>
					<td><a class=\"btn btn-success btn-sm verifyPaymentBtn\" data-cart=\"$cart\" data-verif-code=\"$verification\">Verify Payment</a></td>
				</tr>
			";
		}
	}else{
		echo showHeaderMessage('h3', 'No Matching Verification codes found');
	}

	echo "
		</tbody>
	</table>
	";


}

function clearedCarts($conn){
	// this will return all the information pertaining to carts that have been checked out 
	// but their payment verification is currently pending
	$row = retrieveallCartsBasedonClearing($conn, 1, 'INCOMPLETE');// retrieve complete and 1 clear
	// incomplete means they've not already been delivered
	// insist that no pickup/delivery be made on carts not cleared else you might deliver an item for free
	echo showHeaderMessage("h3", "ClearedCarts");
	echo "
		<div class=\"form-row\" style=\"margin:1% 0 0 0;\">
			<input class=\"form-control text-uppercase\" id=\"transactionCode\" placeholder=\"Enter transaction code in here to retrieve cleared carts\" style=\"border-radius-bottom-right:0;border-radius-bottom-left:0;\"/>
		</div>
		<div class=\"form-row pendingCartsResulsts\" style=\"position:absolute;z-index:3;background-color:gainsboro;width:97%;display:none;\"><h3 class=\"text-center\">Nothing to claim here</h3></div>
	";
	echo "
		<table class=\"table table-responsive table-striped\">
	<thead>
		<tr>
			<th>Number</th>
			<th>cart</th>
			<th>checkout-Time</th>
			<th>Shiptype</th>
			<th>Total</th>
			<th>verification</th>
			<th>verifiedBy</th>
			<th>verifiedon</th>
		</tr>
	</thead>
	<tbody>
	";
	// table columns to create..
	// number, cart, total, time, total, shiptype, action, 
	if($row != 0){
		for($x = 0; $x < count($row); $x++){
			$numbering = ceil($x+1);
			$cart = $row[$x]['cartname'];
			$time = $row[$x]['Date'].' '.$row[$x]['time'];
			$shiptype = $row[$x]['cartname'];
			$total = $row[$x]['carttotal'];
			$transactioncode = $row[$x]['paymentverification'];
			$soldval = retrieveSoldValuesforCart($conn, $cart);
			$shiptype = $soldval['shipping']; 
			if(strtolower($shiptype) == 'free'){
				$shippingCost = 0;
			}else{
				$shippingCost = 400;
			}
			$grandtotal = ceil($total + $shippingCost);
			$verificationdetails = retrieveVerificationCartDetails($conn, $transactioncode);
			$verifiedBy = $verificationdetails['verifiedby'];
			$verifiedon = $verificationdetails['verifiedon'];
			
			echo "
				<tr>
					<td>$numbering</td>
					<td>$cart</td>
					<td>$time</td>
					<td>$shiptype</td>
					<td>$grandtotal</td>
					<td>$transactioncode</td>
					<td>$verifiedBy</td>
					<td>$verifiedon</td>
				</tr>
			";
		}
	}else{
		echo showHeaderMessage('h3', 'No Pending carts At the Moment');
	}
	// final segment of the table
	echo "
		</tbody>
	</table>
	";
}

function verifyClearedCart($conn, $verificationCode){
 	// this will return a list of all the matching pending carts for that particular verification code
 	$verifpendingMatches = retrieveCartsBasedOnVerificationBothCompandIncomplete($conn, $verificationCode, 1);
 	echo showHeaderMessage("h3", "Matching Cleared Carts");
 	echo "
		<table class=\"table table-responsive table-hover\">
	<thead>
		<tr>
			<th>cart</th>
			<th>Time</th>
			<th>Shiptype</th>
			<th>Total</th>
			<th>TransactionCd</th>
			<th>VerifiedBy</th>
			<th>VerifiedOn</th>
			<th>undo</th>
		</tr>
	</thead>
	<tbody>
	";
	if($verifpendingMatches != 0){
		// continue
		for($x = 0; $x < count($verifpendingMatches); $x++){
			$cart = $verifpendingMatches[$x]['cartname'];
			$time = $verifpendingMatches[$x]['Date'].' '.$verifpendingMatches[$x]['time'];
			$shiptype = $verifpendingMatches[$x]['cartname'];
			$total = $verifpendingMatches[$x]['carttotal'];
			$verification = $verifpendingMatches[$x]['paymentverification'];
			$soldval = retrieveSoldValuesforCart($conn, $cart);
			$shiptype = $soldval['shipping']; 
			if(strtolower($shiptype) == 'free'){
				$shippingCost = 0;
			}else{
				$shippingCost = 400;
			}
			$grandtotal = ceil($total + $shippingCost);
			$verificationdetails = retrieveVerificationCartDetails($conn, $verification);
			$verifiedBy = $verificationdetails['verifiedby'];
			$verifiedon = $verificationdetails['verifiedon'];
			if($verifiedBy == getStaffName($conn)){
				//check whether time has elapsed
				if(checkIfAtleast_ThisTimeHasElapsed($verifiedon, '1 hour') == True){
					// do not show the button...time has passed
					$undomod = "-";
				}else{
					// show the button time is still young
					$undomod = "<a class=\"btn btn-warning btn-sm undoverification\" data-cart=\"$cart\" data-verif=\"$verification\">Undo Verification</a>";
				}
			}else{
				// disable undo
				$undomod = "-";
			}
			
			echo "
				<tr>
					<td>$cart</td>
					<td>$time</td>
					<td>$shiptype</td>
					<td>$grandtotal</td>
					<td>$verification</td>
					<td>$verifiedBy</td>
					<td>$verifiedon</td>
					<td>$undomod</td>
					
				</tr>
			";
		}
	}else{
		echo showHeaderMessage('h3', 'No Matching Verification codes found');
	}

	echo "
		</tbody>
	</table>
	";


}

if(isset($_POST['carts']) && $_POST['carts'] == 'pendingcarts'){
	echo pendingCarts($conn);
}elseif(isset($_POST['pendingcarts']) && !empty($_POST['pendingcarts'])){
	$verificationCode = mysqli_real_escape_string($conn, $_POST['pendingcarts']);
	echo verifyPendingCart($conn, $verificationCode);
}elseif(isset($_POST['cartname']) && !empty($_POST['cartname']) && isset($_POST['transcode']) && !empty($_POST['transcode'])){
	// verify cart--> update checkout cart clear to 1
	// create a new entry with staff name and cart verified
	$transcode = mysqli_real_escape_string($conn, $_POST['transcode']);
	$cartname = mysqli_real_escape_string($conn, $_POST['cartname']);
	$logstatus = logCartVerifications($conn, $cartname, $transcode);
	if($logstatus == 1){
		echo clearOrUnclearCart($conn, $cartname, 1);
	}else{
		die("Error cannot validate");
	}

}elseif(isset($_POST['clearedcarts']) && $_POST['clearedcarts'] == 'cleared43dscarts'){
	echo clearedCarts($conn);
}elseif(isset($_POST['verifiedcarts']) && !empty($_POST['verifiedcarts'])){
	$verificationCode = mysqli_real_escape_string($conn, $_POST['verifiedcarts']);
	echo verifyClearedCart($conn, $verificationCode);
}elseif(isset($_POST['undoverification']) && !empty($_POST['undoverification']) && isset($_POST['verifcart']) && !empty($_POST['verifcart'])){
	// unveryfying the piece of code from earlier on
	$unvCode = mysqli_real_escape_string($conn, $_POST['undoverification']);
	$verifcart = mysqli_real_escape_string($conn, $_POST['verifcart']);
	// delete the row ... update checkout clear to 0
	$deletVerRow = deleteCartVerificationLog($conn, $unvCode);
	if($deletVerRow == 1){
		// continue
		echo clearOrUnclearCart($conn, $verifcart, 0);
	}else{
		die('Error unveryfying the cart');
	}
}
?>
	