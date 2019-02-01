<?php
ob_start();
session_start();
require 'connect.php';
$dbs = 'brandyproducts';
$cartame = 'shopcart';
$dbsother = 'products';
$cartameother = 'shackcart';

if(isset($_GET['shipping'])){

if($_GET['shipping']){
    $shippingER = $_GET['shipping'];
    if($shippingER == 'free'){
        $shipping = 'FREE BY TIIVA';
        $message = "";
        //echo $shipping;
    }else{
        //$shipping = intval($_GET['shipping']);
        $shipping = 400;
        if($_GET['shipping']=='ExpressTiiva'){
            $message = "Tiiva Express";
        }elseif($_GET['shipping']=='on'){
            $message = "Fargo Courier";
        }else{
            $message = "Tiiva Express";
        }
        //echo $shipping;
    }
}else{
    $shipping = 'FREE BY TIIVA';
    $message = "";
    //echo $shipping;
}
}else{
    $shipping = 'FREE BY TIIVA';
    $message = "";
    //echo $shipping;
}


if(isset($_GET['action'])){
    $id = intval($_GET['id']);
    if($_GET['action'] == 'add'){
        if(isset($_SESSION['shackcart'][$id])){
        $_SESSION['shackcart'][$id]['quantity']++;
            echo "item was already in the cart doing a plus one";
            displaycart($dbs,$cartame,$dbsother,$cartameother,$shipping,$message, $conn);

    }else{
        $query = "SELECT * FROM `products` WHERE `id`='$id'";
        $query_run = mysqli_query($conn, $query);
        if(mysqli_num_rows($query_run) != 0){
            $row_s = mysqli_fetch_array($query_run);
            $_SESSION['shackcart'][$row_s['id']]=array(
                "quantity" => 1,
                "price" => $row_s['price']
            );
            echo "item has been added/ not plus one to the cart";
            displaycart($dbs,$cartame,$dbsother,$cartameother,$shipping,$message, $conn);

        }
    }
    }
    else{
        if(isset($_SESSION['shackcart'][$id])){
            if($_SESSION['shackcart'][$id]['quantity'] > 0){
                $_SESSION['shackcart'][$id]['quantity']--;
                echo "item was already in cart removing minus one";
                displaycart();
            }else{
                unset($_SESSION['shackcart'][$id]);
                echo "item wasnt in the cart";
                displaycart($dbs,$cartame,$dbsother,$cartameother,$shipping,$message, $conn);
            }

    }else{
            echo "There's nothing to take out of the cart";
            displaycart($dbs,$cartame,$dbsother,$cartameother,$shipping,$message, $conn);
        }
//        else{
//        $query = "SELECT * FROM `products` WHERE `id`='$id'";
//        $query_run = mysqli_query($conn, $query);
//        if(mysqli_num_rows($query_run) != 0){
//            $row_s = mysqli_fetch_array($query_run);
//            $_SESSION['cart'][$row_s['id']]=array(
//                "quantity" => 1,
//                "price" => $row_s['price']
//            );
//        }
//    }
    }
}


function displaycart($dbs,$cartame,$dbsother,$cartameother,$shipping,$message, $conn){
$totalprice = 0;
$totalprice2 = 0;


    echo "
    <div class=\"table-responsive\">
    <table class=\"table\">
    <thead style=\"background-color:orange;\">
        <tr>
        <th>No</th>
        <th>Img</th>
        <th>Items</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Total</th>
        <th>Add/Remove</th>
        </tr>
    </thead>
    <tbody>";

    if(!empty($_SESSION[$cartame]) && isset($_SESSION[$cartame])){
        $sql = "SELECT * FROM $dbs WHERE id IN (";
    foreach($_SESSION[$cartame] as $id => $value){
        $sql.=$id.",";
    }

    $sql = substr($sql, 0, -1).") ORDER BY itemtitle ASC";
    $query = mysqli_query($conn, $sql);
    $totalprice = 0;
    $count = 1;

    if($_SESSION[$cartame][$id]['quantity'] != 0){
        while($row=mysqli_fetch_assoc($query)){
            echo "<tr>";
        $subtotal = $_SESSION[$cartame][$row['id']]['quantity']*$row['price'];
        $totalprice += $subtotal;
            echo "<td>";
            echo "#";
        echo $count;
            echo "</td>";
            echo "<td>";
            echo '<img src="uploadproducts/compressedproducts/'.$row['imageone'].'" class="img-responsive" style="height:50px;"/>';
            echo "</td>";
        echo "<td>";
        echo $row['itemtitle'];
            echo "</td>";
            $man = $row['id'];
//            echo "<td>";
//        echo '<br>&nbsp;'.$row['id'];
//            echo "</td>";
            echo "<td>";
        echo $_SESSION[$cartame][$row['id']]['quantity'].' pcs';

            echo "</td>";
            echo "<td>";
        echo '@ '.$row['price'].' Ksh';
            echo "</td>";
//            echo "<td>";
//        echo $_SESSION['cart'][$row['id']]['quantity']*$row['price'];
//            echo "</td>";
            echo "<td>";
        echo $subtotal.' Ksh';
            echo "</td>";


            echo "<td>";
            echo "<a class=\"btn btn-sm btn-primary\" onclick=\"additem($man);\">+</a>";
            echo "&nbsp;&nbsp;";
        echo "<a class=\"btn btn-sm btn-danger\" onclick=\"removeitem($man);\">-</a>";
            echo "</td>";
            echo "</tr>";


            $count ++;
    }


      $vat = ceil($totalprice * 0.16);
        $formattotalprice = number_format($totalprice);
        $formatvat = number_format($vat);
        //echo $totalprice;

    }
    }

    

// the other cart display
if(!empty($_SESSION[$cartameother]) && isset($_SESSION[$cartameother])){


$sql = "SELECT * FROM $dbsother WHERE id IN (";
foreach($_SESSION[$cartameother] as $id => $value){
    $sql.=$id.",";
}

$sql = substr($sql, 0, -1).") ORDER BY itemtitle ASC";
$query = mysqli_query($conn, $sql);
// $totalprice = 0;
//$count2 = 1;

if($_SESSION[$cartameother][$id]['quantity'] != 0){
    $count = 0;
    while($row=mysqli_fetch_assoc($query)){
        echo "<tr>";
    $subtotal = $_SESSION[$cartameother][$row['id']]['quantity']*$row['price'];
    $totalprice2 += $subtotal;
        echo "<td>";
        echo "#";
    echo $count;
        echo "</td>";
        echo "<td>";
        echo '<img src="mtumbauploads/compresseduploads/'.$row['imageone'].'" class="img-responsive" style="height:50px;"/>';
        echo "</td>";
    echo "<td>";
    echo $row['itemtitle'];
        echo "</td>";
        $man = $row['id'];
//            echo "<td>";
//        echo '<br>&nbsp;'.$row['id'];
//            echo "</td>";
        echo "<td>";
    echo $_SESSION[$cartameother][$row['id']]['quantity'].' pcs';

        echo "</td>";
        echo "<td>";
    echo '@ '.$row['price'].' Ksh';
        echo "</td>";
//            echo "<td>";
//        echo $_SESSION['cart'][$row['id']]['quantity']*$row['price'];
//            echo "</td>";
        echo "<td>";
    echo $subtotal.' Ksh';
        echo "</td>";


        echo "<td>";
        echo "<a class=\"btn btn-sm btn-primary\" onclick=\"additem($man);\">+</a>";
        echo "&nbsp;&nbsp;";
    echo "<a class=\"btn btn-sm btn-danger\" onclick=\"removeitem($man);\">-</a>";
        echo "</td>";
        echo "</tr>";


        $count++;
}

    $grandtotal = $totalprice + $totalprice2;


  $vat2 = ceil($grandtotal * 0.16);
    $formattotalprice2 = number_format($grandtotal);
    $formatvat2 = number_format($vat2);
    echo "  <tr>
              <td></td>
              <td colspan=\"4\">VAT TAX(16%):</td>
              <td>$formatvat2 Ksh</td>
            </tr>
          <tr>
            <td></td>
            <td colspan=\"4\">Cart SubTotal incl VAT:</td>
            <td>$formattotalprice2 Ksh</td>
          </tr>
          <tr>
            <td></td>
            <td colspan=\"4\">SHIPPING: $message</td>
            <td>$shipping Ksh</td>
          </tr>
          <tr>
            <td></td>
            <td colspan=\"4\"><strong>Total Amount Payable</strong></td>
            <td colspan=\"1\" id=\"total\"><strong>$formattotalprice2 Ksh</strong></td>
          </tr>


        ";
}
}
echo "</tbody>
</table></div>";
// the other cart display
}

//displaycart();
function checkthendisplaycart($dbs,$cartame,$dbsother,$cartameother,$shipping,$message, $conn){
    if(!isset($_SESSION['shackcart'])){
        //echo "Nothing to display";
        echo "
            <div class=\"alert alert-danger\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
                <strong>Hey!!</strong>
                <span>Nothing to display.<span class=\"text-capitalize\">Your cart is empty</span></span>
            </div>
            ";
    }else{
    displaycart($dbs,$cartame,$dbsother,$cartameother,$shipping,$message, $conn);
}
}
checkthendisplaycart($dbs,$cartame,$dbsother,$cartameother,$shipping,$message, $conn);
?>
