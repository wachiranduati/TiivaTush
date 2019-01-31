<?php
ob_start();
session_start();
require 'connect.php';
require 'looptemplater.php';


$search = $_GET['search'];
//$sub = $_GET['sub'];


//$search = 'interiors';
//$sub = 'wallart';
//$page = $_GET['page'];
if(isset($_GET['sub'])){
    $sub = $_GET['sub'];
    if($sub == 'Tiiva Shack'){
        $dbs = 'products';
        $imageaddr = 'mtumbauploads/compresseduploads/';
        $label = 'SHACK';
    }else{
        $dbs = 'brandyproducts';
        $imageaddr = 'uploadproducts/compressedproducts/';
        $label = 'SHOP';
    }

}else{
    $dbs = 'brandyproducts';
    $imageaddr = 'uploadproducts/compressedproducts/';
    $label = 'SHOP';
}


if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 1;
}
$current = $page - 1;
// using id like this so that we can increment it will the 5 minute lapse
// wer are going to select all the items any single div will require
// then post them on the identical div id container
// items required img source, price, title, then formulate the button data-name, data-price
//for this page only get the lead image, follow up to details page query up the total 3 images
$items1 = 40;
$items = 40;
$jump = $items * $current;

if($page == 1){
    //$query = "SELECT * FROM `products` WHERE `category`='".mysqli_real_escape_string($conn, $search)."' AND `subcategory`='".mysqli_real_escape_string($conn, $sub)."' AND `availability`='1' AND `buyer`='0' LIMIT $items1";
    //$query = "SELECT * FROM $dbs WHERE `availability`='1' AND `buyer`='0' AND `itemtitle` LIKE '%".mysqli_real_escape_string($conn, $search)."%' LIMIT $items1";
    if($dbs == 'products'){
        $query = "SELECT * FROM $dbs WHERE `availability`='1' AND `buyer`='0' AND `itemtitle` LIKE '%".mysqli_real_escape_string($conn, $search)."%' LIMIT $items1";
    }elseif( $dbs == 'brandyproducts'){
        $query = "SELECT * FROM $dbs WHERE `instock`>='1' AND `itemtitle` LIKE '%".mysqli_real_escape_string($conn, $search)."%' LIMIT $items1";
    }else{
        $query = "SELECT * FROM $dbs WHERE `instock`>='1' AND `itemtitle` LIKE '%".mysqli_real_escape_string($conn, $search)."%' LIMIT $items OFFSET $jump";
    }
}else{
    //$query = "SELECT * FROM `products` WHERE `category`='".mysqli_real_escape_string($conn, $search)."' AND `subcategory`='".mysqli_real_escape_string($conn, $sub)."' AND `availability`='1' AND `buyer`='0' LIMIT $items OFFSET $jump";
    //$query = "SELECT * FROM $dbs WHERE `availability`='1' AND `buyer`='0' AND `itemtitle` LIKE '%".mysqli_real_escape_string($conn, $search)."%' LIMIT $items OFFSET $jump";
    if($dbs == 'products'){
        $query = "SELECT * FROM $dbs WHERE `availability`='1' AND `buyer`='0' AND `itemtitle` LIKE '%".mysqli_real_escape_string($conn, $search)."%' LIMIT $items OFFSET $jump";
    }elseif( $dbs == 'brandyproducts'){
        $query = "SELECT * FROM $dbs WHERE `instock`>='1' AND `itemtitle` LIKE '%".mysqli_real_escape_string($conn, $search)."%' LIMIT $items OFFSET $jump";
    }else{
        $query = "SELECT * FROM $dbs WHERE `instock`>='1' AND `itemtitle` LIKE '%".mysqli_real_escape_string($conn, $search)."%' LIMIT $items OFFSET $jump";
    }
}


//$query = "SELECT * FROM `products` WHERE `category`='".mysqli_real_escape_string($conn, $search)."' AND `subcategory`='".mysqli_real_escape_string($conn, $sub)."'LIMIT $items OFFSET $jump";
$query_run = mysqli_query($conn, $query);
$query_num_rows = mysqli_num_rows($query_run);


//$query2 = "SELECT * FROM `products` WHERE `category`='".mysqli_real_escape_string($conn, $search)."' AND `subcategory`='".mysqli_real_escape_string($conn, $sub)."' AND `availability`='1' AND `buyer`='0' ORDER BY RAND()";
//$query2 = "SELECT * FROM $dbs WHERE `availability`='1' AND `buyer`='0' AND `itemtitle` LIKE '%".mysqli_real_escape_string($conn, $search)."%' ORDER BY RAND()";
if($dbs == 'products'){
    $query2 = "SELECT * FROM $dbs WHERE `availability`='1' AND `buyer`='0' AND `itemtitle` LIKE '%".mysqli_real_escape_string($conn, $search)."%' LIMIT $items OFFSET $jump";
}elseif( $dbs == 'brandyproducts'){
    $query2 = "SELECT * FROM $dbs WHERE `instock`>='1' AND `itemtitle` LIKE '%".mysqli_real_escape_string($conn, $search)."%' LIMIT $items OFFSET $jump";
}else{
    $query2 = "SELECT * FROM `brandyproducts` WHERE `instock`>='1' AND `itemtitle` LIKE '%".mysqli_real_escape_string($conn, $search)."%' LIMIT $items OFFSET $jump";
}
$query_run2 = mysqli_query($conn, $query2);
$query_num_rows2 = mysqli_num_rows($query_run2);
$pages = $query_num_rows2 / $items;
$count = 0;
while($query_row = mysqli_fetch_assoc($query_run)){

$price = number_format($query_row['price']);
    echo returnProperItemsMainpagees($query_row['id'], $query_row['imageone'], $query_row['label'], $query_row['itemtitle'], $price, $query_row['size']);
    $count++;
    if($count % 12 == 0){
        echo "

                <div class=\"row visible-lg visible-md\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"padding:0px;margin-top:1%;\">
                    <a href=\"Mens.php\">
                        <img src=\"banners/different.png\" class=\"img-responsive\"/>
                    </a>
                </div>
            </div>

            ";
    }
}
?>
