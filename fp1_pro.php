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
	
$p1_52 = $_POST['p1_52'];
$p1_53 = $_POST['p1_53'];
$p1_54 = $_POST['p1_54'];
$p1_55 = $_POST['p1_55'];
$p1_56 = $_POST['p1_56'];
$p1_57 = $_POST['p1_57'];
$p1_58 = $_POST['p1_58'];
$p1_59 = $_POST['p1_59'];
$p1_60 = $_POST['p1_60'];
$p1_61 = $_POST['p1_61'];
$p1_62 = $_POST['p1_62'];
$p1_63 = $_POST['p1_63'];
$p1_64 = $_POST['p1_64'];
$p1_65 = implode( ';' , $_POST['p1_65'] );






//echo $rand_fol;
	
		
		mysqli_query($link ,"UPDATE `quest` SET 


page_stat='Rdy',
fam_listo = '$numsigmen',
p1_52='$p1_52',
p1_53='$p1_53',
p1_54='$p1_54',
p1_55='$p1_55',
p1_56='$p1_56',
p1_57='$p1_57',
p1_58='$p1_58',
p1_59='$p1_59',
p1_60='$p1_60',
p1_61='$p1_61',
p1_62='$p1_62',
p1_63='$p1_63',
p1_64='$p1_64',
p1_65='$p1_65'


WHERE `quest`.`rand_fol`='$rand_fol'");	
	
	mysqli_select_db($link,"db_quest"); //mysql_select_db("agro_db",$conexion) or die("Problemas en la seleccion de la base de datos");

//Inserccion de Datos del Formulario a la BD//

mysqli_close($link);

	echo "REGISTRO GUARDADO<br>";
	
header('Location: fam.php?rand_fol='.$_REQUEST['rand_fol'].'&numdefam='.$numsig.'&ret=1');
	
	?>
</body>
</html>