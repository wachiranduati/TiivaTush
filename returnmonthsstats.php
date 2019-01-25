<?php
require 'connect.php';
//
$thismonth = 1;
$todayyear = Date(Y);
//echo $todayyear.'<br>';
// STARTS HERE
// ENDS HERE
// why first loop, create an array with traffick from same months 
// then in order echo the array position in order with every successful sale
// if everthing is correct it should be fine
// this is risky tho, i dont like risky
    $query = "SELECT * FROM `sold` WHERE YEAR(DATE(`date`)) = $todayyear ORDER BY `date` ASC";
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
                $nameofmonth = date('M',strtotime($thedate));
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

$trafcount = 0;

echo "
        <div class=\"row\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    
                    <span class=\"text-uppercase text-center\">sales for $todayyear</span>
                    
                    </div>
                </div>
                <div class=\"row\" style=\"margin-top:15%;\">
                    <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1\"></div>
                    <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-10\">
    ";

while($thismonth <= 12){
// return all dates where month equals $thismonth integer value
$query = "SELECT * FROM `sold` WHERE MONTH(DATE(`date`)) = $thismonth ORDER BY `date` ASC";
//$query = "SELECT * FROM `sold` ORDER BY `date` ASC";
    
$query_run = mysqli_query($conn, $query);
$query_num_rows = mysqli_num_rows($query_run);
if($query_num_rows != 0){
        $row = mysqli_fetch_assoc($query_run);
        $dateq = $row['date'];
        $nameofmonth = date('M',strtotime($dateq));
    // get each items count to power it to the month its in
        // STARTS HERE
        
        // ENDS HERE
            if(in_array($nameofmonth,$dates)){
                // found find its position and echo the position as a value in the sales count
                $dateposition2 = array_search($nameofmonth,$dates);
                //echo $dateposition2;
                            //echo '<span class=\'text-uppercase\' onclick="mimi();">'.$nameofmonth.'<sup>'.$traffick[$dateposition2].'</sup> ,'.$todayyear.'</span><br>';
                echo "<a href=\"#\" style=\"text-decoration:none;\" onclick=\"rendermonth();\">$nameofmonth<sup>$traffick[$dateposition2]&nbsp;&nbsp;</sup>$todayyear</a><br>";
                
                
            }else{
                // no found
                die();
            }
        

        
    //echo $row['date'].'<br>';
}else{
    //echo "No sales<br>";
    
    //$dateq = $row['date'];
    //$dateq = $thismonth;
    $nameofmonth = date('M',strtotime($thismonth));
    //echo $nameofmonth.'<br>';
    //echo $thismonth.'<br>';
    //echo $nameofmonth.'<br>';
    $monthname = DateTime::createFromFormat('m',$thismonth)->format('M');
    echo '<span class=\'text-uppercase text-center\' style=\'margin-top:12px;\'>'.$monthname.'<sup>0</sup> ,'.$todayyear.'</span><br>';
}
    $thismonth++;
    $trafcount = $trafcount + 1;
}
echo "
             </div>
                <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1\"></div>
            </div>
        </div>
    </div>   

    ";
echo "
        <div class=\"col-lg-5 col-md-5 col-sm-5 col-xs-5\" style=\"font-family:kok;\">
        <div id=\"chartvalues\" style=\"display:none;visibility:hidden;\">$traffickstring</div>

        <div id=\"chartdays\" style=\"display:none;visibility:hidden;\">$datesstring</div>
    ";

?>


            
           
        
        
    
    