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
?>