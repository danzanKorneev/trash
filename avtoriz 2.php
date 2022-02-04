<?php
require 'bd.php';

if (!empty($_POST['password']) and !empty($_POST['login'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM aut WHERE name='$login' AND pass='$password'";
    $result = mysqli_query($link, $query);
    $user = mysqli_fetch_assoc($result);
    
    
    if (!empty($user)) {
       
        echo "есть";
    } else {
        echo "неверный логин или пароль";
    }
}