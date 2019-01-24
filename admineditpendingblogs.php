<?php
require 'connect.php';
if(isset($_POST['blogid'])){
    $blogid = $_POST['blogid'];
    if(!empty($blogid) && $blogid != 0){
        $query = "SELECT * from blogs WHERE `id`= $blogid AND `progress`= 'complete' AND `verified`= '0'";
        $query_run = mysql_query($query);
        $query_fetch_assoc = mysql_fetch_assoc($query_run);
            $id =  $query_fetch_assoc['id'];
            $title = $query_fetch_assoc['title'];
            $writter = $query_fetch_assoc['writter'];
            $date = $query_fetch_assoc['date'];
            $views =  $query_fetch_assoc['views'];
            $image = $query_fetch_assoc['image'];
            $rating = $query_fetch_assoc['rating'];
            $message = $query_fetch_assoc['message'];
            $tag1 = $query_fetch_assoc['tag1'];
            $tag2 = $query_fetch_assoc['tag2'];
            $tag3 = $query_fetch_assoc['tag3'];
            $progress = $query_fetch_assoc['progress'];
            $verified = $query_fetch_assoc['verified'];
            $progress = $query_fetch_assoc['progress'];
            $message = $query_fetch_assoc['message'];
        echo "
        <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"background-color:black;color:white;\">
                            <h5>Welcome to the blogs control panel<span class=\"pull-right\">Hi, Nick</span></h5>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-12 col-md-12 col-sm\">
                            <form>
                                    <div class=\"form-group\">
                                        <label for=\"title\">Title</label>
                                        <input type=\"text\" id=\"title\" class=\"form-control input-lg\" name=\"title\" placeholder=\"Author's title\" style=\"margin-top:1%;border-radius:0;background-color:rgba(220, 220, 220, 0.43);\" value=\"$title\"/>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"blogcontent\">Blog Content</label>
                                        <textarea name=\"blogcontent\" id=\"ele\" placeholder=\"Sth\" class=\"form-control\" style=\"border-radius:0;background-color:rgba(220, 220, 220, 0.67);\">$message</textarea>
                                    </div>
                                </form>
                            <hr>
                                <form class=\"form-inline\">
                                    <div class=\"form-inline\">
                                    <label for=\"rating\">Tiiva's Rating
                                    <input name=\"rating\" id=\"rating\" type=\"number\" class=\"form-control\" max=\"5\" min=\"1\" placeholder=\"i.e 4\"/>
                                    </label>
                                    
                                </div>
                                </form>
                            <hr>
                                <form class=\"form-inline\" style=\"margin-top:1%;\">
                                    <div class=\"form-group\">
                                    <label for=\"tag1\">$tag1 link</label>
                                    <input type=\"text\" id=\"tag1\" class=\"form-control\" placeholder=\"tag1\" style=\"background-color:rgba(220, 220, 220, 0.67);\"/>
                                </div>
                                    <div class=\"form-group\">
                                    <label for=\"tag1\">$tag2 link</label>
                                    <input type=\"text\" id=\"tag2\" class=\"form-control\" placeholder=\"tag2\" style=\"background-color:rgba(220, 220, 220, 0.67);\"/>
                                </div>
                                    <div class=\"form-group\">
                                    <label for=\"tag1\">$tag3 link</label>
                                    <input type=\"text\" id=\"tag3\" class=\"form-control\" placeholder=\"tag3\" style=\"background-color:rgba(220, 220, 220, 0.67);\"/>
                                </div>
                                </form>
                            <div class=\"row\">
                                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                        <a onclick=\"publishblog($blogid);\" id=\"publish_button\" class=\"btn btn-primary btn-md pull-right\" style=\"margin-top:2%;margin-bottom:2%;\"><span id=\"button_title\">Publish This blog</span></a> 

                                </div>
                            </div>
     
                        </div>
                    </div>
                </div>
            </div>
    ";
    }else{
        die("I still love you :).");
    }
}else{
    die("oooh Dearie, seems you got lost");
}

?>