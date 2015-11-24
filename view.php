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
$val = $_REQUEST['val'];

if($val=="wares"){
	echo "<h2>Список товаров</h2>";
}
if($val=="users"){
	echo "<h2>Список клиентов</h2>";
}
if($val=="orders"){
	echo "<h2>Список заказов</h2>";
}

$ath = mysql_query("select * from ".$val." where Actual='1';");
if(mysql_num_rows($ath) > 0 )
{
  if($val=="wares"){
  echo "<table  width=100% border=0>
<tr><td><b>Код</td><td><b>Название</b></td><td><b>Стоимость</b></td><td><b>Изображение</b></td></tr>";
  
  while($get = mysql_fetch_array($ath))
  { 
	echo "<tr ><td>".$get[WereID]."</td>
    <td>".$get[WareName]."</td>
	<td>".$get[WareCost]."</td>
	<td><img src = images/$get[WareIMG]></td>
	<td><input type=button onclick='window.location=\"edit.php?type=edit&id=$get[WereID]&val=$val\"' value=Изменить>&nbsp
	<input type=button onclick='window.location=\"edit.php?type=delete&id=$get[WereID]&val=$val\"' value=Удалить></td></tr>";	
  } 
  echo "</table>";
  echo "<input type=button onclick='window.location=\"edit.php?type=add&val=$val\"' value=Добавить>"; }
  
  if($val=="users"){
  echo "<table  width=100% border=0>
<tr><td><b>Код</td><td><b>ФИО</b></td><td><b>Адрес</b></td><td><b>Телефон</b></td><td><b>e-mail</b></td><td><b>Тип</b></td></tr>";
  
  while($get = mysql_fetch_array($ath))
  { 
	echo "<tr ><td>".$get[UserID]."</td>
    <td>".$get[ClientName]."</td>
	<td>".$get[ClientAddress]."</td>
	<td>".$get[ClientPhone]."</td>
	<td>".$get[ClientEMail]."</td>";
	
	if($get[UserLevel]=='0'){$level='Администартор';}
	if($get[UserLevel]=='1'){$level='Менеджер';}
	if($get[UserLevel]=='2'){$level='Клиент';}
	
	echo "<td>".$level."</td>";
	
	echo "<td><input type=button onclick='window.location=\"edit.php?type=edit&id=$get[UserID]&val=$val\"' value=Изменить>&nbsp
	<input type=button onclick='window.location=\"edit.php?type=delete&id=$get[UserID]&val=$val\"' value=Удалить></td></tr>";	
  } 
  echo "</table>";
  echo "<input type=button onclick='window.location=\"edit.php?type=add&val=$val\"' value=Добавить>"; }
  
  if($val=="orders"){
  echo "<table  width=100% border=0>
<tr><td><b>Код</td><td><b>Товар</b></td><td><b>Количество</b></td><td><b>Дата</b></td><td><b>Статус</b></td></tr>";
  
  while($get = mysql_fetch_array($ath))
  { 
	echo "<tr ><td>".$get[OrderID]."</td>";
	
	$ath1 = mysql_query("select WareName from wares where WereID='$get[WereID]';");
	$get1 = mysql_fetch_array($ath1);
	
    echo "<td>".$get1[WareName]."</td>
	<td>".$get[WareCount]."</td>
	<td>".$get[OrderDate]."</td>
	<td>".$get[OrderStatus]."</td>";
		
	echo "<td><input type=button onclick='window.location=\"edit.php?type=edit&id=$get[UserID]&val=$val\"' value=Изменить>&nbsp
	<input type=button onclick='window.location=\"edit.php?type=delete&id=$get[UserID]&val=$val\"' value=Удалить></td></tr>";	
  } 
  echo "</table>";
  echo "<input type=button onclick='window.location=\"edit.php?type=add&val=$val\"' value=Добавить>"; }
  
} else {  echo "<p>Актуальных данных в данном разделе не содержится!</p>";  exit(); }
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