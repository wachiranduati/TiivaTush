<?php 
session_start();
ob_start();
require 'connect.php';
require 'utils/userutils.php';
echo returnCartCount($conn, 'products');

?>