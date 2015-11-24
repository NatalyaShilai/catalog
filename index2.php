<?php
# Подключаем конфиг
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
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
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
                    
                <h2>Работа с данными</h2>
                
				<p>Для дальнейшей работы выберите один из пунктов:</p>
				
                 <ul class="services">
                	<li><a href= view.php?val=wares>Товары</a></li>
                    <li><a href= view.php?val=users>Клиенты</a></li>
                    <li><a href= view.php?val=orders>Заказы</a></li>
                </ul>

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