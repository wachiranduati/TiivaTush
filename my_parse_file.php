<?php
//echo '<h2>You posted:</h2><hr/>'.$_POST['title'].'<hr/>'.stripslashes($_POST['myTextArea']).'<br> and this is the'. $_POST['coverphoto'];
$title = $_POST['title'];
$coverphoto = $_POST['coverphoto'];
$myTextArea = $_POST['myTextArea'];
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
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <style type=\"text/css\">
        
    </style>
    
</head>
    <body onload=\"blog();\">
        <div class=\"container\">
            <div class=\"row\" style=\"background-color:rgba(0,0,0,0.2)\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <div class=\"row\">
                    <div class=\"col-lg-5 col-md-5 col-sm-5 col-xs-5\"><p></p></div>
                    <div class=\"col-lg-7 col-md-7 col-sm-7 col-xs-7\"><p class=\"text-right\">
                        <a href=\"htt://www.Rushtag.com/Airmark\">Rushtag</a>
                        <a href=\"htt://www.facebook.com/Airmark\" class=\"fa fa-facebook\"></a>
                        <a href=\"htt://www.Twitter.com/Airmark\" class=\"fa fa-twitter\"></a>
                        <a href=\"htt://www.Instagram.com/Airmark\" class=\"fa fa-instagram\"></a>
                        </p>
                    </div>
                </div>
                </div>
            </div>
            
<!--            start of accounts div-->
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\"><img src=\"images/otherphotoo.png\" class=\"img-responsive\"></div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4 visible-lg visible-md\">
                                   
                </div>
                <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 visible-lg visible-md\"></div>

                <div class=\"col-lg-1 col-md-1 col-sm-6 col-xs-6\" style=\"margin-top:15px;\">
                    <div class=\"dropdown\">
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" style=\"color:gray;\">
                            <span class=\"glyphicon glyphicon-shopping-cart\"></span> Cart<sup style=\"color:red;\">0</sup> <span class=\"caret\"></span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"cart.php\">Shopping cart</a></li>
                            <li><a href=\"#\">Wishlist</a></li>
                            <li><a href=\"#\">Tracking</a></li>
                        </ul>
                    </div>
                    
                    
                </div>
                <div class=\"col-lg-1 col-md-1 col-sm-6 col-xs-6\" style=\"margin-top:15px;\">
                        
                        <div class=\"dropdown\">
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" style=\"color:gray;\">
                            <span class=\"glyphicon glyphicon-user\"></span> Account <span class=\"caret\"></span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"login.php\">Login</a></li>
                            <li><a href=\"register.php\">Register</a></li>
                            <li><a href=\"#\">Wishlist</a></li>
                            <li><a href=\"#\">Tracking</a></li>
                        </ul>
                    </div>
                    
                    
                    
                </div>
            </div>
            
<!--            end of accounts div-->
            
            <div class=\"row\">
                <div class=\"col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 \" style=\"margin-top:10px; border-top:1px solid gainsboro;\">
                    <div class=\"row\" style=\"margin-top:10px;\">
                        <div class=\"col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-4 col-xs-4\"><p class=\"text-uppercase text-center\"><a href=\"index.php\">Home</a></p></div>
                        <div class=\"col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-4 col-xs-4\"><p class=\"text-uppercase text-center\"><a href=\"index.php\">Shop</a></p></div>
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
                                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\"><h3 class=\"text-capitalize\" style=\"margin-top:10px; color:gray;font-family:kok\">$title</h3></div>
                            </div>
                            
                            <div class=\"row visible-sm visible-xs\">
                                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\"><h3 class=\"text-capitalize text-center\" style=\"margin-top:10px; color:gray;font-family:kok\">$title</h3></div>
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
                                    <div id=\"bannersth\" style=\"background-image:url($coverphoto); height:300px;background-size:100%;border:1px solid blue;\"></div>
                                </div>
                            </div>
                            
                            <div class=\"row visible-sm visible-xs\">
                                <img src=\"$coverphoto\" class=\"img-responsive\"/>
                            </div>
                            
                            
                            <div class=\"row\">
                                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"margin-top:10px;\">
                                    <p class=\"text-left\">$myTextArea</p>
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
                                        <li><a style=\"color:black;\" href=\"index.php\">Gift Cards</a></li>
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