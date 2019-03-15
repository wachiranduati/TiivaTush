<?php 
require 'utils.php';
$access_token = get_accesstoken('JMD3QZ1SgJCsJxNw7eS4eaNslZVa785c', 'Qnq7Z8ITcGPI2Nqm');
$url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Authorization:Bearer '.$access_token)); //setting custom header
$current_time = Date('YmdHis');
// $phonenumber = '254705780775';
$phonenumber = '254710425676';
// $phonenumber = '254708374149';
$BusinessShortCode = '174379';
$lipaNapsOnln = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
$psdbs64 = base64_encode($BusinessShortCode.$lipaNapsOnln.$current_time);

$curl_post_data = array(
  //Fill in the request parameters with valid values
  'BusinessShortCode' => '174379',
  'Password' => $psdbs64,
  'Timestamp' => $current_time,
  'TransactionType' => 'CustomerPayBillOnline',
  'Amount' => '1',
  'PartyA' => $phonenumber,
  'PartyB' => '174379',
  'PhoneNumber' => $phonenumber,
  'CallBackURL' => 'https://1fd49b70.ngrok.io/Tush/3l4lterFin/validation.php',
  // 'CallBackURL' => 'http://mpesa-requestbin.herokuapp.com/ru47dwru',
  'AccountReference' => 'Tiiva.co.ke',
  'TransactionDesc' => 'cartname'
);

$data_string = json_encode($curl_post_data);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);

$curl_response = curl_exec($curl);
print_r($curl_response);

echo $curl_response;
?>