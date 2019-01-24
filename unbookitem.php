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
    $itemid = mysql_real_escape_string($_POST['itemid']);
    if(!empty($buyer) && !empty($itemid)){
        //call function to book item
        removefromcart($buyer,$itemid);
    }else{
        die('Error! please try again later');
    }
}else{
    die('Error! something is a miss');
}
}else{
    die('You need to be logged in to access the Mtush products');
}
function removefromcart($buyer,$itemid){
$query3 = "SELECT `availability` FROM `products` WHERE `id` = '$itemid' AND `buyer` = '$buyer'";//to change to user
$query3_run = mysql_query($query3);
$query3_num_rows = mysql_num_rows($query3_run);

if ($query3_num_rows != 0){
    // unbook
    // check whether item is in cart 
    // if present dont unbook...leave as is
    // else unbook 
    if($_SESSION['cart'][$itemid]['quantity'] > 0){
        // item is in the cart so we wont unbook it/ permanently book it
    }else{
        // unbook it
                if($query= "UPDATE  `a_database`.`products` SET `availability` = '1' WHERE `products`.`id` = '$itemid'"){
                    $query_run = mysql_query($query);
                    $query2 = "UPDATE `a_database`.`products` SET `buyer`= '0' WHERE `products`.`id` = '$itemid'";
                    $query_run2 = mysql_query($query2);
                        echo "<div class=\"row\">
                                    <div class=\"col-xs-12\">
                                        <div class=\"alert alert-success\">
                                            <strong>Success!</strong>You have unbooked the item.
                                        </div>
                                    </div>
                                </div>";
                        //print_r($_SESSION['cart'][$itemid]);
                            //$_SESSION['cart'][$itemid]['quantity']
                }
    }
    
    
    

}else {
    // do nothing
    echo "<div class=\"row\">
                    <div class=\"col-xs-12\">
                        <div class=\"alert alert-danger\">
                            <strong>Error!</strong>You hadn't booked this item.
                        </div>
                    </div>
                </div>";
    //print_r($_SESSION['cart'][$itemid]);
}
}
?>