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
        <div id="content_column">
        	
            <div class="section_w500">
                    
                <h1>Наши контакты</h1>
                
                 <p><img class="telico" src="images/telephone.png" /> 8 (017) 111-11-11<br />
				<img class="telico" src="images/velcom.png" /> 8 (029) 222-22-22<br />
				<img class="telico" src="images/mts.png" /> 8 (029) 333-33-33</p>
				<p><strong>График работы:</strong></p>
				<ul class="spisok">
					<li>понедельник - пятница: с 9.00 до 19.00</li>
					<li>суббота: c 10.00 до 17.00</li>
					<li>воскресенье: с 10.00 до 16.00</li>
				</ul>
				<p><strong>Справка:</strong> Оформление покупок в кредит. Есть бесплатная стоянка.</p>
				<p><strong>Осуществляется доставка:</strong></p>
				<ul class="spisok">
					<li>по Минску</li>
					<li>по всей территории РБ (условия доставки уточняйте у менеджера)</li>
				</ul>

			</div>
			        
        	<div class="cleaner"></div>
        </div> <!-- end of content_column -->
        
        <div class="cleaner"></div>
    
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