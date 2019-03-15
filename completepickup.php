<?php
ob_start();
session_start();
require 'connect.php';
// this code will finalize the complete pickup process by the agent
$staff = $_SESSION['$staff'];
$pickupday = Date('Y-m-d H:i:s');
// TODO CHECK TO CONFIRM NO TAMPERING HAS BEEN DONE WITH THE AGENT NAME ... IT SHOULD MATCH ON IN THE LEAST USE THE NAME FROM THIS SIDE INSTEAD
//TODO WHAT OF THE OTHER AGENT PICKUP ITEM?

// TODO GET THE STAFF TIIVANICK NAME TO BE CHANGED TO ACTUAL NAME
$querystaff = "SELECT * FROM `staff` WHERE `id`='$staff'";
$querystaff_run = mysqli_query($conn, $querystaff);
$querystaff_row = mysqli_fetch_assoc($querystaff_run);
$agent =  $querystaff_row['tiivanick'];
// START OF TRIAL VARIABLES
// $otheragent = 'otheragent';
// $pickupmode = 'pickup';
// $handoverperp = 'MERCHANT';
// $name = 'Wachira Canadian Bantu';
// $idno = '3021349';
// $paymentmode = 'WEEKLY';
// $sign = '1';
// $agenttype = 'AGENT';
// $itemno = 'M45';
// $cartname = 'dfasdf';

// END OF TRIAL VARIABLES
// echo $staff;

if(isset($_POST['pickupmode']) && isset($_POST['agent']) && isset($_POST['handoverperp']) && isset($_POST['name']) && isset($_POST['idno']) && isset($_POST['paymentmode'])
&& isset($_POST['sign']) && isset($_POST['itemno']) && isset($_POST['cartname'])){
  // all variables are set xcept date
    $pickupmode = $_POST['pickupmode'];
    $agent = $_POST['agent'];
    $handoverperp = $_POST['handoverperp'];
    $name = $_POST['name'];
    $idno = $_POST['idno'];
    $paymentmode = $_POST['paymentmode'];
    $sign = $_POST['sign'];
    $itemno = $_POST['itemno'];
    $cartname = $_POST['cartname'];
    if(isset($_POST['agenttype'])){
      $agenttype = $_POST['agenttype'];
    }
    //TODO work out the agenttype
    if(!empty($pickupmode) && !empty($agent) && !empty($handoverperp) && !empty($name) && !empty($idno) && !empty($paymentmode) && !empty($sign) && !empty($itemno) && !empty($cartname)){
        // THE CODE FALLS IN HERE

        if($pickupmode == 'pickup'){
                // pickup
                // agent can be other sooo..
                if($agenttype == 'AGENT'){
                  $agentfinal = $agent;
                  $otheragent = '';
                }elseif($agenttype == 'OTHERAGENT'){
                  $agentfinal = '';
                  $otheragent = $agent;
                }else{
                  // nothn
                  die("Error");
                }
                $querypickup = "UPDATE `pickupds` SET `agent`='$agentfinal', `otheragent`='$otheragent', `pickupmode`='$pickupmode', `date`='$pickupday',
                 `handoverperp`='$handoverperp', `name`='$name', `idnumber`='$idno', `paymentmode`='$paymentmode', `sign`='$sign' WHERE `item`='$itemno' AND `cart`='$cartname' AND `sign`='0'";
                 // echo "<br>went with pickup<br>";
                //  echo $agentfinal.'1 '.$otheragent.'2 '.$pickupmode.'3 '.$pickupday.'4 '.$handoverperp.'5 '.$name.'6 '.$idno.'7 '.$paymentmode.'8 '.$sign.'9 '.$itemno.'10 '.$cartname;
        }elseif($pickupmode == 'self'){
                // self
                $querypickup = "UPDATE `pickupds` SET `agent`='$agent', `otheragent`='', `pickupmode`='$pickupmode', `date`='$pickupday',
                 `handoverperp`='$handoverperp', `name`='$name', `idnumber`='$idno', `paymentmode`='$paymentmode', `sign`='$sign' WHERE `item`='$itemno' AND `cart`='$cartname' AND `sign`='0'";
                 // echo "<br>went with self<br>";
                //  echo $agent.'1 '.$pickupmode.'2 '.$pickupday.'3 '.$handoverperp.'4 '.$name.'5 '.$idno.'6 '.$paymentmode.'7 '.$sign.'8 '.$itemno.'9 '.$cartname;
        }else{
          // nothing
        }
        if($querypickup_run = mysqli_query($conn, $querypickup)){
          // item has been updated
          // echo "Item $itemno from cartnumber $cartname pickup successful. It is now registered successfully in Transit";
          echo 1;
          // echo "  <div class=\"row\" style=\"position:absolute;z-index:19;margin-top:20%;\">
          //       <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
          //           <div class=\"alert alert-success\">
          //             <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
          //               <strong>Success!</strong>$itname has successfully been uploaded. You can view all your items status in your account.
          //           </div>
          //       </div>
          //   </div>";
        }else{
          // item has not been updated ran into an error
          echo "Item pick up ran into an error.";
        }
    }else{
      die("Sorry something's a miss");
    }
}else{
  die("Sorry Error bruv");
}


// VARIABLES REQUIRED
// AGENT, OTHER AGENT, PICKUPMODE, DATE, HANDOVERPERP, NAME, IDNUMBER, PAYMENTMODE, SIGN

// FIRST GET THE CART ID AND THE ITEM ID
// 2. GET THE PICK UP CHOICE
// 3. GET THE AGENT PICKING UP // THIS SHOULDN'T BE SENT OVER JUST TAKE THE SESSION ID
// 4. A. GET THE PERSON DELIVERING options
//    B. GET THE PERSON DELIVERING'S NAME
//    C. GET THEIR ID NUMBER
//    D. GET THEIR PAYMENT MODE
//    E. GET THEIR CONSENT
// OTHER OPTION IS GET THE SELF DELIVERY OPTION
//  2. GET THE CENTER AGENT RECEIVING
//  3. GET THE PERSON DELIVERING
//  4. GET THE HANDOVER'S NAME
//  5. GET THE ID NUMBER
//  6. GET THE PAYMENT MODE
//  7. GET TEHIR CONSENT





































?>
