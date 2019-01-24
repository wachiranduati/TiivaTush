<?php
ob_start();
session_start();
require 'search.inc.php';

$century = 321;//Shop
?>
<!DOCTYPE html>
<html>
<title>Tiiva | Entertainment &amp; Education</title>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrapdist/css/bootstrap.min.css">
        <link rel="stylesheet" href="final.css">
        <link rel="stylesheet" href="moded.css">
        <link rel="stylesheet" href="listfile.css">
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
    <body onload="boxed();cart();">
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
                    <div class="row visible-lg visible-md" style="margin-top:10px;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home </a> / <a href="Electronics.php">Electronics</a><h2 class="text-center text-uppercase" style="margin-top:10px; color:orange;">Entertainment &amp; Education</h2></div>
                    </div>

                    <div class="row visible-sm visible-xs" style="margin-top:10px;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home </a> / <a href="Electronics.php">Electronics</a><h4 class="text-center text-uppercase" style="margin-top:-1px; color:orange;">Entertainment &amp; Education</h4></div>
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
                            <a href="mainpage.php" target="_blank" class="list-group-item"><img src="others/bagsbackpack.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Entertainment</a>
                            <a href="mainpage.php" target="_blank" class="list-group-item"><img src="others/bagsdenimbarrelbags.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Games</a>
                            <a href="mainpage.php" target="_blank" class="list-group-item"><img src="others/bagsdenimdesingerbags.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Stationery</a>
                            <a href="mainpage.php" target="_blank" class="list-group-item"><img src="others/bagsclutchwristletbags.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Books</a>
                            <a href="mainpage.php" target="_blank" class="list-group-item"><img src="others/bagsslouchshopperbags.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Comics</a>
                            <a href="mainpage.php" target="_blank" class="list-group-item"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Educational</a>
                            <a href="mainpage.php" target="_blank" class="list-group-item"><img src="others/bagstravelathleticbags.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;skincare</a>
                            <a href="mainpage.php" target="_blank" class="list-group-item"><img src="others/bagsslingshoulderbags.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;sunglasses</a>
                            <a href="mainpage.php" target="_blank" class="list-group-item"><img src="others/bagsmiscpencilcase.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpage.php" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Categories</h5></a>
                        </div>


                    </div>


            <div class="row" style="background-image:url(images/awesome.jpg);background-size:100%;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border:1px solid gray;">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-md visible-lg">
                            <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul id="categories" style="line-height:2.5;padding-bottom:0;margin-bottom:2px;">
                            <li class="text-center" style="font-weight:bold;background-color:black;border:1px solid white;"><span style="color:orange;" class="text-uppercase text-center">Categories</span></li>
                            <li><a href="mainpage.php" target="_blank"><img src="others/bagsbackpack.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Entertainment<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="others/bagsdenimbarrelbags.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Games<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="others/bagsdenimdesingerbags.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Stationery<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="others/bagsclutchwristletbags.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Books<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="others/bagsslouchshopperbags.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Comics<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="others/bagstravelathleticbags.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Educational<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="others/bagsslingshoulderbags.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;skincare<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="others/bagsmiscpencilcase.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;sunglasses<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="others/bagsmiscpencilcase.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Music Gear<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12" style="padding:0;">


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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><p class="text-uppercase text-center">Featured Items</p></div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border:1px solid gainsboro;">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs 3" style="height:25px;"><a href="mainpage.php" class="btn btn-block"><p class="text-uppercase text-center">Entertainment</p></a></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs 3" style="height:25px;"><a href="mainpage.php" class="btn btn-block"><p class="text-uppercase text-center">Games</p></a></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs 3" style="height:25px;"><a href="mainpage.php" class="btn btn-block"><p class="text-uppercase text-center">Educational</p></a></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs 3" style="height:25px;"><a href="mainpage.php" class="btn btn-block"><p class="text-uppercase text-center">Music instruments &amp; Gear</p></a></div>
                    </div>
                    <div class="row visible-lg visible-md" style="padding:7px;">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><a href="mainpage.php"><img class="img-responsive img-thumbnail" src="images/cod.jpg"></a></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><a href="mainpage.php"><img class="img-responsive img-thumbnail" src="images/cod.jpg"></a></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><a href="mainpage.php"><img class="img-responsive img-thumbnail" src="images/cod.jpg"></a></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><a href="mainpage.php"><img class="img-responsive img-thumbnail" src="images/cod.jpg"></a></div>
                    </div>

                    <div class="row visible-sm visible-xs" style="padding:7px;">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="border-right:1px solid gainsboro;"><a href="mainpage.php">Entertainment</a><a href="mainpage.php"><img class="img-responsive" src="images/cod.jpg"></a></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="border-right:1px solid gainsboro;"><a href="mainpage.php">Games</a><a href="mainpage.php"><img class="img-responsive" src="images/cod.jpg"></a></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="border-right:1px solid gainsboro;"><a href="mainpage.php">Educational</a><a href="mainpage.php"><img class="img-responsive" src="images/cod.jpg"></a></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="border-right:1px solid gainsboro;"><a href="mainpage.php">Music instruments &amp; Gear</a><a href="mainpage.php"><img class="img-responsive" src="images/cod.jpg"></a></div>
                    </div>



                </div>

            </div>
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">
                    <a href="Mens.php">
                        <img src="banners\tiivashop.png" class="img-responsive"/>
                    </a>
                </div>
            </div>
            <!--start here-->
            <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-md visible-lg">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:#00baff;font-family:kok;"><a class="btn btn-block" href="mainpage.php"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Entertainment</h4></a></div>
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
                            <a href="mainpage.php" class="list-group-item"><img src="icons/backpackicons.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Blackberry</a>
                            <a href="mainpage.php" class="list-group-item"><img src="icons/backpackicons.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Injoo</a>
                            <a href="mainpage.php" class="list-group-item"><img src="icons/backpackicons.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Infinix</a>
                            <a href="mainpage.php" class="list-group-item"><img src="icons/backpackicons.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Motorolla</a>
                            <a href="mainpage.php" class="list-group-item"><img src="icons/backpackicons.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Nokia</a>
                            <a href="mainpage.php" class="list-group-item"><img src="icons/backpackicons.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Samsung</a>
                            <a href="mainpage.php" class="list-group-item"><img src="icons/backpackicons.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Sony</a>
                            <a href="mainpage.php" class="list-group-item"><img src="icons/backpackicons.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Htc</a>
                            <a href="mainpage.php" class="list-group-item"><img src="icons/backpackicons.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Other labels</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpage.php" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Entertainment</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul id="categories">

                            <li><a href="mainpage.php" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;blackberry<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;injoo<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;infinix<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;motorolla<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;nokia<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/backpackicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;samsung<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;sony<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;htc<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;other labels<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="">

<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="others/bagsbackpackeverlanesnaps.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>Asscreed</h3> -->

                                        <!-- <p>Asscreed but not right here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/bagsbackpackheritagebackpacks.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>tom manenos</h3> -->
                                        <!-- <p>to be seen or not seen here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/bagsbackpackdaypacks.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/bagsbackpackscoutseries.gif" class="img-responsive" style="height:398px;">
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
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="">
                                    <div class="row" id="boxentertainment">
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">
                    <a href="Mens.php">
                        <img src="banners\varietytwo.png" class="img-responsive"/>
                    </a>
                </div>
            </div>

            <!--Ends here -->

             <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:#00baff;font-family:kok;"><a class="btn btn-block" href="mainpage.php"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Games</h4></a></div>
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
                            <a href="mainpage.php" class="list-group-item"><img src="others/sportswearbagsduffelbags.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Hisense</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/sportswearbagsduffelbags.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;LG</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/sportswearbagsduffelbags.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Phillips</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/sportswearbagsduffelbags.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Samsung</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/sportswearbagsduffelbags.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Sony</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/sportswearbagsduffelbags.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Tcl</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/sportswearbagsduffelbags.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Toshiba</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/sportswearbagsduffelbags.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Vizio</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/sportswearbagsduffelbags.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Other labels</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpage.php" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Games</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul id="categories">

                            <li><a href="mainpage.php" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;hisense<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;lg<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;phillip<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;samsung<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;sony<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/backpackicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;tcl<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;toshiba<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;vizio<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;other labels<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="">

<!--            starts here-->
            <div class="row visible-md visible-lg">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="others/bagsduffelbarrelbags.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>Asscreed</h3> -->

                                        <!-- <p>Asscreed but not right here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/bagsduffeldaypackbags.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>tom manenos</h3> -->
                                        <!-- <p>to be seen or not seen here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/bagsduffeltotebags.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/bagsduffelsatchelbags.gif" class="img-responsive" style="height:398px;">
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
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="">
                                    <div class="row" id="boxgames">
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">
                    <a href="Mens.php">
                        <img src="banners/merchant.png" class="img-responsive"/>
                    </a>
                </div>
            </div>

            <!--Ends here -->

             <!--start here-->
            <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:#00baff;font-family:kok;"><a class="btn btn-block" href="mainpage.php"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Stationery</h4></a></div>
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
                            <a href="mainpage.php" class="list-group-item"><img src="others/bagsbackpackheritagebackpacks.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Acer</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/bagsbackpackheritagebackpacks.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Asus</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/bagsbackpackheritagebackpacks.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Dell</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/bagsbackpackheritagebackpacks.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;HP</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/bagsbackpackheritagebackpacks.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Lenovo</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/bagsbackpackheritagebackpacks.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Macbook</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/bagsbackpackheritagebackpacks.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Samsung</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/bagsbackpackheritagebackpacks.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Sony</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/bagsbackpackheritagebackpacks.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Other labels</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpage.php" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Stationery</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul id="categories">

                            <li><a href="mainpage.php" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;acer<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;asus<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;dell<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;hp<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;lenovo<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/backpackicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;macbook<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;samsung<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;sony<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;other labels<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="others/bagsdenimdeliasbags.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>Asscreed</h3> -->

                                        <!-- <p>Asscreed but not right here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/bagsdenimdesingerbags.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>tom manenos</h3> -->
                                        <!-- <p>to be seen or not seen here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/bagsdenimbarrelbags.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/bagsdenimbackpacksbags.gif" class="img-responsive" style="height:398px;">
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
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="">
                                    <div class="row" id="boxstationery">
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">
                    <a href="Mens.php">
                        <img src="banners\outdoors.png" class="img-responsive"/>
                    </a>
                </div>
            </div>

            <!--Ends here -->


             <!--start here-->
            <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:#00baff;font-family:kok;"><a class="btn btn-block" href="mainpage.php"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Books</h4></a></div>
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
                            <a href="mainpage.php" class="list-group-item"><img src="icons/womensbags.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Bluelans</a>
                            <a href="mainpage.php" class="list-group-item"><img src="icons/womensbags.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Daylight</a>
                            <a href="mainpage.php" class="list-group-item"><img src="icons/womensbags.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Sunpower</a>
                            <a href="mainpage.php" class="list-group-item"><img src="icons/womensbags.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Excelvan</a>
                            <a href="mainpage.php" class="list-group-item"><img src="icons/womensbags.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Generic</a>
                            <a href="mainpage.php" class="list-group-item"><img src="icons/womensbags.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Koko buy</a>
                            <a href="mainpage.php" class="list-group-item"><img src="icons/womensbags.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Phillips</a>
                            <a href="mainpage.php" class="list-group-item"><img src="icons/womensbags.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Sanwood</a>
                            <a href="mainpage.php" class="list-group-item"><img src="icons/womensbags.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Other labels</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpage.php" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Books</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul id="categories">

                            <li><a href="mainpage.php" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;bluebans<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;daylight<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;sunpower<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;excelvan<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;generic<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/backpackicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;koko buy<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;phillips<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;sanwood<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;other labels<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="others/bagsslouchshopperbags.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>Asscreed</h3> -->

                                        <!-- <p>Asscreed but not right here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/bagsslouchbucketbags.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>tom manenos</h3> -->
                                        <!-- <p>to be seen or not seen here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/bagsslouchshoulderbags.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/bagsslouchbaguettebags.gif" class="img-responsive" style="height:398px;">
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
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="">
                                    <div class="row" id="boxbooks">
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">
                    <a href="Mens.php">
                        <img src="banners\different.png" class="img-responsive"/>
                    </a>
                </div>
            </div>
            <!--Ends here -->

             <!--start here-->
            <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:#00baff;font-family:kok;"><a class="btn btn-block" href="mainpage.php"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Comics</h4></a></div>
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
                            <a href="mainpage.php" target="_blank" class="list-group-item"><img src="icons/suitcase.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Generators</a>
                            <a href="mainpage.php" target="_blank" class="list-group-item"><img src="icons/suitcase.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Vehicles</a>
                            <a href="mainpage.php" target="_blank" class="list-group-item"><img src="icons/suitcase.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Water Pumps</a>
                            <a href="mainpage.php" target="_blank" class="list-group-item"><img src="icons/suitcase.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Fridges</a>
                            <a href="mainpage.php" target="_blank" class="list-group-item"><img src="icons/suitcase.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Chaff cutters</a>
                            <a href="mainpage.php" target="_blank" class="list-group-item"><img src="icons/suitcase.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Kitchenwear</a>
                            <a href="mainpage.php" target="_blank" class="list-group-item"><img src="icons/suitcase.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Washing Machines</a>
                            <a href="mainpage.php" target="_blank" class="list-group-item"><img src="icons/suitcase.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Power tools</a>
                            <a href="mainpage.php" target="_blank" class="list-group-item"><img src="icons/suitcase.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc machines</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpage.php" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Comics</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul id="categories">

                            <li><a href="mainpage.php" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;generators<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;vehicles<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;water pumps<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;fridges<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;farm machines<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/backpackicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;kitchenwear<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;waching machines<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;tools<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;misc machines<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="others/bagstravelathleticbags.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>Asscreed</h3> -->

                                        <!-- <p>Asscreed but not right here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/bagstravelgymbags.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>tom manenos</h3> -->
                                        <!-- <p>to be seen or not seen here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/bagstravelsuitcasebags.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/bagstravelsuitcasebags.gif" class="img-responsive" style="height:398px;">
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
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="">
                                    <div class="row" id="boxcomics">
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">
                    <a href="Mens.php">
                        <img src="banners/merchant.png" class="img-responsive"/>
                    </a>
                </div>
            </div>

            <!--Ends here -->

             <!--start here-->
           <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:#00baff;font-family:kok;"><a class="btn btn-block" href="mainpage.php"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Music instruments &amp; Gear</h4></a></div>
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
                            <a href="mainpage.php" class="list-group-item"><img src="others/bagslingbag.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Pioneer</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/bagslingbag.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Aucma</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/bagslingbag.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Sony</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/bagslingbag.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;creative</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/bagslingbag.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;LG</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/bagslingbag.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Dreskull</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/bagslingbag.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Beats by Dre</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/bagslingbag.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Offia</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/bagslingbag.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc sound</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpage.php" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Music instruments &amp; Gear</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul id="categories">

                            <li><a href="mainpage.php" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;pioneer<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;aucma<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;creative<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;lg<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;dreskull<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/backpackicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;beats<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;offia<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;ampex<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;other sound labels<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="others/bagsslingfolderpurses.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>Asscreed</h3> -->

                                        <!-- <p>Asscreed but not right here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/bagsslingmessengerbags.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>tom manenos</h3> -->
                                        <!-- <p>to be seen or not seen here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/bagsslingcrossbodybags.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/bagsslingshoulderbags.gif" class="img-responsive" style="height:398px;">
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
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="">
                                    <div class="row" id="boxmusicgear">
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">
                    <a href="Mens.php">
                        <img src="banners/merchant.png" class="img-responsive"/>
                    </a>
                </div>
            </div>


            <!--Ends here -->

             <!--start here-->
            <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:#00baff;font-family:kok;"><a class="btn btn-block" href="misc.php"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Educational</h4></a></div>
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
                            <a href="mainpage.php" class="list-group-item"><img src="others/bagsmiscmakeupbag.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Make-up Bags</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/bagsmiscmakeupbag.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Pencil Cases</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/bagsmiscmakeupbag.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Mobile Bags</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/bagsmiscmakeupbag.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Notebook Bags</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/bagsmiscmakeupbag.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Camera Bags</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/bagsmiscmakeupbag.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Trapeze Bags</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/bagsmiscmakeupbag.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Canteen Bags</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/bagsmiscmakeupbag.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Muff Bags</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/bagsmiscmakeupbag.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Bags</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpage.php" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Educational</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul id="categories">

                            <li><a href="mainpage.php" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;make-up bags<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;pencil case<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;mobile case<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;notebook bags<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;camera bags<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/backpackicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;trapeze bags<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;canteen bags<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;muff bags<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;misc bags<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="others/bagslabelskenyasfinest.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>Asscreed</h3> -->

                                        <!-- <p>Asscreed but not right here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/bagslabelsmadewell.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>tom manenos</h3> -->
                                        <!-- <p>to be seen or not seen here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/bagslabelsurbanoutfitters.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/bagslabelseverlane.gif" class="img-responsive" style="height:398px;">
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
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="">
                                    <div class="row" id="boxeducational">
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">
                    <a href="Mens.php">
                        <img src="banners\thankyou.png" class="img-responsive"/>
                    </a>
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
                                        <li><a style="color:black;" href="Howto.php">Order status</a></li>
                                        <li><a style="color:black;" href="Howto.php">Change location</a></li>
                                        <li><a style="color:black;" href="Howto.php">FAQS</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6"><h4>Quick Shop</h4>
                                    <ul class="list-unstyled">
                                        <li><a style="color:black;" href="mainpage.php">Tshirts</a></li>
                                        <li><a style="color:black;" href="Mens.php">Mens</a></li>
                                        <li><a style="color:black;" href="women.php">Womens</a></li>
                                        <li><a style="color:black;" href="shop.php">Gift Cards</a></li>
                                        <li><a style="color:black;" href="shoes.php">Shoes</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 visible-lg visible-md"><h4>Policies</h4>
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

            <!--container ends here-->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><p class="text-center text-capitalize">A WN creation Copyright &#169 Airmark Inc</p></div>
            </div>

        </div>


        <script>

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};


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

            $(document).ready(function(){
                function sub_store(category,container,many){
                    $('.loaderImage').fadeIn(3000);
                    $.ajax({
                        url: 'substoreloops.php',
                        type: 'GET',
                        data: {
                            category: category,
                            many : many
                        },
                        success: function(data){
                            $(container).html(data);
                        }
                    });
                    $('.loaderImage').fadeOut(3000);
                };
                sub_store('entertainment','#boxentertainment',['movies','cds','games','pcgaming','collectibles','entertainmentothers']);
                sub_store('entertainment','#boxgames',['boardgames','cardgames','miniatures','wargames','roleplayinggames','gamesothers']);
                sub_store('entertainment','#boxstationery',['stationery']);
                sub_store('entertainment','#boxbooks',['fiction','nonfiction','children','school','religious','biographies','autobio','selfhelp','booksothers']);
                sub_store('entertainment','#boxcomics',['comics']);
                sub_store('entertainment','#boxmusicgear',['dj','pianos','stringinst','windinst','songbooks','audioequip','musicprod','musicothers']);
                sub_store('entertainment','#boxeducational',['science','nature','reading','specialneeds','geography','history','mathematics','multilingual','music','art','alphabet','electronictoys','educationothers']);

            });


</script>
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                 <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
            </div>

        </div>
    </body>
</html>
