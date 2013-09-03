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
/* Если была нажата кнопка редактирования, вносим изменения UPDATE `ex_bd`.`usert` SET `f_name` = 'Калинкин',
`l_name` = 'Петр' WHERE `usert`.`id` =915;*/
if($_POST['submit_edit']) {

$query = 'UPDATE ' . $table . '
		  SET 
			f_name = "' . $_POST['f_name'] . '", 
			l_name = "' . $_POST['l_name'] . '", 
			gender = "' . $_POST['gender'] . '", 
			hotel  = "' . $_POST['hotel'] . '", 
			numroom= "' . $_POST['numroom'] . '", 
			price = "' . $_POST['price'] . '"
		  WHERE id_us = "' . $_POST['update'] . '"';
/* Выполняем запрос. Если произойдет ошибка - вывести ее. */
mysql_query($query) or die (mysql_error());
}
 
/* Заносим в переменную $res всю базу данных */
$query = "SELECT * FROM $table";
/* Выполняем запрос. Если произойдет ошибка - вывести ее. */
$res = mysql_query($query) or die(mysql_error());
/* Узнаем количество записей в базе данных */
$row = mysql_num_rows($res);
 
/* Выводим данные из таблицы */
?>
<!DOCTYPE html>
<html>
 
<head>
    <meta charset="utf-8">
 <script type="js" src="js/jquery-1.9.1.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
<title>JQF1 - Jquery FormOne - Form Style Plugin</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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
<script type="text/javascript" src="trash/tabs/ui.core.js"></script>
<script type="text/javascript" src="trash/tabs/ui.tabs.js"></script>
<script type="text/javascript" src="js/jqf1.english.js"></script>
<script type="text/javascript" src="trash/jwysiwyg/jquery.wysiwyg.js"></script>
    <title>Редактирование и обновление данных</title>
 
<style type="text/css">
	body { font: 12px Georgia; color: #666; }
	h3 { font-size: 16px; text-align: center; }
	table { width: 400px; border-collapse: collapse; margin: 5px auto; background: #E6E6E6; }
	td { padding: 3px; vertical-align: middle; }
	input { width: 250px; border: solid 1px #CCC; color: #FF6666; }
	textarea { width: 250px; height: 100px; border: solid 1px #CCC; color: #FF6666; }
	.buttons { width: auto; border: double 1px #666; background: #D6D6D6; color: #000; }
	#num { width: 20px; text-align: right; margin-right: 5px; float: right; }
</style>
 
</head>
 
<body>
 
<h3>Редактирование и обновление данных в таблице MySQL</h3>

<?
/* Цикл вывода данных из базы конкретных полей */
while ($row = mysql_fetch_array($res)):?>
    <form method="post">
    <input type="hidden" name="update" value="<?php echo $row['id_us'];?>" />
    <table border="1" cellpadding="0" cellspacing="0">
    <tr>
    <td colspan="2" style="border-bottom:solid 1px #CCCCCC;"><b><i><div id="num"><?php echo $row['id_us'];?></div>"<?php echo $row['datesale'];?></b></i></td>
    </tr><tr>
    <td>Фамилия:</td><td><input type="text" value="<?php echo $row['f_name'];?>" name="f_name" /></td>
    </tr><tr>
    <td>Имя:</td><td><input type="text" value="<?php echo $row['l_name'];?>" name="l_name" /></td>
    </tr><tr>
    <td>Пол:</td><td><input type="text" value="<?php echo $row['gender'];?>" name="gender" /></td>
    </tr><tr>
    <td>Отель:</td><td><input type="text" value="<?php echo $row['hotel'];?>" name="hotel" /></td>
    </tr><tr>
	<td>Номер комнаты:</td><td><input type="text" value="<?php echo $row['numroom'];?>" name="numroom" /></td>
    </tr><tr>
	<td>Цена:</td><td><input type="text" value="<?php echo $row['price'];?>" name="price" /></td>
    </tr><tr>
<td colspan="2" align="center"><input type="submit" name="submit_edit" class="buttons" value="Сохранить изменения" /></td>
</tr></table></form>
<?php endwhile;?>
<?php
/* Закрываем соединение echo <td><b>id</b></td>*/
mysql_close();
?>
/* Выводим ссылку возврата */
<div style="text-align: center; margin-top: 10px;"><a href="index5.php">Вернуться назад</a></div>
 

