	<?php
require_once  'conexion.php'; //conexion a la BD
//	$reg_by = $_REQUEST['reg_by'];
//	$page_stat = $_REQUEST['page_stat'];	

if (isset($_REQUEST['ret']) == 1)
{
	echo "Continuar";
}
else
{

	$rand_fol = $_REQUEST['rand_fol'];
	$reg_by = "Caox";
	
	$numdefam = $_REQUEST['numdefam'];	
	

//echo $rand_fol;
	
	
	//VER CUANTOS FAMILIARES ELIGIO
if($_REQUEST['numdefam'] =! 0) 	{	
		mysqli_query($link ,"UPDATE `quest` SET 


page_stat='fam',
numdefam='$numdefam',
fam_listo='$numdefam'




WHERE `quest`.`rand_fol`='$rand_fol'");	
	
	mysqli_select_db($link,"db_quest"); //mysql_select_db("agro_db",$conexion) or die("Problemas en la seleccion de la base de datos");

//Inserccion de Datos del Formulario a la BD//

//mysqli_close($link);
}
else
{
echo "Cuestionario Completado y Almacenacon con exito ";
	
			mysqli_query($link ,"UPDATE `quest` SET 


page_stat='Listo',
numdefam='$numdefam',
fam_listo='0'




WHERE `quest`.`rand_fol`='$rand_fol'");	
	
	mysqli_select_db($link,"db_quest"); //mysql_select_db("agro_db",$conexion) or die("Problemas en la seleccion de la base de datos");

//Inserccion de Datos del Formulario a la BD//

//mysqli_close($link);
}
	
}
	
	?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,  minimum-scale=1.0">
<title>Encuesta</title>
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
		<h2>Llenado de faltantes de Familiares</h2>
        
<!--HOMBRE O MUJER ; GET-->	
	<input type="hidden" name="hp0" id="hp0" value="<?php echo $_POST['hp0'];  ?>">
	<input type="hidden" name="rand_fol" value="<?php if (isset($_REQUEST['ret']))
{
	echo $_REQUEST['rand_fol'];
}else{
	
	echo $rand_fol ;}  ?>" >
	
	
	
	
<?php
require_once  'conexion.php';
$query2       = sprintf("SELECT rand_fol,page_stat,numdefam,fam_listo FROM quest WHERE rand_fol='$_REQUEST[rand_fol]' AND fam_listo != 0");
$result2      = @mysqli_query($link,$query2);
//$rowAccount2  = @mysqli_fetch_array($result2);


while($rowAccount2  = @mysqli_fetch_array($result2))
{
		echo ('<a href="fp').$rowAccount2['fam_listo'].('.php?num=').$rowAccount2['fam_listo'].('&rand_fol=').$_REQUEST['rand_fol'].('&firstTime=1" class="btn btn-primary btn-sm notActive" style="font-size: 32px">Continuar ').$rowAccount2['fam_listo'].(' Restantes </a><br><br>');
  
		
		
}
	
	
	
	
	
	
	?>

	
	
			<a href="index_.php" class="btn btn-primary btn-sm notActive" style="font-size: 15px ; color: darkred" > Regresar al Menu Principal </a>
	
	
	
	
	
	
	<script type="text/javascript">
	$('#radioBtn a').on('click', function(){
    var sel = $(this).data('title');
    var tog = $(this).data('toggle');
    $('#'+tog).prop('value', sel);
    
    $('a[data-toggle="'+tog+'"]').not('[data-title="'+sel+'"]').removeClass('active').addClass('notActive');
    $('a[data-toggle="'+tog+'"][data-title="'+sel+'"]').removeClass('notActive').addClass('active');
})
	</script>
	
	
	
	
<!--Codigo de seleccion de Hombre o mujer-->
	
			
	<script type="text/javascript">
		function begin (){
$(document).ready(function()
                  {
                 
            if($("#hp0").val() == "F")
        {
			
            $("#p22").show();
			$("#p23").show();
			$("#p24").show();
			$("#p25").show();
			
			
        }
        else
        {
			$("#p22").hide();
            $("#p23").hide();
			$("#p24").hide();
			$("#p25").hide();
        }
            });
			$("#p22").hide();
            $("#p23").hide();
			$("#p24").hide();
			$("#p25").hide();
};
		begin();
</script>		
	
	
	
	
	

	</form>
		</div>
</body>
</html>