<?php
ob_start();
session_start();
require 'search.inc.php';

$century = 321;//Shop
?>
<!DOCTYPE html>
<html>
<title>Tiiva | Misc</title>

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
            <link rel="stylesheet" href="MaterialDesign-Webfont-master/css/materialdesignicons.min.css">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 " style="border-top:1px solid gainsboro;">
                </div>
            </div>
                    <div class="row visible-lg visible-md" style="margin-top:10px;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><a href="index.html">Home </a> / <a href="shoes.html">Misc</a><h2 class="text-center text-uppercase" style="margin-top:-10px; color:orange;">Misc - articles</h2></div>
                    </div>

                    <div class="row visible-sm visible-xs" style="margin-top:10px;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><a href="index.html">Home </a> / <a href="shoes.html">Misc</a><h4 class="text-center text-uppercase" style="margin-top:-5px; color:orange;">Misc - articles</h4></div>
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
                            <a href="mainpage.php" target="_blank" class="list-group-item"><img src="others/miscdollsfluffydolls.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Dolls</a>
                            <a href="mainpage.php" target="_blank" class="list-group-item"><img src="others/miscslippersflipflops.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Slippers</a>
                            <a href="mainpage.php" target="_blank" class="list-group-item"><img src="others/miscsandalshandmadesandals.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Sandals</a>
                            <a href="mainpage.php" target="_blank" class="list-group-item"><img src="others/miscbeltsslimbelts.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Belts</a>
                            <a href="mainpage.php" target="_blank" class="list-group-item"><img src="others/miscunderwearsportsbras.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Underwears</a>
                            <a href="mainpage.php" target="_blank" class="list-group-item"><img src="others/mischatsbaseballcaps.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Hats</a>
                            <a href="mainpage.php" target="_blank" class="list-group-item"><img src="others/miscsandalsgladiatorsandals.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Sandals</a>
                            <a href="mainpage.php" target="_blank" class="list-group-item"><img src="others/miscfabricswoolfabric.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Fabrics</a>
                            <a href="mainpage.php" target="_blank" class="list-group-item"><img src="others/miscmiscscarfs.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="misc.php" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Categories</h5></a>
                        </div>


                    </div>


            <div class="row" style="background-image:url(images/awesome.jpg);background-size:100%;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border:1px solid gray;">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md">
                            <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul id="categories">
                            <li class="text-center" style="font-weight:bold;background-color:black;border:1px solid white;"><span style="color:orange;" class="text-uppercase text-center">Categories</span></li>
                            <li><a href="mainpage.php" target="_blank"><img src="others/miscdollsfluffydolls.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Dolls<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="others/miscslippersflipflops.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Slippers<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="others/miscsandalshandmadesandals.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Sandals<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="others/miscbeltsslimbelts.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Belts<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="others/miscunderwearsportsbras.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Underwears<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="others/mischatsbaseballcaps.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Hats<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="others/miscsandalsgladiatorsandals.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Sandals<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="others/miscfabricswoolfabric.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Fabrics<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php" target="_blank"><img src="others/miscmiscscarfs.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Misc<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">



<!--            starts here-->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
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
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><p class="text-uppercase text-center">Featured Items</p></div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border:1px solid gainsboro;">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs 3" style="height:25px;"><a href="mainpage.php" class="btn btn-block"><p class="text-uppercase text-center">Belts</p></a></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs 3" style="height:25px;"><a href="mainpage.php" class="btn btn-block"><p class="text-uppercase text-center">Benies</p></a></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs 3" style="height:25px;"><a href="mainpage.php" class="btn btn-block"><p class="text-uppercase text-center">Shoals</p></a></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs 3" style="height:25px;"><a href="mainpage.php" class="btn btn-block"><p class="text-uppercase text-center">Fabric</p></a></div>
                    </div>
                    <div class="row visible-lg visible-md" style="padding:7px;">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="border-right:1px dotted gainsboro;"><a href="mainpage.php"><img class="img-responsive img-thumbnail" src="images/cod.jpg"></a></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="border-right:1px dotted gainsboro;"><a href="mainpage.php"><img class="img-responsive img-thumbnail" src="images/cod.jpg"></a></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="border-right:1px dotted gainsboro;"><a href="mainpage.php"><img class="img-responsive img-thumbnail" src="images/cod.jpg"></a></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="border-right:1px dotted gainsboro;"><a href="mainpage.php"><img class="img-responsive img-thumbnail" src="images/cod.jpg"></a></div>
                    </div>
                    <div class="row visible-sm visible-xs" style="padding:7px;">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><a href="mainpage.php">Belts</a><a href="mainpage.php"><img class="img-responsive" src="images/cod.jpg"></a></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><a href="mainpage.php">Benies</a><a href="mainpage.php"><img class="img-responsive" src="images/cod.jpg"></a></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><a href="mainpage.php">Shoals</a><a href="mainpage.php"><img class="img-responsive" src="images/cod.jpg"></a></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><a href="mainpage.php">Fabric</a><a href="mainpage.php"><img class="img-responsive" src="images/cod.jpg"></a></div>
                    </div>


                </div>

            </div>
            <div class="row visile-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:20px;margin-top:20px; border:1px solid gainsboro;background-image:url(images/asscreed.jpg);background-size:100%;backgound-position:fixed;"><p class="text-center text-capitalize"><a href="#">In here we place the image banners and shit</a></p></div>
            </div>
            <div class="row visible-sm visible-xs">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:5px;border:1px solid gainsboro;background-image:url(images/isht.jpg);background-size:100%;backgound-position:fixed;"><p class="text-center text-capitalize"><a href="#">Are you a designer or a trader? Wan't your items featured on our site?Get intouch</a></p>
                </div>
            </div>
            <!--start here-->
            <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="mainpage.php"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Belts</h4></a></div>
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
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscbeltsofficialbelts.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Official Belts</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscbeltsofficialbelts.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Slim Belts</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscbeltsofficialbelts.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Leather Belts</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscbeltsofficialbelts.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;SuspenderBelts</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscbeltsofficialbelts.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Skinny Belts</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscbeltsofficialbelts.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Petite Belts</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscbeltsofficialbelts.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Buckle Belts</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscbeltsofficialbelts.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Fabric Belts</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscbeltsofficialbelts.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Belts</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpage.php" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Belts</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="border-bottom:1px solid black;">
                                    <ul class="list-group list-unstyled" style="line-height:3;margin-top:10px;">
                                        <li><a href="mainpage.php">Official belt</a></li>
                                        <li><a href="mainpage.php">Slim belt</a></li>
                                        <li><a href="mainpage.php">Leather belt</a></li>
                                        <li><a href="mainpage.php">Suspenders belt</a></li>
                                        <li><a href="mainpage.php">Skinny belt</a></li>
                                        <li><a href="mainpage.php">Petite belt</a></li>
                                        <li><a href="mainpage.php">Buckle belt</a></li>
                                        <li><a href="mainpage.php">Fabric belt</a></li>
                                        <li><a href="mainpage.php">Misc belts</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">

<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="others/miscbeltsslimbelts.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>Asscreed</h3> -->

                                        <!-- <p>Asscreed but not right here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/miscbeltssuspenderbelts.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>tom manenos</h3> -->
                                        <!-- <p>to be seen or not seen here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/miscbeltsfabricbelts.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/miscbeltsofficialbelts.gif" class="img-responsive">
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><p class="text-center text-uppercase">This is another banner</p></div>
            </div>
            <div class="row visible-sm visible-xs">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:5px;border:1px solid gainsboro;background-image:url(images/isht.jpg);background-size:100%;backgound-position:fixed;"><p class="text-center text-capitalize"><a href="#">Are you a designer or a trader? Wan't your items featured on our site?Get intouch</a></p>
                </div>
            </div>

            <!--Ends here -->

             <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="mainpage.php"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Dolls</h4></a></div>
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
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscdollsanimaldolls.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Barbie Dolls</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscdollsanimaldolls.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Vintage Dolls</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscdollsanimaldolls.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Rag Dolls</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscdollsanimaldolls.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;BittyBaby Dls</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscdollsanimaldolls.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Fluffy Dolls</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscdollsanimaldolls.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Bratz Dolls</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscdollsanimaldolls.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;CornHusk Dls</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscdollsanimaldolls.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;China Dolls</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscdollsanimaldolls.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Dolls</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpage.php" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Dolls</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="border-bottom:1px solid black;">
                                    <ul class="list-group list-unstyled" style="line-height:3;margin-top:10px;">
                                        <li><a href="mainpage.php?search=dolls&&sub=sportswear">Barbie dolls</a></li>
                                        <li><a href="mainpage.php?search=dolls&&sub=mens">Vintage dolls</a></li>
                                        <li><a href="mainpage.php?search=dolls&&sub=womens">Rag doll</a></li>
                                        <li><a href="mainpage.php?search=dolls&&sub=kids">Bitty baby dolls</a></li>
                                        <li><a href="mainpage.php?search=dolls&&sub=households">Fluffy dolls</a></li>
                                        <li><a href="mainpage.php?search=dolls&&sub=interiors">Bratz dolls</a></li>
                                        <li><a href="mainpage.php?search=dolls&&sub=bags">Corn husk dolls</a></li>
                                        <li><a href="mainpage.php?search=dolls&&sub=shoes">China dolls</a></li>
                                        <li><a href="mainpage.php?search=dolls&&sub=misc">Misc</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">

<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="others/miscdollscartoondolls.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>Asscreed</h3> -->

                                        <!-- <p>Asscreed but not right here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/miscdollsanimaldolls.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>tom manenos</h3> -->
                                        <!-- <p>to be seen or not seen here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/miscdollsfluffydolls.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/miscdollsragdoll.gif" class="img-responsive">
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
                                    <div class="row" id="boxofficial">
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><p class="text-center text-uppercase">This is another banner</p></div>
            </div>
            <div class="row visible-sm visible-xs">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:5px;border:1px solid gainsboro;background-image:url(images/isht.jpg);background-size:100%;backgound-position:fixed;"><p class="text-center text-capitalize"><a href="#">Are you a designer or a trader? Wan't your items featured on our site?Get intouch</a></p>
                </div>
            </div>

            <!--Ends here -->

             <!--start here-->
            <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="mainpage.php"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Slippers</h4></a></div>
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
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscslipperstoelessslippers.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Flip Flops</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscslipperstoelessslippers.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;House Slippers</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscslipperstoelessslippers.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Denim Slippers</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscslipperstoelessslippers.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Pedicure Slps</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscslipperstoelessslippers.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Disposable</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscslipperstoelessslippers.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Craft Straw</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscslipperstoelessslippers.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Ordinary Slps</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscslipperstoelessslippers.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Toe-less Slps</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscslipperstoelessslippers.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Slippers</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpage.php" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Slippers</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="border-bottom:1px solid black;">
                                    <ul class="list-group list-unstyled" style="line-height:3;margin-top:10px;">
                                        <li><a href="mainpage.php?search=slippery&&sub=sportswear">Flip flops</a></li>
                                        <li><a href="mainpage.php?search=slippery&&sub=Mens">House slippers</a></li>
                                        <li><a href="mainpage.php?search=slippery&&sub=Womens">Denim fabric slippers  </a></li>
                                        <li><a href="mainpage.php?search=slippery&&sub=Kids">Pedicure slippers</a></li>
                                        <li><a href="mainpage.php?search=slippery&&sub=Households">Disposable slippers </a></li>
                                        <li><a href="mainpage.php?search=slippery&&sub=Interiors">Craft straw </a></li>
                                        <li><a href="mainpage.php?search=slippery&&sub=Bags">ordinary slippers</a></li>
                                        <li><a href="mainpage.php?search=slippery&&sub=Shoes">Toe-less slippers</a></li>
                                        <li><a href="mainpage.php?search=slippery&&sub=Misc">Misc slippers</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="others/miscslippersflipflops.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>Asscreed</h3> -->

                                        <!-- <p>Asscreed but not right here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/miscslippershouseslippers.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>tom manenos</h3> -->
                                        <!-- <p>to be seen or not seen here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/miscslippersordinaryslippers.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/miscslipperstoelessslippers.gif" class="img-responsive">
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
            <div class="row visible-lg visible-md" style="margin-top:20px;border:1px solid black;padding:20px;background-image:url(images/asscreed.jpg);background-size:100%;backgound-position:fixed;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><p class="text-center text-uppercase">This is another banner</p></div>
            </div>
            <div class="row visible-sm visible-xs">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:5px;border:1px solid gainsboro;background-image:url(images/isht.jpg);background-size:100%;backgound-position:fixed;"><p class="text-center text-capitalize"><a href="#">Are you a designer or a trader? Wan't your items featured on our site?Get intouch</a></p>
                </div>
            </div>

            <!--Ends here -->

             <!--start here-->
            <div class="row" style="margin-top:30px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="mainpage.php"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Hats</h4></a></div>
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
                            <a href="mainpage.php" class="list-group-item"><img src="others/mischats.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;BaseBall Caps</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/mischats.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Beanies</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/mischats.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Flat Caps</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/mischats.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Sun Hats</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/mischats.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Fedora Hats</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/mischats.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Bucket Hats</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/mischats.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Beret Hats</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/mischats.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Bowler Hats</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/mischats.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Hats</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpage.php" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Hats</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="border-bottom:1px solid black;">
                                    <ul class="list-group list-unstyled" style="line-height:3;margin-top:10px;">
                                        <li><a href="mainpage.php?search=caps&&sub=sportswear">Base ball caps</a></li>
                                        <li><a href="mainpage.php?search=caps&&sub=mens">Beanie caps</a></li>
                                        <li><a href="mainpage.php?search=caps&&sub=womens">Flat caps</a></li>
                                        <li><a href="mainpage.php?search=caps&&sub=kids">Sun hat</a></li>
                                        <li><a href="mainpage.php?search=caps&&sub=households">Fedora</a></li>
                                        <li><a href="mainpage.php?search=caps&&sub=interiors">Bucket hats</a></li>
                                        <li><a href="mainpage.php?search=caps&&sub=bags">Beret</a></li>
                                        <li><a href="mainpage.php?search=caps&&sub=shoes">Bowler</a></li>
                                        <li><a href="mainpage.php?search=caps&&sub=misc">Misc hats</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="others/mischatsfedorahats.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>Asscreed</h3> -->

                                        <!-- <p>Asscreed but not right here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/mischatsbaseballcaps.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>tom manenos</h3> -->
                                        <!-- <p>to be seen or not seen here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/mischatsbeniecaps.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/mischatssunhats.gif" class="img-responsive">
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
            <div class="row visible-lg visible-md" style="margin-top:20px;border:1px solid black;padding:20px;background-image:url(images/asscreed.jpg);background-size:100%;backgound-position:fixed;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><p class="text-center text-uppercase">This is another banner</p></div>
            </div>
            <div class="row visible-sm visible-xs">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:5px;border:1px solid gainsboro;background-image:url(images/isht.jpg);background-size:100%;backgound-position:fixed;"><p class="text-center text-capitalize"><a href="#">Are you a designer or a trader? Wan't your items featured on our site?Get intouch</a></p>
                </div>
            </div>

            <!--Ends here -->

             <!--start here-->
            <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="mainpage.php"><h4 class="text-uppercase" style="color:white;font-weight:bold;">sandals</h4></a></div>
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
<!--                            <a href="mainpage.php" class="list-group-item"><img src="others/miscsandalshandmadesandals.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Leather Sandals</a>-->
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscsandalshandmadesandals.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Gladiatiors</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscsandalshandmadesandals.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Hand-made</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscsandalshandmadesandals.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Summer S</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscsandalshandmadesandals.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;AnkleStrap S</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscsandalshandmadesandals.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;NewBalance S</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscsandalshandmadesandals.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Flip Flops</a>
                            <a href="labels.php" class="list-group-item"><img src="others/miscsandalshandmadesandals.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Massimo S</a>
                            <a href="misc.php" class="list-group-item"><img src="others/miscsandalshandmadesandals.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Sandals</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpage.php" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Sandals</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="border-bottom:1px solid black;">
                                    <ul class="list-group list-unstyled" style="line-height:3;margin-top:10px;">
                                        <li><a href="mainpage.php?search=sandals&&sub=sporstwear">Leather sandals</a></li>
                                        <li><a href="mainpage.php?search=sandals&&sub=mens">Gladiator sandals</a></li>
                                        <li><a href="mainpage.php?search=sandals&&sub=womens">hand made sandals</a></li>
                                        <li><a href="mainpage.php?search=sandals&&sub=kids">Summer sandals</a></li>
                                        <li><a href="mainpage.php?search=sandals&&sub=households">Ankle strap sandals</a></li>
                                        <li><a href="mainpage.php?search=sandals&&sub=interiors">New balance sandals</a></li>
                                        <li><a href="mainpage.php?search=sandals&&sub=bags">Fit flop sandas</a></li>
                                        <li><a href="mainpage.php?search=sandals&&sub=shoes">Massimo Matteo sandals</a></li>
                                        <li><a href="mainpage.php?search=sandals&&sub=misc">Misc sandals</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="others/miscsandalshandmadesandals.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>Asscreed</h3> -->

                                        <!-- <p>Asscreed but not right here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/miscsandalsgladiatorsandals.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>tom manenos</h3> -->
                                        <!-- <p>to be seen or not seen here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/miscsandalsleathersandals.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/miscsandalsmassimomatteosandals.gif" class="img-responsive">
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
            <div class="row visible-lg visible-md" style="margin-top:20px;border:1px solid black;padding:20px;background-image:url(images/asscreed.jpg);background-size:100%;backgound-position:fixed;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><p class="text-center text-uppercase">This is another banner</p></div>
            </div>
            <div class="row visible-sm visible-xs">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:5px;border:1px solid gainsboro;background-image:url(images/isht.jpg);background-size:100%;backgound-position:fixed;"><p class="text-center text-capitalize"><a href="#">Are you a designer or a trader? Wan't your items featured on our site?Get intouch</a></p>
                </div>
            </div>
            <!--Ends here -->

             <!--start here-->
            <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-md visible-lg">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="mainpage.php"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Underwears</h4></a></div>
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
                            <a href="mainpage.php" class="list-group-item"><img src="icons/sportsbraicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Sports Bras</a>
                            <a href="mainpage.php" class="list-group-item"><img src="icons/sportsbraicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Stockings</a>
                            <a href="mainpage.php" class="list-group-item"><img src="icons/sportsbraicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Ordinary Bras</a>
                            <a href="mainpage.php" class="list-group-item"><img src="icons/sportsbraicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Push up Bras</a>
                            <a href="mainpage.php" class="list-group-item"><img src="icons/sportsbraicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Strapless Bras</a>
                            <a href="mainpage.php" class="list-group-item"><img src="icons/sportsbraicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Corset</a>
                            <a href="mainpage.php" class="list-group-item"><img src="icons/sportsbraicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Bikers</a>
                            <a href="mainpage.php" class="list-group-item"><img src="icons/sportsbraicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Underwire Bs</a>
                            <a href="mainpage.php" class="list-group-item"><img src="icons/sportsbraicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpage.php" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Underwears</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="border-bottom:1px solid black;">
                                    <ul class="list-group list-unstyled" style="line-height:3;margin-top:10px;">
                                        <li><a href="mainpage.php?search=Benies&&sub=sportswear">Sports bras</a></li>
                                        <li><a href="mainpage.php?search=Benies&&sub=mens">Stockings</a></li>
                                        <li><a href="mainpage.php?search=Benies&&sub=womens">Thongs</a></li>
                                        <li><a href="mainpage.php?search=Benies&&sub=kids">Push up bras</a></li>
                                        <li><a href="mainpage.php?search=Benies&&sub=households">Strapless bras</a></li>
                                        <li><a href="mainpage.php?search=Benies&&sub=interiors">Corset</a></li>
                                        <li><a href="mainpage.php?search=Benies&&sub=bags">Bikers</a></li>
                                        <li><a href="mainpage.php?search=Benies&&sub=shoes">Underwire bras</a></li>
                                        <li><a href="mainpage.php?search=Benies&&sub=misc">Misc</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="others/miscunderwearsportsbras.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>Asscreed</h3> -->

                                        <!-- <p>Asscreed but not right here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/miscunderwearbikers.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>tom manenos</h3> -->
                                        <!-- <p>to be seen or not seen here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/miscunderwearcorsets.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/miscunderwearbikers.gif" class="img-responsive">
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
                                    <div class="row" id="boxblazers">
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><p class="text-center text-uppercase">This is another banner</p></div>
            </div>
            <div class="row visible-sm visible-xs">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:5px;border:1px solid gainsboro;background-image:url(images/isht.jpg);background-size:100%;backgound-position:fixed;"><p class="text-center text-capitalize"><a href="#">Are you a designer or a trader? Wan't your items featured on our site?Get intouch</a></p>
                </div>
            </div>

            <!--Ends here -->

             <!--start here-->
           <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="mainpage.php"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Socks</h4></a></div>
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
                            <a href="mainpage.php" class="list-group-item"><img src="icons/sockicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Sports Socks</a>
                            <a href="mainpage.php" class="list-group-item"><img src="icons/sockicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Ankle Socks</a>
                            <a href="mainpage.php" class="list-group-item"><img src="icons/sockicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Official Socks</a>
                            <a href="mainpage.php" class="list-group-item"><img src="icons/sockicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Warm Socks</a>
                            <a href="mainpage.php" class="list-group-item"><img src="icons/sockicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Doll-Shoe S</a>
                            <a href="mainpage.php" class="list-group-item"><img src="icons/sockicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Liner Socks</a>
                            <a href="mainpage.php" class="list-group-item"><img src="icons/sockicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Low-cut Socks</a>
                            <a href="mainpage.php" class="list-group-item"><img src="icons/sockicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Executive S</a>
                            <a href="mainpage.php" class="list-group-item"><img src="icons/sockicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Socks</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpage.php" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Socks</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-md visible-lg" style="border-bottom:1px solid black;">
                                    <ul class="list-group list-unstyled" style="line-height:3;margin-top:10px;">
                                        <li><a href="mainpage.php?search=shoals&&sub=sportswear">Sports socks</a></li>
                                        <li><a href="mainpage.php?search=shoals&&sub=mens">Ankle socks</a></li>
                                        <li><a href="mainpage.php?search=shoals&&sub=womens">official socks</a></li>
                                        <li><a href="mainpage.php?search=shoals&&sub=kids">Warm socks</a></li>
                                        <li><a href="mainpage.php?search=shoals&&sub=households">Doll shoe socks</a></li>
                                        <li><a href="mainpage.php?search=shoals&&sub=interiors">liner socks</a></li>
                                        <li><a href="mainpage.php?search=shoals&&sub=bags">Low cut socks</a></li>
                                        <li><a href="mainpage.php?search=shoals&&sub=shoes">Executive socks</a></li>
                                        <li><a href="mainpage.php?search=shoals&&sub=misc">Misc socks</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="others/miscsocksdollshoesocks.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>Asscreed</h3> -->

                                        <!-- <p>Asscreed but not right here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/miscsocksofficialsocks.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>tom manenos</h3> -->
                                        <!-- <p>to be seen or not seen here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/miscsocksanklesocks.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/miscsockswarmsocks.gif" class="img-responsive">
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
            <div class="row visible-lg visible-md" style="margin-top:20px;border:1px solid black;padding:20px;background-image:url(images/asscreed.jpg);background-size:100%;backgound-position:fixed;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><p class="text-center text-uppercase">This is another banner</p></div>
            </div>
            <div class="row visible-sm visible-xs">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:5px;border:1px solid gainsboro;background-image:url(images/isht.jpg);background-size:100%;backgound-position:fixed;"><p class="text-center text-capitalize"><a href="#">Are you a designer or a trader? Wan't your items featured on our site?Get intouch</a></p>
                </div>
            </div>

            <!--Ends here -->

             <!--start here-->
           <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="mainpage.php"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Fabrics</h4></a></div>
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
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscfabricsjutefabric.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Cotton Fabrics</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscfabricsjutefabric.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Silk Fabrics</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscfabricsjutefabric.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Linen Fabrics</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscfabricsjutefabric.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Wool Fabrics</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscfabricsjutefabric.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Jute Fabrics</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscfabricsjutefabric.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Ramie Fabrics</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscfabricsjutefabric.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Hemp Fabrics</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscfabricsjutefabric.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Chiffon Fabrics</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscfabricsjutefabric.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Fabrics</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpage.php" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Fabrics</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="border-bottom:1px solid black;">
                                    <ul class="list-group list-unstyled" style="line-height:3;margin-top:10px;">
                                        <li><a href="mainpage.php?search=fabrics&&sub=sportswear">Cotton Fabric</a></li>
                                        <li><a href="mainpage.php?search=fabrics&&sub=mens">Silk Fabric</a></li>
                                        <li><a href="mainpage.php?search=fabrics&&sub=womens">Linen fabric</a></li>
                                        <li><a href="mainpage.php?search=fabrics&&sub=kids">Wool Fabric</a></li>
                                        <li><a href="mainpage.php?search=fabrics&&sub=households">Jute Fabric</a></li>
                                        <li><a href="mainpage.php?search=fabrics&&sub=interiors">Ramie Fabric</a></li>
                                        <li><a href="mainpage.php?search=fabrics&&sub=bags">Hemp Fabric</a></li>
                                        <li><a href="mainpage.php?search=fabrics&&sub=shoes">Chiffon Fabric</a></li>
                                        <li><a href="mainpage.php?search=fabrics&&sub=misc">Misc Fabrics</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="others/miscfabricscottonfabrics.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>Asscreed</h3> -->

                                        <!-- <p>Asscreed but not right here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/miscfabricshempfabrics.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>tom manenos</h3> -->
                                        <!-- <p>to be seen or not seen here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/miscfabricswoolfabric.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/miscfabricsjutefabric.gif" class="img-responsive">
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><p class="text-center text-uppercase">This is another banner</p></div>
            </div>
            <div class="row visible-sm visible-xs">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:5px;border:1px solid gainsboro;background-image:url(images/isht.jpg);background-size:100%;backgound-position:fixed;"><p class="text-center text-capitalize"><a href="#">Are you a designer or a trader? Wan't your items featured on our site?Get intouch</a></p>
                </div>
            </div>

            <!--Ends here -->

             <!--start here-->
            <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="misc.php"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Misc</h4></a></div>
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
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscmischeadbands.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Bandanas</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscmischeadbands.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Head Bands</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscmischeadbands.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Gloves</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscmischeadbands.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Toys</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscmischeadbands.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Socks</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscmischeadbands.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Scarfs</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscmischeadbands.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Laces</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscmischeadbands.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Bags</a>
                            <a href="mainpage.php" class="list-group-item"><img src="others/miscmischeadbands.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpage.php" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Misc</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="border-bottom:1px solid black;">
                                    <ul class="list-group list-unstyled" style="line-height:3;margin-top:10px;">
                                        <li><a href="mainpage.php">Bandanas</a></li>
                                        <li><a href="mainpage.php">Headbands</a></li>
                                        <li><a href="mainpage.php">Gloves</a></li>
                                        <li><a href="mainpage.php">Toys</a></li>
                                        <li><a href="mainpage.php">Socks</a></li>
                                        <li><a href="mainpage.php">Scarf</a></li>
                                        <li><a href="mainpage.php">Bags</a></li>
                                        <li><a href="mainpage.php">laces</a></li>
                                        <li><a href="mainpage.php">Misc</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">


<!--            starts here-->
            <div class="row visible-md visible-lg">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="others/miscmiscgloves.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>Asscreed</h3> -->

                                        <!-- <p>Asscreed but not right here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/miscmiscbandanas.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>tom manenos</h3> -->
                                        <!-- <p>to be seen or not seen here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/miscmischeadbands.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/miscmiscscarfs.gif" class="img-responsive">
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><p class="text-center text-uppercase">This is another banner</p></div>
            </div>
            <div class="row visible-sm visible-xs">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:5px;border:1px solid gainsboro;background-image:url(images/isht.jpg);background-size:100%;backgound-position:fixed;"><p class="text-center text-capitalize"><a href="#">Are you a designer or a trader? Wan't your items featured on our site?Get intouch</a></p>
                </div>
            </div>

            <!--Ends here -->



            <!--Ends here -->

             <!--start here-->
            <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="mainpage.php"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Labels</h4></a></div>
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
                            <a href="mainpage.php" class="list-group-item"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Adidas</a>
                            <a href="mainpage.php" class="list-group-item"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Fubu</a>
                            <a href="mainpage.php" class="list-group-item"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Under-Armour</a>
                            <a href="mainpage.php" class="list-group-item"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Puma</a>
                            <a href="mainpage.php" class="list-group-item"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Kenya's Finest</a>
                            <a href="mainpage.php" class="list-group-item"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Calvin Klein</a>
                            <a href="mainpage.php" class="list-group-item"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Versace</a>
                            <a href="mainpage.php" class="list-group-item"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Nike</a>
                            <a href="mainpage.php" class="list-group-item"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Labels</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpage.php" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Labels</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="border-bottom:1px solid black;">
                                    <ul class="list-group list-unstyled" style="line-height:3;margin-top:10px;">
                                        <li><a href="mainpage.php?search=labels&&sub=sportswear">Adidas</a></li>
                                        <li><a href="mainpage.php?search=labels&&sub=mens">Fubu</a></li>
                                        <li><a href="mainpage.php?search=labels&&sub=womens">Under armour</a></li>
                                        <li><a href="mainpage.php?search=labels&&sub=kids">Puma</a></li>
                                        <li><a href="mainpage.php?search=labels&&sub=households">Kenya's finest</a></li>
                                        <li><a href="mainpage.php?search=labels&&sub=interiors">Calvin Klein</a></li>
                                        <li><a href="mainpage.php?search=labels&&sub=bags">Versace</a></li>
                                        <li><a href="mainpage.php?search=labels&&sub=shoes">Nike</a></li>
                                        <li><a href="mainpage.php?search=labels&&sub=misc">Misc labels</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="others/misclabelscalvinklein.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>Asscreed</h3> -->

                                        <!-- <p>Asscreed but not right here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/menslabelspuma.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>tom manenos</h3> -->
                                        <!-- <p>to be seen or not seen here</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/misclabelsfubu.gif" class="img-responsive">
                                    <div class="carousel-caption">
                                        <!-- <h3>cod manenos</h3> -->
                                        <!-- <p>call of duty down in the dm</p> -->
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="others/labelsnike.gif" class="img-responsive">
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><p class="text-center text-uppercase">This is another banner</p></div>
            </div>
            <div class="row visible-sm visible-xs">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:5px;border:1px solid gainsboro;background-image:url(images/isht.jpg);background-size:100%;backgound-position:fixed;"><p class="text-center text-capitalize"><a href="#">Are you a designer or a trader? Wan't your items featured on our site?Get intouch</a></p>
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
                                        <li><a style="color:black;" href="aboutus.php">Order status</a></li>
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

            <!--container ends here-->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><p class="text-center text-capitalize">A WN creation Copyright &#169 Airmark Inc.</p></div>
            </div>

        </div>


        <script>
//for image one
var myIndex = 0;
carousel();
// for image menslides
var myIndex2 = 0;
carousel2();
// for image womenslides
var myIndex3 = 0;
carousel3();
//for shoe slide
var myIndex4 = 0;
carousel4();
//kid slide
var myIndex5 = 0;
carousel5();
//sportswear slide
var myIndex6 = 0;
carousel6();
//bags slide
var myIndex7 = 0;
carousel7();
//interiors slide
var myIndex8 = 0;
carousel8();
//households slide
var myIndex9 = 0;
carousel9();
//miscs slide
var myIndex10 = 0;
carousel10();
//labels slide
var myIndex11 = 0;
carousel11();
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

          //belt loops down here
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
                    xmlhttp.open('GET','otherstoresbeltsloops.php',true);
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
            //dolls loop down here
            function womensloop(){
                $('.loaderImage').fadeIn(3000);
                if(window.XMLHttpRequest){
                    xmlhttp3 = new XMLHttpRequest();
                }else{
                    xmlhttp3 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp3.onreadystatechange = function(){
                if (xmlhttp3.readyState == 4 && xmlhttp3.status == 200){
                    document.getElementById('boxofficial').innerHTML= xmlhttp3.responseText;

                    }
                    }
                    xmlhttp3.open('GET','otherstoresdollsloops.php',true);
                    xmlhttp3.send();
           $('.loaderImage').fadeOut(3000);
                mensloop();

            }
            //caps loop here down
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
                    xmlhttp4.open('GET','otherstoreshatsloops.php',true);
                    xmlhttp4.send();
         $('.loaderImage').fadeOut(3000);
                kidsloop();

            }
            // slippers loop down here
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
                    xmlhttp5.open('GET','otherstoresslippersloops.php',true);
                    xmlhttp5.send();
        $('.loaderImage').fadeOut(3000);
                Householdsloop();

            }
            // sandals loops down here
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
                    xmlhttp6.open('GET','otherstoressandalsloops.php',true);
                    xmlhttp6.send();
      $('.loaderImage').fadeOut(3000);
                bagsloop();

            }
            //underwears going in here
            function bagsloop(){
                $('.loaderImage').fadeIn(3000);
                if(window.XMLHttpRequest){
                    xmlhttp7 = new XMLHttpRequest();
                }else{
                    xmlhttp7 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp7.onreadystatechange = function(){
                if (xmlhttp7.readyState == 4 && xmlhttp7.status == 200){
                    document.getElementById('boxblazers').innerHTML= xmlhttp7.responseText;

                    }
                    }
                    xmlhttp7.open('GET','otherstoresunderwearsloops.php',true);
                    xmlhttp7.send();
       $('.loaderImage').fadeOut(3000);
                shoesloop();

            }
            //socks going in here
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
                    xmlhttp8.open('GET','otherstoressocksloops.php',true);
                    xmlhttp8.send();
         $('.loaderImage').fadeOut(3000);
                labelsloop();

            }
            //fabrics to go in here
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
                    xmlhttp9.open('GET','otherstoresfabricsloops.php',true);
                    xmlhttp9.send();
        $('.loaderImage').fadeOut(3000);
                 miscsloop();

            }
            //misc misc loops to go in here
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
                    xmlhttp10.open('GET','otherstoresmiscsloops.php',true);
                    xmlhttp10.send();
       $('.loaderImage').fadeOut(3000);
                 interiorsloop();

            }
            //misc labels to go in here
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
                    xmlhttp11.open('GET','otherstoreslabelsloops.php',true);
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
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                 <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
            </div>

        </div>
    </body>
</html>
