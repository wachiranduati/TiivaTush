<?php
require 'connect.php';
// THIS JUST ADDS USER IP ADDRESS TO HITS_IP UNDER TIMESTAMP
//this just logs in new ip addresses in a list
// log an ip and include the timestamp
//echo "Were here";
$today = Date(Y).'-'.Date(m).'-'.Date(d);
$time = Date(H).':'.Date(i).':'.Date(s);
//echo $time;
$myip = "myipaddress";
$me = md5($myip);
//echo $me;
//echo $_SERVER['REMOTE_ADDR'];
$ip1 = $_SERVER['REMOTE_ADDR'];
//echo $_SERVER['HTTP_CLIENT_IP'];
//$ip2 = $_SERVER['HTTP_CLIENT_IP'];
//echo $_SERVER['HTTP_X_FORWARDED_FOR'];
//$ip3 = $_SERVER['HTTP_X_FORWARDED_FOR'];
//add a more intricate design later for an ip check

$cookiestatus = $_COOKIE[$me];
if(isset($cookiestatus)){
    // users ip has already been logged
    // do nothing else except compare the cookie with his actual ip
    //echo "Yes";

    if($cookiestatus == $ip1){
        echo "Cookie is the same ip";
        // do nothing
    }else{
        echo "Cookie is not the same ip";
        // cookie has been tampered with or ip has changed log it
        setcookie($me,$ip1,time() + (86400 + 300),"/");
        checkip($ip1,$today,$time);

    }
}else{
    //echo "No";
    // users ip has not yet been logged
    // set cookie and call function
    // check whether cookies are enabled if not just log the ip
    if($_COOKIE > 0){
        // COOKIES are enabled so create the cookie and call the function
        setcookie($me,$ip1,time() + (86400 + 300),"/");
        checkip($ip1,$today,$time);
    }else{
        // cookies are not enable so just call the function
        checkip($ip1,$today,$time);
    }
}
function checkip($ip1,$today,$time){ 
            $query = "SELECT * FROM `hits_ip` WHERE `ip`='$ip1'";
            $query_run = mysql_query($query);
            $query_num_rows = mysql_num_rows($query_run);
            if($query_num_rows == 0){
                echo '<br>no ip here buster';
                // add your ip address
                $queryip = "INSERT INTO `hits_ip` (`id`,`ip`,`date`,`time`) VALUES ('','$ip1','$today','$time')";
                if(mysql_query($queryip)){
                    echo "Your ip has been added to the database";
                }else{
                    echo "Must have run into some error";
                }
                
            }else{
                // do nothing
                // this must mean the cookie was previously cleared
                echo '<br>ip already here buster';
            }
    }
?>











