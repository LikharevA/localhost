<?  //  WR-Calendar v 1.0  //  21.11.05 г.  //  Miha-ingener@yandex.ru

#error_reporting (E_ALL);


$hcolor="#884422";     // Цвет сегодняшней даты
$bcolor="#cccccc";     // Цвет бордюра таблицы
$shapka="1";           // Печатать html-шапку?  1/0


$months=array("Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь");
$value[1]="Пн|Вт|Ср|Чт|Пт|Сб|Вс|";
$qi="2"; $value[2]="";

$daysamount=date('t',time())+1;
$weeks=floor($daysamount/7);
$firstday=date('w',mktime(0,0,0,date('n'),0,date('y')));

// получаем данные
for($i=0;$i<$firstday;$i++) {$value[$qi].="|";}
for($q=1;$q<$daysamount;$q++) {$value[$qi].="$q|"; if(intval (($i+$q)/7)==($i+$q)/7) {$qi++; $value[$qi]="";}}

// Печатаем КАЛЕНДАРЬ НА ТЕКУЩИЙ МЕСЯЦ
$vmax=count($value); $i="0"; $ii="0"; $add="";
if ($shapka=="1") {print"<html><head><style>TD {COLOR:#333333; FONT-FAMILY:Verdana,Arial; FONT-SIZE:11px; LINE-HEIGHT:150%; padding-left:0; BORDER-RIGHT:#666666 1px solid; BORDER-TOP:#666666 0px solid; BORDER-LEFT:#666666 0px solid; BORDER-BOTTOM:#666666 1px solid;} .sun{COLOR:#ffffff; FONT-WEIGHT: bold; Background:#ff9900;} .seg{COLOR:#ffffff; FONT-WEIGHT: bold; Background:$hcolor;}</style></head><body>";}
print"<table align=center border=1 cellpadding=2 cellspacing=0 bordercolor=$bcolor><caption><font face='Verdana' size=-1><B>".$months[date('n')-1]."</caption></B></font><TR align=middle valign=middle>";
do {
   if ($ii=="6") {$add="class=sun";} else {$add="";}
   do {$i++;
       $rdt=explode("|", $value[$i]);
       if (!isset($rdt[$ii])) {$add=""; $rdt[$ii]="&nbsp;";} else {if ($rdt[$ii]=="") {$add=""; $rdt[$ii]="&nbsp;";}}
       if ($i=="1") {$addbb="<B>";} else {$addbb="";}
       if($rdt[$ii]==date('d')) {$addse="class=seg"; } else {$addse="";}
       print"<td $addse $add width=23>$addbb $rdt[$ii]</td>\r\n";
      } while ($i<$vmax);

   if ($ii<"6") {print"</tr><TR align=middle valign=middle>\r\n";}
   $i="0"; $ii++;
   } while ($ii<"7");

print"</tr></table>";
?>
