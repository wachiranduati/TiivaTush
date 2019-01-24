<?php
ob_start();
session_start();
require 'search.inc.php';

$century = 321;
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
        <div class="container">
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
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><hr></div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><a href="index.php"><span class="glyphicon glyphicon-home">Home</span></a> / <a href="Termsofuse.php">Terms&C</a></div>
                </div>
                <i class="mdi mdi-content-cut" style="position:relative;top:10px;"></i>
                <i class="mdi mdi-content-cut" style="position:relative;top:10px;left:15%;"></i>
                <i class="mdi mdi-content-cut" style="position:relative;top:10px;left:30%;"></i>
                <i class="mdi mdi-content-cut" style="position:relative;top:10px;left:45%;"></i>
                <i class="mdi mdi-content-cut" style="position:relative;top:10px;left:60%;"></i>
                <i class="mdi mdi-content-cut" style="position:relative;top:10px;left:75%;"></i>
                <i class="mdi mdi-content-cut" style="position:relative;top:10px;left:90%;"></i>
                <i class="mdi mdi-content-cut mdi-rotate-90" style="position:relative;top:5%;left:89.3%;"></i>





                <div class="row" style="border:1px dashed blue;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row visible-lg visible-md">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1 class="text-center"><strong>Tiiva Inc</strong></h1>
                    </div>
                </div>

                <div class="row visible-sm visible-xs">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="text-center"><strong>Tiiva Inc</strong></h2>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                        <h3 class="text-capitalize"><strong>Terms and conditions</strong></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                        <h4 class="text-uppercase"><stong>Please note that by using the services provided in this site you signify your acceptance to be legally bound by the terms and conditions set out below. It is etherefore important that you carefully read these terms and conditions. You may also seek independent legal advice on the same</stong></h4>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h4 class="text-capitalize"><strong>1.General company information paper</strong></h4>
                            <p>Tiiva was started by Nick and he to this day owns 100% of all company shares.</p>
                        </div>

                    </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h4 class="text-capitalize"><strong>2.Tiiva's rights and obligations</strong></h4>
                                <p>(1) The merchant acknowledges that the relationship between customers and
                                    Tiiva is governed by the privacy policy and the general terms and conditions,
                                    both available on the website.<br><br>
                                    (2) Tiiva is authorised to accept binding sales on behalf of the merchant and
                                    will be careful to pass order data on to the merchant as well as technology
                                    allows.<br><br>
                                    (3) In order to maintain its reputation for quality and high standard of service,
                                    Tiiva reserves the right to terminate the relationship with the merchant if the
                                    merchant repeatedly receives bad reviews or complaints, or fails to comply with
                                    our recommendations.<br></p>
                                <h4 class="text-capitalize"><strong>3.liability</strong></h4>
                                <p>(1) The merchant indemnifies Tiiva from all claims arising in relation to
                                    matters outside Tiiva's control, including but not limited to the quality of
                                    goods and services provided by the seller. The merchant further indemnifies
                                    Tiiva from third parties' claims resulting from any violation of laws and
                                    regulations by the seller.<br><br>
                                    (2) Tiiva cannot guarantee that its service will be free from all malfunctions,
                                    but will exercise all reasonable care and skill to resolve any such case.<br><br>
                                </p>
                                <h4 class="text-capitalize"><strong>4.Privacy Policy</strong></h4>
                                <p>Tiiva respects the privacy of every individual who visits our website. This
                                    Privacy Policy outlines the information Tiiva may collect and how we may use
                                    that information.
                                </p>
                                <p class="text-capitalize"><strong>Personal Data</strong></p>
                                <p>Tiiva.com will not collect any personally identifiable information about you
                                    (e.g., your name, address, telephone number or email address ("personal data"))
                                    through our website unless you have provided it to us voluntarily. If you do not
                                    want your personal data collected, please do not submit it to us.<br><br>
                                    When you do provide us with personal data, we may use that information in the
                                    following ways, unless stated otherwise: we may store and process that
                                    information to better understand your needs and how we can improve our
                                    products and services; we (or a fulfillment house or other third party on our
                                    behalf in connection with a promotion) may use that information to contact you;
                                    and/or we may provide other third parties with aggregate - but not individual -
                                    information about visitors to or users of our sites. We do not know and do not
                                    intend to sell, rent or market personal data about you to third parties.<br><br>
                                    When you provide your personal information(such as name, address, phone
                                    number, company name, email address, credit card number, or the products you
                                    are shopping for or purchasing) we will not give or sell your individual information
                                    to any outside company for its use in marketing or solicitation. We will maintain
                                    the confidentiality of your personal information and it will be used only to support
                                    your customer relationship with us. Additionally, internal practices help protect
                                    your privacy by limiting employee access to and use of customer data.<br><br>
                                    Both parties are obliged to treat confidentially the content of this agreement, as
                                    well as all other information and data they acquire in connection with the
                                    partnership, and not use it for purposes outside the scope of this contract or
                                    pass it on to third parties. Both parties are obliged to follow privacy laws and
                                    handle accordingly all data related to customers, suppliers and business partners.<br><br>
                                    If you have any questions or concerns in this area we are happy to respond
                                    personally to you; e-mail you</p>
                                <h5 class="text-capitalize"><strong>Additional Information Collected Automatically</strong></h5>
                                <p>In some cases, we may automatically (i.e., not via registration) collect technical
                                    information when you connect to our site that is not personally identifiable.
                                    Examples of this type of information include the type of Internet Browser you are
                                    using, the type of computer operating system you are using and the domain
                                    name of the website from which you linked to our site.</p>
                                <h5 class="text-capitalize"><strong>Information Placed Automatically on Your Computer -- Cookies</strong></h5>
                                <p>When you view one of our websites, we may store some information on your
                                    computer. This information will be in the form of a "Cookie" or similar file and can
                                    help us in many ways. For example, Cookies allow us to tailor a website to better
                                    match your interests and preferences. With most Internet Browsers, you can
                                    erase Cookies from your computer hard drive, block all Cookies or receive a
                                    warning before a Cookie is stored. Please refer to your Browser instructions or
                                    help screen to learn more about these</p>
                                <h4 class="text-capitalize"><strong>5.License</strong></h4>
                                <p>(1) Tiiva has the right to freely maintain the merchant's listing and its ranking
                                    on the website. Tiiva offers customers the opportunity to give ratings and
                                    reviews of the goods and services on the website, and has the right but not the
                                    obligation to publish these online and make them visible to all customers.
                                    Tiiva reserves the right to delete ratings and reviews.<br><br>
                                    (2) Tiiva may scan, transcribe, and publish online the merchant's listings,
                                    logos and other materials required. The merchant grants to Tiiva a royaltyfree, perpetual, unrestricted licence to use and distribute any materials provided
                                    by him, for the purpose of advertising Tiiva's service. In particular, this
                                    includes use in Google AdWords campaigns, domain name registrations and
                                    other online marketing and search engine optimization measures.</p>
                                <h4><strong>6.Return Policy</strong></h4>
                                <p>(1) We shall only accept products if faulty or damaged, returns will be made to
                                    the store they were ordered from.<br>
                                    (2) Reports of damages must be made within 12 hours of pick up or delivery.<br>
                                    (3) Reports of faults are subject to product warranty as per manufacturers Terms and Conditions.<br>
                                    (4) If a product is returned then the packaging must be intact, and proof of
                                    purchase will be required.<br></p>
                                <h4><strong>7.Terms and Termination</strong></h4>
                                <p>(1) This agreement is valid as soon as the merchant signs the contract, or fulfils
                                an order referred by Tiiva, and remains valid indefinitely, until termination by
                                either party. Termination can occur at any time, with a period of notice of one
                                month, in writing, by email, post or fax. The revenues generated during this notice
                                period are still subject to the partnership agreement. The right to immediate
                                termination by either party for important cause remains unaffected.<br><br>
                                (2) The right to immediate termination in particular covers the case where the
                                merchant repeatedly receives negative ratings and reviews on the website, and
                                when these are not obviously unjustified. Repeatedly providing misleading
                                information or withholding information required to present the merchant's items
                                is also grounds for immediate termination. Typos, mistakes and transmission
                                errors are excluded from this, as long as they are not caused with intent or by
                                gross negligence.<br><br></p>
                                <h4><strong>8.General Terms of Use</strong></h4>
                                <p>(1) If a single clause in this agreement is invalid, both parties will endeavor to
                                replace the invalid clause by a valid one that reproduces as closely as possible
                                the intended economic meaning of the invalid clause. The validity of the rest of
                                the agreement remains unaffected. This applies in particular if the agreement is
                                found to be incomplete.<br><br>
                                (2) Tiiva reserves the right to modify his general terms and conditions
                                without giving any justification. In that case, Tiiva will give the merchant
                                adequate notice via email. The notice will contain advice on the right and period
                                of objection to the changes, and on the consequences of leaving unexercised the
                                right to object.<br><br>
                                (3) The changed terms and conditions are considered agreed by the merchant if
                                he does not object to them in writing within 2 weeks of receiving notice of the
                                changes.<br><br>
                                (4) Any terms and conditions of the merchant are not part of this agreement
                                unless Tiiva expressly agrees to adhere to them in writing.<br><br></p>
                                <h4><strong>9.Copyright</strong></h4>
                                <p>(1) The contents of this website, including softwares, text, graphics, logos, button
                            icons, images, audio clips, digital downloads and data compilations made
                            available herein or any other product or service are either our copyrights or those
                            of our affiliates, or third parties transacting on Tiiva and are duly protected by
                            applicable local as well as international laws.<br><br>
                            (2) You may not extract and/or re-utilise parts of the content of this website or
                            products or services hosted in this website without our express written consent
                            or the respective third parties.<br><br>
                            (3) Unless express authority is given you may not incorporate any portion of any
                            software found on this site into your own programs or compile any portion of it in
                            combination with your own programs, transfer it for use with another service, or
                            sell, rent, lease, lend, loan, distribute or sublicense software or otherwise assign
                            any rights to the software in whole or in part<br><br>
                            (4) You may not circumvent, manufacture or distribute devices which are
                            primarily designed or produced for the purpose of circumventing technical
                            measures designed to protect the copyrights.<br><br>
                            (5) You may not remove or alter any electronic rights management information;
                            or distribute, broadcast or make available to the public, protected works, records
                            or copies from which electronic rights management information has been
                            removed or has been altered without our express authority or that of respective
                            third parties.<br><br>
                            (6) You may not utilise any data mining, robots, or similar data gathering and
                            extraction tools to extract (whether once or many times) for re-utilisation any
                            substantial parts of the content of this website, without our express written
                            consent of Tiiva Limited.<br><br>
                            (7) You may not create and/or publish your own database that features
                            substantial parts our services (e.g. our prices and product listings) without our
                            express written consent.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-1"></div>
                </div>
            </div>
                    </div>
                    <i class="mdi mdi-content-cut" style="position:relative;top:-10px;"></i>
                    <i class="mdi mdi-content-cut" style="position:relative;top:-10px;left:15%;"></i>
                    <i class="mdi mdi-content-cut" style="position:relative;top:-10px;left:30%;"></i>
                    <i class="mdi mdi-content-cut" style="position:relative;top:-10px;left:45%;"></i>
                    <i class="mdi mdi-content-cut" style="position:relative;top:-10px;left:60%;"></i>
                    <i class="mdi mdi-content-cut" style="position:relative;top:-10px;left:75%;"></i>
                    <i class="mdi mdi-content-cut" style="position:relative;top:-10px;left:90%;"></i>
                </div>
             <!--Ends here -->
            <div class="row" style="margin-top:20px;background-color:rgba(0,0,0,0.5);">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 visible-lg visible-md"><h4>Service</h4>
                                    <ul class="list-unstyled">
                                        <li><a style="color:black;" href="#">Online help</a></li>
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
                                        <li><a style="color:black;" href="#">Terms of use</a></li>
                                        <li><a style="color:black;" href="#">Privacy policy</a></li>
                                        <li><a style="color:black;" href="#">Refund policy</a></li>
                                        <li><a style="color:black;" href="#">Billing System</a></li>
                                        <li><a style="color:black;" href="#">Ticket System</a></li>
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
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><p class="text-center text-capitalize">A WN creation Copyright &#169 Tiiva Inc.</p></div>
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

                cart();

            }

              // changes the title box with the hello welcome to Tiiva logout thingi
            function cart(){
              if(window.XMLHttpRequest){
                    xmlhttp12 = new XMLHttpRequest();
                }else{
                    xmlhttp12 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp12.onreadystatechange = function(){
                if (xmlhttp12.readyState == 4 && xmlhttp12.status == 200){
                    document.getElementById('cartitems').innerHTML= xmlhttp12.responseText;

                    }
                    }
                    xmlhttp12.open('GET','shoppingcartcount.php',true);
                    xmlhttp12.send();

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
