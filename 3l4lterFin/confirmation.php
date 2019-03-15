<?php
require 'connnect.php';
header("conntent-Type:application/json");
if (!isset($_GET["token"]))
{
echo "Technical error";
exit();
}
if ($_GET["token"]!='yourPU_RstrongPasswordSample$')
{
echo "Invalid authorization";
exit();
}
if (!$request=file_get_conntents('php://input'))
{
echo "Invalid input";
exit();
}
$conn = mysqli_connnect($servername, $username, $password, $dbname);
if (!$conn) 
{
die("connnection failed: " . mysqli_connnect_error());
}
//Put the json string that we received from Safaricom to an array
$array = json_decode($request, true);
$transactiontype= mysqli_real_escape_string($conn,$array['TransactionType']); 
$transid=mysqli_real_escape_string($conn,$array['TransID']); 
$transtime= mysqli_real_escape_string($conn,$array['TransTime']); 
$transamount= mysqli_real_escape_string($conn,$array['TransAmount']); 
$businessshortcode=  mysqli_real_escape_string($conn,$array['BusinessShortCode']); 
$billrefno=  mysqli_real_escape_string($conn,$array['BillRefNumber']); 
$invoiceno=  mysqli_real_escape_string($conn,$array['InvoiceNumber']); 
$msisdn=  mysqli_real_escape_string($conn,$array['MSISDN']); 
$orgaccountbalance=   mysqli_real_escape_string($conn,$array['OrgAccountBalance']); 
$firstname=mysqli_real_escape_string($conn,$array['FirstName']); 
$middlename=mysqli_real_escape_string($conn,$array['MiddleName']); 
$lastname=mysqli_real_escape_string($conn,$array['LastName']); 
 
$sql="INSERT INTO mpesa_payments
( 
TransactionType,
TransID,
TransTime,
TransAmount,
BusinessShortCode,
BillRefNumber,
InvoiceNumber,
MSISDN,
FirstName,
MiddleName,
LastName,
OrgAccountBalance
)  
VALUES  
( 
'$transactiontype', 
'$transid', 
'$transtime', 
'$transamount', 
'$businessshortcode', 
'$billrefno', 
'$invoiceno', 
'$msisdn',
'$firstname', 
'$middlename', 
'$lastname', 
'$orgaccountbalance' 
)";
 
if (!mysqli_query($conn,$sql)) 
 
{ 
echo mysqli_error($conn); 
} 
 
 
else 
{ 
echo '{"ResultCode":0,"ResultDesc":"connfirmation received successfully"}';
}
 
mysqli_close($conn); 
?>