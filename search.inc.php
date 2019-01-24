<?php
require 'connect.php';
$today_search = Date("d-m-Y");

//echo md5($_SERVER['HTTP_X_FORWARDED_FOR']).' | ';
//echo md5($_SERVER['HTTP_CLIENT_IP']).' | ';
//echo md5($_SERVER['REMOTE_ADDR']).' | ';
// remote addr has been removed since proxies ip will be used where they're being used
//$ip = md5($_SERVER['HTTP_X_FORWARDED_FOR'].'Mbuku');
if(isset($_GET['timing'])){
	$veve = $_GET['timing'];
	if($veve == '860'){
		$databs = 'products';
		$otherdata = 'brandyproducts';
		$shop = 'Mtumba';
		$destination = 'Tiiva Shack';
		$destinationother = 'Tiiva Shop';
		$imageaddr = 'mtumbauploads/compresseduploads/';
		$link = 'productdetails.php?id=';
	}elseif($veve == '321'){
		$databs = 'brandyproducts';
		$otherdata = 'products';
		$shop = 'Brand New';
		$destination = 'Tiiva Shop';
		$destinationother = 'Tiiva Shack';
		$imageaddr = 'uploadproducts/compressedproducts/';
		$link = 'storeproduct.php?id=';

	}else{
		$databs = 'brandyproducts';
		$otherdata = 'products';
		$shop = 'Brand New';
		$destination = 'Tiiva Shop';
		$destinationother = 'Tiiva Shack';
		$imageaddr = 'uploadproducts/compressedproducts/';
		$link = 'storeproduct.php?id=';
	}
}else{
	$databs = 'brandyproducts';
	$otherdata = 'products';
	$shop = 'Brand New';
	$destination = 'Tiiva Shop';
	$destinationother = 'Tiiva Shack';
	$imageaddr = 'uploadproducts/compressedproducts/';
	$link = 'storeproduct.php?id=';
}

if(isset($_GET['search_text'])){
	$search_text = $_GET['search_text'];
}
if(!empty($search_text)){

		//$query = "SELECT `itemtitle`,`subcategory`, `price`, `imageone`, `category`, `id` FROM $databs WHERE `itemtitle` LIKE '%".mysqli_real_escape_string($search_text)."%' ORDER BY RAND() LIMIT 5";
		if($databs == 'products'){
		    $query = "SELECT * FROM $databs WHERE `availability`='1' AND `buyer`='0' AND `itemtitle` LIKE '%".mysqli_real_escape_string($search_text)."%' ORDER BY RAND() LIMIT 5";
		}elseif( $databs == 'brandyproducts'){
		    $query = "SELECT * FROM $databs WHERE `instock`>='1' AND `itemtitle` LIKE '%".mysqli_real_escape_string($search_text)."%' ORDER BY RAND() LIMIT 5";
		}else{
		    $query = "SELECT * FROM $databs WHERE `instock`>='1' AND `itemtitle` LIKE '%".mysqli_real_escape_string($search_text)."%' ORDER BY RAND() LIMIT 5";
		}

        //$query2 = "SELECT `itemtitle`,`subcategory`, `price`, `imageone`, `category` FROM $databs WHERE `itemtitle` LIKE '%".mysqli_real_escape_string($search_text)."%'";
		if($databs == 'products'){
		    $query2 = "SELECT * FROM $databs WHERE `availability`='1' AND `buyer`='0' AND `itemtitle` LIKE '%".mysqli_real_escape_string($search_text)."%'";
		}elseif( $databs == 'brandyproducts'){
		    $query2 = "SELECT * FROM $databs WHERE `instock`>='1' AND `itemtitle` LIKE '%".mysqli_real_escape_string($search_text)."%'";
		}else{
		    $query2 = "SELECT * FROM $databs WHERE `instock`>='1' AND `itemtitle` LIKE '%".mysqli_real_escape_string($search_text)."%'";
		}

        $query_run2 = mysql_query($query2);
        $query_num_rows = mysql_num_rows($query_run2);

        //$query3 = "SELECT `itemtitle`,`subcategory`, `price`, `imageone`, `category` FROM $otherdata WHERE `itemtitle` LIKE '%".mysqli_real_escape_string($search_text)."%'";
		if($otherdata == 'products'){
		    $query3 = "SELECT * FROM $otherdata WHERE `availability`='1' AND `buyer`='0' AND `itemtitle` LIKE '%".mysqli_real_escape_string($search_text)."%'";
		}elseif( $otherdata == 'brandyproducts'){
		    $query3 = "SELECT * FROM $otherdata WHERE `instock`>='1' AND `itemtitle` LIKE '%".mysqli_real_escape_string($search_text)."%'";
		}else{
		    $query3 = "SELECT * FROM $otherdata WHERE `instock`>='1' AND `itemtitle` LIKE '%".mysqli_real_escape_string($search_text)."%'";
		}


        $query_run3 = mysql_query($query3);
        $query_num_rows3 = mysql_num_rows($query_run3);



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

		$query_run = mysql_query($query);
		while ($query_row = mysql_fetch_assoc($query_run)){
			//echo $name = '<a href="anotherpage.php?search_text='.$query_row['itemtitle'].'">'.$query_row['itemtitle'].'</a><br>';
			//echo $name = '<div class="searchbox"><a href="mainpage.php?search_text='.$query_row['itemtitle'].'">'.$query_row['itemtitle'].'</a></div>';
			//echo $name = '<div class="searchbox"><a href="searchresults.php?search_text='.$query_row['itemtitle'].'">'.$query_row['itemtitle'].'</a></div>';
			$formatvat = number_format($query_row[price]);
          $titles = substr($query_row[itemtitle],0,15);
		  $identity = $query_row[id];
          $titlesLarge = substr($query_row[itemtitle],0,35);
            // echo "<div class=\"row thitter\" style=\"border-bottom:1px dotted gainsboro;border-right:1px solid gainsboro;border-left:1px solid gainsboro;background-color:white;font-family:kok;padding:0px;\">
            //     <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3 visible-lg visible-md\"><a href=\"$x\"><img src=\"mtumbauploads/compresseduploads/$query_row[imageone]\" class=\"img-responsive\" Style=\"max-height:50px;max-width:50px;\"/></a></div>
            //     <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3 visible-sm visible-xs\"><a href=\"$x\"><img src=\"mtumbauploads/compresseduploads/$query_row[imageone]\" class=\"img-responsive\" style=\"max-height:35px;max-width:60px;\"/></a></div>
            //     <div class=\"col-lg-6 col-md-6 col-sm-5 col-xs-5\"><a style=\"text-decoration:none;\"><h4 style=\"color:blue;cursor:default;\" class=\"text-capitalize\">$titles</h4></a></div>
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


			// echo "
			// 		<tr>
			// 			<td><a href=\"index.php\"><img src=\"mtumbauploads/compresseduploads/$query_row[imageone]\" class=\"img-responsive\" Style=\"max-height:50px;max-width:50px;\"/></a></td>
			// 			<td><a href=\"index.php\"><h4 style=\"color:blue;cursor:default;\" class=\"text-capitalize visible-lg visible-md\">$titlesLarge</h4><h5 style=\"color:blue;cursor:default;\" class=\"text-capitalize visible-sm visible-xs\">$titles...</h5></a></td>
			// 			<td><a href=\"index.php\"><h4 class=\"text-capitalize visible-lg visible-md\">$formatvat&nbsp;<p style=\"font-size:90%;color:gainsboro;display:inline;\">Ksh</p></a></h4><h5 class=\"text-capitalize visible-sm visible-xs\">$formatvat&nbsp;<p style=\"font-size:90%;color:gainsboro;display:inline;\">Ksh</p></a></h5></a></td>
			// 			<td><a href=\"index.php\"><h4 class=\"text-capitalize visible-lg visible-md\">#Shack</h4><h5 class=\"text-capitalize visible-sm visible-xs\">#Shack</h5></a></td>
			// 		</tr>
			// 	";



			//echo "<a clas=\"list-group-item\" style=\"display:block;\"><img src=\"mtumbauploads/compresseduploads/$query_row[imageone]\" class=\"img-responsive\" Style=\"max-height:100px;max-width:100px;display:inline;\"/>&nbsp;&nbsp;<h4 class=\"text-capitalize\" style=\"color:blue;cursor:default;display:inline;\">$titles</h4>&nbsp;&nbsp;&nbsp;<h4 class=\"text-capitalize\" style=\"display:inline;\">$query_row[price]&nbsp;</h4></a>";

		}


        if($query_num_rows >= 1 ){
            // echo "<div class=\"row\" style=\"border-bottom:1px dotted gainsboro;border-right:1px solid gainsboro;border-left:1px solid gainsboro;background-color:white;font-family:kok;color:white;\">
            //         <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            //             <a href=\"searchresults.php?search_text=$search_text\" class=\"btn btn-info btn-block btn-md\" style=\"\">View all $query_num_rows items($search_text)s</a>
            //         </div>
            //     </div>";


					if($query_num_rows3 >= 1){
						echo "
								<tr>
									<td colspan=\"4\"><a href=\"searchresults.php?search_text=$search_text&page=1&sub=$destination\" class=\"btn btn-info btn-block btn-md\" style=\"\">View all $query_num_rows matches($search_text)s #$destination</a></td>

								</tr>

								<tr>
									<td colspan=\"4\"><a href=\"searchresults.php?search_text=$search_text&page=1&sub=$destinationother\" class=\"btn btn-warning btn-block btn-md\" style=\"\">View all $query_num_rows3 matches($search_text)s #$destinationother</a></td>

								</tr>


								</tbody></table>
							";
					}else{
						echo "
								<tr>
									<td colspan=\"4\"><a href=\"searchresults.php?search_text=$search_text&page=1&sub=$destination\" class=\"btn btn-info btn-block btn-md\" style=\"\">View all $query_num_rows matches($search_text)s #$destination</a></td>

								</tr>

								</tbody></table>
							";
					}


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
                        <h4 class=\"text-center\"><i class=\"mdi mdi-paw-off mdi-24px mdi-dark\"></i>Oops your Search returned no results</h4>
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

}

?>
