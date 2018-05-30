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
	
$p6_52 = $_POST['p6_52'];
$p6_53 = $_POST['p6_53'];
$p6_54 = $_POST['p6_54'];
$p6_55 = $_POST['p6_55'];
$p6_56 = $_POST['p6_56'];
$p6_57 = $_POST['p6_57'];
$p6_58 = $_POST['p6_58'];
$p6_59 = $_POST['p6_59'];
$p6_60 = $_POST['p6_60'];
$p6_61 = $_POST['p6_61'];
$p6_62 = $_POST['p6_62'];
$p6_63 = $_POST['p6_63'];
$p6_64 = $_POST['p6_64'];
$p6_65 = implode( ';' , $_POST['p6_65'] );






//echo $rand_fol;
	
		
		mysqli_query($link ,"UPDATE `quest` SET 


page_stat='Rdy',
fam_listo = '$numsigmen',
p6_52='$p6_52',
p6_53='$p6_53',
p6_54='$p6_54',
p6_55='$p6_55',
p6_56='$p6_56',
p6_57='$p6_57',
p6_58='$p6_58',
p6_59='$p6_59',
p6_60='$p6_60',
p6_61='$p6_61',
p6_62='$p6_62',
p6_63='$p6_63',
p6_64='$p6_64',
p6_65='$p6_65'


WHERE `quest`.`rand_fol`='$rand_fol'");	
	
	mysqli_select_db($link,"db_quest"); //mysql_select_db("agro_db",$conexion) or die("Problemas en la seleccion de la base de datos");

//Inserccion de Datos del Formulario a la BD//

mysqli_close($link);

	echo "REGISTRO GUARDADO<br>";
	
header('Location: fam.php?rand_fol='.$_REQUEST['rand_fol'].'&numdefam='.$numsig.'&ret=1');
	
	?>
</body>
</html>