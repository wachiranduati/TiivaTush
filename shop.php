<?php
session_start();
ob_start();
require 'search.inc.php';
require 'core.inc.php';

// $_SESSION['$user_id'];
// md5('wagwanista');
$century = 321;//Shop

if(isset($_POST['useremail'])){
    $useremail = $_POST['useremail'];
    if(!empty($useremail)){
        //echo "It is set";
        //echo $useremail;
        if($useremail == 'a3f1abc0a7101ccf68bb31192780aa42@me.com'){
            header('location:shop.php');
        }

    }else {
        echo "The input is empty";
    }
}else {
    //echo "Nuthn";
}

//$cookiename =  md5($_SESSION['$user_id'].'cooksieairmark');
//echo $cookiename;

?>
<!DOCTYPE html>
<html>
<title>Tiiva | Home</title>

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


        #resi:hover {
            background-color: rgba(64, 64, 64, 0.63);
        }
        .this:hover {
            background-color: aliceblue;
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

        .closemodalcart:hover{
            color: black;
        }

/*        cart modal start here*/
        .cartmodal {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top: -300px; opacity: 0}
    to {top: 0; opacity: 1}
}

@keyframes animatetop {
    from {top: -300px; opacity: 0}
    to {top: 0; opacity: 1}
}
/*        cart modal ends here*/
        .comment{
            padding: 0px;
            margin: 0px;
        }

        .menulist{
            display: inline-block;
            line-height: 1.5;
        }
        .menulist li a{
            text-decoration: none;
            color: black;
        }
        .menulist li a:hover{
            color: blue;
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

            <div class="row simplesearchresults" id="simplesearchresults">
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
                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12" style="margin-top:10px;">
                    <div class="row" style="margin-top:10px;">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4"><p class="text-uppercase text-center"><a href="index.php" title="Go back home"><strong><span class="glyphicon glyphicon-home">Shack</span></strong></a></p></div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4"><p class="text-uppercase text-center"><a href="shop.php" title="visit the main shop"><strong>Store</strong></a></p></div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4"><p class="text-uppercase text-center"><a href="blog.php"><strong>Blog<span class="glyphicon glyphicon-leaf"></span></strong></a></p></div>
                    </div>
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
                            <a href="Electronics.php" target="_blank" class="list-group-item"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/> &nbsp;&nbsp;Sportswear</a>
                            <a href="Mensstore.php" target="_blank" class="list-group-item"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/> &nbsp;&nbsp;Mens</a>
                            <a href="women.php" target="_blank" class="list-group-item"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/> &nbsp;&nbsp; Womens</a>
                            <a href="kids.php" target="_blank" class="list-group-item"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/> &nbsp;&nbsp; Kids</a>
                            <a href="household.php" target="_blank" class="list-group-item"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/> &nbsp;&nbsp; Household</a>
                            <a href="bag.php" target="_blank" class="list-group-item"><img src="icons/backpackicons.png" class="img-responsive" style="height:25px;display:inline;"/> &nbsp;&nbsp; Bags</a>
                            <a href="shoes.php" target="_blank" class="list-group-item"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/> &nbsp;&nbsp; Shoes</a>
                            <a href="labels.php" target="_blank" class="list-group-item"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/> &nbsp;&nbsp; Labels</a>
                            <a href="misc.php" target="_blank" class="list-group-item"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/> &nbsp;&nbsp; Misc</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="index.php" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Categories</h5></a>
                        </div>


                    </div>

            <div class="row" style="background-image:url(images/awesome.jpg);background-size:100%;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border:1px solid white;">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-5 col-xs-5 visible-lg visible-md">

                        <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul id="categories" style="line-height:2.5;padding-bottom:0;margin-bottom:2px;">
                            <li class="text-center" style="font-weight:bold;background-color:black;border:1px solid white;"><span style="color:orange;" class="text-uppercase text-center">Categories</span></li>
                            <li id="beautyid"><a href="beauty.php" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Beauty &amp; Health<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li id="entid"><a href="entertainment.php" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Entertainment &amp; Books<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li id="fashionid"><a href="fashionstore.php" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Fashion &amp; Jewerly<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li id="electrid"><a href="electronics.php" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Electronics &amp; Comps<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li id="supaid"><a href="supermarketstores.php" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Supermarket<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li id="handid"><a href="handcrafted.php" target="_blank"><img src="icons/backpackicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Handmade<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li id="homeid"><a href="homegarden.php" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Home, Garden &amp; Tools<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li id="sportsid"><a href="outdoors.php" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Sports &amp; Outdoors<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li id="autoid"><a href="automotive.php" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Automotive &amp; Industrl<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12" style="padding:0px;">
                        <div  id="menuscreen" class="row menuscreen" style="z-index:9;position:absolute;background-color:rgba(255, 255, 255, 0.65);width:1050px;height:355px;font-family:kok;display:none;border:1px solid black;left:14px;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">

                                <div id="beauty" class="row" style="float:left;display:none;">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h1 style="margin:0px;padding:0px;" class="text-center">Beauty &amp; Health</h1>

                                <ul class="menulist health" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="somthing.php" class="text-uppercase"><strong>Health</strong></a></li>
                                    <li><a href="wareva.php" class="text-capitalize">Healthcare</a></li>
                                    <li><a href="wareva.php" class="text-capitalize">Oral care</a></li>
                                    <li><a href="wareva.php" class="text-capitalize">Sexual wellness</a></li>
                                    <li><a href="wareva.php" class="text-capitalize">Vitamins &amp; Suppliments</a></li>
                                    <li><a href="wareva.php" class="text-capitalize">Oral Care</a></li>
                                    <li><a href="wareva.php" class="text-capitalize">Natural &amp; Homeopathic remedies</a></li>
                                    <li><a href="wareva.php" class="text-capitalize">Vision care</a></li>
                                    <li><a href="wareva.php" class="text-capitalize"></a></li>
                                </ul>

                                <ul class="menulist health" style="list-style-type:none;float:left;font-size:95%;">
                             <li><a href="somthing.php" class="text-uppercase"><strong>Watches</strong></a></li>
                             <li><a href="wareva.php" class="text-capitalize">pocket watches</a></li>
                             <li><a href="wareva.php" class="text-capitalize">cases &amp; watch winders</a></li>
                             <li><a href="wareva.php" class="text-capitalize">wristwatch bands</a></li>
                             <li><a href="wareva.php" class="text-capitalize">wristwatches</a></li>
                             <li><a href="wareva.php" class="text-capitalize">others</a></li>

                         </ul>

                                  <ul class="menulist health" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="somthing.php" class="text-uppercase"><strong>Hair &amp; haircare</strong></a></li>
                                    <li><a href="wareva.php" class="text-capitalize">shampoo &amp; conditioner</a></li>
                                    <li><a href="wareva.php" class="text-capitalize">hair tools</a></li>
                                    <li><a href="wareva.php" class="text-capitalize">grooming</a></li>
                                    <li><a href="wareva.php" class="text-capitalize">hair treatment</a></li>
                                    <li><a href="wareva.php" class="text-capitalize">hair extensions</a></li>
                                </ul>
                                      <ul class="menulist health" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Bath &amp; body</strong></a></li>
                                    <li><a href="Bath&Body.php" class="text-capitalize">Bath &amp; shower</a></li>
                                    <li><a href="Fragrances.php" class="text-capitalize">bodycare</a></li>

                                </ul>

                                        <ul class="menulist health" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="somthing.php" class="text-uppercase"><strong>skincare</strong></a></li>
                                    <li><a href="wareva.php" class="text-capitalize">male</a></li>
                                    <li><a href="wareva.php" class="text-capitalize">female</a></li>
                                    <li><a href="wareva.php" class="text-capitalize">unisex</a></li>

                                </ul>

                                     <ul class="menulist health" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="somthing.php" class="text-uppercase"><strong>Perfumes</strong></a></li>
                                    <li><a href="wareva.php" class="text-capitalize">men</a></li>
                                    <li><a href="wareva.php" class="text-capitalize">women</a></li>
                                    <li><a href="wareva.php" class="text-capitalize">unisex</a></li>
                                    <li><a href="wareva.php" class="text-capitalize">designer</a></li>
                                    <li><a href="wareva.php" class="text-capitalize">bodyspray</a></li>
                                    <li><a href="wareva.php" class="text-capitalize">&nbsp;</a></li>
                                    <li><a href="wareva.php" class="text-capitalize">&nbsp;</a></li>
                                </ul>

                                       <ul class="menulist health" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="somthing.php" class="text-uppercase"><strong>sunglasses</strong></a></li>
                                    <li><a href="wareva.php" class="text-capitalize">men</a></li>
                                    <li><a href="wareva.php" class="text-capitalize">women</a></li>
                                    <li><a href="wareva.php" class="text-capitalize">unisex</a></li>

                                </ul>
                                        <ul class="menulist health" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="somthing.php" class="text-uppercase"><strong>make-up</strong></a></li>
                                    <li><a href="wareva.php" class="text-capitalize">eyes</a></li>
                                    <li><a href="wareva.php" class="text-capitalize">lips</a></li>
                                    <li><a href="wareva.php" class="text-capitalize">face</a></li>
                                    <li><a href="wareva.php" class="text-capitalize">beauty tools &amp; accessories</a></li>
                                    <li><a href="wareva.php" class="text-capitalize">cosmetic bundles</a></li>

                                </ul>
                                        <ul class="menulist health" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="somthing.php" class="text-uppercase"><strong>mens grooming</strong></a></li>
                                    <li><a href="wareva.php" class="text-capitalize">shaving</a></li>
                                    <li><a href="wareva.php" class="text-capitalize">perfumes &amp; colognes</a></li>
                                    <li><a href="wareva.php" class="text-capitalize">moisturizer</a></li>

                                </ul>

                                     <ul class="menulist health" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="somthing.php" class="text-uppercase"><strong>hand, feet &amp; nailcare</strong></a></li>
                                    <li><a href="wareva.php" class="text-capitalize">all hand, feet &amp; nailcare</a></li>

                                </ul>



                                    </div>
                                </div>

                               <div id="ent" class="row" style="float:left;display:none;">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h1 style="margin:0px;padding:0px;" class="text-center">Entertainment &amp; Education</h1>

                                <ul class="menulist health" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Entertainment</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Movies &amp; TV</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">CDs &amp; Vinyl</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Musical Instruments</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Video Games</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">PC Gaming</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Entertainment collectibles</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">other</a></li>
                                </ul>


                                    <ul class="menulist health" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Games</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Board &amp; Traditional Games</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">card games &amp; poler</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">electronic</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">miniatures, war games</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">role playing games</a></li>

                                </ul>



                                 <ul class="menulist health" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Educational</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Science &amp; nature</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">reading &amp; writing</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">special needs &amp; autism</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Geography &amp; History</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Mathematics</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">multilingual</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">music &amp; art</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">alphabet &amp; language</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">electronic learning toys</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">other</a></li>

                                </ul>

                                <ul class="menulist health" style="list-style-type:none;float:left;font-size:95%;">
                               <li><a href="food.php" class="text-uppercase"><strong>books</strong></a></li>
                               <li><a href="somewhere.php" class="text-capitalize">Office</a></li>
                               <li><a href="somewhere.php" class="text-capitalize">Fiction</a></li>
                               <li><a href="somewhere.php" class="text-capitalize">non-fiction</a></li>
                               <li><a href="somewhere.php" class="text-capitalize">children &amp; teen</a></li>
                               <li><a href="somewhere.php" class="text-capitalize">school &amp; education</a></li>
                               <li><a href="somewhere.php" class="text-capitalize">Religious books</a></li>
                               <li><a href="somewhere.php" class="text-capitalize">Biographies &amp; autobiographies</a></li>
                               <li><a href="somewhere.php" class="text-capitalize">self help</a></li>

                           </ul>

                                     <ul class="menulist health" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Comics</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">all comics</a></li>

                                </ul>
                                       <ul class="menulist health" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>stationery</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">all stationery</a></li>

                                </ul>

                                        <ul class="menulist health" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Music instruments &amp; gear</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Dj equipment</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">pianos</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">guitar</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">sheet music &amp; song books</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">pro audio equipment</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">music production equipment</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">other musical instruments</a></li>

                                </ul>


                                   </div>
                                </div>

                               <div id="fashion" class="row" style="display:none;">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h1 style="margin:0px;padding:0px;" class="text-center">Fashion &amp; Jewerly</h1>
                                <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Women's Clothing</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Athletic Apparel</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Coats &amp; Jackets</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Dresses &amp; Skirts</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Intimates &amp; Sleep</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Jeans, Pants &amp; Shorts</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Suits &amp; Blazers</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Sweats, Sweaters &amp; Hoodies</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Swimwear</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Tops, Tshirts &amp; Blouses</a></li>
                                    <li><a href="some.php" class="text-capitalize">Underwear</a></li>
                                    <li><a href="some.php" class="text-capitalize">Shoes</a></li>
                                    <li><a href="some.php" class="text-capitalize">others</a></li>
                                </ul>

                               <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Mens's Clothing</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Athletic Apparel</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Blazers &amp; Sports Coats</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Coats &amp; Jackets</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Dress Shirts</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Jeans</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Pants</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Shorts</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Suits</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Sweaters</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Sweats &amp; Hoodies</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Tshirts</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Underwear</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Shoes</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">others</a></li>
                                </ul>
                                     <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Jewerly</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Diamond Jewelry</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Engagement &amp; Wedding</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Fashion Jewelry</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Fine Jewelry</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Gemstones</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Men's Jewelry</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Vintage &amp; Antique</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">others</a></li>
                                </ul>

                                      <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Accessories</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Luxury Handbags</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Men's Accessories</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Women's Accessories</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">others</a></li>

                                </ul>


                              <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>baby &amp; Kids</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Boy's fashion</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">girl's fashion</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Shoes</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Sleepwear</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Tops &amp; Tshirts</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Dolls &amp; dollhouses</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">others</a></li>

                                </ul>
                                   <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>baby feeding</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">all baby feeding</a></li>

                                </ul>
                                     <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Diapering</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">all diapering</a></li>

                                </ul>
                                     <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Toys &amp; games</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">all toys &amp; games</a></li>

                                </ul>

                                     <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>baby gear</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">all baby gear</a></li>

                                </ul>

                                      <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>baby toiletries &amp; bath time</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">all baby toiletries</a></li>

                                </ul>

                                      <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>nursery</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">all nursery</a></li>

                                </ul>



                                   </div>
                                </div>

                               <div id="electr" class="row" style="display:none;">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h1 style="margin:0px;padding:0px;" class="text-center">Electronics &amp; Computers</h1>

                               <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Camera &amp; Photo</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Camera &amp; Photo Accessories</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Camera Drones, lenses &amp; Filters</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Digital Photo Frames</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Flashes &amp; Flash Accessories</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Manuals &amp; Guides</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Other Cameras &amp; Photo</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Photo Lighting &amp; Studio Equipment</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Replacement Parts &amp; Tools</a></li>

                                </ul>

                                   <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Phones &amp; Accessories</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Cables &amp; Adapters</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Cases, Covers &amp; Skins</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Cell Phone Accessories</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Cell Phone Parts</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Cell Phones &amp; Smart Phones</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Chargers &amp; Cradles</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Screen protectors</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Smart Watches</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">others</a></li>
                                </ul>


                                   <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Computers &amp; Tablets</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Cables &amp; Connectors</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Computer Components &amp; Parts</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Drives, Storage &amp; Blank Media</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Networking &amp; Connectivity</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Keyboards, Mice &amp; Pointing</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Laptop &amp; Desktop Accessories</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Laptops &amp; Netbooks</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Printers, Scanners &amp; Supplies</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Monitors, Projectors &amp; Accessories</a></li>
                                </ul>

                                <ul class="menulist" style="list-style-type:none;font-size:95%;float:left;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Video Games</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Video games</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Consoles</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Guides &amp; Cheats</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Replacement Parts</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Tools</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">others</a></li>
                                </ul>

                                <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>TV, Video &amp; Audio</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">TVs</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Home Speakers &amp; Subwoofers</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Virtual Reality</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Home Audio</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Gadgets</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Home Automation</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Portable Audio &amp; Accessories</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Home Surveillance</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">other gadgets</a></li>
                                </ul>
                                    <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Others</strong></a></li>

                                    <li><a href="somewhere.php" class="text-capitalize">Wearable Technology</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Software</a></li>


                                </ul>

                                   </div>
                                </div>

                               <div id="supa" class="row" style="display:none;">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h1 style="margin:0px;padding:0px;" class="text-center">Supermarket</h1>


                               <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Household supplies</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">laundry</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">air freshners</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Household paper products</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Detergents</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Toilet Cleaning</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Dishwashing</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Air Fresheners</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Batteries</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Household Accessories</a></li>
                                </ul>

                                <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Toiletries</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Feminine Hygiene</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Dental Care</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Bath &amp; Body</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Mens's Toiletries</a></li>

                                </ul>

                                        <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Edibles</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">sauces</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">snacks, cookies &amp; chips</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">spreads</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">candy</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">rice, pasta &amp; Grains</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Breakfast cereal</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">flour</a></li>

                                </ul>

                                <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                              <li><a href="food.php" class="text-uppercase"><strong>Pet supplies</strong></a></li>
                              <li><a href="somewhere.php" class="text-capitalize">poultry supplies</a></li>
                              <li><a href="somewhere.php" class="text-capitalize">fish &amp; aquariums</a></li>
                              <li><a href="somewhere.php" class="text-capitalize">cat &amp; dog suppleis</a></li>
                              <li><a href="somewhere.php" class="text-capitalize">reptile &amp; bird supplies</a></li>

                          </ul>

                                   <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                  <li><a href="food.php" class="text-uppercase"><strong>coffee, tea &amp; beverages</strong></a></li>
                                  <li><a href="somewhere.php" class="text-capitalize">Hot chocolate</a></li>
                                  <li><a href="somewhere.php" class="text-capitalize">water</a></li>
                                  <li><a href="somewhere.php" class="text-capitalize">juice</a></li>
                                  <li><a href="somewhere.php" class="text-capitalize">coffee &amp; espresso</a></li>
                                  <li><a href="somewhere.php" class="text-capitalize">Soft drinks</a></li>
                                  <li><a href="somewhere.php" class="text-capitalize">Energy drinks</a></li>

                              </ul>

                                 <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Beer, Wine &amp; Spirits</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Spirits &amp; Liquors</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Wine</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Beer</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">&nbsp;</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">&nbsp;</a></li>


                                </ul>



                                     <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Shop By Brand</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Tropical Heat</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Velvex</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Britannia</a></li>

                                </ul>

                                     <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Baby Products</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Baby Feeding</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Baby diapering</a></li>


                                </ul>

                                     <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Sexual Wellbeing</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Contraceptives</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">others</a></li>

                                </ul>


                                   </div>
                                </div>

                               <div id="hand" class="row" style="display:none;">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h1 style="margin:0px;padding:0px;" class="text-center">Hand designed &amp; Handmade</h1>
                                <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Jewelry</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Earings</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Necklaces</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Bracelets</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Rings</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Men's jewerly</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">other jewerly</a></li>


                                </ul>

                               <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Bags &amp; Accessories</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Backpacks</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">handbags</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">men's accessories</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">women's accessories</a></li>

                                </ul>

                                   <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Beauty &amp; Grooming</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">skin care</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">bath &amp; body</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">fragrances</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">other beauty products</a></li>

                                </ul>

                                      <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Home D&eacute;cor</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">paintings</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">wall art</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">lighting</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">pieces</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">other homedecor</a></li>

                                </ul>

                                   <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Art work</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">art photographs</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">art posters</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">paintings</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">drawings</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">other artwork</a></li>

                                </ul>

                                   <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Stationery</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">all stationery</a></li>

                                </ul>


                                   <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Kitchen &amp; Dining</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">all kitchen</a></li>

                                </ul>

                                   <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Furniture</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">all furniture</a></li>


                                </ul>

                                   <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Wedding</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">all wedding</a></li>

                                </ul>

                                   <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Baby &amp; kids</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">all baby &amp; kids</a></li>

                                </ul>
                                      <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Fashion</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Men's fashion</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Women's fashion</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">kids's fashion</a></li>

                                </ul>
                                     <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Toys</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">all toys</a></li>

                                </ul>

                                   </div>
                                </div>

                               <div id="home" class="row" style="display:none;">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h1 style="margin:0px;padding:0px;" class="text-center">Home, Garden &amp; Tools</h1>
                                <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Furniture</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Beds &amp; Mattresses</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Cabinets &amp; Cupboards</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Chairs &amp; tables</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">office furniture</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Entertainment Units</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Ottomans &amp; sofas</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Other furniture</a></li>

                                </ul>

                               <ul class="menulist" style="list-style-type:none;font-size:95%;float:left;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Bath</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Bath accessories &amp; products</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">bathmats, rugs &amp; toilets</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">bathroom shelves</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">shower curtains &amp; hooks</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">soap dishes &amp; dispensers</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">towels &amp; washcloths</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">other bathroom items</a></li>
                                </ul>

                                  <ul class="menulist" style="list-style-type:none;font-size:95%;float:left;">
                                    <li><a href="food.php" class="text-uppercase"><strong>bedding</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">blankets &amp; Throws</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Duvet covers &amp; pillow shams</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">nursery bedding</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">sheets &amp; pillow cases</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">mattress pads &amp; feather beds</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Quilts,Bedspreads &amp; coverlets</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">other beddings</a></li>
                                </ul>

                                  <ul class="menulist" style="list-style-type:none;font-size:95%;float:left;">
                                    <li><a href="food.php" class="text-uppercase"><strong>major appliances</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">freezers &amp; fridges</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">ovens &amp; microwave ovens</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">microwaves &amp; cooktops</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">water filters</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Washing machines</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">dishwashers</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">parts &amp; accessories</a></li>
                                </ul>

                                  <ul class="menulist" style="list-style-type:none;font-size:95%;float:left;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Home D&eacute;cor</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Lamps, lighting &amp; fans</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Decorative pillows</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Clocks &amp; vases</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Candles</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Wall shelves</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Wall shelves</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">other home d&eacute;cor</a></li>
                                </ul>

                                  <ul class="menulist" style="list-style-type:none;font-size:95%;float:left;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Home improvement</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">building &amp; Hardware</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">home security</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Electrical &amp; Solar</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Heating, cooling &amp; air</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">other home improvement</a></li>
                                </ul>

                                  <ul class="menulist" style="list-style-type:none;font-size:95%;float:left;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Housekeeping</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Carpet &amp; Floor sweepers</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">cleaning products</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">cleaning towels &amp; cloths</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">vacuum cleaners &amp; parts</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">other housekeeping</a></li>
                                </ul>

                                  <ul class="menulist" style="list-style-type:none;font-size:95%;float:left;">
                                    <li><a href="food.php" class="text-uppercase"><strong>tools</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">air tools &amp; compressors</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Generators &amp; pumps</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Hand tools &amp; power tools</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">safety &amp; protective gear</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">welding &amp; soldering tools</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">other tools</a></li>
                                </ul>
                                  <ul class="menulist" style="list-style-type:none;font-size:95%;float:left;">
                                    <li><a href="food.php" class="text-uppercase"><strong>yard &amp; garden</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">garden supplies</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">outdoor cooking &amp; eating</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">outdoor lighting &amp; equipment</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">other yard, garden &amp; outdoor</a></li>
                                </ul>
                                      <ul class="menulist" style="list-style-type:none;font-size:95%;float:left;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Kitchen &amp; dining</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Small kitchen appliances</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">flatware, knives &amp; culterly</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Kitchen storage &amp; organization</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">other kitchen &amp; dining items</a></li>
                                </ul>


                                   </div>
                                </div>

                               <div id="sports" class="row" style="display:none;">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h1 style="margin:0px;padding:0px;" class="text-center">Sports &amp; Outdoors</h1>
                                <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Fitness &amp; Running</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Fitness &amp; Running</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">shoes</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Strength training</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">clothing &amp; accessories</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">fitness equipment &amp; gear</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">fitness DVDs</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">fitness technology</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">other fitness &amp; running</a></li>

                                </ul>

                               <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>fishing</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">baits, lures &amp; files</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">books &amp; videos</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">clothing, shoes &amp; accessories</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">fising equipment</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">rods &amp; reels</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">rods &amp; reels repair</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">other fishing</a></li>

                                </ul>
                                         <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Team sports</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">gymnastics</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Volleyball</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Rugby</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">basketball</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">hockey</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">football</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">other sports</a></li>

                                </ul>


                                       <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>outdoor sports</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">skating</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">camping &amp; hiking</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">paintball</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">triathlon</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">go-karts</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">cycling</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">other outdoor sports</a></li>

                                </ul>

                                <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                <li><a href="food.php" class="text-uppercase"><strong>Water sports</strong></a></li>
                                <li><a href="somewhere.php" class="text-capitalize">Swimming</a></li>
                                <li><a href="somewhere.php" class="text-capitalize">wetsuits &amp; drysuits</a></li>
                                <li><a href="somewhere.php" class="text-capitalize">swimwear &amp; safety</a></li>
                                <li><a href="somewhere.php" class="text-capitalize">kitesurfing</a></li>
                                <li><a href="somewhere.php" class="text-capitalize">scuba &amp; snorkeling</a></li>
                                <li><a href="somewhere.php" class="text-capitalize">fins, footwear &amp; gloves</a></li>
                                <li><a href="somewhere.php" class="text-capitalize">other water sports</a></li>

                            </ul>



                                      <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Racquet Sports</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Tennis</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Badminton &amp; drysuits</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">swimwear &amp; safety</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Apparel &amp; Accessories</a></li>

                                </ul>


                                       <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>boxing &amp; martial arts</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">boxing gloves</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">other combat sports supplies</a></li>

                                </ul>
                                      <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Yoga &amp; pilates</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">mat carriers &amp; bags</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">mats &amp; non-slip towels</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">pilates accessories</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">other yoga &amp; pilates accessories</a></li>

                                </ul>

                                <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                              <li><a href="food.php" class="text-uppercase"><strong>Golf</strong></a></li>
                              <li><a href="somewhere.php" class="text-capitalize">Golf accessories</a></li>
                              <li><a href="somewhere.php" class="text-capitalize">golf clothing &amp; shoes</a></li>
                              <li><a href="somewhere.php" class="text-capitalize">golf clubs &amp; equip</a></li>
                              <li><a href="somewhere.php" class="text-capitalize">golf club components</a></li>
                              <li><a href="somewhere.php" class="text-capitalize">other golf equip</a></li>
                              <li><a href="somewhere.php" class="text-capitalize">&nbsp;</a></li>

                          </ul>


                                     <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Nutrition</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">all nutrition</a></li>


                                </ul>

                                   </div>
                                </div>

                                <div id="auto" class="row" style="display:none;">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h1 style="margin:0px;padding:0px;" class="text-center">Automotive &amp; Industrial</h1>
                                <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>parts &amp; accessories</strong></a></li>
                                    <li><a href="somewhere.php" class="">ATV Parts</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Apparel &amp; merchandise</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">automotive tools</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">aviation parts &amp; accessories</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">boat parts</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">car electronics</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">car &amp; truck parts &amp; accessories</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">manuals &amp; literature</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">motorcycle parts</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">performance &amp; racing parts</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">personal watercraft parts</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">RV, trailer &amp; camper parts</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">vintage car &amp; truck parts</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">other parts</a></li>

                                </ul>

                               <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Industrial supply</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">adhesives &amp; Sealants</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">cleaning equipment &amp; supplies</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">commercial radios</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">fasterners &amp; hardware</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">government &amp; public safety</a></li>
                                    <li><a href="somewhere.php" class="text-uppercase">HV/AC</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">hydraulics &amp; pneumatics</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">lighting &amp; lasers</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">manuals &amp; books</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">material handling</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">pumps &amp; plumbing</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">safety &amp; security</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">other industrial supplies</a></li>

                                </ul>

                                   <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Manufacturing &amp; metalworking</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">metal sheets &amp; flat stock</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">metalworking tooling</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">process equipment</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">semiconducotor and pcb equipment</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">welding</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">woodworking</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">others</a></li>

                                </ul>

                                   <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>packing &amp; shipping</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">cushioning wrap</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">letter folders</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">packing peanuts</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">packing tape &amp; dispensers</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">shrink wrap</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">other packing &amp; shipping</a></li>

                                </ul>

                                   <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>lab</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">lab equipment</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">lab supplies</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">other lab items</a></li>

                                </ul>

                                   <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>fuel &amp; energy</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">alternative fuel &amp; energy</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">oil &amp; gas</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">other fuel &amp; energy</a></li>

                                </ul>

                                   <ul class="menulist" style="list-style-type:none;float:left;font-size:95%;">
                                    <li><a href="food.php" class="text-uppercase"><strong>Electrical</strong></a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">Circuit breakers &amp; fuses</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">connectors, switches &amp; wire</a></li>
                                    <li><a href="somewhere.php" class="text-capitalize">other electrical equipment</a></li>

                                </ul>


                                   </div>
                                </div>



                            </div>
                        </div>

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
                                        <!--                    END OF THE RIGHTSIDE CONTAINER-->                </div>
                </div>
            </div>
            <div class="row visible-lg visible-md" id="featuredid">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="color:orange;text-shadow:1px 2px 1px black;"><h4 class="text-uppercase text-center"><strong>Featured Items</strong></h4></div>
            </div>
            <div class="row visible-sm visible-xs">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:10px;"><p class="text-uppercase text-center"><strong>Featured Items</strong></p></div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 visible-lg visible-md" style="border:1px solid gainsboro;">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs 3" style="height:25px;"><a href="sportswear.php" class="btn btn-block"><p class="text-uppercase text-center"><strong>Electronics</strong></p></a></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs 3" style="height:25px;"><a href="women.php" class="btn btn-block"><p class="text-uppercase text-center"><strong>Home &amp; Living</strong></p></a></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs 3" style="height:25px;"><a href="Mens.php" class="btn btn-block"><p class="text-uppercase text-center"><strong>Men's</strong></p></a></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs 3" style="height:25px;"><a href="shoes.php" class="btn btn-block"><p class="text-uppercase text-center"><strong>Women's</strong></p></a></div>
                    </div>
                    <div class="row" style="padding:7px;">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><a href="sportswear.php"><img class="img-responsive img-thumbnail" src="images/cod.jpg"></a></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><a href="women.php"><img class="img-responsive img-thumbnail" src="images/cod.jpg"></a></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><a href="Mens.php"><img class="img-responsive img-thumbnail" src="images/cod.jpg"></a></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><a href="shoes.php"><img class="img-responsive img-thumbnail" src="images/cod.jpg"></a></div>
                    </div>
                </div>

            </div>
            <div class="row visible-sm visible-xs" style="border-top:1px dotted gainsboro;padding-top:2px;padding-bottom:2px;">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="border-right:1px dotted gainsboro;"><a class="text-left">Sportswear</a><a href="sportswear.php"><img class="img-responsive" src="images/cod.jpg"></a></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="border-right:1px dotted gainsboro;"><a>Womens</a><a href="women.php"><img class="img-responsive" src="images/cod.jpg"></a></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="border-right:1px dotted gainsboro;"><a>Mens</a><a href="Mens.php"><img class="img-responsive" src="images/cod.jpg"></a></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><a>Shoes</a><a href="shoes.php"><img class="img-responsive" src="images/cod.jpg"></a></div>
                    </div>

                    <div class="row visible-lg visible-md">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">
                            <a href="Mens.php">
                                <img src="banners\tiivashop.png" class="img-responsive"/>
                            </a>
                        </div>
                    </div>
            <!--start here-->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:#00baff;font-family:kok;"><a style="color:white;" href="Mens.php" class="btn btn-block"><h4 class="text-uppercase" style="font-weight:bold;">Electronics &amp; Computers</h4></a></div>
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
                            <a href="sportswear.php" target="_blank" class="list-group-item"><img src="others/sportswearshoes.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Sportswear</a>
                            <a href="Mens.php" target="_blank" class="list-group-item"><img src="others/mensofficialpants.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Mens Formalwear</a>
                            <a href="Mens.php" target="_blank" class="list-group-item"><img src="others/menssweaterstrenchcoats.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Sweaters</a>
                            <a href="Mens.php" target="_blank" class="list-group-item"><img src="others/menspantskhakipants.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Mens Pants</a>
                            <a href="Mens.php" target="_blank" class="list-group-item"><img src="others/menstshirtshenlytshirts.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Mens Tshirts</a>
                            <a href="Mens.php" target="_blank" class="list-group-item"><img src="others/mensblazerscasualcapblazers.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Mens Blazers</a>
                            <a href="Mens.php" target="_blank" class="list-group-item"><img src="others/mensjacketsvarsityjackets.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Mens Jackets</a>
                            <a href="Mens.php" target="_blank" class="list-group-item"><img src="others/shoesmiscthederbys.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Mens Shoes</a>
                            <a href="Mens.php" target="_blank" class="list-group-item"><img src="others/mensmisctrinkets.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Mens Misc</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="Mens.php" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Men's</h5></a>
                        </div>


                    </div>



                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul id="categories">

                            <li><a href="mainpage.php" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;mens sportswear<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;mens formalwear<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;mesn sweaters<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;mens pants<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;mens accessories<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/backpackicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;mens beauty<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;mens jackets<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;mens shoes<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;mens misc<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="border-right:1px solid white;">

<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="others/mensbeauty.png" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>Asscreed</h3> -->

                                        <!-- <p>Asscreed but not right here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/menstshirtshenlytshirts.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>tom manenos</h3> -->
                                        <!-- <p>to be seen or not seen here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/mensofficial.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/menssweaterstrenchcoats.gif" class="img-responsive" style="height:398px;">
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
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="row" id="boxelectronics">
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

             <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:#00baff;font-family:kok;"><a href="women.php" class="btn btn-block" style="color:white;"><h4 class="text-uppercase" style="font-weight:bold;">Entertainment &amp; Education</h4></a></div>
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
                            <a href="women.php" class="list-group-item"><img src="others/womensdresses.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Dresses</a>
                            <a href="women.php" class="list-group-item"><img src="others/womenssportswearpants.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Sportswear</a>
                            <a href="women.php" class="list-group-item"><img src="others/womensbagsquiltedbags.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Womens Bags</a>
                            <a href="women.php" class="list-group-item"><img src="others/womenssweaterscardigans.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Sweaters</a>
                            <a href="women.php" class="list-group-item"><img src="others/womenstops.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Womens Tops</a>
                            <a href="women.php" class="list-group-item"><img src="others/womenspantsjumpsuits.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Womens Pants</a>
                            <a href="women.php" class="list-group-item"><img src="others/womensofficialtrousers.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Formals</a>
                            <a href="women.php" class="list-group-item"><img src="others/womensblazersdrapedblazers.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Blazers</a>
                            <a href="women.php" class="list-group-item"><img src="others/womensmiscgloves.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Womens Misc</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="women.php" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Women's</h5></a>
                        </div>


                    </div>


                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul id="categories">

                            <li><a href="mainpage.php" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;womens fashion<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;beauty products<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;womens bags<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;womens tops<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;womens accessories<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/backpackicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;womens pants<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;womens formalwear<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;womens shoes<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;womens misc<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="border-right:1px solid white;">

<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="others/womensdresses.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>Asscreed</h3> -->

                                        <!-- <p>Asscreed but not right here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/womensshoes.png" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>tom manenos</h3> -->
                                        <!-- <p>to be seen or not seen here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/womensaccessories.png" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/womensblazers.gif" class="img-responsive" style="height:398px;">
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
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="row" id="boxentertainment">
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
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:#00baff;font-family:kok;"><a class="btn btn-block" style="color:white;" href="shoes.php"><h4 class="text-uppercase" style="font-weight:bold;">Beauty &amp; Health</h4></a></div>
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
                            <a href="shoes.php" target="_blank" class="list-group-item"><img src="others/shoesflatsdollshoes.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Flat Shoes</a>
                            <a href="shoes.php" target="_blank" class="list-group-item"><img src="others/shoessportshoesjordans.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Sports Shoes</a>
                            <a href="shoes.php" target="_blank" class="list-group-item"><img src="others/shoestomslaceespradille.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Toms Shoes</a>
                            <a href="shoes.php" target="_blank" class="list-group-item"><img src="others/shoesbootsfurtrimmedboots.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Boots</a>
                            <a href="shoes.php" target="_blank" class="list-group-item"><img src="others/shoessandalsflatsandals.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Sandals</a>
                            <a href="shoes.php" target="_blank" class="list-group-item"><img src="others/shoesloafersmoctoepenny.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Loafer Shoes</a>
                            <a href="shoes.php" target="_blank" class="list-group-item"><img src="others/shoesvansjackpurcell.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Vans Shoes</a>
                            <a href="shoes.php" target="_blank" class="list-group-item"><img src="others/shoesrubberexpedition.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Rubber Shoes</a>
                            <a href="shoes.php" target="_blank" class="list-group-item"><img src="others/shoesmisclaceup.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Shoes</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="shoes.php" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Electronics</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul id="categories">

                            <li><a href="mainpage.php" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;tv's<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;computers<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;phones<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;accessories<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;lights<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/backpackicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;machines<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;gaming<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;sound devices<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;misc electronics<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="border-right:1px solid white;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="others/electronicsphones.png" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>Asscreed</h3> -->

                                        <!-- <p>Asscreed but not right here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/electronicstvs.png" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>tom manenos</h3> -->
                                        <!-- <p>to be seen or not seen here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/electronicsgaming.png" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/electronicscomputers.png" class="img-responsive" style="height:398px;">
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
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="row" id="boxhealth">
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
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:#00baff;font-family:kok;"><a class="btn btn-block" href="kids.php"><h4 class="text-uppercase" style="color:white;font-weight:bold;">handcrafted</h4></a></div>
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
                            <a href="sportswear.php" target="_blank" class="list-group-item"><img src="others/kidssportswear.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Kids Sportswear</a>
                            <a href="kids.php" target="_blank" class="list-group-item"><img src="others/kidsofficialdresses.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Kids  Formalwear</a>
                            <a href="kids.php" target="_blank" class="list-group-item"><img src="others/kidssweaterscardigans.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Kids Sweaters</a>
                            <a href="kids.php" target="_blank" class="list-group-item"><img src="others/kidstopstshirts.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Kids Tshirts</a>
                            <a href="kids.php" target="_blank" class="list-group-item"><img src="others/kidsblazersboyfriendjackets.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Kids Blazers</a>
                            <a href="kids.php" target="_blank" class="list-group-item"><img src="others/kidsdollsanimaldolls.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Kids Dolls</a>
                            <a href="kids.php" target="_blank" class="list-group-item"><img src="others/kidsbagsbackpacks.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Kids Bags</a>
                            <a href="kids.php" target="_blank" class="list-group-item"><img src="others/kidslabelsoldnavy.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Kids Labels</a>
                            <a href="kids.php" target="_blank" class="list-group-item"><img src="others/kidsmiscswimsuits.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Kids Misc</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="kids.php" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Kids</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul id="categories">

                            <li><a href="mainpage.php" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;kids sportswear<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;kids Formalwear<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;kids tshirts<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;kids blazers<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;kids toys<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/backpackicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;kids bags<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;kids accessories<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;kids beauty<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;kids misc<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="border-right:1px solid white;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="others/kidsdolls.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>Asscreed</h3> -->

                                        <!-- <p>Asscreed but not right here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/kidsnewbornaccessories.png" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>tom manenos</h3> -->
                                        <!-- <p>to be seen or not seen here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/kidstops.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/kidssweatersturtlenecks.gif" class="img-responsive" style="height:398px;">
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
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="row" id="handcrafted">
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
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:#00baff;font-family:kok;"><a class="btn btn-block" href="sportswear.php" style="color:white;"><h4 class="text-uppercase" style="font-weight:bold;">Home, Garden &amp; Tools</h4></a></div>
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
                            <a href="sportswear.php" target="_blank" class="list-group-item"><img src="others/sportsdeckhandjoggers.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Joggers Sports</a>
                            <a href="sportswear.php" target="_blank" class="list-group-item"><img src="others/sportswearshortssummershorts.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Shorts Sports</a>
                            <a href="sportswear.php" target="_blank" class="list-group-item"><img src="others/sportswearcompressiontightspants.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Pants Sports</a>
                            <a href="sportswear.php" target="_blank" class="list-group-item"><img src="others/sportswearshirtssoccerjerseys.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Shirts Sports</a>
                            <a href="sportswear.php" target="_blank" class="list-group-item"><img src="others/sportswearveststanktops.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Vests Sports</a>
                            <a href="sportswear.php" target="_blank" class="list-group-item"><img src="others/sportswearbagsdrawstringbags.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Bags Sports</a>
                            <a href="sportswear.php" target="_blank" class="list-group-item"><img src="others/sportswearshoessoccercleats.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Shoes Sports</a>
                            <a href="sportswear.php" target="_blank" class="list-group-item"><img src="others/sportswearsocks.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Socks Sports</a>
                            <a href="sportswear.php" target="_blank" class="list-group-item"><img src="others/sportswearmiscskates.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Sports</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="sportswear.php" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Outdoors</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul id="categories">

                            <li><a href="mainpage.php" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;shirts sportswear<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;pants sportswear<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;shors sportswear<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;vests sportswear<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;socks sportswear<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/backpackicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;hobby equip<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;shoes<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;camping equip<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;misc outdoors stuff<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="border-right:1px solid white;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="others/outdoorscamping.png" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>Asscreed</h3> -->

                                        <!-- <p>Asscreed but not right here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/outdoorssportspants.png" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>tom manenos</h3> -->
                                        <!-- <p>to be seen or not seen here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/outdoorsfishing.png" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/sportswearshoes.gif" class="img-responsive" style="height:398px;">
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
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="row" id="boxhome">
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
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:#00baff;font-family:kok;"><a class="btn btn-block" href="bag.php"><h4 class="text-uppercase" style="font-weight:bold;color:white;">The Supermarket</h4></a></div>
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
                            <a href="bag.php" target="_blank" class="list-group-item"><img src="others/bagsbackpack.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Back-Packs</a>
                            <a href="bag.php" target="_blank" class="list-group-item"><img src="others/bagsdenimbarrelbags.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Duffel Bags</a>
                            <a href="bag.php" target="_blank" class="list-group-item"><img src="others/bagsdenimdesingerbags.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Denim Bags</a>
                            <a href="bag.php" target="_blank" class="list-group-item"><img src="others/bagsclutchclutchbags.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Clutches</a>
                            <a href="bag.php" target="_blank" class="list-group-item"><img src="others/bagsslouchshopperbags.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Slouch Bags</a>
                            <a href="bag.php" target="_blank" class="list-group-item"><img src="others/bagstravelsuitcasebags.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Travel Bags</a>
                            <a href="bag.php" target="_blank" class="list-group-item"><img src="others/bagsleathercrossbody.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Leather Bags</a>
                            <a href="bag.php" target="_blank" class="list-group-item"><img src="others/bagsslingmessengerbags.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Sling Bags</a>
                            <a href="bag.php" target="_blank" class="list-group-item"><img src="others/bagsmiscmakeupbag.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Bags</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="bag.php" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Bags</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul id="categories">

                            <li><a href="mainpage.php" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;back packs<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;duffel bags<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;denim bags<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;clutches<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;slouch bags<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/backpackicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;travel bags<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;leather bags<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;sling bags<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;misc bags<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="others/bagsbackpack.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>Asscreed</h3> -->

                                        <!-- <p>Asscreed but not right here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/bagslingbag.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>tom manenos</h3> -->
                                        <!-- <p>to be seen or not seen here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/bagsclutch.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/bagsduffelbags.gif" class="img-responsive" style="height:398px;">
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
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="row" id="boxsupermarket">
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
           <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:#00baff;font-family:kok;"><a class="btn btn-block" href="household.php"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Outdoors &amp; Sports</h4></a></div>
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
                            <a href="household.php" target="_blank" class="list-group-item"><img src="others/householdbedroompanjamas.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Bedrm Articles</a>
                            <a href="household.php" target="_blank" class="list-group-item"><img src="others/householdfabricshawls.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;House Fabrics</a>
                            <a href="household.php" target="_blank" class="list-group-item"><img src="others/householdcarpetscentrepiecemats.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Carpets</a>
                            <a href="household.php" target="_blank" class="list-group-item"><img src="others/householdtowelsbeachtowels.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;House Towels</a>
                            <a href="household.php" target="_blank" class="list-group-item"><img src="others/householdcurtainsripplefoldcurtains.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Curtains</a>
                            <a href="household.php" target="_blank" class="list-group-item"><img src="others/householdpillows.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;House Pillows</a>
                            <a href="household.php" target="_blank" class="list-group-item"><img src="others/householdantiquesclocks.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Antiques</a>
                            <a href="household.php" target="_blank" class="list-group-item"><img src="others/householdwallartpictures.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;House Wallart</a>
                            <a href="household.php" target="_blank" class="list-group-item"><img src="others/householdmischangers.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;House Misc</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="household.php" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Household</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul id="categories">

                            <li><a href="mainpage.php" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;kitchenwear<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;office products<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;household carpets<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;bathroom accessories<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;furniture<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/backpackicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;work out equip<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;household pieces<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;household art<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;household misc<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="border-right:1px solid white;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="others/livingfurniture.png" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>Asscreed</h3> -->

                                        <!-- <p>Asscreed but not right here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/livingkitchenwear.png" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>tom manenos</h3> -->
                                        <!-- <p>to be seen or not seen here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/livingofficeproducts.png" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/livingwallart.png" class="img-responsive" style="height:398px;">
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
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="row" id="boxoutdoors">
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
                        <img src="banners\blogstwo.png" class="img-responsive"/>
                    </a>
                </div>
            </div>

            <!--Ends here -->

             <!--start here-->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:#00baff;font-family:kok;"><a href="misc.php" class="btn btn-block"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Fashion &amp; Jewerly</h4></a></div>
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
                            <a href="misc.php" target="_blank" class="list-group-item"><img src="others/miscdollscartoondolls.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Dolls</a>
                            <a href="misc.php" target="_blank" class="list-group-item"><img src="others/miscslippersflipflops.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Slippers</a>
                            <a href="misc.php" target="_blank" class="list-group-item"><img src="others/miscsandalsgladiatorsandals.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Sandals</a>
                            <a href="misc.php" target="_blank" class="list-group-item"><img src="others/miscbeltsslimbelts.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Belts</a>
                            <a href="misc.php" target="_blank" class="list-group-item"><img src="others/miscunderwearsportsbras.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Underwears</a>
                            <a href="misc.php" target="_blank" class="list-group-item"><img src="others/mischatsfedorahats.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Hats</a>
                            <a href="misc.php" target="_blank" class="list-group-item"><img src="others/miscsandalshandmadesandals.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Sandals</a>
                            <a href="misc.php" target="_blank" class="list-group-item"><img src="others/miscfabricscottonfabrics.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Fabrics</a>
                            <a href="misc.php" target="_blank" class="list-group-item"><img src="others/miscmiscscarfs.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Misc</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="misc.php" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Misc</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul id="categories">

                            <li><a href="mainpage.php" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;dolls<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;slippers<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;sandals<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;belts<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;underwear<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/backpackicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;hats<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;accessories<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;fabrics<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;misc<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="others/mischats.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>Asscreed</h3> -->

                                        <!-- <p>Asscreed but not right here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/othergroupsunderwears.png" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>tom manenos</h3> -->
                                        <!-- <p>to be seen or not seen here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/miscsandals.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/miscbeltsslimbelts.gif" class="img-responsive" style="height:398px;">
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
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">
                    <a href="Mens.php">
                        <img src="banners/merchant.png" class="img-responsive"/>
                    </a>
                </div>
            </div>

            <!--Ends here -->



            <!--Ends here -->

             <!--start here-->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:#00baff;font-family:kok;"><a class="btn btn-block" href="labels.php"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Automotive &amp; Industrial</h4></a></div>
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
                            <a href="labels.php" class="list-group-item"><img src="others/bagslabelskenyasfinest.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Kenya's Finest</a>
                            <a href="labels.php" class="list-group-item"><img src="others/labelsnike.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Nike Label</a>
                            <a href="labels.php" class="list-group-item"><img src="others/labelsversace.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Versace Label</a>
                            <a href="labels.php" class="list-group-item"><img src="others/householdlabelsprada.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Prada Label</a>
                            <a href="labels.php" class="list-group-item"><img src="others/kidslabelsoldnavy.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Old Navy Label</a>
                            <a href="labels.php" class="list-group-item"><img src="others/shoeslabelsconverse.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Converse</a>
                            <a href="labels.php" class="list-group-item"><img src="others/misclabelscalvinklein.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Calvin Klein</a>
                            <a href="labels.php" class="list-group-item"><img src="others/kidslabelsarmani.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Armani Label</a>
                            <a href="labels.php" class="list-group-item"><img src="others/labelsadidas.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Labels</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="labels.php" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Labels</h5></a>
                        </div>


                    </div>


                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul id="categories">

                            <li><a href="mainpage.php" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;fashion<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;tv's<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;phones &amp; accessories<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;beauty &amp; hair<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;electronics<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/backpackicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;office products<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;shoes<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;toys<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;misc items<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="others/labelsadidas.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>Asscreed</h3> -->

                                        <!-- <p>Asscreed but not right here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/labelschanel.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>tom manenos</h3> -->
                                        <!-- <p>to be seen or not seen here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/labelsnike.gif" class="img-responsive" style="height:398px;">
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
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="row" id="boxautomotive">
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
                        <div class="col-lg-8 col-lg-offset-1 col-md-8 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 visible-lg visible-md"><h4>Service</h4>
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
                                        <li><a style="color:black;" href="mainpage.php?search=mens&&sub=tshirts">Tshirts</a></li>
                                        <li><a style="color:black;" href="Mens.php">Mens</a></li>
                                        <li><a style="color:black;" href="Mens.php">Womens</a></li>
                                        <li><a style="color:black;" href="shop.php">Gift Cards</a></li>
                                        <li><a style="color:black;" href="shoes.php">Shoes</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 visible-lg visible-md" style="height:100px;"><h4>Policies</h4>
                                    <ul class="list-unstyled">
                                        <li><a style="color:black;" href="Termsofuse.php">Terms of use</a></li>
                                        <li><a style="color:black;" href="Termsofuse.php">Privacy policy</a></li>
                                        <li><a style="color:black;" href="Termsofuse.php">Refund policy</a></li>
                                        <li><a style="color:black;" href="#">Billing System</a></li>
                                        <li><a style="color:black;" href="#">Ticket System</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="height:100px;"><h4>About shopper</h4>
                                    <ul class="list-unstyled">
                                        <li><a style="color:black;" href="aboutus.php">Company information</a></li>
                                        <li><a style="color:black;" href="#">Careers</a></li>
                                        <li><a style="color:black;" href="#">Store location</a></li>
                                        <li><a style="color:black;" href="#">Affiliate Program</a></li>
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
                                    <form class="form-inline" method="post" action="index.php">
                                        <div class="input-group" style="font-family:kok;">
                                        <input type="email" class="form-control" placeholder="Email address" name="useremail">
                                        <span class="input-group-btn">
                                            <input type="submit" class="btn btn-default" value="Go"/>
<!--                                            <button type="button" class="btn btn-default">Go</button>-->
                                        </span>
                                        </div>
                                    </form>



                                    <div class="row" style="margin-top:5px;">
                                    <div class="col-lg-9 col-lg-offset-1 col-md-9 col-md-offset-1 col-sm-9 col-xs-9">
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

    $(document).ready(function(){
        function mainstore(category,container){
            $('.loaderImage').fadeIn(3000);
            $.ajax({
                url: 'mainstoreloops.php',
                type: 'GET',
                data: {
                    category: category
                },
                success: function(data){
                    $(container).html(data);
                }
            });
            $('.loaderImage').fadeOut(3000);
        };
        mainstore('electronics','#boxelectronics');
        mainstore('entertainment','#boxentertainment');
        mainstore('health','#boxhealth');
        mainstore('handmade','#handcrafted');
        mainstore('home','#boxhome');
        mainstore('supermarket','#boxsupermarket');
        mainstore('outdoors','#boxoutdoors');
        mainstore('jewelry','#boxmiscs');
        mainstore('automotive','#boxautomotive');

        //not real below
        mainstore('electronics','#boxinteriors');
        //not real above
    });

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

            // show the count on your cart
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

            function showmodalcart(){
                var modalcartbox = document.getElementById('modalcartbox');
                modalcartbox.style.display = 'block';
                modalcartbox.style.visibility = 'visible';
            }
            function hidemodal(){
                var modalcartbox = document.getElementById('modalcartbox');
                modalcartbox.style.display = 'none';
                modalcartbox.style.visibility = 'hidden';
            }

            function toggleadvancedsearch(){
                var AdvancedSearchContainer = document.getElementById('AdvancedSearchContainer');
                var simplesearchresults = document.getElementById('simplesearchresults');
                if(AdvancedSearchContainer.style.display == 'block' && AdvancedSearchContainer.style.visibility == 'visible'){
                    AdvancedSearchContainer.style.display = 'none';
                    AdvancedSearchContainer.style.visibility = 'hidden';
                }else{
                    AdvancedSearchContainer.style.display = 'block';
                    AdvancedSearchContainer.style.visibility = 'visible';
                }

            }
           function advancedsearch(){
               var searchphrase = document.getElementById('searchphrase').value;
               var minprice = document.getElementById('minprice').value;
               var maxprice = document.getElementById('maxprice').value;
               var site = document.getElementById('site').value;
               var category = document.getElementById('category').value;

               function miniadvance(filterz){
                if(XMLHttpRequest){
                    xmlhttp = new XMLHttpRequest();
                }else{
                    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                }
                xmlhttp.onreadystatechange = function(){
                    if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                        document.getElementById('advancedresulst').innerHTML = xmlhttp.responseText;
                                           }
                }
                xmlhttp.open('POST','advancedsearch.php',true);
                xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                xmlhttp.send(filterz);
             }
               var search_text = "search_text="+searchphrase+"&minprice="+minprice+"&maxprice="+maxprice+"&site="+site+"&category="+category;
               if(searchphrase != ''){
                   //continue
                   if(minprice != '' && minprice >= 0){
                       //continue
                       if(maxprice != '' && maxprice > minprice){
                           //continue
                           if(site != ''){
                               //continue
                               if(category != ''){
                                   //continue
                                   //alert('searchphrase = '+searchphrase+" , minprice = "+minprice+" , maxprice = "+maxprice+" ,site = "+site+" and category ="+category);
                                   miniadvance(search_text);
                               }else{
                                   //no category selected
                                   alert("Please select a category to narrow your search");
                               }
                           }else{
                               // no site selected/tampering
                               alert("Please select a site to be searched");
                           }
                       }else{
                           //possible tampering
                           alert("Ooops something is wrong.Please ensure that you provided a value in the maxprice");
                       }
                   }else{
                       // someone is trying to manipulate the system
                       alert("Ooops something is wrong.Please ensure that you provided a value in the minprice");
                   }
               }else{
                   // search box is empty alert
                   alert("Please input a value to search");
               }
           }



            $(document).ready(function(){
                //alert('haiya');
                //$("#menuscreen").show();
                $("#categoriescontainer").hover(function(){
                   $("#menuscreen").show();
                }
//                                                ,function(){
//                    $("#menuscreen").hide();
//                }
                                               )
                ;
                // show beauty
                $("#beautyid").hover(function(){
                    $("#beauty, #fashion, #ent, #electr, #supa, #hand, #home, #sports, #auto").hide();
                    $("#beauty").show();
                });
                // show entertainment
                $("#entid").hover(function(){
                   $("#beauty, #fashion, #electr, #supa, #hand, #home, #sports, #auto").hide();
                   $("#ent").show();
                });
                // show fashion
                $("#fashionid").hover(function(){
                    $("#ent, #beauty, #electr, #supa, #hand, #home, #sports, #auto").hide();
                    $("#fashion").show();
                });
                // show electronics
                $("#electrid").hover(function(){
                    $("#ent, #beauty, #fashion, #supa, #hand, #home, #sports, #auto").hide();
                    $("#electr").show();
                });
                // show supermarket
                $("#supaid").hover(function(){
                    $("#ent, #beauty, #fashion, #electr, #hand, #home, #sports, #auto").hide();
                    $("#supa").show();
                });
                // show handmade
                $("#handid").hover(function(){
                    $("#ent, #beauty, #fashion, #electr, #supa, #home, #sports, #auto").hide();
                    $("#hand").show();
                });
                // show home, garden & tools
                $("#homeid").hover(function(){
                    $("#ent, #beauty, #fashion, #electr, #hand, #supa, #sports, #auto").hide();
                    $("#home").show();
                });
                // show sports & outdoors
                $("#sportsid").hover(function(){
                    $("#ent, #beauty, #fashion, #electr, #hand, #supa, #home, #auto").hide();
                    $("#sports").show();
                });
                // show automotive & industrial
                $("#autoid").hover(function(){
                    $("#ent, #beauty, #fashion, #electr, #hand, #supa, #home, #sports").hide();
                    $("#auto").show();
                });
                // hide everything
//                $("#categoriescontainer").mouseleave(function(){
//                    $("#ent, #beauty, #fashion, #electr, #hand, #supa, #home, #sports, #menu,  #menuscreen").hide();
//                });
                // hide everything
                $("#rightpanel, #featuredid").hover(function(){
                    $("#ent, #beauty, #fashion, #electr, #hand, #supa, #home, #sports, #menu,  #menuscreen").hide();
                })

            });

</script>
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-1 col-xs-1">
                 <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
            </div>

        </div>
    </body>
</html>
