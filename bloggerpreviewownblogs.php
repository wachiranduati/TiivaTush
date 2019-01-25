<?php
require 'connect.php';
if(isset($_POST['blogid'])){
    $blogid = $_POST['blogid'];
    //echo $blogid;
    if(!empty($blogid)){
        if($blogid != 0){
            $query = "SELECT * FROM blogs WHERE `id` = $blogid";
            $query_run = mysqli_query($conn, $query);
            $query_fetch_assoc = mysqli_fetch_assoc($query_run);
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
            
            echo "<div class=\"row\" style=\"background-color:white;\">
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
    ";
            
            echo "
        
   
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"background-color:black;color:white;\">Welcome to the blogs preview panel<p class=\"pull-right\">Hey, Nick</p></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1\"><img src=\"icons/thaticon.png\" class=\"img-responsive\"/></h3></div>
                        <div class=\"col-lg-8 col-md-8 col-sm-8 col-xs-8\" style=\"border-bottom:2px dashed gainsboro;font-family:kok;\"><h3 class=\"text-uppercase text-center\">$title</h3></div>
                        <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\">
                            <div class=\"row\">
                                <div class=\"col-lg-12 col-md-12 col-md-12 col-xs-12\">
                                    <h5 class=\"text-uppercase\"><span class=\"glyphicon glyphicon-tower\" style=\"color:brown\"></span> Author : $writter</h5>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-lg-12 col-md-12 col-md-12 col-xs-12\">
                                    <h5><span class=\"glyphicon glyphicon-star\" style=\"color:orange;\"></span> Rating : $rating</h5>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1\"></div>
                        <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-10\" style=\"height:300px;background-image:url($image);background-size:100%;\"></div>
                        <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1\"></div>
                    </div>
                    
<!--
                    <div class=\"row\">
                        <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1\"></div>
                        <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-10\" style=\"border:1px solid blue;\">
                            <img src=\"images/cod.jpg\" class=\"img-responsive\"/>
                        </div>
                        <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1\"></div>
                    </div>
                    
-->
                    <hr>
                    <div class=\"row\" style=\"margin-top:1%;\">
                        <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1\"></div>
                        <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-10\">
                            <p>$message</p>
                        </div>
                        <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1\"></div>
                    </div>
                    <hr>
                    <div class=\"row\" style=\"border:1px solid gainsboro;\">
                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                            <h5 class=\"pull-right text-uppercase\"><span class=\"glyphicon glyphicon-tags\" style=\"color:orange;\"></span> <strong><span style=\"color:orange;\"> TAGS : </span></strong><strong><a href=\"index.php\" target=\"_blank\">$tag1</a> | <a href=\"index.php\" target=\"_blank\">$tag2</a> | <a href=\"index.php\" target=\"_blank\">$tag3</a></strong></h5>
                            <h5 class=\"text-uppercase\"><span class=\"glyphicon glyphicon-eye-open\" style=\"color:blue;\"></span> Views [$views] </h5>
                        </div>
                    </div>
                </div>
            </div>
            
    ";
            echo "</div>
</div>";
        }else{
            die("That just wont cut it");
        }
        
    }else{
        die("took a wrong turn bruh?");
    }
}else{
    die("took a wrong turn bruh?");
}
?>

    