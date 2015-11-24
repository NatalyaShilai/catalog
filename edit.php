<?php
# подключаем конфиг
include 'config.php';  
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"><html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>ОАО «БЕЛЮВЕЛИРТОРГ»</title>
<meta name="description" content="Jewelry website">
<meta name="keywords" content="jewelry">
<link href="css/style.css" rel="stylesheet" type="text/css">
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
</head>
<body>
<div id="pagewrap">
<div id="page">
<div id="wrap">
<div id="sidebar">
	<div id="logowrap">
	<div id="logo"><img src="images/logo.png" alt=""></div>
    
    </div>
    <div id="menu">
    	<ul>				  
<?php			
$sql=mysql_query("select * from Groups");
if ($sql) {
	while($get = mysql_fetch_array($sql))
	{
		echo "<li><a href = catalog_.php?val=$get[GroupID]>".$get[GroupName]."</a></li>";
    }
}	
?>
         </ul>
        <div class="bottom"></div>
    </div>
    <div id="lblock">
    
    </div>    
</div>
<div id="contentwrap">
<div id="header">
	<ul id="tmenu">
    	<li><a href="map.php">Карта сайта</a></li>
        <li><a href="service.php">Связаться </a></li>
    </ul>
</div>
<div id="body_area">
        <div id="content_column">
        	
            <div class="section_w500">
<?php
$type = $_GET['type'];
$id = $_GET['id'];
$val = $_GET['val'];

if (isset($type)) {
switch ($type) {

case edit:
echo "<h2>Редактирование</h2><table><form action='save.php'>";

if($val=="wares"){
$sql=mysql_query("select * from ".$val." WHERE WereID=$id;");
if ($sql) {
while($get_post = mysql_fetch_array($sql))
{
echo "<tr><td>Название</td><td> <input type=text name='WareName' value='".$get_post[WareName]."'></td></tr>
<input type=hidden name=id value=$id>
<input type=hidden name=type value=$type>
<input type=hidden name=val value=$val>";
echo "<tr><td>Стоимость</td><td> <input type=text name='WareCost' value='".$get_post[WareCost]."'></td></tr>
<tr><td>Категория</td><td><select name='groups'>";
$sql2 = mysql_query ("SELECT * FROM groups;");

if($sql2)
{
while($group = mysql_fetch_array($sql2))
{
echo "<option value='".$group[GroupID]."'>".$group[GroupName]."</option>";
}
echo "<tr><td>Название изображения</td><td> <input type=text name='WareIMG' value='".$get_post[WareIMG]."'></td></tr>";

echo "</select></td></tr><tr><td colspan=2><input type=submit value=Сохранить></form></td></tr></table></center>";
}}}
}

if($val=="users"){
$sql=mysql_query("select * from ".$val." WHERE UserID=$id;");
if ($sql) {
while($get_post = mysql_fetch_array($sql))
{
echo "<tr><td>ФИО</td><td> <input type=text name='ClientName' value='".$get_post[ClientName]."'></td></tr>
<input type=hidden name=id value=$id>
<input type=hidden name=type value=$type>
<input type=hidden name=val value=$val>";
echo "<tr><td>Адрес</td><td> <input type=text name='ClientAddress' value='".$get_post[ClientAddress]."'></td></tr>
	  <tr><td>Телефон</td><td> <input type=text name='ClientPhone' value='".$get_post[ClientPhone]."'></td></tr>
	  <tr><td>e-mail</td><td> <input type=text name='ClientEMail' value='".$get_post[ClientEMail]."'></td></tr>";

echo "</select></td></tr><tr><td colspan=2><input type=submit value=Сохранить></form></td></tr></table></center>";
}}}

if($val=="orders"){
$sql=mysql_query("select * from ".$val." WHERE OrderID=$id;");
if ($sql) {
while($get_post = mysql_fetch_array($sql))
{
$ath1 = mysql_query("select WareName from wares where WereID='$get_post[WereID]';");
	$get1 = mysql_fetch_array($ath1);
echo "<tr><td>Товар</td><td> <input type=text name='WareName' value='".$get1[WareName]."'></td></tr>
<input type=hidden name=id value=$id>
<input type=hidden name=type value=$type>
<input type=hidden name=val value=$val>";
echo "<tr><td>Количество</td><td> <input type=text name='WareCount' value='".$get_post[WareCount]."'></td></tr>";
$ath2 = mysql_query("select ClientName from users where UserID='$get_post[UserID]';");
	$get2 = mysql_fetch_array($ath1);

echo "<tr><td>Заказчик</td><td> <input type=text name='ClientName' value='".$get2[ClientName]."'></td></tr>
	  <tr><td>Дата заказа</td><td> <input type=text name='OrderDate' value='".$get_post[OrderDate]."'></td></tr>";

echo "</select></td></tr><tr><td colspan=2><input type=submit value=Сохранить></form></td></tr></table></center>";
}}}

break;

case delete:
if ($val=="wares") {
	$sql=mysql_query("delete from wares where WereID=$id");
	if ($sql){ 
	echo '<script>alert("Данные удалены!");</script>';
	echo ("<script la1nguage=\"JavaScript\"> 
  window.location.href = \"/view.php?val=wares\" </script>");
	} 
	else echo "Ошибка - ".mysql_error();
	
}

break;

case add:
echo "<center><h3>Добавление</h3><table><form action='save.php'>";

if ($val=="wares") {
	echo "<tr><td>Название товара</td><td> <input type=text name='WareName'></td></tr>";
	echo "<input type=hidden name=type value=$type>
		  <input type=hidden name=val value=$val>";
	echo "<tr><td>Стоимость</td><td> <input type=text name='WareCost'></td></tr>";
	echo "<tr><td>Название изображения</td><td> <input type=text name='WareIMG'></td></tr>";
	echo "<tr><td>Категория</td><td><select name='groups'>";
		$sql2 = mysql_query ("SELECT * FROM groups;");
		if($sql2)
		{
			while($group = mysql_fetch_array($sql2))
			{
				echo "<option value='".$group[GroupID]."'>".$group[GroupName]."</option>";
			}
			echo "</select></td></tr><tr><td colspan=2><input type=submit value=Сохранить></form></td></tr></table></center>";
		}
}
break;
}
} else echo "Данные не получены";
?>
<div class="cleaner"></div>
        </div> <!-- end of content_column -->
        
</div>
</div>
</div>
</div>
<div id="footer">
	<div id="bottom_menu"><a href="index.php">Главная</a>  | <a href="about.php">О компание</a>  | <a href="uslugi.php">Услуги</a>  |  <a href="contact.php">Контакты</a>  
    <div id="bottom_addr">© 2015 Все права защищены</div>
</div>
</div>
</div>

</body>
</html>

