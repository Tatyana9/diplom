<?php include("C:\Users\User\Downloads\OSPanel\domains\localhost\school\head.php"); ?>
<?php include("C:\Users\User\Downloads\OSPanel\domains\localhost\school\Top.php"); ?>
<?php include("C:\Users\User\Downloads\OSPanel\domains\localhost\school\db_connect.php"); ?>
<!-- СТРАНИЦА С ОБЪЯВЛЕНИЯМИ -->
    <div class="container">
        <div class="news_content">
        <?php
            if ($_COOKIE['login'] == "admin") {
                echo '<form method="POST" action="function.php">';
                    echo '<label>Содержание </label><input type="textarea" name="content"><br>';
                    echo '<input type="submit" value="Добавить">';
                echo '</form>';
            }                
                $sql_command = mysqli_query($link, "SELECT content FROM ads");
                while ($result = mysqli_fetch_array($sql_command)) {
                    echo '<br><p>' . $result["content"] . '</p><br><hr>';
                }
            ?>
        </div>
    </div>
<?php include("C:\Users\User\Downloads\OSPanel\domains\localhost\school\bottom.php"); ?>