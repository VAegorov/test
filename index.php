<?php
$dsn = 'mysql:host=127.0.0.1; dbname=blog1';
$user = 'root';
$password = '';

try {
    $db = new PDO($dsn, $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->exec('SET NAMES utf8');
} catch (PDOException $e) {
    echo 'Подключение не удалось: ' . $e->getMessage();
    exit();
}
//echo "Удача. Подключение с базой данных установлено.<br>";
if (!isset($_GET['id'])) {
    try {
        $q = "SELECT * FROM article";
        $r = $db->query($q);
        while ($print = $r->fetch()) {
            //echo "<pre>";
            //var_dump($print);
            //echo "<pre>";
            echo "<h1><a href='index.php?id={$print["id"]}'>{$print['title']}</a></h1><br>";
            echo "{$print['article']} <br>";
            echo "{$print['date']} <hr>";

        }
    } catch (PDOException $e) {
        echo 'Операция не удалась: ' . $e->getMessage();
        exit();
    }
} else {
    try {
        $q = sprintf("SELECT * FROM article WHERE id='%d'", (int)$_GET['id']);
        foreach ($r = $db->query($q) as $print);
        //$print = $r->fetch();
        echo "<h1>{$print['title']}</h1><br>";
        echo "{$print['article']}<br>";
        echo "{$print['date']}<br>";
    } catch (PDOException $e) {
        echo 'Операция не удалась: ' . $e->getMessage();
        exit();//
    }
}


$db = null;