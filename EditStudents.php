<?php 
$hostname="localhost"; 
$username="root"; 
$password=""; 
$dbName="Za4etka"; 
$usertable="Students"; 
mysql_connect($hostname,$username,$password) or die("No connect"); 
mysql_select_db("$dbName") or die("No select DB"); 


$Number_za4etka = $_POST["Number_za4etka"];
$query="select * from $usertable where Number_za4etka='$Number_za4etka'"; 
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
$FIO=mysql_result($result,0,"FIO"); 
$Number_za4etka=mysql_result($result,0,"Number_za4etka"); 
$Gender=mysql_result($result,0,"Gender"); 

$query="delete from $usertable where Number_za4etka='$Number_za4etka'"; 
$result=mysql_query($query); 


print "<form method=post action='LoadStudents.php'>"; 

print "<br><b>Введите ФИО:</b>"; 
print "<br><input name='FIO'  value='$FIO'  size=30>"; 

print "<br><b>Введите номер зачетки:</b>"; 
print "<br><input name='Number_za4etka' value='$Number_za4etka' size=30>"; 

print "<br><b>Пол:</b>"; 
print "<br><input name='Gender' value='$Gender' size=30>"; 


print "<br><br><input type='submit' value='Изменить'>"; 
print "</form>"; 
} 
?> 
