<?php
require 'connect.php';


if(isset($_GET['many'])){
    $many = $_GET['many'];
    $begmax = count($many);
    $count = 0;
    for($beg = 0; $beg < $begmax; $beg++){
        if($beg != $begmax){
            if($beg == 0){
                $bigQ .= " AND `subcategory`='$many[$beg]'";
            }else{
                $bigQ .= " OR `subcategory`='$many[$beg]'";
            }
        }else{
            // $bigQ .= "`subcategory`='$many[$beg]'";
            if($beg == 0){
                $bigQ .= " AND `subcategory`='$many[$beg]'";
            }else{
                $bigQ .= "`subcategory`='$many[$beg]'";
            }
        }
    }
    //echo $bigQ;
}
if(isset($_GET['category'])){
    $category = $_GET['category'];
    // $subcategory = $_GET['subcategory'];
    if(!empty($category)){
        $notifymecount = 4;// 400 100 in order
        $today = Date('Y-m-d');
        $toolowcustomer = 1;
        // $toolowmessagee = 'items in '.$category.' CATEGORY, in '.$subcategory.' need restocking';
        $query = "SELECT * FROM `brandyproducts` WHERE `category`='$category' AND `instock`>='1' $bigQ";
        //echo $query;
        // ensure item has not been booked or bought
        $query_run = mysql_query($query);
        $query_num_rows = mysql_num_rows($query_run);
        $query_row = mysql_fetch_assoc($query_run);


        $query2 = "SELECT * FROM `brandyproducts` WHERE `category`='$category' AND `instock`>='1' $bigQ ORDER BY RAND() LIMIT 6";
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

                // items are too few to display
                // produce message to user that either sold out booked out or uploading
                // set entire background and display message to clients
                echo "
                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 visible-lg visible-md\" style=\"height:400px;width:100%;color:red;background-image:url('editions/man-person-jumping-desert.jpg');background-size:100%;background-position:center;background-repeat:no-repeat;\">
                                <h4 class=\"text-center text-capitalize\" style=\"margin-top:20%;\">Sorry items have ran out in this $category category</h4>
                            </div>

                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 visible-sm visible-xs\" style=\"height:200px;width:100%;color:red;background-image:url('editions/man-person-jumping-desert.jpg');background-size:100%;background-position:center;background-repeat:no-repeat;\">
                                <h4 class=\"text-center text-capitalize\" style=\"margin-top:20%;\">Sorry items have ran out in this $category category</h4>
                            </div>


                    ";

                    //FINAL STEP

                }else{
                    //create searches.txt file and write the value to it
                    //this will be the queried resulst
                    $handle = fopen('logs/Restock_errors.txt','w');
                    fwrite($handle,'Restock'.$category.' & '.$subcategory.'|'.$today.PHP_EOL);
                    fclose($handle);
                   // echo 'New File has been created and search term added with id';
                    // FINAL STEP

                echo "
                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 visible-lg visible-md\" style=\"height:400px;width:100%;color:red;background-image:url('editions/man-person-jumping-desert.jpg');background-size:100%;background-position:center;background-repeat:no-repeat;\">
                                <h4 class=\"text-center text-capitalize\" style=\"margin-top:20%;\">Sorry items have ran out in this $category category</h4>
                            </div>

                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 visible-sm visible-xs\" style=\"height:200px;width:100%;color:red;background-image:url('editions/man-person-jumping-desert.jpg');background-size:100%;background-position:center;background-repeat:no-repeat;\">
                                <h4 class=\"text-center text-capitalize\" style=\"margin-top:20%;\">Sorry items have ran out in this $category category</h4>
                            </div>


                    ";
            
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
                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 visible-lg visible-md\" style=\"height:400px;width:100%;color:red;background-image:url('editions/man-person-jumping-desert.jpg');background-size:100%;background-position:center;background-repeat:no-repeat;\">
                                <h4 class=\"text-center text-capitalize\" style=\"margin-top:20%;\">Sorry items have ran out in this $category category</h4>
                            </div>

                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 visible-sm visible-xs\" style=\"height:200px;width:100%;color:red;background-image:url('editions/man-person-jumping-desert.jpg');background-size:100%;background-position:center;background-repeat:no-repeat;\">
                                <h4 class=\"text-center text-capitalize\" style=\"margin-top:20%;\">Sorry items have ran out in this $category category</h4>
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
                <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-6\" id=\"box2\">
                <a href=\"storeproduct.php?id=$query2_row[id]\" target=\"_blank\" style=\"text-decoration:none;\">

                        <div class=\"row\" style=\"padding:4px;\">
                                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 productimage2\" style=\"background-image:url('uploadproducts/compressedproducts/$query2_row[imageone]'); height:140px;width:100%;background-size:75%;\">
                                       <img src=\"images/newitemstag.png\" class=\"img-responsive visible-lg visible-md mtushtags\" style=\"height:40%;position:absolute;top:-1.5%;left:75%;\"/>

                                        <img src=\"images/newitemstag.png\" class=\"img-responsive visible-sm visible-xs mtushtags\" style=\"height:40%;position:absolute;top:-1.5%;left:75%;\"/>
                                        <!--<small class=\"\" style=\"height:40%;position:absolute;top:-1.5%;left:60%;\">BrandNew<i class=\"mdi mdi-tag\"></i></small>-->

                                    </div>

                                </hr>
                                <p class=\"text-capitalize\" style=\"margin:0px;padding:0px;font-family:kok;\">
                                    $query2_row[label]<span class=\"pull-right\">Tiiva Shop</span>
                                </p>
                                <hr style=\"margin:0px;padding:0px;\">
                                <h1 class=\"text-center text-capitalize\" style=\"font-family:kok;padding:0px;margin:0px;color:#606060;font-size:100%;text-decoration:none;\">
                                    <strong>$query2_row[itemtitle]</strong>
                                </h1>
                                <h2 class=\"text-left\" style=\"padding:0px;margin:0px;color:#ffa427;font-size:100%;\">
                                    Ksh $price
                                </h2>

                        </div></a>
                </div>
                ";
                   // $count++;
                }
            }
            // FINAL STEP
        }

    }
}

?>
