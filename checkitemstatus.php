<?php
session_start();
ob_start();
require 'connect.php';
// this will load in the product details
// check whether item is available
// it could be booked or already sold
// echo the item is currently unavailable
// just disable buttons just incase the buyer wants to review it in the future
if(isset($_POST['itemid'])){
    $itemid = $_POST['itemid'];
    if(!empty($itemid)){
        $query = "SELECT `id` WHERE `availability`='0' AND `buyer`!='0' AND `id`='$itemid'";
        $query_run = mysql_query($query);
        $query_num_rows = mysql_num_rows($query_run);
        if($query_num_rows != 0){
            // found meaning item has been booked or has already been sold
            // disable all the buttons
            echo "<p id=\"mtushitem\" class=\"text-lowercase\">un</p>";
        }else{
            // not found meaning item is very much available
            // enable all the buttons
            echo "<p id=\"mtushitem\" class=\"text-lowercase\">av</p>";
        }

    }else{
        die('Somesing is wonger');
    }
}else{
    die('Somesing is wong');
}

?>