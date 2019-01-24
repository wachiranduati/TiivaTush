<?php
ob_start();
session_start();
require 'connect.php';
// script will display all the items that are currently available items
// it will also give admin rights to take down item
// link complaints to said product
// respond to comments as admin in the reviews box
// also enable editing of product uploaded
// can also direct message the seller to their inbox
// can also check up on sellers stats
//TODO ADD THE CATEGORIES OF ITEMS ONLINE TO THE STATS TAB
//TODO MAYBE UPDATE THE MTUMBA UPLOAD REMOVING SIZES AND ADDING A MULTIFUNCTIONAL DESCRIPTION BOX

if(isset($_SESSION['$staff'])){
  // confirmed this is a staff member
  if(isset($_POST['online'])){
      $state = $_POST['online'];
      if($state == 'lkdsf0'){
        //call function shop
        displayshopproducts();
      }elseif($state == 'oierj'){
        // call function shack
        display_shackprods();
      }elseif($state == 'kolwe9'){
        // call function search on shop
        searchprodsshop();
      }elseif($state == 'mksiuew'){
        // call function search on shack
        searchshackshop();
      }elseif($state == 'ke9l23k'){
        //call uploads time for shack
        specialuploadsshack();
      }elseif($state == '8djskl'){
        // call uploads time for shop
        specialuploadsshop();
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

function specialuploadsshack(){
  //the script below will show all uploads with their time stamps and date stamps alongside
  //it will also give the user ability to chose category he/she wants and date when teh item appeared
  //it should also work with both databases ie shack
  //TODO MAKE ANOTHER ONE FOR SHOP
  if(isset($_POST['category']) && isset($_POST['early']) && isset($_POST['latest'])){
    $category = $_POST['category'];
    $date_eal = $_POST['early'];
    $date_late = $_POST['latest'];
    if(!empty($category) && !empty($date_eal) && !empty($date_late)){
      //continue
      // $category = 'womens';
      // search by site/category and date
      // automatically show the date to day as the input dates proveded
      // $date_eal = "2018-01-16";
      // $date_late = "2018-05-25";
      // earlier date must be smaller or equal to later date
      //convert early date and date late to array then compare
      $earlydatearray = explode('-',$date_eal);
      $latedatearray = explode('-',$date_late);

      if($earlydatearray[0] <= $latedatearray[0]){
        // either in the same year or earlier year
        // now compare months
        if($earlydatearray[1] <= $latedatearray[1]){
          // either in the same month or ealier
          // now compare days
          // this will be tricky for dates in teh same month
          // so far results will show same dates or ealier dates
          if($earlydatearray[1] == $latedatearray[1] && $earlydatearray[2] <= $latedatearray[2] || $earlydatearray[1] <= $latedatearray[1]){
            // month is the same but day could be the same or earlier|| earlier month and any day
            // continue
            //TODO HAVE THE SCRIPT HAVE A DEFAULT DATE THAT IS THE EARLIEST AND OLDEST DATES
            if($category == 'blank'){
              $querycategorydt = "SELECT * FROM `products`";
            }else{
              $querycategorydt = "SELECT * FROM `products` WHERE `category`='$category'";
            }

            $querycategorydt_run = mysql_query($querycategorydt);
            // introduce the if statement to do something if result occurs in dates occuring here
            $querycategorydt_num = mysql_num_rows($querycategorydt_run);
            if($querycategorydt_num != 0){
              //continue
                echo "<div class=\"table-responsive\">
                      <h3 class=\"text-center\">Shack Products <small>(between dates $date_eal - $date_late) - category </small>$category</h3>
                        <table class=\"table table-responsive table-hover table-bordered\">
                          <thead>
                          <tr>
                            <th>Item</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th>Product</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Subcategory</th>
                            <th>Price</th>
                            <th>Storename</th>
                            <th>Subcategory</th>
                            <th>Edit</th>
                          </tr>
                          </thead>
                          <tbody>
                  ";
              while($querycategorydt_row = mysql_fetch_assoc($querycategorydt_run)){
                  // check whether item occurs in the provided timeframe
                  $id = $querycategorydt_row['id'];
                  $prodsupdate = $querycategorydt_row['up_date'];
                  $prodsupdtArray = explode('-',$prodsupdate);
                  //check for same and same or different day OR different month and any day
                  // prodyear is equal to or later than first year - DONE
                  // prodyear is equal to or earlier than last year - DONE

                  // month is equal to or later than the first
                  if($prodsupdtArray[0] >= $earlydatearray[0] && $prodsupdtArray[0] <= $latedatearray[0]){
                    // continue
                    // month is equal to or later than the first AND month is equal to or later than
                    if($prodsupdtArray[1] >= $earlydatearray[1] && $prodsupdtArray[1] <= $latedatearray[1] ){
                      // continue
                      // month is the same day must be different || month is earlier any day applies
                      if($prodsupdtArray[1] == $earlydatearray[1] && $prodsupdtArray[2] >= $earlydatearray[2] || $prodsupdtArray[1] > $earlydatearray[1]){
                        //continue
                        // month is the same with later month then day must be same or ealier than || month is ealier than later month
                        if($prodsupdtArray[1] == $latedatearray[1] && $prodsupdtArray[2] <= $latedatearray[2] || $prodsupdtArray[1] < $latedatearray[1]){
                          //continue
                          //complete
                          $pagelink = "productdetails.php?id=";
                          $imglnk = "mtumbauploads/compresseduploads/";
                          $title = $querycategorydt_row['itemtitle'];
                          $id = $querycategorydt_row['id'];
                          $imageone = $querycategorydt_row['imageone'];
                          $itemtitle = $querycategorydt_row['itemtitle'];
                          $Description = $querycategorydt_row['Description'];
                          $sellerid = $querycategorydt_row['sellerid'];
                          $category = $querycategorydt_row['category'];
                          $subcategory = $querycategorydt_row['subcategory'];
                          $price = number_format($querycategorydt_row['price']);
                          $sold = $querycategorydt_row['sold'];
                          $storename = $querycategorydt_row['storename'];
                          $label = $querycategorydt_row['label'];
                          if($sold == 0){
                            // $status = "mdi mdi-skull mdi-18px";
                            // $status = "<span style=\"color:red;\" class=\"mdi mdi-skull mdi-18px\"></span>";
                            $status = "<span style=\"color:green;\" class=\"mdi mdi-check-circle mdi-18px\"></span>";
                          }elseif($sold > 0){
                            // $status = "<span style=\"color:green;\" class=\"mdi mdi-check-circle mdi-18px\"></span>";
                            $status = "<span style=\"color:red;\" class=\"mdi mdi-skull mdi-18px\"></span>";

                          }else{
                            //not sure yet...MAKE IT A TODO
                          }

                          echo "
                          <tr>
                            <td>$id</td>
                            <td>$status</td>
                            <td><a href=\"$pagelink$id\" target=\"_blank\" title=\"view item\"><img src=\"$imglnk$imageone\" style=\"max-height:30px;\"/></a></td>
                            <td class=\"text-capitalize\">$itemtitle</td>
                            <td class=\"description5\" title=\"<h5>Description</h5>Select:<br>$Description\"><span style=\"\" class=\"mdi mdi-checkbox-blank-circle mdi-6px\"></span><span style=\"\" class=\"mdi mdi-checkbox-blank-circle mdi-6px\"></span></td>
                            <td class=\"text-capitalize\">$category</td>
                            <td class=\"text-capitalize\">$subcategory</td>
                            <td><span>Ksh $price</span></td>
                            <td>$storename </td>
                            <td>$label</td>
                            <td><a class=\"btn btn-primary btn-sm\" data-id=\"$id\">Edit info</a></td>
                          </tr>
                          ";



                        }else{
                          // do nothing
                        }
                      }else{
                        // do nothing
                      }
                    }else{
                      // echo "not $id<br>";
                      // echo "not $id<br>";
                    }
                  }else{
                    // do nothing
                    // echo "not $id<br>";
                  }
              }
              echo "</tbody>
                          </table>
                        </div>
                  ";
            }else{
              die("Nothing to return");
            }
          }else{
            // do nothing
          }
        }else{
          //do nothing
        }
      }else{
        //dont continue
      }


    }else{
      die("Error2");
    }
  }else{
    die("Error1");
  }

}

function specialuploadsshop(){
  //the script below will show all uploads with their time stamps and date stamps alongside
  //it will also give the user ability to chose category he/she wants and date when teh item appeared
  //it should also work with both databases ie shack
  //TODO MAKE ANOTHER ONE FOR SHOP
  if(isset($_POST['category']) && isset($_POST['early']) && isset($_POST['latest'])){
    $category = $_POST['category'];
    $date_eal = $_POST['early'];
    $date_late = $_POST['latest'];
    if(!empty($category) && !empty($date_eal) && !empty($date_late)){
      //continue
      // $category = 'womens';
      // search by site/category and date
      // automatically show the date to day as the input dates proveded
      // $date_eal = "2018-01-16";
      // $date_late = "2018-05-25";
      // earlier date must be smaller or equal to later date
      //convert early date and date late to array then compare
      $earlydatearray = explode('-',$date_eal);
      $latedatearray = explode('-',$date_late);

      if($earlydatearray[0] <= $latedatearray[0]){
        // either in the same year or earlier year
        // now compare months
        if($earlydatearray[1] <= $latedatearray[1]){
          // either in the same month or ealier
          // now compare days
          // this will be tricky for dates in teh same month
          // so far results will show same dates or ealier dates
          if($earlydatearray[1] == $latedatearray[1] && $earlydatearray[2] <= $latedatearray[2] || $earlydatearray[1] <= $latedatearray[1]){
            // month is the same but day could be the same or earlier|| earlier month and any day
            // continue
            //TODO HAVE THE SCRIPT HAVE A DEFAULT DATE THAT IS THE EARLIEST AND OLDEST DATES
            if($category == 'blank'){
              $querycategorydt = "SELECT * FROM `brandyproducts`";
            }else{
              $querycategorydt = "SELECT * FROM `brandyproducts` WHERE `category`='$category'";
            }

            $querycategorydt_run = mysql_query($querycategorydt);
            // introduce the if statement to do something if result occurs in dates occuring here
            $querycategorydt_num = mysql_num_rows($querycategorydt_run);
            if($querycategorydt_num != 0){
              //continue
                echo "<div class=\"table-responsive\">
                      <h3 class=\"text-center\">Shop Products <small>(between dates $date_eal - $date_late) - category </small>$category</h3>
                        <table class=\"table table-responsive table-hover table-bordered\">
                          <thead>
                          <tr>
                            <th>Item</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th>Product</th>
                            <th>Instock</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Subcategory</th>
                            <th>Price</th>
                            <th>Storename</th>
                            <th>Subcategory</th>
                            <th>Action</th>
                          </tr>
                          </thead>
                          <tbody>
                  ";
              while($querycategorydt_row = mysql_fetch_assoc($querycategorydt_run)){
                  // check whether item occurs in the provided timeframe
                  $id = $querycategorydt_row['id'];
                  $prodsupdate = $querycategorydt_row['up_date'];
                  $prodsupdtArray = explode('-',$prodsupdate);
                  //check for same and same or different day OR different month and any day
                  // prodyear is equal to or later than first year - DONE
                  // prodyear is equal to or earlier than last year - DONE

                  // month is equal to or later than the first
                  if($prodsupdtArray[0] >= $earlydatearray[0] && $prodsupdtArray[0] <= $latedatearray[0]){
                    // continue
                    // month is equal to or later than the first AND month is equal to or later than
                    if($prodsupdtArray[1] >= $earlydatearray[1] && $prodsupdtArray[1] <= $latedatearray[1] ){
                      // continue
                      // month is the same day must be different || month is earlier any day applies
                      if($prodsupdtArray[1] == $earlydatearray[1] && $prodsupdtArray[2] >= $earlydatearray[2] || $prodsupdtArray[1] > $earlydatearray[1]){
                        //continue
                        // month is the same with later month then day must be same or ealier than || month is ealier than later month
                        if($prodsupdtArray[1] == $latedatearray[1] && $prodsupdtArray[2] <= $latedatearray[2] || $prodsupdtArray[1] < $latedatearray[1]){
                          //continue
                          //complete
                          $pagelink = "storeproduct.php?id=";
                          $imglnk = "uploadproducts/compressedproducts/";

                          $id = $querycategorydt_row['id'];
                          $imageone = $querycategorydt_row['imageone'];
                          $itemtitle = $querycategorydt_row['itemtitle'];
                          $Description = $querycategorydt_row['Description'];
                          $sellerid = $querycategorydt_row['sellerid'];
                          $category = $querycategorydt_row['category'];
                          $subcategory = $querycategorydt_row['subcategory'];
                          $price = number_format($querycategorydt_row['price']);
                          $Instock = $querycategorydt_row['Instock'];
                          $storename = $querycategorydt_row['storename'];
                          $label = $querycategorydt_row['label'];
                          if($Instock == 0){
                            // $status = "mdi mdi-skull mdi-18px";
                            $status = "<span style=\"color:red;\" class=\"mdi mdi-skull mdi-18px\"></span>";
                          }elseif($Instock > 0){
                            $status = "<span style=\"color:green;\" class=\"mdi mdi-check-circle mdi-18px\"></span>";

                          }else{
                            //not sure yet...MAKE IT A TODO
                          }

                          echo "
                          <tr>
                            <td>$id</td>
                            <td>$status</td>
                            <td><a href=\"$pagelink$id\" target=\"_blank\" title=\"view item\"><img src=\"$imglnk$imageone\" style=\"max-height:30px;\"/></a></td>
                            <td class=\"text-capitalize\">$itemtitle</td>
                            <td>$Instock</td>
                            <td class=\"description5\" title=\"<h5>Description</h5>Select:<br>$Description\"><span style=\"\" class=\"mdi mdi-checkbox-blank-circle mdi-6px\"></span><span style=\"\" class=\"mdi mdi-checkbox-blank-circle mdi-6px\"></span></td>
                            <td class=\"text-capitalize\">$category</td>
                            <td class=\"text-capitalize\">$subcategory</td>
                            <td><span>Ksh $price</span></td>
                            <td>$storename rtre</td>
                            <td>$label</td>
                            <td><a class=\"btn btn-primary btn-sm\" data-id=\"$id\">Edit info</a></td>
                          </tr>
                          ";
                          //TODO ACTION SHOULD SHOW A DROPDOWN LIST FOR EDIT, TAKEDOWN, FLAG



                        }else{
                          // do nothing
                        }
                      }else{
                        // do nothing
                      }
                    }else{
                      // echo "not $id<br>";
                      // echo "not $id<br>";
                    }
                  }else{
                    // do nothing
                    // echo "not $id<br>";
                  }
              }
              echo "</tbody>
                          </table>
                        </div>
                  ";
            }else{
              die("Nothing to return");
            }
          }else{
            // do nothing
          }
        }else{
          //do nothing
        }
      }else{
        //dont continue
      }


    }else{
      die("Error2");
    }
  }else{
    die("Error1");
  }


}

function searchprodsshop(){
  // the script below will find a product matching the provided terms
  // this is the for the shop dbs aka the brandyproducts
  $pagelink = "storeproduct.php?id=";
  $imglnk = "uploadproducts/compressedproducts/";
  if(isset($_POST["search"])){
    $search = $_POST['search'];
    if(!empty($search)){
        $querysearchcount = "SELECT * FROM `brandyproducts` WHERE `id` LIKE '%$search%'";
        $querysearchcount_run = mysql_query($querysearchcount);
        $querysearchcount_num = mysql_num_rows($querysearchcount_run);

        $querysearchterm = "SELECT * FROM `brandyproducts` WHERE `id` LIKE '%$search%' ORDER BY RAND() LIMIT 5";
        $querysearchterm_run = mysql_query($querysearchterm);
        $querysearchterm_num = mysql_num_rows($querysearchterm_run);
        if($querysearchterm_num != 0){
          //continue
          echo "<div class=\"table-responsive\">
            <table class=\"table table-hover\">
              <thead>
                <tr>
                  <th><small>Item</small></th>
                  <th><small>Status</small></th>
                  <th><small>Image</small></th>
                  <th><small>Product</small></th>
                  <th><small>Instock</small></th>
                  <th><small>Description</small></th>
                  <th><small>Category</small></th>
                  <th><small>Subcategory</small></th>
                  <th><small>Price(Ksh)</small></th>
                  <th><small>Storename</small></th>
                  <th><small>Label</small></th>
                  <th><small>Action</small></th>
                </tr>
              </thead>
              <tbody>";
          while($querysearchterm_row = mysql_fetch_assoc($querysearchterm_run)){
            $id = $querysearchterm_row['id'];
            $imageone = $querysearchterm_row['imageone'];
            $itemtitle = $querysearchterm_row['itemtitle'];
            $Description = $querysearchterm_row['Description'];
            $sellerid = $querysearchterm_row['sellerid'];
            $category = $querysearchterm_row['category'];
            $subcategory = $querysearchterm_row['subcategory'];
            $price = number_format($querysearchterm_row['price']);
            $Instock = $querysearchterm_row['Instock'];
            $storename = $querysearchterm_row['storename'];
            $label = $querysearchterm_row['label'];
            // echo "$id <br>";
            if($Instock == 0){
              // $status = "mdi mdi-skull mdi-18px";
              $status = "<span style=\"color:red;\" class=\"mdi mdi-skull mdi-18px\"></span>";
            }elseif($Instock > 0){
              $status = "<span style=\"color:green;\" class=\"mdi mdi-check-circle mdi-18px\"></span>";

            }else{
              //not sure yet...MAKE IT A TODO
            }
            echo "<tr>
              <td>$id</td>
              <td>$status</td>
              <td><a href=\"$pagelink$id\" target=\"_blank\" title=\"view item\"><img src=\"$imglnk$imageone\" style=\"max-height:40px;\"/></a></td>
              <td class=\"text-capitalize\">$itemtitle</td>
              <td>$Instock</td>
              <td class=\"description5\" title=\"<h5>Description</h5>Select:<br>$Description\"><span style=\"\" class=\"mdi mdi-checkbox-blank-circle mdi-6px\"></span><span style=\"\" class=\"mdi mdi-checkbox-blank-circle mdi-6px\"></span></td>
              <td class=\"text-capitalize\">$category</td>
              <td class=\"text-capitalize\">$subcategory</td>
              <td><span>Ksh $price</span></td>
              <td>$storename rtre</td>
              <td>$label</td>
              <td><a class=\"btn btn-primary btn-sm\" data-id=\"$id\">Edit info</a></td>
            </tr>
                  ";
          }
          echo "<tr>
                  <td colspan=\"2\">MATCHES</td>
                  <td colspan=\"12\"><a class=\"btn btn-warning btn-block\">$querysearchcount_num match(es) found!</a></td>
                </tr>";
          echo "</tbody>
                </table>
              </div>";

        }else{
          // die
          // die("No item matches your id");
          die("<div class=\"row\" style=\"border-bottom:1px dotted gainsboro;border-right:1px solid gainsboro;border-left:1px solid gainsboro;background-color:white;font-family:kok;background-color:orange;color:white;\">
                  <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                      <h4 class=\"text-center\"><i class=\"mdi mdi-paw-off mdi-24px mdi-dark\"></i>Oops your Search returned no results</h4>
                  </div>
              </div>");
        }
    }else{
      die();
    }

  }else{
    die("Empty");
  }
}

function searchshackshop(){
  // the script below will find a product matching the provided terms
  // this is the for the shop dbs aka the brandyproducts
  $pagelink = "productdetails.php?id=";
  $imglnk = "mtumbauploads/compresseduploads/";
  if(isset($_POST["search"])){
    $search = $_POST['search'];
    if(!empty($search)){
        $querysearchcount = "SELECT * FROM `products` WHERE `id` LIKE '%$search%'";
        $querysearchcount_run = mysql_query($querysearchcount);
        $querysearchcount_num = mysql_num_rows($querysearchcount_run);

        $querysearchterm = "SELECT * FROM `products` WHERE `id` LIKE '%$search%' ORDER BY RAND() LIMIT 5";
        $querysearchterm_run = mysql_query($querysearchterm);
        $querysearchterm_num = mysql_num_rows($querysearchterm_run);
        if($querysearchterm_num != 0){
          //continue
          echo "<div class=\"table-responsive\">
            <table class=\"table table-hover\">
              <thead>
                <tr>
                  <th><small>Item</small></th>
                  <th><small>Status</small></th>
                  <th><small>Image</small></th>
                  <th><small>Product</small></th>
                  <th><small>Description</small></th>
                  <th><small>Category</small></th>
                  <th><small>Subcategory</small></th>
                  <th><small>Price(Ksh)</small></th>
                  <th><small>Storename</small></th>
                  <th><small>Label</small></th>
                  <th><small>Action</small></th>
                </tr>
              </thead>
              <tbody>";
          while($querysearchterm_row = mysql_fetch_assoc($querysearchterm_run)){
            $id = $querysearchterm_row['id'];
            $imageone = $querysearchterm_row['imageone'];
            $itemtitle = $querysearchterm_row['itemtitle'];
            $Description = $querysearchterm_row['Description'];
            $sellerid = $querysearchterm_row['sellerid'];
            $category = $querysearchterm_row['category'];
            $subcategory = $querysearchterm_row['subcategory'];
            $price = number_format($querysearchterm_row['price']);
            $Instock = $querysearchterm_row['Instock'];
            $storename = $querysearchterm_row['storename'];
            $label = $querysearchterm_row['label'];
            // echo "$id <br>";
            if($sold == 0){
              // $status = "mdi mdi-skull mdi-18px";
              // $status = "<span style=\"color:red;\" class=\"mdi mdi-skull mdi-18px\"></span>";
              $status = "<span style=\"color:green;\" class=\"mdi mdi-check-circle mdi-18px\"></span>";
            }elseif($sold > 0){
              // $status = "<span style=\"color:green;\" class=\"mdi mdi-check-circle mdi-18px\"></span>";
              $status = "<span style=\"color:red;\" class=\"mdi mdi-skull mdi-18px\"></span>";

            }else{
              //not sure yet...MAKE IT A TODO
            }
            echo "<tr>
              <td>$id</td>
              <td>$status</td>
              <td><a href=\"$pagelink$id\" target=\"_blank\" title=\"view item\"><img src=\"$imglnk$imageone\" style=\"max-height:40px;\"/></a></td>
              <td class=\"text-capitalize\">$itemtitle</td>
              <td class=\"description5\" title=\"<h5>Description</h5>Select:<br>$Description\"><span style=\"\" class=\"mdi mdi-checkbox-blank-circle mdi-6px\"></span><span style=\"\" class=\"mdi mdi-checkbox-blank-circle mdi-6px\"></span></td>
              <td class=\"text-capitalize\">$category</td>
              <td class=\"text-capitalize\">$subcategory</td>
              <td><span>Ksh $price</span></td>
              <td>$storename </td>
              <td>$label</td>
              <td><a class=\"btn btn-primary btn-sm\" data-id=\"$id\">Edit info</a></td>
            </tr>
                  ";
          }
          echo "<tr>
                  <td colspan=\"2\">MATCHES</td>
                  <td colspan=\"12\"><a class=\"btn btn-warning btn-block\">$querysearchcount_num match(es) found!</a></td>
                </tr>";
          echo "</tbody>
                </table>
              </div>";

        }else{
          // die
          // die("No item matches your id");
          die("<div class=\"row\" style=\"border-bottom:1px dotted gainsboro;border-right:1px solid gainsboro;border-left:1px solid gainsboro;background-color:white;font-family:kok;background-color:orange;color:white;\">
                  <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                      <h4 class=\"text-center\"><i class=\"mdi mdi-paw-off mdi-24px mdi-dark\"></i>Oops your Search returned no results</h4>
                  </div>
              </div>");
        }
    }else{
      die();
    }

  }else{
    die("Empty");
  }
}

//TODO ADD ITEMS PER CATEGORY...WILL EASE IN SHOWING WHICH CATEGORY NEEDS ADDING

function displayshopproducts(){
  // script below shoes items from the shop site part
  // think it shoudl show all products even sold and currently in limbo --- figure them out using pickup list
  // it will show the status of the products too
  //TODO UPDATE THE ITEMS NUMBERS TO SHOW VALUES OF ITEMS REMAINING
  $pagelink = "storeproduct.php?id=";
  $imglnk = "uploadproducts/compressedproducts/";
  $page = $_POST['page'];
  $prevpage = round($page - 1);
  $nexpage = round($page + 1);
  //script to just return the count
  $resultsnumber = "SELECT * FROM `brandyproducts` WHERE `id`!='0'";
  $resultsnumber_run = mysql_query($resultsnumber);
  $resultsnumber_num = mysql_num_rows($resultsnumber_run);
  $perpage = 40;
  $jump = 40 * ($page - 1);

  // script to just returnt the count end
  $pagesnumber = round($resultsnumber_num/$perpage);

  if($page == 1){
    $querchkshopprods = "SELECT * FROM `brandyproducts` WHERE `id`!='0' LIMIT $perpage";
  }else{
    $querchkshopprods = "SELECT * FROM `brandyproducts` WHERE `id`!='0' LIMIT $perpage OFFSET $jump";
  }

  // $querchkshopprods = "SELECT * FROM `brandyproducts` WHERE `id`!='0' LIMIT 40";
  $querchkshopprods_run = mysql_query($querchkshopprods);
  $querchkshopprods_num = mysql_num_rows($querchkshopprods_run);
  if($querchkshopprods_num != 0){
    echo "
    <div class=\"table-responsive\">
    <h3 class=\"text-center\">Shop Products</h3>
    <a onclick=\"changepages_online($prevpage);\" data-page=\"$prevpage\" class=\"btn btn-primary btn-sm btn-pages\">Prev</a>&nbsp;<input style=\"\" onfocusout=\"changepage_input();\" id=\"showpage\" max=\"$pagesnumber\" value=\"$page\" type=\"number\" />&nbsp;<a onclick=\"changepages_online($nexpage);\" data-page=\"$nexpage\" class=\"btn btn-primary btn-sm btn-pages\">Next</a>
      &nbsp;&nbsp;&nbsp;<span>$resultsnumber_num results Found. Showing $perpage results of page $page / $pagesnumber</span>
        <div class=\"row\">
            <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2\"></div>
            <div class=\"col-lg-8 col-md-8 col-sm-8 col-xs-8\"><br>
                <input type=\"text\" id=\"prodssearch\" style=\"border:none;box-shadow:none;border-radius:0;background-color:rgba(219, 219, 219, 0.35);\" class=\"form-control\" placeholder=\"Search Item Number\"/>
            </div>
            <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2\"></div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2\"></div>
            <div class=\"col-lg-8 col-md-8 col-sm-8 col-xs-8 prodsearchresls\" style=\"position:absolute;z-index:21;width:64%;left:18%;background-color:white;box-shadow:0 0 1px rgba(219, 219, 219, 0.35);\"></div>
            <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2\"></div>
        </div><br>
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <th>Item</th>
            <th>Status</th>
            <th>Image</th>
            <th>Product</th>
            <th>Instock</th>
            <th>Description</th>
            <th>Category</th>
            <th>Subcategory</th>
            <th>Price</th>
            <th>Storename</th>
            <th>Subcategory</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
      ";
    while($querchkshopprods_row = mysql_fetch_assoc($querchkshopprods_run)){
      $id = $querchkshopprods_row['id'];
      $imageone = $querchkshopprods_row['imageone'];
      $itemtitle = $querchkshopprods_row['itemtitle'];
      $Description = $querchkshopprods_row['Description'];
      $sellerid = $querchkshopprods_row['sellerid'];
      $category = $querchkshopprods_row['category'];
      $subcategory = $querchkshopprods_row['subcategory'];
      $price = number_format($querchkshopprods_row['price']);
      $Instock = $querchkshopprods_row['Instock'];
      $storename = $querchkshopprods_row['storename'];
      $label = $querchkshopprods_row['label'];
      if($Instock == 0){
        // $status = "mdi mdi-skull mdi-18px";
        $status = "<span style=\"color:red;\" class=\"mdi mdi-skull mdi-18px\"></span>";
      }elseif($Instock > 0){
        $status = "<span style=\"color:green;\" class=\"mdi mdi-check-circle mdi-18px\"></span>";

      }else{
        //not sure yet...MAKE IT A TODO
      }

      echo "
      <tr>
        <td>$id</td>
        <td>$status</td>
        <td><a href=\"$pagelink$id\" target=\"_blank\" title=\"view item\"><img src=\"$imglnk$imageone\" style=\"max-height:30px;\"/></a></td>
        <td class=\"text-capitalize\">$itemtitle</td>
        <td>$Instock</td>
        <td class=\"description5\" title=\"<h5>Description</h5>Select:<br>$Description\"><span style=\"\" class=\"mdi mdi-checkbox-blank-circle mdi-6px\"></span><span style=\"\" class=\"mdi mdi-checkbox-blank-circle mdi-6px\"></span></td>
        <td class=\"text-capitalize\">$category</td>
        <td class=\"text-capitalize\">$subcategory</td>
        <td><span>Ksh $price</span></td>
        <td>$storename rtre</td>
        <td>$label</td>
        <td><a class=\"btn btn-primary btn-sm\" data-id=\"$id\">Edit info</a></td>
      </tr>
      ";
      //TODO ACTION SHOULD SHOW A DROPDOWN LIST FOR EDIT, TAKEDOWN, FLAG
    }
    echo "
          </tbody>
          </table>
          </div>
        ";
  }else{
    die("Opps sorry");
    //TODO MAYBE WITH TEH ERRORS AFTER LOGGING THEM REDIRECT THE USER TO APPROPRIATE PAGE
    //TODO ADD A COMMENT SYSTEM FOR ALL THE PRODUCTS AND RATINGS AND REVIEWS HERE
  }

}


function display_shackprods(){
  // script below shoes items from the shop site part
  // think it shoudl show all products even sold and currently in limbo --- figure them out using pickup list
  // it will show the status of the products too
  //TODO UPDATE THE ITEMS NUMBERS TO SHOW VALUES OF ITEMS REMAINING
  $pagelink = "productdetails.php?id=";
  $imglnk = "mtumbauploads/compresseduploads/";
  $page = $_POST['page'];
  $prevpage = round($page - 1);
  $nexpage = round($page + 1);
  //script to just return the count
  $resultsnumber = "SELECT * FROM `products` WHERE `id`!='0'";
  $resultsnumber_run = mysql_query($resultsnumber);
  $resultsnumber_num = mysql_num_rows($resultsnumber_run);
  $perpage = 40;
  $jump = 40 * ($page - 1);
  // script to just returnt the count end
  $pagesnumber = round($resultsnumber_num/$perpage);

  if($page == 1){
    $querchkshopprods = "SELECT * FROM `products` WHERE `id`!='0' LIMIT $perpage";
  }else{
    $querchkshopprods = "SELECT * FROM `products` WHERE `id`!='0' LIMIT $perpage OFFSET $jump";
  }

  // $querchkshopprods = "SELECT * FROM `brandyproducts` WHERE `id`!='0' LIMIT 40";
  $querchkshopprods_run = mysql_query($querchkshopprods);
  $querchkshopprods_num = mysql_num_rows($querchkshopprods_run);
  if($querchkshopprods_num != 0){
    echo "
    <div class=\"table-responsive\">
    <h3 class=\"text-center\">Shack Products</h3>
    <a onclick=\"changepages_onlineshack($prevpage);\" data-page=\"$prevpage\" class=\"btn btn-primary btn-sm btn-pagesshack\">Prev</a>&nbsp;<input onfocusout=\"changepage_inputshack();\" id=\"showpageshack\" max=\"$pagesnumber\" value=\"$page\" type=\"number\" />&nbsp;<a onclick=\"changepages_online($nexpage);\" data-page=\"$nexpage\" class=\"btn btn-primary btn-sm btn-pagesshack\">Next</a>
      &nbsp;&nbsp;&nbsp;<span>$resultsnumber_num results Found. Showing $perpage results of page $page / $pagesnumber</span>
      <div class=\"row\">
          <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2\"></div>
          <div class=\"col-lg-8 col-md-8 col-sm-8 col-xs-8\"><br>
              <input type=\"text\" id=\"shacksearch\" style=\"border:none;box-shadow:none;border-radius:0;background-color:rgba(219, 219, 219, 0.35);\" class=\"form-control\" placeholder=\"Search shack Item Number\"/>
          </div>
          <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2\"></div>
      </div>
      <div class=\"row\">
          <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2\"></div>
          <div class=\"col-lg-8 col-md-8 col-sm-8 col-xs-8 shacksearchrsls\" style=\"position:absolute;z-index:21;width:64%;left:18%;background-color:white;box-shadow:0 0 1px rgba(219, 219, 219, 0.35);\"></div>
          <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2\"></div>
      </div><br>
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <th>Item</th>
            <th>Status</th>
            <th>Image</th>
            <th>Product</th>
            <th>Description</th>
            <th>Category</th>
            <th>Subcategory</th>
            <th>Price</th>
            <th>Storename</th>
            <th>Subcategory</th>
            <th>Edit</th>
          </tr>
        </thead>
        <tbody>
      ";
    while($querchkshopprods_row = mysql_fetch_assoc($querchkshopprods_run)){
      $id = $querchkshopprods_row['id'];
      $imageone = $querchkshopprods_row['imageone'];
      $itemtitle = $querchkshopprods_row['itemtitle'];
      $Description = $querchkshopprods_row['Description'];
      $sellerid = $querchkshopprods_row['sellerid'];
      $category = $querchkshopprods_row['category'];
      $subcategory = $querchkshopprods_row['subcategory'];
      $price = number_format($querchkshopprods_row['price']);
      $sold = $querchkshopprods_row['sold'];
      $storename = $querchkshopprods_row['storename'];
      $label = $querchkshopprods_row['label'];
      if($sold == 0){
        // $status = "mdi mdi-skull mdi-18px";
        // $status = "<span style=\"color:red;\" class=\"mdi mdi-skull mdi-18px\"></span>";
        $status = "<span style=\"color:green;\" class=\"mdi mdi-check-circle mdi-18px\"></span>";
      }elseif($sold > 0){
        // $status = "<span style=\"color:green;\" class=\"mdi mdi-check-circle mdi-18px\"></span>";
        $status = "<span style=\"color:red;\" class=\"mdi mdi-skull mdi-18px\"></span>";

      }else{
        //not sure yet...MAKE IT A TODO
      }

      echo "
      <tr>
        <td>$id</td>
        <td>$status</td>
        <td><a href=\"$pagelink$id\" target=\"_blank\" title=\"view item\"><img src=\"$imglnk$imageone\" style=\"max-height:30px;\"/></a></td>
        <td class=\"text-capitalize\">$itemtitle</td>
        <td class=\"description5\" title=\"<h5>Description</h5>Select:<br>$Description\"><span style=\"\" class=\"mdi mdi-checkbox-blank-circle mdi-6px\"></span><span style=\"\" class=\"mdi mdi-checkbox-blank-circle mdi-6px\"></span></td>
        <td class=\"text-capitalize\">$category</td>
        <td class=\"text-capitalize\">$subcategory</td>
        <td><span>Ksh $price</span></td>
        <td>$storename </td>
        <td>$label</td>
        <td><a class=\"btn btn-primary btn-sm\" data-id=\"$id\">Edit info</a></td>
      </tr>
      ";
    }
    echo "
          </tbody>
          </table>
          </div>
        ";
  }else{
    die("Opps sorry");
    //TODO MAYBE WITH TEH ERRORS AFTER LOGGING THEM REDIRECT THE USER TO APPROPRIATE PAGE
    //TODO ADD A COMMENT SYSTEM FOR ALL THE PRODUCTS AND RATINGS AND REVIEWS HERE
  }

}

// <div class=\"table-responsive\">
// <h3 class=\"text-center\">Shop Products</h3>
//   <table>
//     <thead>
//       <tr>
//         <th>Item</th>
//         <th>Image</th>
//         <th>Product/th>
//         <th>Instock/th>
//         <th>Description</th>
//         <th>Category</th>
//         <th>Subcategory</th>
//         <th>Storename</th>
//         <th>Subcategory</th>
//       </tr>
//     </thead>
//     <tbody>
        // <tr>
        //   <td>item one</td>
        //   <td>item one</td>
        //   <td>item one</td>
        //   <td>item one</td>
        //   <td>item one</td>
        //   <td>item one</td>
        //   <td>item one</td>
        //   <td>item one</td>
        //   <td>item one</td>
        // </tr>
//     </tbody>
//   </table>
// </div>

























?>
