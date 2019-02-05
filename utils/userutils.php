<?php
function userLoggedIn(){
	#checks whether user is logged in
	if(isset($_SESSION['$user_id'])){
		return True;
	}else{
		return False;
	}
}

function getUserName($conn){
	# use this with the userloggedin fnc
$userState = userLoggedIn();
if ($userState == True){
	$user = $_SESSION['$user_id'];
	$query = "SELECT `username` FROM `users` WHERE `id`='".mysqli_real_escape_string($conn, $user)."'";
	$query_run = mysqli_query($conn, $query);
	$query_row = mysqli_fetch_assoc($query_run);
	$user = $query_row['username'];
	return $user;
}else{
	#redirect user or sth
	header('Location:index.php');
}

}

function getUserID(){
$userState = userLoggedIn();
if ($userState == True){
	$user = $_SESSION['$user_id'];
	return $user;
}
}

function isUserMerchant($conn){
	#check whether the signed in user is also a merchant
$userState = userLoggedIn();
if ($userState == True){
	$user = $_SESSION['$user_id'];
	$query = "SELECT * FROM `merchants` WHERE `userid`='".mysqli_real_escape_string($conn, $user)."'";
	$query_run = mysqli_query($conn, $query);
	$query_row = mysqli_num_rows($query_run);
	if($query_row == 1){
		return True;
	}else{
		return False;
	}
}
}

function userWithEmailExists($conn, $mobilenumber){
	# check whether user with that email address already exists| should be unique
    //$mobilenumber = '0705780775';

    $query = "SELECT `mobilenumber` FROM `users` WHERE `mobilenumber`='".mysqli_real_escape_string($conn, $mobilenumber)."'";
    $query_run = mysqli_query($conn, $query);
    $query_num_rows = mysqli_num_rows($query_run);
    if(!empty($mobilenumber)){
        if($query_num_rows < 1){
           echo "<span class=\"glyphicon glyphicon-ok\" style=\"color:rgb(0, 230, 0);\"></span>";
       }else{
           echo "mobi is <strong>already taken</strong>";
       }
    }else{
        echo "Please provide a number";
    }
}

function checkUserLocation(){
	// this will be the function homing in to know the whereabouts of the user
}

function returnCartCount($conn, $table){
	if(userLoggedIn() == True){
		// continue
		$userid = getUserID();
		$query = "SELECT * FROM `$table` WHERE `availability` = 0 AND `sold` = 0 AND `buyer` = $userid";
		$query_run = mysqli_query($conn, $query);
		$num_rows = mysqli_num_rows($query_run);
		return  $num_rows;
	}else{
		return 0;
	}
}

function returncartItems($conn, $table){
	if(returnCartCount($conn, $table) != 0){
		// continue
		$userid = getUserID();
		$query = "SELECT * FROM `$table` WHERE `availability` = 0 AND `sold` = 0 AND `buyer` = $userid";
		$query_run = mysqli_query($conn, $query);
		$records = array();
		while($row = mysqli_fetch_assoc($query_run)){
			array_push($records, $row);
		}
		return $records;
	}else{
		return "Your cart is empty";
	}
}

?>