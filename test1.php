<?php
session_start();
//setcookie(session_name(), 'true', time() + 3600);

//var_dump($_COOKIE);
//lush();
setcookie(session_name());


var_dump($_COOKIE);

//setcookie(session_name(), '', time() - 3600);
//echo session_name();
