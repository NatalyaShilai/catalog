<?php
include "config.php";

$type = $_REQUEST['type'];
$id = $_REQUEST['id'];
$val = $_REQUEST['val'];
$val1 = $_REQUEST['val1'];
$prep = $_REQUEST['prep'];

if (isset($type)) {
switch ($type) {

case edit:
if($val=="wares"){
$WareName = $_REQUEST['WareName'];
$WareCost = $_REQUEST['WareCost'];
$WareIMG = $_REQUEST['WareIMG'];
$groups = $_REQUEST['groups'];

$sql=mysql_query("update wares set WareName = '$WareName', WareCost = '$WareCost', WareIMG = '$WareIMG', GroupID = '$groups' where WereID=$id");
if ($sql)
{ echo ("<script la1nguage=\"JavaScript\"> 
  window.location.href = \"/view.php?val=wares\"
</script>");} 
else echo "Ошибка - ".mysql_error();

}

break;

case add:
if($val=="wares"){
$WareName = $_REQUEST['WareName'];
$WareCost = $_REQUEST['WareCost'];
$WareIMG = $_REQUEST['WareIMG'];
$groups = $_REQUEST['groups'];

$sql=mysql_query("INSERT INTO wares (Actual, UpdateDate, UpdateUser, WareName, WareCost, WareIMG, WareHouse, GroupID) VALUES ('1',now(),'1','$WareName','$WareCost','$WareIMG','1','$groups')");
if ($sql)
{ echo "Готово";
	echo ("<script la1nguage=\"JavaScript\"> 
  window.location.href = \"/view.php?val=wares\"
</script>");
} 
else echo "Ошибка - ".mysql_error();
}

break;



}
} else echo "Данные не получены";
?>
