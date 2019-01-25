<?php
ob_start();
session_start();
require 'search.inc.php';

$century = 321;
?>
<!DOCTYPE html>
<html>
<title>Tiiva | Frequently-Asked-Questions</title>

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
                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 " style="border-top:1px solid gainsboro;">
                </div>
            </div>
                    <div class="row" style="margin-top:10px;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><h6><a href="index.html"><span class="glyphicon glyphicon-home"></span>Home </a> / <a href="sportswear.html">How-to</a></h6><h2 class="text-center text-uppercase" style="margin-top:-10px; color:orange;">faqs</h2></div>
                    </div>
             <div class="row" style="background-color:black; font-family:kokila;">
                        <div class="col-lg-1 col-md-1 col-sm-4 col-xs-4"><h3><a href="index.html" style="color:white;">Home</a></h3></div>
                        <div class="col-lg-1 col-md-1 col-sm-4 col-xs-4"><h3><a href="shop.html" style="color:white;">Shop</a></h3></div>
                        <div class="col-lg-1 col-md-1 col-sm-4 col-xs-4"><h3><a href="blog.html" style="color:white;">Blog</a></h3></div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"></div>
                    </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <ul style="list-style:circle;">
                        <li>What is Tiiva</li>
                        <li>Create an Account</li>
                        <li>Upload products</li>
                        <li>Create Account</li>
                        <li>Book Items</li>
                        <li>How the site works</li>
                        <li>How to pay for the products</li>
                        <li>How to validate your seller account</li>
                        <li>Signing for sales</li>
                        <li>Requesting receipts</li>
                        <li>The extra features</li>
                        <li>All About Shipping</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h4 class="text-uppercase"><strong>What is Tiiva</strong></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p>Tiiva is your online shopping guide to open air market merchandise
                    tailored for shoppers out there dealing in second hand garments ie."Mtumba"
                    .We aim to target that customer base trying to solve the same problem every die ahrd shopper faces out there, the times , the prices and worst of all the weather. We come in providing the same outdoor experience you very well crave.With us you get to virtually travel to any open air market in teh country within the comfort of your own living space.We love Tiivaets for their original brands, quality, prices and the people. With that we have tried our best to ensure that the prices remain in the same range by trying to balance the scale where you the buyer and the seller leave with the best deal in hand.No one wants to stand in the sun all day right? worse, yet end up with nothing at the end of the conquest. For taht we ensure the buyer gets the fairest prices they can. We don't source our items from the suppliers but rather from the individuals at the market selling the items. It is not our intent to outdo them but rather to provide a platform in which they can showcase some of their best commodities with no hidden fees.</p>
                </div>
            </div>

             <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h4 class="text-uppercase"><strong>Create an account</strong></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p>Grab your internet enabled device and look up <a href="index.html">www.Tiiva.com</a> feel free to loook throught the home windoes surfs pane.Now to creating your account, click the signup button on the top right corner. Fill inyour details, remember that you can still purchase items on teh site without an account but that only restricts you from selling items. To showcase your products you must create an account, and we need to certify your legitimacy. For a seller account just get in contact with us throught the number <a href="#">0705780775</a>.</p>
                </div>
            </div>

             <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h4 class="text-uppercase"><strong>Buy Products</strong></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p>Simple. sign in to your account add item to cart and proceed to checkout. Follow the instructions.Here's the hidden info, you can add to cart when you sure about buying an item to temporarily prevent other users from buying the item and for 1 hour you literally own the item, after the hour is done the item is returned to the general mass and now you can only hold it once again for only 5 minutes after which your blacklisted from the item if you haven't bought it. The reason we do this is that items will normally surface as single units so like the open air market you have to compete for them. Be sure to checkout our blogs to learn on the new additions in cities and markets as we grow in reach. Adding an item to cart removes it from the site temporarily so in the occasion that you are looking through an item the page will refresh and redirect you to another commodity if the item is bought.Items on the site are updated every 5 seconds so lest be assured that if you miss out on one item you will definitely fall on a better deal later. You should also be aware that payment is via paybill and there are no transaction fees to this. so a commodity going for 50Ksh will literally cost you just that. Shipping is free.That deserves a yeeeeeiiii! on our side, don't you agree?Oh and be sure to check out the measurements placed on the item details to prevent yourself from buying a wrong size. Of importance to note is that we inspect the items before they get to you, and will ocassionaly call you about an order if we notice any issues with it, this is all to safeguard you the consumer. If the item does not match up to our standards we cancel order and credit your account saving the canceled order so that immediately a similar item is uploaded we save it for you in your cart for two days to look through it before its posted  and released to the rest of site.</p>
                </div>
            </div>

             <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h4 class="text-uppercase"><strong>upload products</strong></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p>This only applies to the verified sellers. Create a seller account, or rather we certify you and create an account for you which we then hand to you with all the details.Note that this is completely free and it is your right to report any official trying to solicite money from you. Once your logged in to your account, you might realize that we have mapped your shop on your profile and should be sure to update it incase you move. Back to teh main topic here, click on the top right corner on the button named "upload", here you are directed to a page where you will require to upload 3 different angle images of the item on sale. Remember the faireer your prices the more customers you get, we will essentially rank you on your service, so be sure to be the best in everthing. Although we dont allow unhealthy competition on the site, we will not try and control your pricing but rather we will give you a range within which you can operate competively with other traders. On the upload page you are required to name the particular item, give its size in terms of xl, xxl adn also its dimension in terms of length waist size and bust where applicable adn its condition ranked in a maximu of three stars. 3 being of exemplary quality and 1 being of average quality. Note that we will cross examine the items before delivery and a cancel in an order can occur if quality is poor. Your account is credited immediately a user buys the item, you are also notified by text and you can only access this funds after 3 days which are as far as our return policy goes. </p>
                </div>
            </div>

             <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h4 class="text-uppercase"><strong>How to pay for the items</strong></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p>Add the item to cart then proceed to checkout where you are provided with specific instructions specific to your shopping cart. Follow the instructions and a confirmation message will be sent to you via text. Payment is done via mpesa paybill, airtel pesa and orange pesa with no transaction fees what so ever.</p>
                </div>
            </div>



            <!--Ends here -->
            <div class="row" style="margin-top:20px;background-color:rgba(0,0,0,0.5);">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6"><h4>Service</h4>
                                    <ul class="list-unstyled">
                                        <li><a style="color:black;" href="Howto.php">Online help</a></li>
                                        <li><a style="color:black;" href="contactus.php">Contact us</a></li>
                                        <li><a style="color:black;" href="">Order status</a></li>
                                        <li><a style="color:black;" href="#">Change location</a></li>
                                        <li><a style="color:black;" href="#">FAQS</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 visible-lg visible-md" style="height:100px;"><h4>Quick Shop</h4>
                                    <ul class="list-unstyled">
                                        <li><a style="color:black;" href="#">Tshirts</a></li>
                                        <li><a style="color:black;" href="#">Mens</a></li>
                                        <li><a style="color:black;" href="#">Womens</a></li>
                                        <li><a style="color:black;" href="#">Gift Cards</a></li>
                                        <li><a style="color:black;" href="#">Shoes</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 visible-lg visible-md" style="height:100px;"><h4>Policies</h4>
                                    <ul class="list-unstyled">
                                        <li><a style="color:black;" href="#">Terms of use</a></li>
                                        <li><a style="color:black;" href="#">Privacy policy</a></li>
                                        <li><a style="color:black;" href="#">Refund policy</a></li>
                                        <li><a style="color:black;" href="#">Billing System</a></li>
                                        <li><a style="color:black;" href="#">Ticke System</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="height:100px;"><h4>About shopper</h4>
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
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><p class="text-center text-capitalize">Copyright &#169 Tiiva Inc <?php echo Date('Y')?>.</p></div>
            </div>

        </div>
        <script type="text/javascript">

            // changes the title box with the hello welcome to Tiiva logout thingi
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

        </script>
    </body>
</html>
