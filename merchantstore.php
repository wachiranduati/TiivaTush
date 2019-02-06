<?php
session_start();
ob_start();
require 'connect.php';
require 'utils/userutils.php';

if(isset($_POST['merch']) && is_numeric($_POST['merch'])){
	$merchant = $_POST['merch'];
	echo getMerchantStoreName($conn, $merchant);
}
?>