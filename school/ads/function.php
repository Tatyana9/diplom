<?php include("C:\Users\User\Downloads\OSPanel\domains\localhost\school\db_connect.php"); ?>
<?php
    $content = $_POST["content"];
    mysqli_query($link, "INSERT INTO ads(content) VALUES ('" . $content . "');");
    header('Location: http://localhost/school/ads/index.php');
?>