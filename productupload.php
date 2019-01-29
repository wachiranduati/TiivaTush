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
<title>Tiiva | Shop</title>

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
                      aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width:1%">
                        1% COMPLETE
                        </div>
                    </div>
                </div>
            </div>


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

                                <h2 class="text-uppercase text-center visible-lg visible-md">Item Description form</h2>
                                <h3 class="text-uppercase text-center visible-xs visible-sm">Item Description form</h3>
                                 <form role="form" id="file_form" action="uploadmeat.php" method="post" enctype="multipart/form-data">
                                     <div class="form-group">
                                          <label for="pwd"><span style="color:red">*</span>Product Name:<small>(Choose a descriptive name)</small></label>
                                          <input type="text" class="form-control" maxlength="20" id="itname" name="itname" placeholder="i.e Black dress denim slimfit">
                                        </div>


                                <div class="form-group">
                                  <label for="sel1"><span style="color:red">*</span>Main Category:<small>(Choose a category in which the product will appear)</small></label>
                                  <select class="form-control" id="maincategory" name="maincategory" onchange="showsubs(this.value);">
                                    <option disabled selected style="font-family:kok;">Select The Best Option</option>
                                    <option value="electronics">Electronics &amp; Computers</option>
                                    <option value="entertainment">Entertainment &amp; Education</option>
                                    <option value="health">Health &amp; Beauty</option>
                                    <option value="jewelry">Fashion &amp; jewelry</option>
                                    <option value="supermarket">Supermarket</option>
                                    <option value="outdoors">Sports &amp; Outdoors</option>
                                    <option value="handmade">Handmade</option>
                                    <option value="home">Home, Garden &amp; Tools</option>
                                    <option value="automotive">Automotive, Industrial</option>

                                  </select>
                                </div>

                                <div class="form-group">
                                  <label for="sel1"><span style="color:red">*</span>SubCategory:</label>
                                  <select class="form-control" style="font-family:kok;" id="subcategory" name="subcategory">
                                      <option disabled selected>Make Sure You Go Through The Entire List Before Choosing</option>
                                      <optgroup label="ENTERTAINMENT &amp; EDUCATION" id="entertainmentid" style="display:none;">
                                            <option disabled style="color:red;font-style:italic;">Entertainment list</option>
                                            <option value="movies">Movies</option>
                                            <option value="cds">CDs &amp; Vinyl</option>
                                            <option value="games">Video Games</option>
                                            <option value="pcgaming">PC Gaming</option>
                                            <option value="collectibles">Entertainment Collectibles</option>
                                            <option value="Entertainmentothers">Other Entertainments</option>
                                        <option disabled style="color:red;font-style:italic;">Education</option>
                                            <option value="sciene">Science</option>
                                            <option value="nature">Nature</option>
                                            <option value="reading">Reading &amp; Writing</option>
                                            <option value="specialneeds">Special Needs &amp; Autism</option>
                                            <option value="geography">Geography</option>
                                            <option value="history">History</option>
                                            <option value="mathematics">Mathematics</option>
                                            <option value="multilingual">Multilingual</option>
                                            <option value="music">Music</option>
                                            <option value="art">Art</option>
                                            <option value="alphabet">Alphabet &amp; Language</option>
                                            <option value="electronictoys">Electronic learning Toys</option>
                                            <option value="educationothers">other Education</option>
                                        <option disabled style="color:red;font-style:italic;">Games</option>
                                            <option value="boardgames">Board &amp; Traditional Games</option>
                                            <option value="cardgames">Card Games &amp; Poler</option>
                                            <option value="miniatures">Electronic miniatures</option>
                                            <option value="wargames">War Games</option>
                                            <option value="roleplayinggames">Role Playing Games</option>
                                            <option value="gamesothers">Other Games</option>
                                        <option disabled style="color:red;font-style:italic;">Comics</option>
                                            <option value="comics">all Comics</option>
                                        <option disabled style="color:red;font-style:italic;">Stationery</option>
                                            <option value="stationery">all stationery</option>
                                        <option disabled style="color:red;font-style:italic;">Music, Instruments &amp; Gear</option>
                                            <option value="dj">DJ Equipment</option>
                                            <option value="pianos">Pianos</option>
                                            <option value="stringinst">string instruments</option>
                                            <option value="windinst">wind instruments</option>
                                            <option value="songbooks">Sheet Music &amp; Song Books</option>
                                            <option value="audioequip">Pro Audio Equipment</option>
                                            <option value="musicprod">Music Production Equipment</option>
                                            <option value="musicothers">other Music</option>
                                        <option disabled style="color:red;font-style:italic;">Books</option>
                                            <option value="fiction">Fiction</option>
                                            <option value="nonfiction">Non-Fiction</option>
                                            <option value="children">Children &amp; Teen</option>
                                            <option value="school">School &amp; Education</option>
                                            <option value="religious">Religious Books</option>
                                            <option value="biographies">Biographies</option>
                                            <option value="autobio">Autobiographies</option>
                                            <option value="selfhelp">Self Help</option>
                                            <option value="booksothers">Other books</option>

                                      </optgroup>
                                  <optgroup id="healthid" label="BEAUTY &amp; HEALTH" style="display:none;">Womens
                                          <option disabled style="color:red;font-style:italic;">Health</option>

                                    <option value="health">Healthcare</option>
                                    <option value="oral">Oral Care</option>
                                    <option value="sexual">Sexual Wellness</option>
                                    <option value="vitamins">Vitamins</option>
                                    <option value="suppliments">Suppliments</option>
                                    <option value="natural">Natural Remedies</option>
                                    <option value="homeopathic">Homeopathic Remedies</option>
                                    <option value="vision">Vision Care</option>
                                      <option disabled style="color:red;font-style:italic;">Hair &amp; Haircare</option>

                                    <option value="shampoo">Shampoo &amp; Conditioner</option>
                                    <option value="hairtools">Hair Tools</option>
                                    <option value="hairgrooming">Grooming</option>
                                    <option value="hairtreatment">Hair Treatment</option>
                                    <option value="hairextensions">Hair Extensions</option>
                                    <option value="haircare">Other Hair &amp; Haircare</option>

                                      <option disabled style="color:red;font-style:italic;">Bath &amp; Body</option>
                                      <option value="showeprod">Bath &amp; shower products</option>
                                      <option value="bodycare">Bodycare</option>

                                      <option disabled style="color:red;font-style:italic">Skincare</option>
                                      <option value="male">Male</option>
                                      <option value="female">Female</option>
                                      <option value="both">Unisex</option>

                                      <option disabled style="color:red;font-style:italic">Perfumes</option>
                                      <option value="menperf">Men</option>
                                      <option value="womenperf">Women</option>
                                      <option value="unisexperf">Unisex</option>
                                      <option value="degignerperf">Designer</option>
                                      <option value="bodyspray">Bodyspray</option>

                                      <option disabled style="color:red;font-style:italic">Sunglasses</option>
                                      <option value="men">Men</option>
                                      <option value="women">Women</option>
                                      <option value="unisex">Unisex</option>

                                      <option disabled style="color:red;font-style:italic">Make-up</option>
                                      <option value="eyes">Eyes</option>
                                      <option value="lips">Lips</option>
                                      <option value="face">Face</option>
                                      <option value="beautytools">Beauty Tools &amp; Accessories</option>
                                      <option value="cosmeticbundles">Cosmetic Bundles</option>

                                      <option disabled style="color:red;font-style:italic">Mens grooming</option>
                                      <option value="shaving">Shaving</option>
                                      <option value="perfumes">Perfumes &amp; Colognes</option>
                                      <option value="moisturizer">Moisturizer</option>

                                      <option disabled style="color:red;font-style:italic">Hand,Feet &amp; Nailcare</option>
                                      <option value="undercures">All Hand, Feet &amp; Nailcare</option>

                                      <option disabled style="color:red;font-style:italic">Watches</option>
                                      <option value="pocketwatches">Pocket Watches</option>
                                      <option value="watchwinders">Cases &amp; Watch Winders</option>
                                      <option value="wristwatchbands">Wristwatch Bands</option>
                                      <option value="wristwatches">Writwatches</option>
                                      <option value="Watchothers">Others</option>

                                  </optgroup>
                                      <optgroup id="jewelryid" label="FASHION &amp; JEWELRY" style="display:none;">fashion
                                        <option disabled style="color:red;font-style:italic;">Women's Clothing</option>
                                        <option value="womensathletic">Athletic Apparel</option>
                                        <option value="womenscoats">Coats &amp; Jackets</option>
                                        <option value="womensdresses">Dresses</option>
                                        <option value="womensintimates">Intimates &amp; Sleep</option>
                                        <option value="womensjeans">Jeans</option>
                                        <option value="womenspants">Pants</option>
                                        <option value="womensshorts">Shorts</option>
                                        <option value="womensskirts">Skirts</option>
                                        <option value="womenssuits">Suits &amp; Blazers</option>
                                        <option value="womenssweaters">Sweaters</option>
                                        <option value="womenssweats">Sweats &amp; Hoodies</option>
                                        <option value="womensswimwear">Swimwear</option>
                                        <option value="womenstshirts">Tshirts</option>
                                        <option value="womenstops">Tops &amp; Blouses</option>
                                        <option value="womensunderwear">Underwear</option>
                                        <option value="womensshoes">Shoes</option>
                                        <option value="womensothers">Others</option>

                                          <option disabled style="color:red;font-style:italic;">Men's Clothing</option>
                                        <option value="mensathletic">Athletic Apparel</option>
                                        <option value="menssportsblazers">Blazers &amp; Sports Coats</option>
                                        <option value="menscoats">Coats &amp; Jackets</option>
                                        <option value="mensshirts">Dress Shirts</option>
                                        <option value="mensintimates">Intimates &amp; Sleep</option>
                                        <option value="mensjeans">Jeans</option>
                                        <option value="menspants">Pants</option>
                                        <option value="mensshorts">Shorts</option>
                                        <option value="mensskirts">Skirts</option>
                                        <option value="menssuits">Suits</option>
                                        <option value="menssweaters">Sweaters</option>
                                        <option value="menssweats">Sweats &amp; Hoodies</option>
                                        <option value="menstshirts">Tshirts</option>
                                        <option value="menstops">Tops &amp; Blouses</option>
                                        <option value="mensunderwear">Underwear</option>
                                        <option value="mensshoes">Shoes</option>
                                        <option value="mensothers">Others</option>

                                          <option disabled style="color:red;font-style:italic;">jewelry</option>
                                        <option value="diamonds">Diamond jewelry</option>
                                        <option value="engagement">Engagement &amp; Wedding</option>
                                        <option value="fashionjewelry">Fashion Jewelry</option>
                                        <option value="finejewelry">Fine Jewelry</option>
                                        <option value="gemstones">Gemstones</option>
                                        <option value="mensjewelry">Men's Jewelry</option>
                                        <option value="vintage">Vintage &amp; Antique</option>
                                        <option value="jewelryothers">Others</option>

                                          <option disabled style="color:red;font-style:italic;">Accessories</option>
                                        <option value="handbags">Luxury Handbags</option>
                                        <option value="mensaccessories">Men's Accessories</option>
                                        <option value="womensaccessories">Women's Accessories</option>
                                        <option value="accessoriesothers">Others</option>

                                          <option disabled style="color:red;font-style:italic;">Baby &amp; Kids</option>
                                        <option value="boysfashion">Boy's Fashion</option>
                                        <option value="girlsfashion">Girl's Fashion</option>
                                        <option value="kidsshoes">Shoes</option>
                                        <option value="sleepwear">Sleepwear</option>
                                        <option value="tops">Tops &amp; Tshirts</option>
                                        <option value="dolls">Dolls &amp; Dollhouses</option>
                                        <option value="babyothers">Others</option>

                                          <option disabled style="color:red;font-style:italic;">Baby Feeding</option>
                                        <option value="babies">All Baby Feeding</option>

                                          <option disabled style="color:red;font-style:italic;">Diapering</option>
                                        <option value="beautydiapering">All Diapering</option>

                                          <option disabled style="color:red;font-style:italic;">Toys &amp; Games</option>
                                        <option value="fashiontoys">All Toys &amp; Games</option>

                                          <option disabled style="color:red;font-style:italic;">Baby Gear</option>
                                        <option value="babygear">All Baby Gear</option>

                                          <option disabled style="color:red;font-style:italic;">Baby Toiletries &amp; Bath Time</option>
                                        <option value="babytoiletries">All Baby Toiletries</option>

                                          <option disabled style="color:red;font-style:italic;">Nursery</option>
                                        <option value="nursery">All Nursery</option>

                                      </optgroup>

                                      <optgroup label="Electronics &amp; Computers" id="electronicsid" style="display:none;">
                                        <option disabled style="color:red;font-style:italic;">Camera &amp; Photo</option>
                                          <option value="camera">Camera</option>
                                          <option value="photoaccessories">photo accessories</option>
                                          <option value="drones">Camera Drones</option>
                                          <option value="lenses">Lenses</option>
                                          <option value="filters">Filters</option>
                                          <option value="frames">Digital Photo frames</option>
                                          <option value="flashes">Flashes</option>
                                          <option value="flashacc">flash accessories</option>
                                          <option value="photomanuals">manuals &amp; Guides</option>
                                          <option value="cameralighting">photo lighting</option>
                                          <option value="studioequip">studio equipment</option>
                                          <option value="cameraparts">Replacement parts</option>
                                          <option value="cameratools">camera tools</option>

                                          <option disabled style="color:red;font-style:italic;">Phones &amp; Accessories</option>
                                          <option value="phones">Cell Phones &amp; Smart Phones</option>
                                          <option value="phonecables">Cables</option>
                                          <option value="adapters">Adapters</option>
                                          <option value="cases">Cases, Covers &amp; Skins</option>
                                          <option value="phoneaccessories">Cell Phone Accessories</option>
                                          <option value="phoneparts">Cell Phone Parts</option>
                                          <option value="chargers">Chargers &amp; Cradles</option>
                                          <option value="screen">Screen Protectors</option>
                                          <option value="watches">Smart Watches</option>
                                          <option value="phonesothers">Others</option>
                                          <option disabled style="color:red;font-style:italic;">Computers &amp; Tablets</option>
                                          <option value="computercables">cables</option>
                                          <option value="computerconnectors">connectors</option>
                                          <option value="computercomponents">computer components</option>
                                          <option value="tablets">tablets</option>
                                          <option value="computerparts">parts</option>
                                          <option value="drives">drives &amp; storage</option>
                                          <option value="networking">networking &amp; connectivity</option>
                                          <option value="inputs">keyboards, Mice &amp; Pointing</option>
                                          <option value="compaccessories">Laptop &amp; Desktop Accessories</option>
                                          <option value="laptops">Laptops &amp; Netbooks</option>
                                          <option value="computersupplies">Printers, Scanners &amp; Supplies</option>
                                          <option value="computeraccessories">Monitors, Projectors &amp; Accessories</option>
                                          <option disabled style="color:red;font-style:italic;">VIDEO GAMES</option>
                                          <option value="videogames">video Games</option>
                                          <option value="consoles">Consoles</option>
                                          <option value="guides">Guides &amp; Cheats</option>
                                          <option value="videogameparts">Replacement Parts</option>
                                          <option value="videogametools">Tools</option>
                                          <option value="computerothers">Others</option>
                                          <option disabled style="color:red;font-style:italic;">TV, Video &amp; Audio</option>
                                          <option value="tvs">TVs</option>
                                          <option value="homespeakers">Home Speakers</option>
                                          <option value="subwoofers">Subwoofers</option>
                                          <option value="vr">Virtual Reality</option>
                                          <option value="homeaudio">Home Audio</option>
                                          <option value="portableaudio">Portable Audio</option>
                                          <option value="tvaccessories">Accessories</option>
                                          <option value="surveillance">Home Surveillance</option>
                                          <option value="gadgets">Other Gadgets</option>
                                          <option value="tvothers">Others</option>
                                          <option value="wearables">Wearable Techonolgy</option>
                                          <option value="software">Software</option>
                                      </optgroup>

                                      <optgroup id="supermarketid" label="Supermrket" style="display:none;">
                                            <option disabled style="color:red;font-style:italic;">Toiletries</option>
                                          <option value="hygiene">Feminine Hygiene</option>
                                          <option value="dental">Dental Care</option>
                                          <option value="bath">Bath &amp; Body</option>
                                          <option value="toiletries">Mens's Toiletries</option>

                                          <option disabled style="color:red;font-style:italic;">Household supplies</option>
                                          <option value="laundry">Laundry</option>
                                          <option value="airFreshners">Air Freshners</option>
                                          <option value="paperproducts">Household Paper Products</option>
                                          <option value="Detergents">Detergents</option>
                                          <option value="Toiletcleaning">Toilet Cleaning</option>
                                          <option value="dishwashing">Dishwashing</option>
                                          <option value="airfresheners">Air Fresheners</option>
                                          <option value="batteries">Batteries</option>
                                          <option value="householdaccessories">Household Accessories</option>

                                          <option disabled style="color:red;font-style:italic;">Edibles</option>
                                          <option value="sauces">Sauces</option>
                                          <option value="snacks">Snacks, Cookies &amp; Chips</option>
                                          <option value="spreads">Spreads</option>
                                          <option value="candy">Candy</option>
                                          <option value="grains">Rice, Pasta &amp; Grains</option>
                                          <option value="breakfast">Breakfast Cereal</option>
                                          <option value="flour">Flour</option>

                                          <option disabled style="color:red;font-style:italic;">Beer, Wine &amp; Spirit</option>
                                          <option value="spirits">Spirits &amp; Liquors</option>
                                          <option value="wine">Wine</option>
                                          <option value="beer">Beer</option>

                                          <option disabled style="color:red;font-style:italic;">Coffee, Tea &amp; Beverages</option>
                                          <option value="chocolate">Hot Chocolate</option>
                                          <option value="water">Water</option>
                                          <option value="juice">Juice</option>
                                          <option value="coffee">Coffee &amp; Espresso</option>
                                          <option value="softdrinks">Soft Drinks</option>
                                          <option value="energydrinks">Energy Drinks</option>

                                          <option disabled style="color:red;font-style:italic;">Shop by Brand</option>
                                          <option value="tropicalheat">Tropical Heat</option>
                                          <option value="velvex">Velvex</option>
                                          <option value="britannia">Britannia</option>

                                          <option disabled style="color:red;font-style:italic;">Baby Products</option>
                                          <option value="babyfeeding">Baby Feeding</option>
                                          <option value="supermarketdiapering">Baby Diapering</option>
                                          <option value="babygrooming">Baby Safety &amp; Grooming</option>
                                          <option value="bathing">Bathing &amp; Grooming</option>
                                          <option value="nurserybeddings">Nursery Bedding</option>
                                          <option value="gear">Baby Gear</option>
                                          <option value="nurserydecor">Nursery D&eacute;cor</option>
                                          <option value="potty">Potty Training</option>
                                          <option value="pregnancypillow">Pregnancy Pillows</option>
                                          <option value="strollers">Strollers</option>
                                          <option value="babytoys">Toys for Baby</option>
                                          <option value="babyfurniture">Nursery Furniture</option>

                                          <option disabled style="color:red;font-style:italic;">Sexual Wellbeing</option>
                                          <option value="contraceptives">Contraceptives</option>
                                          <option value="sexualothers">Others</option>

                                          <option disabled style="color:red;font-style:italic;">Pet Supplies</option>
                                          <option value="poultry">Poultry Supplies</option>
                                          <option value="fish">Fish &amp; Aquariums</option>
                                          <option value="cat">Cat Supplies</option>
                                          <option value="dog">Dog Supplies</option>
                                          <option value="reptile">Reptile Supplies</option>
                                          <option value="birds">Bird Supplies</option>
                                          <option value="petsothers">Other Supplies</option>

                                          <option disabled style="color:red;font-style:italic">Electronics</option>
                                          <option value="supaelectronics">all electronics</option>

                                          <option disabled style="color:red;font-style:italic">Furniture</option>
                                          <option value="supafurniture">all furniture</option>


                                      </optgroup>
                                      <optgroup id="handmadeid" label="Hand Designed &amp; Handmade" style="display:none;">

                                          <option disabled style="color:red;font-style:italics;">Fashion</option>
                                            <option value="handmademensfashion">Men's Fashion</option>
                                            <option value="handmadewomensfashion">Women's Fashion</option>
                                            <option value="mensaccessories">Men's Accessories &amp; jewelry</option>
                                            <option value="womensaccessories">Women's Accessories &amp; jewelry</option>
                                            <option value="boyfashion">Boy's Fashion</option>
                                            <option value="girlsfashion">Girls Fashion</option>
                                            <option value="handmadebabys">Baby's</option>

                                          <option disabled style="color:red;font-style:italics;">Beauty &amp; Grooming</option>
                                            <option value="skincare">Skin Care</option>
                                            <option value="handmadebath">Bath &amp; Body</option>
                                            <option value="fragrances">Fragrances</option>
                                            <option value="beautyprods">Other Beauty Products</option>

                                          <option disabled style="color:red;font-style:italics;">Home</option>
                                            <option value="homedecorlighting">Lighting</option>
                                            <option value="pieces">Decorative pieces</option>
                                            <option value="handmadehomedecor">Other Home D&eacute;cor</option>
                                            <option value="handmadekitchen">Kitchen &amp; Dining</option>
                                            <option value="handmadefurniture">Furniture</option>

                                          <option disabled style="color:red;font-style:italics;">Art Work</option>
                                            <option value="photographs">Art Photogrphs</option>
                                            <option value="posters">Art Posters</option>
                                            <option value="paintings">Paintings</option>
                                            <option value="drawings">Drawings</option>
                                            <option value="artothers">Other Artwork</option>

                                          <option disabled style="color:red;font-style:italics;">Other items</option>
                                            <option value="otheritems">Other handdesigned items</option>



                                      </optgroup>
                                      <optgroup id="homeid" label="Home, Garden &amp; Tools" style="display:none;">
                                        <option disabled style="color:red;font-style:italic;">Furniture</option>
                                          <option value="beds">Beds</option>
                                          <option value="mattresses">Mattresses</option>
                                          <option value="cabinets">Cabinets &amp; Cupboards</option>
                                          <option value="chairs">Chairs &amp; Tables</option>
                                          <option value="office">Office Furniture</option>
                                          <option value="entertainment">Entertainment Units</option>
                                          <option value="sofas">Ottomans &amp; Sofas</option>
                                          <option value="furnitureothers">Other Furniture</option>

                                          <option disabled style="color:red;font-style:italic;">Bath</option>
                                          <option value="bathaccessories">Bath Accessories &amp; Products</option>
                                          <option value="bathmats">Bathmats, Rugs &amp; Toilets</option>
                                          <option value="shelves">Bathroom Shelves</option>
                                          <option value="curtains">Shower Curtains &amp; Hooks</option>
                                          <option value="dispensers">Soap Dishes &amp; Dispensers</option>
                                          <option value="towels">Towels &amp; Washcloths</option>
                                          <option value="bathitems">Other Bathroom Items</option>

                                          <option disabled style="color:red;font-style:italic;">Bedding</option>
                                          <option value="blankets">Blankets &amp; Throws</option>
                                          <option value="duvets">Duvet Covers &amp; Pillow Shams</option>
                                          <option value="homebeddings">Nursery Bedding</option>
                                          <option value="beddingsheets">Sheets &amp; Pillow Cases</option>
                                          <option value="pads">Mattress Pads &amp; Feather Beds</option>
                                          <option value="bedspreads">Quilts, Bedspreads &amp; Coverlets</option>
                                          <option value="otherbeddings">Other Beddings</option>

                                          <option disabled style="color:red;font-style:italic;">Major Appliances</option>
                                          <option value="fridges">Freezers &amp; Fridges</option>
                                          <option value="ovens">Ovens &amp; Microwave Ovens</option>
                                          <option value="microwaves">Microwaves &amp; Cooktops</option>
                                          <option value="filters">Wave Filters</option>
                                          <option value="washingmachines">Washing Machines</option>
                                          <option value="dishwashers">Dishwashers</option>
                                          <option value="applianceparts">Parts &amp; Accessories</option>

                                          <option disabled style="color:red;font-style:italic;">Home D&eacute;cor</option>
                                          <option value="homelighting">Lamps, Lighting &amp; Fans</option>
                                          <option value="pillows">Decorative Pillows</option>
                                          <option value="clocks">Clocks &amp; Vases</option>
                                          <option value="candles">Candles</option>
                                          <option value="wallshelves">Wall Shelves</option>
                                          <option value="homedecor">Other home d&eacute;cor</option>

                                          <option disabled style="color:red;font-style:italic;">Home Improvement</option>
                                          <option value="hardware">Building &amp; Hardware</option>
                                          <option value="homesecurity">Home Security</option>
                                          <option value="electrical">Electrical &amp; Solar</option>
                                          <option value="heatcool">Heating, Cooling &amp; Air</option>
                                          <option value="homeimprovementothers">Other Home Improvement</option>

                                          <option disabled style="color:red;font-style:italic;">Housekeeping</option>
                                          <option value="carpets">Carpet &amp; Floor Sweepers</option>
                                          <option value="cleanproducts">Cleaning Products</option>
                                          <option value="cloths">Cleaning Towels &amp; Cloths</option>
                                          <option value="cleaners">Vacuum Cleaners &amp; Parts</option>
                                          <option value="housekeepingothers">Other housekeeping</option>

                                          <option disabled style="color:red;font-style:italic;">Tools</option>
                                          <option value="airtools">Airtools &amp; Compressors</option>
                                          <option value="generators">Generators &amp; Pumps</option>
                                          <option value="powertools">Handtools &amp; Powertools</option>
                                          <option value="toolssafety">Safety &amp; Protective Gear</option>
                                          <option value="welding">Welding &amp; Soldering Tools</option>
                                          <option value="toolsothers">Other Tools</option>

                                          <option disabled style="color:red;font-style:italic;">Yard &amp; Garden</option>
                                          <option value="yardsupplies">Garden Supplies</option>
                                          <option value="cooking">Outdoor cooking &amp; Eating</option>
                                          <option value="yardlighting">Outdoor Lighting &amp; Outdoor</option>
                                          <option value="equipment">Equipment</option>
                                          <option value="gardenothers">Other Yard, Garden &amp; Outdoor</option>

                                          <option disabled style="color:red;font-style:italic;">Kitchen</option>
                                          <option value="appliances">Small Kitchen Appliances</option>
                                          <option value="culterly">Flatware, Knives &amp; Culterly</option>
                                          <option value="organization">Kitchen Storage &amp; Organization</option>
                                          <option value="kitchenothers">Other Kitchen &amp; Dining Items</option>

                                      </optgroup>
                                      <optgroup id="outdoorsid" label="Sports &amp; Outdoors" style="display:none;">
                                        <option disabled style="color:red;font-style:italic;">Fitness &amp; Running</option>
                                          <option value="fitness">Fitness &amp; Running</option>
                                          <option value="fitnessshoes">Shoes</option>
                                          <option value="training">Strength Training</option>
                                          <option value="fitnessaccessories">Clothing &amp; Accessories</option>
                                          <option value="fitnessequipment">Fitness Equipment &amp; Gear</option>
                                          <option value="dvds">Fitness DVDs</option>
                                          <option value="technology">Fitness Technology</option>
                                          <option value="fitnessothers">Other Fitness &amp; Running</option>

                                          <option disabled style="color:red;font-style:italic;">Fishing</option>
                                          <option value="baits">Baits, Lures &amp; Files</option>
                                          <option value="fishingeducation">Books &amp; Videos</option>
                                          <option value="fishingaccessories">Clothing, Shoes &amp; Accessories</option>
                                          <option value="fishingequipment">Fishing Equipment</option>
                                          <option value="rods">Rods &amp; Reels</option>
                                          <option value="rodsrepair">Rods &amp; Reels Repair</option>
                                          <option value="fishingothers">Other Fishing</option>

                                          <option disabled style="color:red;font-style:italic;">Team Sports</option>
                                          <option value="gymnastics">Gymantics</option>
                                          <option value="volleyball">Volleyball</option>
                                          <option value="rugby">Rugby</option>
                                          <option value="baketball">Baketball</option>
                                          <option value="hockey">Hockey</option>
                                          <option value="football">Football</option>
                                          <option value="teamsothers">Other Sports</option>

                                          <option disabled style="color:red;font-style:italic;">Golf</option>
                                          <option value="golfaccessories">Golf Accessories</option>
                                          <option value="clothing">Golf Clothing &amp; Shoes</option>
                                          <option value="equip">Golf Clubs &amp; Equip</option>
                                          <option value="components">Golf Club Components</option>
                                          <option value="golfothers">Other Golf Equip</option>

                                          <option disabled style="color:red;font-style:italic;">Water sports</option>
                                          <option value="swimming">Swimming</option>
                                          <option value="wetsuits">Wetsuits &amp; Drysuits</option>
                                          <option value="watersportssafety">Swimwear &amp; Safety</option>
                                          <option value="kitesurfing">Kitesurfing</option>
                                          <option value="snorkeling">Scuba &amp; Snorkeling</option>
                                          <option value="footwear">Fins, Footwear &amp; Gloves</option>
                                          <option value="watersportsothers">Other Water Sports</option>

                                          <option disabled style="color:red;font-style:italic;">Racquet Sports</option>
                                          <option value="tennis">Tennis</option>
                                          <option value="otherracquets">Other racquet sports</option>
                                          <option value="badminton">Badminton &amp; Drysuits</option>
                                          <option value="racquetaccessories">Apparel &amp; Accessories</option>

                                          <option disabled style="color:red;font-style:italic;">Outdoor sports</option>
                                          <option value="skating">Inline &amp; Roller Skating</option>
                                          <option value="camping">Camping &amp; Hiking</option>
                                          <option value="paintballs">Paintball</option>
                                          <option value="skateboarding">Skateboarding &amp; Longboarding</option>
                                          <option value="triathlon">Triathlon</option>
                                          <option value="gokarts">Go-Karts</option>
                                          <option value="cycling">Cycling</option>
                                          <option value="outdoorsportsothers">Other Outdoor Sports</option>

                                          <option disabled style="color:red;font-style:italic;">Boxing &amp; Martial Arts</option>
                                          <option value="boxing">Boxing Gloves</option>
                                          <option value="martialartsothers">Other Combat Sports Supplies</option>

                                          <option disabled style="color:red;font-style:italic;">Yoga &amp; Pilates</option>
                                          <option value="yogabags">Mat Carriers &amp; Bags</option>
                                          <option value="yogamats">Mats &amp; Non-slip Towels</option>
                                          <option value="pilatesaccessories">Pilates Accessories</option>
                                          <option value="yogaothers">Other Yoga &amp; Pilates Accessories</option>

                                          <option disabled style="color:red;font-style:italic;">Nutrition</option>
                                          <option value="nutrition">All Nutrition</option>

                                      </optgroup>
                                      <optgroup id="automotiveid" label="Automotive &amp; Industrial" style="display:none;">
                                        <option disabled style="color:red;font-style:italic;">Parts &amp; Accessories</option>
                                          <option value="atvparts">ATV Parts</option>
                                          <option value="merchandise">Apparel &amp; Merchandise</option>
                                          <option value="autotools">Automotive Tools</option>
                                          <option value="aviation">Aviation Parts &amp; Accessories</option>
                                          <option value="boat">Boat Parts</option>
                                          <option value="carelec">Car electronics</option>
                                          <option value="caraccessories">car &amp; Truck parts &amp; Accessories</option>
                                          <option value="partsmanuals">manuals &amp; literature</option>
                                          <option value="motorcyle">Motorcycle parts</option>
                                          <option value="racing">Performance &amp; Racing Parts</option>
                                          <option value="watercraft">Personal Watercraft Parts</option>
                                          <option value="camper">RV, Trailer &amp; Camper Parts</option>
                                          <option value="truck">Vintage Car &amp; Truck Parts</option>
                                          <option value="automotiveothers">Other Parts</option>

                                          <option disabled style="color:red;font-style:italic;">Industrial Supply</option>
                                          <option value="adhesives">Adhesives &amp; Sealants</option>
                                          <option value="industrialsupplies">Cleaning Equipment &amp; Supplies</option>
                                          <option value="radios">Commercial Radios</option>
                                          <option value="hardware">Fasterners &amp; Hardware</option>
                                          <option value="publicsafety">Government &amp; Public Safety</option>
                                          <option value="ac">HV/AC</option>
                                          <option value="hydraulics">Hydraulics &amp; Pneumatics</option>
                                          <option value="industriallighting">Lighting &amp; Lasers</option>
                                          <option value="industrialmanuals">Manuals &amp; Books</option>
                                          <option value="handling">Material Handling</option>
                                          <option value="plumbing">Pumps &amp; Plumbing</option>
                                          <option value="industrialsecurity">Safety &amp; Security</option>
                                          <option value="industrialothers">Other Industrial Supplies</option>

                                          <option disabled style="color:red;font-style:italic;">Manufacturing &amp; Metalworking</option>
                                          <option value="metalsheets">Metal Sheets &amp; Flat Stock</option>
                                          <option value="manufacturingtools">Metalworking Tooling</option>
                                          <option value="equipment">Process Equipment</option>
                                          <option value="semiconductor">Semiconductor &amp; PCB Equipment</option>
                                          <option value="welding">Welding</option>
                                          <option value="woodworking">Woodworking</option>
                                          <option value="manufacturingothers">Others</option>

                                          <option disabled style="color:red;font-style:italic;">Packing &amp; Shipping</option>
                                          <option value="cushionwrap">Cushion Wrap</option>
                                          <option value="letterfolders">Letter Folders</option>
                                          <option value="packingpeanuts">Packing Peanuts</option>
                                          <option value="packingtape">Packing Tape</option>
                                          <option value="shrinkwrap">Shrink Wrap</option>
                                          <option value="packingothers">Other Packing &amp; Shipping</option>

                                          <option disabled style="color:red;font-style:italic;">Lab</option>
                                          <option value="labequipment">lab Equipment</option>
                                          <option value="labsupplies">lab Supplies</option>
                                          <option value="labothers">Other Lab Items</option>

                                          <option disabled style="color:red;font-style:italic;">Fuel &amp; Energy</option>
                                          <option value="altfuel">Alternative Fuel &amp; Energy</option>
                                          <option value="oil">Oil &amp; Gas</option>
                                          <option value="fuelothers">Other Fuel &amp; Energy</option>

                                          <option disabled style="color:red;font-style:italic;">Electrical</option>
                                          <option value="fuses">Circuit Breakers &amp; Fuses</option>
                                          <option value="connectors">Connectors, Swithes &amp; Wire</option>
                                          <option value="electricalothers">Other Electrical Equipment</option>

                                      </optgroup>


                                  </select>


<!--
                                 <div class="form-group">
                                  <label for="sel1"><span style="color:red">*</span>Size (select one):</label>
                                  <select class="form-control" id="sel1" name="size">
                                    <option value="XL">Extra Large "XL"</option>
                                    <option value="L">Large "L"</option>
                                    <option value="M">Medium "M"</option>
                                    <option value="Xs">Small "XS"</option>
                                      </select>
                                </div>
-->


                                <div class="form-group">
                                  <label for="email"><span style="color:red">*</span>Label/Creator:<small>(Name of product maker/designer)</small></label>
                                  <input type="text" class="form-control" name="label" id="label" placeholder="Enter label Name e.g SONY">
                                </div>



                                     <div class="row">
                                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <small>upload the best three photos of the product preferrably from different angles</small>
                                             </div>
                                         </div>
                                     <div class="row">
                                            <div class="col-xs-4">
                                        <label for="fl1"><span style="color:red">*</span>Image 1:</label>
<!--                                         <input type="file" id="file" name="file"/>-->
                                         <input type="file" id="file" name="file" style="display:none;"/>
                                        <input type="button" class="btn btn-primary btn-xs" value="Choose file.." onclick="document.getElementById('file').click();"/>

                                     </div>

                                      <div class="col-xs-4">
                                        <label for="fl1"><span style="color:red">*</span>Image 2:</label>
<!--                                         <input type="file" id="file2" name="file2"/>-->
                                         <input type="file" id="file2" name="file2" style="display:none;"/>
                                          <input type="button" class="btn btn-primary btn-xs" value="Choose file.." onclick="document.getElementById('file2').click();"/>
                                     </div>
                                      <div class="col-xs-4">
                                        <label for="fl1"><span style="color:red">*</span>Image 3:</label>
<!--                                         <input type="file" id="file3" name="file3"/>-->
                                         <input type="file" id="file3" name="file3" style="display:none;"/>
                                          <input class="btn btn-primary btn-xs" type="button" value="Choose file.." onclick="document.getElementById('file3').click();"
                                     </div>
                                         </div>
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


                                 <!-- <h4><strong><span style="color:red">*</span>Sex</strong></h4>

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

                                        </div>-->
                                     </div>
<!--                                     ITEM DESCRIPTION-->
                                     <div class="row" style="margin-top:1%;">
                                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                             <label for="down"><span style="color:red;">*</span>Item Description: <small>Describe the product as best as you can</small></label>
                                            <textarea cols="7" name="description" class="form-control" id="ele" onkeyup="changeheight();" placeholder="The item is made of chromium material spanning a length of 32&quot;...... "></textarea>
                                         </div>
                                     </div>
<!--                                     ITEM DESCRIPTION-->

                                        <div class="form-group">
                                          <label for="pwd"><span style="color:red">*</span>Item price:(Ksh)(<small>The price you wish to sell the product at</small>)</label>
                                          <input type="number" class="form-control" id="price" name="price" placeholder="Item price(Ksh)">
                                        </div>

                                         <div class="form-group">
                                          <label for="cut">Final amount you get:(Ksh)<small>The final amount you get after this item is sold on Tiiva</small></label>
                                          <input type="text" class="form-control cut" id="cut" name="cut" readonly placeholder="Item price(Ksh)">
                                        </div>

                                             <div class="form-group">
                                          <label for="cut">Available in Stock:<small>(The amount you have instock)</small>
                                          <input type="number" id="instock" name="instock" min="1" max="100000" class="form-control" placeholder="e.g 100" style="width:50%;"></label>
                                        </div>

                                        <div id="buttoncontainer">
                                        <button type="button"  id="upload_Button" class="btn btn-lg btn-success btn-block">Publish Item</button>
                                        </div>
                                          </div>



                                      </form>

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
                        url: "uploadmeat.php",
                        data: fd,
                        cache: false,
                        processData: false,
                        contentType: false,
                        type: "POST",
                        Complete: function(){
                            alert("Completed");
                        },
                        xhrFields: {
                            onprogress:function(e){
                                if(e.lengthComputable){
                                    console.log('Loaded '+ (e.loaded / e.total * 100) + '%');
                                    var x = ((e.loaded / e.total * 100) + '%');
                                    var prog = document.getElementById('_progress');
                                    prog.innerHTML = x;
                                    prog.style.width = x;
                                    alert(x);
                                }else{
                                    console.log('Length not computable.');
                                }
                            }
                        },
                        success: function(dataofconfirm){
                            //alert(itname+" has successfully been uploaded" );
                            var uploadButton = document.getElementById("upload_Button");
                            uploadButton.innerHTML = "Successfully Uploaded!";
                            //uploadButton.disabled;

                        }

                    });

                }


            }
            var form = document.getElementById('file_form');
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

            function changeheight(){
                //alert('not working');
                var ele = document.getElementById('ele');
            if(ele.clientHeight < ele.scrollHeight){
                ele.style.height = (ele.scrollHeight + 5)+'px';
            }
            }

            $(document).ready(function(){


                $("#upload_Button").click(function(){
                    var file_form = document.getElementById('file_form');
                    var fd = new FormData(file_form);
                    //alert(fd);
                    var itname = $("#itname").val();
                    var maincategory = $("#maincategory").val();
                    var subcategory = $("#subcategory").val();
                    var label = $("#label").val();
                    var file = $("#file").val();
                    var file2 = $("#file2").val();
                    var file3 = $("#file3").val();
                    var description = $("#ele").val();
                    var cut = $("#cut").val();
                    var instock = $("#instock").val();

                   $.ajax({
                    type: "POST",
                    cache: false,
                    processData: false,
                    contentType: false,
                    url: "trial.php",
                    dataType: "html",
                    data: fd,
                    success: function(returneddata){
                        //alert(returneddata);
                        console.log(returneddata);
                        //$("#buttoncontainer").html(returneddata);
                        //alert('Item has been uploaded Please Refresh the page to upload a new item');
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
                })
                });

            })

        </script>
    </body>
</html>
