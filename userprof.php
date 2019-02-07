<?php
session_start();
ob_start();
require 'core.inc.php';
require 'connect.php';
require 'utils/userutils.php';

if(userLoggedIn() != True){
    header('Location:index.php');
}

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
        .this:hover {
            background-color: aliceblue;
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
            <!-- <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img src="images/otherphotoo.png" class="img-responsive"></div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 visible-lg visible-md">

                </div>

            </div> -->

<!--            end of accounts div-->
                <!-- start of something else -->
                <div class="row visible-lg visible-md" style="height:300px;background-image:url(editions/pexels-photo-11744.jpeg);background-size:cover;background-position:50%;margin-bottom:1%;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="position:absolute;z-index:20;">
                                        <a href="index.php"><img src="editions/tiivi-logo.png" class="img-responsive" /></a>
                                    </div>
                                </div>
                            <div class="row" style="margin-top:1%;">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h2 class="text-center text-uppercase visible-sm visible-xs" style="margin-top:-10px; color:orange;font-family:kok;">Tiiva Seller's account</h2>
                                </div>
                            </div>
                            <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="background-image:url(editions/manontop.jpeg);background-repeat:no-repeat;background-size:cover;background-position:50%;border-radius:50%;width:150px;height:150px;"></div> -->
                            <div class="row" style="position:absolute;bottom:10%;left:1.3%;">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 visible-lg visible-md">
                                    <i class="mdi mdi-pen mdi-24px" style="position:absolute;right:10px;top:-40px;color:rgb(0, 128, 255);font-family:kok;text-shadow:1px 1px 1px black;"></i>
                                    <script>
                                        $(".mdi-pen").click(function(){
                                            alert("Edit user information");
                                        });
                                    </script>
                                    <h5 class="text-left text-uppercase" style="margin-top:-10px; color:white;font-family:kok;text-shadow:1px 1px 1px black;" id="boxlabels">User Details</h5>
                                    <h5 class="text-left text-uppercase" style="margin-top:-3px; color:white;font-family:kok;text-shadow:1px 1px 1px black;" id="boxlabels">Name: Gwen Ross Chief</h5>
                                    <h5 class="text-left text-uppercase" style="margin-top:-3px; color:white;font-family:kok;text-shadow:1px 1px 1px black;" id="boxlabels">Township: Kiriaini</h5>

                                </div>
                             </div>

                             <div class="row" style="margin-top:7%;margin-left:40%;">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="height:200px;border:1px solid white;background-image:url(editions/pexels-photo-11744.jpeg);background-size:cover;background-position:50%;">

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
                             <div class="row" style="color:white;position:absolute;bottom:0.1%;left:550px;text-shadow:-1px -1px 1px black;">
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
                <!-- end of something else -->
                <!-- start of another something -->
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
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="padding:0;"><h5 class="text-center">Starting</h5></div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="padding:0;"><h5 class="text-center">Cart &amp; Wishlist</h5></div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="padding:0;"><h5 class="text-center">My Info</h5></div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="padding:0;"><h5 class="text-center">History</h5></div>
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
                <!-- end of another something -->
                <!-- START OF THE CONTENTS SELLER PROF -->
                    <div class="row sellercontainer">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <script>
                                setInterval(function(){
                                    $("#heres").toggleClass("animated bounce");
                                },1000);
                            </script>
                            <h1 id="heres">Heeey Welcome!;)</h1><span class="pull-right" style="border:1px solid orange;background-color:orange;font-weight:bold;padding:10px;border-radius:18px;font-family:kok;">Translate to local dialect</span>
                            <p>
                                Niaje, we're glad you found us.<br>
                                This is your user account home, here you can manage and tweak most of your activities on Tiiva.,br>

                                This is the start page
                                <h3>Starting</h3>
                                <p>
                                    This is the section that your presented with immediately you enter your sellersprof. It details in full how to use the entire Sellers profile to the maximum.
                                </p>
                                <h3>Cart</h3>
                                <p>
                                    This panel will display your current shopping cart
                                </p>
                                <h3>Wishlist</h3>
                                <p>
                                    This panel will display your wishlist
                                </p>
                                <h3>Details</h3>
                                <p>
                                    This contains user info i.e. your

                                </p>
                                <h3>History</h3>
                                <p>
                                    Watch your entire shopping history, changes in items and their pricing. Also the ability to delete some of the entries.
                                </p>
                                <h3>Settings</h3>
                                <p>
                                    This is probably the most advanced section of the users account. Here you can literally control and recreate you own special Tiiva experiene.
                                </p>
                            </p>
                        </div>
                    </div>

                    <div class="row sellercontainer">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                    <h3>My Shopping Cart</h3>
                                    <div id="cartmodalcontents">

                                    </div>

                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                    <h3 class="text-right">My wishlist</h3>
                                    <div id="wishlist">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            loadmodalcart();
                        </script>

                    </div>

                    <script>
                        $(document).ready(function(){
                            wishlist();
                            function wishlist(){
                                $.ajax({
                                    url: 'showwishlistitems.php',
                                    type: 'GET',
                                    success: function(wishlist){
                                        $("#wishlist").html(wishlist);
                                    }
                                });
                            }
                        });
                    </script>
                    <div class="row sellercontainer">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h3>Below are some of the shipping addresses you've used Tiiva</h3>

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="locations">

                                </div>
                            </div>
                            <script>
                                $(document).ready(function(){
                                    locations();
                                    function locations(){
                                        $.ajax({
                                            url: 'userlocation.php',
                                            type: 'GET',
                                            success: function(locations){
                                                $("#locations").html(locations);

                                                $("div#locationlocs").hover(function(){
                                                  $("div#locationlocs").removeClass("animated zoomIn");
                                                  $(this).addClass("animated zoomIn");
                                                });
                                                //$("#locationlocs").addClass("animated zoomIn");

                                            }
                                        });
                                    }

                                });
                                </script>
                        </div>
                    </div>

                    <div class="row sellercontainer">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="carts">

                                </div>
                            </div>
                            <script>
                            $(document).ready(function(){
                                callcarts();
                                function callcarts(){
                                    $.ajax({
                                        url: "userscarts.php",
                                        type: "GET",
                                        success: function(carts){
                                            $("#carts").html(carts);
                                            $(".cart").fadeOut();
                                            $(".list-cart").click(function(){
                                                $(".list-cart").removeClass("list-cart-active");
                                                $(this).addClass("list-cart-active");
                                                var cartcount = Number($("#cartsno").text());

                                                var c = 0;
                                                while( c <= cartcount){
                                                    if($(".list-cart").eq(c).hasClass("list-cart-active")){
                                                        $(".cart").eq(c).fadeIn();
                                                        var g = c;
                                                        //alert(g);
                                                        var cct = $(".list-cart-active>#cartname").text();
                                                        var message = "cct="+cct;
                                                        $.ajax({
                                                            url: "cartcontents.php",
                                                            type: "POST",
                                                            data: message,
                                                            success: function(cartcontents){
                                                                //alert(g);
                                                                //console.log(cct);
                                                                //console.log(message);
                                                                $(".cart").eq(g).html(cartcontents);



                                                            }
                                                        });
                                                    }else{
                                                        $(".cart").eq(c).fadeOut();
                                                    }
                                                    c++;
                                                }

                                            });
                                        }
                                    });
                                }




                            });

                            </script>

                            </ul>
                            <!-- modal activator -->
                            <!-- <div data-target="#loginModal" data-toggle="modal">
                                <a><span class="glyphicon glyphicon-shopping-cart" style="font-size:30px;color:#523CFA;"></span><sup><span class="badge" id="cartitems" style="background-color:red;">0</span></sup><small style="font-family:kok;">&nbsp;Cart</small>&nbsp;<span class="caret"></span></a>

                            </div> -->
                            <!-- modal activator -->

                            <script>
                            function modalRem(){
                              $("#loginModal").removeClass("zoomIn");
                              $("#loginModal").addClass("animated zoomIn");
                            }

                            // function displayitemdets(){
                            //   var current = $("span#current").eq(3).text();
                            //   $.ajax({
                            //     type: "POST",
                            //     url: "displayitemdetails.php",
                            //     data: {
                            //       search: current
                            //     },
                            //     success: function(itemratedets){
                            //       $("#cartratemodalcontents").html(itemratedets);
                            //     }
                            //   });
                            //
                            // }

                            function displayitemdets(current){
                              //var current = $("span#current").eq(1).text();
                              console.log(current);
                              $.ajax({
                                type: "POST",
                                url: "displayitemdetails.php",
                                data: {
                                  search: current
                                },
                                success: function(itemratedets){
                                  $("#cartratemodalcontents").html(itemratedets);
                                  //$(".rate").hide();
                                  //$(".review").hide();
                                  $(".ratingmessage").hide();

                                  var ratingvalue,actualreview = '';
                                  $(".buror").click(function(){
                                    $(".buror").removeClass("animated bounce");
                                    $(this).addClass("animated bounce");
                                    // $(".buror").hide();
                                    $(this).show();
                                    //alert($(this).text());
                                    // setInterval(function(){
                                    //     $(this).toggleClass("animated bounce");
                                    // },100);

                                    // ratingvalue = $(this).text();
                                    ratingvalue = $(this).attr("data-value");
                                    $(".ratingbox").fadeOut();
                                    $(".ratingmessage").fadeIn();
// TODO CREATE A REJECT / REQUEST ITEM RETURN ITEM

                                  });

                                  $("#submitbutton").click(function(){
                                    actualreview = $("textarea#actualreview").val();
                                    $(".reviewbox").fadeOut();

                                    // alert(ratingvalue+' the other is '+actualreview);
                                    var revieweddata = "gift="+current+"&rate="+ratingvalue+"&review="+actualreview;
                                    // alert(revieweddata);
                                    $.ajax({
                                      url: "reviewproduct.php",
                                      type: "POST",
                                      data: revieweddata,
                                      success: function(reviews){
                                        // alert(reviews);
                                        $(".ratingmessage").html("<h1>All Done!<br>Thankyou so Much;)</h1>");
                                        $(".ratingmessage").append(reviews);
                                      }
                                    });
                                  });
                                }
                              })
                            }

                            </script>


                            <!-- THE RATING THINGY START -->
                            <div class="modal" id="loginModal">
                                <div class="modal-dialog modal-md">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <!-- <a class="btn btn-primary pull-right" data-dismiss="modal">&times;</a> -->
                                            <i class="mdi mdi-close mdi-36px mdi-spin pull-right" data-dismiss="modal"></i>
                                            <h4 class="modal-title text-center">Rate &amp; Review</h4>
                                        </div>

                                        <div class="modal-body" id="cartratemodalcontents">

                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-danger pull-right" data-dismiss="modal">Exit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- THE RATING THINGY END -->

                        </div>

                    </div>
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="thebreak">

                      </div>
                    </div>
                <!-- END OF THE CONTENTS SELLER PROF -->

</div>
<?php require 'templates/footer.php';?>

        <script type="text/javascript">
            boxed();

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

                    // purchasehist();

            }

            function purchasehist(){
                if(window.XMLHttpRequest){
                    xmlhttp3 = new XMLHttpRequest();
                }else{
                    xmlhttp3 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp3.onreadystatechange = function(){
                if (xmlhttp3.readyState == 4 && xmlhttp3.status == 200){
                    document.getElementById('boxmiscs').innerHTML= xmlhttp3.responseText;

                    }
                    }
                    xmlhttp3.open('GET','purchasehist.php',true);
                    xmlhttp3.send();



            }

             

            function requestitem(){
                alert("show wishlist and links to the product page if still available");
            }


        </script>
    </body>
</html>
