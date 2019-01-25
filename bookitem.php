<?php
session_start();
ob_start();
require 'connect.php';


// call this on page show not on page load to ensure user is viewing the current page
// ensure user is logged in to use it else leave it be
// book item when onpageshow and on page load
// user must be logged in
// use item id, buyerid
if(isset($_SESSION['$user_id'])){
    if(isset($_POST['itemid'])){
    $buyer = $_SESSION['$user_id'];
    $itemid = mysqli_real_escape_string($conn, $_POST['itemid']);
    if(!empty($buyer) && !empty($itemid)){
        //call function to book item
        addtocart($buyer,$itemid, $conn);
    }else{
        die('Error! please try again later');
    }
}else{
    die('Error! something is a miss');
}
}else{
    //die('Please log in to book item');
    echo "<div class=\"row\">
                    <div class=\"col-xs-12\">
                        <div class=\"alert alert-danger\">
                            <span class=\"glyphicon glyphicon-info-sign pull-left\" style=\"font-size:140%;\"></span><strong>Error!</strong>You need to be logged in to shop in Tiiva's Mtumba section.
                        </div>
                        <p id=\"cartstat\" style=\"display:none;visibility:hidden;\">U1</p>
                    </div>
                </div>";
}
function addtocart($buyer,$itemid, $conn){
$query3 = "SELECT `availability` FROM `products` WHERE `id` = '$itemid' AND `buyer` = '0'";
$query3_run = mysqli_query($conn, $query3);
$query3_num_rows = mysqli_num_rows($query3_run);

if ($query3_num_rows != 0){
    if($query= "UPDATE  `a_database`.`products` SET `availability` = '0' WHERE `products`.`id` = '$itemid'"){
    $query_run = mysqli_query($conn, $query);
    $query2 = "UPDATE `a_database`.`products` SET `buyer`= '".mysqli_real_escape_string($conn, $buyer)."' WHERE `products`.`id` = '$itemid'";
    $query_run2 = mysqli_query($conn, $query2);
        echo "<div class=\"row\">
                    <div class=\"col-xs-12\">
                        <div class=\"alert alert-success\">
                            <strong>Success!</strong>You have temporarily booked the item.This prevents others users from viewing this item temporarily.You can unbook it buy just leaving this page.
                        </div>
                    </div>
                </div>";
}

}else {
    // check whether i'm the one whose already booked the item and notify me else notify as this below
    $query4 = "SELECT `availability` FROM `products` WHERE `id` = '$itemid' AND `buyer` = '$buyer'";
    $query4_run = mysqli_query($conn, $query4);
    $query4_num_rows = mysqli_num_rows($query4_run);
    if($query4_num_rows != 0){
        // we already booked it
        // enable add to cart button
        echo "<div class=\"row\">
                    <div class=\"col-xs-12\">
                        <div class=\"alert alert-danger\">
                            <strong>Y0!</strong>You already booked the item.Only you can currently view and buy it.
                        </div>
                        <p id=\"cartstat\" style=\"display:none;visibility:hidden;\">A0</p>
                    </div>
                </div>";
    }else{
        // someone else booked it
        // disable add to cart button
        echo "<div class=\"row\">
                    <div class=\"col-xs-12\">
                        <div class=\"alert alert-danger\">
                            <strong>Sorry</strong>Someone else just booked the item, item is temporarily unavailable.
                        </div>
                        <p id=\"cartstat\" style=\"display:none;visibility:hidden;\">U1</p>
                    </div>
                </div>";
    }
    
}
}

?>