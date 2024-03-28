<?php
include "components/core.php";

if ($_POST) {
    $checkuser = $mysqli->query("SELECT * FROM `users` WHERE `login` = '$login' OR 'email'='$email'");
    if ($password !== $repassword) {
      header("Location: ". $_SERVER['HTTP_REFERER']);
      $_SESSION['message'] = "Пароли не совпадают";
    } else if (mysqli_num_rows($checkuser) > 0) {
      header("Location: " . $_SERVER['HTTP_REFERER']);
      $_SESSION['message'] = "Пользователь с таким логином или email существует";
    }
}
if($_POST){
    $password = md5($_POST['password']);
    $result = $mysqli->query("INSERT INTO `users`(`name`, `login`, `password`, `email`) 
        VALUES (
        '{$_POST['name']}',
        '{$_POST['login']}',
        '$password',
        '{$_POST['email']}'
        )");
    header("Location: index.php");
}

include "components/header.php";
?>
<div class="regist">

    <form action="" method="post">
        Имя: <input type="text" name="name"/> <br>
        Логин: <input type="text" name="login"/> <br>
        Пароль: <input type="password" name="password"/> <br>
        Почта: <input type="text" name="email"/> <br>
        <input type="submit" value="Регистрация"/>
    </form>
</div>
    
