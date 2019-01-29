<?php
ob_start();
session_start();
require 'search.inc.php';
require 'looptemplater.php';

$century = 860;//Mtush
?>
<!DOCTYPE html>
<html>
<!--<title>Tiiva | Misc</title>-->
<title>Tiiva Extra Items | Shop for Mtumba Extra Items on Tiiva </title>

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
                            <a href="mainpageesub.php?search=dolls&page=1" target="_blank" class="list-group-item"><img src="others/miscdollsfluffydolls.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Dolls</a>
                            <a href="mainpage.php?search=misc&sub=belts&page=1" target="_blank" class="list-group-item"><img src="others/miscbeltsslimbelts.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Belts</a>
                            <a href="mainpage.php?search=misc&sub=underwear&page=1" target="_blank" class="list-group-item"><img src="others/miscunderwearsportsbras.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;underwear</a>
                            <a href="mainpage.php?search=misc&sub=hats&page=1" target="_blank" class="list-group-item"><img src="others/mischatsbaseballcaps.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Hats</a>
                            <a href="mainpageesub.php?search=fabrics&page=1" target="_blank" class="list-group-item"><img src="others/miscfabricswoolfabric.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Fabrics</a>
                            <a href="mainpageesub.php?search=socks&page=1" target="_blank" class="list-group-item"><img src="others/miscsocksanklesocks.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Socks</a>
                            <a href="mainpageesub.php?search=misc&page=1" target="_blank" class="list-group-item"><img src="others/miscmiscscarfs.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc</a>
                            <a href="mainpagee.php?search=misc&page=1" target="_blank" class="list-group-item"><img src="icons\boxicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;All Misc</a>


                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="misc.php" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Categories</h5></a>
                        </div>


                    </div>


            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border:1px solid white;">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md">

                        <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-bottom:35px;">
                        <ul id="categories" style="line-height:2.5;padding-bottom:0;margin-bottom:2px;">
                            <li class="text-center" style="font-weight:bold;background-color:black;border:1px solid white;"><span style="color:orange;" class="text-uppercase text-center">Categories</span></li>
                            <li><a href="mainpageesub.php?search=dolls&page=1" target="_blank"><img src="others/miscdollsfluffydolls.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Dolls<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=misc&sub=belts&page=1" target="_blank"><img src="others/miscbeltsslimbelts.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Belts<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=misc&sub=underwear&page=1" target="_blank"><img src="others/miscunderwearsportsbras.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;underwear<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=misc&sub=hats&page=1" target="_blank"><img src="others/mischatsbaseballcaps.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Hats<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpageesub.php?search=fabrics&page=1" target="_blank"><img src="others/miscfabricswoolfabric.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Fabrics<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpageesub.php?search=socks&page=1" target="_blank"><img src="others/miscsocksanklesocks.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;socks<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpageesub.php?search=misc&page=1" target="_blank"><img src="others/miscmiscscarfs.gif" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Misc<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpagee.php?search=misc&page=1" target="_blank"><img src="icons\boxicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;All Misc<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

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
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6  featurediv"><a href="mainpage.php?search=misc&sub=belts&page=1"><img src="banners/categories/miscbelts.png" class="img-responsive featured"/></a></div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6  featurediv"><a href="mainpage.php?search=misc&sub=hats&page=1"><img src="banners/categories/mischats.png" class="img-responsive featured"/></a></div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6  featurediv"><a href="mainpageesub.php?search=fabrics&page=1"><img src="banners/categories/miscfabrics.png" class="img-responsive featured"/></a></div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6  featurediv"><a href="mainpage.php?search=misc&sub=underwear&page=1"><img src="banners/categories/miscunderwear.png" class="img-responsive featured"/></a></div>
            </div>


            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin-top:1%;">
                    <a href="index.php">
                        <img src="banners/mtumbanner.png" class="img-responsive bannerlg"/>
                    </a>
                </div>
            </div>
            <!--start here-->
            <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="mainpage.php?search=misc&sub=belts&page=1"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Belts</h4></a></div>
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
                            <a href="mainpage.php?search=misc&sub=belts&page=1" class="list-group-item"><img src="others/miscbeltsofficialbelts.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Official Belts</a>
                            <a href="mainpage.php?search=misc&sub=belts&page=1" class="list-group-item"><img src="others/miscbeltsofficialbelts.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Slim Belts</a>
                            <a href="mainpage.php?search=misc&sub=belts&page=1" class="list-group-item"><img src="others/miscbeltsofficialbelts.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Leather Belts</a>
                            <a href="mainpage.php?search=misc&sub=belts&page=1" class="list-group-item"><img src="others/miscbeltsofficialbelts.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;SuspenderBelts</a>
                            <a href="mainpage.php?search=misc&sub=belts&page=1" class="list-group-item"><img src="others/miscbeltsofficialbelts.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Skinny Belts</a>
                            <a href="mainpage.php?search=misc&sub=belts&page=1" class="list-group-item"><img src="others/miscbeltsofficialbelts.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Petite Belts</a>
                            <a href="mainpage.php?search=misc&sub=belts&page=1" class="list-group-item"><img src="others/miscbeltsofficialbelts.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Buckle Belts</a>
                            <a href="mainpage.php?search=misc&sub=belts&page=1" class="list-group-item"><img src="others/miscbeltsofficialbelts.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Fabric Belts</a>
                            <a href="mainpage.php?search=misc&sub=belts&page=1" class="list-group-item"><img src="others/miscbeltsofficialbelts.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Belts</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpage.php?search=misc&sub=belts&page=1" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Belts</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 categoriestopprnt">
                        <ul id="categories">

                            <li><a href="mainpage.php?search=misc&sub=belts&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;formal belts<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=misc&sub=belts&page=1" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;slim belts<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=misc&sub=belts&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;leather belts<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=misc&sub=belts&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;suspender belts<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=misc&sub=belts&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;skinny belts<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=misc&sub=belts&page=1" target="_blank"><img src="icons/backpackicons.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;petite belts<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=misc&sub=belts&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;buckle belts<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=misc&sub=belts&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;fabric belts<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=misc&sub=belts&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;misc belts<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">

<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php echo groupedCarousels('miscbeltsslimbelts.gif', 'miscbeltssuspenderbelts.gif', 'miscbeltsfabricbelts.gif', 'miscbeltsofficialbelts.gif', 498);?>
                </div>
            </div>
<!--            ends here-->

                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;border-bottom:1px solid gainsboro;">
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
                        <img src="banners/different.png" class="img-responsive bannerlg"/>
                    </a>
                </div>
            </div>

            <!--Ends here -->

             <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="mainpageesub.php?search=dolls&page=1"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Dolls</h4></a></div>
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
                            <a href="mainpageesub.php?search=dolls&page=1" class="list-group-item"><img src="others/miscdollsanimaldolls.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Barbie Dolls</a>
                            <a href="mainpageesub.php?search=dolls&page=1" class="list-group-item"><img src="others/miscdollsanimaldolls.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Vintage Dolls</a>
                            <a href="mainpageesub.php?search=dolls&page=1" class="list-group-item"><img src="others/miscdollsanimaldolls.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Rag Dolls</a>
                            <a href="mainpageesub.php?search=dolls&page=1" class="list-group-item"><img src="others/miscdollsanimaldolls.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;BittyBaby Dls</a>
                            <a href="mainpageesub.php?search=dolls&page=1" class="list-group-item"><img src="others/miscdollsanimaldolls.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Fluffy Dolls</a>
                            <a href="mainpageesub.php?search=dolls&page=1" class="list-group-item"><img src="others/miscdollsanimaldolls.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Bratz Dolls</a>
                            <a href="mainpageesub.php?search=dolls&page=1" class="list-group-item"><img src="others/miscdollsanimaldolls.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;CornHusk Dls</a>
                            <a href="mainpageesub.php?search=dolls&page=1" class="list-group-item"><img src="others/miscdollsanimaldolls.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;China Dolls</a>
                            <a href="mainpageesub.php?search=dolls&page=1" class="list-group-item"><img src="others/miscdollsanimaldolls.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Dolls</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpageesub.php?search=dolls&page=1" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Dolls</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 categoriestopprnt">
                        <ul id="categories">

                            <li><a href="mainpageesub.php?search=dolls&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;barbie dolls<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpageesub.php?search=dolls&page=1" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;vintage dolls<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpageesub.php?search=dolls&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;rag dolls<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpageesub.php?search=dolls&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;fluffy dolls<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpageesub.php?search=dolls&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;bratz dolls<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpageesub.php?search=dolls&page=1" target="_blank"><img src="icons/backpackicons.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;corn husk dolls<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpageesub.php?search=dolls&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;china dolls<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpageesub.php?search=dolls&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;bitty baby dolls<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpageesub.php?search=dolls&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;misc dolls<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">

<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php echo groupedCarousels('miscdollscartoondolls.gif', 'miscdollsanimaldolls.gif', 'miscdollsfluffydolls.gif', 'miscdollsragdoll.gif', 498);?>
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
                    <a href="index.php">
                        <img src="banners/variety.png" class="img-responsive bannerlg"/>
                    </a>
                </div>
            </div>

            <!--Ends here -->


             <!--start here-->
            <div class="row" style="margin-top:30px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="mainpage.php?search=misc&sub=hats&page=1"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Hats</h4></a></div>
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
                            <a href="mainpage.php?search=misc&sub=hats&page=1" class="list-group-item"><img src="others/mischats.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;BaseBall Caps</a>
                            <a href="mainpage.php?search=misc&sub=hats&page=1" class="list-group-item"><img src="others/mischats.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Beanies</a>
                            <a href="mainpage.php?search=misc&sub=hats&page=1" class="list-group-item"><img src="others/mischats.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Flat Caps</a>
                            <a href="mainpage.php?search=misc&sub=hats&page=1" class="list-group-item"><img src="others/mischats.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Sun Hats</a>
                            <a href="mainpage.php?search=misc&sub=hats&page=1" class="list-group-item"><img src="others/mischats.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Fedora Hats</a>
                            <a href="mainpage.php?search=misc&sub=hats&page=1" class="list-group-item"><img src="others/mischats.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Bucket Hats</a>
                            <a href="mainpage.php?search=misc&sub=hats&page=1" class="list-group-item"><img src="others/mischats.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Beret Hats</a>
                            <a href="mainpage.php?search=misc&sub=hats&page=1" class="list-group-item"><img src="others/mischats.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Bowler Hats</a>
                            <a href="mainpage.php?search=misc&sub=hats&page=1" class="list-group-item"><img src="others/mischats.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Hats</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpage.php?search=misc&sub=hats&page=1" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Hats</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 categoriestopprnt">
                        <ul id="categories">

                            <li><a href="mainpage.php?search=misc&sub=hats&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;base ball caps<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=misc&sub=hats&page=1" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;beanie caps<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=misc&sub=hats&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;flat caps<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=misc&sub=hats&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;sun hats<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=misc&sub=hats&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;fedoras<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=misc&sub=hats&page=1" target="_blank"><img src="icons/backpackicons.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;bucket hats<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=misc&sub=hats&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;berets<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=misc&sub=hats&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;bowlers<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=misc&sub=hats&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;misc hats<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php echo groupedCarousels('mischatsfedorahats.gif', 'mischatsbaseballcaps.gif', 'mischatsbeniecaps.gif', 'mischatssunhats.gif', 498);?>
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
            <div class="row visible-sm visible-xs">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="color:orange;text-shadow:1px 2px 1px black;"><h4 class="text-uppercase text-center"><strong>Other Categories</strong></h4></div>
                    </div>
                </div>
            </div>
            <div class="row visible-sm visible-xs" style="border:1px solid gainsboro;">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 featurediv"><a href="mainpageesub.php?search=dolls&page=1"><img src="banners\categories\miscdolls.png" class="img-responsive featured"/></a></div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 featurediv"><a href="mainpageesub.php?search=socks&page=1"><img src="banners\categories\miscsocks.png" class="img-responsive featured"/></a></div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 featurediv"><a href="mainpageesub.php?search=misc&page=1"><img src="banners\categories\miscmisc.png" class="img-responsive featured"/></a></div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 featurediv"><a href="mainpagee.php?search=misc&page=1"><img src="banners\categories\misclabels.png" class="img-responsive featured"/></a></div>
            </div>

             <!--start here-->
            <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-md visible-lg">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="mainpage.php?search=misc&sub=underwear&page=1"><h4 class="text-uppercase" style="color:white;font-weight:bold;">underwear</h4></a></div>
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
                            <a href="mainpage.php?search=misc&sub=underwear&page=1" class="list-group-item"><img src="icons/sportsbraicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Sports Bras</a>
                            <a href="mainpage.php?search=misc&sub=underwear&page=1" class="list-group-item"><img src="icons/sportsbraicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Stockings</a>
                            <a href="mainpage.php?search=misc&sub=underwear&page=1" class="list-group-item"><img src="icons/sportsbraicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Ordinary Bras</a>
                            <a href="mainpage.php?search=misc&sub=underwear&page=1" class="list-group-item"><img src="icons/sportsbraicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Push up Bras</a>
                            <a href="mainpage.php?search=misc&sub=underwear&page=1" class="list-group-item"><img src="icons/sportsbraicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Strapless Bras</a>
                            <a href="mainpage.php?search=misc&sub=underwear&page=1" class="list-group-item"><img src="icons/sportsbraicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Corset</a>
                            <a href="mainpage.php?search=misc&sub=underwear&page=1" class="list-group-item"><img src="icons/sportsbraicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Bikers</a>
                            <a href="mainpage.php?search=misc&sub=underwear&page=1" class="list-group-item"><img src="icons/sportsbraicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Underwire Bs</a>
                            <a href="mainpage.php?search=misc&sub=underwear&page=1" class="list-group-item"><img src="icons/sportsbraicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpage.php?search=misc&sub=underwear&page=1" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">underwear</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 categoriestopprnt">
                        <ul id="categories">

                            <li><a href="mainpage.php?search=misc&sub=underwear&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;sports bras<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=misc&sub=underwear&page=1" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;stockings<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=misc&sub=underwear&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;thongs<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=misc&sub=underwear&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;push up bras<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=misc&sub=underwear&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;strapless bras<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=misc&sub=underwear&page=1" target="_blank"><img src="icons/backpackicons.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;corsets<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=misc&sub=underwear&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;bikers<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=misc&sub=underwear&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;underwire bras<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=misc&sub=underwear&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;misc<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php echo groupedCarousels('miscunderwearsportsbras.gif', 'miscunderwearbikers.gif', 'miscunderwearcorsets.gif', 'miscunderwearbikers.gif', 498);?>
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
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="mainpageesub.php?search=socks&page=1"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Socks</h4></a></div>
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
                            <a href="mainpageesub.php?search=socks&page=1" class="list-group-item"><img src="icons/sockicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Sports Socks</a>
                            <a href="mainpageesub.php?search=socks&page=1" class="list-group-item"><img src="icons/sockicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Ankle Socks</a>
                            <a href="mainpageesub.php?search=socks&page=1" class="list-group-item"><img src="icons/sockicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Official Socks</a>
                            <a href="mainpageesub.php?search=socks&page=1" class="list-group-item"><img src="icons/sockicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Warm Socks</a>
                            <a href="mainpageesub.php?search=socks&page=1" class="list-group-item"><img src="icons/sockicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Doll-Shoe S</a>
                            <a href="mainpageesub.php?search=socks&page=1" class="list-group-item"><img src="icons/sockicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Liner Socks</a>
                            <a href="mainpageesub.php?search=socks&page=1" class="list-group-item"><img src="icons/sockicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Low-cut Socks</a>
                            <a href="mainpageesub.php?search=socks&page=1" class="list-group-item"><img src="icons/sockicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Executive S</a>
                            <a href="mainpageesub.php?search=socks&page=1" class="list-group-item"><img src="icons/sockicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Socks</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpageesub.php?search=socks&page=1" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Socks</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 categoriestopprnt">
                        <ul id="categories">

                            <li><a href="mainpageesub.php?search=socks&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;sports socks<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpageesub.php?search=socks&page=1" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;ankle socks<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpageesub.php?search=socks&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;formal socks<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpageesub.php?search=socks&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;warm socks<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpageesub.php?search=socks&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;doll shoes<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpageesub.php?search=socks&page=1" target="_blank"><img src="icons/backpackicons.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;liner socks<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpageesub.php?search=socks&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;low cut socks<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpageesub.php?search=socks&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;executive socks<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpageesub.php?search=socks&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;misc socks<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php echo groupedCarousels('miscsocksdollshoesocks.gif', 'miscsocksofficialsocks.gif', 'miscsocksanklesocks.gif', 'miscsockswarmsocks.gif', 498);?>
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
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="mainpageesub.php?search=fabrics&page=1"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Fabrics</h4></a></div>
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
                            <a href="mainpageesub.php?search=fabrics&page=1" class="list-group-item"><img src="others/miscfabricsjutefabric.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Cotton Fabrics</a>
                            <a href="mainpageesub.php?search=fabrics&page=1" class="list-group-item"><img src="others/miscfabricsjutefabric.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Silk Fabrics</a>
                            <a href="mainpageesub.php?search=fabrics&page=1" class="list-group-item"><img src="others/miscfabricsjutefabric.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Linen Fabrics</a>
                            <a href="mainpageesub.php?search=fabrics&page=1" class="list-group-item"><img src="others/miscfabricsjutefabric.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Wool Fabrics</a>
                            <a href="mainpageesub.php?search=fabrics&page=1" class="list-group-item"><img src="others/miscfabricsjutefabric.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Jute Fabrics</a>
                            <a href="mainpageesub.php?search=fabrics&page=1" class="list-group-item"><img src="others/miscfabricsjutefabric.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Ramie Fabrics</a>
                            <a href="mainpageesub.php?search=fabrics&page=1" class="list-group-item"><img src="others/miscfabricsjutefabric.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Hemp Fabrics</a>
                            <a href="mainpageesub.php?search=fabrics&page=1" class="list-group-item"><img src="others/miscfabricsjutefabric.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Chiffon Fabrics</a>
                            <a href="mainpageesub.php?search=fabrics&page=1" class="list-group-item"><img src="others/miscfabricsjutefabric.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Fabrics</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpageesub.php?search=fabrics&page=1" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Fabrics</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 categoriestopprnt">
                        <ul id="categories">

                            <li><a href="mainpageesub.php?search=fabrics&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;cotton fabrics<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpageesub.php?search=fabrics&page=1" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;silk fabrics<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpageesub.php?search=fabrics&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;linen fabrics<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpageesub.php?search=fabrics&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;wool fabrics<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpageesub.php?search=fabrics&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;jute fabrics<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpageesub.php?search=fabrics&page=1" target="_blank"><img src="icons/backpackicons.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;ramie fabrics<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpageesub.php?search=fabrics&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;hemp fabrics<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpageesub.php?search=fabrics&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;chiffon fabrics<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpageesub.php?search=fabrics&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;misc fabrics<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php echo groupedCarousels('miscfabricscottonfabrics.gif', 'miscfabricshempfabrics.gif', 'miscfabricswoolfabric.gif', 'miscfabricsjutefabric.gif', 498);?>
                </div>
            </div>
<!--            ends here-->


                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;border-bottom:1px solid gainsboro;">
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
                        <img src="banners/different.png" class="img-responsive bannerlg"/>
                    </a>
                </div>
            </div>

            <!--Ends here -->

             <!--start here-->
            <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="mainpage.php?search=misc&sub=misc&page=1"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Misc</h4></a></div>
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
                            <a href="mainpage.php?search=misc&sub=misc&page=1" class="list-group-item"><img src="others/miscmischeadbands.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Bandanas</a>
                            <a href="mainpage.php?search=misc&sub=misc&page=1" class="list-group-item"><img src="others/miscmischeadbands.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Head Bands</a>
                            <a href="mainpage.php?search=misc&sub=misc&page=1" class="list-group-item"><img src="others/miscmischeadbands.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Gloves</a>
                            <a href="mainpage.php?search=misc&sub=misc&page=1" class="list-group-item"><img src="others/miscmischeadbands.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Toys</a>
                            <a href="mainpage.php?search=misc&sub=misc&page=1" class="list-group-item"><img src="others/miscmischeadbands.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Socks</a>
                            <a href="mainpage.php?search=misc&sub=misc&page=1" class="list-group-item"><img src="others/miscmischeadbands.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Scarfs</a>
                            <a href="mainpage.php?search=misc&sub=misc&page=1" class="list-group-item"><img src="others/miscmischeadbands.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Laces</a>
                            <a href="mainpage.php?search=misc&sub=misc&page=1" class="list-group-item"><img src="others/miscmischeadbands.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Bags</a>
                            <a href="mainpage.php?search=misc&sub=misc&page=1" class="list-group-item"><img src="others/miscmischeadbands.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpage.php?search=misc&sub=misc&page=1" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">Misc</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 categoriestopprnt">
                        <ul id="categories">

                            <li><a href="mainpage.php?search=misc&sub=misc&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;bandanas<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=misc&sub=misc&page=1" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;headbands<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=misc&sub=misc&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;gloves<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=misc&sub=misc&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;toys<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=misc&sub=misc&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;socks<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=misc&sub=misc&page=1" target="_blank"><img src="icons/backpackicons.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;scarfs<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=misc&sub=misc&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;bags<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=misc&sub=misc&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;laces<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=misc&sub=misc&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;misc<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">


<!--            starts here-->
            <div class="row visible-md visible-lg">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php echo groupedCarousels('miscmiscgloves.gif', 'miscmiscbandanas.gif', 'miscmischeadbands.gif', 'miscmiscscarfs.gif', 498);?>
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
                    <a href="index.php">
                        
<img src="banners/varietytwo.png" class="img-responsive bannerlg"/>

                    </a>
                </div>
            </div>

            <!--Ends here -->



            <!--Ends here -->

             <!--start here-->
            <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:30px;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="mainpagee.php?search=misc&page=1"><h4 class="text-uppercase" style="color:white;font-weight:bold;">All Misc</h4></a></div>
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
                            <a href="mainpagee.php?search=misc&page=1" class="list-group-item"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Adidas</a>
                            <a href="mainpagee.php?search=misc&page=1" class="list-group-item"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Fubu</a>
                            <a href="mainpagee.php?search=misc&page=1" class="list-group-item"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Under-Armour</a>
                            <a href="mainpagee.php?search=misc&page=1" class="list-group-item"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Puma</a>
                            <a href="mainpagee.php?search=misc&page=1" class="list-group-item"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Kenya's Finest</a>
                            <a href="mainpagee.php?search=misc&page=1" class="list-group-item"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Calvin Klein</a>
                            <a href="mainpagee.php?search=misc&page=1" class="list-group-item"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Versace</a>
                            <a href="mainpagee.php?search=misc&page=1" class="list-group-item"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Nike</a>
                            <a href="mainpagee.php?search=misc&page=1" class="list-group-item"><img src="icons/boxicon.png" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Labels</a>



                        </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10" style="margin-top:5px;border:1px solid black; border-bottom:1px solid white;background-color:black;">
                            <a style="color:white;" href="mainpagee.php?search=misc&page=1" class="btn btn-block btn-sm"><h5 class="text-uppercase text-left" style="font-weight:bold;">All Misc</h5></a>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 categoriestopprnt">
                        <ul id="categories">

                            <li><a href="mainpagee.php?search=misc&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;adidas<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpagee.php?search=misc&page=1" target="_blank"><img src="icons/mensicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;fubu<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpagee.php?search=misc&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;under armour<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpagee.php?search=misc&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;puma<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpagee.php?search=misc&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;kenya's finest<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpagee.php?search=misc&page=1" target="_blank"><img src="icons/backpackicons.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;calvin klein<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpagee.php?search=misc&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;verscae<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpagee.php?search=misc&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;nike<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpagee.php?search=misc&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;misc labels<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php echo groupedCarousels('misclabelscalvinklein.gif', 'menslabelspuma.gif', 'misclabelsfubu.gif', 'labelsnike.gif', 498);?>
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
        xmlhttp.open('GET','miscbeltsloop.php',true);
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
        xmlhttp3.open('GET','miscdollsloop.php',true);
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
        xmlhttp4.open('GET','misccapsloop.php',true);
        xmlhttp4.send();
$('.loaderImage').fadeOut(3000);
    bagsloop();

}


//benies going in here
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
        xmlhttp7.open('GET','miscbeniesloop.php',true);
        xmlhttp7.send();
$('.loaderImage').fadeOut(3000);
    shoesloop();

}
//shoals going in here
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
        xmlhttp8.open('GET','miscshoalsloop.php',true);
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
        xmlhttp9.open('GET','miscfabricloop.php',true);
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
        xmlhttp10.open('GET','miscmiscloop.php',true);
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
        xmlhttp11.open('GET','misclabelsloop.php',true);
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
