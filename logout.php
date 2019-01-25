<?php
session_start();
ob_start();
require 'core.inc.php';
// $_SESSION = [];
session_destroy();
header('Location: '.$http_referer);
?>