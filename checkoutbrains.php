<?php
ob_start();
session_start();
require 'search.inc.php';
require 'connect.php';
//require 'somethingdelete.php';

if(isset($_SESSION['$user_id'])){
    $user = $_SESSION['$user_id'];
    $toreg = $user + 21;
}else{
    $toreg = 1;
}
//mysql_real_escape_string()

$today = date(Y).'-'.date(m).'-'.date(d);
$time = Date(H).':'.Date(i).':'.Date(s);

//echo $today;

$dbs = 'brandyproducts';
$cartame = 'shopcart';
$dbsother = 'products';
$cartameother = 'shackcart';



    $sql = "SELECT * FROM `products` WHERE id IN (";
    foreach($_SESSION['shackcart'] as $id => $value){
        $sql.=$id.",";
    }

    $sql = substr($sql, 0, -1).") ORDER BY itemtitle ASC";
    $query = mysql_query($sql);
    $totalprice = 0;
    if($_SESSION['shackcart'][$id]['quantity'] != 0){
        while($row=mysql_fetch_assoc($query)){
            echo "<tr>";
        $subtotal = $_SESSION['shackcart'][$row['id']]['quantity']*$row['price'];
        $quantity = strval($_SESSION['shackcart'][$row['id']]['quantity']);
        $count .= $quantity.',';

        $itemid = strval($row['id']);
        $totalitemids .= 'M'.$itemid.',';

        $rowtotal = strval($_SESSION['shackcart'][$row['id']]['quantity']*$row['price']);
        $rowtotals .= $rowtotal.',';

        $rowprice = strval($row['price']);
        $rowprices .= $rowprice.',';

        $totalprice += $subtotal;


    }

    }
    // the other part beginning
    $sql = "SELECT * FROM `brandyproducts` WHERE id IN (";
    foreach($_SESSION['shopcart'] as $id => $value){
        $sql.=$id.",";
    }

    $sql = substr($sql, 0, -1).") ORDER BY itemtitle ASC";
    $query = mysql_query($sql);
    //$totalprice = 0;
    if($_SESSION['shopcart'][$id]['quantity'] != 0){
        while($row=mysql_fetch_assoc($query)){
            echo "<tr>";
        $subtotal = $_SESSION['shopcart'][$row['id']]['quantity']*$row['price'];
        $quantity = strval($_SESSION['shopcart'][$row['id']]['quantity']);
        $count .= $quantity.',';

        $itemid = strval($row['id']);
        $totalitemids .= 'S'.$itemid.',';

        $rowtotal = strval($_SESSION['shopcart'][$row['id']]['quantity']*$row['price']);
        $rowtotals .= $rowtotal.',';

        $rowprice = strval($row['price']);
        $rowprices .= $rowprice.',';

        $totalprice += $subtotal;


    }
        $newtotalitemids = rtrim($totalitemids,',');

        $newcount = rtrim($count,',');

        $newrowprices = rtrim($rowprices,',');

        $newrowtotals = rtrim($rowtotals,',');

    }
    // the other part ending

    // the original code copy
    // $sql = "SELECT * FROM `products` WHERE id IN (";
    // foreach($_SESSION['shackcart'] as $id => $value){
    //     $sql.=$id.",";
    // }
    //
    // $sql = substr($sql, 0, -1).") ORDER BY itemtitle ASC";
    // $query = mysql_query($sql);
    // $totalprice = 0;
    // if($_SESSION['shackcart'][$id]['quantity'] != 0){
    //     while($row=mysql_fetch_assoc($query)){
    //         echo "<tr>";
    //     $subtotal = $_SESSION['shackcart'][$row['id']]['quantity']*$row['price'];
    //     $quantity = strval($_SESSION['shackcart'][$row['id']]['quantity']);
    //     $count .= $quantity.',';
    //
    //     $itemid = strval($row['id']);
    //     $totalitemids .= $itemid.',';
    //
    //     $rowtotal = strval($_SESSION['shackcart'][$row['id']]['quantity']*$row['price']);
    //     $rowtotals .= $rowtotal.',';
    //
    //     $rowprice = strval($row['price']);
    //     $rowprices .= $rowprice.',';
    //
    //     $totalprice += $subtotal;
    //
    //
    // }
    //     $newtotalitemids = rtrim($totalitemids,',');
    //
    //     $newcount = rtrim($count,',');
    //
    //     $newrowprices = rtrim($rowprices,',');
    //
    //     $newrowtotals = rtrim($rowtotals,',');
    //
    // }
    // the original code copy


if(isset($_POST['username']) ||
   isset($_POST['useridno']) ||
   isset($_POST['emailaddress']) ||
   isset($_POST['phonenumber']) ||
   isset($_POST['county']) ||
   isset($_POST['shipping']) ||
   isset($_POST['area']) ||
   isset($_POST['transcationinputid']) ||
   isset($_POST['details'])){
    $username = $_POST['username'];
    $useridno = $_POST['useridno'];
    $emailaddress = $_POST['emailaddress'];
    $phonenumber = $_POST['phonenumber'];
    $county = $_POST['county'];
    $shipping = $_POST['shipping'];
    $area = $_POST['area'];
    $transcationinputid = strtoupper($_POST['transcationinputid']);
    $details = mysql_escape_string($_POST['details']);

    $phoneno = $phonenumber;
    $salt = "Dance3imefika2mashinanee";
    $today = Date(Y).'-'.Date(m).'-'.Date(d);
    $time = Date(H).':'.Date(i).':'.Date(s);
    $cartname = md5($phoneno.$salt.$today.$time);

    if(!empty($username)){
        //echo "Username provided<br>".$username;
        if(!empty($phonenumber)){
            //echo "User phone matches out ";
            if(!empty($county)){
                //echo "You provided us with your correct county ";
                if(!empty($area)){
                    //echo "Thankyou, you just provided us with your location ";
                    if(!empty($details)){
                        //echo $username.' '.$useridno.' '.$emailaddress.' '.$phonenumber.' '.$county.' '.$area.' '.$details;
                        //echo "Thankyou, we are working on your order.";
                        $query = "INSERT INTO  `a_database`.`sold` (`id` ,`names` ,`identity` ,`email` ,`phone` ,`county` ,`area` ,`details` ,`date`,`cartname`,`shipping`)VALUES (NULL ,  '$username',  '$useridno',  '$emailaddress',  '$phonenumber',  '$county',  '$area',  '$details',  '$today','$cartname','$shipping')";

                        if($query_run = mysql_query($query)){
                            //echo "We have received your order, We will get in touch.";
//                            echo "<div class=\"alert alert-success\">
//                                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
//                                    <strong>Success!!</strong>
//                                    <span>Order received. We will get in-touch.</span>
//                                </div>";
                            // create row in checkoutcarts with cartname contents count and date and verification
                            $querycart = "INSERT INTO  `checkoutcarts` (`cartid` ,`customer_id` ,`cartname` ,`cartcontents`,`itemprice` ,`count` ,`carttotal` ,`paymentverification` ,`date`,`time`,`status`,`updated`,`pickupstat`)VALUES (NULL ,  '$toreg','$cartname','$newtotalitemids','$newrowprices','$newcount','$totalprice','$transcationinputid','$today','$time','SOLD','0','INCOMPLETE')";

                            if($query_runcart = mysql_query($querycart)){
                            echo "<div class=\"alert alert-success\">
                                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
                                    <strong>Success!!</strong>
                                    <span>Order received. We will get in-touch.</span>
                                </div>";
                                // create cartname session
                                //session_destroy($_SESSION['cart']);// remove the cart from php session
                                //SESSION DESTROY DIDNT WOK
                                //unset($_SESSION['cart']);
                                $_SESSION['cartname'] = $cartname;
                            }else{
                                echo "<div class=\"alert alert-danger\">
                                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
                                    <strong>Error</strong>
                                    <span>Something went wrong</span>
                                </div>";
                            }

                        }else{
                            //echo "Something went wrong";
                            echo "<div class=\"alert alert-danger\">
                                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
                                    <strong>Error</strong>
                                    <span>Something went wrong</span>
                                </div>";
                        }
                    }else{
                        //echo "It is advisable that you provide us with extra details on delivery of your package";
                        echo "<div class=\"alert alert-danger\">
                                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
                                    <strong>Error!!</strong>
                                    <span>It is advisable that you provide us with extra details on delivery of your package</span>
                                </div>";
                    }
                }else{
                    //echo "You must provide us with your location";
                    echo "<div class=\"alert alert-danger\">
                                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
                                    <strong>Error!!</strong>
                                    <span>You must provide us with your location</span>
                                </div>";
                }
            }else{
                //echo "You must provide us with your correct county";
                echo "<div class=\"alert alert-danger\">
                                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
                                    <strong>Error!!</strong>
                                    <span>You must provide us with your correct county</span>
                                </div>";
            }
        }else{
            //echo "You need to provide us with your phone no";
            echo "<div class=\"alert alert-danger\">
                                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
                                    <strong>Error!!</strong>
                                    <span>You need to provide us with your phone number</span>
                                </div>";
        }

    }else{
        //echo "You need to provide us with your full names";
        echo "<div class=\"alert alert-danger\">
                                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
                                    <strong>Error!!</strong>
                                    <span>You need to provide us with your full names</span>
                                </div>";
    }
}
?>
