<!DOCTYPE html>
<html>
<head>
<title>Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<script type="js" src="js/jquery-1.9.1.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
<title>Сохранение</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8\" />
<meta name="description" content="JQF1 - Jquery FormOne - Form Style Plugin" />
<meta name="keywords" content="jqf1, jqury, form, formon, style, styling, estlizacao, estilo, formulario, css, javacript" />
<meta name="resource-type" content="document" />
<meta name="robots" content="ALL" />
<meta name="distribution" content="Global" />
<meta name="rating" content="General" />
<meta name="author" content="Thiago Azurem - azurem@gmail.com" />
<meta name="language" content="pt-br" />
<link href="css/jqf1.css" rel="stylesheet" type="text/css" />
<link href="trash/tabs/tabs.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="trash/jwysiwyg/jquery.wysiwyg.css" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src='jquery.js' type='text/javascript'></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
 <body>
<?
 
/* Соединяемся с базой данных */
$hostname = "localhost"; // название/путь сервера, с MySQL
$username = "root"; // имя пользователя (в Denwer`е по умолчанию "root")
$password = ""; // пароль пользователя (в Denwer`е по умолчанию пароль отсутствует, этот параметр можно оставить пустым)
$dbName = "ex_bd"; // название базы данных
 
/* Таблица MySQL, в которой будут храниться данные */
$table = "usert";
 
/* Создаем соединение */
mysql_connect($hostname, $username, $password) or die ("Не могу создать соединение");
/* Сохраняем кодировку */
 mysql_query('SET NAMES utf8'); 
/* Выбираем базу данных. Если произойдет ошибка - вывести ее */
mysql_select_db($dbName) or die (mysql_error());
 
/* Определяем текущую дату */
$cdate = date("Y-m-d");
 
/* Составляем запрос для вставки информации в таблицу
name...date - название конкретных полей в базе;
в $_POST["test_name"]... $_POST["test_mess"] - в этих переменных содержатся данные, полученные из формы */
$query = "INSERT INTO $table SET 
         f_name='".$_POST['f_name']."', 
         l_name='".$_POST["l_name"]."',
         gender='".$_POST["gender"]."',  
         price='".$_POST["price"]."', 
         numroom='".$_POST["numroom"]."', 
         hotel='".$_POST["hotel"]."', 
         id_ex='".$_POST["id_ex"]."', 
         adult='".$_POST["adult"]."',
		 bchd='".$_POST["bchd"]."', 
         schd='".$_POST["schd"]."',
         tel='".$_POST["tel"]."',		 
         infint='".$_POST["infint"]."', 
         descript='".$_POST["descript"]."', 
         datesale='".$_POST["datesale"]."'
		 ";
/* Выполняем запрос. Если произойдет ошибка - вывести ее.

 */
mysql_query($query) or die(mysql_error());
/* Закрываем соединение */
mysql_close();
 
/* В случае успешного сохранения выводим сообщение и ссылку возврата */



echo ("<div style=\"text-align: center; margin-top: 10px;\">
<font color=\"green\">Данные успешно сохранены!</font>");
 ?>
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
 mysql_query('SET NAMES utf8'); 
/* Выбираем базу данных. Если произойдет ошибка - вывести ее */
mysql_select_db($dbName) or die (mysql_error());
 
/* Составляем запрос для извлечения данных из полей "name", "email", "theme",
f_name, l_name, gender, price, numroom, hotel, datesale;
"message", "data" таблицы "test_table" */
$query = "SELECT f_name, l_name, gender, price, numroom, hotel, datesale, id_ex, adult, bchd, schd, infint, tel, descript FROM $table ";
 
/* Выполняем запрос. Если произойдет ошибка - вывести ее. */
$res = mysql_query($query) or die(mysql_error());
 
/* Выводим данные из таблицы */
echo ("
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<style type=\"text/css\">
<!--
body { font: 15px Georgia; color: #666666; }
h3 { font-size: 16px; text-align: center; }
table { width: 1000px; border-collapse: collapse; margin: 0px auto; background: #E7E6E7; }
td { padding: 3px; text-align: center; vertical-align: middle; }
.buttons { width: auto; border: double 1px #666666; background: #D7D6D6; }
-->
</style>

  
</head>
 
<body>
 

 
<table border=\"1\" cellpadding=\"10\" cellspacing=\"0\">
 <tr style=\"border: solid 1px #000\">
  <td><b>Фамилия</b></td>
  <td align=\"center\"><b>Имя</b></td>
  <td align=\"center\"><b>Отель</b></td>
  <td align=\"center\"><b>Номер комнаты</b></td>
  <td align=\"center\"><b>Дата продажи</b></td>
  <td align=\"center\"><b>Экскурсия</b></td>
  <td align=\"center\"><b>Цена</b></td>
  <td align=\"center\"><b>Adult</b></td>
  <td align=\"center\"><b>Контактный телефон</b></td>
  <td align=\"center\"><b>Примечание</b></td>
  <td align=\"center\"><b>Пол</b></td>
 </tr>
");

/* Цикл вывода данных из базы конкретных полей 

*/

while ($row = mysql_fetch_array($res)) {
    echo "<tr>\n";
    echo "<td>".$row['f_name']."</td>\n";
    echo "<td>".$row['l_name']."</td>\n";
    echo "<td>".$row['hotel']."</td>\n";
	echo "<td>".$row['numroom']."</td>\n";
    echo "<td>".$row['datesale']."</td>\n";
	echo "<td>".$row['id_ex']."</td>\n";
	echo "<td>".$row['price']."</td>\n";
	echo "<td>".$row['adult']."</td>\n";
	echo "<td>".$row['tel']."</td>\n";
    echo "<td>".$row['descript']."</td>\n";
	echo "<td>".$row['gender']."</td>\n";
}
 
echo ("</table>\n");
 
/* Закрываем соединение */
mysql_close();
 
/* Выводим ссылку возврата */
echo ("<div style=\"text-align: center; margin-top: 10px;\"><a href=\"index5.php\">Вернуться назад</a></div>");
 
?>
</body>
</html>