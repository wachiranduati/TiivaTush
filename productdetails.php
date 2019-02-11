<?php
ob_start();
session_start();
require 'connect.php';
require 'core.inc.php';
require 'looptemplater.php';


if(isset($_SESSION['$user_id'])){
    $buyer = $_SESSION['$user_id'];
    $none = 0;
    $cookiename =  md5($_SESSION['$user_id'].'cooksieairmark');

}

$century = 860;
$id = $_GET['id'];
$Yeartoday = Date('Y');


//with the change in categories this will now add the item and items will not be
//automatically be added to the users account

//this was on i turned it off the start
//if (isset($_GET['add'])){
//    $buyer = $_GET['add'];
//    //removefromcart($buyer);
//    addtocart($buyer);
//    header('Location: index.php');
//
//}else{
//    //echo 'button wasn\'t pressed';
//
//}
//this was on i turned it off..the end

// using id like this so that we can increment it will the 5 minute lapse
// wer are going to select all the items any single div will require
// then post them on the identical div id container
// items required img source, price, title, then formulate the button data-name, data-price
//for this page only get the lead image, follow up to details page query up the total 3 images

$query = "SELECT * FROM `products` WHERE `id`='".mysqli_real_escape_string($conn, $id)."'";
$query_run = mysqli_query($conn, $query);

$query_row = mysqli_fetch_assoc($query_run);
//echo $query_row[imageone];


if($query_row['category'] != 'wallart' && $query_row['category'] != 'labels' ){
    $message = "Remember, these are second hand clothes \"Mtush\" we ensure that items you purchase reach up to our standards.Check the item description to look throught the items dimensions.";

}elseif ($query_row['category'] == 'wallart'){
    $message = "This is an original new item by $sellerid, We at Airmark appreciate art.Remember to check the item description above to look through the specifics.";
}else {
    $message = "We at Airmark support designers from Kenya and all over. The items above are brand new from both international and local designers.Remember to look through the items description.";
}

?>
<!DOCTYPE html>
<html>
<title>tiiva.co.ke | <?php echo $query_row['itemtitle'];?></title>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php require 'templates/resourcelinks/headerlinks.php';?>

    <style type="text/css">

        .glass{
            color:white;position:absolute;top:40%;left:40%;font-size:20px;
        }
        .modpic:hover + .glass{
            font-size:30px;
        }
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
    <body onload="updateview();bookitem();">
        <?php 
        require('templates/header.php');
        ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="itemstat" class="text-center"></div>
                    <p id="buttonz" class="text-center"></p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;"></div>
            </div>
            <div class="row pull-right">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-top:3px;"><span class="glyphicon glyphicon-eye-open" style="color:#adadad;"></span>&nbsp;<span id="anotherone">Hi</span> View(s)</div>
            </div>

<!--            STOP HERE SERIOUSLY STOP RIGHT HERE-->

        <!--THIS CATEGORY START HERE SO TAKE CARE TO REMEMBER-->
           <div class="row" style="margin-top:5px;">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <a href="index.php">Home</a> <span class="glyphicon glyphicon-chevron-right" style="color:#bebebe;"></span> <a href="index.php">Mtumba</a> <span class="glyphicon glyphicon-chevron-right" style="color:#bebebe;"></span> <a href="<?php echo $query_row['category'];?>"><?php echo $query_row['category'];?></a> <span class="glyphicon glyphicon-chevron-right" style="color:#bebebe;"></span> <a href="#" style="color:black"><?php echo $query_row['itemtitle'];?></a>
            </div>


            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 visible-lg visible-md"></div>
           </div>
           <div class="row visible-sm visible-xs">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4 class="text-uppercase text-center" style="font-family:kok;"><?php echo $query_row['itemtitle'];?></h4>

                </div>
            </div>
            <div class="row visible-lg visible-md" style="margin-top:1%;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
            </div>
            <div class="row">
<!--                images container first row and the second-->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class=" col-lg-3 col-md-3 col-sm-3 col-xs-3 visible-lg visible-md">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom:10%;">


                            <div id="modalimagecontainer">
                                <img id="myImg" src="mtumbauploads/<?php echo $query_row['imageone'];?>" alt="<?php echo $query_row['itemtitle']; echo $query_row['details'];?>" class="modpic img-responsive">
                                <span class="glass glyphicon glyphicon-search"></span>

                                <!-- The Modal -->
                                <div id="myModalT" class="modal">
                                  <span id="closeT" class="close">&times;</span>
                                  <img class="modal-content" id="img01">
                                  <div id="caption"></div>
                                </div>

                                <script>
                                // Get the modal
                                var modal = document.getElementById('myModalT');

                                // Get the image and insert it inside the modal - use its "alt" text as a caption
                                var img = document.getElementById('myImg');
                                var modalImg = document.getElementById("img01");
                                var captionText = document.getElementById("caption");
                                img.onclick = function(){
                                    modal.style.display = "block";
                                    modalImg.src = this.src;
                                    modalImg.alt = this.alt;
                                    captionText.innerHTML = this.alt;
                                }

                                // Get the <span> element that closes the modal
                                //var span = document.getElementsByClassName(\"close\")[0];
                                var span = document.getElementById("closeT");

                                // When the user clicks on <span> (x), close the modal
                                span.onclick = function() {
                                //alert("Works");
                                    modal.style.display = "none";
                                }

                                </script>
                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom:10%;">

                                            <div id="modalimagecontainer2">
                                <img id="myImg2" src="mtumbauploads/<?php echo $query_row['imagetwo'];?>" alt="<?php echo $query_row['itemtitle']; ?>" class="modpic img-responsive">
                                <span class="glass glyphicon glyphicon-search"></span>

                                <!-- The Modal -->
                                <div id="myModal2" class="modal">
                                  <span id="close2" class="close">&times;</span>
                                  <img class="modal-content" id="img012">
                                  <div id="caption2">T</div>
                                </div>

                                <script>
                                // Get the modal
                                var modal2 = document.getElementById('myModal2');

                                // Get the image and insert it inside the modal - use its "alt" text as a caption
                                var img2 = document.getElementById('myImg2');
                                var modalImg2 = document.getElementById("img012");
                                var captionText2 = document.getElementById("caption2");
                                img2.onclick = function(){
                                    modal2.style.display = "block";
                                    modalImg2.src = this.src;
                                    modalImg2.alt = this.alt;
                                    captionText2.innerHTML = this.alt;
                                }

                                // Get the <span> element that closes the modal
                                //var span = document.getElementsByClassName("close")[0];
                                var span2 = document.getElementById("close2");

                                // When the user clicks on <span> (x), close the modal
                                span2.onclick = function() {
                                //alert("Works");
                                    modal2.style.display = "none";
                                }

                                </script>
                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                            <div id="modalimagecontainer3">
                                <img id="myImg3" src="mtumbauploads/<?php echo $query_row['imagethree'];?>" alt="<?php echo $query_row['itemtitle']; ?>" class="modpic img-responsive">
                                <span class="glass glyphicon glyphicon-search"></span>

                                <!-- The Modal -->
                                <div id="myModal3" class="modal">
                                  <span id="close3" class="close">&times;</span>
                                  <img class="modal-content" id="img013">
                                  <div id="caption3">T</div>
                                </div>

                                <script>
                                // Get the modal
                                var modal3 = document.getElementById('myModal3');

                                // Get the image and insert it inside the modal - use its "alt" text as a caption
                                var img3 = document.getElementById('myImg3');
                                var modalImg3 = document.getElementById("img013");
                                var captionText3 = document.getElementById("caption3");
                                img3.onclick = function(){
                                    modal3.style.display = "block";
                                    modalImg3.src = this.src;
                                    modalImg3.alt = this.alt;
                                    captionText3.innerHTML = this.alt;
                                }

                                // Get the <span> element that closes the modal
                                //var span = document.getElementsByClassName("close")[0];
                                var span3 = document.getElementById("close3");

                                // When the user clicks on <span> (x), close the modal
                                span3.onclick = function() {
                                //alert("Works");
                                    modal3.style.display = "none";
                                }

                                </script>
                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">

<!--            starts here-->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="imagecarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="item active">
                                    <img src="mtumbauploads/<?php echo $query_row['imageone'];?>" class="img-responsive productslideimages">
                                    <div class="carousel-caption">
                                        <h3>Image One</h3>
                                        <p>This is the first image in the carousel</p>
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="mtumbauploads/<?php echo $query_row['imagetwo'];?>" class="img-responsive productslideimages">
                                    <div class="carousel-caption">
                                        <h3>Image two</h3>
                                        <p>This is the second image in the carousel</p>
                                    </div>
                            </div>

                            <div class="item">
                                    <img src="mtumbauploads/<?php echo $query_row['imagethree'];?>" class="img-responsive productslideimages">
                                    <div class="carousel-caption">
                                        <h3>Image three</h3>
                                        <p>This is the third image in the carousel</p>
                                    </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>



                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 visible-lg visible-md" style="margin-top:2%;"></div>
                            </div>

                            <div class="row visible-lg visible-md">
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11" style="background-color:#EEEEEE;">
                                    <h5 style="font-family:kok;">Tiiva 411&nbsp;<span class="glyphicon glyphicon-exclamation-sign" style="color:lime"></span></h5>
                                    <p style="color:red;"><small><?php echo $message;?></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<!--                the prices box container-->

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12" style="background-color:rgba(238, 238, 238, 0.77);">
                                    <!--item title container-->
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <h4 class="text-uppercase" style="font-family:kok;color:black;"><strong><?php echo $query_row['itemtitle']?></strong></h4>

                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <p class="well text-center well-sm">INSTOCK: <?php 
                                                if($query_row['sold'] == 0){
                                                    echo 1;
                                                }else{
                                                    echo 0;
                                                }
                                                ?></p>
                                            </div>
                                        </div>
                                        <!-- item title container-->
                                        <!-- item star rating and seller container-->
                                        <div class="row">
                                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                                <h5>Item condition according to the Merchant</h5>
                                            <h5>
                                                <?php 
                                                $val = $query_row['rating'];
                                                $count = 0;
                                                while($count < $val){
                                                    echo "
                    <span class=\"glyphicon glyphicon-star\" style=\"color:orange;\"></span>
                                                    ";
                                                $count++;

                                                }
                                                if($val != 5){
                                                    $fails = 5 - $val;
                                                    $failcount = 0;
                                                    while($failcount < $fails){
                                                       echo "
                    <span class=\"glyphicon glyphicon-star\" style=\"color:gainsboro;\"></span>
                                                    "; 
                                                    $failcount++;
                                                    }
                                                }
                                                ?>
                                                
                                                
                                               <!--  <span class="glyphicon glyphicon-star" style="color:orange;"></span>
                                                <span class="glyphicon glyphicon-star" style="color:orange;"></span>
                                                <span class="glyphicon glyphicon-star" style="color:orange;"></span> -->
                                            </h5>
                                        </div>

                                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">

                                            <h5 class="text-capitalize">Item listed by: <a><span class="MerchstoreProd"></span></a></h5>
                                        </div>
                                        </div>
                                        <!-- item star rating container-->
                                        <!-- item description price buttons container-->
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border-top:1px solid gainsboro;"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><h5 class="text-uppercase" style="color:black;"><strong>Item description</strong></h5></div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:5;border-bottom:1px solid gainsboro;color:black;"><p><?php echo $query_row['details'];?></p></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="color:black;">
                                                <h3 class="text-left text-uppercase" style="font-size:100%;font-weight:strong;">Price</h3>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                                            <div class="col-lg-5 col-md-5 col-sm-10 col-xs-10">
                                                <h2 class="text-left" style="color:orange;font-family:kok;border-bottom:1px solid gainsboro;">&nbsp;<?php echo $query_row['price'];?> Ksh</h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                                <?php
                                                // if replace with unfunctional btn if item not available/cart
                                                if(isset($_SESSION['$user_id'])){
                                                    if($query_row['availability'] == 0 && $query_row['buyer'] != 0){
                                                            if($query_row['buyer'] == $_SESSION['$user_id']){
                                                                // me show added to cart
                                                                echo "
        <a class=\"btn btn-block btn-success btn-lg btn-block disabled\"><span class=\"mdi mdi-cart-plus\"></span> Added to Your Cart</a>
                                                            ";
                                                            }else{
                                                                // show normal cart
                                                                echo "
        <a class=\"btn btn-block btn-primary btn-lg btn-block\"><span class=\"mdi mdi-cart-off\"></span> Currently unavailable</a>
                                                            ";
                                                            }
                                                    }else{
                                                            echo "
        <a class=\"btn btn-block btn-primary btn-lg btn-block\" id=\"addtocartbutton\"><span class=\"mdi mdi-cart-plus\"></span> Buy Now</a>
                                                            ";
                                                    }
                                                }else{
                                                    // deactivated button
                                                    echo "<a class=\"btn btn-block btn-info btn-lg btn-block\"><span class=\"mdi mdi-cart-plus\"></span> Login to buy this</a>";
                                                }
                                                
                                                ?>
                                                <!-- <a class="btn btn-danger" id="unbookBtn">unbook me</a>
                                                <a class="btn btn-success" id="remvCart">Remove from cart</a> -->
                                            </div>
                                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:2%;">
                                            <span class="glyphicon glyphicon-heart-empty" style="color:red;font-size:200%;" onclick="wishlistbutton();" onmouseover="wishlistpredict();" id="wishlistbutton"></span>

                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><p id="wishlistmessage" style="margin-top:2%;">Add to wishlist</p></div>
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                                        </div>


                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <p>Shipped by <a href="#">Tiiva</a></p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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

                                        <div class="row visible-sm visible-xs">
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12" style="background-color:#EEEEEE;">
                                    <h5 style="font-family:kok;">Tiiva 411&nbsp;<span class="glyphicon glyphicon-exclamation-sign" style="color:lime"></span></h5>
                                    <p style="color:red;"><small><?php echo $message;?></small></p>
                                </div>
                            </div>

                                    </div>
                                    <!-- item description price buttons container-->

                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                    <div class="row visible-lg visible-md" style="margin-top:30%;">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
                                    </div>
                                        <div class="row">
                                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="border:1px solid rgb(0, 186, 255);">
                                                <div class="row">
                                                <!-- mtush offers to the right-->
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:rgb(0, 186, 255);color:white;"><h4 class="text-center text-uppercase">Our promises</h4></div>
                                                </div>

                                                <div class="row" style="margin-top:2%;">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <p><span class="glyphicon glyphicon-time" style="color:gainsboro;"></span> Delivery in 3 - 5 working days</p>
                                                        <p><span class="glyphicon glyphicon-refresh" style="color:rgba(0, 98, 255, 0.86);"></span> 1 day return policy</p>
                                                        <p><span class="glyphicon glyphicon-heart" style="color:red;"></span> Best prices ever</p>
                                                        <p><span class="glyphicon glyphicon-gift" style="color:purple;"></span> Variety, a huge one</p>
                                                        <p><span class="glyphicon glyphicon-home" style="color:gainsboro;"></span> Shipping to your doorstep</p>

                                                        <p><span class="glyphicon glyphicon-heart" style="color:red;"></span> A <a href="#">smile</a> with every delivery</p>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <p id="newcartitems"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        <div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

<!--            ads other items you might like security features and details start here-->
            <!--THEN THAT CATEGORY ENDS RIGHT HERE-->

<!--            YOU CAN START AGAIN FROM HERE-->

            <!-- THE HEADING FOR OTEHR ITEMS AND SHIT-->
            <div class="row" style="margin-top:10px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border:1px solid black;background-color:black;color:white;">
                            <h5 class="text-center text-uppercase">Other items you might like</h5>
                        </div>
                    </div>

<?php
// using id like this so that we can increment it will the 5 minute lapse
// wer are going to select all the items any single div will require
// then post them on the identical div id container
// items required img source, price, title, then formulate the button data-name, data-price
//for this page only get the lead image, follow up to details page query up the total 3 images

function itemloop($id, $conn){
    $query_id_details = "SELECT * FROM `products` WHERE `id`='".mysqli_real_escape_string($conn, $id)."'";
    $query_run_details = mysqli_query($conn, $query_id_details);
    $query_row_details = mysqli_fetch_assoc($query_run_details);
    $pageCategory = $query_row_details['category'];
    $pageSubcategory = $query_row_details['subcategory'];


    $query2 = "SELECT * FROM `products` WHERE `id`!='".mysqli_real_escape_string($conn, $id)."' AND `availability`='1' AND `buyer`='0' AND `category`='$pageCategory' AND `subcategory`='$pageSubcategory'";
$query_run2 = mysqli_query($conn, $query2);
$query_num_rows = mysqli_num_rows($query_run2);
//echo $query_num_rows;
if($query_num_rows <= 6){
    //to be changed later to 30 to ensure theres enough items at all times
    // the while loop should fall here if less than the required amount
    //with disabled links
    //echo "nothing was found or items are not more than 6";
    $query = "SELECT * FROM `products` WHERE `id`!='".mysqli_real_escape_string($conn, $id)."' AND `availability`='1' AND `buyer`='0' ORDER BY RAND() LIMIT 6";
$query_run = mysqli_query($conn, $query);
// print(mysqli_error($conn));

//$query_row = mysqli_fetch_assoc($query_run);
//echo $query_row[imageone];

$count = 1;
while($query_row = mysqli_fetch_assoc($query_run)){
    $price = number_format($query_row['price']);
    echo returnProperItemsMainpagees($query_row['id'], $query_row['imageone'], $query_row['label'], $query_row['itemtitle'], $price, $query_row['size']);
    
    //$count ++;
    //that code up there just looped the same item 6 times to fill in the blank slots
}

}else{
    //echo "Something to display right here";
    //this should indicate everything is okay and should
    // display 6 items online with an id count increase
    $query = "SELECT * FROM `products` WHERE `id`!='".mysqli_real_escape_string($conn, $id)."' AND `availability`='1' AND `buyer`='0' AND `category`='$pageCategory' AND `subcategory`='$pageSubcategory' ORDER BY RAND() LIMIT 6";
$query_run = mysqli_query($conn, $query);

    $counts = 1;

    while($query_row = mysqli_fetch_assoc($query_run)){
       // echo $query_row['webid'];
       $price = number_format($query_row['price']);

       echo returnProperItemsMainpagees($query_row['id'], $query_row['imageone'], $query_row['label'], $query_row['itemtitle'], $price, $query_row['size']);
}
}

//the above code checks whether there are enough items specifically more than 6 to satisfy the request
//if not then the while loop below is run with disabled buttons and a note stating that more items
//are being uploaded


}
itemloop($id, $conn);
echo "

<!--            SOMETHING IS INTENTIONALLY MISSING HERE-->

                </div>
            </div>
    ";
?>
</div>
<?php 
        require('templates/footer.php');
        ?>
        <script>
            function nduthi(){
                window.alert("Do this");
            }
            

            // changes the title box with the hello welcome to airmark logout thingi
            boxed();

            function posterTemplate(url, method, receiver, action, prod){
              var message = "action="+action+"&prod="+prod;
                    $.ajax({
                        url: url,
                        type: method,
                        data: message,
                        success: function(data){
                            $("#"+receiver).html(data);
                        }
                    });
                }
            // show the count on your cart
            
           
           // 
            function wishlistbutton(){
                //alert('wishlist button has been pressed.');
                var wishlist = document.getElementById('wishlistbutton');
                var wishlistmessage = document.getElementById('wishlistmessage');
                if(wishlist.className == 'glyphicon glyphicon-heart-empty'){
                    function changename1(){
                                wishlist.className = 'glyphicon glyphicon-heart';
                                wishlistmessage.innerHTML = 'Added to Wish List';
                                    if(window.XMLHttpRequest){
                                        xmlhttp07 = new XMLHttpRequest();
                                    }else{
                                        xmlhttp07 = new ActiveXObject('Microsoft.XMLHTTP');
                                    }
                               xmlhttp07.onreadystatechange = function(){
                                    if (xmlhttp07.readyState == 4 && xmlhttp07.status == 200){
                                        document.getElementById('wishlistitems').innerHTML= xmlhttp07.responseText;

                                        }
                                        }
                                        xmlhttp07.open('GET','wishlistcookie.php?action=remove&id=<?php echo $id;?>',true);
                                        xmlhttp07.send();
                                        }
                    setTimeout(changename1(),100);
                    // wishlistcount();
                }else{
                    function changename2(){
                                wishlist.className = 'glyphicon glyphicon-heart-empty';
                                wishlistmessage.innerHTML = 'Removed from Wish List';
                                if(window.XMLHttpRequest){
                                        xmlhttp07 = new XMLHttpRequest();
                                    }else{
                                        xmlhttp07 = new ActiveXObject('Microsoft.XMLHTTP');
                                    }
                               xmlhttp07.onreadystatechange = function(){
                                    if (xmlhttp07.readyState == 4 && xmlhttp07.status == 200){
                                        document.getElementById('wishlistitems').innerHTML= xmlhttp07.responseText;

                                        }
                                        }
                                        xmlhttp07.open('GET','wishlistcookie.php?action=add&id=<?php echo $id;?>',true);
                                        xmlhttp07.send();

                    }
                    setTimeout(changename2(),100);
                    // wishlistcount();
                }
            }
            function wishlistpredict(){
                //alert('predict on what happens if you click the button;');
                var wishlistmessage = document.getElementById('wishlistmessage');
                var wishlist = document.getElementById('wishlistbutton');
                if(wishlist.className == 'glyphicon glyphicon-heart-empty'){
                        wishlistmessage.innerHTML = 'Click to Add item to your Wishlist?';
                        //alert('add item to your Wishlist?');
                }else{
                        wishlistmessage.innerHTML = 'Click to Remove item to your Wishlist?';

                }


            }

            function wishlistcount(){
                            if(window.XMLHttpRequest){
                                        xmlhttp08 = new XMLHttpRequest();
                                    }else{
                                        xmlhttp08 = new ActiveXObject('Microsoft.XMLHTTP');
                                    }
                               xmlhttp08.onreadystatechange = function(){
                                    if (xmlhttp08.readyState == 4 && xmlhttp08.status == 200){
                                        document.getElementById('wishlistcount').innerHTML= xmlhttp08.responseText;

                                        }
                                        }
                                        xmlhttp08.open('GET','wishlistcount.php',true);
                                        xmlhttp08.send();
            }

            function showwishlistitems(){
                            if(window.XMLHttpRequest){
                                        xmlhttp09 = new XMLHttpRequest();
                                    }else{
                                        xmlhttp09 = new ActiveXObject('Microsoft.XMLHTTP');
                                    }
                               xmlhttp09.onreadystatechange = function(){
                                    if (xmlhttp09.readyState == 4 && xmlhttp09.status == 200){
                                        document.getElementById('wishlistitems').innerHTML= xmlhttp09.responseText;

                                        }
                                        }
                                        xmlhttp09.open('GET','showwishlistitems.php',true);
                                        xmlhttp09.send();
            }

            function updateview(){
                            if(window.XMLHttpRequest){
                                        xmlhttp09 = new XMLHttpRequest();
                                    }else{
                                        xmlhttp09 = new ActiveXObject('Microsoft.XMLHTTP');
                                    }
                               xmlhttp09.onreadystatechange = function(){
                                    if (xmlhttp09.readyState == 4 && xmlhttp09.status == 200){
                                        document.getElementById('anotherone').innerHTML= xmlhttp09.responseText;

                                        }
                                        }

                                        xmlhttp09.open('POST','productviews.php',true);
                                        xmlhttp09.setRequestHeader('Content-type','application/x-www-form-urlencoded');
                                        xmlhttp09.send("id=<?php echo $id;?>");
            }

            function bookitem(){
                // posterTemplate('mtushcart.php', 'POST', 'itemstat', 'book', <?php echo $id;?>);
              $.ajax({
                url: "mtushcart.php",
                type: "POST",
                data: "action=book&prod=<?php echo $id;?>",
                success: function(data){
                    $("#itemstat").html(data);
                    
                }
              });
                
             }
             $("#addtocartbutton").click(function(){
                addnewitem(<?php echo $id;?>);
             });


            $("#unbookBtn").click(function(){
                unbookitem(<?php echo $id;?>);
            });

            $("#remvCart").click(function(){
              removeItem(<?php echo $id;?>);
            });

            var active = 0;
            $(window).on('scroll',function(){
                active = 1;
                // console.log(active);
            });

            setInterval(function(){ 
                if(active == 1){
                    active = 0;
                    bookitem();
                    // console.log('just booked it again');
                }
                // else{
                //     console.log('user inactive');
                // }
             }, 120000);
            // 180 000
            // reset after 3 minute
            // then call the book function
            getMerchantStore(<?php echo $query_row['sellerid'];?>);

            function checkitemstat(){
                if(XMLHttpRequest){
                    xmlhttp = new XMLHttpRequest();
                }else{
                    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                }
                xmlhttp.onreadystatechange = function(){
                    if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                        document.getElementById('buttonz').innerHTML = xmlhttp.responseText;
                        var mtushitem = document.getElementById('mtushitem').innerHTML;
                       // if(mtushitem == 'un'){
                       //      addtocartbutton.className = 'btn btn-block btn-primary btn-lg disabled';
                       //      removefromcartbutton.className = 'btn btn-block btn-danger btn-lg disabled';
                       // }else{
                       //      addtocartbutton.className = 'btn btn-block btn-primary btn-lg';
                       //      removefromcartbutton.className = 'btn btn-block btn-danger btn-lg';
                       // }
                    }
                }
                xmlhttp.open('POST','checkitemstatus.php',true);
                xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
                xmlhttp.send("itemid=<?php echo $id;?>");
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

            loadmodalcart();

        </script>
        </div>
    </body>
</html>