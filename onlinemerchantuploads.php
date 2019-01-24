<?php
ob_start();
session_start();
require 'connect.php';
require 'core.inc.php';

$user = $_SESSION['$user_id'];
//echo $user.'<br>';
$tempuser = ceil($user + 21);

// echo "me and you";
$count = 1;
$query = "SELECT * FROM `products` WHERE `availability`!='0' AND `sellerid`='$tempuser'";
$query_run = mysql_query($query);
echo "<div style=\"height:200px;overflow:scroll;\">";
echo "<div class=\"table-responsive\">
  <table class=\"table\">
    <thead>
      <tr>
        <th>Items</th>
        <th>Status</th>
        <th>Image</th>
        <th>Name</th>
        <th>Category</th>
        <th>Subcategory</th>
        <th>Price</th>
        <th>Label</th>
        <th>Edit</th>
        <th>Tinker</th>

      </tr>
    </thead>
    <tbody>";
while($query_row = mysql_fetch_assoc($query_run)){
    $price = number_format($query_row['price']);
    //echo $query_row['itemtitle'] .'<br>';
    echo "<tr>";
      echo "<td>";
      echo $count;
      echo "</td>";
      echo "<td>";
      echo "<span style=\"color:green;\">AVAILABLE</span>";
      echo "</td>";
      echo "<td>";
      echo "<img src=\"";
      echo $query_row['imageone'];
      echo "\" style=\"max-height:50px;\" ";
      echo "</td>";
      echo "<td>";
      echo $query_row['itemtitle'];
      echo "</td>";
      echo "<td>";
      echo $query_row['category'];
      echo "</td>";
      echo "<td>";
      echo $query_row['subcategory'];
      echo "</td>";
      echo "<td>";
      echo $price.' Ksh';
      echo "</td>";
      echo "<td>";
      echo $query_row['label'];
      echo "</td>";
      echo "<td>";
      echo "<a title=\"Edit this item's stats\" class=\"btn btn-primary\">Edit</a>";
      echo "</td>";
      echo "<td>";
      echo "<a title=\"Take down this item\" class=\"btn btn-danger\">Remove</a>";
      echo "</td>";
          echo "</tr>";
    //echo "you";
    $count++;
}
echo "</tbody>
</table>
</div>";

echo "</div>";






?>
