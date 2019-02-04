<?php
ob_start();
session_start();
require 'search.inc.php';
require 'connect.php';
require 'utils/userutils.php';

if(userLoggedIn() == True){
    // do something later
}else{
    header('Location:index.php');
    die();
}
$century = 321;//Shop

?>
<!DOCTYPE html>
<html>
<title>Tiiva | Checkout</title>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php require 'templates/resourcelinks/headerlinks.php';?>

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
                        <a><span class="glyphicon glyphicon-shopping-cart" style="font-size:30px;color:#523CFA;"></span><sup><span class="badge" id="changethis" style="background-color:red;">0</span></sup><small style="font-family:kok;">&nbsp;Cart</small>&nbsp;<span class="caret"></span></a>

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
        </div>
        <div class="container-fluid">
            <div class="row visible-lg visible-md" style="margin-top:10px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><a href="index.php">Home </a> / <a href="checkout.php">Checkout</a><h2 class="text-center text-uppercase" style="margin-top:-10px; color:orange;">Checkout</h2></div>
            </div>
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="newcartitems"></div>
            </div>
            <div class="row visible-sm visible-xs">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="newcartitems4"></div>
            </div>


            <div class="row visible-sm visible-xs" style="margin-top:1px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><a href="index.php">Home </a> / <a href="checkout.php">Checkout</a><h4 class="text-center text-uppercase" style="margin-top:5px; color:orange;">Checkout</h4></div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


                    <div class="row visible-lg visible-md details" style="margin-top:1px;background-color:rgba(0,0,0,0.1);font-family:kok;cursor:pointer;">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="border:1px solid black;background-color:black;color:white;"><h4 class="text-uppercase">Step 1</h4></div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style=""><h4 class="text-capitalize">Shipping details</h4></div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 bills" style="border-left:1px solid white;background-color:lime;color:white;display:none;"><h4 class="text-center"><span class="glyphicon glyphicon-ok"></span></h4></div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 bills" style="border-left:1px solid white;background-color:red;color:white;"><h4 class="text-center"><span class="glyphicon glyphicon-remove"></span></h4></div>

                    </div>

                    <div class="row visible-xs visible-sm details" style="margin-top:1px;background-color:rgba(0,0,0,0.1);font-family:kok;cursor:pointer;">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="border:1px solid black;background-color:black;color:white;"><h4 class="text-uppercase">Step 1</h4></div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8" style=""><h4 class="text-capitalize">Shipping details</h4></div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="border-left:1px solid white;background-color:lime;color:white;display:none;"><h4 class="text-center"><span class="glyphicon glyphicon-ok"></span></h4></div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="border-left:1px solid white;background-color:red;color:white;"><h4 class="text-center"><span class="glyphicon glyphicon-remove"></span></h4></div>
                    </div>

                    <div class="row" id="checkoutcontainer">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:10px;"><h3>Check out details</h3></div>
                    </div>


                    <div class="row" style="border-top:1px solid gainsboro;;">

                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><h3>Bill to</h3></div>
                            </div>
                            <div class="row" style="font-family:kok;margin-top:10px;">
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 visible-lg visible-md"></div>
                                <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12">
                                    <form class="form-group" action="checkout.php" method="get">
                                        <label for="username">Name:</label>
                                        <input type="text" id="username" name="username" placeholder="Name: Jeniffer Craig Someone" class="form-control" title="<h5>Name Field</h5>Please provide your full name. Your delivery will be made to this name unless a special request is provided in the <strong>Special Requests Field</strong>"/><br>
                                        <label for="useridno">ID no:</label>
                                        <input type="number" id="useridno" name="useridno" placeholder="ID Number: 302367236" class="form-control" title="<h5>Identification number Field</h5>Please provide your identification number in the input below"/><br>
                                        <label for="emailaddress">Emailaddress: (optional)</label>
                                        <input type="email" id="emailaddress" value="myemail@gmail.com" name="emailaddress" placeholder="Email: me@gmail.com" class="form-control" title="<h5>Email address Field</h5>Please provide us with your Email Address.ps. We will send your receipt to the provided email. This step is optional"/><br>
                                        <label>Country</label>
                                        <input type="text" placeholder="Country: Kenya" readonly disabled class="form-control" title="<h5>Country Field</h5>Please provide us with your country where the shopping should be delivered"/><br>
                                        <label for="phonenumber">Phone Number:</label>
                                        <input type="text" id="phonenumber" name="phonenumber" placeholder="Mobile Phone: 072323321" class="form-control" title="<h5>PhoneNumber Field</h5>Please provide your phone number. This must be the same one used to pay for your cart but it can be an optional contact during delivery if another one is provided in the special requests input field"/><br>
                                        <div class="form-group">
                                        <label for="county">County:</label>
                                        <select class="form-control" id="county" name="county" title="<h5>County to Deliver cart Field</h5>Please select the county in Kenya where the delivery is to be made">

                                        <optgroup label="COUNTIES/STATE/REGION" >PROVINCE
                                        <option value="Baringo">Baringo county</option>
                                        <option value="Bomet">Bomet county</option>
                                        <option value="Bungoma">Bungoma county</option>
                                        <option value="Busia">Busia county</option>
                                        <option value="Elgeyo Marakwet">Elgeyo Marakwet county</option>
                                        <option value="Embu">Embu county</option>
                                        <option value="Garissa">Garissa county</option>
                                        <option value="Homa bay">Homa bay county</option>
                                        <option value="Isiolo">Isiolo county</option>
                                        <option value="Kajiado">Kajiado county</option>
                                        <option value="Kakamega">Kakamega county</option>
                                        <option value="Kericho">Kericho county</option>
                                        <option value="Kiambu">Kiambu county</option>
                                        <option value="Kilifi">Kilifi county</option>
                                        <option value="Kirinyaga">Kirinyaga county</option>
                                        <option value="Kisii">Kisii county</option>
                                        <option value="Kisumu">Kisumu county</option>
                                        <option value="Kitui">Kitui county</option>
                                        <option value="Kwale">Kwale county</option>
                                        <option value="Laikipia">Laikipia county</option>
                                        <option value="Lamu">Lamu county</option>
                                        <option value="Machakos">Machakos county</option>
                                        <option value="Makueni">Makueni county</option>
                                        <option value="Mandera">Mandera county</option>
                                        <option value="Meru">Meru county</option>
                                        <option value="Migori">Migori county</option>
                                        <option value="Marsabit">Marsabit county</option>
                                        <option value="Mombasa">Mombasa county</option>
                                        <option value="Muranga">Murang'a county</option>
                                        <option value="Nairobi">Nairobi county</option>
                                        <option value="Nakuru">Nakuru county</option>
                                        <option value="Nandi">Nandi county</option>
                                        <option value="Narok">Narok county</option>
                                        <option value="Nyamira">Nyamira county</option>
                                        <option value="Nyandarua">Nyandarua county</option>
                                        <option value="Nyeri">Nyeri county</option>
                                        <option value="Samburu">Samburu county</option>
                                        <option value="Siaya">Siaya county</option>
                                        <option value="Taita Taveta">Taita Taveta county</option>
                                        <option value="Tana River">Tana River county</option>
                                        <option value="Tharaka Nithi">Tharaka Nithi county</option>
                                        <option value="Trans Nzoia">Trans Nzoia county</option>
                                        <option value="Turkana">Turkana county</option>
                                        <option value="Uasin Gishu">Uasin Gishu county</option>
                                        <option value="Vihiga">Vihiga county</option>
                                        <option value="Wajir">Wajir county</option>
                                        <option value="West Pokot">West Pokot county</option>

                                        </optgroup>
                                      </select>
                                    </div>
                                        <label for="area">Area: eg.Garissa town</label>
                                        <input type="text" id="area" name="area" placeholder="Town/Area*" class="form-control" title="<h5>Town Delivery Field</h5>Please provide the town in which your delivery will be made p.s. You can also provide your exact gps coordinates and we will deliver straight to your doorstep at no extra cost"/><br>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h3>Special request</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:10px;">
<!--                                    <form>-->
                                        <textarea title="<h5>Special Request Field</h5>Please provide extra information pertaining to your delivery. You can have your package delivered to a friend or dropped off at a drop off point of your choosing" rows="15" cols="37" id="details" name="details" class="form-control" placeholder="Notes about your order. Special Notes for Delivery. Here you can specify where you want the package dropped off to or even brought to.E.g Please deliver the package to Eldroret and drop it off at Kenafric store near Eldoret town library." style="background-color:rgba(220, 220, 220, 0.24);"></textarea>
<!--                                    </form>-->
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="row" style="margin-top:20px;">
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 visile-lg visible-md"></div>
                                <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12">
                                    <div class="row">
                                <div class="col-lg-12 col-sm-12 col-sm-12 col-xs-12" style="background-color:rgba(255, 0, 0, 0.92);border-top-right-radius:5px;border-top-left-radius:5px;">
                                        <h4 class="text-center">Note</h4>
                                </div>
                            </div>
                            <div class="row" style="background-color:rgba(153, 174, 216, 0.65);">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <ol>
                                <li>Currently we are only shipping in Kenya.</li>
                                <li>Provide us with your correct details as you will be required to sign off for your package</li>
                                <li>You must provide us with your name and mobile phone number</li>
                                <li>Select your county from the drop down list</li>
                                <li>Write down your Township or Area where you choose to receive your package</li>
                                <li>We will contact you via your mobile number</li>
                            </ol>
                                </div>
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>

            <div class="row visible-lg visible-md shipping" style="margin-top:1px;background-color:rgba(0,0,0,0.1);font-family:kok;cursor:pointer;">
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="border:1px solid black;background-color:black;color:white;"><h4 class="text-uppercase">Step 2</h4></div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style=""><h4 class="text-capitalize">Delivery options</h4></div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="border-left:1px solid white;background-color:lime;color:white;"><h4 class="text-center"><span class="glyphicon glyphicon-ok"></span></h4></div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="border-left:1px solid white;background-color:red;color:white;display:none;"><h4 class="text-center"><span class="glyphicon glyphicon-remove"></span></h4></div>
            </div>

            <div class="row visible-xs visible-sm shipping" style="margin-top:1px;background-color:rgba(0,0,0,0.1);font-family:kok;cursor:pointer;">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="border:1px solid black;background-color:black;color:white;"><h4 class="text-uppercase">Step 2</h4></div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9" style=""><h4 class="text-capitalize">Delivery options</h4></div>
            </div>


            <div class="row" style="margin-top:1px;display:none;" id="shippingdetails">
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11" style="background-color:rgba(165, 165, 165, 0.15);">
                 <p>Please decide on your mode of delivery</p>
                    <form id="radioform">
                        <div class="radio">
                      <label><input title="<h5>Free delivery with Tiiva</h5>With this option you get your package delivered in 3-5 working days free of charge through Tiiva's bulk shipping. This is our way of giving back to our customers. you get a harty smile and a Thankyou with every delivery." value="free" checked type="radio" name="optradio">Free delivery with Tiiva (1 - 5 working days) - Flat rate - FREE</label>
                    </div>

                    <div class="radio">
                      <label><input title="<h5>Experss delivery with Tiiva</h5>With this option you get your package delivered in 1 - 3 days at a flatrate of 400Ksh no matter the size of the package.With this option you get your package delivered faster, we top off any extra costs if any and you get a harty smile and a Thankyou with every delivery." value="ExpressTiiva" type="radio" name="optradio">Express Delivery with Tiiva (1 - 3 days) - Flat rate - 400 KSH</label>
                    </div>
                    <div class="radio">
                      <label><input title="<h5>Fargo courier COURIER Option</h5>With this option you get your package delivered to you via Fargo courier.We top off any extra charges if your package shipping cost is higher and you receive your package faster.p.s They're awesome" type="radio" name="optradio">Fargo courier Delivery (1 - 4 days) - Flat rate - 400 KSH</label>
                    </div>
                    </form>
                    <small style="color:red">*NB Flat rates for the non-free deliveries get a return on the change if shipping prices are smaller and a top off if the shipping prices are higher </small>
                    <small>i.e. change twakurudishia :)</small>

                </div>
<!--                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>-->
            </div>


            <div class="row visible-lg visible-md review" style="margin-top:1px;background-color:rgba(0,0,0,0.1);font-family:kok;cursor:pointer;">
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="border:1px solid black;background-color:black;color:white;"><h4 class="text-uppercase">Step 3</h4></div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style=""><h4 class="text-capitalize">Review &amp; Payment</h4></div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="border-left:1px solid white;background-color:lime;color:white;"><h4 class="text-center"><span class="glyphicon glyphicon-ok"></span></h4></div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="border-left:1px solid white;background-color:red;color:white;display:none;"><h4 class="text-center"><span class="glyphicon glyphicon-remove"></span></h4></div>
            </div>

            <div class="row visible-xs visible-sm review" style="margin-top:1px;background-color:rgba(0,0,0,0.1);font-family:kok;cursor:pointer;">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="border:1px solid black;background-color:black;color:white;"><h4 class="text-uppercase">Step 3</h4></div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9" style=""><h4 class="text-capitalize">Review &amp; Payment</h4></div>
            </div>


<!--            start of cart-->
            <div class="row" style="margin-top:1px;display:none;" id="reviews">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="cartitems"></div>
            </div>

<!--            end of the actual cart-->

            <div class="row visible-lg visible-md payment" style="margin-top:1px;background-color:rgba(0,0,0,0.1);font-family:kok;cursor:pointer;">
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="border:1px solid black;background-color:black;color:white;"><h4 class="text-uppercase">step 4</h4></div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style=""><h4 class="text-capitalize">Payment</h4></div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="border-left:1px solid white;background-color:lime;color:white;display:none;"><h4 class="text-center"><span class="glyphicon glyphicon-ok"></span></h4></div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="border-left:1px solid white;background-color:red;color:white;"><h4 class="text-center"><span class="glyphicon glyphicon-remove"></span></h4></div>
            </div>


            <div class="row visible-xs visible-sm payment" style="margin-top:1px;background-color:rgba(0,0,0,0.1);font-family:kok;cursor:pointer;">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="border:1px solid black;background-color:black;color:white;"><h4 class="text-uppercase">step 4</h4></div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9" style=""><h4 class="text-capitalize">payment</h4></div>
            </div>


                    <div class="row" style="display:none;" id="paymentid">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                                    <p>Please decide on your mode of payment</p>
                    <div class="radio">
                      <label><input title="<h5>Airtel Pesa</h5>You simply pay for your cart using your Airtel Pesa. Please ensure the number provided is the same provided in your billing details.Ensure you pay the exact total provided in step 3.p.s there are no transaction charges for this method" type="radio" name="optradio">Airtel Pesa (<small>no transaction charges</small>)</label>
                    </div>
                    <div class="radio">
                      <label><input title="<h5>Eazzy pay</h5>You simply pay for your cart using your Equitel line. Please ensure the number provided is the same provided in your billing details.Ensure you pay the exact total provided in step 3.p.s there are no transaction charges for this method" type="radio" name="optradio">EazzyPay (<small>no transaction charges</small>)</label>
                    </div>
                    <div class="radio">
                      <label><input checked title="<h5>M-Pesa</h5>You simply pay for your cart using your Safaricom line. Please ensure the number provided is the same provided in your billing details.Ensure you pay the exact total provided in step 3.p.s there are no transaction charges for this method" type="radio" name="optradio">M-Pesa (<small>no transaction charges</small>)</label>
                    </div>
                    <div class="radio">
                      <label><input title="<h5>Telkom Pesa</h5>You simply pay for your cart using your Telkom line. Please ensure the number provided is the same provided in your billing details.Ensure you pay the exact total provided in step 3.p.s there are no transaction charges for this method" type="radio" name="optradio">Telkom Pesa (<small>no transaction charges</small>)</label>
                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-top:1px;">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border:2px solid blue;padding-bottom:3%;border-radius:5px;">

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<!--                        <h4 class="text-center text-capitalize">Mpesa</h4>-->
                            <img src="images/lipanampesa.png" class="img-responsive"/>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ol>
                                <li>Go to the <strong>M-PESA</strong> Menu</li>
                                <li>Go to <strong>Lipa na M-PESA</strong></li>
                                <li>Go to <strong>Buy Goods and Services</strong> </li>
                                <li>Enter <strong>Till Number: <span style="color:orange;text-shadow:1px 1px 1px black;font-size:130%;">860321</span></strong></li>
                                <li>Enter <strong>amount: <span id="mytotal" style="color:blue;font-size:120%;">Your Total</span></strong></li>
                                <li>Enter your <strong>M-PESA pin</strong></li>
                                <li>Confirm the name checks out as Tiiva Shopping mall</li>
                                <li>By now your all done.Provide us with the transaction code in the input bar below</li>
                                <li>Proceed to checkout and your receipt will be processed</li>
                            </ol>

                            <form class="form-inline" method="post" action="index.php">
                                 <label for="transcode">Transaction code</label> i.e. DKM38CW7EP
                                <div class="input-group col-lg-12" style="font-family:kok;">
                                <input type="text" id="transcationinputid" onkeyup="transactioncovertuppercase();" class="form-control" placeholder="Transcation code" name="transcode" style="text-transform:uppercase;background-color:rgba(220, 220, 220, 0.47);" title="<h5>Transaction Code</h5>Please provide the transaction code you receive after your payment. This is to help Tiiva guys clear you cart faster.p.s Thankyou for understanding"/>
                                <span class="input-group-btn">
                                    <input type="button" id="checkoutbutton" onclick="checkout();" class="btn btn-success" value="Checkout"/>
    <!--                                            <button type="button" class="btn btn-default">Go</button>-->
                                </span>

                                </div>
                            </form>
                        <div class="row visible-sm visible-xs">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="newcartitems3"></div>
                    <div class="row" style="display:none;visibility:hidden;" id="spinnersmall">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <img src="images/spinner/spinner_medium.gif" class="img-responsive"/>
                            <span class="text-center">Loading...</span>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                    </div>
            </div>
                    </div>

                    </div>

                </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 visible-lg visible-md">

                <div class="row visible-md visible-lg">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="newcartitems2"></div>
                    <div class="row" style="margin-top:25%;display:none;visibility:hidden;" id="spinnerlarge">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <img src="images/spinner/spinner_large.gif" class="img-responsive"/>
                            <span class="text-center">Loading...</span>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                    </div>
            </div>
                </div>

            </div>
                        </div>
                    </div>


            </div>

                </div>

</div>
<?php 
        require('templates/footer.php');
        ?>
        <script type="text/javascript">

                 //search function right here

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

            // changes the title box with the hello welcome to airmark logout thingi
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

                cart();
            }

            // changes the title box with the hello welcome to airmark logout thingi
            function cart(){
              if(window.XMLHttpRequest){
                    xmlhttp3 = new XMLHttpRequest();
                }else{
                    xmlhttp3 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp3.onreadystatechange = function(){
                if (xmlhttp3.readyState == 4 && xmlhttp3.status == 200){
                    document.getElementById('cartitems').innerHTML= xmlhttp3.responseText;

                total();

                    }
                    }
                    xmlhttp3.open('GET','displaycartcheckout.php',true);
                    xmlhttp3.send();


            }

            function transactioncovertuppercase(){
                var transcationinputid = document.getElementById('transcationinputid').value;
                transcationinputid = transcationinputid.toLocaleUpperCase;
            }
            function total(){
                var total = document.getElementById('total').innerHTML;
                var mytotal = document.getElementById('mytotal');
                mytotal.innerHTML = total;
            }
            function additem(iad){
                if(window.XMLHttpRequest){
                    xmlhttp05 = new XMLHttpRequest();
                }else{
                    xmlhttp05 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp05.onreadystatechange = function(){
                if (xmlhttp05.readyState == 4 && xmlhttp05.status == 200){
                    //document.getElementById('newcartitems').innerHTML= xmlhttp05.responseText;
                    cart();

                    }
                    }
                    xmlhttp05.open('GET','stolencart.php?action=add&id='+iad,true);
                    xmlhttp05.send();
            }
            function removeitem(irem){
                if(window.XMLHttpRequest){
                    xmlhttp06 = new XMLHttpRequest();
                }else{
                    xmlhttp06 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp06.onreadystatechange = function(){
                if (xmlhttp06.readyState == 4 && xmlhttp06.status == 200){
                    //document.getElementById('newcartitems').innerHTML= xmlhttp06.responseText;
                    cart();

                    }
                    }
                    xmlhttp06.open('GET','stolencart.php?action=remove&id='+irem,true);
                    xmlhttp06.send();
            }

            function cartship(){
                //alert("cartship called");
                var xer = $("#radioform input[type='radio']:checked").val();
                var message = "shipping="+xer;
                    if(xer != 'free'){
                        $.ajax({
                            url: "displaycartcheckout.php",
                            type: "GET",
                            data: message,
                            success: function(data){
                                $("#cartitems").html(data);
                                //alert(data);
                            }
                        })
                    }else{
                        cart();
                    }
            }

            function additemship(iad){
                if(window.XMLHttpRequest){
                    xmlhttp05 = new XMLHttpRequest();
                }else{
                    xmlhttp05 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp05.onreadystatechange = function(){
                if (xmlhttp05.readyState == 4 && xmlhttp05.status == 200){
                    //document.getElementById('newcartitems').innerHTML= xmlhttp05.responseText;
                    cartship();

                    }
                    }
                    xmlhttp05.open('GET','stolencart.php?action=add&id='+iad,true);
                    xmlhttp05.send();
            }
            function removeitemship(irem){
                if(window.XMLHttpRequest){
                    xmlhttp06 = new XMLHttpRequest();
                }else{
                    xmlhttp06 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp06.onreadystatechange = function(){
                if (xmlhttp06.readyState == 4 && xmlhttp06.status == 200){
                    //document.getElementById('newcartitems').innerHTML= xmlhttp06.responseText;
                    cartship();

                    }
                    }
                    xmlhttp06.open('GET','stolencart.php?action=remove&id='+irem,true);
                    xmlhttp06.send();
            }


            function checkout(){
                // remember to filter the buttons before
                var username = document.getElementById('username').value;
                var useridno = document.getElementById('useridno').value;
                var emailaddress = document.getElementById('emailaddress').value;
                var phonenumber = document.getElementById('phonenumber').value;
                var county = document.getElementById('county').value;
                var area = document.getElementById('area').value;
                var details = document.getElementById('details').value;
                var transcationinputid = document.getElementById('transcationinputid').value;
                var xer = $("#radioform input[type='radio']:checked").val();

                var checkoutinfo = 'username='+username+'&useridno='+useridno+'&emailaddress='+emailaddress+'&phonenumber='+phonenumber+'&county='+county+'&area='+area+'&details='+details+'&transcationinputid='+transcationinputid+"&shipping="+xer;
                //alert(checkoutinfo);
                if(username != ''){
                    if(phonenumber != ''){
                        var cnty = confirm('You selected '+county+' as your county');
                        if(cnty != false){
                            if(area != ''){
                                if(transcationinputid != ''){
                                    sencheckout();
                                }else{
                                    alert('Please provide mpesa transaction code in the input below');
                                }
                            }else{
                                alert('Please provide us with your drop off location');
                            }
                        }else{
                            alert('Please select your correct county');
                        }
                    }else{
                        alert('Sorry but you MUST PROVIDE YOUR PHONENUMBER');
                    }
                }else{
                    alert('Please provide your Names');
                }
                function sencheckout(){
                    var spinnersmall = document.getElementById('spinnersmall');
                    var spinnerlarge = document.getElementById('spinnerlarge');
                    spinnersmall.style.visibility = 'visible';
                    spinnersmall.style.display = 'block';

                    spinnerlarge.style.visibility = 'visible';
                    spinnerlarge.style.display = 'block';


                    if(window.XMLHttpRequest){
                    xmlhttp06 = new XMLHttpRequest();
                }else{
                    xmlhttp06 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp06.onreadystatechange = function(){
                if (xmlhttp06.readyState == 4 && xmlhttp06.status == 200){
                    document.getElementById('newcartitems').innerHTML= xmlhttp06.responseText;
                    document.getElementById('newcartitems2').innerHTML= xmlhttp06.responseText;
                    document.getElementById('newcartitems3').innerHTML= xmlhttp06.responseText;
                    document.getElementById('newcartitems4').innerHTML= xmlhttp06.responseText;
                    //cart();
                    var checkoutbutton = document.getElementById('checkoutbutton');
                    checkoutbutton.disabled = true;
                    spinnersmall.style.visibility = 'hidden';
                    spinnersmall.style.display = 'none';

                    spinnerlarge.style.visibility = 'hidden';
                    spinnerlarge.style.display = 'none';

                                setTimeout("payslip();",3000);


                    }
                    }
                    xmlhttp06.open('POST','checkoutbrains.php',true);
                    xmlhttp06.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                    xmlhttp06.send(checkoutinfo);
                }
            }
            function payslip(){
                        document.location.href = 'paymentslip.html';
                            }

        $(document).ready(function(){

                $(".details").click(function(){
                    $("#reviews, #paymentid, #shippingdetails").hide();
                    $("#checkoutcontainer").fadeToggle();
                });

                $(".review").click(function(){
                    $("#reviews").fadeToggle();
                });

                $(".payment").click(function(){
                    $("#paymentid").fadeToggle();
                });

                $("#radioform").change(function(){
                    var xer = $("#radioform input[type='radio']:checked").val();
                    //alert(xer);
                    //insert ajax call in here
                    var message = "shipping="+xer;
                    if(xer != 'free'){
                        $.ajax({
                            url: "displaycartcheckout.php",
                            type: "GET",
                            data: message,
                            success: function(data){
                                $("#cartitems").html(data);
                                //total();
                                cartship();
                                //alert(data);
                            }
                        })
                    }else{
                        cart();total();
                        //cartship();
                    }

                });

                $(".shipping").click(function(){
                    $("#shippingdetails").fadeToggle();
                });

                $(document).scroll(function(){
                    //alert('There are three kids');

                    if($("#username").val().length > 7){
                        if($("#useridno").val().length > 0){
                            if($("#phonenumber").val().length > 0){
                                if($("#county").val().length > 0){
                                    if($("#area").val().length > 0){
                                        $(".bills").eq(0).show();
                                        $(".bills").eq(1).hide();
                                    }else{
                                        $(".bills").eq(0).hide();
                                        $(".bills").eq(1).show();
                                    }
                                }else{
                                    $(".bills").eq(0).hide();
                                    $(".bills").eq(1).show();
                                }
                            }else{
                                $(".bills").eq(0).hide();
                                $(".bills").eq(1).show();
                            }
                        }else{
                            $(".bills").eq(0).hide();
                            $(".bills").eq(1).show();
                        }
                    }else{
                        $(".bills").eq(0).hide();
                        $(".bills").eq(1).show();
                    }

                });

            $(":input").tooltip({
                placement:"top",
                html: "true",
                //title: "i have nothing to say anything"
            })

        })
        </script>
    </body>
</html>
