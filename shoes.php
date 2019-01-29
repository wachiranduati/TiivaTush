<?php
ob_start();
session_start();
require 'search.inc.php';
require 'looptemplater.php';

$century = 860;//Mtush
?>
<!DOCTYPE html>
<html>
<!--<title>Tiiva | Shoes</title>-->
<title>Tiiva Shoes | Shop for Mtumba Shoes on Tiiva </title>

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
                            <a href="mainpage.php?search=shoes&sub=sports&page=1" target="_blank" class="list-group-item"><img src="others/shoessportshoesasics.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Sports Shoes</a>
                            <a href="mainpage.php?search=shoes&sub=flats&page=1" target="_blank" class="list-group-item"><img src="others/shoesflatsdollshoes.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Flat Shoes</a>
                            <a href="mainpage.php?search=shoes&sub=toms&page=1" target="_blank" class="list-group-item"><img src="others/shoestomsmeshespradille.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Toms Shoes</a>
                            <a href="mainpage.php?search=shoes&sub=boots&page=1" target="_blank" class="list-group-item"><img src="others/shoesbootscombatboots.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Boots</a>
                            <a href="mainpage.php?search=shoes&sub=sandals&page=1" target="_blank" class="list-group-item"><img src="others/shoessandalswedgesandals.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Sandals &amp; Slippers</a>
                            <a href="mainpage.php?search=shoes&sub=loafers&page=1" target="_blank" class="list-group-item"><img src="others/shoesloafershorsebit.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Loafers</a>
                            <a href="mainpage.php?search=shoes&sub=vans&page=1" target="_blank" class="list-group-item"><img src="others/shoesvanschucktaylor.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Vans</a>
                            <a href="mainpage.php?search=shoes&sub=rubber&page=1" target="_blank" class="list-group-item"><img src="others/shoesrubberexpedition.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Rubber</a>
                            <a href="mainpage.php?search=shoes&sub=misc&page=1" target="_blank" class="list-group-item"><img src="others/shoesmiscslipon.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Shoes</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="shoes.php" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Categories</h5></a>
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
                            <li><a href="mainpage.php?search=shoes&sub=sports&page=1" target="_blank"><img src="others/shoessportshoesasics.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Sports Shoes<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=flats&page=1" target="_blank"><img src="others/shoesflatsdollshoes.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Flat Shoes<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=toms&page=1" target="_blank"><img src="others/shoestomsmeshespradille.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Toms Shoes<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=boots&page=1" target="_blank"><img src="others/shoesbootscombatboots.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Boots<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=sandals&page=1" target="_blank"><img src="others/shoessandalswedgesandals.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Sandals/Slippers<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=loafers&page=1" target="_blank"><img src="others/shoesloafershorsebit.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Loafers<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=vans&page=1" target="_blank"><img src="others/shoesvanschucktaylor.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Vans<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=rubber&page=1" target="_blank"><img src="others/shoesrubberexpedition.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Rubber<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=misc&page=1" target="_blank"><img src="others/shoesmiscslipon.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Misc Shoes<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

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
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6  featurediv"><a href="mainpage.php?search=shoes&sub=flats&page=1"><img src="banners/categories/shoesflats.png" class="img-responsive featured"/></a></div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6  featurediv"><a href="mainpage.php?search=shoes&sub=boots&page=1"><img src="banners/categories/shoesboots.png" class="img-responsive featured"/></a></div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6  featurediv"><a href="mainpage.php?search=shoes&sub=loafers&page=1"><img src="banners/categories/shoesloafers.png" class="img-responsive featured"/></a></div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6  featurediv"><a href="mainpage.php?search=shoes&sub=misc&page=1"><img src="banners/categories/shoesmisc.png" class="img-responsive featured"/></a></div>
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
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="mainpage.php?search=shoes&sub=sports&page=1"><h4 class="text-uppercase" style="color:white;font-weight:bold;">sports shoes</h4></a></div>
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
                            <a href="mainpage.php?search=shoes&sub=sports&page=1" class="list-group-item"><img src="others/shoessportsshoes.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Nike Sprtshs</a>
                            <a href="mainpage.php?search=shoes&sub=sports&page=1" class="list-group-item"><img src="others/shoessportsshoes.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Adidas Sprtshs</a>
                            <a href="mainpage.php?search=shoes&sub=sports&page=1" class="list-group-item"><img src="others/shoessportsshoes.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Reebok spr</a>
                            <a href="mainpage.php?search=shoes&sub=sports&page=1" class="list-group-item"><img src="others/shoessportsshoes.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Puma Sprtshs</a>
                            <a href="mainpage.php?search=shoes&sub=sports&page=1" class="list-group-item"><img src="others/shoessportsshoes.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Jordan Sprtshs</a>
                            <a href="mainpage.php?search=shoes&sub=sports&page=1" class="list-group-item"><img src="others/shoessportsshoes.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Under-Armour</a>
                            <a href="mainpage.php?search=shoes&sub=sports&page=1" class="list-group-item"><img src="others/shoessportsshoes.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Asics Sprtshs</a>
                            <a href="mainpage.php?search=shoes&sub=sports&page=1" class="list-group-item"><img src="others/shoessportsshoes.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Vans Sprtshs</a>
                            <a href="mainpage.php?search=shoes&sub=sports&page=1" class="list-group-item"><img src="others/shoessportsshoes.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Sprtshs</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpage.php?search=shoes&sub=sports&page=1" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Sport Shoes</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 categoriestopprnt">
                        <ul id="categories">

                            <li><a href="mainpage.php?search=shoes&sub=sports&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;nike<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=sports&page=1" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;adidas<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=sports&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;reebok<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=sports&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;puma<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=sports&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;jordan<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=sports&page=1" target="_blank"><img src="icons/backpackicons.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;under-armour<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=sports&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;asics<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=sports&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;vans<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=sports&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;misc sports<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">

<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php echo groupedCarousels('shoessportshoesjordans.gif', 'menscrewnecktshirts.gif', 'shoessportshoesvans.gif', 'shoessportshoesreeboks.gif', 498);?>
                </div>
            </div>
<!--            ends here-->

                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-bottom:1px solid gainsboro;border-top:1px solid gainsboro;">
                                    <?php echo spinnersHolder('box');?>
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

             <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="mainpage.php?search=shoes&sub=flats&page=1"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Flats</h4></a></div>
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
                            <a href="mainpage.php?search=shoes&sub=flats&page=1" class="list-group-item"><img src="others/shoesflatshoes.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Toms</a>
                            <a href="mainpage.php?search=shoes&sub=flats&page=1" class="list-group-item"><img src="others/shoesflatshoes.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Crocs</a>
                            <a href="mainpage.php?search=shoes&sub=flats&page=1" class="list-group-item"><img src="others/shoesflatshoes.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Doll Shoes</a>
                            <a href="mainpage.php?search=shoes&sub=flats&page=1" class="list-group-item"><img src="others/shoesflatshoes.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Ballerina</a>
                            <a href="mainpage.php?search=shoes&sub=flats&page=1" class="list-group-item"><img src="others/shoesflatshoes.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Espradilles</a>
                            <a href="mainpage.php?search=shoes&sub=flats&page=1" class="list-group-item"><img src="others/shoesflatshoes.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Loafers</a>
                            <a href="mainpage.php?search=shoes&sub=flats&page=1" class="list-group-item"><img src="others/shoesflatshoes.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Scuff</a>
                            <a href="mainpage.php?search=shoes&sub=flats&page=1" class="list-group-item"><img src="others/shoesflatshoes.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Clarks</a>
                            <a href="mainpage.php?search=shoes&sub=flats&page=1" class="list-group-item"><img src="others/shoesflatshoes.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Flats</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpage.php?search=shoes&sub=flats&page=1" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Flats</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 categoriestopprnt">
                        <ul id="categories">

                            <li><a href="mainpage.php?search=shoes&sub=flats&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;toms<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=flats&page=1" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;crocs<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=flats&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;doll shoes<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=flats&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;ballerina shoes<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=flats&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;espradille shoes<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=flats&page=1" target="_blank"><img src="icons/backpackicons.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;loafers<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=flats&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;scuff<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=flats&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;claks<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=flats&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;misc flats<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">

<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php echo groupedCarousels('shoesflatsdollshoes.gif', 'shoesflatsclarks.gif', 'shoesflatstoms.gif', 'shoesflatsespradille.gif', 498);?>
                </div>
            </div>
<!--            ends here-->


                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;border-bottom:1px solid gainsboro;">
                                    <?php echo spinnersHolder('boxofficial');?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin-top:1%;">
                    <a href="Merchantreg.html">
                        <img src="banners/merchant.png" class="img-responsive bannerlg"/>
                    </a>
                </div>
            </div>

            <!--Ends here -->

             <!--start here-->
            <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="mainpage.php?search=shoes&sub=toms&page=1"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Toms</h4></a></div>
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
                            <a href="mainpage.php?search=shoes&sub=toms&page=1" class="list-group-item"><img src="others/shoestomsstripedtoms.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Lace Espradille</a>
                            <a href="mainpage.php?search=shoes&sub=toms&page=1" class="list-group-item"><img src="others/shoestomsstripedtoms.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Lace Casual</a>
                            <a href="mainpage.php?search=shoes&sub=toms&page=1" class="list-group-item"><img src="others/shoestomsstripedtoms.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Flax Style</a>
                            <a href="mainpage.php?search=shoes&sub=toms&page=1" class="list-group-item"><img src="others/shoestomsstripedtoms.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Distressed</a>
                            <a href="mainpage.php?search=shoes&sub=toms&page=1" class="list-group-item"><img src="others/shoestomsstripedtoms.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Chambray</a>
                            <a href="mainpage.php?search=shoes&sub=toms&page=1" class="list-group-item"><img src="others/shoestomsstripedtoms.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Pumps</a>
                            <a href="mainpage.php?search=shoes&sub=toms&page=1" class="list-group-item"><img src="others/shoestomsstripedtoms.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Striped Toms</a>
                            <a href="mainpage.php?search=shoes&sub=toms&page=1" class="list-group-item"><img src="others/shoestomsstripedtoms.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Desert Boots</a>
                            <a href="mainpage.php?search=shoes&sub=toms&page=1" class="list-group-item"><img src="others/shoestomsstripedtoms.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Toms</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpage.php?search=shoes&sub=toms&page=1" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Toms</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 categoriestopprnt">
                        <ul id="categories">

                            <li><a href="mainpage.php?search=shoes&sub=toms&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;lace espradille<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=toms&page=1" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;lace casual<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=toms&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;flax style<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=toms&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;distressed style<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=toms&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;chambray style<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=toms&page=1" target="_blank"><img src="icons/backpackicons.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;desert boot<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=toms&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;pumps<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=toms&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;striped toms<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=toms&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;misc toms<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php echo groupedCarousels('shoestomsbotasgray.gif', 'shoestomslaceespradille.gif', 'shoestomsmeshespradille.gif', 'shoestomsstripedtoms.gif', 498);?>
                </div>
            </div>
<!--            ends here-->


                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;border-bottom:1px solid gainsboro;">
                                    <?php echo spinnersHolder('boxsweaters');?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin-top:1%;">
                    <a href="blog.php">
                        <img src="banners/blogs.png" class="img-responsive bannerlg"/>
                    </a>
                </div>
            </div>
            <!--Ends here -->

             <!--start here-->
            <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="mainpage.php?search=shoes&sub=boots&page=1"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Boots</h4></a></div>
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
                            <a href="mainpage.php?search=shoes&sub=boots&page=1" class="list-group-item"><img src="icons/bootsicons.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Fur Trimmed</a>
                            <a href="mainpage.php?search=shoes&sub=boots&page=1" class="list-group-item"><img src="icons/bootsicons.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Combat Boots</a>
                            <a href="mainpage.php?search=shoes&sub=boots&page=1" class="list-group-item"><img src="icons/bootsicons.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Ankle Boots</a>
                            <a href="mainpage.php?search=shoes&sub=boots&page=1" class="list-group-item"><img src="icons/bootsicons.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Rain Boots</a>
                            <a href="mainpage.php?search=shoes&sub=boots&page=1" class="list-group-item"><img src="icons/bootsicons.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Riding Boots</a>
                            <a href="mainpage.php?search=shoes&sub=boots&page=1" class="list-group-item"><img src="icons/bootsicons.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Over-the-Knee</a>
                            <a href="mainpage.php?search=shoes&sub=boots&page=1" class="list-group-item"><img src="icons/bootsicons.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Work Boots</a>
                            <a href="mainpage.php?search=shoes&sub=boots&page=1" class="list-group-item"><img src="icons/bootsicons.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Snow Boots</a>
                            <a href="mainpage.php?search=shoes&sub=boots&page=1" class="list-group-item"><img src="icons/bootsicons.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Boots</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpage.php?search=shoes&sub=boots&page=1" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Boots</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 categoriestopprnt">
                        <ul id="categories">

                            <li><a href="mainpage.php?search=shoes&sub=boots&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;fur trimmed<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=boots&page=1" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;combat boots<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=boots&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;ankle boots<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=boots&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;rain boots<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=boots&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;riding boots<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=boots&page=1" target="_blank"><img src="icons/backpackicons.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;over-the-knee b<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=boots&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;work boots<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=boots&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;snow boots<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=boots&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;misc boots<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php echo groupedCarousels('shoesbootsfurtrimmedboots.gif', 'shoesbootscombatboots.gif', 'shoesbootsoverthekneebots.gif', 'shoesbootsrainboots.gif', 498);?>
                </div>
            </div>
<!--            ends here-->


                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;border-bottom:1px solid gainsboro;">
                                    <?php echo spinnersHolder('boxshirts');?>
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
            <div class="row visible-sm visible-xs">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="color:orange;text-shadow:1px 2px 1px black;"><h4 class="text-uppercase text-center"><strong>Other Categories</strong></h4></div>
                    </div>
                </div>
            </div>
            <div class="row visible-sm visible-xs" style="border:1px solid gainsboro;">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 featurediv"><a href="mainpage.php?search=shoes&sub=sports&page=1"><img src="banners\categories\shoessports.png" class="img-responsive featured"/></a></div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 featurediv"><a href="mainpage.php?search=shoes&sub=toms&page=1"><img src="banners\categories\shoestoms.png" class="img-responsive featured"/></a></div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 featurediv"><a href="mainpage.php?search=shoes&sub=sandals&page=1"><img src="banners\categories\shoessandals.png" class="img-responsive featured"/></a></div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 featurediv"><a href="mainpage.php?search=shoes&sub=vans&page=1"><img src="banners\categories\shoesvans.png" class="img-responsive featured"/></a></div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 featurediv"><a href="mainpage.php?search=shoes&sub=rubber&page=1"><img src="banners\categories\shoesrubber.png" class="img-responsive featured"/></a></div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 featurediv"><a href="mainpage.php?search=shoes&sub=misc&page=1"><img src="banners\categories\shoesmisc.png" class="img-responsive featured"/></a></div>
            </div>

             <!--start here-->
            <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="mainpage.php?search=shoes&sub=sandals&page=1"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Sandals &amp; Slippers</h4></a></div>
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
                            <a href="mainpage.php?search=shoes&sub=sandals&page=1" class="list-group-item"><img src="others/shoessandalsbeachslippers.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Gladiator Sdls</a>
                            <a href="mainpage.php?search=shoes&sub=sandals&page=1" class="list-group-item"><img src="others/shoessandalsbeachslippers.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Handmade</a>
                            <a href="mainpage.php?search=shoes&sub=sandals&page=1" class="list-group-item"><img src="others/shoessandalsbeachslippers.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Wedge Sdls</a>
                            <a href="mainpage.php?search=shoes&sub=sandals&page=1" class="list-group-item"><img src="others/shoessandalsbeachslippers.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Flat Sandals</a>
                            <a href="mainpage.php?search=shoes&sub=sandals&page=1" class="list-group-item"><img src="others/shoessandalsbeachslippers.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Crocs</a>
                            <a href="mainpage.php?search=shoes&sub=sandals&page=1" class="list-group-item"><img src="others/shoessandalsbeachslippers.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Birkenstock</a>
                            <a href="mainpage.php?search=shoes&sub=sandals&page=1" class="list-group-item"><img src="others/shoessandalsbeachslippers.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Beach Slippers</a>
                            <a href="mainpage.php?search=shoes&sub=sandals&page=1" class="list-group-item"><img src="others/shoessandalsbeachslippers.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Leather Sdls</a>
                            <a href="mainpage.php?search=shoes&sub=sandals&page=1" class="list-group-item"><img src="others/shoessandalsbeachslippers.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Sandals</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpage.php?search=shoes&sub=sandals&page=1" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Sandals &amp; Slippers</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 categoriestopprnt">
                        <ul id="categories">

                            <li><a href="mainpage.php?search=shoes&sub=sandals&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;gladiator sndls<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=sandals&page=1" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;handmade sndls<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=sandals&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;wedge sandals<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=sandals&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;flat sandals<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=sandals&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;crocs<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=sandals&page=1" target="_blank"><img src="icons/backpackicons.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;birkenstock s<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=sandals&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;beach slippers<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=sandals&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;leather sandals<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=sandals&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;misc<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php echo groupedCarousels('shoessandalsbeachslippers.gif', 'shoessandalsflatsandals.gif', 'shoessandalsgladiatorsandals.gif', 'shoessandalswedgesandals.gif', 498);?>
                </div>
            </div>
<!--            ends here-->


                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;border-bottom:1px solid gainsboro;">
                                    <?php echo spinnersHolder('boxtshirtsk');?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin-top:1%;">
                    <a href="shop.php">
                        <img src="banners/outdoors.png" class="img-responsive bannerlg"/>
                    </a>
                </div>
            </div>

            <!--Ends here -->

             <!--start here-->
            <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="mainpage.php?search=shoes&sub=loafers&page=1"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Loafers</h4></a></div>
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
                            <a href="mainpage.php?search=shoes&sub=loafers&page=1" class="list-group-item"><img src="others/shoesloafersmoctoepenny.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Moc-toe Penny</a>
                            <a href="mainpage.php?search=shoes&sub=loafers&page=1" class="list-group-item"><img src="others/shoesloafersmoctoepenny.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Hosebit</a>
                            <a href="mainpage.php?search=shoes&sub=loafers&page=1" class="list-group-item"><img src="others/shoesloafersmoctoepenny.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Tassels</a>
                            <a href="mainpage.php?search=shoes&sub=loafers&page=1" class="list-group-item"><img src="others/shoesloafersmoctoepenny.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Casual loafers</a>
                            <a href="mainpage.php?search=shoes&sub=loafers&page=1" class="list-group-item"><img src="others/shoesloafersmoctoepenny.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Full strap</a>
                            <a href="mainpage.php?search=shoes&sub=loafers&page=1" class="list-group-item"><img src="others/shoesloafersmoctoepenny.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Double-monk</a>
                            <a href="mainpage.php?search=shoes&sub=loafers&page=1" class="list-group-item"><img src="others/shoesloafersmoctoepenny.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Single-monk</a>
                            <a href="mainpage.php?search=shoes&sub=loafers&page=1" class="list-group-item"><img src="others/shoesloafersmoctoepenny.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Penny Loafers</a>
                            <a href="mainpage.php?search=shoes&sub=loafers&page=1" class="list-group-item"><img src="others/shoesloafersmoctoepenny.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc loafers</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpage.php?search=shoes&sub=loafers&page=1" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Loafers</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 categoriestopprnt">
                        <ul id="categories">

                            <li><a href="mainpage.php?search=shoes&sub=loafers&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;moc-toe-penny<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=loafers&page=1" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;hosebit<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=loafers&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;tassels<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=loafers&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;fullstrap<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=loafers&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;double-monk strap<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=loafers&page=1" target="_blank"><img src="icons/backpackicons.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;single-monk strap<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=loafers&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;penny loafer<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=loafers&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;casual loafers<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=loafers&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;misc loafers<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php echo groupedCarousels('shoesloafersmoctoepenny.gif', 'shoesloafersfullstrap.gif', 'shoesloafershorsebit.gif', 'shoesloafertassels.gif', 498);?>
                </div>
            </div>
<!--            ends here-->


                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;border-bottom:1px solid gainsboro;">
                                    <?php echo spinnersHolder('boxblazers');?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin-top:1%;">
                    <a href="shop.php">
                        <img src="banners/handcrafted.png" class="img-responsive bannerlg"/>
                    </a>
                </div>
            </div>

            <!--Ends here -->

             <!--start here-->
           <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="mainpage.php?search=shoes&sub=vans&page=1"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Converse &amp; Vans</h4></a></div>
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
                            <a href="mainpage.php?search=shoes&sub=vans&page=1" class="list-group-item"><img src="others/shoesvansstansmith.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Chuck Taylor</a>
                            <a href="mainpage.php?search=shoes&sub=vans&page=1" class="list-group-item"><img src="others/shoesvansstansmith.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Illie Nastase</a>
                            <a href="mainpage.php?search=shoes&sub=vans&page=1" class="list-group-item"><img src="others/shoesvansstansmith.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Stan Smith</a>
                            <a href="mainpage.php?search=shoes&sub=vans&page=1" class="list-group-item"><img src="others/shoesvansstansmith.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Michael Jordan</a>
                            <a href="mainpage.php?search=shoes&sub=vans&page=1" class="list-group-item"><img src="others/shoesvansstansmith.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Jeff Spicoli</a>
                            <a href="mainpage.php?search=shoes&sub=vans&page=1" class="list-group-item"><img src="others/shoesvansstansmith.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Jack Purcell</a>
                            <a href="mainpage.php?search=shoes&sub=vans&page=1" class="list-group-item"><img src="others/shoesvansstansmith.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Classic-slip On</a>
                            <a href="mainpage.php?search=shoes&sub=vans&page=1" class="list-group-item"><img src="others/shoesvansstansmith.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Authentic Slim</a>
                            <a href="mainpage.php?search=shoes&sub=vans&page=1" class="list-group-item"><img src="others/shoesvansstansmith.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Vans</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpage.php?search=shoes&sub=vans&page=1" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Converse &amp; Vans</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 categoriestopprnt">
                        <ul id="categories">

                            <li><a href="mainpage.php?search=shoes&sub=vans&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;chuck taylor<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=vans&page=1" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;illie nastase<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=vans&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;stan smith<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=vans&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;michael jordan<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=vans&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;jeff spicoli<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=vans&page=1" target="_blank"><img src="icons/backpackicons.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;jack purcell<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=vans&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;classic slipon<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=vans&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;authentic slim<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=vans&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;misc vans<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php echo groupedCarousels('shoesvansjackpurcell.gif', 'shoesvansillienastase.gif', 'shoesvanschucktaylor.gif', 'shoesvansstansmith.gif', 498);?>
                </div>
            </div>
<!--            ends here-->


                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;border-bottom:1px solid gainsboro;">
                                    <?php echo spinnersHolder('boxjackets');?>
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
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="mainpage.php?search=shoes&sub=rubber&page=1"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Rubber</h4></a></div>
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
                            <a href="mainpage.php?search=shoes&sub=rubber&page=1" class="list-group-item"><img src="others/shoesrubberlifestyle.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Cordway</a>
                            <a href="mainpage.php?search=shoes&sub=rubber&page=1" class="list-group-item"><img src="others/shoesrubberlifestyle.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Expedition</a>
                            <a href="mainpage.php?search=shoes&sub=rubber&page=1" class="list-group-item"><img src="others/shoesrubberlifestyle.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Skate Boarding</a>
                            <a href="mainpage.php?search=shoes&sub=rubber&page=1" class="list-group-item"><img src="others/shoesrubberlifestyle.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Lifestyle</a>
                            <a href="mainpage.php?search=shoes&sub=rubber&page=1" class="list-group-item"><img src="others/shoesrubberlifestyle.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Tarmac HC</a>
                            <a href="mainpage.php?search=shoes&sub=rubber&page=1" class="list-group-item"><img src="others/shoesrubberlifestyle.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Quarters</a>
                            <a href="mainpage.php?search=shoes&sub=rubber&page=1" class="list-group-item"><img src="others/shoesrubberlifestyle.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Lowdown</a>
                            <a href="mainpage.php?search=shoes&sub=rubber&page=1" class="list-group-item"><img src="others/shoesrubberlifestyle.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Skipper</a>
                            <a href="mainpage.php?search=shoes&sub=rubber&page=1" class="list-group-item"><img src="others/shoesrubberlifestyle.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc RubberS</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpage.php?search=shoes&sub=rubber&page=1" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Rubber</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 categoriestopprnt">
                        <ul id="categories">

                            <li><a href="mainpage.php?search=shoes&sub=rubber&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;cordway<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=rubber&page=1" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;expedition<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=rubber&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;skate boarding<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=rubber&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;lifestyle<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=rubber&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;tarmac hc<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=rubber&page=1" target="_blank"><img src="icons/backpackicons.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;quarters<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=rubber&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;lowdown hc<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=rubber&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;skipper<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=rubber&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;misc rubber shoes<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">


<!--            starts here-->
            <div class="row visible-md visible-lg">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php echo groupedCarousels('shoesrubberexpedition.gif', 'shoesrubbergravis.gif', 'shoesrubberlifestyle.gif', 'shoesrubberskateboarding.gif', 498);?>
                </div>
            </div>
<!--            ends here-->


                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-bottom:1px solid gainsboro;border-top:1px solid gainsboro;">
                                    <?php echo spinnersHolder('boxbags');?>
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

             <!--start here-->
            <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="mainpage.php?search=shoes&sub=misc&page=1"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Misc</h4></a></div>
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
                            <a href="mainpage.php?search=shoes&sub=misc&page=1" class="list-group-item"><img src="others/shoesmisclaceup.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Lace up</a>
                            <a href="mainpage.php?search=shoes&sub=misc&page=1" class="list-group-item"><img src="others/shoesmisclaceup.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Oxfords</a>
                            <a href="mainpage.php?search=shoes&sub=misc&page=1" class="list-group-item"><img src="others/shoesmisclaceup.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;The Derby's</a>
                            <a href="mainpage.php?search=shoes&sub=misc&page=1" class="list-group-item"><img src="others/shoesmisclaceup.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Slip-On</a>
                            <a href="mainpage.php?search=shoes&sub=misc&page=1" class="list-group-item"><img src="others/shoesmisclaceup.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Monk Shoes</a>
                            <a href="mainpage.php?search=shoes&sub=misc&page=1" class="list-group-item"><img src="others/shoesmisclaceup.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Dress Boots</a>
                            <a href="mainpage.php?search=shoes&sub=misc&page=1" class="list-group-item"><img src="others/shoesmisclaceup.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Strap</a>
                            <a href="mainpage.php?search=shoes&sub=misc&page=1" class="list-group-item"><img src="others/shoesmisclaceup.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Brogueing</a>
                            <a href="mainpage.php?search=shoes&sub=misc&page=1" class="list-group-item"><img src="others/shoesmisclaceup.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc misc</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpage.php?search=shoes&sub=misc&page=1" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Misc</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 categoriestopprnt">
                        <ul id="categories">

                            <li><a href="mainpage.php?search=shoes&sub=misc&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;lace up<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=misc&page=1" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;oxfords<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=misc&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;the derby's<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=misc&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;slip on<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=misc&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;monk shoes<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=misc&page=1" target="_blank"><img src="icons/backpackicons.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;dress boots<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=misc&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;strap<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=misc&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;brogueing<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=misc&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;misc misc<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php echo groupedCarousels('shoesmisclaceup.gif', 'shoesmiscslipon.gif', 'shoesmiscthederbys.gif', 'shoesmiscoxfords.gif', 498);?>
                </div>
            </div>
<!--            ends here-->


                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;border-bottom:1px solid gainsboro;">
                                    <?php echo spinnersHolder('boxmiscs');?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin-top:1%;">
                    <a href="Mens.php">
                        <img src="banners/blogs.png" class="img-responsive bannerlg"/>
                    </a>
                </div>
            </div>

            <!--Ends here -->



            <!--Ends here -->

             <!--start here-->
            <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="mainpagee.php?search=shoes&page=1"><h4 class="text-uppercase" style="color:white;font-weight:bold;">All Shoes</h4></a></div>
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
                            <a href="mainpagee.php?search=shoes&page=1" class="list-group-item"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;lace up</a>
                            <a href="mainpagee.php?search=shoes&page=1" class="list-group-item"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Oxfords</a>
                            <a href="mainpagee.php?search=shoes&page=1" class="list-group-item"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Theh Derby's</a>
                            <a href="mainpagee.php?search=shoes&page=1" class="list-group-item"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Slip On</a>
                            <a href="mainpagee.php?search=shoes&page=1" class="list-group-item"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Monk Shoes</a>
                            <a href="mainpagee.php?search=shoes&page=1" class="list-group-item"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Dress Boots</a>
                            <a href="mainpagee.php?search=shoes&page=1" class="list-group-item"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Strap</a>
                            <a href="mainpagee.php?search=shoes&page=1" class="list-group-item"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Brogueing</a>
                            <a href="mainpagee.php?search=shoes&page=1" class="list-group-item"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc misc</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpagee.php?search=shoes&page=1" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">All Shoes</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 categoriestopprnt">
                        <ul id="categories">

                            <li><a href="mainpagee.php?search=shoes&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;converse<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpagee.php?search=shoes&page=1" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;nike<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpagee.php?search=shoes&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;adidas<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpagee.php?search=shoes&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;toms<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpagee.php?search=shoes&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;puma<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpagee.php?search=shoes&page=1" target="_blank"><img src="icons/backpackicons.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;reebok<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpagee.php?search=shoes&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;jordan<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpagee.php?search=shoes&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;vans<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpagee.php?search=shoes&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;misc<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php echo groupedCarousels('shoeslabelsconverse.gif', 'shoeslabelsjordans.gif', 'shoeslabelstoms.gif', 'shoesmiscoxfords.gif', 498);?>
                </div>
            </div>
<!--            ends here-->


                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;border-bottom:1px solid gainsboro;">
                                    <?php echo spinnersHolder('boxlabels');?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin-top:1%;">
                    <a href="Mens.php">
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

            //formal shoes go here
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
                    xmlhttp.open('GET','shoesformalloop.php',true);
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
            //flats go down here
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
                    xmlhttp3.open('GET','shoesflatsloop.php',true);
                    xmlhttp3.send();
               $('.loaderImage').fadeOut(3000);
                mensloop();

            }
            //toms loop here down
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
                    xmlhttp4.open('GET','shoestomsloop.php',true);
                    xmlhttp4.send();
                $('.loaderImage').fadeOut(3000);
                kidsloop();

            }
            // boots loop down here
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
                    xmlhttp5.open('GET','shoesbootsloop.php',true);
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
                    xmlhttp6.open('GET','shoessandalsloop.php',true);
                    xmlhttp6.send();
              $('.loaderImage').fadeOut(3000);
                bagsloop();

            }
            //loafers going in here
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
                    xmlhttp7.open('GET','shoesloafersloop.php',true);
                    xmlhttp7.send();
            $('.loaderImage').fadeOut(3000);
                shoesloop();

            }
            //vans going in here
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
                    xmlhttp8.open('GET','shoesvansloop.php',true);
                    xmlhttp8.send();
               $('.loaderImage').fadeOut(3000);
                labelsloop();

            }
            //rubber to go in here
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
                    xmlhttp9.open('GET','shoesrubberloop.php',true);
                    xmlhttp9.send();
             $('.loaderImage').fadeOut(3000);
                 miscsloop();

            }
            //misc to go in here
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
                    xmlhttp10.open('GET','shoesmiscloop.php',true);
                    xmlhttp10.send();
              $('.loaderImage').fadeOut(3000);
                 interiorsloop();

            }
            //labels to go in here
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
                    xmlhttp11.open('GET','shoeslabelsloop.php',true);
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
