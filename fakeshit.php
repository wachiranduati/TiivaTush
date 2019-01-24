<?php
session_start();
ob_start();
require 'search.inc.php';
require 'core.inc.php';

//echo strpos('i love php so im seated here worndering what im doing here','im');

//echo array_search('me',$thething);
//$a=array('green','blue','red');
//echo array_search("red",$a);
//echo isset($_SESSION['user']);
//echo $_SERVER['REMOTE_ADDR'];

//echo md5(1);
//echo $_SERVER['HTTP_CLIENT_IP'];
//echo $_SERVER['HTTP_X_FORWARDED_FOR'];
$century = 860;//Mtush

$_SESSION['$user_id'];
// md5('wagwanista');

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

        #box1 {
                    border-right: 1px dotted gainsboro;
                }
        #box1:hover {
                    box-shadow: 0px 0px 10px red;
                }
        #resi:hover {
            background-color: rgba(64, 64, 64, 0.63);
        }
        .thitter:hover {
            background-color: #0088ff;
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
        .comment{
            padding: 0px;
            margin: 0px;
        }
        #linewithtime{
            border-top: 2px solid black;
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

            <div class="row" id="modalcartbox" style="visibility:hidden;display:none;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:rgba(0, 0, 0, 0.74);z-index:13;position:fixed;width:100%;left:0;top:0;overflow:auto;height:100%;">
                    <a class="closemodalcart" onclick="hidemodal();" style="color:#aaa;float:right;font-size:58px;font-weight:bold;cursor:pointer;">&times;</a>
                    <div class="cartmodal" style="background-color:#fefefe;margin:10% auto;padding:20px;border:1px solid #888;width:60%;">

                        <div id="cartmodalcontents" style="clear:both;">The contents are here yohme that the education the school system provides will prepare your children for the world
they will face upon graduation. Each child needs more education. Different education. And they
need to know the rules. The different sets of rules.”
“There are rules of money that the rich play by, and there are the rules that the other 95
percent of the population plays by,” he said. “And the 95 percent learns those rules at home
and in school. That is why it's risky today to simply say to a child, `Study hard and look for a job.'
A child today needs a more sophisticated education, and the current system is not delivering the
goods. I don't care how many computers they put in the classroom or how much money schools
spend. How can the education system teach a subject that it does not know?”
So how does a parent teach their children, what the school does not? How do you teach
accounting to a child? Won't they get bored? And how do you teach investing when as a parent
you yourself are risk averse? Instead of teaching my children to simply play it safe, I decided it
was best to teach them to play it smart.
“So how would you teach a child about money and all the things we've talked about?” I asked
Robert. “How can we make it easy for parents especially when they don't understand it
themselves?”</div>
                    </div>
                </div>
            </div>

            <div class="row" id="chatskin2" style="position:fixed;z-index:20;right:3%;bottom:27%;border:2px solid #ffba00;background-color:rgba(34, 255, 195, 0.76);padding-top:1%;padding-bottom:1%;border-bottom-left-radius:20px;border-top-right-radius:20px;display:none;visibility:hidden;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h5 class="text-capitalize">Tiiva Customer Support: Live</h5>
                    <form role="form">
                        <p id="chatstate">Ho</p>
                        <pre  class="pre-scrollable"rows="4" style="height:100px;width:100%;border:none;font-family:kok;">
                            <span class="comment pull-left">Nick said: i thought ou said it would be clearer?</span>
                            <span class="comment pull-right">You replied: i dont think so</span>
                            <span class="comment pull-left">Nick said: i thought ou said it would be clearer?</span>
                            <span class="comment pull-right">You replied: i dont think so</span>


                        </pre>



                        <input type="text" class="form-control input-sm" placeholder="Your message goes here"/>


                    </form>
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
                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12" style="margin-top:10px; border-top:1px solid gainsboro;">
                    <div class="row" style="margin-top:10px;">
                        <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-4 col-xs-4"><p class="text-uppercase text-center"><a href="index.php" title="Go back home"><span class="glyphicon glyphicon-home"><strong>Mtumba</strong></span></a></p></div>
                        <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-4 col-xs-4"><p class="text-uppercase text-center"><a href="shop.php" title="visit the main shop"><strong>Shop</strong></a></p></div>
                        <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-4 col-xs-4"><p class="text-uppercase text-center"><a href="blog.php"><strong>Blog</strong><span class="glyphicon glyphicon-leaf"></span></a></p></div>
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
                            <a href="sportswear.php" target="_blank" class="list-group-item"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/> &nbsp;&nbsp;Sportswear</a>
                            <a href="Mens.php" target="_blank" class="list-group-item"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/> &nbsp;&nbsp;Mens</a>
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border:1px solid gray;">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-5 col-xs-5 visible-lg visible-md">
                        <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul id="categories">
                            <li class="text-center" style="font-weight:bold;background-color:black;border:1px solid white;"><span style="color:orange;" class="text-uppercase text-center">Categories</span></li>
                            <li><a href="Electronics.php" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Electronics<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="Mensstore.php" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Mens<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="womensstore.php" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Womens<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="kidsstore.php" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Kids<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="living.php" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Household<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="bagsstore.php" target="_blank"><img src="icons/backpackicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Bags<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="outdoors.php" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Outdoors<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="otherstores.php" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Other groups<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="labels.php" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Labels<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">


<!--            starts here-->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
                        <div class="carousel-inner">

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
<!--            ends here-->


                    </div>

<!--                    START OF RIGHTSIDE CONTAINER-->
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 visible-lg visible-md" style="border:1px solid black;">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border-bottom:1px dotted gainsboro;padding-top:5px;padding-bottom:5px;">
                                        <div id="imagecarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
                        <div class="carousel-inner">

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

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="font-family:kok;font-size:120%;color:white;">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="height:120px;border:1px solid gainsboro;">
                                                <p class="text-center" style="margin:15%;">Free shipping:) Only By Tiiva</p>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="height:120px;border:1px solid gainsboro;">
                                                <p class="text-center" style="margin:15%;">Awesome prices :D Great variety too</p>

                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="height:120px;border:1px solid gainsboro;">
                                                <p class="text-center" style="margin:15%;">Inhouse blogs XOXO</p>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="height:120px;border:1px solid gainsboro;">
                                                <p class="text-center" style="margin:15%;">Different:):)<br>Out of the box</p>
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
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="color:orange;text-shadow:1px 2px 1px black;"><h4 class="text-uppercase text-center"><strong>Featured Items</strong></h4></div>
            </div>
            <div class="row visible-sm visible-xs">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:10px;"><p class="text-uppercase text-center"><strong>Featured Items</strong></p></div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 visible-lg visible-md" style="border:1px solid gainsboro;">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs 3" style="height:25px;"><a href="sportswear.php" class="btn btn-block"><p class="text-uppercase text-center"><strong>Sportswear</strong></p></a></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs 3" style="height:25px;"><a href="women.php" class="btn btn-block"><p class="text-uppercase text-center"><strong>Women's</strong></p></a></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs 3" style="height:25px;"><a href="Mens.php" class="btn btn-block"><p class="text-uppercase text-center"><strong>Men's</strong></p></a></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs 3" style="height:25px;"><a href="shoes.php" class="btn btn-block"><p class="text-uppercase text-center"><strong>Shoes</strong></p></a></div>
                    </div>
                    <div class="row" style="padding:7px;">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><a href="sportswear.php"><img class="img-responsive img-thumbnail" src="images/cod.jpg"></a></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><a href="women.php"><img class="img-responsive img-thumbnail" src="images/cod.jpg"></a></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><a href="Mens.php"><img class="img-responsive img-thumbnail" src="images/cod.jpg"></a></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><a href="shoes.php"><img class="img-responsive img-thumbnail" src="images/cod.jpg"></a></div>
                    </div>
                </div>

            </div>
            <div class="row visible-sm visible-xs" style="border-top:1px dotted gainsboro;border-bottom:1px solid gainsboro;padding-top:2px;padding-bottom:2px;">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="border-right:1px dotted gainsboro;"><a class="text-left">Sportswear</a><a href="sportswear.php"><img class="img-responsive" src="images/cod.jpg"></a></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="border-right:1px dotted gainsboro;"><a>Womens</a><a href="women.php"><img class="img-responsive" src="images/cod.jpg"></a></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="border-right:1px dotted gainsboro;"><a>Mens</a><a href="Mens.php"><img class="img-responsive" src="images/cod.jpg"></a></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><a>Shoes</a><a href="shoes.php"><img class="img-responsive" src="images/cod.jpg"></a></div>
                    </div>

            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:20px;margin-top:20px; border:1px solid gainsboro;background-image:url(images/asscreed.jpg);background-size:100%;backgound-position:fixed;"><p class="text-center text-capitalize"><a href="#" style="color:white;">I like you a lottle, its like a little except alot! </a></p>
                </div>
            </div>
            <div class="row visible-sm visible-xs">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:5px;border:1px solid gainsboro;background-image:url(images/isht.jpg);background-size:100%;backgound-position:fixed;"><p class="text-center text-capitalize"><a href="#" style="color:white;">I like you a lottle, its like a little except alot! </a></p>
                </div>
            </div>
            <!--start here-->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a style="color:white;" href="Mens.php" class="btn btn-block"><h4 class="text-uppercase" style="font-weight:bold;">Men's</h4></a></div>
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
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul id="categories">

                            <li><a href="Electronics.php" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Electronics<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="Mensstore.php" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Mens<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="womensstore.php" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Womens<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="kidsstore.php" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Kids<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="living.php" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Household<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="bagsstore.php" target="_blank"><img src="icons/backpackicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Bags<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="outdoors.php" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Outdoors<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="otherstores.php" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Other groups<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="labels.php" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Labels<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="border-top:1px solid gainsboro;border-right:1px solid white;border-bottom:1px solid gainsboro;">

<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="others/menssportswear.gif" class="img-responsive" style="height:398px;">
                                    <div class="carousel-caption">
                                        <!-- <h3>Asscreed</h3> -->

                                        <!-- <p>Asscreed but not right here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/mensshirts.gif" class="img-responsive" style="height:398px;">
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
                                    <img src="others/mensjackets.gif" class="img-responsive" style="height:398px;">
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
                                    <div class="row" id="boxmens">
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
            <div class="row visible-lg visible-md" style="margin-top:20px;border:1px solid black;padding:20px;background-image:url(images/asscreed.jpg);background-size:100%;backgound-position:fixed;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><p class="text-center text-uppercase">"I always say shopping is way cheaper than a psychiatrist" Tammy Fay Bakker</p></div>
            </div>
            <div class="row visible-sm visible-xs">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:5px;border:1px solid gainsboro;background-image:url(images/isht.jpg);background-size:100%;backgound-position:fixed;"><p class="text-center text-capitalize"><a href="#">"I always say shopping is way cheaper than a psychiatrist" Tammy Fay Bakker </a></p>
                </div>
            </div>


            <!--Ends here -->

             <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a href="women.php" class="btn btn-block" style="color:white;"><h4 class="text-uppercase" style="font-weight:bold;">Women's</h4></a></div>
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
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid black;border-right:1px solid white;border-top:1px solid white;">
                                    <ul class="list-group list-unstyled" style="line-height:3;margin-top:10px;">
                                        <li><a href="mainpage.php?search=womens&&sub=sportswear">Womens Dresses</a></li>
                                        <li><a href="mainpage.php?search=womens&&sub=mens">Womens Sportswear</a></li>
                                        <li><a href="mainpage.php?search=womens&&sub=womens">Womens Bags</a></li>
                                        <li><a href="mainpage.php?search=womens&&sub=kids">Womens Sweaters</a></li>
                                        <li><a href="mainpage.php?search=womens&&sub=households">Womens Tops</a></li>
                                        <li><a href="mainpage.php?search=womens&&sub=interiors">Womens Pants</a></li>
                                        <li><a href="mainpage.php?search=womens&&sub=bags">Womens Formalwear</a></li>
                                        <li><a href="mainpage.php?search=womens&&sub=shoes">Womens Blazers</a></li>
                                        <li><a href="mainpage.php?search=womens&&sub=misc">Womens Misc</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="border-top:1px solid gainsboro;border-right:1px solid white;">

<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="others/womensdresses.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>Asscreed</h3> -->

                                        <!-- <p>Asscreed but not right here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/womenstops.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>tom manenos</h3> -->
                                        <!-- <p>to be seen or not seen here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/womenssweaters.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/womensblazers.gif" class="img-responsive">
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
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="row" id="boxwomens">
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
            <div class="row visible-lg visible-md" style="margin-top:20px;border:1px solid black;padding:20px;background-image:url(images/asscreed.jpg);background-size:100%;backgound-position:fixed;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><p class="text-center text-uppercase">"Whoever said money can't buy you happiness simply didnt know where to go shopping" Bo Derek</p></div>
            </div>
            <div class="row visible-sm visible-xs">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:5px;border:1px solid gainsboro;background-image:url(images/isht.jpg);background-size:100%;backgound-position:fixed;"><p class="text-center text-capitalize"><a href="#">"Whoever said money can't buy you happiness simply didnt know where to go shopping" Bo Derek </a></p>
                </div>
            </div>

            <!--Ends here -->

             <!--start here-->
            <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" style="color:white;" href="shoes.php"><h4 class="text-uppercase" style="font-weight:bold;">Shoes</h4></a></div>
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
                            <a style="color:white;" href="shoes.php" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Shoes</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid black;border-right:1px solid white;border-top:1px solid white;">
                                    <ul class="list-group list-unstyled" style="line-height:3;margin-top:10px;">
                                        <li><a href="mainpage.php?search=shoes&&sub=sportswear">Flat shoes</a></li>
                                        <li><a href="mainpage.php?search=shoes&&sub=mens">Sports shoes</a></li>
                                        <li><a href="mainpage.php?search=shoes&&sub=womens">Toms shoes</a></li>
                                        <li><a href="mainpage.php?search=shoes&&sub=kids">Boots</a></li>
                                        <li><a href="mainpage.php?search=shoes&&sub=household">Sandals</a></li>
                                        <li><a href="mainpage.php?search=shoes&&sub=interiors">Loafer shoes</a></li>
                                        <li><a href="mainpage.php?search=shoes&&sub=bags">Vans shoes</a></li>
                                        <li><a href="mainpage.php?search=shoes&&sub=shoes">Rubber shoes</a></li>
                                        <li><a href="mainpage.php?search=shoes&&sub=misc">Misc shoes</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="border-top:1px solid gainsboro;border-right:1px solid white;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="others/shoesflatshoes.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>Asscreed</h3> -->

                                        <!-- <p>Asscreed but not right here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/shoestoms.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>tom manenos</h3> -->
                                        <!-- <p>to be seen or not seen here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/shoessportsshoes.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/shoesloafers.gif" class="img-responsive">
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
                                    <div class="row" id="boxshoes">
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
            <div class="row visible-lg visible-md" style="margin-top:20px;border:1px solid black;padding:20px;background-image:url(images/asscreed.jpg);background-size:100%;backgound-position:fixed;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><p class="text-center text-uppercase">"If men liked shopping they'd call it research" Cythia Nelms</p></div>
            </div>
            <div class="row visible-sm visible-xs">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:5px;border:1px solid gainsboro;background-image:url(images/isht.jpg);background-size:100%;backgound-position:fixed;"><p class="text-center text-capitalize"><a href="#">"If men liked shopping they'd call it research" Cythia Nelms </a></p>
                </div>
            </div>

            <!--Ends here -->

             <!--start here-->
            <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="kids.php"><h4 class="text-uppercase" style="color:white;font-weight:bold;">kids</h4></a></div>
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
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid black;border-right:1px solid white;border-top:1px solid white;">
                                    <ul class="list-group list-unstyled" style="line-height:3;margin-top:10px;">
                                        <li><a href="mainpage.php?search=kids&&sub=sportswear">Kids Sportswear</a></li>
                                        <li><a href="mainpage.php?search=kids&&sub=mens">Kids Formalwear</a></li>
                                        <li><a href="mainpage.php?search=kids&&sub=womens">Kids Sweaters</a></li>
                                        <li><a href="mainpage.php?search=kids&&sub=kids">Kids tshirts</a></li>
                                        <li><a href="mainpage.php?search=kids&&sub=households">Kids blazers</a></li>
                                        <li><a href="mainpage.php?search=kids&&sub=interiors">Kids dolls</a></li>
                                        <li><a href="mainpage.php?search=kids&&sub=bags">Kids bags</a></li>
                                        <li><a href="mainpage.php?search=kids&&sub=shoes">Kids labels</a></li>
                                        <li><a href="mainpage.php?search=kids&&sub=misc">Kids Misc</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="border-top:1px solid gainsboro;border-right:1px solid white;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="others/kidsdolls.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>Asscreed</h3> -->

                                        <!-- <p>Asscreed but not right here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/kidssportswear.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>tom manenos</h3> -->
                                        <!-- <p>to be seen or not seen here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/kidstops.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/kidssweaters.gif" class="img-responsive">
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
                                    <div class="row" id="boxkids">
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
            <div class="row visible-lg visible-md" style="margin-top:20px;border:1px solid black;padding:20px;background-image:url(images/asscreed.jpg);background-size:100%;backgound-position:fixed;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><p class="text-center text-uppercase">Be honest be silly be kind</p></div>
            </div>
            <div class="row visible-sm visible-xs">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:5px;border:1px solid gainsboro;background-image:url(images/isht.jpg);background-size:100%;backgound-position:fixed;"><p class="text-center text-capitalize"><a href="#">Be honest be silly be kind </a></p>
                </div>
            </div>

            <!--Ends here -->

             <!--start here-->
            <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="sportswear.php" style="color:white;"><h4 class="text-uppercase" style="font-weight:bold;">Sportswear</h4></a></div>
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
                            <a style="color:white;" href="sportswear.php" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Sportswear</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid black;border-right:1px solid white;border-top:1px solid white;">
                                    <ul class="list-group list-unstyled" style="line-height:3;margin-top:10px;">
                                        <li><a href="mainpage.php?search=sportswear&&sub=sportswear">Joggers sportswear</a></li>
                                        <li><a href="mainpage.php?search=sportswear&&sub=mens">Shorts sportswear</a></li>
                                        <li><a href="mainpage.php?search=sportswear&&sub=womens">Pants sportswear</a></li>
                                        <li><a href="mainpage.php?search=sportswear&&sub=kids">Shirts sportswear</a></li>
                                        <li><a href="mainpage.php?search=sportswear&&sub=shirts">Vests sportswear</a></li>
                                        <li><a href="mainpage.php?search=sportswear&&sub=shirts">Bags sportswear</a></li>
                                        <li><a href="mainpage.php?search=sportswear&&sub=bags">Shoes sportswear</a></li>
                                        <li><a href="mainpage.php?search=sportswear&&sub=shoes">Socks sportswear</a></li>
                                        <li><a href="mainpage.php?search=sportswear&&sub=misc">Misc sportswear</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="border-top:1px solid gainsboro;border-right:1px solid white;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="others/sportswearsocks.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>Asscreed</h3> -->

                                        <!-- <p>Asscreed but not right here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/sportswearvests.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>tom manenos</h3> -->
                                        <!-- <p>to be seen or not seen here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/sportswearshoes.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/sportswearshorts.gif" class="img-responsive">
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
            <div class="row visible-lg visible-md" style="margin-top:20px;border:1px solid black;padding:20px;background-image:url(images/asscreed.jpg);background-size:100%;backgound-position:fixed;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><p class="text-center text-uppercase">Monday, Nothing a bit of shopping cant fix</p></div>
            </div>
            <div class="row visible-sm visible-xs">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:5px;border:1px solid gainsboro;background-image:url(images/isht.jpg);background-size:100%;backgound-position:fixed;"><p class="text-center text-capitalize"><a href="#">Monday, nothing a bit of shopping cant fix </a></p>
                </div>
            </div>
            <!--Ends here -->

             <!--start here-->
            <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="bag.php"><h4 class="text-uppercase" style="font-weight:bold;color:white;">Bags</h4></a></div>
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
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid black;border-right:1px solid white;border-top:1px solid white;">
                                    <ul class="list-group list-unstyled" style="line-height:3;margin-top:10px;">
                                        <li><a href="mainpage.php?search=bags&&sub=sportswear">Back packs</a></li>
                                        <li><a href="mainpage.php?search=bags&&sub=mens">Duffel bags</a></li>
                                        <li><a href="mainpage.php?search=bags&&sub=womens">Denim bags</a></li>
                                        <li><a href="mainpage.php?search=bags&&sub=kids">Clutches</a></li>
                                        <li><a href="mainpage.php?search=bags&&sub=household">Slouch bags</a></li>
                                        <li><a href="mainpage.php?search=bags&&sub=interiors">Travel bags</a></li>
                                        <li><a href="mainpage.php?search=bags&&sub=bags">Leather bags</a></li>
                                        <li><a href="mainpage.php?search=bags&&sub=shoes">Sling bags</a></li>
                                        <li><a href="mainpage.php?search=bags&&sub=misc">Misc bags</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="border-top:1px solid gainsboro;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="others/bagsbackpack.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>Asscreed</h3> -->

                                        <!-- <p>Asscreed but not right here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/bagslingbag.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>tom manenos</h3> -->
                                        <!-- <p>to be seen or not seen here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/bagsclutch.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/bagsduffelbags.gif" class="img-responsive">
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
            <div class="row visible-lg visible-md" style="margin-top:20px;border:1px solid black;padding:20px;background-image:url(images/asscreed.jpg);background-size:100%;backgound-position:fixed;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><p class="text-center text-uppercase">Its an add to cart kinda day</p></div>
            </div>
            <div class="row visible-sm visible-xs">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:5px;border:1px solid gainsboro;background-image:url(images/isht.jpg);background-size:100%;backgound-position:fixed;"><p class="text-center text-capitalize"><a href="#">Its an add to cart kinda day </a></p>
                </div>
            </div>

            <!--Ends here -->



             <!--start here-->
           <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="household.php"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Household</h4></a></div>
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
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid black;border-right:1px solid white;border-top:1px solid white;">
                                    <ul class="list-group list-unstyled" style="line-height:3;margin-top:10px;">
                                        <li><a href="mainpage.php?search=household&&sub=sportswear">Bedroom Articles</a></li>
                                        <li><a href="mainpage.php?search=household&&sub=mens">Household Fabrics</a></li>
                                        <li><a href="mainpage.php?search=household&&sub=womens">Household Carpets</a></li>
                                        <li><a href="mainpage.php?search=household&&sub=kids">Household Towels</a></li>
                                        <li><a href="mainpage.php?search=household&&sub=household">Household Curtains</a></li>
                                        <li><a href="mainpage.php?search=household&&sub=interiors">Household Pillows</a></li>
                                        <li><a href="mainpage.php?search=household&&sub=bags">Household Antiques</a></li>
                                        <li><a href="mainpage.php?search=household&&sub=shoes">Households Wallart</a></li>
                                        <li><a href="mainpage.php?search=household&&sub=misc">Households Misc</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="border-right:1px solid white;border-top:1px solid gainsboro;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="others/householdwallart.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>Asscreed</h3> -->

                                        <!-- <p>Asscreed but not right here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/householdbedsheets.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>tom manenos</h3> -->
                                        <!-- <p>to be seen or not seen here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/householdbathtowels.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/householdpillows.gif" class="img-responsive">
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
                                    <div class="row" id="boxhouseholds">
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
            <div class="row visible-lg visible-md" style="margin-top:20px;border:1px solid black;padding:20px;background-image:url(images/asscreed.jpg);background-size:100%;backgound-position:fixed;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><p class="text-center text-uppercase">"I'm not a shoe hoarder, I'm a shoe collector" Anon</p></div>
            </div>
            <div class="row visible-sm visible-xs">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:5px;border:1px solid gainsboro;background-image:url(images/isht.jpg);background-size:100%;backgound-position:fixed;"><p class="text-center text-capitalize"><a href="#">"I'm not a shoe hoarder, I'm a shoe collector" Anon </a></p>
                </div>
            </div>

            <!--Ends here -->

             <!--start here-->
            <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a href="misc.php" class="btn btn-block"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Misc</h4></a></div>
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
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="border-bottom:1px solid black;">
                                    <ul class="list-group list-unstyled" style="line-height:3;margin-top:10px;">
                                        <li><a href="mainpage.php?search=misc&&sub=sportswear">Miscs Dolls</a></li>
                                        <li><a href="mainpage.php?search=misc&&sub=mens">Miscs Slippers</a></li>
                                        <li><a href="mainpage.php?search=misc&&sub=womens">Miscs Sandals</a></li>
                                        <li><a href="mainpage.php?search=misc&&sub=kids">Miscs Belts</a></li>
                                        <li><a href="mainpage.php?search=misc&&sub=household">Miscs Underwears</a></li>
                                        <li><a href="mainpage.php?search=misc&&sub=interiors">Miscs Hats</a></li>
                                        <li><a href="mainpage.php?search=misc&&sub=bags">Miscs Sandals</a></li>
                                        <li><a href="mainpage.php?search=misc&&sub=shoes">Miscs Fabrics</a></li>
                                        <li><a href="mainpage.php?search=misc&&sub=misc">Misc misc</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="border-top:1px solid gainsboro;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="others/mischats.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>Asscreed</h3> -->

                                        <!-- <p>Asscreed but not right here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/Miscslippers.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>tom manenos</h3> -->
                                        <!-- <p>to be seen or not seen here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/miscsandals.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/miscunderwears.gif" class="img-responsive">
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
            <div class="row visible-lg visible-md" style="margin-top:20px;border:1px solid black;padding:20px;background-image:url(images/asscreed.jpg);background-size:100%;backgound-position:fixed;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><p class="text-center text-uppercase">Good outfits for a bad day</p></div>
            </div>
            <div class="row visible-sm visible-xs">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:5px;border:1px solid gainsboro;background-image:url(images/isht.jpg);background-size:100%;backgound-position:fixed;"><p class="text-center text-capitalize"><a href="#">Good outfits for a bad day </a></p>
                </div>
            </div>

            <!--Ends here -->



            <!--Ends here -->

             <!--start here-->
            <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="labels.php"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Labels</h4></a></div>
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
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="border-bottom:1px solid black;">
                                    <ul class="list-group list-unstyled" style="line-height:3;margin-top:10px;">
                                        <li><a href="mainpage.php?search=labels&&sub=sportswear">Kenya's Finest</a></li>
                                        <li><a href="mainpage.php?search=labels&&sub=mens">Nike label</a></li>
                                        <li><a href="mainpage.php?search=labels&&sub=womens">Versace label</a></li>
                                        <li><a href="mainpage.php?search=labels&&sub=kids">Prada label</a></li>
                                        <li><a href="mainpage.php?search=labels&&sub=household">Old Navy label</a></li>
                                        <li><a href="mainpage.php?search=labels&&sub=interiors">Converse label</a></li>
                                        <li><a href="mainpage.php?search=labels&&sub=bags">Gucci label</a></li>
                                        <li><a href="mainpage.php?search=labels&&sub=shoes">Armani label</a></li>
                                        <li><a href="mainpage.php?search=labels&&sub=misc">Misc labels</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="border-top:1px solid gainsboro;">

<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="others/labelsadidas.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>Asscreed</h3> -->

                                        <!-- <p>Asscreed but not right here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/labelschanel.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>tom manenos</h3> -->
                                        <!-- <p>to be seen or not seen here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/labelsnike.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/labelsversace.gif" class="img-responsive">
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
            <div class="row visible-lg visible-md" style="margin-top:20px;border:1px solid black;padding:20px;background-image:url(images/asscreed.jpg);background-size:100%;backgound-position:fixed;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><p class="text-center text-uppercase">Kind heart, fierce mind brave spirit</p></div>
            </div>
            <div class="row visible-sm visible-xs">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:5px;border:1px solid gainsboro;background-image:url(images/isht.jpg);background-size:100%;backgound-position:fixed;"><p class="text-center text-capitalize"><a href="#">Kind heart, fierce mind brave spirit </a></p>
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><p class="text-center text-capitalize">A WN creation Copyright &#169 Tiiva Inc.</p></div>
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
                    xmlhttp.open('GET','indexsportswearsloop.php',true);
                    xmlhttp.send();

            $('.loaderImage').fadeOut(3000);
                 womensloop();
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
            function womensloop(){
                $('.loaderImage').fadeIn(3000);
                if(window.XMLHttpRequest){
                    xmlhttp3 = new XMLHttpRequest();
                }else{
                    xmlhttp3 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp3.onreadystatechange = function(){
                if (xmlhttp3.readyState == 4 && xmlhttp3.status == 200){
                    document.getElementById('boxwomens').innerHTML= xmlhttp3.responseText;

                    }
                    }
                    xmlhttp3.open('GET','indexwomensloop.php',true);
                    xmlhttp3.send();
                $('.loaderImage').fadeOut(3000);
                mensloop();

            }

            function mensloop(){
                $('.loaderImage').fadeIn(3000);
                if(window.XMLHttpRequest){
                    xmlhttp4 = new XMLHttpRequest();
                }else{
                    xmlhttp4 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp4.onreadystatechange = function(){
                if (xmlhttp4.readyState == 4 && xmlhttp4.status == 200){
                    document.getElementById('boxmens').innerHTML= xmlhttp4.responseText;

                    }
                    }
                    xmlhttp4.open('GET','fakeshitloop.php',true);
                    xmlhttp4.send();
                $('.loaderImage').fadeOut(3000);
                kidsloop();

            }

            function kidsloop(){
                $('.loaderImage').fadeIn(3000);
                if(window.XMLHttpRequest){
                    xmlhttp5 = new XMLHttpRequest();
                }else{
                    xmlhttp5 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp5.onreadystatechange = function(){
                if (xmlhttp5.readyState == 4 && xmlhttp5.status == 200){
                    document.getElementById('boxkids').innerHTML= xmlhttp5.responseText;

                    }
                    }
                    xmlhttp5.open('GET','indexkidsloop.php',true);
                    xmlhttp5.send();
                $('.loaderImage').fadeOut(3000);
                Householdsloop();

            }

            function Householdsloop(){
                $('.loaderImage').fadeIn(3000);
                if(window.XMLHttpRequest){
                    xmlhttp6 = new XMLHttpRequest();
                }else{
                    xmlhttp6 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp6.onreadystatechange = function(){
                if (xmlhttp6.readyState == 4 && xmlhttp6.status == 200){
                    document.getElementById('boxhouseholds').innerHTML= xmlhttp6.responseText;

                    }
                    }
                    xmlhttp6.open('GET','indexhouseholdsloop.php',true);
                    xmlhttp6.send();
                $('.loaderImage').fadeOut(3000);
                bagsloop();

            }

            function bagsloop(){
                $('.loaderImage').fadeIn(3000);
                if(window.XMLHttpRequest){
                    xmlhttp7 = new XMLHttpRequest();
                }else{
                    xmlhttp7 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp7.onreadystatechange = function(){
                if (xmlhttp7.readyState == 4 && xmlhttp7.status == 200){
                    document.getElementById('boxbags').innerHTML= xmlhttp7.responseText;

                    }
                    }
                    xmlhttp7.open('GET','indexbagsloop.php',true);
                    xmlhttp7.send();
                $('.loaderImage').fadeOut(3000);
                shoesloop();

            }

            function shoesloop(){
                $('.loaderImage').fadeIn(3000);
                if(window.XMLHttpRequest){
                    xmlhttp8 = new XMLHttpRequest();
                }else{
                    xmlhttp8 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp8.onreadystatechange = function(){
                if (xmlhttp8.readyState == 4 && xmlhttp8.status == 200){
                    document.getElementById('boxshoes').innerHTML= xmlhttp8.responseText;

                    }
                    }
                    xmlhttp8.open('GET','indexshoesloop.php',true);
                    xmlhttp8.send();
                $('.loaderImage').fadeOut(3000);
                labelsloop();

            }

             function labelsloop(){
                 $('.loaderImage').fadeIn(3000);
                if(window.XMLHttpRequest){
                    xmlhttp9 = new XMLHttpRequest();
                }else{
                    xmlhttp9 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp9.onreadystatechange = function(){
                if (xmlhttp9.readyState == 4 && xmlhttp9.status == 200){
                    document.getElementById('boxlabels').innerHTML= xmlhttp9.responseText;

                    }
                    }
                    xmlhttp9.open('GET','indexlabelsloop.php',true);
                    xmlhttp9.send();
                 $('.loaderImage').fadeOut(3000);
                 miscsloop();

            }

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
                    xmlhttp10.open('GET','indexmiscsloop.php',true);
                    xmlhttp10.send();
                 $('.loaderImage').fadeOut(3000);
                 interiorsloop();

            }
                   function interiorsloop(){
                       $('.loaderImage').fadeIn(3000);
                if(window.XMLHttpRequest){
                    xmlhttp11 = new XMLHttpRequest();
                }else{
                    xmlhttp11 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp11.onreadystatechange = function(){
                if (xmlhttp11.readyState == 4 && xmlhttp11.status == 200){
                    document.getElementById('boxinteriors').innerHTML= xmlhttp11.responseText;

                    }
                    }
                    xmlhttp11.open('GET','indexinteriorsloop.php',true);
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

            function submitrequest(){
                var clientname = document.getElementById('clientname').value;
                var clientcontact = document.getElementById('clientcontact').value;
                var subject = document.getElementById('subject').value;
                var chatskin1 = document.getElementById('chatskin1');
                //alert(clientname+"/// "+clientcontact+" /// "+subject);
                if(clientname != '' && clientcontact != '' && subject != ''){
                    // submit and wait for an agent to come up
                    chatskin1.style.display = "none";
                    chatskin1.style.visibility = "hidden";
                        if(XMLHttpRequest){
                            xmlhttp = new XMLHttpRequest();
                        }else{
                            xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                        }
                        xmlhttp.onreadystatechange = function(){
                            if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                                document.getElementById('calendar').innerHTML = xmlhttp.responseText;

                        }
                        }
                        xmlhttp.open('POST','customerchatrequests.php',true);
                        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                        xmlhttp.send();


                }else{
                    // please fill in all the spaces provided
                    alert("Please fill in all the inputs provided");
                }
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

            function loadmodalcart(){
              if(window.XMLHttpRequest){
                    xmlhttp3 = new XMLHttpRequest();
                }else{
                    xmlhttp3 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp3.onreadystatechange = function(){
                if (xmlhttp3.readyState == 4 && xmlhttp3.status == 200){
                    document.getElementById('cartmodalcontents').innerHTML= xmlhttp3.responseText;
                    showmodalcart();
                    }
                    }
                    xmlhttp3.open('GET','frontcartcheckout.php',true);
                    xmlhttp3.send();


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
                    loadmodalcart();

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
                    loadmodalcart();

                    }
                    }
                    xmlhttp06.open('GET','stolencart.php?action=remove&id='+irem,true);
                    xmlhttp06.send();
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

</script>

        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-1 col-xs-1">
                 <button onclick="topFunction()" id="myBtn" title="Go to top" style="right:1.5%;bottom:10%;"><span class="glyphicon glyphicon-circle-arrow-up">Top</span></button>
            </div>

        </div>
    </body>
</html>
