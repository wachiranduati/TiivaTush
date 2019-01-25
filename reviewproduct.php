<?php
ob_start();
session_start();
require 'connect.php';
$my_id = $_SESSION['$user_id'];
$user_id = 21 + $my_id;
// echo $user_id;
// $site = "M";
// $product = 123;
// $rate = 5;
 $rateslist = "1,2,3,4,5";
// $reviewtext = "I was deeply dissapointed with the item i wish i hadnt bought it, any chance it can be returned?";
//TODO DISABLE BUTTON IF ITEM HAS ALREADY BEEN RATED AND REVIEWED

if(isset($_POST['gift']) && isset($_POST['rate']) && isset($_POST['review'])){
  $gift = $_POST['gift'];
  $site = substr($gift,0,1);
  $product = substr($gift,1);
  $rate = $_POST['rate'];
  $reviewtext = $_POST['review'];

  switch ($rate) {
    case 1:
      $ratetotalslist = "1,0,0,0,0";
      break;
    case 2:
      $ratetotalslist = "0,1,0,0,0";
      break;
    case 3:
      $ratetotalslist = "0,0,1,0,0";
      break;
    case 4:
      $ratetotalslist = "0,0,0,1,0";
      break;
    case 5:
      $ratetotalslist = "0,0,0,0,1";
      break;
    //
    // default:
    //   # code...
    //   break;
  }
  // echo $ratetotalslist;
  if(!empty($gift) && !empty($rate) && !empty($reviewtext)){
    //check if the product id exists like its already been rated
    //if it doesnt insert
    //else update
    if($site == 's' || $site == 'S'){
      $query = "SELECT `productid` FROM `reviews` WHERE `productid`='$product' AND `site`='$site'";
    }elseif($site == 'm' || $site == 'M'){
      $query = "SELECT `productid` FROM `reviews` WHERE `productid`='$product' AND `site`='$site'";
    }else{
      die("Error");
    }
    $query_run = mysqli_query($conn, $query);
    $query_num_rows = mysqli_num_rows($query_run);
    if($query_num_rows == 0){
      //row does not exist not rated or reviewed
      // insert row
      //echo "not exist";
      $queryinsert = "INSERT INTO `reviews` VALUES('','$product','$site','$rateslist','$ratetotalslist','$reviewtext','1','$user_id')";
      if($qinsert_run = mysqli_query($conn, $queryinsert)){
        // rating on a product has begun
        echo "Thankyou for rating and reviewing the item";
      }else{
        // rating on a new product cant begin
        echo "The rating encountered a problem";
      }

    }else{
      //row exists | already rated and reviewed
      // update row
      //echo "exists<br>";

      //check whether user has commented before
            // if he has then sorry you've already rated the item before would you like to rereview it?
      //user has not commented
          // review it and update values
        $querycheckonuser = "SELECT * FROM `reviews` WHERE `productid`='$product' AND `site`='$site'";
        $querycheckonuser_run = mysqli_query($conn, $querycheckonuser);
        if($quqerycheckonuser_row = mysqli_fetch_assoc($querycheckonuser_run)){
          $revieweduserslist = $quqerycheckonuser_row['users'];
          $reviewedusersarray = explode(',',$revieweduserslist);
          $reviewslist = $quqerycheckonuser_row['reviews'];
          $reviewsarray = explode('<<>>',$reviewslist);
          $reviewerlist = $quqerycheckonuser_row['users'];
          $reviewerarray = explode(',',$reviewerlist);
          $reviewnumberslist = $quqerycheckonuser_row['reviewnos'];
          $reviewnumbersarray = explode(',',$reviewnumberslist);
          // print_r($reviewedusersarray);
          if(in_array($user_id,$reviewedusersarray)){
          //  echo "in array<br>";
            // in array
            // would you like to rereview it?
            // find the position of the user in array
            $position = array_search($user_id,$reviewedusersarray);
            // echo $position;
          //  echo $reviewsarray[$position];
            // change the review
            // cant rerate the product on rereview
            //$reviewsarray[$position] = $reviewtext;
            // DISABLED REREVIEWING WHY? TO PREVENT EDITING OF TEXTS ALREADY REPLIED TO
            echo "You already rated and reviewed this item";


          }else{
          //  echo "not in array<br>";
            // not reviewed
            // review how? push it to the end and change the rate totals
            //change rate
            $ratetotallisttoupdate = $quqerycheckonuser_row['ratetotals'];
            $ratetotallisttoupdatearray = explode(',',$ratetotallisttoupdate);
            //update the totalrates value adding it by 1
            // rate is the position but arrays begin at zero so remove 1
            $ratepositionchange = ceil($rate) - 1;
            $newtotalratesvalue = $ratetotallisttoupdatearray[$ratepositionchange];
            $ratetotallisttoupdatearray[$ratepositionchange] = ceil($newtotalratesvalue) + 1;

            // update the reviews list and the users list and review no
            array_push($reviewsarray,$reviewtext);
            array_push($reviewerarray,$user_id);
            $reviewerscount = count($reviewnumbersarray);
            $reviewerscountnexnum = ceil($reviewerscount) + 1;
            $reviewnumbersarray[$reviewerscount] = $reviewerscountnexnum;

            // the new values to update with
            // raretotals, reviews, reviewnos, users
            $ratetotallistnew = implode(',',$ratetotallisttoupdatearray);
            $reviewsnewlist = implode('<<>>',$reviewsarray);
            $reviewnosnewlist = implode(',',$reviewnumbersarray);
            $reviewusernewlist = implode(',',$reviewerarray);
            // echo $ratetotallistnew.'<br>';
            // echo $reviewsnewlist.'<br>';
            // echo $reviewnosnewlist.'<br>';
            // echo $reviewusernewlist.'<br>';
            // update the actual data in the database with the new figures

            $querynewreview = "UPDATE `reviews` SET `ratetotals`='$ratetotallistnew', `reviews`='$reviewsnewlist', `reviewnos`='$reviewnosnewlist', `users`='$reviewusernewlist' WHERE `productid`='$product' AND `site`='$site'";
            if($querynewreviewrun = mysqli_query($conn, $querynewreview)){
              //successfully rated and reviewed
              echo "Your rating and review has successfully been updated. Thankyou";
            }else{
              //encountered a problem
              echo "Sorry we ran into an error";
            }


          }

        }else{
          echo "Error while checking for user<br>";
        }

    }

  }
}else{
  echo "Sorry bud, made a wrong turn";
}

























?>
