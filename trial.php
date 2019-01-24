<?php
session_start();
ob_start();
require 'connect.php';
$uploader = $_SESSION['$user_id'];
$specialkey = $uploader + 21;
$today = Date('M-d-Y');
$time = Date('H-i-s');
// added the two lines below to prevent rewriting the code
$date = Date("Y-m-d");
$timenow = Date("H:i:s");
$newname = $today.'-'.$time.$specialkey;
// echo $newname;

$name = $_FILES['file']['type'];
//echo $name;

if(isset($_POST['itname']) && isset($_POST['maincategory']) && isset($_POST['subcategory']) && isset($_POST['label']) && isset($_POST['description']) && isset($_POST['price']) && isset($_POST['instock'])){
    $itname = $_POST['itname'];
    $maincategory = $_POST['maincategory'];
    $subcategory = $_POST['subcategory'];
    $label = $_POST['label'];
    $file = $_POST['file'];
    $file2 = $_POST['file2'];
    $file3 = $_POST['file3'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $instock = $_POST['instock'];
    if(!empty($itname) && !empty($maincategory) && !empty($subcategory) && !empty($label) && !empty($description) && !empty($price) && !empty($instock)){
//        echo "Hey<br>";
//        echo "$maincategory <br>";
//        echo "$subcategory <br>";
//        echo "$label <br>";
      //  echo "$file <br>";
      //  echo "$file2 <br>";
      //  echo "$file3 <br>";
//        echo "$description <br>";
//        echo "$cut <br>";
//        echo "$instock <br>";
        // CONTINUE ON FROM HERE
        $name = $_FILES['file']['name'];
        //$name = $_FILES[$file];
        $size = $_FILES['file']['size'];
        $type = $_FILES['file']['type'];
        $tmp_name = $_FILES['file']['tmp_name'];

        $extension = strtolower(substr($name, strpos($name,'.')+ 1));


        $name2 = $_FILES['file2']['name'];
        $size2 = $_FILES['file2']['size'];
        $type2 = $_FILES['file2']['type'];
        $tmp_name2 = $_FILES['file2']['tmp_name'];

        $extension2 = strtolower(substr($name2, strpos($name2,'.')+ 1));


        $name3 = $_FILES['file3']['name'];
        $size3 = $_FILES['file3']['size'];
        $type3 = $_FILES['file3']['type'];
        $tmp_name3 = $_FILES['file3']['tmp_name'];

        $extension3 = strtolower(substr($name3, strpos($name3,'.')+ 1));
        //echo "here as $name value";
        //echo $file;
            if (isset($name) && isset($name2) && isset($name3) && $size < 2000000 && $size2 < 2000000 && $size3<2000000){
                //echo "here";
	if(!empty($name) && !empty($name2) && !empty($name3)){
		if($extension == 'jpg' || $extension == 'jpeg' && $type == 'image/jpeg' ||
          $extension2 == 'jpg' || $extension2 == 'jpeg' && $type2 == 'image/jpeg' ||
          $extension3 == 'jpg' || $extension3 = 'jpeg' && $type3 == 'image/jpeg'
          ){
			$location = 'uploadproducts/';
			$location2 = 'uploadproducts/';
			$location3 = 'uploadproducts/';
            //resize script starts here
//            if(true){
//					$maxDimW = 5;
//					$maxDimH = 2;
//					list($width,$height, $type, $attr) = getimagesize($_FILES['file']['tmp_name']);
//					if($width > $maxDimW || $height > $maxDimH ){
//						$target_filename = $_FILES['file']['tmp_name'];
//						$fn = $_FILES['file']['tmp_name'];
//						$size = getImagesize($fn);
//						$ratio = $size[0]/$size[1]; // width/height
//						//if square
//						//removed $ration > 1
//						if($size[0] > $size[1]){
//							//$width = $maxDimW;
//							$width = 2120;
//							$height = 1192;
//							//$height = $maxDimH/$ratio;
//						}elseif($size[0] == $size[1]){
////							$width = 800;
////							$height = 800;
//
//                            $width = 1192;
//							$height = 1192;
//
//
//                            // change height to 1192 by 1192
//						}else{
//							//average size potrait rectange
//							//$width = $maxDimW*$ratio;
//							//$height = $maxDimH;
////							$width = 1315;
////							$height = 2120;
//
//                            $width = 739;
//							$height = 1192;
//
//
//                            // mutliply by 0.56226
//                            // to get a height of 1192
//                            // width 739
//						}
//						$src = imagecreatefromstring(file_get_contents($fn));
//						$dst = imagecreatetruecolor($width, $height);
//						imagecopyresampled($dst, $src,0,0,0,0, $width, $height, $size[0],$size[1]);
//						imagejpeg($dst, $target_filename);//adjust format as needed
//
//					}
//
//					}
//
//            // resize script ends here
//
//
//             //resize script starts here
//            if(true){
//					$maxDimW = 5;
//					$maxDimH = 2;
//					list($width,$height, $type, $attr) = getimagesize($_FILES['file2']['tmp_name']);
//					if($width > $maxDimW || $height > $maxDimH ){
//						$target_filename = $_FILES['file2']['tmp_name'];
//						$fn = $_FILES['file2']['tmp_name'];
//						$size = getImagesize($fn);
//						$ratio = $size[0]/$size[1]; // width/height
//						//if square
//						//removed $ration > 1
//						if($size[0] > $size[1]){
//							//$width = $maxDimW;
//							$width = 2120;
//							$height = 1192;
//							//$height = $maxDimH/$ratio;
//						}elseif($size[0] == $size[1]){
//							$width = 800;
//							$height = 800;
//						}else{
//							//average size potrait rectange
//							//$width = $maxDimW*$ratio;
//							//$height = $maxDimH;
//							$width = 1315;
//							$height = 2120;
//						}
//						$src = imagecreatefromstring(file_get_contents($fn));
//						$dst = imagecreatetruecolor($width, $height);
//						imagecopyresampled($dst, $src,0,0,0,0, $width, $height, $size[0],$size[1]);
//						imagejpeg($dst, $target_filename);//adjust format as needed
//
//					}
//
//					}
//
//            // resize script ends here
//
//
//             //resize script starts here
//            if(true){
//					$maxDimW = 5;
//					$maxDimH = 2;
//					list($width,$height, $type, $attr) = getimagesize($_FILES['file3']['tmp_name']);
//					if($width > $maxDimW || $height > $maxDimH ){
//						$target_filename = $_FILES['file3']['tmp_name'];
//						$fn = $_FILES['file3']['tmp_name'];
//						$size = getImagesize($fn);
//						$ratio = $size[0]/$size[1]; // width/height
//						//if square
//						//removed $ration > 1
//						if($size[0] > $size[1]){
//							//$width = $maxDimW;
//							$width = 2120;
//							$height = 1192;
//							//$height = $maxDimH/$ratio;
//						}elseif($size[0] == $size[1]){
//							$width = 800;
//							$height = 800;
//						}else{
//							//average size potrait rectange
//							//$width = $maxDimW*$ratio;
//							//$height = $maxDimH;
//							$width = 1315;
//							$height = 2120;
//						}
//						$src = imagecreatefromstring(file_get_contents($fn));
//						$dst = imagecreatetruecolor($width, $height);
//						imagecopyresampled($dst, $src,0,0,0,0, $width, $height, $size[0],$size[1]);
//						imagejpeg($dst, $target_filename);//adjust format as needed
//
//					}
//
//					}
//
//            // resize script ends here
//

//                move_uploaded_file($tmp_name,$location.$name) &&
//               move_uploaded_file($tmp_name2,$location2.$name2) &&
//               move_uploaded_file($tmp_name3,$location3.$name3)){

			if(move_uploaded_file($tmp_name,$location.$newname.'.'.$extension) &&
               move_uploaded_file($tmp_name2,$location2.$newname.'2.'.$extension2) &&
               move_uploaded_file($tmp_name3,$location3.$newname.'3.'.$extension3)){

                //this is the start of compression
                function compress($source, $destination, $quality){
                $info = getImagesize($source);

                if ($info['mime'] == 'image/jpeg')
                    $image = imagecreatefromjpeg($source);
                else if ($info['mime'] == 'image/png')
                    $image = imagecreatefrompng($source);
                    imagejpeg($image,$destination,$quality);
                    return $destination;
                }
                //$source_img = 'uploadproducts/'.$name;
                $source_img = 'uploadproducts/'.$newname.'.'.$extension;
                //$destination_img = 'uploadproducts/compressedproducts/'.$name;
                $destination_img = 'uploadproducts/compressedproducts/'.$newname.'.'.$extension;
                $d = compress($source_img,$destination_img,20);

                $imageoneup = $newname.'.'.$extension;
                //end of compression

                //this is the start of compression
                function compress2($source2, $destination2, $quality2){
                $info2 = getImagesize($source2);

                if ($info2['mime'] == 'image/jpeg')
                    $image2 = imagecreatefromjpeg($source2);
                else if ($info2['mime'] == 'image/png')
                    $image2 = imagecreatefrompng($source2);
                    imagejpeg($image2,$destination2,$quality2);
                    return $destination2;
                }
                //$source_img2 = 'uploadproducts/'.$name2;
                $source_img2 = 'uploadproducts/'.$newname.'2.'.$extension;
                //$destination_img2 = 'uploadproducts/compressedproducts/'.$name2;
                $destination_img2 = 'uploadproducts/compressedproducts/'.$newname.'2.'.$extension;
                $d2 = compress2($source_img2,$destination_img2,20);

                $imagetwoup = $newname.'2.'.$extension;
                //end of compression

                //this is the start of compression
                function compress3($source3, $destination3, $quality3){
                $info3 = getImagesize($source3);

                if ($info3['mime'] == 'image/jpeg')
                    $image3 = imagecreatefromjpeg($source3);
                else if ($info3['mime'] == 'image/png')
                    $image3 = imagecreatefrompng($source3);
                    imagejpeg($image3,$destination3,$quality3);
                    return $destination3;
                }
                //$source_img3 = 'uploadproducts/'.$name3;
                $source_img3 = 'uploadproducts/'.$newname.'3.'.$extension;
                //$destination_img3 = 'uploadproducts/compressedproducts/'.$name3;
                $destination_img3 = 'uploadproducts/compressedproducts/'.$newname.'3.'.$extension;
                $d3 = compress3($source_img3,$destination_img3,20);

                $imagethreeup = $newname.'3.'.$extension;
                //end of compression



                $query = "INSERT INTO  `brandyproducts` (`id`,`itemtitle`,`Description`,`sellerid`,`category`,`subcategory`,`imageone`,`imagetwo`,`imagethree`,`price`,`Instock`,`sold`,`storename`,`rating`,`label`,`up_date`,`up_time`)
                        VALUES ('','$itname','$description','$uploader','$maincategory','$subcategory','$imageoneup','$imagetwoup','$imagethreeup','$price','$instock','0','','3','$label','$date','$timenow')";
                if(mysql_query($query)){
                     echo "<div class=\"row\">
                    <div class=\"col-xs-12\">
                        <div class=\"alert alert-success\">
                            <strong>Success!</strong>$itname has successfully been uploaded. You can view all your items status in your account.
                        </div>
                    </div>
                </div>";
                }else{
                    echo "Sorry had an Error";
                }




				}
			}else{
				echo "<div class=\"row\">
                    <div class=\"col-xs-12\">
                        <div class=\"alert alert-danger\">
                            <strong>Error!</strong>File must be a jpg/jpeg.
                        </div>
                    </div>
                </div>";
			}

	}else
		{
			echo "<div class=\"row\">
                    <div class=\"col-xs-12\">
                        <div class=\"alert alert-danger\">
                            <strong>Error!</strong>Please select a file.
                        </div>
                    </div>
                </div>";
		}
}else{
                echo "<div class=\"row\">
                    <div class=\"col-xs-12\">
                        <div class=\"alert alert-danger\">
                            <strong>Error!</strong>Ensure that each of the images provided is smaller than 2 MBs
                        </div>
                    </div>
                </div>";
            }
        // CONTINUE ON FROM HERE ENDS HERE

    }else{
        echo "something is wrong";
        //echo $_POST['maincategory'];
    }
}else{
    echo "not set";
}

?>
