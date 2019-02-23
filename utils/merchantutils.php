<?php 
// require 'utils/userutils.php';

function showMerchantOnline($conn){
	// show items that are currently online complete
	// should indicate whether currently booked/in cart
	$merchant = getMerchantId($conn);
	// echo $merchant;
	$query = "SELECT * FROM `products` WHERE `sellerid` = '$merchant' AND `sold` = '0'";
	$query_run = mysqli_query($conn, $query);
	$row = array();
	if(mysqli_num_rows($query_run) != 0){
		// continue
		while($query_row = mysqli_fetch_assoc($query_run)){
			array_push($row, $query_row);
		}
		return $row;
	}else{
		echo "You currently have no items online";
	}
}

function bookeditem($conn){
	// this will retrieve the items currently unavail
	$merchant = getMerchantId($conn);
	$query = "SELECT * FROM `products` WHERE `buyer`!= '0' AND `availability` = '1' AND `sellerid` = '$merchant' AND `sold` = '0'";
	$query_run = mysqli_query($conn, $query);
	$row = array();
	if(mysqli_num_rows($query_run) != 0){
		// continue
		while($query_row = mysqli_fetch_assoc($query_run)){
			array_push($row, $query_row);
		}
		return $row;
	}else{
		return 0;
	}
}

function AddedtoCartItems($conn){
	// this will retrieve the items currently unavailble and buyer is set to someone
	// this are items that have been added to cart
	$merchant = getMerchantId($conn);
	$query = "SELECT * FROM `products` WHERE `buyer`!= '0' AND `availability` = '0' AND `sellerid` = '$merchant' AND `sold` = '0'";
	$query_run = mysqli_query($conn, $query);
	$row = array();
	if(mysqli_num_rows($query_run) != 0){
		// continue
		while($query_row = mysqli_fetch_assoc($query_run)){
			array_push($row, $query_row);
		}
		return $row;
	}else{
		return 0;
	}
}

function checkWhetherItemBelongsToMerchant($conn, $cartitem){
	//this will check the item against product details to see whether it exists
	// should the item exists then return the row contents
	$currentMerchant = getMerchantId($conn);
	$query = "SELECT * FROM `products` WHERE `id` = '$cartitem' AND `sellerid` = '$currentMerchant'";
	$query_run = mysqli_query($conn, $query);
	if(mysqli_num_rows($query_run) != 0){
		// item found
		return mysqli_fetch_assoc($query_run);
	}else{
		return 0;
	}

}

function merchantItemNotinTransit($conn, $item){
	// thsi will check whether item has been picked up from merchant or not
	// true means item is yet to be picked up
	$query = "SELECT * FROM `pickupds` WHERE `item` = '$item' AND `name` = '' AND `idnumber` = ''";
	$query_run = mysqli_query($conn, $query);
	if(mysqli_num_rows($query_run) == 1){
		return True;
		// echo "found";
	}else{
		return False;
		// echo "not found";
	}

}

function retrieveCartContentsFromCarts($conn, $carts){
	//this is used on the checkedoutcarts
	$unpickedItems = array();
	for($x = 0; $x <count($carts); $x++){
		$cartcontents = $carts[$x]['cartcontents'];
		// loop throught the contents
		$cartcontentsArray = convertcartContentsStringToArray($cartcontents);
		for($y = 0; $y < count($cartcontentsArray); $y++){
			$cartItem = $cartcontentsArray[$y];
			// echo $cartItem;
			$Pickstatus = merchantItemNotinTransit($conn, $cartItem);
			if($Pickstatus == True){
				$actualitem = substr($cartItem, 1);
				array_push($unpickedItems, $actualitem);
			}
			// echo $Pickstatus;
		}
		// ensure item not picked up
	}
	return $unpickedItems;
}

function showMerchantContent($conn, $itemid){
	// this will try to retrieve an item with via its id..well this should only succeed if two conditions are met
	// it belongs to the current merchant and also is the actual id provided
	$merchant = getMerchantId($conn);
	// echo $merchant;
	$query = "SELECT * FROM `products` WHERE `sellerid` = '$merchant' AND `id` = '$itemid' AND `sold` = '1'";
	$query_run = mysqli_query($conn, $query);
	if(mysqli_num_rows($query_run) == 1){
		// continue
		$match = mysqli_fetch_assoc($query_run);
		return $match;
	}else{
		return 0;
	}
}

function showMerchantOnlineNotBookedNorCarted($conn){
	// show items that are currently online complete
	// should indicate whether currently booked/in cart
	$merchant = getMerchantId($conn);
	// echo $merchant;
	$query = "SELECT * FROM `products` WHERE `sellerid` = '$merchant' AND `sold` = '0' AND `availability` = '1' AND `buyer` = '0'";
	$query_run = mysqli_query($conn, $query);
	$row = array();
	if(mysqli_num_rows($query_run) != 0){
		// continue
		while($query_row = mysqli_fetch_assoc($query_run)){
			array_push($row, $query_row);
		}
		return $row;
	}else{
		echo "You currently have no items online";
	}
}

function checkWhetherItemBookedorCarted($conn, $productid){
	// this will check whether an item has been booked or carted returning true or false
	$query = "SELECT * FROM `products` WHERE `id` = '$productid' AND `sold` = '0' AND `availability` = '1' AND `buyer` = '0'";
	$query_run = mysqli_query($conn, $query);
	if(mysqli_num_rows($query_run) == 1){
		return True;
	}else{
		return False;
	}
}

function ConfirmProductBelongsToCurrentMerchant($conn, $productid, $merchantid){
	// this will confirm taht the product actually belongs to the person trying to make changes to it
	$query = "SELECT * FROM `products` WHERE `id` = '$productid' AND `sellerid` = '$merchantid'";
	$query_run = mysqli_query($conn, $query);
	if(mysqli_num_rows($query_run) == 1){
		return True;
	}else{
		return False;
	}
}

function ConfirmPausedProductBelongsToCurrentMerchant($conn, $productid, $merchantid){
	// this will confirm taht the product actually belongs to the person trying to make changes to it
	$query = "SELECT * FROM `pausedprods` WHERE `prodid` = '$productid' AND `sellerid` = '$merchantid'";
	$query_run = mysqli_query($conn, $query);
	if(mysqli_num_rows($query_run) == 1){
		return True;
	}else{
		return False;
	}
}

function checkWhetherItemPausedOrNot($conn, $productid, $sellerid){
	// this will basically check to see whether this particular id exists of teh particulr product provided
	$query = "SELECT * FROM `pausedprods` WHERE `prodid` = '$productid' AND `sellerid` = '$sellerid'";
	$query_run = mysqli_query($conn, $query);
	if(mysqli_num_rows($query_run) == 1){
		return True;
	}else{
		return False;
	}
}

function createnewPauseRow($conn, $productid, $itemtitle, $sellerid, $category, $subcategory, $imageone, $imagetwo, $imagethree, $price, $availability, $buyer, $size, $details, $sex, $rating, $label, $sold, $up_date, $up_time){
	// This will create a new entry for the particular product
	$query = "INSERT INTO `pausedprods`(`id`, `prodid`, `itemtitle`, `sellerid`, `category`, `subcategory`, `imageone`, `imagetwo`, `imagethree`, `price`, `availability`, `buyer`, `size`, `details`, `sex`, `rating`, `label`, `sold`, `up_date`, `up_time`) VALUES ('', '$productid', '$itemtitle', '$sellerid', '$category', '$subcategory', '$imageone', '$imagetwo', '$imagethree', '$price', '$availability', '$buyer', '$size', '$details', '$sex', '$rating', '$label', '$sold', '$up_date', '$up_time')";
	if($query_run = mysqli_query($conn, $query)){
		return True;
	}else{
		return False;
	}
}

function deleteEntryProductRow($conn, $productid, $sellerid){
	// this will delete an itemrow from the products table
	$query = "DELETE FROM `products` WHERE `id` = '$productid' AND `sellerid` = '$sellerid'";
	if($query_run = mysqli_query($conn, $query)){
		return True;
	}else{
		return False;
	}
}

function deletePauseEntryRow($conn, $productid, $sellerid){
	// this will delete an itemrow from the products table
	$query = "DELETE FROM `pausedprods` WHERE `prodid` = '$productid' AND `sellerid` = '$sellerid'";
	if($query_run = mysqli_query($conn, $query)){
		return True;
	}else{
		return False;
	}
}

function createANewProductRow($conn, $itemtitle, $sellerid, $category, $subcategory, $imageone, $imagetwo, $imagethree, $price, $availability, $buyer, $size, $details, $sex, $rating, $label, $sold, $up_date, $up_time){
	// thsi will create a new product row in the products table
	$query = "INSERT INTO `products`(`id`, `itemtitle`, `sellerid`, `category`, `subcategory`, `imageone`, `imagetwo`, `imagethree`, `price`, `availability`, `buyer`, `size`, `details`, `sex`, `rating`, `label`, `sold`, `up_date`, `up_time`) VALUES ('', '$itemtitle', '$sellerid', '$category', '$subcategory', '$imageone', '$imagetwo', '$imagethree', '$price', '$availability', '$buyer', '$size', '$details', '$sex', '$rating', '$label', '$sold', '$up_date', '$up_time')";
	if($query_run = mysqli_query($conn, $query)){
		return True;
	}else{
		// return False;
		echo mysqli_error($conn);
	}
}

function retrievePausedProdstAllFields($conn, $table, $itemid){
	$query = "SELECT * FROM `$table` WHERE `prodid`='$itemid'";
	$query_run = mysqli_query($conn, $query);
	$query_num_rows = mysqli_num_rows($query_run);
	if($query_num_rows == 1){
		$query_row = mysqli_fetch_assoc($query_run);
		return $query_row;
	}else{
		return 0;
	}
}

function retrievePausedProductsMerchant($conn, $merchid){
	// this will return all teh paused items belongin to this merchant
	$query = "SELECT * FROM `pausedprods` WHERE `sellerid` = '$merchid'";
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
?>