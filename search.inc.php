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

		
		if($databs == 'products'){
		    $query = "SELECT * FROM $databs WHERE `availability`='1' AND `buyer`='0' AND `itemtitle` LIKE '%".mysqli_real_escape_string($conn, $search_text)."%' ORDER BY RAND() LIMIT 5";
		}elseif( $databs == 'brandyproducts'){
		    $query = "SELECT * FROM $databs WHERE `instock`>='1' AND `itemtitle` LIKE '%".mysqli_real_escape_string($conn, $search_text)."%' ORDER BY RAND() LIMIT 5";
		}else{
		    $query = "SELECT * FROM $databs WHERE `instock`>='1' AND `itemtitle` LIKE '%".mysqli_real_escape_string($conn, $search_text)."%' ORDER BY RAND() LIMIT 5";
		}

        
		if($databs == 'products'){
		    $query2 = "SELECT COUNT(*) FROM $databs WHERE `availability`='1' AND `buyer`='0' AND `itemtitle` LIKE '%".mysqli_real_escape_string($conn, $search_text)."%'";
		}elseif( $databs == 'brandyproducts'){
		    $query2 = "SELECT COUNT(*) FROM $databs WHERE `instock`>='1' AND `itemtitle` LIKE '%".mysqli_real_escape_string($conn, $search_text)."%'";
		}else{
		    $query2 = "SELECT COUNT(*) FROM $databs WHERE `instock`>='1' AND `itemtitle` LIKE '%".mysqli_real_escape_string($conn, $search_text)."%'";
		}

        $query_run2 = mysqli_query($conn, $query2);
        // $query_num_rows = mysqli_num_rows($query_run2);
        $rows = mysqli_fetch_assoc($query_run2);
		$query_num_rows = implode('', $rows);



        
		// if($otherdata == 'products'){
		//     $query3 = "SELECT * FROM $otherdata WHERE `availability`='1' AND `buyer`='0' AND `itemtitle` LIKE '%".mysqli_real_escape_string($conn, $search_text)."%'";
		// }elseif( $otherdata == 'brandyproducts'){
		//     $query3 = "SELECT * FROM $otherdata WHERE `instock`>='1' AND `itemtitle` LIKE '%".mysqli_real_escape_string($conn, $search_text)."%'";
		// }else{
		//     $query3 = "SELECT * FROM $otherdata WHERE `instock`>='1' AND `itemtitle` LIKE '%".mysqli_real_escape_string($conn, $search_text)."%'";
		// }


  //       $query_run3 = mysqli_query($conn, $query3);
  //       $query_num_rows3 = mysqli_num_rows($query_run3);



		echo "
		<table class=\"table\" Style=\"background-color:white;\">
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
			
			$formatvat = number_format($query_row['price']);
          $titles = substr($query_row['itemtitle'],0,15);
		  $identity = $query_row['id'];
          $titlesLarge = substr($query_row['itemtitle'],0,35);
            

			echo "
					<tr onclick=\"letsgo('$link$identity');\">
					<td><img src=\"$imageaddr$query_row[imageone]\" class=\"img-responsive\" Style=\"max-height:50px;max-width:50px;\"/></td>
					<td><h4 style=\"color:blue;cursor:default;\" class=\"text-capitalize visible-lg visible-md\">$titlesLarge</h4><h5 style=\"color:blue;cursor:default;\" class=\"text-capitalize visible-sm visible-xs\">$titles...</h5></td>
					<td><h4 class=\"text-capitalize visible-lg visible-md\">$formatvat&nbsp;<p style=\"font-size:90%;display:inline;\">Ksh</p></a></h4><h5 class=\"text-capitalize visible-sm visible-xs\">$formatvat&nbsp;<p style=\"font-size:90%;color:gainsboro;display:inline;\">Ksh</p></a></h5></td>
					<td><h4 class=\"text-capitalize visible-lg visible-md\">$shop</h4><h5 class=\"text-capitalize visible-sm visible-xs\">$shop</h5></td>
					</tr>
				";


			

		}


        if($query_num_rows >= 1 ){
            


					// if($query_num_rows3 >= 1){
					// 	echo "
					// 			<tr>
					// 				<td colspan=\"4\"><a href=\"searchresults.php?search_text=$search_text&page=1&sub=$destination\" class=\"btn btn-info btn-block btn-md\" style=\"\">View all $query_num_rows matches($search_text)s #$destination</a></td>

					// 			</tr>

					// 			<tr>
					// 				<td colspan=\"4\"><a href=\"searchresults.php?search_text=$search_text&page=1&sub=$destinationother\" class=\"btn btn-warning btn-block btn-md\" style=\"\">View all $query_num_rows3 matches($search_text)s #$destinationother</a></td>

					// 			</tr>


					// 			</tbody></table>
					// 		";
					// }else{
						echo "
								<tr>
									<td colspan=\"4\"><a href=\"searchresults.php?search_text=$search_text&page=1&sub=$destination\" class=\"btn btn-info btn-block btn-md\" style=\"\">View all $query_num_rows matches($search_text)s</a></td>

								</tr>

								</tbody></table>
					 		";
					// }


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
            echo "<div class=\"row\" style=\"border-bottom:1px dotted gainsboro;border-right:1px solid gainsboro;border-left:1px solid gainsboro;background-color:white;background-color:orange;color:white;\">
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
