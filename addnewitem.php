<?php
ob_start();
session_start();
require 'connect.php';
require 'core.inc.php';
//echo $_SESSION['$user_id'];
$buyer = $_SESSION['$user_id'];
$none = 0;

$str = "Hello world. It's a beautiful day.";
$strarr = explode(" ",$str);
//print_r($strarr);

$strimp = implode(" ",$strarr);
$key = array_search('beautiful',$strarr);
//echo $newarr = unset($strarr['a']);
unset($strarr[$key]);
$strarr2 = array_values($strarr);
//print_r($newarr);
print_r($strarr2);

//value of the cookie will be the get data sent by the onclick ajax call on
// add to cart new shop item with the item id as the data i.e as $_GET['data']

$data = $_GET['data'];

//$cars = array('bmw','toyota','bentley');
//if(in_array('bmw',$cars)){
//    echo "bmw is in teh cars array";
//}

$cookiename =  md5($_SESSION['$user_id'].'cooksieairmark');
//echo $cookiename;
//$cart[0]= $data;
////echo count($cart);
////echo $data;
//echo $cart[0];

    
    
if(isset($_COOKIE[$cookiename])){
    echo "cookie was found";
    // that it was found well only add a value to its end and increase its expiry date
    if(in_array($data,$cart)){
        echo "$data is in the cookie array add its value to its name";
            foreach($cart as $items => $items_value){
                if($items == $data){
                    echo "add 1 to the value of $data in the array";
                    $items_value ++;
                    $cart[$data] = $items_value;
                    setcookie($cookiename,serialize($cart), time() + (86400 * 30),"/");

                    
                }else{
                    echo "none of the items in the array was $data";
                }
            }
    }else{
        echo "$data is not in the cookie array, find count no need and add it";
        $cart[$data] = "1";
        setcookie($cookiename,serialize($cart), time() + (86400 * 30),"/");
        foreach($cart as $items => $items_value){
        echo "$items_value pieces of $items";
        }

    }
    
}else{
    echo "Cookie was not found";
    // that it wasnt found we'll create a new cookie with the same name
    $cart[$data]= "1";
    setcookie($cookiename,serialize($cart), time() + (86400 * 30),"/");
    //display the items in the cookie
    foreach($cart as $items => $items_value){
        echo "$items_value pieces of $items";
    }
}


?>