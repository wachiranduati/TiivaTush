<?php
require 'connect.php';
require 'looptemplater.php';

// CREATE ALL FUNCTIONS FOR ALL CASES 
// CASE 1 TO LOOP A GENERAL CATEGORY BOTH MTUSH AND SHOP
// CASE 2 TO LOOP A SPECIFIC SUBCATEGORY BOTH MTUSH AND SHOP

//check whether there are enough items in that category
// the minimum number of items must be met
// if so then display 6 at a time
// if not show stock images with sold out, uploading or hide the entire category
// for every sold out category append message on txt file for me to find
// append file if remaining items are 3 times the required number
$category = 'womens';
$subcategory = 'officials';
$notifymecount = 4;// 400 100 in order
$today = Date('Y-m-d');
$toolowcustomer = 1;
$toolowmessagee = 'items in '.$category.' CATEGORY, in '.$subcategory.' need restocking';
$query = "SELECT * FROM `products` WHERE `sex`!='male' AND `subcategory`='$subcategory' AND `availability`='1' AND `buyer`='0'";
// ensure item has not been booked or bought
$query_run = mysqli_query($conn, $query);
$query_num_rows = mysqli_num_rows($query_run);
$query_row = mysqli_fetch_assoc($query_run);


$query2 = "SELECT * FROM `products` WHERE `sex`!='male' AND `subcategory`='$subcategory' AND `availability`='1' AND `buyer`='0' ORDER BY RAND() LIMIT 6";
$query2_run = mysqli_query($conn, $query2);


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
        echo returnEmptyCategory();
    }else{
        // items are enought to display continue
        // display items for customer to view
        //$count = 1;
        while($query2_row = mysqli_fetch_assoc($query2_run)){
            $price = number_format($query2_row['price']);
            //echo "Yes";
            echo returnProperItems($query2_row['id'], $query2_row['imageone'], $query2_row['label'], $query2_row['itemtitle'], $price);
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
        echo returnEmptyCategory();
    }else{
        // items are enought to display continue
        // display items for customer to view
        //$count = 1;
        while($query2_row = mysqli_fetch_assoc($query2_run)){
            $price = number_format($query2_row['price']);
            //echo "Yes";
            echo returnProperItems($query2_row['id'], $query2_row['imageone'], $query2_row['label'], $query2_row['itemtitle'], $price);
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
        echo returnEmptyCategory();
    }else{
        // items are enought to display continue
        // display items for customer to view
        //$count = 1;
        while($query2_row = mysqli_fetch_assoc($query2_run)){
            $price = number_format($query2_row['price']);
            //echo "Yes";
            echo returnProperItems($query2_row['id'], $query2_row['imageone'], $query2_row['label'], $query2_row['itemtitle'], $price);
           // $count++;
        }
    }
    // FINAL STEP
} 


?>