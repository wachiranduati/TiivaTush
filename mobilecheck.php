<?php
ob_start();
require 'connect.php';
       $mobilenumber = $_POST['mobilenumber'];
           //$mobilenumber = '0705780775';

    $query = "SELECT `mobilenumber` FROM `users` WHERE `mobilenumber`='".mysqli_real_escape_string($conn, $mobilenumber)."'";
    $query_run = mysqli_query($conn, $query);
    $query_num_rows = mysqli_num_rows($query_run);
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