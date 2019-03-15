<?php 
session_start();
require 'connect.php';
require 'utils/adminutils.php';

if(isStaffLoggedIn() != True){
	redirectAndDie();
}


$sports = ['shorts', 'pants', 'shirts', 'vests', 'shorts', 'shoes', 'socks', 'misc'];

$mens = ['sports', 'officials', 'sweaters', 'shorts', 'pants', 'shirts', 'blazers', 'bags', 'mens'];

$womens = ['dresses', 'sports', 'officials', 'sweaters', 'shirts', 'blazers', 'pants', 'shorts', 'bags', 'misc'];

$kids = ['sports', 'offic', 'sweats', 'kshoes', 'kshirts', 'kblazers', 'kpants', 'bags', 'kmisc'];

$interiors = ['duvets', 'carpets', 'towels', 'curtains', 'pillows', 'misc'];

$bags = ['backpack', 'duffel', 'clutch', 'slouch', 'misc'];
  
$shoes = ['sports', 'flats', 'sneakers', 'boots', 'sandals', 'heels', 'oxfords'];  

$misc = ['dolls', 'belts', 'hats', 'underwear', 'socks', 'books', 'misc'];

// $categories = ['mens', 'womens', 'kids', 'interiors', 'sportswear', 'shoes', 'misc', 'bags'];

$categories = array('mens' => $mens, 'womens' => $womens, 'kids' => $kids, 'interiors' => $interiors, 'sportswear' => $sports, 'shoes' => $shoes, 'misc' => $misc, 'bags' => $bags);

function returnProductsFromCategory($conn, $category, $sold, $buyer, $availability){
	// this will return items depending on arguments for
	// items online
	// items sold
	// items booked
	// items carted
	$query = "SELECT COUNT(*) FROM `products` WHERE `category` = '$category' AND `sold` = '$sold' AND `buyer` = '$buyer' AND `availability` = '$availability'";
	$query_run = mysqli_query($conn, $query);
	$rows = mysqli_fetch_assoc($query_run);
	$items = implode('', $rows);
	return $items;
	
}
// echo returnProductsFromCategory($conn, 'interiors', 0, 0, 1);

function returnProductsFromCategorySubcategory($conn, $category, $subcategory, $sold, $buyer, $availability){
	// this will return items depending on arguments for
	// items online
	// items sold
	// items booked
	// items carted
	$query = "SELECT COUNT(*) FROM `products` WHERE `category` = '$category' AND `subcategory` = '$subcategory' AND `sold` = '$sold' AND `buyer` = '$buyer' AND `availability` = '$availability'";
	$query_run = mysqli_query($conn, $query);
	$rows = mysqli_fetch_assoc($query_run);
	$items = implode('', $rows);
	return $items;
	
}
// echo returnProductsFromCategorySubcategory($conn, 'shoes', 'sneakers', 0, 0, 1);

function returnProductsFromCategoryNotBuyer($conn, $category, $sold, $buyer, $availability){
	// thsi will return items that have been booked or been carted
	$query = "SELECT COUNT(*) FROM `products` WHERE `category` = '$category' AND `sold` = '$sold' AND `buyer` != '$buyer' AND `availability` = '$availability'";
	$query_run = mysqli_query($conn, $query);
	$rows = mysqli_fetch_assoc($query_run);
	$items = implode('', $rows);
	return $items;
	
}
// echo returnProductsFromCategory($conn, 'interiors', 0, 0, 1);

function returnProductsFromCategorySubcategoryNotBuyer($conn, $category, $subcategory, $sold, $buyer, $availability){
	// thsi will return items that have been booked or been carted
	$query = "SELECT COUNT(*) FROM `products` WHERE `category` = '$category' AND `subcategory` = '$subcategory' AND `sold` = '$sold' AND `buyer` != '$buyer' AND `availability` = '$availability'";
	$query_run = mysqli_query($conn, $query);
	$rows = mysqli_fetch_assoc($query_run);
	$items = implode('', $rows);
	return $items;
	
}

function returnTableStructureForCounts($conn, $categories, $sold, $buyer, $availability, $message){
	// return a table structure of all the items currently on the database
	echo "<div class=\"table-responsive\">
	<h4 class=\"text-center text-uppercase\">$message</h4>
		<table class=\"table table-responsive table-striped\">
	<thead>
		<tr>
			<th>Number</th>
			<th>Category</th>
			<th>Count</th>
			<th>subcategories</th>
			<th>SubCount</th>
		</tr>
	</thead>
	<tbody>
	";
	foreach ($categories as $currentCat => $value) {
		$currentCount = returnProductsFromCategory($conn, $currentCat, $sold, $buyer, $availability);// categoreis
		echo "
				<tr>
					<td>#</td>
					<td class=\"text-capitalize\">$currentCat</td>
					<td colspan=\"3\">$currentCount</td>
				</tr>
			";
			// echo count($categories[$currentCat]);
			for($x = 0; $x < count($categories[$currentCat]); $x++){
				$Currentsubcategory = $categories[$currentCat][$x];
				$subcategoryCount = returnProductsFromCategorySubcategory($conn, $currentCat, $Currentsubcategory, $sold, $buyer, $availability);
				echo "
				<tr>
					<td colspan=\"2\"></td>
					<td>#</td>
					<td class=\"text-capitalize\">$Currentsubcategory</td>
					<td>$subcategoryCount</td>
				</tr>
			";
			}

	}

	
	echo "
		</tbody>
	</table></div>
	";
	// print_r($categories);
}

function returnTableStructureForCountsNotBuyer($conn, $categories, $sold, $buyer, $availability, $message){
	// return a table structure of all the items currently on the database
	echo "<div class=\"table-responsive\">
	<h4 class=\"text-center text-uppercase\">$message</h4>
		<table class=\"table table-responsive table-striped\">
	<thead>
		<tr>
			<th>Number</th>
			<th>Category</th>
			<th>Count</th>
			<th>subcategories</th>
			<th>SubCount</th>
		</tr>
	</thead>
	<tbody>
	";
	foreach ($categories as $currentCat => $value) {
		$currentCount = returnProductsFromCategoryNotBuyer($conn, $currentCat, $sold, $buyer, $availability);// categoreis
		echo "
				<tr>
					<td colspan=\"3\">#</td>
					<td colspan=\"3\" class=\"text-capitalize\">$currentCat</td>
					<td colspan=\"3\">$currentCount</td>
				</tr>
			";
			// echo count($categories[$currentCat]);
			for($x = 0; $x < count($categories[$currentCat]); $x++){
				$Currentsubcategory = $categories[$currentCat][$x];
				$subcategoryCount = returnProductsFromCategorySubcategoryNotBuyer($conn, $currentCat, $Currentsubcategory, $sold, $buyer, $availability);
				echo "
				<tr>
					<td colspan=\"2\"></td>
					<td>#</td>
					<td class=\"text-capitalize\">$Currentsubcategory</td>
					<td>$subcategoryCount</td>
				</tr>
			";
			}

	}

	
	echo "
		</tbody>
	</table></div>
	";
	// print_r($categories);
}

// $categories, $sold, $buyer, $availability


if(isset($_POST['rquiem']) && $_POST['rquiem'] == 'l43koi983'){
	returnTableStructureForCounts($conn, $categories, 0, 0, 1, 'AVAILABLE');//not booked/carted
	returnTableStructureForCountsNotBuyer($conn, $categories, 0, 0, 1, 'BOOKED');//booked
	returnTableStructureForCountsNotBuyer($conn, $categories, 0, 0, 0, 'CARTED');//carted
	returnTableStructureForCountsNotBuyer($conn, $categories, 1, 0, 0, 'SOLD');//carted
}

  


?>