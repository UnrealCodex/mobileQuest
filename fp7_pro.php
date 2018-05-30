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
	
$p7_52 = $_POST['p7_52'];
$p7_53 = $_POST['p7_53'];
$p7_54 = $_POST['p7_54'];
$p7_55 = $_POST['p7_55'];
$p7_56 = $_POST['p7_56'];
$p7_57 = $_POST['p7_57'];
$p7_58 = $_POST['p7_58'];
$p7_59 = $_POST['p7_59'];
$p7_60 = $_POST['p7_60'];
$p7_61 = $_POST['p7_61'];
$p7_62 = $_POST['p7_62'];
$p7_63 = $_POST['p7_63'];
$p7_64 = $_POST['p7_64'];
$p7_65 = implode( ';' , $_POST['p7_65'] );






//echo $rand_fol;
	
		
		mysqli_query($link ,"UPDATE `quest` SET 


page_stat='Rdy',
fam_listo = '$numsigmen',
p7_52='$p7_52',
p7_53='$p7_53',
p7_54='$p7_54',
p7_55='$p7_55',
p7_56='$p7_56',
p7_57='$p7_57',
p7_58='$p7_58',
p7_59='$p7_59',
p7_60='$p7_60',
p7_61='$p7_61',
p7_62='$p7_62',
p7_63='$p7_63',
p7_64='$p7_64',
p7_65='$p7_65'


WHERE `quest`.`rand_fol`='$rand_fol'");	
	
	mysqli_select_db($link,"db_quest"); //mysql_select_db("agro_db",$conexion) or die("Problemas en la seleccion de la base de datos");

//Inserccion de Datos del Formulario a la BD//

mysqli_close($link);

	echo "REGISTRO GUARDADO<br>";
	
header('Location: fam.php?rand_fol='.$_REQUEST['rand_fol'].'&numdefam='.$numsig.'&ret=1');
	
	?>
</body>
</html>