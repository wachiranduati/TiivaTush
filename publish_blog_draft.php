<?php
ob_start();
session_start();
//require 'core.inc.php';
require 'connect.php';
$id = $_POST['id'];

$me = $_SESSION['$user_id'];
$today = date(Y).'-'.date(m).'-'.date(d);
// md5('wagwanista');
if($me==1){
    $blogger = 1;
}else{
    $blogger = 0;
}

if($me != 0){
    $query2 = "SELECT `stagename` FROM `users` WHERE `id`='".mysqli_real_escape_string($conn, $me)."'";
            $query_run2 = mysqli_query($conn, $query2);
            $query_rows2 = mysqli_fetch_assoc($query_run2);
            $thewritter = $query_rows2['stagename'];

}else{
    die("Sorry ..Something must be wrong.... ");
}

if(isset($_POST['progress'])){
    $progress = $_POST['progress'];
    if($progress == 'complete'){
        //this is for when progress is complete aka publishing
        

if($progress == 'complete'){
    $message = "has successfully been uploaded";
}else{
    $message = "has been saved";
}
//echo $today;
//echo '<h2>You posted:</h2><hr/>'.$_POST['title'].'<hr/>'.stripslashes($_POST['myTextArea']).'<br> and this is the'. $_POST['coverphoto'];
if(isset($_POST['title']) && isset($_POST['myTextArea']) && isset($_POST['coverphoto'])){
    //echo "Everything is set";
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $myTextArea = mysqli_real_escape_string($conn, $_POST['myTextArea']);
    $coverphoto = mysqli_real_escape_string($conn, $_POST['coverphoto']);
    $tag1 = mysqli_real_escape_string($conn, $_POST['tag1']);
    $tag2 = mysqli_real_escape_string($conn, $_POST['tag2']);
    $tag3 = mysqli_real_escape_string($conn, $_POST['tag3']);
    if(!empty($title) && !empty($myTextArea) && !empty($coverphoto)){
            
           if(!empty($tag1) && !empty($tag2) && !empty($tag3)){
//               $query = "UPDATE `blogs` (`id`, `title`, `writter`, `date`, `views`, `image`, `message`, `rating`, `tag1`, `tag2`, `tag3`, `progress`, `verified`) VALUES (NULL, '$title', '$thewritter', '$today', '0', '$coverphoto', '$myTextArea', '0', '$tag1', '$tag2', '$tag3', '$progress', '$blogger')";
               
               $query = "UPDATE `blogs` SET `title`='$title', `date`='$today', `views`='0', `image`='$coverphoto', `message`='$myTextArea', `rating`='0', `tag1`='$tag1', `tag2`='$tag2', `tag3`='$tag3', `progress`='complete', `verified`='0' WHERE `id`='$id'";
            
            if(mysqli_query($conn, $query)){
                //echo "$title $message";
                echo "
                    <div class=\"alert alert-success\">
                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
                    <strong>Success!</strong> <span class=\"text-uppercase\"><<<< $title >>>>></span>&nbsp; $message

                    </div>
                    "; 
            }else{
                //echo mysqli_error();
                echo "Sorry something's wrong";
            }
           }else{
               echo "Please check that you didn't leave the tags blank";
           }
            
    }else{
        echo "Please fill in all fields";
    }
}else{
    echo "Sorry something went wrong";
}

        
    }else{
        //this is for when progress is incomplete aka for drafts
        
        
if($progress == 'complete'){
    $message = "has successfully been uploaded";
}else{
    $message = "has been saved";
}
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $myTextArea = mysqli_real_escape_string($conn, $_POST['myTextArea']);
    $coverphoto = mysqli_real_escape_string($conn, $_POST['coverphoto']);
    $tag1 = mysqli_real_escape_string($conn, $_POST['tag1']);
    $tag2 = mysqli_real_escape_string($conn, $_POST['tag2']);
    $tag3 = mysqli_real_escape_string($conn, $_POST['tag3']);
        
    
//    $query = "INSERT INTO `a_database`.`blogs` (`id`, `title`, `writter`, `date`, `views`, `image`, `message`, `rating`, `tag1`, `tag2`, `tag3`, `progress`, `verified`) VALUES (NULL, '$title', '$thewritter', '$today', '0', '$coverphoto', '$myTextArea', '0', '$tag1', '$tag2', '$tag3', '$progress', '$blogger')";
        
        $query = "UPDATE `blogs` SET `title`='$title', `date`='$today', `views`='0', `image`='$coverphoto', `message`='$myTextArea', `rating`='0', `tag1`='$tag1', `tag2`='$tag2', `tag3`='$tag3', `progress`='incomplete', `verified`='0' WHERE `id`='$id'";
            
            if(mysqli_query($conn, $query)){
                //echo "$title $message";
                echo "
                    <div class=\"alert alert-success\">
                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
                    <strong>Success!</strong> <span class=\"text-uppercase\"><<<< $title >>>>></span>&nbsp; $message

                    </div>
                    "; 
            }else{
                //echo mysqli_error();
                //echo "Sorry something's wrong";
                echo "
                    <div class=\"alert alert-danger\">
                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
                    <strong>Error!</strong> <span class=\"text-capitalize\">Sorry something's wrong</span>

                    </div>
                    ";                 
            }
        
    }
}else{
    die("Error! Sorry, something must be wrong...our engineers will have it sorted in a few");
}
    

?>