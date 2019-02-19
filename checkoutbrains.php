<?php
session_start();
ob_start();
require 'search.inc.php';
require 'core.inc.php';
require 'utils/userutils.php';

$today = date('Y-m-d');
$time = Date('H:i:s');

if(userLoggedIn() == True){
    $userid = getUserID();
}else{
    header('Location:index.php');
    die('Nothing to checkout');
}

$row = returncartItems($conn, 'products');

$cartcontents = ''; //M12, M23
$itemprice = ''; // 200,300
$itemcount = ''; // 12,1,3
$carttotal = 0; // grandtotal

$counter = 0;
while($counter < count($row)){
    $cartcontents .= 'M'.$row[$counter]['id'].',';

    $itemcount .= '1,';

    $itemprice .= $row[$counter]['price'].',';

    $carttotal += $row[$counter]['price'];

    $counter++;
}
$cartcontents = rtrim($cartcontents, ',');
$itemcount = rtrim($itemcount, ',');
$itemprice = rtrim($itemprice, ',');

// echo $cartcontents;
// echo '<br>';
// echo $itemcount;
// echo '<br>';
// echo $itemprice;
// echo '<br>';
// echo $carttotal;




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
    $details = mysqli_escape_string($conn, $_POST['details']);

    $phoneno = $phonenumber;
    $salt = "Dance3imefika2mashinanee";
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
                        
                        $query = "INSERT INTO `sold` (`id` ,`names` ,`identity` ,`email` ,`phone` ,`county` ,`area` ,`details` ,`date`,`cartname`,`shipping`)VALUES (NULL ,  '$username',  '$useridno',  '$emailaddress',  '$phonenumber',  '$county',  '$area',  '$details',  '$today','$cartname','$shipping')";

                        if($query_run = mysqli_query($conn, $query)){
                            
                            $querycart = "INSERT INTO  `checkoutcarts` (`cartid` ,`customer_id` ,`cartname` ,`cartcontents`,`itemprice` ,`count` ,`carttotal` ,`paymentverification` ,`date`,`time`,`status`,`updated`,`pickupstat`, `clear`)VALUES (NULL ,  '$userid','$cartname','$cartcontents','$itemprice','$itemcount','$carttotal','$transcationinputid','$today','$time','SOLD','0','INCOMPLETE', '0')";

                            if($query_runcart = mysqli_query($conn, $querycart)){
                                // check the cartactivity field to pause countdown
                                $query_up_cart_check = "UPDATE `cartactivity` SET `checked` = 1 WHERE `userid` = $userid AND `state` = 'cart'";
                                if($query_upc_run = mysqli_query($conn, $query_up_cart_check)){
                                    // update sold to 1 for all the items
                                    $query_sold = "UPDATE `products` SET `sold` = '1' WHERE `buyer` = $userid AND `sold` = 0 AND `availability` = 0";
                                    if($query_sold_run = mysqli_query($conn, $query_sold)){
                                        echo 1;
                                    }else{
                                        echo "<div class=\"alert alert-danger\">
                                            <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
                                            <strong>Error</strong>
                                            <span>Something went wrong</span>
                                        </div>";
                                    }
                                }else{
                                    echo "<div class=\"alert alert-danger\">
                                            <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
                                            <strong>Error</strong>
                                            <span>Something went wrong</span>
                                        </div>";
                                }
                            // echo "<div class=\"alert alert-success\">
                            //         <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
                            //         <strong>Success!!</strong>
                            //         <span>Order received. We will get in-touch.</span>
                            //     </div>";
                                
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
                                    <strong>One more thing!!</strong>
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
