<?php
require 'connect.php';
//echo "Found me";
// query check out carts
// return dates in order
// for loop for common days to increase count
// return count as data from a date and if the date occurs in multiple scenarios increase the count
// for loop with the earliest date .. find the number of rows and increase count...create array 
// then loop to the next date
// creating seperete date and day arrays
$query = "SELECT * FROM `hits_ip` ORDER BY `date` ASC";
// create array and start pumping values into it
//$dates = 
//array($dates);
$dates = array();
// creates an empty dates array
$traffick = array();
// creates an empty dates traffick array
$query_run = mysqli_query($conn, $query);
while($row = mysqli_fetch_assoc($query_run)){
    //echo $row['date'].'<br>';
    $thedate = $row['date'];
    //$thetraffick = $row['traffick'];
    // first check whether value exist in array
    if(in_array($thedate,$dates)){
        //Found update count
        // update datestraffick array
        // find position of the value found
        $dateposition = array_search($thedate,$dates);
        // change the value
        // first get the value of the position
        $positionvalue = $traffick[$dateposition];
        //now change the position value with an increment of 1
        $traffick[$dateposition] = ceil($positionvalue + 1);
        //$dates = array_values($dates);
    }else{
        //not found so add to array
        array_push($dates,$thedate);
        // update count to 1 on same position
        array_push($traffick,1);
    }
    // array with all dates occuring in singles created now
    
}
//print_r($dates).'<br>';
//echo "<br>";
//print_r($traffick).'<br>';
// echo the arrays as strings
$datesstring = implode(',',$dates);
$traffickstring = implode(',',$traffick);
//echo $datesstring.'<br>';
//echo $traffickstring.'<br>';

echo "
        <div class=\"col-lg-5 col-md-5 col-sm-5 col-xs-5\" style=\"font-family:kok;\">
        <div id=\"chartvalues\" style=\"display:none;visibility:hidden;\">$traffickstring</div>

        <div id=\"chartdays\" style=\"display:none;visibility:hidden;\">$datesstring</div>
    ";
?>








































