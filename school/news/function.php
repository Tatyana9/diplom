<?php include("C:\Users\User\Downloads\OSPanel\domains\localhost\school\db_connect.php"); ?>
<!-- СКРИПТ ДЛЯ ДОБАВЛЕНИЯ НОВОСТЕЙ -->
<?php
    $name = $_POST["name"];
    $content = $_POST["content"];
    mysqli_query($link, "INSERT INTO news(name, content) VALUES ('" . $name . "', '" . $content . "');");
    header('Location: http://localhost/school/news/index.php');
?>