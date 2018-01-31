<?php
session_start();

echo "<h2>Ваши покупки: </h2>";
foreach ($_SESSION as $key=>$price) {
    if ($key === 'total') {
        $total = $price;
    } else {
        echo "$key цена: $price р. <br>";
    }
}
echo "<b>Всего покупок на $total р. </b><br>";
echo "<a href=\"index.php\">Вернуться к покупкам</a>";
