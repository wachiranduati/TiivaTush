<?php
require 'connect.php';
$today_search = Date(d).'-'.Date(m).'-'.Date(Y);

//echo md5($_SERVER['HTTP_X_FORWARDED_FOR']).' | ';
//echo md5($_SERVER['HTTP_CLIENT_IP']).' | ';
//echo md5($_SERVER['REMOTE_ADDR']).' | ';
// remote addr has been removed since proxies ip will be used where they're being used
//$ip = md5($_SERVER['HTTP_X_FORWARDED_FOR'].'Mbuku');


if(isset($_POST['search_text']) && isset($_POST['minprice']) && isset($_POST['maxprice']) && isset($_POST['site']) && isset($_POST['category'])){
	$search_text = $_POST['search_text'];
	$minprice = $_POST['minprice'];
	$maxprice = $_POST['maxprice'];
	$dbs = $_POST['site'];
	$category = $_POST['category'];
	if($dbs == 'shack'){
		$destination = 'Tiiva Shack';
		$site = 'products';
		$imageaddr = 'mtumbauploads/compresseduploads/';
		$link = 'productdetails.php?id=';
		$shop = 'Mtumba';
	}elseif($dbs == 'shop'){
		$destination = 'Tiiva Shop';
		$site = 'brandyproducts';
		$imageaddr = 'uploadproducts/compressedproducts/';
		$link = 'storeproduct.php?id=';
		$shop = 'Brand New';
	}else{
		$destination = 'Tiiva Shop';
		$site = 'products';
		$imageaddr = 'uploadproducts/compressedproducts/';
		$link = 'storeproduct.php?id=';
		$shop = 'Brand New';
	}


    if(!empty($search_text) && !empty($minprice) && !empty($maxprice) && !empty($site) && !empty($category) && $minprice < $maxprice){

		//$query = "SELECT * FROM `$site` WHERE `itemtitle` LIKE '%".mysqli_real_escape_string($conn, $search_text)."%' AND `price`>='$minprice' AND `price`<='$maxprice' AND `category`='$category' ORDER BY RAND() LIMIT 8";
		if($site == 'products'){
		    $query = "SELECT * FROM $site WHERE `availability`='1' AND `buyer`='0' AND `price`>='$minprice' AND `price`<='$maxprice' AND `category`='$category'  AND `itemtitle` LIKE '%".mysqli_real_escape_string($conn, $search_text)."%' ORDER BY RAND() LIMIT 5";
		}elseif( $site == 'brandyproducts'){
		    $query = "SELECT * FROM $site WHERE `instock`>='1' AND `price`>='$minprice' AND `price`<='$maxprice' AND `category`='$category' AND  `itemtitle` LIKE '%".mysqli_real_escape_string($conn, $search_text)."%' ORDER BY RAND() LIMIT 5";
		}else{
		    $query = "SELECT * FROM $site WHERE `instock`>='1' AND `price`>='$minprice' AND `price`<='$maxprice' AND `category`='$category' AND  `itemtitle` LIKE '%".mysqli_real_escape_string($conn, $search_text)."%' ORDER BY RAND() LIMIT 5";
		}


        //$query2 = "SELECT `itemtitle`,`subcategory`, `price`, `imageone`, `category` FROM `$site` WHERE `itemtitle` LIKE '%".mysqli_real_escape_string($conn, $search_text)."%' AND `price`>='$minprice' AND `price`<='$maxprice' AND `category`='$category'";
		if($site == 'products'){
		    $query2 = "SELECT * FROM $site WHERE `availability`='1' AND `buyer`='0' AND `price`>='$minprice' AND `price`<='$maxprice' AND `category`='$category'  AND `itemtitle` LIKE '%".mysqli_real_escape_string($conn, $search_text)."%'";
		}elseif( $site == 'brandyproducts'){
		    $query2 = "SELECT * FROM $site WHERE `instock`>='1' AND `price`>='$minprice' AND `price`<='$maxprice' AND `category`='$category' AND  `itemtitle` LIKE '%".mysqli_real_escape_string($conn, $search_text)."%'";
		}else{
		    $query2 = "SELECT * FROM $site WHERE `instock`>='1' AND `price`>='$minprice' AND `price`<='$maxprice' AND `category`='$category' AND  `itemtitle` LIKE '%".mysqli_real_escape_string($conn, $search_text)."%'";
		}


        $query_run2 = mysqli_query($conn, $query2);
        $query_num_rows = mysqli_num_rows($query_run2);


		echo "
		<table class=\"table\" Style=\"background-color:white;font-family:kok;\">
			<!--<thead>
				<tr>
					<th>image</th>
					<th>title</th>
					<th>price</th>
					<th>site</th>
				</tr>
			</thead>-->
				<tbody>";

		$query_run = mysqli_query($conn, $query);
		while ($query_row = mysqli_fetch_assoc($query_run)){
			//echo $name = '<a href="anotherpage.php?search_text='.$query_row['itemtitle'].'">'.$query_row['itemtitle'].'</a><br>';
			//echo $name = '<div class="searchbox"><a href="mainpage.php?search_text='.$query_row['itemtitle'].'">'.$query_row['itemtitle'].'</a></div>';
			//echo $name = '<div class="searchbox"><a href="searchresults.php?search_text='.$query_row['itemtitle'].'">'.$query_row['itemtitle'].'</a></div>';
		$formatvat = number_format($query_row[price]);
  		$titles = substr($query_row[itemtitle],0,15);
  		$identity = $query_row[id];
  		$titlesLarge = substr($query_row[itemtitle],0,35);
            // echo "<div class=\"row\" class=\"thitter\" style=\"border-bottom:1px dotted gainsboro;border-right:1px solid gainsboro;border-left:1px solid gainsboro;background-color:white;font-family:kok;\">
            //     <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\"><a href=\"$x\"><img src=\"$query_row[imageone]\" class=\"img-responsive\"/></a></div>
            //     <div class=\"col-lg-6 col-md-6 col-sm-5 col-xs-5 visible-lg visible-md\"><a style=\"text-decoration:none;\"><h4 style=\"color:blue;cursor:default;\">$titles</h4></a></div>
            //     <div class=\"col-lg-6 col-md-6 col-sm-5 col-xs-5 visible-sm visible-xs\"><a style=\"text-decoration:none;\"><p style=\"color:blue;cursor:default;\">$titles</p></a></div>
            //     <div class=\"col-lg-3 col-md-3 col-sm-4 col-xs-4 visible-lg visible-md\"><a style=\"color:orange;text-decoration:none;cursor:default;\"><h4 class=\"text-capitalize\">$query_row[price]&nbsp;<p style=\"font-size:90%;color:gainsboro;display:inline;\">Ksh</p></a></h4></div>
            //     <div class=\"col-lg-3 col-md-3 col-sm-4 col-xs-4 visible-sm visible-xs\"><a style=\"color:orange;text-decoration:none;cursor:default;\"><p class=\"text-capitalize\">$query_row[price]&nbsp;<span style=\"font-size:90%;color:gainsboro;display:inline;\">Ksh</span></a></p></div>
            // </div>";

			echo "
					<tr onclick=\"letsgo('$link$identity');\">
					<td><img src=\"$imageaddr$query_row[imageone]\" class=\"img-responsive\" Style=\"max-height:50px;max-width:50px;\"/></td>
					<td><h4 style=\"color:blue;cursor:default;\" class=\"text-capitalize visible-lg visible-md\">$titlesLarge</h4><h5 style=\"color:blue;cursor:default;\" class=\"text-capitalize visible-sm visible-xs\">$titles...</h5></td>
					<td><h4 class=\"text-capitalize visible-lg visible-md\">$formatvat&nbsp;<p style=\"font-size:90%;color:gainsboro;display:inline;\">Ksh</p></a></h4><h5 class=\"text-capitalize visible-sm visible-xs\">$formatvat&nbsp;<p style=\"font-size:90%;color:gainsboro;display:inline;\">Ksh</p></a></h5></td>
					<td><h4 class=\"text-capitalize visible-lg visible-md\">$shop</h4><h5 class=\"text-capitalize visible-sm visible-xs\">$shop</h5></td>
					</tr>
				";


            /*echo "<li class=\"this\"><a><img src=\"$query_row[imageone]\" class=\"img-responsive\"/></a><a>$query_row[itemtitle]</a></li>";
             */

		}

        if($query_num_rows >= 1 ){

			echo "
					<tr>
						<td colspan=\"4\"><a href=\"advancedsearchresults.php?search_text=$search_text&page=1&sub=$dbs&category=$category&maxprice=$maxprice&minprice=$minprice\" class=\"btn btn-info btn-block btn-md\" style=\"\">View all $query_num_rows matches($search_text)s #$destination</a></td>

					</tr>

					</tbody></table>
				";

            //save the word into the searched texts file
    if(strlen($search_text) > 4){
        if(file_exists('logs/Queried_searches.txt')){
            // append the word value to it
            $handle = fopen('logs/Queried_searches.txt','a');
            fwrite($handle,$search_text.'|'.$today_search.PHP_EOL);
            fclose($handle);
            //echo 'File has been appended';

        }else{
            //create searches.txt file and write the value to it
            //this will be the queried resulst
            $handle = fopen('logs/Queried_searches.txt','w');
            fwrite($handle,$search_text.'|'.$today_search.PHP_EOL);
            fclose($handle);
            //echo 'New File has been created and search term added with id';
        }
    }

        }else{
            echo "<div class=\"row\" style=\"border-bottom:1px dotted gainsboro;border-right:1px solid gainsboro;border-left:1px solid gainsboro;background-color:white;font-family:kok;background-color:orange;color:white;\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                        <h4 class=\"text-center\">No results found to your search</h4>
                    </div>
                </div>";
            //save the word into the searched texts file
    if(strlen($search_text) > 4){
        if(file_exists('logs/UnQueried_searches.txt')){
            // append the word value to it
            $handle = fopen('logs/UnQueried_searches.txt','a');
            fwrite($handle,$search_text.'|'.$today_search.PHP_EOL);
            fclose($handle);
            //echo 'File has been appended';

        }else{
            //create searches.txt file and write the value to it
            //this will be the queried resulst
            $handle = fopen('logs/UnQueried_searches.txt','w');
            fwrite($handle,$search_text.'|'.$today_search.PHP_EOL);
            fclose($handle);
            //echo 'New File has been created and search term added with id';
        }
    }
        }

}else{
    echo "not set";
}

}


?>
