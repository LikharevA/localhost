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
<script type="text/javascript" src="media/js/jquery.dataTables.js"></script>


<script type="text/javascript" src="media/js/jquery.dataTables.js"></script>
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
  <li><a href="#">Гости</a></li> 
  <li><a href="#">Экскурсии</a></li>
  <li><a href="#">Описание</a></li>  
  
  </ul> 
<div class="panes"> 
  <div><h2>Первая</h2> 
  <p> 
  <p>
  <p>   
  <form action="save_form.php" method="post" name="test_form">
  <p> 
  
<table>
<tr>  
    <td> Регион:&nbsp;<select name="region">
           <option>Pattay</option>
		   <option>Phuket</option>
           <option>Samui</option></select>
    </td>
	<td>
	</td>
	<td>Экскурсия: &nbsp;<?
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
             $list .= '<option value="'.$row['id_ex'].'">'.$row['name'].'</option>';
             }
             $select = '<select name="id_ex">'.$list.'</select>';
             echo $select;
     ?> 
	 </td>
	 <td>
	</td>
     <td>Дата: &nbsp;<input class="tcal tcalInput tcalActive" type="text" name="datesale">
	 </td>
	 <td>
	</td>
</tr>
<tr>
	 
     <td>Фамилия: &nbsp;<input type="text" name="f_name">
	 </td>
	 <td>
	</td>
     <td>Имя: &nbsp;<input type="text" name="l_name">
	 </td>
	 <td>
	</td>
     <td>Adult: <select name="adult">
            <option>1</option>
			<option>2</option>
			<option>3</option>
            <option>4</option></select>
	</td>
	<td>
	</td>
</tr>
<tr>	

    <td>Отель: &nbsp;<?
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
	</td>			   
    <td>
	</td>
	<td>№ комнаты: &nbsp;<input type="text" name="numroom">
	</td>
	<td>
	</td>
	<td>Контактный телефон: &nbsp;<input type="text" name="tel">
	</td>
	<td>
	</td>
 </tr>
 <tr>    
     <td>B.chd: <select name="bchd">
	        <option>0</option>
            <option>1</option>
			<option>2</option>
			<option>3</option>
            <option>4</option></select>
	 </td>
	 <td>
	 </td>
	 <td>S.chd: <select name="schd">
            <option>0</option>
			<option>1</option>
			<option>2</option>
			<option>3</option>
            <option>4</option></select>
	 </td>
     <td>
	 </td>	 
	 <td>Infint: <select name="infint">
            <option>0</option>
			<option>1</option>
			<option>2</option>
			<option>3</option>
            <option>4</option></select>
	 </td>
	 <td>
	 </td>
 </tr>
 <tr>        
	 <td>Стоимость: &nbsp;<input type="Text" name="price">
	 </td>
	 <td>
	 </td>
     <td>Пол: <select name="gender">
           <option>m</option>
           <option>f</option></select>
	 </td>
	 <td>
	 </td> 
     <td>Примечание: &nbsp;<textarea rows="3" cols="160"name="descript"></textarea>
	 </td>
	 <td>
	 </td>
</tr>
</table>	 
     <input type="submit" name="ok" value="Внести запись"></p>
     </form>

	 
	 
<script type="text/javascript">

	 $(document).ready(function() {
    $('#usert').dataTable( {
        "bProcessing": true,
        "bServerSide": true,
        "sAjaxSource": "server_processing.php"
    } );
} );

</script>
	 
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
    if(trim($_POST['f_name']) and trim($_POST['l_name']) 
	and trim($_POST['gender']) and trim($_POST['datesale']) and trim($_POST['price']) and trim($_POST['numroom']) and trim($_POST['id_ex'])
	and trim($_POST['adult']) and trim($_POST['bchd']) and trim($_POST['schd']) and trim($_POST['infint']) and trim($_POST['descript']))
	{
        $f_name=strip_tags(htmlspecialchars(mysql_escape_string(trim($_POST['f_name']))));
        $l_name=strip_tags(htmlspecialchars(mysql_escape_string(trim($_POST['l_name']))));
        $gender=strip_tags(htmlspecialchars(mysql_escape_string(trim($_POST['gender']))));
        $datesale=strip_tags(htmlspecialchars(mysql_escape_string(trim($_POST['datesale']))));
        $price=strip_tags(htmlspecialchars(mysql_escape_string(trim($_POST['price']))));
        $numroom=strip_tags(htmlspecialchars(mysql_escape_string(trim($_POST['numroom']))));
		$id_ex=strip_tags(htmlspecialchars(mysql_escape_string(trim($_POST['id_ex']))));
		$adult=strip_tags(htmlspecialchars(mysql_escape_string(trim($_POST['adult']))));
		$bchd=strip_tags(htmlspecialchars(mysql_escape_string(trim($_POST['bchd']))));
		$schd=strip_tags(htmlspecialchars(mysql_escape_string(trim($_POST['schd']))));
		$infint=strip_tags(htmlspecialchars(mysql_escape_string(trim($_POST['infint']))));
		$descript=strip_tags(htmlspecialchars(mysql_escape_string(trim($_POST['descript']))));
        $query = "INSERT INTO ex_bd.usert (`f_name`, `l_name`, `gender`, `datesale`, `price`, `numroom`, 'id_ex', `adult`, `bchd`, `schd`, `infint`, 'descript') 
		           VALUES ('$f_name', '$l_name', '$gender', '$datesale', '$price', '$numroom', '$id_ex', '$adult', '$bchd', '$schd', '$infint', '$descript')";
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
</form>
<form action="datatables.php" method="post" name="view_result">
<table>
 <tr>
  <td align="center"><input type="submit" class="buttons" value="Посмотреть список" /></td>
 </tr>
</table>
</form>
  </p> 
  
  </div> 
 

  <div class="les"><h2>Вторая</h2> 
  <p> 

  <p> 
  <p>
  <p>   
  <form action="save_form_ex.php" method="post" name="test_form">
  <p align="justify">
  
     Регион:&nbsp;<select name="region">
           <option>Pattay</option>
		   <option>Phuket</option>
           <option>Samui</option></select>
		   
	 Экскурсия: &nbsp;<input type="text" name="name">
	 <br>	
     Дата (с какого числа): &nbsp;<input class="tcal tcalInput tcalActive" type="text" name="date_start">
     Дата (по какое число): &nbsp;<input class="tcal tcalInput tcalActive" type="text" name="date_end"> 
     
	 <form name="f" method="get" action="<?=$_SERVER['PHP_SELF']?>">

     Дни недели: <select  name=days[] size=7 multiple>
             <option value=1 selected>пн</option>
             <option value=2 >вт</option>
			 <option value=3 >ср</option>
			 <option value=4 >чт</option>
			 <option value=5 >пт</option>
			 <option value=6 >сб</option>
             <option value=7 >вс</option>
             </select>
              <p>

         <?
  // 1-й вариант проверки факта нажатия кнопки:
  // if (@$_GET['ok'])

  // 2-й вариант проверки факта нажатия кнопки:
     if (isSet($_GET['ok']))
     {
       if ( isSet($_GET['books']) )
       // если выбран хотя бы один элемент списка
       {
          echo   "<i>Выбраны книги с кодами:</i><br>";

          foreach ( $_GET['books'] as $v )
              echo "$v<br>";
       }
       else
          echo 'Ничего не выбрано<br>';
     };
          ?>	   

	 Колличество дней: &nbsp;<select name="dayin">
           <option>1</option>
		   <option>2</option>
           </select>
	
     
     Стоимость: &nbsp;<input type="Text" name="price"><br>
	
     Примечание: &nbsp;<textarea rows="4" cols="160"name="descr"></textarea><br>
     <input type="submit" name="ok" value="Внести запись"></p>
     </form>
<script type="text/javascript">

	 $(document).ready(function() {
    $('#usert').dataTable( {
        "bProcessing": true,
        "bServerSide": true,
        "sAjaxSource": "server_processing.php"
    } );
} );

</script>
	 
   


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
</form>
<form action="datatables.php" method="post" name="view_result">
<table>
 <tr>
  <td align="center"><input type="submit" class="buttons" value="Посмотреть список" /></td>
 </tr>
</table>
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