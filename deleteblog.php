<?php
ob_start();
session_start();
require 'connect.php';
$me = $_SESSION['$user_id'];
//echo isset($_SESSION['$user_id']);
if(isset($_SESSION['$user_id'])){
    //find user name
            $query2 = "SELECT `stagename` FROM `users` WHERE `id`='".mysql_real_escape_string($me)."'";
            $query_run2 = mysql_query($query2);
            $query_rows2 = mysql_fetch_assoc($query_run2);
            $thewritter = $query_rows2['stagename'];
    
    if(isset($_POST['current'])){
        $id = $_POST['current'];
        $query = "SELECT `writter`,`title` FROM `blogs` WHERE `id`='$id' AND `writter`='$thewritter'";
        $query_run = mysql_query($query);
        $query_fetch_assoc = mysql_fetch_assoc($query_run);
        $title = $query_fetch_assoc['title'];
        $query_num_rows = mysql_num_rows($query_run);
        if($query_num_rows == 1){
            $query3 = "UPDATE `blogs` SET `remove`='1' WHERE `id`='$id'";
            if($query_run3 = mysql_query($query3)){
               
                 echo "
                    <div class=\"alert alert-success\">
                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
                    <strong>Success!</strong> <span class=\"text-uppercase\"><<<< $title >>>>></span>&nbsp; has successfully been deleted :(

                    </div>
                    "; 
                
            }else{
               
                echo "
                    <div class=\"alert alert-success\">
                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
                    <strong>Success!</strong> <span class=\"text-uppercase\"><<<< Process encountered a problem Please try again later >>>>></span>

                    </div>
                    ";
                
            }
        }else{
            die();
        }
    }else{
        die();
    }
    
}else{
    die ("You must be logged in to delete this post");
}



?>