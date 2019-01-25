<?php
ob_start();
session_start();
require 'connect.php';
require 'core.inc.php';

if(isset($_SESSION['$user_id'])){
    $buyer = $_SESSION['$user_id'];
    $none = 0;
    $cookiename =  md5($_SESSION['$user_id'].'cooksieairmark');

}

$century = 860;
$id = $_GET['id'];


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

$description = "This is some shit placed here wooo i really hope it daent show up";


if($query_row['category'] != 'wallart' && $query_row['category'] != 'labels' ){
    $message = "Remember, these are second hand clothes \"Mtush\" we ensure that items you purchase reach up to our standards.Check the item description to look throught the items dimensions.";

}elseif ($query_row['category'] == 'wallart'){
    $message = "This is an original new item by $sellerid, We at Airmark appreciate art.Remember to check the item description above to look through the specifics.";
}else {
    $message = "We at Airmark support designers from Kenya and all over. The items above are brand new from both international and local designers.Remember to look through the items description.";
}

// \"$query_row[imageone]\";
echo "
        <!DOCTYPE html>
<html>
<title>tiiva.co.ke | $query_row[itemtitle]</title>

<head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"bootstrapdist/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"final.css\">
        <link rel=\"stylesheet\" href=\"moded.css\">
        <link rel=\"stylesheet\" href=\"productitems.css\">
        <link rel=\"stylesheet\" href=\"listfile.css\">
        <link rel=\"stylesheet\" href=\"modalimage.css\">
        <script src=\"jquery.min.js\"></script>
        <script src=\"bootstrapdist/js/bootstrap.min.js\"></script>
        <script src=\"display.js\"></script>
        <script src=\"moded.js\"></script>
        <link rel=\"stylesheet\" href=\"MaterialDesign-Webfont-master/css/materialdesignicons.min.css\">
        <link rel=\"icon\" type=\"image/png\" href=\"icons/thaticon.png\">

    <style type=\"text/css\">

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
    <body onload=\"boxed();wishlistcount();showwishlistitems();updateview();bookitem();checkitemstat\" onunload=\"unbookitem();\">
        <div class=\"container-fluid\">
        <div class=\"row\" style=\"background-color:rgba(0,0,0,0.2)\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"row\" style=\"font-family:kok;padding-top:0.5%;padding-bottom:0.5%;\">
                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" id=\"boxtit\"></div>

                    </div>
            </div>
        </div>
            <div class=\"row\" id=\"modalcartbox\" style=\"visibility:hidden;display:none;\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"background-color:rgba(0, 0, 0, 0.74);z-index:13;position:fixed;width:100%;left:0;top:0;overflow:auto;height:100%;\">
                    <a class=\"closemodalcart\" onclick=\"hidemodal();\" style=\"color:#aaa;float:right;font-size:58px;font-weight:bold;cursor:pointer;\">&times;</a>
                    <div class=\"cartmodal\" style=\"background-color:#fefefe;margin:10% auto;padding:20px;border:1px solid #888;width:60%;\">

                        <div id=\"cartmodalcontents\" style=\"clear:both;\">The contents are here yohme that the education the school system provides will prepare your children for the world
they will face upon graduation. Each child needs more education. Different education. And they
need to know the rules. The different sets of rules.”
“There are rules of money that the rich play by, and there are the rules that the other 95
percent of the population plays by,” he said. “And the 95 percent learns those rules at home
and in school. That is why it's risky today to simply say to a child, `Study hard and look for a job.'
A child today needs a more sophisticated education, and the current system is not delivering the
goods. I don't care how many computers they put in the classroom or how much money schools
spend. How can the education system teach a subject that it does not know?”
So how does a parent teach their children, what the school does not? How do you teach
accounting to a child? Won't they get bored? And how do you teach investing when as a parent
you yourself are risk averse? Instead of teaching my children to simply play it safe, I decided it
was best to teach them to play it smart.
“So how would you teach a child about money and all the things we've talked about?” I asked
Robert. “How can we make it easy for parents especially when they don't understand it
themselves?”</div>
                    </div>
                </div>
            </div>

<!--            start of accounts div-->
            <div class=\"row\">
                <div class=\"col-lg-2 col-md-2 col-sm-12 col-xs-12\"><img src=\"images/airmarklogotrial2.png\" class=\"img-responsive\"></div>
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
                                        <a href=\"Howto.php\" class=\"text-uppercase\"><small>About us</small></a>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                        <a href=\"Howto.php\" class=\"text-uppercase\"><small>Store policy</small></a>
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
                <div class=\"col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1\" style=\"border-top:1px solid gainsboro;\">
                    <div class=\"row\">
                        <div class=\"col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-4 col-xs-4\"><p class=\"text-uppercase text-center\"><a href=\"index.php\"><span class=\"glyphicon glyphicon-home\"></span>Home</a></p></div>
                        <div class=\"col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-4 col-xs-4\"><p class=\"text-uppercase text-center\"><a href=\"shop.php\">Shop</a></p></div>
                        <div class=\"col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-4 col-xs-4\"><p class=\"text-uppercase text-center\"><a href=\"blog.html\">Blog</a></p></div>
                    </div>
                </div>

            </div>
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <p id=\"itemstat\" class=\"text-center\"></p>
                    <p id=\"buttonz\" class=\"text-center\"></p>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"border-top:1px solid gainsboro;\"></div>
            </div>
            <div class=\"row pull-right\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"padding-top:3px;\"><span class=\"glyphicon glyphicon-eye-open\" style=\"color:#adadad;\"></span>&nbsp;<span id=\"anotherone\">Hi</span> View(s)</div>
            </div>

<!--            STOP HERE SERIOUSLY STOP RIGHT HERE-->

        <!--THIS CATEGORY START HERE SO TAKE CARE TO REMEMBER-->
           <div class=\"row\" style=\"margin-top:5px;\">
            <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                <a href=\"index.php\">Home</a> <span class=\"glyphicon glyphicon-chevron-right\" style=\"color:#bebebe;\"></span> <a href=\"index.php\">Mtumba</a> <span class=\"glyphicon glyphicon-chevron-right\" style=\"color:#bebebe;\"></span> <a href=\"$query_row[category].php\">$query_row[category]</a> <span class=\"glyphicon glyphicon-chevron-right\" style=\"color:#bebebe;\"></span> <a href=\"#\" style=\"color:black\">$query_row[itemtitle]</a>
            </div>


            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 visible-lg visible-md\"></div>
           </div>
           <div class=\"row visible-sm visible-xs\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <h4 class=\"text-uppercase text-center\" style=\"font-family:kok;\">$query_row[itemtitle]</h4>

                </div>
            </div>
            <div class=\"row visible-lg visible-md\" style=\"margin-top:1%;\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\"></div>
            </div>
            <div class=\"row\">
<!--                images container first row and the second-->
                <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"row\">
                                <div class=\" col-lg-3 col-md-3 col-sm-3 col-xs-3 visible-lg visible-md\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"margin-bottom:10%;\">


                            <div id=\"modalimagecontainer\">
                                <img id=\"myImg\" src=\"mtumbauploads/$query_row[imageone]\" alt=\"$query_row[itemtitle] $description\" class=\"modpic img-responsive\">
                                <span class=\"glass glyphicon glyphicon-search\"></span>

                                <!-- The Modal -->
                                <div id=\"myModalT\" class=\"modal\">
                                  <span id=\"closeT\" class=\"close\">&times;</span>
                                  <img class=\"modal-content\" id=\"img01\">
                                  <div id=\"caption\"></div>
                                </div>

                                <script>
                                // Get the modal
                                var modal = document.getElementById('myModalT');

                                // Get the image and insert it inside the modal - use its \"alt\" text as a caption
                                var img = document.getElementById('myImg');
                                var modalImg = document.getElementById(\"img01\");
                                var captionText = document.getElementById(\"caption\");
                                img.onclick = function(){
                                    modal.style.display = \"block\";
                                    modalImg.src = this.src;
                                    modalImg.alt = this.alt;
                                    captionText.innerHTML = this.alt;
                                }

                                // Get the <span> element that closes the modal
                                //var span = document.getElementsByClassName(\"close\")[0];
                                var span = document.getElementById(\"closeT\");

                                // When the user clicks on <span> (x), close the modal
                                span.onclick = function() {
                                //alert(\"Works\");
                                    modal.style.display = \"none\";
                                }

                                </script>
                            </div>

                                        </div>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"margin-bottom:10%;\">

                                            <div id=\"modalimagecontainer2\">
                                <img id=\"myImg2\" src=\"mtumbauploads/$query_row[imagetwo]\" alt=\"$query_row[itemtitle] $description\" class=\"modpic img-responsive\">
                                <span class=\"glass glyphicon glyphicon-search\"></span>

                                <!-- The Modal -->
                                <div id=\"myModal2\" class=\"modal\">
                                  <span id=\"close2\" class=\"close\">&times;</span>
                                  <img class=\"modal-content\" id=\"img012\">
                                  <div id=\"caption2\">T</div>
                                </div>

                                <script>
                                // Get the modal
                                var modal2 = document.getElementById('myModal2');

                                // Get the image and insert it inside the modal - use its \"alt\" text as a caption
                                var img2 = document.getElementById('myImg2');
                                var modalImg2 = document.getElementById(\"img012\");
                                var captionText2 = document.getElementById(\"caption2\");
                                img2.onclick = function(){
                                    modal2.style.display = \"block\";
                                    modalImg2.src = this.src;
                                    modalImg2.alt = this.alt;
                                    captionText2.innerHTML = this.alt;
                                }

                                // Get the <span> element that closes the modal
                                //var span = document.getElementsByClassName(\"close\")[0];
                                var span2 = document.getElementById(\"close2\");

                                // When the user clicks on <span> (x), close the modal
                                span2.onclick = function() {
                                //alert(\"Works\");
                                    modal2.style.display = \"none\";
                                }

                                </script>
                            </div>

                                        </div>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">

                                            <div id=\"modalimagecontainer3\">
                                <img id=\"myImg3\" src=\"mtumbauploads/$query_row[imagethree]\" alt=\"$query_row[itemtitle] $description\" class=\"modpic img-responsive\">
                                <span class=\"glass glyphicon glyphicon-search\"></span>

                                <!-- The Modal -->
                                <div id=\"myModal3\" class=\"modal\">
                                  <span id=\"close3\" class=\"close\">&times;</span>
                                  <img class=\"modal-content\" id=\"img013\">
                                  <div id=\"caption3\">T</div>
                                </div>

                                <script>
                                // Get the modal
                                var modal3 = document.getElementById('myModal3');

                                // Get the image and insert it inside the modal - use its \"alt\" text as a caption
                                var img3 = document.getElementById('myImg3');
                                var modalImg3 = document.getElementById(\"img013\");
                                var captionText3 = document.getElementById(\"caption3\");
                                img3.onclick = function(){
                                    modal3.style.display = \"block\";
                                    modalImg3.src = this.src;
                                    modalImg3.alt = this.alt;
                                    captionText3.innerHTML = this.alt;
                                }

                                // Get the <span> element that closes the modal
                                //var span = document.getElementsByClassName(\"close\")[0];
                                var span3 = document.getElementById(\"close3\");

                                // When the user clicks on <span> (x), close the modal
                                span3.onclick = function() {
                                //alert(\"Works\");
                                    modal3.style.display = \"none\";
                                }

                                </script>
                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div class=\"col-lg-9 col-md-9 col-sm-12 col-xs-12\">

<!--            starts here-->
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div id=\"imagecarousel\" class=\"carousel slide\" data-interval=\"3000\" data-ride=\"carousel\">
                        <div class=\"carousel-inner\">

                            <div class=\"item active\">
                                    <img src=\"mtumbauploads/$query_row[imageone]\" class=\"img-responsive productslideimages\">
                                    <div class=\"carousel-caption\">
                                        <h3>Image One</h3>
                                        <p>This is the first image in the carousel</p>
                                    </div>
                            </div>

                            <div class=\"item\">
                                    <img src=\"mtumbauploads/$query_row[imagetwo]\" class=\"img-responsive productslideimages\">
                                    <div class=\"carousel-caption\">
                                        <h3>Image two</h3>
                                        <p>This is the second image in the carousel</p>
                                    </div>
                            </div>

                            <div class=\"item\">
                                    <img src=\"mtumbauploads/$query_row[imagethree]\" class=\"img-responsive productslideimages\">
                                    <div class=\"carousel-caption\">
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
                            <div class=\"row\">
                                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 visible-lg visible-md\" style=\"margin-top:2%;\"></div>
                            </div>

                            <div class=\"row visible-lg visible-md\">
                                <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1\"></div>
                                <div class=\"col-lg-11 col-md-11 col-sm-11 col-xs-11\" style=\"background-color:#EEEEEE;\">
                                    <h5 style=\"font-family:kok;\">Tiiva 411&nbsp;<span class=\"glyphicon glyphicon-exclamation-sign\" style=\"color:lime\"></span></h5>
                                    <p style=\"color:red;\"><small>$message</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<!--                the prices box container-->

                    <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                        <div class=\"row\">
                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                <div class=\"row\">
                                    <div class=\"col-lg-7 col-md-7 col-sm-12 col-xs-12\" style=\"background-color:rgba(238, 238, 238, 0.77);\">
                                    <!--item title container-->
                                        <div class=\"row visible-lg visible-md\">
                                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                                <h4 class=\"text-uppercase\" style=\"font-family:kok;color:black;\"><strong>$query_row[itemtitle]</strong></h4>

                                            </div>
                                        </div>
                                        <!-- item title container-->
                                        <!-- item star rating and seller container-->
                                        <div class=\"row\">
                                            <div class=\"col-lg-5 col-md-5 col-sm-6 col-xs-6\">
                                            <h5>
                                                <span class=\"glyphicon glyphicon-star\" style=\"color:orange;\"></span>
                                                <span class=\"glyphicon glyphicon-star\" style=\"color:orange;\"></span>
                                                <span class=\"glyphicon glyphicon-star\" style=\"color:orange;\"></span>
                                                <span class=\"glyphicon glyphicon-star\" style=\"color:orange;\"></span>
                                                <span class=\"glyphicon glyphicon-star\" style=\"color:orange;\"></span>
                                            </h5>
                                        </div>

                                        <div class=\"col-lg-7 col-md-7 col-sm-6 col-xs-6\">

                                            <h5 class=\"text-capitalize\">Item sold by: <a>$query_row[sellerid]</a></h5>
                                        </div>
                                        </div>
                                        <!-- item star rating container-->
                                        <!-- item description price buttons container-->
                                        <div class=\"row\">
                                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"border-top:1px solid gainsboro;\"></div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\"><h5 class=\"text-uppercase\" style=\"color:black;\"><strong>Item description</strong></h5></div>
                                            <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\"></div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"margin-top:5;border-bottom:1px solid gainsboro;color:black;\"><p>$description</p></div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2\" style=\"color:black;\">
                                                <h3 class=\"text-left text-uppercase\" style=\"font-size:100%;font-weight:strong;\">Price</h3>
                                            </div>
                                            <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2\"></div>
                                            <div class=\"col-lg-5 col-md-5 col-sm-10 col-xs-10\">
                                                <h2 class=\"text-left\" style=\"color:orange;font-family:kok;border-bottom:1px solid gainsboro;\">&nbsp;$query_row[price] Ksh</h2>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                                                <a class=\"btn btn-block btn-primary btn-lg\" onclick=\"addnewitem();\" id=\"addtocartbutton\">Add to cart</a>
                                            </div>
                                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                                                <a class=\"btn btn-block btn-danger btn-lg\" onclick=\"removenewitem();\" id=\"removefromcartbutton\"><small>Remove from cart</small></a>
                                            </div>
                                        </div>

                                        <div class=\"row\">
                                            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\"></div>
                                            <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2\" style=\"margin-top:2%;\">
                                            <span class=\"glyphicon glyphicon-heart-empty\" style=\"color:red;font-size:200%;\" onclick=\"wishlistbutton();\" onmouseover=\"wishlistpredict();\" id=\"wishlistbutton\"></span>

                                            </div>
                                            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\"><p id=\"wishlistmessage\" style=\"margin-top:2%;\">Add to wishlist</p></div>
                                            <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2\"></div>
                                        </div>


                                        <div class=\"row\">
                                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                                <p>Shipped by <a href=\"#\">Tiiva</a></p>
                                            </div>
                                        </div>

                                        <div class=\"row\">
                                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                            <div class=\"row\">
                                                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 social\" style=\"margin-top:1%;\"><h5 style=\"display:inline;font-family:kok;\" class=\"text-capitalize\">Share, like and chat us up on </h5>
                                                    <a href=\"www.facebook.com/Tiiva\"><span class=\"mdi mdi-facebook mdi-24px\" style=\"color:blue;margin-right:1%;\"></span></a>
                                                    <a href=\"www.twitter.com/tiiva\"><span class=\"mdi mdi-twitter mdi-24px\" style=\"color:blue;margin-right:1%;\"></span></a>
                                                    <a href=\"www.googleplus.com/tiiva\"><span class=\"mdi mdi-google-plus mdi-24px\" style=\"color:red;margin-right:1%;\"></span></a>
                                                    <a href=\"www.instagram.com/tiiva\"><span class=\"mdi mdi-instagram mdi-24px\" style=\"color:black;margin-right:1%;\"></span></a>
                                                    <a href=\"www.youtube.com/tiiva\"><span class=\"mdi mdi-youtube-play mdi-24px\" style=\"color:red;margin-right:1%;\"></span></a>

                                                    <script>
                                                        $(document).ready(function(){
                                                            $(\"div>a>span\").hover(function(){
                                                                $(this).toggleClass(\"mdi-spin\");
                                                            });
                                                        });
                                                    </script>

                                                </div>
                                            </div>
                                            </div>
                                        </div>

                                        <div class=\"row visible-sm visible-xs\">
                                <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1\"></div>
                                <div class=\"col-lg-10 col-md-10 col-sm-12 col-xs-12\" style=\"background-color:#EEEEEE;\">
                                    <h5 style=\"font-family:kok;\">Tiiva 411&nbsp;<span class=\"glyphicon glyphicon-exclamation-sign\" style=\"color:lime\"></span></h5>
                                    <p style=\"color:red;\"><small>$message</small></p>
                                </div>
                            </div>

                                    </div>
                                    <!-- item description price buttons container-->

                                    <div class=\"col-lg-5 col-md-5 col-sm-12 col-xs-12\">
                                    <div class=\"row visible-lg visible-md\" style=\"margin-top:30%;\">
                                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\"></div>
                                    </div>
                                        <div class=\"row\">
                                            <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1\"></div>
                                            <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-10\" style=\"border:1px solid rgb(0, 186, 255);\">
                                                <div class=\"row\">
                                                <!-- mtush offers to the right-->
                                                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"background-color:rgb(0, 186, 255);color:white;\"><h4 class=\"text-center text-uppercase\">Our promises</h4></div>
                                                </div>

                                                <div class=\"row\" style=\"margin-top:2%;\">
                                                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                                        <p><span class=\"glyphicon glyphicon-time\" style=\"color:gainsboro;\"></span> Delivery in 3 - 5 working days</p>
                                                        <p><span class=\"glyphicon glyphicon-refresh\" style=\"color:rgba(0, 98, 255, 0.86);\"></span> 1 day return policy</p>
                                                        <p><span class=\"glyphicon glyphicon-heart\" style=\"color:red;\"></span> Best prices ever</p>
                                                        <p><span class=\"glyphicon glyphicon-gift\" style=\"color:purple;\"></span> Variety, a huge one</p>
                                                        <p><span class=\"glyphicon glyphicon-home\" style=\"color:gainsboro;\"></span> Shipping to your doorstep</p>

                                                        <p><span class=\"glyphicon glyphicon-heart\" style=\"color:red;\"></span> A <a href=\"#\">smile</a> with every delivery</p>

                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                                        <p id=\"newcartitems\"></p>
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
            <div class=\"row\" style=\"margin-top:10px;\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"border:1px solid black;background-color:black;color:white;\">
                            <h5 class=\"text-center text-uppercase\">Other items you might like</h5>
                        </div>
                    </div>


";
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

    echo "
   <div class=\"col-lg-2 col-md-2 col-sm-6 col-xs-6\" id=\"box1\">
   <div class=\"row\" style=\"padding:4px;\">
    <a href=\"productdetails.php?id=$query_row[id]\" target=\"_blank\"><div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 productimage\" style=\"background-image:url('mtumbauploads/compresseduploads/$query_row[imageone]'); height:140px;width:100%;background-size:80%;\">
       
    </div>
    </a>
    </hr>
    <p class=\"text-capitalize\" style=\"margin:0px;padding:0px;\">$query_row[label]</p>
    <hr style=\"margin:0px;padding:0px;\">
    <h1 class=\"text-center text-capitalize\" style=\"font-family:kok;padding:0px;margin:0px;color:#606060;font-size:100%;\"><strong>$query_row[itemtitle]</strong></h1>
    <h2 class=\"text-left\" style=\"padding:0px;margin:0px;color:#ffa427;font-size:100%;\">Ksh $price</h2>

    <!--<div class=\"row\">
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <p class=\"text-center\">$price Ksh</p>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <p class=\"text-center\" style=\"font-family:kok;\">$query_row[itemtitle]</p>
        </div>
    </div>-->
   <!-- <div class=\"row visible-lg visible-md\">
        <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1\"></div>
        <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-10\">
            <a href=\"productdetails.php?id=$query_row[id]\" class=\"btn btn-block btn-primary\" data-name=\"$query_row[itemtitle]\" data-price=\"$price\" target=\"_blank\">Add to Cart</a>
        </div>
        <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1\"></div>
    </div>

    <div class=\"row visible-sm visible-xs\">
        <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\"></div>
        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
            <a href=\"productdetails.php?id=$id\" class=\"btn btn-sm btn-block btn-primary\" data-name=\"$query_row[itemtitle]\" data-price=\"$price\" target=\"_blank\">Add to Cart</a>
        </div>
        <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\"></div>
    </div>-->


   </div>
   </div>
   ";
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

       echo "
     <div class=\"col-lg-2 col-md-2 col-sm-6 col-xs-6\" id=\"box1\">
     <div class=\"row\" style=\"padding:4px;\">
       <a href=\"productdetails.php?id=$query_row[id]\" target=\"_blank\"><div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 productimage\" style=\"background-image:url('mtumbauploads/compresseduploads/$query_row[imageone]'); height:140px;width:100%;background-size:80%;\">
          
       </div>
       </a>
       </hr>
       <p class=\"text-capitalize\" style=\"margin:0px;padding:0px;\">$query_row[label]</p>
       <hr style=\"margin:0px;padding:0px;\">
       <h1 class=\"text-center text-capitalize\" style=\"font-family:kok;padding:0px;margin:0px;color:#606060;font-size:100%;\"><strong>$query_row[itemtitle]</strong></h1>
       <h2 class=\"text-left\" style=\"padding:0px;margin:0px;color:#ffa427;font-size:100%;\">Ksh $price</h2>

       <!--<div class=\"row\">
           <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
               <p class=\"text-center\">$price Ksh</p>
           </div>
       </div>
       <div class=\"row\">
           <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
               <p class=\"text-center\" style=\"font-family:kok;\">$query_row[itemtitle]</p>
           </div>
       </div>-->
      <!-- <div class=\"row visible-lg visible-md\">
           <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1\"></div>
           <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-10\">
               <a href=\"productdetails.php?id=$query_row[id]\" class=\"btn btn-block btn-primary\" data-name=\"$query_row[itemtitle]\" data-price=\"$price\" target=\"_blank\">Add to Cart</a>
           </div>
           <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1\"></div>
       </div>

       <div class=\"row visible-sm visible-xs\">
           <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\"></div>
           <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
               <a href=\"productdetails.php?id=$id\" class=\"btn btn-sm btn-block btn-primary\" data-name=\"$query_row[itemtitle]\" data-price=\"$price\" target=\"_blank\">Add to Cart</a>
           </div>
           <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\"></div>
       </div>-->


     </div>
     </div>
     ";
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

echo " <!--Ends here -->
            <div class=\"row\" style=\"margin-top:20px;background-color:rgba(0,0,0,0.5);\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"row\">
                        <div class=\"col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-12 col-xs-12\">
                            <div class=\"row\">
                                <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-6\"><h4>Service</h4>
                                    <ul class=\"list-unstyled\">
                                        <li><a style=\"color:black;\" href=\"#\">Online help</a></li>
                                        <li><a style=\"color:black;\" href=\"#\">Contact us</a></li>
                                        <li><a style=\"color:black;\" href=\"#\">Order status</a></li>
                                        <li><a style=\"color:black;\" href=\"#\">Change location</a></li>
                                        <li><a style=\"color:black;\" href=\"#\">FAQS</a></li>
                                    </ul>
                                </div>
                                <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-6\"><h4>Quick Shop</h4>
                                    <ul class=\"list-unstyled\">
                                        <li><a style=\"color:black;\" href=\"#\">Tshirts</a></li>
                                        <li><a style=\"color:black;\" href=\"#\">Mens</a></li>
                                        <li><a style=\"color:black;\" href=\"#\">Womens</a></li>
                                        <li><a style=\"color:black;\" href=\"#\">Gift Cards</a></li>
                                        <li><a style=\"color:black;\" href=\"#\">Shoes</a></li>
                                    </ul>
                                </div>
                                <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3 visible-lg visible-md\"><h4>Policies</h4>
                                    <ul class=\"list-unstyled\">
                                        <li><a style=\"color:black;\" href=\"#\">Terms of use</a></li>
                                        <li><a style=\"color:black;\" href=\"#\">Privacy policy</a></li>
                                        <li><a style=\"color:black;\" href=\"#\">Refund policy</a></li>
                                        <li><a style=\"color:black;\" href=\"#\">Billing System</a></li>
                                        <li><a style=\"color:black;\" href=\"#\">Ticke System</a></li>
                                    </ul>
                                </div>
                                <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3 visible-lg visible-md\"><h4>About shopper</h4>
                                    <ul class=\"list-unstyled\">
                                        <li><a style=\"color:black;\" href=\"#\">Company information</a></li>
                                        <li><a style=\"color:black;\" href=\"#\">Careers</a></li>
                                        <li><a style=\"color:black;\" href=\"#\">Store location</a></li>
                                        <li><a style=\"color:black;\" href=\"#\">Affiliate Program</a></li>
                                        <li><a style=\"color:black;\" href=\"#\">Copyright</a></li>
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
                                        <input type=\"email\" class=\"form-control\" placeholder=\"Email address\" name=\"user\'s email\">
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

            <!--container ends here-->
            <div class=\"row\">
                <div class=\"\"><p class=\"text-center\">A WN creation Copyright &#169 Tiiva Inc.</p></div>
            </div>
        </div>
            </div>
                </div>
        <script>
            function nduthi(){
                window.alert(\"Do this\");
            }

            function additem(){

            var stat = document.getElementById(\"cartitemstatus\");

                stat.innerHTML = \"checking....\";
                if(window.XMLHttpRequest){
			     xmlhttp01 = new XMLHttpRequest();
		      }else{
                    xmlhttp01 = new ActiveXObject('Microsoft.XMLHTTP');
                }

                xmlhttp01.onreadystatechange = function(){
                    if (xmlhttp01.readyState == 4 && xmlhttp01.status == 200){
                        stat.innerHTML = xmlhttp01.responseText;

                    }
                }
                xmlhttp01.open(\"GET\",\"addstoreitem.php?id=$id\",true);
                xmlhttp01.send();
            }

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
                cart();
            }

            // show the count on your cart
            function cart(){
              if(window.XMLHttpRequest){
                    xmlhttp12 = new XMLHttpRequest();
                }else{
                    xmlhttp12 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp12.onreadystatechange = function(){
                if (xmlhttp12.readyState == 4 && xmlhttp12.status == 200){
                    document.getElementById('cartitems').innerHTML= xmlhttp12.responseText;

                    }
                    }
                    xmlhttp12.open('GET','shoppingcartcount.php',true);
                    xmlhttp12.send();


            }
            function addnewitem(){
            var addtocartbutton = document.getElementById('addtocartbutton');
                if(window.XMLHttpRequest){
                    xmlhttp05 = new XMLHttpRequest();
                }else{
                    xmlhttp05 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp05.onreadystatechange = function(){
                if (xmlhttp05.readyState == 4 && xmlhttp05.status == 200){
                    document.getElementById('newcartitems').innerHTML= xmlhttp05.responseText;
                    addtocartbutton.className = 'btn btn-block btn-primary btn-lg disabled';
                    addtocartbutton.innerHTML = 'item added';

                    }
                    }
                    xmlhttp05.open('GET','stolencart.php?action=add&id=$id&site=shack',true);
                    xmlhttp05.send();
            }
            function removenewitem(){
                if(window.XMLHttpRequest){
                    xmlhttp06 = new XMLHttpRequest();
                }else{
                    xmlhttp06 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp06.onreadystatechange = function(){
                if (xmlhttp06.readyState == 4 && xmlhttp06.status == 200){
                    document.getElementById('newcartitems').innerHTML= xmlhttp06.responseText;

                    }
                    }
                    xmlhttp06.open('GET','stolencart.php?action=remove&id=$id&site=shack',true);
                    xmlhttp06.send();
            }
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
                                        xmlhttp07.open('GET','wishlistcookie.php?action=remove&id=$id',true);
                                        xmlhttp07.send();
                                        }
                    setTimeout(changename1(),100);
                    wishlistcount();
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
                                        xmlhttp07.open('GET','wishlistcookie.php?action=add&id=$id',true);
                                        xmlhttp07.send();

                    }
                    setTimeout(changename2(),100);
                    wishlistcount();
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
                                        xmlhttp09.send(\"id=$id\");
            }

            function bookitem(){
                var addtocartbutton = document.getElementById('addtocartbutton');
                var removefromcartbutton = document.getElementById('removefromcartbutton');

                if(XMLHttpRequest){
                    xmlhttp = new XMLHttpRequest();
                }else{
                    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                }
                xmlhttp.onreadystatechange = function(){
                    if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                        document.getElementById('itemstat').innerHTML = xmlhttp.responseText;
                       var cartstat = document.getElementById('cartstat').innerHTML;
                       if(cartstat == 'U1'){
                            //addtocartbutton.disable = true;
                            addtocartbutton.className = 'btn btn-block btn-primary btn-lg disabled';
                            removefromcartbutton.className = 'btn btn-block btn-danger btn-lg disabled';
                       }else{
                            addtocartbutton.className = 'btn btn-block btn-primary btn-lg';
                            removefromcartbutton.className = 'btn btn-block btn-danger btn-lg';
                       }
                    }
                }
                xmlhttp.open('POST','bookitem.php',true);
                xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
                xmlhttp.send(\"itemid=$id\");
             }

            function unbookitem(){
            alert('item will be removed from your list');
                if(XMLHttpRequest){
                    xmlhttp = new XMLHttpRequest();
                }else{
                    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                }
                xmlhttp.onreadystatechange = function(){
                    if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                        document.getElementById('itemstat').innerHTML = xmlhttp.responseText;
                                           }
                }
                xmlhttp.open('POST','unbookitem.php',false);
                xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
                xmlhttp.send(\"itemid=$id\");
             }

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
                       if(mtushitem == 'un'){
                            addtocartbutton.className = 'btn btn-block btn-primary btn-lg disabled';
                            removefromcartbutton.className = 'btn btn-block btn-danger btn-lg disabled';
                       }else{
                            addtocartbutton.className = 'btn btn-block btn-primary btn-lg';
                            removefromcartbutton.className = 'btn btn-block btn-danger btn-lg';
                       }
                    }
                }
                xmlhttp.open('POST','checkitemstatus.php',true);
                xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
                xmlhttp.send(\"itemid=$id\");
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
                 xmlhttp01.open('GET','search.inc.php?search_text='+ document.search.search_text.value+'&timing='+$century,true);
                 xmlhttp01.send();
             }

        </script>
        </div>
    </body>
</html>";
 ?>
