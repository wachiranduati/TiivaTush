<?php
session_start();
ob_start();
require 'core.inc.php';

$id =  $_SESSION['$user_id'];


$query = "Select `username`, `mobilenumber` FROM `users` WHERE `id` = '".mysqli_real_escape_string($conn, $id)."'";
$query_run = mysqli_query($conn, $query);
$query_row = mysqli_fetch_assoc($query_run);
echo $query_row['username'].' '.$query_row['mobilenumber'];

//$query = "SELECT `id` FROM `users` WHERE `username`='".mysqli_real_escape_string($conn, $username)."' AND `password`='".mysqli_real_escape_string($conn, $password)."'";
?>