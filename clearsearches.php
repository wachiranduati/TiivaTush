<?php
$time =  Date(H).':'.Date(i).':'.Date(s);
$day =  Date(d).'.'.Date(M).'.'.Date(Y);
if(isset($_POST['action'])){
    $action = $_POST['action'];
    if($action == 'Queried'){
        $handle = fopen('logs/Queried_searches.txt','w');
        fwrite($handle,'Erased on '.$day.' at '.$time.PHP_EOL);
        fclose($handle);
        
    }else{
        $handle = fopen('logs/unQueried_searches.txt','w');
        fwrite($handle,'Erased on '.$day.' at '.$time.PHP_EOL);
        fclose($handle);
    }
}else{
    echo 'shit';
}
?>