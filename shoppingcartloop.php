<?php
require 'connect.php';
require 'looptemplater.php';
$id = 5;
// using id like this so that we can increment it will the 5 minute lapse
// wer are going to select all the items any single div will require
// then post them on the identical div id container
// items required img source, price, title, then formulate the button data-name, data-price
//for this page only get the lead image, follow up to details page query up the total 3 images

$query = "SELECT `imageone`, `price`, `itemtitle`, `imagetwo`, `sellerid`,  `webid`, `imagethree`, `category` FROM `products` WHERE `id`='".mysqli_real_escape_string($conn, $id)."'";
$query_run = mysqli_query($conn, $query);

$query_row = mysqli_fetch_assoc($query_run);
//echo $query_row[imageone];

$count = 1;
while($count <= 3){
echo 
    "
    
<!--                        this is a cart item-->
                        <div class=\"row\" style=\"border-bottom:1px solid gainsboro;margin-top:5px;\">
                            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                                <div class=\"row\">
                                    <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\"><img src=\"$query_row[imagetwo]\" class=\"img-responsive\"/></div>
             
             <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\"><p>$query_row[itemtitle]</p></div>
                                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\"><h5>Web ID: $query_row[webid]</h5></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2\">
                                <div class=\"row\">
                                    <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\"><p class=\"text-right\">Ksh</p></div>
                                    <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\"><p>$query_row[price]</p></div>
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\" style=\"border:1px solid gainsboro\"><p class=\"text-center\">1</p></div>
                            <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2\">
                                <div class=\"row\">
                                    <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2\"><p>Ksh</p></div>
                                    <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\"><p>$query_row[price]</p></div>
                                    <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2\"><button class=\"btn-danger\">X</button></div>
                                </div>
                            </div>
                            
                        </div>
                        
<!--                        end of the item -->
     ";    
    
    $count ++;
}

?>