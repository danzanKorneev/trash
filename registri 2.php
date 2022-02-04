<?php
require 'bd.php';
session_start();
if (!empty($_POST['login']) and !empty($_POST['password'])and !empty($_POST['confirm'])) {
    if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['login'])){
           echo "логин должен быть прописан на английском языке";
           exit;
    }
    if(strlen($_POST['login'])<3 or strlen($_POST['login'])>20){
        echo "логин должен быть от 3 до 20 символов";
        exit;
    }
    if(strlen($_POST['password'])< 8){
        echo "пароль должен быть больше 8 чисел" ;
        exit;
    }
    
    // проверям поле пароль совпадает с проверочной строкой 
    if($_POST['password']==$_POST['confirm']){
        $login = $_POST['login'];
        $password = $_POST['password'];
// проверяем свободен ли логин
    $query = "SELECT * FROM aut WHERE name='$login'";
    $user = mysqli_fetch_assoc(mysqli_query($link, $query));
  
		 if(empty($user)){
            
            $query = "INSERT INTO `aut`(`name`, `pass`) VALUES ('$login','$password') ";
            mysqli_query($link, $query);
            $_SESSION['auth'] = true;
        
        } else {
            echo "такой логин уже сущетвует";
        }
       
        } else{
            echo "пароли не совпадают";
        }
        
        
        
        
        $id = mysqli_insert_id($link);
            $_SESSION['id'] = $id; // пишем id в сессию


   
}else {
    echo "логин или пароль пуст";
}
   