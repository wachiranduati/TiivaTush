<?php
ob_start();
session_start();
require 'connect.php';
require 'core.inc.php';
//$_SESSION['cart'][$id]['quantity']++;
//echo $_SESSION['cart'];
$id = 1;
function displaycart(){
    $sql = "SELECT * FROM `products` WHERE id IN (";
    foreach($_SESSION['cart'] as $id => $value){
        $sql.=$id.",";
    }
    $sql = substr($sql, 0, -1).") ORDER BY itemtitle ASC";
    $query = mysql_query($sql);
    $totalprice = 0;
    if($_SESSION['cart'][$id]['quantity'] != 0){
        while($row=mysql_fetch_assoc($query)){
        $subtotal = $_SESSION['cart'][$row['id']]['quantity']*$row['price'];
        $totalprice += $subtotal;
        
        echo '<br>'.$row['itemtitle'];
        echo '<br>&nbsp;'.$row['id'];
        echo '<br>'.$_SESSION['cart'][$row['id']]['quantity'];
        echo '<br>'.$row['price'];
        echo '<br>'.$_SESSION['cart'][$row['id']]['quantity']*$row['price'];
        echo '<br>'.$totalprice;
    }
    }
}
displaycart();
//print_r($_SESSION['cart']) ;
//print_r($_SESSION);
?>