<meta charset="utf-8">
<?php
session_start();

$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = '';          // пароль
$name = 'myshop';      // имя базы данных
    $link = mysqli_connect($host, $user, $pass, $name);