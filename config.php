<?php
# настройки
define ('DB_HOST', 'localhost');
define ('DB_LOGIN', 'root');
define ('DB_PASSWORD', '');
define ('DB_NAME', 'uvelir');
mysql_connect(DB_HOST, DB_LOGIN, DB_PASSWORD) or die ("MySQL Error: " . mysql_error());
mysql_query("set names utf8") or die ("<br>Invalid query: " . mysql_error());
mysql_select_db(DB_NAME) or die ("<br>Invalid query: " . mysql_error());
header('Content-Type: text/html; charset=utf-8');

# массив ошибок
$error[0] = 'Не верный логин или пароль';
$error[1] = 'Включите куки';
$error[2] = 'Доступ запрещен';

 # Функция для генерации случайной строки 
  function generateCode($length=6) { 
     $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPRQSTUVWXYZ0123456789"; 
     $code = ""; 
     $clen = strlen($chars) - 1;   
     while (strlen($code) < $length) { 
         $code .= $chars[mt_rand(0,$clen)];   
     } 
     return $code; 
   } 
   
   # Если есть куки с ошибкой то выводим их в переменную и удаляем куки
  if (isset($_COOKIE['errors'])){
       $errors = $_COOKIE['errors'];
       setcookie('errors', '', time() - 60*24*30*12, '/');
   }
if(isset($_POST['submit'])) 
   { 
     
     # Вытаскиваем из БД запись, у которой логин равняеться введенному 
    $data = mysql_fetch_assoc(mysql_query("SELECT UserID, LogonPassword FROM `users` WHERE `LogonName`='".$_POST['username']."' LIMIT 1")); 
      
     # Соавниваем пароли 
    if($data['LogonPassword'] == $_POST['passwd']) 
     { 
       # Генерируем случайное число и шифруем его 
      $hash = md5(generateCode(10)); 
            
       # Записываем в БД новый хеш авторизации и IP 
      mysql_query("UPDATE users SET users_hash='".$hash."' WHERE UserID='".$data['UserID']."'") or die("MySQL Error: " . mysql_error()); 
        
       # Ставим куки 
      setcookie("id", $data['UserID'], time()+60*60*24*30); 
      setcookie("hash", $hash, time()+60*60*24*30); 
        
       # Переадресовываем браузер на страницу проверки нашего скрипта 
      header("Location: index2.php"); exit(); 
     } 
     else 
     { 
       $err = "Вы ввели неправильный логин/пароль<br>"; 
     } 
   } 
?>