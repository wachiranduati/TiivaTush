<?php
session_start();
ob_start();
require 'core.inc.php';
require 'connect.php';

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
            echo "
    <div class=\"col-lg-2 col-md-2 col-sm-6 col-xs-6\" id=\"box1\">
    <div class=\"row\" style=\"padding:4px;\">
            <a href=\"productdetails.php?id=$query_row[id]\" target=\"_blank\"><div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 productimage\" style=\"background-image:url('mtumbauploads/compresseduploads/$query_row[imageone]'); height:140px;width:100%;background-size:80%;\">
               <img src=\"images/mtushtag.png\" class=\"img-responsive visible-lg visible-md mtushtag\" style=\"height:50%;position:absolute;top:-1.5%;left:80%;\"/>

                <img src=\"images/mtushtag.png\" class=\"img-responsive visible-sm visible-xs mtushtag\" style=\"height:50%;position:absolute;top:-1.5%;left:80%;\"/>

                <!--

                <img src=\"$query_row[imageone]\" class=\"img-responsive\"/>-->
            </div>
            </a>
            </hr>
            <p class=\"text-capitalize\" style=\"margin:0px;padding:0px;\">$query_row[label]</p>
            <hr style=\"margin:0px;padding:0px;\">
            <h1 class=\"text-center text-capitalize\" style=\"font-family:kok;padding:0px;margin:0px;color:#606060;font-size:100%;\"><strong>$query_row[itemtitle]</strong></h1>
            <h2 class=\"text-left\" style=\"padding:0px;margin:0px;color:#ffa427;font-size:100%;\">Ksh $price</h2>

            <!--<div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <p class=\"text-center\">$price Ksh</p>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <p class=\"text-center\" style=\"font-family:kok;\">$query_row[itemtitle]</p>
                </div>
            </div>-->
           <!-- <div class=\"row visible-lg visible-md\">
                <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1\"></div>
                <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-10\">
                    <a href=\"productdetails.php?id=$query_row[id]\" class=\"btn btn-block btn-primary\" data-name=\"$query_row[itemtitle]\" data-price=\"$price\" target=\"_blank\">Add to Cart</a>
                </div>
                <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1\"></div>
            </div>

            <div class=\"row visible-sm visible-xs\">
                <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\"></div>
                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                    <a href=\"productdetails.php?id=$id\" class=\"btn btn-sm btn-block btn-primary\" data-name=\"$query_row[itemtitle]\" data-price=\"$price\" target=\"_blank\">Add to Cart</a>
                </div>
                <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\"></div>
            </div>-->


        </div>
        </div>
        ";
           // $count++;
       };
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
