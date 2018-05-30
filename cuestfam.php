	<?php
require_once  'conexion.php'; //conexion a la BD
$rand_fol = $_REQUEST['rand_fol'];
$num = $_REQUEST['num'];
//	$reg_by = $_REQUEST['reg_by'];
//	$page_stat = $_REQUEST['page_stat'];	

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
		<h2>Agregar familiares</h2>
        
	<form action="cuestfam.php" method="post">

	
	<input type="hidden" name="rand_fol" value="<?php echo $_REQUEST['rand_fol'];  ?>" >

	
	
	

<div align="left" >
			<br>52. Nombre
			<input type="text" name="p<?php echo $_REQUEST['num'] ?>_52" value=""  style="height:40px;font-size:14pt;width: 100%">
						
		<input type="hidden" name="num" value="<?php 
										   
										   $numsig = $_REQUEST['num']  ;
				   echo $numsig ;
										     ?>" >
		
		
		
		
	
	
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
	
	
	
	
	<input type="submit" value="good luck">
	
	
		</div>
		
		<?php
		

	
if (isset($_REQUEST['firstTime']) == 1)
{
	echo "Continuar";
}
else
{
	$numsigmen = $numsig -1;
	$_52 = sprintf("p$_REQUEST[num]_52");
	${'p'.$_REQUEST['num'].'_52'} = $_REQUEST[$_52];
	$_52R = ${'p'.$_REQUEST['num'].'_52'};
	
	
	$reg_by = "Caox";
	$page_stat = "2_5";	
//	$p106 = $_POST['p106'];	
	


//$_REQUEST[$fpr]




//echo $rand_fol;
	
		
		mysqli_query($link ,"UPDATE `quest` SET 


page_stat='$numsig',
$_52 = '$_52R',
fam_listo = '$numsigmen'




WHERE `quest`.`rand_fol`='$rand_fol'");	
	
	mysqli_select_db($link,"db_quest"); //mysql_select_db("agro_db",$conexion) or die("Problemas en la seleccion de la base de datos");

//Inserccion de Datos del Formulario a la BD//

mysqli_close($link);

	
	
}
	
		
		?>
		
		
	</form>	
		
</body>
</html>