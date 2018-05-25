	<?php
require_once  'conexion.php'; //conexion a la BD
//	$reg_by = $_REQUEST['reg_by'];
//	$page_stat = $_REQUEST['page_stat'];	




	$reg_by = "Caox";
	$page_stat = "2_5";	
	$p21 = $_POST['p21'];
	$p22= $_POST['p22'];
	$p23 = $_POST['p23'];
	$p24 = $_POST['p24'];
	$p25 = $_POST['p25'];	
	$p26 = $_POST['p26'];	
	$p27 = $_POST['p27'];
	$p28 = $_POST['p28'];
	$p29 = $_POST['p29'];
	$p30 = $_POST['p30'];
	$p31 = $_POST['p31'];
	$p32 = $_POST['p32'];
	$p33 = $_POST['p33'];
	$p34 = $_POST['p34'];
	$p34_1 = $_POST['p34_1'];
	$p35 = $_POST['p35'];
	$p36 = $_POST['p36'];
	$p36_1 = $_POST['p36_1'];
	$p37 = $_POST['p37'];
	$p38 = $_POST['p38'];
	$p38_1 = $_POST['p38_1'];
	$p39 = $_POST['p39'];
	$p40 = $_POST['p40'];
	$p41 = $_POST['p41'];
	$p42 = $_POST['p42'];

echo $p21."=p21<br>";
echo $p22."=p22<br>";
echo $p23."=p23<br>";
echo $p24."=p24<br>";
echo $p25."=p25<br>";
echo $p26."=p26<br>";
echo $p27."=p27<br>";
echo $p28."=p28<br>";
echo $p29."=p29<br>";
echo $p30."=p30<br>";
echo $p31."=p31<br>";
echo $p32."=p32<br>";
echo $p33."=p33<br>";
echo $p34."=p34<br>";
echo $p34_1."=p34_1<br>";
echo $p35."=p35<br>";
echo $p36."=p36<br>";
echo $p37."=p37<br>";
echo $p38."=p38<br>";
echo $p38_1."=p38_1<br>";
echo $p39."=p39<br>";
echo $p40."=p40<br>";
echo $p41."=p41<br>";
echo $p42."=p42<br>";

	
		
		mysqli_query($link ,"UPDATE `quest` SET 


p21='$p21',
p22='$p22',
p23='$p23',
p24='$p24',
p25='$p25',
p26='$p26',
p27='$p27',
p28='$p28',
p29='$p29',
p30='$p30',
p31='$p31',
p32='$p32',
p33='$p33',
p34='$p34',
p34_1='$p34_1',
p35='$p35',
p36='$p36',
p36_1='$p36_1',
p37='$p37',
p38='$p38',
p38_1='$p38_1',
p39='$p39',
p40='$p40',
p41='$p41',
p42='$p42'



WHERE `quest`.`fol_int`=29");	
	
	mysqli_select_db($link,"db_quest"); //mysql_select_db("agro_db",$conexion) or die("Problemas en la seleccion de la base de datos");

//Inserccion de Datos del Formulario a la BD//

mysqli_close($link);

	
	
	
	
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
	
<!--HOMBRE O MUJER ; GET-->	
	<input type="hidden" name="hp0" id="hp0" value="<?php echo $_POST['hp0'];  ?>">
	
<form action="pregs_pro.php" method="post">
<!------ Include the above in your HEAD tag ---------->

<div class="container" align="center">
    <div class="row">
		<div class="col-lg-1 col-centered" > 
		<h2>Herramienta de control</h2>
        
        
        <br /><br />
	
			
			
			
					<div class="form-group" align="left">
        			<label for="fp43" >43. ¿Usted tiene conocimiento si existe un compromiso claro en la colonia para dar solución a sus problemas de salud?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
						<table>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p43" data-title="0">No </a></td></tr>
                        <tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p43" data-title="1">Si</a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p43" data-title="2">No se </a></td></tr>
                        </table>
    				</div>
    				<input type="hidden" name="fp43" id="fp43">
    				</div>
    				</div>
    				</div>			
					<br><br>				
			
			
			
					<div class="form-group" align="left">
        			<label for="fp44" >44. ¿Cuentan con una comisión sectorial que promueva los determinantes sociales de salud? (alguien en la colonia trata de resolver los problemas de salud como pavimento, drenaje, agua potable, etc.)</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
						<table>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p44" data-title="0">No </a></td></tr>
                        <tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p44" data-title="1">Si</a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p44" data-title="2">No se </a></td></tr>
                        </table>
    				</div>
    				<input type="hidden" name="fp44" id="fp44">
    				</div>
    				</div>
    				</div>			
					<br><br>
			
			
			
					<div class="form-group" align="left">
        			<label for="fp45" >45. En su colonia: ¿alguien externo a la familia le ha cuestionado sobre su condición de Salud?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
						<table>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p45" data-title="0">No </a></td></tr>
                        <tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p45" data-title="1">Si</a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p45" data-title="2">No se </a></td></tr>
                        </table>
    				</div>
    				<input type="hidden" name="fp45" id="fp45">
    				</div>
    				</div>
    				</div>			
					<br><br>
						
			
			
					<div class="form-group" align="left">
        			<label for="fp46" >46. ¿Sabe usted si existen en su colonia organismos de gobierno o privados que atienden y promueven su acceso a los servicios salud?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
						<table>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p46" data-title="0">No </a></td></tr>
                        <tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p46" data-title="1">Si</a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p46" data-title="2">No se </a></td></tr>
                        </table>
    				</div>
    				<input type="hidden" name="fp46" id="fp46">
    				</div>
    				</div>
    				</div>			
					<br><br>
						
			
			
					<div class="form-group" align="left">
        			<label for="fp47" >47.¿Usted estaría dispuesto a que se le realizará un expediente de salud?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
						<table>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p47" data-title="0">No </a></td></tr>
                        <tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p47" data-title="1">Si</a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p47" data-title="2">No se </a></td></tr>
                        </table>
    				</div>
    				<input type="hidden" name="fp47" id="fp47">
    				</div>
    				</div>
    				</div>			
					<br><br>
						
			
					<div class="form-group" align="left">
        			<label for="fp48" >48. ¿Usted estaría dispuesto a que se le revisará frecuentemente su estado de salud?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
						<table>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p48" data-title="0">No </a></td></tr>
                        <tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p48" data-title="1">Si</a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p48" data-title="2">No se </a></td></tr>
                        </table>
    				</div>
    				<input type="hidden" name="fp48" id="fp48">
    				</div>
    				</div>
    				</div>			
					<br><br>
			
					<div class="form-group" align="left">
        			<label for="fp49" >49. ¿Estaría usted dispuesto a adquirir un compromiso de asistencia a Casa Samuel o a un Centro de Salud para mejorar sus condiciones de vida?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
						<table>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p49" data-title="0">No </a></td></tr>
                        <tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p49" data-title="1">Si</a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p49" data-title="2">No se </a></td></tr>
                        </table>
    				</div>
    				<input type="hidden" name="fp49" id="fp49">
    				</div>
    				</div>
    				</div>			
					<br><br>
												
			
					<div class="form-group" align="left">
        			<label for="fp50" >50. ¿Estaría usted dispuesto a participar en la elaboración de proyectos de salud así como su participación en la solución de problemas de salud?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
						<table>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p50" data-title="0">No </a></td></tr>
                        <tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p50" data-title="1">Si</a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p50" data-title="2">No se </a></td></tr>
                        </table>
    				</div>
    				<input type="hidden" name="fp50" id="fp50">
    				</div>
    				</div>
    				</div>			
					<br><br>
												
					<div class="form-group" align="left">
        			<label for="fp51" >51.  ¿Tiene usted conocimiento si existen líderes de salud que tomen decisiones para las mejoras en la atención y servicios en su colonia?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
						<table>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p51" data-title="0">No </a></td></tr>
                        <tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p51" data-title="1">Si</a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p51" data-title="2">No se </a></td></tr>
                        </table>
    				</div>
    				<input type="hidden" name="fp51" id="fp51">
    				</div>
    				</div>
    				</div>			
					<br><br>
									
			
			
			
		<strong>6. Miembros de la familia 
         Información de los integrantes de la familia 
</strong>	
			
			<div align="left" >
			<label>52.  Nombre</label>	<br>
			<input type="text" name="p52" value="0"  style="height:40px;font-size:14pt;width: 100%">
			</div>
			<br><br>
						
			<div align="left" >
			<label>53.  Edad</label>	<br>
			<input type="text" name="p53" value="0"  style="height:40px;font-size:14pt;width: 100%">
			</div>
			<br><br>			
			
			<div align="left" >
			<label>54.  ¿Sabe Leer?</label>	<br>
			<input type="text" name="p54" value="0"  style="height:40px;font-size:14pt;width: 100%">
			</div>
			<br><br>			
			
			<div align="left" >
			<label>55.  ¿Sabe Escribir?</label>	<br>
			<input type="text" name="p54" value="0"  style="height:40px;font-size:14pt;width: 100%">
			</div>
			<br><br>			
			

					<div class="form-group" align="left">
        			<label for="fp56" >56. Escolaridad</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
						<table>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p56" data-title="0">Ninguno</a></td></tr>
                        <tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p56" data-title="1">Primaria</a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p56" data-title="2">Secundaria</a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p56" data-title="3">Prepa o Técnica</a></td></tr>
                        <tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p56" data-title="4">Profesional</a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p56" data-title="5">Maestría </a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p56" data-title="6">Doctorado </a></td></tr>
                        </table>
    				</div>
    				<input type="hidden" name="fp56" id="fp56">
    				</div>
    				</div>
    				</div>			
					<br><br>
										
			
					<div class="form-group" align="left">
        			<label for="fp57" >57. ¿Fuma?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
						<table>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p57" data-title="0">No</a></td></tr>
                        <tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p57" data-title="1">Si</a></td></tr>
					
                        </table>
    				</div>
    				<input type="hidden" name="fp57" id="fp57">
    				</div>
    				</div>
    				</div>			
					<br><br>
									
			<div align="left" >
			<label>58. Cantidad de cigarrillos por día</label>	<br>
			<input type="text" name="p58" value="0"  style="height:40px;font-size:14pt;width: 100%">
			</div>
			<br><br>			
						
					<div class="form-group" align="left">
        			<label for="fp59" >59. ¿Consume alcohol?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
						<table>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p59" data-title="0">No</a></td></tr>
                        <tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p59" data-title="1">Si</a></td></tr>
					
                        </table>
    				</div>
    				<input type="hidden" name="fp59" id="fp59">
    				</div>
    				</div>
    				</div>			
					<br><br>
										
			<div align="left" >
			<label>60. Número de copas por semana</label>	<br>
			<input type="text" name="p60" value="0"  style="height:40px;font-size:14pt;width: 100%">
			</div>
			<br><br>			
			
			
			
	
			
			
			
			

	 
	 
       
        </div>
    </div>

			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
						
			
			
			
			
			
			
		
		
		
		
		---Continua en la siguiente pagina----
		
    <br /><br />
 </div>
</div>	
	</div>													
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
	
	
	
	
	
	<div align="center">
	<input type="submit" value="Siguiente">
	</div>
	</form>
</body>
</html>