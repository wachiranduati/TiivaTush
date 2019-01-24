<?php
ob_start();
session_start();
require 'search.inc.php';

$century = 860;//Mtush
?>
<!DOCTYPE html>
<html>
<!--<title>Tiiva | Household</title>-->
<title>Tiiva Household pieces | Shop for Mtumba Household Pieces on Tiiva </title>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrapdist/css/bootstrap.min.css">
        <link rel="stylesheet" href="final.css">
        <link rel="stylesheet" href="listfile.css">
        <link rel="stylesheet" href="productitems.css">
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
                 @keyframes tag {
            0% { transform: rotate(-10deg);}
            100% {transform: rotate(10deg);}
        }
        .mtushtag{
            animation-name: tag;
            animation-duration: 2s;
            animation-direction:alternate;
            animation-iteration-count: infinite;
            animation-timing-function: ease-in-out;
            animation-delay: 1s;
        }

    </style>

</head>
    <body onload="sportswear();boxed();">
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
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="login.php">Login</a></li>
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="sellerprof.php">User Account</a></li>
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="Merchantreg.html">Merchants</a></li>
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="register.php">Register</a></li>
                              <li role="presentation" class="divider"></li>
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="blog.php">Blogs</a></li>
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="logout.php">Logout</a></li>
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

            <div class="row visible-lg visible-md" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <a href="index.php"><span class="glyphicon glyphicon-home"></span> HOME </a>
                     <span class="glyphicon glyphicon glyphicon-chevron-right" style="color:gainsboro;"></span>
                      <a href="household.php">HOUSEHOLD</a><h2 class="text-center text-uppercase" style="margin-top:-10px; color:orange;">HOUSEHOLD</h2>
                  </div>
            </div>

            <div class="row visible-sm visible-xs" style="margin-top:10px;margin-bottom:0;padding-bottom:0;font-family:kok;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0;">
                        <small><a href="index.php"> <span class="glyphicon glyphicon-home"></span> HOME </a>
                         <span class="glyphicon glyphicon glyphicon-chevron-right" style="color:gainsboro;"></span>
                          <a href="household.php">HOUSEHOLD</a></small>
                          <h4 class="text-center text-uppercase" style="margin-top:5px; color:orange;">HOUSEHOLD</h4>
                  </div>
            </div>

            <div class="row visible-sm visible-xs">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:5px;border:1px solid black;background-color:black;border-bottom:2px solid white;height:50px;">
                            <div class="dropdown">
                        <a class="dropdown-toggle btn btn-block" data-toggle="dropdown">
<!--                                <span class="caret"></span>-->
                            <p class="text-center" style="border:2px solid white;width:20px;"></p>
                            <p class="text-center" style="border:2px solid white;width:20px;"></p>
                            <p class="text-center" style="border:2px solid white;width:20px;"></p>
                        </a>

                        <ul class="dropdown-menu list-group">
                            <a href="mainpage.php?search=interiors&sub=duvets&page=1" class="list-group-item"><img src="others/householdbedroomsheets.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Bedroom</a>
                            <a href="mainpage.php?search=interiors&sub=carpets&page=1" class="list-group-item"><img src="others/householdcarpetsdoormats.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Carpets</a>
                            <a href="mainpage.php?search=interiors&sub=towels&page=1" class="list-group-item"><img src="others/householdbathtowels.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Towels</a>
                            <a href="mainpage.php?search=interiors&sub=curtains&page=1" class="list-group-item"><img src="others/householdcurtainspinchpleatcurtains.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Curtains</a>
                            <a href="mainpage.php?search=interiors&sub=pillows&page=1" class="list-group-item"><img src="others/householdpillowsdownpillows.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Pillows</a>
                            <a href="mainpage.php?search=interiors&sub=antiques&page=1" class="list-group-item"><img src="others/householdantiquesmirrors.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Antiques</a>
                            <a href="mainpage.php?search=interiors&sub=wallart&page=1" class="list-group-item"><img src="others/householdwallart.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Wall art</a>
                            <a href="mainpage.php?search=interiors&sub=misc&page=1" class="list-group-item"><img src="others/householdmisccupcoasters.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc</a>
                            <a href="mainpagee.php?search=interiors&page=1" class="list-group-item"><img src="others\labelsversace.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;All Households</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="household.php" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Categories</h5></a>
                        </div>


                    </div>


            <div class="row" style="background-image:url(images/awesome.jpg);background-size:100%;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border:1px solid white;">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md">

                        <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-bottom:35px;">

                        <ul id="categories" style="line-height:2.5;padding-bottom:0;margin-bottom:2px;">
                            <li class="text-center" style="font-weight:bold;background-color:black;border:1px solid white;"><span style="color:orange;" class="text-uppercase text-center">Categories</span></li>
                            <li><a href="mainpage.php?search=interiors&sub=duvets&page=1" target="_blank"><img src="others/householdbedroomsheets.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Bedroom<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=carpets&page=1" target="_blank"><img src="others/householdcarpetsdoormats.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Carpets<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=towels&page=1" target="_blank"><img src="others/householdbathtowels.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Towels<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=curtains&page=1" target="_blank"><img src="others/householdcurtainspinchpleatcurtains.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Curtains<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=antiques&page=1" target="_blank"><img src="others/householdantiquesmirrors.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Antiques<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=wallart&page=1" target="_blank"><img src="others/householdwallart.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Wall art<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=misc&page=1" target="_blank"><img src="others/householdmisccupcoasters.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Misc<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpagee.php?search=interiors&page=1" target="_blank"><img src="others\labelsversace.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;All Households<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12" style="padding:0px;">


                        <!--            starts here-->
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div id="imagecarousel2" class="carousel slide" data-interval="3000" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    <ol class="carousel-indicators">
                            <li data-target="#imagecarousel2" data-slide-to="0" class="active"></li>
                            <li data-target="#imagecarousel2" data-slide-to="1"></li>
                            <li data-target="#imagecarousel2" data-slide-to="2"></li>
                            <li data-target="#imagecarousel2" data-slide-to="3"></li>
                          </ol>
                                                    <div class="item active">
                                                            <!-- <img src="images/asscreed.jpg" class="img-responsive"> -->
                                                            <img src="images\trials\slayone.jpg" class="img-responsive">
                                                            <div class="carousel-caption">
                                                                <!-- <h3>Asscreed</h3> -->

                                                                <!-- <p>Asscreed but not right here</p> -->
                                                            </div>
                                                    </div>

                                                    <div class="item">
                                                            <!-- <img src="images/tom.jpg" class="img-responsive"> -->
                                                            <img src="images\trials\slaytwo.jpg" class="img-responsive">
                                                            <div class="carousel-caption">
                                                                <!-- <h3>tom manenos</h3> -->
                                                                <!-- <p>to be seen or not seen here</p> -->
                                                            </div>
                                                    </div>

                                                    <div class="item">
                                                            <!-- <img src="images/cod.jpg" class="img-responsive"> -->
                                                            <img src="images\trials\slaythree.jpg" class="img-responsive">
                                                            <div class="carousel-caption">
                                                                <!-- <h3>cod manenos</h3> -->
                                                                <!-- <p>call of duty down in the dm</p> -->
                                                            </div>
                                                    </div>

                                                    <div class="item">
                                                            <!-- <img src="images/casualwear.jpg" class="img-responsive"> -->
                                                            <img src="images\trials\slayfour.jpg" class="img-responsive">
                                                            <div class="carousel-caption">
                                                                <!-- <h3>cod manenos</h3> -->
                                                                <!-- <p>call of duty down in the dm</p> -->
                                                            </div>
                                                    </div>

                                                    <div class="item">
                                                            <!-- <img src="images/originalitymen.jpg" class="img-responsive"> -->
                                                            <img src="images\trials\slayfive.png" class="img-responsive">
                                                            <div class="carousel-caption">
                                                                <!-- <h3>cod manenos</h3> -->
                                                                <!-- <p>call of duty down in the dm</p> -->
                                                            </div>
                                                    </div>




                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        <!--            ends here-->


                    </div>

                    <!--                    START OF RIGHTSIDE CONTAINER-->
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 visible-lg visible-md">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">
                                                            <div id="imagecarousel1" class="carousel slide" data-interval="3000" data-ride="carousel">
                                            <div class="carousel-inner">

                                                <ol class="carousel-indicators">
                        <li data-target="#imagecarousel1" data-slide-to="0" class="active"></li>
                        <li data-target="#imagecarousel1" data-slide-to="1"></li>
                        <li data-target="#imagecarousel1" data-slide-to="2"></li>
                        <li data-target="#imagecarousel1" data-slide-to="3"></li>
                      </ol>

                                                <div class="item active">
                                                        <img src="images/asscreed.jpg" class="img-responsive">
                                                        <div class="carousel-caption">
                                                            <!-- <h3>Asscreed</h3> -->

                                                            <!-- <p>Asscreed but not right here</p> -->
                                                        </div>
                                                </div>

                                                <div class="item">
                                                        <img src="images/tom.jpg" class="img-responsive">
                                                        <div class="carousel-caption">
                                                            <!-- <h3>tom manenos</h3> -->
                                                            <!-- <p>to be seen or not seen here</p> -->
                                                        </div>
                                                </div>

                                                <div class="item">
                                                        <img src="images/cod.jpg" class="img-responsive">
                                                        <div class="carousel-caption">
                                                            <!-- <h3>cod manenos</h3> -->
                                                            <!-- <p>call of duty down in the dm</p> -->
                                                        </div>
                                                </div>

                                                <div class="item">
                                                        <img src="images/casualwear.jpg" class="img-responsive">
                                                        <div class="carousel-caption">
                                                            <!-- <h3>cod manenos</h3> -->
                                                            <!-- <p>call of duty down in the dm</p> -->
                                                        </div>
                                                </div>

                                                <div class="item">
                                                        <img src="images/originalitymen.jpg" class="img-responsive">
                                                        <div class="carousel-caption">
                                                            <!-- <h3>cod manenos</h3> -->
                                                            <!-- <p>call of duty down in the dm</p> -->
                                                        </div>
                                                </div>




                                            </div>
                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">

                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="font-family:kok;font-size:120%;color:white;margin-top:1.3%;">
                                                            <div class="row">

                                                                <div id="theois" class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid white;">
                                                                    <div class="row">
                                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style=""><i class="mdi mdi-truck-fast mdi-36px" style="padding:0px;"></i></div>
                                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><h4 style="padding-top:0px;margin-top:0px;" class="text-center">Free Shipping</h4></div>
                                                                    </div>
                                                                    <!-- <i class="mdi mdi-truck-fast mdi-36px" style="padding:0px;"></i><h4 style="padding:0px;margin:0px;" class="text-center">Free Shipping</h4> -->

                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid white;">
                                                                    <div class="row">
                                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style=""><i class="mdi mdi-all-inclusive mdi-36px" style="padding:0px;"></i></div>
                                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><h4 style="padding:0px;margin:0px;" class="text-center">Great Variety</h4></div>
                                                                    </div>
                                                                    <!-- <i class="mdi mdi-all-inclusive mdi-36px" style="padding:0px;"></i><h4 style="padding:0px;margin:0px;" class="text-center">Great Variety</h4> -->

                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid white;">
                                                                    <div class="row">
                                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style=""><i class="mdi mdi-wordpress mdi-36px" style="padding:0px;"></i></div>
                                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><h4 style="padding:0px;margin:0px;" class="text-center">Tiiva blogs</h4></div>
                                                                    </div>
                                                                    <!-- <i class="mdi mdi-wordpress mdi-36px" style="padding:0px;"></i><h4 style="padding:0px;margin:0px;" class="text-center">Tiiva blogs</h4> -->
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid white;">
                                                                    <div class="row">
                                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style=""><i class="mdi mdi-rice mdi-36px" style="padding:0px;"></i></div>
                                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><h4 style="padding:0px;margin:0px;">Super Different</h4></div>
                                                                    </div>
                                                                    <!-- <i class="mdi mdi-rice mdi-36px" style="padding:0px;"></i><h4 style="padding:0px;margin:0px;">Out of the box</h4> -->
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid white;">
                                                                    <div class="row">
                                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style=""><i class="mdi mdi-lightbulb-on mdi-36px" style="padding:0px;"></i></div>
                                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><h4 style="padding:0px;margin:0px;" class="text-center">Sell on Tiiva</h4></div>
                                                                    </div>
                                                                    <!-- <i class="mdi mdi-rice mdi-36px" style="padding:0px;"></i><h4 style="padding:0px;margin:0px;">Out of the box</h4> -->
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid white;">
                                                                    <div class="row">
                                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style=""><i class="mdi mdi-untappd mdi-36px" style="padding:0px;"></i></div>
                                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><h4 style="padding:0px;margin:0px;" class="text-center">We're Fun ;)</h4></div>
                                                                    </div>
                                                                    <!-- <i class="mdi mdi-rice mdi-36px" style="padding:0px;"></i><h4 style="padding:0px;margin:0px;">Out of the box</h4> -->
                                                                </div>




                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                    <!--                    END OF THE RIGHTSIDE CONTAINER-->
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="color:orange;text-shadow:1px 2px 1px black;"><h4 class="text-uppercase text-center"><strong>Featured Categories</strong></h4></div>
            </div>

            <div class="row" style="border:1px solid gainsboro;">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6  featurediv"><a href="mainpage.php?search=interiors&sub=duvets&page=1"><img src="banners/categories/householdbedrooms.png" class="img-responsive featured"/></a></div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6  featurediv"><a href="mainpage.php?search=interiors&sub=carpets&page=1"><img src="banners/categories/household-carpets.png" class="img-responsive featured"/></a></div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6  featurediv"><a href="mainpage.php?search=interiors&sub=towels&page=1"><img src="banners/categories/householdtowels.png" class="img-responsive featured"/></a></div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6  featurediv"><a href="mainpage.php?search=interiors&sub=antiques&page=1"><img src="banners/categories/householdantiques.png" class="img-responsive featured"/></a></div>
            </div>

            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin-top:1%;">
                    <a href="index.php">
                        <img src="banners/different.png" class="img-responsive"/>
                    </a>
                </div>
            </div>
            <!--start here-->
            <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="mainpage.php?search=interiors&sub=duvets&page=1"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Bedroom </h4></a></div>
                    </div>

                    <div class="row visible-sm visible-xs">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:5px;border:1px solid black;background-color:black;border-bottom:2px solid white;height:50px;">
                            <div class="dropdown">
                        <a class="dropdown-toggle btn btn-block" data-toggle="dropdown">
<!--                                <span class="caret"></span>-->
                            <p class="text-center" style="border:2px solid white;width:20px;"></p>
                            <p class="text-center" style="border:2px solid white;width:20px;"></p>
                            <p class="text-center" style="border:2px solid white;width:20px;"></p>
                        </a>



                        <ul class="dropdown-menu list-group">
                            <a href="mainpage.php?search=interiors&sub=duvets&page=1" class="list-group-item"><img src="others/householdpillows.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Duvets</a>
                            <a href="mainpage.php?search=interiors&sub=duvets&page=1" class="list-group-item"><img src="others/householdpillows.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Sheets</a>
                            <a href="mainpage.php?search=interiors&sub=duvets&page=1" class="list-group-item"><img src="others/householdpillows.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Pillow Covers</a>
                            <a href="mainpage.php?search=interiors&sub=duvets&page=1" class="list-group-item"><img src="others/householdpillows.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;MattressCovers</a>
                            <a href="mainpage.php?search=interiors&sub=duvets&page=1" class="list-group-item"><img src="others/householdpillows.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Blankets</a>
                            <a href="mainpage.php?search=interiors&sub=duvets&page=1" class="list-group-item"><img src="others/householdpillows.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Robes</a>
                            <a href="mainpage.php?search=interiors&sub=duvets&page=1" class="list-group-item"><img src="others/householdpillows.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Panjamas</a>
                            <a href="mainpage.php?search=interiors&sub=duvets&page=1" class="list-group-item"><img src="others/householdpillows.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Beddings</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpage.php?search=interiors&sub=duvets&page=1" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Bedroom</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul id="categories">

                            <li><a href="mainpage.php?search=interiors&sub=duvets&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Duvets<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=duvets&page=1" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Sheets<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=duvets&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Pillow Covers<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=duvets&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Mattress Covers<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=duvets&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Blankets<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=duvets&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Robes<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=duvets&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Pillows<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=duvets&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Pajamas<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=duvets&page=1" target="_blank"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;misc Beddings<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">

<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="others/householdbedroomrobes.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>Asscreed</h3> -->

                                        <!-- <p>Asscreed but not right here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/householdbedroomsheets.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>tom manenos</h3> -->
                                        <!-- <p>to be seen or not seen here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/householdbedroompanjamas.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/householdbedroomduvets.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>




                        </div>
                    </div>
                </div>
            </div>
<!--            ends here-->

                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;border-bottom:1px solid gainsboro;">
                                    <div class="row" id="box">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;border-right:1px solid white;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;border-right:1px solid white;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;border-top:1px solid white;border-right:1px solid white;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;border-top:1px solid white;border-right:1px solid white;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;border-top:1px solid white;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin-top:1%;">
                    <a href="index.php">
                        <img src="banners/variety.png" class="img-responsive"/>
                    </a>
                </div>
            </div>

            <!--Ends here -->

             <!--start here-->
            <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="mainpage.php?search=interiors&sub=carpets&page=1"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Carpets</h4></a></div>
                    </div>

                    <div class="row visible-sm visible-xs">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:5px;border:1px solid black;background-color:black;border-bottom:2px solid white;height:50px;">
                            <div class="dropdown">
                        <a class="dropdown-toggle btn btn-block" data-toggle="dropdown">
<!--                                <span class="caret"></span>-->
                            <p class="text-center" style="border:2px solid white;width:20px;"></p>
                            <p class="text-center" style="border:2px solid white;width:20px;"></p>
                            <p class="text-center" style="border:2px solid white;width:20px;"></p>
                        </a>

                        <ul class="dropdown-menu list-group">
                            <a href="mainpage.php?search=interiors&sub=carpets&page=1" class="list-group-item"><img src="others/householdcarpetsdoormats.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Mats</a>
                            <a href="mainpage.php?search=interiors&sub=carpets&page=1" class="list-group-item"><img src="others/householdcarpetsdoormats.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Door Mats</a>
                            <a href="mainpage.php?search=interiors&sub=carpets&page=1" class="list-group-item"><img src="others/householdcarpetsdoormats.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Centre-P Mats</a>
                            <a href="mainpage.php?search=interiors&sub=carpets&page=1" class="list-group-item"><img src="others/householdcarpetsdoormats.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Large Mats</a>
                            <a href="mainpage.php?search=interiors&sub=carpets&page=1" class="list-group-item"><img src="others/householdcarpetsdoormats.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Handmade Ms</a>
                            <a href="mainpage.php?search=interiors&sub=carpets&page=1" class="list-group-item"><img src="others/householdcarpetsdoormats.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Fuzzy Mats</a>
                            <a href="mainpage.php?search=interiors&sub=carpets&page=1" class="list-group-item"><img src="others/householdcarpetsdoormats.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Loopy Mats</a>
                            <a href="mainpage.php?search=interiors&sub=carpets&page=1" class="list-group-item"><img src="others/householdcarpetsdoormats.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Pattern Mats</a>
                            <a href="mainpage.php?search=interiors&sub=carpets&page=1" class="list-group-item"><img src="others/householdcarpetsdoormats.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Carpets</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpage.php?search=interiors&sub=carpets&page=1" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Carpets</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">

                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul id="categories">

                            <li><a href="mainpage.php?search=interiors&sub=carpets&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Mats<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=carpets&page=1" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Door mats<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=carpets&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Centre piece mats<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=carpets&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Large mats<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=carpets&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Handmade mats<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                            <li><a href="mainpage.php?search=interiors&sub=carpets&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Fuzzy mats<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=carpets&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Loopy mats<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=carpets&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Pattern mats<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=carpets&page=1" target="_blank"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Misc carpets<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>


                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="others/householdcarpetscentrepiecemats.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>Asscreed</h3> -->

                                        <!-- <p>Asscreed but not right here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/householdcarpetsdoormats.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>tom manenos</h3> -->
                                        <!-- <p>to be seen or not seen here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/householdcarpetsfuzzyrugs.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/householdcarpetshandmademats.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>




                        </div>
                    </div>
                </div>
            </div>
<!--            ends here-->


                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;border-bottom:1px solid gainsboro;">
                                    <div class="row" id="boxsweaters">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;border-right:1px solid white;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;border-right:1px solid white;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;border-top:1px solid white;border-right:1px solid white;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;border-top:1px solid white;border-right:1px solid white;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;border-top:1px solid white;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin-top:1%;">
                    <a href="blog.php">
                        <img src="banners/blogs.png" class="img-responsive"/>
                    </a>
                </div>
            </div>

            <!--Ends here -->

             <!--start here-->
            <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="mainpage.php?search=interiors&sub=towels&page=1"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Towels</h4></a></div>
                    </div>

                    <div class="row visible-sm visible-xs">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:5px;border:1px solid black;background-color:black;border-bottom:2px solid white;height:50px;">
                            <div class="dropdown">
                        <a class="dropdown-toggle btn btn-block" data-toggle="dropdown">
<!--                                <span class="caret"></span>-->
                            <p class="text-center" style="border:2px solid white;width:20px;"></p>
                            <p class="text-center" style="border:2px solid white;width:20px;"></p>
                            <p class="text-center" style="border:2px solid white;width:20px;"></p>
                        </a>

                        <ul class="dropdown-menu list-group">
                            <a href="mainpage.php?search=interiors&sub=towels&page=1" class="list-group-item"><img src="others/householdtowelsbeachtowels.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Bath Towels</a>
                            <a href="mainpage.php?search=interiors&sub=towels&page=1" class="list-group-item"><img src="others/householdtowelsbeachtowels.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Beach Towels</a>
                            <a href="mainpage.php?search=interiors&sub=towels&page=1" class="list-group-item"><img src="others/householdtowelsbeachtowels.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Face Towels</a>
                            <a href="mainpage.php?search=interiors&sub=towels&page=1" class="list-group-item"><img src="others/householdtowelsbeachtowels.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Sweat Towels</a>
                            <a href="mainpage.php?search=interiors&sub=towels&page=1" class="list-group-item"><img src="others/householdtowelsbeachtowels.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Gym Towels</a>
                            <a href="mainpage.php?search=interiors&sub=towels&page=1" class="list-group-item"><img src="others/householdtowelsbeachtowels.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Bright-colored</a>
                            <a href="mainpage.php?search=interiors&sub=towels&page=1" class="list-group-item"><img src="others/householdtowelsbeachtowels.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Dull colored Ts</a>
                            <a href="mainpage.php?search=interiors&sub=towels&page=1" class="list-group-item"><img src="others/householdtowelsbeachtowels.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Kids Towels</a>
                            <a href="mainpage.php?search=interiors&sub=towels&page=1" class="list-group-item"><img src="others/householdtowelsbeachtowels.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Mist Towels</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpage.php?search=interiors&sub=towels&page=1" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Towels</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">

                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul id="categories">

                            <li><a href="mainpage.php?search=interiors&sub=towels&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Bath towels<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=towels&page=1" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Beach towels<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=towels&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Face towels<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=towels&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Sweat towels<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=towels&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Gym towels<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                            <li><a href="mainpage.php?search=interiors&sub=towels&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Bright color towels<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=towels&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Dull color towels<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=towels&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Kids towels<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=towels&page=1" target="_blank"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Misc towels<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>


                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="others/householdtowelsbeachtowels.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>Asscreed</h3> -->

                                        <!-- <p>Asscreed but not right here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/householdtowelsbathtowels.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>tom manenos</h3> -->
                                        <!-- <p>to be seen or not seen here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/householdtowelsgymtowels.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/householdtowelsfacetowels.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>




                        </div>
                    </div>
                </div>
            </div>
<!--            ends here-->


                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;border-bottom:1px solid gainsboro;">
                                    <div class="row" id="boxshirts">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;border-right:1px solid white;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;border-right:1px solid white;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;border-top:1px solid white;border-right:1px solid white;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;border-top:1px solid white;border-right:1px solid white;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;border-top:1px solid white;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin-top:1%;">
                    <a href="index.php">
                        <img src="banners/mtumbanner.png" class="img-responsive"/>
                    </a>
                </div>
            </div>

            <!--Ends here -->
            <div class="row visible-sm visible-xs">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="color:orange;text-shadow:1px 2px 1px black;"><h4 class="text-uppercase text-center"><strong>Other Categories</strong></h4></div>
                    </div>
                </div>
            </div>
            <div class="row visible-sm visible-xs" style="border:1px solid gainsboro;">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 featurediv"><a href="mainpagee.php?search=interiors&page=1"><img src="banners\categories\householdlabels.png" class="img-responsive featured"/></a></div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 featurediv"><a href="mainpage.php?search=interiors&sub=curtains&page=1"><img src="banners\categories\householdcurtains.png" class="img-responsive featured"/></a></div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 featurediv"><a href="mainpage.php?search=interiors&sub=wallart&page=1"><img src="banners\categories\householdwallart.png" class="img-responsive featured"/></a></div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 featurediv"><a href="mainpage.php?search=interiors&sub=misc&page=1"><img src="banners\categories\householdmisc.png" class="img-responsive featured"/></a></div>
            </div>

             <!--start here-->
            <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="mainpage.php?search=interiors&sub=curtains&page=1"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Curtains</h4></a></div>
                    </div>

                    <div class="row visible-sm visible-xs">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:5px;border:1px solid black;background-color:black;border-bottom:2px solid white;height:50px;">
                            <div class="dropdown">
                        <a class="dropdown-toggle btn btn-block" data-toggle="dropdown">
<!--                                <span class="caret"></span>-->
                            <p class="text-center" style="border:2px solid white;width:20px;"></p>
                            <p class="text-center" style="border:2px solid white;width:20px;"></p>
                            <p class="text-center" style="border:2px solid white;width:20px;"></p>
                        </a>

                        <ul class="dropdown-menu list-group">
                            <a href="mainpage.php?search=interiors&sub=curtains&page=1" class="list-group-item"><img src="icons/curtainsicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Ripple-fold Cs</a>
                            <a href="mainpage.php?search=interiors&sub=curtains&page=1" class="list-group-item"><img src="icons/curtainsicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Tailored-Pleat</a>
                            <a href="mainpage.php?search=interiors&sub=curtains&page=1" class="list-group-item"><img src="icons/curtainsicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Pinch-Pleat Cs</a>
                            <a href="mainpage.php?search=interiors&sub=curtains&page=1" class="list-group-item"><img src="icons/curtainsicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Inverted-Pleat</a>
                            <a href="mainpage.php?search=interiors&sub=curtains&page=1" class="list-group-item"><img src="icons/curtainsicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Grommet Cs</a>
                            <a href="mainpage.php?search=interiors&sub=curtains&page=1" class="list-group-item"><img src="icons/curtainsicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Cubicle Cs</a>
                            <a href="mainpage.php?search=interiors&sub=curtains&page=1" class="list-group-item"><img src="icons/curtainsicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Rod-Pocket</a>
                            <a href="mainpage.php?search=interiors&sub=curtains&page=1" class="list-group-item"><img src="icons/curtainsicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Goblet Cs</a>
                            <a href="mainpage.php?search=interiors&sub=curtains&page=1" class="list-group-item"><img src="icons/curtainsicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Curtains</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpage.php?search=interiors&sub=curtains&page=1" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Curtains</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">

                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul id="categories">

                            <li><a href="mainpage.php?search=interiors&sub=curtains&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Ripple fold curtains<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=curtains&page=1" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Tailored pleat curtns<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=curtains&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Pinch pleat curtains<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=curtains&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Inverted pleat curtns<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=curtains&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Grommet curtains<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=curtains&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Goblet curtains<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=curtains&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Cubicle curtians<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=curtains&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Rod pocket curtains<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=curtains&page=1" target="_blank"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Misc curtains<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="others/householdcurtainsgobletcurtains.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>Asscreed</h3> -->

                                        <!-- <p>Asscreed but not right here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/householdcurtainspinchpleatcurtains.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>tom manenos</h3> -->
                                        <!-- <p>to be seen or not seen here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/householdcurtainsripplefoldcurtains.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/householdcurtainscubiclecurtains.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>




                        </div>
                    </div>
                </div>
            </div>
<!--            ends here-->


                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;border-bottom:1px solid gainsboro;">
                                    <div class="row" id="boxtshirtsk">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;border-right:1px solid white;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;border-right:1px solid white;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;border-top:1px solid white;border-right:1px solid white;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;border-top:1px solid white;border-right:1px solid white;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;border-top:1px solid white;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin-top:1%;">
                    <a href="shop.php">
                        <img src="banners/outdoors.png" class="img-responsive"/>
                    </a>
                </div>
            </div>
            <!--Ends here -->

             <!--start here-->
           <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="mainpage.php?search=interiors&sub=antiques&page=1"><h4 class="text-uppercase" style="color:white;font-weight:bold;">antiques</h4></a></div>
                    </div>

                    <div class="row visible-sm visible-xs">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:5px;border:1px solid black;background-color:black;border-bottom:2px solid white;height:50px;">
                            <div class="dropdown">
                        <a class="dropdown-toggle btn btn-block" data-toggle="dropdown">
<!--                                <span class="caret"></span>-->
                            <p class="text-center" style="border:2px solid white;width:20px;"></p>
                            <p class="text-center" style="border:2px solid white;width:20px;"></p>
                            <p class="text-center" style="border:2px solid white;width:20px;"></p>
                        </a>

                        <ul class="dropdown-menu list-group">
                            <a href="mainpage.php?search=interiors&sub=antiques&page=1" class="list-group-item"><img src="others/householdantiquesvases.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Mirrors</a>
                            <a href="mainpage.php?search=interiors&sub=antiques&page=1" class="list-group-item"><img src="others/householdantiquesvases.gif" class="img-responsive" style="height:25px;display:inline;"/>WoovenBaskets</a>
                            <a href="mainpage.php?search=interiors&sub=antiques&page=1" class="list-group-item"><img src="others/householdantiquesvases.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Vases</a>
                            <a href="mainpage.php?search=interiors&sub=antiques&page=1" class="list-group-item"><img src="others/householdantiquesvases.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Clocks</a>
                            <a href="mainpage.php?search=interiors&sub=antiques&page=1" class="list-group-item"><img src="others/householdantiquesvases.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Paintings</a>
                            <a href="mainpage.php?search=interiors&sub=antiques&page=1" class="list-group-item"><img src="others/householdantiquesvases.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Books</a>
                            <a href="mainpage.php?search=interiors&sub=antiques&page=1" class="list-group-item"><img src="others/householdantiquesvases.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Night Stands</a>
                            <a href="mainpage.php?search=interiors&sub=antiques&page=1" class="list-group-item"><img src="others/householdantiquesvases.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Chinas</a>
                            <a href="mainpage.php?search=interiors&sub=antiques&page=1" class="list-group-item"><img src="others/householdantiquesvases.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc misc</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpage.php?search=interiors&sub=antiques&page=1" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Antiques</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">

                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul id="categories">

                            <li><a href="mainpage.php?search=interiors&sub=antiques&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Mirrors<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=antiques&page=1" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Wooven baskets<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=antiques&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Vases<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=antiques&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Clocks<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=antiques&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Paintings<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                            <li><a href="mainpage.php?search=interiors&sub=antiques&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Books<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=antiques&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Night stands<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=antiques&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Chinas<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=antiques&page=1" target="_blank"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Misc misc<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="others/householdantiquesclocks.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>Asscreed</h3> -->

                                        <!-- <p>Asscreed but not right here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/householdantiquesmirrors.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>tom manenos</h3> -->
                                        <!-- <p>to be seen or not seen here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/householdantiquesvases.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
<!--            ends here-->


                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;border-bottom:1px solid gainsboro;">
                                    <div class="row" id="boxjackets">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;border-right:1px solid white;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;border-right:1px solid white;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;border-top:1px solid white;border-right:1px solid white;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;border-top:1px solid white;border-right:1px solid white;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;border-top:1px solid white;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin-top:1%;">
                    <a href="index.php">
                        <img src="banners/different.png" class="img-responsive"/>
                    </a>
                </div>
            </div>

            <!--Ends here -->

             <!--start here-->
           <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="mainpage.php?search=interiors&sub=wallart&page=1"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Wall art</h4></a></div>
                    </div>

                    <div class="row visible-sm visible-xs">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:5px;border:1px solid black;background-color:black;border-bottom:2px solid white;height:50px;">
                            <div class="dropdown">
                        <a class="dropdown-toggle btn btn-block" data-toggle="dropdown">
<!--                                <span class="caret"></span>-->
                            <p class="text-center" style="border:2px solid white;width:20px;"></p>
                            <p class="text-center" style="border:2px solid white;width:20px;"></p>
                            <p class="text-center" style="border:2px solid white;width:20px;"></p>
                        </a>

                        <ul class="dropdown-menu list-group">
                            <a href="mainpage.php?search=interiors&sub=wallart&page=1" class="list-group-item"><img src="others/householdwallartpictures.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Paintings</a>
                            <a href="mainpage.php?search=interiors&sub=wallart&page=1" class="list-group-item"><img src="others/householdwallartpictures.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Collages</a>
                            <a href="mainpage.php?search=interiors&sub=wallart&page=1" class="list-group-item"><img src="others/householdwallartpictures.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Decorative Pcs</a>
                            <a href="mainpage.php?search=interiors&sub=wallart&page=1" class="list-group-item"><img src="others/householdwallartpictures.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Lighting</a>
                            <a href="mainpage.php?search=interiors&sub=wallart&page=1" class="list-group-item"><img src="others/householdwallartpictures.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Light Artifacts</a>
                            <a href="mainpage.php?search=interiors&sub=wallart&page=1" class="list-group-item"><img src="others/householdwallartpictures.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;House Pieces</a>
                            <a href="mainpage.php?search=interiors&sub=wallart&page=1" class="list-group-item"><img src="others/householdwallartpictures.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Wall Pieces</a>
                            <a href="mainpage.php?search=interiors&sub=wallart&page=1" class="list-group-item"><img src="others/householdwallartpictures.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Antiques</a>
                            <a href="mainpage.php?search=interiors&sub=wallart&page=1" class="list-group-item"><img src="others/householdwallartpictures.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Art</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpage.php?search=interiors&sub=wallart&page=1" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Wall art</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">

                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul id="categories">

                            <li><a href="mainpage.php?search=interiors&sub=wallart&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Paintings<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=wallart&page=1" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Collages<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=wallart&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Decorative pieces<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=wallart&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Lighting<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=wallart&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;House pieces<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                            <li><a href="mainpage.php?search=interiors&sub=wallart&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Light artifacts<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=wallart&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Wall pieces<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=wallart&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Antiques<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=wallart&page=1" target="_blank"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Misc art<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="others/householdwallartwallpieces.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>Asscreed</h3> -->

                                        <!-- <p>Asscreed but not right here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/householdwallartpaintings.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>tom manenos</h3> -->
                                        <!-- <p>to be seen or not seen here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/householdwallartdecorpieces.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/householdwallartpictures.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>




                        </div>
                    </div>
                </div>
            </div>
<!--            ends here-->


                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;border-bottom:1px solid gainsboro;">
                                    <div class="row" id="boxbags">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;border-right:1px solid white;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;border-right:1px solid white;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;border-top:1px solid white;border-right:1px solid white;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;border-top:1px solid white;border-right:1px solid white;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;border-top:1px solid white;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin-top:1%;">
                    <a href="index.php">
                        <img src="banners/varietytwo.png" class="img-responsive"/>
                    </a>
                </div>
            </div>

            <!--Ends here -->

             <!--start here-->
            <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-md visible-lg">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="mainpage.php?search=interiors&sub=misc&page=1"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Misc</h4></a></div>
                    </div>

                    <div class="row visible-sm visible-xs">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:5px;border:1px solid black;background-color:black;border-bottom:2px solid white;height:50px;">
                            <div class="dropdown">
                        <a class="dropdown-toggle btn btn-block" data-toggle="dropdown">
<!--                                <span class="caret"></span>-->
                            <p class="text-center" style="border:2px solid white;width:20px;"></p>
                            <p class="text-center" style="border:2px solid white;width:20px;"></p>
                            <p class="text-center" style="border:2px solid white;width:20px;"></p>
                        </a>

                        <ul class="dropdown-menu list-group">
                            <a href="mainpage.php?search=interiors&sub=misc&page=1" class="list-group-item"><img src="others/householdmischangers.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Cup Costers</a>
                            <a href="mainpage.php?search=interiors&sub=misc&page=1" class="list-group-item"><img src="others/householdmischangers.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Toys</a>
                            <a href="mainpage.php?search=interiors&sub=misc&page=1" class="list-group-item"><img src="others/householdmischangers.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Cooking Pans</a>
                            <a href="mainpage.php?search=interiors&sub=misc&page=1" class="list-group-item"><img src="others/householdmischangers.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Hangers</a>
                            <a href="mainpage.php?search=interiors&sub=misc&page=1" class="list-group-item"><img src="others/householdmischangers.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Lamps</a>
                            <a href="mainpage.php?search=interiors&sub=misc&page=1" class="list-group-item"><img src="others/householdmischangers.gif" class="img-responsive" style="height:25px;display:inline;"/>LaundryBaskets</a>
                            <a href="mainpage.php?search=interiors&sub=misc&page=1" class="list-group-item"><img src="others/householdmischangers.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Silver Cultery</a>
                            <a href="mainpage.php?search=interiors&sub=misc&page=1" class="list-group-item"><img src="others/householdmischangers.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Push Pins</a>
                            <a href="mainpage.php?search=interiors&sub=misc&page=1" class="list-group-item"><img src="others/householdmischangers.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc misc</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpage.php?search=interiors&sub=misc&page=1" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Misc</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">

                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul id="categories">

                            <li><a href="mainpage.php?search=interiors&sub=misc&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Cup costers<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=misc&page=1" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Toys<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=misc&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Cooking pans<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=misc&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Hangers<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=misc&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Lamp<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                            <li><a href="mainpage.php?search=interiors&sub=misc&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Laundry baskets<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=misc&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Silver culterly<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=misc&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Push pins<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=misc&page=1" target="_blank"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Misc misc<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="others/householdmisccookingpans.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>Asscreed</h3> -->

                                        <!-- <p>Asscreed but not right here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/householdmisccupcoasters.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>tom manenos</h3> -->
                                        <!-- <p>to be seen or not seen here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/householdmischangers.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/householdmiscsilverware.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>




                        </div>
                    </div>
                </div>
            </div>
<!--            ends here-->


                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;border-bottom:1px solid gainsboro;">
                                    <div class="row" id="boxmiscs">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;border-right:1px solid white;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;border-right:1px solid white;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;border-top:1px solid white;border-right:1px solid white;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;border-top:1px solid white;border-right:1px solid white;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;border-top:1px solid white;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin-top:1%;">
                    <a href="index.php">
                        <img src="banners/thankyou.png" class="img-responsive"/>
                    </a>
                </div>
            </div>
            <!--Ends here -->



            <!--Ends here -->

             <!--start here-->
            <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="mainpagee.php?search=interiors&page=1"><h4 class="text-uppercase" style="color:white;font-weight:bold;">All Households</h4></a></div>
                    </div>

                    <div class="row visible-sm visible-xs">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:5px;border:1px solid black;background-color:black;border-bottom:2px solid white;height:50px;">
                            <div class="dropdown">
                        <a class="dropdown-toggle btn btn-block" data-toggle="dropdown">
<!--                                <span class="caret"></span>-->
                            <p class="text-center" style="border:2px solid white;width:20px;"></p>
                            <p class="text-center" style="border:2px solid white;width:20px;"></p>
                            <p class="text-center" style="border:2px solid white;width:20px;"></p>
                        </a>

                        <ul class="dropdown-menu list-group">
                            <a href="mainpagee.php?search=interiors&page=1" class="list-group-item"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;D&G</a>
                            <a href="mainpagee.php?search=interiors&page=1" class="list-group-item"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Versace</a>
                            <a href="mainpagee.php?search=interiors&page=1" class="list-group-item"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Pradda</a>
                            <a href="mainpagee.php?search=interiors&page=1" class="list-group-item"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Old Navy</a>
                            <a href="mainpagee.php?search=interiors&page=1" class="list-group-item"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Nike</a>
                            <a href="mainpagee.php?search=interiors&page=1" class="list-group-item"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Armani</a>
                            <a href="mainpagee.php?search=interiors&page=1" class="list-group-item"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Bulgari</a>
                            <a href="mainpagee.php?search=interiors&page=1" class="list-group-item"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Gucci</a>
                            <a href="mainpagee.php?search=interiors&page=1" class="list-group-item"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Labels</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpagee.php?search=interiors&page=1" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">All Households</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">

                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul id="categories">

                            <li><a href="mainpagee.php?search=interiors&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Dolce &amp; Gabban<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpagee.php?search=interiors&page=1" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Versace<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpagee.php?search=interiors&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Pradda<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpagee.php?search=interiors&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Old Navy<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpagee.php?search=interiors&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Nike<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                            <li><a href="mainpagee.php?search=interiors&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Armani<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpagee.php?search=interiors&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Bulgari<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpagee.php?search=interiors&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Gucci<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpagee.php?search=interiors&page=1" target="_blank"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Misc labels<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="others/householdlabelsprada.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>Asscreed</h3> -->

                                        <!-- <p>Asscreed but not right here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/householdlabelsbulgari.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>tom manenos</h3> -->
                                        <!-- <p>to be seen or not seen here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/labelschanel.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/labelsversace.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>




                        </div>
                    </div>
                </div>
            </div>
<!--            ends here-->


                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;border-bottom:1px solid gainsboro;">
                                    <div class="row" id="boxlabels">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;border-right:1px solid white;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;border-right:1px solid white;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;border-top:1px solid white;border-right:1px solid white;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;border-top:1px solid white;border-right:1px solid white;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height:200px; border:1px solid black;border-top:1px solid white;"><img src="images/spinner/spinner_large.gif" class="img-responsive loaderImage" style="position:absolute;top:20%;"/></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin-top:1%;">
                    <a href="Mens.php">
                        <img src="banners/different.png" class="img-responsive"/>
                    </a>
                </div>
            </div>

            <!--Ends here -->
            <div class="row" style="margin-top:20px;background-color:rgba(0,0,0,0.5);">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 visible-md visible-lg"><h4>Service</h4>
                                    <ul class="list-unstyled">
                                        <li><a style="color:black;" href="Howto.php">Online help</a></li>
                                        <li><a style="color:black;" href="contactus.php">Contact us</a></li>
                                        <li><a style="color:black;" href="Howto.php">Order status</a></li>
                                        <li><a style="color:black;" href="Howto.php">Change location</a></li>
                                        <li><a style="color:black;" href="Howto.php">FAQS</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="height:100px;"><h4>Quick Shop</h4>
                                    <ul class="list-unstyled">
                                        <li><a style="color:black;" href="mainpage.php">Tshirts</a></li>
                                        <li><a style="color:black;" href="Mens.php">Mens</a></li>
                                        <li><a style="color:black;" href="women.php">Womens</a></li>
                                        <li><a style="color:black;" href="mainpage.php">Gift Cards</a></li>
                                        <li><a style="color:black;" href="shoes.php">Shoes</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6"><h4>Policies</h4>
                                    <ul class="list-unstyled">
                                        <li><a style="color:black;" href="Termsofuse.php">Terms of use</a></li>
                                        <li><a style="color:black;" href="Termsofuse.php">Privacy policy</a></li>
                                        <li><a style="color:black;" href="Termsofuse.php">Refund policy</a></li>
                                        <li><a style="color:black;" href="Termsofuse.php">Billing System</a></li>
                                        <li><a style="color:black;" href="Termsofuse.php">Ticke System</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 visible-lg visible-md"><h4>About shopper</h4>
                                    <ul class="list-unstyled">
                                        <li><a style="color:black;" href="Howto.php">Company information</a></li>
                                        <li><a style="color:black;" href="Howto.php">Careers</a></li>
                                        <li><a style="color:black;" href="Howto.php">Store location</a></li>
                                        <li><a style="color:black;" href="Howto.php">Affiliate Program</a></li>
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

            <!--container ends here-->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><p class="text-center text-capitalize">A WN creation Copyright &#169 Airmark Inc.</p></div>
            </div>
            <div class="row">
                <div id="myBtn" style="border:1px solid black;background-color:rgba(0, 0, 0, 0.47);border:1px solid black;padding:5px;border-radius:50%;">

                        <span class="glyphicon glyphicon-chevron-up text-center" onclick="topFunction();" title="Go to top" style="font-size:300%;"></span>

                </div>

            </div>


        </div>


        <script>

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
}

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
          //household duvets down here

            function sportswear(){
                $('.loaderImage').fadeIn(3000);
              if(window.XMLHttpRequest){
                    xmlhttp = new XMLHttpRequest();
                }else{
                    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp.onreadystatechange = function(){
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
                    document.getElementById('box').innerHTML= xmlhttp.responseText;

                    }
                    }
                    //xmlhttp.open('GET','householdduvetsloop.php',true);
                    xmlhttp.open('GET','householdduvetsloop.php',true);
                    xmlhttp.send();

            $('.loaderImage').fadeOut(3000);
                 mensloop();
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


            }

            //household rugs loop here down
            function mensloop(){
                $('.loaderImage').fadeIn(3000);
                if(window.XMLHttpRequest){
                    xmlhttp4 = new XMLHttpRequest();
                }else{
                    xmlhttp4 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp4.onreadystatechange = function(){
                if (xmlhttp4.readyState == 4 && xmlhttp4.status == 200){
                    document.getElementById('boxsweaters').innerHTML= xmlhttp4.responseText;

                    }
                    }
                    xmlhttp4.open('GET','householdrugsloop.php',true);
                    xmlhttp4.send();
               $('.loaderImage').fadeOut(3000);
                kidsloop();

            }
            // household towels loop down here
            function kidsloop(){
                $('.loaderImage').fadeIn(3000);
                if(window.XMLHttpRequest){
                    xmlhttp5 = new XMLHttpRequest();
                }else{
                    xmlhttp5 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp5.onreadystatechange = function(){
                if (xmlhttp5.readyState == 4 && xmlhttp5.status == 200){
                    document.getElementById('boxshirts').innerHTML= xmlhttp5.responseText;

                    }
                    }
                    xmlhttp5.open('GET','householdtowelsloop.php',true);
                    xmlhttp5.send();
               $('.loaderImage').fadeOut(3000);
                Householdsloop();

            }
            // household curtains loops down here
            function Householdsloop(){
                $('.loaderImage').fadeIn(3000);
                if(window.XMLHttpRequest){
                    xmlhttp6 = new XMLHttpRequest();
                }else{
                    xmlhttp6 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp6.onreadystatechange = function(){
                if (xmlhttp6.readyState == 4 && xmlhttp6.status == 200){
                    document.getElementById('boxtshirtsk').innerHTML= xmlhttp6.responseText;

                    }
                    }
                    xmlhttp6.open('GET','householdcurtainsloop.php',true);
                    xmlhttp6.send();
              $('.loaderImage').fadeOut(3000);
                shoesloop();

            }

            //antiques going in here
            function shoesloop(){
                $('.loaderImage').fadeIn(3000);
                if(window.XMLHttpRequest){
                    xmlhttp8 = new XMLHttpRequest();
                }else{
                    xmlhttp8 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp8.onreadystatechange = function(){
                if (xmlhttp8.readyState == 4 && xmlhttp8.status == 200){
                    document.getElementById('boxjackets').innerHTML= xmlhttp8.responseText;

                    }
                    }
                    xmlhttp8.open('GET','householdantiquesloop.php',true);
                    xmlhttp8.send();
              $('.loaderImage').fadeOut(3000);
                labelsloop();

            }
            //household wall art to go in here
             function labelsloop(){
                 $('.loaderImage').fadeIn(3000);
                if(window.XMLHttpRequest){
                    xmlhttp9 = new XMLHttpRequest();
                }else{
                    xmlhttp9 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp9.onreadystatechange = function(){
                if (xmlhttp9.readyState == 4 && xmlhttp9.status == 200){
                    document.getElementById('boxbags').innerHTML= xmlhttp9.responseText;

                    }
                    }
                    xmlhttp9.open('GET','householdwallartloop.php',true);
                    xmlhttp9.send();
                 $('.loaderImage').fadeOut(3000);
                 miscsloop();

            }
            //household misc to go in here
             function miscsloop(){
                 $('.loaderImage').fadeIn(3000);
                if(window.XMLHttpRequest){
                    xmlhttp10 = new XMLHttpRequest();
                }else{
                    xmlhttp10 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp10.onreadystatechange = function(){
                if (xmlhttp10.readyState == 4 && xmlhttp10.status == 200){
                    document.getElementById('boxmiscs').innerHTML= xmlhttp10.responseText;

                    }
                    }
                    xmlhttp10.open('GET','householdmiscloop.php',true);
                    xmlhttp10.send();
            $('.loaderImage').fadeOut(3000);
                 interiorsloop();

            }
            //household labels to go in here
                   function interiorsloop(){
                       $('.loaderImage').fadeIn(3000);
                if(window.XMLHttpRequest){
                    xmlhttp11 = new XMLHttpRequest();
                }else{
                    xmlhttp11 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp11.onreadystatechange = function(){
                if (xmlhttp11.readyState == 4 && xmlhttp11.status == 200){
                    document.getElementById('boxlabels').innerHTML= xmlhttp11.responseText;

                    }
                    }
                    xmlhttp11.open('GET','householdlabelsloop.php',true);
                    xmlhttp11.send();
               $('.loaderImage').fadeOut(3000);
                       cart();

            }
            // changes the title box with the hello welcome to airmark logout thingi
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



</script>

    </body>
</html>
