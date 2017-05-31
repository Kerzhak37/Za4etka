<?php 
print "<form method=post action='LoadPredmet.php'>"; 

print "<br><b>Введите код дисциплины:</b>"; 
print "<br><input name='Kod_discipline'  size=30>"; 

print "<br><b>Введите имя дисциплины:</b>"; 
print "<br><input name='Name_discipline' size=30>"; 

print "<br><b>Введите дату(гг.мм.чч):</b>"; 
print "<br><input name='Date'  size=30>"; 

print "<br><br><b>Введите форму сдачи(зачет или экзамен):</b>"; 
print "<br><input name='Forma_sda4i' size=30>"; 


print "<br><br><input type='submit' value='Добавить'>"; 
print "</form>"; 

?>