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
	
$p3_52 = $_POST['p3_52'];
$p3_53 = $_POST['p3_53'];
$p3_54 = $_POST['p3_54'];
$p3_55 = $_POST['p3_55'];
$p3_56 = $_POST['p3_56'];
$p3_57 = $_POST['p3_57'];
$p3_58 = $_POST['p3_58'];
$p3_59 = $_POST['p3_59'];
$p3_60 = $_POST['p3_60'];
$p3_61 = $_POST['p3_61'];
$p3_62 = $_POST['p3_62'];
$p3_63 = $_POST['p3_63'];
$p3_64 = $_POST['p3_64'];
$p3_65 = implode( ';' , $_POST['p3_65'] );






//echo $rand_fol;
	
		
		mysqli_query($link ,"UPDATE `quest` SET 


page_stat='Rdy',
fam_listo = '$numsigmen',
p3_52='$p3_52',
p3_53='$p3_53',
p3_54='$p3_54',
p3_55='$p3_55',
p3_56='$p3_56',
p3_57='$p3_57',
p3_58='$p3_58',
p3_59='$p3_59',
p3_60='$p3_60',
p3_61='$p3_61',
p3_62='$p3_62',
p3_63='$p3_63',
p3_64='$p3_64',
p3_65='$p3_65'


WHERE `quest`.`rand_fol`='$rand_fol'");	
	
	mysqli_select_db($link,"db_quest"); //mysql_select_db("agro_db",$conexion) or die("Problemas en la seleccion de la base de datos");

//Inserccion de Datos del Formulario a la BD//

mysqli_close($link);

	echo "REGISTRO GUARDADO<br>";
	
header('Location: fam.php?rand_fol='.$_REQUEST['rand_fol'].'&numdefam='.$numsig.'&ret=1');
	
	?>
</body>
</html>