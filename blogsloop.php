<?php
require 'connect.php';
$id = $_GET['blogspot'];
$query = "SELECT `id`, `title` ,`writter` ,`date` ,`views` ,`image`, `message`, `rating`, `tag1` , `tag2` , `tag3` FROM `blogs` WHERE `id`='".mysql_real_escape_string(1)."'";
$query_run = mysql_query($query);

$query_row = mysql_fetch_assoc($query_run);
//echo $query_row[message];
$count = 0;
$len = strlen($query_row[message]);

$lg = substr($query_row[message],0,$len/2);

$sm = substr($query_row[message],0,$len/4);

while ($count < 4){

echo "
        
        
<!--                    start of the content pages-->
                    <div class=\"row\" style=\"margin-bottom:20px;\">
                        <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 visible-lg visible-md\"></div>
                        <div class=\"col-lg-11 col-md-11 col-sm-12 col-xs-12\" style=\"border:1px solid gainsboro;\">
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
                                                <div class=\"col-lg-2 col-md-2 col-sm-1 col-xs-1 visible-lg visible-md\"><h5><span class=\"glyphicon glyphicon-fire\"></span></h5></div>
                                                <div class=\"col-lg-10 col-md-10 col-sm-9 col-xs-9 visible-lg visible-md\"><h5 class='text-left text-capitalize'>$query_row[writter]</h5></div>
                                                
                                                <div class=\"col-lg-10 col-md-10 col-sm-9 col-xs-9 visible-sm visible-xs\"><h5 class='text-left text-capitalize'>Author: $query_row[writter]</h5></div>
                                                
                                                
                                            </div>
                                        </div>
                                        <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-6\">
                                            <div class=\"row\">
                                                <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 visible-lg visible-md\">
                                                    <h5><span class=\"glyphicon glyphicon-time\"></span></h5>
                                                </div>
                                                <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-10 visible-lg visible-md\">
                                                    <h5>$query_row[date]</h5>
                                                    
                                                </div>
                                                
                                                <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-10 visible-sm visible-xs\">
                                                    <h5 class=\"text-right\">Up: $query_row[date]</h5>
                                                    
                                                </div>
                                                
                                                
                                            </div>
                                        </div>
                                        <div class=\"col-lg-4 col-md-4 col-sm-4 colxs-4 visible-lg visible-md\">This</div>
                                    </div>
                                </div>
                                <div class=\"col-lg-2 col-md-2 col-sm-12 col-sm-12 visible-lg visible-md\">
                                        <h5>
                                            <span class=\"glyphicon glyphicon-star\" style=\"color:orange;\"></span>
                                            <span class=\"glyphicon glyphicon-star\" style=\"color:orange;\"></span>
                                            <span class=\"glyphicon glyphicon-star\" style=\"color:orange;\"></span>
                                            <span class=\"glyphicon glyphicon-star\" style=\"color:orange;\"></span>
                                            <span class=\"glyphicon glyphicon-star\" style=\"color:black;\"></span>
                                        
                                        </h5>
                                        
                                </div>
                                
                                <div class=\"col-lg-2 col-md-2 col-sm-12 col-sm-12 visible-sm visible-xs\">
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
                            <div class=\"row\">
                                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 visible-lg visible-md\">
                                    <div id=\"bannersth\" style=\"background-image:url($query_row[image]); height:300px;background-size:100%;border:1px solid blue;\"></div>
                                </div>
                                
                                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 visile-sm visible-xs\">
                                    <img src=\"$query_row[image]\" class=\"img-responsive\" style=\"border:1px solid blue;\">
                                </div>
                                
                                
                            </div>
                            <div class=\"row\">
                                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"margin-top:10px;\">
                                    <p class=\"visible-sm visible-xs\">$sm<a href=\"blogsingle.php?blogspot=$query_row[id]\">......Read more</a><br></p>
                                    <p class=\"visible-lg visible-md\">$lg<a href=\"blogsingle.php?blogspot=$query_row[id]\">.......Read more</a><br></p>
                                    
                                </div>

                            </div>
                            <div class=\"row visible-lg visible-md\" style=\"margin-top:20px;margin-bottom:20px;\">
                                <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2\">
                                    <a href=\"blogsingle.php?blogspot=$query_row[id]\" class=\"btn btn-primary\">Read more</a>
                                </div>
                                <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-10\"></div>
                            </div>
                            
                            <div class=\"row visible-sm visible-xs\" style=\"margin-top:20px;margin-bottom:20px;\">
                                <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2\">
                                    <a href=\"blogsingle.php?blogspot=$query_row[id]\" class=\"btn btn-sm btn-primary\">Read more</a>
                                </div>
                                <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-10\"></div>
                            </div>
                            
                            
                            
                        </div>
                    </div>
<!--                    end of the items-->
                    
        
    ";
    $count ++;
}

?>