<?php
session_start();
ob_start();
require 'connect.php';
require 'core.inc.php';
$salt = "wagwanista";

//echo $_SERVER['REMOTE_ADDR'];
//echo $_SERVER['HTTP_CLIENT_IP'];
//echo $_SERVER['HTTP_X_FORWARDED_FOR'];

$me = $_SERVER['REMOTE_ADDR'];


$from = $_SERVER['HTTP_REFERER'];
//echo $from;
if($from != ''){
    $where = $from;
}else{
    $where = 'index.php';
}

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, md5($salt.$_POST['password']));
    
    $query = "SELECT `id` FROM `users` WHERE `username`='$username' OR `emailaddress`='$username' OR `mobilenumber`='$username' AND `password`='$password'";
    $query_run = mysqli_query($conn, $query);
    $query_num_rows = mysqli_num_rows($query_run);
    if($query_num_rows == 0){
        //echo 'Wrong username/password combination';
        // theres an error....first check the trial error with this ip
        // so here were blocking the ip and notify the user
        // and create a cookie
        $query_trial = "SELECT * FROM `blockedaccount` WHERE `ip`='$me'";
        $querytrial_run = mysqli_query($conn, $query_trial);
        $querytrial_num_rows = mysqli_num_rows($querytrial_run);
        $querytrial_row = mysqli_fetch_assoc($querytrial_run);
        if($querytrial_num_rows == 0){
            //first trial to be logged here
            $querytrialinsert = "INSERT INTO `blockedaccount` (`id`,`ip`,`trial`,`block`) VALUES ('','$me','1','0') ";
            if($querytrialinsert_run = mysqli_query($conn, $querytrialinsert)){
                // you have 2 more trials left
                echo "
                            <div class=\"alert alert-danger\">
                                <a class=\"close\" data-dismiss=\"alert\" href=\"#\">&times;</a>
                                <strong>Wrong username/password combination</strong>
                                <span>You have 2 trials left before your account is blocked</span>
                            </div>
                         ";
            }else{
                // ran into an error
                die("
                    <div class=\"alert alert-danger\">
                        <a class=\"close\" data-dismiss=\"alert\" href=\"#\">&times;</a>
                        <strong>Error!!</strong>
                        <span>Sorry ;( We seem to have encountered a problem</span>
                    </div>"
                       );
            }
        }else{
            // trials have been logged
            // check the count value if three block if not update it
            // once it gets to three block the ip
            $trials = $querytrial_row['trial'];
            
            if($trials < 3){
                // update the value
                $trialupdate = $trials + 1;
                $queryupdatetrial =  "UPDATE `blockedaccount` SET `trial`='$trialupdate' WHERE `ip`='$me'";
                if($queryupdatetrial_run = mysqli_query($conn, $queryupdatetrial)){
                    // updated echo remaining tries
                    $remaining = 3 - $trialupdate;
                    echo "
                            <div class=\"alert alert-danger\">
                                <a class=\"close\" data-dismiss=\"alert\" href=\"#\">&times;</a>
                                <strong>Wrong username/password combination</strong>
                                <span>Sorry, You have $remaining trial(s) left before your account is blocked.</span>
                            </div>
                         ";
                }else{
                    // error
                    die("
                    <div class=\"alert alert-danger\">
                        <a class=\"close\" data-dismiss=\"alert\" href=\"#\">&times;</a>
                        <strong>Error!!</strong>
                        <span>Sorry ;( We seem to have encountered a problem</span>
                    </div>"
                       );
                }
            }else{
                // maximum trials achieved block account
                $queryblocktrials = "UPDATE `blockedaccount` SET `block`='1' WHERE `ip`='$me' AND `trial`='3'";
                if($queryblock_run = mysqli_query($conn, $queryblocktrials)){
                    // account blocked
                    
                    echo "
                            <div class=\"alert alert-danger\">
                                <a class=\"close\" data-dismiss=\"alert\" href=\"#\">&times;</a>
                                <strong>Wrong username/password combination</strong>
                                <span>Sorry, Your account has been blocked.Please contact us to regain access to your account.</span>
                            </div>
                         ";
                    
                }else{
                    // error
                    die("
                    <div class=\"alert alert-danger\">
                        <a class=\"close\" data-dismiss=\"alert\" href=\"#\">&times;</a>
                        <strong>Error!!</strong>
                        <span>Sorry ;(  we seem to have encountered a problem</span>
                    </div>"
                       );
                }
            }
            
        }
//        echo "
//                    <div class=\"alert alert-danger\">
//                        <a class=\"close\" data-dismiss=\"alert\" href=\"#\">&times;</a>
//                        <strong>Error!!</strong>
//                        <span>Wrong username/password combination</span>
//                    </div>
//            ";
        
    }else {
       // echo 'Details matched out';
        // $user_id = mysqli_result($conn, $query_run, 0, 'id');
        // $_SESSION['$user_id'] = $user_id;
        $attemplogn = mysqli_fetch_assoc($query_run);
        $user_id = $attemplogn['id'];
        $_SESSION['$user_id'] = $user_id;
        //echo "Session id created ".$user_id;
        //echo "created";
//        echo "
//                <div class=\"alert alert-success\">
//                    <a class=\"close\" data-dismiss=\"alert\" href=\"#\">&times;</a>
//                    <strong>Success!!</strong>
//                    <span>You have successfully logged in</span>
//                </div>
//            ";
       echo "
                <div class=\"row\" style=\"visibility:hidden;display:none;\">
                    <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\" id=\"casee\">1</div>
                    <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\" id=\"where\">$where</div>
                </div>
            ";
       //header('Location:index.php');
        
       //header('Location:'.$http_referer);
        //echo $user_id;
        
    }
    
}else{
    echo "
            <div class=\"alert alert-danger\">
                <a class=\"close\" data-dismiss=\"alert\" href=\"#\">&times;</a>
                <strong>Error!!</strong>
                <span>Sorry something is wrong</span>
            </div>
        ";
}
?>
