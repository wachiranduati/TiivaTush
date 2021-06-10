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
if(mysqli_num_rows($query_run) == 0){
    header('Location:index.php');
    die("You do not have permission to be on this page");
}
//echo $query_row[imageone];


$message = "Remember, these are second hand clothes \"MTUMBA\" we ensure that items you purchase reach up to our standards.Check the item description to look throught the items dimensions.";



?>
<!DOCTYPE html>
<html>
<title>tiiva.co.ke | Mtumba <?php echo $query_row['itemtitle'];?></title>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php require 'templates/resourcelinks/headerlinks.php';?>

    <meta name="description" content="Tiiva is an online store featuring crowdsourced items from sellers all over Kenya. Buy mtumba <?php echo $query_row['itemtitle']; echo $query_row['details'];?>" >
    <meta name="keywords" content="Mtumba, thriftshop, thriftshopping, second hand clothes, second hand, cheap <?php echo $query_row['itemtitle']; echo $query_row['details'];?>">

    <style type="text/css">

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
                    <h1 class="text-uppercase text-center" style="font-family:kok;"><?php echo $query_row['itemtitle'];?></h1>

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
                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom:10%;">

                                            <div id="modalimagecontainer2">
                                <img id="myImg2" src="mtumbauploads/<?php echo $query_row['imagetwo'];?>" alt="<?php echo $query_row['itemtitle']; ?>" class="modpic img-responsive">
                                
                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                            <div id="modalimagecontainer3">
                                <img id="myImg3" src="mtumbauploads/<?php echo $query_row['imagethree'];?>" alt="<?php echo $query_row['itemtitle']; ?>" class="modpic img-responsive">
                                
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
                                    <img src="mtumbauploads/<?php echo $query_row['imageone'];?>" class="img-responsive productslideimages" alt="<?php echo $query_row['details']; ?>" style="min-height: 350px;height: 400px; width: auto;">
                                    
                                    <!-- <div class="carousel-caption">
                                        <h3>Image One</h3>
                                        <p>This is the first image in the carousel</p>
                                    </div> -->
                            </div>

                            <div class="item">
                                    <img src="mtumbauploads/<?php echo $query_row['imagetwo'];?>" class="img-responsive productslideimages" alt="<?php echo $query_row['details']; ?>" style="min-height: 350px;height: 400px; width: auto;">
                                    
                                    <!-- <div class="carousel-caption">
                                        <h3>Image two</h3>
                                        <p>This is the second image in the carousel</p>
                                    </div> -->
                            </div>

                            <div class="item">
                                    <img src="mtumbauploads/<?php echo $query_row['imagethree'];?>" class="img-responsive productslideimages" alt="<?php echo $query_row['details']; ?>" style="min-height: 400px;height: 350px; width: auto;">
                                    
                                    <!-- <div class="carousel-caption">
                                        <h3>Image three</h3>
                                        <p>This is the third image in the carousel</p>
                                    </div> -->
                            </div>


                        </div>
                    </div>
                </div>
            </div>
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
                                                $sold = $query_row['sold'];
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
                                            <div class="col-lg-12">
                                                <span style="margin-right: 2%;">SIZE: <?php echo $query_row['size'];?></span>
                                                <span style="margin-right: 2%;">SEX: <?php echo $query_row['sex'];?></span>
                                                <span style="">LABEL: <?php echo $query_row['label'];?></span>
                                            </div>
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
                                                                if($sold == 0){
                                                                    // available
                                                                    echo "
        <a class=\"btn btn-block btn-success btn-lg btn-block disabled\"><span class=\"mdi mdi-cart-plus\"></span> Added to Your Cart</a>
                                                            ";
                                                                }else{
                                                                    echo "
        <a class=\"btn btn-block btn-danger btn-lg btn-block disabled\"><span class=\"mdi mdi-cart-off\"></span> Item is no longer available</a>
                                                            ";
                                                                }
                                                                
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

                                        <div class="row" style="margin-top: 2%;">
                                            <div class="col-lg-12"></div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:2%;">
                                            <span class="glyphicon glyphicon-heart-empty" style="color:red;font-size:200%;" onmouseover="wishlistpredict();" id="wishlistbutton"></span>

                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><p id="wishlistmessage" style="margin-top:5%;">Add to wishlist</p></div>
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                                        </div>


                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <p>Shipped by <a href="#"><a><span class="MerchstoreProd"></span></a></p>
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
                        <div class="col-lg-1 col-md-1 visible-lg visible-md"></div>
                        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12" style="border:1px solid black;background-color:black;color:white;margin-bottom: 2%;">
                            <h5 class="text-center text-uppercase">Other items you might like</h5>
                        </div>
                        <div class="col-lg-1 col-md-1 visible-lg visible-md"></div>
                    </div>

<?php
$prodloopedid = $query_row['id'];
$prodsubcategory = $query_row['subcategory'];
$prodsex = $query_row['sex'];
$prodsize = $query_row['size'];
function itemloop($conn, $table, $prodloopedid, $prodsubcategory, $prodsex, $prodsize){
    //I think we shoudl just show items from a similar subcategory of the same sex too and size
    $query = "SELECT * FROM `$table` WHERE `subcategory` = '$prodsubcategory' AND `sex` = '$prodsex' AND `size` = '$prodsize' AND `id` != '$prodloopedid' ORDER BY RAND() LIMIT 6 ";
    $query_run = mysqli_query($conn, $query);
    $row = array();
    if(mysqli_num_rows($query_run) == 6){
        //continue
        while($query_row = mysqli_fetch_assoc($query_run)){
            array_push($row, $query_row);
            }
        return $row;
    }else{
        //error not enough items to display
        return False;
    }

}
$otheritemProds = itemloop($conn, 'products', $prodloopedid, $prodsubcategory, $prodsex, $prodsize);
if($otheritemProds != False){
    //show all the products
    if(count($otheritemProds) == 6){
        //continue
        for($x = 0; $x < count($otheritemProds); $x++){
            $otherproddetails = $otheritemProds[$x];
            $price = number_format($otherproddetails['price']);
            echo returnProperItemsMainpagees($otherproddetails['id'], $otherproddetails['imageone'], $otherproddetails['label'], $otherproddetails['itemtitle'], $price, $otherproddetails['size']);
        }
    }
}else{
    //return the emoji we're restocking
    returnEmptyCategory();
}

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
            
           
            function wishlistpredict(){
                //alert('predict on what happens if you click the button;');
                var wishlistmessage = document.getElementById('wishlistmessage');
                var wishlist = document.getElementById('wishlistbutton');
                if(wishlist.className == 'glyphicon glyphicon-heart-empty'){
                        wishlistmessage.innerHTML = 'Click to Add item to your Wishlist?';
                        //alert('add item to your Wishlist?');
                }else{
                        wishlistmessage.innerHTML = 'Click to Remove item from your Wishlist?';

                }


            }

            $("#wishlistbutton").click(function(){
                $.ajax({
                    url: "wishlistmanager.php",
                    type: "POST",
                    data: "addtowishlist=<?php echo $id;?>",
                    success: function(message){
                        $("#wishlistmessage").html(message);
                        $("#wishlistbutton").removeClass('glyphicon-heart-empty');
                        $("#wishlistbutton").addClass('glyphicon-heart');
                    }
                });
            });

            isIteminWishlist();
            function isIteminWishlist(){
                $.ajax({
                    url: "wishlistmanager.php",
                    type: "POST",
                    data: "inwishlist=<?php echo $id;?>",
                    success: function(message){
                        if(message == 1){
                            $("#wishlistbutton").removeClass('glyphicon-heart-empty');
                            $("#wishlistbutton").addClass('glyphicon-heart');
                            $("#wishlistmessage").html('Added to Wishlist');
                        }
                        
                        
                    }
                });
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