<?php 
ob_start();
session_start();
require 'connect.php';
require 'utils/adminutils.php';

// if not staff die
if(isStaffLoggedIn() == False){
	redirectAndDie();
}

function returnMerchantDetailsActivate($conn, $natID){
	// require staffer to input their passowrd before returning merchant details
	$merchantDetails = getMerchantDetailsviaNatID($conn, $natID);
	if($merchantDetails != 0){
		// print_r($merchantDetails);
		$merchantName = $merchantDetails['firstname'].' '.$merchantDetails['lastname'].' '.$merchantDetails['surname'];
		$merchBusiness = $merchantDetails['businessname'];
		$county = $merchantDetails['county'];
		$township = $merchantDetails['township'];
		$activate = $merchantDetails['activate'];
		if($activate == 0){
			$status = "INACTIVE";
		}else{
			$status = "ACTIVATED";
		}
		$registeredOn = $merchantDetails['day'].' at '.$merchantDetails['time'];
		$gpsCoords = $merchantDetails['gps'];
		$merchPhoneno = $merchantDetails['phonenumber'];
		$agentUpdating = getStaffName($conn);

		echo "
		<div class=\"form-row\">
    <div class=\"form-group col-md-6\">
      <label for=\"merchantName\">Merchant Name</label>
      <input type=\"text\" class=\"form-control\" value=\"$merchantName\" id=\"merchantName\" placeholder=\"merchant Name\" disabled>
    </div>
    <div class=\"form-group col-md-6\">
      <label for=\"merchBusiness\">Merchant Business</label>
      <input type=\"text\" class=\"form-control\" value=\"$merchBusiness\" id=\"merchBusiness\" placeholder=\"Merchants Business Name\" disabled>
    </div>
    <div class=\"form-group col-md-6\">
      <label for=\"county\">County</label>
      <input type=\"text\" class=\"form-control\" value=\"$county\" id=\"county\" placeholder=\"Merchants county\" disabled>
    </div>
    <div class=\"form-group col-md-6\">
      <label for=\"township\">township</label>
      <input type=\"text\" class=\"form-control\" value=\"$township\" id=\"township\" placeholder=\"Merchants township\" disabled>
    </div>
    <div class=\"form-group col-md-6\">
      <label for=\"status\">status</label>
      <input type=\"text\" class=\"form-control\" value=\"$status\" id=\"status\" placeholder=\"Activated/unactivated\" disabled>
    </div>
    <div class=\"form-group col-md-6\">
      <label for=\"registeredOn\">registeredOn</label>
      <input type=\"text\" class=\"form-control\" value=\"$registeredOn\" id=\"registeredOn\" placeholder=\"Merchant Registration Date\" disabled>
    </div>
  </div>
  <div class=\"form-group col-md-6\">
    <label for=\"gpsCoords\">Merchant GPS Coordinates</label>
    <input type=\"text\" class=\"form-control\" value=\"$gpsCoords\" id=\"gpsCoords\" placeholder=\"Exact position of the Merchant's business eg. 1.2921° S, 36.8219° E\">
  </div>
  <div class=\"form-group col-md-6\">
    <label for=\"merchPhoneno\">Merchant Phonenumber (Highly discouraged)</label>
    <input type=\"text\" class=\"form-control\" value=\"$merchPhoneno\" id=\"merchPhoneno\" placeholder=\"Merchants phonenumber\" disabled>
  </div>
  <div class=\"form-group col-md-2\"></div>
  <div class=\"form-group col-md-8\">
      <label for=\"agentUpdating\">Tiiva Agent Updating/Activating</label>
      <input type=\"text\" class=\"form-control\" value=\"$agentUpdating\" id=\"agentUpdating\" placeholder=\"Tiiva Agent updating Merchant info\" disabled>
    </div>
    <div class=\"form-group col-md-2\"></div>
  <div class=\"form-group col-md-4\"></div>
  <div class=\"form-group col-md-4 sucessmessage\">
      <button type=\"button\" class=\"btn btn-primary activateMerchantBtn\">ACTIVATE/UPDATE MERCHANT - $merchBusiness</button>
    </div>
  <div class=\"form-group col-md-4\"></div>
	";
	}else{
		die(showHeaderMessage('h3', "User does not exist"));
	}
	
}

// returnMerchantDetailsActivate();



if(isset($_POST['staffCheck']) && !empty($_POST['staffCheck']) && isset($_POST['merchID']) && !empty($_POST['merchID'])){
	$staffCheck = $_POST['staffCheck'];
	$merchID = $_POST['merchID'];
	if($staffCheck == getStaffID()){
		echo returnMerchantDetailsActivate($conn, $merchID);
	}else{
		echo showHeaderMessage('h3', "Please input your proper Tiiva Id or you will be logged out");
	}
}elseif(isset($_POST['gprs']) && isset($_POST['merchId']) && !empty($_POST['gprs']) && !empty($_POST['merchId'])){
	$gprs = mysqli_real_escape_string($conn, $_POST['gprs']);
	$merchId = mysqli_real_escape_string($conn, $_POST['merchId']);
	echo updateActivateMerchant($conn, $gprs, $merchId);

}else{
	echo "nothing was set";
}

?>