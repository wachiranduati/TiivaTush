<?php
ob_start();
session_start();
require 'connect.php';
$query = "SELECT *
FROM sold
INNER JOIN checkoutcarts
ON sold.cartname=checkoutcarts.cartname WHERE checkoutcarts.customer_id=27";
$query_run = mysql_query($query);
$locations = array();
echo "<div class=\"row\">";
while($query_row = mysql_fetch_assoc($query_run)){
  //echo $query_row['county'].' '.$query_row['area'].' '.$query_row['phone'].'<br>';
  $phone = $query_row['phone'];
  if(in_array($phone,$locations)){
    //echo "found";
  }else{
    //echo 'adding....<br>';
    array_push($locations,$phone);
    //echo$query_row['names'].' '.$query_row['identity'].''.$query_row['county'].' '.$query_row['area'].' '.$query_row['phone'].'<br>';
    echo "
    <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2\" id=\"locationlocs\" style=\"border:1px solid border;margin:1%;box-shadow:1px 1px 1px #00BAFF;font-family:kok;\">
        <div class=\"row\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <h3 class=\"text-center text-capitalize\"><strong>$query_row[names]</strong></h3>
                <h4 class=\"\">ID no: $query_row[identity]</h4>
                <h4 class=\"\">Phone: $query_row[phone]</h4>
            </div>
        </div>
        <div class=\"row\" style=\"background-color:rgba(220,220,220,0.5);clear:both;\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"margin-top:2%;margin-bottom:2%;\">
                <h3 class=\"\">County: $query_row[county]</h3>
                <h3 class=\"text-capitalize\">Area: <strong><span>$query_row[area]</span></strong></h3>
            </div>
        </div>



    </div>";



  }
}
echo "</div>";
// $locations[0]="empty";
//print_r($locations);
?>
