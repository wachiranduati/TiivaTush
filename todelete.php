<?php 
ob_start();
session_start();
require 'connect.php';
require 'utils/displayutils.php';

$now = Date('Y-m-d H:i:s');
echo $now.'<br>';
timeDeltaExtendTime($now, '5 seconds', 'Y-m-d H:i:s');

?>