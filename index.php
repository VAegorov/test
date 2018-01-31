<?php
session_start();
if (!isset($_SESSION['total'])) {
    $_SESSION['total'] = 0;
}
if (isset($_REQUEST['delete'])) {
    $_SESSION = [];
}
if (isset($_REQUEST['buy'])) {
    foreach ($_REQUEST as $key=>$price) {
        if ($key !== 'buy') {
            $_SESSION[$key] = (int) $price;
            $_SESSION['total'] += (int) $price;
        }
    }
}
//@var_dump($_SESSION);
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2 align="center">Магазин</h2>
<form action="box.php">
    <img src="img/box.jpeg" width="10%" align="right" alt="Корзина">
    <p align="right"><button type="submit" name="box">Перейти в корзину</button></p>
</form>

<div>
    <form id="5">
        <input type="text" hidden name="buy">
    </form>
        <div>
            <h2>Танк Т-72</h2>
            <img src="img/setwalls.ru-29918.jpg" width="20%" alt="Танк Т-72">
            <p>Цена: 50000000 р.</p>
            <p><button type="submit" form="5" name="Танк Т-72" value="50000000">Добавить в корзину</button></p>
        </div>
    <div>
        <h2>Танк Тигр</h2>
        <img src="img/tiger.jpg" width="20%" alt="Танк Т-72">
        <p>Цена: 30000000 р.</p>
        <p><button type="submit" form="5" name="Танк Тигр" value="30000000">Добавить в корзину</button></p>
    </div>

</div>


</body>
</html>
