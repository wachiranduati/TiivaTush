<?php
session_start();
ob_start();
require 'core.inc.php';
require 'connect.php';
//echo $_SESSION['$user_id'].'<br>';




require 'connect.php';
$query = "SELECT `id`, `itemtitle`, `imageone`, `sellerid`, `price` FROM `products` WHERE `buyer`='0' ORDER BY `id` DESC LIMIT 10";
$query_run = mysql_query($query);
$count = 1;

While($query_row = mysql_fetch_assoc($query_run)
){
    
    echo "
                <div class=\"row\" style=\"border-bottom:1px dotted gainsboro;\">
                <div class=\"col-xs-12\">
                    <div class=\"col-xs-2\"><img src=\"$query_row[imageone]\" class=\"img-responsive\"></div>
                    <div class=\"col-xs-3\"><p>$query_row[itemtitle]</p></div>
                    <div class=\"col-xs-4\"><p>Sold by <a href=\"#\">$query_row[sellerid]</a></p></div>
                    <div class=\"col-xs-2\"><p>$query_row[price] Ksh</p></div>
                    <div class=\"col-xs-1\"><p><span class=\"glyphicon glyphicon-ok\" style=\"color:green\"></span></p></div>
                </div>
                </div>
        ";
    
    
}
?>