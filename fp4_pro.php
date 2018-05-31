<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,  minimum-scale=1.0">
<title>Guardado</title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="css/css_checkbox.css" rel="stylesheet" id="bootstrap-css">
	<style>
		html,
 body {
    height: 100%;
  }  
	#radioBtn .notActive{
    color: #3276b1;
    background-color: #ffFFFf;
}
	</style>
</head>

<body>
	<div class="container" align="center">
    <div class="row">
		<div class="col-lg-1 col-centered" > 
	<?php
require_once  'conexion.php'; //conexion a la BD
//	$reg_by = $_REQUEST['reg_by'];
//	$page_stat = $_REQUEST['page_stat'];	


	$rand_fol = $_REQUEST['rand_fol'];
	$reg_by = "Caox";
	$page_stat = "2_5";	
	$numsig = $_REQUEST['num'];
	$numsigmen = $numsig -1;
	
$p4_52 = $_POST['p4_52'];
$p4_53 = $_POST['p4_53'];
$p4_54 = $_POST['p4_54'];
$p4_55 = $_POST['p4_55'];
$p4_56 = $_POST['p4_56'];
$p4_57 = $_POST['p4_57'];
$p4_58 = $_POST['p4_58'];
$p4_59 = $_POST['p4_59'];
$p4_60 = $_POST['p4_60'];
$p4_61 = $_POST['p4_61'];
$p4_62 = $_POST['p4_62'];
$p4_63 = $_POST['p4_63'];
$p4_64 = $_POST['p4_64'];
$p4_65 = implode( ';' , $_POST['p4_65'] );






//echo $rand_fol;
	
		
		mysqli_query($link ,"UPDATE `quest` SET 


page_stat='fam',
fam_listo = '$numsigmen',
p4_52='$p4_52',
p4_53='$p4_53',
p4_54='$p4_54',
p4_55='$p4_55',
p4_56='$p4_56',
p4_57='$p4_57',
p4_58='$p4_58',
p4_59='$p4_59',
p4_60='$p4_60',
p4_61='$p4_61',
p4_62='$p4_62',
p4_63='$p4_63',
p4_64='$p4_64',
p4_65='$p4_65'


WHERE `quest`.`rand_fol`='$rand_fol'");	
	
	mysqli_select_db($link,"db_quest"); //mysql_select_db("agro_db",$conexion) or die("Problemas en la seleccion de la base de datos");

//Inserccion de Datos del Formulario a la BD//

mysqli_close($link);

	echo "REGISTRO GUARDADO<br>";
	
//header('Location: fam.php?rand_fol='.$_REQUEST['rand_fol'].'&numdefam='.$numsig.'&ret=1');
	
	?>
	<br>
<a href="fam.php?rand_fol=<?php echo $rand_fol; ?>&ret=1" class="btn btn-primary "  style="font-size: 32px"><img src="back-icon.png" width="32" height="32">Regresar</a><br><br>
		</div></div></div>
</body>
</html>