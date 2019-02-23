<?php
session_start();
ob_start();
require 'search.inc.php';
require 'core.inc.php';
require 'utils/userutils.php';

if(userLoggedIn() != True){
    header('Location:index.php');
    die();
}

if(isUserMerchant($conn) != True){
    header('Location:index.php');
    die();
}

// $_SESSION['$user_id'];

// TODO CREATE A RETURN FEATURE TO MONITOR ITEMS THAT WERE REJECTED AND RETURNED


?>
<!DOCTYPE html>
<html>
<title>Tiiva | Home</title>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php require 'templates/resourcelinks/headerlinks.php';?>
        <link rel="stylesheet" href="animate.css">

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
        .panel-group .panel {
        border-radius: 0;
        box-shadow: none;
        border-color: #EEEEEE;
    }

    .panel-default > .panel-heading {
        padding: 0;
        border-radius: 0;
        color: #212121;
        background-color: #FAFAFA;
        border-color: #EEEEEE;
    }

    .panel-title {
        font-size: 14px;
    }

    .panel-title > a {
        display: block;
        padding: 15px;
        text-decoration: none;
    }

    .more-less {
        float: right;
        color: #212121;
    }

    .panel-default > .panel-heading + .panel-collapse > .panel-body {
        border-top-color: #EEEEEE;
    }
    </style>

</head>
    <body>
        <div class="container-fluid">
            <div class="row" style="background-color:rgba(0,0,0,0.2)">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row" style="padding-top:0.5%;padding-bottom:0.5%;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="boxtit"></div>
                        </div>
                </div>
            </div>

<!--            start of accounts div-->
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"> <a href="index.php"><img src="images/otherphotoo.png" class="img-responsive"></a> </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 visible-lg visible-md">

                </div>

            </div>

<!--            end of accounts div-->

                <!-- start of the users acount details -->

               <div class="row visible-lg visible-md" style="height:300px;background-image:url(images/misc/pexels-photo-11744.jpeg);background-size:cover;background-position:50%;margin-bottom:1%;">
                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                           <div class="row" style="margin-top:1%;">
                               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                   <h2 class="text-center text-uppercase visible-sm visible-xs" style="margin-top:-10px; color:orange;">Tiiva Seller's account</h2>
                               </div>
                           </div>
                           <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="background-image:url(editions/manontop.jpeg);background-repeat:no-repeat;background-size:cover;background-position:50%;border-radius:50%;width:150px;height:150px;"></div> -->
                           <div class="row" style="position:absolute;bottom:10%;right:1.3%;">
                               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 visible-lg visible-md">
                                   <i class="mdi mdi-pen mdi-24px" style="position:absolute;right:10px;top:-40px;color:rgb(0, 128, 255);text-shadow:1px 1px 1px black;"></i>
                                   <script>
                                       $(".mdi-pen").click(function(){
                                           alert("Edit user information");
                                       });
                                   </script>
                                   <div class="sellerStuff">
                                       <?php
                                       $merchdets = getMerchantDetails($conn);
                                       ?>
                                   </div>
                                   <h5 class="text-right text-uppercase" style="margin-top:-10px; color:white;text-shadow:1px 1px 1px black;" id="boxlabels">Seller Details</h5>
                                   <h5 class="text-right text-uppercase" style="margin-top:-3px; color:white;text-shadow:1px 1px 1px black;" id="boxlabels"><?php echo $merchdets['surname'].' '; echo $merchdets['firstname'].' '; echo $merchdets['lastname'];?></h5>
                                   <h5 class="text-right text-uppercase" style="margin-top:-3px; color:white;text-shadow:1px 1px 1px black;" id="boxlabels">id no: <?php echo $merchdets['idno']?></h5>
                                   <h5 class="text-right text-uppercase" style="margin-top:-3px; color:white;text-shadow:1px 1px 1px black;" id="boxlabels">phone no: <?php echo $merchdets['phonenumber']?></h5>
                                   <h5 class="text-right text-uppercase" style="margin-top:-3px; color:white;text-shadow:1px 1px 1px black;" id="boxlabels">Business type: <?php echo $merchdets['businesstype']?></h5>
                                   <h5 class="text-right text-uppercase" style="margin-top:-3px; color:white;text-shadow:1px 1px 1px black;" id="boxlabels">country: <?php echo $merchdets['country']?></h5>
                                   <h5 class="text-right text-uppercase" style="margin-top:-3px; color:white;text-shadow:1px 1px 1px black;" id="boxlabels">county: <?php echo $merchdets['county']?></h5>
                                   <h5 class="text-right text-uppercase" style="margin-top:-3px; color:white;text-shadow:1px 1px 1px black;" id="boxlabels">Township: <?php echo $merchdets['township']?></h5>
                                   <h5 class="text-right text-uppercase" style="margin-top:-3px; color:white;text-shadow:1px 1px 1px black;" id="boxlabels">Business name: <?php echo $merchdets['businessname']?></h5>
                               </div>
                            </div>

                            <div class="row" style="margin-top:7%;">
                                   <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="height:200px;border:1px solid white;background-image:url(images/misc/pexels-photo-11744.jpeg);background-size:cover;background-position:50%;">

                                   </div>
                            </div>
                            <div class="row" style="color:red;position:absolute;bottom:0%;right:10px;text-shadow:1px 1px 1px black;display:none;">
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
                            <div class="row" style="color:white;position:absolute;bottom:1%;left:10px;text-shadow:-1px -1px 1px black;display:none;">
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
                        <h4 class="text-center text-uppercase" style="color:orange;">Tiiva Seller's account</h4>
                    </div>
                </div>

               <div class="row visible-sm visible-xs" style="height:200px;background-image:url(images/misc/pexels-photo-11744.jpeg);background-size:cover;background-position:50%;margin-bottom:10%;">
                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                       <div class="row" style="position:absolute;right:4%;margin-top:4%;">
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                               <h5 class="text-right text-uppercase" style="margin-top:-10px; color:white;text-shadow:1px 1px 1px black;" id="boxlabels">Seller Details</h5>
                                   <h6 class="text-right text-uppercase" style="margin-top:-3px; color:white;text-shadow:1px 1px 1px black;" id="boxlabels"><?php echo $merchdets['surname'].' '; echo $merchdets['firstname'].' '; echo $merchdets['lastname'];?></h6>
                                   
                                   <h6 class="text-right text-uppercase" style="margin-top:-3px; color:white;text-shadow:1px 1px 1px black;" id="boxlabels">phone no: <?php echo $merchdets['phonenumber']?></h6>
                                   <h6 class="text-right text-uppercase" style="margin-top:-3px; color:white;text-shadow:1px 1px 1px black;" id="boxlabels">Business type: <?php echo $merchdets['businesstype']?></h6>
                                   <h6 class="text-right text-uppercase" style="margin-top:-3px; color:white;text-shadow:1px 1px 1px black;" id="boxlabels">country: <?php echo $merchdets['country']?></h6>
                                   <h6 class="text-right text-uppercase" style="margin-top:-3px; color:white;text-shadow:1px 1px 1px black;" id="boxlabels">county: <?php echo $merchdets['county']?></h6>
                                   <h6 class="text-right text-uppercase" style="margin-top:-3px; color:white;text-shadow:1px 1px 1px black;" id="boxlabels">Township: <?php echo $merchdets['township']?></h6>
                                   <h6 class="text-right text-uppercase" style="margin-top:-3px; color:white;text-shadow:1px 1px 1px black;" id="boxlabels">Business name: <?php echo $merchdets['businessname']?></h6>
                               </div>
                       </div>
                       <!-- <div class="row" style="position:absolute;margin-top:37%;margin-bottom:2%;">
                           <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="background-image:url(editions/manontop.jpeg);background-repeat:no-repeat;background-size:cover;background-position:50%;border-radius:50%;width:100px;height:100px;"></div>
                       </div> -->
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
                            <h1 id="heres">Welcome!</h1>
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

                    <div class="row sellercontainer" style="display: none;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1>Upload Panel</h1>
                            <p class="pull-left">to upload new products click on the blue button labelled <span style="color:green;">upload item</span> to the right</p>
                            <h3 class="pull-right"><a class="btn btn-md btn-primary" target="_blank" href="upload.php" title=" go to upload page"><span class="mdi mdi-cloud-upload"></span> Upload Item</a></h3>
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
                    <div class="row sellercontainer" style="display: none;">
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
                    <!-- INSERT NEW ACCORDION HERE -->
                    <div class="row sellercontainer" style="display: none;">
                <div class="col-lg-12">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

        

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="CurrentlyBooked" title="<h3>Items currently booked</h3><br>These are my items that are currently being viewed by a user">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#currentlybooked" aria-expanded="false" aria-controls="currentlybooked">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        ONLINE - CURRENTLY BEING VIEWED</a>
                </h4>
            </div>
            <div id="currentlybooked" class="panel-collapse collapse" role="tabpanel" aria-labelledby="CurrentlyBooked">
                <div class="panel-body onlinebooked">
                    This should show all your uploads that are currently available, not yet booked and currently not in any user's cart
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="currentlyCarted" title="<h3>Carted Items</h3><br>These are my uploads that are currently in a users cart. This should basically indicate a potential sale.">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsecarted" aria-expanded="false" aria-controls="collapsecarted">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        ONLINE - CURRENTLY ADDED TO USER'S CART</a>
                </h4>
            </div>
            <div id="collapsecarted" class="panel-collapse collapse" role="tabpanel" aria-labelledby="currentlyCarted">
                <div class="panel-body onlinecarted">
                    This should show all your uploads that are currently available, not yet booked and currently not in any user's cart
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="merchantsold" title="<h3>New Sales</h3><br>These are my online products that have just been purchased/ paid for">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsolditems" aria-expanded="false" aria-controls="collapsolditems">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        NEW SALES</a>
                </h4>
            </div>
            <div id="collapsolditems" class="panel-collapse collapse" role="tabpanel" aria-labelledby="merchantsold">
                <div class="panel-body onlinesolditems">
                    This should show all your uploads that are currently available, not yet booked and currently not in any user's cart
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="merchanttransit" title="<h3>IN TRANSIT (minus)</h3><br>These are items that I uploaded and were bought by a user and are now in transit being delivered to them">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collaptransit" aria-expanded="false" aria-controls="collaptransit">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        ITEMS IN TRANSIT</a>
                </h4>
            </div>
            <div id="collaptransit" class="panel-collapse collapse" role="tabpanel" aria-labelledby="merchanttransit">
                <div class="panel-body onlinetransitpanel">
                    This shows all the transit items you have
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="merchantdelivered" title="<h3>Delivered</h3><br>These are my products that have already been delivered by to the buyer">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsedelivered" aria-expanded="false" aria-controls="collapsedelivered">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        MY PRODUCTS ALREADY DELIVERED</a>
                </h4>
            </div>
            <div id="collapsedelivered" class="panel-collapse collapse" role="tabpanel" aria-labelledby="merchantdelivered">
                <div class="panel-body onlinedeliveredpanel">
                    This are some of my items already delivered to the buyer
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="merchantreturns" title="<h3>Product Returns</h3><br>These are products that have been returned by the customer not contented with the item delivered.">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapreturns" aria-expanded="false" aria-controls="collapreturns">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        MY CURRENT RETURNS</a>
                </h4>
            </div>
            <div id="collapreturns" class="panel-collapse collapse" role="tabpanel" aria-labelledby="merchantreturns">
                <div class="panel-body onlinereturns">
                    This should show all my product returns
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingseven" title="<h3>Online Uploads (minus)</h3><br>These my products that are currently online.<br>Note that items currently in user's carts or currently booked will not appear here">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        AVAILABLE ONLINE UPLOADS</a>
                </h4>
            </div>
            <div id="collapseseven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingseven">
                <div class="panel-body onlineuploadspanel">
                    This should show all your uploads that are currently available, not yet booked and currently not in any user's cart
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="onlinemerchantspaused" title="<h3>Online Paused Items</h3><br>These are all my online products that I have paused.">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsepauseditems" aria-expanded="false" aria-controls="collapsepauseditems">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        PAUSED ITEMS</a>
                </h4>
            </div>
            <div id="collapsepauseditems" class="panel-collapse collapse" role="tabpanel" aria-labelledby="onlinemerchantspaused">
                <div class="panel-body onlineuploadpaused">
                    This should show all your currently paused items
                </div>
            </div>
        </div>
        <script>
              $("#CurrentlyBooked").click(function(){
                $.ajax({
                    type: "POST",
                    url: 'merchantswhitepaper.php',
                    data: "myuploads=booked",
                    success: function(data){
                        $(".onlinebooked").html(data);
                    }
                });
              });

            $("#currentlyCarted").click(function(){
              $.ajax({
                  type: "POST",
                  url: 'merchantswhitepaper.php',
                  data: "myuploads=addedtocart",
                  success: function(data){
                      $(".onlinecarted").html(data);
                  }
              });
            });

            $("#merchantsold").click(function(){
              $.ajax({
                  type: "POST",
                  url: 'merchantswhitepaper.php',
                  data: "myuploads=sold",
                  success: function(data){
                      $(".onlinesolditems").html(data);
                  }
                });
            });

            $("#merchanttransit").click(function(){
              $.ajax({
                  type: "POST",
                  url: 'merchantswhitepaper.php',
                  data: "myuploads=transit",
                  success: function(data){
                      $(".onlinetransitpanel").html(data);
                  }
                });
            });

            $("#merchantdelivered").click(function(){
              $.ajax({
                  type: "POST",
                  url: 'merchantswhitepaper.php',
                  data: "myuploads=delivered",
                  success: function(data){
                      $(".onlinedeliveredpanel").html(data);
                  }
                });
            });

            $("#merchantreturns").click(function(){
              $.ajax({
                  type: "POST",
                  url: 'merchantswhitepaper.php',
                  data: "myuploads=returns",
                  success: function(data){
                      $(".onlinereturns").html(data);
                  }
                });
            });

            $("#onlinemerchantspaused").click(function(){
              $.ajax({
                  type: "POST",
                  url: 'merchantswhitepaper.php',
                  data: "myuploads=paused",
                  success: function(data){
                      $(".onlineuploadpaused").html(data);
                      $(".unpauseitem").click(function(){
                        var productid = $(this).attr("data-prod");
                        // alert(productid);
                          $.ajax({
                            type: "POST",
                            url: 'merchantswhitepaper.php',
                            data: "unpause="+productid,
                            success: function(data){
                                $("#responsemessage").html(data);
                            }
                          });
                      });
                      $(".deletepauseditem").click(function(){
                        var productid = $(this).attr("data-prod");
                        // alert(productid);
                        var casestate = confirm("Are you sure you want to remove the upload? This cannot be undone");
                        if(casestate == true){
                          $.ajax({
                          type: "POST",
                          url: 'merchantswhitepaper.php',
                          data: "deletepauseditem="+productid,
                          success: function(data){
                            $("#responsemessage").html(data);
                          }
                        });
                        }else{
                          alert('item deletion canceled');
                          $("#responsemessage").html("")
                        }
                      });
                  }
                });
            });


          $(document).ready(function(){
             
             $(".panel-heading").tooltip({
                 placement: "top",
                 //title: "<h5></h5>I am here",
                 html: "true",

             })
          });
          $("#headingseven").click(function(){
              $.ajax({
                  type: "POST",
                  url: 'merchantswhitepaper.php',
                  data: "myuploads=online",
                  success: function(data){
                      $(".onlineuploadspanel").html(data);
                      $(".pauseproductbtn").click(function(){
                        var productid = $(this).attr("data-prod");
                        // alert(productid);
                        $.ajax({
                          type: "POST",
                          url: 'merchantswhitepaper.php',
                          data: "pauseProduct="+productid,
                          success: function(data){
                            $("#responsemessage").html(data);
                          }
                        });
                      });
                      $(".deleteproductbtn").click(function(){
                        var productid = $(this).attr("data-prod");
                        // alert(productid);
                        var casestate = confirm("Are you sure you want to remove the upload? This cannot be undone");
                        if(casestate == true){
                          $.ajax({
                          type: "POST",
                          url: 'merchantswhitepaper.php',
                          data: "deleteproduct="+productid,
                          success: function(data){
                            $("#responsemessage").html(data);
                          }
                        });
                        }else{
                          alert('item deletion canceled');
                          $("#responsemessage").html("")
                        }
                      });
                  }
              });
          });
           boxed();

           $(".panel-heading").tooltip({
               placement: "top",
               //title: "<h5></h5>I am here",
               html: "true",

           });
          
          </script>


    </div><!-- panel-group -->
                </div>
            </div>
                    <!-- INSERT NEW ACCORDION HERE -->
                    
                <!-- END OF THE CONTENTS SELLER PROF -->
</div>
<?php require 'templates/footer.php';?>
<script>
  function toggleIcon(e) {
    $(e.target)
        .prev('.panel-heading')
        .find(".more-less")
        .toggleClass('glyphicon-plus glyphicon-minus');
}
$('.panel-group').on('hidden.bs.collapse', toggleIcon);
$('.panel-group').on('shown.bs.collapse', toggleIcon);
</script>
    </body>
</html>
