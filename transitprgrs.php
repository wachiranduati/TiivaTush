<?php
ob_start();
session_start();
require 'connect.php';
require 'utils/adminutils.php';

echo getMerchantLocationViaId($conn, 11);

?>