<?php
session_start();
ob_start();
require 'core.inc.php';
require 'connect.php';
require 'utils/userutils.php';

if(userLoggedIn() != True){
    header('Location:index.php');
}

$userdetails = retrieveUserDetails($conn);

?>
<!DOCTYPE html>
<html>
<title>Tiiva | Home</title>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php require 'templates/resourcelinks/headerlinks.php';?>
        <link rel="stylesheet" href="animate.css">
    <style type="text/css">
        
        .box-part{
            background:#FFF;
            border-radius:0;
            padding:60px 10px;
            margin:20px 0px;
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


                <!-- start of something else -->
                <div class="row visible-lg visible-md" style="height:300px;background-image:url(images/misc/pexels-photo-11744.png);background-size:cover;background-position:50%;margin-bottom:1%;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="position:absolute;z-index:20;">
                                        <a href="index.php"><img src="images/misc/tiivi-logo.png" class="img-responsive" /></a>
                                    </div>
                                </div>
                            
                            

                             <div class="row" style="margin-top:7%;margin-left:40%;">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="height:200px;border:1px solid white;background-image:url(images/misc/pexels-photo-11744.png);background-size:cover;background-position:50%;">

                                    </div>
                             </div>
                             
                             
                    </div>
                 </div>
                <!-- end of something else -->
                    <!-- small screen backdrop -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row visible-sm visible-xs">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <a href="index.php"><img src="images/misc/tiivi-logo.png" class="img-responsive" style="max-height: 50px;display: inline;" /></a>
                        <h4 class="text-center text-uppercase" style="color:orange;font-family:kok;display: inline;">Tiiva User's Home</h4>
                    </div>
                </div>

               <div class="row visible-sm visible-xs" style="height:200px;background-image:url(images/misc/pexels-photo-11744.png);background-size:cover;background-position:50%;margin-bottom:10%;">
                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                       
                       <div class="row" style="position:absolute;margin-top:37%;margin-bottom:2%;">
                           <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div> -->
                           <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="background-image:url(images/misc/manontop.png);background-repeat:no-repeat;background-size:cover;background-position:50%;border-radius:50%;width:100px;height:100px;position: relative;bottom:80px;"></div>
                       </div>
                   </div>
                </div>
                    </div>
                </div>
                <!-- small screen backdrop -->
                
                <div class="row">
                    <div class="col-lg-12">
                        <!-- TABS GO IN HERE -->
    
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                <div class="hidden-xs">Getting started</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                <div class="hidden-xs">Carts & Wishlists</div>
            </button>
        </div>
        <div class="btn-group historybtn" role="group">
            <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">History</div>
            </button>
        </div>
    </div>

        <div class="">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
          <script>
                                setInterval(function(){
                                    $("#heres").toggleClass("animated bounce");
                                },1000);
                            </script>
                            <h1 id="heres">Heeey Welcome!;)</h1>
                            <p>
                                Niaje, we're glad you found us.<br>
                                This is your user account home, here you can manage and tweak most of your activities on Tiiva.,br>

                                This is the start page
                                <h3>Starting</h3>
                                <p>
                                    Your currently viewing the page. This is a basic page that explains most of the tiiva userprof features and how to best maximise your use on them.
                                </p>
                                <h3>Cart</h3>
                                <p>
                                    This panel will display your current shopping cart
                                </p>
                                <h3>Wishlist</h3>
                                <p>
                                    This panel will display your wishlist(currently disabled)
                                </p>
                                
                                <h3>History</h3>
                                <p>
                                    Watch your entire shopping history, changes in items and their pricing. Also the ability to delete some of the entries.
                                </p>
                                
                            </p>
        </div>
        <div class="tab-pane fade in" id="tab2">

          <h3>Cart & Wishlist</h3>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <h3>My Shopping Cart</h3>
                        <div id="cartmodalcontents">

                        </div>

                    </div>
                    <script>
                        loadmodalcart();
                    </script>
                
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3>My Wishlist</h3>
                            <!-- <div data-target="#userprofmodal" data-toggle="modal">
                                thisisus
                            </div> -->

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 wishlistcontainer">
                                
                            </div>
                        </div>

                           <script>
                               $.ajax({
                                    url: "wishlistmanager.php",
                                    type: "POST",
                                    data: "mywishlist=k4l2nb2j3h",
                                    success: function(message){
                                        $(".wishlistcontainer").html(message);
                                        
                                    }
                                });
                           </script> 
                    </div>
                </div>
                

        <!-- THE RATING THINGY START -->
                            <div class="modal" id="userprofmodal">
                                <div class="modal-dialog modal-md">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <!-- <a class="btn btn-primary pull-right" data-dismiss="modal">&times;</a> -->
                                            <i class="mdi mdi-close mdi-36px pull-right" data-dismiss="modal"></i>
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

        <div class="tab-pane fade in" id="tab3">
          <h3>Purchases, Receipts & Tracking</h3>
          <div class="row">
              <div class="col-lg-12 purchases">
                  <h3>Purchase history</h3>
                    
                    

              </div>
          </div>
          <div class="row">
              <div class="col-lg-12" id="cartcontents">
                  
              </div>
          </div>
          <div class="row">
              <div class="col-lg-3"></div>
              <div class="col-lg-6" id="returnContainer"></div>
              <div class="col-lg-3"></div>
          </div>
          <script>
                $(".historybtn").click(function(){
                    $.ajax({
                            url: "userproffncs.php",
                            type: "POST",
                            data: "retievecarts=4l3ko4i",
                            success: function(data){
                                $(".purchases").html(data);
                                $(".view-cart-info").click(function(){
                                    // show cart details
                                    var cartname = $(this).attr("data-cart");
                                    if(cartname != ''){
                                        $.ajax({
                                            url: "userproffncs.php",
                                            type: "POST",
                                            data: "showcartdets="+cartname,
                                            success: function(data){
                                                $("#cartcontents").html(data);
                                                $(".retUserBtn").click(function(){
                                                    var itemRet = $(this).attr("data-ret-item");
                                                    var itemCart = $(this).attr("data-ret-cart");
                                                        $.ajax({
                                                            url: "userproffncs.php",
                                                            type: "POST",
                                                            data: "returnform=43lk3&cartitem="+itemRet,
                                                            success: function(data){
                                                                $("#returnContainer").html(data);
                                                                $(".btn-usercompleteReturn").click(function(){
                                                                    var finalItem = $(this).attr("data-item");
                                                                    var reasondetail = $("#reasonDetail").val();
                                                                    var reason = $("#reason").val();
                                                                    if(finalItem != '' && itemCart != '' && reasondetail != ''){
                                                                        $.ajax({
                                                                            url: "userproffncs.php",
                                                                            type: "POST",
                                                                            data: "finalizereturn=ksdiu23&returnitem="+finalItem+"&finalcart="+itemCart+"&reason="+reason+"&reasondetail="+reasondetail,
                                                                            success: function(data){
                                                                                $(".btn-usercompleteReturn").html(data);
                                                                            }
                                                                        });
                                                                    }else{
                                                                        alert('Please ensure that you write down a reason');
                                                                    }
                                                                    
                                                                });
                                                            }
                                                        });
                                                });
                                            }
                                        });
                                    }else{
                                        alert('Hey there buddy, please dont break our code!');
                                    }
                                });
                            }
                        });
                });

                
                  // $.ajax({
                  //           url: "returnscontroller.php",
                  //           type: "POST",
                  //           data: "",
                  //           success: function(data){

                  //           }
                  //       });
              </script>
        </div>
    </div>
    
    </div>
                        <!-- TABS GO IN HERE -->
                    </div>
                </div>

                
                
</div>
<?php require 'templates/footer.php';?>

        <script type="text/javascript">
            boxed();
        </script>
    </body>
</html>
