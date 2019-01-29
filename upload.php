<?php
session_start();
ob_start();
require 'core.inc.php';

//echo $_SESSION['$user_id'];


if( isset($_SESSION['$user_id'])){

}else{
   //header('Location:index.php');

}



require 'connect.php';
//require 'uploadmeat.php';

?>

<!DOCTYPE html>
<html>
<title>Tiiva | Mtumba Upload Page</title>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php require 'templates/resourcelinks/headerlinks.php';?>

    <style type="text/css">

    </style>

</head>
    <body onload="mynamehere();">
        <div class="container-fluid">
            <div class="row" style="background-color:rgba(0,0,0,0.2)">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row" style="font-family:kok;padding-top:0.5%;padding-bottom:0.5%;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="boxtainer"></div>

                        </div>
                </div>
            </div>
             <div class="row visible-lg visible-md">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><a href="index.php"><img src="images/otherphotoo.png" class="img-responsive"/></a></div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="row" style="margin-top:5%;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2 class="text-center text-uppercase visible-lg visible-md" style="margin-top:-10px; color:orange;font-family:kok;">Mtumba upload page</h2>
                            <h2 class="text-center text-uppercase visible-sm visible-xs" style="margin-top:-10px; color:orange;font-family:kok;">Mtumba upload page</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <a class="text-capitalize" style="color:black;text-decoration:none;"><small>More about us?</small></a>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <a href="Howto.php" class="text-uppercase" style="text-decoration:none;"><small>FAQS</small></a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <a href="aboutus.php" class="text-uppercase" style="text-decoration:none;"><small>About us</small></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <a href="termsofuse.php" class="text-uppercase" style="text-decoration:none;"><small>Store policy</small></a>
                            </div>
                        </div>

                </div>

            </div>

             <div class="row visible-sm visible-xs">
                 <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"><a href="index.php"><img src="images/otherphotoo.png" class="img-responsive"/></a></div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>

            </div>


            <!-- <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 " style="border-top:1px solid gainsboro;">
                </div>
            </div> -->

            <!-- <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <span class="visible-lg visible-md">
                        <a href="index.php">Tiiva</a>
                         <i class="mdi mdi-chevron-right"></i>
                          <a href="sellerprof.php">Merchant Home
                          </a> <i class="mdi mdi-chevron-right"></i>
                          <a href="upload.php">Upload page</a>
                    </span>
                </div>
            </div> -->
            <div class="row visible-lg visible-md" style="height:300px;background-image:url(editions/pexels-photo-11744.jpeg);background-size:cover;background-position:50%;margin-bottom:1%;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div class="row" style="margin-top:1%;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h2 class="text-center text-uppercase visible-sm visible-xs" style="margin-top:-10px; color:orange;font-family:kok;">Mtumba upload page</h2>
                            </div>
                        </div>
                        <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="background-image:url(editions/manontop.jpeg);background-repeat:no-repeat;background-size:cover;background-position:50%;border-radius:50%;width:150px;height:150px;"></div> -->
                        <div class="row" style="position:absolute;bottom:0.2%;right:1.3%;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 visible-lg visible-md"><h5 class="text-right text-uppercase" style="margin-top:-10px; color:white;font-family:kok;text-shadow:1px 1px 1px black;" id="boxlabels">Tiiva Shack upload page</h5></div>
                            <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 visible-sm visible-xs"><h5 class="text-center text-uppercase" style="margin-top:-10px; color:orange;font-family:kok;" id="boxlabels">Tiiva Shack upload page</h5></div> -->
                         </div>

                         <div class="row" style="margin-top:7%;">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="height:200px;border:1px solid white;background-image:url(editions/pexels-photo-11744.jpeg);background-size:cover;background-position:50%;">

                                </div>
                         </div>
                </div>
             </div>

             <div class="row visible-sm visible-xs">
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     <h4 class="text-center text-uppercase visible-sm visible-xs" style="color:orange;font-family:kok;">Mtumba upload page</h4>
                 </div>
             </div>

            <div class="row visible-sm visible-xs" style="height:200px;background-image:url(editions/pexels-photo-11744.jpeg);background-size:cover;background-position:50%;margin-bottom:10%;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="row" style="position:absolute;right:4%;margin-top:40%;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 visible-sm visible-xs"><h5 class="text-center text-uppercase" style="color:white;font-family:kok;" id="boxlabels2">Tiiva Shack upload page</h5></div>
                    </div>
                    <div class="row" style="position:absolute;margin-top:37%;margin-bottom:2%;">
                        <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div> -->
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="background-image:url(editions/manontop.jpeg);background-repeat:no-repeat;background-size:cover;background-position:50%;border-radius:50%;width:100px;height:100px;"></div>
                    </div>
                </div>
             </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped active" id="_progress" role="progressbar"
                      aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                        0%
                      </div>
                    </div>
                </div>
            </div>

            <span class=""><a href="index.php">Tiiva</a> <i class="mdi mdi-chevron-right"></i> <a href="sellerprof.php">Merchant Home </a> <i class="mdi mdi-chevron-right"></i> <a href="upload.php">Upload page</a></span>

<!--
            <div class="row" style="margin:20px 0:">
                <div class="col-lg-12 col-lg-md-12 col-sm-12 col-xs-12">
                    <div style="width:10%; background-color:blue;">
                    <p class="text-center" style="padding:2px;">Progress</p>
                        </div>
                </div>
            </div>
-->

            <div class="row">
                <div class="col-xs-12" id="cartitems"></div>
            </div>
            <div class="row" style="padding:25px;border:1px solid gainsboro;margin-top:10px;">
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 visible-lg visible-md"></div>
                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 visible-lg visible-md" style="padding:10px;">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="row">
                                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="border:1px solid gainsboro;">
                                                    <h4 class="text-center text-uppercase" style="color:orange;">Image 1</h4>
                                                <img class="img-responsive" src="images/1.jpg" id="image"/>
                                                </div>
                                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:15px;">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="border:1px solid gainsboro;">
                                                            <h4 class="text-center text-uppercase" style="color:orange;">Image 2</h4>
                                                            <img src="images/1.jpg" id="image2" class="img-responsive"/>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"style="border:1px solid gainsboro;">
                                                            <h4 class="text-center text-uppercase" style="color:orange;">Image 3</h4>
                                                            <img class="img-responsive" id="image3" src="images/1.jpg" />
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12" style="margin-top:10px;">
                                                        <p style="margin-top:5px;">We offer this service to you the seller for free. Our take on this is 10% of each sale. We do not influence your price but we try and ensure you provide a reasonable pricing for your item. Final amount tab is automated by the price you provide for the item on sale.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 visible-lg visible-md"></div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="row">

                                <h2 class="text-uppercase text-center" style="font-family:kok;background-color:gainsboro;color:white;">Product Upload Form</h2>
                                 <form role="form" id="file-form" action="uploadmeat.php" method="post" enctype="multipart/form-data">
                                     <div class="form-group">
                                          <label for="pwd"><span style="color:red">*</span>Item Name:</label>
                                          <input type="text" class="form-control" maxlength="20" id="itname" name="itname" placeholder="Itemname+colour i.e Black dress">
                                        </div>
                                <div class="form-group">
                                  <label for="sel1"><span style="color:red">*</span>Main Category (select one):</label>
                                  <select class="form-control" id="maincategory" name="maincategory" onchange="showsubs(this.value);">
                                    <option disabled selected>Select item category</option>
                                    <option value="mens">Mens</option>
                                    <option value="womens">Womens</option>
                                    <option value="kids">Kids</option>
                                    <option value="interiors">Interiors</option>
                                    <option value="sportswear">Sportswear</option>
                                    <option value="shoes">Shoes</option>
                                    <option value="misc">Misc</option>
                                    <option value="bags">Bags</option>
                                  </select>
                                </div>

                                <div class="form-group">
                                  <label for="sel1"><span style="color:red">*</span>Category (select one):</label>
                                  <select class="form-control" style="font-family:kok;" id="subcategory" name="subcategory">
                                      <option disabled selected>Select the item</option>
                                      <optgroup label="SPORTSWEAR" id="sportswearid">Sportswear
                                    <option value="shorts">Shorts</option>
                                    <option value="pants">Pants</option>
                                    <option value="shirts">Shirts</option>
                                    <option value="vests">Vests</option>
                                    <option value="shorts">Shorts</option>
                                    <option value="shoes">Shoes</option>
                                    <option value="socks">Socks</option>
                                    <option value="misc">Sports Misc</option>
                                          </optgroup>
                                      <optgroup label="MENS" id="mensid">Mens
                                    <option value="sports">Sports</option>
                                    <option value="officials">Officials</option>
                                    <option value="sweaters">Sweaters</option>
                                    <option value="shorts">Shorts</option>
                                    <option value="pants">Pants</option>
                                    <option value="shirts">Shirts &amp; Tshirts</option>
                                    <option value="blazers">Blazers &amp; Jackets</option>
                                    <option value="bags">Bags</option>
                                    <option value="mens">Mens Misc</option>
                                      </optgroup>
                                      <optgroup label="WOMENS" id="womensid">Womens
                                    <option value="dresses">Dresses</option>
                                    <option value="sports">Sports</option>
                                    <option value="officials">Officials</option>
                                    <option value="sweaters">Sweaters</option>
                                    <option value="shirts">Tops, Shirts &amp; Tshirts</option>
                                    <option value="blazers">Blazers &amp; Jackets</option>
                                    <option value="pants">Pants</option>
                                    <option value="shorts">Shorts</option>
                                    <option value="bags">Bags</option>
                                    <option value="misc">Womens Misc</option>
                                      </optgroup>
                                      <optgroup label="KIDS" id="kidsid">Kids
                                    <option value="sports">Sports</option>
                                    <option value="offic">Officials</option>
                                    <option value="sweats">Sweaters</option>
                                    <option value="kshirts">Tshirts</option>
                                    <option value="kblazers">Blazers &amp; Jackets</option>
                                    <option value="dolls">Dolls</option>
                                    <option value="kpants">Pants &amp; Shorts</option>
                                    <option value="bags">Bags</option>
                                    <option value="kmisc">Kids Misc</option>
                                      </optgroup>
                                      <optgroup label="HOUSEHOLD" id="interiorsid">Household
                                    <option value="duvets">Duvet</option>
                                    <option value="carpets">Carpets</option>
                                    <option value="towels">Towels</option>
                                    <option value="curtains">Curtains</option>
                                    <option value="pillows">Pillows</option>
                                    <option value="antiques">Antiques</option>
                                    <option value="wallart">Wall art</option>
                                    <option value="misc">Household Misc</option>
                                      </optgroup>
                                      <optgroup label="BAGS" id="bagsid">Bags
                                    <option value="backpack">Back Pack</option>
                                    <option value="duffel">Duffel</option>
                                    <option value="clutch">Clutch</option>
                                    <option value="slouch">Shoulder Bags</option>
                                    <option value="misc">Bags Misc</option>
                                      </optgroup>
                                      <optgroup label="SHOES" id="shoesid">Shoes
                                    <option value="sports">Sports Shoes</option>
                                    <option value="flats">Flats</option>
                                    <option value="toms">Toms</option>
                                    <option value="boots">Boots</option>
                                    <option value="sandals">Sandals &amp; Slippers</option>
                                    <option value="loafers">Loafers</option>
                                    <option value="vans">Converse &amp; Vans</option>
                                    <option value="rubber">Rubber</option>
                                    <option value="misc">Shoes Misc</option>
                                      </optgroup>
                                      <optgroup label="MISC" id="miscid">Misc
                                    <option value="dolls">Dolls</option>
                                    <option value="belts">Belts</option>
                                    <option value="hats">Hats</option>
                                    <option value="underwear">Underwear</option>
                                    <option value="socks">Socks</option>
                                    <option value="fabrics">Fabrics</option>
                                    <option value="misc">Misc Misc</option>
                                      </optgroup>
                                      <optgroup label="GENERAL MISC">
                                      <option value="misc">Misc</option>
                                      </optgroup>


                                  </select>
                                </div>

                                 <div class="form-group">
                                  <label for="sel1"><span style="color:red">*</span>Size (select one):</label>
                                  <select class="form-control" id="sel1" name="size">
                                    <option value="XL">Extra Large "XL"</option>
                                    <option value="L">Large "L"</option>
                                    <option value="M">Medium "M"</option>
                                    <option value="S">Small "S"</option>
                                    <option value="Xs">Extra Small "XS"</option>
                                      </select>
                                </div>


                                <div class="form-group">
                                  <label for="email"><span style="color:red">*</span>Label (Name of item designer):</label>
                                  <input type="text" class="form-control" name="label" id="label" placeholder="Enter label Name i.e Old Navy">
                                </div>



                                     <div class="row">
                                     <div class="col-xs-4">
                                        <label for="fl1"><span style="color:red">*</span>Image 1:</label>
                                         <input type="file" id="file" name="file" style="display:none;"/>
                                         <input type="button" class="btn btn-primary btn-xs" value="Choose file.." onclick="document.getElementById('file').click();"/>

                                     </div>

                                      <div class="col-xs-4">
                                        <label for="fl1"><span style="color:red">*</span>Image 2:</label>
                                         <input type="file" id="file2" name="file2" style="display:none;"/>
                                         <input type="button" class="btn btn-primary btn-xs" value="Choose file.." onclick="document.getElementById('file2').click();"/>

                                     </div>
                                      <div class="col-xs-4">
                                        <label for="fl1"><span style="color:red">*</span>Image 3:</label>
                                         <input type="file" id="file3" name="file3" style="display:none;"/>
                                         <input type="button" class="btn btn-primary btn-xs" value="Choose file.." onclick="document.getElementById('file3').click();"/>

                                     </div>
                                     </div>

                                     <div class="row visible-sm visible-xs">
                                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <img src="images/1.jpg" id="image4" class="img-responsive"/>
                                         </div>
                                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <img src="images/1.jpg" id="image5" class="img-responsive"/>
                                         </div>
                                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <img src="images/1.jpg" id="image6" class="img-responsive"/>
                                         </div>
                                     </div>



                                  <h4><strong><span style="color:red">*</span>Sex</strong></h4>

                                  <label class="radio-inline"><input type="radio" name="sex" value="Male"> Male</label>
                                  <label class="radio-inline"><input type="radio" name="sex" value="Female"> Female</label>
                                  <label class="radio-inline"><input type="radio" name="sex" checked value="Unisex"> Unisex</label>

                                         <div class="row">
                                             <br>
                                        <div class="col-xs-4">
                                        <label for="ex1" class="visible-lg visible-md"><span style="color:red">*</span>Length/height(Inch)</label>
                                        <label for="ex1" class="visible-sm visible-xs">Length(Inch)</label>
                                          <input class="form-control" id="height" name="height" type="number" placeholder="length">
                                        </div>
                                        <div class="col-xs-4">
                                          <label for="ex2" class="visible-lg visible-md"><span style="color:red">*</span>Width/Waist(Inch)</label>
                                          <label for="ex2" class="visible-sm visible-xs"><span style="color:red">*</span>Waist(Inch)</label>
                                          <input class="form-control" id="width" name="width" type="number" placeholder="width">
                                        </div>
                                        <div class="col-xs-4">
                                          <label for="ex3" class="visible-lg visible-md"><span style="color:red">*</span>Bust/Chest(optional)</label>
                                          <label for="ex3" class="visible-sm visible-xs">Chest(optnal)</label>
                                        <input class="form-control" id="chest" name="chest" type="number" placeholder="bust">
                                          </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-xs-12">
                                                  <div class="form-group">
                                          <label for="sel1"><span style="color:red">*</span>Condition (Select one):</label>
                                          <select class="form-control" id="rating" name="rating">
                                            <option value="1" style="color:orange;"><p>&#9734</p></option>
                                            <option value="2" style="color:orange;"><p>&#9734 &#9734</p></option>
                                            <option value="3" style="color:orange;"><p>&#9734 &#9734 &#9734</p></option>
                                            <option value="4" style="color:orange;"><p>&#9734 &#9734 &#9734 &#9734</p></option>
                                            <option value="5" style="color:orange;"><p>&#9734 &#9734 &#9734 &#9734 &#9734</p></option>

                                          </select>

                                        </div>
                                        <div class="form-group">
                                          <label for="pwd"><span style="color:red">*</span>Item price:(Ksh)</label>
                                          <input type="number" class="form-control" id="price" name="price" placeholder="Item price(Ksh)">
                                        </div>

                                         <div class="form-group">
                                          <label for="cut">Final amount you get:(Ksh)</label>
                                          <input type="text" class="form-control cut" id="cut" name="cut" readonly placeholder="Item price(Ksh)">
                                        </div>

                                        <div id="notification">
                                        <button type="button" onclick="twende();" id="upload_Button" class="btn btn-lg btn-success btn-block">Publish Item</button>
                                        </div>
                                          </div>
                                          </div>



                                      </form>
                                            <!-- Share or like us on social media -->
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 social" style="margin-top:1%;"><h5 style="display:inline;font-family:kok;" class="text-capitalize">Share, like and chat us up on </h5>
                                                    <a href="www.facebook.com/Tiiva"><span class="mdi mdi-facebook mdi-24px" style="color:blue;margin-right:1%;"></span></a>
                                                    <a href="www.twitter.com/tiiva"><span class="mdi mdi-twitter mdi-24px" style="color:blue;margin-right:1%;"></span></a>
                                                    <a href="www.googleplus.com/tiiva"><span class="mdi mdi-google-plus mdi-24px" style="color:red;margin-right:1%;"></span></a>
                                                    <a href="www.instagram.com/tiiva"><span class="mdi mdi-instagram mdi-24px" style="color:black;margin-right:1%;"></span></a>
                                                    <a href="www.youtube.com/tiiva"><span class="mdi mdi-youtube-play mdi-24px" style="color:red;margin-right:1%;"></span></a>

                                                    <script>
                                                        $(document).ready(function(){
                                                            $("div>a>span").hover(function(){
                                                                $(this).toggleClass("mdi-spin");
                                                            });
                                                        });
                                                    </script>

                                                </div>
                                            </div>
                                    </div>




                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row visible-sm visible-xs">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"></div>
                    <div class="col-lg-5 col-sm-5 col-md-12 col-xs-12" style="margin-top:10px;">
                    <p style="margin-top:5px;">We offer this service to you the seller for free. Our take on this is 10% of each sale. We do not influence your price but we try and ensure you provide a reasonable pricing for your item. Final amount tab is automated by the price you provide for the item on sale.</p>
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height:30px;">
<!--                        <p class="text-center">success</p>-->
                    </div>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
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
                                        <li><a style="color:black;" href="Termsofuse.php">FAQS</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 visible-lg visible-md"><h4>Quick Shop</h4>
                                    <ul class="list-unstyled">
                                        <li><a style="color:black;" href="mainpage.php">Tshirts</a></li>
                                        <li><a style="color:black;" href="Mens.php">Mens</a></li>
                                        <li><a style="color:black;" href="women.php">Womens</a></li>
                                        <li><a style="color:black;" href="shop.php">Gift Cards</a></li>
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
        <script type="text/javascript">
        function results(){
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
                    xmlhttp3.open('GET','uploadmeat.php',true);
                    xmlhttp3.send();


            }

            $(document).ready(function(){
            $("#price").keyup(function(){
                //alert("Value: " + $("#price").val());
                //$("#cut").val("Dolly Duck");
                //$("#cut").val(0.9*($("#price").val()) + "Ksh");
                  $("#cut").val(Math.round(0.9*($("#price").val())) + "Ksh");
            });
                });

            document.getElementById("file").onchange = function() {
                var reader = new FileReader();

                reader.onload = function(e){
                    document.getElementById("image").src = e.target.result;
                    document.getElementById("image4").src = e.target.result;
                };
                reader.readAsDataURL(this.files[0]);
            };

            document.getElementById("file2").onchange = function() {
                var reader = new FileReader();

                reader.onload = function(e){
                    document.getElementById("image2").src = e.target.result;
                    document.getElementById("image5").src = e.target.result;
                };
                reader.readAsDataURL(this.files[0]);
            };

            document.getElementById("file3").onchange = function() {
                var reader = new FileReader();

                reader.onload = function(e){
                    document.getElementById("image3").src = e.target.result;
                    document.getElementById("image6").src = e.target.result;
                };
                reader.readAsDataURL(this.files[0]);
            };

            function mynamehere(){
                if(window.XMLHttpRequest){
                    xmlhttp11 = new XMLHttpRequest();
                }else{
                    xmlhttp11 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp11.onreadystatechange = function(){
                if (xmlhttp11.readyState == 4 && xmlhttp11.status == 200){
                    document.getElementById('boxlabels').innerHTML= xmlhttp11.responseText;
                    document.getElementById('boxlabels2').innerHTML= xmlhttp11.responseText;

                    }
                    }
                    xmlhttp11.open('GET','myname.php',true);
                    xmlhttp11.send();


            }

            function twende(){
                var itname = document.getElementById("itname").value;
                var maincategory = document.getElementById("maincategory").value;
                var subcategory = document.getElementById("subcategory").value;
                var sel1 = document.getElementById("sel1").value;
                var label = document.getElementById("label").value;
                var file = document.getElementById("file").value;
                var file2 = document.getElementById("file2").value;
                var file3 = document.getElementById("file3").value;
                var sex = document.querySelector("input[name=sex]:checked").value;
                var height = document.getElementById("height").value;
                var width = document.getElementById("width").value;
                var chest = document.getElementById("chest").value;
                var rating = document.getElementById("rating").value;
                var price = document.getElementById("price").value;

                var datastring = 'itname=' + itname + '&maincategory=' + maincategory + '&subcategory=' + subcategory + '&sel1=' + sel1 + '&label=' + label + '&file=' + file + '&file2=' + file2 + '&file3=' + file3 + '&sex=' + sex + '&height=' + height + '&width' + width + '&chest' + chest + '&rating' + rating + '&price' + price;

                if(itname == "" || maincategory == "" || subcategory == "" || sel1 == "" || label == "" || file == "" || file2 == "" || file3 == "" || sex == "" || height == "" || width == "" || chest == "" || rating == "" || price == ""){
                    alert("Please Fill All Fields");
                    //alert(sex);
                    // i can change the inner html of a div element later for this
                }else{
                    var myform = document.getElementById("file-form");
                    var fd = new FormData(myform);
                    $.ajax({
                    type: "POST",
                    cache: false,
                    processData: false,
                    contentType: false,
                    url: "uploadmeat.php",
                    dataType: "html",
                    data: fd,
                    success: function(returneddata){
                        //alert(returneddata);
                        console.log(returneddata);
                        alert('Item has successfully been uploaded. Please refresh this page to make another upload');
                        $("#notification").html(returneddata);
                        //$("#upload_Button").attr("disabled","disabled");

                    },
                    xhr: function(){
                        var xhr = new window.XMLHttpRequest();
                        xhr.upload.addEventListener("progress", function (evt) {
                            if(evt.lengthComputable){
                                var percentComplete = evt.loaded / evt.total;
                                percentComplete = parseInt(percentComplete * 100);
                                $('#_progress').text(percentComplete + '% Complete');
                                $('#_progress').css('width', percentComplete + '%');
                                //console.log(percentComplete);
                            }
                        }, false);
                        return xhr;
                    }
                });

                }


            }
            var form = document.getElementById('file-form');
            form.onsubmit = function(event){
                event.preventDefault();

                // update button text.
                var uploadButton = document.getElementById("upload_Button");
                uploadButton.innerHTML = "uploading...";
            }
//            function twende(){
//               //var x = document.querySelector('input[name=sex]:checked').value;
//                //alert(x);
//                alert("THIS SHIT");
//            }

            function showsubs(xer){
                //alert(xer);
                $("optgroup:not"+"(#"+xer+"id)").hide();
                $("#"+xer+"id").show();
            }
            $(document).ready(function(){
                function loadaccount(){
                    $.ajax({
                        url: "account.php",
                        type: "GET",
                        success: function(data){
                            $("#boxtainer").html(data);
                        }
                    });
                }
                loadaccount();


            });

        </script>
    </body>
</html>
