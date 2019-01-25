<?php
session_start();
ob_start();
require 'connect.php';
$today = Date(Y).'-'.Date(m).'-'.Date(d);
//echo $today.'<br>';

if(isset($_SESSION['$user_id'])){
    //user is logged in so were going to save this in his cart database
    $user_id = 18;
    $salt = 'kakakagrahodksfd';
    $user_id_hashed = md5($user_id.'$salt');
    $itemid = 72;
    $temp_user_id = 10;
    // item id to attach to the database
    // items will be stored as a list from an indexed array with item_id and quantity
    // in this order $array = [item_id, 2, sthelese, 10]
    // where $array[0] is the name and $array[1] is the quantity
    // then exploded into a list
    //ALGORITHM
    //first check whether item exists in his cart against his user id
    // hash and salt the user id in the cart which is then hashed an salted again for comparison
    // all entries in temp cart are unique to the owner and only one row is assigned to a single user
    
    //decided to create a cookie to be renewed every time an item is added to cart
    //THE WEBSITE WILL NEED COOKIES TO BE TURNED ON FOR IT TO FUNCTION 
    if($_COOKIE > 0){
        //Means there are cookies turned on
        // set cookie and try and see if it will be there
        // but first check whether user has a cookie name tiiva
        if(isset($_COOKIE['Tiiva'])){
            // tiiva cookie is present
            //check whether the cookie is empty if not extend expiry time
            $loggedincookievalue = $_COOKIE['Tiiva'];
            setcookie("Tiiva",$loggedincookievalue,time() + (86400 * 21),"/");
            // the cookie variable
            if($_COOKIE > 0){
                $cookievariable = $_COOKIE['Tiiva'];
            }else{
                $cookievariable = '';
            }
    
        }else{
            // tiiva cookie is not present
            // set cookie and check if its present
            $uniquelogged = md5($_SERVER['REMOTE_ADDR'].$today);
            setcookie("Tiiva",$uniquelogged,time() + (86400 * 21),"/");
            // the cookie variable
            if($_COOKIE > 0){
                $cookievariable = $_COOKIE['Tiiva'];
            }else{
                $cookievariable = '';
            }

        }
    }else{
        //means cookies are not turned on
        echo "Please turn on cookies on your browser";
    }
    
    $query = "SELECT * FROM `tempcart` WHERE `owner` = '$user_id'"; 
    // remember to hash and salt the user id later**********
    $query_run = mysqli_query($conn, $query); 
    $query_num_rows = mysqli_num_rows($query_run);
    $query_fetch_assoc = mysqli_fetch_assoc($query_run);
    
    //does cart for the user id provided exist? were checking for the number of rows returned
    if($query_num_rows == 0){
        // user does not have a cart so lets create one
        echo "You do not have a cart sir";
        echo "<br>Lets create one for you";
        //create user cart and add item id and quantity as 1
        //convert new cart item to be added into a string seperated from its value of 1 by a comma 
        $cartitem = $itemid;
        $initial_count = 1;
        $cartitem_count = $initial_count;
        $query_createcart = "INSERT INTO `tempcart` (`id`,`owner`,`items`,`count`,`cartdate`,`cookie`) VALUES ('','$user_id','$cartitem','$cartitem_count','$today','$cookievariable')";
        if($query_createcart_run = mysqli_query($conn, $query_createcart)){
            echo "<br>cart has been created";
        }else{
            echo "Something wrong happened";
        }
        
        
    }else{
        // user has a cart just append data to his items and change the date to current day today
        // but first turn list into an array and check whether item being added is present
        echo "Adding item to your cart";
        echo '<br>Your cart sir ';
        $cart = $query_fetch_assoc['items'];
        $cartarray = explode(',',$cart);
        $cart_count = $query_fetch_assoc['count'];
        $cart_count_array = explode(',',$cart_count);
        //print_r($cartarray);
        //check whether item exists in the array
        if(in_array($itemid,$cartarray)){
            echo '<br> Found';
            // find the item position
            $itemposition = array_search($itemid,$cartarray);
            //increase count in count array same position
            $itemaddcount = $cart_count_array[$itemposition];
            //echo $itemposition;
            $cart_count_array[$itemposition] = ceil($itemaddcount + 1);
            $newcountarray  = array_values($cart_count_array);
            $newcountstring = implode(',',$newcountarray);
            //echo $newcountstring;
            //echo '<br>'.$newcountstring[$itemposition];
            //echo ceil($itemaddcount + 1);
            //print_r($cart_count_array);
            
            $query_update_count = "UPDATE `tempcart` SET  `count` =  '$newcountstring' WHERE  `tempcart`.`owner` ='$user_id'";
            
            if($query_update_count_run = mysqli_query($conn, $query_update_count)){
                echo '<br>count has been updated';
            }else{
                echo 'error something went wrong';
            }
           // print_r($cart_count_array);
            //$cart_count_array[$itemposition] = $cart_count_array[$itemposition] + 1;
            // update item count
        }else{
            echo '<br> No record found';
            //find the size of the array
            // in this case it counts the space as an item so well use count - 1 for all records
            $arraysize = count($cartarray);
            $arraycountsize = count($cart_count_array);
//            array_push($cartarray,$itemid);
//                    $new_cartarray_add_item = array_values($cartarray);
//            array_push($cart_count_array,$itemid);
//                    $new_cartarray_item_count = array_values($cart_count_array);
//            print_r($new_cartarray_add_item);
//            print_r($new_cartarray_item_count);
            $cartarray[ceil($arraysize)] = $itemid;
            $cart_count_array[ceil($arraycountsize)] = 1;
            print_r($cartarray);
            print_r($cart_count_array);
            $insertnewcartarray = implode(',',$cartarray);
            $insertnewcartcountarray = implode(',',$cart_count_array);
            
            $query_insert_item = "UPDATE `tempcart` SET `items`='$insertnewcartarray', `count` =  '$insertnewcartcountarray' WHERE  `tempcart`.`owner` ='$user_id'";
            
            if($query_insert_item_run = mysqli_query($conn, $query_insert_item)){
                echo '<br>count has been inserted';
            }else{
                echo 'error in insert something went wrong';
            }
        }
    }
    
}else{
    // user is not logged in so were goint to use local storage
    // check whether cookies are turned on
    
    if($_COOKIE > 0){
        //echo "cookies are turned on";
        // proceed to create the tiiva cookie
        //first check whether it exists before creating a new instance
        if(isset($_COOKIE['Tiiva'])){
            //echo "cookie is set";
            // because it is already set we wont create a new one maybe
            // just reset it extending the time to expiry
            $inicontent = $_COOKIE['Tiiva'];
            setcookie('Tiiva',$inicontent,time() + (86400 * 21), "/");
            //echo $_COOKIE['Tiiva'];
            //check whether the cookie exists in the database
            $cookiecheckvalue = $_COOKIE['Tiiva'];
            $querycookiecheck = "SELECT * FROM `tempcart` WHERE `cookie` = '$cookiecheckvalue'";
            $query_run_cookiecheck = mysqli_query($conn, $querycookiecheck);
            $query_run_cookiecheck_num_rows = mysqli_num_rows($query_run_cookiecheck);
            $query_fetch_assoc_cookiecheck = mysqli_fetch_assoc($query_run_cookiecheck);
             if($query_run_cookiecheck_num_rows != 0){
                 // cookie is in the database maybe with an owner or without
                 if($query_fetch_assoc_cookiecheck['owner']  != ''){
                     // this database has an owner and is hence not a blank template so update its contents
                     // this database clearly has an owner so we acquire items in the other ownerless same cookie
                     // concatenate them to the database with owner and delete the ownerless row
                     // then update the row with the actual updates 
                    $updateownerfullrowid = $query_fetch_assoc_cookiecheck['id'];
                    $updateownerfullrowitems = $query_fetch_assoc_cookiecheck['items'];
                    $updateownerfullrowcount = $query_fetch_assoc_cookiecheck['count'];
                    $updateownerfullcountarray = explode(',',$updateownerfullrowcount);
                    $updateownerfullarray = explode(',',$updateownerfullrowitems);
                     if(in_array($itemid,$updateownerfullarray)){
                         // item is in the array
                         // find its position and update count with item position
                         $itempositionwithinarraywithowner = array_search($itemid,$updateownerfullarray);
                         $updateownerpositioncountvalue = $updateownerfullcountarray[$itempositionwithinarraywithowner];
                         $updateownerfullcountarray[$itempositionwithinarraywithowner] = ceil($updateownerpositioncountvalue + 1);
                         $newupdateownerfullcountarray = array_values($updateownerfullcountarray);
                         $newupdateownerfullcountstring = implode(',',$newupdateownerfullcountarray);
                         
                         $queryupdateownerow = "UPDATE `tempcart` SET `count` = '$newupdateownerfullcountstring' WHERE `id`='$updateownerfullrowid' AND `owner`!=''";
                             if($anythingcangoinhere = mysqli_query($conn, $queryupdateownerow)){
                                 echo "<br>item was found in the cart and its count has been updated 1";
                             }else{
                                 echo "<br>Something went terribly wrong item was found but cannot be updated 2";
                             }
                         
                     }else{
                         // item is not in the array
                         // push items to end of array and to end of count array with value 1
                         //$ownerfulitemtoaddnotinarray
                         array_push($updateownerfullarray,$itemid);
                         array_push($updateownerfullcountarray,1);
                         $newupdateownerfullarray = array_values($updateownerfullarray);
                         $newupdateownerfullcountarray = array_values($updateownerfullcountarray);
                         
                         $newupdateownerinarrayownerfullstring = implode(',',$newupdateownerfullarray);
                         $newudpateownerinarrayownerfulcountstring = implode(',',$newupdateownerfullcountarray);
                         
                         $queryupdateownerow = "UPDATE `tempcart` SET `count` = '$newudpateownerinarrayownerfulcountstring',`items`='$newupdateownerinarrayownerfullstring' WHERE `id`='$updateownerfullrowid' AND `owner`!=''";
                             if($anythingcangoinhere = mysqli_query($conn, $queryupdateownerow)){
                                 echo "<br>item was found in the cart and its count has been updated 3";
                             }else{
                                 echo "<br>Something went terribly wrong item was found but cannot be updated 4";
                             }
                         
                     }

                     
                     
                 }else{
                     // this database has no owner info on it so 
                     // just update its details nothing more
                     $updateownerlessrowid = $query_fetch_assoc_cookiecheck['id'];
                     $updateownerlessrowitems = $query_fetch_assoc_cookiecheck['items'];
                     $updateownerlessrowcount = $query_fetch_assoc_cookiecheck['count'];
                     $updateownerlessrowitemsarray = explode(',',$updateownerlessrowitems);
                     $updateownerlessrowcountarray = explode(',',$updateownerlessrowcount);
                     if(in_array($itemid, $updateownerlessrowitemsarray)){
                         // item is in array so well just find its position and update count
                         echo "<br> Item is in the cart were going to update its count";
                         $updateownerlessitemposition = array_search($itemid,$updateownerlessrowitemsarray);
                         $updateownerlessiteminpositioncount = $updateownerlessrowcountarray[$updateownerlessitemposition];
                         $updateownerlessrowcountarray[$updateownerlessitemposition] = ceil($updateownerlessiteminpositioncount + 1);
                         $newupdateownerlessrowcountarray = array_values($updateownerlessrowcountarray);
                         $newupdateownerlessrowcountarraystring = implode(',',$newupdateownerlessrowcountarray);
                         //update only the count in the exact position it appears
                         $queryupdateownelessrow = "UPDATE `tempcart` SET `count` = '$newupdateownerlessrowcountarraystring' WHERE `id`='$updateownerlessrowid' AND `owner`=''";
                             if($queryupdateownerlessrowrun = mysqli_query($conn, $queryupdateownelessrow)){
                                 echo "<br>item was found in the cart and its count has been updated";
                             }else{
                                 echo "<br>Something went terribly wrong item was found but cannot be updated";
                             }
                         
                     }else{
                         // item is not in array so update/ insert it and insert count as 1
                         echo "<br>Item is not in the cart. inserting it and giving it a count of 1";
                         array_push($updateownerlessrowitemsarray,$itemid);
                         array_push($updateownerlessrowcountarray,1);
                         $newinsertownerlessrowcountarray = array_values($updateownerlessrowcountarray);
                         $newinsertownerlessrowitemsarray = array_values($updateownerlessrowitemsarray);
                         $newinsertownerlessrowcountarraystring = implode(',',$newinsertownerlessrowcountarray);
                         $newinsertownerlessrowitemsarraystring = implode(',',$newinsertownerlessrowitemsarray);
                         
                         // update the query
                         $queryupdateownelessrow = "UPDATE `tempcart` SET `count` = '$newinsertownerlessrowcountarraystring', `items`='$newinsertownerlessrowitemsarraystring' WHERE `id`='$updateownerlessrowid' AND `owner`=''";
                             if($queryupdateownerlessrowrun = mysqli_query($conn, $queryupdateownelessrow)){
                                 echo "<br>Item wasnt in the cart. It has been added and count updated";
                             }else{
                                 echo "<br>Something went wrong item could not be added into the cart";
                             }    
                     }
                     
                     
                     
                 }
             }else{
                 // cookie is not in the database
                 // create a new row with all details full except owner
                 // this will be dissolved later when the owner id is acquired
             }
        }else{
            echo "cookie is not set";
            // no cookie here so we create one
            setcookie("Tiiva","We love you :)",time() + 10000,"/");
                if(isset($_COOKIE['Tiiva'])){
                    //echo $_COOKIE['Tiiva'];
                    // remove the cookie and create the unique identifier cookie
                    // rewrite the cookie instead
                    // will make this cookie expire faster incase its used by multiple users
                    $cookiename = "Tiiva";//md5 hash the name
                    // make cookiecontent unique i.e ipaddress + date
                    //echo $_SERVER['REMOTE_ADDR'].'  ';
                    //echo $_SERVER['HTTP_CLIENT_IP'].'  ';
                    //echo $_SERVER['HTTP_X_FORWARDED_FOR'].'  ';

                    $unique = md5($_SERVER['REMOTE_ADDR'].$today);
                    $cookiecontent = $unique;//how do we create this
                    setcookie($cookiename,$cookiecontent, time() + (86400* 21), "/");
                            echo $_COOKIE['Tiiva'];





                }else{
                    echo "Please enable cookies on your browser";
                    // cookies are not turned on find another way to locate this user
                }
    
        }
        
    }else{
        echo "Please enable cookies on your browser";
        // notify the user to turn on cookies
    }
    
    
//    $content = "it works";
//    $name = "Tiiva";
//    setcookie($name,$content,time() + 10000, "/");
//    echo $_COOKIE[$name];
 //setcookie("Tiiva","There is a message here",time() - 10000, "/");
    
    
}
?>








