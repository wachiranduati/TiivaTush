<?php
// session_start();
ob_start();
require 'connect.php';

$current_file = $_SERVER['SCRIPT_NAME'];

if(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])){
    $http_referer = $_SERVER['HTTP_REFERER'];
}

function loggedin(){
    if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
        return true;
    }else{
        return false;
    }
}

function getuserfield($field){
    $query = "SELECT `$field` FROM `users` WHERE `id`='1'";
    if($query_run = mysql_query($query)){
        return mysql_result($query_run, 0, $field);
    }
}

?>
