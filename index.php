<?php
include 'components/core.php';
$sql = $mysqli->query("SELECT * FROM `posts`");
?>

<?
include 'components/header.php';
?>
<div class="titler">
    <h1>My Auto Love</h1>
</div>

<div class="container">
<?php
                        if (empty($_SESSION['user'])) {
                            
                        }
                        else {
                            echo '<a href="addPost.php">Добавить пост</a>';
                        }
                    ?>
    <div class="posts">

        <form class="post-form" action="">
            <div class="descr">
                <?
                while ($result = mysqli_fetch_array($sql)) {
                    echo "{$result['name']} </br> {$result['descr']} </br> {$result['text']} </br>";
                    ?><img src="../assets/images/<?php echo $result['photo']; ?>"><hr><?
                }
                ?>
            </div>
        </form>
    </div>
</div>
</body>
<footer>
    <?
    include 'components/footer.php';
    ?>
</footer>

</html>