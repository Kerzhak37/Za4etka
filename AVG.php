<?php 
$hostname="localhost"; 
$username="root"; 
$password=""; 
$dbName="Za4etka"; 
$usertable="Predmets"; 

mysql_connect($hostname,$username,$password) or die("No connect"); 
mysql_select_db("$dbName") or die("No select DB"); 

$FIO = $_POST["FIO"];
$query="select $usertable.Name_discipline, Students.FIO, Result.Mark
from $usertable, Result, Students
where ( (Students.FIO like '$FIO%') and (Result.Kod_discipline=$usertable.Kod_discipline) and (Result.Number_za4etka=Students.Number_za4etka) );"; 

$result=mysql_query($query); 

$number=mysql_numrows($result); 

$i=0; 
if ($number == 0) 
{ 
print "Нет данных о таких студентах в БД <br>"; 
} 
elseif ($number > 0) 
{ 
while ($i < $number) 
{ 
$FIO=mysql_result($result,$i,"Students.FIO"); 
$Mark+=mysql_result($result,$i,"Mark"); 

$i++; 

}
$a=mysql_query("select count(Predmets.Forma_sda4i) from Predmets Where (Predmets.Name_discipline like 'Examen') Group by Predmets.Forma_sda4i;");
$ball=$Mark/($a+1);
echo "<table border='2' cellpadding ='3' width='50%'>";
echo "<tr><td valign='middle' align='center'><u> Фамилия Имя Отчество:</u> <br></td><td valign='middle' align='center'><u> Средний балл:</u> <br></tr>";
echo "<tr><td valign='middle' align='center'><B> $FIO </B> <br></td><td valign='middle' align='center'><b>$ball </b><br> </tr>";
echo "</table>";
 
} 
print "<form method=post action='Index.php'>"; 
print "<br><br><input type='submit' value='Вернуться на главную'>"; 
print "</form>"; 
?> 
 
