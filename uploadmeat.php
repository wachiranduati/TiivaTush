<?php
session_start();
ob_start();
require 'connect.php';
require 'utils/userutils.php';

$specialkey = getMerchantId($conn);


// $user = $_SESSION['$user_id'];

// $uploader = $_SESSION['$user_id'];
// $specialkey = $uploader + 21;
$today = Date('M-d-Y');
$time = Date('H-i-s');
// added the new line here
$date = Date("Y-m-d");
$timenow = Date("H:i:s");

$newname = $today.'-'.$time.$specialkey;
//echo $newname;

$name = $_FILES['file']['name'];
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



if (isset($_POST['itname']) ||
    isset($_POST['maincategory']) ||
    isset($_POST['subcategory'])||
    isset($_POST['size'])||
    isset($_POST['label'])||
    isset($name)||
    isset($name2)||
    isset($name3)||
    isset($_POST['details'])||
    isset($_POST['sex'])||
    isset($_POST['rating'])||
    isset($_POST['price'])

   ){
    $itname = $_POST['itname'];
    $maincategory = $_POST['maincategory'];
    $subcategory = $_POST['subcategory'];
    $sizec = $_POST['size'];
    //$file = $_POST['file'];
    //$file2 = $_POST['file2'];
    //$file3 = $_POST['file3'];
    $details = $_POST['details'];
    $sex = $_POST['sex'];
    $rating = $_POST['rating'];
    $price = $_POST['price'];
    $label = $_POST['label'];


    if(!empty($itname) &&
       !empty($maincategory) &&
       !empty($subcategory) &&
       !empty($sizec) &&
       !empty($name) &&
       !empty($name2) &&
       !empty($name3) &&
       !empty($details) &&
       !empty($sex) &&
       !empty($label) &&
       !empty($rating) &&
       !empty($price)

      ){
        

        $size = $_FILES['file']['size'];
        $size2 = $_FILES['file2']['size'];
        $size3 = $_FILES['file3']['size'];

        if (isset($name) && isset($name2) && isset($name3) && $size < 2000000 && $size2 < 2000000 && $size3<2000000){
	if(!empty($name) && !empty($name2) && !empty($name3)){
		if($extension == 'jpg' || $extension == 'png' || $extension == 'jpeg' && $type == 'image/jpeg' ||
          $extension2 == 'jpg' || $extension2 == 'png' || $extension2 == 'jpeg' && $type2 == 'image/jpeg' ||
          $extension3 == 'jpg' || $extension3 == 'png' || $extension3 = 'jpeg' && $type3 == 'image/jpeg'
          ){
			$location = 'mtumbauploads/';
			$location2 = 'mtumbauploads/';
			$location3 = 'mtumbauploads/';




			//if(move_uploaded_file($tmp_name,$location.$name) &&
			if(move_uploaded_file($tmp_name,$location.$newname.'.'.$extension) &&
               move_uploaded_file($tmp_name2,$location2.$newname.'2.'.$extension) &&
               move_uploaded_file($tmp_name3,$location3.$newname.'3.'.$extension)){

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
                $source_img = 'mtumbauploads/'.$newname.'.'.$extension;
                $destination_img = 'mtumbauploads/compresseduploads/'.$newname.'.'.$extension;
                $d = compress($source_img,$destination_img,20);

                $imageup = $newname.'.'.$extension;
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
                $source_img2 = 'mtumbauploads/'.$newname.'2.'.$extension;
                $destination_img2 = 'mtumbauploads/compresseduploads/'.$newname.'2.'.$extension;
                $d2 = compress2($source_img2,$destination_img2,20);

                $imageup2 = $newname.'2.'.$extension;
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
                $source_img3 = 'mtumbauploads/'.$newname.'3.'.$extension;
                $destination_img3 = 'mtumbauploads/compresseduploads/'.$newname.'3.'.$extension;
                $d3 = compress3($source_img3,$destination_img3,20);

                $imageup3 = $newname.'3.'.$extension;
                //end of compression



                $query = "INSERT INTO  `products`
                        VALUES (
                        '' ,  '".mysqli_real_escape_string($conn, $itname)."', '".mysqli_real_escape_string($conn, $specialkey)."',  '".mysqli_real_escape_string($conn, $maincategory)."',  '".mysqli_real_escape_string($conn, $subcategory)."',  '".mysqli_real_escape_string($conn, $imageup)."',  '".mysqli_real_escape_string($conn, $imageup2)."',  '".mysqli_real_escape_string($conn, $imageup3)."',
                        '".mysqli_real_escape_string($conn, $price)."',  '1',  '0' , '".mysqli_real_escape_string($conn, $sizec)."' ,'".mysqli_real_escape_string($conn, $details)."' , '".mysqli_real_escape_string($conn, $sex)."', '".mysqli_real_escape_string($conn, $rating)."','".mysqli_real_escape_string($conn, $label)."',0,'$date','$timenow')";
                //mysqli_query($conn, $query);
                if(mysqli_query($conn, $query)){
                    echo "<div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"alert alert-success\">
                                <strong>Success!</strong>$itname has successfully been uploaded. You can view all your items status in your account.
                            </div>
                        </div>
                    </div>";
                }else{
                    die("Error");
                    //echo mysqli_error();
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
    }else {
        echo "<div class=\"row\">
                    <div class=\"col-xs-12\">
                        <div class=\"alert alert-danger\">
                            <strong>Error!</strong>All fields need to be filled
                        </div>
                    </div>
                </div>";


    }
}






?>
