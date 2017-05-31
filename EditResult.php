<?php 
$hostname="localhost"; 
$username="root"; 
$password=""; 
$dbName="Za4etka"; 
$usertable="Result"; 
mysql_connect($hostname,$username,$password) or die("No connect"); 
mysql_select_db("$dbName") or die("No select DB"); 


$Kod_discipline = $_POST["Kod_discipline"];
$Number_za4etka = $_POST["Number_za4etka"];

$query="select * from $usertable where (Kod_discipline='$Kod_discipline' and Number_za4etka='$Number_za4etka')"; 
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
$Mark=mysql_result($result,0,"Mark"); 
$Kod_discipline=mysql_result($result,0,"Kod_discipline"); 
$Number_za4etka=mysql_result($result,0,"Number_za4etka"); 

$query="delete from $usertable where (Kod_discipline='$Kod_discipline' and Number_za4etka='$Number_za4etka')"; 
$result=mysql_query($query); 


print "<form method=post action='LoadResult.php'>"; 

print "<br><b>Введите результат(зачет или оценка):</b>"; 
print "<br><input name='Mark' value='$Mark'  size=30>"; 

print "<br><b>Введите код дисциплины:</b>"; 
print "<br><input name='Kod_discipline' value='$Kod_discipline' size=30>"; 

print "<br><b>Введите номер зачетки:</b>"; 
print "<br><input name='Number_za4etka' value='$Number_za4etka' size=30>"; 



print "<br><br><input type='submit' value='Изменить'>"; 
print "</form>"; 
} 
?> 
