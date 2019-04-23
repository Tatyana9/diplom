<?php include("C:\Users\User\Downloads\OSPanel\domains\localhost\school\head.php"); ?>
<?php include("C:\Users\User\Downloads\OSPanel\domains\localhost\school\Top.php"); ?>
    <div class="container">
        <div class="signin_style">
            <form class="sign" method="POST" action="function.php">
                <table>
                    <tr><td>Имя: </td><td><input class="input_sign" type="text" name="name"></td></tr>
                    <tr><td>Фамилия: </td><td><input class="input_sign" type="text" name="surname"></td></tr>
                    <tr><td>Логин: </td><td><input class="input_sign" type="text" name="login"></td></tr>
                    <tr><td>Пароль: </td><td><input class="input_sign" type="password" name="password"></td></tr>
                    <tr><td>Повторите пароль: </td><td><input class="input_sign" type="password"></td></tr>
                </table><br>
                <input id="sign" type="submit" value="Зарегистрироваться">
            </form>
            <a href="http://localhost/school/index.php" id="sign">На главную</a>
            <script src="http://localhost/school/scripts/script_signin.js"></script>
        </div>
    </div>
<?php include("C:\Users\User\Downloads\OSPanel\domains\localhost\school\bottom.php"); ?>