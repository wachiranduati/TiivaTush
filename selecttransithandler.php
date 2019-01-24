<?php
ob_start();
session_start();
require 'connect.php';
// the snippet checks for ther user id against the provided
// check user id to confirm its correct
// first check whether this user is a logged in staff
if(isset($_SESSION['$staff'])){
  // proceed
  // check whether new handler id is set
  // echo "<script>
  //   alert(\"yikes it worked\");
  // </script>";
  if(isset($_POST['handlerid'])){
    //continue
    $handler = $_POST['handlerid'];
    if(!empty($handler)){
      //continue
      // query the staff table
      $querystaff = "SELECT * FROM `staff` WHERE `id`='$handler'";
      $querystaff_run = mysql_query($querystaff);
      $querystaff_num = mysql_num_rows($querystaff_run);
      if($querystaff_num == 1){
        //continue
        // return the staffs name in the new input
        $querystaff_row = mysql_fetch_assoc($querystaff_run);
        $staffname = $querystaff_row['tiivanick'];
        //TODO AUTOMATE THE EXCHANGE CENTER TOO...LATER
        echo "
        <form>
          <div class=\"col-lg-9 col-md-9 col-sm-9 col-xs-9\">
            <label for=\"email\">Agent:<small>This is automated should indicate the agent picking up</small></label>
            <input type=\"text\" value=\"$staffname\" readonly name=\"newhandler\" class=\"form-control\" id=\"newhandler\">

          </div>
          <div class=\"col-lg-9 col-md-9 col-sm-9 col-xs-9\" style=\"margin-top:2%;\">
            <label for=\"email\">Exchange location:<small>e.g Nakuru</small></label>
            <input type=\"text\" placeholder=\"please input the exchange location\" name=\"exchlocation\" class=\"form-control\" id=\"exchlocation\">

          </div>
          <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"margin-top:2%;\">
              <label class=\"radio-inline\"><input type=\"radio\" class=\"handlopt\" checked title=\"<h3>Single Item handover</h3><p>select this option when your handing over 1 item</p>\" id=\"option1\" value=\"single\" name=\"Option\">Single item</label>
              <label class=\"radio-inline\"><input type=\"radio\" class=\"handlopt\" title=\"<h3>Multiple Items handover</h3><p>select this option when handing over more than 1 item</p>\" id=\"option2\" value=\"multi\" name=\"Option\">Multiple items</label>
          </div>
          <div class=\"row\">
            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\"></div>
            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                <a class=\"btn btn-primary\" id=\"clickerme\">Complete transaction to $staffname</a>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\"></div>
          </div>
        </form>
            ";

      }elseif($querystaff_num < 1){
        // its less than one, therefore equals to one
        // no one by that name
        die("Error, something is wrong");
      }elseif(($querystaff_num > 1)){
        // its more than one, thefore more than one
        // someone fishing here
        die("Error, your account will be locked if you fail 2 more times");
        // TODO UPDATE CODE TO ACCOUNT FOR THIS ENABLING THE BLOCKING MECHANISM
      }

    }else{
      // die
    }
  }else{
    //die
    die("Error");
  }
}else{
  // staff not logged in
  die("Error");
  //TODO REDIRECT HIM TOO
}



















?>
