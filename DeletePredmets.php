<?php 
$hostname="localhost"; 
$username="root"; 
$password=""; 
$dbName="Za4etka"; 
$usertable="Predmets"; 
mysql_connect($hostname,$username,$password) or die("No connect"); 
mysql_select_db("$dbName") or die("No select DB"); 

$Kod_discipline = $_POST["Kod_discipline"];
$query="delete from $usertable where Kod_discipline='$Kod_discipline'"; 
$result=mysql_query($query); 
print "Удалено<br>"; 
print "<form method=post action='Index.php'>"; 
print "<br><br><input type='submit' value='Вернуться на главную'>"; 
print "</form>"; 
?> 
