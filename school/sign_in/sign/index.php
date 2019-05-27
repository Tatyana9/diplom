<?php include("C:\Users\User\Downloads\OSPanel\domains\localhost\school\head.php"); ?>
<?php include("C:\Users\User\Downloads\OSPanel\domains\localhost\school\Top.php"); ?>
    <div class="container">
        <div class="signin_style">
             <br><br><br><br>
            <form class="sign" method="POST" action="function.php">
                <table class="in">
                    <tr><td>Имя: </td><td><input class="input_sign" type="text" name="name"></td></tr>
                    <tr><td>Фамилия: </td><td><input class="input_sign" type="text" name="surname"></td></tr>
                    <tr><td>Логин: </td><td><input class="input_sign" type="text" name="login"></td></tr>
                    <tr><td>Пароль: </td><td><input class="input_sign" type="password" name="password"></td></tr>
                    <tr><td>Повторите пароль: </td><td><input  class="input_sign" name="password2" type="password"></td></tr>
                </table><br>
                <button id="myBtn">Открыть окно</button>
<div id="myModal" class="modal">
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Шапка модального окна</h2>
    </div>
    <div class="modal-body">
      <p>Какой-то текст в теле модального окна</p>
      <p>Ещё другой текст...</p>
    </div>
    <div class="modal-footer">
      <h3>Футер модального окна</h3>
    </div>
  </div>

</div>
                <input id="sign_reg" type="submit" value="Зарегистрироваться">
            </form>
            <a href="http://localhost/school/index.php" id="sign">На главную</a>
            <script src="http://localhost/school/scripts/script_signin.js"></script>
        </div>
    </div>
<?php include("C:\Users\User\Downloads\OSPanel\domains\localhost\school\bottom.php"); ?>