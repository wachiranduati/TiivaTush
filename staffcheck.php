<?php
session_start();
ob_start();
require 'connect.php';
//echo 'yolo';
$salt = md5('chumakuburuka');
echo $staff = md5('staff4online5');


//echo md5($salt.mysqli_real_escape_string($conn, 'pass123'));

if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
    if(!empty($username) && !empty($password)){
        $usernameF = mysqli_real_escape_string($conn, $_POST['username']);
        $passwordF = md5($salt.mysqli_real_escape_string($conn, $_POST['password']));
        //echo $usernameF.' and '.$passwordF;
        $query = "SELECT * FROM `staff` WHERE `username`='$usernameF' AND `password`='$passwordF'";
        $query_run = mysqli_query($conn, $query);
        $query_num_rows = mysqli_num_rows($query_run);
        $query_fetch_assoc = mysqli_fetch_assoc($query_run);
        if($query_num_rows != 0){
            // create session for username id
            $staffid =  $query_fetch_assoc['id'];
            // maybe md5 it to make it more complex

            $_SESSION['$staff'] = $staffid;
            //print_r($_SESSION);
            header('Location:index.php');
        }else{
            // user does not exist// block after trial three
            die('Chao');
        }

    }else{
        die('Error missing value');
    }
}else{
    die('Bie bie');
}
?>
