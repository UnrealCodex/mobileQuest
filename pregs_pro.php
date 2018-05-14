<?php
require_once  'conexion.php'; //conexion a la BD
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Proceso de Registro</title>
</head>

<body>
	
	
	
	
	
	
	<?php
//	$reg_by = $_REQUEST['reg_by'];
//	$page_stat = $_REQUEST['page_stat'];	
	
	$reg_by = "Caox";
	$page_stat = "1_5";	
	$p1 = $_POST['p1'];
	$p2= $_POST['p2'];
	$p3 = $_POST['p3'];
	$p4 = $_POST['p4'];
	$p5 = $_POST['p5'];
	$p5_1 = $_POST['p5_1'];
	$p6 = $_POST['p6'];
	$p7 = $_POST['p7'];
	$p8 = $_POST['p8'];
	$p9 = $_POST['p9'];
	$p10 = $_POST['p10'];
	$p11 = $_POST['p11'];
	$p12 = $_POST['p12'];
	$p13 = $_POST['p13'];
	$p14 = $_POST['p14'];
	$p15 = $_POST['p15'];
	$p16 = $_POST['hp16'];
	$p17 = $_POST['p17'];
	$p18 = $_POST['p18'];
	$p19 = $_POST['p19'];
	$p20 = $_POST['p20'];
	
	
	
	
	
	
	
	
	
	
	mysqli_select_db($link,"db_quest"); //mysql_select_db("agro_db",$conexion) or die("Problemas en la seleccion de la base de datos");

//Inserccion de Datos del Formulario a la BD//

mysqli_query($link , "insert into quest (
reg_by,
page_stat,
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
p10,
p11,
p12,
p13,
p14,
p15,
p16,
p17,
p18,
p19,
p20
) values (
'".$reg_by."',
'".$page_stat."',
'".$p1."',
'".$p2."',
'".$p3."',
'".$p4."',
'".$p5."',
'".$p5_1."',
'".$p6."',
'".$p7."',
'".$p8."',
'".$p9."',
'".$p10."',
'".$p11."',
'".$p12."',
'".$p13."',
'".$p14."',
'".$p15."',
'".$p16."',
'".$p17."',
'".$p18."',
'".$p19."',
'".$p20."'
)") ;/*MUESTRA UN MENSAJE DE ERROR EN CASO DE QUE ALGO VALLA MAL*/ 

	
mysqli_close($link);

	
	
	
	
	?>
	
	
	
	
	
	
	
	
</body>
</html>