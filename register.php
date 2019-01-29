<?php
ob_start();
session_start();
require 'connect.php';
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['passwordreentered']) && isset($_POST['mobilenumber']) && isset($_POST['emailaddress'])   ){
    $salt = "wagwanista";
    
    $username = $_POST['username'];
    $password = md5($salt.$_POST['password']);
    $passwordreentered = md5($salt.$_POST['passwordreentered']);
    $mobilenumber = $_POST['mobilenumber'];
    $emailaddress = $_POST['emailaddress'];
    
    
    if(!empty($username) && !empty($password) && !empty($passwordreentered) && !empty($_POST['mobilenumber']) &&  isset($_POST['promotions']) && isset($_POST['terms'])  ){
        echo 'We are good to proceed<br>';
        if($password != $passwordreentered){
            echo 'Passwords do not match<br>';
        }else {
            echo 'you are free to proceed<br>';
            $query = "SELECT `mobilenumber` FROM `users` WHERE `mobilenumber`='".mysqli_real_escape_string($conn, $mobilenumber)."'";
            $query_run = mysqli_query($conn, $query);
            $query_num_rows = mysqli_num_rows($query_run);
            
            if($query_num_rows > 0){
                echo 'Another user is already registered using this phonenumber<br>';
            }else{
                echo 'OK number is available';
                $query = "INSERT INTO `users` VALUES ('','".mysqli_real_escape_string($conn, $emailaddress)."','".mysqli_real_escape_string($conn, $username)."','".mysqli_real_escape_string($conn, $password)."','".mysqli_real_escape_string($conn, $mobilenumber)."','')";
                if($query_run = mysqli_query($conn, $query)){
                    $querylog = "SELECT `id` FROM `users` WHERE `emailaddress`='$emailaddress' AND `username`='$username' AND `password`='$password' AND `mobilenumber`='$mobilenumber'";
                    $querylog_run = mysqli_query($conn, $querylog);
                    $querylog_num = mysqli_num_rows($querylog_run);
                    $querylog_row = mysqli_fetch_assoc($querylog_run);
                    if($querylog_num == 0){
                     // nothing to show here   
                    }else{
                        // create session login and redirect
                        $user_id = $querylog_row['id'];
                        $_SESSION['$user_id'] = $user_id;
                        header('Location:index.php');
                    }
                    
                }else {
                    echo 'Could not creat your account at the moment, please try again later.';
                    //echo mysqli_error();
                }
            }
        }
    }else {
        echo 'All fields are required';
    }
}
?>
<!DOCTYPE html>
<html>
<title>Tiiva | Register</title>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php require 'templates/resourcelinks/headerlinks.php';?>
    
</head>
<body>
    <div class="container">
        <div class="row visible-lg visible-md">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height:30px;background-color:gainsboro;"><p>Welcome to Tiiva, Please create your account</p></div>
            
        </div>
        
        <div class="row visible-sm visible-xs">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height:30px;background-color:gainsboro;"><p>Welcome to Tiiva, Please create you account</p></div>
            
        </div>
        
        
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-1 col-xs-1"></div>
            <div class="col-lg-5 col-md-5 col-sm-9 col-xs-9"><img src="images/airmarklogotrial2.png" class="img-responsive"/></div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
        </div>
        <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="margin-top:15px;border-top:1px solid gainsboro;"></div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11" style="margin-top:20px;">
                        <form class="form-group form-group-lg" action="register.php" method="POST">
                            <input type="text" class="form-control input-lg" id="username" onblur="useri();" name="username" value="<?php if(isset($_POST['username'])){echo $username;}?>" maxlength="40" placeholder="Username:          Enter your Username"style=" font-size:19px;" title="<h5>Username Field</h5>Please provide your username in the input box below"/><span id="userstatus" style="position:absolute;top:3%;right:-3%;"></span>
                            <input type="password" class="form-control input-lg" id="password" name="password" maxlength="40" placeholder="Password:          Enter your password" onblur="passone();" style="margin-top:15px; font-size:19px;" title="<h5>Password Field</h5>Please provide your password in the input below"/><span id="passstatus" style="position:absolute;top:16%;right:-3%;"></span>
                            <input type="password" class="form-control input-lg" id="passre" name="passwordreentered" maxlength="40" placeholder="Password:          Re-enter your password" onblur="passcheck();" style="margin-top:15px; font-size:19px;" title="<h5>Re-enter Password Field</h5>Please re-enter the password your placed in the input above here"/><span id="passrestatus" style="position:absolute;top:28%;right:-3%;"></span>
                            <input type="number" class="form-control input-lg" id="mobilenumber" name="mobilenumber" value="<?php if(isset($_POST['mobilenumber'])){echo $mobilenumber;}?>" maxlength="40" onblur="mobilecheck();" placeholder="Mobile number: 0705780775" style="margin-top:15px; font-size:19px;" title="<h5>PhoneNumber Field</h5>Please provide us with your phone number.p.s. Your account will be linked directly to your phonenumber"/><span id="mobilestatus" style="position:absolute;top:41%;right:-3%;"></span>
                            <input type="email" class="form-control input-lg" name="emailaddress" value="<?php if(isset($_POST['emailaddress'])){echo $emailaddress;}?>" maxlength="40" placeholder="Email address:    Khalil@gmail.com" style="margin-top:15px; font-size:19px;" title="<h5>Email address Field</h5>Please provide us with your Email Address"/>
                            <br><br>
                            <div class="checkbox" style="margin-top:-15px;">
                                <label>
                                    <input type="checkbox" name="promotions" value="option1"/>
                                    <p>Receive our offer & promotions by email</p>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="terms" value="option1"/>
                                    I agree with the <a href="Termsofuse.php">Terms and Conditions</a> & Privacy policies
                                </label>
                            </div>
                            
                            
                        
                        
                        <div class="row">
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" ></div>
                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" >
                                
                                    <input type="submit" value="Create account" name="create" class="btn btn-primary btn-block btn-lg">
                                </form>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" >
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" ></div>
                            </div>
                            <div class="row" style="margin-top:20px;">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"><h5>Already have an account <a href="login.php" style="text-decoration:underline;"> SignIn</a></h5></div>
                        </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:rgba(0,0,0,0.2);"><p class="text-center" style="padding-top:4px;">A WN creation Copyright &#169 AirMark</p></div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function mobilecheck(){
        
            var stat = document.getElementById("mobilestatus");
            var mobi = document.getElementById("mobilenumber").value;
            if(mobi != ""){
                stat.innerHTML = "checking....";
                if(window.XMLHttpRequest){
			     xmlhttp01 = new XMLHttpRequest();
		      }else{
                    xmlhttp01 = new ActiveXObject('Microsoft.XMLHTTP');
                }

                xmlhttp01.onreadystatechange = function(){
                    if (xmlhttp01.readyState == 4 && xmlhttp01.status == 200){
                        stat.innerHTML = xmlhttp01.responseText;

                    }
                }
                var v = "mobilenumber="+mobi;
                xmlhttp01.open("POST","mobilecheck.php",true);
                xmlhttp01.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                xmlhttp01.send(v);
            }
		
	}
//        function mobilecheck(){
//            var mobi = document.getElementById("mobilenumber").value;
//            var stat = document.getElementById("mobilestatus");
//            if (mobi == '0705780775'){
//                stat.innerHTML = "<span class=\"glyphicon glyphicon-ok\" style=\"color:rgb(0, 230, 0);\"></span>";
//            }else{
//                stat.innerHTML = "<span class=\"glyphicon glyphicon-remove\" style=\"color:rgb(255, 0, 0);\"></span>";
//            }
//        }
        
        function useri(){
            var user = document.getElementById("username").value;
            var userstatus = document.getElementById("userstatus");
            if (user != 0){
                userstatus.innerHTML = "<span class=\"glyphicon glyphicon-ok\" style=\"color:rgb(0, 230, 0);\"></span>";
            }else{
                userstatus.innerHTML = "<span class=\"glyphicon glyphicon-remove\" style=\"color:rgb(255, 0, 0);\"></span>";
            }
        }
        
        function passone(){
            var pass = document.getElementById("password").value;
            var passstatus = document.getElementById("passstatus");
            if (pass != 0){
                passstatus.innerHTML = "<span class=\"glyphicon glyphicon-ok\" style=\"color:rgb(0, 230, 0);\"></span>";
            }else{
                passstatus.innerHTML = "<span class=\"glyphicon glyphicon-remove\" style=\"color:rgb(255, 0, 0);\"></span>";
            }
        }
        function passcheck(){
            var passre = document.getElementById("passre").value;
            var pass = document.getElementById("password").value;
            var passrestatus = document.getElementById("passrestatus");
            if (passre == pass && pass != 0 && passre != 0){
                passrestatus.innerHTML = "<span class=\"glyphicon glyphicon-ok\" style=\"color:rgb(0, 230, 0);\"></span>";
            }else{
                passrestatus.innerHTML = "<span class=\"glyphicon glyphicon-remove\" style=\"color:rgb(255, 0, 0);\"></span>";
            }
        }
        $(document).ready(function(){
           $(":input").tooltip({
               placement: "top",
               //title: "<h5></h5>I am here",
               html: "true",
               
           })
        });
    </script>
</body>
</html>