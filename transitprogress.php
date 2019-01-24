<?php
ob_start();
session_start();
require "connect.php";
// TODO THERES A TODO IN THIS SCRIPT PAGE LOOK THROUGH IT
// this will control and set up the transit progress database
// we set/update the Destination Center and Shipping centre permanenty
// destination centre will be easier for the handler to direct them on where to send packages next
// time and location is logged in as a comma seperated value every time a new handler comes into play

// probably use different functions for:
// updating the database with transit records **// COMPLETE
// changing handlers, dattiming, locations, centres, centretiming
// directing handlers to the next centers
// creating a transit against time progress view map
// also keep track of the cart items already collected*********//COMPLETE
// nofify the collection centre once all cart items are collected************//COMPLETE
// also notify the center when delivery deadline for items is almost met 2+ days************//COMPLETE
// also coordinate collection center on wehre to place individual cart items depending on closeness of cart members and delivery deadline
// keep track of a delivery cart completion database for entire site *********// COMPLETE

// echo $staff = $_SESSION['$staff'];
// echo $staff = $_SESSION['$user_id'];

function updatetransitdatabase(){
  //UPDATE THE TRANSIT DATABASE WITH ITEMS IN TRANSIT//////////////////////////////////////////>>>>>>>>>>>>>
  // THE TRANSIT DATABASE SHOULD ALSO CONSIDER WHETHER THE CART HAS BEEN DELIVERED
  // TODO THIS DBS SHOULD ALSO LOG IN THE AUTOTEST TO PREVENT THE SERVER FROM BEING OVERLOADED

  // query the carts that are incomplete....these are the undelivered carts
  // query the carts that have already been updated only
  $queryupdatetransitdbs = "SELECT `cartname` FROM `checkoutcarts` WHERE `pickupstat`='INCOMPLETE' AND `updated`='1'";
  $queryupdttrns_run = mysql_query($queryupdatetransitdbs);
  // create a new array
  $transitdbsarray = array();
  while($queryupdttrs_row = mysql_fetch_assoc($queryupdttrns_run)){
     $cart = $queryupdttrs_row['cartname'];
    // check to confirm that the item is in the array
    if(in_array($cart,$transitdbsarray)){
      // don't add cart
    }else{
      // add cart
      array_push($transitdbsarray,$cart);
      // echo $cart.'<br>';
      // check against cartname for orders that are complete
      //TODO some of the mtush items occur in multiple carts which shouldnt be possible or do it after the while loop
    }

  }
  // loop throught all items from pickupds from cartname where items belong to
  // TODO this will correct the earlier occuring multiple mtush items in multiple carts
  for($trdbs = 0; $trdbs < count($transitdbsarray); $trdbs++){
    $cartnametdbs = $transitdbsarray[$trdbs];
    // query pickupds with sign, name, idnumber, overperp and agent are done
    // for signed off belonging to this cart
    $querytrnsitms = "SELECT * FROM `pickupds` WHERE `cart`='$cartnametdbs' AND `sign`='1' AND `idnumber`!='0' AND `name`!='' AND `trnsupt`='0'";
    $querytrnsitms_run = mysql_query($querytrnsitms);
    while($querytrnsitms_row = mysql_fetch_assoc($querytrnsitms_run)){
      // get the id from the list
      // TODO The transitdbs contains a colum with from..this will be changed to reflect the sellers location
      $transititemid = $querytrnsitms_row['id'];
      $initialtrnstime = $querytrnsitms_row['date'];
      // get the initial agent that picked up the item/received the item
      if($querytrnsitms_row['agent'] != ''){
        // if it has a value then this is the agent else go with the other
        $pickupagent = $querytrnsitms_row['agent'];
      }else{
        $pickupagent = $querytrnsitms_row['otheragent'];
      }
      // before going to the next step update trnsupt to prevent looping again throught this row
      $querylocktransrow = "UPDATE `pickupds` SET `trnsupt`='1' WHERE `id`='$transititemid'";
      if($querylocktransrow_run = mysql_query($querylocktransrow)){
        // row successfully locked
        // retrive the shipping type, deadline and centre destination from dbs table sold
        $querygetsoldtbdata = "SELECT * FROM `sold` WHERE `cartname`='$cartnametdbs'";
        $querygetsoldtbdata_run = mysql_query($querygetsoldtbdata);
        if($querygetsoldtbdata_row = mysql_fetch_assoc($querygetsoldtbdata_run)){
          $centredestination = $querygetsoldtbdata_row['county'].','.$querygetsoldtbdata_row['area'];
          $shiptype = $querygetsoldtbdata_row['shipping'];
          $cartdatepay = $querygetsoldtbdata_row['date'];
          //turn ship type to upper for easier compasions as a string
          $shiptypecomparison = strtoupper($shiptype);
          // strtotime of cart date
          $strcartdate = strtotime($cartdatepay);

          if($shiptypecomparison == 'FREE'){
            // Its free and should therefore take 7 days max
            $plusdays = 7 * 86400;
            $strnewdeadline = $strcartdate + $plusdays;
            $getdeadline = getdate($strnewdeadline);
            $deadline = $getdeadline[year].'-'.$getdeadline[mon].'-'.$getdeadline[mday];

          }elseif($shiptypecomparison == 'EXPRESS TIIVA'){
            // its on tiiva express plan and should thereofre take a max of 3 days
            $plusdays = 3 * 86400;
            $strnewdeadline = $strcartdate + $plusdays;
            $getdeadline = getdate($strnewdeadline);
            $deadline = $getdeadline[year].'-'.$getdeadline[mon].'-'.$getdeadline[mday];

          }elseif($shiptypecomparison == 'ON'){
            // its on anyother shipping type mostly fargo courier max of 4 days
            $plusdays = 4 * 86400;
            $strnewdeadline = $strcartdate + $plusdays;
            $getdeadline = getdate($strnewdeadline);
            $deadline = $getdeadline[year].'-'.$getdeadline[mon].'-'.$getdeadline[mday];

          }else{
            die("Error!");
          }


        }

      // now update the transit dbs by inserting
      // the new row dstatus indicates whether the particular items has been delivered or not
      // 1 for delivered else zero for nada
      $querytransinsertrow = "INSERT INTO `transitdbs` (`id`,`itemid`,`cartname`,`from`,`exchlocs`,`handlers`,`exchdattimes`,`exchcenters`,`centredestination`,`shiptype`,`deadline`,`dstatus`,`integrity`)
      VALUES ('','$transititemid','$cartnametdbs','Kabuta_1','kabuta_2','$pickupagent','$initialtrnstime','Kabuta_3','$centredestination','$shiptype','$deadline','','')";
      if($querytransinsertrow_run = mysql_query($querytransinsertrow)){
        // its been updated
        echo "transit database updated<br>";
      }else{
        // ran into an error
        die("could not update transit database");
      }
      }else{
        die("Ran into an error");
      }


    }

  }
  // print_r($transitdbsarray);

}
// updatetransitdatabase();// STEP 1

// keep track of a delivery cart completion database for entire site

function keeptrackofcartintransit(){
  //loop throught pickupds
  $queryupdatetransitdbs = "SELECT * FROM `checkoutcarts` WHERE `pickupstat`='INCOMPLETE' AND `updated`='1'";
  $queryupdttrns_run = mysql_query($queryupdatetransitdbs);
  // create a new array
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
      //TODO some of the mtush items occur in multiple carts which shouldnt be possible or do it after the while loop
    }

  }
  for($trdbs = 0; $trdbs < count($transitdbsarray); $trdbs++){
    $cartnametdbs = $transitdbsarray[$trdbs];
    $carttdbssize = $transitbdcrtsize[$trdbs];
    // query pickupds with sign, name, idnumber, overperp and agent are done
    // for signed off belonging to this cart
    // get the num-rows of occurences from this cart then compare with the count from checkoutcarts....if same then the cart is complete
    $querytrnsitms = "SELECT * FROM `pickupds` WHERE `cart`='$cartnametdbs' AND `sign`='1' AND `idnumber`!='0' AND `name`!='' AND `trnsupt`='1'";
    $querytrnsitms_run = mysql_query($querytrnsitms);
    $querytrnsitms_num = mysql_num_rows($querytrnsitms_run);
    if($querytrnsitms_num == $carttdbssize){
      // cart is complete
      echo "$cartnametdbs cart is complete<br>";
      // check whether the carts are at the center
      // these results mean that cart in transit is complete soo it should be delivered immediately it gets to the destination center
    }else{
      // cart is not complete
    }
  }
}
// keeptrackofcartintransit();

// also keep track of the cart items already collected
// TODO script that checks to see whether theres a complete cart in transit
// TODO script that checks to see whether theres an incomplete cart in transit indicating the remaining items for a cart

function completecartatdestination(){
  //the script below checks to confirm that a complete cart is at the destination centre
  //loop throught pickupds
  $queryupdatetransitdbs = "SELECT * FROM `checkoutcarts` WHERE `pickupstat`='INCOMPLETE' AND `updated`='1'";
  $queryupdttrns_run = mysql_query($queryupdatetransitdbs);
  // create a new array
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
          $itemlocarray = explode(',',$itemloc);
          $itemlocacount = count($itemlocarray);
          $itemlocpos = round($itemlocacount - 1);
          $itemlocfinal = $itemlocarray[$itemlocpos];// the last place the item was at
          $itemlocfinalstr = strtoupper($itemlocfinal);// the last place the item was at

          $centrdestination = $querytrnsitms_row['centredestination'];
          $centrdestinationarray = explode(',',$centrdestination);
          $finalcenter = $centrdestinationarray[0];
          $finalcenterstr = strtoupper($finalcenter);

          if($itemlocfinalstr != $finalcenterstr){
            //change value of item value = false
              $itemdelivered = false;
              // echo $itemlocfinalstr.'<br>';
          }


        }
        if($itemdelivered == true){
          echo "cart number $cartnametdbs at $finalcenterstr centre is complete. Please Ship it as soonest possible deadline set for $cartdeadline";
        }else{
          //nothing
          echo "no cart is complete";
        }
    }else{
      // cart is not complete
    }
  }
}

// completecartatdestination();

function cartitemdeadlinenotifier(){
  // also notify the center when delivery deadline for carts is almost met 2+ days
  // not items because the items belong to a cart so check on the cart instead

  $queryupdatetransitdbs = "SELECT * FROM `checkoutcarts` WHERE `pickupstat`='INCOMPLETE' AND `updated`='1'";
  $queryupdttrns_run = mysql_query($queryupdatetransitdbs);
  // create a new array
  $transitdbsarray = array();
  $transitbdchtDatearray = array();
  $date = array();
  // $today = Date("Y-m-d");// instead of adding the purchase date below subtract it here for easier manipulation
  $year = Date("Y");
  $month = Date("m");
  $day = Date("d") - 1;// to fit in the purchase day criteria
  // therefore today will be
  $today = $year.'-'.$month.'-'.$day;

  while($queryupdttrs_row = mysql_fetch_assoc($queryupdttrns_run)){
     $cart = $queryupdttrs_row['cartname'];
     $cartdate = $queryupdttrs_row['Date'];
     // take the purchase Date plus 0ne day then the shipping period aside
     // get the expected deadline
     $date1 = strtotime($cartdate);
     $date2 = strtotime($today);//todays date
    //  $diff = $date2 - $date1;
     $diff = $date1 - $date2;
     $daysindiff = round($diff / (60*60*24));// add 1 day for period in recieving the items and getting it from the merchant
     //echo $daysindiff.'<br>';

    // check to confirm that the item is in the array
    if(in_array($cart,$transitdbsarray)){
      // don't add cart
    }else{
      // add cart
      array_push($transitdbsarray,$cart);
      // array_push($transitbdchtDatearray,$cartdate);// use the days remaining instead
      array_push($transitbdchtDatearray,$daysindiff);
      // print_r($cartcontentsarray);
      // echo $cart.'<br>';
      // check against cartname for orders that are complete
    }

  }
  // print_r($transitdbsarray);
   // print_r($transitbdchtDatearray);

  //86400 is a day
  //loop throught the array checking against contents for items
  for($trdbs = 0; $trdbs < count($transitdbsarray); $trdbs++){
    $cartnametdbs = $transitdbsarray[$trdbs];
    $cartdeadline = $transitbdchtDatearray[$trdbs];
    // query pickupds with sign, name, idnumber, overperp and agent are done
    // for signed off belonging to this cart
    $querytrnsitms = "SELECT * FROM `transitdbs` WHERE `cartname`='$cartnametdbs'";
    $querytrnsitms_run = mysql_query($querytrnsitms);
    while ($querytrnsitms_row = mysql_fetch_assoc($querytrnsitms_run)) {
      // for every item in the transitdbs table check against cart
      // then check whether deadline is less than or equal to 2 to gauge impending deadline
      // DEADLINE WILL ONLY APPLY TO THE ITEMS/CARTS IN TRANSIT --YAANI ALREADY PICKED UP
      if($cartdeadline > 2){
        echo "you have $cartdeadline days remaining to meet your deadline<br>";
      }elseif($cartdeadline == 2){
        echo "you have 2 days to meet your deadline<br>";
      }elseif($cartdeadline < 2){
        echo "cart has passed deadline.Hurry up<br>";
      }
      // echo "expected delivery on $cartdeadline<br>";
    }
  }

}
// cartitemdeadlinenotifier();

// return current items in transit individually
function returnadmintransit(){

  // first return the incomplete carts i.e carts in transit
  $queryupdatetransitdbs = "SELECT * FROM `checkoutcarts` WHERE `pickupstat`='INCOMPLETE' AND `updated`='1'";
  $queryupdttrns_run = mysql_query($queryupdatetransitdbs);
  // create a new array
  $transitdbsarray = array();
  $count = 1;
  echo "  <div class=\"table-responsive\" style=\"background-color:white;padding:10px;\">
    <h3 class=\"text-center text-capitalize\">Admin Items In Transit</h3>
      <table class=\"table\">
        <thead>
          <tr>
            <th>No.</th>
            <th>ItemId</th>
            <th>Cartname</th>
            <th>Handler</th>
            <th>Source</th>
            <th>Last Location</th>
            <th>Last Time</th>
            <th>Shipping</th>
            <th>Destination</th>
            <th>E.T.A</th>
            <th>Changehandler</th>
          </tr>
        </thead>
        <tbody>";
  while($queryupdttrs_row = mysql_fetch_assoc($queryupdttrns_run)){
     $cart = $queryupdttrs_row['cartname'];


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
  // loop through items in transitdbs belonging to said carts in transit
  for($trdbs = 0; $trdbs < count($transitdbsarray); $trdbs++){
    $cartnametdbs = $transitdbsarray[$trdbs];
    $cartnameshort = substr($cartnametdbs,0,9);
    // query pickupds with sign, name, idnumber, overperp and agent are done
    // for signed off belonging to this cart
    $querytrnsitms = "SELECT * FROM `transitdbs` WHERE `cartname`='$cartnametdbs'";
    $querytrnsitms_run = mysql_query($querytrnsitms);
    while ($querytrnsitms_row = mysql_fetch_assoc($querytrnsitms_run)) {
      $itemid = $querytrnsitms_row['itemid'];
      //get current handler, current location, current center, exchange time, destination, deadline, shipping type
      $destination = $querytrnsitms_row['centredestination'];// destination
      $shiptype = $querytrnsitms_row['shiptype'];// shipping type
      $packagesource = $querytrnsitms_row['from'];// location of package pickup
      $deadline = $querytrnsitms_row['deadline'];// location of package pickup

      $handlerslist = $querytrnsitms_row['handlers'];
      $handlerslistarray = explode(',',$handlerslist);
      $exchangenumbers = round(count($handlerslistarray) - 1);

      $currenthandler = $handlerslistarray[$exchangenumbers];// current agent with the package

      $exchlocslist = $querytrnsitms_row['exchlocs'];
      $exchlocslistarray = explode(',',$exchlocslist);
      $currentexchlocs = $exchlocslistarray[$exchangenumbers];// current/latest location package was

      $exchdatattimeslist = $querytrnsitms_row['exchdattimes'];
      $exchdatattimeslistarray = explode(',',$exchdatattimeslist);
      $latestexchtime = $exchdatattimeslistarray[$exchangenumbers];// current/latest exchange time

      $exchcenterslist = $querytrnsitms_row['exchcenters'];
      $exchcenterslistarray = explode(',',$exchcenterslist);
      $latestcenter = $exchcenterslistarray[$exchangenumbers];// lastest exchange center



      // what should we show for the current item in transit...
      // query the pickupds with the id return the entire row
      $querypickupds = "SELECT * FROM `pickupds` WHERE `id`='$itemid'";
      $querypickupds_run = mysql_query($querypickupds);
      if($querypickupds_row = mysql_fetch_assoc($querypickupds_run)){
        // to show items from one seller will introduce the if statement here
        // since this is admin one...maybe show all details
          $item = $querypickupds_row['item'];
          $cartname = $querypickupds_row['cart'];

          $dbs = substr($item,0,1);
          $product = substr($item,1);
          if($dbs == 'M' || $dbs == 'm'){
            $currentdbs = 'products';
            $imgaddr = "mtumbauploads/compresseduploads/";
            $link = "productdetails.php?id=";
          }elseif($dbs == 'S' || $dbs == 's'){
            $currentdbs = 'brandyproducts';
            $imgaddr = "uploadproducts/compressedproducts/";
            $link = "storeproduct.php?id=";
          }else{
            die("Error");
          }
          echo "<tr>
                <td>$count</td>
                <td>$itemid</td>";
          // echo "<td>$actualimage</td>";

          echo "

                  <td><span class=\"showcart\" title=\"<h3>Full Cart Name</h3><p>$cartname</p>\">$cartnameshort...</span></td>
                  <td>$currenthandler</td>
                  <td>$packagesource</td>
                  <td>$currentexchlocs</td>
                  <td>$latestexchtime</td>
                  <td>$shiptype</td>
                  <td>$destination</td>
                  <td>$deadline</td>
                  <td><button class=\"btn btn-primary btn-sm sumsum\" data-product=\"$item\" data-cart=\"$cartname\">PassOn</button></td>
                </tr>";
      }
      $count++;
    }
  }
  echo "
      </tbody>
      </table>

      </div>";
}
// returnadmintransit();
// TODO CORRECT THE FUNCTION BEFORE THIS ONE TO SHOW CART NAME ALSO AS THE RESPONSE
// return current items in transit individually sellers/buyers
function returnmerchanttransit(){
  // first return the incomplete carts i.e carts in transit
  $queryupdatetransitdbs = "SELECT * FROM `checkoutcarts` WHERE `pickupstat`='INCOMPLETE' AND `updated`='1'";
  $queryupdttrns_run = mysql_query($queryupdatetransitdbs);
  // create a new array
  $transitdbsarray = array();
  $count = 1;
  echo "  <div class=\"table-responsive\" style=\"background-color:white;padding:10px;\">
    <h3 class=\"text-center text-capitalize\">Items In Transit</h3>
      <table class=\"table\">
        <thead>
          <tr>
            <th>No.</th>
            <th>Item</th>
            <th>Title</th>
            <th>Cartname</th>
            <th>Source</th>
            <th>Last Location</th>
            <th>Last Time</th>
            <th>Shipping</th>
            <th>Destination</th>
            <th>E.T.A</th>
          </tr>
        </thead>
        <tbody>";

  while($queryupdttrs_row = mysql_fetch_assoc($queryupdttrns_run)){
     $cart = $queryupdttrs_row['cartname'];


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
  // loop through items in transitdbs belonging to said carts in transit
  for($trdbs = 0; $trdbs < count($transitdbsarray); $trdbs++){
    $cartnametdbs = $transitdbsarray[$trdbs];
    $cartnameshort = substr($cartnametdbs,0,9);
    // query pickupds with sign, name, idnumber, overperp and agent are done
    // for signed off belonging to this cart
    $querytrnsitms = "SELECT * FROM `transitdbs` WHERE `cartname`='$cartnametdbs'";
    $querytrnsitms_run = mysql_query($querytrnsitms);
    while ($querytrnsitms_row = mysql_fetch_assoc($querytrnsitms_run)) {
      $itemid = $querytrnsitms_row['itemid'];
      //get current handler, current location, current center, exchange time, destination, deadline, shipping type
      $destination = $querytrnsitms_row['centredestination'];// destination
      $shiptype = $querytrnsitms_row['shiptype'];// shipping type
      $packagesource = $querytrnsitms_row['from'];// location of package pickup
      $deadline = $querytrnsitms_row['deadline'];// location of package pickup

      $handlerslist = $querytrnsitms_row['handlers'];
      $handlerslistarray = explode(',',$handlerslist);
      $exchangenumbers = round(count($handlerslistarray) - 1);

      // echo $currenthandler = $handlerslistarray[$exchangenumbers];// current agent with the package

      $exchlocslist = $querytrnsitms_row['exchlocs'];
      $exchlocslistarray = explode(',',$exchlocslist);
      $currentexchlocs = $exchlocslistarray[$exchangenumbers];// current/latest location package was

      $exchdatattimeslist = $querytrnsitms_row['exchdattimes'];
      $exchdatattimeslistarray = explode(',',$exchdatattimeslist);
      $latestexchtime = $exchdatattimeslistarray[$exchangenumbers];// current/latest exchange time

      $exchcenterslist = $querytrnsitms_row['exchcenters'];
      $exchcenterslistarray = explode(',',$exchcenterslist);
      $latestcenter = $exchcenterslistarray[$exchangenumbers];// lastest exchange center



      // what should we show for the current item in transit...
      // query the pickupds with the id return the entire row
      $querypickupds = "SELECT * FROM `pickupds` WHERE `id`='$itemid'";
      $querypickupds_run = mysql_query($querypickupds);
      if($querypickupds_row = mysql_fetch_assoc($querypickupds_run)){
        // to show items from one seller will introduce the if statement here
        // since this is admin one...maybe show all details
          $item = $querypickupds_row['item'];
          $cartname = $querypickupds_row['cart'];
          // query the image and item title for merchants
          $dbs = substr($item,0,1);
          $product = substr($item,1);
          if($dbs == 'M' || $dbs == 'm'){
            $currentdbs = 'products';
            $imgaddr = "mtumbauploads/compresseduploads/";
            $link = "productdetails.php?id=";
          }elseif($dbs == 'S' || $dbs == 's'){
            $currentdbs = 'brandyproducts';
            $imgaddr = "uploadproducts/compressedproducts/";
            $link = "storeproduct.php?id=";
          }else{
            die("Error");
          }
          $queryreturnproperties = "SELECT * FROM `$currentdbs` WHERE `id`='$product'";
          $queryreturnproperties_run = mysql_query($queryreturnproperties);
          if($queryreturnproperties_row = mysql_fetch_assoc($queryreturnproperties_run)){
            $itemtitle = $queryreturnproperties_row['itemtitle'];
            $itemimage = $queryreturnproperties_row['imageone'];
            $actualimage = $imgaddr.''.$itemimage;
            $itemlink = $link.''.$product;
            echo "<tr>
                  <td>$count</td>";
            // echo "<td>$actualimage</td>";
            echo "
              <td><a href=\"$itemlink\" target=\"_blank\" title=\"view item\"><img src=\"$imgaddr$itemimage\" style=\"max-height:40px;\"/></a></td>
              <td>$itemtitle</td>";
            echo "

                    <td>$cartnameshort</td>
                    <td>$packagesource</td>
                    <td>$currentexchlocs</td>
                    <td>$latestexchtime</td>
                    <td>$shiptype</td>
                    <td>$destination</td>
                    <td>$deadline</td>
                  </tr>";
          }

      }
      $count++;
    }
  }
  echo "
      </tbody>
      </table>

      </div>";
}
// returnmerchanttransit();
if(isset($_POST['transit'])){
  $transit = $_POST['transit'];
  updatetransitdatabase();
  // check whether its a user or a staff member
  // TODO ENSURE THAT THE HANDLER PICKING IS IN THE CORRECT ROUTE THE PACKAGE IS HEADED
  // TODO THE NEW HANDLER SHOULDNT BE THE CURRENT ITEM HANDLER
  if(isset($_SESSION['$staff'])){
    // this is a tiiva staff member so show him all the data
    // call appropriate transit function
    returnadmintransit();
    // returnmerchanttransit();
  }else{
    // this is probably a user not a staff member
    // TODO CHECK WHETHER THE USER IS LOGGED IN ELSE DENY THEM
    // call appropriate transit function
    // returnadmintransit();
    returnmerchanttransit();
  }
}elseif(isset($_POST['completecartatdestination'])){
  updatetransitdatabase();
  completecartatdestination();
}


// TODO SHOW ITEMS IN TRANSIT THAT ARE IN CARESHIP OF THE CURRENT USER
























?>
