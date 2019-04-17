<?php
ob_start();
session_start();
require 'connect.php';
require 'utils/userutils.php';

$today = Date('Y-m-d');
$time = Date('H:i:s');
$me = $_SERVER['REMOTE_ADDR'];
if(isset($_SESSION['$user_id'])){
        $user_id = $_SESSION['$user_id'];
}else{
    die('Error! You need to be logged in as a user first');
}

if(userLoggedIn() != True){
    die('Error! You need to be logged in as a user first');
}

if(isUserMerchant($conn) == True){
    die('Error! You are already registered as a merchant');
}


if(isset($_POST['Sname']) && isset($_POST['Fname']) && isset($_POST['Lname']) && isset($_POST['idno']) && isset($_POST['phone']) && isset($_POST['businesstype']) && isset($_POST['country']) && isset($_POST['county']) && isset($_POST['township']) && isset($_POST['businessname'])){
    $surname = mysqli_real_escape_string($conn, $_POST['Sname']);
    $firstname = mysqli_real_escape_string($conn, $_POST['Fname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['Lname']);
    $idno = mysqli_real_escape_string($conn, $_POST['idno']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $businesstype = mysqli_real_escape_string($conn, $_POST['businesstype']);
    $business = mysqli_real_escape_string($conn, $_POST['businessname']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $county = mysqli_real_escape_string($conn, $_POST['county']);
    $township = mysqli_real_escape_string($conn, $_POST['township']);
    if(!empty($surname) && !empty($firstname) && !empty($lastname) && !empty($idno) && !empty($phone) && !empty($businesstype) && !empty($country) && !empty($county) && !empty($township) && !empty($business)){
        //echo $surname.' '.$firstname.' '.$idno.' '.$phone.' '.$businesstype.' '.$country.' '.$county.' '.$township;
        // insert the values into a database
        $query = "INSERT INTO `merchants` (`id`,`surname`,`firstname`,`lastname`,`idno`,`phonenumber`,`businesstype`,`country`,`county`,`township`,`day`,`time`,`ips`,`gps`,`activate`,`agent`,`businessname`, `userid`) VALUES ('','$surname','$firstname','$lastname','$idno','$phone','$businesstype','$country','$county','$township','$today','$time','$me','','','','$business', '$user_id')";
        if($query_run = mysqli_query($conn, $query)){
            //echo "Kudos";
            echo "
                    <div class=\"alert alert-success\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
                        <strong>Sucess!!</strong>
                        <span>Your Merchant account has successfully been registered. you will be redirected to your new merchant account in 4 seconds. Please wait</span>
                    </div>
                ";
        }else{
            //echo "Error. Please try again later";
            // echo mysqli_error($conn);
            echo "
                    <div class=\"alert alert-danger\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
                        <strong>Error!!</strong>
                        <span>One of the required fields is missing. Please try again</span>
                    </div>
                ";
        }
        
        
    }else{
        // die("Something is wrong");
        //echo mysqli_error();
        echo "
                    <div class=\"alert alert-danger\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
                        <strong>Error!!</strong>
                        <span>One of the required fields is missing. Please try again</span>
                    </div>
                ";
    }
}else{
    // die("Somethings wrong");
    //echo mysqli_error();
    echo "
                    <div class=\"alert alert-danger\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
                        <strong>Error!!</strong>
                        <span>One of the required fields is missing. Please try again</span>
                    </div>
                ";
}
?>

