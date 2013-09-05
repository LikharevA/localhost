<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>PHP, jQuery search demo</title>
<link rel="stylesheet" type="text/css" href="my.css">

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript">

$(function() {

    $(".search_button").click(function() {
        // получаем то, что написал пользователь
        var searchString    = $("#search_box").val();
        // формируем строку запроса
        var data            = 'search='+ searchString;

        // если searchString не пустая
        if(searchString) {
            // делаем ajax запрос
            $.ajax({
                type: "POST",
                url: "do_search.php",
                data: data,
                beforeSend: function(html) { // запустится до вызова запроса
                    $("#results").html('');
                    $("#searchresults").show();
                    $(".word").html(searchString);
               },
               success: function(html){ // запустится после получения результатов
                    $("#results").show();
                    $("#results").append(html);
              }
            });
        }
        return false;
    });
});
</script>

</head>
<body>
<h3 style="text-align:center;">Попробуйте ввести слово ajax</h3>
<div id="container">
<div style="margin:20px auto; text-align: center;">
<form method="post" action="do_search.php">
    <input type="text" name="search" id="search_box" class='search_box'/>
    <input type="submit" value="Поиск" class="search_button" /><br />
</form>
</div>
<div>

<div id="searchresults">Результаты для <span class="word"></span></div>
<ul id="results" class="update">
</ul>

</div>
</div>

</body>
</html>