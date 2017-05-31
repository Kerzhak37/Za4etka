<?php 
$hostname="localhost"; 
$username="root"; 
$password=""; 
$dbName="Za4etka"; 
$usertable="Predmets"; 
mysql_connect($hostname,$username,$password) or die("No connect"); 
mysql_select_db("$dbName") or die("No select DB"); 

$Kod_discipline = $_POST["Kod_discipline"];
$query="select * from $usertable where Kod_discipline='$Kod_discipline'"; 
$result=mysql_query($query); 

 $number=mysql_numrows($result); 

if ($number==0) 
{ 
print "Нет такой записи!<br>"; 
print "<form method=post action='Index.php'>"; 
print "<br><br><input type='submit' value='Вернуться на главную'>"; 
print "</form>"; 
} 
else 
{ 
$Kod_discipline=mysql_result($result,0,"Kod_discipline"); 

$Name_discipline=mysql_result($result,0,"Name_discipline"); 
$Date=mysql_result($result,0,"Date"); 
$Forma_sda4i=mysql_result($result,0,"Forma_sda4i");

$query="delete from $usertable where Kod_discipline='$Kod_discipline'"; 
$result=mysql_query($query); 

print "<form method=post action='LoadPredmet.php' >"; 
print "<br><b>Введите код дисциплины:</b>"; 
print "<br><input name='Kod_discipline' value='$Kod_discipline' size=30>"; 
print "<br><b>Введите имя дисциплины:</b>"; 
print "<br><input name='Name_discipline' value='$Name_discipline' size=30>"; 
print "<br><b>Введите дату(гг.мм.чч):</b>"; 
print "<br><input name='Date' value='$Date'  size=30>"; 
print "<br><br><b>Введите форму сдачи(зачет или экзамен):</b>"; 
print "<br><input name='Forma_sda4i' value='$Forma_sda4i' size=30>"; 
print "<br><br><input type='submit' value='Изменить'>"; 
print "</form>"; 

} 
?> 
