<?php include("header.php"); ?> 
<!— МЕНЮ САЙТА —> 
<hr> 
<div class="menu"> 
<div class="container"> 
<ul> 
<li><a href="http://localhost/school/index.php">Главная</a></li> 
<li><a href="http://localhost/school/sveden/info/index.php">О школе</a></li> 
<?php 
if ($_COOKIE['login'] != "") { 
echo '<li><a href="http://localhost/school/sveden/schedule/index.php">Расписание</a></li>'; 
echo '<li><a href="http://localhost/school/sveden/life/index.php">Школьная жизнь</a></li>'; 
} 
?> 
<li><a href="http://localhost/school/sveden/parents/index.php">Родителям</a></li> 
<li><a href="http://localhost/school/sveden/employees/index.php">Преподаватели</a></li> 
<li><a href="http://localhost/school/sveden/gia/index.php">ГИА</a></li>
<li><a href="http://localhost/school/sveden/vpr/index.php">ВПР</a></li>
<li><a href="http://localhost/school/sveden/common/index.php">Контакты</a></li> 
</ul> 
</div> 
</div> 
<hr style="margin-top: -60px;"> 
</header>