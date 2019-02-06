<?php
ob_start();
session_start();
if( isset($_SESSION['$user_id'])){
    header('Location:index.php');
}
// $from = $_SERVER['HTTP_REFERER'];
if(!empty($_SERVER['HTTP_REFERER'])){
  $from = $_SERVER['HTTP_REFERER'];
}

?>
<!DOCTYPE html>
<html>
<title>Tiiva | Login and have fun shopping on Tiiva</title>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php require 'templates/resourcelinks/headerlinks.php';?>

</head>
<body>
    <div class="container">
        
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><a href="index.php"><img src="images/airmarklogotrial2.png" class="img-responsive"/></a></div>
            <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3"></div>
        </div>
        <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 loginHeaderCont"><h1 class="text-center text-capitalize loginHeadertext">Login to Tiiva</h1>
    <h5 class="text-center">Have fun shopping</h5>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
        </div>
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" id="alertbox">
                
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-1 col-xs-1"></div>
            <div class="col-lg-6 col-md-6 col-sm-11 col-xs-11">
                <div class="row">
                    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 loginFormCont">
                        <form class="form-group form-group-lg" action="login.php" method="post">
                            <label>Username/Email/Phonenumber</label><input id="username" type="text" class="form-control input-lg loginUsernameInp" name="username" placeholder="Username: Enter your Phone No/Email/Username"/>
                            <label>Password</label>
                            <input type="password" id="password" class="form-control input-lg loginPssd" name="password" placeholder="Password: Enter your password"/><span id="eye" onclick="openeye();" class="glyphicon glyphicon-eye-open loginEye"></span>


                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-4 col-xs-4"></div>
                            <div class="col-lg-4 col-md-4 col-sm-8 col-xs-8"><h5 class="text-right"><a href="paasswd.html" style="text-decoration:underline;">forgot password?</a></h5></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" ></div>
                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" >

                                <a class="btn btn-primary btn-block btn-lg" onclick="login();">Login</a>
                                </form>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" ></div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 loginspacer"></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><h2 class="text-center">New to Tiiva?</h2></div>
                            </div>
                            <div class="row visible-lg visible-md">
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <h3 class="text-center loginSigninText"><a href="register.php" class="text-center loginSiginLink">Create you own Tiiva account</a></h3>
                                </div>
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                            </div>

                            <div class="row visible-xs visible-xsm">
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <a href="register.php" class="btn btn-block btn-lg btn-info">Create Tiiva Account</a>

                                </div>
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
        </div>
    </div>
    <?php 
        require('templates/footer.php');
        ?>
    <script type="text/javascript">
        function openeye(){
            var x = document.getElementById("eye");
            var y = document.getElementById("password");
            if(y.type == "password"){
                y.type = "text";
                x.className = "glyphicon glyphicon-eye-close";
            }else{
                y.type = "password";
                x.className = "glyphicon glyphicon-eye-open";

            }
        }


        function login(){
                // returns all the traffick from strolles/windowshoppers as per day
                var password, username, details, casee, where;
                    password = document.getElementById('password').value;
                    username = document.getElementById('username').value;

                if( password != '' && username != ''){
                    details = "username="+username+"&password="+password;
                    if(XMLHttpRequest){
                        xmlhttp = new XMLHttpRequest();
                    }else{
                        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                    }
                    xmlhttp.onreadystatechange = function(){
                        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                            document.getElementById('alertbox').innerHTML = xmlhttp.responseText;
                            casee = document.getElementById('casee').innerHTML;
                            where = document.getElementById('where').innerHTML;
                            if(casee == 1 && where != ''){
                                //window.location = where;
                                window.location = <?php echo "'$from'";?>;
                            }
                        }
                    }
                    xmlhttp.open('POST','login_parse.php',true);
                    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                    xmlhttp.send(details);
                }else{
                    alert('Please fill in the appropriate fields before pressing the Login button');
                }
                // review this later to show the user session logged in or sth or only allow
                // certain session users
            }
        $(document).ready(function(){
            $('[type="text"]').tooltip({
                title: '<h5>Username Field</h5><p>Input your username or email address</p>',
                placement: 'top',
                html: true,

            });
            $('[type="password"]').tooltip({
               placement: "top",
                html: true,
                title: "<h5>Password Field</h5><p>Input your password</p>"
            });


        })
    </script>
</body>
</html>
