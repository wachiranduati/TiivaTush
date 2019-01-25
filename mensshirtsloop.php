<?php
require 'connect.php';
$id = 5;
// using id like this so that we can increment it will the 5 minute lapse
// wer are going to select all the items any single div will require
// then post them on the identical div id container
// items required img source, price, title, then formulate the button data-name, data-price
//for this page only get the lead image, follow up to details page query up the total 3 images

function itemloop(){
    $query2 = "SELECT `imageone`, `price`, `webid`, `itemtitle`, `category` FROM `products` WHERE `id`='".mysqli_real_escape_string($conn, $id)."'";
$query_run2 = mysqli_query($conn, $query2);
$query_num_rows = mysqli_num_rows($query_run2);
//echo $query_num_rows;
if($query_num_rows >= 6){
    //to be changed later to 30 to ensure theres enough items at all times
    // the while loop should fall here if less than the required amount
    //with disabled links
    echo "nothing was found or items are not more than 6";
    $query = "SELECT `imageone`, `price`, `webid`, `itemtitle`, `category` FROM `products` WHERE `id`='".mysqli_real_escape_string($conn, $id)."'";
$query_run = mysqli_query($conn, $query);

$query_row = mysqli_fetch_assoc($query_run);
//echo $query_row[imageone];


$count = 1;
while($count <= 6){
echo 
    "
    <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-6\" id=\"box1\">
    <div class=\"row\" style=\"padding:4px;\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <img src=\"images/mtushtag.png\" class=\"img-responsive visible-lg visible-md mtushtag\" style=\"height:50%;position:absolute;top:-1.5%;left:80%;\"/>
                
                <img src=\"images/mtushtag.png\" class=\"img-responsive visible-sm visible-xs mtushtag\" style=\"height:50%;position:absolute;top:-1.5%;left:80%;\"/>
                
                
                
                <img src=\"$query_row[imageone]\" class=\"img-responsive\"/>
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
                <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-10\">
                    <a href=\"productdetails.php?id=$query_row[id]\" class=\"btn btn-block btn-primary\" data-name=\"$query_row[itemtitle]\" data-price=\"$query_row[price]\" target=\"_blank\">Add to Cart</a>
                </div>
                <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1\"></div>
            </div>
            
            <div class=\"row visible-sm visible-xs\">
                <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\"></div>
                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                    <a href=\"productdetails.php?id=$query_row[id]\" class=\"btn btn-sm btn-block btn-primary\" data-name=\"$query_row[itemtitle]\" data-price=\"$query_row[price]\" target=\"_blank\">Add to Cart</a>
                </div>
                <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\"></div>
            </div>
            
            
        </div>
        </div>
        ";
    $count ++;
    //that code up there just looped the same item 6 times to fill in the blank slots
}
    
}else{
    //echo "Something to display right here";
    //this should indicate everything is okay and should
    // display 6 items online with an id count increase
    $query = "SELECT `imageone`, `id`, `price`, `webid`, `itemtitle`, `category` FROM `products` WHERE `id`!='".mysqli_real_escape_string($conn, $id)."' ORDER BY RAND() LIMIT 6";
$query_run = mysqli_query($query);

    $counts = 1;

    while($query_row = mysqli_fetch_assoc($query_run)){
       // echo $query_row['webid'];
 
  echo "
    <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-6\" id=\"box1\">
    <div class=\"row\" style=\"padding:4px;\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <img src=\"images/mtushtag.png\" class=\"img-responsive visible-lg visible-md mtushtag\" style=\"height:50%;position:absolute;top:-1.5%;left:80%;\"/>
                
                <img src=\"images/mtushtag.png\" class=\"img-responsive visible-sm visible-xs mtushtag\" style=\"height:50%;position:absolute;top:-1.5%;left:80%;\"/>
                
                
                
                <img src=\"$query_row[imageone]\" class=\"img-responsive\"/>
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
                <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-10\">
                    <a href=\"productdetails.php?id=$query_row[id]\" class=\"btn btn-block btn-primary\" data-name=\"$query_row[itemtitle]\" data-price=\"$query_row[price]\" target=\"_blank\">Add to Cart</a>
                </div>
                <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1\"></div>
            </div>
            
            <div class=\"row visible-sm visible-xs\">
                <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\"></div>
                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                    <a href=\"productdetails.php?id=$query_row[id]\" class=\"btn btn-sm btn-block btn-primary\" data-name=\"$query_row[itemtitle]\" data-price=\"$query_row[price]\" target=\"_blank\">Add to Cart</a>
                </div>
                <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\"></div>
            </div>
            
            
        </div>
        </div>
        ";
}
}

//the above code checks whether there are enough items specifically more than 6 to satisfy the request
//if not then the while loop below is run with disabled buttons and a note stating that more items 
//are being uploaded


}
itemloop();

?>