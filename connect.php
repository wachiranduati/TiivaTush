<?php
// $conn_error = 'Could not connect.';
// $mysqli_host = 'localhost';
// $mysqli_user = 'youtube8_toon_x6';
// $mysqli_pass = 'thegrEat23?3me';
// $mysqli_db = 'youtube8_tiiva_new_datab';

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


