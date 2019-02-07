<?php
require'connect.php';
    if(isset($_COOKIE['wishlist'])){
        $sql = "SELECT * FROM `products` WHERE id IN (";
    $cookielist = $_COOKIE['wishlist'];
    $cookiearrayshow = explode(',',$cookielist);
    foreach($cookiearrayshow as $id){
        $sql.=$id.",";
    }
    $sql = substr($sql, 0, -1).") ORDER BY itemtitle ASC";
    $query = mysqli_query($conn, $sql);
    while($row=mysqli_fetch_array($query)){
        $image = $row['imageone'];
        $title = substr($row['itemtitle'],0,13);

        echo "<img src=\"mtumbauploads/compresseduploads/$image\" class=\"img-responsive\" style=\"height:50px;display:inline;\""." ";
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

}else{
    die("Wishlist is empty");
}
?>
