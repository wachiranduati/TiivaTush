<?php
session_start();
ob_start();
require 'connect.php';
require 'utils/displayutils.php';
require 'utils/userutils.php';

if(userLoggedIn() == True){
		// continue
		$userid = getUserID();
}else{
		die(bootstrapAlert('danger', 'glyphicon-info-sign', 'Hola ', "You need to be logged in to view your cart", 'A0'));
}

function normCart($conn, $userid){
	$query = "SELECT * FROM `products` WHERE `availability` = 0 AND `sold` = 0 AND `buyer` = $userid";
$query_run = mysqli_query($conn, $query);
$num_rows = mysqli_num_rows($query_run);
if($num_rows != 0){
	// show the content
	$count = 1;
	$totalprice = 0;
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

    while($row = mysqli_fetch_assoc($query_run)){
    	echo "<tr>";
    $subtotal = $row['price'];
    $id = $row['id'];
    $totalprice += $subtotal;
    $urlcaption = urlencode($row['itemtitle']);

        echo "<td>";
        echo "#";
    echo $count;
        echo "</td>";
        echo "<td>";
        echo '<img src="mtumbauploads/compresseduploads/'.$row['imageone'].'" class="img-responsive" style="max-height:50px;"/>';
        echo "</td>";
    echo "<td><a target=\"_blank\" href=\"productdetails.php?$urlcaption&id=$id\">";
    echo $row['itemtitle'];
        echo "</td>";
        $man = $row['id'];

        echo "</a><td>";
    echo '1 pc';

        echo "</td>";
        echo "<td>";
    echo '@ '.$row['price'].' Ksh';
        echo "</td>";
        echo "<td>";
    echo $subtotal.' Ksh';
        echo "</td>";


        echo "<td>";
        echo "&nbsp;&nbsp;";
    echo "<a class=\"btn btn-sm btn-danger\" onclick=\"removeItem($man);\">Remove</a>";
        echo "</td>";
        echo "</tr>";


        $count++;
    }
    $vat2 = ceil($totalprice * 0.16);
    $formattotalprice2 = number_format($totalprice);
    $formatvat2 = number_format($vat2);
    echo "  
          <tr>
            <td></td>
            <td colspan=\"4\">Cart SubTotal:</td>
            <td>$formattotalprice2 Ksh</td>
          </tr>
          <tr>
            <td></td>
            <td colspan=\"4\">SHIPPING: Tiiva</td>
            <td>Free by Tiiva</td>
          </tr>
          <tr>
            <td></td>
            <td colspan=\"4\"><strong>Total Amount Payable</strong></td>
            <td colspan=\"1\" id=\"total\"><strong>$formattotalprice2 Ksh</strong></td>
          </tr>


        ";

    echo "</tbody>
		</table></div>";
}else{
	// nothing in your cart
	die(bootstrapAlert('danger', 'glyphicon-info-sign', 'Hey ', "Your shopping cart is empty", 'A0'));
}
}
// normCart($conn, $userid);

function modCartStuff($conn, $userid, $shipping, $message, $charges){
$query = "SELECT * FROM `products` WHERE `availability` = 0 AND `sold` = 0 AND `buyer` = $userid";
$query_run = mysqli_query($conn, $query);
$num_rows = mysqli_num_rows($query_run);
if($num_rows != 0){
	// show the content
	$count = 1;
	$totalprice = 0;
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

    while($row = mysqli_fetch_assoc($query_run)){
    	echo "<tr>";
    $subtotal = $row['price'];
    $id = $row['id'];
    $totalprice += $subtotal;
    $urlcaption = urlencode($row['itemtitle']);

        echo "<td>";
        echo "#";
    echo $count;
        echo "</td>";
        echo "<td>";
        echo '<img src="mtumbauploads/compresseduploads/'.$row['imageone'].'" class="img-responsive" style="max-height:50px;"/>';
        echo "</td>";
    echo "<td><a target=\"_blank\" href=\"productdetails.php?$urlcaption&id=$id\">";
    echo $row['itemtitle'];
        echo "</td>";
        $man = $row['id'];

        echo "</a><td>";
    echo '1 pc';

        echo "</td>";
        echo "<td>";
    echo '@ '.$row['price'].' Ksh';
        echo "</td>";
        echo "<td>";
    echo $subtotal.' Ksh';
        echo "</td>";


        echo "<td>";
        echo "&nbsp;&nbsp;";
    echo "<a class=\"btn btn-sm btn-danger\" onclick=\"removeItem($man);\">Remove</a>";
        echo "</td>";
        echo "</tr>";


        $count++;
    }
    // $vat2 = ceil($totalprice * 0.16);
    $grandtotal = $totalprice + $charges;
    $formattotalprice2 = number_format($grandtotal);
    // $formatvat2 = number_format($vat2);
    echo "  
          <tr>
            <td></td>
            <td colspan=\"4\">Cart SubTotal:</td>
            <td>$formattotalprice2 Ksh</td>
          </tr>
          <tr>
            <td></td>
            <td colspan=\"4\">SHIPPING: $message</td>
            <td>$charges Ksh</td>
          </tr>
          <tr>
            <td></td>
            <td colspan=\"4\"><strong>Total Amount Payable</strong></td>
            <td colspan=\"1\" id=\"total\"><strong><span id=\"total\">$formattotalprice2</span> Ksh</strong></td>
          </tr>


        ";

    echo "</tbody>
		</table></div>";
}else{
	// nothing in your cart
	die(bootstrapAlert('danger', 'glyphicon-info-sign', 'Hey ', "Your shopping cart is empty", 'A0'));
}
}
// if shipping is set
if(isset($_POST['shipping']) && !empty($_POST['shipping'])){
	$shipping = $_POST['shipping'];
	if($shipping == 'free' || $shipping == 'ExpressTiiva' || $shipping == 'Others'){
		// continue
		if($shipping == 'free'){
			$message = "Free delivery with Tiiva (1 - 5 working days)";
			$charges = 0;
			modCartStuff($conn, $userid, $shipping, $message, $charges);

		}else if($shipping == 'ExpressTiiva'){
			$message = "Express Delivery with Tiiva (1 - 3 days)";
			$charges = 400;
			modCartStuff($conn, $userid, $shipping, $message, $charges);

		}else{
			$message = "WellsFargo | G4S | 2Nk (1 - 2 days)";
			$charges = 400;
			modCartStuff($conn, $userid, $shipping, $message, $charges);

		}
	}else{
		die(bootstrapAlert('danger', 'glyphicon-info-sign', 'Sorry ', "Could not complete your request, Please try again later", 'A0'));
	}
}else{
	normCart($conn, $userid);
}
?>