<?php
require 'connect.php';
if(isset($_POST['id']) && isset($_POST['title']) && isset($_POST['ele']) && isset($_POST['rating']) && isset($_POST['tag1']) && isset($_POST['tag2']) && isset($_POST['tag3'])){
    $id = $_POST['id'];
    $title = $_POST['title'];
    $ele = $_POST['ele'];
    $rating = $_POST['rating'];
    $tag1 = $_POST['tag1'];
    $tag2 = $_POST['tag2'];
    $tag3 = $_POST['tag3'];
    if(!empty($id) && !empty($title) && !empty($ele) && !empty($rating) && !empty($tag1) && !empty($tag2) && !empty($tag3)){
        
        //$query = "SELECT * FROM products WHERE `id`= $id AND `progress`= 'complete' AND `verifid`='0'";
        $query = "UPDATE blogs SET `rating`='$rating', `link1`='$tag1', `link2`='$tag2', `link3`='$tag3', `verified`='1' WHERE `id`='$id' AND `progress`='complete' ";
        if($query_run = mysqli_query($conn, $query)){
           echo "
                <div class=\"alert alert-info\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
                <strong>Success!</strong> <span class=\"text-uppercase\"><<<< $title >>>>></span> has been uploaded with id $id and is now online
                
                </div>
            "; 
        }
        
        
         //echo "breathren it did work yawa";
//        echo "
//                <div class=\"alert alert-info\">
//                <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
//                <strong>Success!</strong> <<<< $title >>>>> has been uploaded with id $id and is now online
//                
//                </div>
//            ";
    }else{
        die("You missed something. P.s Big brother is watching.Code! Build, do not Destroy");
    }
    
}else{
    die("Love your spirit, but remember big Brother is watching.Code!");
}

?>