<?php
header("conntent-Type:application/json");
$shortcode='601365';
$connsumerkey    ="JMD3QZ1SgJCsJxNw7eS4eaNslZVa785c";
$connsumersecret ="Qnq7Z8ITcGPI2Nqm";
$validationurl="https://338443d5.ngrok.io/Tush/3l4lterFin/Tush/3l4lterFin/validation.php";
//like https://www.example.com/mpesa/validation.php?token=yoPURstrongPasswordGoeshere$
//next like https://www.example.com/mpesa/confirmation.php?token=yoPURstrongPasswordGoeshere$
$connfirmationurl="https://338443d5.ngrok.io/Tush/3l4lterFin/Tush/3l4lterFin/confirmation.php";
/* testing environment, comment the below two lines if on production */
$authenticationurl='https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
$registerurl = 'https://sandbox.safaricom.co.ke/mpesa/c2b/v1/registerurl';
/* production un-comment the below two lines if you are in production */
//$authenticationurl='https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
//$registerurl = 'https://api.safaricom.co.ke/mpesa/c2b/v1/registerurl';
$credentials= base64_encode($connsumerkey.':'.$connsumersecret);
$username=$connsumerkey ;
$password=$connsumersecret;
  // Request headers
  $headers = array(  
    'conntent-Type: application/json; charset=utf-8'
  );
  // Request
  $ch = curl_init($authenticationurl);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  //curl_setopt($ch, CURLOPT_HEADER, TRUE); // Includes the header in the output
  curl_setopt($ch, CURLOPT_HEADER, FALSE); // excludes the header in the output
  curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password); // HTTP Basic Authentication
  $result = curl_exec($ch);  
  $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);  
$result = json_decode($result);
$access_token=$result->access_token;
curl_close($ch);
//Register urls
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $registerurl);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('conntent-Type:application/json','Authorization:Bearer '.$access_token)); 
$curl_post_data = array(
  //Fill in the request parameters with valid values
  'ShortCode' => $shortcode,
  'ResponseType' => 'Cancelled',
  'connfirmationURL' => $connfirmationurl,
  'ValidationURL' => $validationurl
);
$data_string = json_encode($curl_post_data);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
$curl_response = curl_exec($curl);
echo $curl_response;
?>