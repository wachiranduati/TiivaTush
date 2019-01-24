<?php
require 'connect.php';
$id = 5;
// using id like this so that we can increment it will the 5 minute lapse
// wer are going to select all the items any single div will require
// then post them on the identical div id container
// items required img source, price, title, then formulate the button data-name, data-price
//for this page only get the lead image, follow up to details page query up the total 3 images

$query = "SELECT `imageone`, `price`, `itemtitle`, `imagetwo`, `sellerid`,  `webid`, `imagethree`, `category` FROM `products` WHERE `id`='".mysql_real_escape_string($id)."'";
$query_run = mysql_query($query);

$query_row = mysql_fetch_assoc($query_run);
//echo $query_row[imageone];

// \"$query_row[imageone]\";
echo "

           <div class=\"row\" style=\"margin-top:5px;\">
            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                <a href=\"index.php\"><span class=\"glyphicon glyphicon-home\"></span>Home</a> > <a href=\"shop.php\">Shop</a> >> <a href=\"$query_row[category].php\">$query_row[category]</a> > <a href=\"#\" style=\"color:black\">$query_row[itemtitle]</a>
            </div>
            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\"></div>
           </div>
            <div class=\"row\" style=\"margin-top:20px;\">
<!--                images container first row and the second-->
                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"row\">
                                <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"border-right:1px solid gainsboro; border-left:1px dotted gainsboro;border-bottom:1px dotted gainsboro;padding-bottom:3px;\">
                                            <img src=\"$query_row[imageone]\" class=\"img-responsive\">
                                        </div>
                                    </div>
                                    
                                    <div class=\"row\">
                                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"border-right:1px solid gainsboro; border-left:1px dotted gainsboro; border-bottom:1px dotted gainsboro; padding-bottom:3px;\">
                                            <img src=\"$query_row[imagetwo]\" class=\"img-responsive\">
                                        </div>
                                    </div>
                                    
                                    <div class=\"row\">
                                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"border-right:1px solid gainsboro; border-left:1px dotted gainsboro;border-bottom:1px dotted gainsboro;padding-top:3px;\">
                                            <img src=\"$query_row[imagethree]\" class=\"img-responsive\">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1\"></div>
                                <div class=\"col-lg-8 col-md-8 col-sm-8 col-xs-8\">
                                    <img src=\"$query_row[imagetwo]\" class=\"img-responsive\" style=\"border:1px dotted gainsboro;\"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
<!--                the prices box container-->
                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                        <div class=\"row\">
                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                <div class=\"row\">
                                    <div class=\"col-lg-7 col-md-7 col-sm-7 col-xs-7\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                                <h5 class=\"text-uppercase\" style=\"font-family:kok;\">$query_row[itemtitle]</h4>
                                                
                                            </div>
                                        </div>
                                        <div class=\"col-lg-5 col-md-5 col-sm-5 col-xs-5\" >
                                            <h5>
                                                <span class=\"glyphicon glyphicon-star\" style=\"color:orange;\"></span>
                                                <span class=\"glyphicon glyphicon-star\" style=\"color:orange;\"></span>
                                                <span class=\"glyphicon glyphicon-star\" style=\"color:orange;\"></span>
                                                <span class=\"glyphicon glyphicon-star\" style=\"color:orange;\"></span>
                                                <span class=\"glyphicon glyphicon-star\" style=\"color:orange;\"></span>
                                            </h5>
                                        </div>
                                        <div class=\"col-lg-7 col-md-7 col-sm-7 col-xs-7\">
                                            
                                            <h5 class=\"text-capitalize\">Item sold by: <a>$query_row[sellerid]</a></h5>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"border-top:1px solid gainsboro;\"></div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\"><h5 class=\"text-capitalize\">Item description</h5></div>
                                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\"></div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"margin-top:5;border-bottom:1px solid gainsboro;\">This is some shit placed here wooo i really hope it daent show up<p></p></div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                                                <h3 class=\"text-right\" style=\"font-weight:bold;color:orange;\">Price :</h3>
                                            </div>
                                            <div class=\"col-lg-8 col-md-8 col-sm-8 col-xs-8\">
                                                <h3 class=\"text-left\" style=\"text-decoration:underline;\"><strong>$query_row[price]</strong> Ksh</h3>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2\"></div>
                                            <div class=\"col-lg-8 col-md-8 col-sm-8 col-xs-8\" style=\"margin-top:10px;\">
                                                <a class=\"btn btn-block btn-danger\"><span class=\"glyphicon glyphicon-remove\"></span><strong> Remove from cart</strong></a>
                                            </div>
                                            <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2\"></div>
                                        </div>
                                        <div class=\"row\" style=\"margin-top:20px;\">
                                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                                <p>Shipped by <a href=\"#\">Airmark</a></p>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                                <p>Remember, these are second hand clothes \"Mtush\" we ensure that items you purchase reach up to our standards.Check the item description to look throught the items dimensions.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-1 col-md-1 col-sm-1\"></div>
                                    <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\" style=\"border:1px solid rgb(0, 186, 255);\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                                <div class=\"row\">
                                                <!-- mtush offers to the right-->
                                                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"background-color:rgb(0, 186, 255);color:white;\"><h4 class=\"text-center\">We Are AirMark</h4></div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                                        <p class=\"text-center\">Our promises</p>
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                                        <p><span class=\"glyphicon glyphicon-star\"></span> Delivery in 3 - 5 days</p>
                                                        <p><span class=\"glyphicon glyphicon-refresh\"></span> 3 days return policy</p>
                                                        <p><span class=\"glyphicon glyphicon-heart\"></span> Competitive pricing</p>
                                                        <p><span class=\"glyphicon glyphicon-user\"></span> A <a href=\"#\">smile</a></p>

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
            
<!--            ads other items you might like security features and details start here-->
            
            
";
?>