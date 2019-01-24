<?php
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    
    if(!empty($username) && !empty($password)){
        $query = "SELECT `id` FROM `users` WHERE `username`='".mysql_real_escape_string($username)."' AND `password`='".mysql_real_escape_string($password)."'";
        $query_run = mysql_query($query);
        $query_num_rows = mysql_num_rows($query_run);
        if($query_num_rows == 0){
            echo 'Invalid username/password combination';
        }else{
            $user_id = mysql_result($query_run, 0, 'id');
            $_SESSION['$user_id'] = $user_id;
            header('Location:index.php');
        }
    }else{
        echo 'You must supply a username and password';
    }
}
?>
<form action="<?php echo $current_file;?>" method="POST">
    Username:<input type="text" name="username">
    Password:<input type="password" name="password">
    <input type="submit" value="Log in">
</form>