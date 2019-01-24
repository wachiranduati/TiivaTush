<?php
function one(){
    setcookie("test_cookie", "test", time() + 3600, '/');
    three();
}

function three(){
    if(count($_COOKIE) > 0) {
    echo "";
        //two();
} else {
    echo "<div class=\"alert alert-danger\">
                            <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
                            <strong>Error!</strong> Please enable cookies on your browser
                        </div>";
}
}

function two(){
    setcookie("test_cookie", "", time() - 3600);
}

one();
?>