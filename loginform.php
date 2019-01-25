<?php
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    
    if(!empty($username) && !empty($password)){
        $query = "SELECT `id` FROM `users` WHERE `username`='".mysqli_real_escape_string($conn, $username)."' AND `password`='".mysqli_real_escape_string($conn, $password)."'";
        $query_run = mysqli_query($conn, $query);
        $query_num_rows = mysqli_num_rows($query_run);
        if($query_num_rows == 0){
            echo 'Invalid username/password combination';
        }else{
            $user_id = mysqli_result($query_run, 0, 'id');
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