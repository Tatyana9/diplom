<?php
    setcookie ("login", "", time() - 5, '/');
    header('Location: http://localhost/school/index.php');
?>