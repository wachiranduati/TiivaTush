<?php
require 'connect.php';
    // if _GET['action'] == add then check whether wishlist cookie exists.
// reads the cookie, explodes the cookie value
//  then check whether the _GET['id'] item id is in the exploded array using in_array
//  if true return item already in the wishlist
// if not in the array then add item to the wishlist using array_push to the end
// if _GET['remove'] ==  check whether wishlist cookie exists
// read the cookie, explodes the cookie value
// using in_array find the item and array_pop it
// else if array wasnt there say item wasnt there in teh first place
if(isset($_GET['action']) && isset($_GET['id'])){
    $action = $_GET['action'];
    $id = $_GET['id'];
    //echo $action.''.$id;
    if($action == 'add'){
        //echo "This is going to add an item to the wishlist cookie";
        if(isset($_COOKIE['wishlist'])){
            //echo "cookie found";
            $cookieitems = $_COOKIE['wishlist'];
            $cookiearray = explode(',',$cookieitems);
            if(in_array($id, $cookiearray)){
                //echo "$id is already in the wish list cookie wont add it again";
                //echo $_COOKIE['wishlist'];
displaycart();
                
                //echo '('.count($cookiearray).')';

            }else{
                //echo "$id is not in the wish list cookie adding it";
                //$newcookiearray = array_push($cookiearray,$id);
                //$newcookiearray = array_push($cookiearray,$id);
                array_push($cookiearray,$id);
                $newcookiearray = array_values($cookiearray);
                $newcookieitems = implode(',',$newcookiearray);
                setcookie('wishlist',$newcookieitems,time() + (86400*30),"/");
                //echo $_COOKIE['wishlist'];
                displaycart();
//                $cookieitems3 = $_COOKIE['wishlist'];
//                $cookiearray3 = explode(',',$cookieitems3);
//                echo '('.count($cookiearray3).')';

                
            }
        }else{
            //echo "There's no cookie on this machine by the name wishlist";
            $wishlist[0] = $id; 
            $cookieitems = implode(',',$wishlist);
            //setcookie('wishlist',$cookieitems,time() + (86400*30),"/");
            setcookie('wishlist',$cookieitems,time() + (86400*30),"/");
            //echo $_COOKIE['wishlist'];
            displaycart();
//            $cookieitems2 = $_COOKIE['wishlist'];
//            $cookiearray2 = explode(',',$cookieitems2);
//            echo '('.count($cookiearray2).')';
            
        }
    }else{
        //echo "This is going to remove an item from the wishlist cookie";
        if(isset($_COOKIE['wishlist'])){
            //echo "cookie found";
            $cookieitems = $_COOKIE['wishlist'];
            $cookiearray = explode(',',$cookieitems);
            if(in_array($id, $cookiearray)){
                //echo "$id is already in the wish list cookie wont add it again will remove it";
                //echo "$id is already in the wish list cookie wont add it again";
                $key =  array_search($id,$cookiearray);
                unset($cookiearray[$key]);
                $newcookiearray = array_values($cookiearray);
                //$newcookiearray = array_push($id, $cookiearray);
                $newcookieitems = implode(',',$newcookiearray);
                setcookie('wishlist',$newcookieitems,time() + (86400*30),"/");
                //echo $_COOKIE['wishlist'];
                displaycart();
//                $cookieitems4 = $_COOKIE['wishlist'];
//                $cookiearray4 = explode(',',$cookieitems4);
//                echo '('.count($cookiearray4).')';
                
            }else{
                //echo "$id is not in the wish list cookie adding it";
                //echo "$id is not in the wish list cookie have nothing to remove";
                //echo $_COOKIE['wishlist'];
                displaycart();
                //echo '('.count($cookiearray).')';


                
            }
        }else{
            //echo "There's no cookie on this machine by the name wishlist";
            $wishlist[0] = "$id"; 
            $cookieitems = implode(',',$id);
            setcookie('wishlist',$cookieitems,time() + (86400*30),"/");
            //echo $_COOKIE['wishlist'];
            displaycart();
            //echo '('.count($cookiearray).')';


        }
    }
}
function displaycart(){
    $sql = "SELECT * FROM `products` WHERE id IN (";
    $cookielist = $_COOKIE['wishlist'];
    $cookiearrayshow = explode(',',$cookielist);
    foreach($cookiearrayshow as $id){
        $sql.=$id.",";
    }
    $sql = substr($sql, 0, -1).") ORDER BY itemtitle ASC";
    $query = mysql_query($sql);
    while($row=mysql_fetch_array($query)){
        $image = $row['imageone'];
        $title = substr($row['itemtitle'],0,13);
        
        echo "<img src=\"$image\" class=\"img-responsive\" style=\"height:50px;display:inline;\""." ";
        echo "&nbsp;&nbsp;<p style=\"font-family:kok;color:green;\">".$title.'<span style=\"color:orange;\">&nbsp;&nbsp;Ksh'.$row['price']."</span></p>";
        //echo "&nbsp;&nbsp;<p style=\"font-family:kok;color:green;\">".$title.'<span style=\"color:orange;\">&nbsp;&nbsp;Ksh'.$row['price']."</span></p>";
       //echo "&nbsp;<p style=\"font-family:kok;\">".$row['itemtitle'].'&nbsp;Ksh'.$row['price']."</p>";
          //echo "<img src=\".$image."\" class=\"img-responsive\" style=\"height:50px;\"/>";
        
        //echo "<p style=\"display:inline;\">".$row['price']."</p>";

        
//        echo '<br>'.$row['itemtitle'];
//        echo '<br>Ksh'.$row['price'];
//        echo "<img src=\"$image\" class=\"img-responsive\" style=\"height:50px;\""." ";
        
//        echo "<img src=\"$image\" class=\"img-responsive\" style=\"height:50px;\""." ";
//        echo '<br>'.$row['itemtitle'];
//        echo '<br>Ksh'.$row['price'];
//        
        
        
        
    }
}

?>