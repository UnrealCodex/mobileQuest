<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
require_once  'conexion.php'; //conexion a la BD
//	$reg_by = $_REQUEST['reg_by'];
//	$page_stat = $_REQUEST['page_stat'];	


	$rand_fol = $_REQUEST['rand_fol'];
	$reg_by = "Caox";
	$page_stat = "2_5";	
	$numsig = $_REQUEST['num'];
	$numsigmen = $numsig -1;
	
$p8_52 = $_POST['p8_52'];
$p8_53 = $_POST['p8_53'];
$p8_54 = $_POST['p8_54'];
$p8_55 = $_POST['p8_55'];
$p8_56 = $_POST['p8_56'];
$p8_57 = $_POST['p8_57'];
$p8_58 = $_POST['p8_58'];
$p8_59 = $_POST['p8_59'];
$p8_60 = $_POST['p8_60'];
$p8_61 = $_POST['p8_61'];
$p8_62 = $_POST['p8_62'];
$p8_63 = $_POST['p8_63'];
$p8_64 = $_POST['p8_64'];
$p8_65 = implode( ';' , $_POST['p8_65'] );






//echo $rand_fol;
	
		
		mysqli_query($link ,"UPDATE `quest` SET 


page_stat='Rdy',
fam_listo = '$numsigmen',
p8_52='$p8_52',
p8_53='$p8_53',
p8_54='$p8_54',
p8_55='$p8_55',
p8_56='$p8_56',
p8_57='$p8_57',
p8_58='$p8_58',
p8_59='$p8_59',
p8_60='$p8_60',
p8_61='$p8_61',
p8_62='$p8_62',
p8_63='$p8_63',
p8_64='$p8_64',
p8_65='$p8_65'


WHERE `quest`.`rand_fol`='$rand_fol'");	
	
	mysqli_select_db($link,"db_quest"); //mysql_select_db("agro_db",$conexion) or die("Problemas en la seleccion de la base de datos");

//Inserccion de Datos del Formulario a la BD//

mysqli_close($link);

	echo "REGISTRO GUARDADO<br>";
	
header('Location: fam.php?rand_fol='.$_REQUEST['rand_fol'].'&numdefam='.$numsig.'&ret=1');
	
	?>
</body>
</html>