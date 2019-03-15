<?php 
function get_accesstoken($consumer_key, $consumer_secret){
	// retrieves user auth token
 $credentials = base64_encode($consumer_key.':'.$consumer_secret);
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials');
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
 curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Basic '.$credentials, 'Content-Type: application/json'));
 $response = curl_exec($ch);
 curl_close($ch);
 $response = json_decode($response);
 
 $access_token = $response->access_token;
 
 if(!$access_token){
 throw new Exception("Invalid access token generated");
 return FALSE;
 }
 return $access_token;
 }

 function submit_request($endpoint_url, $json_body){ 
 	// most submit requests are the same with only the body and url changing so thsi is a good base to handle that
 $access_token = get_accesstoken();
 
 if($access_token != '' || $access_token !== FALSE){
 $curl = curl_init();
 curl_setopt($curl, CURLOPT_URL, $endpoint_url);
 curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Authorization: Bearer '.$access_token));
 
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
 curl_setopt($curl, CURLOPT_POST, TRUE);
 curl_setopt($curl, CURLOPT_POSTFIELDS, $json_body);
 
 $response = curl_exec($curl);
 curl_close($curl);
 return $response;
 }else{
 throw new Exception("Access token is invalid");
 }
 }
?>