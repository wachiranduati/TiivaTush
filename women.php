<?php
ob_start();
session_start();
require 'search.inc.php';
require 'looptemplater.php';

$century = 860;//Mtush
?>
<!DOCTYPE html>
<html>
<!--<title>Tiiva | Women</title>-->
<title>Tiiva Women's wear | Shop for Mtumba Women's wear on Tiiva </title>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php require 'templates/resourcelinks/headerlinks.php';?>

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
        <?php 
        require('templates/header.php');
        ?>
<div class="container">
    <?php
        require 'templates/pagetitle.php';
        echo pageTitle('WOMENSWEAR');
                ?>
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
                            <a href="manpage.php?search=sportswear&sub=male&page=1" target="_blank" class="list-group-item"><img src="others/womenssportswearshorts.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Sports</a>
                            <a href="manepage.php?search=officials&sub=male&page=1" target="_blank" class="list-group-item"><img src="others/womensofficialotherdress.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Official</a>
                            <a href="manepage.php?search=sweaters&sub=male&page=1" target="_blank" class="list-group-item"><img src="others/womenssweaterscardigans.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Sweaters</a>
                            <a href="manepage.php?search=shirts&sub=male&page=1" target="_blank" class="list-group-item"><img src="others/womenstops.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Tops</a>
                            <a href="manepage.php?search=blazers&sub=male&page=1" target="_blank" class="list-group-item"><img src="others/womensblazersdrapedblazers.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Blazers</a>
                            <a href="manepage.php?search=pants&sub=male&page=1" target="_blank" class="list-group-item"><img src="others/womenspantsskinnypants.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Pants</a>
                            <a href="mainpage.php?search=womens&sub=dresses&page=1" target="_blank" class="list-group-item"><img src="others/womensdressesankaradresses.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Dresses</a>
                            <a href="manpage.php?search=bags&sub=male&page=1" target="_blank" class="list-group-item"><img src="others/womensbagscrossbodybags.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Bags</a>
                            <a href="manpage.php?search=misc&sub=male&page=1" target="_blank" class="list-group-item"><img src="others/womensmischats.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mens.php" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Categories</h5></a>
                        </div>


                    </div>


            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border:1px solid white;">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md">

                        <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 categoriestopprnt">
                        <ul id="categories" style="line-height:2.5;padding-bottom:0;margin-bottom:2px;">
                            <li class="text-center" style="font-weight:bold;background-color:black;border:1px solid white;"><span style="color:orange;" class="text-uppercase text-center">Categories</span></li>
                            <li><a href="manpage.php?search=sportswear&sub=male&page=1" target="_blank"><img src="others/womenssportswearshorts.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Sports<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=officials&sub=male&page=1" target="_blank"><img src="others/womensofficialotherdress.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Official<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=sweaters&sub=male&page=1" target="_blank"><img src="others/womenssweaterscardigans.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Sweaters<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=shirts&sub=male&page=1" target="_blank"><img src="others/womenstops.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Tops<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=blazers&sub=male&page=1" target="_blank"><img src="others/womensblazersdrapedblazers.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Blazers<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=pants&sub=male&page=1" target="_blank"><img src="others/womenspantsskinnypants.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Pants<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=womens&sub=dresses&page=1" target="_blank"><img src="others/womensdressesankaradresses.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Dresses<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manpage.php?search=bags&sub=male&page=1" target="_blank"><img src="others/womensbagscrossbodybags.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Bags<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manpage.php?search=misc&sub=male&page=1" target="_blank"><img src="others/womensmischats.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Misc<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="padding:0px;">


                        <!--            starts here-->
                                    <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <?php require 'templates/carousels/carousels.php'; echo mainCarousels('imageone.png', 'imagetwo.png', 'imagethree.png', 'imagefour.png');?>
                            </div>
                        </div>
                        <!--            ends here-->


                    </div>

                    <!--                    START OF RIGHTSIDE CONTAINER-->
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">
                                                            <?php echo offersCarousels('imageone.png', 'imagetwo.png', 'imagethree.png', 'imagefour.png', 349);?>
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
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6  featurediv"><a href="mainpage.php?search=womens&sub=dresses&page=1"><img src="banners/categories/womensdresses.png" class="img-responsive featured"/></a></div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6  featurediv"><a href="manepage.php?search=shirts&sub=male&page=1"><img src="banners/categories/womenstops.png" class="img-responsive featured"/></a></div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6  featurediv"><a href="manpage.php?search=bags&sub=male&page=1"><img src="banners/categories/womensbags.png" class="img-responsive featured"/></a></div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6  featurediv"><a href="manepage.php?search=blazers&sub=male&page=1"><img src="banners/categories/womensjackets.png" class="img-responsive featured"/></a></div>
            </div>

            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin-top:1%;">
                    <a href="index.php">
                        <img src="banners/different.png" class="img-responsive bannerlg"/>
                    </a>
                </div>
            </div>
            <!--start here-->
            <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a href="manpage.php?search=sportswear&sub=male&page=1" class="btn btn-block"><h4 class="text-uppercase" style="color:white;"><strong>Sportswear</strong></h4></a></div>
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
                            <a href="manpage.php?search=sportswear&sub=male&page=1" class="list-group-item"><img src="icons/runningicons.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp; Pants</a>
                            <a href="manpage.php?search=sportswear&sub=male&page=1" class="list-group-item"><img src="icons/runningicons.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp; Shorts</a>
                            <a href="manpage.php?search=sportswear&sub=male&page=1" class="list-group-item"><img src="icons/runningicons.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp; Shirts</a>
                            <a href="manpage.php?search=sportswear&sub=male&page=1" class="list-group-item"><img src="icons/runningicons.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp; Shoes</a>
                            <a href="manpage.php?search=sportswear&sub=male&page=1" class="list-group-item"><img src="icons/runningicons.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Underwears</a>
                            <a href="manpage.php?search=sportswear&sub=male&page=1" class="list-group-item"><img src="icons/runningicons.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp; Socks</a>
                            <a href="manpage.php?search=sportswear&sub=male&page=1" class="list-group-item"><img src="icons/runningicons.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp; Jackets</a>
                            <a href="manpage.php?search=sportswear&sub=male&page=1" class="list-group-item"><img src="icons/runningicons.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp; Leggings</a>
                            <a href="manpage.php?search=sportswear&sub=male&page=1" class="list-group-item"><img src="icons/runningicons.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="manpage.php?search=sportswear&sub=male&page=1" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Sportswear</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 categoriestopprnt">
                        <ul id="categories">

                            <li><a href="manpage.php?search=sportswear&sub=male&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;pants<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manpage.php?search=sportswear&sub=male&page=1" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;shorts<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manpage.php?search=sportswear&sub=male&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;shirts<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manpage.php?search=sportswear&sub=male&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;shoes<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manpage.php?search=sportswear&sub=male&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;underwear<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manpage.php?search=sportswear&sub=male&page=1" target="_blank"><img src="icons/backpackicons.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;socks<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manpage.php?search=sportswear&sub=male&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;jackets<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manpage.php?search=sportswear&sub=male&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Leggings<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manpage.php?search=sportswear&sub=male&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;misc<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">

<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php echo groupedCarousels('womenssportswearshorts.gif', 'womenssportswearsocks.gif', 'womenssportswearpants.gif', 'womenssportswearunderwears.gif', 498);?>
                </div>
            </div>
<!--            ends here-->

                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;border-bottom:1px solid gainsboro;">
                                    <?php echo spinnersHolder('boxwomenssportswear');?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin-top:1%;">
                    <a href="index.php">
                        
<img src="banners/varietytwo.png" class="img-responsive bannerlg"/>

                    </a>
                </div>
            </div>

            <!--Ends here -->

             <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="manepage.php?search=officials&sub=male&page=1"><h4 class="text-uppercase" style="color:white;font-weight:bold;">formal wear</h4></a></div>
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
                            <a href="manepage.php?search=officials&sub=male&page=1" class="list-group-item"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Blouses</a>
                            <a href="manepage.php?search=officials&sub=male&page=1" class="list-group-item"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Dresses</a>
                            <a href="manepage.php?search=officials&sub=male&page=1" class="list-group-item"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Blazers</a>
                            <a href="manepage.php?search=officials&sub=male&page=1" class="list-group-item"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Formal Shoes</a>
                            <a href="manepage.php?search=officials&sub=male&page=1" class="list-group-item"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Formal Scarfs</a>
                            <a href="manepage.php?search=officials&sub=male&page=1" class="list-group-item"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Formal Shoals</a>
                            <a href="manepage.php?search=officials&sub=male&page=1" class="list-group-item"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Formal Skirts</a>
                            <a href="manepage.php?search=officials&sub=male&page=1" class="list-group-item"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Trousers</a>
                            <a href="manepage.php?search=officials&sub=male&page=1" class="list-group-item"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc formal wear</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="manepage.php?search=officials&sub=male&page=1" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">formal wear</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 categoriestopprnt">
                        <ul id="categories">

                            <li><a href="manepage.php?search=officials&sub=male&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;blouses<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=officials&sub=male&page=1" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;dresses<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=officials&sub=male&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;blazers<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=officials&sub=male&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;shoes<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=officials&sub=male&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;scarfs<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=officials&sub=male&page=1" target="_blank"><img src="icons/backpackicons.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;shoals<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=officials&sub=male&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;skirts<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=officials&sub=male&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;trousers<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=officials&sub=male&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;misc formal wear<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">

<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php echo groupedCarousels('womensofficialdresses.gif', 'womensofficialtrousers.gif', 'womensofficialotherdress.gif', 'womensofficialblouses.gif', 498);?>
                </div>
            </div>
<!--            ends here-->

                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-bottom:1px solid gainsboro;border-top:1px solid gainsboro;">
                                    <?php echo spinnersHolder('boxwomensformalwear');?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin-top:1%;">
                    <a href="merchantreg.php">
                        <img src="banners/merchant.png" class="img-responsive bannerlg"/>
                    </a>
                </div>
            </div>

            <!--Ends here -->

             <!--start here-->
            <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-md visible-lg">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="manepage.php?search=sweaters&sub=male&page=1"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Sweaters</h4></a></div>
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
                            <a href="manepage.php?search=sweaters&sub=male&page=1" class="list-group-item"><img src="icons/sweatericon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Cardigans</a>
                            <a href="manepage.php?search=sweaters&sub=male&page=1" class="list-group-item"><img src="icons/sweatericon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Shrugs</a>
                            <a href="manepage.php?search=sweaters&sub=male&page=1" class="list-group-item"><img src="icons/sweatericon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Plain Swtrs</a>
                            <a href="manepage.php?search=sweaters&sub=male&page=1" class="list-group-item"><img src="icons/sweatericon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Sweatshirts</a>
                            <a href="manepage.php?search=sweaters&sub=male&page=1" class="list-group-item"><img src="icons/sweatericon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Hoodies</a>
                            <a href="manepage.php?search=sweaters&sub=male&page=1" class="list-group-item"><img src="icons/sweatericon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Trenchcoats</a>
                            <a href="manepage.php?search=sweaters&sub=male&page=1" class="list-group-item"><img src="icons/sweatericon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;TurtleKnecks</a>
                            <a href="manepage.php?search=sweaters&sub=male&page=1" class="list-group-item"><img src="icons/sweatericon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Softspun</a>
                            <a href="manepage.php?search=sweaters&sub=male&page=1" class="list-group-item"><img src="icons/sweatericon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Sweaters</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="manepage.php?search=sweaters&sub=male&page=1" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Sweaters</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 categoriestopprnt">
                        <ul id="categories">

                            <li><a href="manepage.php?search=sweaters&sub=male&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;cardigans<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=sweaters&sub=male&page=1" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;shrugs<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=sweaters&sub=male&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;plain sweaters<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=sweaters&sub=male&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;hoodies<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=sweaters&sub=male&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;trench coats<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=sweaters&sub=male&page=1" target="_blank"><img src="icons/backpackicons.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;turtlenecks<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=sweaters&sub=male&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;softspun<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=sweaters&sub=male&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;misc sweaters<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=sweaters&sub=male&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;All Sweaters<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php echo groupedCarousels('womenssweaterscardigans.gif', 'womenssweatersplainsweaters.gif', 'womenssweatershoodies.gif', 'womenssweaterstrenchcoats.gif', 498);?>
                </div>
            </div>
<!--            ends here-->


                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;border-bottom:1px solid gainsboro;">
                                    <?php echo spinnersHolder('boxwomenssweaters');?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin-top:1%;">
                    <a href="index.php">
                        <img src="banners/outdoors.png" class="img-responsive bannerlg"/>
                    </a>
                </div>
            </div>

            <!--Ends here -->

             <!--start here-->
            <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="manepage.php?search=shirts&sub=male&page=1"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Tops</h4></a></div>
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
                            <a href="manepage.php?search=shirts&sub=male&page=1" class="list-group-item"><img src="icons/tshirtsfemaleicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Blouses</a>
                            <a href="manepage.php?search=shirts&sub=male&page=1" class="list-group-item"><img src="icons/tshirtsfemaleicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Tshirts</a>
                            <a href="manepage.php?search=shirts&sub=male&page=1" class="list-group-item"><img src="icons/tshirtsfemaleicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Vests</a>
                            <a href="manepage.php?search=shirts&sub=male&page=1" class="list-group-item"><img src="icons/tshirtsfemaleicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Crop tops</a>
                            <a href="manepage.php?search=shirts&sub=male&page=1" class="list-group-item"><img src="icons/tshirtsfemaleicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Peplum</a>
                            <a href="manepage.php?search=shirts&sub=male&page=1" class="list-group-item"><img src="icons/tshirtsfemaleicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Polo</a>
                            <a href="manepage.php?search=shirts&sub=male&page=1" class="list-group-item"><img src="icons/tshirtsfemaleicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Tuxedo</a>
                            <a href="manepage.php?search=shirts&sub=male&page=1" class="list-group-item"><img src="icons/tshirtsfemaleicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Henley</a>
                            <a href="manepage.php?search=shirts&sub=male&page=1" class="list-group-item"><img src="icons/tshirtsfemaleicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Tops</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="manepage.php?search=shirts&sub=male&page=1" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Tops</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 categoriestopprnt">
                        <ul id="categories">

                            <li><a href="manepage.php?search=shirts&sub=male&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;tshirts<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=shirts&sub=male&page=1" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;vests<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=shirts&sub=male&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;crop tops<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=shirts&sub=male&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;peplum<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=shirts&sub=male&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;polo<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=shirts&sub=male&page=1" target="_blank"><img src="icons/backpackicons.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;tuxedo<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=shirts&sub=male&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;henley<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=shirts&sub=male&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;misc tops<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=shirts&sub=male&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Labels<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php echo groupedCarousels('womenstopscroptops.gif', 'womenstopspeplums.gif', 'womenstopstshirts.gif', 'womenstopsvests.gif', 498);?>
                </div>
            </div>
<!--            ends here-->


                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;border-bottom:1px solid gainsboro;">
                                    <?php echo spinnersHolder('boxwomenstops');?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin-top:1%;">
                    <a href="index.php">
                        <img src="banners/mtumbanner.png" class="img-responsive bannerlg"/>
                    </a>
                </div>
            </div>

            <!--Ends here -->

             <!--start here-->
            <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="manepage.php?search=pants&sub=male&page=1"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Pants</h4></a></div>
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
                            <a href="manepage.php?search=pants&sub=male&page=1" class="list-group-item"><img src="icons/womenspants.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Jumpsuits</a>
                            <a href="manepage.php?search=pants&sub=male&page=1" class="list-group-item"><img src="icons/womenspants.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Harem Pants</a>
                            <a href="manepage.php?search=pants&sub=male&page=1" class="list-group-item"><img src="icons/womenspants.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Jeans</a>
                            <a href="manepage.php?search=pants&sub=male&page=1" class="list-group-item"><img src="icons/womenspants.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Khaki Pants</a>
                            <a href="manepage.php?search=pants&sub=male&page=1" class="list-group-item"><img src="icons/womenspants.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Sweatpants</a>
                            <a href="manepage.php?search=pants&sub=male&page=1" class="list-group-item"><img src="icons/womenspants.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Highwasit Ps</a>
                            <a href="manepage.php?search=pants&sub=male&page=1" class="list-group-item"><img src="icons/womenspants.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Skinny Pants</a>
                            <a href="manepage.php?search=pants&sub=male&page=1" class="list-group-item"><img src="icons/womenspants.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Cargo Pants</a>
                            <a href="manepage.php?search=pants&sub=male&page=1" class="list-group-item"><img src="icons/womenspants.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Pants</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="manepage.php?search=pants&sub=male&page=1" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Pants</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 categoriestopprnt">
                        <ul id="categories">

                            <li><a href="manepage.php?search=pants&sub=male&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;jumsuits<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=pants&sub=male&page=1" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;harem pants<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=pants&sub=male&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;jeans pants<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=pants&sub=male&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;khaki pants<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=pants&sub=male&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;sweat pants<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=pants&sub=male&page=1" target="_blank"><img src="icons/backpackicons.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;highwaist pants<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=pants&sub=male&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;skinny pants<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=pants&sub=male&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;cargo pants<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=pants&sub=male&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;misc pants<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php echo groupedCarousels('womenspantshighwaistpants.gif', 'womenspantsharempants.gif', 'womenspantsskinnypants.gif', 'womenspantsjumpsuits.gif', 498);?>
                </div>
            </div>
<!--            ends here-->


                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-bottom:1px solid gainsboro;border-top:1px solid gainsboro;">
                                    <?php echo spinnersHolder('boxwomenspants');?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin-top:1%;">
                    <a href="sportswear.php">
                        <img src="banners/outdoors.png" class="img-responsive bannerlg"/>
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
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 featurediv"><a href="manpage.php?search=sportswear&sub=male&page=1"><img src="banners\categories\womenssportswear.png" class="img-responsive featured"/></a></div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 featurediv"><a href="manepage.php?search=officials&sub=male&page=1"><img src="banners\categories\womensformalwear.png" class="img-responsive featured"/></a></div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 featurediv"><a href="manepage.php?search=sweaters&sub=male&page=1"></h5><img src="banners\categories\womenssweaters.png" class="img-responsive featured"/></a></div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 featurediv"><a href="manepage.php?search=pants&sub=male&page=1"><img src="banners\categories\womenspants.png" class="img-responsive featured"/></a></div>
            </div>

             <!--start here-->
            <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-md visible-lg">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="manepage.php?search=blazers&sub=male&page=1"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Blazers</h4></a></div>
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
                            <a href="manepage.php?search=blazers&sub=male&page=1" class="list-group-item"><img src="icons/coaticon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Boyfriend Bs</a>
                            <a href="manepage.php?search=blazers&sub=male&page=1" class="list-group-item"><img src="icons/coaticon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Fitted Blazers</a>
                            <a href="manepage.php?search=blazers&sub=male&page=1" class="list-group-item"><img src="icons/coaticon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Draped Bs</a>
                            <a href="manepage.php?search=blazers&sub=male&page=1" class="list-group-item"><img src="icons/coaticon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Bomber Jckts</a>
                            <a href="manepage.php?search=blazers&sub=male&page=1" class="list-group-item"><img src="icons/coaticon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Peplum Bs</a>
                            <a href="manepage.php?search=blazers&sub=male&page=1" class="list-group-item"><img src="icons/coaticon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Military Bs</a>
                            <a href="manepage.php?search=blazers&sub=male&page=1" class="list-group-item"><img src="icons/coaticon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Denim Blazers</a>
                            <a href="manepage.php?search=blazers&sub=male&page=1" class="list-group-item"><img src="icons/coaticon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Tailored Bs</a>
                            <a href="manepage.php?search=blazers&sub=male&page=1" class="list-group-item"><img src="icons/coaticon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Blazers</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="manepage.php?search=blazers&sub=male&page=1" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Blazers</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 categoriestopprnt">
                        <ul id="categories">

                            <li><a href="manepage.php?search=blazers&sub=male&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;boyfriend B<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=blazers&sub=male&page=1" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;fitted blazers<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=blazers&sub=male&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;draped blazers<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=blazers&sub=male&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;bomber jackets<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=blazers&sub=male&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;peplum blazers<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=blazers&sub=male&page=1" target="_blank"><img src="icons/backpackicons.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;military blazers<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=blazers&sub=male&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;denim blazers<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=blazers&sub=male&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;tailored blazers<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=blazers&sub=male&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;misc blazers<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="border-top:1px solid gainsboro;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php echo groupedCarousels('womensblazersdrapedblazers.gif', 'womensblazersboyfriendblazers.gif', 'womensblazerspeplumblazers.gif', 'womensblazersbomberjackets.gif', 498);?>
                </div>
            </div>
<!--            ends here-->


                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;border-bottom:1px solid gainsboro;">
                                    <?php echo spinnersHolder('boxwomensblazers');?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin-top:1%;">
                    <a href="index.php">
                        <img src="banners/handcrafted.png" class="img-responsive bannerlg"/>
                    </a>
                </div>
            </div>

            <!--Ends here -->

             <!--start here-->
           <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="manepage.php?search=shorts&sub=male&page=1"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Shorts</h4></a></div>
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
                            <a href="manepage.php?search=shorts&sub=male&page=1" class="list-group-item"><img src="icons/runningshortsicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Hot Pants</a>
                            <a href="manepage.php?search=shorts&sub=male&page=1" class="list-group-item"><img src="icons/runningshortsicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Jump Shorts</a>
                            <a href="manepage.php?search=shorts&sub=male&page=1" class="list-group-item"><img src="icons/runningshortsicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Booty Shorts</a>
                            <a href="manepage.php?search=shorts&sub=male&page=1" class="list-group-item"><img src="icons/runningshortsicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Casual Shorts</a>
                            <a href="manepage.php?search=shorts&sub=male&page=1" class="list-group-item"><img src="icons/runningshortsicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Ankara Shorts</a>
                            <a href="manepage.php?search=shorts&sub=male&page=1" class="list-group-item"><img src="icons/runningshortsicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Denim Shorts</a>
                            <a href="manepage.php?search=shorts&sub=male&page=1" class="list-group-item"><img src="icons/runningshortsicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Pedal Pushers</a>
                            <a href="manepage.php?search=shorts&sub=male&page=1" class="list-group-item"><img src="icons/runningshortsicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Bermuda Ss</a>
                            <a href="manepage.php?search=shorts&sub=male&page=1" class="list-group-item"><img src="icons/runningshortsicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Shorts</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="manepage.php?search=shorts&sub=male&page=1" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Shorts</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 categoriestopprnt">
                        <ul id="categories">

                            <li><a href="manepage.php?search=shorts&sub=male&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;hot pants<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=shorts&sub=male&page=1" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;jump shorts<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=shorts&sub=male&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;booty shorts<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=shorts&sub=male&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;casual shorts<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=shorts&sub=male&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;ankara shorts<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=shorts&sub=male&page=1" target="_blank"><img src="icons/backpackicons.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;denim shorts<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=shorts&sub=male&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;pedal pushers<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=shorts&sub=male&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;bermuda shorts<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=shorts&sub=male&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;misc shorts<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php echo groupedCarousels('womensshortscasualshorts.gif', 'womensshortsbermudashorts.gif', 'womensshortshotpants.gif', 'womensshortsbootyshorts.gif', 498);?>
                </div>
            </div>
<!--            ends here-->


                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;border-bottom:1px solid gainsboro;">
                                    <?php echo spinnersHolder('boxwomensshorts');?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin-top:1%;">
                    <a href="index.php">
                        <img src="banners/different.png" class="img-responsive bannerlg"/>
                    </a>
                </div>
            </div>

            <!--Ends here -->

             <!--start here-->
           <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-md visible-lg">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="manpage.php?search=bags&sub=male&page=1"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Bags</h4></a></div>
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
                            <a href="manpage.php?search=bags&sub=male&page=1" class="list-group-item"><img src="icons/shoppingbagicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Crossbody Bs</a>
                            <a href="manpage.php?search=bags&sub=male&page=1" class="list-group-item"><img src="icons/shoppingbagicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Clutches</a>
                            <a href="manpage.php?search=bags&sub=male&page=1" class="list-group-item"><img src="icons/shoppingbagicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Hobo Bags</a>
                            <a href="manpage.php?search=bags&sub=male&page=1" class="list-group-item"><img src="icons/shoppingbagicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Drawstring Bs</a>
                            <a href="manpage.php?search=bags&sub=male&page=1" class="list-group-item"><img src="icons/shoppingbagicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Backpacks</a>
                            <a href="manpage.php?search=bags&sub=male&page=1" class="list-group-item"><img src="icons/shoppingbagicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Handbags</a>
                            <a href="manpage.php?search=bags&sub=male&page=1" class="list-group-item"><img src="icons/shoppingbagicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Saddle Bags</a>
                            <a href="manpage.php?search=bags&sub=male&page=1" class="list-group-item"><img src="icons/shoppingbagicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Quilted Bags</a>
                            <a href="manpage.php?search=bags&sub=male&page=1" class="list-group-item"><img src="icons/shoppingbagicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Bags</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="manpage.php?search=bags&sub=male&page=1" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Bags</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 categoriestopprnt">
                        <ul id="categories">

                            <li><a href="manpage.php?search=bags&sub=male&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;cross body<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manpage.php?search=bags&sub=male&page=1" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;clutches<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manpage.php?search=bags&sub=male&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;hobo bags<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manpage.php?search=bags&sub=male&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;drawstring bags<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manpage.php?search=bags&sub=male&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;back-packs<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manpage.php?search=bags&sub=male&page=1" target="_blank"><img src="icons/backpackicons.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;hand bags<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manpage.php?search=bags&sub=male&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;saddle bags<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manpage.php?search=bags&sub=male&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;quilted bags<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manpage.php?search=bags&sub=male&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;misc bags<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php echo groupedCarousels('womensbagscrossbodybags.gif', 'womensbagsbackpacks.gif', 'womensbagsquiltedbags.gif', 'womensbagsdrawstringbags.gif', 498);?>
                </div>
            </div>
<!--            ends here-->


                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;border-bottom:1px solid gainsboro;">
                                    <?php echo spinnersHolder('boxwomensbags');?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin-top:1%;">
                    <a href="index.php">
                        <img src="banners/variety.png" class="img-responsive bannerlg"/>
                    </a>
                </div>
            </div>

            <!--Ends here -->

             <!--start here-->
            <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="manpage.php?search=misc&sub=male&page=1"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Misc</h4></a></div>
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
                            <a href="manpage.php?search=misc&sub=male&page=1" class="list-group-item"><img src="icons/femaleworkoutglovesicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Bras</a>
                            <a href="manpage.php?search=misc&sub=male&page=1" class="list-group-item"><img src="icons/femaleworkoutglovesicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Body Suits</a>
                            <a href="manpage.php?search=misc&sub=male&page=1" class="list-group-item"><img src="icons/femaleworkoutglovesicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Corsets</a>
                            <a href="manpage.php?search=misc&sub=male&page=1" class="list-group-item"><img src="icons/femaleworkoutglovesicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Gloves</a>
                            <a href="manpage.php?search=misc&sub=male&page=1" class="list-group-item"><img src="icons/femaleworkoutglovesicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Hats</a>
                            <a href="manpage.php?search=misc&sub=male&page=1" class="list-group-item"><img src="icons/femaleworkoutglovesicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Swim Suits</a>
                            <a href="manpage.php?search=misc&sub=male&page=1" class="list-group-item"><img src="icons/femaleworkoutglovesicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Belts</a>
                            <a href="manpage.php?search=misc&sub=male&page=1" class="list-group-item"><img src="icons/femaleworkoutglovesicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Shoes</a>
                            <a href="manpage.php?search=misc&sub=male&page=1" class="list-group-item"><img src="icons/femaleworkoutglovesicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc misc</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="manpage.php?search=misc&sub=male&page=1" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Misc</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 categoriestopprnt">
                        <ul id="categories">

                            <li><a href="manpage.php?search=misc&sub=male&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;bras<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manpage.php?search=misc&sub=male&page=1" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;body suits<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manpage.php?search=misc&sub=male&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;corsets<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manpage.php?search=misc&sub=male&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;gloves<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manpage.php?search=misc&sub=male&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;hats<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manpage.php?search=misc&sub=male&page=1" target="_blank"><img src="icons/backpackicons.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;swim suits<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manpage.php?search=misc&sub=male&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;belts<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manpage.php?search=misc&sub=male&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;shoes<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manpage.php?search=misc&sub=male&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;misc misc<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php echo groupedCarousels('womensmiscbras.gif', 'womensmischats.gif', 'womensmiscbelts.gif', 'womensmiscgloves.gif', 498);?>
                </div>
            </div>
<!--            ends here-->


                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;border-bottom:1px solid gainsboro;">
                                    <?php echo spinnersHolder('boxwomensmisc');?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin-top:1%;">
                    <a href="merchantreg.php">
                        <img src="banners/merchant.png" class="img-responsive bannerlg"/>
                    </a>
                </div>
            </div>

            <!--Ends here -->


            <!--Ends here -->

             <!--start here-->
            <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="mainpage.php?search=womens&sub=dresses&page=1"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Dresses</h4></a></div>
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
                            <a href="mainpage.php?search=womens&sub=dresses&page=1" class="list-group-item"><img src="icons/dress.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Skater Drs</a>
                            <a href="mainpage.php?search=womens&sub=dresses&page=1" class="list-group-item"><img src="icons/dress.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Maxi Dresses</a>
                            <a href="mainpage.php?search=womens&sub=dresses&page=1" class="list-group-item"><img src="icons/dress.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Strapless Drs</a>
                            <a href="mainpage.php?search=womens&sub=dresses&page=1" class="list-group-item"><img src="icons/dress.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Sun Dresses</a>
                            <a href="mainpage.php?search=womens&sub=dresses&page=1" class="list-group-item"><img src="icons/dress.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Bodycone Drs</a>
                            <a href="mainpage.php?search=womens&sub=dresses&page=1" class="list-group-item"><img src="icons/dress.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Flared Drs</a>
                            <a href="mainpage.php?search=womens&sub=dresses&page=1" class="list-group-item"><img src="icons/dress.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Party Dresses</a>
                            <a href="mainpage.php?search=womens&sub=dresses&page=1" class="list-group-item"><img src="icons/dress.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Ankara Drs</a>
                            <a href="mainpage.php?search=womens&sub=dresses&page=1" class="list-group-item"><img src="icons/dress.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Dresses</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpage.php?search=womens&sub=dresses&page=1" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Dresses</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 categoriestopprnt">
                        <ul id="categories">

                            <li><a href="mainpage.php?search=womens&sub=dresses&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;skater dresses<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=womens&sub=dresses&page=1" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;maxi dresses<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=womens&sub=dresses&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;strapless drss<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=womens&sub=dresses&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;sun dresses<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=womens&sub=dresses&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;bodycon dresses<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=womens&sub=dresses&page=1" target="_blank"><img src="icons/backpackicons.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;flared dresses<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=womens&sub=dresses&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;party dresses<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=womens&sub=dresses&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;skirts<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=womens&sub=dresses&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;misc dresses<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php echo groupedCarousels('womensdressesskaterdresses.gif', 'womensdressesankaradresses.gif', 'womensdressesflareddresses.gif', 'womensdressesstraplessdresses.gif', 498);?>
                </div>
            </div>
<!--            ends here-->


                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;border-bottom:1px solid gainsboro;">
                                    <?php echo spinnersHolder('boxwomensdresses');?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin-top:1%;">
                    <a href="index.php">
                        <img src="banners\outdoors.png" class="img-responsive bannerlg"/>
                    </a>
                </div>
            </div>

            <!--Ends here -->


                         <!--start here-->
                        <div class="row" style="">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="mainpageesex.php?search=male&page=1"><h4 class="text-uppercase" style="color:white;font-weight:bold;">All Women's</h4></a></div>
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
                                        <a href="mainpageesex.php?search=male&page=1" class="list-group-item"><img src="icons/dress.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Louis Vuitton</a>
                                        <a href="mainpageesex.php?search=male&page=1" class="list-group-item"><img src="icons/dress.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Channel</a>
                                        <a href="mainpageesex.php?search=male&page=1" class="list-group-item"><img src="icons/dress.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Adidas</a>
                                        <a href="mainpageesex.php?search=male&page=1" class="list-group-item"><img src="icons/dress.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;D &amp; G</a>
                                        <a href="mainpageesex.php?search=male&page=1" class="list-group-item"><img src="icons/dress.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Old Navy</a>
                                        <a href="mainpageesex.php?search=male&page=1" class="list-group-item"><img src="icons/dress.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Urban Outfitters</a>
                                        <a href="mainpageesex.php?search=male&page=1" class="list-group-item"><img src="icons/dress.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Toms</a>
                                        <a href="mainpageesex.php?search=male&page=1" class="list-group-item"><img src="icons/dress.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Everlane</a>
                                        <a href="mainpageesex.php?search=male&page=1" class="list-group-item"><img src="icons/dress.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Other labels</a>



                                    </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                                        <a style="color:white;" href="mainpageesex.php?search=male&page=1" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">All Women's</h5></a>
                                    </div>


                                </div>

                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                                <div class="row" id="categoriescontainer">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <ul id="categories">

                                        <li><a href="mainpageesex.php?search=male&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Louis Vuitton<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                                        <li><a href="mainpageesex.php?search=male&page=1" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Channel<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                                        <li><a href="mainpageesex.php?search=male&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Adidas<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                                        <li><a href="mainpageesex.php?search=male&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;D &amp; G<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                                        <li><a href="mainpageesex.php?search=male&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Old Navy<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                                        <li><a href="mainpageesex.php?search=male&page=1" target="_blank"><img src="icons/backpackicons.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Urban outftr<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                                        <li><a href="mainpageesex.php?search=male&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Toms<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                                        <li><a href="mainpageesex.php?search=male&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Everlane<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                                        <li><a href="mainpageesex.php?search=male&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Other labels<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                                    </ul>
                                        </div>
                                    </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">



                                                <!--            starts here-->
                                                            <div class="row visible-lg visible-md">
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <?php echo groupedCarousels('kidslabelsd&g.gif', 'labelsadidas.gif', 'labelschanel.gif', 'labelsversace.gif', 498);?>
                                                                </div>
                                                            </div>
                                                <!--            ends here-->




                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;border-bottom:1px solid gainsboro;">
                                                <?php echo spinnersHolder('boxwomenslabels');?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row visible-lg visible-md">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin-top:1%;">
                                <a href="index.php">
                                    <img src="banners/thankyou.png" class="img-responsive bannerlg"/>
                                </a>
                            </div>
                        </div>
</div>
<?php 
        require('templates/footer.php');
        ?>

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

            //women sportswear
            function sportswear(){
                $('.loaderImage').fadeIn(3000);
              if(window.XMLHttpRequest){
                    xmlhttp = new XMLHttpRequest();
                }else{
                    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp.onreadystatechange = function(){
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
                    document.getElementById('boxwomenssportswear').innerHTML= xmlhttp.responseText;

                    }
                    }
                    xmlhttp.open('GET','womensportswearloop.php',true);
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
            //womensofficial down here
            function womensloop(){
                $('.loaderImage').fadeIn(3000);
                if(window.XMLHttpRequest){
                    xmlhttp3 = new XMLHttpRequest();
                }else{
                    xmlhttp3 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp3.onreadystatechange = function(){
                if (xmlhttp3.readyState == 4 && xmlhttp3.status == 200){
                    document.getElementById('boxwomensformalwear').innerHTML= xmlhttp3.responseText;

                    }
                    }
                    xmlhttp3.open('GET','womensofficialloop.php',true);
                    xmlhttp3.send();
                $('.loaderImage').fadeOut(3000);
                mensloop();

            }
            //womens sweaters loop here down
            function mensloop(){
                $('.loaderImage').fadeIn(3000);
                if(window.XMLHttpRequest){
                    xmlhttp4 = new XMLHttpRequest();
                }else{
                    xmlhttp4 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp4.onreadystatechange = function(){
                if (xmlhttp4.readyState == 4 && xmlhttp4.status == 200){
                    document.getElementById('boxwomenssweaters').innerHTML= xmlhttp4.responseText;

                    }
                    }
                    xmlhttp4.open('GET','womenssweatersloop.php',true);
                    xmlhttp4.send();
                $('.loaderImage').fadeOut(3000);
                kidsloop();

            }
            // womens shirts loop down here
            function kidsloop(){
                $('.loaderImage').fadeIn(3000);
                if(window.XMLHttpRequest){
                    xmlhttp5 = new XMLHttpRequest();
                }else{
                    xmlhttp5 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp5.onreadystatechange = function(){
                if (xmlhttp5.readyState == 4 && xmlhttp5.status == 200){
                    document.getElementById('boxwomenstops').innerHTML= xmlhttp5.responseText;

                    }
                    }
                    xmlhttp5.open('GET','womensshirtsloop.php',true);
                    xmlhttp5.send();
                $('.loaderImage').fadeOut(3000);
                Householdsloop();

            }
            // womens tshirts loops down here
            function Householdsloop(){
                $('.loaderImage').fadeIn(3000);
                if(window.XMLHttpRequest){
                    xmlhttp6 = new XMLHttpRequest();
                }else{
                    xmlhttp6 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp6.onreadystatechange = function(){
                if (xmlhttp6.readyState == 4 && xmlhttp6.status == 200){
                    document.getElementById('boxwomenspants').innerHTML= xmlhttp6.responseText;

                    }
                    }
                    xmlhttp6.open('GET','womenstshirtsloop.php',true);
                    xmlhttp6.send();
                $('.loaderImage').fadeOut(3000);
                bagsloop();

            }
            // womens blazers going in here
            function bagsloop(){
                $('.loaderImage').fadeIn(3000);
                if(window.XMLHttpRequest){
                    xmlhttp7 = new XMLHttpRequest();
                }else{
                    xmlhttp7 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp7.onreadystatechange = function(){
                if (xmlhttp7.readyState == 4 && xmlhttp7.status == 200){
                    document.getElementById('boxwomensblazers').innerHTML= xmlhttp7.responseText;

                    }
                    }
                    xmlhttp7.open('GET','womensblazersloop.php',true);
                    xmlhttp7.send();
                $('.loaderImage').fadeOut(3000);
                shoesloop();

            }
            //womens tops going in here
            function shoesloop(){
                $('.loaderImage').fadeIn(3000);
                if(window.XMLHttpRequest){
                    xmlhttp8 = new XMLHttpRequest();
                }else{
                    xmlhttp8 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp8.onreadystatechange = function(){
                if (xmlhttp8.readyState == 4 && xmlhttp8.status == 200){
                    document.getElementById('boxwomensshorts').innerHTML= xmlhttp8.responseText;

                    }
                    }
                    xmlhttp8.open('GET','womenstopsloop.php',true);
                    xmlhttp8.send();
                $('.loaderImage').fadeOut(3000);
                labelsloop();

            }
            //womens bags to go in here
             function labelsloop(){
                 $('.loaderImage').fadeIn(3000);
                if(window.XMLHttpRequest){
                    xmlhttp9 = new XMLHttpRequest();
                }else{
                    xmlhttp9 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp9.onreadystatechange = function(){
                if (xmlhttp9.readyState == 4 && xmlhttp9.status == 200){
                    document.getElementById('boxwomensbags').innerHTML= xmlhttp9.responseText;

                    }
                    }
                    xmlhttp9.open('GET','womensbagsloop.php',true);
                    xmlhttp9.send();
                 $('.loaderImage').fadeOut(3000);
                 miscsloop();

            }
            //womens misc to go in here
             function miscsloop(){
                 $('.loaderImage').fadeIn(3000);
                if(window.XMLHttpRequest){
                    xmlhttp10 = new XMLHttpRequest();
                }else{
                    xmlhttp10 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp10.onreadystatechange = function(){
                if (xmlhttp10.readyState == 4 && xmlhttp10.status == 200){
                    document.getElementById('boxwomensmisc').innerHTML= xmlhttp10.responseText;

                    }
                    }
                    xmlhttp10.open('GET','womensmiscloop.php',true);
                    xmlhttp10.send();
                 $('.loaderImage').fadeOut(3000);
                 interiorsloop();

            }
            //womens labels to go in here
                   function interiorsloop(){
                       $('.loaderImage').fadeIn(3000);
                if(window.XMLHttpRequest){
                    xmlhttp11 = new XMLHttpRequest();
                }else{
                    xmlhttp11 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp11.onreadystatechange = function(){
                if (xmlhttp11.readyState == 4 && xmlhttp11.status == 200){
                    document.getElementById('boxwomensdresses').innerHTML= xmlhttp11.responseText;

                    }
                    }
                    xmlhttp11.open('GET','womensdressesloop.php',true);
                    xmlhttp11.send();
                 $('.loaderImage').fadeOut(3000);

            }

            // changes the title box with the hello welcome to airmark logout thingi
            


        function boxwomenslabels(){
            $.ajax({
                url : "womenslabelsloop.php",
                type : "GET",
                success: function(data){
                    $("#boxwomenslabels").html(data);
                }
            })
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

                    }
                    }
                    xmlhttp3.open('GET','displaycartcheckout.php',true);
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

</script>

    </body>
</html>
