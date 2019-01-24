<?php
require 'connect.php';
$id = $_GET['blogspot'];
$query = "SELECT `id`, `title` ,`writter` ,`date` ,`views` ,`image`, `message`, `rating`, `tag1` , `tag2` , `tag3` FROM `blogs` WHERE `id`='".mysql_real_escape_string($id)."'";
$query_run = mysql_query($query);

$query_row = mysql_fetch_assoc($query_run);
//echo $query_row[message];

echo "

    <?php
ob_start();
session_start();
require \'search.inc.php\';
?>
<!DOCTYPE html>
<html>
<title>Tiiva | Blog</title>

<head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"bootstrapdist/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"final.css\">
        <script src=\"jquery.min.js\"></script>
        <script src=\"bootstrapdist/js/bootstrap.min.js\"></script>
        <script src=\"display.js\"></script>
        <script src=\"moded.js\"></script>
        <link rel=\"stylesheet\" href=\"MaterialDesign-Webfont-master/css/materialdesignicons.min.css\">
    <style type=\"text/css\">

    </style>

</head>
    <body onload=\"boxed();blog();\">
        <div class=\"container-fluid\">
        <div class=\"row\" style=\"background-color:rgba(0,0,0,0.2)\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"row\" style=\"font-family:kok;padding-top:0.5%;padding-bottom:0.5%;\">
                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" id=\"boxtit\"></div>

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
                <div class=\"col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 \" style=\"margin-top:10px; border-top:1px solid gainsboro;\">
                    <div class=\"row\" style=\"margin-top:10px;\">
                        <div class=\"col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-4 col-xs-4\"><p class=\"text-uppercase text-center\"><a href=\"index.php\">Home</a></p></div>
                        <div class=\"col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-4 col-xs-4\"><p class=\"text-uppercase text-center\"><a href=\"shop.php\">Shop</a></p></div>
                        <div class=\"col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-4 col-xs-4\"><p class=\"text-uppercase text-center\"><a href=\"blog.php\">Blog</a></p></div>
                    </div>
                </div>
            </div>

            <div class=\"row visible-lg visible-md\">
                <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md\"></div>
                <div class=\"col-lg-10 col-md-10 col-sm-12 col-xs-12\" style=\"margin-top:20px;\"><h3 class=\"text-center text-uppercase\" style=\"color:orange; text-shadow:1px 1px 3px black; font-family:kokila; font-size:39px;border-right:2px solid gainsboro;\">latest from our blog</h3></div>
            </div>

            <div class=\"row visible-sm visible-xs\">
                <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md\"></div>
                <div class=\"col-lg-10 col-md-10 col-sm-12 col-xs-12\" style=\"margin-top:5px;\"><h3 class=\"text-center text-uppercase\" style=\"color:orange; text-shadow:1px 1px 3px black; font-family:kokila; font-size:39px;border-right:2px solid gainsboro;\">latest from our blog</h3></div>
            </div>


            <div class=\"row\">
                <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2\">
                    <div class=\"row visible-lg visible-md\">
                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\"><h4 class=\"text-center text-uppercase\" style=\"color:orange; font-family:kokila; font-size:24px;\">Category</h4>
                            <ul class=\"list-group\">
                                <a href=\"women.php\" class=\"list-group-item text-center\">Womens</a>
                                <a href=\"sportswear.php\" class=\"list-group-item text-center\">Sportswear</a>
                                <a href=\"Mens.php\" class=\"list-group-item text-center\">Mens</a>
                                <a href=\"kids.php\" class=\"list-group-item text-center\">Kids</a>
                                <a href=\"household.php\" class=\"list-group-item text-center\">Household</a>
                                <a href=\"household.php\" class=\"list-group-item text-center\">Interiors</a>
                                <a href=\"bag.php\" class=\"list-group-item text-center\">Bags</a>
                                <a href=\"shoes.php\" class=\"list-group-item text-center\">Shoes</a>
                                <a href=\"misc.php\" class=\"list-group-item text-center\">Misc</a>
                            </ul>
                        </div>
                    </div>
                </div>

    ";
$next = $id + 1;
$prev = $id - 1;

if ($prev == 0){
    $prev = 1;
}else{
    $prev = $id - 1;
}
echo "

        <div class=\"col-lg-10 col-md-10 col-sm-12 col-xs-12\">
                    <div class=\"row\">
                        <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 visible-lg visible-md\"></div>
                        <div class=\"col-lg-11 col-md-11 col-sm-12 col-xs-12\">
                            <div class=\"row visible-lg visible-md\">
                                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\"><h3 class=\"text-capitalize\" style=\"margin-top:10px; color:gray;font-family:kok\">$query_row[title]</h3></div>
                            </div>

                            <div class=\"row visible-sm visible-xs\">
                                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\"><h3 class=\"text-capitalize text-center\" style=\"margin-top:10px; color:gray;font-family:kok\">$query_row[title]</h3></div>
                            </div>


                            <div class=\"row\">
                                <div class=\"col-lg-10 col-md-10 col-sm-12 col-xs-12\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-6\">
                                            <div class=\"row\">
                                                <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2 visible-lg visible-md\"><h5><span class=\"glyphicon glyphicon-fire\"></span></h5></div>
                                                <div class=\"col-lg-10 col-md-10 col-sm-12 col-xs-12\"><h5 class='text-left text-capitalize'>Author: $query_row[writter]</h5></div>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-6\">
                                            <div class=\"row\">
                                                <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 visible-lg visible-md\">
                                                    <h5><span class=\"glyphicon glyphicon-time\"></span></h5>
                                                </div>
                                                <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-10\">
                                                    <h5 class=\"visible-lg visible-md\">Up: $query_row[date]</h5>
                                                    <h5 class=\"visible-sm visible-xs text-right\">Up: $query_row[date]</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-4 col-md-4 col-sm-4 colxs-4\"></div>
                                    </div>
                                </div>
                                <div class=\"col-lg-2 col-md-2 col-sm-2 col-sm-2 visible-lg visible-md\">
                                        <h5>
                                            <span class=\"glyphicon glyphicon-star\" style=\"color:orange;\"></span>
                                            <span class=\"glyphicon glyphicon-star\" style=\"color:orange;\"></span>
                                            <span class=\"glyphicon glyphicon-star\" style=\"color:orange;\"></span>
                                            <span class=\"glyphicon glyphicon-star\" style=\"color:orange;\"></span>
                                            <span class=\"glyphicon glyphicon-star\" style=\"color:black;\"></span>

                                        </h5>

                                </div>

                                <div class=\"col-lg-2 col-md-2 col-sm-2 col-sm-2 visible-sm visible-xs\">
                                        <h5 class=\"text-center\">Rating:
                                            <span class=\"glyphicon glyphicon-star\" style=\"color:orange;\"></span>
                                            <span class=\"glyphicon glyphicon-star\" style=\"color:orange;\"></span>
                                            <span class=\"glyphicon glyphicon-star\" style=\"color:orange;\"></span>
                                            <span class=\"glyphicon glyphicon-star\" style=\"color:orange;\"></span>
                                            <span class=\"glyphicon glyphicon-star\" style=\"color:black;\"></span>

                                        </h5>

                                </div>



                            </div>
<!--                            the banner in the blog-->
                            <div class=\"row visible-lg visible-md\">
                                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                    <div id=\"bannersth\" style=\"background-image:url($query_row[image]); height:300px;background-size:100%;border:1px solid blue;\"></div>
                                </div>
                            </div>

                            <div class=\"row visible-sm visible-xs\">
                                <img src=\"$query_row[image]\" class=\"img-responsive\"/>
                            </div>


                            <div class=\"row\">
                                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"margin-top:10px;\">
                                    <p class=\"text-left\">$query_row[message]</p>
                                </div>

                            </div>
                            <div class=\"row\" style=\"margin-top:20px;\">
                                <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-10 visible-lg visible-md\"></div>
                                <div class=\"col-lg-2 col-md-2 col-sm-12 col-xs-12\">
                                    <div class=\"btn-toolbar\">
                                            <div class=\"btn-group btn-group-md\">
                                                <a href=\"blogsingle.php?blogspot=$prev\" class=\"btn btn-info\">Prev</a>
                                                <a href=\"blogsingle.php?blogspot=$next\" class=\"btn btn-success\">Next</a>
                                            </div>
                                    </div>
                                </div>

                            </div>
                            <div class=\"row\" style=\"margin-top:20px;\">
                                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                    <div class=\"row\" style=\"border:1px solid gainsboro;margin-bottom:20px;\">
                                        <div class=\"col-lg-4 col-md-4 col-sm-9 col-xs-9\">
                                            <div class=\"row\">
                                                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                                                    <p class=\"text-right\"><strong>Rate this item:</strong></p>
                                                </div>
                                                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right\">
                                                    <span class=\"glyphicon glyphicon-star\" style=\"color:orange\"></span>
                                                    <span class=\"glyphicon glyphicon-star\" style=\"color:orange\"></span>
                                                    <span class=\"glyphicon glyphicon-star\" style=\"color:orange\"></span>
                                                    <span class=\"glyphicon glyphicon-star\" style=\"color:orange\"></span>
                                                    <span class=\"glyphicon glyphicon-star\" style=\"color:black\"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\">                                                    <p style=\"color:orange;\">($query_row[rating] votes)</p>
</div>
                                        <div class=\"col-lg-5 col-md-5 col-sm-12 col-xs-12\">
                                            <p class=\"text-uppercase text-right\">Tag: <a href=\"$query_row[tag1].php\" style=\"color:orange;\">$query_row[tag1]</a> / <a href=\"$query_row[tag2].php\" style=\"color:orange;\">$query_row[tag2]</a> / <a href=\"$query_row[tag3].php\" style=\"color:orange;\">$query_row[tag3]</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>


    ";
echo "
        </div>
<!--            footer start here-->
         <div class=\"row\" style=\"margin-top:20px;background-color:rgba(0,0,0,0.5);\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"row\">
                        <div class=\"col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-12 col-xs-12\">
                            <div class=\"row\">
                                <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-6\"><h4>Service</h4>
                                    <ul class=\"list-unstyled\">
                                        <li><a style=\"color:black;\" href=\"howto.php\">Online help</a></li>
                                        <li><a style=\"color:black;\" href=\"howto.php\">Contact us</a></li>
                                        <li><a style=\"color:black;\" href=\"howto.php\">Order status</a></li>
                                        <li><a style=\"color:black;\" href=\"howto.php\">Change location</a></li>
                                        <li><a style=\"color:black;\" href=\"howto.php\">FAQS</a></li>
                                    </ul>
                                </div>
                                <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-6\"><h4>Quick Shop</h4>
                                    <ul class=\"list-unstyled\">
                                        <li><a style=\"color:black;\" href=\"mainpage.php\">Tshirts</a></li>
                                        <li><a style=\"color:black;\" href=\"men.php\">Mens</a></li>
                                        <li><a style=\"color:black;\" href=\"women.php\">Womens</a></li>
                                        <li><a style=\"color:black;\" href=\"shop.php\">Gift Cards</a></li>
                                        <li><a style=\"color:black;\" href=\"shoes.php\">Shoes</a></li>
                                    </ul>
                                </div>
                                <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3 visible-lg visible-md\"><h4>Policies</h4>
                                    <ul class=\"list-unstyled\">
                                        <li><a style=\"color:black;\" href=\"Termsofuse.php\">Terms of use</a></li>
                                        <li><a style=\"color:black;\" href=\"Termsofuse.php\">Privacy policy</a></li>
                                        <li><a style=\"color:black;\" href=\"Termsofuse.php\">Refund policy</a></li>
                                        <li><a style=\"color:black;\" href=\"Termsofuse.php\">Billing System</a></li>
                                        <li><a style=\"color:black;\" href=\"Termsofuse.php\">Ticke System</a></li>
                                    </ul>
                                </div>
                                <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3 visible-lg visible-md\"><h4>About shopper</h4>
                                    <ul class=\"list-unstyled\">
                                        <li><a style=\"color:black;\" href=\"aboutus.php\">Company information</a></li>
                                        <li><a style=\"color:black;\" href=\"aboutus.php\">Careers</a></li>
                                        <li><a style=\"color:black;\" href=\"aboutus.php\">Store location</a></li>
                                        <li><a style=\"color:black;\" href=\"aboutus.php\">Affiliate Program</a></li>
                                        <li><a style=\"color:black;\" href=\"aboutus.php\">Copyright</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
                            <div class=\"row\">
                                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\"><h4 class=\"text-center\">About shopper</h4></div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                    <form class=\"form-inline\">
                                        <div class=\"input-group\" style=\"font-family:kok;\">
                                        <input type=\"email\" class=\"form-control\" placeholder=\"Email address\" name=\"user's email\">
                                        <span class=\"input-group-btn\">
                                            <button type=\"button\" class=\"btn btn-default\">Go</button>
                                        </span>
                                        </div>
                                    </form>

                                    <div class=\"row\" style=\"margin-top:5px;\">
                                    <div class=\"col-lg-9 col-lg-offset-1 col-md-9 col-md-offset-1 col-sm-9 col-sm-offset-1 col-xs-9 col-xs-offset-1\">
                                        <p class=\"text-center\"><em>Get the most recent updates from out site and be updated yourself</em></p>
                                    </div>
                                </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\"><p class=\"text-center text-capitalize\">A WN creation Copyright &#169 Airmark Inc.</p></div>
            </div>

        </div>

    </body>
</html>

    ";

?>
