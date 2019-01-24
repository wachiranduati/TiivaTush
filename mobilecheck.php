<?php
ob_start();
require 'connect.php';
       $mobilenumber = $_POST['mobilenumber'];
           //$mobilenumber = '0705780775';

    $query = "SELECT `mobilenumber` FROM `users` WHERE `mobilenumber`='".mysql_real_escape_string($mobilenumber)."'";
    $query_run = mysql_query($query);
    $query_num_rows = mysql_num_rows($query_run);
    if(!empty($mobilenumber)){
        if($query_num_rows < 1){
           echo "<span class=\"glyphicon glyphicon-ok\" style=\"color:rgb(0, 230, 0);\"></span>";
       }else{
           echo "mobi is <strong>already taken</strong>";
       }
    }else{
        echo "Please provide a number";
    }
?>