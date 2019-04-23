<!-- ВЕРХНЯЯ ЧАСТЬ САЙТА -->
<div id="view">
    <label id="main">Размер шрифтов: </label><a data-font="0" class="font" id="font_1"> А </a><a data-font="1" class="font" id="font_2"> А </a><a data-font="2" class="font" id="font_3"> А </a>|
    <label id="main">Цвет фона: </label><a data-color="0" class="color" id="color_1">А</a><a data-color="1" class="color" id="color_2">А</a><a data-color="2" class="color" id="active">Активировать</a>
</div>
<header>
        <div class="header_content">
            <div class="container">
                <img src="http://localhost/school/images/logo.png"/>
                <h1>Комиссаровская средняя</br>общеообразовательная школа</br>МБОУ Комиссаровская СОШ</h1>
                <div class="buttons">
                    <?php 
                        if ($_COOKIE['login'] != "") {
                            echo '<label>Привет, ' . $_COOKIE["login"] . '</label>';
                            echo '<a href="http://localhost/school/sign_in/function_exit.php">Выйти</a><br>';
                        } else {
                            echo '<a href="http://localhost/school/sign_in/index.php">Вход/регистрация</a></br></br>';
                        }
                    ?>
                    <input type="button" id="view_show" value="Для слабовидящих"/>
                </div>
            </div>
        </div>