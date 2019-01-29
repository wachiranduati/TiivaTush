<?php
session_start();
ob_start();
require 'search.inc.php';
require 'core.inc.php';

$_SESSION['$user_id'];

// TODO CREATE A RETURN FEATURE TO MONITOR ITEMS THAT WERE REJECTED AND RETURNED


?>
<!DOCTYPE html>
<html>
<title>Tiiva | Home</title>

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
        #resi:hover {
            background-color: rgba(64, 64, 64, 0.63);
        }
        .this:hover {
            background-color: aliceblue;
        }
        #itonsale{
            max-height: 300px;
            overflow: scroll;
        }
        .tab-pane{
            opacity: 1;
        }
        .sellersmenu>div{
            background-color: gainsboro;
            cursor: pointer;
        }
        .sellersmenu>div:hover{
            border-right:1px solid white;
            border-left:1px solid white;
        }
        .sellersmenu>div:active{
            background-color: black;
            color:white;
        }
        .menuactivesellers {
            border-bottom: 3px solid lime;
            background-color: white;
            text-transform: uppercase;
            font-weight: bold;
        }
    </style>

</head>
    <body>
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
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img src="images/otherphotoo.png" class="img-responsive"></div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 visible-lg visible-md">

                </div>

            </div>

<!--            end of accounts div-->

                <!-- start of the users acount details -->

               <div class="row visible-lg visible-md" style="height:300px;background-image:url(editions/pexels-photo-11744.jpeg);background-size:cover;background-position:50%;margin-bottom:1%;">
                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                           <div class="row" style="margin-top:1%;">
                               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                   <h2 class="text-center text-uppercase visible-sm visible-xs" style="margin-top:-10px; color:orange;font-family:kok;">Tiiva Seller's account</h2>
                               </div>
                           </div>
                           <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="background-image:url(editions/manontop.jpeg);background-repeat:no-repeat;background-size:cover;background-position:50%;border-radius:50%;width:150px;height:150px;"></div> -->
                           <div class="row" style="position:absolute;bottom:10%;right:1.3%;">
                               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 visible-lg visible-md">
                                   <i class="mdi mdi-pen mdi-24px" style="position:absolute;right:10px;top:-40px;color:rgb(0, 128, 255);font-family:kok;text-shadow:1px 1px 1px black;"></i>
                                   <script>
                                       $(".mdi-pen").click(function(){
                                           alert("Edit user information");
                                       });
                                   </script>
                                   <h5 class="text-right text-uppercase" style="margin-top:-10px; color:white;font-family:kok;text-shadow:1px 1px 1px black;" id="boxlabels">Seller Detailse</h5>
                                   <h5 class="text-right text-uppercase" style="margin-top:-3px; color:white;font-family:kok;text-shadow:1px 1px 1px black;" id="boxlabels">Wachira Nicholas Nduati</h5>
                                   <h5 class="text-right text-uppercase" style="margin-top:-3px; color:white;font-family:kok;text-shadow:1px 1px 1px black;" id="boxlabels">id no: 30225736</h5>
                                   <h5 class="text-right text-uppercase" style="margin-top:-3px; color:white;font-family:kok;text-shadow:1px 1px 1px black;" id="boxlabels">phone no: 073843734</h5>
                                   <h5 class="text-right text-uppercase" style="margin-top:-3px; color:white;font-family:kok;text-shadow:1px 1px 1px black;" id="boxlabels">Business type: Mtumba</h5>
                                   <h5 class="text-right text-uppercase" style="margin-top:-3px; color:white;font-family:kok;text-shadow:1px 1px 1px black;" id="boxlabels">country: Kenya</h5>
                                   <h5 class="text-right text-uppercase" style="margin-top:-3px; color:white;font-family:kok;text-shadow:1px 1px 1px black;" id="boxlabels">county: Murang'a</h5>
                                   <h5 class="text-right text-uppercase" style="margin-top:-3px; color:white;font-family:kok;text-shadow:1px 1px 1px black;" id="boxlabels">Township: Kiriaini</h5>
                                   <h5 class="text-right text-uppercase" style="margin-top:-3px; color:white;font-family:kok;text-shadow:1px 1px 1px black;" id="boxlabels">Business name: Wakwito international</h5>
                               </div>
                            </div>

                            <div class="row" style="margin-top:7%;">
                                   <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="height:200px;border:1px solid white;background-image:url(editions/pexels-photo-11744.jpeg);background-size:cover;background-position:50%;">

                                   </div>
                            </div>
                            <div class="row" style="color:red;position:absolute;bottom:0%;right:10px;text-shadow:1px 1px 1px black;">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <i class="mdi mdi-camera mdi-36px"></i>
                                    <input type="file" name="banner" id="banner" style="display:none;">
                                    <script>
                                        $(".mdi-camera").click(function(){
                                            //alert("Change banner?");
                                            $("#banner").click();
                                        });
                                    </script>
                                </div>
                            </div>
                            <div class="row" style="color:white;position:absolute;bottom:1%;left:10px;text-shadow:-1px -1px 1px black;">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <i class="mdi mdi-camera-2 mdi-camera mdi-24px"></i>
                                    <input type="file" name="ppic" id="ppic" style="display:none;">
                                    <script>
                                        $(".mdi-camera-2").click(function(){
                                            //alert("Change ppic");
                                            $("#ppic").click();
                                        });
                                    </script>
                                </div>
                            </div>
                   </div>
                </div>

                <div class="row visible-sm visible-xs">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h4 class="text-center text-uppercase" style="color:orange;font-family:kok;">Tiiva Seller's account</h4>
                    </div>
                </div>

               <div class="row visible-sm visible-xs" style="height:200px;background-image:url(editions/pexels-photo-11744.jpeg);background-size:cover;background-position:50%;margin-bottom:10%;">
                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                       <div class="row" style="position:absolute;right:4%;margin-top:40%;">
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                               <h5 class="text-center text-uppercase" style="color:white;font-family:kok;" id="boxlabels2">Tiiva Shack upload page</h5></div>
                       </div>
                       <div class="row" style="position:absolute;margin-top:37%;margin-bottom:2%;">
                           <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div> -->
                           <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="background-image:url(editions/manontop.jpeg);background-repeat:no-repeat;background-size:cover;background-position:50%;border-radius:50%;width:100px;height:100px;"></div>
                       </div>
                   </div>
                </div>

                <div class="row sellersmenu" style="">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="padding:0;"><h5 class="text-center">Starting</h5></div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="padding:0;"><h5 class="text-center">Uploads</h5></div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="padding:0;"><h5 class="text-center">Messages</h5></div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="padding:0;"><h5 class="text-center">History</h5></div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="padding:0;"><h5 class="text-center">Stats</h5></div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="padding:0;"><h5 class="text-center">Funds</h5></div>
                    <script>
                        $(".sellersmenu>div").eq(0).css({"border-bottom":"2px solid lime","background-color":"white","color":"black"});
                        $(".sellersmenu>div").click(function(){
                            $(".sellersmenu>div").removeClass("active animated bounce tada");
                            $(this).addClass("active animated bounce");
                            $(".sellersmenu>div").css({"border":"none","background-color":"gainsboro","color":"black","text-transform":"capitalize"});
                            $(this).css({"border-bottom":"2px solid lime","background-color":"white","color":"black","text-transform":"uppercase"});
                            var x = 0;
                            while( x <= 6){
                                if($(".sellersmenu>div").eq(x).hasClass("active")){
                                    //$(".sellersmenu>div").eq(x).toggle();
                                    $(".sellercontainer").eq(x).fadeIn();
                                }else{
                                    $(".sellercontainer").eq(x).fadeOut();
                                }
                                x++;
                            }
                        });
                        // add the hover class on the menu list
                            $(".sellersmenu>div").hover(function(){
                                $(".sellersmenu>div").removeClass("animated tada");
                                $(this).addClass("animated tada");
                            });

                    </script>

                </div>

                <!-- START OF THE CONTENTS SELLER PROF -->
                    <div class="row sellercontainer">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <script>
                                setInterval(function(){
                                    $("#heres").toggleClass("animated bounce");
                                },1000);
                            </script>
                            <h1 id="heres">Welcome!</h1><span class="pull-right" style="border:1px solid orange;background-color:orange;font-weight:bold;padding:10px;border-radius:18px;font-family:kok;">Translate to local dialect</span>
                            <p>
                                This is Tiiva's Merchant info page.<br>Going to help you with all the details pertaining to being a Merchant on Tiiva.<br>
                                Remember you can always check on the <a href="howto.php" title="visit the frequent asked questions page">FAQs</a> page to better understand Tiiva
                                <br>You can also click on the hovering button to your right, labeled customer support, to talk to Tiiva customer support.<br>
                                <h3>Starting</h3>
                                <p>
                                    This is the section that your presented with immediately you enter your sellersprof. It details in full how to use the entire Sellers profile to the maximum.
                                </p>
                                <h3>uploads</h3>
                                <p>
                                    This contains all the info you may require before proceeding to actually uploading your products on Tiiva.<br>
                                    Information in this page is constantly updated so <span style="color:red;">Please skim throught the contents for parts noted as updated features</span>
                                </p>
                                <h3>Messages</h3>
                                <p>
                                    This is also known as the notifications area. You can check on your sales notifications here. We will occassionaly contact you whenever a sale is made <br>
                                    Make sure to constantly check your inbox for messages and notifications.Any reviews made on items you successfully sell will be visible here and so can you reply<br>
                                    from here. Returns will also be notified through this panel
                                </p>
                                <h3>History</h3>
                                <p>
                                    The history panel consists details pertaining to products you've uploaded which are but are not restricted to, information about your product, the price you've set,product status <br>
                                    the images you've uploaded for the product, the number of views your product has received and the number of views it currently has (live feature)<br>
                                    Note that you can edit the product details for items instock on the site. This panel will enable you to view items from you that have been sold, that are on sale and that are on transit.<br>

                                </p>
                                <h3>Stats</h3>
                                <p>
                                    This panel will give a detailed photographic representation for your activity since registering on Tiiva. Mainly the information that will assist you better sell on Tiiva. Like the amount you make the range in which<br>
                                    you make as per your price, the time most of your items are purchased and by who, time with which you get your views and more. Make sure to check it out.<br>
                                    You can also change your status from offline to online for the 1 hour delivery option.
                                </p>
                                <h3>Funds</h3>
                                <p>
                                    The most important part ey? This panel will enable you to check on your funds. Choose a payment plan and define your return as per your products and clientel.<br>
                                    This is teh panel where you can access your funds and withdraw it to your account. For safety reasons the funds can onlly be withdrawn by from the registered number<br>
                                    associated with your Tiiva Merchant account.Be sure to read up on maturity's and more.
                                </p>
                            </p>
                        </div>
                    </div>

                    <div class="row sellercontainer">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1>Upload Panel</h1>
                            <p class="pull-left">to upload new products click on the blue button labelled <span style="color:green;font-family:kok;">upload item</span> to the right</p>
                            <h3 class="pull-right"><a class="btn btn-md btn-info" target="_blank" href="upload.php" title=" go to upload page">Upload Item</a></h3>
                            <!-- Tiiva shack start -->
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h3>Tiiva Shack Merchant</h3>
                                    <p>
                                        Awesome that you're a registered Merchant for Tiiva. You registered for a Mtumba Seller Account and will hence be redirected to<br>
                                        the Tiiva Shack upload page.
                                        <ol>
                                            <li>first slot requires you to name your product using a good simple short descriptive name e.g <small>Black XS one pocket shirt</small></li>
                                            <li>second slot requires you to choose a category in which product item will fall under eg <small>Women's</small></li>
                                            <li>third slot requires you to choose a subcategory that best describes the product being uploaded</li>
                                            <li>fourth slot requires you to choose and select the size of the product being uploaded i.e <small>XS</small></li>
                                            <li>fifth slot requires you to input the label/manufacturer/designer of the product i.e <small>ADIDAS</small></li>
                                            <li>sixth slot consists of three buttons namely</li>
                                                <ul>
                                                    <li>image one - select a good image for your product</li>
                                                    <li>image two - select another good image of your product/it shouldnt be the same image used in image one</li>
                                                    <li>image three - select the last image for your product possibly from a different angle that shouldnt be the same photo used in image one nor image two </li>
                                                </ul>
                                                choose different pictures to upload for the product previously taken using your phone camera with a landscape orientation.
                                            <li>seventh slot requires you to choose the sex of the item that is whether the product is for male, female or unisex i.e <small>Unisex</small></li>
                                            <li>eight slot requires you to select the rating score of the product being uploaded as per the uploader lowest is 1 star highest being 5 stars</li>
                                            <li>last step enter the price you wish to sell the item keeping in mind that Tiiva charges a 10% fee of the price you set</li>
                                            <li>the next slot below indicates the amount you'll receive once the item is sold</li>
                                            <li>press the green publish item and wait for a pop up alert to indicate that your product has successfully been uploaded</li>
                                        </ol>

                                    </p>
                                    <h4 id="notes">Extra notes</h4>
                                    <script>
                                    setInterval(function(){
                                        $("#notes").toggleClass("animated bounce");
                                    },1000);
                                    </script>
                                    <p>
                                        Please Ensure that for step 3, you choose a subcategory belonging to selected category in step 2.<br>
                                        For step 3 &amp; 4 ensure you use the details printed on the small sticker sewn to the hem of the product <br>
                                        For step 6 ensure that you take the best photos. Remember the clearer and better the photos, the more attractive the product will be to Tiiva users.<br>
                                        Ensure you don't use the same photo for image 1 , 2 and three <br>
                                        Ensure the each image is not larger than 2 mbs and is of JPEG type else the upload will run into an error. <br>
                                        For step 7 ensure you select the right sex to prevent mix ups with the product once uploaded <br>
                                        For step 8 try and be as honest as possible and rate the item you are uploading. <br>
                                        it should be made known that Tiiva will turn down items that do not match up to our quality. <br>
                                        We will reject torn, patched, and resized items. <br>
                                        Items should be in their original forms reason being we cater for a large range of users so your assured that customer tastes and bodies range <br>
                                        Final amount you get depends entirely on teh amount provided in the proposed selling price and can only be edited by changing the sell price <br>
                                        Press the green publish button only once and wait for the upload to complete else you risk uploading the same item multiple times
                                    </p>
                                </div>
                            </div>
                            <!-- Tiiva shack end -->
                        </div>
                    </div>
                    <div class="row sellercontainer">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <ul class="list-group">
                                <li class="list-group-item messages"><a href="#">Admin</a><span class="badge">23</span></li>
                                    <div class="row notifs">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <p>
                                                The content appearing in the box of admins
                                            </p>
                                        </div>

                                    </div>
                                <li class="list-group-item messages"><a href="#">Messages</a><span class="badge">23</span></li>
                                    <div class="row notifs">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <p>
                                                The content appearing in teh box of messages
                                            </p>
                                        </div>
                                    </div>
                                <li class="list-group-item messages"><a href="#">Uploads</a><span class="badge">23</span></li>
                                    <div class="row notifs">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <p>
                                                The content appearing in teh box of uploads
                                            </p>
                                        </div>
                                    </div>
                                <li class="list-group-item messages"><a href="#">Sales</a><span class="badge">32</span></li>
                                <div class="row notifs">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <p>
                                            The content appearing in teh box of messages
                                        </p>
                                    </div>
                                </div>
                                <li class="list-group-item messages"><a href="#">Returns</a><span class="badge">11</span></li>
                                <div class="row notifs">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <p>
                                            The content appearing in teh box of returns
                                        </p>
                                    </div>
                                </div>
                                <li class="list-group-item messages"><a href="#">Reviews</a><span class="badge primary">40</span></li>
                                <div class="row notifs">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <p>
                                            The content appearing in teh box of review
                                        </p>
                                    </div>
                                </div>

                            </ul>
                        </div>
                        <script>

                            $(".notifs").fadeOut();
                            $(".messages").click(function(){
                                $(".messages").removeClass("list-active");
                                $(this).addClass("list-active");

                                var y = 0;
                                while( y <= 6){
                                    if($(".messages").eq(y).hasClass("list-active")){
                                        //$(".sellersmenu>div").eq(x).toggle();
                                        $(".notifs").eq(y).fadeIn();
                                    }else{
                                        $(".notifs").eq(y).fadeOut();
                                    }
                                    y++;
                                }
                            });


                         </script>
                    </div>
                    <div class="row sellercontainer">
                      <script type="text/javascript">
                      boxed();

                          $(document).ready(function(){
                              $.ajax({
                                  type: "GET",
                                  url: 'onlinemerchantuploads.php',
                                  success: function(data){
                                      $("#onlineuploads").html(data);
                                  }
                              });

                              $.ajax({
                                  type: "GET",
                                  url: 'checkonmypickups.php',
                                  success: function(data){
                                      $("#mypickups").html(data);
                                  }
                              });


                              $.ajax({
                                  type: "GET",
                                  url: 'checkmyproductsintransit.php',
                                  success: function(data){
                                      $("#myproductsintransit").html(data);
                                  }
                              });
                          });
                      </script>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <ul class="list-group">
                                <li title="<h3>Online Uploads</h3><br>These my products that are currently online.<br>Available so not yet sold" class="list-group-item list-history"><a href="#">Online Uploads</a><span class="badge">23</span></li>
                                    <div class="row history">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="onlineuploads">
                                            <p>
                                                The content appearing in the box of online uploads
                                            </p>
                                        </div>
                                        <script>
                                        $(document).ready(function(){
                                           $(".list-group-item").tooltip({
                                               placement: "top",
                                               //title: "<h5></h5>I am here",
                                               html: "true",

                                           })
                                        });
                                        </script>

                                    </div>
                                <li title="<h3>Freshly Made Sales</h3>The following items have been sold on Tiiva and need to be picked up" class="list-group-item list-history"><a href="#">Pickup/Sales made</a><span class="badge">23</span></li>
                                    <div class="row history">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="mypickups" style="height:300px;overflow:scroll;">
                                            <p>
                                                Shows information on a pickup from a sale just made
                                            </p>
                                        </div>
                                    </div>
                                <li title="<h3>Products in Transit</h3><br>These are your products that are in Tiiva's Custody and are enroute to the client" class="list-group-item list-history"><a href="#">Products in Transit</a><span class="badge">23</span></li>
                                    <div class="row history">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myproductsintransit" style="height:300px;overflow:scroll;">
                                            <p>
                                                The content appearing in teh box of transit
                                            </p>
                                        </div>
                                    </div>
                                <li title="<h3>Sold &amp; Delivered</h3><br>This is your successful sales history." class="list-group-item list-history"><a href="#">Sold &amp; Delivered</a><span class="badge">23</span></li>
                                    <div class="row history">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <p>
                                                The content appearing in teh box of sold and delivered
                                            </p>
                                        </div>
                                    </div>
                                <li title="<h3>Returns</h3><br>These are products you sold but were rejected by the customer possibly due to defects" class="list-group-item list-history"><a href="#">Returns</a><span class="badge">32</span></li>
                                <div class="row history">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <p>
                                            The content appearing in teh box of returns
                                        </p>
                                    </div>
                                </div>
                                <li title="<h3>Complaints/Poor Rating</h3><br>These are the complaints your products got/bad reviews and bad ratings" class="list-group-item list-history"><a href="#">Complaints/Poor rating</a><span class="badge">11</span></li>
                                <div class="row history">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <p>
                                            The content appearing in teh box of complaints
                                        </p>
                                    </div>
                                </div>

                                <script>

                                    $(".history").fadeOut();
                                    $(".list-history").click(function(){
                                        $(".list-history").removeClass("list-hist-active");
                                        $(this).addClass("list-hist-active");

                                        var y = 0;
                                        while( y <= 6){
                                            if($(".list-history").eq(y).hasClass("list-hist-active")){
                                                //$(".sellersmenu>div").eq(x).toggle();
                                                $(".history").eq(y).fadeIn();
                                            }else{
                                                $(".history").eq(y).fadeOut();
                                            }
                                            y++;
                                        }
                                    });


                                 </script>
                            </ul>
                        </div>
                    </div>
                <!-- END OF THE CONTENTS SELLER PROF -->




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
                                        <li><a style="color:black;" href="Howto.php">FAQS</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 visible-lg visible-md"><h4>Quick Shop</h4>
                                    <ul class="list-unstyled">
                                        <li><a style="color:black;" href="mainpage.php?search=mens&&sub=tshirts">Tshirts</a></li>
                                        <li><a style="color:black;" href="Mens.php">Mens</a></li>
                                        <li><a style="color:black;" href="Mens.php">Womens</a></li>
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
                                        <li><a style="color:black;" href="Termsofuse.php">Ticket System</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 visible-lg visible-md"><h4>About shopper</h4>
                                    <ul class="list-unstyled">
                                        <li><a style="color:black;" href="aboutus.php">Company information</a></li>
                                        <li><a style="color:black;" href="aboutus.php">Careers</a></li>
                                        <li><a style="color:black;" href="aboutus.php">Store location</a></li>
                                        <li><a style="color:black;" href="aboutus.php">Affiliate Program</a></li>
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

    </body>
</html>
