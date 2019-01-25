<?php
ob_start();
session_start();
require 'connect.php';
// this should add an ip addres that gets to the receipt slip page
// to prevent activation by just loading the page...chekc whether teh session cartname is set
// check whether the ip exists in the database else add it
$me = $_SERVER['REMOTE_ADDR'];
$mycart = $_SESSION['cartname'];


if(isset($_SESSION['cartname']) && !empty($mycart)){
    $query = "SELECT * FROM `Salesip` WHERE `ipwithsales` = '$me'";
    $query_run = mysqli_query($conn, $query);
    $query_num_rows = mysqli_num_rows($query_run);
    if($query_num_rows == 0){
        // ip has just made a sale but does not appear in the list
        // append it
        $queryinsert = "INSERT INTO `Salesip` (`id`,`ipwithsales`) VALUES ('','$me')";
        if($qeuryinsert_run = mysqli_query($conn, $queryinsert)){
            //echo "ip has been added to sales ip";
        }else{
            //echo "We ran into some trouble";
            ////echo mysqli_error();
        }
    }else{
        // this is a return customer do nothing
        //echo "ip already exist in teh database";
    }
}else{
    //echo "Sorry ran into a problem";
}

?>