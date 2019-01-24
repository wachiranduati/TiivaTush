<?php
ob_start();
session_start();
require 'search.inc.php';
require 'connect.php';

$century = 321;



?>
<!DOCTYPE html>
<html>
<title>Tiiva | Contact-us</title>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrapdist/css/bootstrap.min.css">
        <link rel="stylesheet" href="final.css">
        <script src="jquery.min.js"></script>
        <script src="bootstrapdist/js/bootstrap.min.js"></script>
        <script src="display.js"></script>
        <script src="moded.js"></script>
        <link rel="stylesheet" href="MaterialDesign-Webfont-master/css/materialdesignicons.min.css">
        <link rel="icon" type="image/png" href="icons/thaticon.png">



</head>
    <body onload="boxed();">
        <div class="container-fluid">
            <div class="row" style="background-color:rgba(0,0,0,0.2)">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row" style="font-family:kok;padding-top:0.5%;padding-bottom:0.5%;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="boxtit"></div>

                        </div>
                </div>
            </div>

<!--            start of accounts div-->
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"><a href="index.php"><img src="images/airmarklogotrial2.png" class="img-responsive"></a></div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<!--                    margin top start-->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 visible-lg visible-md" style="margin-top:3%;"></div>
                    </div>
<!--                    margin top end -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<!--                                   SIMPLE SEARCH START-->

                     <div class="row" id="simplesearch" style="display:block;visibility:visible;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <form class="form-group-md" id="search" name="search">
                    <div class="input-group col-lg-12" style="font-family:kok;">
                        <input type="text" class="form-control" placeholder="Search items here...." name="search_text" onkeyup="findmatch();" style="border:none;box-shadow:none;border-radius:0;background-color:rgba(219, 219, 219, 0.35);">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-default disabled btn-md" style="border:1px solid rgb(255, 186, 0);background-color:rgb(255, 186, 0);color:white;border-radius:0;">Search</button>
                        </span>
                    </div>
                        </form>
                </div>
            </div>

            <div class="row simplesearchresults" id="simplesearchresults" style="">
                <div class="col-lg-12 col-md-12 col-sm-11 col-xs-11 results" id="results"></div>
            </div>

<!--                    SIMPLE SEARCH END-->
                        </div>
                    </div>
                    <div class="row visible-lg visible-md" style="cursor:pointer;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <a class="pull-right" onclick="toggleadvancedsearch();" style="text-decoration:none;font-family:kok;">Advanced Search</a>
                        </div>
                    </div>
                </div>
<!--                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 visible-lg visible-md"></div>-->

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="cursor:default;">

                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                <div class="visible-lg visible-md" style="margin-top:31%;"></div>
                                <!--                    cart new design-->
                    <div onclick="loadmodalcart();">
                        <a><span class="glyphicon glyphicon-shopping-cart" style="font-size:30px;color:#523CFA;"></span><sup><span class="badge" id="cartitems" style="background-color:red;">0</span></sup><small style="font-family:kok;">&nbsp;Cart</small>&nbsp;<span class="caret"></span></a>

                    </div>
<!--                    cart new design-->

                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                                                        <div class="visible-lg visible-md" style="margin-top:31%;"></div>

                    <div class="dropdown">
                            <a class=" dropdown-toggle" id="menu1" data-toggle="dropdown"><span class="glyphicon glyphicon-user" style="font-size:30px;color:#523CFA;"></span><small>&nbsp;User</small>
                            <span class="caret"></span></a>

                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Login</a></li>
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">User Account</a></li>
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Merchants</a></li>
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Register</a></li>
                              <li role="presentation" class="divider"></li>
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Blogs</a></li>
                            </ul>
                          </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-xs-4 col-sm-4 visible-lg visible-md" style="margin-top:0.1%;">
                                <a class="text-capitalize" style="color:black;text-decoration:none;"><small>More about us?</small></a>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <a href="Howto.php" class="text-uppercase"><small>FAQS</small></a>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <a href="aboutus.php" class="text-uppercase"><small>About us</small></a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <a href="termsofuse.php" class="text-uppercase"><small>Store policy</small></a>
                                    </div>
                                </div>


                            </div>
                        </div>
                </div>

            </div>

<!--            end of accounts div-->
<!-- start of advanced search container -->
<div class="row" id="AdvancedSearchContainer" style="display:none;visibility:none;">
<div class="col-lgl-12 col-md-12 col-sm-12 col-xs-12" style="display:block;visibility:visible;padding-top:10px;">
    <form role="form">
        <div class="col-lg-3" style="font-family:kok;">
            <label><small>Search Phrase</small></label>
            <input type="text" placeholder="Search phrase eg. Bomber Jacket" id="searchphrase" class="form-control input-sm"/>
        </div>
        <div class="col-lg-2" style="font-family:kok;">
            <label><small>Price min(Ksh)</small></label>
            <input type="number" placeholder="0 Ksh" value="10" id="minprice" min="10" class="form-control input-sm"/>
        </div>
        <div class="col-lg-2" style="font-family:kok;">
            <label><small>Price max(Ksh)</small></label>
            <input type="number" placeholder="100000 Ksh" max="1000000" value="1000000" id="maxprice" min="10" class="form-control input-sm"/>
        </div>

        <div class="col-lg-2" style="font-family:kok;">
            <label><small>Tiiva Site: Shop/Shack</small></label>
            <select name="site" id="site" class="form-control input-sm">
                <option value="shop">Tiiva Shop</option>
                <option value="shack">Tiiva Shack</option>

            </select>
        </div>

        <div class="col-lg-2">
            <label style="font-family:kok;"><small>Category To Search</small></label>
            <select name="category" id="category" class="form-control input-sm">
                <optgroup label="MTUMBA Categories" id="Mtumbaid">
                    <option disabled>Select one of the categories below</option>
                    <option value="sportswear">Sportswear</option>
                    <option value="mens">Men's Wears</option>
                    <option value="womens">Women's Wears</option>
                    <option value="kids">Kids' Wears</option>
                    <option value="interiors">Household</option>
                    <option value="bags">Bags</option>
                    <option value="shoes">Shoes</option>
                    <option value="misc">Misc</option>
                </optgroup>

                <optgroup label="SHOP Categories" id="Shopid">
                    <option value="electronics">Electronics &amp; Computers</option>
                    <option value="entertainment">Entertainment &amp; Education</option>
                    <option value="health">Health &amp; Beauty</option>
                    <option value="jewerly">Fashion &amp; Jewerly</option>
                    <option value="supermarket">Supermarket</option>
                    <option value="outdoors">Sports &amp; Outdoors</option>
                    <option value="handmade">Handmade</option>
                    <option value="home">Home, Garden &amp; Tools</option>
                    <option value="automotive">Automotive, Industrial</option>

                </optgroup>


            </select>
        </div>
        <div class="col-lg-1">
            <label><small style="color:white;">Se</small></label>
            <a class="btn btn-md btn-primary" onclick="advancedsearch();"><span class="glyphicon glyphicon-search"> Search</span></a>
        </div>

    </form>
</div>
</div>
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <div class="row advancedresulsttainer">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="advancedresulst">

        </div>
    </div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>

</div>
<!-- end of advanced search container -->


            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 " style="border-top:1px solid gainsboro;">
                </div>
            </div>


            <div class="row" style="margin-top:10px;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><h5><a href="index.html"><span class="glyphicon glyphicon-home"></span>Home </a> / <a href="sportswear.html">Contact-us</a></h5><h2 class="text-center text-uppercase" style="margin-top:-10px; color:orange;"><span class="glyphicon glyphicon-user"></span>contact us</h2></div>
                    </div>
            <div class="row" style="z-index:5;position:relative;top:200px;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="themessage">
<!--
                            <div class="alert alert-danger">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                <strong>Here!!</strong>
                                <span>This is where is was supposed to be at</span>
                            </div>
-->
                        </div>
                    </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
            </div>
            <div class="row" style="margin-top:5px;">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" style="padding:15px;border:1px solid white;border-radius:10px;font-family:kok;">
                    <form class="form-group" action="contactus.php" method="post">
                        <label for="county">Subject:</label>
                        <select class="form-control" title="<h5>Reason for Contacting us</h5>Please select one of the reasons below for contacting us" id="subject" name="subject" style="margin-bottom:3%;background-color:rgba(255, 255, 255, 0.11);">

                                        <optgroup label="SUBJECT FOR WHICH YOU ARE CONTACTING US" >PROVINCE
                                        <option value="Complaint">Complaint On Services Offered</option>
                                        <option value="Feedback">Feedback</option>
                                        <option value="Orderissue">Order Issue</option>
                                        <option value="Review">Review Us?</option>
                                        <option value="Request">Request</option>
                                        <option value="Improve">Help Us Improve</option>
                                        <option value="Merchant">Merchant Issues</option>
                                        <option value="User">User account Issues</option>
                                        <option value="Other">Other</option>

                                        </optgroup>
                                      </select>
                        <label for="email">Email:</label>
                        <input type="email" title="<h5>Reason for Contacting us</h5>Please select one of the reasons below for contacting us" id="email" maxlength="100" placeholder="Email Address" class="form-control" name="email" style="background-color:rgba(220, 220, 220, 0.33);border:none;"/>
                        <label for="phonenumber">Phonenumber:</label>
                        <input type="tel" title="<h5>Your Email Address</h5>Please provide us with your email address. We may need it to contact you later" id="phonenumber" maxlength="20" placeholder="Your Phone number" class="form-control" name="phonenumber" style="background-color:rgba(220, 220, 220, 0.33);border:none;"/>
                        <label for="name">Name:</label>
                        <input type="text" title="<h5>Your Name</h5>Please provide us with your full Name" id="name" maxlength="100" placeholder="Your Name" class="form-control" name="name" style="background-color:rgba(220, 220, 220, 0.33);border:none;"/>
                        <label for="details">Message:</label>
                        <textarea placeholder="Your message" title="<h5>Message Input Field</h5>Please provide your message in the input box below in detail" id="details" maxlength="1000" class="form-control" rows="10" name="details" style="background-color:rgba(220, 220, 220, 0.33);border:none;"></textarea><br>
                        <input type="button" onclick="showself();" id="sendbutton" value="Send Message" class="btn btn-primary btn-block"/>
                    </form>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h3 class="text-capitalize" style="text-decoration:underline;font-family:kok;"><em>Why we want you to contact us</em></h3>
                            <blockquote>
                            <p><small><em>"It takes 20 years to grow a good reputation but only 5 minutes to destroy it completely."</em></small></p>
                            <footer>Warrent Buffet</footer>
                          </blockquote>

                            <img src="icons/kidsicon.png" class="img-responsive pull-left" style="height:90px;"/>
                            <p><span class="lead">Hi</span>, i'm <small><em>WN</em></small> and i'm going to tell you a story about Tiiva. So Tiiva is really young and it is our wish to grow and get bigger.Your feedback happens to be very dear to me. I take every feedback seriously and try my best to sort out any issue. 9 out of 10 times I do commit to the requests but then I surely cant change everyones background color to pink....*wink *wink<br>haha right?</p>
                            <img src="icons/emojiicon.png" class="img-responsive pull-right" style="height:90px;"/>
                            <p>
                            At Tiiva we value your feedback. It helps us serve you better by pointing out the uglyness we need to take care of. You are our most prized possession </p>
                            <p>We'd love to hear from you: your feedback, your critique, your requests ooh and your funny jokes too. Help us improve and serve you better.Thanks</p>
                            <p class="pull-left"><small><em>Yours,<br> WN.</em></small></p>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <pre class="pre-scrollable">CONTACT US
                                  Tiiva Inc.
                                  125 KIRIAINI
                                  TEL +254705780775
                                  EMAIL info@tiiva.com
                          </pre>
<!--
                            <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <H2 class="text-uppercase">Contact info</H2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <p>AIRMARK INC.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <p>125 KIRIAINI</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <p>KIRIAINI</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <p>NAIROBI KENYA</p>
                        </div>
                    </div>
-->
<!--
                    <div class="row pull-right">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <p>| MOBILE: +254705780775</p>
                        </div>
                    </div>
                    <div class="row pull-right">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <p>| EMAIL: INFO@AIRMARK.COM</p>
                        </div>
                    </div>
                       <div class="row pull-left">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <p>|CONTACT US</p>
                        </div>
                    </div>
-->

                        </div>
                    </div>


                </div>
            </div>


            <!--Ends here -->
            <div class="row" style="margin-top:20px;background-color:rgba(0,0,0,0.5);">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 visible-lg visible-md"><h4>Service</h4>
                                    <ul class="list-unstyled">
                                        <li><a style="color:black;" href="Howto.php">Online help</a></li>
                                        <li><a style="color:black;" href="contactus.php">Contact us</a></li>
                                        <li><a style="color:black;" href="sellersacc.php">Order status</a></li>
                                        <li><a style="color:black;" href="#">Change location</a></li>
                                        <li><a style="color:black;" href="Howto.php">FAQS</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6"><h4>Quick Shop</h4>
                                    <ul class="list-unstyled">
                                        <li><a style="color:black;" href="#">Tshirts</a></li>
                                        <li><a style="color:black;" href="Mens.php">Mens</a></li>
                                        <li><a style="color:black;" href="women.php">Womens</a></li>
                                        <li><a style="color:black;" href="shop.php">Gift Cards</a></li>
                                        <li><a style="color:black;" href="shoes.php">Shoes</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6"><h4>Policies</h4>
                                    <ul class="list-unstyled">
                                        <li><a style="color:black;" href="Termsofuse.php">Terms of use</a></li>
                                        <li><a style="color:black;" href="Termsofuse.php">Privacy policy</a></li>
                                        <li><a style="color:black;" href="Termsofuse.php">Refund policy</a></li>
                                        <li><a style="color:black;" href="Termsofuse.php">Billing System</a></li>
                                        <li><a style="color:black;" href="Termsofuse.php">Ticket System</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 visible-lg visible-md"><h4>About shopper</h4>
                                    <ul class="list-unstyled">
                                        <li><a style="color:black;" href="aboutus.php">Company information</a></li>
                                        <li><a style="color:black;" href="aboutus.php">Careers</a></li>
                                        <li><a style="color:black;" href="aboutus.php">Store location</a></li>
                                        <li><a style="color:black;" href="aboutus.php">Affiliate Program</a></li>
                                        <li><a style="color:black;" href="Termsofuse.php">Copyright</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><h4 class="text-center">About shopper</h4></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <form class="form-inline">
                                        <div class="input-group" style="font-family:kok;">
                                        <input type="email" class="form-control" placeholder="Email address" name="user's email">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-default">Go</button>
                                        </span>
                                        </div>
                                    </form>

                                    <div class="row" style="margin-top:5px;">
                                    <div class="col-lg-9 col-lg-offset-1 col-md-9 col-md-offset-1 col-sm-9 col-sm-offset-1 col-xs-9 col-xs-offset-1">
                                        <p class="text-center"><em>Get the most recent updates from out site and be updated yourself</em></p>
                                    </div>
                                </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><p class="text-center text-capitalize">A WN creation Copyright &#169 Airmark Inc.</p></div>
            </div>

        </div>
        <script type="text/javascript">
             function boxed(){
              if(window.XMLHttpRequest){
                    xmlhttp2 = new XMLHttpRequest();
                }else{
                    xmlhttp2 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp2.onreadystatechange = function(){
                if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200){
                    document.getElementById('boxtit').innerHTML= xmlhttp2.responseText;

                    }
                    }
                    xmlhttp2.open('GET','account.php',true);
                    xmlhttp2.send();


            }

            function findmatch(){
                if(window.XMLHttpRequest){
                    xmlhttp01 = new XMLHttpRequest();
                }else{
                    xmlhttp01 = new ActiveXObject('Microsoft.XMLHTTP');
                }

                xmlhttp01.onreadystatechange = function(){
                    if (xmlhttp01.readyState == 4 && xmlhttp01.status == 200){
                        document.getElementById('results').innerHTML = xmlhttp01.responseText;

                    }
                }
                xmlhttp01.open('GET','search.inc.php?search_text='+ document.search.search_text.value+'&timing='+<?php echo $century;?>,true);
                xmlhttp01.send();
            }

            function showself(){
                var subject = document.getElementById('subject').value;
                var email = document.getElementById('email').value;
                var phonenumber = document.getElementById('phonenumber').value;
                var name = document.getElementById('name').value;
                var details = document.getElementById('details').value;
                var sendbutton = document.getElementById('sendbutton');

                if(subject != ''){
                    //continue
                    if(phonenumber != ''){
                        //continue
                        if(name != ''){
                            if(details != ''){
                                //continue
                                if(email == ''){
                                    var emailcontents = '';
                                }else{
                                    var emailcontents = email;
                                }

//                                var formvalues = "Subject="+subject+"&email="+emailcontents+"&phonenumber="+phonenumber+"&name="+name+"&details="+details;
//                                //alert(formvalues);
                               // sendmessage(formvalues);
                                if(XMLHttpRequest){
                                    xmlhttp = new XMLHttpRequest();
                                }else{
                                    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                                }
                                xmlhttp.onreadystatechange = function(){
                                    if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                                        document.getElementById('themessage').innerHTML = xmlhttp.responseText;
                                        sendbutton.disabled = true;
                                    }
                                }
                                xmlhttp.open('POST','contactparse.php',true);
                                xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                                xmlhttp.send("subject="+subject+"&email="+emailcontents+"&phonenumber="+phonenumber+"&name="+name+"&details="+details);

                            }else{
                                alert('Your message seems to be empty');
                            }
                        }else{
                            alert('Please provide us with your name');
                        }
                    }else{
                        alert('Please provide us with your phonenumber');
                    }
                }else{
                    // empty
                    alert("Please select a subject");
                }
            }
            $(document).ready(function(){
               $(":input").tooltip({
                   placement: "top",
                   html:"true"
               })
            });
        </script>
    </body>
</html>
