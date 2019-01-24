<?php
ob_start();
session_start();
require 'connect.php';
//TODO filter the user when pass button is clicked ot check whether the agent actually has the particular items in hand

completecartatdestination();
// if(isset($_POST['completecartatdestination'])){
//   completecartatdestination();
// }else{
//   die("Error");
// }
function completecartatdestination(){
  //the script below checks to confirm that a complete cart is at the destination centre
  //loop throught pickupds
  $queryupdatetransitdbs = "SELECT * FROM `checkoutcarts` WHERE `pickupstat`='INCOMPLETE' AND `updated`='1'";
  $queryupdttrns_run = mysql_query($queryupdatetransitdbs);
  // create a new array
  echo "
  <div class=\"row\" style=\"background-color:white;font-family:kok;\">
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
    <h3 class=\"text-center text-capitalize\">Complete Cart Delivery (<small>These are complete carts</small>)</h3>
  <div class=\"table-responsive\">
    <table class=\"table table-striped\">
      <thead>
        <tr>
            <th>No.</th>
            <th>Cartname</th>
            <th>Destination</th>
            <th>Handler</th>
            <th>Deadline</th>
            <th>shiptype</th>
            <th>Action</th>
        </tr>
      </thead>
      <tbody>
      ";
  $transitdbsarray = array();
  $transitbdcrtsize = array();
  while($queryupdttrs_row = mysql_fetch_assoc($queryupdttrns_run)){
     $cart = $queryupdttrs_row['cartname'];
     $cartcontents = $queryupdttrs_row['cartcontents'];
     $cartcontentsarray = explode(',',$cartcontents);
     $cartcontentsize = count($cartcontentsarray);


    // check to confirm that the item is in the array
    if(in_array($cart,$transitdbsarray)){
      // don't add cart
    }else{
      // add cart
      array_push($transitdbsarray,$cart);
      array_push($transitbdcrtsize,$cartcontentsize);
      // print_r($cartcontentsarray);
      // echo $cart.'<br>';
      // check against cartname for orders that are complete
    }

  }
  for($trdbs = 0; $trdbs < count($transitdbsarray); $trdbs++){
    $cartnametdbs = $transitdbsarray[$trdbs];
    $carttdbssize = $transitbdcrtsize[$trdbs];
    // query pickupds with sign, name, idnumber, overperp and agent are done
    // for signed off belonging to this cart
    // get the num-rows of occurences from this cart then compare with the count from checkoutcarts....if same then the cart is complete
    $querytrnsitms = "SELECT * FROM `transitdbs` WHERE `cartname`='$cartnametdbs'";
    $querytrnsitms_run = mysql_query($querytrnsitms);
    $querytrnsitms_num = mysql_num_rows($querytrnsitms_run);
    $itemdelivered = true;

    if($querytrnsitms_num == $carttdbssize){
      // cart is complete
      //echo "$cartnametdbs cart is complete<br>";
      // check whether the carts are at the center
      // these results mean that cart in transit is complete soo it should be delivered immediately it gets to the destination center
      // check whether the cart is at the final center

        while($querytrnsitms_row = mysql_fetch_assoc($querytrnsitms_run)){
          $itemloc = $querytrnsitms_row['exchcenters'];
          $cartdeadline = $querytrnsitms_row['deadline'];
          $itemid = $querytrnsitms_row['itemid'];

          $deadline = $querytrnsitms_row['deadline'];
          $shiptype = $querytrnsitms_row['shiptype'];

          $itemlocarray = explode(',',$itemloc);
          $itemlocacount = count($itemlocarray);
          $itemlocpos = round($itemlocacount - 1);
          $itemlocfinal = $itemlocarray[$itemlocpos];// the last place the item was at
          $itemlocfinalstr = strtoupper($itemlocfinal);// the last place the item was at

          $centrdestination = $querytrnsitms_row['centredestination'];
          $centrdestinationarray = explode(',',$centrdestination);
          $finalcenter = $centrdestinationarray[0];
          $finalcenterstr = strtoupper($finalcenter);

          $handlerlist = $querytrnsitms_row['handlers'];
          $handlerarray = explode(',',$handlerlist);
          $count = count($handlerarray);
          $position = round($count - 1);
          $currenthandler = $handlerarray[$position];

          if($itemlocfinalstr != $finalcenterstr){
            //change value of item value = false
              $itemdelivered = false;
              // echo $itemlocfinalstr.'<br>';
          }


        }
        if($itemdelivered == true){
          // echo "cart number $cartnametdbs at $finalcenterstr centre is complete. Please Ship it as soonest possible deadline set for $cartdeadline";

          echo "
          <tr>
              <td>#</td>
              <td>$cartnametdbs</td>";
          echo "
                <td>$centrdestination</td>
                <td>$currenthandler</td>
                <td>$deadline</td>
                <td>$shiptype</td>
                <td><a data-cart=\"$cartnametdbs\" class=\"btn btn-success btn-sm btncomplt\">Deliver</a></td>
            </tr>
          ";

        }else{
          //nothing
          echo "no cart is complete";
        }
    }else{
      // cart is not complete
    }
  }
  echo "
        </tbody>
        </table>
        </div>
        <div class=\"row\">
          <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" id=\"completecartcontainer\">

          </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
              <h3>Deliver Incomplete Cart?</h3>
              <small><span style=\"color:red\">Only use this option for clients who wish to have their partial carts delivered (the return period applies per delivery for a single cart)</span></small>
              <a class=\"pull-right btn btn-danger showincomplete\">Deliver incomplete cart?</a>
            </div>
        </div>
        </div>
        </div>
      ";
}
//TODO FOR THE INCOMPLETE CARTS SHOW THE ITEM THAT HAVE ALREADY BEEN DELIVERED

//the script below will check for items already at the center destination
//this is for incomplete carts for customers who might consider having the cart delivered incomplete as it is

// instead show the incomplete carts loop throught the items from the cart that have been picked up.....
// dont collect the total order from checkoutcarts since its already updated in transitdbs
// then use the items in transit dbs from an incomplete cart .....then do what
// check whether the item has been picked up....then check to see whether the final location is teh destination and bam
//TODO ADD A DELIVERY STATUS COLUMN SINCE INCOMPLETE CARTS MIGHT FUCK UP THE DTBS
//REVIEW IT SHOUD BE KNOWN THAT THE SCIRPT BELOW WILL ONLY WORK ASSUMING THAT ALL CART ITEMS HAVE BEEN PICKED UP*******corrected
//THE PICKUPDS ACTUALLY SHOWS ITEMS THAT NEED TO BE PICKED UP SO ALL IS WELL....COMPARE THEM TO THE ONES CURRENTLY IN transit
$queryupdatetransitdbs = "SELECT * FROM `checkoutcarts` WHERE `pickupstat`='INCOMPLETE' AND `updated`='1'";
$queryupdttrns_run = mysql_query($queryupdatetransitdbs);
// create a new array
$transitdbsarray = array();
echo "<div class=\"row incompletecart\" style=\"background-color:white;font-family:kok;\">
  <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
  <h3 class=\"text-center text-capitalize\">Partial Cart Delivery (<small>These are items from carts</small>)</h3>
<div class=\"table-responsive\">
  <table class=\"table\">
    <thead>
      <tr>
          <th>No.</th>
          <th>Cartname</th>
          <th>Destination</th>
          <th>Handler</th>
          <th>Deadline</th>
          <th>shiptype</th>
          <th>Item no</th>
          <th>Action</th>
      </tr>
    </thead>
    <tbody>
    ";
while($queryupdttrs_row = mysql_fetch_assoc($queryupdttrns_run)){
   $cart = $queryupdttrs_row['cartname'];
   $cartcontents = $queryupdttrs_row['cartcontents'];
   $cartcontentsarray = explode(',',$cartcontents);
   $cartcontentsize = count($cartcontentsarray);


  // check to confirm that the item is in the array
  if(in_array($cart,$transitdbsarray)){
    // don't add cart
  }else{
    // add cart
    array_push($transitdbsarray,$cart);
    // print_r($cartcontentsarray);
    // echo $cart.'<br>';
    // check against cartname for orders that are complete
  }

}
// print_r($transitdbsarray);
// loop throught items in transitdbs with collected cartnames...then compare them to those in actual transit
for($trdbs = 0; $trdbs < count($transitdbsarray); $trdbs++){
  $currentcart = $transitdbsarray[$trdbs];
  //check for cart items in the transit dbs,...maybe collect them first
  //this are items that can be delivered so we have to ensure they havent been delivered
  // so for every item found check whether in the transitdbs its been delivered
  //query items from this cart in the pickupds database
  $querycartitems = "SELECT * FROM `pickupds` WHERE `cart`='$currentcart'";
  $querycartitems_run = mysql_query($querycartitems);
  //check whether the cart actually exists

  $querycartitems_num = mysql_num_rows($querycartitems_run);
  if($querycartitems_num != 0){
    // cart exists


    while($querycartitems_row = mysql_fetch_assoc($querycartitems_run)){
      // return an item id which will then be queried in the transitdbs to ensure the item has not been delivered
      // if still in transit--- specifically in the final center then allow to deliver
      // get the item id to compare to in the transitdbs
      $pickupdsid = $querycartitems_row['id'];
      // query this id in transitdbs to confirm whether item has already been delivered
      $queryitemtransit = "SELECT * FROM `transitdbs` WHERE `itemid`='$pickupdsid' AND `cartname`='$currentcart'";
      $queryitemtransit_run = mysql_query($queryitemtransit);
      $queryitemtransit_num = mysql_num_rows($queryitemtransit_run);
      if($queryitemtransit_num != 0){
        //continue.....item found
        if($queryitemtransit_row = mysql_fetch_assoc($queryitemtransit_run)){
          //return transitdbs id
          $theid = $queryitemtransit_row['id'];
          $dstatus = $queryitemtransit_row['dstatus'];
          $deadline = $queryitemtransit_row['deadline'];
          $shiptype = $queryitemtransit_row['shiptype'];
          // now we know of all the items that have not been picked up
          $centrdestination = $queryitemtransit_row['centredestination'];
          $centrdestinationarray = explode(',',$centrdestination);
          $finalcenter = $centrdestinationarray[0];
          $finalcenterstr = strtoupper($finalcenter);

          $itemloc = $queryitemtransit_row['exchcenters'];
          $itemlocarray = explode(',',$itemloc);
          $itemlocacount = count($itemlocarray);
          $itemlocpos = round($itemlocacount - 1);
          $itemlocfinal = $itemlocarray[$itemlocpos];// the last place the item was at
          $itemlocfinalstr = strtoupper($itemlocfinal);// the last place the item was at

          $handlerlist = $queryitemtransit_row['handlers'];
          $handlerarray = explode(',',$handlerlist);
          $count = count($handlerarray);
          $position = round($count - 1);
          $currenthandler = $handlerarray[$position];

          //check whether the item is in the final center...if so make it available for shipping

          if($itemlocfinalstr == $finalcenterstr){
            //package ready for delivery
            // echo $theid.'<br>';
            echo "
            <tr>
                <td>#</td>
                <td>$currentcart</td>";

                if($dstatus == 0){
                  //not yet delivered
                  $status = "<a data-incitem=\"$theid\" data-inccart=\"$currentcart\" class=\"btn btn-primary btn-sm btnincomplete\">Deliver</a>";
                }elseif($dstatus == 1){
                  //delivered
                  $status = "<span style=\"color:green;\"><del>DELIVERED</del></span>";
                }else{
                  die("Nada");
                }

            echo "
                  <td>$centrdestination</td>
                  <td>$currenthandler</td>
                  <td>$deadline</td>
                  <td>$shiptype</td>
                  <td>$theid</td>
                  <td>$status</td>
              </tr>
            ";

          }else{
            // package not ready for delivery
          }

        }
      }else{
        //die("Error");
      }
    }
  }else{
    // cart does not exist
    die('Error!');
  }
}
echo "
      </tbody>
      </table>
      </div>
      <div class=\"row\">
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" id=\"incompletecartcontainer\">

        </div>
      </div>
      </div>
      </div>
    ";
//TODO NOTIFY THE STAFF OF INCOMPLETE PICKED UP CARTS....TO AVOID FUCKING UP THE SYSTEM
// REVIEW A MUST TODO REVIEW ... THE ENTIRE PAGE PROVIDES TWO TYPES OF SHIPPING COMPLETE CART AND INCOMPLETE CART
// DEPENDING ON THE CHOICE OF THE USER....WE WILL EITHER DELIVER FROM COMPLETE OR INCOMPLETE CARTS
// TODO FOR INCOMPLETE CARTS...IF SOME OF ITS BROTHERS HAVE BEEN SHIPPED...THE REST SHOULD BE SHIPPED OUT AS SOONEST POSSIBLE












































?>
