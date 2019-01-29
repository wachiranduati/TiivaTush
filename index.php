<?php
session_start();
ob_start();
require 'search.inc.php';
require 'core.inc.php';
require 'looptemplater.php';

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

// $_SESSION['$user_id'];
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
<title>Tiiva.co.ke | Home</title>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php require 'templates/resourcelinks/headerlinks.php';?>

</head>
    <body onload="sportswear();boxed();">
        <?php 
        require('templates/header.php');
        ?>
<!-- stick it here -->
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
                            <a href="sportswear.php" target="_blank" class="list-group-item"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/> &nbsp;&nbsp;Sportswear</a>
                            <a href="Mens.php" target="_blank" class="list-group-item"><img src="icons/mensicon.svg" class="img-responsive" style="height:25px;display:inline;"/> &nbsp;&nbsp;Mens</a>
                            <a href="women.php" target="_blank" class="list-group-item"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/> &nbsp;&nbsp; Womens</a>
                            <a href="kids.php" target="_blank" class="list-group-item"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/> &nbsp;&nbsp; Kids</a>
                            <a href="household.php" target="_blank" class="list-group-item"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/> &nbsp;&nbsp; Household</a>
                            <a href="bag.php" target="_blank" class="list-group-item"><img src="icons/backpackicons.svg" class="img-responsive" style="height:25px;display:inline;"/> &nbsp;&nbsp; Bags</a>
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
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border:1px solid white;">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-5 col-xs-5 visible-lg visible-md">
                        <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 categoriestopprnt">
                        <ul id="categories" style="line-height:2.5;padding-bottom:0;margin-bottom:2px;">
                            <li class="text-center" style="font-weight:bold;background-color:black;border:1px solid white;"><span style="color:orange;" class="text-uppercase text-center">Categories</span></li>
                            <li><a href="sportswear.php" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Sportswear<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                            <li><a href="Mens.php" target="_blank"><img src="icons/mensicon.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Mens<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="women.php" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Womens<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="kids.php" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Kids<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="household.php" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Household<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="bag.php" target="_blank"><img src="icons/backpackicons.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Bags<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="shoes.php" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Shoes<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="labels.php" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Labels<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="misc.php" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Misc<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

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
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 featurediv"><a href="sportswear.php"><img src="banners/categories/sportswear.png" class="img-responsive featured"/></a></div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 featurediv"><a href="women.php"><img src="banners/categories/womens.png" class="img-responsive featured"/></a></div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 featurediv"><a href="Mens.php"><img src="banners/categories/mens.png" class="img-responsive featured"/></a></div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 featurediv"><a href="shoes.php"><img src="banners/categories/shoes.png" class="img-responsive featured"/></a></div>
            </div>


            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin-top:1%;">
                    <a href="#">
                        <img src="banners/different.png" class="img-responsive bannerlg"/>
                    </a>
                </div>
            </div>
            <!--start here-->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:1%;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a style="color:white;" href="Mens.php" class="btn btn-block"><h4 class="text-uppercase" style="font-weight:bold;">Men's</h4></a></div>
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
                            <a href="manpage.php?search=sportswear&sub=female&page=1" target="_blank" class="list-group-item"><img src="others/sportswearshoes.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Sportswear</a>
                            <a href="manepage.php?search=Formalwear&sub=female&page=1" target="_blank" class="list-group-item"><img src="others/mensofficialpants.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Mens Formalwear</a>
                            <a href="manepage.php?search=sweaters&sub=female&page=1" target="_blank" class="list-group-item"><img src="others/menssweaterstrenchcoats.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Sweaters</a>
                            <a href="manepage.php?search=pants&sub=female&page=1" target="_blank" class="list-group-item"><img src="others/menspantskhakipants.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Mens Pants</a>
                            <a href="manepage.php?search=shirts&sub=female&page=1" target="_blank" class="list-group-item"><img src="others/menstshirtshenlytshirts.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Mens Tshirts</a>
                            <a href="manepage.php?search=blazers&sub=female&page=1" target="_blank" class="list-group-item"><img src="others/mensblazerscasualcapblazers.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Mens Blazers</a>
                            <a href="manepage.php?search=blazers&sub=female&page=1" target="_blank" class="list-group-item"><img src="others/mensjacketsvarsityjackets.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Mens Jackets</a>
                            <a href="manpage.php?search=shoes&sub=female&page=1" target="_blank" class="list-group-item"><img src="others/shoesmiscthederbys.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Mens Shoes</a>
                            <a href="manpage.php?search=misc&sub=female&page=1" target="_blank" class="list-group-item"><img src="others/mensmisctrinkets.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Mens Misc</a>



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

                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 categoriestopprnt">
                                
                        <ul id="categories">

                            <li><a href="manpage.php?search=sportswear&sub=female&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Mens Sportswear<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=officials&sub=female&page=1" target="_blank"><img src="icons/mensicon.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Mens Formalware<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=sweaters&sub=female&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Mens Sweaters<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=pants&sub=female&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Mens Pants<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=shirts&sub=female&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Mens Tshirts<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=blazers&sub=female&page=1" target="_blank"><img src="icons/backpackicons.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Mens Blazers<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=blazers&sub=female&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Mens Jackets<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manpage.php?search=shoes&sub=female&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Mens Shoes<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manpage.php?search=misc&sub=female&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Mens Misc<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="border-top:1px solid gainsboro;border-right:1px solid white;">

<!--            starts here-->
            <div class="row visible-lg visible-md" style="padding: 0;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;">
                   <?php echo groupedCarousels('menssportswear.png', 'mensshirts.gif', 'mensofficial.gif', 'mensjackets.gif', 498);?>
                    
                </div>
            </div>
<!--            ends here-->

                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;border-bottom:1px solid gainsboro;">
                                    <?php echo spinnersHolder('boxmens');?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row visible-lg visilbe-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin-top:1%;">
                    <a href="Mens.php">
                        <img src="banners/variety.png" class="img-responsive bannerlg"/>
                    </a>
                </div>
            </div>


            <!--Ends here -->

             <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:1%;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a href="women.php" class="btn btn-block" style="color:white;"><h4 class="text-uppercase" style="font-weight:bold;">Women's</h4></a></div>
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
                            <a href="mainpage.php?search=womens&sub=dresses&page=1" class="list-group-item"><img src="others/womensdresses.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Dresses</a>
                            <a href="manpage.php?search=sportswear&sub=male&page=1" class="list-group-item"><img src="others/womenssportswearpants.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Sportswear</a>
                            <a href="manpage.php?search=bags&sub=male&page=1" class="list-group-item"><img src="others/womensbagsquiltedbags.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Womens Bags</a>
                            <a href="manepage.php?search=sweaters&sub=male&page=1" class="list-group-item"><img src="others/womenssweaterscardigans.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Sweaters</a>
                            <a href="manepage.php?search=shirts&sub=male&page=1" class="list-group-item"><img src="others/womenstops.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Womens Tops</a>
                            <a href="manepage.php?search=pants&sub=male&page=1" class="list-group-item"><img src="others/womenspantsjumpsuits.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Womens Pants</a>
                            <a href="manepage.php?search=officials&sub=male&page=1" class="list-group-item"><img src="others/womensofficialtrousers.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Formals</a>
                            <a href="manepage.php?search=blazers&sub=male&page=1" class="list-group-item"><img src="others/womensblazersdrapedblazers.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Blazers</a>
                            <a href="manpage.php?search=misc&sub=male&page=1" class="list-group-item"><img src="others/womensmiscgloves.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Womens Misc</a>



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

                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 categoriestopprnt">

                        <ul id="categories">

                            <li><a href="mainpage.php?search=womens&sub=dresses&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Womens Dresses<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manpage.php?search=sportswear&sub=male&page=1" target="_blank"><img src="icons/mensicon.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Womens Sportswear<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manpage.php?search=bags&sub=male&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Womens Bags<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=sweaters&sub=male&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Womens Sweaters<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=shirts&sub=male&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Womens Tops<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=pants&sub=male&page=1" target="_blank"><img src="icons/backpackicons.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Womens Pants<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=officials&sub=male&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Womens Formalware<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manepage.php?search=blazers&sub=male&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Womens Blazers<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="manpage.php?search=misc&sub=male&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Womens Misc<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>

                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="border-top:1px solid gainsboro;border-right:1px solid white;">

<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php echo groupedCarousels('womensdresses.gif', 'womenstops.gif', 'womenssweaters.gif', 'womensblazers.gif', 498);?>
                </div>
            </div>
<!--            ends here-->

                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;border-bottom:1px solid gainsboro;">
                                    <?php echo spinnersHolder('boxwomens');?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin-top:1%;">
                    <a href="Mens.php">
                        <img src="banners/merchant.png" class="img-responsive bannerlg"/>
                    </a>
                </div>
            </div>

            <!--Ends here -->

             <!--start here-->
            <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:1%;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" style="color:white;" href="shoes.php"><h4 class="text-uppercase" style="font-weight:bold;">Shoes</h4></a></div>
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
                            <a href="mainpage.php?search=shoes&sub=flats&page=1" target="_blank" class="list-group-item"><img src="others/shoesflatsdollshoes.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Flat Shoes</a>
                            <a href="mainpage.php?search=shoes&sub=sports&page=1" target="_blank" class="list-group-item"><img src="others/shoessportshoesjordans.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Sports Shoes</a>
                            <a href="mainpage.php?search=shoes&sub=toms&page=1" target="_blank" class="list-group-item"><img src="others/shoestomslaceespradille.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Toms Shoes</a>
                            <a href="mainpage.php?search=shoes&sub=boots&page=1" target="_blank" class="list-group-item"><img src="others/shoesbootsfurtrimmedboots.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Boots</a>
                            <a href="mainpage.php?search=shoes&sub=sandals&page=1" target="_blank" class="list-group-item"><img src="others/shoessandalsflatsandals.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Sandals</a>
                            <a href="mainpage.php?search=shoes&sub=loafers&page=1" target="_blank" class="list-group-item"><img src="others/shoesloafersmoctoepenny.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Loafer Shoes</a>
                            <a href="mainpage.php?search=shoes&sub=vans&page=1" target="_blank" class="list-group-item"><img src="others/shoesvansjackpurcell.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Vans Shoes</a>
                            <a href="mainpage.php?search=shoes&sub=rubber&page=1" target="_blank" class="list-group-item"><img src="others/shoesrubberexpedition.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Rubber Shoes</a>
                            <a href="mainpage.php?search=shoes&sub=misc&page=1" target="_blank" class="list-group-item"><img src="others/shoesmisclaceup.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Shoes</a>



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
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 categoriestopprnt">
                        <ul id="categories">

                            <li><a href="mainpage.php?search=shoes&sub=flats&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Flat shoes<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=sports&page=1" target="_blank"><img src="icons/mensicon.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Sports shoes<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=toms&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Toms shoes<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=boots&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Boots<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=sandals&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Sandals<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=loafers&page=1" target="_blank"><img src="icons/backpackicons.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Loafer Shoes<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=vans&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Vans<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=rubber&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Rubber Shoes<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=shoes&sub=misc&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Misc shoes<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="border-top:1px solid gainsboro;border-right:1px solid white;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php echo groupedCarousels('shoesflatshoes.gif', 'shoestoms.gif', 'shoessportsshoes.gif', 'shoesloafers.gif', 498);?>
                </div>
            </div>
<!--            ends here-->


                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;border-bottom:1px solid gainsboro;">
                                    <?php echo spinnersHolder('boxshoes');?>
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
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:1%;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="kids.php"><h4 class="text-uppercase" style="color:white;font-weight:bold;">kids</h4></a></div>
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
                            <a href="mainpage.php?search=kids&sub=sports&page=1" target="_blank" class="list-group-item"><img src="others/kidssportswear.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Kids Sportswear</a>
                            <a href="mainpage.php?search=kids&sub=offic&page=1" target="_blank" class="list-group-item"><img src="others/kidsofficialdresses.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Kids  Formalwear</a>
                            <a href="mainpage.php?search=kids&sub=sweats&page=1" target="_blank" class="list-group-item"><img src="others/kidssweaterscardigans.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Kids Sweaters</a>
                            <a href="mainpage.php?search=kids&sub=kshirts&page=1" target="_blank" class="list-group-item"><img src="others/kidstopstshirts.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Kids Tshirts</a>
                            <a href="mainpage.php?search=kids&sub=kblazers&page=1" target="_blank" class="list-group-item"><img src="others/kidsblazersboyfriendjackets.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Kids Blazers</a>
                            <a href="mainpage.php?search=misc&sub=dolls&page=1" target="_blank" class="list-group-item"><img src="others/kidsdollsanimaldolls.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Kids Dolls</a>
                            <a href="mainpagee.php?search=bags&page=1" target="_blank" class="list-group-item"><img src="others/kidsbagsbackpacks.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Kids Bags</a>
                            <a href="mainpagee.php?search=kids&page=1" target="_blank" class="list-group-item"><img src="others/kidslabelsoldnavy.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Kids Labels</a>
                            <a href="mainpage.php?search=kids&sub=kmisc&page=1" target="_blank" class="list-group-item"><img src="others/kidsmiscswimsuits.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Kids Misc</a>



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
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 categoriestopprnt">
                        <ul id="categories">

                            <li><a href="mainpage.php?search=kids&sub=sports&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Kids Sportswear<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=kids&sub=offic&page=1" target="_blank"><img src="icons/mensicon.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;kids Formalwear<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=kids&sub=sweats&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;kids sweaters<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=kids&sub=kshirts&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;kids tshirts<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=kids&sub=kblazers&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;kids blazers<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=misc&sub=dolls&page=1" target="_blank"><img src="icons/backpackicons.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;kids dolls<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpagee.php?search=bags&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;kids bags<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpagee.php?search=kids&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;kids labels<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=kids&sub=kmisc&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;kids misc<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="border-top:1px solid gainsboro;border-right:1px solid white;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php echo groupedCarousels('kidsdolls.gif', 'kidssportswear.gif', 'kidstops.gif', 'kidssweaters.gif', 498);?>
                </div>
            </div>
<!--            ends here-->


                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;border-bottom:1px solid gainsboro;">
                                    <?php echo spinnersHolder('boxkids');?>
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
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:1%;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="sportswear.php" style="color:white;"><h4 class="text-uppercase" style="font-weight:bold;">Sportswear</h4></a></div>
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
                            <a href="mainpage.php?search=sportswear&sub=joggers&page=1" target="_blank" class="list-group-item"><img src="others/sportsdeckhandjoggers.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Joggers Sports</a>
                            <a href="mainpage.php?search=sportswear&sub=shorts&page=1" target="_blank" class="list-group-item"><img src="others/sportswearshortssummershorts.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Shorts Sports</a>
                            <a href="mainpage.php?search=sportswear&sub=pants&page=1" target="_blank" class="list-group-item"><img src="others/sportswearcompressiontightspants.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Pants Sports</a>
                            <a href="mainpage.php?search=sportswear&sub=shirts&page=1" target="_blank" class="list-group-item"><img src="others/sportswearshirtssoccerjerseys.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Shirts Sports</a>
                            <a href="mainpage.php?search=sportswear&sub=vests&page=1" target="_blank" class="list-group-item"><img src="others/sportswearveststanktops.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Vests Sports</a>
                            <a href="mainpagee.php?search=bags&page=1" target="_blank" class="list-group-item"><img src="others/sportswearbagsdrawstringbags.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Bags Sports</a>
                            <a href="mainpage.php?search=sportswear&sub=shoes&page=1" target="_blank" class="list-group-item"><img src="others/sportswearshoessoccercleats.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Shoes Sports</a>
                            <a href="mainpageesub.php?search=socks&page=1" target="_blank" class="list-group-item"><img src="others/sportswearsocks.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Socks Sports</a>
                            <a href="mainpage.php?search=sportswear&sub=misc&page=1" target="_blank" class="list-group-item"><img src="others/sportswearmiscskates.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Sports</a>



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
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 categoriestopprnt">
                        <ul id="categories">

                            <li><a href="mainpage.php?search=sportswear&sub=joggers&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Sports Joggers<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=sportswear&sub=shorts&page=1" target="_blank"><img src="icons/mensicon.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Shorts sportswear<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=sportswear&sub=pants&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;pants sportswear<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=sportswear&sub=shirts&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;shirts sportswear<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=sportswear&sub=vests&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;vests sportswear<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpagee.php?search=bags&page=1" target="_blank"><img src="icons/backpackicons.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;bags sportswear<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=sportswear&sub=shoes&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;sportsshsoes<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpageesub.php?search=socks&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;socks sportswear<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=sportswear&sub=misc&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;misc sportswear<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="border-top:1px solid gainsboro;border-right:1px solid white;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php echo groupedCarousels('sportswearsocks.gif', 'sportswearvests.gif', 'sportswearshoes.gif', 'sportswearshorts.gif', 498);?>
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
                    <a href="sportswear.php">
                        <img src="banners/outdoors.png" class="img-responsive bannerlg"/>
                    </a>
                </div>
            </div>
            <!--Ends here -->

             <!--start here-->
            <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:1%;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="bag.php"><h4 class="text-uppercase" style="font-weight:bold;color:white;">Bags</h4></a></div>
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
                            <a href="mainpage.php?search=bags&sub=backpack&page=1" target="_blank" class="list-group-item"><img src="others/bagsbackpack.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Back-Packs</a>
                            <a href="mainpage.php?search=bags&sub=duffel&page=1" target="_blank" class="list-group-item"><img src="others/bagsdenimbarrelbags.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Duffel Bags</a>
                            <a href="mainpagee.php?search=bags&page=1" target="_blank" class="list-group-item"><img src="others/bagsdenimdesingerbags.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Denim Bags</a>
                            <a href="mainpage.php?search=bags&sub=clutch&page=1" target="_blank" class="list-group-item"><img src="others/bagsclutchclutchbags.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Clutches</a>
                            <a href="mainpage.php?search=bags&sub=slouch&page=1" target="_blank" class="list-group-item"><img src="others/bagsslouchshopperbags.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Slouch Bags</a>
                            <a href="mainpagee.php?search=bags&page=1" target="_blank" class="list-group-item"><img src="others/bagstravelsuitcasebags.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Travel Bags</a>
                            <a href="mainpagee.php?search=bags&page=1" target="_blank" class="list-group-item"><img src="others/bagsleathercrossbody.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Leather Bags</a>
                            <a href="mainpage.php?search=bags&sub=sling&page=1" target="_blank" class="list-group-item"><img src="others/bagsslingmessengerbags.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Sling Bags</a>
                            <a href="mainpage.php?search=bags&sub=misc&page=1" target="_blank" class="list-group-item"><img src="others/bagsmiscmakeupbag.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Bags</a>



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
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 categoriestopprnt">
                        <ul id="categories">

                            <li><a href="mainpage.php?search=bags&sub=backpack&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Back packs<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=bags&sub=duffel&page=1" target="_blank"><img src="icons/mensicon.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Duffel bags<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpagee.php?search=bags&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Denim bags<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=bags&sub=clutch&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Clutches<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=bags&sub=slouch&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Slouch bags<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpagee.php?search=bags&page=1" target="_blank"><img src="icons/backpackicons.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Travel bags<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpagee.php?search=bags&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Leather bags<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=bags&sub=sling&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Sling bags<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=bags&sub=misc&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Misc bags<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="border-top:1px solid gainsboro;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php echo groupedCarousels('bagsbackpack.gif', 'bagslingbag.gif', 'bagsclutch.gif', 'bagsduffelbags.gif', 498);?>
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
                    <a href="shop.php">
                        <img src="banners/handcrafted.png" class="img-responsive bannerlg"/>
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
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 featurediv"><a href="bag.php"><img src="banners/categories/bags.png" class="img-responsive featured"/></a></div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 featurediv"><a href="kids.php"><img src="banners/categories/kids.png" class="img-responsive featured"/></a></div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 featurediv"><a href="household.php"><img src="banners/categories/household.png" class="img-responsive featured"/></a></div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 featurediv"><a href="misc.php"><img src="banners/categories/misc.png" class="img-responsive featured"/></a></div>
            </div>


             <!--start here-->
           <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:1%;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a class="btn btn-block" href="household.php"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Household</h4></a></div>
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
                            <a href="mainpage.php?search=interiors&sub=duvets&page=1" target="_blank" class="list-group-item"><img src="others/householdbedroompanjamas.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Bedrm Articles</a>
                            <a href="mainpage.php?search=interiors&sub=fabrics&page=1" target="_blank" class="list-group-item"><img src="others/householdfabricshawls.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;House Fabrics</a>
                            <a href="mainpage.php?search=interiors&sub=carpets&page=1" target="_blank" class="list-group-item"><img src="others/householdcarpetscentrepiecemats.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Carpets</a>
                            <a href="mainpage.php?search=interiors&sub=towels&page=1" target="_blank" class="list-group-item"><img src="others/householdtowelsbeachtowels.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;House Towels</a>
                            <a href="mainpage.php?search=interiors&sub=curtains&page=1" target="_blank" class="list-group-item"><img src="others/householdcurtainsripplefoldcurtains.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Curtains</a>
                            <a href="mainpage.php?search=interiors&sub=pillows&page=1" target="_blank" class="list-group-item"><img src="others/householdpillows.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;House Pillows</a>
                            <a href="mainpage.php?search=interiors&sub=antiques&page=1" target="_blank" class="list-group-item"><img src="others/householdantiquesclocks.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Antiques</a>
                            <a href="mainpage.php?search=interiors&sub=wallart&page=1" target="_blank" class="list-group-item"><img src="others/householdwallartpictures.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;House Wallart</a>
                            <a href="mainpage.php?search=interiors&sub=misc&page=1" target="_blank" class="list-group-item"><img src="others/householdmischangers.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;House Misc</a>



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
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 categoriestopprnt">
                        <ul id="categories">

                            <li><a href="mainpage.php?search=interiors&sub=duvets&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Bedroom articles<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=fabrics&page=1" target="_blank"><img src="icons/mensicon.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;fabrics<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=carpets&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;carpets<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=towels&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;towels<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=curtains&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;curtains<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=pillows&page=1" target="_blank"><img src="icons/backpackicons.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;pillows<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=antiques&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;antiques<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=wallart&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;wallart<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=interiors&sub=misc&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;households misc<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="border-right:1px solid white;border-top:1px solid gainsboro;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php echo groupedCarousels('householdwallart.gif', 'householdbedsheets.gif', 'householdbathtowels.gif', 'householdpillows.gif', 498);?>
                </div>
            </div>
<!--            ends here-->


                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;border-bottom:1px solid gainsboro;">
                                    <?php echo spinnersHolder('boxhouseholds');?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin-top:1%;">
                    <a href="homepage.php">
                        <img src="banners/different.png" class="img-responsive bannerlg"/>
                    </a>
                </div>
            </div>

            <!--Ends here -->

             <!--start here-->
            <div class="row" style="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row visible-lg visible-md">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:1%;border:1px solid black; border-bottom:1px solid white;background-color:black;"><a href="misc.php" class="btn btn-block"><h4 class="text-uppercase" style="color:white;font-weight:bold;">Misc</h4></a></div>
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
                            <a href="mainpage.php?search=misc&sub=dolls&page=1" target="_blank" class="list-group-item"><img src="others/miscdollscartoondolls.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Dolls</a>
                            <a href="mainpage.php?search=misc&sub=slippers&page=1" target="_blank" class="list-group-item"><img src="others/miscslippersflipflops.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Slippers</a>
                            <a href="mainpage.php?search=misc&sub=sandals&page=1" target="_blank" class="list-group-item"><img src="others/miscsandalsgladiatorsandals.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Sandals</a>
                            <a href="mainpage.php?search=misc&sub=dolls&page=1" target="_blank" class="list-group-item"><img src="others/miscbeltsslimbelts.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Belts</a>
                            <a href="mainpage.php?search=misc&sub=underwear&page=1" target="_blank" class="list-group-item"><img src="others/miscunderwearsportsbras.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Underwears</a>
                            <a href="mainpage.php?search=misc&sub=hats&page=1" target="_blank" class="list-group-item"><img src="others/mischatsfedorahats.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Hats</a>
                            <a href="mainpage.php?search=misc&sub=sandals&page=1" target="_blank" class="list-group-item"><img src="others/miscsandalshandmadesandals.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Sandals</a>
                            <a href="mainpageesub.php?search=fabrics&page=1" target="_blank" class="list-group-item"><img src="others/miscfabricscottonfabrics.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Fabrics</a>
                            <a href="mainpageesub.php?search=misc&page=1" target="_blank" class="list-group-item"><img src="others/miscmiscscarfs.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;Misc Misc</a>



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
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 categoriestopprnt">
                        <ul id="categories">

                            <li><a href="mainpage.php?search=misc&sub=dolls&page=1" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;miscs dolls<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=misc&sub=slippers&page=1" target="_blank"><img src="icons/mensicon.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;miscs slippers<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=misc&sub=sandals&page=1" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;miscs sandals<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=misc&sub=dolls&page=1" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;miscs belts<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=misc&sub=underwear&page=1" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;underwears<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=misc&sub=hats&page=1" target="_blank"><img src="icons/backpackicons.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;miscs hats<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpage.php?search=misc&sub=sandals&page=1" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;miscs sandals<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpageesub.php?search=fabrics&page=1" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;miscs fabrics<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="mainpageesub.php?search=misc&page=1" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;miscs misc<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="border-top:1px solid gainsboro;">


<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php echo groupedCarousels('mischats.gif', 'Miscslippers.gif', 'miscsandals.gif', 'miscunderwears.gif', 498);?>
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
                            <a href="labels.php" class="list-group-item"><img src="others/bagslabelskenyasfinest.gif" class="img-responsive" style="height:25px;display:inline;"/>&nbsp;&nbsp;LV</a>
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
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md" style="height:400px; border-bottom:1px solid gainsboro;border-right:1px solid white;border-top:1px solid white;">
                                    <div class="row" id="categoriescontainer">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 categoriestopprnt">
                        <ul id="categories">

                            <li><a href="Electronics.php" target="_blank"><img src="icons/sportswearicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Reebok labels<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="Mensstore.php" target="_blank"><img src="icons/mensicon.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Channel labels<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="womensstore.php" target="_blank"><img src="icons/womens.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;nike labels<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="kidsstore.php" target="_blank"><img src="icons/kidsicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;versace labels<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="living.php" target="_blank"><img src="icons/householdicon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;prada labels<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="bagsstore.php" target="_blank"><img src="icons/backpackicons.svg" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;old navy labels<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="outdoors.php" target="_blank"><img src="icons/shoesicons.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;converse labels<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="otherstores.php" target="_blank"><img src="icons/labelsgifticon.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;Gucci labels<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>
                            <li><a href="labels.php" target="_blank"><img src="icons/caps.png" class="img-responsive" style="height:25px;display:inline;"/><span class="text-uppercase">&nbsp;&nbsp;misc labels<span class="glyphicon glyphicon-chevron-right pull-right" style="padding-top:7%;"></span></span></a></li>

                        </ul>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="border-top:1px solid gainsboro;">

<!--            starts here-->
            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php echo groupedCarousels('labelsadidas.gif', 'labelschanel.gif', 'labelsnike.gif', 'labelsversace.gif', 498);?>
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
                        <img src="banners/thankyou.png" class="img-responsive bannerlg"/>
                    </a>
                </div>
            </div>
            <!-- stick it here -->
</div>
            <!--Ends here -->
        <!-- THE TIIVA FOOTER FALLS HERE -->
        <?php require 'templates/footer.php';?>
        <!-- THE TIIVA FOOTER FALLS HERE -->


        <script>

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};


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
                    xmlhttp4.open('GET','indexmensloop.php',true);
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

            $(document).ready(function(){
               $('[name="search_text"]').tooltip({
                  title:'Use the input box below to search through items on Tiiva',
                   html:true,
               });

            });
</script>


    </body>
</html>
