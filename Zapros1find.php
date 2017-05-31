<?php 
$hostname="localhost"; 
$username="root"; 
$password=""; 
$dbName="Za4etka"; 
$usertable="Predmets"; 

mysql_connect($hostname,$username,$password) or die("No connect"); 
mysql_select_db("$dbName") or die("No select DB"); 
$Name_discipline = $_POST["Name_discipline"];
$var="Nezachet";
$var1=3;
$query="select $usertable.Name_discipline, Students.FIO, Result.Mark
from $usertable, Result, Students 
where (($usertable.Name_discipline = '$Name_discipline') and (Result.Kod_discipline=$usertable.Kod_discipline) and (Result.Number_za4etka=Students.Number_za4etka) and 
((Result.Mark like '$var') or (Result.Mark < '$var1')	));"; 
$result=mysql_query($query); 

$number=mysql_numrows($result); 
$i=0; 
if ($number == 0) 
{ 
print "Нет двоишников <br>"; 
} 
elseif ($number > 0) 
{ 
while ($i < $number) 
{ 
$FIO=mysql_result($result,$i,"Students.FIO"); 
$Name_discipline=mysql_result($result,$i,"$usertable.Name_discipline"); 
$Mark=mysql_result($result,$i,"Result.Mark"); 
print "<u> FIO:</u> <br>"; 
print "$FIO <br><br>"; 
print "<u> Название предмета:</u> <br>"; 
print "$Name_discipline <br><br>"; 
print "<u> Оценка:</u> <br>"; 
print "$Mark <br><br>"; 
$i++; 
print "<hr>"; 
} 
} 
print "<form method=post action='Index.php'>"; 
print "<br><br><input type='submit' value='Вернуться на главную'>"; 
print "</form>"; 
?> 
 
