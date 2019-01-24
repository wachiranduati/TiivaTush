<?php
ob_start();
session_start();
require 'connect.php';
// include 'reloadpickupnotifications.php';
$user = $_SESSION['$user_id'];
$tempme = ceil($user + 21);

if(isset($_GET['item']) && isset($_GET['cartname'])){
  $productitem = $_GET['item'];
  $productcartname = $_GET['cartname'];
}else{
  $productitem = 'S420';
  $productcartname = '4f50706353f017fac7dc3a95c5eb0038';
}

$query = "SELECT * FROM `pickupds` WHERE `item`='$productitem' AND `cart`='$productcartname' AND `sign`='0' AND `paymentmode`='' AND `idnumber`='0' AND `name`=''";
$query_run = mysql_query($query);
$count = 1;
echo "
<div style=\"cursor:pointer;\" class=\"table-responsive\">
  <table class=\"table table-striped\">
    <thead>
      <tr>
        <th>Item</th>
        <th>Title</th>
        <th>Price</th>
        <th>Seller</th>
        <th>Sellerlocation</th>
        <th>Purchstime</th>
        <th>Shippingto</th>
        <th>Shippingtype</th>
      </tr>
    </thead>
    <tbody>
  ";
while($row = mysql_fetch_assoc($query_run)){
  $item = $row['item'];
  $agent = $row['agent'];
  $cartname = $row['cart'];
// search for the item refrence in item number search for its image and title
// while loop it and then echo the resulst all together into the table

$dbs = substr($item,0,1);
$product = substr($item,1);
//  echo $dbs.' '.$item.'<br>';
if($dbs == 'M' || $dbs == 'm'){
  $currentdbs = 'products';
  $imgaddr = "mtumbauploads/compresseduploads/";
  $link = "productdetails.php?id=";
}elseif($dbs == 'S' || $dbs == 's'){
  $currentdbs = 'brandyproducts';
  $imgaddr = "uploadproducts/compressedproducts/";
  $link = "storeproduct.php?id=";
}else{
  die("Error");
}
// query the original item dbs ie products to return image and title
$queryitems = "SELECT * FROM `$currentdbs` WHERE `id`='$product'";
$queryitemsrun = mysql_query($queryitems);
while($queryitemrow = mysql_fetch_assoc($queryitemsrun)){
  $imageone = $imgaddr.$queryitemrow['imageone'];
  $itemtitle = $queryitemrow['itemtitle'];
  $seller = ceil($queryitemrow['sellerid'] + 21);
  // $price = number_format($queryitemrow['price']);
  echo "
  <tr data-target=\"#loginModal\" data-toggle=\"modal\" onclick=\"modalRem();reloadmodal();\" class=\"tablerow\">
    ";
  echo "
    <td><a href=\"$link$product\" target=\"_blank\" title=\"view item\"><img src=\"$imageone\" style=\"max-height:80px;\"/></a></td>
    <td>$itemtitle</td>";

}
// query the checkoutcarts to return
$querycheckoucarts = "SELECT * FROM `checkoutcarts` WHERE `cartname`='$cartname' AND `pickupstat`='INCOMPLETE' AND `updated`='1'";
$querycheckoutcarts_run = mysql_query($querycheckoucarts);
while ($querycheckout_row = mysql_fetch_assoc($querycheckoutcarts_run)) {
  $pricelist = $querycheckout_row['itemprice'];
  $cartcontentslist = $querycheckout_row['cartcontents'];
  $purchsdate = $querycheckout_row['Date'];
  $purchasetime = $querycheckout_row['time'];

  $pricelistarray = explode(',',$pricelist);
  $cartcontentsarray = explode(',',$cartcontentslist);

  $position = array_search($item,$cartcontentsarray);
  $price = number_format($pricelistarray[$position]);

  $actualcart = substr($cartname,0,10).'...';
  echo "
    <td>Ksh $price</td>
    <td>$seller</td>
    <td>sellerlocation</td>
    <td>$purchsdate / $purchasetime HRS</td>";
    // query the Merchant to return merchant location and merchant
    $queryshippinginfo = "SELECT * FROM `sold` WHERE `cartname`='$cartname'";
    $queryshippinginfo_run = mysql_query($queryshippinginfo);
    while($queryshippinginfo_row = mysql_fetch_assoc($queryshippinginfo_run)){
      $county = $queryshippinginfo_row['county'];
      $area = $queryshippinginfo_row['area'];
      $shippingto = $queryshippinginfo_row['shipping'];
    }

  echo "
    <td>$county,$area</td>
    <td>$shippingto</td>

  </tr>

      ";
}





  $count++;
}




echo "
</tbody>
</table>

</div>
  ";
?>
