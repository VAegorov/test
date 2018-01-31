<?php
session_start();
echo "Ваше имя: " . $_SESSION['name'] . "<br>";
echo "Ваша фамилия: " . $_SESSION['surname'];
var_dump($_SESSION);