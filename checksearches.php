<?php
if(isset($_POST['action'])){
    $action = $_POST['action'];
    if($action == 'Queried'){
        $searches = file('logs/Queried_searches.txt');
        foreach($searches as $line){
            echo $line.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
        }
    }else{
        $searches = file('logs/unQueried_searches.txt');
        foreach($searches as $line){
            echo $line.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
        }
    }
}else{
    echo 'shit';
}
?>