<?php
$conn_error = 'Could not connect.';
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';
$mysql_db = 'a_database';

// if(!@mysql_connect($mysql_host, $mysql_user, $mysql_pass) || !@mysql_select_db($mysql_db)){
// 	die(mysql_error());
// }

$conn = mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db);
if(mysqli_connect_errno()){
  echo 'Failed to connect to MySQL '.mysqli_connect_errno();
}
// <?php
// $conn_error = 'Could not connect.';
// $mysql_host = 'localhost';
// $mysql_user = 'root';
// $mysql_pass = '';
// $mysql_db = 'ajax';
//
// if(!@mysql_connect($mysql_host, $mysql_user, $mysql_pass) || !@mysql_select_db($mysql_db)){
// 	die(mysql_error());
// }
// ?>

?>
