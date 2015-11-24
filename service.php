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
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript">
var $ = jQuery.noConflict();
$(document).ready(function() {		
});	
</script>
<script type="text/javascript" src="js/contact.js"></script>
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
                    
                <div id="contact_form">
					<h2 >Напишите нам e-mail</h2><br />
					<p>Вы можете задать нам вопрос или отправить сообщение, заполнив представленную ниже форму. Мы постараемся ответить на него в кратчайшие сроки. <b>Все поля обязательны к заполнению</b>. </p>
					  <form id="contact" action="#">
						<fieldset>
						  <label for="name" id="name_label">Ваше имя</label><br />
						  <input type="text" name="name" id="name" size="30" value="" class="text-input" />
						  <span class="error" id="name_error">Пожалуйста введите имя!</span><br />
						 <label for="email" id="email_label">E-mail</label><br />
						  <input type="text" name="email" id="email" size="30" value="" class="text-input" />
						  <span class="error" id="email_error">Пожалуйста введите email адрес!</span>
						  <span class="error" id="email_error2">Пожалуйста введите существующий адрес!</span><br />
						  <label for="msg" id="msg_label">Ваше сообщение:</label><br />
						 <textarea cols="25" rows="8" name="msg" id="msg" class="text-input"></textarea>
						  <span class="error" id="msg_error">Пожалуйста введите сообщение!</span>
						  <input type="submit" name="submit" class="button" id="submit_btn" value="ОК"/>
						</fieldset>
					  </form>
				</div><!-- end of contact_form -->

			</div>
                        
			        
        	<div class="cleaner"></div>
        </div> <!-- end of content_column -->
        
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