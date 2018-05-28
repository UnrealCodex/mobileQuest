<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,  minimum-scale=1.0">
<title>Documento sin título</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="css/css_checkbox.css" rel="stylesheet" id="bootstrap-css">
</head>

<body>
	
	<div align="center" >
	<!------ 	

BARRA DE BUSQUEDA
			<label>Folio:</label>	<br>
			<input type="text" name="rand_fol" value="" style="height:40px;font-size:14pt;width: 80% ;vertical-align:middle "><a href="" class="btn btn-primary" ><img src="icon.png" width="28px" height="28px"></a>
			</div>
			<br><br>
----->	
	
	<div align="center">
		<h1>	Cuestionarios no completados</h1><br>
<br>

	<?php 
	require_once  'conexion.php'; //conexion a la BD
$query2       = sprintf("SELECT * FROM quest GROUP BY fol_int");
$result2      = @mysqli_query($link,$query2);
//$rowAccount2  = @mysqli_fetch_array($result2);


while($rowAccount2  = @mysqli_fetch_array($result2))
{
	echo '<div> <a style="font-size: 18px" href="';
	echo $rowAccount2['page_stat'];
	echo '.php?rand_fol=';
	echo $rowAccount2['rand_fol'];
	echo '&hp0=';
	echo $rowAccount2['p0'];
	echo '&ret=1">'.$rowAccount2['page_stat']."-".$rowAccount2['p2'].'</a></div><br>';
}
	
	?>
	</div>
</body>
</html>