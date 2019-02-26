<?php 
function showSales($conn, $status){
	// return all product items with sold value of 1
	$query = "SELECT * FROM `products` WHERE `sold` = '$status'";
	$query_run = mysqli_query($conn, $query);
	$row = array();
	if(mysqli_num_rows($query_run) != 0){
		while($query_row = mysqli_fetch_assoc($query_run)){
			array_push($row, $query_row);
			}
			return $row;
	}else{
			return 0;
		}

}

function retrieveAllReturns($conn){
	// return all returns
	// this is definitely another grey area since...there are some items that might end up in limbo right??
	// so treat this with caution
	$query = "SELECT * FROM `returns`";
	$query_run = mysqli_query($conn, $query);
	$row = array();
	if(mysqli_num_rows($query_run) != 0){
		while($query_row = mysqli_fetch_assoc($query_run)){
			array_push($row, $query_row);
			}
			return $row;
	}else{
		return 0;
	}
}

function retrieveallDeliveryRecords($conn){
	// return all the complete delivery records
	$query = "SELECT * FROM `deliveries`";
	$query_run = mysqli_query($conn, $query);
	$row = array();
	if(mysqli_num_rows($query_run) != 0){
		while($query_row = mysqli_fetch_assoc($query_run)){
			array_push($row, $query_row);
			}
			return $row;
	}else{
		return 0;
	}
}

function retrieveallincompDeliveryRecords(){
	//

}
?>