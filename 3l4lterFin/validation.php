<?php 
$callbackResponse = file_get_contents('php://input');

// $logfile = 'callbackResponse.txt';
// $log = fopen($logfile, 'w');
// fwrite($log, $callbackResponse);
// fclose($log);
// use result code responsecode should be 0 for success
// save records in database for records with 
$CheckoutResponose = json_decode($callbackResponse);
if($CheckoutResponose->ResponseCode == 0){
	$logfile = 'callbackResponse.txt';
	$log = fopen($logfile, 'w');
	fwrite($log, $callbackResponse);
	fclose($log);
	// log user details in the database and retrieve user details
}else{
	return 0;
	// could not confirm payment...try again
}

 
?>