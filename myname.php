<?php
session_start();
ob_start();
require 'core.inc.php';

$id =  $_SESSION['$user_id'];


$query = "Select `username`, `mobilenumber` FROM `users` WHERE `id` = '".mysql_real_escape_string($id)."'";
$query_run = mysql_query($query);
$query_row = mysql_fetch_assoc($query_run);
echo $query_row['username'].' '.$query_row['mobilenumber'];

//$query = "SELECT `id` FROM `users` WHERE `username`='".mysql_real_escape_string($username)."' AND `password`='".mysql_real_escape_string($password)."'";
?>