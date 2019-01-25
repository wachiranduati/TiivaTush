<?php
require 'connect.php';
$today = Date('Y').'-'.Date('m').'-'.Date('d');
$timetoday = Date('H').':'.Date('i').':'.Date('s');
//$id = 2;
$me = $_SERVER['REMOTE_ADDR'];
//$me = '11.11.11.11';

// this increments the view of the product item viewed
// so with a page reload so does the page view increase
// it is non unique and only shows the interest people have in it
// views will not be used for ranking
// sales can be used for ranking but later on after filtering through everything
//ALGORITHM
// first check whether item row exists if not create one
// decide to make a unique view counter logging ips in an array
//mysqli_real_escape_string

if(isset($_POST['id'])){
    $id = $_POST['id'];
    if(!empty($id)){
        // do everything
        $query = "SELECT * FROM `productviews` WHERE `productid`='$id'";
$query_run = mysqli_query($conn, $query);
$query_num_rows = mysqli_num_rows($query_run);
$row = mysqli_fetch_assoc($query_run);
if($query_num_rows == 0){
    // does not exist
    // create a row and give it a view of 1 and update it with todays date
    $queryinsert = "INSERT INTO `productviews` (`id`,`productid`,`views`,`lastviewed`,`lsttime`,`ips`) VALUES ('','$id','1','$today','$timetoday','$me')";
    if($queryinsert_run = mysqli_query($conn, $queryinsert)){
        // row has been insert
        // recall the function to update the figure on the product page
        //echo "it has inserted";
        echo "1";
    }else{
        // row has not been inserted
        // encountered an error
        // log it with admin
        //echo "Error inserting";
        echo "0";

        //echo mysqli_error();
    }
}else{
    // exists
    // first get the values of 
    // check whether the ip exists 
    // if it does do nothing to the views
    // else push the ip to the list
    // update view count plus one
    // update lastviewed to current day today
    // update lsttime to now
    // mins ago will be current time - lsttime provided its on the same day
    $ips = $row['ips'];
    $ipsarray = explode(',',$ips);
    //print_r($ipsarray);
    if(in_array($me,$ipsarray)){
        //echo "Found";
        // dont update views as this ip has already viewed the item
        // update the time and date
        $views = $row['views'];
        //echo $views;
        $ipscount = count($ipsarray);
        $queryupdate = "UPDATE `productviews` SET `views`='$ipscount', `lastviewed`='$today', `lsttime`='$timetoday' WHERE `productid`='$id'";
        if($queryupdate_run = mysqli_query($conn, $queryupdate)){
            // it updated the records okay
            // call the function again
            //echo "updated successfully1";
            echo $ipscount;
        }else{
            // encountered a problem updating the records
            //echo "error updating1";
            echo $ipscount;
           // //echo mysqli_error();
        }

    }else{
        //echo "Not found";
        // update the views as teh ip has not viewed the item
        array_push($ipsarray,$me);
        $newipsarray = array_values($ipsarray);
        $newipsarraystring = implode(',',$newipsarray);
        $views = count(newipsarray);
        //echo $views;
        $queryupdate = "UPDATE `productviews` SET `views`='$views', `lastviewed`='$today', `lsttime`='$timetoday',`ips`='$newipsarraystring' WHERE `productid`='$id'";
        if($queryupdate_run = mysqli_query($conn, $queryupdate)){
            // it updated the records okay
            // call the function again
            //echo "updated successfully2";
            echo $views;
        }else{
            // encountered a problem updating the records
            echo "error updating2";
            echo $views;
           // //echo mysqli_error();
        }
        
    }
    
    
}
    }else{
        // id is empty do nothing
        die('Bye bye');
    }
}else{
    // id not set
    die('Bye bye');
}

?>