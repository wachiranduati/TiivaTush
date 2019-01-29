<?php
$century = 321;
 ?>
<!DOCTYPE html>
<html>
<title>Tiiva | Blog</title>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php require 'templates/resourcelinks/headerlinks.php';?>
    <style type="text/css">

    </style>

</head>
    <body onload="mainblog();boxed();">
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
                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 " style="margin-top:10px; border-top:1px solid gainsboro;">
                    <div class="row" style="margin-top:10px;">
                        <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-4 col-xs-4"><p class="text-uppercase text-center"><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></p></div>
                        <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-4 col-xs-4"><p class="text-uppercase text-center"><a href="shop.php">Shop</a></p></div>
                        <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-4 col-xs-4"><p class="text-uppercase text-center"><a href="blog.php">Blog</a></p></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md"></div>
                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12" style="margin-top:20px;"><h3 class="text-center text-uppercase" style="color:orange; text-shadow:1px 1px 3px black; font-family:kokila; font-size:39px;border-right:2px solid gainsboro;">latest from our blog</h3></div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><h4 class="text-center text-uppercase" style="color:orange; font-family:kokila; font-size:24px;">Category</h4>
                            <ul class="list-group">
                                <a href="sportswear.html" class="list-group-item text-center">Womens</a>
                                <a href="sportswear.html" class="list-group-item text-center">Sportswear</a>
                                <a href="sportswear.html" class="list-group-item text-center">Mens</a>
                                <a href="sportswear.html" class="list-group-item text-center">Kids</a>
                                <a href="sportswear.html" class="list-group-item text-center">Household</a>
                                <a href="sportswear.html" class="list-group-item text-center">Interiors</a>
                                <a href="sportswear.html" class="list-group-item text-center">Bags</a>
                                <a href="sportswear.html" class="list-group-item text-center">Shoes</a>
                                <a href="sportswear.html" class="list-group-item text-center">Misc</a>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12" id="itemzero">



<!--                    start of the content pages-->
                    <div class="row" style="margin-bottom:20px;">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                        <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11" style="border:1px solid gainsboro;">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><h3 class="text-capitalize" style="margin-top:10px; color:gray;font-family:kok">Girls pink-t shirt just arrived in store</h3></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <div class="row">
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><h5><span class="glyphicon glyphicon-fire"></span></h5></div>
                                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"><h5 class='text-left'>Mac Doe</h5></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <div class="row">
                                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                    <h5><span class="glyphicon glyphicon-time"></span></h5>
                                                </div>
                                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                                    <h5>1300HRS</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 colxs-4"></div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-sm-2">
                                        <h5>
                                            <span class="glyphicon glyphicon-star" style="color:orange;"></span>
                                            <span class="glyphicon glyphicon-star" style="color:orange;"></span>
                                            <span class="glyphicon glyphicon-star" style="color:orange;"></span>
                                            <span class="glyphicon glyphicon-star" style="color:orange;"></span>
                                            <span class="glyphicon glyphicon-star" style="color:black;"></span>

                                        </h5>

                                </div>
                            </div>
<!--                            the banner in the blog-->
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div id="bannersth" style="background-image:url(images/cod.jpg); height:300px;background-size:100%;border:1px solid blue;"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:10px;">
                                    <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br><br>
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>

                                </div>

                            </div>
                            <div class="row" style="margin-top:20px;margin-bottom:20px;">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <button class="btn btn-primary">Read More</button>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"></div>
                            </div>

                        </div>
                    </div>
<!--                    end of the items-->

<!--                    start of the content pages-->
                    <div class="row" style="margin-bottom:20px;">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                        <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11" style="border:1px solid gainsboro;">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><h3 class="text-capitalize" style="margin-top:10px; color:gray;font-family:kok">Girls pink-t shirt just arrived in store</h3></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <div class="row">
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><h5><span class="glyphicon glyphicon-fire"></span></h5></div>
                                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"><h5 class='text-left'>Mac Doe</h5></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <div class="row">
                                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                    <h5><span class="glyphicon glyphicon-time"></span></h5>
                                                </div>
                                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                                    <h5>1300HRS</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 colxs-4"></div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-sm-2">
                                        <h5>
                                            <span class="glyphicon glyphicon-star" style="color:orange;"></span>
                                            <span class="glyphicon glyphicon-star" style="color:orange;"></span>
                                            <span class="glyphicon glyphicon-star" style="color:orange;"></span>
                                            <span class="glyphicon glyphicon-star" style="color:orange;"></span>
                                            <span class="glyphicon glyphicon-star" style="color:black;"></span>

                                        </h5>

                                </div>
                            </div>
<!--                            the banner in the blog-->
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div id="bannersth" style="background-image:url(images/cod.jpg); height:300px;background-size:100%;border:1px solid blue;"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:10px;">
                                    <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br><br>
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>

                                </div>

                            </div>
                            <div class="row" style="margin-top:20px;margin-bottom:20px;">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <button class="btn btn-primary">Read More</button>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"></div>
                            </div>

                        </div>
                    </div>
<!--                    end of the items-->

<!--                    start of the content pages-->
                    <div class="row" style="margin-bottom:20px;">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                        <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11" style="border:1px solid gainsboro;">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><h3 class="text-capitalize" style="margin-top:10px; color:gray;font-family:kok">Girls pink-t shirt just arrived in store</h3></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <div class="row">
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><h5><span class="glyphicon glyphicon-fire"></span></h5></div>
                                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"><h5 class='text-left'>Mac Doe</h5></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <div class="row">
                                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                    <h5><span class="glyphicon glyphicon-time"></span></h5>
                                                </div>
                                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                                    <h5>1300HRS</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 colxs-4"></div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-sm-2">
                                        <h5>
                                            <span class="glyphicon glyphicon-star" style="color:orange;"></span>
                                            <span class="glyphicon glyphicon-star" style="color:orange;"></span>
                                            <span class="glyphicon glyphicon-star" style="color:orange;"></span>
                                            <span class="glyphicon glyphicon-star" style="color:orange;"></span>
                                            <span class="glyphicon glyphicon-star" style="color:black;"></span>

                                        </h5>

                                </div>
                            </div>
<!--                            the banner in the blog-->
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div id="bannersth" style="background-image:url(images/cod.jpg); height:300px;background-size:100%;border:1px solid blue;"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:10px;">
                                    <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br><br>
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>

                                </div>

                            </div>
                            <div class="row" style="margin-top:20px;margin-bottom:20px;">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <button class="btn btn-primary">Read More</button>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"></div>
                            </div>

                        </div>
                    </div>
<!--                    end of the items-->



                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <ul class="pagination">
                          <li><a href="#">1</a></li>
                          <li class="active"><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">5</a></li>
                        </ul>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>

            </div>
<!--            footer start here-->
         <div class="row" style="margin-top:20px;background-color:rgba(0,0,0,0.5);">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6"><h4>Service</h4>
                                    <ul class="list-unstyled">
                                        <li><a style="color:black;" href="Howto.php">Online help</a></li>
                                        <li><a style="color:black;" href="Howto.php">Contact us</a></li>
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
                                        <li><a style="color:black;" href="aboutus.php">Copyright</a></li>
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
            function mainblog(){
              if(window.XMLHttpRequest){
                    xmlhttp3 = new XMLHttpRequest();
                }else{
                    xmlhttp3 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp3.onreadystatechange = function(){
                if (xmlhttp3.readyState == 4 && xmlhttp3.status == 200){
                    document.getElementById('itemzero').innerHTML= xmlhttp3.responseText;

                    }
                    }
                    xmlhttp3.open('GET','blogsloop.php',true);
                    xmlhttp3.send();
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
