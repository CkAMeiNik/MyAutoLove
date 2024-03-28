<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../components/style.css">
    <title>My Auto Love</title>

</head>

<body>

    <div class="headerss">
        <div class="hers">
            <a href="../index.php">Центр сообщества</a>
            <a href="../support.php">Поддержка</a>
            <a href="#footer">Контакты</a>
        </div>
        <?php if(!isset($_SESSION['user'], $_SESSION['password']) || $_SESSION['user'] == '' || $_SESSION['password'] == ''): ?>
            <div class="reg">
                        <a href="auto.php">Вход</a>
                        <a href="reg.php">Регистрация</a>
                    </div>
                
        <?php else: ?>
                    
            <div class="reg">
                    <a href="../components/logout.php">Выйти</a>
                </div>
        <?php  endif;?>
        
    </div>