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

 <!-- Календарик -->
<link rel="stylesheet" type="text/css" href="tcal.css" />
	<script type="text/javascript" src="tcal.js"></script> 
 <!--Конец календарика -->
</head>
<body>
<h1>Добро пожаловать!</h1>
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!--календарик -->
<ul class="ul">
<li><label for="selSearch">Регион:</label></li>
<li>
<select name="selSearch" id="selSearch" search="ok" style="width:200px;" openheight="120">
<option value="01">Pattay</option>
<option value="02">Phuket</option>
<option value="02">Samui</option>

<!--выбор в вверху -->
<select>
</li>
</ul>

<ul class="ul">

 <form  method="post">
  <li>Фамилия:</li> &nbsp;<input type="text" name="f_name"><br>
     Имя: &nbsp;<input type="text" name="l_name"><br>
	 Пол: &nbsp;<input type="text" name="gender"><br>
	 Отель:  &nbsp;<input type="text" name="hotel"><br>
     Описание: &nbsp;<textarea rows="3" cols="60"name="info"></textarea><br>
     Время: &nbsp;<input type="text" name="time"><br>
     Цена билета: &nbsp;<input type="Text" name="price"><br>
     Зал: &nbsp;<input type="text" name="room"><br>
  <input type="submit" name="ok" value="Внести запись"></li>
</form>
</ul>
<script type="text/javascript">
$(document).ready(function(){
  $('.ul').jqf1();
});
</script>

<ul class="ul">
<li><label for="inptext1">Фамилия:</label></li>
<li><input type="text" id="inptext1" size="12" name="inptext1" maxlength="10" /></li>

<script type="text/javascript">
$(document).ready(function(){
  $('.ul').jqf1();
});
</script>


<li><label for="inptext2">Имя:</label></li>
<li><input type="text" id="inptext2" size="12" name="inptext2" maxlength="10" /></li>
</ul>
<script type="text/javascript">
$(document).ready(function(){
  $('.ul').jqf1();
});
</script>

<ul class="ul">
<li><label for="inptext3">Отель:</label></li>
<li><input type="text" id="inptext3" size="12" name="inptext3" maxlength="10" /></li>

<script type="text/javascript">
$(document).ready(function(){
  $('.ul').jqf1();
});
</script>


<li><label for="inptext4">№ комнаты:</label></li>
<li><input type="text" id="inptext4" size="12" name="inptext4" maxlength="10" /></li>
</ul>
<script type="text/javascript">
$(document).ready(function(){
  $('.ul').jqf1();
});
</script>

<ul class="ul">
<li><label for="inptext5">Гражданство:</label></li>
<li><input type="text" id="inptext5" size="12" name="inptext5" maxlength="10" /></li>

<script type="text/javascript">
$(document).ready(function(){
  $('.ul').jqf1();
});
</script>

<li><label for="inptext6">№ паспорта:</label></li>
<li><input type="text" id="inptext6" size="12" name="inptext6" maxlength="10" /></li>
</ul>
<script type="text/javascript">
$(document).ready(function(){
  $('.ul').jqf1();
});
</script>
<script type="text/javascript">
$(document).ready(function(){
  $('.ul').jqf1();
});
</script>


<? 
/* Соединение, выбор БД  добавляет записи*/

$link = mysql_connect("localhost", "root", "") or die("Не соединилось!!!");

mysql_select_db("ex_bd") or die("Не найдена БД");

/* Выполнение SQL запроса */

/*$query = "INSERT INTO ex_bd.usert(`f_name`) VALUES ('inptext1')";*/ 

/* добавляет запись */

     
$result = mysql_query($query) or die("Запрос ошибочный");


?> 



<script type="text/javascript">
	//<![CDATA[
		function f_createCalendars(n_number) {

			var e_container = document.getElementById('container');

			if (isNaN(n_number) || !e_container) return;

			f_tcalCancel();
			var s_html = '';

			for (var i = 1; i <= n_number; i++)
				s_html += '<div>' + i + '. <input type="text" name="date' + i + '" class="tcal" /></div>';

			e_container.innerHTML = s_html;

			// all you need is call this after your inputs are added
			f_tcalInit();
		}
	//]]>
	</script>
	<div>
	<ul class="ul">
	<li><label for="cal-number">Дата:</li></label><li>
    <input class="tcal tcalInput tcalActive" type="text" name="date1">
    </div>
	
<!--Конец календарика -->
	<body> 
<!--Конец календарика  <input type="text" name="date" class="datepicker" /> --> 
<? 
  echo "<br />";
  $mysqli = new mysqli("localhost", "root", "", "ex_bd");

  $result_set = $mysqli->query("SELECT * FROM ex_bd.excurtion");


$mysqli = new mysqli("localhost", "root", "", "ex_bd");
$result_set = $mysqli->query("SELECT * FROM ex_bd.excurtion");
echo "Номер:    "."Автобус:     "."Дата:    ". "<br>\n";
while ($row = $result_set->fetch_assoc())
{ 
echo $row['id']."      \n";
echo $row['bus']."     \n";
echo $row['data_start']."      <hr>\n";
}
?>

<!--поиск -->
<form action="index1.php" method="post">

Регион<br>
<input name="nmag" id="nmag" search="ok" style="width:200px;" openheight="150"> 

<!--выбор в вверху -->
<input type="submit" name="submit" value="Искать">
<input type="reset" name="reset" value="Очистить">

</form>
<?

/* Соединение, выбор БД */

$link = mysql_connect("localhost", "root", "") or die("Не соединилось!!!");

mysql_select_db("ex_bd") or die("Не найдена БД");

/* Выполнение SQL запроса */

$query = "SELECT * FROM ex_bd.excurtion WHERE UPPER(region) LIKE '%".strtoupper($_POST['nmag'])."%'";

$result = mysql_query($query) or die("Запрос ошибочный");

/* Печать результатов в HTML */

print "<table>\n";

while ($line = mysql_fetch_array($result, MYSQL_NUM)) {

print "\t<tr>\n";

for ($i=0;$i<=3;$i++) { print "\t\t<td>$line[$i]</td>\n"; }

print "\t</tr>\n";

}

print "</table>\n";

/* Освобождение памяти, занятой результатом запроса */

mysql_free_result($result);

/* Закрытие соединения */

mysql_close($link);

?>