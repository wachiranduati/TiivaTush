<?php
ob_start();
session_start();
require 'connect.php';
require 'utils/displayutils.php';
$now = Date("Y-m-d H:i:s");
?>
<!DOCTYPE html>
<html>
<title>Tiiva | Create a Tiiva Account</title>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php require 'templates/resourcelinks/headerlinks.php';?>
    
</head>
<body>
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-1 col-xs-1"></div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"> <a href="index.php"><img src="images/airmarklogotrial2.png" class="img-responsive"/></a> </div>
            <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3"></div>
        </div>
        <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 topHeader">
                <h1 class="text-center text-capitalize">Register Account</h1>
                <p class="text-center">Create an account and have more fun shopping on Tiiva.</p>
                <div class="alert alert-danger registerAlert">
                    <a class="close" data-dismiss="alert" href="#">&times;</a>
                    <strong>Error!!</strong>
                    <span>To use tiiva you have to accept to our terms and conditions</span>
                </div>

            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><p class="text-center"> <?php if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['passwordreentered']) && isset($_POST['mobilenumber']) && isset($_POST['emailaddress'])   ){
    $salt = "wagwanista";
    
    $username = $_POST['username'];
    $password = md5($salt.$_POST['password']);
    $passwordreentered = md5($salt.$_POST['passwordreentered']);
    $mobilenumber = $_POST['mobilenumber'];
    $emailaddress = $_POST['emailaddress'];
    
    
    if(!empty($username) && !empty($password) && !empty($passwordreentered) && !empty($_POST['mobilenumber']) && isset($_POST['terms'])  ){
        echo 'We are good to proceed<br>';
        if($password != $passwordreentered){
            echo bootstrapAlert('warning', 'glyphicon-info-sign', ' Error ', "Passwords do not match", 'A0');
        }else {
            $query = "SELECT `mobilenumber` FROM `users` WHERE `mobilenumber`='".mysqli_real_escape_string($conn, $mobilenumber)."'";
            $query_run = mysqli_query($conn, $query);
            $query_num_rows = mysqli_num_rows($query_run);
            
            if($query_num_rows > 0){
                echo bootstrapAlert('warning', 'glyphicon-info-sign', ' Error ', "Another user is already registered using this phonenumber", 'A0');
            }else{
                echo 'OK number is available';
                $query = "INSERT INTO `users` VALUES ('','".mysqli_real_escape_string($conn, $emailaddress)."','".mysqli_real_escape_string($conn, $username)."','".mysqli_real_escape_string($conn, $password)."','".mysqli_real_escape_string($conn, $mobilenumber)."','', '$now')";
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
                    echo bootstrapAlert('warning', 'glyphicon-info-sign', ' Error ', "Could not create your account at the moment, please try again later.", 'A0');
                }
            }
        }
    }else {
        echo bootstrapAlert('danger', 'glyphicon-info-sign', ' Error ', "All fields are required", 'A0');
    }
}?> </p></div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                        <form class="form-group form-group-lg" id="formRegister" action="register.php" method="POST">
                            <input required type="text" class="form-control input-lg" id="username" onblur="useri();" name="username" value="<?php if(isset($_POST['username'])){echo $username;}?>" maxlength="40" placeholder="Username:          Enter your Username"title="<h5>Username Field</h5>Please provide your username in the input box below"/><span id="userstatus"></span>
                            <input required type="password" class="form-control input-lg" id="password" name="password" maxlength="40" placeholder="Password:          Enter your password" onblur="passone();" title="<h5>Password Field</h5>Please provide your password in the input below"/><span id="passstatus"></span>
                            <input required type="password" class="form-control input-lg" id="passre" name="passwordreentered" maxlength="40" placeholder="Password:          Re-enter your password" onblur="passcheck();" title="<h5>Re-enter Password Field</h5>Please re-enter the password your placed in the input above here"/><span id="passrestatus"></span>
                            <input required type="number" class="form-control input-lg" id="mobilenumber" name="mobilenumber" value="<?php if(isset($_POST['mobilenumber'])){echo $mobilenumber;}?>" maxlength="40" onblur="mobilecheck();" placeholder="Mobile number: 0705780775" title="<h5>PhoneNumber Field</h5>Please provide us with your phone number.p.s. Your account will be linked directly to your phonenumber"/><span id="mobilestatus"></span>
                            <input required type="email" id="emailaddress" class="form-control input-lg" name="emailaddress" value="<?php if(isset($_POST['emailaddress'])){echo $emailaddress;}?>" maxlength="40" placeholder="Email address:    Khalil@gmail.com" title="<h5>Email address Field</h5>Please provide us with your Email Address"/>
                            <br><br>
                            <!-- <div class="checkbox" style="margin-top:-15px;">
                                <label>
                                    <input id="promotions" type="checkbox" name="promotions"/>
                                    <p>Receive our offer & promotions by email</p>
                                </label>
                            </div> -->
                            <div class="checkbox">
                                <label>
                                    <input id="terms" checked="checked" type="checkbox" name="terms"/>
                                    I agree with the <a href="Termsofuse.php">Terms and Conditions</a> & Privacy policies
                                </label>
                            </div>
                            
                            
                        
                        
                        <div class="row">
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" ></div>
                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" >
                                
                                    <input id="regBtn" type="submit" value="Create account" name="create" class="btn btn-primary btn-block btn-lg">
                                </form>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" >
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" ></div>
                            </div>
                            <div class="row signinLoginBox">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"><h5>Already have an account <a href="login.php" class="signInlink"> SignIn</a></h5></div>
                        </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
            </div>

            
        </div>
    </div>
    <?php require 'templates/footer.php';?>
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

        
        function useri(){
            var user = document.getElementById("username").value;
            var userstatus = document.getElementById("userstatus");
            if (user != '' && user.length > 4 && user.indexOf(' ') < 1){
                userstatus.innerHTML = "<span class=\"glyphicon glyphicon-ok\" style=\"color:rgb(0, 230, 0);\"></span>";
            }else{
                userstatus.innerHTML = "<span class=\"glyphicon glyphicon-remove\" style=\"color:rgb(255, 0, 0);\"></span>";
            }
        }
        
        function passone(){
            var pass = document.getElementById("password").value;
            var passstatus = document.getElementById("passstatus");
            if (pass != '' && pass.length > 7){
                passstatus.innerHTML = "<span class=\"glyphicon glyphicon-ok\" style=\"color:rgb(0, 230, 0);\"></span>";
            }else{
                passstatus.innerHTML = "<span class=\"glyphicon glyphicon-remove\" style=\"color:rgb(255, 0, 0);\"></span>";
            }
        }
        function passcheck(){
            var passre = document.getElementById("passre").value;
            var pass = document.getElementById("password").value;
            var passrestatus = document.getElementById("passrestatus");
            if (passre == pass && pass != '' && passre != ''){
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

        $("#terms").change(function(){
            if ($('#terms').is(":checked")){
              $(".registerAlert").hide();
              $("#regBtn").attr('disabled',false);
            }else{
              $(".registerAlert").show();
              $("#regBtn").attr('disabled',true);
            }
        });

        

        
    </script>
</body>
</html>