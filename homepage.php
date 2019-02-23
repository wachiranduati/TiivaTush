<?php
// session_start();
// ob_start();
// require 'search.inc.php';
// require 'core.inc.php';
// $ip1 = '';
// $ip2 = '';
// $ip3 = '';
// if (array_key_exists('REMOTE_ADDR', $_SERVER)){
//     $ip1 = $_SERVER['REMOTE_ADDR'];
// }
// if (array_key_exists('HTTP_CLIENT_IP', $_SERVER)){
//     $ip2 = $_SERVER['HTTP_CLIENT_IP'];
// }
// if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)){
//     $ip3 = $_SERVER['HTTP_X_FORWARDED_FOR'];
// }

// if($ip1 != "" or $ip2 != "" or $ip3 != ""){
//    // echo "Remote ip address is $ip1 HTTP_client_ip $ip2 HTTP_X_FORWARDED is $ip3";
//     //setcookie("_ter",$ip1,time() + (86400 * 365),"/");//86400 =  1 day
//     echo $_COOKIE["_ter"];
//    // then modify the cookie on the login page with the username value;
// }
?>
<!doctype html>
<html>
<title>Tiiva Homepage</title>
    <meta lang="en"/>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php require 'templates/resourcelinks/headerlinks.php';?>

</head>
<body onload="cookies();">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <div class="row visible-lg visible-md">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 visible-lg visible-md" style="background-image:url(images/backdrops/thefuture.jpeg);background-size:100%;background-position:center;height: 100vh;">
                <div class="row" style="background-color:rgba(0, 0, 0, 0.6);">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><p class="text-right" style="color:white;">Hello and Welcome....</p></div>
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><a href="http://www.facebook.com/tiiva" style="text-decoration:none;">Facebook</a></div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><a href="http://www.facebook.com/tiiva">Twitter</a></div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><a href="http://www.facebook.com/tiiva">Hidden</a></div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><a href="http://www.facebook.com/tiiva">Instagram</a></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                <a class="bnt" href="login.php" style="color:white;">Login</a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                <a class="bnt" href="register.php" style="color:white;">Register</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><a href="index.php"><img src="images/misc/tiivi-logo.png" class="img-responsive"/></a></div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>

                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:2%;padding-bottom:0.6%;">
                        <div class="row">
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:rgba(255, 255, 255, 0.47);">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h4>How about a small introduction to Tiiva...scratch that a couple of words</h4>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><h3 class="text-center text-capitalize">About us</h3>
                                            <p>How would you feel about a platform created and powered by 80% youth..?weird right.<br>Tiiva is a young company, an ecommerce site to be precise.Not trying to reinvent the wheel, we hope to bridge the gap. Between the ecommerce world and the users.</p>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="border-right:1px solid rgba(0, 0, 0, 0.39);border-left:1px solid rgba(0, 0, 0, 0.39);"><h3 class="text-capitalize text-center">Buy</h3>
                                            <p>This is the fun part...<br>You have the previlege to do all your shopping under one roof...<br><em>I know.. i know.. the line is cliche</em><br>gimme a sec...<br><br>Here at Tiiva we have 3 different ecommerce sites setup into one<br></p>
                                                <ul>
                                                <li><a href="index.php">The shack</a> - Here you can buy mtumba</li>
                                                <li><a href="index.php">The shop</a> - This resemebles any other ecommerce site</li>
                                                <li><a href="homepage.php">The Onetime</a> -  This is the auction part</li>
                                                </ul>
                                                <p><br>you can click any of the links above to visit the categories
                                                <br><br>
                                                To login or register click on the links at the top right</p>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><h3 class="text-center text-capitalize">Sell</h3>
                                            <p>Here at Tiiva 100% of our items are uploaded by our users.It is our wish to support and grow our local brands and small businesses.<br>That ofcourse doesnt mean that we only deal in local products...Noo....Were open to everything..<br><br>
                                             To post you're items on Tiiva you just have to get intouch with us through our contacts page here <a href="contactus.php" title="Get intouch with us">Contact us</a>
                                                <br><br>
                                                From you we demand only one thing,  quality, remember your store name will be visible to our users and with a good reputation so does your customer base widen..
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="position:absolute;top:40%;">
                        <span id="cookiealert">
                            
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:rgba(0, 0, 0, 0.29);color:white;margin-top:1%;">
                        <h6 class="text-uppercase text-center"><strong>Copyright &#169 Tiiva Inc <?php echo Date('Y')?>.</strong></h6>
                    </div>
                </div>
            </div>
        </div>
                
                <div class="row visible-sm visible-xs">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-position:center;background-repeat:no-repeat;">
                                <div class="row" style="background-color:rgba(0, 0, 0, 0.49);color:white;">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"><h5>Hi, Welcome to Tiiva...</h5></div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid white;"><a href="login.php" class="btn-block" style="color:white;"><h5 class="text-center">LogIn</h5></a></div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><a href="register.php" class="btn-block" style="color:white;"><h5 class="text-center">Register</h5></a></div>
                                        </div>
                                    </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                 <img src="images/misc/tiivalogotrial3.png" class="img-responsive"/>
                                            </div>
                                        </div>
                                        <h3 class="text-center text-uppercase" style="background-color:rgba(220, 220, 220, 0.04);color:white;padding-top:1%;padding-bottom:1%;text-shadow:1px 1px 1px rgba(0, 118, 255, 0.51);box-shadow:1px 1px 1px rgba(47, 167, 255, 0.17);">Shopping</h3>
                                        <p style="border-right:1px solid gainsboro;">Sooo, this is Tiiva <img src="icons/boxicon.png" class="img-responsive" style="height:50px;display:inline;"/></p>
                                        <p class="text-right">But first......</p>
                                        <p><em>"Whoever said money can't buy you happiness simply didnt know where to go shopping"Bo Derek</em></p>
                                        <p style="border-left:1px solid gainsboro;padding-left:2px;">We're an ecommerce platform specializing in anything you can fit in that box haha</p>
                                        <p class="text-center" style="border-right:1px solid gainsboro;"><img src="icons/boyskatingicon.png" class="img-responsive" style="height:50px;display:inline;"/>Powered and built by the youth, We believe we have you're best interests at heart.</p>
                                        <h4 class="text-center text-capitalize" style="color:orange;border:1px solid gainsboro;border-bottom:none;border-top:none;">Be it from</h4><br>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom:1%;padding:1%;">
                                                <p class="text-center" style="border:1px solid gainsboro;border-top:none;border-bottom:none;"> The <a href="women.php" title="ladies shopping">ladies</a><img src="icons/womansicon.png" class="img-responsive" style="height:50px;display:inline"/> to The <a href="mens.php" title="Mens shopping">broads</a><img src="icons/mensicon.png" class="img-responsive" style="height:50px;display:inline;"/></p>
                                                <p class="text-center" style="border:1px solid gainsboro;border-top:none;padding:1%;border-bottom:none;"><em>"We got you sorted...."</em></p>
                                                <p>We felt the need to build different sections and so we came up with ...</p><ul><li><a href="index.php">The shop</a> - Resembles any other ecommerce site</li><li><a href="index.php">The shack</a> - this primary deals in mtumba</li></ul><br><p class="text-capitalize text-center">all under one roof</p>
                                            <h3 class="text-uppercase text-center" style="border-top:1px solid gainsboro;padding-top:2%;">Sell</h3>
                                            <p>All the items we showcase are uploaded by our users and as such if you wish to partner with us get intouch with us here 
                                                <a href="contactus.php" title="contact us"><img src="icons/customercare.png" class="img-responsive" style="height:90px;margin-left:35%;"/></a>
                                                it is our wish to support the small traders and help you grow your business but remember of you we will require of one thing alone, quality.<br>
                                                We are art friendly, get intouch...
                                            </p>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="position:absolute;top:25%;">
                                                    <span id="cookiealert3">

                                                    </span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:black;color:white;">
                                                    <h4 class="text-center text-capitalize">Copyright &#169 Tiiva Inc <?php echo Date('Y')?>.</h4>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    function cookies(){
                if(window.XMLHttpRequest){
                    xmlhttp8 = new XMLHttpRequest();
                }else{
                    xmlhttp8 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp8.onreadystatechange = function(){
                if (xmlhttp8.readyState == 4 && xmlhttp8.status == 200){
                    document.getElementById('cookiealert').innerHTML= xmlhttp8.responseText;
                    document.getElementById('cookiealert2').innerHTML= xmlhttp8.responseText;
                    document.getElementById('cookiealert3').innerHTML= xmlhttp8.responseText;

                    }
                    }
                    xmlhttp8.open('GET','cookiealert.php',true);
                    xmlhttp8.send();
                
            
            }
    </script>
</body>
</html>