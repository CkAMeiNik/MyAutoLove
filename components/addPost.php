<?php
include "core.php";

$name = $_POST["name"];
$user_id = $_POST["user_id"];
$descr = $_POST["descr"];
$text = $_POST["text"];
$img=$_FILES["img"];

    if(isset($_POST["addPoste"])){
        if("image" == substr($img['type'], 0, 10)){
            $nameImg = uniqid().".".substr($img['type'], 10);
            move_uploaded_file($img['tmp_name'], "../assets/images/".$nameImg);
            $mysqli->query("INSERT INTO `photo` (`url`) VALUES ('$img')");
            $result = $mysqli->query("INSERT INTO `posts`
            (`id`, `name`, `user_id`, `descr`, `text`) 
            VALUES 
            (NULL, '$name','$user_id','$descr','$text')");
        }
    // print_r("INSERT INTO `posts`(`id`, `name`, `user_id`, `descr`, `text`) 
    // VALUES (NULL, '$name','$user_id','$descr','$texte')");
    header("Location: ../index.php");
}
?>