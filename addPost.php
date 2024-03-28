<?php
include 'components/core.php';
// }
// header("location: ../index.php");
include 'components/header.php';
?>
            <form action="components/addPost.php" method="post" enctype="multipart/form-data">
                <input type="text" name="name" placeholder="Имя"><br>
                <input type="text" name="user_id" placeholder="Ваш ID"><br>
                <input name="descr" placeholder="Описание"></textarea><br>
                <input type="text" name="text" placeholder="Текст"><br>
                <input type="file" name="img"><br>
                <input type="submit" name="addPoste" value="Добавить пост"/>
            </form>