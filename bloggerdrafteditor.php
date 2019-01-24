<?php
require 'connect.php';
if(isset($_POST['editdraftno'])){
    $editdraftno = $_POST['editdraftno'];
    if(!empty($editdraftno) && $editdraftno != 0){
        $query = "SELECT * FROM blogs WHERE `id`='$editdraftno'";
$query_run = mysql_query($query);
$query_fetch_assoc = mysql_fetch_assoc($query_run);
$id = $query_fetch_assoc['id'];
$title = $query_fetch_assoc['title'];
$writter = $query_fetch_assoc['writter'];
$date = $query_fetch_assoc['date'];
$views = $query_fetch_assoc['views'];
$image = $query_fetch_assoc['image'];
$message = $query_fetch_assoc['message'];
$rating = $query_fetch_assoc['rating'];
$progress = $query_fetch_assoc['progress'];
$verified = $query_fetch_assoc['verified'];
        
        if($tag1 == ''){
            $tag1 = 0;
        }else{
            $tag1 = $query_fetch_assoc['tag1'];
        }
        
        if($tag2 == ''){
            $tag2 = 0;
        }else{
            $tag2 = $query_fetch_assoc['tag2'];
        }
        
        if($tag3 == ''){
            $tag3 = 0;
        }else{
            $tag3 = $query_fetch_assoc['tag3'];
        }
        
        
        


echo "
        <div class=\"row\" id=\"blog_editor_container_draft\" style=\"\">
                                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">

                                    <div class=\"row\">
                                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                            <h3 class=\"text-capitalize text-left\">Edit draft \"<span id=\"blogdrafttitle\">$title</span>\"</h3>
                                            
                                        </div>
                        
                                    </div>
                                    <p id=\"editdraftnotocontrols\" style=\"display:none;visibility:hidden;\">$id</p>
                                    <p id=\"tagsfortheblogeditor\" style=\"display:none;visibility:hidden\">$tag1,$tag2,$tag3</p>
                                    
                                    <div class=\"row\">
                                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"border:1px solid gaisboro;\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"background-color:rgba(220, 220, 220, 0.08);\">
                                            <form action=\"my_parse_file_draft.php\" method=\"post\" name=\"myformdraft\" id=\"myformdraft\" enctype=\"multipart/form-data\">
                                                <input name=\"titledraft\" id=\"titledraft\" value=\"$title\" type=\"text\" maxlength=\"80\" style=\"width:100%;border:1px solid gainsboro;border-radius:0;margin-bottom:2px;background-color:rgba(220, 220, 220, 0.47);\" class=\"btn-lg\" placeholder=\"Enter title here\"/><br>
                                                <p style=\"color:black;\">Enter cover photo link<input type=\"text\" value=\"$image\" placeholder=\" cover photo url i.e http://www.google.images.com/pinterest/sth.jpg\" style=\"width:100%;font-family:kok;background-color:rgb(255, 255, 255);\" id=\"coverphotodraft\" name=\"coverphotodraft\"/></p>
                                                <div class=\"row\">
                                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"border:1px solid rgba(0, 0, 0, 0.75);background-color:rgba(220, 220, 220, 0.6);border-right:none;border-left:none;\">
                                            <div class=\"row\" style=\"border:1px solid gainboro;background-color:gainsboro;\">
                                                <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1\"></div>
                                <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center\" onclick=\"iBolddraft();bordersdraft();\" id=\"ibolddraft\"><h5><span class=\"glyphicon glyphicon-bold\"></span></h5></div>
                                <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center\" onclick=\"iItalicdraft();\" id=\"italicdraft\"><h5><span class=\"glyphicon glyphicon-italic\"></span></h5></div>
                                <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center\" onclick=\"iFontSizedraft();\"><h5><span class=\"glyphicon glyphicon-text-height\"></span></h5></div>
                                <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center\" onclick=\"iAlignLeftdraft();\" id=\"ialignleftdraft\"><h5><span class=\"glyphicon glyphicon-align-left\"></span></h5></div>
                                <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center\" onclick=\"iAlignCenterdraft();\" id=\"ialigncenterdraft\"><h5><span class=\"glyphicon glyphicon-minus\"></span></h5></div>
                                <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center\" onclick=\"iAlignRightdraft();\" id=\"ialignrightdraft\"><h5><span class=\"glyphicon glyphicon-align-right\"></span></h5></div>
                                <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center\" onclick=\"iLinkdraft();\"><h5><span class=\"glyphicon glyphicon-link\"></span></h5></div>
                                <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center\" onclick=\"iImagedraft();\"><h5><span class=\"glyphicon glyphicon-picture\"></span></h5></div>
                                <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center\" onclick=\"iOrderedListdraft();\" id=\"iorderedlistdraft\"><h5><span class=\"glyphicon glyphicon-list\"></span></h5></div>
                                <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center\" onclick=\"iUnorderedListdraft();\" id=\"iunorderedlistdraft\"><h5><span class=\"glyphicon glyphicon-list\"></span></h5></div>
                                

                                    </div>
                                        </div>
                                    </div>
                                                <p class=\"text-capitalize\" style=\"color:black;\">Blog:<br>                                                    
                                                    <textarea name=\"myTextAreadraft\" rows=\"14\" style=\"width:100%;display:none;\" id=\"myTextAreadraft\"></textarea></p>
                                                    <iframe name=\"richTextFielddraft\" id=\"richTextFielddraft\" style=\"width:100%;height:450px;background-color:rgba(220, 220, 220, 0.75);border:1px solid gainsboro;\" frameborder=\"0\"></iframe>

                                            </form>
                                        </div>
                                    </div>
                    
                                </div>
                            </div>
                                <div class=\"row\" style=\"border:1px solid gainsboro;border:none;font-family:kok;\">
                                    <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\"><p style=\"color:black;\">Word count:<span id=\"wordscounteddraft\">0</span></p></div>    
                                    <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\"><p class=\"text-right\"  id=\"sasahividraft\" style=\"color:black;\">Remember to safe often <span></span></p></div>    
                                </div>
                                    <div class=\"row\" style=\"border:1px solid gainsboro;border-right:none;border-left:none;\">
                                <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1\"></div>
                                <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-10\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2\">
                                        <div class=\"row\">
                                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                        
                                        <img src=\"images/spinner/spinner_small.gif\" class=\"img-responsive\" style=\"display:inline;visibility:hidden;\" id=\"spinadraft\"/>
                                    </div>
                                    
                                    </div>
                                        </div>
                                        <div class=\"col-lg9 col-md-9 col-sm-9 col-xs-9\"></div>
                                        <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1\">
                                        <div style=\"display:none;visibility:hidden;\" id=\"draftish\">$message</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1\"></div>
                            </div>
                                        </div>
                                    </div>
                                    
    ";
    }else{
        die("Big brother is watching.:)");
    }
}else{
    die("Sorry something's wrong");
}
?>