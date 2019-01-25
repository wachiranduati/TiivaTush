<?php
session_start();
ob_start();
require 'core.inc.php';
require 'connect.php';
$me = mysqli_real_escape_string($conn, $_SESSION['$user_id']);




require 'connect.php';
$query = "SELECT `username`, `mobilenumber` FROM `users` WHERE `id`='$me'";
$query_run = mysqli_query($conn, $query);
$count = 1;
$query_num_row = mysqli_fetch_assoc($query_run);

echo "Name: $query_num_row[username]<br> Phone number: $query_num_row[mobilenumber]";
?>