<?php
require 'connect.php';


$query_count = "SELECT * FROM blogs";
$query_run_count = mysql_query($query_count);
$count = mysql_num_rows($query_run_count);
$pages = ceil($count / 5);
//$current = 2;
if(isset($_POST['current'])){
    $current = $_POST['current'];
    if(!empty($current) && $current != 0){
        $jump = ($current - 1) * 5;
if($current == 1){
    echo "Showing page $current of $pages <a onclick=\"blogslistshow($current +  1);\" class=\"btn btn-primary btn-xs\">Next</a>";
    $query = "SELECT * FROM blogs LIMIT 5";
    $query_run = mysql_query($query);
}else{
    if($current > 1){
        $query = "SELECT * FROM blogs LIMIT 5 OFFSET $jump";
            $query_run = mysql_query($query);
        if($current == $pages){
            echo "Showing page $current of $pages <a onclick=\"blogslistshow($current - 1);\" class=\"btn btn-primary btn-xs\">Prev</a>";
            
        }else{
            if($current < $pages){
            echo "<a onclick=\"blogslistshow($current - 1);\" class=\"btn btn-primary btn-xs\">Prev</a>";
                echo "Showing page $current of $pages pages";
            echo "<a onclick=\"blogslistshow($current + 1);\" class=\"btn btn-primary btn-xs\">Next</a>";
            }
        }
    }
}
echo "
        <table class=\"table\">
<thead>
    <tr>
        <th><span class=\"glyphicon glyphicon-th-list\" style=\"color:green;\"></span> ID</th>
        <th>Title</th>
        <th>Progress</th>
        <th>Author</th>
        <th>Upload day</th>
        <th><span class=\"glyphicon glyphicon-cloud-upload\" style=\"color:green;\"></span> Online</th>
        <th><span class=\"glyphicon glyphicon-cloud-download\" style=\"color:red;\"></span> Views</th>
        <th><span class=\"glyphicon glyphicon-file\" style=\"color:lime;\"></span> Preview</th>
    </tr>
    </thead>
    <tbody>
    ";
while($Query_fetch_assoc = mysql_fetch_assoc($query_run)){
    echo "<tr>";
    
    echo "<td>";
    echo $Query_fetch_assoc['id'].'<br>';
    $blogid = $Query_fetch_assoc['id'];
    echo "</td>";
    
    echo "<td>";
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
    
    echo "<td>";
    echo $Query_fetch_assoc['writter'].'<br>';
    echo "</td>";
    
    echo "<td>";
    echo $Query_fetch_assoc['date'].'<br>';
    echo "</td>";
    
    echo "<td>";
    echo $Query_fetch_assoc['verified'].'<br>';
    echo "</td>";
    
    echo "<td>";
    echo $Query_fetch_assoc['views'].'<br>';
    echo "</td>";
    
    echo "<td>";
    echo "<a onclick=\"showbloghere($blogid);\" class=\"btn btn-primary btn-xs\">Preview</a>";
    echo "</td>";
    
    
    echo "</tr>";
    
}
echo " </tbody>
        
        </table>";
    }
}else{
    die('I gatch you!');
}

?>
