<?php
session_start();
ob_start();
require 'connect.php';
//TODO TO NOFIFY THE SELECT USER TO PICK UP ITEM
// TODO TO hide the items that have been prompted//think about this here
// this script will put out an alert usig function where by
//TODO ONLY PEOPLE WHO ACTUALLY ARE THE CURRENT HANDLERS CAN PROMPT
// TODO ONLY SHOW ITEMS THAT ARE BEING HELD BY THE CURRENT HANDLER
// itll create a row notifying the new handler that someone wants to pass deliveries to him
// he will then have the option to accept or deny
// if he accepts the record si cleared/ the row is deleted and transit info updated with his details
// he will then be advised to physically take the item
// if he declines then the row will persist serving as a record
// the signature will decide on which row stays and which is deleted
// the deleting row function will be called automatically before all prompt functions
//TODO YOU MAY INCLUDE THE DELETE FUNCTIONS ON THE AUTOTEST

function createprompt(){

  if(isset($_POST['itemid']) && isset($_POST['cartname']) && isset($_POST['location']) && isset($_POST['handler']) && isset($_POST['handlerid'])){


    $loggedstaff = $_SESSION['$staff'];
    $querystaff = "SELECT * FROM `staff` WHERE `id`='$loggedstaff'";
    $querystaff_run = mysql_query($querystaff);
    if($querystaff_row = mysql_fetch_assoc($querystaff_run)){
      //first get the staff name
      $staffnick = $querystaff_row['tiivanick'];
    }
    // continue
    $datetime = Date("Y-m-d H:i:s");
    $itemid = $_POST['itemid'];
    $cartname = $_POST['cartname'];
    $location = $_POST['location'];
    $handler = $_POST['handler'];
    $handlerid = $_POST['handlerid'];
    $exchcenter = 'Naivasha';

    if($loggedstaff != $handlerid){
      //not the same person picking up so continue
      if(!empty($itemid) && !empty($cartname) && !empty($location) && !empty($handler) && !empty($handlerid)){
        //TODO GET THE RECEIVERS EXCHCENTER

        // first check whether the same item from the same cart exists before inserting
        $queryrowcheck = "SELECT * FROM `transitprompt` WHERE `itemid`='$itemid' AND `cartname`='$cartname'";
        $queryrowcheck_run = mysql_query($queryrowcheck);
        $queryrowcheck_num = mysql_num_rows($queryrowcheck_run);
        if($queryrowcheck_num == 0){
          // no other accoutn of it so proceed
          // SINCE THERE ARE MTUSH AND SHOP ITEMS THAT RULE IS FLAWED. WORK IT OUT
          // SHOP ITEMS can occur in multiples hence we include filter for the cart too
          // insert row for the new prompt
          // but first filter the agent id| query his name instead and move on
          // id should check out to name
          $queryfilterstaffname = "SELECT * FROM `staff` WHERE `id`='$handlerid' AND `tiivanick`='$handler'";
          $queryfilterstaffname_run = mysql_query($queryfilterstaffname);
          $queryfilterstaffname_num = mysql_num_rows($queryfilterstaffname_run);
          if($queryfilterstaffname_num == 1){
            // theres only one result which is okay, proceed. there shouldnt exhist most than one row
            // insert row
            $querypromptinsert = "INSERT INTO `transitprompt` (`id`,`itemid`,`cartname`,`hdlfrom`,`exchlocs`,`hdlto`,`exchtime`,`exchcenter`,`sign`)
            VALUES ('','$itemid','$cartname','$staffnick','$location','$handler','$datetime','$exchcenter','0')";
            if($querypromptinsert_run = mysql_query($querypromptinsert)){
              //it runs...proceed
              echo "prompt has been submitted";
            }else{
              // do not proceed
            }

          }else{
            //die
            die("Error3");
          }


        }else{
          die("Prompt was already submitted");
        }

      }else{
        die('Error2');
      }
    }else{
      //tried to pick up an item you currently are already handling
      die("Error.You already have the item you tried to pick up");
    }

  }else{
    die("Error1");
  }


}


// look for my prompts
//TODO TO HELP THE CURRENT HANDLER OBSERVE PROMPTS...SHOW PROMPTS HE HAS SENT OUT TOO
//TODO DELETE A ROW AFTER THE SIGN IS 1 AFTER VERRY WELL UPDATING THE INFO IN THE ACTUAL TRANSIT DATA...IT SHOULD RUN AS MANY TIMES AS possible
function showmyprompts(){
  // script below is going to return a list with live prompts to the current user
  // so i basically want to pick up these items
  // this are prompts sent out to me
  $loggedstaff = $_SESSION['$staff'];
  $querystaff = "SELECT * FROM `staff` WHERE `id`='$loggedstaff'";
  $querystaff_run = mysql_query($querystaff);
  if($querystaff_row = mysql_fetch_assoc($querystaff_run)){
    //first get the staff name
    $staffnick = $querystaff_row['tiivanick'];
    // query the prompt dbs to find a row that matches my name
    //the table begins here
    echo "<h3>My Live Prompts <small>(Items I want to pick up)</small></h3>";
    echo "<div class=\"table-responsive\">
      <table class=\"table\">
          <thead>
            <tr>
                <th>No</th>
                <th>Cartname</th>
                <th>Exchlocs</th>
                <th>HandlerFrom</th>
                <th>Prompttime</th>
                <th>Exchcenter</th>
                <th>Accept/Decline</th>

            </tr>
          </thead><tbody>";
    //the table ends here
    $queryprompthandler = "SELECT * FROM  `transitprompt` WHERE `hdlto`='$staffnick' AND `sign`='0'";
    $queryprompthandler_run = mysql_query($queryprompthandler);
    $queryprompthandler_num = mysql_num_rows($queryprompthandler_run);

    if($queryprompthandler_num == 0){
      //empty so show no thing in the table
      echo "<tr>
              <td colspan=\"7\"><h4 class=\"text-center\">No prompts Sent out</h4></td>
            </tr>";
    }else{
      // continue on with the while loop
      while ($queryprompthandler_row = mysql_fetch_assoc($queryprompthandler_run)) {
        //TODO INCLUDE THE ITEM ID FROM TRANSITDBS FOR EASIER COMPARISON
        $no = '#';
        $id = $queryprompthandler_row['id'];
        $cartname = $queryprompthandler_row['cartname'];
        $exchlocs = $queryprompthandler_row['exchlocs'];
        $handlers = $queryprompthandler_row['hdlfrom'];
        $exchtime = $queryprompthandler_row['exchtime'];
        $exchcenter = $queryprompthandler_row['exchcenter'];
        //TODO in handlers find the previous handler you feel me
        //TODO ONLY ALLOW ITEMS HANDOVER TO ACTUAL AGENTS HEADED IN THE DIRECTION REQUIRED BY THE

        echo "<tr>
                  <td>$no</td>
                  <td>$cartname</td>
                  <td>$exchlocs</td>
                  <td>$handlers</td>
                  <td>$exchtime</td>
                  <td>$exchcenter</td>
                  <td><a class=\"btn btn-primary btn-sm accepthandover\" data-id=\"$id\">Accept</a>&nbsp;<a class=\"btn btn-danger btn-sm declinehandover\" data-id=\"$id\">Decline</a></td>
              </tr>";

        //TODO LATER INCLUDE PHOTOS TO AGENT PROFILES FOR EASIER EXCHANGE....A TOOLTIP WITH AN IMAGE OF THE CURRENT HANDLER
      }
    }


    echo "</tbody>
            </table>
            </div>";

  }else{
    die("Error");
  }

}

function showmysentprompts(){
  //script shows prompts sent out by me
  $loggedstaff = $_SESSION['$staff'];
  $querystaff = "SELECT * FROM `staff` WHERE `id`='$loggedstaff'";
  $querystaff_run = mysql_query($querystaff);
  if($querystaff_row = mysql_fetch_assoc($querystaff_run)){
    //first get the staff name
    $staffnick = $querystaff_row['tiivanick'];
    // query the prompt dbs to find a row that matches my name
    //the table begins here
    echo "<h3>Live Prompts I've Sent Out <small>(Items I am handing out)</small></h3>";
    echo "<div class=\"table-responsive\">
      <table class=\"table\">
          <thead>
            <tr>
                <th>No</th>
                <th>Cartname</th>
                <th>Exchlocs</th>
                <th>HandlerTo</th>
                <th>Prompttime</th>
                <th>Exchcenter</th>
                <th>Accept/Decline</th>

            </tr>
          </thead><tbody>";
    //the table ends here
    $queryprompthandler = "SELECT * FROM  `transitprompt` WHERE `hdlfrom`='$staffnick' AND `sign`='0'";
    $queryprompthandler_run = mysql_query($queryprompthandler);
    $queryprompthandler_num = mysql_num_rows($queryprompthandler_run);
    if($queryprompthandler_num == 0){
      // no prompts sent out to me
      echo "<tr>
              <td colspan=\"7\"><h4 class=\"text-center\">No prompts Sent To Me</h4></td>
            </tr>";
    }else{
      // there are prompts sent out to me
      while ($queryprompthandler_row = mysql_fetch_assoc($queryprompthandler_run)) {
        //TODO INCLUDE THE ITEM ID FROM TRANSITDBS FOR EASIER COMPARISON
        $no = '#';
        $id = $queryprompthandler_row['id'];
        $cartname = $queryprompthandler_row['cartname'];
        $exchlocs = $queryprompthandler_row['exchlocs'];
        $handlers = $queryprompthandler_row['hdlto'];
        $exchtime = $queryprompthandler_row['exchtime'];
        $exchcenter = $queryprompthandler_row['exchcenter'];
        //TODO in handlers find the previous handler you feel me
        //TODO ONLY ALLOW ITEMS HANDOVER TO ACTUAL AGENTS HEADED IN THE DIRECTION REQUIRED BY THE

        echo "<tr>
                  <td>$no</td>
                  <td>$cartname</td>
                  <td>$exchlocs</td>
                  <td>$handlers</td>
                  <td>$exchtime</td>
                  <td>$exchcenter</td>
                  <td><a class=\"btn btn-danger btn-sm delmyprompt\" data-id=\"$id\">Delete</a></td>
              </tr>";

        //TODO LATER INCLUDE PHOTOS TO AGENT PROFILES FOR EASIER EXCHANGE....A TOOLTIP WITH AN IMAGE OF THE CURRENT HANDLER
      }
    }


    echo "</tbody>
            </table>
            </div>";

  }else{
    die("Error");
  }

}

//TODO DELETE PROMPT TO HANDLER - TO PICK UP
// TODO DELETE PROMPT BY HANDLER = TO SEND OUT
function confirmhandlerchange(){
  // script below will accept a prompt to pick up an item
  //first get the staffs name
  // then check his name against the particular item
  // then conduct the necessary step

  if(isset($_POST['itemid'])){
    //continue
    $itemid = $_POST['itemid'];
    $loggedstaff = $_SESSION['$staff'];
    $querystaff = "SELECT * FROM `staff` WHERE `id`='$loggedstaff'";
    $querystaff_run = mysql_query($querystaff);
    if($querystaff_row = mysql_fetch_assoc($querystaff_run)){
      //first get the staff name
      $staffnick = $querystaff_row['tiivanick'];
      $staffcenter = $querystaff_row['tiivacenter'];
    }
    //check whether the item actually exhists
    $querypromptaccept = "SELECT * FROM `transitprompt` WHERE `id`='$itemid' AND `hdlto`='$staffnick'";
    $querypromptaccept_run = mysql_query($querypromptaccept);
    $querypromptaccept_num = mysql_num_rows($querypromptaccept_run);
    if($querypromptaccept_num == 1){
      $querypromptaccept_row = mysql_fetch_assoc($querypromptaccept_run);
      $cartname = $querypromptaccept_row['cartname'];
      $item = $querypromptaccept_row['itemid'];
      $exchlocs = $querypromptaccept_row['exchlocs'];
      $hdlto = $querypromptaccept_row['hdlto'];
      $exchtime = $querypromptaccept_row['exchtime'];
      $exchcenter = $querypromptaccept_row['exchcenter'];

      //continue
      // also update the information on the transitdbs with current handler, exchdattimes, exchcenters and exchlocs
      // but first change the sign on current row to indicate approval/acceptance of pickup
      // also echo the final result commanding the handler to physically pick up the item now
      // $queryacceptprompt = "UPDATE `transitprompt` SET `sign`='1' WHERE `id`='$itemid'";
      $queryacceptprompt = "UPDATE `transitprompt` SET `sign`='0' WHERE `id`='$itemid'";
      if($queryacceptprompt_run = mysql_query($queryacceptprompt)){
        //continue
        //TODO LOG THE DELETES IN A TEXT FILE FOR SUPER USER TO REVIEW IS ORAIT
        //update the transitdbs thingy
        //first get the id of our row
        $queryacceptrowid = "SELECT * FROM `pickupds` WHERE `item`='$item' AND `cart`='$cartname'";
        $queryacceptrowid_run = mysql_query($queryacceptrowid);
        $queryacceptrowid_num = mysql_num_rows($queryacceptrowid_run);
        if($queryacceptrowid_num == 1){
          // retrieve the row id and continue to transitdbs
            $queryacceptrowid_row = mysql_fetch_assoc($queryacceptrowid_run);
            $rowid = $queryacceptrowid_row['id'];
            $queryupdatetransitinfo = "SELECT * FROM `transitdbs` WHERE `itemid`='$rowid'";
            $queryupdatetransitinfo_run = mysql_query($queryupdatetransitinfo);
            if($queryupdatetransitinfo_row = mysql_fetch_assoc($queryupdatetransitinfo_run)){
              //continue by retrieving some part of the items to be updated
              $oldexchlocs = $queryupdatetransitinfo_row['exchlocs'];
              $oldhandlers = $queryupdatetransitinfo_row['handlers'];
              $oldexchdattimes = $queryupdatetransitinfo_row['exchdattimes'];
              $oldexchcenters = $queryupdatetransitinfo_row['exchcenters'];
              //turn them to arrays and push new values to them.....then implode to string and update as new
              $oldexchlocsarray = explode(',',$oldexchlocs);
              $oldhandlersarray = explode(',',$oldhandlers);
              $oldexchdattimesarray = explode(',',$oldexchdattimes);
              $oldexchcentersarray = explode(',',$oldexchcenters);
              //push new info
              array_push($oldexchlocsarray,$exchlocs);
              array_push($oldhandlersarray,$hdlto);
              array_push($oldexchdattimesarray,$exchtime);
              array_push($oldexchcentersarray,$exchcenter);
              //convert arrays to strings
              $newexchlocs = implode(',',$oldexchlocsarray);
              $newhandlers = implode(',',$oldhandlersarray);
              $newexchdattimes = implode(',',$oldexchdattimesarray);
              $newexchcenters = implode(',',$oldexchcentersarray);
              //update transitdbs
              $queryupdatefinal = "UPDATE `transitdbs` SET `exchlocs`='$newexchlocs', `handlers`='$newhandlers', `exchdattimes`='$newexchdattimes',
              `exchcenters`='$newexchcenters' WHERE `itemid`='$rowid' AND `cartname`='$cartname'";
              if($queryupdatefinal_run = mysql_query($queryupdatefinal)){
                // delete the record from the transitprompt dbs
                $querydeleterecord = "DELETE FROM `transitprompt` WHERE `id`='$itemid'";
                if($querydeleterecord_run = mysql_query($querydeleterecord)){
                  //update complete
                  echo "Database updated item from cart $cartname should now be physically in your custody";
                }else{
                  die("Error6");
                }
              }else{
                // die("Error5");
                echo mysql_error();
              }

            }else{
              //error so die off
              die("Error4");
            }

        }else{
          //stop
          die("Error3");
        }
      }else{
        //error
        die();
      }
    }else{
      //die
      die("Error2!!");
    }

  }else{
    die("Error1");
  }


}
// TODO DELETE PROMPTS THAT ARE NOT SIGNED ON AFTER 6 HRS

//SAVE THIS LATER*****************88888888888

if(isset($_POST['cr_ts'])){
  createprompt();
}elseif(isset($_POST['myprompts'])){
  showmyprompts();
}elseif(isset($_POST['sentoutprompts'])){
  showmysentprompts();
}elseif(isset($_POST['accepthandover'])){
  confirmhandlerchange();
}elseif(isset($_POST['declinehandover'])){
  declinehandlerchange();
}elseif(isset($_POST['deleteprompt'])){
  deleteprompt();
}else{
  die('Error235');
}

//SAVE THIS LATER*******************************88

function declinehandlerchange(){
  //script below will decline a prompt
  //decline by new handler...response to a prompt sent to him/her
  if(isset($_POST['itemid'])){
    $id = $_POST['itemid'];
    if(!empty($id)){
      //continue
      $loggedstaff = $_SESSION['$staff'];
      $querystaff = "SELECT * FROM `staff` WHERE `id`='$loggedstaff'";
      $querystaff_run = mysql_query($querystaff);
      if($querystaff_row = mysql_fetch_assoc($querystaff_run)){
        //first get the staff name
        $staffnick = $querystaff_row['tiivanick'];
        $staffcenter = $querystaff_row['tiivacenter'];
      // check whether row addressed to this user exists then proceed to delete row
        $queryrowexist = "SELECT * FROM `transitprompt` WHERE `id`='$id' AND `hdlto`='$staffnick' AND `sign`='0'";
        $queryrowexist_run = mysql_query($queryrowexist);
        if($queryrowexist_num = mysql_num_rows($queryrowexist_run)){
          $queryrowexist_row = mysql_fetch_assoc($queryrowexist_run);
          //continue
          //delete
          $querydeleteprompt = "DELETE FROM `transitprompt` WHERE  `id`='$id' AND `hdlto`='$staffnick' AND `sign`='0'";
          if($querydeleteprompt_run = mysql_query($querydeleteprompt)){
            // successfully deleted
            echo "prompt successfully declined";
          }else{
            // error
            die("Error5");
          }
        }else{
          // row does not exist
          die("Error4");
        }
      }else{
        //staff does not exist
        die("Error3");
      }
    }else{
      die("Error2");
    }
  }else{
    die("Error1");
  }
}

function deleteprompt(){
  //script below will decline a prompt
  //decline by new handler...response to a prompt sent to him/her
  if(isset($_POST['itemid'])){
    $id = $_POST['itemid'];
    if(!empty($id)){
      //continue
      $loggedstaff = $_SESSION['$staff'];
      $querystaff = "SELECT * FROM `staff` WHERE `id`='$loggedstaff'";
      $querystaff_run = mysql_query($querystaff);
      if($querystaff_row = mysql_fetch_assoc($querystaff_run)){
        //first get the staff name
        $staffnick = $querystaff_row['tiivanick'];
        $staffcenter = $querystaff_row['tiivacenter'];
      // check whether row addressed to this user exists then proceed to delete row
        $queryrowexist = "SELECT * FROM `transitprompt` WHERE `id`='$id' AND `hdlfrom`='$staffnick' AND `sign`='0'";
        $queryrowexist_run = mysql_query($queryrowexist);
        if($queryrowexist_num = mysql_num_rows($queryrowexist_run)){
          $queryrowexist_row = mysql_fetch_assoc($queryrowexist_run);
          //continue
          //delete
          $querydeleteprompt = "DELETE FROM `transitprompt` WHERE  `id`='$id' AND `hdlfrom`='$staffnick' AND `sign`='0'";
          if($querydeleteprompt_run = mysql_query($querydeleteprompt)){
            // successfully deleted
            echo "handover prompt has been deleted";
          }else{
            // error
            die("Error5");
          }
        }else{
          // row does not exist
          die("Error4");
        }
      }else{
        //staff does not exist
        die("Error3");
      }
    }else{
      die("Error2");
    }
  }else{
    die("Error1");
  }
}



























?>
