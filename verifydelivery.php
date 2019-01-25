<?php
//echo "Were here";
require 'connect.php';
$today = Date(Y).'-'.Date(m).'-'.Date(d);
$time = Date(H).':'.Date(i).':'.Date(s);


if(isset($_POST['name']) && isset($_POST['useridno']) && isset($_POST['cartno'])){
    // all input fields have been filled
    $name = $_POST['name'];
    $useridno = $_POST['useridno'];
    $cartno = $_POST['cartno'];
    if(!empty($name) && !empty($useridno) && !empty($cartno)){
        // all inputs have a value
        // free to run the rest of the code below
        //$name = "kafunda kidogo";
//$useridno = "30298322323";
//$cartno = "cfae9a4b9d7908a4ad14150f2b6ee8e3";

//echo $time;
// add items to the database
// first check whether cart no actually exists in the database
// first check to ensure no other row exists with the same cartno
$querycheck = "SELECT `cartname`,`names` FROM `sold` WHERE `cartname`='$cartno'";
$query_check_run = mysqli_query($querycheck);
$query_check_num_rows = mysqli_num_rows($query_check_run);
$query_check_row = mysqli_fetch_assoc($query_check_run);
$userordered = $query_check_row['names'];
if($query_check_num_rows == 0){
    // found nothing
    //die("Order with that order no does not exist");
//    echo "<div class=\"alert alert-danger\">
//        <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
//        <strong>Error!!</strong>
//        <span>Order with that Order_No does not exist</span>
//        </div>
//";
   die ("<div class=\"alert alert-danger\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
        <strong>Error!!</strong>
        <span>Order with that Order_No does not exist</span>
        </div>
");
    
}else{
    // found something
    // to prevent double entry of the same records check whether the particular order 
    // has already been submitted to the deliveries database
    $query_confirm = "SELECT `cartno`,`date`,`time` FROM `deliveries` WHERE `cartno`='$cartno'";
    $query_confirm_run = mysqli_query($query_confirm);
    $query_confirm_num_rows = mysqli_num_rows($query_confirm_run);
    $query_confirm_row = mysqli_fetch_assoc($query_confirm_run);
    $confirmdate = $query_confirm_row['date'];
    $confirmtime = $query_confirm_row['time'];
    if($query_confirm_num_rows == 0){
        // does not exist
        // insert the order delivery here
        $query = "INSERT INTO `deliveries` (`id`,`cartno`,`name`,`nameid`,`date`,`time`) VALUES ('','$cartno','$name','$useridno','$today','$time')";
        if($query_run = mysqli_query($conn, $query)){
            // delivery has been confirmed
            //echo "Delivery confirmed";
            echo "<div class=\"alert alert-success\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
                <strong>Success!!</strong>
                <span>Delivery confirmed for <span class=\"text-capitalize\">$userordered</span> picked up by <span class=\"text-capitalize\">$name<span></span>
                </div>
                ";
        }else{
            // delivery has not been confirmed
            //echo "Sorry try again later, we ran into some error";
            die ("<div class=\"alert alert-danger\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
                <strong>Error!!</strong>
                <span>Sorry try again later, we ran into some error</span>
                </div>
                ");
        }
        
    }else{
        // delivery exists.....it was already delivered/submitted
        //echo("delivery was already made on $confirmdate at $confirmtime");
        echo "<div class=\"alert alert-info\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
                <strong>Hola!!</strong>
                <span>delivery was already made on $confirmdate at $confirmtime HRS</span>
                </div>
                ";
    }
    
}

    }else{
        // one of the inputs must be empty
        // shouldnt be physically be possible
        // LOG THIS*****************************
        // kill process
        die ("<div class=\"alert alert-danger\">
            <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
            <strong>Error!!</strong>
            <span>Sorry try again later, we ran into some error</span>
            </div>
            ");
    }
}else{
    // one of the input fields has not been set kill the process
    die ("<div class=\"alert alert-danger\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
        <strong>Error!!</strong>
        <span>Sorry try again later, we ran into some error</span>
        </div>
        ");
}


?>







