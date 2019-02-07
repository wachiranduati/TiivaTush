<?php
ob_start();
session_start();
require 'search.inc.php';
require 'connect.php';
require 'utils/displayutils.php';
    
$today = Date('Y-m-d');
$time = Date('H:i:s');


if(isset($_POST['email']) &&
   isset($_POST['phonenumber']) && 
   isset($_POST['name']) && 
   isset($_POST['subject']) && 
   isset($_POST['details'])){
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $details = $_POST['details'];
    if(!empty($email)){
        if(!empty($phonenumber)){
            if(!empty($name)){
                if(!empty($details)){
                    if(!empty($subject)){
                        //echo 'Your emailaddress is '.$email.' and number '.$phonenumber.' and your name is '.$name.' and your message states that "'.$details.'"';
                        $query = "INSERT INTO `messages`(`Email`,`Phonenumber`,`Name`,`Details`,`Id`,`Date`,`time`,`subject`) VALUES ('$email','$phonenumber','$name','$details','','$today','$time','$subject')";
                        if($query_run = mysqli_query($conn, $query)){
                           // echo "Your message has just been sent We will get back to you as soon as possible";
                            
                            echo "
                                    <div class=\"alert alert-success\">
                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" >&times;</a>
                                        <strong>Success!!</strong>
                                        <span>Your message has just been sent We will get back to you as soon as possible</span>
                                    </div>
                                ";
                        }   
                    }
                }else{
                    echo bootstrapAlert('danger', 'glyphicon-info-sign', ' Error ', "You message cannot be empty", 'A0');
                }
            }else{
                echo bootstrapAlert('danger', 'glyphicon-info-sign', ' Error ', "Please provide your name", 'A0');
            }
        }else{
            echo bootstrapAlert('danger', 'glyphicon-info-sign', ' Error ', "Please provide your phonenumber", 'A0');
        }
    }else{
        echo bootstrapAlert('danger', 'glyphicon-info-sign', ' Error ', "Please provide your email", 'A0');
    }
}

?>
