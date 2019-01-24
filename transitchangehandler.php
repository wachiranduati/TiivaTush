<?php
ob_start();
session_start();
require 'connect.php';
//the script does exactly that changes handlers
//check whether the staff is logged in to proceed
if(isset($_SESSION['$staff'])){
  // continue
  $loggedstaff = $_SESSION['$staff'];
  $querystaff = "SELECT * FROM `staff` WHERE `id`='$loggedstaff'";
  $querystaff_run = mysql_query($querystaff);
  if($querystaff_row = mysql_fetch_assoc($querystaff_run)){
    $staffnick = $querystaff_row['tiivanick'];
  }
  // check whether the product and cartname are provided
  if(isset($_POST['product']) && isset($_POST['cart'])){
    // continue
    $product = $_POST['product'];
    $cart = $_POST['cart'];


    // query the cart checkout or sth
    // query only the items in transit
    // echo back item 230 of cart 2k23ooi3 bound for tharakanithi county currently handled by mukurino kigosho
    $querytrns = "SELECT * FROM `pickupds` WHERE `cart`='$cart' AND `item`='$product'";
    $querytrns_run = mysql_query($querytrns);
    // return the id then query the current items in transit
    if($querytrns_row = mysql_fetch_assoc($querytrns_run)){
      $pickupid = $querytrns_row['id'];
      // now query the transitdbs
      $querytrnsititem = "SELECT * FROM `transitdbs` WHERE `itemid`='$pickupid'";
      $querytrnsititem_run = mysql_query($querytrnsititem);
      while ($querytrnsitms_row = mysql_fetch_assoc($querytrnsititem_run)) {
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

        //echo
        echo "<h3 class=\"text-center text-uppercase\">Change Handler <small>(to - $staffnick)</small></h3>";
        echo "<h5>Current Handler : <span>$currenthandler</span></h5>";

        echo "
            <div class=\"row\">
              <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\"><h5>Item : <span>$pickupid</span></h5></div>
              <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\"><h5>Cart : <span>$cart</span></h5></div>
            </div>
            <div class=\"row\">
              <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\"><h5>Shipped_From : <span>$packagesource</span></h5></div>
              <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\"><h5>Destination : <span>$destination</span></h5></div>
            </div>
            ";

        echo "<div class=\"row\" id=\"multi_a\" style=\"background-color:gainsboro;font-family:kok;\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                  <hr>
                  <h3 class=\"text-left text-capitalize text-center\">Proceed with this values?</h3>
                  <h4 class=\"text-capitalize text-center\">Receiving handler's id: ****** [hidden]</h4>
                  <h4 class=\"text-capitalize text-center\">Receiving handler's Name: <span class=\"multistaffname\">Cuzcuz</span></h4>
                  <h4 class=\"text-capitalize text-center\">Exchange location: <span class=\"multilocation\">kabuda</span></h4>

                  <a class=\"btn btn-primary\" id=\"multiclick\">Complete transaction to <span class=\"multistaffname\">Cuzcuz</span></a>
                  <hr>
                </div>
              </div>";
        echo "
              <div class=\"row\" id=\"single_a\">
                  <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"margin-bottom:2%;\">
                  <hr>
                  <h5>Pass on item <strong>$pickupid of cart $cart</strong>?<br><br>If Yes. Input the agents id below</h5>
                  <hr>
                      <form>
                        <div class=\"col-lg-9 col-md-9 col-sm-9 col-xs-9\">
                          <label for=\"email\">New handler id: i.e 12<small>The handler receiving should input his/her id</small></label>
                          <input type=\"password\" name=\"handlerid\" title=\"<h3>New Handler</h3><br></p>the new handler should input their id</p>\" class=\"form-control handlerid\" id=\"handlerid\">

                        </div>
                      </form>
                  </div>
              </div>
              <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" id=\"handlercontents\" style=\"margin-bottom:2%;\"></div>
              </div>
            ";
}

    }

  }else{
    // something is missing
    die('Error');
  }
}else{
  // dont
}




?>
