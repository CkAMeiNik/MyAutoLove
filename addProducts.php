<?php
include "core.php";

$name = $_POST["name"];
$price = $_POST["price"];
$description = $_POST["description"];
$guarantee = $_POST["guarantee"];
$model = $_POST["model"];
$year = $_POST["year"];
$diagonal = $_POST["diagonal"];
$resolution = $_POST["resolution"];
$img=$_FILES["img"];

if(empty($name) or empty($price) or empty($description) or empty($img)){
    $_SESSION['errors']['product']='Заполните всю информацию о товаре';
}elseif(isset($_POST["addTovar"])){
    if("image" == substr($img['type'], 0, 5)){
        $nameImg = uniqid().".".substr($img['type'], 6);
        move_uploaded_file($img['tmp_name'], "../assets/img/".$nameImg);
        $mysqli->query("INSERT INTO `img` (`url`) VALUES ('$img')");
        $res = $mysqli->query("INSERT INTO `products`
        (`id`, `name`, `price`, `description`, `img`, `guarantee`, `model`, `year`, `diagonal`, `resolution`)
            VALUES 
        (NULL, '$name', '$price', '$description', '$nameImg', '$guarantee', '$model', '$year', '$diagonal', '$resolution')");
    $_SESSION['success_add']['addProduct'] = 'Вы успешно добавили товар в БД!';
    header('location: ../product/admin_panel.php#add');  
}  else {
    $_SESSION['errors']['product']='Заполните информацию о товаре';
}
}
header("location: ../product/admin_panel.php#add");
?>