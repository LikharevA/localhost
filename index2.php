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
 <!--Подключаемся к серверу MySQL end 
<script language="JavaScript" src="http://widgetsmonster.com/000900600000001/200/200/f" type="text/javascript"></script>
<script type="text/javascript" src="http://jc.revolvermaps.com/2/2.js?i=2pbanw3tp38&amp;m=7&amp;s=130&amp;c=ff0000&amp;t=1" async="async"></script>
<script language="JavaScript" src="http://widgetsmonster.com/000100400000102/180/300/f"></script>
<script language="JavaScript" src="http://widgetsmonster.com/001202500000001/160/160/f"></script>
<script language="JavaScript" src="http://widgetsmonster.com/000200000000102/148/153/f"></script>
<a href="http://calendar.yuretz.ru" ><img border="0" src="http://i.calendar.yuretz.ru/informer/grey.png" alt="Календари на любой год - Календарь.Юрец.Ру"></a>

<script language="javascript" src="protoplasm.js"></script> 
<script language="javascript"> 
// transform() calls can be chained together 
Protoplasm.use('datepicker') 
.transform('input.datepicker') 
.transform('input.datepicker_es', { 'locale': 'es_AR' }); 
</script> </head> 
-->
<!--календарик -->
<ul class="ul">
<li><label for="selSearch">1Регион:</label></li>
<li>
<select name="selSearch" id="selSearch" search="ok" style="width:200px;" openheight="150">
<option value="01">Pattay</option>
<option value="02">Phuket</option>
<option value="02">Samui</option>

<!--выбор в вверху -->
<select>
</li>
</ul>
<script type="text/javascript">
$(document).ready(function(){
  $('.ul').jqf1();
});
</script>

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
	<li><label for="cal-number">1Дата:</li></label><li>
    <input class="tcal tcalInput tcalActive" type="text" name="date1">
    </div>
	<form action="#">
		<div>
		<ul class="ul">
       <li><label for="cal-number">Дата:</li></label><li>
			<select id="cal-number" onchange="f_createCalendars(this.options[this.selectedIndex].value)">
				<option value="0">none</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
		</div>
		<div id="container"></div>
	</form>
<!--Конец календарика -->
	<body> 
	<!--Конец календарика  <input type="text" name="date" class="datepicker" /> --> 
<? 
  echo "<br />";
  $mysqli = new mysqli("localhost", "root", "", "ex_bd");

  $result_set = $mysqli->query("SELECT * FROM ex_bd.excurtion");

  while ($row = $result_set->fetch_assoc()) {
    print_r($row);
   echo "<br />";
 }
  while ($row = $result_set->fetch_assoc()) {
    echo mysql_result($row,2);
    echo "<br />";
  }
  $result_set->close();
  $mysqli->close();
$mysqli = new mysqli("localhost", "root", "", "ex_bd");
$result_set = $mysqli->query("SELECT * FROM ex_bd.excurtion");
echo "Номер: "."Автобус: "."Дата: ". "<br>\n";
while ($row = $result_set->fetch_assoc())
{ 
echo $row['id']." \n";
echo $row['bus']." \n";
echo $row['data_start']." <hr>\n";
}
?>
<!-- 
 // $connect_to_db = mysql_connect("localhost", "root", "", "ex_bd")
	//   or die("Could not connect: " . mysql_error());
 
	    // подключаемся к базе данных
	  //  mysql_select_db($db_name, $connect_to_db)
       //or die("Could not select DB: " . mysql_error());
	 
	    // выбираем все значения из таблицы "Contacts"
	   // $qr_result = mysql_query("select * from " . $ex_bd.excurtion)
	   //or die(mysql_error());

//echo '</pre> 
	//<table border="2">
	//<tbody>
	//<tr>
	//<th> . Имя . </th>
    //<th> . Телефон . </th>
	//<th> .  E-Mail . </th>
	//</tr>
	//<pre>';
	//'</pre>
	//<tr>
	//<td>' . $row['id']. '</td>
	//<td>' . $row['bus'] . '</td>
	//<td>' . $row['hotel'] . '</td>
	//</tr>
	//</tbody>
	//</table>
//<pre>';
	 	    
	//  $result_set->close();
  //$mysqli->close();
  -->
 
<!--поиск -->

<form action="index2.php" method="post">

Регион<br>
<input name="nmag" id="nmag" search="ok" style="width:200px;" openheight="150"> 
<select>
<option value="01">Pattaya</option>
<option value="02">Phuket</option>
<option value="02">Samui</option>
</select>
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