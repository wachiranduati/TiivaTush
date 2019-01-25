<?php
ob_start();
session_start();
require 'search.inc.php';
$century = 860;
?>
<!DOCTYPE html>
<html>
<title>Tiiva | Home</title>

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
    <style type="text/css">
        .searchbox {
            border-bottom: 1px solid black;
        }

        #box1 {
                    border-right: 1px dotted gainsboro;
                }
                #box1:hover {
                    box-shadow: 0px -1px 10px red;
                }
    </style>

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
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"><img src="images/airmarklogotrial2.png" class="img-responsive"></div>
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
                                <div data-target="#loginModal" data-toggle="modal" onclick="loadmodalcart();">
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
    <div class="modal" id="loginModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background-color:black;color:white;font-family:kok;">
                    <a class="btn btn-primary pull-right" data-dismiss="modal">&times;</a>
                    <h4 class="modal-title text-center">Your Tiiva Shopping Cart</h4>
                </div>
                <div class="modal-body" id="cartmodalcontents">

                </div>
                <div class="modal-footer" style="background-color:black;">
                    <button class="btn btn-success pull-left" data-dismiss="modal">Continue shopping</button>
                    <a href="checkout.php" class="btn btn-primary">Proceed to Checkout</a>
                </div>
            </div>
        </div>
    </div>

            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 " style="margin-top:10px; border-top:1px solid gainsboro;">
                    <div class="row" style="margin-top:10px;">
                        <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-4 col-xs-4"><p class="text-uppercase text-center"><a href="index.php" title="Go back home"><span class="glyphicon glyphicon-home">AirMark</span></a></p></div>
                        <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-4 col-xs-4"><p class="text-uppercase text-center"><a href="shop.php" title="visit the main shop">Shop</a></p></div>
                        <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-4 col-xs-4"><p class="text-uppercase text-center"><a href="blog.php">Blog<span class="glyphicon glyphicon-leaf"></span></a></p></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h3 class="text-center text-uppercase">About us</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <h4 class="text-uppercase"><u>Founder</u></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p><a href="http//www.facebook.com/s?Nicholas&Ian">WN</a> is the sole founder and creator of Airmark.Inadvertly alot of time and dedication was taken into making <a href="index.php">Airmark</a> a reality from my friends to my family and my dear worn out laptop, i couldnt have done this without you.My most heartfelt gratitude goes to <a href="http://www.google.com">Google</a> and moreso <a href="http://www.youtube.com">Youtube</a> with whom i would never have gotten to learn about the <a href="http://www.thenewboston.com">Thenewboston</a> and moreso <a href="http://thenewboston.com/bucky">Bucky Roberts</a> and his dark humour, not forgetting <a href="http://thenewboston.com/alexgarret">Alex Garret</a> for teaching me all the php code i need for this.To my friends <a href="http://www.facebook.com/jefferypaw">Jeff</a> those tuts did me a solid men, thanks, my very good friend<a href="htt://www.facebook.com/joy">Wamaina</a> for always being there, me ranting code and you staring at me uncomfortably. To my Airmark hype guys <a href="http://www.facebook.com/beverlyn">Beverly</a> for all help you provided fashion wise, Salu, to <a href="http:www.linkedin.com/ralph">Ralph</a> for the timed "iyo sh** iko sawa" remarks you made with every code upgrade, Salu. To my parents, for giving me the peace of mind to do whatever i was doing staring a computer screen all day long and to my brother <a href="http:facebook.com/kiune">Kiune</a>, for getting me interested in code Thankyou.Last but not least to my <a href="http://www.dell.com/inspiron3521">Laptop</a>You served me well. If you do plan on crashing for the 8th time do it after if safely backed everything up:).</p>
                </div>
            </div>
             <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <h4 class="text-uppercase"><u>AirMark's Story</u></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p>Airmark was born out of necessity. I was and still are a fan of cheap quality shoes but the problem was that most of my friends didn't really know how or where to find such. As a result i took them to my usual dens but being guys, were really not that good at picking out stuff we ended up leaving with nothing that day. Partly because the guys didnt want to feel less of themselves and mostly because they were lazy. This kind of shopping i was introduced to by my long time friend <a href="http:facebook.com/miriamgabriella">Miriam</a> and pretty much liked it.</p>But once i finished school and had to move back home, i had to find new shopping dens, but they never did reach up to what id had before, the fix wasnt enough. Merchandise here was more expensive and the sellers more hesitant to give a better price. More to this is the fare id have to spend commuting to make it for that saturday market day. This was too much hassle for a couple of shoes, plus too expensive bearing in mind that the 200Ksh id have to spend on transport would mean 1 pair less. Something had to be done, it was obvious that this was the case with other shoppers like myself. So i decided to build airmark, ofcourse not that i was a new to code, i'd been writing code for 2 years and had quit not seeing its relevance. So the story tells where i learnt all about web development, all from youtube, stack overflow , github and most online forums. 7 months down the line and i'm glad to say that the struggle was a success and now i give you Airmark.
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <h4 class="text-capitalize"><u>Our Mission</u></h4>
                    <p>It was my intetion as the founder of AirMark to provide a platform, a platform that would ease the way we do our shopping as far as clothes are concerend.We intend to provide a platform, the first of its kind, where shoppers can interact with sellers from all over the country. Dealing with open air markets we hope to get every single shopper on to our site, provide competitive pricing and free shipping and the best customer service.</p>
                </div>
            </div>
            <div class="row" style="margin-top:20px;background-color:rgba(0,0,0,0.5);">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 visible-lg visible-md"><h4>Service</h4>
                                    <ul class="list-unstyled">
                                        <li><a style="color:black;" href="Howto.php">Online help</a></li>
                                        <li><a style="color:black;" href="contactus.php">Contact us</a></li>
                                        <li><a style="color:black;" href="#">Order status</a></li>
                                        <li><a style="color:black;" href="#">Change location</a></li>
                                        <li><a style="color:black;" href="Howto.php">FAQS</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6"><h4>Quick Shop</h4>
                                    <ul class="list-unstyled">
                                        <li><a style="color:black;" href="mainpage.php?search=mens&&sub=tshirts">Tshirts</a></li>
                                        <li><a style="color:black;" href="Mens.php">Mens</a></li>
                                        <li><a style="color:black;" href="Mens.php">Womens</a></li>
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
                                        <li><a style="color:black;" href="#">Company information</a></li>
                                        <li><a style="color:black;" href="#">Careers</a></li>
                                        <li><a style="color:black;" href="#">Store location</a></li>
                                        <li><a style="color:black;" href="#">Affiliate Program</a></li>
                                        <li><a style="color:black;" href="#">Copyright</a></li>
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

            <!--container ends here-->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><p class="text-center text-capitalize">Copyright &#169 Tiiva Inc <?php echo Date('Y')?>.</p></div>
            </div>
        </div>
        <script type="text/javascript">
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
        </script>
    </body>
</html>
