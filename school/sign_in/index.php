<?php include("C:\Users\User\Downloads\OSPanel\domains\localhost\school\head.php"); ?>
<?php include("C:\Users\User\Downloads\OSPanel\domains\localhost\school\db_connect.php"); ?>
<?php include("C:\Users\User\Downloads\OSPanel\domains\localhost\school\Top.php"); ?>
    <div class="container">
        <div class="signin_style">
            <form class="in" method="POST" action="function.php">
                <table>
                    <tr><td>Логин: </td><td><input class="input_in" type="text" name="login"></td></tr>
                    <tr><td>Пароль: </td><td><input class="input_in" type="password" name="password"></td></tr>
                </table><br>
                <input id="ins" type="submit" value="Войти">
            </form>
            <a href="sign/index.php" id="sign">Зарегистрироваться</a>
            <script src="http://localhost/school/scripts/script_signin.js"></script>
        </div>
    </div>
<?php include("C:\Users\User\Downloads\OSPanel\domains\localhost\school\bottom.php"); ?>