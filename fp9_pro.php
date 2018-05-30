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
	
$p9_52 = $_POST['p9_52'];
$p9_53 = $_POST['p9_53'];
$p9_54 = $_POST['p9_54'];
$p9_55 = $_POST['p9_55'];
$p9_56 = $_POST['p9_56'];
$p9_57 = $_POST['p9_57'];
$p9_58 = $_POST['p9_58'];
$p9_59 = $_POST['p9_59'];
$p9_60 = $_POST['p9_60'];
$p9_61 = $_POST['p9_61'];
$p9_62 = $_POST['p9_62'];
$p9_63 = $_POST['p9_63'];
$p9_64 = $_POST['p9_64'];
$p9_65 = implode( ';' , $_POST['p9_65'] );






//echo $rand_fol;
	
		
		mysqli_query($link ,"UPDATE `quest` SET 


page_stat='Rdy',
fam_listo = '$numsigmen',
p9_52='$p9_52',
p9_53='$p9_53',
p9_54='$p9_54',
p9_55='$p9_55',
p9_56='$p9_56',
p9_57='$p9_57',
p9_58='$p9_58',
p9_59='$p9_59',
p9_60='$p9_60',
p9_61='$p9_61',
p9_62='$p9_62',
p9_63='$p9_63',
p9_64='$p9_64',
p9_65='$p9_65'


WHERE `quest`.`rand_fol`='$rand_fol'");	
	
	mysqli_select_db($link,"db_quest"); //mysql_select_db("agro_db",$conexion) or die("Problemas en la seleccion de la base de datos");

//Inserccion de Datos del Formulario a la BD//

mysqli_close($link);

	echo "REGISTRO GUARDADO<br>";
	
header('Location: fam.php?rand_fol='.$_REQUEST['rand_fol'].'&numdefam='.$numsig.'&ret=1');
	
	?>
</body>
</html>