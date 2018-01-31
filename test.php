<?php
session_start();//стартуем сессию
if (!empty($_COOKIE['country'])) {
    echo $_COOKIE['country'];
}