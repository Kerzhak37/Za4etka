<?php 
$hostname="localhost"; 
$username="root"; 
$password=""; 
$dbName="Za4etka"; 
$usertable="Result"; 
MYSQL_CONNECT($hostname,$username,$password) OR DIE("Не могу подсоединиться"); 
MYSQL_SELECT_DB($dbName) or die("Не могу выбрать БД"); 

$result = mysql_query("SELECT * FROM $usertable Order by $usertable.Number_za4etka,$usertable.Kod_discipline");
 echo "<table align='center' border='2' cellpadding ='3' width='50%'>";
echo "<tr bgcolor='aqua'><td valign='middle' align='center'>Оценка</td><td valign='middle' align='center'>Код дисциплины</td><td valign='middle' align='center'>Номер зачетки</td></tr>";
while ($row=mysql_fetch_array($result)){
$pole1=$row[0];
$pole2=$row[1];
$pole3=$row[2];
echo "<tr><td>$pole1</td><td>$pole2</td><td>$pole3</td></tr>";}
echo "<table border='2' align='center' cellpadding ='3' width='50%'>";
echo "<tr><td valign='middle' align='center'>What can you do:</td><td valign='middle' align='center'><form method=post action='FormLoadResult.php'><input type='submit' value='Add'></form></td>
<td valign='middle' align='center'><form method=post action='FormDeleteResult.php'><input type='submit' value='Delete'></form></td>
<td valign='middle' align='center'><form method=post action='FormEditResult.php'><input type='submit' value='Edit'></form></td>
<td valign='middle' align='center'><form method=post action='Sredniiball.php'><input type='submit' value='Sredniiball'></form></td>
</tr>";
echo "</table>";
echo "<br>";  

$result = mysql_query("SELECT * FROM Students Order by Students.Number_za4etka; ");
echo "<table border='2'align='center'  cellpadding ='3' width='50%'>";
echo "<tr bgcolor='aqua'><td valign='middle' align='center'>ФИО</td><td valign='middle' align='center'>Номер зачетки</td><td>Пол</td></tr>";
while ($row=mysql_fetch_array($result)){
$pole1=$row[0];
$pole2=$row[1];
$pole3=$row[2];
echo "<tr><td>$pole1</td><td>$pole2</td><td>$pole3</td></tr>";}
echo "</table>";
echo "<table border='2' align='center' cellpadding ='3' width='50%'>";
echo "<tr><td valign='middle' align='center'>What can you do:</td><td valign='middle' align='center'><form method=post action='FormLoadStudents.php'><input type='submit' value='Add'></form></td>
<td valign='middle' align='center'><form method=post action='FormDeleteStudents.php'><input type='submit' value='Delete'></form></td>
<td valign='middle' align='center'><form method=post action='FormEditStudents.php'><input type='submit' value='Edit'></form></td></tr>";
echo "</table>";
echo "<br>"; 

$result = mysql_query("SELECT * FROM Predmets Order by Predmets.Kod_discipline");
echo "<table border='2'align='center'  cellpadding ='3' width='50%'>";
echo "<tr bgcolor='aqua'><td valign='middle' align='center'>Код дисциплины</td><td valign='middle' align='center'>Имя дисциплины</td><td valign='middle' align='center'>Дата проведения</td><td valign='middle' align='center'>Форма сдачи</td></tr>";
while ($row=mysql_fetch_array($result)){
$pole1=$row[0];
$pole2=$row[1];
$pole3=$row[2];
$pole4=$row[3];
echo "<tr><td>$pole1</td><td>$pole2</td><td>$pole3</td><td>$pole4</td></tr>";}
echo "</table>";
echo "<table border='2' align='center' cellpadding ='3' width='50%'>";
echo "<tr><td valign='middle' align='center'>What can you do:</td><td valign='middle' align='center'><form method=post action='FormLoadPredmet.php'><input type='submit' value='Add'></form></td>
<td valign='middle' align='center'><form method=post action='FindDiscipline.php'><input type='submit' value='Find nesdavshih sessiu'></form></td>
<td valign='middle' align='center'><form method=post action='FormDeletePredmet.php'><input type='submit' value='Delete'></form></td>
<td valign='middle' align='center'><form method=post action='FormEditPredmet.php'><input type='submit' value='Edit'></form></td></tr>";
echo "</table>";
echo "<br>"; 
MYSQL_CLOSE();
?> 