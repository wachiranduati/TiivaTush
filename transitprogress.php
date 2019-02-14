<?php
ob_start();
session_start();
require 'connect.php';
require 'utils/adminutils.php';

if(isStaffLoggedIn() != True){
  die('You do not have permission to view this');
}
// Decided to rewrite the entire thing and make it more scalable
// i RECKON THIS SHOULD CONTROL THE ENTIRE IN TRANSIT THINGY ONCE AN ITEM HAS BEEN PICKED UP 

function updatetransitdatabase($conn){
  // This script will retrieve all carts that have been picked up and move them to the transit db
  // use the autoloop to restric overloading the database...maybe 3 mins///for now 5 seconds
  // This script will retrieve all the updated carts
  // Then retrieve per cart id all the items in pickups where transupt is 0
  // retrieve cart delivery details from the sold table i.e. shiptype, checkout date, shipping destination
  // finally create new transitdbs entry to indicate that the item is now in transit
  // update the transupt to prevent looping again through the item
  $current_time_on_pickup_row_autotest = getAutotestTime($conn, 'transit');

  if(checkIfAtleast_ThisTimeHasElapsed($current_time_on_pickup_row_autotest, '5 seconds') == True){
    // atleast 5 seconds have elapsed
    // udpating this to be less server expensive non need to loop throught all the 
    // updated carts as this wont be scalable with time
    $row = retrieveAllPickedUpRows($conn);
    // print_r($row);
    if($row != 0){
      // no new rows found
      $UniqueCarts = createAnArraySpecialItems($row);
    // This returns all the unique carts found in the pickupds
    // retrieve the sold data i.e. shiptype etc
    for($x = 0; $x < count($UniqueCarts); $x++){
      $currentCart = $UniqueCarts[$x];
      // retrieve cart details the sold thingy
      $cartContents = retrieveSoldValuesforCart($conn, $currentCart);
      // print_r($cartContents);
      $finalDestination = $cartContents['county'].'-'.$cartContents['area'];
      // echo $finalDestination;
      $shiptype = $cartContents['shipping'];
      // echo $shiptype;
      if($cartContents['shipping'] == 'free'){
        $extend = 5;
      }else{
        $extend = 3;
      }
      // echo $extend;
      // retrieve the cart item deadline
      $deadline = timeDeltaExtendTime_return($cartContents['date'], "$extend days", 'Y-m-d');
      // loop throuth the row ...if the cart name is similar
      // retrieve values....create the transit entry...then update the row transupt to 1
      
      for($y = 0; $y < count($row); $y++){
        // retrieve this current loops cartname
        $currentLoopCart = $row[$y]['cart'];
        if($currentLoopCart == $currentCart){
          // retrieve itemid for // transititemid
          $transititemid = $row[$y]['id'];
          // echo $transititemid;
          //retrieve pickup agent
          $pickupagent = $row[$y]['agent'];
          // echo $pickupagent;
          //retrieve initialtrnstime
          $initialtrnstime = $row[$y]['date'];
          // echo $initialtrnstime;
          // retrieve seller for the item in transit
          $modedseller = $row[$y]['seller']; // this is the + 21
          $normSeller = ceil($modedseller - 21);
          $merchdetails = getSpecificMerchantDetails($conn, $normSeller);
          // echo $normSeller;
          // print_r($merchdetails);
          $merchantLocation = $merchdetails['county'].'-'.$merchdetails['township'];
          // echo $merchantLocation;
          // create the new entry
          createTransitEntry($conn, $transititemid, $currentLoopCart, $merchantLocation, $merchantLocation, $pickupagent, $initialtrnstime, $finalDestination, $shiptype, $deadline);
          // update the item row now transup to 1
          updateTrnsuptPickupid($conn, $transititemid);
        }else{
          // do nothing
        }
      }

    }
    }else{
      echo "no new rows found";
    }

  }else{
    echo "The transit update is very fresh no need to refresh";
  }

}

// updatetransitdatabase($conn);

// keep track of a delivery cart completion database for entire site

function keeptrackofcartintransit(){
  //loop throught pickupds
  $queryupdatetransitdbs = "SELECT * FROM `checkoutcarts` WHERE `pickupstat`='INCOMPLETE' AND `updated`='1'";
  $queryupdttrns_run = mysqli_query($queryupdatetransitdbs);
  // create a new array
  $transitdbsarray = array();
  $transitbdcrtsize = array();
  while($queryupdttrs_row = mysqli_fetch_assoc($queryupdttrns_run)){
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
    $querytrnsitms_run = mysqli_query($querytrnsitms);
    $querytrnsitms_num = mysqli_num_rows($querytrnsitms_run);
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

function completecartatdestination($conn){
  //the script below checks to confirm that a complete cart is at the destination centre
  //loop throught pickupds
  $queryupdatetransitdbs = "SELECT * FROM `checkoutcarts` WHERE `pickupstat`='INCOMPLETE' AND `updated`='1'";
  $queryupdttrns_run = mysqli_query($conn, $queryupdatetransitdbs);
  // create a new array
  $transitdbsarray = array();
  $transitbdcrtsize = array();
  while($queryupdttrs_row = mysqli_fetch_assoc($queryupdttrns_run)){
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
    $querytrnsitms_run = mysqli_query($querytrnsitms);
    $querytrnsitms_num = mysqli_num_rows($querytrnsitms_run);
    $itemdelivered = true;

    if($querytrnsitms_num == $carttdbssize){
      // cart is complete
      //echo "$cartnametdbs cart is complete<br>";
      // check whether the carts are at the center
      // these results mean that cart in transit is complete soo it should be delivered immediately it gets to the destination center
      // check whether the cart is at the final center

        while($querytrnsitms_row = mysqli_fetch_assoc($querytrnsitms_run)){
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

function cartitemdeadlinenotifier($conn){
  // also notify the center when delivery deadline for carts is almost met 2+ days
  // not items because the items belong to a cart so check on the cart instead

  $queryupdatetransitdbs = "SELECT * FROM `checkoutcarts` WHERE `pickupstat`='INCOMPLETE' AND `updated`='1'";
  $queryupdttrns_run = mysqli_query($conn, $queryupdatetransitdbs);
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

  while($queryupdttrs_row = mysqli_fetch_assoc($queryupdttrns_run)){
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
    $querytrnsitms_run = mysqli_query($querytrnsitms);
    while ($querytrnsitms_row = mysqli_fetch_assoc($querytrnsitms_run)) {
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
function returnadmintransit($conn){

  // first return the incomplete carts i.e carts in transit
  $queryupdatetransitdbs = "SELECT * FROM `checkoutcarts` WHERE `pickupstat`='INCOMPLETE' AND `updated`='1'";
  $queryupdttrns_run = mysqli_query($conn, $queryupdatetransitdbs);
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
            <!--<th>Changehandler</th>-->
          </tr>
        </thead>
        <tbody>";
  while($queryupdttrs_row = mysqli_fetch_assoc($queryupdttrns_run)){
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
    $querytrnsitms_run = mysqli_query($conn, $querytrnsitms);
    while ($querytrnsitms_row = mysqli_fetch_assoc($querytrnsitms_run)) {
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
      $querypickupds_run = mysqli_query($conn, $querypickupds);
      if($querypickupds_row = mysqli_fetch_assoc($querypickupds_run)){
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
                  <!--<td><button class=\"btn btn-primary btn-sm sumsum\" data-product=\"$item\" data-cart=\"$cartname\">PassOn</button></td>-->
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

function showStaffCurrentItemsInTransit($conn){
  // retrieve all the items in transit that have you as teh current handler
  // first retrieve the stafftiivanickname to search for
  $staffTiivaNick =  getStaffName($conn);
  // echo $staffTiivaNick;
  // $dataFed = "banana, monkey, gracias, nothing, grapes";
  // echo retrieveFinalItemInCommadString($dataFed);
  // print_r(queryAllitemsInTransit($conn));
  $transitItems = queryAllitemsInTransit($conn);// TODO ENSURE IT RETURNS SOMETHING ELSE ERROR
  // loop throught the records and find those where the current handler is myself
  echo "  
  <div class=\"table-responsive\" style=\"background-color:white;padding:10px;\">
    <h3 class=\"text-center text-capitalize\">Items in Transit In my Possession</h3>
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
  for($x = 0; $x < count($transitItems); $x++){
    $handlers = $transitItems[$x]['handlers'];
    // retrieve the final handler
    $finalHandler = retrieveFinalItemInCommadString($handlers);
    if($staffTiivaNick == $finalHandler){
      // this item is in my possession
      // retrieve cartname, handler, source, lastlocation, shipping, destination, ETA change handler
      $itemid = $transitItems[$x]['itemid'];
      // retrieve item// i.e. with like M234 ...note that the itemid above is the pickup row id
      $item = returnItemidShop($conn, $itemid);
      $cartname = $transitItems[$x]['cartname'];
      $cartnameshort = substr($cartname,0,9);
      $packagesource = $transitItems[$x]['from'];
      // retrieve last location from the exch location
      $exchlocs = $transitItems[$x]['exchlocs'];
      $currentexchlocs = retrieveFinalItemInCommadString($exchlocs);
      // retrieve last exchange time
      $exchdattimes = $transitItems[$x]['exchdattimes'];
      $latestexchtime = retrieveFinalItemInCommadString($exchdattimes);
      // retrieve remaining values
      $currenthandler = $finalHandler;
      $shiptype = $transitItems[$x]['shiptype'];
      $destination = $transitItems[$x]['centredestination'];
      $deadline = $transitItems[$x]['deadline'];
      $count = ceil($x+1);
      // return the table rows
      echo "<tr>
                <td>$count</td>
                <td>$itemid</td>";

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

    }else{
      // do nothing
      // echo "I don't have this item<br>";
    }
  }
   echo "
      </tbody>
      </table>

      </div>";

}

// showStaffCurrentItemsInTransit($conn);

function updateInTransitLocation($conn, $currentLocation){
  // This script will enable the staff member currently in transit to update his location
  // By updating his location this should automatically update the location in items he currently holds
  $currentTime = currentTime();
  // so retrieve all the transit items currently in my possession
  // update the location, timestamp
  // appendNewValueToCommaSeperatedData($data, $newValue);
  $staffTiivaNick = getStaffName($conn);
  // retrieve all the items in transit
  $transitItems = queryAllitemsInTransit($conn);// this will die if nothing is in transit
  for($x = 0; $x < count($transitItems); $x++){
      $handlers = $transitItems[$x]['handlers'];
      // retrieve the final handler
      $finalHandler = retrieveFinalItemInCommadString($handlers);
      if($staffTiivaNick == $finalHandler){
        // continue
        // now we have all the items we currently have in transit
        // updated the location
        $exchlocs = $transitItems[$x]['exchlocs'];
        $exchdattimes = $transitItems[$x]['exchdattimes'];
        // append the new value to the location and time
        $newlocations = appendNewValueToCommaSeperatedData($exchlocs, $currentLocation);// new location
        $newExchTimes = appendNewValueToCommaSeperatedData($exchdattimes, $currentTime);// new times
        // The item id will be passed as the row filter specifying which row to update
        $itemid = $transitItems[$x]['itemid'];// remember this is the transit row unique id / primary key
        updateTransitLocationTime($conn, $newlocations, $newExchTimes, $itemid);

      }else{
        // do nothing
      }
  }

}
// updateInTransitLocation($conn, $currentLocation);

function returnmerchanttransit($conn){
  // first return the incomplete carts i.e carts in transit
  $queryupdatetransitdbs = "SELECT * FROM `checkoutcarts` WHERE `pickupstat`='INCOMPLETE' AND `updated`='1'";
  $queryupdttrns_run = mysqli_query($conn, $queryupdatetransitdbs);
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

  while($queryupdttrs_row = mysqli_fetch_assoc($queryupdttrns_run)){
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
    $querytrnsitms_run = mysqli_query($querytrnsitms);
    while ($querytrnsitms_row = mysqli_fetch_assoc($querytrnsitms_run)) {
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
      $querypickupds_run = mysqli_query($querypickupds);
      if($querypickupds_row = mysqli_fetch_assoc($querypickupds_run)){
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
          $queryreturnproperties_run = mysqli_query($queryreturnproperties);
          if($queryreturnproperties_row = mysqli_fetch_assoc($queryreturnproperties_run)){
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
// if(isset($_POST['transit'])){
//   $transit = $_POST['transit'];
//   updatetransitdatabase($conn);
//   // check whether its a user or a staff member
//   // TODO ENSURE THAT THE HANDLER PICKING IS IN THE CORRECT ROUTE THE PACKAGE IS HEADED
//   // TODO THE NEW HANDLER SHOULDNT BE THE CURRENT ITEM HANDLER
//   if(isset($_SESSION['$staff'])){
//     // this is a tiiva staff member so show him all the data
//     // call appropriate transit function
//     showStaffCurrentItemsInTransit($conn);
//     returnadmintransit($conn);
//     // returnmerchanttransit();
//   }else{
//     // this is probably a user not a staff member
//     // TODO CHECK WHETHER THE USER IS LOGGED IN ELSE DENY THEM
//     // call appropriate transit function
//     // returnadmintransit();
//     returnmerchanttransit($conn);
//   }
// }elseif(isset($_POST['completecartatdestination'])){
//   updatetransitdatabase($conn);
//   completecartatdestination($conn);
// }

// always run this script every time this page is accessed
updatetransitdatabase($conn);// this will update the items in transit from the pickup ds


if(isset($_POST['transit']) && !empty($_POST['transit'])){
  $value = $_POST['transit'];
  if($value == 'transitadmin'){
    // show all the items in transit and also mine if any
    showStaffCurrentItemsInTransit($conn);
    returnadmintransit($conn);
  }elseif($value == 'merchant'){
    // this should be fixed later though...or we can also use it inhouse like..to check on a merchants items
    returnmerchanttransit($conn);
  }else{
    //nothing
    die('Bye bye');
  }
}elseif(isset($_POST['completecartatdestination']) && $_POST['completecartatdestination'] == 'ljodsfi'){
  // updatetransitdatabase($conn);
  completecartatdestination($conn);
}elseif(isset($_POST['updateLocation']) && !empty($_POST['updateLocation'])){
  $newLocation = mysqli_real_escape_string($conn, $_POST['updateLocation']);
  updateInTransitLocation($conn, $newLocation);
}else{
  die('Bye bye');
}

// TODO SHOW ITEMS IN TRANSIT THAT ARE IN CARESHIP OF THE CURRENT USER
























?>
