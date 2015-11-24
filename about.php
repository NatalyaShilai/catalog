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
    <h2>Новая продукция</h2>
    <ul>
      <li>Кольцо из белого золота - 7 млн. руб.</li>
      <li>Изумрудные подвески - 21 млн. руб.</li>
      <li>Серьги с фианитом - 1,5 млн.руб.</li>
    </ul>
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
  <h1>КОМПАНИЯ</h1>
  <p>Белювелирторг — это сеть ювелирных магазинов в 25 городах Беларуси, в которых представлен широчайший ассортимент ювелирных изделий из золота и серебра, украшений из натуральных камней, часов и сувенирнойпродукции.

Приобретая драгоценности, вы получаете полную гарантию их качества. Неспроста девиз всей системы «Белювелирторга»: «Мы работаем по золотым правилам и с золотыми гарантиями». Приходите! Вас ждут незабываемые изделия и отличные впечатления!

Открытое акционерное общество «Белювелирторг» успешно присутствует на ювелирном рынке Беларуси с октября 1948 года, включает в себя 55 ювелирных магазинов расположенных в 25 городах республики, которые специализируются на розничной торговле ювелирными изделиями, часами и сувенирами.

С 2012 года ОАО «Белювелирторг» — торговая сеть государственного ювелирного холдинга «КРИСТАЛЛ-ХОЛДИНГ». В ней наиболее широко представлена ювелирная продукция, выпускаемая ОАО «Гомельское П. О. Кристалл" — управляющая компания холдинга «КРИСТАЛЛ-ХОЛДИНГ».
А в магазинах «Кристалл» Вы найдете практически полный ассортимент ведущего белорусского производителя, а также сможете воспользоваться дополнительной услугой — обменять наскучившие старые украшения на изделия ТМ «Кристалл» по привлекательным ценам.</p>
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