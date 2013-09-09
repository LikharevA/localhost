<!DOCTYPE html>
<html>
<head>
<title>Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->

<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<title>JQF1 - Jquery FormOne - Form Style Plugin</title>
<meta charset="utf-8">
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

<script src='jquery.js' type='text/javascript'></script>



<script type="text/javascript" src="media/js/jquery.dataTables.js"></script>

<link rel="stylesheet" type="text/css" href="style.css" />

</head>
 
<script type="text/javascript">

	 $(document).ready(function() {
    $('#users').dataTable( {
        "bProcessing": true,
        "bServerSide": true,
        "sAjaxSource": "server_processing.php"
    } );
} );

</script>


<style>
body {
    font-family:verdana, sans-serif;color:#333;font-size:15px;
}

.dataTables_wrapper {
	position: relative;
	min-height: 302px;
	* height: 302px;
	clear: both;
}

.dataTables_processing {
	position: absolute;
	top: 39px;
	left: 50%;
	width: 500px;
	margin-left: -260px;
	padding: 20px;
	background-color: #EFFFBD;
	border: 1px solid #E3FE57;
	text-align: center;
}

.dataTables_length {
	width: 40%;
	float: left;
}

.dataTables_filter {
	width: 50%;
	float: right;
	text-align: right;
}

.dataTables_info {
	width: 60%;
	float: left;
}

.dataTables_paginate {
	width: 44px;
	* width: 50px;
	float: right;
	text-align: right;
}

/* Pagination nested */
.paginate_disabled_previous, .paginate_enabled_previous, .paginate_disabled_next, .paginate_enabled_next {
	height: 19px;
	width: 19px;
	margin-left: 3px;
	float: left;
}

.paginate_disabled_previous {
	background-image: url('datatables/images/back_disabled.jpg');
}

.paginate_enabled_previous {
	background-image: url('datatables/images/back_enabled.jpg');
}

.paginate_disabled_next {
	background-image: url('datatables/images/forward_disabled.jpg');
}

.paginate_enabled_next {
	background-image: url('datatables/images/forward_enabled.jpg');
}




/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * DataTables display
 */
table.display {
	margin: 0 auto;
	width: 100%;
    font-family:verdana, sans-serif;color:#533;font-size:15px;
}

table.display thead th {
	padding: 3px 10px;
	border-bottom: 1px solid black;
	font-weight: bold;
	cursor: pointer;
	* cursor: hand;
}

table.display tfoot th {
	padding: 3px 10px;
	border-top: 1px solid black;
	font-weight: bold;
}

table.display tr.heading2 td {
	border-bottom: 1px solid #aaa;
}

table.display td {
	padding: 3px 10px;
	border-bottom: 1px dotted #aaa;
}

table.display td.center {
	text-align: center;
	border-bottom: 1px dotted #aaa;
}



/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * DataTables sorting
 */

.sorting_asc {
	background: url('datatables/images/sort_asc.jpg') no-repeat center right;
}

.sorting_desc {
	background: url('datatables/images/sort_desc.jpg') no-repeat center right;
}

</style>
</head>
<body>
<div> 

<table cellpadding="0" cellspacing="0" border="0" class="display" id="users">
	<thead>
		<tr>
			<th width="5%">ID</th>
			<th width="15%">First name</th>
			<th width="15%">Last name</th>
			<th width="25%">Hotel</th>
			<th width="10%">ID_excurtion</th>
			<th width="20%">Phon</th>
			<th width="10%">№ room</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td colspan="5" class="dataTables_empty">Loading data from server</td>
		</tr>
	</tbody>
	<tfoot>
		<tr>
			<th>ID</th>
			<th>First name</th>
			<th>Last name</th>
			<th>Hotel</th>
			<th>ID_excurtion</th>
			<th>Phon</th>
			<th>№ room</th>

		</tr>
	</tfoot>
</table>
<?
echo ("<div style=\"text-align: margin-top: 10px;\">
 <a href=\"index5.php\">Вернуться назад</a></div>");
 ?>
</div>




</body>
</html>