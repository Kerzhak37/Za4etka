<?php 
$hostname="localhost"; 
$username="root"; 
$password=""; 
$dbName="Za4etka"; 
$usertable="Predmets"; 
/* Создать соединение */ 
MYSQL_CONNECT($hostname,$username,$password) OR DIE("Не могу подсоединиться"); 
/* Выбор БД */ 
MYSQL_SELECT_DB($dbName) or die("Не могу выбрать БД"); 
/* Введение информации в БД */ 

$Kod_discipline = $_POST["Kod_discipline"];
$Name_discipline = $_POST["Name_discipline"];
$Date = $_POST["Date"];
$Forma_sda4i = $_POST["Forma_sda4i"];


$query="INSERT INTO $usertable values ('$Kod_discipline','$Name_discipline','$Date','$Forma_sda4i')"; 
$result=MYSQL_QUERY($query); 
/* Закрыть соединение */ 
MYSQL_CLOSE(); 
print "Запись введена в БД! <br>"; 
print "<form method=post action='Index.php'>"; 
print "<br><br><input type='submit' value='Вернуться на главную'>"; 
print "</form>"; 
?>
