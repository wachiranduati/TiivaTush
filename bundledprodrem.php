<?php
ob_start();
session_start();
require 'connect.php';

//TODO script to show returns
//TODO USERS SCRIPT TO REQUEST RETURN OF ITEM
//TODO CREATE USER PRIVILEDGES FOR STAFF AND USERS

if(isset($_SESSION['$staff'])){
  // confirmed this is a staff member
  if(isset($_POST['state'])){
      $state = $_POST['state'];
      if($state == 'dw4sd'){
        // load all the items to review
        inspectitems($conn);
      }elseif($state == 'kdslow'){
        // flag the item
        flagitem($conn);
      }elseif($state == 'kosdl'){
        // unflag the item
        // echo "mwah is not here";
        unflagitem($conn);
      }elseif($state == 'k498sl'){
        // start search function
        // showreturncarts();
        showretcartcontentsincomplete($conn);
      }elseif($state == '4lksd'){
        // provide a to provide return details for complete carts
        //TODO REVIEW TWEAK THIS FUNCTION TO ONLY SHOW ITEMS THAT HAVE NOT SURPASSED THEIR RETURN DATE/DAYS....ELSE DISABLE THE CALL TO ACTION BUTTON
        showretcartcontentscmp($conn);
      }elseif($state == 'incomplete'){
        // retun incomplete cart form and the items details
        showincompleteproddetails($conn);
      }elseif($state == 'complete'){
        // return complete cart form and the item details
        showcompleteproddetails($conn);
      }elseif($state == 'exlsE'){
        // provide details for the incomplete carts
        //TODO REVIEW TWEAK THIS FUNCTION TO ONLY SHOW ITEMS THAT HAVE NOT SURPASSED THEIR RETURN DATE/DAYS....ELSE DISABLE THE CALL TO ACTION BUTTON
        showretcartcontentsincomplete($conn);
        //TODO FIRST SEE THIS REVIEW....TO ADD NEW ACTIONS FOR THE SEARCH DROP DOWN TO SHOW ITEM DETAILS...AND ALSO
      }elseif($state == 'reason'){
        // the return function to just add a new row to the database of returns7
        // TODO REVIEW ADD A TAG TO SHOW THE STAFF WHEN THE ITEM WAS DELIVERED SO TAHT THEY CAN EVALUATE THE ITEM itself
        // TO FIGURE OUT IF THE RETURN TIME HAS ALREADY EXPIRED TODO REVIEW
          returnproduct($conn);
      }else{
        // error
        die("Error4");
      }
  }else{
    echo "nada";
    //TODO KILL THE SCRIPT
    // TODO ADD THE ACTION FUNCTIONALITIES TO THE SCRIPTS IN THIS PAGE TO ADD......takedown product, Editors recommendation
  }
}else{
  die("I gatch you");
}

//TODO CODE TO REVIEW RETURNS.....WATCH THE ITEM AS IT TRAVELS BACK TO THE CLIENT
function returnproduct($conn){
  // script will add a new row to the return items database
  $today = Date("Y-m-d H:i:s");
  if(isset($_POST['reason']) && isset($_POST['rsnmessage']) && isset($_POST['product'])){
    $reason = $_POST['reason'];
    $message = $_POST['rsnmessage'];
    $product = $_POST['product'];
    if(!empty($reason) && !empty($message) && !empty($product)){
      // insert new row to dbs named returns, with id, productid, reason, dates
      // TODO ADD A SCRIPT TO CHANGE THE STATUS OF THE SELLERS FUNDS ACCOUNT AND ALSO THE CLIENTS ACCOUNT TO SHOW ITEM RETURNED
      $querycompltreturn = "INSERT INTO `returns` VALUES ('','$product','$reason','$message','$today')";
      if(mysqli_query($conn, $querycompltreturn)){
        echo "Item $item has been successfully marked for return. Merchant has been notified.";
      }else{
        die("Error");
      }

    }
    else{
      echo "something is empty";
    }
  }
  // TODO SECURE AND ALSO SHORTEN THE RETURN NUMBER TO BE PROVIDED FOR ITEM BEING RETURNED
  //  TODO ENABLE MERCHANT TO RESPOND TO ITEM RETURN MAYBE CHANCE HIM BEING ABLE TO COMMENT SAY LIKE A BIKE ...YOU NEED TO TAKE IT TO THE FUNDI FIRST
  // TODO ALSO UPDATE THE FORM IN WHICH ALERT IS SENT BACK AFTER SUCCESSFULLY SUBMITTING DATA....CUSTOMIZE FOR TIIVA MAYBE
  // TODO ENABLE AGENT RECEIVING LIKE A PROMPT TO COMMENT ON THE INITIAL SIGNS OF THE PACKAGE BEFORE SUBMITTING DATA
// TODO ADMIN REVIEW RETURN ITEMS LATER ON TO COMMENT ON THE ITEM AND POSSIBLY AVAIL IT AS ADMIN COMMENT TO MERCHANT
/// TODO AMIN REVIEW TO ENABLE COMMENT VISIBLE TO RETURNEE'S ACCOUNT ALSO ON ACTION TAKEN AND GIVE ABILITY FOR MERCHANT TO RESPOND/ ADMIN OVERSEE
// TODO REVIEW ADD A SNIPPET CODE USING PHPS DATE_ADD FUNCT TO TABULATE THE CHECK WHETHER RETURN DATE EXPIRY HAS ALREADY REACHED
}

function showincompleteproddetails($conn){
  //TODO REVIEW THIS WILL BE TWEAKED AT A LATER DATE TO IMPROVE PERFOMANCE
  // return item details.. and the form with the button set to return this particular item from incomplete cart
  if(isset($_POST['item'])){
    $item = $_POST['item'];
    if(!empty($item)){
      // echo "$item incomplete";
      $dbs = substr($item,0,1);
      $nurw = substr($item,1);
      // query the item from the correct product database
      if($dbs == 'M'){
        $table = 'products';
        $pagelink = "productdetails.php?id=";
        $imglnk = "mtumbauploads/compresseduploads/";
      }elseif($dbs == 'S'){
        $table = 'brandyproducts';
        $pagelink = "storeproduct.php?id=";
        $imglnk = "uploadproducts/compressedproducts/";
      }else{
        die("Error");
      }
      $queryactualproduct = "SELECT * FROM `$table` WHERE `id`='$nurw'";
      $queryactualproduct_run = mysqli_query($conn, $queryactualproduct);
      $queryactualproduct_num = mysqli_num_rows($queryactualproduct_run);
      if($queryactualproduct_num == 1){
        //continue
        if($queryprod_row = mysqli_fetch_assoc($queryactualproduct_run)){
          $imageone = $queryprod_row['imageone'];
          $imagetwo = $queryprod_row['imagetwo'];
          $imagethree = $queryprod_row['imagethree'];
          $itemtitle = $queryprod_row['itemtitle'];
          $price = $queryprod_row['price'];
          $label = $queryprod_row['label'];
          // $storename = $queryprod_row['storename'];
          // <img src=\"$imglnk$imageone\" style=\"max-height:40px;\"/>
          echo "<div class=\"row\">
              <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                <!-- maybe require the client to put in his/her password for the package to be visible -->
                <!-- TODO REVIEW ama staff to pass his/her password so that it is logged who worked on it? maybe -->
                <div class=\"row\">
                  <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                      <!-- first comes the product title -->
                      <div class=\"row\">
                          <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                              <h3 class=\"text-center text-capitalize\">$itemtitle</h3>
                          </div>
                      </div>
                      <!-- the main image centered -->
                      <div class=\"row\" style=\"margin-bottom:1%;\">
                          <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md\">
                            <img src=\"$imglnk$imagetwo\" class=\"img-responsive\"/>
                          </div>
                          <div class=\"col-lg-2 col-md-2 col-sm-1 col-xs-1 visible-sm visible-xs\"></div>
                          <div class=\"col-lg-8 col-md-8 col-sm-10 col-xs-10\">
                            <img src=\"$imglnk$imageone\" class=\"img-responsive\"/>
                          </div>
                          <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md\">
                              <img src=\"$imglnk$imagethree\" class=\"img-responsive\"/>
                          </div>
                          <div class=\"col-lg-2 col-md-2 col-sm-1 col-xs-1 visible-sm visible-xs\"></div>
                      </div>
                      <!-- the other two pages on the sides -->
                      <div class=\"row visible-sm visible-xs\">
                          <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                              <img src=\"$imglnk$imagetwo\" class=\"img-responsive\"/>
                          </div>
                          <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                              <img src=\"$imglnk$imagethree\" class=\"img-responsive\"/>
                          </div>
                      </div>
                      <!-- seller ratings price -->
                      <div class=\"row\">
                          <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\"><h4>Seller: Kamutula</h4></div>
                          <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                            <span class=\"mdi mdi-star-outline mdi-24px\"></span>
                            <span class=\"mdi mdi-star-outline mdi-24px\"></span>
                            <span class=\"mdi mdi-star-outline mdi-24px\"></span>
                            <span class=\"mdi mdi-star-outline mdi-24px\"></span>
                            <span class=\"mdi mdi-star-half mdi-24px\"></span>
                          </div>
                          <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\"><h4>Price: Ksh $price</h4></div>
                      </div>
                      <hr>
                      <!-- product details just a few words summary -->
                      <div class=\"row\">
                          <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"padding:10px;\">
                              <p class=\"text-left\">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                 ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                  laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                              </p>
                          </div>
                      </div>

                  </div>
                </div>
              </div>
              <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\" style=\"border-left:1px solid gainsboro;\">
                <form class=\"\">
                  <h3 class=\"text-center text-capitalize\" style=\"font-family:kok;text-decoration:underline;\">Product Return Form <small>($itemtitle)</small></h3>
                  <div class=\"\">
                    <label for=\"reason\">Reason For Return: </label>
                    <select class=\"form-control reason\" name=\"reason\" id=\"reason\">
                    <option value=\"1\">Incorrect Product of Size Ordered</option>
                    <option value=\"2\">Product No Longer Needed</option>
                    <option value=\"3\">Product Does Not Match Description on Website or in Catalog</option>
                    <option value=\"4\">Product Did Not Meet Customer’s Expectations</option>
                    <option value=\"5\">Incorrect Product of Size Ordered</option>
                    <option value=\"6\">Company Shipped Wrong Product of Size</option>
                    </select>
                  </div><br>
                  <div class=\"\">
                    <label for=\"reasondetails\">Detail the Reason:</label>
                    <textarea class=\"form-control\" name=\"name\" rows=\"8\" maxlength=\"430\" id=\"rsndetails\"></textarea>
                  </div><br>
                    <div class=\"row\">
                      <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 replacbutn\">
                          <a class=\"btn btn-danger btn-md btn-retitm\" ret-item=\"$item\">Return $itemtitle</a>
                      </div>
                    </div>
                </form>
              </div>
          </div>";
        }
      }else{
        //error
        die("Error");
      }

    }
  }else{
    die("Error!");
  }
}

function showcompleteproddetails($conn){
  //return item details....and the form with the button set to return this particular item from the complete cart
    if(isset($_POST['item'])){
      $item = $_POST['item'];
      if(!empty($item)){
        // echo "$item complete";
        // echo "$item incomplete";
        $dbs = substr($item,0,1);
        $nurw = substr($item,1);
        // query the item from the correct product database
        if($dbs == 'M'){
          $table = 'products';
          $pagelink = "productdetails.php?id=";
          $imglnk = "mtumbauploads/compresseduploads/";
        }elseif($dbs == 'S'){
          $table = 'brandyproducts';
          $pagelink = "storeproduct.php?id=";
          $imglnk = "uploadproducts/compressedproducts/";
        }else{
          die("Error");
        }
        $queryactualproduct = "SELECT * FROM `$table` WHERE `id`='$nurw'";
        $queryactualproduct_run = mysqli_query($conn, $queryactualproduct);
        $queryactualproduct_num = mysqli_num_rows($queryactualproduct_run);
        if($queryactualproduct_num == 1){
          //continue
          if($queryprod_row = mysqli_fetch_assoc($queryactualproduct_run)){
            $imageone = $queryprod_row['imageone'];
            $imagetwo = $queryprod_row['imagetwo'];
            $imagethree = $queryprod_row['imagethree'];
            $itemtitle = $queryprod_row['itemtitle'];
            $price = $queryprod_row['price'];
            $label = $queryprod_row['label'];
            // $storename = $queryprod_row['storename'];
            // <img src=\"$imglnk$imageone\" style=\"max-height:40px;\"/>
            echo "<div class=\"row\">
                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                  <!-- maybe require the client to put in his/her password for the package to be visible -->
                  <!-- TODO REVIEW ama staff to pass his/her password so that it is logged who worked on it? maybe -->
                  <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                        <!-- first comes the product title -->
                        <div class=\"row\">
                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                <h3 class=\"text-center text-capitalize\">$itemtitle</h3>
                            </div>
                        </div>
                        <!-- the main image centered -->
                        <div class=\"row\" style=\"margin-bottom:1%;\">
                            <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md\">
                              <img src=\"$imglnk$imagetwo\" class=\"img-responsive\"/>
                            </div>
                            <div class=\"col-lg-2 col-md-2 col-sm-1 col-xs-1 visible-sm visible-xs\"></div>
                            <div class=\"col-lg-8 col-md-8 col-sm-10 col-xs-10\">
                              <img src=\"$imglnk$imageone\" class=\"img-responsive\"/>
                            </div>
                            <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md\">
                                <img src=\"$imglnk$imagethree\" class=\"img-responsive\"/>
                            </div>
                            <div class=\"col-lg-2 col-md-2 col-sm-1 col-xs-1 visible-sm visible-xs\"></div>
                        </div>
                        <!-- the other two pages on the sides -->
                        <div class=\"row visible-sm visible-xs\">
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                                <img src=\"$imglnk$imagetwo\" class=\"img-responsive\"/>
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                                <img src=\"$imglnk$imagethree\" class=\"img-responsive\"/>
                            </div>
                        </div>
                        <!-- seller ratings price -->
                        <div class=\"row\">
                            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\"><h4>Seller: Kamutula</h4></div>
                            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                              <span class=\"mdi mdi-star-outline mdi-24px\"></span>
                              <span class=\"mdi mdi-star-outline mdi-24px\"></span>
                              <span class=\"mdi mdi-star-outline mdi-24px\"></span>
                              <span class=\"mdi mdi-star-outline mdi-24px\"></span>
                              <span class=\"mdi mdi-star-half mdi-24px\"></span>
                            </div>
                            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\"><h4>Price: Ksh $price</h4></div>
                        </div>
                        <hr>
                        <!-- product details just a few words summary -->
                        <div class=\"row\">
                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"padding:10px;\">
                                <p class=\"text-left\">
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                   ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                </p>
                            </div>
                        </div>

                    </div>
                  </div>
                </div>
                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\" style=\"border-left:1px solid gainsboro;\">
                  <form class=\"\">
                    <h3 class=\"text-center text-capitalize\" style=\"font-family:kok;text-decoration:underline;\">Product Return Form <small>($itemtitle)</small></h3>
                    <div class=\"\">
                      <label for=\"reason\">Reason For Return: </label>
                      <select class=\"form-control reason\" name=\"reason\" id=\"reason\">
                        <option value=\"1\">Incorrect Product of Size Ordered</option>
                        <option value=\"2\">Product No Longer Needed</option>
                        <option value=\"3\">Product Does Not Match Description on Website or in Catalog</option>
                        <option value=\"4\">Product Did Not Meet Customer’s Expectations</option>
                        <option value=\"5\">Incorrect Product of Size Ordered</option>
                        <option value=\"6\">Company Shipped Wrong Product of Size</option>

                      </select>
                    </div><br>
                    <div class=\"\">
                      <label for=\"reasondetails\">Detail the Reason:</label>
                      <textarea class=\"form-control\" name=\"name\" rows=\"8\" maxlength=\"430\" id=\"rsndetails\"></textarea>
                    </div><br>
                      <div class=\"row\">
                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 replacbutn\">
                            <a class=\"btn btn-danger btn-md btn-retitm\" ret-item=\"$item\">Return $itemtitle</a>
                        </div>
                      </div>
                  </form>
                </div>
            </div>";
          }
        }else{
          //error
          die("Error");
        }
      }
    }else{
      die("Error!");
    }

}

//TODO SECURE THE CODE IN THIS PAGE
function showretcartcontentsincomplete($conn){
  //these are items that have been already been delivered
  // show cart contents for complete cart contents
  // $inccart = 'c132e70114a1c6990955c987915a9850';
  if(isset($_POST['cart'])){
    $inccart = $_POST['cart'];
      if(!empty($inccart)){
        // continue
        $querycartcontents = "SELECT * FROM `incdelivery` WHERE `cartno`='$inccart'";
        $querycartcontents_run = mysqli_query($conn, $querycartcontents);
        $querycartcontents_num = mysqli_num_rows($querycartcontents_run);
        if($querycartcontents_num != 0){
          // continue
          echo "<div class=\"table-responsive\" style=\"font-family:kok;\">
                  <table class=\"table table-responsive table-hover\">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Image</th>
                      <th>Cart</th>
                      <th>Title</th>
                      <th>label</th>
                      <th>Storename</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
            ";
          while($querycartcontents_row = mysqli_fetch_assoc($querycartcontents_run)){
            // show all item records
             // and provide retun buttons for each row
             // showing a form with an onclick of the button
             // incomplete carts show each item as it is delivered
             $itemid = $querycartcontents_row['itemid'];
             // since this is a return, we have the right to know what the item is so that we can flag it
             // so query the actual database
             $queryitemincart = "SELECT * FROM `pickupds` WHERE `id`='$itemid'";
             $queryitemincart_run = mysqli_query($conn, $queryitemincart);
             $queryitemincart_num = mysqli_num_rows($queryitemincart_run);
             if($queryitemincart_num != 0){
               // continue
               while($queryitemincart_row = mysqli_fetch_assoc($queryitemincart_run)){
                 $item = $queryitemincart_row['item'];
                 $dbs = substr($item,0,1);
                 $nurw = substr($item,1);
                 // query the item from the correct product database
                 if($dbs == 'M'){
                   $table = 'products';
                   $pagelink = "productdetails.php?id=";
                   $imglnk = "mtumbauploads/compresseduploads/";
                 }elseif($dbs == 'S'){
                   $table = 'brandyproducts';
                   $pagelink = "storeproduct.php?id=";
                   $imglnk = "uploadproducts/compressedproducts/";
                 }else{
                   die("Error");
                 }
                 $queryactualproduct = "SELECT * FROM `$table` WHERE `id`='$nurw'";
                 $queryactualproduct_run = mysqli_query($conn, $queryactualproduct);
                 $queryactualproduct_num = mysqli_num_rows($queryactualproduct_run);
                 if($queryactualproduct_num != 0){
                   //continue
                   $count = 1;
                   while($queryactualproduct_row = mysqli_fetch_assoc($queryactualproduct_run)){
                     $imageone = $queryactualproduct_row['imageone'];
                     $itemtitle = $queryactualproduct_row['itemtitle'];
                     $label = $queryactualproduct_row['label'];
                     $storename = $queryactualproduct_row['storename'];

                     echo "
                     <tr>
                       <td>$count</td>
                       <td><a href=\"$pagelink$nurw\" target=\"_blank\" title=\"view item\"><img src=\"$imglnk$imageone\" style=\"max-height:40px;\"/></a></td>
                       <td>$inccart</td>
                       <td>$itemtitle</td>
                       <td>$label</td>
                       <td>$storename</td>
                       <td><a data-retcmp=\"$item\" data-retsrnm=\"$storename\" data-retname=\"$itemtitle\" data-retimg=\"$imglnk$imageone\" data-retlabel=\"$label\" class=\"btn btn-sm btn-warning btn-comp\">Return me</a></td>
                     </tr>
                     ";
                     $count++;

                   }

                 }else{
                   // do nothing
                 }

                //  echo "$dbs cgre<br>";
                //  echo "$nurw";
               }
             }else{
               // do nothing
             }





          }
          echo "</tbody>
                      </table>
                    </div>

              ";
              // showretcartcontentscmp($inccart);
              // showretcartcontentscmp($inccart);
        }else{
          // dont
          showretcartcontentscmp($conn, $inccart);

          die("<h4 class=\"text-capitalize text-center\" style=\"color:red;font-family:kok;border:1px solid gainsboro;padding:10px;\">Nothing from complt carts</h4>");
        }
      }else{
        // nothing provided as the cart
      }
  }else{
    // do nothing
  }

}

function showretcartcontentscmp($conn, $xert){
  //these are items that have already been delivered
  // show cart contents  for clicked cart
  $compcart = 'c36df7d016546edbba9c5e5c3d0945a1';
  // $compcart = $xert;
  $querycompcart = "SELECT * FROM `deliveries` WHERE `cartno`='$compcart'";
  // $querycompcart = "SELECT * FROM `deliveries` WHERE `cartno` LIKE '%$compcart%'";
  $querycompcart_run = mysqli_query($conn, $querycompcart);
  $querycompcart_num = mysqli_num_rows($querycompcart_run);
  if($querycompcart_num != 0){
    // continue
    // show product items from the cart and pass buttons
    // query cart items from pick up list where sign is 1
    echo "<div class=\"table-responsive\" style=\"font-family:kok;\">
            <table class=\"table table-responsive table-hover\">
              <thead>
              <tr>
                <th>No</th>
                <th>Image</th>
                <th>Cart</th>
                <th>Title</th>
                <th>label</th>
                <th>Storename</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
      ";
    $querycartpickuplist = "SELECT * FROM `pickupds` WHERE `cart`='$compcart'";
    $querycartpickuplist_run = mysqli_query($conn, $querycartpickuplist);
    $querycartpickuplist_num = mysqli_num_rows($querycartpickuplist_run);
    if($querycartpickuplist_num != 0){
      //continue
      $count = 1;
      while($querycartpickuplist_row = mysqli_fetch_assoc($querycartpickuplist_run)){
        $item = $querycartpickuplist_row['item'];
        // echo "$item <br>";
        // return product details
        $dbs = substr($item,0,1);
        $nurw = substr($item,1);
        // query the item from the correct product database
        if($dbs == 'M'){
          $table = 'products';
          $pagelink = "productdetails.php?id=";
          $imglnk = "mtumbauploads/compresseduploads/";
        }elseif($dbs == 'S'){
          $table = 'brandyproducts';
          $pagelink = "storeproduct.php?id=";
          $imglnk = "uploadproducts/compressedproducts/";
        }else{
          die("Error");
        }
        $queryactualproduct = "SELECT * FROM `$table` WHERE `id`='$nurw'";
        $queryactualproduct_run = mysqli_query($conn, $queryactualproduct);
        $queryactualproduct_num = mysqli_num_rows($queryactualproduct_run);
        if($queryactualproduct_num != 0){

          while($queryactualproduct_row = mysqli_fetch_assoc($queryactualproduct_run)){
            $imageone = $queryactualproduct_row['imageone'];
            $itemtitle = $queryactualproduct_row['itemtitle'];
            $label = $queryactualproduct_row['label'];
            $storename = $queryactualproduct_row['storename'];

            echo "
            <tr>
              <td>$count</td>
              <td><a href=\"$pagelink$nurw\" target=\"_blank\" title=\"view item\"><img src=\"$imglnk$imageone\" style=\"max-height:40px;\"/></a></td>
              <td>$compcart</td>
              <td>$itemtitle</td>
              <td>$label</td>
              <td>$storename</td>
              <td><a data-retcmp=\"$item\" data-retsrnm=\"$storename\" data-retname=\"$itemtitle\" data-retimg=\"$imglnk$imageone\" data-retlabel=\"$label\" class=\"btn btn-sm btn-success btn-incomp\">Return me</a></td>
            </tr>
            ";
            //TODO FIRST STEP TOMORROW SET UP RETURN BUTTONS TO SHOW RETURN FORM AND REASON AND USER RETURNING

          }
        }
        $count++;
      }
    }else{
      // do nothing
    }
    echo "</tbody>
                </table>
              </div>

        ";

  }else{
    // stop
    die("<h4 class=\"text-capitalize text-center\" style=\"color:red;font-family:kok;border:1px solid gainsboro;padding:10px;\">Nothing from incomplete carts</h4>");
  }

}

function showreturncarts(){
  // a search kind of a function
  // first query delivered carts
  // show items in that cart
  // then enable return by click
  // to finalize enforce reasoning
  // enforce staff inspection on the package
  if(isset($_POST['cart'])){
    $cart = $_POST['cart'];
    if(!empty($cart)){
      // check with complete cart and its items.....if not found...check with incomplete carts
      // then with incomplete cart and its items
      $querysilimarcart = "SELECT * FROM `deliveries` WHERE `cartno` LIKE '%$cart%'";
      $querysilimarcart_run = mysqli_query($conn, $querysilimarcart);
      $querysilimarcart_num = mysqli_num_rows($querysilimarcart_run);
      if($querysilimarcart_num != 0){
        // continue the delivery was found
        // show the results
        echo "<div class=\"table-responsive\" style=\"font-family:kok;\">
                <table class=\"table table-responsive table-hover\">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Cart</th>
                    <th>Name</th>
                    <th>Nameid</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
          ";
        while($querysilimarcart_row = mysqli_fetch_assoc($querysilimarcart_run)){
          $matchcarts = $querysilimarcart_row['cartno'];
          $name = $querysilimarcart_row['name'];
          $nameid = $querysilimarcart_row['nameid'];
          $date = $querysilimarcart_row['date'];
          $time = $querysilimarcart_row['time'];
          echo "
          <tr>
            <td>#</td>
            <td>$matchcarts</td>
            <td>$name</td>
            <td>$nameid</td>
            <td>$date</td>
            <td>$time</td>
            <td><a data-comcart=\"$matchcarts\" class=\"btn btn-sm btn-primary btn-comp\">Pick Me</a></td>
          </tr>
          ";
        }
        echo "</tbody>
                    </table>
                  </div>

            ";
      }else{
        // check with incomplete carts
        $querysimilarinccar = "SELECT * FROM `incdelivery` WHERE `cartno` LIKE '%$cart%'";
        $querysimilarinccar_run = mysqli_query($conn, $querysimilarinccar);
        $querysimilarinccar_num = mysqli_num_rows($querysimilarinccar_run);
        if($querysimilarinccar_num != 0){
          // found
          echo "<div class=\"table-responsive\" style=\"font-family:kok;\">
                  <table class=\"table table-responsive table-hover\">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Cart</th>
                      <th>Name</th>
                      <th>Nameid</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
            ";
          while($querysimilarinccar_row = mysqli_fetch_assoc($querysimilarinccar_run)){
            $incmatchcarts = $querysimilarinccar_row['cartno'];
            $name = $querysimilarinccar_row['name'];
            $nameid = $querysimilarinccar_row['nameid'];
            $date = $querysimilarinccar_row['date'];
            $time = $querysimilarinccar_row['time'];
            echo "
            <tr>
              <td>#</td>
              <td>$incmatchcarts</td>
              <td>$name</td>
              <td>$nameid</td>
              <td>$date</td>
              <td>$time</td>
              <td><a data-incart=\"$incmatchcarts\" class=\"btn btn-sm btn-primary btn-incomp\">Pick me</a></td>

            </tr>
            ";
          }
          echo "</tbody>
                      </table>
                    </div>

              ";
        }else{
          // record does not exist in both incomplete and complete dbs
          die("cart does not exist");
        }


      }
    }
  }
}
//TODO ADD A RETURN REQUEST FUNCTION IN SELLERS ACCOUNT TAHT SHOULD SHOW UP ON ADMINS PANEL

function unflagitem($conn){
  if(isset($_POST['item']) && isset($_POST['cart'])){
    $item = $_POST['item'];
    $cart = $_POST['cart'];
    if(!empty($item) && !empty($cart)){
        // flag the item
        // confirm staff is at the center and is not the last handler
        $queryconfitemstats = "SELECT * FROM `transitdbs` WHERE `itemid`='$item' AND `cartname`='$cart'";
        $queryconfitemstats_run = mysqli_query($conn, $queryconfitemstats);
        $queryconfitemstats_num = mysqli_num_rows($queryconfitemstats_run);
        if($queryconfitemstats_num != 0){
          // continue
          while($queryconfitemstats_row = mysqli_fetch_assoc($queryconfitemstats_run)){
            $staffid = $_SESSION['$staff'];
            $querystaffname = "SELECT * FROM `staff` WHERE `id`='$staffid'";
            $querystaffname_run = mysqli_query($conn, $querystaffname);
            $querystaffname_row = mysqli_fetch_assoc($querystaffname_run);
            $staffname = $querystaffname_row['tiivanick'];
            $stafflocation = $querystaffname_row['tiivacenter'];
            // retrieve handlers list and center list
            $handlerslist = $queryconfitemstats_row['handlers'];
            $exchcenterslist = $queryconfitemstats_row['exchcenters'];

            $handlersArray = explode(',',$handlerslist);
            $handlrspoint = round(count($handlersArray) - 1);
            $finalhandler = $handlersArray[$handlrspoint];

            $exchcentersArray = explode(',',$exchcenterslist);
            $exchcentrpoint = round(count($exchcentersArray) - 1);
            $finalcenter = $exchcentersArray[$exchcentrpoint];

            if($staffname != $finalhandler && $stafflocation == $finalcenter){
              // continue
              $queryflag = "UPDATE `transitdbs` SET `integrity`='0' WHERE `itemid`='$item' AND `cartname`='$cart'";
              if($queryflag_run = mysqli_query($conn, $queryflag)){
                //successful
                echo "successfully unflagged item $item of cart $cart";
              }else{
                //error
              }
            }else{
              // do nothing
            }

          }
        }else{
          // do nothing
        }


    }else{
      die("Error");
    }
  }else{
    die("Error");
  }
}

function flagitem($conn){
  if(isset($_POST['item']) && isset($_POST['cart'])){
    $item = $_POST['item'];
    $cart = $_POST['cart'];
    if(!empty($item) && !empty($cart)){
        // flag the item
        // confirm staff is at the center and is not the last handler
        $queryconfitemstats = "SELECT * FROM `transitdbs` WHERE `itemid`='$item' AND `cartname`='$cart'";
        $queryconfitemstats_run = mysqli_query($conn, $queryconfitemstats);
        $queryconfitemstats_num = mysqli_num_rows($queryconfitemstats_run);
        if($queryconfitemstats_num != 0){
          // continue
          while($queryconfitemstats_row = mysqli_fetch_assoc($queryconfitemstats_run)){
            $staffid = $_SESSION['$staff'];
            $querystaffname = "SELECT * FROM `staff` WHERE `id`='$staffid'";
            $querystaffname_run = mysqli_query($conn, $querystaffname);
            $querystaffname_row = mysqli_fetch_assoc($querystaffname_run);
            $staffname = $querystaffname_row['tiivanick'];
            $stafflocation = $querystaffname_row['tiivacenter'];
            // retrieve handlers list and center list
            $handlerslist = $queryconfitemstats_row['handlers'];
            $exchcenterslist = $queryconfitemstats_row['exchcenters'];

            $handlersArray = explode(',',$handlerslist);
            $handlrspoint = round(count($handlersArray) - 1);
            $finalhandler = $handlersArray[$handlrspoint];

            $exchcentersArray = explode(',',$exchcenterslist);
            $exchcentrpoint = round(count($exchcentersArray) - 1);
            $finalcenter = $exchcentersArray[$exchcentrpoint];

            if($staffname != $finalhandler && $stafflocation == $finalcenter){
              // continue
              $queryflag = "UPDATE `transitdbs` SET `integrity`='1' WHERE `itemid`='$item' AND `cartname`='$cart'";
              if($queryflag_run = mysqli_query($conn, $queryflag)){
                //successful
                echo "successfully flagged item $item of cart $cart";
              }else{
                //error
              }
            }else{
              // do nothing
            }

          }
        }else{
          // do nothing
        }


    }else{
      die("Error");
    }
  }else{
    die("Error");
  }
}

function inspectitems($conn){
  // every tiiva center should receive a prompt to update the image proof of items
  //REVIEW THE SCRIPT HAS BEEN CHANGED TO ALLOW INSPECTION OF ITEMS BY STAFF... ENABLE FLAGING OF ITEMS TO INSPECTION BY HIGHER STAFF MEMBERS
  // CHECK FOR STRUCTURAL INTEGRITY OF THE PACKAGE OR POSSIBLE TAMPERING
  // currently in store but not yet catalogued....
  // point is as far as a product enters the centers doors...take an image
  //TODO SINCE STAFF MAY STRAY FROM USING THIS....THE HELPDESK STAFF SHOULD CARRY OUT THIS ACTIVITY OR THE SENIOR AT THE CENTER

  // check for the center i'm in...find out if theres a package not yet catalogued
  $staffid = $_SESSION['$staff'];
  $querystaffcentr = "SELECT * FROM `staff` WHERE `id`='$staffid'";
  $querystaffcentr_run = mysqli_query($conn, $querystaffcentr);
  $querystaffcentr_num = mysqli_num_rows($querystaffcentr_run);
  if($querystaffcentr_num == '1'){
    //continue
    if($querystaffcentr_row = mysqli_fetch_assoc($querystaffcentr_run)){
      echo "<div class=\"table-responsive\" style=\"font-family:kok;\">
      <small>In the case where you find a package that seems to have its structural integrity compromised i.e. damaged or seal tampered with...please flag it<br>
      this will help us identify the time frame within which the package got compromised</small>
              <table class=\"table table-responsive table-hover\">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Item</th>
                  <th>cart</th>
                  <th>from</th>
                  <th>Destination</th>
                  <th>shiptype</th>
                  <th>Deadline</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
        ";
        $center = strtoupper($querystaffcentr_row['tiivacenter']);//to uppercase
        $tiivanick = strtoupper($querystaffcentr_row['tiivanick']);//to uppercase
        // check for check out carts taht are incomplete
        $checkedcartsArray = array();
        $querycheckoutcartvble = "SELECT `cartname` FROM `checkoutcarts` WHERE `pickupstat`='INCOMPLETE'";
        $querycheckoutcartvble_run = mysqli_query($conn, $querycheckoutcartvble);
        $querycheckoutcartvble_num = mysqli_num_rows($querycheckoutcartvble_run);
        if($querycheckoutcartvble_num != '0'){

          while($querycheckoutcartvble_row = mysqli_fetch_assoc($querycheckoutcartvble_run)){
            $cartname = $querycheckoutcartvble_row['cartname'];
            if(in_array($cartname,$checkedcartsArray)){
              echo "found";
            }else{
              array_push($checkedcartsArray,$cartname);
              // echo "$cartname <br>";
            }
          }
        }
        // print_r($checkedcartsArray);
        // compare the carts against carts in transit in said center currently
        for($i = 0; $i < count($checkedcartsArray); $i++){
          $currentcart = $checkedcartsArray[$i];
          $queryitempos = "SELECT * FROM `transitdbs` WHERE `cartname`='$currentcart'";
          $queryitempos_run = mysqli_query($conn, $queryitempos);
          $queryitempos_num = mysqli_num_rows($queryitempos_run);
          if($queryitempos_num != 0){
              while($queryitempos_row = mysqli_fetch_assoc($queryitempos_run)){
                $id = $queryitempos_row['id'];
                $itemid = $queryitempos_row['itemid'];
                $cart = $queryitempos_row['cartname'];
                $from = $queryitempos_row['from'];
                $destination = $queryitempos_row['centredestination'];
                $shiptype = $queryitempos_row['shiptype'];
                $deadline = $queryitempos_row['deadline'];
                $integrity = $queryitempos_row['integrity'];

                if($integrity == 0){
                  $integstatus = "<a data-itemid=\"$itemid\" data-item-cart=\"$cart\" class=\"btn btn-sm btn-danger flagBtn\">Flag</a>";
                }elseif($integrity == 1){
                  $integstatus = "<a data-itemid=\"$itemid\" data-item-cart=\"$cart\" class=\"btn btn-sm btn-info unflagBtn\">Undo</a>";
                }else{

                }

                $itemid = $queryitempos_row['itemid'];
                $centerslist = $queryitempos_row['exchcenters'];
                $handlerslist = $queryitempos_row['handlers'];
                // echo "$id <br>";
                // check whether were in the same location
                // well not chekc whether the staff has the item just need to check the staffs location so that any staff can do this
                $centersArray = explode(',',$centerslist);
                $fnlpstn = round(count($centersArray) - 1);
                $finalCenter = $centersArray[$fnlpstn];

                $handlersArray = explode(',',$handlerslist);
                $fnlhandpstn = round(count($handlersArray) - 1);
                $finalhandler = $handlersArray[$fnlhandpstn];
                // TODO CONFIRM ALL THE ARRAYS ARE INDIPENDET.....WANT TO CHANGE THE TIMING FOR
                // echo "$finalCenter <br>";
                if($center == strtoupper($finalCenter) && $tiivanick != strtoupper($finalhandler)){
                  // found
                  // this item is in your center or is headed there...please comment on its status and take a photo also structural integrity
                  // echo "$id $finalhandler<br>";
                  //TODO the current package handler should inspect his own packages..so ensure its not him inspecting the items
                  echo "
                  <tr>
                    <td>#</td>
                    <td>$id</td>
                    <td>$cart</td>
                    <td>$from</td>
                    <td>$destination</td>
                    <td>$shiptype</td>
                    <td>$deadline</td>
                    <td>$integstatus</td>
                  </tr>
                  ";
                }else{
                  //do nothing
                }

              }
          }else{
            // do nothing
          }
        }












        echo "</tbody>
                    </table>
                  </div>
                  <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" id=\"statusAftFlg\"></div>
                  </div>
            ";
    }else{
      die("Error");
    }
  }else{
    die("Error");
  }
}
?>
