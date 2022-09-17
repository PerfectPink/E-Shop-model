<?php
include('../header.php');

$host = 'localhost';
	$user = 'root';
	$pass = 'root';
	$name = 'users';
	$link = mysqli_connect($host, $user, $pass, $name);
?>
<html>
<form action="" method="POST">
	<input name="login">
	<input name="password" type="password">
	<input type="submit">
</form>
</html>
<?php
    session_start();
    if (!empty($_POST['login']) and !empty($_POST['password'])){ 
        $login = $_POST['login'];
        $password = $_POST['password'];
        $query = "SELECT * FROM users WHERE login='$login'";
        $result = mysqli_query($link, $query);
        $user = mysqli_fetch_assoc($result);
        if (!empty($user) and $password == $user['password']){
            $_SESSION['auth'] = true;
            $_SESSION['username'] = $user['username'];
        }else{
            echo('Введены неправильные данные');
        }
    }
?>