<?php
ob_start();
session_start();
require 'connect.php';
$user = $_SESSION['$user_id'];
$tempme = ceil($user + 21);


$query = "SELECT * FROM `pickupds` WHERE `seller`='$tempme' AND `sign`='1' AND `idnumber`!='0' AND `name`!=''";
$query_run = mysql_query($query);
$count = 1;
echo "
<div class=\"table-responsive table-hover\">
  <table class=\"table\">
    <thead>
      <tr>
        <th>No</th>
        <th>Item</th>
        <th>Title</th>
        <th>Price</th>
        <th>Agent</th>
      </tr>
    </thead>
    <tbody>
  ";
while($row = mysql_fetch_assoc($query_run)){
  $item = $row['item'];
  $agent = $row['agent'];
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

$queryitems = "SELECT * FROM `$currentdbs` WHERE `id`='$product'";
$queryitemsrun = mysql_query($queryitems);
while($queryitemrow = mysql_fetch_assoc($queryitemsrun)){
  $imageone = $imgaddr.$queryitemrow['imageone'];
  $itemtitle = $queryitemrow['itemtitle'];
  $price = number_format($queryitemrow['price']);
  echo "
  <tr>
    <td>$count</td>";
  echo "
    <td><a href=\"$link$product\" target=\"_blank\" title=\"view item\"><img src=\"$imageone\" style=\"max-height:40px;\"/></a></td>
    <td>$itemtitle</td>
    <td>Ksh $price</td>
    <td>$agent Null</td>

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
