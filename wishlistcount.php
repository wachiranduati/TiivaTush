<?php
    if(isset($_COOKIE['wishlist'])){
        //echo "Yes it is set";
        $cookielist = $_COOKIE['wishlist'];
        $cookiearray = explode(',',$cookielist);
        $cookiecount = count($cookiearray);
        echo $cookiecount;
    }else{
        echo "No it is not yet set";
    }
?>