<?php
include('../header.php');
?>

<style>
<?php include('../style/reg-auth-form.css');?>
</style>
<?php
$host = 'localhost';
	$user = 'root';
	$pass = '';
	$name = 'e-shop';
	$link = mysqli_connect($host, $user, $pass, $name);
?>
<html>
<form action="" method="POST" id="authregform">
	<input name="login" placeholder="Логин">
	<input name="password" type="password" placeholder="Пароль">
	<input type="submit" value="Войти">
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
            header('Location: http://e-shop-model/index.php',true,301);
        }else{
            echo('Введены неправильные данные');
        }
    }
    include('../footer.php');
?>