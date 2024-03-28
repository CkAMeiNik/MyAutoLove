<?php
session_start();
include "components/core.php";

if($_POST){
    $password = md5($_POST['password']);
    $result = $mysqli->query("SELECT * FROM `users` 
        WHERE (`login` = '{$_POST['login']}' AND `password` = '$password')");
        if($result->num_rows > 0){
            $_SESSION['user'] = [];


            foreach($result as $key => $value){
                $_SESSION['user'][$key] = $value;
                $_SESSION['password'][$key] = $value;
            }   
        }
    header("Location: index.php");
}
include "components/header.php";
?>
<div class="regist">

    <form action="" method="post">
        Логин: <input type="text" name="login"/> <br>
        Пароль: <input type="password" name="password"/> <br>
        <input type="submit" value="Войти"/>
    </form>
</div>

    

