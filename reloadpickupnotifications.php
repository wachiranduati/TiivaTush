<?php 
require 'connect.php';
require 'utils/adminutils.php';
// The entire script checks thourh all the checked out carts and passes them onto the pickups database
// fields noted in use mostly are the checkoutcarts update that shows whether this cart has been setup in the pickups 
//database or not
// This script will initially checked whether the autotest ran recently 
// as recent as 5 seconds ago....if 5 seconds have not matured then the script will die
// this is to prevent overloading the server
$current_time_on_pickup_row_autotest = getAutotestTime($conn, 'pickup');
// echo checkIfAtleast_ThisTimeHasElapsed('2019-02-11 16:40:42', '5 seconds');
// echo getAutotestTime($conn, 'pickup');


if(checkIfAtleast_ThisTimeHasElapsed($current_time_on_pickup_row_autotest, '5 seconds') == True){
	// atleast 5 seconds have elapse continue
	$row = getUnUpdatedCarts($conn, 0);
	// retrieve all the new carts i.e. incomplete and updated is 0....meaning they're not in the pickupdb
	if($row != 0){
		//continue.. carts were found
		for($x = 0; $x < count($row); $x++){
			// loop throught the contents returned
			$cartname = $row[$x]['cartname'];
			$cartid = $row[$x]['cartid'];
			$cartcontents = $row[$x]['cartcontents'];
			// need item, cartname, and the sellerid + 21
			$cartcontentarray = explode(',', $cartcontents);
			// print_r($cartcontentarray);
			// the aim here is to now loop in the cart contents retrieving the seller id
			// then finally inserting this into the transitdbs table
			// we should check for double copied items since we're retrieving them from the db then its okay mtush exist // in singles
			for($y = 0; $y < count($cartcontentarray); $y++){
				$currentitem = $cartcontentarray[$y];
				$dbs = substr($currentitem,0,1); // returns M
        		$itemid = substr($currentitem,1); // returns the item id
        		// echo $item.'<br>';
        		if(strtoupper($dbs) == 'M'){
        			// retrieve the seller id
        			$sellerid = retrieveProductField($conn, 'products', 'sellerid', $itemid);
        			if($sellerid != 0){
        				$newsellerid = ceil($sellerid + 21);
        				// echo $newsellerid;
        				echo createNewPickUpIdEntry($conn, $currentitem, $newsellerid, currentTime(), $cartname);
        				
        			}else{
        				die('could not retrieve sellerid, possible error with the prod table');
        			}
        			
        		}
			}
			// update the checkout carts now after the forloop to show that all the content has been
			// updated into the pickupds table succesfully and also indicate that cart row has already been checked
			echo updateCheckoutCart($conn, $cartid);

		}
		// update the autotest now that everything ran successfully.
		echo updateAutotestField($conn, 'pickup', currentTime());
		
	}else{
		// no new cart was found...the number of rows returned was 0
		echo "all the carts are already updated";
	}
}else{
	// 5 seconds have not elapsed since the update so do nothing...this is not an ERROR
	echo "This is very fresh, wont update";
}
?>