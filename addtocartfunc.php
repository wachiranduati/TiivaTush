<?php
session_start();
ob_start();
require 'connect.php';


function addtocart($buyer){
$query3 = "SELECT `availability` FROM `products` WHERE `id` = '5' AND `buyer` = '0'";
$query3_run = mysql_query($query3);
$query3_num_rows = mysql_num_rows($query3_run);

if ($query3_num_rows != 0){
    if($query= "UPDATE  `a_database`.`products` SET `availability` = '0' WHERE `products`.`id` = '5'"){
    $query_run = mysql_query($query);
    $query2 = "UPDATE `a_database`.`products` SET `buyer`= '".mysql_real_escape_string($buyer)."' WHERE `products`.`id` = '5'";
    $query_run2 = mysql_query($query2);
        echo "<div class=\"row\">
                    <div class=\"col-xs-12\">
                        <div class=\"alert alert-success\">
                            <strong>Success!</strong>You just added the item to your cart.Remember you can remove it by pressing the Remove from Cart button below the item description.
                        </div>
                    </div>
                </div>";
}

}else {
    echo "<div class=\"row\">
                    <div class=\"col-xs-12\">
                        <div class=\"alert alert-danger\">
                            <strong>Error!</strong>Item was already purchased.
                        </div>
                    </div>
                </div>";
}
}


function removefromcart($buyer){
$query3 = "SELECT `availability` FROM `products` WHERE `id` = '5' AND `buyer` = '$buyer'";//to change to user
$query3_run = mysql_query($query3);
$query3_num_rows = mysql_num_rows($query3_run);

if ($query3_num_rows != 0){
    if($query= "UPDATE  `a_database`.`products` SET `availability` = '1' WHERE `products`.`id` = '5'"){
    $query_run = mysql_query($query);
    $query2 = "UPDATE `a_database`.`products` SET `buyer`= '0' WHERE `products`.`id` = '5'";
    $query_run2 = mysql_query($query2);
        echo "<div class=\"row\">
                    <div class=\"col-xs-12\">
                        <div class=\"alert alert-success\">
                            <strong>Success!</strong>Item has been removed from your cart.
                        </div>
                    </div>
                </div>";
}

}else {
    echo "<div class=\"row\">
                    <div class=\"col-xs-12\">
                        <div class=\"alert alert-danger\">
                            <strong>Error!</strong>No item to remove from cart.
                        </div>
                    </div>
                </div>";
}
}



?>