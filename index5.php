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


<!-- клон -->




<!-- Клон -->


<!-- Календарик -->
<link rel="stylesheet" type="text/css" href="tcal.css" />
<script type="text/javascript" src="tcal.js"></script> 
<!-- Конец Календарик -->
<link rel="stylesheet" type="text/css" href="style.css"/>

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
</head>


 
 
 
 
<ul class="tabs"> 
  <li><a href="#">1-ая вкладка</a></li> 
  <li><a href="#">2-ая вкладка</a></li> 
  
  </ul> 
<div class="panes"> 
  <div><h2>Первая вкладочка</h2> 
  <p> 
  <form action="save_form.php" method="post" name="test_form">
  <p> 
     Регион:<select name="region">
	 
           <option>Pattay</option>
		   <option>Phuket</option>
           <option>Samui</option></select><br>
     Фамилия: &nbsp;<input type="text" name="f_name"><br>
     Имя: &nbsp;<input type="text" name="l_name"><br>
	 Пол: <select name="gender">
           <option>m</option>
           <option>f</option></select><br>
	 <!-- Отель:  &nbsp;<input type="text" name="hotel"><br> -->
	
     Отель: &nbsp;<?
       $hostname = "localhost"; // название/путь сервера, с MySQL
       $username = "root"; // имя пользователя 
       $password = ""; // пароль пользователя
       $dbName = "ex_bd"; // название базы данных
       $table = "hotel";
       $query = "SELECT id_ht,name,region FROM $table ";
         mysql_connect($hostname, $username, $password) or die ("Не могу создать соединение");
         mysql_query('SET NAMES utf8'); 
         /* Выбираем базу данных. Если произойдет ошибка - вывести ее */
         mysql_select_db($dbName) or die (mysql_error());
         /* Выполняем запрос. Если произойдет ошибка - вывести ее. */
       $res = mysql_query($query) or die(mysql_error());
       $list = '<option value="0">не выбрано</option>';
             while($row = mysql_fetch_assoc($res)) 
			 {
             $list .= '<option value="'.$row['name'].'">'.$row['name'].'</option>';
             }
             $select = '<select name="hotel">'.$list.'</select>';
             echo $select;
                   ?> 
                                          <br>
	 № комнаты: &nbsp;<input type="text" name="numroom"><br>
     Дата: &nbsp;<input class="tcal tcalInput tcalActive" type="text" name="datesale"><br>
     Стоимость: &nbsp;<input type="Text" name="price"><br>
	 Экскурсия: &nbsp;<?
       $hostname = "localhost"; // название/путь сервера, с MySQL
       $username = "root"; // имя пользователя 
       $password = ""; // пароль пользователя
       $dbName = "ex_bd"; // название базы данных
       $table = "excurtion_ed";
       $query = "SELECT id_ex,name FROM $table";
         mysql_connect($hostname, $username, $password) or die ("Не могу создать соединение");
         mysql_query('SET NAMES utf8'); 
         /* Выбираем базу данных. Если произойдет ошибка - вывести ее */
         mysql_select_db($dbName) or die (mysql_error());
         /* Выполняем запрос. Если произойдет ошибка - вывести ее. */
       $res = mysql_query($query) or die(mysql_error());
       $list = '<option value="0">не выбрано</option>';
             while($row = mysql_fetch_assoc($res)) 
			 {
             $list .= '<option value="'.$row['name'].'">'.$row['name'].'</option>';
             }
             $select = '<select name="id_ex">'.$list.'</select>';
             echo $select;
     ?> <br>
     Примечание: &nbsp;<textarea rows="3" cols="60"name="info"></textarea><br>
     <input type="submit" name="ok" value="Внести запись"></p>
     </form>

     <?
  /*     $link = mysql_connect("localhost", "root", "") or die("Не соединилось!!!");
      mysql_query('SET NAMES utf8');
/* Соединение, выбор БД  добавляет записи*/
/* mysql_select_db("ex_bd") or die("Не найдена БД");
Выполнение SQL запроса */
/*$query = "INSERT INTO ex_bd.usert(`f_name`) VALUES ('inptext1')";*/ 
/* добавляет запись */
/*$result = mysql_query($query) or die("Запрос ошибочный");0*/
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(trim($_POST['f_name']) and trim($_POST['l_name']) and trim($_POST['gender']) and trim($_POST['datesale']) and trim($_POST['price']) and trim($_POST['numroom']) and trim($_POST['id_ex']))
	{
        $f_name=strip_tags(htmlspecialchars(mysql_escape_string(trim($_POST['f_name']))));
        $l_name=strip_tags(htmlspecialchars(mysql_escape_string(trim($_POST['l_name']))));
        $gender=strip_tags(htmlspecialchars(mysql_escape_string(trim($_POST['gender']))));
        $datesale=strip_tags(htmlspecialchars(mysql_escape_string(trim($_POST['datesale']))));
        $price=strip_tags(htmlspecialchars(mysql_escape_string(trim($_POST['price']))));
        $numroom=strip_tags(htmlspecialchars(mysql_escape_string(trim($_POST['numroom']))));
		$id_ex=strip_tags(htmlspecialchars(mysql_escape_string(trim($_POST['id_ex']))));
        $query = "INSERT INTO ex_bd.usert (`f_name`, `l_name`, `gender`, `datesale`, `price`, `numroom`, 'id_ex') VALUES ('$f_name', '$l_name', '$gender', '$datesale', '$price', '$numroom', $id_ex)";
		$result = mysql_query($query) or die ("Запрос ошибочный");
    }
}
?>

<form action="view_data.php" method="post" name="view_result">
<table>
 <tr>
  <td align="center"><input type="submit" class="buttons" value="Посмотреть ранее сохраненные данные" /></td>
 </tr>
</table>
</form>
 
<form action="del_data.php" method="post" name="delete_data">
<table>
 <tr>
  <td align="center"><input type="submit" class="buttons" value="Удаление данных" /></td>
 </tr>
</table>
</form>
 
<form action="update_data.php" method="post" name="update_data">
<table>
 <tr>
  <td align="center"><input type="submit" class="buttons" value="Редактирование и обновление данных" /></td>
 </tr>
</table>

  </p> 
  
  </div> 
 

  <div class="les"><h2>Вторая вкладка.</h2> 
  <p> 

 
<?
  $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';
 
if ($action == 'postResult')
{
$data1selected = $_POST['data1'];
$data2selected = $_POST['data2'];
$data8text = $_POST['data8'];
 
 
    echo "<b>Данные с формы следующие:</b>";
    if ($data1selected!='')
    {   
    echo '<br>Поле data1: '.$data1selected;
    }
    else
    {echo '<br>Поле data1 пустое!';}
 
    if ($data2selected!='')
    {   
    
    echo '<br>Поле data2: '.$data2selected;
    }
    else
    {echo '<br>Поле data1 пустое!';}
 

    if ($data8text!='')
    {   
    
    echo '<br>Поле data8: '.$data8text;
    }
    else
    {echo '<br>Поле data8 пустое.';}    
 
    $htmlcode = <<<HERE
Нажмите кнопку 'Подтвердить запрос'.<br>
<input name='sendok1' type='submit' value='Подтвердить запрос'  onclick='infor.style.display="block"' />
<div style='display:none;' id='infor'>Информация о запросе сохранена в базе данных.</div>
HERE;
    
echo "<br><br>".$htmlcode;
    exit;
}
?>
<form action="index.php" method="post">
    
 <b>Данные запроса</b><br>
Дата1:      <select name="data1">
 <option>1</option>
  <option>2</option></select>
  <br>
  Дата2:        <select name="data2">
 <option>1</option>
  <option>2</option></select>
  <br>
  
 
<br><label for="data8">Дата8:</label> <input id="data8" name="data8" type = "text" > <br>
  <input type="hidden" name="action" value="postResult" />
       <br> <br><input name="sendzapros" type="submit" value="отправить">
    

	</form>
  </p> 
  
  </div> 
  <div class="les"><h2>Третья вкладка.</h2> 
  <p> 
  Содержимое третьей вкладки.
  </p> 
  
  </div> 
  
  <div class="les"><h2>Четвертая вкладка.</h2> 
  <p> 
  <p>
  Содержимое четвертой вкладки.
  </p> 
  
  </div> 
  
<div class="les"><h2>Пятая вкладка.</h2> 
  <p> 
  Содержимое пятой вкладки.
  </p> 
  
  </div> 
  
  </div>
 

<script> 
 

$(function() {

	$("ul.tabs").tabs("div.panes > div");
});
</script> 


</body>
</html>