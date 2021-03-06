<?
 
/* Соединяемся с базой данных */
$hostname = "localhost"; // название/путь сервера, с MySQL
$username = "root"; // имя пользователя (в Denwer`е по умолчанию "root")
$password = ""; // пароль пользователя (в Denwer`е по умолчанию пароль отсутствует, этот параметр можно оставить пустым)
$dbName = "ex_bd"; // название базы данных
 
/* Таблица MySQL, в которой хранятся данные */
$table = "usert";
 
/* Создаем соединение */
mysql_connect($hostname, $username, $password) or die ("Не могу создать соединение");
 
/* Выбираем базу данных. Если произойдет ошибка - вывести ее */
mysql_select_db($dbName) or die (mysql_error());

/* Сохраняем кодировку */
 mysql_query('SET NAMES utf8');
 
/* Если была нажата ссылка удаления, удаляем запись */
$del = $query = "delete from $table where (id='$del')";
/* Выполняем запрос. Если произойдет ошибка - вывести ее. */
mysql_query($query) or die(mysql_error());
 
/* Заносим в переменную $res всю базу данных */
$query = "SELECT * FROM $table";
/* Выполняем запрос. Если произойдет ошибка - вывести ее. */
$res = mysql_query($query) or die(mysql_error());
/* Узнаем количество записей в базе данных */
$row = mysql_num_rows($res);
 
/* Выводим данные из таблицы */
echo ("
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
 
<head>
 
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
 
    <title>Вывод и удаление данных из MySQL</title>
 
<style type=\"text/css\">
<!--
body { font: 12px Georgia; color: #666666; }
h3 { font-size: 16px; text-align: center; }
table { width: 700px; border-collapse: collapse; margin: 0px auto; background: #E6E6E6; }
td { padding: 3px; text-align: center; vertical-align: middle; }
.buttons { width: auto; border: double 1px #666666; background: #D6D6D6; }
-->
</style>
 
</head>
 
<body>
 
<h3>Вывод и удаление ранее сохраненных данных из таблицы MySQL</h3>
 
<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
 <tr style=\"border: solid 1px #000\">
  <td><b>id</b></td>
  <td align=\"center\"><b>Фамилия</b></td>
  <td align=\"center\"><b>Имя</b></td>
  <td align=\"center\"><b>Пол</b></td>
  <td align=\"center\"><b>Отель</b></td>
  <td align=\"center\"><b>Номер комнаты</b></td>
  <td align=\"center\"><b>Дата продажи</b></td>
  <td align=\"center\"><b>Цена</b></td>
 </tr>
");
 
/* Цикл вывода данных из базы конкретных полей */
while ($row = mysql_fetch_array($res)) {
    echo "<tr>\n";
	echo "<td>".$row['id']."</td>\n";
	echo "<td>".$row['f_name']."</td>\n";
    echo "<td>".$row['l_name']."</td>\n";
    echo "<td>".$row['gender']."</td>\n";
    echo "<td>".$row['hotel']."</td>\n";
	echo "<td>".$row['numroom']."</td>\n";
    echo "<td>".$row['datesale']."</td>\n";
    echo "<td>".$row['price']."</td>\n";
    echo "<td><a name=\"del\" href=\"del_data.php?del=".$row['id']."\" type=\"submit\" class=\"buttons\">Удалить</a></td>\n";
    echo "</tr>\n";
}
 
echo ("</table>\n");
 
/* Закрываем соединение */
mysql_close();
 
/* Выводим ссылку возврата */
echo ("<div style=\"text-align: center; margin-top: 10px;\"><a href=\"index5.php\">Вернуться назад</a></div>");
 
?>
