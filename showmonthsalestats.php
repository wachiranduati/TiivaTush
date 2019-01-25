<?php
require 'connect.php';
echo "Were in the months show here<br>";
// THIS SHOWS THE DAYS IN A MONTH AS THEY APPEAR IN A CALENDAR
// this is a function called on a specific month
// only the clickable months can access this
// so we still have to filter for the empty months/ no sales
// then display all days like the months but
// the no sales days unclickable too except the sales days showing sales as
// a <sup> tag

// ALGORITHM
// first find the number of days in the selected month 
// create a while loop for the number of days in the month
// with every loop show the days with sales and <sup> their values

$todaymonth = Date(m);
// wont hurt to show the year on the month name
$todayyear = Date(Y);
//echo 'Were in month '.$todaymonth.' so below should be the stats exclusively for that month<br>';
// STARTS HERE
// ENDS HERE
// why first loop, create an array with traffick from same months 
// then in order echo the array position in order with every successful sale
// if everthing is correct it should be fine
// this is risky tho, i dont like risky
    $query = "SELECT * FROM `sold` WHERE MONTH(DATE(`date`)) = $todaymonth ORDER BY `date` ASC";
// query from a specific year ... this will be change by the $_post requests 
            // create array and start pumping values into it
            //array($dates);
            $dates = array();
            // creates an empty dates array
            $traffick = array();
            // creates an empty dates traffick array
            $query_run = mysqli_query($conn, $query);
            while($row = mysqli_fetch_assoc($query_run)){
                //echo $row['date'].'<br>';
                $thedate = $row['date'];
                $nameofmonth = date('j',strtotime($thedate));
                //echo $nameofmonth;
                // first check whether value exist in array
                if(in_array($nameofmonth,$dates)){
                    //Found update count
                    // update datestraffick array
                    // find position of the value found
                    $dateposition = array_search($nameofmonth,$dates);
                    // change the value
                    // first get the value of the position
                    $positionvalue = $traffick[$dateposition];
                    //now change the position value with an increment of 1
                    $traffick[$dateposition] = ceil($positionvalue + 1);
                    //$dates = array_values($dates);
                }else{
                    //not found so add to array
                    array_push($dates,$nameofmonth);
                    // update count to 1 on same position
                    array_push($traffick,"1");
                }
                // array with all dates occuring in singles created now

            }
            //print_r($dates).'<br>';
           // echo "<br>";
//    print_r($traffick);
//echo "<br>";
//    print_r($dates);
//echo "<br>";

            //print_r($traffick).'<br>';
            // echo the arrays as strings
            $datesstring = implode(',',$dates);
            $traffickstring = implode(',',$traffick);
            echo $datesstring.'<br>';
            echo $traffickstring.'<br>';
echo "
        <div class=\"row\">
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
    ";

// return all dates where month equals $thismonth integer value
$query = "SELECT * FROM `sold` WHERE MONTH(DATE(`date`)) = $todaymonth ORDER BY `date` ASC";
//$query = "SELECT * FROM `sold` ORDER BY `date` ASC";
    
$query_run = mysqli_query($conn, $query);
$query_num_rows = mysqli_num_rows($query_run);
if($query_num_rows != 0){
        $row = mysqli_fetch_assoc($query_run);
        $dateq = $row['date'];
        $nameofmonth = date('j',strtotime($dateq));
        $nameofcurrentmonth = date('M',strtotime($dateq));
    // get each items count to power it to the month its in
        // STARTS HERE
        
        // ENDS HERE
            if(in_array($nameofmonth,$dates)){
                // found find its position and echo the position as a value in the sales count
                $dateposition2 = array_search($nameofmonth,$dates);
                //echo $dateposition2;
                            //echo $nameofmonth.'<sup>'.$traffick[$dateposition2].'</sup> ,'.$todayyear.'<br>';
                            echo $nameofcurrentmonth.' ,'.$todayyear.'sales'.$traffick[$dateposition2].'<br>';
                        // query the days present in the database from this month
                        // create an array
                $querydays = "SELECT * FROM `sold` WHERE MONTH(DATE(`date`)) = $todaymonth ORDER BY `date` ASC";
                $querydays_run = mysqli_query($conn, $querydays);
                $querydays_num_rows = mysqli_num_rows($querydays_run);
                if($querydays_num_rows != 0){
                    // month exists and days should also exist
                             //echo date('t');// returns the number of days in the present month
    //$number = cal_days_in_month(CAL_GREGORIAN, 2, 2004);
    $number = cal_days_in_month(CAL_GREGORIAN, $todaymonth, $todayyear);
    // returns the number of days in a month
    //echo $number;
                    echo "Fr&nbsp;&nbsp;Sa&nbsp;&nbsp;&nbsp;Su&nbsp;&nbsp;&nbsp;Mo&nbsp;&nbsp;Tu&nbsp;&nbsp;We&nbsp;&nbsp;&nbsp;Th&nbsp;&nbsp;<br>";
                    
                    $day = 1;
//                     while($day <= $number ){
//                         if($day % 7 != 0){
//                             if($day < 10){
//                                echo '&nbsp;'.$day.'&nbsp;&nbsp;&nbsp;&nbsp;';
//                             }else{
//                                echo $day.'&nbsp;&nbsp;&nbsp;'; 
//                             }
//                         }else{
//                             echo $day.'&nbsp;&nbsp;<br>';
//                         }
//                         $day++;
//                     }
$thismonth = 1;
while($thismonth <= $number){
// return all dates where month equals $thismonth integer value
$query = "SELECT * FROM `sold` WHERE MONTH(DATE(`date`)) = $todaymonth AND DAY(DATE(`date`)) = $thismonth ORDER BY `date` ASC";
//$query = "SELECT * FROM `sold` ORDER BY `date` ASC";
    
$query_run = mysqli_query($conn, $query);
$query_num_rows = mysqli_num_rows($query_run);
if($query_num_rows != 0){
        $row = mysqli_fetch_assoc($query_run);
        $dateq = $row['date'];
        $nameofmonth = date('j',strtotime($dateq));
    // get each items count to power it to the month its in
        // STARTS HERE
        
        // ENDS HERE
    //echo '<span style=\'color:red;\'>&nbsp;'.$nameofmonth.'</span>&nbsp;&nbsp;&nbsp;&nbsp;';
//            if(in_array($nameofmonth,$dates)){
//                // found find its position and echo the position as a value in the sales count
//                $dateposition2 = array_search($nameofmonth,$dates);
//                //echo $dateposition2;
//                            //echo $traffick[$dateposition2];
//            }else{
//                // no found
//            }
        if($nameofmonth % 7 != 0){
         if($nameofmonth < 10){
            //echo '&nbsp;'.$nameofmonth.'&nbsp;&nbsp;&nbsp;&nbsp;';
            echo '<a href=\'#\' onclick=\'renderdays();\' style=\'color:red;\'>&nbsp;'.$nameofmonth.'</a>&nbsp;&nbsp;&nbsp;&nbsp;';
         }else{
            echo '<a href=\'#\' onclick=\'renderdays();\' style=\'color:red;\'>'.$nameofmonth.'</a>&nbsp;&nbsp;&nbsp;'; 
         }
     }else{
            echo '<a href=\'#\' onclick=\'renderdays();\' style=\'color:red;\'>'.$nameofmonth.'</a>&nbsp;&nbsp;<br>';
     }
    //echo $nameofmonth;

        
}else{
    //echo "No sales<br>";
    
    //$dateq = $row['date'];
    //$dateq = $thismonth;
    $nameofmonth = date('j',strtotime($thismonth));
    //echo $nameofmonth.'<br>';
    //echo $thismonth.'<br>';
    //echo $nameofmonth.'<br>';
    //$monthname = DateTime::createFromFormat('m',$thismonth)->format('M');
    //echo $thismonth.'&nbsp;&nbsp;<br>';
    if($thismonth % 7 != 0){
         if($thismonth < 10){
            //echo '&nbsp;'.$thismonth.'&nbsp;&nbsp;&nbsp;&nbsp;';
            echo '<a href=\'#\' onclick=\'renderdays();\' style=\'color:black;\'>&nbsp;'.$thismonth.'</a>&nbsp;&nbsp;&nbsp;&nbsp;';
         }else{
            echo '<a href=\'#\' onclick=\'renderdays();\' style=\'color:black;\'>'.$thismonth.'</a>&nbsp;&nbsp;&nbsp;'; 
         }
     }else{
            echo '<a href=\'#\' onclick=\'renderdays();\' style=\'color:black;\'>'.$thismonth.'</a>&nbsp;&nbsp;<br>';
     }
}
    $thismonth++;
    //echo $thismonth;
}
                    

                }else{
                    // month does not exist so kill this query
                    die("Sorry No sales from this month");
                }

            }else{
                // no found
            }
        

        
    //echo $row['date'].'<br>';
}else{
    // no records for this month kill the script
    die('No sales for selected month');
}
echo "
        <div class=\"col-lg-5 col-md-5 col-sm-5 col-xs-5\" style=\"font-family:kok;\">
        <div id=\"chartvalues\" style=\"display:none;visibility:hidden;\">$traffickstring</div>

        <div id=\"chartdays\" style=\"display:none;visibility:hidden;\">$datesstring</div>
    ";
echo "
                </div>
        </div>
    ";
?>

    
    