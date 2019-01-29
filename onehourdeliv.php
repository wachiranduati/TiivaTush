<?php
session_start();
ob_start();
require 'search.inc.php';
require 'core.inc.php';

// $_SESSION['$user_id'];
// md5('wagwanista');
$century = 321;//Shop

// with the prompt we should probably enable the user to show autopredicted town from teh typed in name
// maybe include first the county, the the town being shown/predicted
?>
<!DOCTYPE html>
<html>
<title>Tiiva | 1 Hour Delivery</title>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require 'templates/resourcelinks/headerlinks.php';?>

    <style type="text/css">
        .searchbox {
            border-bottom: 1px solid black;
        }


        #resi:hover {
            background-color: rgba(64, 64, 64, 0.63);
        }
        .this:hover {
            background-color: aliceblue;
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
        .comment{
            padding: 0px;
            margin: 0px;
        }

        .menulist{
            display: inline-block;
            line-height: 1.5;
        }
        .menulist li a{
            text-decoration: none;
            color: black;
        }
        .menulist li a:hover{
            color: blue;
        }

    </style>


</head>
    <body onload="boxed();">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <!-- modal box manenos -->

                              <!-- Modal -->
                              <div class="modal fade" id="exampleModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-center" id="exampleModalLongTitle">Tiiva 1-Hour Delivery</h5>

                                        </div>
                                        <div class="modal-body">
                                          <div class="row extrainfo">
                                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <small>For Tiiva 1-Hour Delivery to work, we first need to know your location
                                                  <br> This will be used to show products nearest to your location
                                                </small>
                                              </div>
                                          </div>
                                          <div class="row" style="background-color:white;margin-bottom:2%;">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                              <div class="row">
                                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><br>
                                                      <input class="form-control input-lg" type="text" id="location" placeholder="Nairobi, Komarock or 1.2921° S, 36.8219° E" style="background-color:gainsboro;border-radius:0;border:none;"/>
                                                  </div>
                                              </div>
                                              <div class="row">
                                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 resultlocations" style="position:absolute;z-index:21;background-color:white;box-shadow:0 0 4px rgba(219, 219, 219, 0.35);width:95%;margin-left:2.5%;"></div>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top:2%;display:none;">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <a class="btn btn-primary">Let's do some shopping</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mkchoices">
                                                <div class="row">
                                                  <p class="text-center">
                                                    Pick a choice between Tiiva shop | Tiiva shack
                                                  </p>
                                                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 stchoices" btn-choice="stchshop" style="height:200px;width:40%;box-shadow:0 0 6px black;margin:1%;border-radius:3px;">
                                                      <div class="row">
                                                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height:150px;background-image:url('banners/mainpage/jumpin.png');background-size:cover;background-position:center;">
                                                              <!-- Tiiva shack -->
                                                          </div>
                                                      </div>
                                                      <div class="row">
                                                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                              <!-- Tiiva shack -->
                                                              <h4 class="text-center" style="font-family:kok;margin-bottom:1%;">Tiiva Shop</h4>
                                                              <small><p class="text-capitalize text-center">Shop for Brand new Items near you</p></small>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pull-right stchoices" btn-choice="stchshack" style="height:200px;width:40%;box-shadow:0 0 6px black;margin:1%;border-radius:3px;">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height:150px;background-image:url('banners/mainpage/desert.png');background-size:cover;background-position:right;">
                                                            <!-- Tiiva shack -->
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <!-- Tiiva shack -->
                                                            <h4 class="text-center text-center" style="font-family:kok;margin-bottom:1%;">Tiiva Shack</h4>
                                                            <small><p class="text-capitalize">Second hand Items near you</p></small>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>

                                        <script>
                                            // hover over divs to change classes
                                            // setInterval(function(){
                                            //     $(".stchoices").toggleClass("animated pulse");
                                            // },1000);
                                            $(".stchoices").hover(function(){
                                              $(this).toggleClass("animated tada");
                                            });
                                            // once the button is clicked
                                            $(".stchoices").click(function(){
                                              // this are both buttons now if which button exactly
                                              var clckbtn = $(this).attr("btn-choice");
                                              alert(clckbtn);
                                              // TODO change this code later
                                              $("#exampleModal").modal('hide');

                                              setTimeout(function(){
                                                  $(".loadingscreen").toggleClass("animated zoomOutUp");
                                                  setTimeout(function(){
                                                      $(".loadingscreen").hide();
                                                  },2000);
                                              },1000);



                                            });

                                          $("#location").keyup(function(){
                                            var loc = $("#location").val();
                                            var mess = "loc="+loc;
                                            $.ajax({
                                              type: "GET",
                                              url: "onehourengine.php",
                                              data: mess,
                                              success: function(data){
                                                $(".resultlocations").show();
                                                $(".resultlocations").html(data);
                                                // once picked up location enable turn off modal
                                                $(".locselec").click(function(){
                                                  // $("#exampleModal").modal('hide');
                                                  var where = $(this).attr('data-location');
                                                  // alert(where);
                                                  // the input is equals to the location
                                                  // hide details
                                                  $(".extrainfo").hide();
                                                  // pass the location to the ipnut
                                                  $("#location").val(where);
                                                  // hide the results
                                                  $(".resultlocations").hide();
                                                  // provide two links more like javascript abilities for SHACK and SHOP
                                                });
                                              }
                                            });
                                          });
                                        </script>

                                      </div>
                                  </div>
                              </div>
                              <!-- modal box maneneos end -->

                        </div>
                     </div>
                </div>
                <!-- continue on from here to the next section -->
                  <div class="row loadingscreen" style="background-image:url('editions/adventure.jpg');background-size:100%;height:100vh;">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <div class="row" style="margin:15% auto;width:70%;background-color:rgba(255, 255, 255, 0.4);box-shadow:0 0 5px black;">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                  <div class="row">
                                      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                        <h1 class="text-center">Loading up.....</small></h1>
                                        <h5 class="text-right">Tiiva-Shop products Near Murang'a, Kiriaini</h5>
                                      </div>
                                      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="background-color:white;">
                                          <img src="images/spinner/Preloader_3.gif" alt="loading image" class="img-responsive pull-right" />
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- the actual container of the shop or the shack -->
                  <div class="row actualcontainer" style="height:100vh;">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div class="row" style="background-color:rgba(0,0,0,0.2)">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="row" style="font-family:kok;padding-top:0.5%;padding-bottom:0.5%;">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="boxtit"></div>

                                    </div>
                            </div>
                        </div>
                        <!--            start of accounts div-->
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"><img src="images/airmarklogotrial2.png" class="img-responsive"></div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <!--                    margin top start-->
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 visible-lg visible-md" style="margin-top:3%;"></div>
                                            </div>
                        <!--                    margin top end -->
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <!--                                   SIMPLE SEARCH START-->

                                             <div class="row" id="simplesearch" style="display:block;visibility:visible;">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                            <form class="form-group-md" id="search" name="search">
                                            <div class="input-group col-lg-12" style="font-family:kok;">
                                                <input type="text" class="form-control" placeholder="Search items here...." name="search_text" onkeyup="findmatch();" style="border:none;box-shadow:none;border-radius:0;background-color:rgba(219, 219, 219, 0.35);">
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-default disabled btn-md" style="border:1px solid rgb(255, 186, 0);background-color:rgb(255, 186, 0);color:white;border-radius:0;">Search</button>
                                                </span>
                                            </div>
                                                </form>
                                        </div>
                                    </div>

                                    <div class="row simplesearchresults" id="simplesearchresults">
                                        <div class="col-lg-12 col-md-12 col-sm-11 col-xs-11 results" id="results"></div>
                                    </div>

                        <!--                    SIMPLE SEARCH END-->
                                                </div>
                                            </div>
                                            <div class="row visible-lg visible-md" style="cursor:pointer;">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <a class="pull-right" onclick="toggleadvancedsearch();" style="text-decoration:none;font-family:kok;">Advanced Search</a>
                                                </div>
                                            </div>
                                        </div>
                        <!--                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 visible-lg visible-md"></div>-->

                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="cursor:default;">

                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                                        <div class="visible-lg visible-md" style="margin-top:31%;"></div>
                                                        <!--                    cart new design-->
                                                        <div data-target="#loginModal" data-toggle="modal" onclick="loadmodalcart();">
                                                            <a><span class="glyphicon glyphicon-shopping-cart" style="font-size:30px;color:#523CFA;"></span><sup><span class="badge" id="cartitems" style="background-color:red;">0</span></sup><small style="font-family:kok;">&nbsp;Cart</small>&nbsp;<span class="caret"></span></a>

                                                        </div>
                        <!--                    cart new design-->

                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                                                                                <div class="visible-lg visible-md" style="margin-top:31%;"></div>

                                            <div class="dropdown">
                                                    <a class=" dropdown-toggle" id="menu1" data-toggle="dropdown"><span class="glyphicon glyphicon-user" style="font-size:30px;color:#523CFA;"></span><small>&nbsp;User</small>
                                                    <span class="caret"></span></a>

                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Login</a></li>
                                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">User Account</a></li>
                                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Merchants</a></li>
                                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Register</a></li>
                                                      <li role="presentation" class="divider"></li>
                                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Blogs</a></li>
                                                    </ul>
                                                  </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 col-xs-4 col-sm-4 visible-lg visible-md" style="margin-top:0.1%;">
                                                        <a class="text-capitalize" style="color:black;text-decoration:none;"><small>More about us?</small></a>
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <a href="Howto.php" class="text-uppercase"><small>FAQS</small></a>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <a href="aboutus.php" class="text-uppercase"><small>About us</small></a>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <a href="termsofuse.php" class="text-uppercase"><small>Store policy</small></a>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                        </div>

                                    </div>

                        <!--            end of accounts div-->
                      </div>
                  </div>
            </div>

        </div>
        <script>
        $(document).ready(function(){
          // var areacode = prompt("First, we need you to tell us which town you're currently in");
          $("#exampleModal").modal('show');
        });

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
                cart();

        }
        </script>
    </body>
</html>
