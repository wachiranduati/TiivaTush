<?php  
require 'adminutils.php';

function retrieveaproducts($conn, $table, $category, $availability, $buyer, $sold, $limit){
	//return all items in products category under certain conditions
	$query = "SELECT * FROM `$table` WHERE `category`='$category' AND `availability`='$availability' AND `buyer`='$buyer' AND `sold`='$sold' ORDER BY RAND() LIMIT $limit";
	$query_run = mysqli_query($conn, $query);
	$row = array();
	if(mysqli_num_rows($query_run) == $limit){
		// return items
		while($query_row = mysqli_fetch_assoc($query_run)){
			array_push($row, $query_row);
			}
		return $row;
	}else{
		// error not enough products to show
		return False;
	}
}

function createnewTXTFile($txtfile, $mode, $message){
	//this will either create a new file or append data depending on the mode chosen
	$today = currentTime();
	$handle = fopen($txtfile, $mode);
    fwrite($handle,'Restock '.$message.' category |'.$today.PHP_EOL);
    fclose($handle);
    //Restock_errors->thefile
}

function retrieveallItems($conn, $table, $availability, $buyer, $sold, $limit){
	// this will retrieve all items randomly ...basically this will be used by the labels functionality
	$query = "SELECT * FROM `$table` WHERE `availability`='$availability' AND `buyer`='$buyer' AND `sold`='$sold' ORDER BY RAND() LIMIT $limit";
	$query_run = mysqli_query($conn, $query);
	$row = array();
	if(mysqli_num_rows($query_run) == $limit){
		// return items
		while($query_row = mysqli_fetch_assoc($query_run)){
			array_push($row, $query_row);
			}
		return $row;
	}else{
		// error not enough products to show
		return False;
	}
}

function retrieveaproductsCategorySubcat($conn, $table, $category, $subcategory, $availability, $buyer, $sold, $limit){
	//return all items in products category under certain conditions
	$query = "SELECT * FROM `$table` WHERE `category`='$category' AND `subcategory`='$subcategory' AND `availability`='$availability' AND `buyer`='$buyer' AND `sold`='$sold' ORDER BY RAND() LIMIT $limit";
	$query_run = mysqli_query($conn, $query);
	$row = array();
	if(mysqli_num_rows($query_run) == $limit){
		// return items
		while($query_row = mysqli_fetch_assoc($query_run)){
			array_push($row, $query_row);
			}
		return $row;
	}else{
		// error not enough products to show
		return False;
	}
}

function retrieveaproductsOnlySubcategory($conn, $table, $subcategory, $availability, $buyer, $sold, $limit){
	//return all items in products category under certain conditions
	$query = "SELECT * FROM `$table` WHERE `subcategory`='$subcategory' AND `availability`='$availability' AND `buyer`='$buyer' AND `sold`='$sold' ORDER BY RAND() LIMIT $limit";
	$query_run = mysqli_query($conn, $query);
	$row = array();
	if(mysqli_num_rows($query_run) == $limit){
		// return items
		while($query_row = mysqli_fetch_assoc($query_run)){
			array_push($row, $query_row);
			}
		return $row;
	}else{
		// error not enough products to show
		return False;
	}
}

function retrieveaproductsOnlyCategorySingleSex($conn, $table, $category, $sex, $availability, $buyer, $sold, $limit){
	//return all items in products category under certain conditions
	// reversed sex though....so no the sex provided..
	$query = "SELECT * FROM `$table` WHERE `category`='$category' AND `sex` != '$sex' AND `availability`='$availability' AND `buyer`='$buyer' AND `sold`='$sold' ORDER BY RAND() LIMIT $limit";
	$query_run = mysqli_query($conn, $query);
	$row = array();
	if(mysqli_num_rows($query_run) == $limit){
		// return items
		while($query_row = mysqli_fetch_assoc($query_run)){
			array_push($row, $query_row);
			}
		return $row;
	}else{
		// error not enough products to show
		return False;
	}
}

function retrieveaproductsOnlySubCategorySingleSex($conn, $table, $subcategory, $sex, $availability, $buyer, $sold, $limit){
	//return all items in products subcategory under certain conditions
	// reversed sex though....so no the sex provided..
	$query = "SELECT * FROM `$table` WHERE `subcategory`='$subcategory' AND `sex` != '$sex' AND `availability`='$availability' AND `buyer`='$buyer' AND `sold`='$sold' ORDER BY RAND() LIMIT $limit";
	$query_run = mysqli_query($conn, $query);
	$row = array();
	if(mysqli_num_rows($query_run) == $limit){
		// return items
		while($query_row = mysqli_fetch_assoc($query_run)){
			array_push($row, $query_row);
			}
		return $row;
	}else{
		// error not enough products to show
		return False;
	}
}

function retrieveallProductsFromOneSingleSex($conn, $table, $sex, $availability, $buyer, $sold, $limit){
	//return all from a specific gender and specifically items not household items nor kids items
	$query = "SELECT * FROM `$table` WHERE `category`!='kids' AND `category`!='interiors' AND `sex` != '$sex' AND `availability`='$availability' AND `buyer`='$buyer' AND `sold`='$sold' ORDER BY RAND() LIMIT $limit";
	$query_run = mysqli_query($conn, $query);
	$row = array();
	if(mysqli_num_rows($query_run) == $limit){
		// return items
		while($query_row = mysqli_fetch_assoc($query_run)){
			array_push($row, $query_row);
			}
		return $row;
	}else{
		// error not enough products to show
		return False;
	}
}
?>