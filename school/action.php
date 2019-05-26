<?php include("db_connect.php"); ?> 
<!— СТАРТОВАЯ СТРАНИЦА —> 
<div class="container"> 
<div class="action"> 
<!— РАЗДЕЛ НОВОСТЕЙ —> 
<div class="news"> 
<a href="news/index.php"><div class="link">Новости</div></a> 
<?php 
$sql_command = mysqli_query($link, "SELECT name, content FROM news LIMIT 3"); 
while ($result = mysqli_fetch_array($sql_command)) { 
echo '<label>' . $result["name"] . '</label>' . '<br><br>'; 
echo '<p>' . $result["content"] . '</p><hr>'; 
} 
?> 
</div> 
<!— РАЗДЕЛ ОБЪЯВЛЕНИЙ —> 
<div style="display: inline-block; vertical-align: top;"> 
<img src="images/main_img.png" style="width: 435px;"><br> 
<div class="ads"> 
<a href="ads/index.php"><div style="background-color: #153174" class="link">Объявления</div></a> 
<?php 
$sql_command = mysqli_query($link, "SELECT content FROM ads LIMIT 3"); 
while ($result = mysqli_fetch_array($sql_command)) { 
echo '<p>' . $result["content"] . '</p><hr>'; 
} 
?> 
</div> 
</div> 

</div> 
</div>