
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/header.css">
    <link rel="stylesheet" href="style/footer.css">
    <title>SH</title>
</head>
<body>
<header>
    <div class="header__left">
        <a href="/index.php">
            <img src="/images/icons/logo.jpg" alt="" onclick="">
        </a>
        <div>
            <a href="#">Женщинам</a>
            <a href="/pages/mans-catalog.php">Мужчинам</a>
            <a href="#">Детям</a>
            <a href="#">Новинки</a>
            <a href="#">О нас</a>
        </div>
    </div>
    <div class="header__right">
        <div>
            <img src="/images/icons/account.png" alt="">
            <?php
                if($_SESSION['auth'] == true){
                    ?>
                    <html>
                        <span class="user-username"><?php $_SESSION['username']?></span>
                    </html>
                    <?php

                }else{?>
                    <html>
                    <a href="/pages/auth.php">Войти</a>
                    <span class="logRegBreaker">/</span>
                    <a href="/pages/reg.php">Регистрация</a>
                    </html>
                    <?php
                }
            ?>
            
        </div>
        <div>
            <img src="/images/icons/bascet.png" alt="">
            <a href="#">Корзина</a>
        </div>
    </div>
</header>
<div class="sh"></div>