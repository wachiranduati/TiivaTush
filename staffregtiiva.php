<?php  
session_start();
require 'connect.php';
require 'utils/adminutils.php';

if(isStaffLoggedIn() != True){
	redirectAndDie();
}

function checkWhetherStaffUsernameExists($conn, $Fvalue){
	//this script will check whether a staff member with teh username already exists
	$staffFieldState = checkStaffFieldAlreadyExists($conn, 'username', $Fvalue);
	echo $staffFieldState;
}
// checkWhetherStaffUsernameExists($conn, 'toon43');

function checkWherStaffNickNameExists($conn, $Fvalue){
	// thsi will check wehther the staff nick name already exists
	$staffFieldState = checkStaffFieldAlreadyExists($conn, 'tiivanick', $Fvalue);
	echo $staffFieldState;
}

function createNewStaffMember($conn, $fullname, $username, $nickname, $password, $center, $email, $ppic){
	//this will create a new tiiva user
	$hashedpass = md5(md5('chumakuburuka').$password);
	// retrieve user id
	$userState = retrieveUserDetialfromField($conn, 'emailaddress', 'id', $email);
	if($userState != 0){
		$userid = $userState;
		$createUser = createNewStaffer($conn, $fullname, $username, $nickname, $hashedpass, $center, $userid, $ppic);
		if($createUser == 1){
			echo 1;
		}else{
			echo 02;
		}
	}else{
		echo 01;
	}

}
// createNewStaffMember($conn, 'koieor', 'kumkum', 'sth', 'sth', 'nthn', 'me@gmail.com');

function checkWhetherUserEmailExists($conn, $email){
	// thsi will check to confirm users email actually exist
	$value = $email;
	$emailExists = checkUserFieldExists($conn, 'emailaddress', $value);
	echo $emailExists;
}
// checkWhetherUserEmailExists($conn, 'me@gmail.com');

if(isset($_POST['Unetk']) && $_POST['Unetk'] == '34lk4434l' && isset($_POST['UserFieldVal']) && !empty($_POST['UserFieldVal'])){
	$Fvalue = mysqli_real_escape_string($conn, $_POST['UserFieldVal']);
	checkWhetherStaffUsernameExists($conn, $Fvalue);
}elseif(isset($_POST['Unetk']) && $_POST['Unetk'] == 'mkewj4_Ekkk32' && isset($_POST['UserFieldVal']) && !empty($_POST['UserFieldVal'])){
	$Fvalue = mysqli_real_escape_string($conn, $_POST['UserFieldVal']);
	checkWherStaffNickNameExists($conn, $Fvalue);
}elseif(isset($_POST['Unetk']) && $_POST['Unetk'] == 'k4l3sdlk4' && isset($_POST['UserFieldVal']) && !empty($_POST['UserFieldVal'])){
	$Fvalue = mysqli_real_escape_string($conn, $_POST['UserFieldVal']);
	checkWhetherUserEmailExists($conn, $Fvalue);
}elseif(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['nickname']) && !empty($_POST['nickname']) && isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['passwordconf']) && !empty($_POST['passwordconf']) && isset($_POST['tiivaCenter']) && !empty($_POST['tiivaCenter']) && $_POST['password'] == $_POST['passwordconf'] && isset($_POST['staffmail']) && !empty($_POST['staffmail']) && isset($_POST['registration']) && $_POST['registration'] == '4l343lk' && isset($_POST['fullname']) && !empty($_POST['fullname']) && isset($_POST['profpic']) && !empty($_POST['profpic'])){
	$staffUsername = mysqli_real_escape_string($conn, $_POST['username']);
	$staffNick = mysqli_real_escape_string($conn, $_POST['nickname']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$center = mysqli_real_escape_string($conn, $_POST['tiivaCenter']);
	$email = mysqli_real_escape_string($conn, $_POST['staffmail']);
	$fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
	$profpic = mysqli_real_escape_string($conn, $_POST['profpic']);
	createNewStaffMember($conn, $fullname, $staffUsername, $staffNick, $password, $center, $email, $profpic);

}
?>