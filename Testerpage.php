<?php
ob_start();
session_start();
require 'connect.php';

 $user = $_SESSION['$user_id'];
 $staff = $_SESSION['$staff'];

 $querystaff = "SELECT * FROM `staff` WHERE `id`='$staff'";
 $querystaff_run = mysqli_query($querystaff);
 $querystaff_row = mysqli_fetch_assoc($querystaff_run);
 $agent =  $querystaff_row['tiivanick'];
 // echo $staff;
?>
<!DOCTYPE html>
<html>
<title>Tiiva | UltraPage</title>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
      <?php require 'templates/resourcelinks/headerlinks.php';?>
            <script src="chartjs/chart.bundle.js"></script>

    <style type="text/css">
        li{
            text-decoration: none;
        }
        .list-group li{
            text-decoration: none;
        }
        .panel-body > ul{
            text-indent: 30%;
        }
        li:hover {
            text-align: right;
            font-weight: bold;
            font-family: kok;
        }
        li:visited {
            color: black;
            background-color: black;
        }
        .pickup > .edition{
          background-color: aqua;
        }
        .lightbackgrd{
          background-color: white;
        }
        .darkbackgrd{
          background-color: gainsboro;
        }
    </style>


</head>
    <body id="wholebody" style="background-image:url(images/mutua_matheka.jpg);backgroung-attachment:fixed;background-position:top;background-size:100%;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:rgba(220, 220, 220, 0.67);"><h5>Hi Nick, Beautiful day ain't it?</h5></div>
                            </div>

                            <div class="row">
                               <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <div class="row" onclick="hidelist();">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="background-color:rgba(0, 0, 0, 0.67);position:relative;top:20px;left:20px;display:visible;">
                                            <span class="glyphicon glyphicon-align-justify text-center" style="width:100%;color:white;font-size:200%;padding:2px;padding-top:10px;padding-bottom:10px;"></span>

                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"></div>
                                   </div>

                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <img src="images/otherphotoo.png" class="img-responsive"/>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><h4 id="pagetitle">This</h4></div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                            <nav class="navbar navbar-inverse" style="border-radius:0px;background-color:rgba(0, 0, 0, 0.68);border:0;border:1px solid white;">
                            <ul class="nav nav-inverse nav-stacked">

<!--
                        <li style="border-bottom:1px solid rgba(220, 220, 220, 0.33);"><a href="#panelBodyHome" data-toggle="collapse"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
                        <li>

                    <div id="panelBodyHome" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav nav-pills nav-inverse nav-stacked">
                                <li><a href="#" onclick="theshack();">Shack</a></li>
                                <li><a href="#" onclick="theshop();">Shop</a></li>
                                <li><a href="#" onclick="theblogs();">Blogs</a></li>
                            </ul>
                        </div>

                    </div>
                        </li>
-->
                        <li style="border-bottom:1px solid rgba(220, 220, 220, 0.33);"><a href="#panelBodyProducts" data-toggle="collapse"><span class="glyphicon glyphicon-road"></span>&nbsp;Products</a></li>
                        <li>

                    <div id="panelBodyProducts" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav nav-pills nav-inverse nav-stacked">
                                <li class="showuplds"><a onclick="">Uploads</a></li>
                                <li class="onlnclk"><a onclick="">Online</a></li>
                                <li><a onclick="sales(1);showsalespanel();">Sales</a></li>
                                <li><a onclick="planpickup();">Pickup</a></li>
                                <li><a onclick="deliveries(1);">Deliveries</a></li>
                                <li><a onclick="transit();showtransit();loveme();">Transit</a></li>
                                <li class="showreturn"><a>Returns</a></li>
                                <li class="proofdetls"><a >Review</a></li>
                            </ul>
                        </div>
                    </div>
                    <script>
                      $(document).ready(function(){
                        // $("#onlineprodscont").hide();
                        $(".onlnclk").click(function(){
                            $("#onlineprodscont").show();
                        });
                      });
                    </script>
                        </li>
                        <li style="border-bottom:1px solid rgba(220, 220, 220, 0.33);"><a href="#panelBodyMessages" data-toggle="collapse"><span class="glyphicon glyphicon-comment"></span>&nbsp;Message</a></li>
                                <li>

                    <div id="panelBodyMessages" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav nav-pills nav-inverse nav-stacked">
                                <li><a href="#" onclick="staff)();">Staff</a></li>
                                <li><a href="#">Ground</a></li>
                                <li><a href="#">Users</a></li>
                                <li><a href="#">Merchants</a></li>
                                <li><a href="#">Bloggers</a></li>

                            </ul>
                        </div>
                    </div>
                        </li>
                        <li style="border-bottom:1px solid rgba(220, 220, 220, 0.33);"><a href="#panelBodyUsers" data-toggle="collapse"><span class="glyphicon glyphicon-signal"></span>&nbsp;Users</a></li>
                                <li>

                    <div id="panelBodyUsers" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav nav-pills nav-inverse nav-stacked">
                                <li><a href="#">Markets</a></li>
                                <li><a href="#">Shoppers</a></li>
                                <li><a href="#">visitors</a></li>
                                <li><a href="#">Merchants</a></li>
                                <li><a href="#">Shops</a></li>
                                <li><a href="#">Bloggers</a></li>
                                <li><a href="#">Skills</a></li>
                            </ul>
                        </div>
                    </div>
                        </li>
                        <li style="border-bottom:1px solid rgba(220, 220, 220, 0.33);"><a href="#panelBodySearches" data-toggle="collapse"><span class="glyphicon glyphicon-search"></span>&nbsp;Searches</a></li>
                                <li>

                    <div id="panelBodySearches" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav nav-pills nav-inverse nav-stacked">
                                <li><a href="#" onclick="Unqueriedcall();">Unqueried</a></li>
                                <li><a href="#" onclick="Queriedcall();">Queried</a></li>
<!--                                <li><a href="#">All</a></li>-->

                            </ul>
                        </div>
                    </div>
                        </li>
                        <li style="border-bottom:1px solid rgba(220, 220, 220, 0.33);"><a href="#panelBodyErrors" data-toggle="collapse"><span class="glyphicon glyphicon-off"></span>&nbsp;Errors</a></li>
                                <li>

                    <div id="panelBodyErrors" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav nav-pills nav-inverse nav-stacked">
                                <li><a href="#">Users</a></li>
                                <li><a href="#">Staff</a></li>
                                <li><a href="#">System</a></li>
                                <li><a href="#">Logs</a></li>
                            </ul>
                        </div>
                    </div>
                        </li>
                        <li style="border-bottom:1px solid rgba(220, 220, 220, 0.33);"><a href="#panelBodyBlogs" data-toggle="collapse"><span class="glyphicon glyphicon-file"></span>&nbsp;Blogs</a></li>
                                <li>

                    <div id="panelBodyBlogs" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav nav-pills nav-inverse nav-stacked">
                                <li><a class="btn" onclick="previewblogs();">Preview</a></li>
                                <li><a class="btn" onclick="pendingblogs();">Pending</a></li>
<!--
                                <li><a href="#">Rating</a></li>
                                <li><a href="#">Edit</a></li>
                                <li><a href="#">Delete</a></li>
-->
                            </ul>
                        </div>
                    </div>
                        </li>
                        <li style="border-bottom:1px solid rgba(220, 220, 220, 0.33);"><a href="#panelBodyStats" data-toggle="collapse"><span class="glyphicon glyphicon-stats"></span>&nbsp;Stats</a></li>
                                <li>

                    <div id="panelBodyStats" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav nav-pills nav-inverse nav-stacked">
                                <li><a href="#" onclick="rendersalesgraph();">Sales</a></li>
                                <li><a href="#">Deliveries</a></li>
                                <li><a href="#">Costs</a></li>
                                <li><a href="#" onclick="rendergeneraltraffick();">Traffick</a></li>
                                <li><a href="#" onclick="renderfeedbackstats();">Feedback</a></li>
                                <li><a href="#">Payments</a></li>
                            </ul>
                        </div>
                    </div>
                        </li>
                        <li style="border-bottom:1px solid rgba(220, 220, 220, 0.33);"><a href="#panelBodyBanners" data-toggle="collapse"><span class="glyphicon glyphicon-globe"></span>&nbsp;Aesthetics</a></li>
                                <li>

                    <div id="panelBodyBanners" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav nav-pills nav-inverse nav-stacked">
                                <li><a href="#">Uploads</a></li>
                                <li><a>Sales</a></li>
                                <li><a href="#">Deliveries</a></li>
                                <li><a href="#">Transit</a></li>
                                <li><a href="#">Returns</a></li>
                            </ul>
                        </div>
                    </div>
                        </li>
                        <li style="border-bottom:1px solid rgba(220, 220, 220, 0.33);"><a href="#panelBodyPayment" data-toggle="collapse"><span class="glyphicon glyphicon-credit-card"></span>&nbsp;Payment</a></li>
                                <li>

                    <div id="panelBodyPayment" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav nav-pills nav-inverse nav-stacked">
                                <li><a href="#">Bank</a></li>
                                <li><a href="#">Merchants</a></li>
                                <li><a href="#">Users</a></li>
                                <li><a href="#">Reversals</a></li>
                                <li><a href="#">Services</a></li>
                            </ul>
                        </div>
                    </div>
                        </li>
<!--
                        <li style="border-bottom:1px solid rgba(220, 220, 220, 0.33);"><a href="#panelBodyCharity" data-toggle="collapse"><span class="glyphicon glyphicon-tree-deciduous"></span>&nbsp;Charity</a></li>
                                <li>

                    <div id="panelBodyCharity" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav nav-pills nav-inverse nav-stacked">
                                <li><a href="#">Funds</a></li>
                                <li><a href="#">Drives</a></li>
                                <li><a href="#">Progress</a></li>
                                <li><a href="#">Budget</a></li>
                                <li><a href="#">Users</a></li>
                            </ul>
                        </div>
                    </div>
                        </li>
-->


                    </ul>
                            </nav>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                            <div class="row" id="thesearchbar" style="visibility:hidden;display:none">
<!--                                gallery search bar-->
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="row" style="margin-bottom:1%;margin-top:1%;background-color:rgba(0, 0, 0, 0);">
        <div class="col-lg-1 col-md-1"></div>
                                <div class="col-lg-10 col-md-10">
                                    <form class="form-inline" method="post" action="index.php">
                                        <div class="input-group col-lg-10" style="font-family:kok;">
                                        <input type="text" class="form-control" placeholder="Search images using itemId i.e. 3" id="searchid" onkeyup="checkid();" name="searchid" style="background-color:rgba(220, 220, 220, 0.79);border:none;">
                                        <span class="input-group-btn">

                                            <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
                                        </span>
                                        </div>
                                    </form>
                                </div>
                                        <div class="col-lg-1 col-md-1"></div>
                            </div>

                                </div>
                            </div>


              <!-- DELIVERY CONTAINER START -->
                          <div class="row" id="deliverycontainer">
                            <script>
                              function deliveries(){
                                // alert("Heeey ease up man..");
                                var completecarts = "completecartatdestination=ljodsfi";
                                $.ajax({
                                  type: "POST",
                                  url: "centerfinaldeliver.php",
                                  data: completecarts,
                                  success: function(dlivcocar){
                                    $("#completecarts").html(dlivcocar);
                                    $(".incompletecart").hide();
                                    // $(".cmpltcrtdlv").hide();
                                    $(".showincomplete").click(function(){
                                        $(".incompletecart").show();

                                    });
                                    // complete cart delivery
                                    $(".btncomplt").click(function(){
                                      var cart = $(this).attr('data-cart');
                                      var message = "action=delivercart&cart="+cart;
                                      $.ajax({
                                        type:"POST",
                                        url: "finalizedelivery.php",
                                        data: message,
                                        success: function(actcomp){
                                          $("#completecartcontainer").html(actcomp);
                                          // complete complete cart delivery
                                          $(".bcompdelv").click(function(){
                                              var cart = $(this).attr('data-cart');
                                              // alert(cart);
                                              //confirm all inputs have been filled
                                              //values => compagent, compname, compid, compemail
                                              var compagent = $("#compagent").val();
                                              var compname = $("#compname").val();
                                              var compid = $("#compid").val();
                                              var compemail = $("#compemail").val();
                                              var Mcomplete = "action=compdelv&agent="+compagent+"&name="+compname+"&id="+compid+"&email="+compemail+"&cart="+cart;
                                              // alert(Mcomplete);
                                              //TODO CONFIRM THAT ALL INPUTS HAVE BEEN FILLED
                                              $.ajax({
                                                type:"POST",
                                                url: "finalizedelivery.php",
                                                data: Mcomplete,
                                                success: function(status){
                                                  $("#completecartdetails").html(status);
                                                  //TODO then reload the earlier list
                                                }
                                              });

                                          });
                                        }
                                      });
                                    });
                                    $(".btnincomplete").click(function(){
                                      var incitem = $(this).attr('data-incitem');
                                      var inccart = $(this).attr('data-inccart');
                                      var message = "action=deliverincocart&cart="+inccart+"&itemid="+incitem;
                                      $.ajax({
                                        type:"POST",
                                        url: "finalizedelivery.php",
                                        data: message,
                                        success: function(actcomp){
                                          $("#incompletecartcontainer").html(actcomp);
                                          // complete incomplete cart delivery
                                          $(".bincompldelv").click(function(){
                                              var cart = $(this).attr('data-cart');
                                              var item = $(this).attr('data-id');

                                              //confirm all inputs have been filled
                                              //values => inccompagent, inccompname, inccompid, inccompemail
                                              var inccompagent = $("#inccompagent").val();
                                              var inccompname = $("#inccompname").val();
                                              var inccompid = $("#inccompid").val();
                                              var inccompemail = $("#inccompemail").val();
                                              var Mincomplete = "action=incodelv&agent="+inccompagent+"&name="+inccompname+"&id="+inccompid+"&email="+inccompemail+"&cart="+cart+"&item="+item;
                                              // alert(Mincomplete);
                                              //TODO CONFIRM THAT ALL INPUTS HAVE BEEN FILLED
                                              //REVIEW UNCOMMENT THE CODE BELOW
                                              // if(inccompagent != '' && inccompname != '' && inccompid != '' && inccompemail != ''){
                                              //   //continue....every input has a value
                                              // }else{
                                              //   //notify the user that he left something empty
                                              //   //TODO PROBABLY USE A HIDDEN PARAGRAPH IN THE RETURNED DATA IN TEH AJAX REQUEST ABOVE
                                              // }
                                              $.ajax({
                                                type:"POST",
                                                url: "finalizedelivery.php",
                                                data: Mincomplete,
                                                success: function(status){
                                                  $("#inccompletecartdetails").html(status);
                                                  //TODO THEN RELOAD THE INCOMPLETE LIST
                                                  // inccompletecartdetails
                                                  //completecartdetails
                                                }
                                              });

                                          });
                                        }
                                      });
                                    });//incomplete cart delivery
                                  }
                                })
                              }
                            </script>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                  <div class="row">
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="completecarts">

                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="incomplete">

                                      </div>
                                  </div>
                              </div>
                          </div>

              <!-- DELIVERY CONTAINER END -->

              <!-- PROOF CONTAINER START -->
                          <div class="row thereviewcontainer" style="background-color:white;padding-top:10px;display:none;">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <h3 class="text-center text-capitalize">Review Package Integrity</h3>
                                        </div>
                                    </div>
                                    <div class="row" style="">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="reviewTab">
                                        </div>
                                    </div>

                              </div>
                          </div>
                          <script>
                            $(".proofdetls").click(function(){
                              $(".thereviewcontainer").show();
                              var msgrv = "state=dw4sd";
                              $.ajax({
                                url: "bundledprodrem.php",
                                type: "POST",
                                data: msgrv,
                                success: function(review){
                                  $("#reviewTab").html(review);
                                  $(".flagBtn").click(function(){
                                    // alert("flag me");
                                    var item = $(".flagBtn").attr("data-itemid");
                                    var cart = $(".flagBtn").attr("data-item-cart");
                                    var flagmsg = "state=kdslow&item="+item+"&cart="+cart;
                                    $.ajax({
                                      url: "bundledprodrem.php",
                                      type: "POST",
                                      data: flagmsg,
                                      success: function(flag){
                                        $("#statusAftFlg").html(flag);
                                      }
                                    })
                                  })
                                  $(".unflagBtn").click(function(){
                                    // alert("unflag me");
                                    var item = $(".unflagBtn").attr("data-itemid");
                                    var cart = $(".unflagBtn").attr("data-item-cart");
                                    var flagmsg = "state=kosdl&item="+item+"&cart="+cart;
                                    $.ajax({
                                      url: "bundledprodrem.php",
                                      type: "POST",
                                      data: flagmsg,
                                      success: function(flag){
                                        $("#statusAftFlg").html(flag);
                                      }
                                    })
                                  })

                                }
                              })
                            })
                          </script>
              <!-- PROOF CONTAINER END -->

              <!-- RETURN GOODS CONTAINER START -->
              <div class="row returncontainer" style="background-color:white;padding-top:10px;display:none;">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h3 class="text-center">Staff Return/Reject goods</h3>
                            <div class="row" style="background-color:white;">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"><br>
                                        <input type="text" id="returnssearchbox" style="border:none;box-shadow:none;border-radius:0;background-color:rgba(219, 219, 219, 0.35);" class="form-control" placeholder="Search Item Number i.e. h43o3l4k98ds"/>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 resultssearchbox" style="position:absolute;z-index:21;width:64%;left:18%;background-color:white;box-shadow:0 0 1px rgba(219, 219, 219, 0.35);"></div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin:1% 0;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="cartdetails">
                          <!-- two panels to show first the item description and all the details on display and second is the form to return the item -->

                        </div>
                    </div>
                  </div>
              </div>
              <script>
                $("#returnssearchbox").keyup(function(){
                  var keys = $("#returnssearchbox").val();
                  // alert(keys);
                  if(keys != ''){
                    var searchmsg = "state=k498sl&cart="+keys;
                    $(".resultssearchbox").show();
                    $.ajax({
                      url:"bundledprodrem.php",
                      type: "POST",
                      data: searchmsg,
                      success: function(search){
                        $(".resultssearchbox").html(search);
                        // complete cart clicked
                        $(".btn-comp").click(function(){

                          var item = $(this).attr("data-retcmp");
                          var compcartmsg = "state=complete&item="+item;
                          // alert(item);
                          $.ajax({
                            url: "bundledprodrem.php",
                            type: "POST",
                            data: compcartmsg,
                            success: function(compcart){
                              $("#cartdetails").html(compcart);
                              $(".resultssearchbox").hide();
                              // now to send the form
                              $(".btn-retitm").click(function(){
                                // insert the code here
                                var reasonx = $("#reason").val();
                                var rsnmsg = $("#rsndetails").val();
                                var product = $(this).attr("ret-item");
                                alert(product);
                                var compltrsn = "state=reason&reason="+reasonx+"&rsnmessage="+rsnmsg+"&product="+product;
                                $.ajax({
                                  url: "bundledprodrem.php",
                                  type: "POST",
                                  data: compltrsn,
                                  success: function(reasoning){
                                    // replace the button with a message showing form sent
                                    // TODO RIGHT HERE AND A REVIEW TOO
                                    $(".replacbutn").html(reasoning);
                                  }
                                })
                              })
                            }
                          })
                        })
                        $(".btn-incomp").click(function(){
                          // alert("who");
                          // the incomplete cart deliveries read data from teh button and show it in the next div

                          var item = $(this).attr("data-retcmp");
                          var incompcartmsg = "state=incomplete&item="+item;
                          // alert(item);
                          $.ajax({
                            url: "bundledprodrem.php",
                            type: "POST",
                            data: incompcartmsg,
                            success: function(incompcart){
                              $("#cartdetails").html(incompcart);
                              $(".resultssearchbox").hide();
                              // now to send the form
                              $(".btn-retitm").click(function(){
                                // insert the code here
                                var reasonx = $("#reason").val();
                                var rsnmsg = $("#rsndetails").val();
                                var product = $(this).attr("ret-item");
                                // alert(product);
                                var compltrsn = "state=reason&reason="+reasonx+"&rsnmessage="+rsnmsg+"&product="+product;
                                $.ajax({
                                  url: "bundledprodrem.php",
                                  type: "POST",
                                  data: compltrsn,
                                  success: function(reasoning){
                                    // replace the button with a message showing form sent
                                    // TODO RIGHT HERE AND A REVIEW TOO
                                    $(".replacbutn").html(reasoning);
                                  }
                                })
                              })
                            }
                          })
                        })

                      }
                    })
                  }else{
                    // change cart container visibility
                    $(".resultssearchbox").hide();
                  }
                })
              </script>
              <!-- RETURN GOODS CONTAINER END -->

              <!-- THE BANNERS CONTROL BOX STARTS HERE -->

              <!-- THE BANNERS CONTROL BOX ENDS HERE -->

<!--                                UPLOADS TAB BELOW -->
                                <div class="row uploadscontainer" style="background-color:white;padding-top:10px;font-family:kok;display:none;">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                      <h3 class="text-center text-capitalize">The uploads tab<small> (by Date)</small></h3>

                                      <form class="">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                                                <label for="site">Site: SHACK/SHOP</label>
                                                <select class="form-control" id="site">
                                                  <option value="shack">Shack</option>
                                                  <option selected value="shop">Shop</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                <label for="text">Category:</label>
                                                <select class="form-control" id="category">
                                                  <optgroup label="Entire site">
                                                    <option value="blank">Everything</option>
                                                  </optgroup>

                                                  <optgroup label="SHOP CATEGORIES" style="">
                                                    <option disabled="">SHOP CATEGORIES</option>
                                                    <option value="electronics">Electronics &amp; Computers</option>
                                                    <option value="entertainment">Entertainment &amp; Education</option>
                                                    <option value="health">Health &amp; Beauty</option>
                                                    <option value="jewelry">Fashion &amp; Jewelry</option>
                                                    <option value="supermarket">Supermakets</option>
                                                    <option value="outdoors">Sports &amp; Outdoors</option>
                                                    <option value="handmade">Handmade</option>
                                                    <option value="home">Home, Garden &amp; Tools</option>
                                                    <option value="automotive &amp; Industrial">Automotive &amp; Industrial</option>
                                                  </optgroup>

                                                  <optgroup label="SHACK CATEGORIES" style="">
                                                    <option value="mens">mens</option>
                                                    <option value="womens">womens</option>
                                                    <option value="kids">kids</option>
                                                    <option value="interiors">interiors</option>
                                                    <option value="sportswear">sportswear</option>
                                                    <option value="shoes">shoes</option>
                                                    <option value="misc">misc</option>
                                                    <option value="bags">bags</option>
                                                  </optgroup>
                                                </select>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-5 col-xs-5">
                                                <label for="text">Earliest (01/16/2018)</label>
                                                <input type="date" class="form-control" id="early" max="01/16/2018" min="2000-01-02">
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-5">
                                                <label for="text">Latest (<?php echo Date("m/d/Y"); ?>)</label>
                                                <input type="date" class="form-control" id="latest" max="01/16/2018" min="2000-01-02">
                                            </div>
                                            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                                              <label for="thbutton">Refresh</label>
                                              <a class="btn btn-primary loadproddt">Load Data</a>
                                            </div>
                                        </div>

                                      </form>



                                      <div class="row" style="padding-top:10px;border-top:1px solid gainsboro;background-color:rgb(#66FFCC);margin-top:1%;">
                                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="showspecialuplds">

                                          </div>
                                      </div>


                                    </div>
                                    <script>
                                    $(".showuplds").click(function(){
                                      $(".uploadscontainer").show();
                                    });
                                    $(".loadproddt").click(function(){
                                      var site = $("#site").val();
                                      var category = $("#category").val();
                                      var early = $("#early").val();
                                      var latest = $("#latest").val();

                                      // alert(site);
                                      // alert(category);
                                      // alert(early);
                                      // alert(latest);

                                      if(site != '' && category != '' && early != '' && latest != ''){
                                        if(site == 'shack'){
                                          var uploadsmsg = "online=ke9l23k&category="+category+"&early="+early+"&latest="+latest;
                                            $.ajax({
                                              url: "onlineitems.php",
                                              type: "POST",
                                              data: uploadsmsg,
                                              success: function(uploadsdata){
                                                $("#showspecialuplds").html(uploadsdata);
                                              }
                                            })
                                        }else if(site == 'shop'){
                                          var uploadsmsg = "online=8djskl&site="+site+"&category="+category+"&early="+early+"&latest="+latest;
                                            $.ajax({
                                              url: "onlineitems.php",
                                              type: "POST",
                                              data: uploadsmsg,
                                              success: function(uploadsdata){
                                                $("#showspecialuplds").html(uploadsdata);
                                              }
                                            })
                                        }else{
                                          //nada
                                        }
                                      }else{
                                        // error need to fill in the inputs
                                      }




                                    })
                                    </script>
                                </div>
<!--                                UPLOADS TAB BELOW-->


<!--                                ONLINE TAB BELOW -->
<!-- TODO REMEMBER TO RETURN THIS SYTLE ATTRIBUTES TO #check_online_box ...visibility:hidden;display:none -->
                                <div class="row" id="check_online_box" style="">
<!--                                gallery search bar-->
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <div class="row" style="font-family:kok;display:none;" id="onlineprodscont">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="row" style="">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 sitebutton" style="border-right:1px solid black;background-color:white;"><h4 class="text-uppercase text-center">#Shop</h4></div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 sitebutton2" style="background-color:gainsboro;"><h4 class="text-uppercase text-center">#Shack</h4></div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 onlineshopcontainer" style="background-color:white;border:1px solid black;border-top:none;overflow:scroll;">
                                              this is the shop products
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 onlineshackcontainer" style="background-color:white;border:1px solid black;border-top:none;overflow:scroll;">
                                              this is the shack products
                                        </div>
                                    </div>
                                    <script>
                                        function changepage_input(){
                                          // $("#showpage").focusout(function(){
                                            var provpage = $("#showpage").val();
                                            // alert(provpage);
                                            changepages_online(provpage);
                                          // });
                                        }

                                        function changepages_online(page){
                                          // $(".btn-pages").click(function(){
                                            //  var page = $(this).attr("data-page");
                                              //  alert(page);
                                               var otherpages = "online=lkdsf0&page="+page;
                                               $.ajax({
                                                 url: "onlineitems.php",
                                                 type: 'POST',
                                                 data: otherpages,
                                                 success: function(onlineotrs){
                                                   $(".onlineshopcontainer").html(onlineotrs);
                                                 }
                                               })

                                          // });
                                        }

                                        function changepage_inputshack(){
                                          // $("#showpage").focusout(function(){
                                            var provpage = $("#showpageshack").val();
                                            // alert(provpage);
                                            changepages_onlineshack(provpage);
                                          // });
                                        }

                                        function changepages_onlineshack(page){
                                          // $(".btn-pages").click(function(){
                                            //  var page = $(this).attr("data-page");
                                              //  alert(page);
                                               var otherpages = "online=lkdsf0&page="+page;
                                               $.ajax({
                                                 url: "onlineitems.php",
                                                 type: 'POST',
                                                 data: otherpages,
                                                 success: function(onlineotrs){
                                                   $(".onlineshackcontainer").html(onlineotrs);
                                                 }
                                               })

                                          // });
                                        }

                                        $(".sitebutton").click(function(){
                                          // alert("Shop button");
                                          $(this).toggleClass("darkbackgrd");
                                          // $(".sitebutton").eq(1).toggleClass("lightbackgrd");
                                          var pageit = "online=lkdsf0&page=1";
                                          // alert(page);

                                          $.ajax({
                                            url: "onlineitems.php",
                                            type: 'POST',
                                            data: pageit,
                                            success: function(online){
                                              $(".onlineshopcontainer").html(online);

                                              $("#prodssearch").keyup(function(){
                                                var searchkey = $("#prodssearch").val();
                                                var searchmsg = "online=kolwe9&search="+searchkey;
                                                // if(searchkey != ''){
                                                  // alert(searchkey);
                                                  $.ajax({
                                                    url: "onlineitems.php",
                                                    type: 'POST',
                                                    data: searchmsg,
                                                    success: function(searching){
                                                      $(".prodsearchresls").html(searching);
                                                    }
                                                  })
                                                // }


                                              })

                                              // the direction buttons have been pressed react
                                              // $(".btn-pages").click(function(){
                                              //    var page = $(this).attr("data-page");
                                              //      alert(page);
                                              //      var otherpages = "online=lkdsf0&page="+page;
                                              //      $.ajax({
                                              //        url: "onlineitems.php",
                                              //        type: 'POST',
                                              //        data: otherpages,
                                              //        success: function(onlineotrs){
                                              //          $(".onlineshopcontainer").html(onlineotrs);
                                              //        }
                                              //      })
                                              //
                                              // });

                                              $(".description").tooltip({
                                                  placement: "top",
                                                  html: "true",

                                              })
                                            }
                                          })
                                        });
                                        $(".sitebutton2").click(function(){
                                          // alert("shack button");
                                          // $(this).toggleClass("lightbackgrd");
                                          // $(".sitebutton").eq(1).toggleClass("lightbackgrd");
                                          var pageit = "online=oierj&page=1";
                                          $.ajax({
                                            url: "onlineitems.php",
                                            type: 'POST',
                                            data: pageit,
                                            success: function(online){
                                              $(".onlineshackcontainer").html(online);

                                              $("#shacksearch").keyup(function(){
                                                var shacksrchkey = $("#shacksearch").val();
                                                var shackmsg = "online=mksiuew&search="+shacksrchkey;
                                                $.ajax({
                                                  url: "onlineitems.php",
                                                  type: "POST",
                                                  data: shackmsg,
                                                  success: function(shacksrch){
                                                    $(".shacksearchrsls").html(shacksrch);
                                                  }
                                                })
                                              })
                                            }
                                          })
                                        });
                                    </script>

                                </div>
                            </div>

                                </div>
                            </div>
<!--                                ONLINE TAB BELOW-->


<!--                                SALES TAB BELOW -->
                                <div class="row" id="check_sales_box" style="visibility:hidden;display:none;">
<!--                                gallery search bar-->
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="row" style="margin-bottom:1%;margin-top:1%;background-color:rgba(0, 0, 0, 0);">
        <div class="col-lg-1 col-md-1"></div>
                                <div class="col-lg-10 col-md-10">
                                    <form class="form-inline" method="post" action="index.php">
                                        <div class="input-group col-lg-12" style="font-family:kok;">
                                        <input type="text" class="form-control" placeholder="Search sales items using cartname i.e. W322kdo3" id="sales_itemid" onkeyup="check_sales_item();" name="searchid" style="background-color:rgba(220, 220, 220, 0.79);border:none;">
                                        <span class="input-group-btn">

                                            <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
                                        </span>
                                        </div>
                                    </form>
                                    <div class="row">
<!--                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>-->
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="border:1px solid black;margin-left:2%;z-index:100;position:absolute;background-color:white;" id="salestabsresulstdiv"></div>
                                         <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>

                                    </div>
                                </div>

                                        <div class="col-lg-1 col-md-1"></div>
                            </div>

                                </div>
                            </div>
<!--                                SALES TAB BELOW-->

<!--                            SEARCH'S CONTROL PANEL-->
                            <div class="row" id="searchcontrol" style="margin-bottom:1%;display:none;visibility:hidden;">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="display:none;visibility:hidden;" id="QueryId">
                                    <a class="btn btn-info btn-block" onclick="Query();"><span class="glyphicon glyphicon-trash">Delete Queried</span></a>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 pull-right" style="display:none;visibility:hidden;" id="UnqueryId">
                                    <a class="btn btn-danger btn-block" onclick="Unquery();"><span class="glyphicon glyphicon-trash">Delete Unqueried</span></a>
                                </div>


                            </div>
<!--                            SEARCH'S CONTROL PANEL-->


<!--                            BLOGS CONTROL PANEL-->
                            <div class="row" id="blogspreview" style="margin-bottom:1%;display:none;visibility:hidden;">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="row" style="margin-bottom:1%;">
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"></div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <a class="btn btn-primary" onclick="showblogslist();blogslistshow(1);"><span class="glyphicon glyphicon-book" id="blogslistbutton"></span> Show blog list</a>

                                </div>
                                </div>
                                <div class="row" id="container_housing_bloglist_sheet" style="visibility:hidden;display:none;">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:white;">
                                        <h4 class="text-capitalize text-center">All Blogs on Tiiva</h4>
                                        <a class="btn"><span class="glyphicon glyphicon-refresh pull-center" onclick="blogslistshow(1);" style="color:blue;font-weight:bold;"> Refresh list </span></a><br>
                                        <img src="images/spinner/spinner_small.gif" class="img-responsive" style="display:none;visibility:none;" id="refresh_spinner_id"/>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="blogslistcontainer_toggledbybutton"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:1%;background-color:white;" id="blogslistcontainer"></div>
                                </div>
                                </div>
                            </div>
<!--                            BLOGS'S CONTROL PANEL-->
<!--                            PENDING BLOG'S CONTROL PANEL -->
                            <div class="row" id="pending_blogs_id" style="visibility:hidden;display:none;">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <a class="btn btn-info pull-right" onclick="pendingblogsicon();showpendingblogshere(1);"><span class="glyphicon glyphicon-folder-open" id="folderclose"></span>&nbsp;&nbsp;Show Pending blogs</a>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="pendingblogslist" style="background-color:white;margin-top:1%;"></div>
                                    </div>

                                     <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="pendingblogs_editor" style="background-color:white;margin-top:1%;margin-bottom:1%;"></div>
                                    </div>


                                </div>
                            </div>
<!--                            PENDING BLOG'S CONTROL PANEL -->
                                <!-- CHANGE HANDLER -->
                                <div class="row" id="">
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                  </div>

                                </div>
                                <!-- CHANGE HANDLER -->


<!--                            PUBLISH ALERT DIV-->
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="position:absolute;top:50%;">
                                                    <span  id="Publish_alert">

                                                    </span>
                             </div>
                            </div>

<!--                            PUBLISH ALERT DIV-->
                              <!-- MODAL BOX -->
                              <div class="modal animated zoomIn" id="loginModal">
                                  <div class="modal-dialog modal-lg">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <a class="btn btn-primary clearinputs pull-right" data-dismiss="modal">&times;</a>
                                              <h3 class="modal-title text-center" style="text-shadow:0px 0px 2px black;color:white;"><strong>Pickup Item</strong></h3>
                                          </div>
                                          <div class="modal-body" id="cartmodalcontentss">
                                            <div class="row">

                                                                            <!-- <div class="row" style="position:absolute;z-index:19;margin-top:20%;">
                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="alert alert-success">
                                                                                      <a href="#" class="close" data-dismiss="alert">&times;</a>
                                                                                        <strong>Success!</strong>$itname has successfully been uploaded. You can view all your items status in your account.
                                                                                    </div>
                                                                                </div>
                                                                            </div> -->
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="cartmodalcontents">

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <form class="" action="index.html" method="post">
                                                        <label for="pickupoptions">Pickup options</label>
                                                        <select title="<h5>Pickup Type</h5>Select:<br>Pickup - when the agent physically goes to pick up from the Merchant <br> Selfdelivery - when the Merchant/other delivers it to Tiiva center" class="selections pickupmode form-control" name="">Pickupmode
                                                            <option value="pickup">Pickup</option>
                                                            <option value="self">Selfdelivery</option>
                                                        </select>
                                                        <div style="display:none;" class="pickmodegroups pickupcont">
                                                          this is option one
                                                          <form class="" action="index.html" method="post">
                                                            <div class="form-group">
                                                              <label for="Handover">Agent type</label>
                                                              <select title="<h5>Agent picking up</h5>Select:<br> Original Agent - if you're the actual intended agent meant to pick up<br> Other Agent - if you were'nt the origianl intended agent" class="form-control agenttypeP selections" name="">Handover
                                                                  <option value="AGENT">Original Agent</option>
                                                                  <option value="OTHERAGENT">Other Agent</option>
                                                              </select>
                                                                <br><label for="Agent">Agent picking up</label>
                                                                <input type="text" readonly title="<h5>Agent picking up</h5>Please provide your name here" name="selfagent" value="<?php echo $agent;?>" class="form-control agentidP" placeholder="Tiiva Agent picking up">
                                                                <br>
                                                                <label for="Handover">Person Handingover</label>
                                                                <select title="<h5>Person Handing Over</h5>Select Merchant if registered Tiiva Merchant is the handover person and other if someone else handing over" class="form-control selections personhandoverP" name="">Handover
                                                                    <option value="MERCHANT">Merchant</option>
                                                                    <option value="OTHER">Other</option>
                                                                </select>
                                                                <br>
                                                                <label for="Name">Handover's Name</label>
                                                                <input type="text" title="<h5>Handover's Name</h5>Please provide the name of the person handing over the item" name="selfhandovername" value="" class="form-control handovernameP" placeholder="Handover person's name">
                                                                <br>
                                                                <label for="ID No">ID no</label>
                                                                <input type="text" title="<h5>Handover person's ID number</h5>Please provide the handover person's ID number" name="handoverid" value="" class="form-control handoveridP" placeholder="handover person's ID">
                                                                <br>
                                                                <label for="Paymentmode">Payment mode</label>
                                                                <select title="<h5>Merchant Choice of Payment</h5>Select:<br> Weekly - top be paid every Friday/Tuesday<br>Monthly - to be paid end month<br> Bundled - to be paid cummulatively per sales <br> End - top be paid after customer delivery + 3 days" class="paymentmode paymentmodeP form-control selection" name="">PaymentMode
                                                                    <option value="WEEKLY">Weekly</option>
                                                                    <option value="MOTHLY">Monthly</option>
                                                                    <option value="BUNDLED">Bundled</option>
                                                                    <option value="END">End</option>

                                                                </select>
                                                                <br>
                                                                <label for="sign">Consent</label>
                                                                  <input type="radio" title="<h5>Seller's consent</h5>Select this if they accept the terms stated above" name="consentP" value="Yes">Yes
                                                                  <input type="radio" title="<h5>Seller's consent</h5>Select this if they do not accept the terms provided" name="consentP" value="No">No

                                                                  <div class="row">
                                                                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 visible-lg visible-md"></div>
                                                                      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                        <a href="#" class="btn btn-primary btn-block btn-lg uploadinfobypickup" title="<h5>Submit Data</h5>Finalize pickup">upload info</a>
                                                                      </div>
                                                                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 visible-lg visible-md"></div>

                                                                  </div>

                                                            </div>
                                                          </form>
                                                        </div>
                                                        <div style="display:none;" class="pickmodegroups selfcont">
                                                          this is option two
                                                          <form class="" action="index.html" method="post">
                                                            <div class="form-group">
                                                                <br><label for="Agent">Centre Agent Receiving</label><br>
                                                                <input type="text" readonly title="<h5>Agent picking up package</h5>Please provide your details" name="selfagent" value="<?php echo $agent;?>" class="agentidS form-control" placeholder="Tiiva Agent's Name">
                                                                <br>
                                                                <label for="Handover">Person delivering</label>
                                                                <select title="<h5>Person delivering</h5>Please provide the deliverer's name" class="persondeliverS form-control selections" name="">Handover
                                                                    <option value="MERCHANT">Merchant</option>
                                                                    <option value="OTHER">Other</option>
                                                                </select>
                                                                <br>
                                                                <label for="Name">Handover's Name</label>
                                                                <input type="text" title="<h5>Handover person's Name</h5>Please provide the handover person's name" name="selfhandovername" value="" class="selfhandovernameS form-control" placeholder="Handover person's name">
                                                                <br>
                                                                <label for="ID No">ID no</label>
                                                                <input type="text" title="<h5>Handover person's ID number</h5>Please the handover person's ID number" name="handoverid" value="" class="selfhandoveridS form-control" placeholder="handover person's ID">
                                                                <br>
                                                                <label for="Paymentmode">Payment mode</label>
                                                                <select title="<h5>Merchant Choice of Payment</h5>Select:<br> Weekly - top be paid every Friday/Tuesday<br>Monthly - to be paid end month<br> Bundled - to be paid cummulatively per sales <br> End - top be paid after customer delivery + 3 days" class="selfpaymentmodeS paymentmode form-control selection" name="">PaymentMode
                                                                    <option value="WEEKLY">Weekly</option>
                                                                    <option value="MONTHLY">Monthly</option>
                                                                    <option value="BUNDLED">Bundled</option>
                                                                    <option value="END">End</option>

                                                                </select>
                                                                <br>
                                                                <label for="sign">Consent</label>
                                                                <input type="radio" title="<h5>Seller's consent</h5>Select this if they accept the terms stated above" name="selfconsentS" value="Yes">Yes
                                                                <input type="radio" title="<h5>Seller's consent</h5>Select this if they do not accept the terms provided" name="selfconsentS" value="No">No
                                                                  <br>

                                                                  <div class="row">
                                                                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 visible-lg visible-md"></div>
                                                                      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                        <a href="#" class="btn btn-primary btn-block btn-lg uploadinfobyself" title="<h5>Submit Data</h5>Finalize pickup">upload info</a>
                                                                      </div>
                                                                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 visible-lg visible-md"></div>

                                                                  </div>


                                                            </div>
                                                          </form>
                                                          <div style="display:none;visibility:hidden;">
                                                            <span id="itemno"></span>
                                                            <span id="cartname"></span>
                                                          </div>
                                                        </div>
                                                    </form>
                                                    <script>

                                                      $("form > .pickupmode").change(function(){
                                                        var pickupmode = $("form>.pickupmode").val();
                                                        //$('.pickupcont').show();
                                                        $('.pickmodegroups').hide();
                                                         $('.'+pickupmode+'cont').show();
                                                        //alert(pickupmode);
                                                      });

                                                      $(document).ready(function(){
                                                         $(":input,:checkbox,.btn,.selections,.description").tooltip({
                                                             placement: "top",
                                                             //title: "<h5></h5>I am here",
                                                             html: "true",

                                                         })
                                                      });
                                                      // $(".uploadinfo").click(function(){
                                                      //   alert("Clicked me did you");
                                                      // });
                                                      function setthevalues(x, y){
                                                        $("#itemno").text(x);
                                                        $("#cartname").text(y);

                                                      }

                                                      // pickup item by agent update stats
                                                      $(".uploadinfobypickup").click(function(){
                                                        // pick up item by agent
                                                        var itemno = $("#itemno").text();
                                                        var cartname = $("#cartname").text();
                                                        //alert("this is the pick up button itemno is "+itemno+" cartname is "+cartname);
                                                        var pickupmode = $(".pickupmode").val();
                                                        // alert(pickupmode);
                                                        var agenttype = $(".agenttypeP").val();
                                                        // alert(agenttypeP);
                                                        var agent = $(".agentidP").val();
                                                        // alert(agentidP);
                                                        var personhandover = $(".personhandoverP").val();
                                                        // alert(personhandoverP);
                                                        var handovername = $(".handovernameP").val();
                                                        // alert(handovernameP);
                                                        var handoverid = $(".handoveridP").val();
                                                        // alert(handoveridP);
                                                        var paymentmode = $(".paymentmodeP").val();
                                                        // alert(paymentmodeP);
                                                        var consent = $('[name="consentP"]:checked').val().toUpperCase();
                                                        if(consent == 'YES'){
                                                          var sign = 1;
                                                          // alert(sign);
                                                        }else{
                                                          var sign = 0;
                                                          // alert(sign);
                                                        }
                                                        // alert(consentP);
                                                          var pickupdata = "itemno="+itemno+"&cartname="+cartname+"&pickupmode="+pickupmode+"&agenttype="+agenttype+"&agent="+agent+
                                                          "&handoverperp="+personhandover+"&name="+handovername+"&idno="+handoverid+"&paymentmode="+paymentmode+
                                                          "&sign="+sign;
                                                          // alert(pickupdata);
                                                        $.ajax({
                                                          type: "POST",
                                                          url: "completepickup.php",
                                                          data: pickupdata,
                                                          success: function(selfpickup){
                                                            alert(selfpickup);
                                                            $(".clearinputs").click();
                                                            loadpickups();
                                                          }
                                                        });

                                                      });
                                                      $(".uploadinfobyself").click(function(){
                                                        // pick up item by myself
                                                        var itemno = $("#itemno").text();
                                                        var cartname = $("#cartname").text();
                                                        // alert("this is the self delivery button itemno is "+itemno+" cartname is "+cartname);

                                                        var pickupmode = $(".pickupmode").val();
                                                        // alert(pickupmode);
                                                        // var agenttypeS = $(".agenttypeS").val();
                                                        // alert(agenttypeS);
                                                        var agent = $(".agentidS").val();
                                                        // alert(agentidS);
                                                        var persondeliver = $(".persondeliverS").val();
                                                        // alert(persondeliverS);
                                                        var selfhandovername = $(".selfhandovernameS").val();
                                                        // alert(selfhandovernameS);
                                                        var selfhandoverid = $(".selfhandoveridS").val();
                                                        // alert(selfhandoveridS);
                                                        var selfpaymentmode = $(".selfpaymentmodeS").val();
                                                        // alert(selfpaymentmodeS);
                                                        var selfconsent = $('[name="selfconsentS"]:checked').val().toUpperCase();
                                                        // alert(selfconsentS);
                                                        if(selfconsent == 'YES'){
                                                          var sign = 1;
                                                          // alert(sign);
                                                        }else{
                                                          var sign = 0;
                                                          // alert(sign);
                                                        }
                                                          var selfpickupdata = "itemno="+itemno+"&cartname="+cartname+"&pickupmode="+pickupmode+"&agent="+agent+
                                                          "&handoverperp="+persondeliver+"&name="+selfhandovername+"&idno="+selfhandoverid+
                                                          "&paymentmode="+selfpaymentmode+"&sign="+sign;
                                                          // alert(selfpickupdata);

                                                        $.ajax({
                                                          type: "POST",
                                                          url: "completepickup.php",
                                                          data: selfpickupdata,
                                                          success: function(selfpickup){
                                                            alert(selfpickup);
                                                            $(".clearinputs").click();
                                                            loadpickups();
                                                          }
                                                        });

                                                      });
                                                      // $(".clearinputs").click(function(){
                                                      //   // clear the input all input fields
                                                      //     $(":input").val("");
                                                      // });
                                                    </script>

                                                </div>
                                            </div>
                                          </div>
                                          <div class="modal-footer">
                                              <button class="btn btn-danger pull-right clearinputs" data-dismiss="modal">Close</button>
                                              <!-- <a href="checkout.php" class="btn btn-primary">Proceed to Checkout</a> -->
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- MODAL BOX -->

                                <!-- PICKUP DIV START -->
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="pickupid" style="background-color:white;">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                      $("#pickupid").hide();

                                        function loadpickups(){
                                          $.ajax({
                                              type: "GET",
                                              url: 'collectpickup.php',
                                              success: function(data){
                                                  $("#pickupid").html(data);
                                                  $("#pickupid").show();

                                                  console.log("Updated the list");

                                              }
                                          });
                                        }


                                      function modalRem(){
                                        // $("#loginModal").removeClass("zoomIn");
                                        $("#loginModal").addClass("animated zoomIn");
                                        console.log("just logged this");
                                      }
                                      function reloadmodal(item,cartname){
                                        var details = "item="+item+"&cartname="+cartname;

                                        $.ajax({
                                            type: "GET",
                                            url: 'pickupitem.php',
                                            data: details,
                                            success: function(data){
                                                $("#cartmodalcontents").html(data);
                                                // call another function with the details as arguments
                                                setthevalues(item,cartname);

                                            }
                                        });
                                      }
                                    </script>
                                <!-- PICKUP DIV END -->
          <!-- ITEMS IN TRANSIT CHANGE HANDLER START-->
                <div class="row transitcontainer" style="background-color:white;font-family:kok;display:none;">
                  <script>
                    function showtransit(){
                      $(".transitcontainer").show();
                      var data = "transit=transitadmin";
                      $.ajax({
                          type: "POST",
                          url: 'transitprogress.php',
                          data: data,
                          success: function(transit){
                              $("#itemsintransit").html(transit);

                              $(document).ready(function(){
                                 $(".showcart").tooltip({
                                     placement: "top",
                                     //title: "<h5></h5>I am here",
                                     html: "true",

                                 })
                              });



                              $(".sumsum").click(function(){
                                var product = $(this).attr('data-product');
                                var cart = $(this).attr('data-cart');
                                $(".marker2").attr('data-itemid',product);
                                $(".marker2").attr('data-cart',cart);
                                var message = "product="+product+"&cart="+cart;


                                // lifted starting from here

                                $.ajax({
                                  type:"POST",
                                  url: "transitchangehandler.php",
                                  data: message,
                                  success: function(data){
                                    $("#changehandler").html(data);

                                    // delete this after
                                    $(document).ready(function(){
                                      var secondop = $(".marker2").attr('data-id');

                                      if(secondop == 0){
                                        // not used continue
                                        $("#multi_a").hide();
                                        $("#single_a").show();
                                        // alert("First time/no multi");


                                        // do nothing
                                      }else{
                                        // already used as multi
                                        alert("Used as multi");
                                        $("#single_a").hide();
                                        $("#multi_a").show();
                                        //this is a test review it later

                                        //this is a test review it later
                                        // fill all the inputs with values you already have
                                        //var itemid = $(".marker2").attr('data-itemid');//format to use
                                        // return handlerid, handlername, exchlocation
                                        // check the multi button too
                                        // $("#option2").prop("checked", true);//checks the multibutton
                                        var newhandlerid = $(".marker2").attr('data-id');
                                        var handlername = $(".marker2").attr('data-name');
                                        var exchlocation = $(".marker2").attr('data-location');
                                        var itemid = $(".marker2").attr('data-itemid');
                                        var itemcart = $(".marker2").attr('data-cart');
                                        // alert(newhandlerid);
                                        // alert(handlername);
                                        // alert(exchlocation);
                                        // alert("here now");
                                        $(".multistaffname").text(handlername);
                                        $(".multilocation").text(exchlocation);
                                        // do the ajax call...either way it wont overwrite itself
                                        $("#multiclick").click(function(){
                                          var multimessage = "itemid="+itemid+"&cartname="+itemcart+"&location="+exchlocation+"&handler="+handlername+"&handlerid="+newhandlerid+"&au_gy=oEds&cr_ts=trews";
                                          // alert("Uploading the multi manenos");
                                          console.log(multimessage);
                                          $.ajax({
                                            type: "POST",
                                            url: "prompthandlerchange.php",
                                            data: multimessage,
                                            success: function(multisend){
                                              $("#multi_a").html(multisend);
                                            }
                                          });
                                        });

                                      }
                                    });
                                    // delete this after


                                    $(document).ready(function(){
                                       $("#handlerid").tooltip({
                                           placement: "top",
                                           //title: "<h5></h5>I am here",
                                           html: "true",

                                       })
                                    });



                                    // query the handler id provided
                                    $(".handlerid").focusout(function(){
                                      var handlerid = $(".handlerid").val();
                                      //alert(handlerid);
                                      if(handlerid != ''){
                                        var handlermesg = "handlerid="+handlerid;
                                        $.ajax({
                                          type:"POST",
                                          url: "selecttransithandler.php",
                                          data: handlermesg,
                                          success: function(achent){
                                            $("#handlercontents").html(achent);

                                            $(document).ready(function(){
                                               $(".handlopt").tooltip({
                                                   placement: "top",
                                                   html: "true",
                                               })
                                            });



                                            $("#clickerme").click(function(){
                                              var xer = $("#handlercontents input[type='radio']:checked").val();
                                              var newhandler = $("#newhandler").val();
                                              var location = $("#exchlocation").val();
                                              // alert(handlerid);
                                              // alert(xer);
                                              // alert(newhandler);
                                              if(handlerid =='' || xer == '' || newhandler == '' || location == ''){
                                                // if either is empty don't proceed
                                                if(xer == ''){
                                                  // alert("You have to pick a choice between single and multi");
                                                }else{
                                                  // alert("Error");
                                                  //TODO STYLE THE ABOVE RESPONSES LATER I.E. ALERT BOXES
                                                  // TODO save the agentid in a cookie instead of hidden box

                                                }
                                              }else{
                                                // proceed
                                                // first store the value of the agent if option picked is multi
                                                if(xer == 'multi'){
                                                  //save value offline
                                                  // console.log("acted");
                                                  // $(".marker2").text(handlerid);
                                                  $(".marker2").attr('data-id',handlerid);
                                                  $(".marker2").attr('data-location',location);
                                                  $(".marker2").attr('data-name',newhandler);
                                                }
                                                // continue off here
                                                var itemid = $(".marker2").attr('data-itemid');
                                                var itemcart = $(".marker2").attr('data-cart');
                                                // alert(itemid);
                                                // alert(itemcart);
                                                var promptmessage = "itemid="+itemid+"&cartname="+itemcart+"&location="+location+"&handler="+newhandler+"&handlerid="+handlerid+"&au_gy=oEds&cr_ts=trews";
                                                console.log(promptmessage);
                                                $.ajax({
                                                  type: "POST",
                                                  url: "prompthandlerchange.php",
                                                  data: promptmessage,
                                                  success: function(single_a){
                                                    $("#single_a").html(single_a);
                                                  }
                                                });

                                              }

                                              // check whether value in input 1 and two
                                              // check the value from the option radios
                                              // proceed


                                            });

                                          }
                                        });
                                      }
                                    });
                                  }
                                });
                              });

                          }

                      });
                    }

                    // prompt the prompt messages after every 30 seconds probably
                    // the script to check the prompt messages
                    function loveme(){
                      var prompts = "myprompts=adyyr";
                      var sentprompts = "sentoutprompts=yuris";
                      // alert(prompts);
                      $.ajax({
                        type: "POST",
                        url: "prompthandlerchange.php",
                        data: prompts,
                        success: function(promptsre){
                          $("#myprompts").html(promptsre);
                          $(".accepthandover").click(function(){
                            var itemid = $(".accepthandover").attr("data-id");
                            // alert("accept this"+itemid);
                            var accepthandover = "accepthandover=accept&itemid="+itemid;
                            $.ajax({
                              type: "POST",
                              url: "prompthandlerchange.php",
                              data: accepthandover,
                              success: function(accept){
                                // $("#single_a").html(accept);
                                // $(this).html(accept);
                                $("#craptrap").html(accept);
                              }
                            });


                          });
                          $(".declinehandover").click(function(){
                            var itemid = $(".declinehandover").attr("data-id");
                            // alert("decline this"+itemid);
                            var declinehandover = "declinehandover=decline&itemid="+itemid;
                            $.ajax({
                              type: "POST",
                              url: "prompthandlerchange.php",
                              data: declinehandover,
                              success: function(decline){
                                // $("#single_a").html(decline);
                                // $(this).html(decline);
                                $("#craptrap").html(decline);
                              }
                            });
                          });
                        }
                      });

                      $.ajax({
                        type: "POST",
                        url: "prompthandlerchange.php",
                        data: sentprompts,
                        success: function(promptsre){
                          $("#sentoutprompts").html(promptsre);
                          $(".delmyprompt").click(function(){
                            var itemid = $(".delmyprompt").attr("data-id");
                            // alert("remove prompt"+itemid);
                            var deleteprompt = "deleteprompt=delete&itemid="+itemid;
                            $.ajax({
                              type: "POST",
                              url: "prompthandlerchange.php",
                              data: deleteprompt,
                              success: function(delte){
                                // $("#single_a").html(delte);
                                // $(this).html(delte);
                                $("#craptrap2").html(delte);
                              }
                            });
                          });

                        }
                      });


                    }
                  </script>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="itemsintransit">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myprompts"></div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="craptrap"></div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="sentoutprompts"></div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="craptrap2"></div>

                    <span class="hidden marker2" data-id="0">7yd</span>
                </div>
                <div class="row" style="margin-top:1%;background-color:white;">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="changehandler"></div>
                </div>
          <!-- ITEMS IN TRANSIT CHANGE HANDLER END-->

<!--                            STATS GRAPH START-->
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                  <!-- TODO REVIEW DISPLAY THE ITEM BELOW -->
                                    <div class="row" style=\"visibility:hidden;display:none;\">
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" id="canvascontainer">
                                                        <canvas id="myChart2"></canvas>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <a onclick="renderdates();" href="#">Months</a>
                                                    <div class="row" id="traffickcolumn" style="display:none;visibility:hidden;">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<!--
                                                            New users ip from user reg
                                                            New ip's visit
                                                            crawlers
                                                            Regular visits
                                                            After sale visits
-->
                                                            <h4>Traffick</h4>
                                                            <a href="#" onclick="rendernewipsvisit();">New ip's Visit</a><br>
                                                            <a href="#">Crawlers</a><br>
                                                            <a href="#" onclick="renderstrollervisits();">Regular visits - strollers</a><br>
                                                            <a href="#" onclick="renderreturnvisits();">Aftersale visits</a><br>
                                                            <a href="#" onclick="rendergeneraltraffick();">General traffick</a><br>

                                                        </div>
                                                    </div>
                                                    <div class="row" id="feedbackcolumn" style="display:none;visibility:hidden;">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <ul class="list-group">
                                                                <li class="list-group-item"><a class="btn btn-sm btn-block" href="#" onclick="renderfeedbackgroups('0');">Complaints</a></li>
                                                                <li class="list-group-item"><a href="#" onclick="renderfeedbackgroups('Feedback');">Feedback</a></li>
                                                                <li class="list-group-item"><a href="#" onclick="renderfeedbackgroups('Orderissue');">OrderIssue</a></li>
                                                                <li class="list-group-item"><a href="#" onclick="renderfeedbackgroups('Review');">Reviews</a></li>
                                                                <li class="list-group-item"><a href="#" onclick="renderfeedbackgroups('Request');">Request</a></li>
                                                                <li class="list-group-item"><a href="#" onclick="renderfeedbackgroups('Improve');">Help us Improve</a></li>
                                                                <li class="list-group-item"><a href="#" onclick="renderfeedbackgroups('Merchant');">MerchantIssues</a></li>
                                                                <li class="list-group-item"><a href="#" onclick="renderfeedbackgroups('User');">UserIssue</a></li>
                                                                <li class="list-group-item"><a href="#" onclick="renderfeedbackgroups('Other');">Other</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="calendar"></div>
                                            </div>
                                        </div>
                                    </div>
                                <div class="row" id="graphcontainer">
<!--
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5" style="font-family:kok;">
                                        <div id="chartvalues" style="display:none;visibility:hidden;">100, 29, 13, 50, 12, 1,20, 35, 45, 22, 1,70</div>

                                         <div id="chartdays" style="display:none;visibility:hidden;">Monday, Tuesday, Wednesday, Thursday, Friday, Saturday,Sunday, Monday, Tuesday, Wednesday, Thurdsay,Friday
                                         </div>
                                    </div>
-->
                                </div>
                                </div>
                            </div>
<!--                            STATS GRAPH END-->

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="maindiv"></div>
                            </div>
<!--                             style="height:463px;"-->
<!--                            <iframe src="index.php" frameborder="0" style="width:100%;height:100%;" id="iframebox"></iframe>-->
                        </div>
                    </div>
                </div>

                </div>

        </div>
        <script>


            function theshack(){
                var change = document.getElementById('iframebox');
                change.src = 'index.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'Mtush';
            }

            function theshop(){
                var change = document.getElementById('iframebox');
                change.src = 'index.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'Shop';
            }

            function theblogs(){
                var change = document.getElementById('iframebox');
                change.src = 'blog.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'Blogs';
            }

            function sales(sls){
              //the start
              var pageit = "sales="+sls;

              $.ajax({
                url: "solditemsadmin.php",
                type: 'GET',
                data: pageit,
                success: function(online){
                  $("#maindiv").css("background-color","white");
                  $("#maindiv").html(online);
                }
              })
              //the end


            }


            function transit(){
//                var change = document.getElementById('iframebox');
//                change.src = 'transit.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'transit';

                var thesearchbar = document.getElementById('thesearchbar');
                if(thesearchbar.style.visibility == 'visible'){
                        thesearchbar.style.visibility = 'hidden';
                }

            }
            $(".showreturn").click(function(){
              $(".returncontainer").fadeIn();
            });


            function staffmessages(){
                var change = document.getElementById('iframebox');
                change.src = 'staffmessages.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'staff messages';
            }

            function groundmessages(){
                var change = document.getElementById('iframebox');
                change.src = 'groundmessages.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'Ground Messages';
            }

            function usersmessages(){
                var change = document.getElementById('iframebox');
                change.src = 'usermessages.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'User Messages';
            }

            function merchantmessages(){
                var change = document.getElementById('iframebox');
                change.src = 'merchantmessages.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'Merchant Messages';
            }

            function bloggersmessages(){
                var change = document.getElementById('iframebox');
                change.src = 'bloggersmessages.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'Blogger Messages';
            }

             function Marketstallusers(){
                var change = document.getElementById('iframebox');
                change.src = 'Marketstalls.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'Market-stall';
            }

             function Shopperusers(){
                var change = document.getElementById('iframebox');
                change.src = 'shopperusers.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'Shopper users';
            }

             function Merchantsusers(){
                var change = document.getElementById('iframebox');
                change.src = 'merchantusers.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'Merchant users';
            }

            function shopsusers(){
                var change = document.getElementById('iframebox');
                change.src = 'shopsusers.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'shop users';
            }

            function Bloggersusers(){
                var change = document.getElementById('iframebox');
                change.src = 'bloggersusers.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'bloggers users';
            }

            function skillsusers(){
                var change = document.getElementById('iframebox');
                change.src = 'bloggersusers.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'skills users';
            }

            function Unqueriedcall(){
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'unqueried searches';
                var maindiv = document.getElementById('maindiv');
                maindiv.style.backgroundColor = 'white';
                var searchcontrol = document.getElementById('searchcontrol');
                var QueryId = document.getElementById('QueryId');
                var UnqueryId = document.getElementById('UnqueryId');

                if(searchcontrol.style.visibility == 'hidden' || searchcontrol.style.display == 'none'){
                    searchcontrol.style.visibility = 'visible';
                    searchcontrol.style.display = 'block';

                    if(UnqueryId.style.visibility == 'hidden' || UnqueryId.style.display != 'none'){
                            UnqueryId.style.visibility = 'visible';
                            UnqueryId.style.display = 'block';

                        if(QueryId.style.visibility == 'visible' || QueryId.style.display == 'block'){
                            QueryId.style.visibility = 'hidden';
                            QueryId.style.display = 'none';
                        }
                        }


                }else{
                    if(QueryId.style.visibility == 'visible' || QueryId.style.display == 'block'){
                            QueryId.style.visibility = 'hidden';
                            QueryId.style.display = 'none';
                        }
                    if(UnqueryId.style.visibility == 'hidden' || UnqueryId.style.display != 'none'){
                            UnqueryId.style.visibility = 'visible';
                            UnqueryId.style.display = 'block';}
                }

//
//                if(searchcontrol.style.visibility == 'hidden' || searchcontrol.style.display == 'none'){
//                    searchcontrol.style.visibility = 'visible';
//                    searchcontrol.style.display = 'block';
//                    if(UnqueryId.style.visibility == 'hidden' || UnqueryId.style.display == 'none'){
//                        UnqueryId.style.visibility = 'visible';
//                        UnqueryId.style.display = 'block';
//                    }
//                }
//


                if(window.XMLHttpRequest){
                    xmlhttp = new XMLHttpRequest();
                }else{
                    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp.onreadystatechange = function(){
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
                    document.getElementById('maindiv').innerHTML= xmlhttp.responseText;

                    }
                    }
                    xmlhttp.open("POST","checksearches.php",true);
                xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                xmlhttp.send("action=UnQueried");


            }

            function Queriedcall(){
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'Queried searched items';
                var maindiv = document.getElementById('maindiv');
                maindiv.style.backgroundColor = 'white';
                var searchcontrol = document.getElementById('searchcontrol');
                var UnqueryId = document.getElementById('UnqueryId');
                var QueryId = document.getElementById('QueryId');

                if(searchcontrol.style.visibility == 'hidden' || searchcontrol.style.display == 'none'){
                    searchcontrol.style.visibility = 'visible';
                    searchcontrol.style.display = 'block';

                    if(QueryId.style.visibility == 'hidden' || QueryId.style.display != 'none'){
                            QueryId.style.visibility = 'visible';
                            QueryId.style.display = 'block';

                        if(UnqueryId.style.visibility == 'visible' || UnqueryId.style.display == 'block'){
                            UnqueryId.style.visibility = 'hidden';
                            UnqueryId.style.display = 'none';
                        }
                        }


                }else{
                    if(UnqueryId.style.visibility == 'visible' || UnqueryId.style.display == 'block'){
                            UnqueryId.style.visibility = 'hidden';
                            UnqueryId.style.display = 'none';
                        }
                    if(QueryId.style.visibility == 'hidden' || QueryId.style.display != 'none'){
                            QueryId.style.visibility = 'visible';
                            QueryId.style.display = 'block';}
                }

                if(window.XMLHttpRequest){
                    xmlhttp = new XMLHttpRequest();
                }else{
                    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp.onreadystatechange = function(){
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
                    document.getElementById('maindiv').innerHTML= xmlhttp.responseText;

                    }
                    }
                    xmlhttp.open("POST","checksearches.php",true);
                xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                xmlhttp.send("action=Queried");

            }

            function usererrors(){
                var change = document.getElementById('iframebox');
                change.src = 'usererrors.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'User errors';
            }

            function stafferrors(){
                var change = document.getElementById('iframebox');
                change.src = 'stafferrors.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'Staff errors';
            }

            function systemerrors(){
                var change = document.getElementById('iframebox');
                change.src = 'systemerrors.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'system errors';
            }

            function systemlogs(){
                var change = document.getElementById('iframebox');
                change.src = 'systemlogs.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'sysem logs';
            }

            function systemlogs(){
                var change = document.getElementById('iframebox');
                change.src = 'systemlogs.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'sysem logs';
            }

            function previewblogs(){
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'Blog preview';
                var blogspreview = document.getElementById('blogspreview');
                blogspreview.style.display = 'block';
                blogspreview.style.visibility = 'visible';
            }

            function pendingblogs(){
                var pending_blogs_id = document.getElementById('pending_blogs_id');
                pending_blogs_id.style.display = 'block';
                pending_blogs_id.style.visibility = 'visible';

                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'pending blogs';
            }

            function ratingblogs(){
                var change = document.getElementById('iframebox');
                change.src = 'ratingblogs.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'rating blogs';
            }

            function editblogs(){
                var change = document.getElementById('iframebox');
                change.src = 'editblogs.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'edit blogs';
            }

            function deleteblogs(){
                var change = document.getElementById('iframebox');
                change.src = 'deleteblogs.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'delete blogs';
            }

            function salesstats(){
                var change = document.getElementById('iframebox');
                change.src = 'salesstats.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'sales stats';
            }

            function deliverystats(){
                var change = document.getElementById('iframebox');
                change.src = 'deliverystats.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'delivery stats';
            }

            function expensesstats(){
                var change = document.getElementById('iframebox');
                change.src = 'expensesstats.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'expenses stats';
            }

            function webtraffick(){
                var change = document.getElementById('iframebox');
                change.src = 'webtraffick.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'webtraffick stats';
            }

            function complaints(){
                var change = document.getElementById('iframebox');
                change.src = 'complaints.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'complaints stats';
            }

            function payments(){
                var change = document.getElementById('iframebox');
                change.src = 'payments.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'payment stats';
            }

            function uploadbanners(){
                var change = document.getElementById('iframebox');
                change.src = 'uploadbanners.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'upload banners';
            }

            function salesbanners(){
                var change = document.getElementById('iframebox');
                change.src = 'salesbanners.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'sales banners';
            }

            function deliverybanners(){
                var change = document.getElementById('iframebox');
                change.src = 'deliverybanners.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'delivery banners';
            }

            function transitbanners(){
                var change = document.getElementById('iframebox');
                change.src = 'transitbanners.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'transit banners';
            }

            function returnbanners(){
                var change = document.getElementById('iframebox');
                change.src = 'returnbanners.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'return banners';
            }

            function bankpayments(){
                var change = document.getElementById('iframebox');
                change.src = 'bankpayments.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'bank transfer';
            }

            function merchantpayment(){
                var change = document.getElementById('iframebox');
                change.src = 'merchantpayment.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'merchant payment';
            }

            function userspayment(){
                var change = document.getElementById('iframebox');
                change.src = 'userspayment.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'users payments';
            }

            function reversalpayments(){
                var change = document.getElementById('iframebox');
                change.src = 'returnbanners.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'return banners';
            }

            function servicespayments(){
                var change = document.getElementById('iframebox');
                change.src = 'servicespayments.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'service payments';
            }

            function charityfunds(){
                var change = document.getElementById('iframebox');
                change.src = 'charityfunds.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'charity funddrives';
            }

            function charitydrives(){
                var change = document.getElementById('iframebox');
                change.src = 'charitydrives.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'charity drives';
            }

            function charityprogress(){
                var change = document.getElementById('iframebox');
                change.src = 'charityprogress.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'charity progress';
            }

            function charityarithmetics(){
                var change = document.getElementById('iframebox');
                change.src = 'charityarithmetics.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'charity arithmetics';
            }

            function charitytickets(){
                var change = document.getElementById('iframebox');
                change.src = 'charitytickets.php';
                var pagetitle = document.getElementById('pagetitle');
                pagetitle.innerHTML = 'charity tickets';
            }
            function hidelist(){
                alert("You want to view the menu");
            }
            function searchid(){
                //var searchid = document.getElementById('searchid');
                var thesearchbar = document.getElementById('thesearchbar');
                thesearchbar.style.visibility = 'visible';


            }
            function checkid(){
                alert('This shoudl return your gallery item searches');
            }
            function deliverysearches(){
                //alert('This should check your delivery searches');
                //deliveriestabsresulstdiv
            }


            function showsalespanel(){
                var check_sales_box = document.getElementById('check_sales_box');
                check_sales_box.style.display = 'block';
                check_sales_box.style.visibility = 'visible';
            }

            function check_sales_item(){
                var upload_itemid = document.getElementById('sales_itemid').value;
                //alert(upload_itemid);

                if(window.XMLHttpRequest){
                    xmlhttp01 = new XMLHttpRequest();
                }else{
                    xmlhttp01 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp01.onreadystatechange = function(){
                if (xmlhttp01.readyState == 4 && xmlhttp01.status == 200){
                    document.getElementById('salestabsresulstdiv').innerHTML= xmlhttp01.responseText;

                    }
                    }


                xmlhttp01.open("POST","checksalesitem.php",true);
                xmlhttp01.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                xmlhttp01.send("item_id="+upload_itemid);


            }

            function Query(){
               var queridvalue = prompt('Are you sure you want to clear the whole Queried list?');
                if(queridvalue == 'okay' || queridvalue == 'true' || queridvalue == 'Yes' || queridvalue == 'Y' ){
                   // alert('Query text cleared');
                    if(window.XMLHttpRequest){
                    xmlhttp = new XMLHttpRequest();
                }else{
                    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp.onreadystatechange = function(){
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
                    document.getElementById('maindiv').innerHTML= xmlhttp.responseText;

                    }
                    }
                    xmlhttp.open("POST","clearsearches.php",true);
                xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                xmlhttp.send("action=Queried");
                }

            }
            function Unquery(){
               var unqueriedvalue = prompt('Are you sure you want to clear the whole Unqueried list');
                if(unqueriedvalue == 'okay' || unqueriedvalue == 'true' || unqueriedvalue == 'Yes' || unqueriedvalue == 'Y' ){
                    //alert('Query text cleared');
                    if(window.XMLHttpRequest){
                    xmlhttp = new XMLHttpRequest();
                }else{
                    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp.onreadystatechange = function(){
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
                    document.getElementById('maindiv').innerHTML= xmlhttp.responseText;

                    }
                    }
                    xmlhttp.open("POST","clearsearches.php",true);
                xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                xmlhttp.send("action=unQueried");
                    }
            }
            function showblogslist(){
                var blogslistbutton = document.getElementById('blogslistbutton');
                var bloglistsheet = document.getElementById('container_housing_bloglist_sheet');
                if(blogslistbutton.className != 'glyphicon glyphicon-book'){
                    blogslistbutton.className = 'glyphicon glyphicon-book';
                    bloglistsheet.style.display = 'none';
                    bloglistsheet.style.visibility = 'hidden';

                }else{
                    blogslistbutton.className = 'glyphicon glyphicon-minus';
                    bloglistsheet.style.display = 'block';
                    bloglistsheet.style.visibility = 'visible';
                }

            }

            function blogslistshow(blogpage){
                var refresh_show = document.getElementById('refresh_spinner_id');
                refresh_show.style.display = 'block';
                refresh_show.style.visibility = 'visible';
                if(window.XMLHttpRequest){
                    xmlhttp = new XMLHttpRequest();
                }else{
                    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp.onreadystatechange = function(){
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
                    document.getElementById('blogslistcontainer_toggledbybutton').innerHTML= xmlhttp.responseText;
                    refresh_show.style.display = 'none';
                    refresh_show.style.visibility = 'hidden';

                    }
                    }
                    xmlhttp.open("POST","adminblogslist.php",true);
                xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                xmlhttp.send("current="+blogpage);
               // xmlhttp.send("current=2");
                    }
            function showbloghere(blogno){
                if(window.XMLHttpRequest){
                    xmlhttp = new XMLHttpRequest();
                }else{
                    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                }
                xmlhttp.onreadystatechange = function(){
                    if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                        document.getElementById('blogslistcontainer').innerHTML = xmlhttp.responseText;

                    }
                }
                xmlhttp.open('POST','adminblogspreview.php',true);
                xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                xmlhttp.send("blogid="+blogno);
            }
            function pendingblogsicon(){
                var folderclose = document.getElementById('folderclose');
                if(folderclose.className != 'glyphicon glyphicon-folder-close'){
                    folderclose.className = 'glyphicon glyphicon-folder-close';
                }else{
                    folderclose.className = 'glyphicon glyphicon-folder-open';
                }
            }
            function showpendingblogshere(pendingblog){
                if(XMLHttpRequest){
                    xmlhttp = new XMLHttpRequest();
                }else{
                    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                }
                xmlhttp.onreadystatechange = function(){
                    if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                        document.getElementById('pendingblogslist').innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open('POST','adminpendingblogslist.php',true);
                xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                xmlhttp.send("current="+pendingblog);
            }
            function loadpendingblogs(blogedit){
                if(XMLHttpRequest){
                    xmlhttp = new XMLHttpRequest();
                }else{
                    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                }
                xmlhttp.onreadystatechange = function(){
                    if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                        document.getElementById('pendingblogs_editor').innerHTML =  xmlhttp.responseText;
                        changeheight();
                    }
                }
                xmlhttp.open('POST','admineditpendingblogs.php',true);
                xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                xmlhttp.send("blogid="+blogedit);

            }
            function changeheight(){
                //alert('not working');
                var ele = document.getElementById('ele');
            if(ele.clientHeight < ele.scrollHeight){
                ele.style.height = (ele.scrollHeight + 5)+'px';
            }
            }
            function publishblog(editblogno){
                var title = document.getElementById('title');
                var ele = document.getElementById('ele');
                var rating = document.getElementById('rating');
                var tag1 = document.getElementById('tag1');
                var tag2 = document.getElementById('tag2');
                var tag3 = document.getElementById('tag3');

                if(rating.value != '' && title.value != '' && ele.value != '' && tag1.value != '' && tag2.value != '' && tag3.value != ''){
                    alert('Everything is a okay');
                    var sure = confirm('Do you wish to upload this piece?');
                    if(sure == true){
                        //alert("You pressed the okay button");
                        alert("Title of the blog is | "+title.value);
                        alert("Content is | "+ele.value);
                        alert("Rating by Tiiva is | "+rating.value);
                        alert("Tag1 link is | "+tag1.value);
                        alert("Tag2 link is | "+tag2.value);
                        alert("Tag3 link is | "+tag3.value);
                        if(XMLHttpRequest){
                            xmlhttp = new XMLHttpRequest();
                        }else{
                            xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                        }
                        xmlhttp.onreadystatechange = function(){
                            if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                            document.getElementById('Publish_alert').innerHTML = xmlhttp.responseText;
                            var publish_button =  document.getElementById('publish_button');
                                publish_button.className = 'btn btn-success btn-md pull-right disabled';
                            var button_title = document.getElementById('button_title');
                                button_title.innerHTML = 'Blog Published!';

                            }
                        }
                        xmlhttp.open('POST','adminblogpublish.php',true);
                        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                        xmlhttp.send("id="+editblogno+"&title="+title.value+"&ele="+ele.value+"&rating="+rating.value+"&tag1="+tag1.value+"&tag2="+tag2.value+"&tag3="+tag3.value);
                    }else{
                        alert("You pressed the cancel button");
                    }
                }else{
                    alert('Somthing is wrong buana, dont leave anything empty');
                }


            }

            function showsalesgraphandstats(){
                //maindiv
                if(XMLHttpRequest){
                            xmlhttp = new XMLHttpRequest();
                        }else{
                            xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                        }
                        xmlhttp.onreadystatechange = function(){
                            if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                            document.getElementById('maindiv').innerHTML = xmlhttp.responseText;

                            }
                        }
                        xmlhttp.open('POST','workinggraphexample.php',true);
                        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                        xmlhttp.send("nuthn=nuthn");

            }
            function statsgraph(){

                        var chartvalues = document.getElementById('chartvalues').innerHTML;
                        var res = chartvalues.split(",");

                        var chartdays = document.getElementById('chartdays').innerHTML;
                        var days = chartdays.split(",");

                        var ctx2 = document.getElementById('myChart2');
	var myChart2 = new Chart(ctx2, {
		type:'line',
		data: {
			labels: days,
			datasets: [{
				label:'No of Votes',
				//data: [items[0],items[1],items[2],items[3],items[4],items[5],items[6],items[7],items[8],items[9]],
				//data: items,
				data: res,
				backgroundColor:[
					'rgba(54,162,235,0.2)',
					'rgba(255,206,86,0.2)',
					'rgba(75,192,192,0.2)',
					'rgba(75,2,192,0.2)',
					'rgba(153,102,255,0.2)',
					'rgba(255,159,64,0.2)'
				],
				borderColor: [
					'rgba(54,162,235,1)',
					'rgba(255,206,86,1)',
					'rgba(75,192,192,1)',
					'rgba(75,2,192,1)',
					'rgba(153,102,255,1)',
					'rgba(255,159,64,1)'
					],
					borderWidth:1

			}]
		},
		options: {
			scales: {
				yAxes: [{

					ticks: {
						beginAtZero:true
					}
				}]
			}
		}







	});
                    }

            function rendersalesgraph(){
                // returns the entire history of the app
                // potentially dangerous// slows server
                if(XMLHttpRequest){
                    xmlhttp = new XMLHttpRequest();
                }else{
                    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                }
                xmlhttp.onreadystatechange = function(){
                    if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                        document.getElementById('calendar').innerHTML = xmlhttp.responseText;
                        statsgraph();
                    }
                }
                xmlhttp.open('POST','returnsalesstats.php',true);
                xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                xmlhttp.send();
                // review this later to show the user session logged in or sth or only allow
                // certain session users
            }
            function renderdates(){
                // returns history from a single year
                if(XMLHttpRequest){
                    xmlhttp = new XMLHttpRequest();
                }else{
                    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                }
                xmlhttp.onreadystatechange = function(){
                    if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                        document.getElementById('calendar').innerHTML = xmlhttp.responseText;
                        statsgraph();

                    }
                }
                xmlhttp.open('POST','returnmonthsstats.php',true);
                xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                xmlhttp.send();
                // review this later to show the user session logged in or sth or only allow
                // certain session users
            }

            function rendermonth(){
                // returns history from a single month
                if(XMLHttpRequest){
                    xmlhttp = new XMLHttpRequest();
                }else{
                    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                }
                xmlhttp.onreadystatechange = function(){
                    if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                        document.getElementById('calendar').innerHTML = xmlhttp.responseText;
                        statsgraph();
                    }
                }
                xmlhttp.open('POST','showmonthsalestats.php',true);
                xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                xmlhttp.send();
                // review this later to show the user session logged in or sth or only allow
                // certain session users
            }

            function renderdays(){
                // returns history from a single day
                if(XMLHttpRequest){
                    xmlhttp = new XMLHttpRequest();
                }else{
                    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                }
                xmlhttp.onreadystatechange = function(){
                    if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                        document.getElementById('calendar').innerHTML = xmlhttp.responseText;
                        statsgraph();
                    }
                }
                xmlhttp.open('POST','returndaysstats.php',true);
                xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                xmlhttp.send();
                // review this later to show the user session logged in or sth or only allow
                // certain session users
            }

            function rendergeneraltraffick(){
                // returns all the traffick as per day
                var traffickcolumn = document.getElementById('traffickcolumn');
                traffickcolumn.style.visibility = 'visible';
                traffickcolumn.style.display = 'block';
                if(XMLHttpRequest){
                    xmlhttp = new XMLHttpRequest();
                }else{
                    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                }
                xmlhttp.onreadystatechange = function(){
                    if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                        document.getElementById('calendar').innerHTML = xmlhttp.responseText;
                        statsgraph();
                    }
                }
                xmlhttp.open('POST','generaltraffick.php',true);
                xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                xmlhttp.send();
                // review this later to show the user session logged in or sth or only allow
                // certain session users
            }

            function rendernewipsvisit(){
                // returns all the traffick as per day
                var traffickcolumn = document.getElementById('traffickcolumn');
                traffickcolumn.style.visibility = 'visible';
                traffickcolumn.style.display = 'block';
                if(XMLHttpRequest){
                    xmlhttp = new XMLHttpRequest();
                }else{
                    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                }
                xmlhttp.onreadystatechange = function(){
                    if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                        document.getElementById('calendar').innerHTML = xmlhttp.responseText;
                        statsgraph();
                    }
                }
                xmlhttp.open('POST','newiptraffick.php',true);
                xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                xmlhttp.send();
                // review this later to show the user session logged in or sth or only allow
                // certain session users
            }

            function renderstrollervisits(){
                // returns all the traffick from strolles/windowshoppers as per day
                var traffickcolumn = document.getElementById('traffickcolumn');
                traffickcolumn.style.visibility = 'visible';
                traffickcolumn.style.display = 'block';
                if(XMLHttpRequest){
                    xmlhttp = new XMLHttpRequest();
                }else{
                    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                }
                xmlhttp.onreadystatechange = function(){
                    if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                        document.getElementById('calendar').innerHTML = xmlhttp.responseText;
                        statsgraph();
                    }
                }
                xmlhttp.open('POST','specifictraffick.php',true);
                xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                xmlhttp.send("side=regular");
                // review this later to show the user session logged in or sth or only allow
                // certain session users
            }

            function renderreturnvisits(){
                // returns all the traffick from strolles/windowshoppers as per day
                var traffickcolumn = document.getElementById('traffickcolumn');
                traffickcolumn.style.visibility = 'visible';
                traffickcolumn.style.display = 'block';
                if(XMLHttpRequest){
                    xmlhttp = new XMLHttpRequest();
                }else{
                    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                }
                xmlhttp.onreadystatechange = function(){
                    if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                        document.getElementById('calendar').innerHTML = xmlhttp.responseText;
                        statsgraph();
                    }
                }
                xmlhttp.open('POST','specifictraffick.php',true);
                xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                xmlhttp.send("side=return");
                // review this later to show the user session logged in or sth or only allow
                // certain session users
            }

            function renderfeedbackstats(){
                // returns all the traffick from strolles/windowshoppers as per day
                var feedbackcolumn = document.getElementById('feedbackcolumn');
                feedbackcolumn.style.visibility = 'visible';
                feedbackcolumn.style.display = 'block';
                if(XMLHttpRequest){
                    xmlhttp = new XMLHttpRequest();
                }else{
                    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                }
                xmlhttp.onreadystatechange = function(){
                    if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                        document.getElementById('calendar').innerHTML = xmlhttp.responseText;
                        statsgraph();
                    }
                }
                xmlhttp.open('POST','feedbackstats.php',true);
                xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                xmlhttp.send("side=return");
                // review this later to show the user session logged in or sth or only allow
                // certain session users
            }

            function renderfeedbackgroups(subject){
                // returns all the traffick from groups of feedback in singles
//                var feedbackcolumn = document.getElementById('feedbackcolumn');
//                feedbackcolumn.style.visibility = 'visible';
//                feedbackcolumn.style.display = 'block';
                if(XMLHttpRequest){
                    xmlhttp = new XMLHttpRequest();
                }else{
                    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                }
                xmlhttp.onreadystatechange = function(){
                    if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                        document.getElementById('calendar').innerHTML = xmlhttp.responseText;
                        statsgraph();
                    }
                }
                xmlhttp.open('POST','feedbackgroupstats.php',true);
                xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                xmlhttp.send("subject="+subject);
                // review this later to show the user session logged in or sth or only allow
                // certain session users
            }


            function mimi(){
                alert("Clicked!");
            }
            function pickup(){
                var keycode = prompt("Pick up package 1167, deliver to Kasabondo town?");
                if(keycode == 122){
                    alert('Package 1167 bound for kasabondo via truck 14');
                }else{
                    alert('Wrong pass code');
                }
            }
            function planpickup(){
                loadpickups();
            }


        </script>
    </body>
</html>
