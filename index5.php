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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
  <form  method="post">
  <p>
     Фамилия: &nbsp;<input type="text" name="f_name"><br>
     Имя: &nbsp;<input type="text" name="l_name"><br>
	 Пол: &nbsp;<input type="text" name="gender"><br>
	 Отель:  &nbsp;<input type="text" name="hotel"><br>
	 № комнаты: &nbsp;<input type="text" name="numroom"><br>
     Время: &nbsp;<input type="text" name="datesale"><br>
     Стоимость: &nbsp;<input type="Text" name="price"><br>
     Примечание: &nbsp;<textarea rows="3" cols="60"name="info"></textarea><br>
  <input type="submit" name="ok" value="Внести запись"></p>
</form>
 <?
$link = mysql_connect("localhost", "root", "") or die("Не соединилось!!!");
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