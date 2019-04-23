<?php include("C:\Users\User\Downloads\OSPanel\domains\localhost\school\head.php"); ?>
<?php include("C:\Users\User\Downloads\OSPanel\domains\localhost\school\Top.php"); ?>
<?php include("C:\Users\User\Downloads\OSPanel\domains\localhost\school\db_connect.php"); ?>
<!-- СТРАНИЦА С НОВОСТЯМИ -->
    <div class="container">
        <div class="news_content">
        <?php
            if ($_COOKIE['login'] == "admin") {
                echo '<form method="POST" action="function.php">';
                    echo '<label>Название </label><input type="text" name="name"><br>';
                    echo '<label>Содержание </label><input type="textarea" name="content"><br>';
                    echo '<input type="submit" value="Добавить">';
                echo '</form>';
            }                
                $sql_command = mysqli_query($link, "SELECT name, content FROM news");
                while ($result = mysqli_fetch_array($sql_command)) {
                    echo '<label>' . $result["name"] . '</label>' . '<br><br>';
                    echo '<p>' . $result["content"] . '</p><hr>';
                }
            ?>
        </div>
    </div>
<?php include("C:\Users\User\Downloads\OSPanel\domains\localhost\school\bottom.php"); ?>