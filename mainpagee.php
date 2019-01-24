<?php
ob_start();
session_start();
require 'connect.php';

$search = $_GET['search'];
//$sub = $_GET['sub'];
$page = $_GET['page'];
$nextpage = ceil($page + 1);

$century = 860;//Mtush
// using id like this so that we can increment it will the 5 minute lapse
// wer are going to select all the items any single div will require
// then post them on the identical div id container
// items required img source, price, title, then formulate the button data-name, data-price
//for this page only get the lead image, follow up to details page query up the total 3 images
$jump = 0;
$items = 100;


$query2 = "SELECT * FROM `products` WHERE `category`='".mysql_real_escape_string($search)."' AND `availability`='1' AND `buyer`='0'";
$query_run2 = mysql_query($query2);
$query_num_rows2 = mysql_num_rows($query_run2);
$pagecount = $query_num_rows2 / $items;


//echo $query_num_rows2;

//$query_row = mysql_fetch_assoc($query_run);
//echo $query_row[imageone];
echo "
        <!doctype html>
<html>
    <title>Tiiva.co.ke | Mtumba | $search</title>
    <head>
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"bootstrapdist/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"final.css\">
        <link rel=\"stylesheet\" href=\"moded.css\">
        <link rel=\"stylesheet\" href=\"listfile.css\">
        <link rel=\"stylesheet\" href=\"productitems.css\">
        <script src=\"jquery.min.js\"></script>
        <script src=\"bootstrapdist/js/bootstrap.min.js\"></script>
        <script src=\"display.js\"></script>
        <script src=\"moded.js\"></script>
        <link rel=\"icon\" type=\"image/png\" href=\"icons/thaticon.png\">

            <style type=\"text/css\">
                #box1 {
                    border: 1px solid gainsboro;
                    padding: 2px;
                }
                #box1:hover {
                    box-shadow: 0px -1px 10px red;
                }
            </style>
    </head>
    <body>
        <div class=\"container-fluid\">
        <div class=\"row\" style=\"background-color:rgba(0,0,0,0.2)\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"row\" style=\"font-family:kok;padding-top:0.5%;padding-bottom:0.5%;\">
                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" id=\"boxtainer\"></div>

                    </div>
            </div>
        </div>

<!--            start of accounts div-->
            <div class=\"row\">
                <div class=\"col-lg-2 col-md-2 col-sm-12 col-xs-12\"><a href=\"index.php\"><img src=\"images/airmarklogotrial2.png\" class=\"img-responsive\"></a></div>
                <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
<!--                    margin top start-->
                    <div class=\"row\">
                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 visible-lg visible-md\" style=\"margin-top:3%;\"></div>
                    </div>
<!--                    margin top end -->
                    <div class=\"row\">
                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">

<!--                                   SIMPLE SEARCH START-->

                     <div class=\"row\" id=\"simplesearch\" style=\"display:block;visibility:visible;\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">

                    <form class=\"form-group-md\" id=\"search\" name=\"search\">
                    <div class=\"input-group col-lg-12\" style=\"font-family:kok;\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Search items here....\" name=\"search_text\" onkeyup=\"findmatch();\" style=\"border:none;box-shadow:none;border-radius:0;background-color:rgba(219, 219, 219, 0.35);\">
                        <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default disabled btn-md\" style=\"border:1px solid rgb(255, 186, 0);background-color:rgb(255, 186, 0);color:white;border-radius:0;\">Search</button>
                        </span>
                    </div>
                        </form>
                </div>
            </div>

            <div class=\"row simplesearchresults\" id=\"simplesearchresults\" style=\"\">
                <div class=\"col-lg-12 col-md-12 col-sm-11 col-xs-11 results\" id=\"results\"></div>
            </div>

<!--                    SIMPLE SEARCH END-->
                        </div>
                    </div>
                    <div class=\"row visible-lg visible-md\" style=\"cursor:pointer;\">
                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                            <a class=\"pull-right\" onclick=\"toggleadvancedsearch();\" style=\"text-decoration:none;font-family:kok;\">Advanced Search</a>
                        </div>
                    </div>
                </div>
<!--                <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 visible-lg visible-md\"></div>-->

                <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\" style=\"cursor:default;\">

                        <div class=\"row\">
                            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-6\">
                                <div class=\"visible-lg visible-md\" style=\"margin-top:31%;\"></div>
                                <!--                    cart new design-->
                    <div onclick=\"loadmodalcart();\">
                        <a><span class=\"glyphicon glyphicon-shopping-cart\" style=\"font-size:30px;color:#523CFA;\"></span><sup><span class=\"badge\" id=\"cartitems\" style=\"background-color:red;\">0</span></sup><small style=\"font-family:kok;\">&nbsp;Cart</small>&nbsp;<span class=\"caret\"></span></a>

                    </div>
<!--                    cart new design-->

                            </div>
                            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-6\">
                                                                        <div class=\"visible-lg visible-md\" style=\"margin-top:31%;\"></div>

                    <div class=\"dropdown\">
                            <a class=\" dropdown-toggle\" id=\"menu1\" data-toggle=\"dropdown\"><span class=\"glyphicon glyphicon-user\" style=\"font-size:30px;color:#523CFA;\"></span><small>&nbsp;User</small>
                            <span class=\"caret\"></span></a>

                            <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"menu1\">
                              <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Login</a></li>
                              <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">User Account</a></li>
                              <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Merchants</a></li>
                              <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Register</a></li>
                              <li role=\"presentation\" class=\"divider\"></li>
                              <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Blogs</a></li>
                            </ul>
                          </div>
                            </div>
                            <div class=\"col-lg-4 col-sm-4 col-xs-4 col-sm-4 visible-lg visible-md\" style=\"margin-top:0.1%;\">
                                <a class=\"text-capitalize\" style=\"color:black;text-decoration:none;\"><small>More about us?</small></a>
                                <div class=\"row\">
                                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                        <a href=\"Howto.php\" class=\"text-uppercase\"><small>FAQS</small></a>
                                    </div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                        <a href=\"aboutus.php\" class=\"text-uppercase\"><small>About us</small></a>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                        <a href=\"termsofuse.php\" class=\"text-uppercase\"><small>Store policy</small></a>
                                    </div>
                                </div>


                            </div>
                        </div>
                </div>

            </div>

<!--            end of accounts div-->

<!-- start of advanced search container -->
<div class=\"row\" id=\"AdvancedSearchContainer\" style=\"display:none;visibility:none;\">
    <div class=\"col-lgl-12 col-md-12 col-sm-12 col-xs-12\" style=\"display:block;visibility:visible;padding-top:10px;\">
        <form role=\"form\">
            <div class=\"col-lg-3\" style=\"font-family:kok;\">
                <label><small>Search Phrase</small></label>
                <input type=\"text\" placeholder=\"Search phrase eg. Bomber Jacket\" id=\"searchphrase\" class=\"form-control input-sm\"/>
            </div>
            <div class=\"col-lg-2\" style=\"font-family:kok;\">
                <label><small>Price min(Ksh)</small></label>
                <input type=\"number\" placeholder=\"0 Ksh\" value=\"10\" id=\"minprice\" min=\"10\" class=\"form-control input-sm\"/>
            </div>
            <div class=\"col-lg-2\" style=\"font-family:kok;\">
                <label><small>Price max(Ksh)</small></label>
                <input type=\"number\" placeholder=\"100000 Ksh\" max=\"1000000\" value=\"1000000\" id=\"maxprice\" min=\"10\" class=\"form-control input-sm\"/>
            </div>

            <div class=\"col-lg-2\" style=\"font-family:kok;\">
                <label><small>Tiiva Site: Shop/Shack</small></label>
                <select name=\"site\" id=\"site\" class=\"form-control input-sm\">
                    <option value=\"shop\">Tiiva Shop</option>
                    <option value=\"shack\">Tiiva Shack</option>

                </select>
            </div>

            <div class=\"col-lg-2\">
                <label style=\"font-family:kok;\"><small>Category To Search</small></label>
                <select name=\"category\" id=\"category\" class=\"form-control input-sm\">
                    <optgroup label=\"MTUMBA Categories\" id=\"Mtumbaid\">
                        <option disabled>Select one of the categories below</option>
                        <option value=\"sportswear\">Sportswear</option>
                        <option value=\"mens\">Men's Wears</option>
                        <option value=\"womens\">Women's Wears</option>
                        <option value=\"kids\">Kids' Wears</option>
                        <option value=\"interiors\">Household</option>
                        <option value=\"bags\">Bags</option>
                        <option value=\"shoes\">Shoes</option>
                        <option value=\"misc\">Misc</option>
                    </optgroup>

                    <optgroup label=\"SHOP Categories\" id=\"Shopid\">
                        <option value=\"electronics\">Electronics &amp; Computers</option>
                        <option value=\"entertainment\">Entertainment &amp; Education</option>
                        <option value=\"health\">Health &amp; Beauty</option>
                        <option value=\"jewerly\">Fashion &amp; Jewerly</option>
                        <option value=\"supermarket\">Supermarket</option>
                        <option value=\"outdoors\">Sports &amp; Outdoors</option>
                        <option value=\"handmade\">Handmade</option>
                        <option value=\"home\">Home, Garden &amp; Tools</option>
                        <option value=\"automotive\">Automotive, Industrial</option>

                    </optgroup>


                </select>
            </div>
            <div class=\"col-lg-1\">
                <label><small style=\"color:white;\">Se</small></label>
                <a class=\"btn btn-md btn-primary\" onclick=\"advancedsearch();\"><span class=\"glyphicon glyphicon-search\"> Search</span></a>
            </div>

        </form>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\"></div>
    <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
        <div class=\"row advancedresulsttainer\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" id=\"advancedresulst\">

            </div>
        </div>
    </div>
    <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\"></div>

</div>
<!-- end of advanced search container -->

            <div class=\"row\">
                <div class=\"col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 \" style=\"border-top:1px solid gainsboro;margin-top:5px;\">
                </div>
            </div>
            <div class=\"row\" style=\"font-family:kok;\">
                <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md\">
                    <div class=\"row visible-lg visible-md\" style=\"font-family:kok;\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"border-bottom:1px solid white;background-color:#00baff;margin-bottom:5px;\"><h5 class=\"text-uppercase\" style=\"font-weight:bold;color:white;\"><a href=\"item.html\" style=\"color:white;\" class=\"btn-block\">Mtumba | $search</a></h5></div>
                    </div>


                </div>
            </div>
                </div>
                <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 visible-lg visible-md\"></div>
                <div class=\"col-lg-8 col-md-8 col-sm-12 col-xs-12\">
                    <div class=\"row\">
                    <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4 mainpagelinks\"><a href=\"index.php\" style=\"text-decoration:none;\"><h3 style=\"padding:0px;margin:0px;\">Mtumba</h3></a></div>
                    <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4 mainpagelinks\"><a href=\"shop.php\" style=\"text-decoration:none;\"><h3 style=\"padding:0px;margin:0px;\">Shop</h3></a></div>
                    <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4 mainpagelinks\"><a href=\"blog.php\" style=\"text-decoration:none;\"><h3 style=\"padding:0px;margin:0px;\">Blogs</h3></a></div>
                    </div>
                </div>
            </div>



            <div class=\"row visible-sm visible-xs\" style=\"margin-top:5px;\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"border-bottom:2px solid orange;\">
                    <div class=\"row\">
                        <div class=\"col-lg-2 col-md-2 col-sm-12 col-xs-12\" style=\"border-bottom:1px solid white;background-color:black;margin-bottom:5px;\"><h4 class=\"text-center text-uppercase\" style=\"font-weight:bold;color:white;\"><a href=\"item.html\" style=\"color:white;\" class=\"btn-block\">$search</a></h4></div>
                    </div>


                </div>
                <div class=\"row hidden\">
                    <div class=\"col-lg-12 col-md-12 col-xs-12\">
                        <span id=\"sub\">$sub</span>
                    <span id=\"cat\">$search</span>
                    <span id=\"page\">$page</span>
                    </div>
                </div>
            </div>


<!--            starts here-->
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"padding:0px;\">
                    <div id=\"imagecarousel\" class=\"carousel slide\" data-interval=\"2000\" data-ride=\"carousel\">
                        <div class=\"carousel-inner\">

                            <ol class=\"carousel-indicators\">
    <li data-target=\"#imagecarousel\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#imagecarousel\" data-slide-to=\"1\"></li>
    <li data-target=\"#imagecarousel\" data-slide-to=\"2\"></li>
    <li data-target=\"#imagecarousel\" data-slide-to=\"3\"></li>
  </ol>

                            <div class=\"item active\">
                                    <img src=\"banners/mainpage/desert.png\" class=\"img-responsive\">
                                    <div class=\"carousel-caption\">
                                        <h3>Dressed for any occasion</h3>

                                        <p>#Tiiva #Mtumba The open air market is now open and live on Tiiva</p>
                                    </div>
                            </div>

                            <div class=\"item\">
                                    <img src=\"banners/mainpage/grass.png\" class=\"img-responsive\">
                                    <div class=\"carousel-caption\">
                                        <h3>For the Kids?</h3>
                                        <p>#Tiiva #Mtumba shopping for the kids? Yes! only on Tiiva #Mtumba</p>
                                    </div>
                            </div>

                            <div class=\"item\">
                                    <img src=\"banners/mainpage/jumpin.png\" class=\"img-responsive\">
                                    <div class=\"carousel-caption\">
                                        <h3>Gear for the outdoors, maybe chill clothes? or dress for the games?</h3>
                                        <p>#Tiiva #Mtumba Dress for the outdoors, look good, feel good. only on Tiiva #Mtumba</p>
                                    </div>
                            </div>

                            <div class=\"item\">
                                    <img src=\"banners/mainpage/morocco.png\" class=\"img-responsive\">
                                    <div class=\"carousel-caption\">
                                        <h3>Stand Out</h3>
                                        <p>#Tiiva Try us</p>
                                    </div>
                            </div>




                        </div>
                    </div>
                </div>
            </div>
<!--            ends here-->

            <div class=\"row visible-lg visible-md\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"padding:0px;margin-top:1%;\">
                    <a href=\"Mens.php\">
                        <img src=\"banners/mtumbanner.png\" class=\"img-responsive\"/>
                    </a>
                </div>
            </div>

<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
<div class=\"row\" id=\"spinner\">
    <div class=\"col-lg-4 col-md-4 col-sm-2 col-xs-2\"></div>
    <div class=\"col-lg-4 col-md-4 col-sm-8 col-xs-8\"><img src=\"icons/Preloader_1.gif\" class=\"img-responsive\"/></div>
    <div class=\"col-lg-4 col-md-4 col-sm-2 col-xs-2\"></div>
</div>
    <div class=\"row\" id=\"querycontents\"></div></div>

";

//$pagecount;
$loopscount = 1;
echo "  <div class=\"row\">
            <div class=\"col-lg-4 col-md-4 col-sm-2 col-xs-2\"></div>
            <div class=\"col-lg-4 col-md-4 col-sm-8 col-xs-8\">
                <ul class=\"pagination\">";

while($loopscount <= $pagecount){


        if($loopscount == $page){
            echo "<li class=\"active\"><a href=\"mainpagee.php?search=$search&sub=$sub&page=$loopscount\">$loopscount</a></li>";
        }else{
            echo "<li><a href=\"mainpagee.php?search=$search&sub=$sub&page=$loopscount\">$loopscount</a></li>";
        }
    $loopscount++;

}
echo "</ul>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-2 col-xs-2\"></div>
        </div>";

echo "
        <div class=\"row visible-lg visible-md\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"padding:0px;margin-top:1%;\">
                    <a href=\"Mens.php\">
                        <img src=\"banners/merchant.png\" class=\"img-responsive\"/>
                    </a>
                </div>
            </div>
    ";
?>

            <div class="row" id="box" style="margin-top:1%;"></div>

<!--            the footer starts here-->
            <div class="row" style="margin-top:20px;background-color:rgba(0,0,0,0.5);">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 visible-lg visible-md"><h4>Service</h4>
                                    <ul class="list-unstyled">
                                        <li><a style="color:black;" href="Howto.php">Online help</a></li>
                                        <li><a style="color:black;" href="Howto.php">Contact us</a></li>
                                        <li><a style="color:black;" href="Howto.php">Order status</a></li>
                                        <li><a style="color:black;" href="Howto.php">Change location</a></li>
                                        <li><a style="color:black;" href="Howto.php">FAQS</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6"><h4>Quick Shop</h4>
                                    <ul class="list-unstyled">
                                        <li><a style="color:black;" href="mainpage.php">Tshirts</a></li>
                                        <li><a style="color:black;" href="Mens.php">Mens</a></li>
                                        <li><a style="color:black;" href="women.php">Womens</a></li>
                                        <li><a style="color:black;" href="shop.php">Gift Cards</a></li>
                                        <li><a style="color:black;" href="shoes.php">Shoes</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 visible-lg visible-md"><h4>Policies</h4>
                                    <ul class="list-unstyled">
                                        <li><a style="color:black;" href="Termsofuse.php">Terms of use</a></li>
                                        <li><a style="color:black;" href="Termsofuse.php">Privacy policy</a></li>
                                        <li><a style="color:black;" href="Termsofuse.php">Refund policy</a></li>
                                        <li><a style="color:black;" href="Termsofuse.php">Billing System</a></li>
                                        <li><a style="color:black;" href="Termsofuse.php">Ticke System</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6"><h4>About shopper</h4>
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
                <div id="myBtn" style="border:1px solid black;background-color:rgba(0, 0, 0, 0.47);border:1px solid black;padding:5px;border-radius:50%;">

                        <span class="glyphicon glyphicon-chevron-up text-center" onclick="topFunction();" title="Go to top" style="font-size:300%;"></span>

                </div>

            </div>



        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                 <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
            </div>

        </div>


    <script type="text/javascript">
    function findprice(){
              if(window.XMLHttpRequest){
                    xmlhttp = new XMLHttpRequest();
                }else{
                    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp.onreadystatechange = function(){
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
                    document.getElementById('box').innerHTML= xmlhttp.responseText;

                    }
                    }
                    xmlhttp.open('GET','looper.php21',true);
                    xmlhttp.send();

            }
        window.onscroll = function() {scrollFunction()};
       $(document).ready(function(){
            //alert($("#sub").text());
            //alert($("#cat").text());
            $(document).scroll(function(){
               // alert('haiya');
            });
            function displayquery(){
                $("#spinner").fadeIn();
                var cat = $("#cat").text();
                var sub = $("#sub").text();
                var page = $("#page").text();
                var query = "search="+cat+"&sub="+sub+"&page="+page;
                $.ajax({
                    type: "GET",
                    data: query,
                    url: "mainpageehelper.php",
                    success: function(data){
                        $("#spinner").fadeOut();
                        $("#querycontents").html(data);
                    }
                })
            };
            displayquery();
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

    </script>
    </body>
</html>
