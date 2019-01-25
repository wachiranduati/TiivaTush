<?php
ob_start();
session_start();
require 'search.inc.php';
require 'connect.php';
    $today = date(Y).'-'.date(m).'-'.date(d);
    $time = date(H).':'.date(i).':'.date(s);
//echo $today;
//mysqli_real_escape_string

if(isset($_POST['email']) || 
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
                    echo "Details container is empty";
                }
            }else{
                echo "Name container is empty";
            }
        }else{
            echo "Phonenumber container is empty";
        }
    }else{
        echo 'email container is empty';
    }
}

?>
