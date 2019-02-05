<?php
ob_start();
session_start();
require 'connect.php';
require 'salesmade.php';
//print_r($_SESSION);
//print_r($_SESSION['cartname']);
//$cart = $_SESSION['cart'];
$mycart = $_SESSION['cartname'];
//echo $mycart;
// query the row to display all the cart items
// should we show the cart contents? by name incase of XXX
// should we show the shop from which item was sold? probably the username
// here were not using the session array instead we use the session row
$query = "SELECT * FROM `checkoutcarts` WHERE `cartname`='$mycart'";
$query_run = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($query_run);
$query_num_rows = mysqli_num_rows($query_run);
if($query_num_rows != 0){
    //echo "Found";
    // return customers name buy querying cart name in another table
    // then post client name , shipping location
    // table with site i.e Tiiva.com items id/name? quantity total  soldby
    // final total plus VAT and FREE SHIPPING
    $querycustomerinfo = "SELECT * FROM `sold` WHERE `cartname`='$mycart'";
    $querycustomer_run = mysqli_query($conn, $querycustomerinfo);
    $query_num_rowscustomer = mysqli_num_rows($querycustomer_run);
    $rowcstm = mysqli_fetch_assoc($querycustomer_run);
    if($query_num_rowscustomer != 0){
        // user cart no exists
        //echo $cartname;
        $cartname = $mycart;// cart name to use on the receipt
        $cartcontentsarray = explode(',',$row['cartcontents']);// array of cart contents
        $cartcontentspricearray = explode(',',$row['itemprice']);// array of cart contents price each incase of change
        $cartcontentscountarray = explode(',',$row['count']);// array cart contents count
        $carttotal = $row['carttotal']; // cart total for the whole cart
        $cartdate = $row['Date'];// cart creation date...i.e cleared by customer
        $username = $rowcstm['names'];
        $shipping = $rowcstm['shipping'];
        $userphone = $rowcstm['phone'];
        $shippingcounty = $rowcstm['county'];
        $shippingaddr = $rowcstm['area'];
        $verification = $row['paymentverification'];
        // echo $carttotal;
        if($shipping != 'free'){
            $shipprice = '400 Ksh';
            //$arrival = '1 - 3 days';
            $grandtotal = $carttotal + 400;
        }else{
            $shipprice = 'Free By Tiiva';
            //$arrival = '1 - 5 working days';
            $grandtotal = $carttotal + 0;
        }
        // echo $grandtotal;

        // CLIENT NAME AND SHIPPING APPEARING BELOW
        echo "
            <div class=\"row\">
                                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                    <h3 class=\"text-capitalize pull-left\" style=\"font-family:kok;\">Provisional Receipt</h3>
                                    <h5 class=\"pull-right\" style=\"margin-top:2%;\">Cart ID: &nbsp;$cartname</h5>
                                </div>
                            </div>
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\" style=\"font-family:kok;\">
                    <h5>Client Name :</h5>
                </div>
                <div class=\"col-lg-7 col-md-7 col-sm-7 col-xs-7\">
                    <h5 style=\"border-bottom:1px solid black;\"><span style=\"color:white:\" class=\"text-uppercase text-center\">TIIVA :&nbsp;<span>$username</span></span></h5>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\"></div>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\" style=\"font-family:kok;\">
                    <h5>Shipping Location :</h5>
                </div>
                <div class=\"col-lg-7 col-md-7 col-sm-7 col-xs-7\">
                    <h5 style=\"border-bottom:1px solid black;\"><span style=\"color:white:\" class=\"text-capitalize\">TIIVA :&nbsp;<span class=\"text-uppercase\">$shippingcounty</span>,$shippingaddr</span></h5>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\"></div>
            </div>";
        // CLIENT NAME AND SHIPPING APPEARING ABOVE
        //CLIENT TABLE START
        $contentarraycount = count($cartcontentsarray);
        //echo $contentarraycount;
        echo "
<div class=\"row\">
    <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1\"></div>
    <div class=\"col-lg-10 col-md-10 col-sm-12 col-xs-12\">
<div class=\"table-responsive\">
                <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Site</th>
                        <th>Items</th>
                        <th>Quantity</th>
                        <th>Sold by</th>
                        <th>Price</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
            ";
        for($x = 0; $x < $contentarraycount; $x++){
            //echo $cartcontentsarray[$x].'<br>';
            if(substr($cartcontentsarray[$x],0,1)== 'M'){
                // hii mtush
                //echo "Mtush";
                $dbs = "products";
                $site = "Tiiva Shack";
            }else{
                // hii shop
                //echo "Shop";
                $dbs = "brandyproducts";
                $site = "Tiiva Shop";
            }
            $productself = substr($cartcontentsarray[$x],1,strlen($cartcontentsarray[$x]));
            $queryitem = "SELECT * FROM $dbs WHERE `id`='$productself'";
            //echo $queryitem;
            $queryitemrun = mysqli_query($conn, $queryitem);
            $queryitem_num_rows = mysqli_num_rows($queryitemrun);
            $queryitemrow =  mysqli_fetch_assoc($queryitemrun);
            if($queryitem_num_rows != 0){
                // found item
                //echo $queryitemrow['itemtitle'].' sold by';
                echo "<tr>";

                echo "<td>";
                echo ceil($x + 1);
                echo "</td>";

                echo "<td>";
                echo $site;
                echo "</td>";


                echo "<td>";
                echo $queryitemrow['itemtitle'];
                echo "</td>";

                echo "<td>";
                echo $cartcontentscountarray[$x].' Pcs';
                echo "</td>";

                echo "<td>";
                echo $queryitemrow['sellerid'];
                echo "</td>";

                echo "<td>";
                echo number_format($cartcontentspricearray[$x]).' Ksh';
                echo "</td>";

                 echo "<td>";
                echo number_format(ceil($cartcontentspricearray[$x] * $cartcontentscountarray[$x])).' Ksh';
                echo "</td>";


                echo "</tr>";
//                echo 'SHAK part of the site| itemname'.$queryitemrow['itemtitle'].' items count |'.$cartcontentscountarray[$x].' sold by username|'.$queryitemrow['sellerid'].'selling each item at |'.$cartcontentspricearray[$x].'and each total equals |'.ceil($cartcontentspricearray[$x] * $cartcontentscountarray[$x]).' Ksh<br>';
//
            }else{
                // item not found
            }
        }
        // echo "<tr>";

        // echo "<td colspan=\"6\">";
        // echo "VAT Tax (16%)";
        // echo "</td>";

        // echo "<td>";
        // echo ceil($carttotal * 0.16).' Ksh<br>';
        // echo "</td>";

        // echo "</tr>";

        echo "<tr>";

        echo "<td colspan=\"6\">";
        echo "SHIPPING &nbsp; <span id=\"courier\">$shipping</span>";
        echo "</td>";

        echo "<td>";
        echo "$shipprice";
        echo "</td>";


        echo "</tr>";

        echo "<tr>";

        echo "<td colspan=\"6\">";
        echo "Grand Total";
        echo "</td>";

        echo "<td>";
        echo number_format($grandtotal).' Ksh';
        // echo number_format($carttotal).' Ksh';
        echo "</td>";


        echo "</tr>";


        echo "
                </tbody>
            </table>
</div>

    </div>
    <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1\"></div>
</div>";

        echo "<div class=\"row\" style=\"font-family:kok;\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-md-8 col-sm-8 col-xs-8\">
                        <h4 class=\"text-capitalize\" style=\"\">Payment verified</h4>
                    </div>
                    <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\" style=\"border-bottom:1px solid black;\">
                        <span><h4>TIIVA: &nbsp;$verification</h4></span><span id=\"shippingdays\" style=\"display:none;visibility:hidden;\">$shipping</span>
                    </div>
                </div>
            </div>
        </div>";
        //CLIENT TABLE END

    }else{
        // user cart doesnt exist
        die("Sorry something's wrong");
    }
}else{
    // session expired or the cart doesn't exist
    // advice the user to check his user acount for his receipt
    echo "Nil";
}

?>
