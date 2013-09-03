<!DOCTYPE html>
<html>
<head>
<title>Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->


<meta charset="utf-8" />
<meta name="description" conten
<meta name="robots" content="ALL" />
<meta name="distribution" content="Global" />
<meta name="rating" content="General" />

<meta name="language" content="pt-br" />

<link href="trash/tabs/tabs.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="trash/jwysiwyg/jquery.wysiwyg.css" type="text/css" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- Календарик -->
<link rel="stylesheet" type="text/css" href="tcal.css" />
<script type="text/javascript" src="tcal.js"></script> 
<!-- Конец Календарик -->


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
 <body>
 <?
$hostname = "localhost"; // название/путь сервера, с MySQL
$username = "root"; // имя пользователя (в Denwer`е по умолчанию "root")
$password = ""; // пароль пользователя (в Denwer`е по умолчанию пароль отсутствует, этот параметр можно оставить пустым)
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
    while($row = mysql_fetch_assoc($res)) {
      $list .= '<option value="'.$row['id_ex'].'">'.$row['name'].'</option>';
      }
     
    $select = '<select name="name">'.$list.'</select>';
     
    echo $select;
?>
<ul class="tabs"> 
  <li><a href="#">1-ая вкладка</a></li> 
  <li><a href="#">2-ая вкладка</a></li> 
  <li><a href="#">3-я вкладка</a></li> 
  <li><a href="#">4-ая вкладка</a></li> 
  <li><a href="#">5-ая вкладка</a></li> 
  </ul> 
  
  <!-- tab "panes" --> 
  <div class="panes"> 
  <div><h2>Первая вкладка.</h2> 
  <p> 
  <form action="save_form.php" method="post" name="test_form">
  <p>
     Фамилия: &nbsp;<input type="text" name="f_name"><br>
     Имя: &nbsp;<input type="text" name="l_name"><br>
	 Пол: <select name="gender">
           <option>m</option>
           <option>f</option></select><br>
	 <!-- Отель:  &nbsp;<input type="text" name="hotel"><br> -->
	 



	 
     Отель: <select name="hotel">
           <option>Zine</option>
           <option>Juke</option></select>
                                          <br>
	

	 № комнаты: &nbsp;<input type="text" name="numroom"><br>
     Дата: &nbsp;<input class="tcal tcalInput tcalActive" type="text" name="datesale"><br>
     Стоимость: &nbsp;<input type="Text" name="price"><br>
	 Экскурсия: <select name="name">'.$list.'</select>

	 <br>

     Примечание: &nbsp;<textarea rows="3" cols="60"name="info"></textarea><br>
  <input type="submit" name="ok" value="Внести запись"></p>
</form>
 <?
$link = mysql_connect("localhost", "root", "") or die("Не соединилось!!!");
mysql_query('SET NAMES utf8');
/* Соединение, выбор БД  добавляет записи*/
/* mysql_select_db("ex_bd") or die("Не найдена БД");
Выполнение SQL запроса */
/*$query = "INSERT INTO ex_bd.usert(`f_name`) VALUES ('inptext1')";*/ 
/* добавляет запись */
/*$result = mysql_query($query) or die("Запрос ошибочный");0*/
 if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(trim($_POST['f_name']) and trim($_POST['l_name']) and trim($_POST['gender']) and trim($_POST['datesale']) and trim($_POST['price']) and trim($_POST['numroom']))
	{
        $f_name=strip_tags(htmlspecialchars(mysql_escape_string(trim($_POST['f_name']))));
        $l_name=strip_tags(htmlspecialchars(mysql_escape_string(trim($_POST['l_name']))));
        $gender=strip_tags(htmlspecialchars(mysql_escape_string(trim($_POST['gender']))));
        $datesale=strip_tags(htmlspecialchars(mysql_escape_string(trim($_POST['datesale']))));
        $price=strip_tags(htmlspecialchars(mysql_escape_string(trim($_POST['price']))));
        $numroom=strip_tags(htmlspecialchars(mysql_escape_string(trim($_POST['numroom']))));
        $query = "INSERT INTO ex_bd.usert (`f_name`, `l_name`, `gender`, `datesale`, `price`, `numroom`) VALUES ('$f_name', '$l_name', '$gender', '$datesale', '$price', '$numroom')";
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

<?php

function calendar(){
$td1 = "<td align='right' class='color_bg'?>";
$td2 = "<td align='right' class='color_bg_today'?>";
$day = date ('j',time ());
$mon = date ('n',time ());
$year = date ('Y',time ());
$dim = date ('t',time ());
$frst_day = date('w',mktime(1,0,0,$mon,1,$year))-1;
if ($frst_day=='-1'){ $frst_day='6'; }
$mon_str=array('Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь');
$mon1=$mon-1;
$rez = "<table align='left' border='0' cellpadding='0' cellspacing='0' class='color_bg_tbl'?>
<tr?>
<td?>
<table border='0' cellspacing='1' cellpadding='2' width='100%'?>
<tr?>
<td align='center' colspan='7' class='color_bg_td'?> 
<font class='now'?>
<b?>" .$mon_str[$mon1] ." " .$year ."</b?></font?></td?>\n
</tr?>
<tr?>
<td align='center' class='color_bg'?>Пн</td?>
<td align='center' class='color_bg'?>Вт</td?>
<td align='center' class='color_bg'?>Ср</td?>
<td align='center' class='color_bg'?>Чт</td?>
<td align='center' class='color_bg'?>Пт</td?>
<td align='center' class='color_bg'?>Сб</td?>
<td align='center' class='color_bg'?><font color=red?>Вс</font?></td?>
</tr?>\n";
for( $i = 1; $i <= $dim+$frst_day; $i++)
 {
if($i==$day+$frst_day) $td=$td2; else $td=$td1;
 if($dw==0)
  {$dw='7';}
 $dw = $dw-1;
 $dm = $i- $frst_day;
 if($frst_day > $i or $dm<1)
  {$rez .= $td."\n  </td?>\n";}
 elseif($frst_day == $i)
  {$rez .= $td."\n".$dm."</td?>\n"; }
 elseif($i=='7' or $i=='14' or $i=='21' or $i=='28' or $i=='35')
  {
  $rez .= $td." <font color=red?>".$dm."</font?> </td?>\n</tr?>\n<tr?>\n";
  }
 else{$rez .= $td." ".$dm."\n</td?>\n";}
 }
if($dw!=0)
 {  
 for( $i = 0; $i < $dw; $i++)
  { $rez .= $td."\n  </td?>\n";}
 }
$rez .= "</tr?>\n
</table?>\n</td?>\n</tr?>\n</table?>\n"; 
return $rez;
} 

print calendar();

?> 
 


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