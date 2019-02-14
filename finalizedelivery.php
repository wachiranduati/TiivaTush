<?php
ob_start();
session_start();
require 'connect.php';
require 'utils/adminutils.php';

//TODO SHOW THE CART DETAILS AND CART DELIVERY FORM
//TODO FINALIZE INCOMPLETE CART DELIVERY
//TODO FINALIZE COMPLETE CART DELIVERY
//check the type of delivery were making
//then check whether the handler is the agent
// also check whether the item is at the destination center
//TODO USE ONE FUNCTION TO CHECK WHETHER STAFF IS LOGGED IN
//TODO WHEN CHECKING THE STAFF ALSO CONFIRM HE'S IN THE ACTUAL LOCATION DELIVERING
//TODO CHANGE THE CARTNAME ACTUAL NAMES TO SIMPLER NUMBERS TO EASIER CHECK
//REVIEW SECURE THE SCRIPT LATER.....SOMEONE CAN SEND THE FUNCTION NAME CALLING THE FUNCTION BYPASSING MOST FILTERS

if(isset($_POST['action'])){
  $action = $_POST['action'];
  if($action == 'delivercart'){
    // return complete carts
    checkincompletecompletecartsdlv($conn);
    returndelvdetsandform($conn);
  }elseif($action =='deliverincocart'){
    // return incomplete carts
    checkincompletecompletecartsdlv($conn);
    incompletecartreturnt($conn);
  }elseif($action == 'compdelv'){
    checkincompletecompletecartsdlv($conn);
    completecartdelivery($conn);
  }elseif($action == 'incodelv'){
    checkincompletecompletecartsdlv($conn);
    incompletecartdelivery($conn);
  }else{
    die("sida tupu buana");
  }
}else{
  die('sidaaa');
}


function returndelvdetsandform($conn){
  // this is to relay cart information
  if(isset($_POST['cart'])){
    $cartname = $_POST['cart'];
  }else{
    die('Sowie');
  }
  // $cartname = '4f50706353f017fac7dc3a95c5eb0038';
  //the staff member doing the delivery
  $loggedstaff = $_SESSION['$staff'];
  //retrieve cart shipping details
//REVIEW CONFIRM THAT THE CART IS ACTUALLY COMPLETE AND IS AT THE FINAL CENTER AND THAT IT IS IN THIS HANDLERS CONTROL
  $querystaff = "SELECT * FROM `staff` WHERE `id`='$loggedstaff'";
  $querystaff_run = mysqli_query($conn, $querystaff);
  if($querystaff_row = mysqli_fetch_assoc($querystaff_run)){
    //first get the staff name
    $staffnick = $querystaff_row['tiivanick'];
  }

  //return the cart form details and delivery form
  $querycardetls = "SELECT * FROM `sold` WHERE `cartname`='$cartname'";
  $querycardetls_run = mysqli_query($conn, $querycardetls);
  $querycardetls_num = mysqli_num_rows($querycardetls_run);
  if($querycardetls_num != 0){
    //continue
    if($querycardetls_row = mysqli_fetch_assoc($querycardetls_run)){
      // row returned .....continue
      $name = $querycardetls_row['names'];
      $nameid = $querycardetls_row['identity'];
      $email = $querycardetls_row['email'];
      $phone = $querycardetls_row['phone'];
      $county = $querycardetls_row['county'];
      $area = $querycardetls_row['area'];
      $location = $county.','.$area;
      $details = $querycardetls_row['details'];
      $purchsdate = $querycardetls_row['date'];
      $shipping = $querycardetls_row['shipping'];
      // $cartname = '4f50706353f017fac7dc3a95c5eb0038';
      //  TODO CHECK WHETHER ITEM IS AT FINAL LOCATION AND THE CURRENT HANDLER PHYSICALLY HAS THE ITEM
      echo "<div class=\"row cmpltcrtdlv\">
          <div class=\"col-lg-6 col-md-6 col-md-12 col-xs-12\">
            <h3>Cart Details</h3>
              <div class=\"row\" style=\"border:1px solid black;border-left:none;\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <h4>Option 1 - (<small>The following details are for option one delivery</small>)</h4>
                <div class=\"row\">
                  <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\"><p class=\"text-center\">CARTNAME:&nbsp;<span class=\"text-capitalize\">$cartname</span></p></div>
                  <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\"><p>TOWN:&nbsp;<span class=\"text-capitalize\">$location</span></p></div>
                  <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\"><p>TO:&nbsp;<span class=\"text-capitalize\">$name</span></p></div>
                  <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\"><p>ID NO:&nbsp;<span>$nameid</span></p></div>
                  <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\"><p>PHONE NO:&nbsp;<span>$phone</span></p></div>
                  <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\"><p>PRCHS DATE:&nbsp;<span>$purchsdate</span></p></div>
                  <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\"><p>SHIPPING:&nbsp;<span>$shipping</span></p></div>
                </div>

                </div>
              </div>
              <div class=\"row\" style=\"border:1px solid black;margin-top:1%;border-left:none;\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <h4>Option 2 - (<small>The following details are for option one delivery</small>)</h4>
                <div class=\"row\">
                  <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <P class=\"text-center\">CARTNAME:<span>$cartname</span></P>
                  </div>
                  <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <h4>Delivery details</h4><p>$details</p>
                  </div>
                </div>
                </div>
              </div>
          </div>
          <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
          <h3 class=\"text-center\">Cart Delivery</h3>
          <form>
            <div>
              <label for=\"Name\">Agent Making the delivery:</label>
              <input type=\"text\" id=\"compagent\" value=\"Nicholas Nduati\" readonly name=\"deliveringagnt\" title=\"<h3>New Handler</h3><br></p>the new handler should input their id</p>\" class=\"form-control\">
            </div><br>
            <div>
              <label for=\"Name\">Your Name:</label>
              <input type=\"text\" id=\"compname\" placeholder=\"Please Enter your name e.g Kate John Kamaneno \" name=\"handlerid\" title=\"<h3>New Handler</h3><br></p>the new handler should input their id</p>\" class=\"form-control\">
            </div><br>
            <div>
              <label for=\"Name\">ID Number</label>
              <input type=\"text\" id=\"compid\" placeholder=\"Please Enter your ID/Number e.g 32090328\" name=\"handlerid\" title=\"<h3>New Handler</h3><br></p>the new handler should input their id</p>\" class=\"form-control\">
            </div>

            <div><br>
              <label for=\"Name\">Phone number/Email address:</label>
              <input type=\"text\" id=\"compemail\" placeholder=\"Please enter either your phonenumber or email address\" name=\"handlerid\" title=\"<h3>New Handler</h3><br></p>the new handler should input their id</p>\" class=\"form-control\">
            </div><br>
          </form>
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-3 col-sm-1 col-xs-1\"></div>
                <div class=\"col-lg-6 col-md-6 col-sm-10 col-xs-10\">
                  <a class=\"btn btn-primary btn-block btn-md bcompdelv\" data-cart=\"$cartname\">Complete delivery</a>
                </div>
                <div class=\"col-lg-3 col-md-3 col-sm-1 col-xs-1\"></div>
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\"id=\"completecartdetails\"></div>
            </div>
            <hr>
          </div>
      </div>";
    }else{
      // no row
      die("Error");
    }

  }else{
    // cart does not exist so quit
    die("Error bruv");
    // echo mysqli_error();
  }
}

function incompletecartreturnt(){
    // this is to relay cart information for cart named but for item in specific cart
    if(isset($_POST['cart']) && isset($_POST['itemid'])){
      $cartname = $_POST['cart'];
      $itemid = $_POST['itemid'];

    }else{
      die('Sowie');
    }
    // $cartname = '4f50706353f017fac7dc3a95c5eb0038';
    //the staff member doing the delivery
    $loggedstaff = $_SESSION['$staff'];
    //retrieve cart shipping details
  //REVIEW CONFIRM THAT THE CART IS ACTUALLY COMPLETE AND IS AT THE FINAL CENTER AND THAT IT IS IN THIS HANDLERS CONTROL
    $querystaff = "SELECT * FROM `staff` WHERE `id`='$loggedstaff'";
    $querystaff_run = mysqli_query($conn, $querystaff);
    if($querystaff_row = mysqli_fetch_assoc($querystaff_run)){
      //first get the staff name
      $staffnick = $querystaff_row['tiivanick'];
    }

    //return the cart form details and delivery form
    $querycardetls = "SELECT * FROM `sold` WHERE `cartname`='$cartname'";
    $querycardetls_run = mysqli_query($conn, $querycardetls);
    $querycardetls_num = mysqli_num_rows($querycardetls_run);
    if($querycardetls_num != 0){
      //continue
      if($querycardetls_row = mysqli_fetch_assoc($querycardetls_run)){
        // row returned .....continue
        $name = $querycardetls_row['names'];
        $nameid = $querycardetls_row['identity'];
        $email = $querycardetls_row['email'];
        $phone = $querycardetls_row['phone'];
        $county = $querycardetls_row['county'];
        $area = $querycardetls_row['area'];
        $location = $county.','.$area;
        $details = $querycardetls_row['details'];
        $purchsdate = $querycardetls_row['date'];
        $shipping = $querycardetls_row['shipping'];
        // check whether the item id in transit is at the final center
          $queryitemid = "SELECT * FROM `transitdbs` WHERE `cartname`='$cartname' AND `id`='$itemid'";
          $queryitemid_run = mysqli_query($conn, $queryitemid);
          $queryitemid_num = mysqli_num_rows($queryitemid_run);
          if($queryitemid_num != 0){
            //row found...now check whether final center is in the destination center
            if($queryitemid_row = mysqli_fetch_assoc($queryitemid_run)){
              //continue
               $exchcenterslist = $queryitemid_row['exchcenters'];
               $exchcentersarray = explode(',',$exchcenterslist);
               $position = round(count($exchcentersarray) - 1);

              $exchcnt = strtoupper($exchcentersarray[$position]);

               $centredestinationlist = $queryitemid_row['centredestination'];
               $centredestinationlistarray =  explode(',',$centredestinationlist);

               $centerdestination = strtoupper($centredestinationlistarray[0]);

               if($exchcnt == $centerdestination){
                 //proceed to display the cart items for the particular item
                 echo "<div class=\"row cmpltcrtdlv\">
                     <div class=\"col-lg-6 col-md-6 col-md-12 col-xs-12\">
                       <h3>Cart Details</h3>
                         <div class=\"row\" style=\"border:1px solid black;border-left:none;\">
                           <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                           <h4>Option 1 - (<small>The following details are for option one delivery</small>)</h4>
                           <div class=\"row\">
                           <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\"><p>CART_ITEM NO:&nbsp;<span class=\"text-capitalize\">$itemid</span></p></div>
                             <div class=\"col-lg-8 col-md-8 col-sm-8 col-xs-8\"><p class=\"text-center\">CARTNAME:&nbsp;<span class=\"text-capitalize\">$cartname</span></p></div>
                             <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\"><p>TOWN:&nbsp;<span class=\"text-capitalize\">$location</span></p></div>
                             <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\"><p>TO:&nbsp;<span class=\"text-capitalize\">$name</span></p></div>
                             <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\"><p>ID NO:&nbsp;<span>$nameid</span></p></div>
                             <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\"><p>PHONE NO:&nbsp;<span>$phone</span></p></div>
                             <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\"><p>PRCHS DATE:&nbsp;<span>$purchsdate</span></p></div>
                             <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\"><p>SHIPPING:&nbsp;<span>$shipping</span></p></div>
                           </div>

                           </div>
                         </div>
                         <div class=\"row\" style=\"border:1px solid black;margin-top:1%;border-left:none;\">
                           <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                           <h4>Option 2 - (<small>The following details are for option one delivery</small>)</h4>
                           <div class=\"row\">
                             <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                               <P class=\"text-center\">CARTNAME:<span>$cartname</span></P>
                             </div>
                             <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                               <h4>Delivery details</h4><p>$details</p>
                             </div>
                           </div>
                           </div>
                         </div>
                     </div>
                     <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                     <h3 class=\"text-center\">Cart Delivery</h3>
                     <form>
                       <div>
                         <label for=\"Name\">Agent Making the delivery:</label>
                         <input type=\"text\" id=\"inccompagent\" value=\"Nicholas Nduati\" readonly name=\"deliveringagnt\" title=\"<h3>New Handler</h3><br></p>the new handler should input their id</p>\" class=\"form-control\">
                       </div><br>
                       <div>
                         <label for=\"Name\">Your Name:</label>
                         <input type=\"text\" id=\"inccompname\" placeholder=\"Please Enter your name e.g Kate John Kamaneno \" name=\"handlerid\" title=\"<h3>New Handler</h3><br></p>the new handler should input their id</p>\" class=\"form-control\">
                       </div><br>
                       <div>
                         <label for=\"Name\">ID Number</label>
                         <input type=\"text\" id=\"inccompid\" placeholder=\"Please Enter your ID/Number e.g 32090328\" name=\"handlerid\" title=\"<h3>New Handler</h3><br></p>the new handler should input their id</p>\" class=\"form-control\">
                       </div>

                       <div><br>
                         <label for=\"Name\">Phone number/Email address:</label>
                         <input type=\"text\" id=\"inccompemail\" placeholder=\"Please enter either your phonenumber or email address\" name=\"handlerid\" title=\"<h3>New Handler</h3><br></p>the new handler should input their id</p>\" class=\"form-control\">
                       </div><br>
                     </form>
                       <div class=\"row\">
                           <div class=\"col-lg-3 col-md-3 col-sm-1 col-xs-1\"></div>
                           <div class=\"col-lg-6 col-md-6 col-sm-10 col-xs-10\">
                             <a class=\"btn btn-primary btn-block btn-md bincompldelv\" data-cart=\"$cartname\" data-id=\"$itemid\">Complete delivery</a>
                           </div>
                           <div class=\"col-lg-3 col-md-3 col-sm-1 col-xs-1\"></div>
                           <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\"id=\"inccompletecartdetails\"></div>
                       </div>
                       <hr>
                     </div>
                 </div>";

               }else{
                 die("Error");
               }



            }else{
              //no result
              die("Error!");
            }
          }else{
            //row not found
            die("Error23");
          }



      }else{
        // no row
        die("Error");
      }

    }else{
      // cart does not exist so quit
      die("Error bruv");
      // echo mysqli_error();
    }

}
//TODO INSET INCOMPLETE ITEMS IN A DIFERRENT DATABASE AND ONCE ALL OF THEM HAVE BEEN DELIVERED....CHANGE THE SHIPPING STATUS OF CHECKOUTCARTS
// use a script to automatically check the entire transitdbs for carts that havent been cleared with dstatus 1..are in the incomp deliveries
// check whether cart count in incompletecartdbs is the same as in pickupds// then and only then change status
//TODO autotest to check whether checkoutcarts has been changed
// checkincompletecompletecartsdlv();

function checkincompletecompletecartsdlv($conn){
  // This checks to see whether cart items have been delivered and updates checkout cart to complete
  // first check whether 5 minutes have elapsed since all the incomplete carts delivery were checked
  // retrieve the last time on the incomplete row
  $current_time_on_pickup_row_autotest = getAutotestTime($conn, 'incomplete');
  if(checkIfAtleast_ThisTimeHasElapsed($current_time_on_pickup_row_autotest, '15 minutes') == True){
    // retrieve all undelivered carts
    $incompleteCarts = getUnUpdatedCarts($conn, 1);
    // retrieve all delivered items from transitdb from incomplete carts...dstatus = 1
    if($incompleteCarts != 0){
      for($x = 0; $x < count($incompleteCarts); $x++){
        // print_r($incompleteCarts[$x]);
        $cartname = $incompleteCarts[$x]['cartname'];
        $cartTransitItem = getTransitItemsDstatusPerCart($conn, $cartname, 1);// 1 deliverd 0 not delivered
        if($cartTransitItem != 0){
          // print_r($cartTransitItem);
          // ooh so this script checks whether there's a complete cart that has been delivered// should be in transit though too
          // this will count items in the transit items belonging to the cart and compare to the actual cart contents
          // if equal that means that items have been delivered and the cart should be now marked as complete
          $originaCartContents = $incompleteCarts[$x]['cartcontents'];// original cart contents i.e. m123, m13, m4
          $originalCartContentsArray = convertCommaSeperateStringIntoArray($originaCartContents); // the cartcontent in array
          $originaCartSize = count($originalCartContentsArray); // the size of the original cart
          $cartSizeOnCriteria = count($cartTransitItem); // the size of the cart with given criteria
          if($originaCartSize == $cartSizeOnCriteria){
            // cart is complete
            echo updateCheckOutCartToComplete($conn, $cartname);
          }else{
            // cart is not complete
            echo "Not all the items have been delivered for this cart";
          }
        }


      }
    }
    // update the autotest for this particular test now
    echo updateAutotestField($conn, 'incomplete', currentTime());
  }else{
    // time has not elapsed do not continue
    echo "You are currently viewing the freshest list";
  }

}
// checkincompletecompletecartsdlv($conn);


function completecartdelivery(){
  //script below will complete delivery for complete carts
  //check whether its a staff doing it

  // this finalizes the complete cart delivery
  // receive the cart details sent
  //var Mcomplete = "action=compdelv&agent="+compagent+"&name="+compname+"&id="+compid+"&email="+compemail;
  if(isset($_POST['agent']) && isset($_POST['name']) && isset($_POST['id']) && isset($_POST['email']) && isset($_POST['cart'])){
    //continue
    $agent = $_POST['agent'];
    $name = $_POST['name'];
    $id = $_POST['id'];
    $email = $_POST['email'];
    $cart = $_POST['cart'];
    // check whether the values are empty
    if(!empty($agent) && !empty($name) && !empty($id) && !empty($email) && !empty($cart)){
      //continue
      //THIS IS THE SIMPLER ONE....UPDATE THE CART ITEMS VALUES TO 1 THEN CHANGE THE CHECKOUT CARTS TO COMPLETE...THEN UPDATE THE DELIVERIES TABLE
      //but first check whether this handler actually has the said item before updating it
      if(isset($_SESSION['$staff'])){
          //retrieve the staffs name
          $loggedstaff = $_SESSION['$staff'];
          $querystaff = "SELECT * FROM `staff` WHERE `id`='$loggedstaff'";
          $querystaff_run = mysqli_query($conn, $querystaff);
          $querystaff_num = mysqli_num_rows($querystaff_run);
          if($querystaff_num != 0){
            if($querystaff_row = mysqli_fetch_assoc($querystaff_run)){
              //first get the staff name
              $staffnick = $querystaff_row['tiivanick'];
              // now check whether staff nick is the same as the current handler
              $querygetcurrenthandler = "SELECT * FROM `transitdbs` WHERE `cartname` = '$cart' AND `dstatus`='0'";
              $querygetcurrenthandler_run = mysqli_query($conn, $querygetcurrenthandler);
              $querygetcurrenthandler_num = mysqli_num_rows($querygetcurrenthandler_run);
              if($querygetcurrenthandler_num != 0){
                //continue
                $hasentirecart = true;
                while($querygetcurrenthandler_row = mysqli_fetch_assoc($querygetcurrenthandler_run)){
                  //continue
                  $handlerslist = $querygetcurrenthandler_row['handlers'];
                  $handlerslistarray = explode(',',$handlerslist);
                  $handlercount = count($handlerslistarray);
                  $lastposition = round($handlercount - 1);
                  $currenthandler = $handlerslistarray[$lastposition];//last position
                  if($currenthandler == $staffnick){
                    // do nothing
                  }else{
                    // $hasentirecart = false;
                  }

                }
                // continue on with the cart
                $date = Date("Y-m-d");
                $timenow = Date("H:m:i");
                if($hasentirecart == true){
                  // echo "proceed to deliver";
                  //THIS IS THE SIMPLER ONE....UPDATE THE CART ITEMS VALUES TO 1 THEN CHANGE THE CHECKOUT CARTS TO COMPLETE...THEN UPDATE THE DELIVERIES TABLE
                  $queryupdatedstatus = "UPDATE `transitdbs` SET `dstatus`='1' WHERE `cartname`='$cart' AND `dstatus`='0'";
                  if($queryupdatedstatus_run = mysqli_query($conn, $queryupdatedstatus)){
                    //itll run throught the entire table
                    //continue to update checkout carts
                    $queryupdatecheckoutcart = "UPDATE `checkoutcarts` SET `pickupstat`='COMPLETE' WHERE `cartname`='$cart'";
                    if($queryupdatecheckoutcart_run = mysqli_query($conn, $queryupdatecheckoutcart)){
                      //continue
                      //insert row in deliveries table
                      $queryfinalizedelivery = "INSERT INTO `deliveries` (`id`,`cartno`,`name`,`nameid`,`date`,`time`,`agent`) VALUES ('','$cart','$name','$id','$date','$timenow','$staffnick')";
                      if($queryfinalizedelivery_run = mysqli_query($conn, $queryfinalizedelivery)){
                        //successful
                        echo "cart $cart has successfully been delivered to $name TODAY AT $timenow HRS";
                      }else{
                        die("Error");
                      }

                    }else{
                      die("Error");
                    }
                  }else{
                    die("Error");
                  }


                }else{
                  echo "you dont currently have all the items of teh cart";
                }
              }else{
                die("Error2");
              }
            }else{
              die("Error21");
            }
          }else{
            die("Error22");
          }

      }else{
        die("Error212");
      }

    }else{
      die("Error!2");
    }
  }else{
    die("Error!1");
  }

}
function incompletecartdelivery(){
  // receive the cart details sent
  // var Mincomplete = "action=incodelv&agent="+inccompagent+"&name="+inccompname+"&id="+inccompid+"&email="+inccompemail;
  if(isset($_POST['agent']) && isset($_POST['name']) && isset($_POST['id']) && isset($_POST['email']) && isset($_POST['cart']) && isset($_POST['item'])){
    //continue
    $agent = $_POST['agent'];
    $name = $_POST['name'];
    $id = $_POST['id'];
    $email = $_POST['email'];
    $cart = $_POST['cart'];
    $item = $_POST['item'];
    if(!empty($agent) && !empty($name) && !empty($id) && !empty($email) && !empty($cart) && !empty($item)){
      //echo "this is teh incompelte cart $item";
      //THIS IS THE HARDER ONE
      //TODO TODO THIS AGAIN TODO
      $date = Date("Y-m-d");
      $timenow = Date("H:m:i");
      // check whether the cart is incomplete....then check whether the agent has the said item...clears
      // add the row to incomplete deliveries with users details and date similar to that of complete carts
      // this one should also have the itemid
      //TODO USE A COMMON ID LIKE SAY THE TRANSIT ID OR THE ACTUAL PRODUCT ID
      $querycheckcartstatus = "SELECT * FROM `checkoutcarts` WHERE `cartname`='$cart' AND `pickupstat`='INCOMPLETE'";
      $querycheckcartstatus_run = mysqli_query($conn, $querycheckcartstatus);
      $querycheckcartstatus_num = mysqli_num_rows($querycheckcartstatus_run);
      if($querycheckcartstatus_num == 1){
        //continue
        // check whether item is with the current handler
        $loggedstaff = $_SESSION['$staff'];
        $querystaff = "SELECT * FROM `staff` WHERE `id`='$loggedstaff'";
        $querystaff_run = mysqli_query($conn, $querystaff);
        $querystaff_num = mysqli_num_rows($querystaff_run);
        if($querystaff_num != 0){
          if($querystaff_row = mysqli_fetch_assoc($querystaff_run)){
            //first get the staff name
            $staffnick = $querystaff_row['tiivanick'];
            // the id provided is the table id
            $queryconfirmstaffhandler = "SELECT * FROM `transitdbs` WHERE `id`='$item' AND `cartname`='$cart'";
            $queryconfirmstaffhandler_run = mysqli_query($conn, $queryconfirmstaffhandler);
            $queryconfirmstaffhandler_num = mysqli_num_rows($queryconfirmstaffhandler_run);
            if($queryconfirmstaffhandler_num == 1){
              //continue
              $queryconfirmstaffhandler_row = mysqli_fetch_assoc($queryconfirmstaffhandler_run);
              $lasthandlerlist = $queryconfirmstaffhandler_row['handlers'];
              $lasthandlerArray = explode(',',$lasthandlerlist);
              $handlpositn = round(count($lasthandlerArray) - 1);
              $lasthandler = $lasthandlerArray[$handlpositn];
              if($staffnick == $lasthandler){
                //handler has the package
                // check whether item with this itemid and cart exists else add it
                $querycheckincdelivery = "SELECT * FROM `incdelivery` WHERE `cartno`='$cart' AND `itemid`='$item'";
                $querycheckincdelivery_run = mysqli_query($conn, $querycheckincdelivery);
                $querycheckincdelivery_num = mysqli_num_rows($querycheckincdelivery_run);
                if($querycheckincdelivery_num == 0){
                  //continue
                  $queryfinalizedlv = "INSERT INTO `incdelivery` (`id`,`cartno`,`itemid`,`name`,`nameid`,`date`,`time`,`agent`) VALUES ('','$cart','$item','$name','$id','$date','$timenow','$agent')";
                  if($queryfinalizedlv_run = mysqli_query($conn, $queryfinalizedlv)){
                    // successfully updated
                    // echo "Item $item of cart $cart has successfully been delivered";
                    // update the transit status to 1
                    $queryfinalizetrnsstat = "UPDATE `transitdbs` SET `dstatus`='1' WHERE `id`='$item' AND `cartname`='$cart'";
                    if($queryfinalizetrnsstat_run = mysqli_query($conn, $queryfinalizetrnsstat)){
                      //successfully done
                      echo "Item $item of cart $cart has successfully been delivered";
                    }else{
                      //error
                      die("Error");
                    }
                  }else{
                    //Error
                    die("Error");
                  }
                }else{
                  // it exhists
                  die("Error");
                }
              }else{
                // handler does not have the package
                die("Error");
              }

            }else{
              // it either does not exist or shouldnt exhist
              die("Error");
            }
          }
        }


      }else{
        //shouldnt be possible or doesnt exhist
        die("Error");
      }
    }else{
      die('Error2');
    }
  }else{
    die("Error1");
  }
}


?>
