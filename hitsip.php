<?php
require 'connect.php';
// SHOWS THE CURRENT TRAFFIC EVERY 1 hour
//this timetamps ip addresses every 30mins

// well use the same database 
// if ip has been logged add a cookie showing ip logged 
// check array for particular ip
// log visitorts ips in arrays
// log them 1/2 hourly
$today = Date(Y).'-'.Date(m).'-'.Date(d);

// just log in every ip 
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

// first check whether ip 

//ALGORITHM
// place a cookie, time based to show its been recorded already
// database show ip's in a list collected in that 1 hour period
// databases will be named hourly i.e 0 1 2 3 4 5 6 .... 24
// add ip address to list hourly
// hourly means in the next hour a new row is created where a list is created

// so check in the current hour's row for date today
echo $today;
echo Date(H);
$time = Date(H);
checkip2($ip1,$today,$time);
function checkip2($ip1,$today,$time){ 
    // first return items from row in current time
            $query = "SELECT * FROM `hits` WHERE `Day`='$today' AND `Time`='$time'";
    // HIDDEN THE ABOVE QUERY
            //$query = "SELECT * FROM `hits` WHERE `Day`='2017-11-07' AND `Time`='01'";
    // check whether the row exists then explode the string
            $query_run = mysqli_query($conn, $query);
    
            if(mysqli_num_rows($query_run) <= 0){
                // row doesnt exist so create one
                // for sales ip why not query the ip against sales instead of having to search throught 
                // lots of data
                $querycheckipsales = "SELECT * FROM `salesip` WHERE `ipwithsales`='$ip1'";
                $querycheckipsales_run = mysqli_query($conn, $querycheckipsales);
                $querycheckipsales_num_rows = mysqli_num_rows($querycheckipsales_run);
                if($querycheckipsales_num_rows == 0){
                    // ip doesnt exist in sales....its a windowshoppers ip
                    // insert to database column regular plus 1, return plus 0
                    $regular = 1;
                    $return = 0;
                }else{
                    // ip exists in the sales database ....its a returning buyer
                    //inset to database value regular plus 0 , return plus 1
                    $regular = 0;
                    $return = 1;
                }
//                echo $regular;
//                echo $return;
                
                $queryinsert = "INSERT INTO `hits` (`id`,`Day`,`Time`,`ips`,`traffick`,`regular`,`return`) VALUES ('','$today','$time','$ip1','1','$regular','$return')";
                if(mysqli_query($conn, $queryinsert)){
                    echo "<br>Row has been created and ip inserted with traffick 1";
                }
            }else{
                
                
                // row exists so search for ip in list
                // return the ips list
                echo "<br>Row exists so search for ip in list";
                $row = mysqli_fetch_assoc($query_run);
                echo '<br>'.$row['ips'];
                $regularcount = $row['regular'];
                $returncount = $row['return'];
                $iplist = $row['ips'];
                $iplistsarray = explode(',',$iplist);
                //print_r($iplistsarray);
                // search for ip
                if(in_array($ip1,$iplistsarray)){
                    // ip address in the array
                    // do nothing
                    echo "<br> Ip is in the array";
                }else{
                    // ip address not in the array
                    echo "<br> Ip is not in the array";
                    // also check whether the ip is in the other database
                    // checking for ips from sales in this traffick ips
                    $querycheckipsales = "SELECT * FROM `salesip` WHERE `ipwithsales`='$ip1'";
                    $querycheckipsales_run = mysqli_query($conn, $querycheckipsales);
                    $querycheckipsales_num_rows = mysqli_num_rows($querycheckipsales_run);
                    if($querycheckipsales_num_rows == 0){
                        // ip doesnt exist in sales....its a windowshoppers ip
                        // insert to database column regular plus 1, return plus 0
                        $regular = $regularcount + 1;
                        $return = $regularcount+ 0;
                    }else{
                        // ip exists in the sales database ....its a returning buyer
                        //inset to database value regular plus 0 , return plus 1
                        $regular = $regularcount+ 0;
                        $return = $regularcount+ 1;
                    }
                    //ends here checking for ips
                    // add ip address to array using push
                    array_push($iplistsarray,$ip1);
                    $newiplistsarray = array_values($iplistsarray);
                    // turn array into a string
                    $newiplistsarraystring = implode(',',$newiplistsarray);
                    $ipcount = count($newiplistsarray);
                    echo '<br>'.$ipcount;
                    //update the database
                    $querynewdatabase = "UPDATE `hits` SET `ips`='$newiplistsarraystring', `traffick`='$ipcount', `regular`='$regular', `return`='$return' WHERE `Day`='$today' AND `Time`='$time'" ;
                    if(mysqli_query($conn, $querynewdatabase)){
                        echo "Database has been updated";
                    }else{
                        echo "Database update ran into some error";
                    }
                }
            }
    // ip is in a list so we have to do an array_search
            
    }

?>
















