<?php include("C:\Users\User\Downloads\OSPanel\domains\localhost\school\db_connect.php"); ?>
<?php 
    $login = $_POST["login"];
    $password = md5($_POST["password"]);
    $sql_command = mysqli_query($link, "SELECT * FROM users WHERE login = '" . $login . "' AND password = '" . $password . "'");
    if (mysqli_num_rows($sql_command) == 1) {
        setcookie("login", $login, time()+3600, '/');
        header('Location: http://localhost/school/index.php');
    } else {
        header('Location: http://localhost/school/error.php');
    }
?>