<?php
ob_start();
session_start();
require 'connect.php';
$today = Date(Y).'-'.Date(m).'-'.Date(d);
$time = Date(H).':'.Date(i).':'.Date(s);
$me = $_SERVER['REMOTE_ADDR'];


if(isset($_POST['Sname']) && isset($_POST['Fname']) && isset($_POST['Lname']) && isset($_POST['idno']) && isset($_POST['phone']) && isset($_POST['businesstype']) && isset($_POST['country']) && isset($_POST['county']) && isset($_POST['township']) && isset($_POST['businessname'])){
    $surname = $_POST['Sname'];
    $firstname = $_POST['Fname'];
    $lastname = $_POST['Lname'];
    $idno = $_POST['idno'];
    $phone = $_POST['phone'];
    $businesstype = $_POST['businesstype'];
    $business = $_POST['businessname'];
    $country = $_POST['country'];
    $county = $_POST['county'];
    $township = $_POST['township'];
    if(!empty($surname) && !empty($firstname) && !empty($lastname) && !empty($idno) && !empty($phone) && !empty($businesstype) && !empty($country) && !empty($county) && !empty($township) && !empty($business)){
        //echo $surname.' '.$firstname.' '.$idno.' '.$phone.' '.$businesstype.' '.$country.' '.$county.' '.$township;
        // insert the values into a database
        $query = "INSERT INTO `Merchants` (`id`,`surname`,`firstname`,`lastname`,`idno`,`phonenumber`,`businesstype`,`country`,`county`,`township`,`day`,`time`,`ips`,`gps`,`activate`,`agent`,`businessname`) VALUES ('','$surname','$firstname','$lastname','$idno','$phone','$businesstype','$country','$county','$township','$today','$time','$me','','','','$business')";
        if($query_run = mysqli_query($conn, $query)){
            //echo "Kudos";
            echo "
                    <div class=\"alert alert-success\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
                        <strong>Sucess!!</strong>
                        <span>Your Merchant account has successfully been registered.</span>
                    </div>
                ";
        }else{
            //echo "Error. Please try again later";
            //echo mysqli_error();
            echo "
                    <div class=\"alert alert-danger\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
                        <strong>Error!!</strong>
                        <span>Please try again later.</span>
                    </div>
                ";
        }
        
        
    }else{
        die("Something is wrong");
        //echo mysqli_error();
    }
}else{
    die("Somethings wrong");
    //echo mysqli_error();
}
?>

