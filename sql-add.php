<?php 
error_reporting(E_ALL);
ini_set('desplay_errors','1');
 
 
$host='localhost';
$database='bazaname';
$user='bazauser';
$pswd='123';
 
$dbconn = mysql_connect($host, $user, $pswd) or die("Не могу соединиться с MySQL.");
 
 if (!$dbconn) {
echo "Ошибка подключения к серверу MySQL<br>";
exit;
}
echo "Соединение с сервером MySQL усановлено<br>";
if (!mysql_select_db($database)) {
echo "Ошибка при выборе БД ".$database." MySQL<br>";
exit;
 
}
echo "Выбор БД ".$database." MySQL произведен успешно<br>";
 
$data1='дата1';
$data2="data2";
$data3="data3";
$data4="data4";
..пропущу...
$data8="data8";
mysql_query("INSERT INTO Table1 (data1,data2,data3,data4,(здесь еще 5,6,7),data8) values ('$data1','$data2','$data3', '$data4', '(здесь еще 5,6,7)', '$data8')");
echo "В таблицу Table1 добавлены данные запроса <br>";
 
if (mysql_close($dbconn)) {
echo "Соединение с БД ".$host." закрыто";
}
?>