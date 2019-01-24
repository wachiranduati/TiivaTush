<?php
require 'connect.php';
ob_start();
session_start();
require 'core.inc.php';

function displaycart(){
//    echo "<table class=\"table\">
//    <thead style=\"background-color:orange;\">
//        <tr>
//        <th>Id</th>
//        <th>Quantity</th>
//        <th>Price</th>
//        </tr>
//    </thead>
//    <tbody>";
    $sql = "SELECT * FROM `products` WHERE id IN (";
    foreach($_SESSION['cart'] as $id => $value){
        $sql.=$id.",";
    }
    
    $sql = substr($sql, 0, -1).") ORDER BY itemtitle ASC";
    $query = mysql_query($sql);
    $totalprice = 0;
    if($_SESSION['cart'][$id]['quantity'] != 0){
        while($row=mysql_fetch_assoc($query)){
            echo "<tr>";
        $subtotal = $_SESSION['cart'][$row['id']]['quantity']*$row['price'];
        $quantity = strval($_SESSION['cart'][$row['id']]['quantity']);
        $count .= $quantity.',';
            
        $itemid = strval($row['id']);
        $totalitemids .= $itemid.',';
        
        $rowtotal = strval($_SESSION['cart'][$row['id']]['quantity']*$row['price']);
        $rowtotals .= $rowtotal.',';
            
        $rowprice = strval($row['price']);
        $rowprices .= $rowprice.','; 
            
        $totalprice += $subtotal;
            
           
//            $man = $row['id'];
//            echo "<td>";
//        echo $row['id'];
//            echo "</td>";
//            echo "<td>";
//        echo $_SESSION['cart'][$row['id']]['quantity'].' pcs';
//            
//            echo "<td>";
//        echo '@ '.$row['price'].' Ksh';
//            echo "</td>";
//            echo "<td>";
//        echo $_SESSION['cart'][$row['id']]['quantity']*$row['price'];
//            echo "</td>";
//            
//            
//            
//            echo "</tr>";
            
            
    } 
        $newtotalitemids = rtrim($totalitemids,',');
//        echo "<tr>";echo "<td>";
//        echo $newtotalitemids.' ids<br>';
//        echo "</td>";echo "</tr>";
        
        
        $newcount = rtrim($count,',');
//        echo "<tr>";echo "<td>";
//        echo $newcount.' count<br>';
//        echo "</td>";echo "</tr>";
        
        $newrowprices = rtrim($rowprices,',');
//        echo "<tr>";echo "<td>";
//        echo $newrowprices.' prices each<br>';
//        echo "</td>";echo "</tr>";
        
        
        
        $newrowtotals = rtrim($rowtotals,',');
//        echo "<tr>";echo "<td>";
//        echo $newrowtotals.' row totals<br>';
//        echo "</td>";echo "</tr>";
        
//        echo "<tr>";echo "<td>";
//        echo $totalprice.' total cost<br>';
//        echo "</td>";echo "</tr>";
    }
    //echo "</tbody></table>";
}

displaycart();
?>
