<?php
session_start();
ob_start();
require 'connect.php';
//echo 'yolo';
$salt = md5('chumakuburuka');
$staff = md5('staff4online5');

if(isset($_SESSION['$staff'])){
    //header(location 'index.php');
    header('Location:testerpage.php');
}else{
    echo "Do nothing";
}
//TODO THE REDIRECT FUNCTION IS BUST.....STOP USING AJAX TO REDIRECT THE USER
?>
<!DOCTYPE html>
<html>
<title>Tiiva | Misc</title>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php require 'templates/resourcelinks/headerlinks.php';?>

</head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-image:url('images/awesome.jpg');background-size:160%;">
                <!-- THE MAIN CONTAINER -->

                    <div class="row" style="margin-top:1%;padding-bottom:10%;">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md"></div>
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="border:1px solid gainsboro;padding:25px;border-radius:10px;box-shadow:2px 2px 5px rgba(0, 0, 0, 0.37);background-color:white;">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs--2 visible-lg visible-md"></div>
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <p id="message"></p>
                                    <img src="images/airmarklogotrial2.png" class="img-responsive">
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md"></div>
                            </div>
                            <div class="row" style="font-family:kok;">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md"></div>
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <form role="form">
                                        <label for="username">Username:</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                            <input type="text" id="username" class="form-control" placeholder="Please enter your username" style="box-shadow:none;"/>
                                        </div>
                                    <label for="password">Password:</label>
                                        <div class="input-group">
<!--                                            <label for="password"><small>Password:</small></label>-->
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                            <input type="password" id="password" class="form-control" placeholder="Your password" style="box-shadow:none;"/>
                                        </div>
                                        <div class="row" style="margin-top:7%;margin-bottom:7%;">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <a class="btn btn-block btn-primary" onclick="login();">Log in</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md"></div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md"></div>
                    </div>
                <!-- THE MAIN CONTAINER -->
                </div>
            </div>
            <script>
                function login(){
                    var username = document.getElementById('username').value;
                    var password = document.getElementById('password').value;
                    if(username != '' && password != ''){
                        //alert(username+' '+password);
                        if(window.XMLHttpRequest){
                            xmlhttp01 = new XMLHttpRequest();
                        }else{
                            xmlhttp01 = new ActiveXObject('Microsoft.XMLHTTP');
                        }
                   xmlhttp01.onreadystatechange = function(){
                        if (xmlhttp01.readyState == 4 && xmlhttp01.status == 200){
                            document.getElementById('message').innerHTML= xmlhttp01.responseText;

                            }
                            }

                        xmlhttp01.open("POST","staffcheck.php",true);
                        xmlhttp01.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                        xmlhttp01.send("username="+username+"&password="+password);

                    }else{
                        alert('You need to provide values in both boxes');
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
        </div>
    </body>
</html>
