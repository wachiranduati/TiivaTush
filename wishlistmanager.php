<?php 
session_start();
require 'connect.php';
require 'utils/adminutils.php';

if(userLoggedIn() != True){
	die('You need to be logged in');
}

function addToWishlist($conn, $itemid){
	// this will add an item to the users wishlist
	// this will vary ...in one case the the product row might not exist
	// on the other hand it might exist and the user simply does not exist
	// step 1 check whether itemrow exists
	$user = getUserID();
	$now = currentTime();
	$wishStatus = checkWhetherItemIdExists($conn, $itemid);
	if($wishStatus != False){
		$wishExists = checkWhetherUserExistsinWishlist($conn, $wishStatus);
		if($wishExists == True){
			//item exists in users wishlist
			echo "Item already in wishlist";
		}else{
			// append new user to itemid
			$oldusers = $wishStatus['users'];
			$olddates = $wishStatus['date'];
			$newUsersList = appendNewValueToCommaSeperatedDataUserProf($oldusers, $user);
			$newdatesList = appendNewValueToCommaSeperatedDataUserProf($olddates, $now);
			$AddtoWishlistState = updateWishlist($conn, $itemid, $newUsersList, $newdatesList);
			if($AddtoWishlistState == True){
				echo "Added to the item to wishlist";
			}else{
				echo "Could not add item to wishlist";
			}

		}
	}else{
		// create a new row for the item id and add the user
		$newWishAdd = createNewItemidWishlist($conn, $itemid);
		if($newWishAdd == True){
			echo "Added Item to Wishlist";
		}else{
			echo "Error Item to Wishlist";
		}
	}
}

// addToWishlist($conn, 1);

function checkWhetherUserHasIteminWishlist($conn, $itemid){
	// this will primarily be used in the product details page to check whether an item is already in the uses wishlist
	$user = getUserID();
	$now = currentTime();
	$wishStatus = checkWhetherItemIdExists($conn, $itemid);
	if($wishStatus != False){
		$wishExists = checkWhetherUserExistsinWishlist($conn, $wishStatus);
		if($wishExists == True){
			//item exists in users wishlist
			echo 1;
		}else{
			// append new user to itemid
			echo 0;
		}
	}
}
// checkWhetherUserHasIteminWishlist($conn, 140);

function showallMyWishlistItems($conn){
	//this should return a list of all the items the user has in their wishlist
	$user = getUserID();
	$imagepre = returnImagePreAddrMtushUserProf();

	$wishlistsArray = returnallWishlistItems($conn);
	echo "<div class=\"table-responsive\">
	  <table class=\"table\">
	    <thead>
	      <tr>
	        <th>No</th>
	        <th>Item</th>
	        <th>Name</th>
	        <th>Category</th>
	        <th>Subcategory</th>
	        <th>Price</th>
	        <th>Label</th>
	        <th>size</th>
	        <th>sex</th>
	        <th>status</th>
	      </tr>
	    </thead>
	    <tbody>";
	if($wishlistsArray != 0){
		// continue
		if(count($wishlistsArray) != 0){
			// continue
			$numb = 0;
			for($x = 0; $x < count($wishlistsArray); $x++){
				$usersList = $wishlistsArray[$x]['users'];
				$usersArray = convertCommaSeperateStringIntoArray($usersList);
				if(in_array($user, $usersArray)){
					// found
					$productid = $wishlistsArray[$x]['prodid'];
					$productDetails = retrieveproductAllFieldsUserProf($conn, 'products', $productid);
					$prodid = $productDetails['id'];
					$numb += 1;
					$productName = $productDetails['itemtitle'];
					$image = $imagepre.''.$productDetails['imageone'];
					$category = $productDetails['category'];
					$subcategory = $productDetails['subcategory'];
					$price = $productDetails['price'];
					$label = $productDetails['label'];
					$size = $productDetails['size'];
					$sex = $productDetails['sex'];
					$sold = $productDetails['sold'];
					if($sold == 0){
						$status = 'AVAILABLE';
						$state = 'success';
					}else{
						$status = 'SOLD';
						$state = 'danger';
					}
					// print_r($itemDetails);
					echo "
							<tr>
								<td>$numb</td>
								<td><a href=\"productdetails.php?id=$prodid\"><img src=\"$image\" class=\"img-responsive\" style=\"max-height:50px;\"></a></td>
								<td>$productName</td>
								<td>$category</td>
								<td>$subcategory</td>
								<td>$price Ksh</td>
								<td>$label</td>
								<td>$size</td>
								<td>$sex</td>
								<td class=\"$state\">$status</td>
							</tr>
						";
				}
			}
		}else{
			echo "
				<tr>
					<td>No records found</td>
				</tr>
			";
		}
	}else{
		echo "
				<tr>
					<td>No records found</td>
				</tr>
			";
	}
	echo "</tbody>
				</table>
				</div>";
}
// showallMyWishlistItems($conn);

if(isset($_POST['addtowishlist']) && !empty($_POST['addtowishlist']) && is_numeric($_POST['addtowishlist'])){
	$prodid = mysqli_real_escape_string($conn, $_POST['addtowishlist']);
	addToWishlist($conn, $prodid);
}elseif(isset($_POST['inwishlist']) && !empty($_POST['inwishlist']) && is_numeric($_POST['inwishlist'])){
	$prodid = mysqli_real_escape_string($conn, $_POST['inwishlist']);
	checkWhetherUserHasIteminWishlist($conn, $prodid);
}elseif(isset($_POST['mywishlist']) && $_POST['mywishlist'] == 'k4l2nb2j3h'){
	showallMyWishlistItems($conn);
}
?>