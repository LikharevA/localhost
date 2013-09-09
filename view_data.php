

<!DOCTYPE html>
<html>
<head>
<title>Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<script type="js" src="js/jquery-1.9.1.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
<title>JQF1 - Jquery FormOne - Form Style Plugin</title>
<meta charset="utf-8" />
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




<link href="http://slyweb.ru/css/commonie7.css" rel="stylesheet" type="text/css"/>
<script src="../jsfiles/jquery-1.4.2.min.js"></script>
</head>

<script type=text/javascript>
$(document).ready(function(){$("#load1").click(function(){
var clone = $("#load2").clone().add();
$("body").append(clone);
});
});
</script>


<body class=iframe><button id="load1">Нажмите</button>
<div id="load2">Применяем функцию clone()

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
$query = "SELECT f_name, l_name, gender, price, numroom, hotel, datesale, id_ex, adult, bchd, schd, infint, descript FROM $table ";
 
/* Выполняем запрос. Если произойдет ошибка - вывести ее. */
$res = mysql_query($query) or die(mysql_error());
 
/* Выводим данные из таблицы */
echo ("
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
 
    <title>Вывод данных из MySQL</title>
 
<style type=\"text/css\">
<!--
body { font: 14px Georgia; color: #666666; }
h3 { font-size: 16px; text-align: center; }
table { width: 700px; border-collapse: collapse; margin: 0px auto; background: #E7E6E7; }
td { padding: 3px; text-align: center; vertical-align: middle; }
.buttons { width: auto; border: double 1px #666666; background: #D7D6D6; }
-->
</style>

  
</head>
 
<body>
 
<h3>Вывод ранее сохраненных данных из таблицы MySQL</h3>
 
<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
 <tr style=\"border: solid 1px #000\">
  <td><b>Фамилия</b></td>
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
    echo "<td>".$row['f_name']."</td>\n";
    echo "<td>".$row['l_name']."</td>\n";
    echo "<td>".$row['gender']."</td>\n";
    echo "<td>".$row['hotel']."</td>\n";
	echo "<td>".$row['numroom']."</td>\n";
    echo "<td>".$row['datesale']."</td>\n";
    echo "<td>".$row['price']."</td>\n</tr>\n";
}
 
echo ("</table>\n");
 
/* Закрываем соединение */
mysql_close();
 
/* Выводим ссылку возврата */
echo ("<div style=\"text-align: center; margin-top: 10px;\"><a href=\"index5.php\">Вернуться назад</a></div>");
 
?>
</div>
</body>


<style>  
p {font-color: #000;}
</style>

</html>