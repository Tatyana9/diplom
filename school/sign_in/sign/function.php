<?php include("C:\Users\User\Downloads\OSPanel\domains\localhost\school\db_connect.php"); ?>
<?php 
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $login = $_POST["login"];
    $password = $_POST["password"];

    mysqli_query($link, "INSERT INTO users(id_role, login, name, password, surname) VALUES ('2', '" . $login . "', '" . $name . "', '" . md5($password) . "', '" . $surname . "');");
    setcookie("login", $login, time()+3600, '/');
    header('Location: http://localhost/school/index.php');
?>