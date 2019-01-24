<?php
ob_start();
session_start();
require 'connect.php';
// this will update the entire products database time
$querydates = "SELECT * FROM `brandyproducts` WHERE `id`!='0'";
$querydates_run = mysql_query($querydates);
while($querydates_row = mysql_fetch_assoc($querydates_run)){
  $id = $querydates_row['id'];
  $sample = $querydates_row['imageone'];
  $sampleArray = explode('-',$sample);
  $date= $sampleArray[0].'-'.$sampleArray[1].'-'.$sampleArray[2];
  //convert to string first
  // final date format YY-MM-dd REVIEW
  $dateArray = explode('-',$date);
  // if($dateArray[0] == '')
  $month =  date('n', strtotime($dateArray[0]));
  if($month < 10){
    $actualmonth = '0'.$month;
  }else{
    $actualmonth = $month;
  }
  // echo "$month";
  $finaldate = $sampleArray[2].'-'.$actualmonth.'-'.$sampleArray[1];
  // update the database
  $queryupdatedates = "UPDATE `brandyproducts` SET `up_date`='$finaldate' WHERE `id`='$id'";
  if($queryupdatedates_run = mysql_query($queryupdatedates)){
    // updated the row
    echo "updated row id $id<br>";
  }

}


// $sample = "Mar-04-2018-09-37-1927.jpg";
// $sampleArray = explode('-',$sample);
// $date= $sampleArray[0].'-'.$sampleArray[1].'-'.$sampleArray[2];
// //convert to string first
// // final date format YY-MM-dd REVIEW
// $dateArray = explode('-',$date);
// // if($dateArray[0] == '')
// $month =  date('n', strtotime($dateArray[0]));
// if($month < 10){
//   $actualmonth = '0'.$month;
// }else{
//   $actualmonth = $month;
// }
// // echo "$month";
// echo $finaldate = $sampleArray[2].'-'.$actualmonth.'-'.$sampleArray[1];



?>
