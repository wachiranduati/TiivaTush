<?php
ob_start();
session_start();
require 'connect.php';
// check when the pick up list was updated
// if already updated in the last 30 mins do not update
// if not update and move on to the next step
// admin and staff should be able to update by force
// loop throught the items in today's checkout
// check from the pickup database to confirm whethere item has been picked up
// if it hasn't create a row with empty rows to be filled once the item has been picked up or delivered
// to the Tiiva center
$monthtoday = Date(m);
$daytoday = Date(d);
$yeartoday = Date(Y);
$somethime = Date('H:i');
// below are the dates updating the pickup list
$sometimerec = Date('H:i:s');
$somedayrec = Date('Y-m-d');
// echo $somethime;

$newsth = strtotime($somethime);
$newnewsth = Date('H:i',$newsth);


$query = "SELECT * FROM `autotest` WHERE `test`='pickup'";
$query_run  = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($query_run);
$comptime  = $row['time'];
$compsth = strtotime($comptime);
$newnewcompsth = Date('H:i',$compsth);

// checks whether dbs has been updated in the same minute
// if it has it shouldnt try to update the notif list again
// else it should

if($newnewsth == $newnewcompsth){
  // echo "You're currently viewing the latest notifs";
  // pickup notifs are uptodate
  // dont update the update pick up list
  // just check to see whether i'm there and not cleared
}else{
  // echo "naht the same";
  // echo $newnewsth;
  // update pick up notifs
  // loop throgh checkoutcarts which have not been looped through before
  $querycheckout = "SELECT * FROM `checkoutcarts` WHERE `updated`='0' AND `pickupstat`='INCOMPLETE'";
  if($queryrun_check = mysqli_query($conn, $querycheckout)){
    $listcontents = array();
    $listcheckoutcarts = array();
    $listcheckoutcartsperrow = array();
    while($querycheck_row = mysqli_fetch_assoc($queryrun_check)){
      $cartcontent = $querycheck_row['cartcontents'];
      $cartcontentid = $querycheck_row['cartid'];
      $cartname = $querycheck_row['cartname'];
      // echo "We're here<br>";
      if(in_array($cartcontentid,$listcheckoutcarts)){
        // echo "The cart is already logged";
      }else{
        array_push($listcheckoutcarts,$cartcontentid);
        // echo "adding the cart to the list";
      }



      $cartcontentsarray = explode(',',$cartcontent);
      // print_r($cartcontentsarray);
      // loop throught the list returning the seller
      $cartcontentarraysize = count($cartcontentsarray);
      // echo $cartcontentarraysize;
      for( $x = 0; $x < $cartcontentarraysize; $x++){
        //echo $cartcontentsarray[$x].'<br>';
        $currentitem = $cartcontentsarray[$x];

        $dbs = substr($currentitem,0,1);
        $item = substr($currentitem,1);
      //  echo $dbs.' '.$item.'<br>';
        if($dbs == 'M' || $dbs == 'm'){
          $currentdbs = 'products';
        }elseif($dbs == 'S' || $dbs == 's'){
          $currentdbs = 'brandyproducts';
        }else{
          die("Error");
        }

        //here
        if($dbs == 'M' || $dbs == 'm'){

          // the mtumba exhists only as a single item so do the loop
          if(in_array($currentitem,$listcontents)){
        // echo "<br>found<br>";
        //echo "sorry item was already purchased bruv";
              // if(in_array($cartname,$listcheckoutcartsperrow)){
              //   // echo "The cart is already logged";
              // }else{
              //   array_push($listcheckoutcartsperrow,$cartname);
              //   // echo "adding the cart to the list";
              // }
          }else{
          //  echo "not found";
            array_push($listcontents,$currentitem);
            //print_r($listcontents);
            // echo "<br>adding $currentitem";
            // if(in_array($cartname,$listcheckoutcartsperrow)){
            //   // echo "The cart is already logged";
            // }else{
            //   array_push($listcheckoutcartsperrow,$cartname);
            //   // echo "adding the cart to the list";
            // }
            array_push($listcheckoutcartsperrow,$cartname);

            // we need to loop through the list contents array

            $querycheckoutcont = "SELECT `sellerid` FROM `$currentdbs` WHERE `id`='$item'";
          $queryrun_checkcont = mysqli_query($conn, $querycheckoutcont);
          while($querycheckcont_row = mysqli_fetch_assoc($queryrun_checkcont)){
            $seller = $querycheckcont_row['sellerid'];
            $modseller = ceil($seller + 21);
            // echo $modseller.' '.$currentitem.'<br>';
            $queryupdatepickup = "INSERT INTO `pickupds` (`id`,`item`,`seller`,`time`,`cart`,`agent`,`otheragent`,`pickupmode`,`date`,`handoverperp`,`name`,`idnumber`,`paymentmode`,`sign`,`trnsupt`)
             VALUES ('','$currentitem','$modseller','$newnewsth','$cartname','','','','','','','','','0','0')";
             if($queryupdatepickup_run = mysqli_query($conn, $queryupdatepickup)){
              //  echo "blocking this row";
             }else{
              //  echo "Ran into an error buana";
             }

          }


          }
        }elseif($dbs == 'S' || $dbs == 's'){
          // exhists as multiple items so just push
          array_push($listcheckoutcartsperrow,$cartname);
          array_push($listcontents,$currentitem);
          //print_r($listcontents);
          // echo "<br>adding $currentitem";


          // we need to loop through the list contents array

          $querycheckoutcont = "SELECT `sellerid` FROM `$currentdbs` WHERE `id`='$item'";
        $queryrun_checkcont = mysqli_query($conn, $querycheckoutcont);
        while($querycheckcont_row = mysqli_fetch_assoc($queryrun_checkcont)){
          $seller = $querycheckcont_row['sellerid'];
          $modseller = ceil($seller + 21);
          // echo $modseller.' '.$currentitem.'<br>';
          $queryupdatepickup = "INSERT INTO `pickupds` (`id`,`item`,`seller`,`time`,`cart`,`agent`,`otheragent`,`pickupmode`,`date`,`handoverperp`,`name`,`idnumber`,`paymentmode`,`sign`)
           VALUES ('','$currentitem','$modseller','$newnewsth','$cartname','','','','','','','','','0')";
           if($queryupdatepickup_run = mysqli_query($conn, $queryupdatepickup)){
            //  echo "blocking this row";
           }else{
            //  echo "Ran into an error buana";
           }

        }

        }else{
          // do nothing
          die("Error");
        }

      }
  // change the row value to 1 and incomplete

    }
    // print_r($listcontents);
    // print_r($listcheckoutcarts);
    $cartcartarraysize = count($listcheckoutcarts);
    for($crt = 0; $crt < $cartcartarraysize; $crt++){
      $currentcart = $listcheckoutcarts[$crt];
      $queryafterloop = "UPDATE `checkoutcarts` SET `updated`='1' WHERE `cartid`='$currentcart' AND `pickupstat`='INCOMPLETE' AND `updated`='0'";
      if($queryafterloop_run = mysqli_query($conn, $queryafterloop)){
        // do sth
        // echo "Just updated the entire list";
      }else{
        // do sth else
        echo "Ran into an error bruh";
      }
    }
  }
  // were going to update the time this list was updated

$queryupdatelisttime = "UPDATE `autotest` SET `time`='$sometimerec', `date`='$somedayrec' WHERE `test`='pickup'";
if($queryupdatelist_run = mysqli_query($conn, $queryupdatelisttime)){
  echo "Just updated the list as of $sometimerec Today";
}else{
  die("Sorry ran into an error");
}
// print_r($listcontents);
// print_r($listcheckoutcartsperrow);
}

?>
