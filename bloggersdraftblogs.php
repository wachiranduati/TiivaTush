<?php
require 'connect.php';


$query_count = "SELECT * FROM blogs WHERE `progress`='incomplete'";
$query_run_count = mysqli_query($conn, $query_count);
$count = mysqli_num_rows($query_run_count);
$pages = ceil($count / 5);
//$current = 2;
if(isset($_POST['current'])){
    $current = $_POST['current'];
    if(!empty($current) && $current != 0){
        $jump = ($current - 1) * 5;
        
        echo "<div class=\"row\" style=\"background-color:rgba(255, 255, 255, 0.54);padding-top:10px;\">
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">";
        echo "<h4 class=\"text-center text-capitalize\">Currently showing blog drafts by Nick</h4>";
       
        
if($current == 1){
    if($current == $pages){
        echo "Showing page $current of $pages page(s)";
    $query = "SELECT * FROM blogs WHERE `progress`='incomplete' AND `remove`='0' LIMIT 5";
    $query_run = mysqli_query($conn, $query);
    }else{
        echo "Showing page $current of $pages <a onclick=\"previewdraftblogs($current +  1);\" class=\"btn btn-warning btn-xs\">Next</a>";
    $query = "SELECT * FROM blogs WHERE `progress`='incomplete' AND `remove`='0' LIMIT 5";
    $query_run = mysqli_query($conn, $query);
    }
}else{
    if($current > 1){
        $query = "SELECT * FROM blogs WHERE `progress`='incomplete' AND `remove`='0' LIMIT 5 OFFSET $jump";
            $query_run = mysqli_query($conn, $query);
        if($current == $pages){
            echo "Showing page $current of $pages <a onclick=\"previewdraftblogs($current - 1);\" class=\"btn btn-warning btn-xs\">Prev</a>";
            
        }else{
            if($current < $pages){
            echo "<a onclick=\"previewdraftblogs($current - 1);\" class=\"btn btn-warning btn-xs\">Prev</a>";
                echo "Showing page $current of $pages pages";
            echo "<a onclick=\"previewdraftblogs($current + 1);\" class=\"btn btn-warning btn-xs\">Next</a>";
            }
        }
    }
}

 // removed <th><span class=\"glyphicon glyphicon-cloud-download\" style=\"color:red;\"></span> Views</th>
//        <th><span class=\"glyphicon glyphicon-cloud-upload\" style=\"color:green;\"></span> State</th>      

        
echo "
        <table class=\"table\">
<thead>
    <tr>
        <th><span class=\"glyphicon glyphicon-th-list\" style=\"color:green;\"></span> No</th>
        <th>Title</th>
        <th>Progress</th>
        <th>Author</th>
        <th>Upload day</th>
        <th><span class=\"glyphicon glyphicon-file\" style=\"color:lime;\"></span> Continue</th>
    </tr>
    </thead>
    <tbody>
    ";
        if($current == 1){
            $number = ceil(1);
        }else{
            $number = ceil(($current - 1) * 5 + 1);
        }
        
while($Query_fetch_assoc = mysqli_fetch_assoc($query_run)){
    echo "<tr>";
    
    echo "<td>";
   // echo $Query_fetch_assoc['id'].'<br>';
    echo "$number";
    $blogid = $Query_fetch_assoc['id'];
    echo "</td>";
    
    echo "<td class=\"text-capitalize\">";
    echo $Query_fetch_assoc['title'].'<br>';
    echo "</td>";
    
    if($Query_fetch_assoc['progress'] == 'complete'){
        $progress_icon = "<span style=\"color:green;\" class=\"text-uppercase\">complete</span>";
    }else{
        $progress_icon = "<span style=\"color:red;\" class=\"text-uppercase\">DRAFT</span>";
    }
    
    
    echo "<td>";
    echo $progress_icon.'<br>';
    echo "</td>";
    
    echo "<td class=\"text-capitalize\">";
    echo $Query_fetch_assoc['writter'].'<br>';
    echo "</td>";
    
    echo "<td>";
    echo $Query_fetch_assoc['date'].'<br>';
    echo "</td>";
    
    if($Query_fetch_assoc['verified'] == '1'){
        $state = "<span style=\"color:green;\" class=\"text-uppercase\">Online</span>";
    }else{
        $state = "<span style=\"color:orange;\" class=\"text-uppercase\">Submitted</span>";
    }
//    echo "<td>";
//    echo $state.'<br>';
//    echo "</td>";
    
//    echo "<td>";
//    echo $Query_fetch_assoc['views'].'<br>';
//    echo "</td>";
    
//    echo "<td>";
//    echo "0".'<br>';
//    echo "</td>";
//    
    
    
    echo "<td>";
    echo "<a onclick=\"editdraft($blogid);\" class=\"btn btn-info btn-xs\">Edit & Publish</a>";
    echo "</td>";
    
    
    echo "</tr>";
    $number ++;
}
echo " </tbody>
        
        </table>";

echo " </div>
</div>";

    }
}else{
    die('I gatch you!');
}

?>