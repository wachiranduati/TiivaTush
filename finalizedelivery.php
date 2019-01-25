<?php
ob_start();
session_start();
require 'connect.php';

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
    checkincompletecompletecartsdlv();
    returndelvdetsandform();
  }elseif($action =='deliverincocart'){
    // return incomplete carts
    checkincompletecompletecartsdlv();
    incompletecartreturnt();
  }elseif($action == 'compdelv'){
    checkincompletecompletecartsdlv();
    completecartdelivery();
  }elseif($action == 'incodelv'){
    checkincompletecompletecartsdlv();
    incompletecartdelivery();
  }else{
    die("sida tupu buana");
  }
}else{
  die('sidaaa');
}


function returndelvdetsandform(){
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

function checkincompletecompletecartsdlv(){
  //this script will update the checkoutcarts status of carts of which have been delivered incompletely ONLY
  //TODO ...THIS SHOULD BE INCLUDED IN THE AUTOTEST THINGI TOO WHEN RUNNING IT
  // chekc whether an entry on the autotest actually exists
  // first get the current time and date to compare with that in the database
  $date = Date("Y-m-d");
  $timenow = Date("H:m:i");
  // now query the autotest table
  $queryautotest = "SELECT * FROM `autotest` WHERE `test`='incomplete'";
  $queryautotest_run = mysqli_query($conn, $queryautotest);
  $queryautotest_num = mysqli_num_rows($queryautotest_run);

  if($queryautotest_num == 1){
    //record found
    // echo "record found";// dont insert row
    //TODO CHECK THE TIME
    $queryautotest_row = mysqli_fetch_assoc($queryautotest_run);
    $rantime = $queryautotest_row['time'];
    $randate = $queryautotest_row['date'];

    $rantimeArray = explode(':',$rantime);
    $timenowArray = explode(':',$timenow);
    $rantimeminute = $rantimeArray[1];
    $timenowminute = $timenowArray[1];
    $rantimehour = $rantimeArray[0];
    $timenowhour = $timenowArray[0];

    $timeplus2 = round($timenowminute + 5);// if it was last updated more than 2 minutes ago...update
    //REVIEW MAYBE CHANGED THE TIME LATER TO REDUCE RAM RESOURCE USE BY THE SCRIPT

    $randateArray = explode('-',$randate);
    $dateArray = explode('-',$date);

    // if the minute is more than 2 mins away//TODO REVIEW THIS
    if( $timenowhour != $rantimehour || round($rantimeminute + 5) > $timenowminute || round($rantimeminute + 5) < $timenowminute){
      // run if ....hour has changed or .. minute has changed by more than 5 minutes - upwards or downwards
      // run process
      //REVIEW REVIEW THE IF CONDITION LATER...SOMETHING MIGHT BE OFF
      // echo "run the process";
      // SCRIPT WAS PUSHED BELOW THIS
      $incompletecartsarray = array();
      // query the time then check the incomplete delivery TODO IS HERE TODO TODO
      $queryincompletecarts = "SELECT `cartname` FROM `checkoutcarts` WHERE `pickupstat`='INCOMPLETE'";
      $queryincompletecarts_run = mysqli_query($conn, $queryincompletecarts);
      $queryincompletecarts_num = mysqli_num_rows($queryincompletecarts_run);
      if($queryincompletecarts_num != 0){
        // carts exist
        while($queryincompletecarts_row = mysqli_fetch_assoc($queryincompletecarts_run)){
          // add the carts to the arrays
          $cart = $queryincompletecarts_row['cartname'];
          if(in_array($cart,$incompletecartsarray)){
            // dont add cart
          }else{
            //add cart
            array_push($incompletecartsarray,$cart);
          }
        }
        // query each cart collected get the number of rows
        $actualcartsize = array();
        for($i = 0; $i < count($incompletecartsarray);$i++){
          $currentcart = $incompletecartsarray[$i];
          //get the cart size from pickuptable
          $querycartoriginlsize = "SELECT `id` FROM `pickupds` WHERE `cart`='$currentcart'";
          if($querycartoriginlsize_run = mysqli_query($conn, $querycartoriginlsize)){
            // continue
            $querycartoriginlsize_num = mysqli_num_rows($querycartoriginlsize_run);
            // compare the size with that of the transitdbs table
              $querytransitcartsize = "SELECT * FROM `transitdbs` WHERE `cartname`='$currentcart' AND `dstatus`='1'";
              if($querytransitcartsize_run = mysqli_query($conn, $querytransitcartsize)){
                //continue
                $querytransitcartsize_num = mysqli_num_rows($querytransitcartsize_run);
                // first ensure that the cart actually exists in the transit table
                if($querytransitcartsize_num != 0){
                  if($querycartoriginlsize_num == $querytransitcartsize_num){
                    // cart is complete therefore likely from a complete incomplecart delivery
                    // this banks on this script being ran numerous times to ensure that this list does not take an incomplete cart as a complet one
                    //REVIEW THIS.....just call this function with all functions here
                    // echo "complete $currentcart <br>";
                    // continue to update the checkoutcarts
                    $queryfinalizecheckoutcart = "UPDATE `checkoutcarts` SET `pickupstat`='COMPLETE' WHERE `cartname`='$currentcart'";
                    if($queryfinalizecheckoutcart_run = mysqli_query($conn, $queryfinalizecheckoutcart)){
                        // incomplete cart is now officially complete
                        // echo "Incomplete cart successfully delivered";
                        // now update the time in the autotest
                        $querycheckoutcartupdateinco = "UPDATE `autotest` SET `time`='$timenow', `date`='$date'";
                        if($querycheckoutcartupdateinco_run = mysqli_query($conn, $querycheckoutcartupdateinco)){
                          echo "Dbs successfully updated";
                        }else {
                          die("Error");
                        }
                    }else{
                      die("Error");
                    }

                  }else{
                    // cart is from incomplete cart delivery
                    // die("Incomplete");
                    //TODO DIE() FUNCTIONS ARE BEHAVING WEIRDLY IN CUTTING LOOPS SHORT
                    //  echo "$currentcart<br>";
                     $querycheckoutcartupdateinco = "UPDATE `autotest` SET `time`='$timenow', `date`='$date'";
                     if($querycheckoutcartupdateinco_run = mysqli_query($conn, $querycheckoutcartupdateinco)){
                       echo "(functn update )Dbs successfully updated<br>";
                     }else {
                       die("Error");
                     }
                  }
                }else{
                  // die("Error2");
                  // echo "not correct $currentcart<br>";
                }
              }else{
                die("Error");
              }
          }else{
            die("Error");
          }


        }
      }else{
        // there are no carts
        die("Error");
      }
      // SCRIPT WAS PUSHED ABOVE THIS
    }else{
      // do nothing
      // echo "do not run the process";
      die("Error");
    }
    // print_r($rantimeArray);

  }else{
    //record not found
    echo "not found the record";// insert row
    // insert row
    $queryinsertincompleteautotst = "INSERT INTO `autotest` (`id`,`test`,`time`,`date`) VALUES ('','incomplete','$timenow','0')";
    if($queryinsertincompleteautotst_run = mysqli_query($conn, $queryinsertincompleteautotst)){
      // it ran
      echo "|incomplete| row has successfully been created";
      // now check for incomplete cart delivery TODO IS HERE
      // query checkourts retrieve cart names
      // get the cart size from the pickup table
      // compare the cartsize for the dstatus with 1 count
       $incompletecarts = array();
       //collect incomplete carts
       $incompletecartsarray = array();
       // query the time then check the incomplete delivery TODO IS HERE TODO TODO
       $queryincompletecarts = "SELECT `cartname` FROM `checkoutcarts` WHERE `pickupstat`='INCOMPLETE'";
       $queryincompletecarts_run = mysqli_query($conn, $queryincompletecarts);
       $queryincompletecarts_num = mysqli_num_rows($queryincompletecarts_run);
       if($queryincompletecarts_num != 0){
         // carts exist
         while($queryincompletecarts_row = mysqli_fetch_assoc($queryincompletecarts_run)){
           // add the carts to the arrays
           $cart = $queryincompletecarts_row['cartname'];
           if(in_array($cart,$incompletecartsarray)){
             // dont add cart
           }else{
             //add cart
             array_push($incompletecartsarray,$cart);
           }
         }
         // query each cart collected get the number of rows
         $actualcartsize = array();
         for($i = 0; $i < count($incompletecartsarray);$i++){
           $currentcart = $incompletecartsarray[$i];
           //get the cart size from pickuptable
           $querycartoriginlsize = "SELECT `id` FROM `pickupds` WHERE `cart`='$currentcart'";
           if($querycartoriginlsize_run = mysqli_query($conn, $querycartoriginlsize)){
             // continue
             $querycartoriginlsize_num = mysqli_num_rows($querycartoriginlsize_run);
             // compare the size with that of the transitdbs table
               $querytransitcartsize = "SELECT * FROM `transitdbs` WHERE `cartname`='$currentcart' AND `dstatus`='1'";
               if($querytransitcartsize_run = mysqli_query($conn, $querytransitcartsize)){
                 //continue
                 $querytransitcartsize_num = mysqli_num_rows($querytransitcartsize_run);
                 // first ensure that the cart actually exists in the transit table
                 if($querytransitcartsize_num != 0){
                   if($querycartoriginlsize_num == $querytransitcartsize_num){
                     // cart is complete therefore likely from a complete incomplecart delivery
                     // this banks on this script being ran numerous times to ensure that this list does not take an incomplete cart as a complet one
                     //REVIEW THIS.....just call this function with all functions here
                     // echo "complete $currentcart <br>";
                     // continue to update the checkoutcarts
                     $queryfinalizecheckoutcart = "UPDATE `checkoutcarts` SET `pickupstat`='COMPLETE' WHERE `cartname`='$currentcart'";
                     if($queryfinalizecheckoutcart_run = mysqli_query($conn, $queryfinalizecheckoutcart)){
                         // incomplete cart is now officially complete
                         echo " (update funct) Incomplete cart successfully delivered<br>";
                         // now update the time in the autotest
                         // $querycheckoutcartupdateinco = "UPDATE ``";
                     }else{
                       die("Error");
                     }

                   }else{
                     // cart is from incomplete cart delivery
                     // die("Incomplete");
                     //TODO DIE() FUNCTIONS ARE BEHAVING WEIRDLY IN CUTTING LOOPS SHORT
                     // echo "$currentcart<br>";
                   }
                 }else{
                   // die("Error2");
                   // echo "not correct $currentcart<br>";
                 }
               }else{
                 die("Error");
               }
           }else{
             die("Error");
           }


         }
       }else{
         // there are no carts
         die("Error");
       }
    }else{
      // ran into an error
      die("Error");
    }

  }

}


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
