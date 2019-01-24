<?php
ob_start();
session_start();
require 'connect.php';
if(isset($_SESSION['$user_id'])){
    $user = $_SESSION['$user_id'];
    $usercheck = $user + 21;
}else{
    $usercheck = 1;
}


//echo $_POST['cct'];
if(isset($_POST['cct'])){
    $cct = $_POST['cct'];
    $query = "SELECT * FROM `checkoutcarts` WHERE `cartname`='$cct'";
    $query_run = mysql_query($query);
    if($row = mysql_fetch_assoc($query_run)){
        $cartcontents = $row['cartcontents'];
        $cartitemprice = $row['itemprice'];
        $cartcount = $row['count'];
        $carttotal = $row['carttotal'];

        $newcartcontents = trim($cartcontents);
        $cartcontentarray = explode(',',$cartcontents);
        $cartcontentarraycount = count($cartcontentarray);

        $newcartprice = trim($cartitemprice);
        $cartpricearray = explode(',',$newcartprice);

        echo "</h3><div class=\"table-responsive\"><table class=\"table\">
            <thead>
                <tr>
                    <th>
                        No.
                    </th>
                    <th>
                        image
                    </th>
                    <th>
                        Item
                    </th>
                    <th>
                        Tiiva Site
                    </th>
                    <th>
                        Buy_price
                    </th>
                    <th>
                        current_price
                    </th>
                    <th>
                      Price_change
                    </th>
                    <th>
                      Stock_status
                    </th>
                    <th>
                      Rate_product
                    </th>
                </tr>
            </thead>
            <tbody>";

        for( $x = 0; $x<$cartcontentarraycount;$x++){
            //echo $cartcontentarray[$x].'<br>';
            $dbs = substr($cartcontentarray[$x],0,1);
            $search = substr($cartcontentarray[$x],1);
            $y = $x + 1;
            if($dbs == 'M'){
                //echo "Mtush";

                $queryproduct = "SELECT * FROM `products` WHERE `id`='$search'";
                $site = "Tiiva Shack";
                $imagehome = "mtumbauploads/compresseduploads/";
            }elseif($dbs == 'S'){
                //echo "Shop";
                $queryproduct = "SELECT * FROM `brandyproducts` WHERE `id`='$search'";
                $site = "Tiiva Shop";
                $imagehome = "uploadproducts/compressedproducts/";
            }else{
                //echo "Something's wrong";
            }
            $queryproduct_run = mysql_query($queryproduct);
            if($queryproductrow = mysql_fetch_assoc($queryproduct_run)){
                //echo $site.' '.$queryproductrow['imageone'].' '.$queryproductrow['itemtitle'].'<br>';
                echo "<tr>";
                echo "<td>";
                echo "$y#";
                echo "</td>";
                echo "<td>";
                echo "<img style=\"max-height:50px;\" src=\"";
                echo $imagehome.$queryproductrow['imageone'];
                echo "\" class=\"img-responsive\"/>";
                echo "</td>";
                echo "<td>";
                echo $queryproductrow['itemtitle'];
                echo "</td>";
                echo "<td>";
                echo $site;
                echo "</td>";
                echo "<td>";
                echo number_format($queryproductrow['price']).' Ksh';
                echo "</td>";
                $newprice = $queryproductrow['price'];
                $prevprice = $cartpricearray[$x];
                $difference = $prevprice - $newprice;
                $change = ($difference/$prevprice)*100;

                echo "<td>";
                echo number_format($cartpricearray[$x]).' Ksh';
                echo "</td>";
                if($prevprice > $newprice){
                    // bei imeshuka
                    echo "<td><span style=\"color:red;\">";
                    echo $change.'%';
                    echo "</span></td>";
                }elseif($prevprice <  $newprice){
                    // bei imependa
                    echo "<td><span style=\"color:green;\">";
                    echo $change.'%';
                    echo "</span></td>";
                }else{
                    // price the same
                    echo "<td><span style=\"color:blue;\">";
                    echo $change.'%';
                    echo "</span></td>";
                }
                if($dbs == 'M'){
                  $stock = $queryproductrow['availability'];
                  if($stock >= 1){
                    $stockstatus = "instock";
                  }else{
                    $stockstatus = "out of stock";
                  }
                }elseif($dbs == 'S'){
                  $stock = $queryproductrow['Instock'];
                  if($stock >= 1){
                    $stockstatus = "instock";
                  }else{
                    $stockstatus = "out of stock";
                  }
                }else{
                  //nothing
                }
                echo "<td>";
                echo $stockstatus;
                echo "</td>";
                echo "<td>";
                // echo "<button id=\"raterbutton\" onclick=\"displayitemdets('$dbs$search');modalRem();\" data-target=\"#loginModal\" data-toggle=\"modal\" class=\"btn btn-success rater\"><span id=\"current\" style=\"visibility:hidden;display:none;\">$dbs$search</span>Rate & Review ?</button>";
                // echo "<span id=\"current\" class=\"invisible\">$dbs$search</span>";
                $queryrated = "SELECT * FROM `reviews` WHERE `productid`='$search' AND `site`='$dbs'";
                $queryrated_run = mysql_query($queryrated);

                $queryrated_num = mysql_num_rows($queryrated_run);
                if($queryrated_num == 0){
                  //no record present
                  // so user should be able to rate and review the item
                  echo "<button id=\"raterbutton\" onclick=\"displayitemdets('$dbs$search');modalRem();\" data-target=\"#loginModal\" data-toggle=\"modal\" class=\"btn btn-success rater\"><span id=\"current\" style=\"visibility:hidden;display:none;\">$dbs$search</span>Rate & Review ?</button>";

                }else{
                  // already has a row created
                  // check whether he exists in the users already recorded
                  $queryrated_row = mysql_fetch_assoc($queryrated_run);
                  $usersarray = explode(',',$queryrated_row['users']);
                  if(in_array($usercheck,$usersarray)){
                    // found means you've already rated and reviewed mwah
                    echo "<button id=\"raterbutton\" onclick=\"displayitemdets('$dbs$search');modalRem();\" data-target=\"#loginModal\" data-toggle=\"modal\" class=\"btn btn-primary rater\"><span id=\"current\" style=\"visibility:hidden;display:none;\">$dbs$search</span>Already Rated</button>";

                  }else{
                    // not found means you should be given a chance to rate and review
                    echo "<button id=\"raterbutton\" onclick=\"displayitemdets('$dbs$search');modalRem();\" data-target=\"#loginModal\" data-toggle=\"modal\" class=\"btn btn-success rater\"><span id=\"current\" style=\"visibility:hidden;display:none;\">$dbs$search</span>Rate & Review ?</button>";
                  }
                }
                echo "</td>";
                echo "</tr>";

            }else{
                echo "error";
            }


        }
        echo "</tbody>
    </table></div>";
        //echo $cartcontents.' '.$cartitemprice;
    }

}

?>
