<?php
session_start();
ob_start();
require 'connect.php';
require 'core.inc.php';
require 'utils/adminutils.php';
$salt = "wagwanista";

//echo $_SERVER['REMOTE_ADDR'];
//echo $_SERVER['HTTP_CLIENT_IP'];
//echo $_SERVER['HTTP_X_FORWARDED_FOR'];
// use session trial instead

$me = $_SERVER['REMOTE_ADDR'];


$from = $_SERVER['HTTP_REFERER'];
//echo $from;
if($from != ''){
    $where = $from;
}else{
    $where = 'index.php';
}

function responseBootstCode($messageStrong, $messageDetail){
    return "
                            <div class=\"alert alert-danger\">
                                <a class=\"close\" data-dismiss=\"alert\" href=\"#\">&times;</a>
                                <strong>$messageStrong</strong>
                                <span>$messageDetail</span>
                            </div>
                         ";
}

function checkWhetherUserExists($conn, $username, $password){
    // checks whether the credentials match a user in the db
    $query = "SELECT `id` FROM `users` WHERE `username`='$username' AND `password`='$password' OR `mobilenumber` = '$username' AND `password`='$password' OR `emailaddress` = '$username' AND `password`='$password'";
    $query_run = mysqli_query($conn, $query);
    if(mysqli_num_rows($query_run) == 1){
        // continue
        // return True;
        return mysqli_fetch_assoc($query_run)['id'];
    }else{
        return False;
    }
}

function createSessionLogin($user_id){
    $_SESSION['$user_id'] = $user_id;
}

function createFailAttemptRow($conn, $me){
    // this will create a new entry to failed login attempts
    $query = "INSERT INTO `blockedaccount` (`id`,`ip`,`trial`,`expire`) VALUES ('','$me','1','') ";
    if($query_run = mysqli_query($conn, $query)){
        // continue
        return True;
    }else{
        return False;
    }
}

function retrieveFailedLoginAttempts($conn, $me){
    // this will retrieve the number of failed login attempts
    $query = "SELECT * FROM `blockedaccount` WHERE `ip`='$me'";
    $query_run = mysqli_query($conn, $query);
    if(mysqli_num_rows($query_run) == 1){
        // continue
        return mysqli_fetch_assoc($query_run);
    }else{
        return 0;
    }
}

function updateNumberOfLoginAttempts($conn, $attempts, $me){
    // this will update increasing the number of failed login attempts
    $query = "UPDATE `blockedaccount` SET `trial` = '$attempts' WHERE `ip` = '$me'";
    if($query_run = mysqli_query($conn, $query)){
        return True;
    }else{
        return False;
    }
}

function updateLoginAttemptAndTimeStamp($conn, $attempts, $me){
    // this will update timestamp and login attempts with 
    $now = currentTimeUserProf();
    $expirytime = timeDeltaExtendTimeReturn($now, '30 minutes', 'Y-m-d H:i:s');
    $query = "UPDATE `blockedaccount` SET `trial` = '$attempts', `expire`='$expirytime' WHERE `ip` = '$me'";
    if($query_run = mysqli_query($conn, $query)){
        return True;
    }else{
        return False;
    }
}

function deleteLoginAttemptsrow($conn, $me){
    $query = "DELETE FROM `blockedaccount` WHERE `ip` = '$me'";
    if($query_run = mysqli_query($conn, $query)){
        return True;
    }else{
        return False;
    }
}

function checkWhetherTimehasElapsed($conn, $me){
    // this will query to see whether our current row is older than the current time
    $now = currentTimeUserProf();
    $query = "SELECT * FROM `blockedaccount` WHERE `ip`='$me' AND `expire` < '$now'";
    $query_run = mysqli_query($conn, $query);
    if(mysqli_num_rows($query_run) == 1){
        // continue
        return True;
    }else{
        return False;
    }

}



if(isset($_POST['username']) && isset($_POST['password'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, md5($salt.$_POST['password']));
    // check login attempt number
    $rowdetails = retrieveFailedLoginAttempts($conn, $me);
    $loginAttempts = $rowdetails['trial'];
    if($loginAttempts == 0){
        // continue to attempt fresh login
        $userExist = checkWhetherUserExists($conn, $username, $password);
        if($userExist != False){
            //user exists log him in
            $user_id = $userExist;
            createSessionLogin($user_id);
            echo 1;
        }else{
            //log login attempt
            $failAttemptCreate = createFailAttemptRow($conn, $me);
            if($failAttemptCreate == True){
                // created a row don't flag user just yet
                 die(responseBootstCode('Wrong Credentials Combination ', 'Please Use your Correct Details to Login'));
            }else{
                die(responseBootstCode('Oops', 'Ran into an error'));
            }
        }
    }else{
        // check the number of login attempts
        if($loginAttempts < 2){
            // attempt login
            $attempts = $loginAttempts + 1;
            $userExist = checkWhetherUserExists($conn, $username, $password);
            if($userExist != False){
                // delete login triasl
                $delTrials = deleteLoginAttemptsrow($conn, $me);
                if($delTrials == True){
                    $user_id = $userExist;
                    createSessionLogin($user_id);
                    echo 1;
                }else{
                    die(responseBootstCode('Oops', 'Ran into an error'));
                }
                
            }else{
                $failAttemptUpdate = updateNumberOfLoginAttempts($conn, $attempts, $me);
                if($failAttemptUpdate == True){
                    //continue
                    die(responseBootstCode('Wrong Credentials Combination ', 'Please Use your Correct Details to Login'));
                }else{
                    //error
                    die(responseBootstCode('Oops', 'Ran into an error'));
                }
            }
        }elseif($loginAttempts == 2){
            // create the time expire to 30 mins from now
            $attempts = $loginAttempts + 1;
            $userExist = checkWhetherUserExists($conn, $username, $password);
            if($userExist != False){
                // delete login triasl
                $delTrials = deleteLoginAttemptsrow($conn, $me);
                if($delTrials == True){
                    $user_id = $userExist;
                    createSessionLogin($user_id);
                    echo 1;
                }else{
                    die(responseBootstCode('Oops', 'Ran into an error'));
                }
                
            }else{
                $failAttemptUpdate = updateLoginAttemptAndTimeStamp($conn, $attempts, $me);
                if($failAttemptUpdate == True){
                    //continue
                    die(responseBootstCode('Wrong Credentials Combination ', 'Please try again in 30 minutes'));
                }else{
                    //error
                    die(responseBootstCode('Oops', 'Ran into an error'));
                }
            }

        }else{
            // chech whether time has expired
            $exptime = $rowdetails['expire'];
            // check whether 30 mins have elapsed since then
            $ExpireExpired = checkWhetherTimehasElapsed($conn, $me);
            if($ExpireExpired == True){
                // can now attempt login
               // delete the block row or set it to zero and attempt login
                $delTrials = deleteLoginAttemptsrow($conn, $me);
                if($delTrials == True){
                    // attempt login
                    ///insert code here
                    $userExist = checkWhetherUserExists($conn, $username, $password);
                    if($userExist != False){
                        //user exists log him in
                        $user_id = $userExist;
                        createSessionLogin($user_id);
                        echo 1;
                    }else{
                        //log login attempt
                        $failAttemptCreate = createFailAttemptRow($conn, $me);
                        if($failAttemptCreate == True){
                            // created a row don't flag user just yet
                             die(responseBootstCode('Wrong Credentials Combination ', 'Please Use your Correct Details to Login'));
                        }else{
                            die(responseBootstCode('Oops', 'Ran into an error'));
                        }
                    }
                    ///insert code here
                }else{
                    die(responseBootstCode('Oops', 'Ran into an error'));
                }
            }else{
                //expiry time not matured yet
                die(responseBootstCode('Oops', 'Your login has currently been disabled for 30 minutes till '. $exptime));
            }
            
        }
    }

}else{
    die(responseBootstCode('Oops', 'You literally tried to walk in without a key'));
}
?>
