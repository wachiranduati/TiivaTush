<?php
ob_start();
session_start();
require 'connect.php';
require 'core.inc.php';


if (isset($_SESSION['$user_id'])){
    //$username = getuserfield('username');
    $user = $_SESSION['$user_id'];

    $query = "SELECT `username` FROM `users` WHERE `id`='".mysql_real_escape_string($user)."'";
    if($query_run = mysql_query($query)){
       $query_row = mysql_fetch_assoc($query_run);
        $sth = $query_row['username'];
    }

    //echo '<span>Hi, '.$sth.' Welcome to Tiiva </span><span class=\"pull-right\">support +254705780775</span>';
    echo "<span> Hi <a target=\"_blank\" href=\"userprof.php\">$sth</a>, Welcome to Tiiva</span><span class=\"pull-right\"><a href=\"Logout.php\">Logout</a></span>";
    }else {
    echo "<span class=\"pull-left\">Please <a href=\"login.php\">LogIn</a> To Enjoy All Features By Tiiva</span><span class=\"pull-right visible-lg visible-md\"><i class=\"mdi mdi-phone-classic\"></i> Tiiva support team +(254)705780775</span>";
    }

?>
