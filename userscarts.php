<?php
ob_start();
session_start();
require 'connect.php';
require 'core.inc.php';

$user = $_SESSION['$user_id'];
$usercheck = $user + 21;
//echo "<p>$user</p>";

//query the carts limit them to saay the last 5
//$query = "SELECT * FROM `checkoutcarts` WHERE `cartid`!='0' ORDER BY `cartid` DESC LIMIT 10";
$query = "SELECT * FROM `checkoutcarts` WHERE `customer_id`='$usercheck' ORDER BY `cartid` DESC";
$query2 = "SELECT * FROM `checkoutcarts` WHERE `customer_id`='$usercheck'";
$query2_run = mysqli_query($query2);
$query2_num_rows = mysqli_num_rows($query2_run);
echo '<span id="cartsno" style="display:none;">'.$query2_num_rows.'</span>';
$query_run = mysqli_query($conn, $query);
echo "<ul class=\"list-group\">";
$count = 1;
while($row = mysqli_fetch_assoc($query_run)){
    echo "<li class=\"list-group-item list-cart\">$count. &nbsp;&nbsp;cart ";
    echo '<span id="cartname">'.$row['cartname'].'</span>&nbsp;&nbsp;&nbsp;&nbsp;';
    echo "<span class=\"pull-right\">";
    echo $row['Date'].'</span>';
    echo '</li>';
    echo "<div class=\"row cart\">";
    echo "<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">Yai yai";
    echo "</div></div>";
    //echo "<li class=\"list-group-item\">There there</li>";
    //echo "<li class=\"list-group-item\"><span class=\"pull-left\">$row['cartname']</span><span class=\"pull-right\">$row['Date']</span></li>";
    $count++;
}
echo "</ul>";
?>
