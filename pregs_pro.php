<?php
require_once  'conexion.php'; //conexion a la BD
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
	
	
	
	
	
	<?php
	
	mysqli_select_db($link,"spae"); //mysql_select_db("agro_db",$conexion) or die("Problemas en la seleccion de la base de datos");

//Inserccion de Datos del Formulario a la BD//

mysqli_query($link , "insert into admin (
reg_by,
p1,
p2,
p3,
p4,
p5,
p5_1,
p6,
p7,
p8,
p9,
) values (
'".$p1."',
'".$p2."',
'".$p3."',
'".$p4."',
'".$p5."',
'".$p5_1."',
'".$p6."',
'".$p7."',
'".$p8."',
'".$p9."'
)") ;/*MUESTRA UN MENSAJE DE ERROR EN CASO DE QUE ALGO VALLA MAL*/ 

	
mysqli_close($link);
$last_id = $nom_adm;
	
	
	
	
	?>
	
	
	
	
	
	
	
	
</body>
</html>