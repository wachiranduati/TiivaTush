<?php
ob_start();
session_start();
require 'connect.php';
$query = "SELECT `label` FROM `products` WHERE `availability`='1' AND `buyer`='0'";
$query_run = mysqli_query($conn, $query);
$labels = array();

while ($query_row = mysqli_fetch_assoc($query_run)){
    $moja = $query_row['label'];
    if(in_array($moja,$labels)){
    }else{
        array_push($labels,$moja);

    }
}
//print_r($labels);
$count = count($labels);
for ($x = 0;$x<$count;$x++ ) {
    # code...e
    echo "<div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 labeltainer\" onclick=\"loadlabelslistview('$labels[$x]',1);\" style=\"padding:5px;margin-top:1%;\">";
    echo "<h5 class=\" text-center text-capitalize\" style:\"padding:0;\">";
    echo $labels[$x];
    echo "</h5>";
    echo "</div>";

}

 ?>
