<?php 
$hostname="localhost"; 
$username="root"; 
$password=""; 
$dbName="Za4etka"; 
$usertable="Students"; 
/* Создать соединение */ 
MYSQL_CONNECT($hostname,$username,$password) OR DIE("Не могу подсоединиться"); 
/* Выбор БД */ 
MYSQL_SELECT_DB($dbName) or die("Не могу выбрать БД"); 
/* Введение информации в БД */ 

$FIO = $_POST["FIO"];
$Number_za4etka = $_POST["Number_za4etka"];
$Gender = $_POST["Gender"];


$query="INSERT INTO $usertable values ('$FIO','$Number_za4etka','$Gender')"; 
$result=MYSQL_QUERY($query); 
/* Закрыть соединение */ 
MYSQL_CLOSE(); 
print "Запись введена в БД! <br>"; 
print "<form method=post action='Index.php'>"; 
print "<br><br><input type='submit' value='Вернуться на главную'>"; 
print "</form>"; 
?>
