<?php
ob_start();
session_start();
require 'connect.php';
require 'utils/adminutils.php';

function completecartatdestination($conn){
  // Actually rewrite the original one on center finaldeliver....it is actually the right one..
  // make the upper show for complete carts
  // lower reach for incomplete carts purely
  // dont show duplicates i.e if the complete cart shouldnt show up in incomplete carts
  // also only show items / carts in possession of the current handler
  // This checks to see whether cart items have been delivered and updates checkout cart to complete
  // first check whether 5 minutes have elapsed since all the incomplete carts delivery were checked
  // retrieve the last time on the incomplete row
  $tiivaNick = getStaffName($conn);
    // retrieve all undelivered carts
    $incompleteCarts = getUnUpdatedCarts($conn, 1);
    // retrieve all delivered items from transitdb from incomplete carts...dstatus = 1
    $comCarts = array(); // complete carts empty array
    $incomCarts = array(); // incomplete carts empty array

    if($incompleteCarts != 0){
      for($x = 0; $x < count($incompleteCarts); $x++){
        $cartname = $incompleteCarts[$x]['cartname'];
        $cartTransitItem = getTransitItemsDstatusPerCart($conn, $cartname, 0);// 1 deliverd 0 not delivered
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
            // return the complete carts
            array_push($comCarts, $cartname); // add the complete cart to the incomplete carts array
          }else{
            // cart is not complete
            // return the incomplete carts
            array_push($incomCarts, $cartname); // add the incomplete cart to the incomplete carts array
          }
        }

      }
      //print_r($comCarts);
      //print_r($incomCarts);
      //getTransitItemsDstatusPerCart($conn, $cartname, $dstatus)
      // maybe now refine to items i currently hold
      // COMPLETE CARTS
      echo "
  <div class=\"row\" style=\"background-color:white;font-family:kok;\">
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
    <h3 class=\"text-center text-capitalize\">Complete Cart Delivery (<small>These are complete carts in my possession</small>)</h3>
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
            <th>content</th>
            <th>Action</th>
        </tr>
      </thead>
      <tbody>
      ";
      if(count($comCarts) != 0){
        // proceed to loop throught all the complete cart items in transit
        // echo count($comCarts);
        // print_r($comCarts);
        for($y = 0; $y < count($comCarts); $y++){
          $mycompCarts = $comCarts[$y];
          $cartitems = getTransitItemsDstatusPerCart($conn, $mycompCarts, 0);
          // print_r($cartitems);
          // return carts which I currently hold
          // loop throught cart items and check handler state
          if(count($cartitems) != 0){
            // check whether currently handler is mwah
            // echo count($cartitems);
            $comstate = True;
            for($a = 0; $a < count($cartitems); $a++){
              // loop throught all the items in a single cart row
              // $ItemsCartState = True;
              $handlers = $cartitems[$a]['handlers'];
              $currentHandler = retrieveFinalItemInCommadString($handlers);
              // print_r($cartitems[$a]);
              // echo $currentHandler;
              // echo $tiivaNick;
              if($currentHandler == $tiivaNick){
                // echo "I'm currently holding this";
                // echo $cartitems[$a]['cartname'].' holding <br>';
              }else{
                // I currently don't hold this item
                // $ItemsCartState = False;
                // remove this cart form comCarts
                // unset($comCarts[$y]);
                // echo $cartitems[$a]['cartname'].' not holding <br>';
                $comstate = False;// we used this since we're looping in the cartitems
                // unsetting from in here would happen twice and thats an error trying to unset an item that was already unset

              }
            }
            if($comstate == False){
              // remove this cart from the cart list
              unset($comCarts[$y]);
            }

          }
        }
        // now return the cart stats// loop througth the new array
        // print_r($comCarts);
        $comCarts = array_values($comCarts);// reindex the array
        // print_r($comCarts);
        for($comp = 0; $comp < count($comCarts); $comp++){
          $currentComCart = $comCarts[$comp];
          $cartTransitDets = retrieveTransitDetailsPerCart($conn, $currentComCart);
          if($cartTransitDets != 0){
            // proceed
            // print_r($cartTransitDets);
                // retrieve destination, deadline, shiptye, 
            $handlers = $cartTransitDets['handlers'];
            $currentHandler = retrieveFinalItemInCommadString($handlers);
            // echo $currentHandler;
            // echo $tiivaNick;
            if($currentHandler == $tiivaNick){
              $centredestination = $cartTransitDets['centredestination'];
              $deadline = $cartTransitDets['deadline'];
              $shiptype = $cartTransitDets['shiptype'];
              $numbering = ceil($comp+1);
              $cartRows = retrieveSingleCartsContents($conn, $currentComCart);
              $items = loopArrayRetrieveItemids($cartRows, 'itemid');

                  echo "
                      <tr>
                          <td>$numbering</td>
                          <td>$currentComCart</td>";
                      echo "
                            <td>$centredestination</td>
                            <td>$currentHandler</td>
                            <td>$deadline</td>
                            <td>$shiptype</td>
                            <td>$items</td>
                            <td><a data-cart=\"$currentComCart\" class=\"btn btn-success btn-sm btncomplt\">Deliver</a></td>
                        </tr>
                      ";
            }
            
                
          }
        }

      }else{
        echo showHeaderMessage("h3", "There are no complete carts at the moment");
      }
      // final table body for the complete carts
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
      // THE INCOMPLETE CARTS START HERE
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
      if(count($incomCarts) != 0){
        // print_r($incomCarts);
        $incocount = 0;
        // we now have all the incomplete carts available
        // now simply retrieve all the cart items that are in our possession
        for($h = 0; $h < count($incomCarts); $h++){
          $myincompCarts = $incomCarts[$h];
          $incompCartitems = getTransitItemsDstatusPerCart($conn, $myincompCarts, 0);
          // print_r($incompCartitems);
          // loop through the items returned
          for($incoItems = 0; $incoItems < count($incompCartitems); $incoItems++){
            $cartIncoItemCurrentLoop = $incompCartitems[$incoItems];// single item from the cart
            // print_r($cartIncoItemCurrentLoop);
            // retrieve the handler
            $incohandlers = $cartIncoItemCurrentLoop['handlers'];// retrieve handlers form teh incomplete carts
            $currenincotHandler = retrieveFinalItemInCommadString($incohandlers);// the current handler
            if($currenincotHandler == $tiivaNick){
              $incocount++;
              //current user has this item in his possession
              // echo "we have this item";
              // return the items here
              // retrieve transitid, deadline, shiptype, centerdestination, 
              $centerdestination = $cartIncoItemCurrentLoop['centredestination'];
              $deadline = $cartIncoItemCurrentLoop['deadline'];
              $shiptype = $cartIncoItemCurrentLoop['shiptype'];
              $transitid = $cartIncoItemCurrentLoop['itemid'];
              echo "
                  <tr>
                      <td>$incocount</td>
                      <td>$myincompCarts</td>";

                  echo "
                      <td>$centerdestination</td>
                      <td>$currenincotHandler</td>
                      <td>$deadline</td>
                      <td>$shiptype</td>
                      <td>$transitid</td>
                      <td><a data-incitem=\"$transitid\" data-inccart=\"$myincompCarts\" class=\"btn btn-primary btn-sm btnincomplete\">Deliver</a></td>
                  </tr>
                ";
            }else{
              //this item is with a different handler
              // echo "we dont have this item";
            }

          }
        }
      }else{
        // empty no incomplete carts
        echo showHeaderMessage("h3", "There are no complete carts at the moment");
      }
      // closing tags for the incomplete carts
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
    }
}
  

echo completecartatdestination($conn);

?>