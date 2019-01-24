<?php
session_start();
ob_start();
require 'connect.php';
require 'core.inc.php';

//$buyer = $_GET["buyer"];
//echo $buyer;
$id = $_GET["id"];
//echo $id;
//echo "SELECT `availability` FROM `products` WHERE `id` = '7' AND `buyer` = '0'";
$buyer = $_SESSION['$user_id'];
//echo $buyer;


function addtocart($buyer,$id){
$query3 = "SELECT `availability` FROM `products` WHERE `id` = '".mysql_real_escape_string($id)."' AND `buyer` = '0'";
$query3_run = mysql_query($query3);
$query3_num_rows = mysql_num_rows($query3_run);

if ($query3_num_rows != 0)
    {
        if($query= "UPDATE  `a_database`.`products` SET `availability` = '0' WHERE `products`.`id` = '".mysql_real_escape_string($id)."'")
            {
            $query_run = mysql_query($query);
            $query2 = "UPDATE `a_database`.`products` SET `buyer`= '".mysql_real_escape_string($buyer)."' WHERE `products`.`id` = '".mysql_real_escape_string($id)."'";
            $query_run2 = mysql_query($query2);
                echo "<div class=\"row\">
                            <div class=\"col-xs-12\">
                                <div class=\"alert alert-success\">
                                    <strong>Success!</strong>You just added the item to your cart.Remember you can remove it by pressing the Remove from Cart button below the item description.
                                </div>
                            </div>
                        </div>";
            }

    }else 
    {
        echo "<div class=\"row\">
                    <div class=\"col-xs-12\">
                        <div class=\"alert alert-danger\">
                            <strong>Error!</strong>Item was already purchased.
                        </div>
                    </div>
                </div>";
    }
}


addtocart($buyer,$id);
