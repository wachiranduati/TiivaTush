<?php
require 'connect.php';
require 'looptemplater.php';
$id = 5;
// using id like this so that we can increment it will the 5 minute lapse
// wer are going to select all the items any single div will require
// then post them on the identical div id container
// items required img source, price, title, then formulate the button data-name, data-price
//for this page only get the lead image, follow up to details page query up the total 3 images

$query = "SELECT `imageone`, `price`, `itemtitle`, `category` FROM `products` WHERE `id`='".mysqli_real_escape_string($conn, $id)."'";
$query_run = mysqli_query($conn, $query);

$query_row = mysqli_fetch_assoc($query_run);
//echo $query_row[imageone];

$count = 1;
while($count <= 8){
echo 
    "
    <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-6\" id=\"box1\">
    <div class=\"row\" style=\"padding:4px;\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <img src=\"$query_row[imageone]\" class=\"img-responsive\">
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <p class=\"text-center\">$query_row[price] Ksh</p>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <p class=\"text-center\" style=\"font-family:kok;\">$query_row[itemtitle]</p>
                </div>
            </div>
            <div class=\"row visible-lg visible-md\">
                <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1\"></div>
                <div class=\"col-lg-10 col-md-10 col-sm-12 col-xs-12\">
                    <a href=\"productdetails.php?id=$query_row[id]\" class=\"btn btn-block btn-primary\" data-name=\"$query_row[itemtitle]\" data-price=\"$query_row[price]\">Add to Cart</a>
                </div>
                <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1\"></div>
            </div>
            
            <div class=\"row visible-sm visible-xs\">
                <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\"></div>
                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                    <a href=\"productdetails.php?id=$query_row[id]\" class=\"btn btn-sm btn-primary\" data-name=\"$query_row[itemtitle]\" data-price=\"$query_row[price]\">Add to Cart</a>
                </div>
                <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\"></div>

            </div>
            
            
        </div>
        </div>
        ";
    $count ++;
}
?>