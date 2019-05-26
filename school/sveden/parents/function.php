<?php include("C:\Users\User\Downloads\OSPanel\domains\localhost\school\db_connect.php"); ?>
<?php
    $name = $_POST["name"];
    $content = $_POST["content"];
    mail('tatyana.brysenko@gmail.com', $name, $content); 
    header('Location: http://localhost/school/sveden/parents/index.php');
?>