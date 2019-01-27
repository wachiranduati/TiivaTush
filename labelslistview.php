<?php
session_start();
ob_start();
require 'core.inc.php';
require 'connect.php';
require 'looptemplater.php';

if(isset($_GET['label'])){
    $label = $_GET['label'];
}else{
    $label = 'toon';

}
if(isset($_GET['page'])){
    $currentpage = $_GET['page'];
}else{
    $currentpage =1;
}


$itemsperpage = 20;
$pagejump = $currentpage * $itemsperpage;
if($currentpage == 1){
    $query = "SELECT * FROM `products` WHERE `availability`='1' AND `buyer`='0' AND `label`='$label' LIMIT $itemsperpage";
}else{
    $query = "SELECT * FROM `products` WHERE `availability`='1' AND `buyer`='0' AND `label`='$label' LIMIT $itemsperpage OFFSET $pagejump";
}

$query_run = mysqli_query($conn, $query);

$query2 = "SELECT * FROM `products` WHERE `availability`='1' AND `buyer`='0' AND `label`='$label'";
$query_run2 = mysqli_query($conn, $query2);
$query_num_rows2 = mysqli_num_rows($query_run2);
$page_count = 40;
$pages = ceil($query_num_rows2/$page_count);



while($query_row = mysqli_fetch_assoc($query_run)){
            $price = number_format($query_row['price']);
            //echo "Yes";
            echo returnProperItemsMainpagees($query_row['id'], $query_row['imageone'], $query_row['label'], $query_row['itemtitle'], $price);
            
           // $count++;
       }
       echo "<div class=\"row\">
           <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2\"></div>
           <div class=\"col-lg-8 col-md-8 col-sm-8 col-xs-8\"><ul class=\"pagination\">";

    $loopscount = 1;
    while($loopscount <= $pages){
        if($loopscount == $currentpage){
        echo "<li class=\"active\" onclick=\"loadlabelslistview('$label',$loopscount);\"><a href=\"\">$loopscount</a></li>";
        }else{
            echo "<li onclick=\"loadlabelslistview('$label',$loopscount);\"><a href=\"\">$loopscount</a></li>";
        }
        $loopscount++;
    }



        echo "</ul></div>
            <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2\"></div>
        </div>";

?>
