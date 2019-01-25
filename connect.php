<?php
$conn_error = 'Could not connect.';
$mysqli_host = 'localhost';
$mysqli_user = 'root';
$mysqli_pass = '';
$mysqli_db = 'a_database';


$conn = mysqli_connect($mysqli_host,$mysqli_user,$mysqli_pass,$mysqli_db);
if(mysqli_connect_errno()){
  echo 'Failed to connect to MySQL '.mysqli_connect_errno();
}
 
?>


