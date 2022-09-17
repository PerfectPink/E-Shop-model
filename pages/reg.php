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
	<input name="login" placeholder="Логин">
	<input name="password" type="password" placeholder="Пароль">
    <input name="username" type="text" placeholder="Имя">
	<input type="submit" >
</form>
</html>
<?php
    session_start();
    if(!empty($_POST['login']) and !empty($_POST['password']) and !empty($_POST['username'])){
        $login = $_POST['login'];
        $password = $_POST['password'];
        $username = $_POST['username'];
        $query = "SELECT * FROM users WHERE login = $login";
        $user = mysqli_fetch_assoc(mysqli_query($link,$query));
        if(empty($user)){
            $query = "INSERT INTO users SET login = '$login',password = '$password',username = '$username'";
            mysqli_query($link,$query);
            $_SESSION['auth'] = true;
            $_SESSION['username'] = $username;
            echo('Вы успешно зарегестрировались, '.$username.'! Переход на главную страницу через 5 секунд...');
        }else{
            echo('к сожалению такой логин уже занят!');
        }
        

    }else{
        switch ($_POST) {
            case empty($_POST['login']):
                echo('Не введён логин');
                break;
            case empty($_POST['password']):
                echo('Не введён пароль');
                break;
            case empty($_POST['username']):
                echo('Не введёно имя пользователя');
                break;
            
            default:
                echo('проверьте правильность введёных данных');
                break;
        }
    }
?>