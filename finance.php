<?php 
require 'connect.php';
// check whether staff 
// check whether staff with proper priviledges
function categoryHeading($x){
	echo "<h4 class=\"text-center text-uppercase\">$x</h4>";
}
function nilRowsReturned(){
	echo "Oops seems like its all empty in here";
}
// categoryHeading('Pending Carts');
function PendingCarts($conn){
	categoryHeading('Pending Carts');
	// check for carts which have a clear of 0
	$query = "SELECT * FROM `checkoutcarts` WHERE `clear` = 0";
	$query_run = mysqli_query($conn, $query);
	$query_num_rows = mysqli_num_rows($query_run);
	if($query_num_rows != 0){
		while($row = mysqli_fetch_assoc($query_run)){
			echo $row['cartid'];
		}
	}else{
		nilRowsReturned();
	}

}
PendingCarts($conn);
?>