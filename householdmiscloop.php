<?php
require 'connect.php';

// CREATE ALL FUNCTIONS FOR ALL CASES 
// CASE 1 TO LOOP A GENERAL CATEGORY BOTH MTUSH AND SHOP
// CASE 2 TO LOOP A SPECIFIC SUBCATEGORY BOTH MTUSH AND SHOP

//check whether there are enough items in that category
// the minimum number of items must be met
// if so then display 6 at a time
// if not show stock images with sold out, uploading or hide the entire category
// for every sold out category append message on txt file for me to find
// append file if remaining items are 3 times the required number
$category = 'interiors';
$subcategory = 'misc';
$notifymecount = 4;// 400 100 in order
$today = Date('Y-m-d');
$toolowcustomer = 1;
$toolowmessagee = 'items in '.$category.' CATEGORY, in '.$subcategory.' need restocking';
$query = "SELECT * FROM `products` WHERE `category`='$category' AND `subcategory`='$subcategory' AND `availability`='1' AND `buyer`='0'";
// ensure item has not been booked or bought
$query_run = mysql_query($query);
$query_num_rows = mysql_num_rows($query_run);
$query_row = mysql_fetch_assoc($query_run);


$query2 = "SELECT * FROM `products` WHERE `category`='$category' AND `subcategory`='$subcategory' AND `availability`='1' AND `buyer`='0' ORDER BY RAND() LIMIT 6";
$query2_run = mysql_query($query2);


// recommended number per category = 100 so notification will be after 400
if($query_num_rows <= $notifymecount){
    // notify me that size is getting small
    // continue on to display items
    if(file_exists('logs/Queried_searches.txt')){
            // append the word value to it
            $handle = fopen('logs/Restock_errors.txt','a');
            fwrite($handle,'Restock'.$category.' & '.$subcategory.'|'.$today.PHP_EOL);
            fclose($handle);
            //echo 'File has been appended';
            //FINAL STEP
                if($query_num_rows <= $toolowcustomer){
        // items are too few to display 
        // produce message to user that either sold out booked out or uploading
        // set entire background and display message to clients
        echo "
                <div class=\"row visible-lg visible-md\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"height:400px;width:100%;color:red;background-image:url('editions/man-person-jumping-desert.jpg');background-size:100%;background-position:center;background-repeat:no-repeat;\">
                        <h4 class=\"text-center text-capitalize\" style=\"margin-top:20%;\">Sorry items have ran out in this category</h4>
                    </div>
                </div>
                
                <div class=\"row visible-sm visible-xs\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"height:200px;width:100%;color:red;background-image:url('editions/man-person-jumping-desert.jpg');background-size:100%;background-position:center;background-repeat:no-repeat;\">
                        <h4 class=\"text-center text-capitalize\" style=\"margin-top:20%;\">Sorry items have ran out in this category</h4>
                    </div>
                </div>
                
                
            ";
    }else{
        // items are enought to display continue
        // display items for customer to view
        //$count = 1;
        while($query2_row = mysql_fetch_assoc($query2_run)){
            $price = number_format($query2_row['price']);
            //echo "Yes";
            echo "
    <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-6\" id=\"box1\">
    <div class=\"row\" style=\"padding:4px;\">
            <a href=\"productdetails.php?id=$query2_row[id]\" target=\"_blank\"><div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 productimage\" style=\"background-image:url('mtumbauploads/compresseduploads/$query2_row[imageone]'); height:140px;width:100%;background-size:80%;\">
               <img src=\"images/mtushtag.png\" class=\"img-responsive visible-lg visible-md mtushtag\" style=\"height:50%;position:absolute;top:-1.5%;left:80%;\"/>
                
                <img src=\"images/mtushtag.png\" class=\"img-responsive visible-sm visible-xs mtushtag\" style=\"height:50%;position:absolute;top:-1.5%;left:80%;\"/>
                
                <!-- 
                
                <img src=\"$query2_row[imageone]\" class=\"img-responsive\"/>-->
            </div>
            </a>
            </hr>
            <p class=\"text-capitalize\" style=\"margin:0px;padding:0px;\">$query2_row[label]</p>
            <hr style=\"margin:0px;padding:0px;\">
            <h1 class=\"text-center text-capitalize\" style=\"font-family:kok;padding:0px;margin:0px;color:#606060;font-size:100%;\"><strong>$query2_row[itemtitle]</strong></h1>
            <h2 class=\"text-left\" style=\"padding:0px;margin:0px;color:#ffa427;font-size:100%;\">Ksh $price</h2>
            
            <!--<div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <p class=\"text-center\">$price Ksh</p>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <p class=\"text-center\" style=\"font-family:kok;\">$query2_row[itemtitle]</p>
                </div>
            </div>-->
           <!-- <div class=\"row visible-lg visible-md\">
                <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1\"></div>
                <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-10\">
                    <a href=\"productdetails.php?id=$query2_row[id]\" class=\"btn btn-block btn-primary\" data-name=\"$query2_row[itemtitle]\" data-price=\"$price\" target=\"_blank\">Add to Cart</a>
                </div>
                <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1\"></div>
            </div>
            
            <div class=\"row visible-sm visible-xs\">
                <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\"></div>
                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                    <a href=\"productdetails.php?id=$id\" class=\"btn btn-sm btn-block btn-primary\" data-name=\"$query2_row[itemtitle]\" data-price=\"$price\" target=\"_blank\">Add to Cart</a>
                </div>
                <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\"></div>
            </div>-->
            
            
        </div>
        </div>
        ";
           // $count++;
        }
    }
            //FINAL STEP
            
        }else{
            //create searches.txt file and write the value to it
            //this will be the queried resulst
            $handle = fopen('logs/Restock_errors.txt','w');
            fwrite($handle,'Restock'.$category.' & '.$subcategory.'|'.$today.PHP_EOL);
            fclose($handle);
           // echo 'New File has been created and search term added with id';
            // FINAL STEP
                if($query_num_rows <= $toolowcustomer){
        // items are too few to display 
        // produce message to user that either sold out booked out or uploading
        // set entire background and display message to clients
        echo "
                <div class=\"row visible-lg visible-md\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"height:400px;width:100%;color:red;background-image:url('editions/man-person-jumping-desert.jpg');background-size:100%;background-position:center;background-repeat:no-repeat;\">
                        <h4 class=\"text-center text-capitalize\" style=\"margin-top:20%;\">Sorry items have ran out in this category</h4>
                    </div>
                </div>
                
                <div class=\"row visible-sm visible-xs\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"height:200px;width:100%;color:red;background-image:url('editions/man-person-jumping-desert.jpg');background-size:100%;background-position:center;background-repeat:no-repeat;\">
                        <h4 class=\"text-center text-capitalize\" style=\"margin-top:20%;\">Sorry items have ran out in this category</h4>
                    </div>
                </div>
                
                
            ";
    }else{
        // items are enought to display continue
        // display items for customer to view
        //$count = 1;
        while($query2_row = mysql_fetch_assoc($query2_run)){
            $price = number_format($query2_row['price']);
            //echo "Yes";
            echo "
    <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-6\" id=\"box1\">
    <div class=\"row\" style=\"padding:4px;\">
            <a href=\"productdetails.php?id=$query2_row[id]\" target=\"_blank\"><div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 productimage\" style=\"background-image:url('mtumbauploads/compresseduploads/$query2_row[imageone]'); height:140px;width:100%;background-size:80%;\">
               <img src=\"images/mtushtag.png\" class=\"img-responsive visible-lg visible-md mtushtag\" style=\"height:50%;position:absolute;top:-1.5%;left:80%;\"/>
                
                <img src=\"images/mtushtag.png\" class=\"img-responsive visible-sm visible-xs mtushtag\" style=\"height:50%;position:absolute;top:-1.5%;left:80%;\"/>
                
                <!-- 
                
                <img src=\"$query2_row[imageone]\" class=\"img-responsive\"/>-->
            </div>
            </a>
            </hr>
            <p class=\"text-capitalize\" style=\"margin:0px;padding:0px;\">$query2_row[label]</p>
            <hr style=\"margin:0px;padding:0px;\">
            <h1 class=\"text-center text-capitalize\" style=\"font-family:kok;padding:0px;margin:0px;color:#606060;font-size:100%;\"><strong>$query2_row[itemtitle]</strong></h1>
            <h2 class=\"text-left\" style=\"padding:0px;margin:0px;color:#ffa427;font-size:100%;\">Ksh $price</h2>
            
            <!--<div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <p class=\"text-center\">$price Ksh</p>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <p class=\"text-center\" style=\"font-family:kok;\">$query2_row[itemtitle]</p>
                </div>
            </div>-->
           <!-- <div class=\"row visible-lg visible-md\">
                <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1\"></div>
                <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-10\">
                    <a href=\"productdetails.php?id=$query2_row[id]\" class=\"btn btn-block btn-primary\" data-name=\"$query2_row[itemtitle]\" data-price=\"$price\" target=\"_blank\">Add to Cart</a>
                </div>
                <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1\"></div>
            </div>
            
            <div class=\"row visible-sm visible-xs\">
                <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\"></div>
                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                    <a href=\"productdetails.php?id=$id\" class=\"btn btn-sm btn-block btn-primary\" data-name=\"$query2_row[itemtitle]\" data-price=\"$price\" target=\"_blank\">Add to Cart</a>
                </div>
                <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\"></div>
            </div>-->
            
            
        </div>
        </div>
        ";
           // $count++;
        }
    }
            // FINAL STEP
        }
    
    
}else{
    // do nothing
    // continue on to display items
    // FINAL STEP
    if($query_num_rows <= $toolowcustomer){
        // items are too few to display 
        // produce message to user that either sold out booked out or uploading
        // set entire background and display message to clients
        echo "
                <div class=\"row visible-lg visible-md\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"height:400px;width:100%;color:red;background-image:url('editions/man-person-jumping-desert.jpg');background-size:100%;background-position:center;background-repeat:no-repeat;\">
                        <h4 class=\"text-center text-capitalize\" style=\"margin-top:20%;\">Sorry items have ran out in this category</h4>
                    </div>
                </div>
                
                <div class=\"row visible-sm visible-xs\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"height:200px;width:100%;color:red;background-image:url('editions/man-person-jumping-desert.jpg');background-size:100%;background-position:center;background-repeat:no-repeat;\">
                        <h4 class=\"text-center text-capitalize\" style=\"margin-top:20%;\">Sorry items have ran out in this category</h4>
                    </div>
                </div>
                
                
            ";
    }else{
        // items are enought to display continue
        // display items for customer to view
        //$count = 1;
        while($query2_row = mysql_fetch_assoc($query2_run)){
            $price = number_format($query2_row['price']);
            //echo "Yes";
            echo "
    <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-6\" id=\"box1\">
    <div class=\"row\" style=\"padding:4px;\">
            <a href=\"productdetails.php?id=$query2_row[id]\" target=\"_blank\"><div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 productimage\" style=\"background-image:url('mtumbauploads/compresseduploads/$query2_row[imageone]'); height:140px;width:100%;background-size:80%;\">
               <img src=\"images/mtushtag.png\" class=\"img-responsive visible-lg visible-md mtushtag\" style=\"height:50%;position:absolute;top:-1.5%;left:80%;\"/>
                
                <img src=\"images/mtushtag.png\" class=\"img-responsive visible-sm visible-xs mtushtag\" style=\"height:50%;position:absolute;top:-1.5%;left:80%;\"/>
                
                <!-- 
                
                <img src=\"$query2_row[imageone]\" class=\"img-responsive\"/>-->
            </div>
            </a>
            </hr>
            <p class=\"text-capitalize\" style=\"margin:0px;padding:0px;\">$query2_row[label]</p>
            <hr style=\"margin:0px;padding:0px;\">
            <h1 class=\"text-center text-capitalize\" style=\"font-family:kok;padding:0px;margin:0px;color:#606060;font-size:100%;\"><strong>$query2_row[itemtitle]</strong></h1>
            <h2 class=\"text-left\" style=\"padding:0px;margin:0px;color:#ffa427;font-size:100%;\">Ksh $price</h2>
            
            <!--<div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <p class=\"text-center\">$price Ksh</p>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <p class=\"text-center\" style=\"font-family:kok;\">$query2_row[itemtitle]</p>
                </div>
            </div>-->
           <!-- <div class=\"row visible-lg visible-md\">
                <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1\"></div>
                <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-10\">
                    <a href=\"productdetails.php?id=$query2_row[id]\" class=\"btn btn-block btn-primary\" data-name=\"$query2_row[itemtitle]\" data-price=\"$price\" target=\"_blank\">Add to Cart</a>
                </div>
                <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1\"></div>
            </div>
            
            <div class=\"row visible-sm visible-xs\">
                <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\"></div>
                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                    <a href=\"productdetails.php?id=$id\" class=\"btn btn-sm btn-block btn-primary\" data-name=\"$query2_row[itemtitle]\" data-price=\"$price\" target=\"_blank\">Add to Cart</a>
                </div>
                <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\"></div>
            </div>-->
            
            
        </div>
        </div>
        ";
           // $count++;
        }
    }
    // FINAL STEP
} 


?>