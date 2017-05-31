<?php 
$hostname="localhost"; 
$username="root"; 
$password=""; 
$dbName="Za4etka"; 
$usertable="Result"; 
/* Создать соединение */ 
MYSQL_CONNECT($hostname,$username,$password) OR DIE("Не могу подсоединиться"); 
/* Выбор БД */ 
MYSQL_SELECT_DB($dbName) or die("Не могу выбрать БД"); 
/* Введение информации в БД */ 

$Mark = $_POST["Mark"];
$Kod_discipline = $_POST["Kod_discipline"];
$Number_za4etka = $_POST["Number_za4etka"];


$query="INSERT INTO $usertable values ('$Mark','$Kod_discipline','$Number_za4etka')"; 
$result=MYSQL_QUERY($query); 
/* Закрыть соединение */ 
MYSQL_CLOSE(); 
print "Запись введена в БД! <br>"; 
print "<form method=post action='Index.php'>"; 
print "<br><br><input type='submit' value='Вернуться на главную'>"; 
print "</form>"; 
?>
