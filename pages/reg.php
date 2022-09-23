<?php
include('../header.php');
?>

<style>
    <?php include('../style/reg-auth-form.css'); ?>
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
    <input name="username" type="text" placeholder="Имя">
    <input type="submit" value="Зарегестрироваться" onclick="">
</form>

</html>
<?php
session_start();
if (!empty($_POST['login']) and !empty($_POST['password']) and !empty($_POST['username'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $username = $_POST['username'];
    $query = "SELECT * FROM users WHERE login = $login";
    $user = mysqli_fetch_assoc(mysqli_query($link, $query));
    if (empty($user)) {
        $query = "INSERT INTO users SET login = '$login',password = '$password',username = '$username'";
        mysqli_query($link, $query);
        $_SESSION['auth'] = true;
        $_SESSION['username'] = $username;
        ?> 
        <script>redirect()</script>
        <?php
    } else {?>
        <script>alert("К сожалению такой логин занят")</script>
        <?php
    }
}
include('../footer.php');
?>