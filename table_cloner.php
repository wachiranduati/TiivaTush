<?php
require 'connect.php';
   // $query = "SELECT * INTO Brandyproducts FROM products";
    $query = "CREATE TABLE Brandyproducts SELECT * FROM products";
    if($query_run = mysql_query($query)){
        echo "Its done <br>";
        $query2 = "SELECT * FROM Brandyproducts WHERE `id`='1'";
        $query_run2 = mysql_query($query2);
        $row = mysql_fetch_assoc($query_run2);
        echo $row['itemtitle'].'<br>';
        echo $row['sellerid'].'<br>';
        echo $row['subcategory'].'<br>';
        echo $row['price'].'<br>';
    }else{
        echo "somesing is wrong";
        //mysql_error();
    }
?>