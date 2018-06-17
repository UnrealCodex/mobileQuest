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
	function generateRandomString($length = 7) {
    return substr(str_shuffle(str_repeat($x='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdx', ceil($length/strlen($x)) )),1,$length);
}
$rand_fol =  generateRandomString();


	$reg_by = "Caox";
	$page_stat = "p2";
	$p0 = $_POST['hp0'];
	$p1 = $_POST['p1'];
	$p2= $_POST['p2'];
	$p3 = $_POST['p3'];
	$p4 = $_POST['p4'];
	$p5 = $_POST['p5'];
	$p5_1 = $_POST['p5_1'];
	$p6 = $_POST['p6'];
	$p7 = $_POST['p7'];
	$p8 = $_POST['p8'];
	$p9 = $_POST['p9'];
	$p10 = $_POST['p10'];
	$p11 = $_POST['p11'];
	$p12 = $_POST['p12'];
	$p13 = $_POST['p13'];
	$p14 = $_POST['p14'];
	$p15 = $_POST['p15'];
	$p16 = $_POST['hp16'];
	$p17 = $_POST['p17'];
	$p18 = $_POST['p18'];
	$p19 = $_POST['p19'];
	$p20 = $_POST['p20'];
	$p21 = $_POST['p21'];
	$p22 = $_POST['p22'];
	$p23 = $_POST['p23'];
	$p24 = $_POST['p24'];
	$p25 = $_POST['p25'];
	
	
	
	mysqli_select_db($link,"db_quest"); //mysql_select_db("agro_db",$conexion) or die("Problemas en la seleccion de la base de datos");
mysqli_query("SET NAMES 'utf8'");
	mysqli_set_charset($link, 'utf8');
//Inserccion de Datos del Formulario a la BD//

mysqli_query($link , "insert into quest (
reg_by,
page_stat,
p0,
p1,
p2,
p3,
p4,
p5,
p5_1,
p6,
p7,
p8,
p9,
p10,
p11,
p12,
p13,
p14,
p15,
p16,
p17,
p18,
p19,
p20,
p21,
p22,
p23,
p24,
p25,
rand_fol
) values (
'".$reg_by."',
'".$page_stat."',
'".$p0."',
'".$p1."',
'".$p2."',
'".$p3."',
'".$p4."',
'".$p5."',
'".$p5_1."',
'".$p6."',
'".$p7."',
'".$p8."',
'".$p9."',
'".$p10."',
'".$p11."',
'".$p12."',
'".$p13."',
'".$p14."',
'".$p15."',
'".$p16."',
'".$p17."',
'".$p18."',
'".$p19."',
'".$p20."',
'".$p21."',
'".$p22."',
'".$p23."',
'".$p24."',
'".$p25."',
'".$rand_fol."'
)") ;/*MUESTRA UN MENSAJE DE ERROR EN CASO DE QUE ALGO VALLA MAL*/ 

	
mysqli_close($link);

	
}
	
	
	?>

<!doctype html>
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
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
	
	
<form action="p3.php" method="post">
	<input type="hidden" name="hp0" id="hp0" value="<?php echo $_POST['hp0'];  ?>">
	<input type="hidden" name="rand_fol" value="<?php if (isset($_REQUEST['ret']))
{
	echo $_REQUEST['rand_fol'];
}else{
	
	echo $rand_fol ;}  ?>" >
	
<!------ Include the above in your HEAD tag ---------->

<div class="container" align="center">
    <div class="row">
		<div class="col-lg-1 col-centered" > 
		<h2>Herramienta de control</h2>
        
        
        <br /><br />
			
		
					
			
			
			
			
	<!-- PREGUNTA CON OPCION  26 -->			
			

			
 <div class="form-group" align="left">
        			<label for="p26" >26.  ¿Consume algún medicamento de forma constante?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
						<div id="dhp26">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p26" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p26" data-title="1"> Si</a>
						</div>
    				</div>
    				<input type="hidden" name="p26" id="p26" value="">
    				</div>
    				</div>
    		</div>			
			<br><br>			
			
			
					<div align="left" id="p27" hidden="" >
			<label>27.  ¿Cuál medicamento?</label>	<br>
			<input type="text" name="p27" value=""  style="height:40px;font-size:14pt;width: 100%">
			</div>
			<br><br>	
			
		<script type="text/javascript">
$(document).ready(function()
                  {
                  $("#dhp26").on('click',function()
        {
            if($("#p26").val() == "1")
        {
            $("#p27").show();
        }
        else
        {
            $("#p27").hide();
        }
            });
			
            $("#p27").hide();
});
</script>		
			
			
<!-- FIN DE PREGUNTA CON OPCION 26 -->				
			
			
			
			
			
			
			
			
			
 <div class="form-group" align="left">
        			<label for="fp28" >28.  ¿Es frecuente que interrumpa los medicamentos prescritos para enfermedades crónicas?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p28" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p28" data-title="1"> Si</a>

    				</div>
    				<input type="hidden" name="p28" id="p28">
    				</div>
    				</div>
    		</div>			
			<br><br>			
			
 <div class="form-group" align="left">
        			<label for="fp29" >29.  ¿Cuenta con cartilla de vacunación?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p29" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p29" data-title="1"> Si</a>

    				</div>
    				<input type="hidden" name="p29" id="p29">
    				</div>
    				</div>
    		</div>			
			<br><br>				
			
	 <div class="form-group" align="left">
        			<label for="fp30" >30.  ¿todos los integrantes de la familia cuentan con ella?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p30" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p30" data-title="1"> Si</a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p30" data-title="2"> No se</a>

    				</div>
    				<input type="hidden" name="p30" id="p30">
    				</div>
    				</div>
    		</div>			
			<br><br>		
			
			
	<!-- PREGUNTA CON OPCION  31 -->		
			
		 <div class="form-group" align="left">
        			<label for="fp31" >31.  ¿Les falta alguna vacuna?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
						<div id="dhp31">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p31" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p31" data-title="1"> Si</a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p31" data-title="2"> No se</a>
						</div>

    				</div>
    				<input type="hidden" name="p31" id="p31">
    				</div>
    				</div>
    		</div>			
			<br><br>			
			

					<div align="left" id="p32" hidden >
			<label>32.  ¿Cuál vacuna les falta?</label>	<br>
			<input type="text" name="p32" value=""  style="height:40px;font-size:14pt;width: 100%">
			
			<br><br>		
			</div>
			
			
			
		<script type="text/javascript">
$(document).ready(function()
                  {
                  $("#dhp31").on('click',function()
        {
            if($("#p31").val() == "1")
        {
            $("#p32").show();
        }
        else
        {
            $("#p32").hide();
        }
            });
			
            $("#p32").hide();
});
</script>		
			
			
<!-- FIN DE PREGUNTA CON OPCION 31 -->			
			
			
			
			
			
	<!-- PREGUNTA CON OPCION  33 -->			
			
			
			 <div class="form-group" align="left">
        			<label for="fp33" >33.  ¿Se le ha realizado alguna cirugía?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
						<div id="dhp33">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p33" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p33" data-title="1"> Si</a>
						</div>

    				</div>
    				<input type="hidden" name="p33" id="p33">
    				</div>
    				</div>
    		</div>			
					
			
			
					<div align="left"  id="p34" hidden>
			<br>Motivo de la cirugia:
			<input type="text" name="p34" value=""  style="height:40px;font-size:14pt;width: 100%">
						<br>Numero de veces:
						<input type="text" name="p34_1" value=""  style="height:40px;font-size:14pt;width: 100%">
			
			<br><br>			
			</div>
			
	
		<script type="text/javascript">
$(document).ready(function()
                  {
                  $("#dhp33").on('click',function()
        {
            if($("#p33").val() == "1")
        {
            $("#p34").show();
        }
        else
        {
            $("#p34").hide();
        }
            });
			
            $("#p34").hide();
});
</script>		
			
			
<!-- FIN DE PREGUNTA CON OPCION 33 -->					
			
			
			
	<!-- PREGUNTA CON OPCION  35 -->					
			
		 <div class="form-group" align="left">
        			<label for="fp35" >35.  ¿Ha tenido algún accidente?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
						<div id="dhp35">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p35" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p35" data-title="1"> Si</a>
						</div>

    				</div>
    				<input type="hidden" name="p35" id="p35">
    				</div>
    				</div>
    		</div>			
						
			
			
			
			
						<div align="left" id="p36" >
			<br>Cual:
			<input type="text" name="p36" value=""  style="height:40px;font-size:14pt;width: 100%">
						<br>Veces:
						<input type="text" name="p36_1" value=""  style="height:40px;font-size:14pt;width: 100%">
			
			<br><br>		
			</div>
			
		<script type="text/javascript">
$(document).ready(function()
                  {
                  $("#dhp35").on('click',function()
        {
            if($("#p35").val() == "1")
        {
            $("#p36").show();
        }
        else
        {
            $("#p36").hide();
        }
            });
			
            $("#p36").hide();
});
</script>		
			
			
<!-- FIN DE PREGUNTA CON OPCION 33 -->					
						
			
	<!-- PREGUNTA CON OPCION  37 -->					
			
			 <div class="form-group" align="left">
        			<label for="fp37" >37.  ¿Ha estado internado en un hospital?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
						<div id="dhp37">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p37" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p37" data-title="1"> Si</a>
						</div>

    				</div>
    				<input type="hidden" name="p37" id="p37">
    				</div>
    				</div>
    		</div>			
					
			
			
			
			<div align="left" id="p38">
			<br>Motivo:
			<input type="text" name="p38" value=""  style="height:40px;font-size:14pt;width: 100%">
			<br>Veces:
			<input type="text" name="p38_1" value=""  style="height:40px;font-size:14pt;width: 100%">
			
			<br><br>
			</div>
			
		<script type="text/javascript">
$(document).ready(function()
                  {
                  $("#dhp37").on('click',function()
        {
            if($("#p37").val() == "1")
        {
            $("#p38").show();
        }
        else
        {
            $("#p38").hide();
        }
            });
			
            $("#p38").hide();
});
</script>		
			
			
<!-- FIN DE PREGUNTA CON OPCION 37 -->				
			
			
			
			 <div class="form-group" align="left">
        			<label for="fp39" >39.  ¿Lleva una vida sexualmente activa?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
						<table>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p39" data-title="0">No </a></td></tr>
                        <tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p39" data-title="1"> Si</a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p39" data-title="2">Prefiero no responder </a></td></tr>
                      <tr><td>  <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p39" data-title="3"> No Aplica</a></td></tr>
    				
</table>
    				</div>
    				<input type="hidden" name="p39" id="p39">
    				</div>
    				</div>
    		</div>			
			<br><br>			
			
			
			
			
 <div class="form-group" align="left">
        			<label for="fp40" >40. ¿Utiliza anticonceptivos? ¿Cual?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
						<table>
								<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p40" data-title="0">Ninguno </a></td></tr>
                        <tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p40" data-title="1"> Barrera</a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p40" data-title="2">Permanente </a></td></tr>
                      <tr><td>  <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p40" data-title="3">Hormonal</a></td></tr>
							 <tr><td>  <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p40" data-title="4">No Aplica</a></td></tr>
							
							
							
							
</table>
    				</div>
    				<input type="hidden" name="p40" id="p40">
    				</div>
    				</div>
    		</div>			
			<br><br>					
			
			
					
		<div class="form-group" align="left">
<div id="hp41" hidden>
        			<label for="fp41" >41.  ¿Está usted embarazada actualmente?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
						<table>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p41" data-title="0">No </a></td></tr>
                        <tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p41" data-title="1">Si</a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p41" data-title="2">No Aplica </a></td></tr>
                        <tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p41" data-title="3">No se</a></td></tr>
					    </table>
    				</div>
    				<input type="hidden" name="p41" id="p41">
    				</div>
    				</div>
			</div>		</div>	
			<br><br>				
			
<div id="hp42" hidden>
					<div class="form-group" align="left">
        			<label for="fp42" >42. Si usted está embarazada o lo ha estado, ¿Ha acudido regularmente al control prenatal?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
						<table>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p42" data-title="0">No </a></td></tr>
                        <tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p42" data-title="1">Si</a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p42" data-title="2">No Aplica </a></td></tr>
                        </table>
    				</div>
    				<input type="hidden" name="p42" id="p42">
    				</div>
    				</div>
    				</div>			
					<br><br>		
	
			
			
			
			

	 
	 </div>
	
	
	<h1>4. Determinantes Estructurales
		Concepto socioeconómico político: Gobernanza, valores, cultura, política pública y social</h1>
		

			
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
    				<input type="hidden" name="p43" id="p43">
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
    				<input type="hidden" name="p44" id="p44">
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
    				<input type="hidden" name="p45" id="p45">
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
    				<input type="hidden" name="p46" id="p46">
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
    				<input type="hidden" name="p47" id="p47">
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
    				<input type="hidden" name="p48" id="p48">
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
    				<input type="hidden" name="p49" id="p49">
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
    				<input type="hidden" name="p50" id="p50">
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
    				<input type="hidden" name="p51" id="p51">
    				</div>
    				</div>
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
			
         
			$("#hp41").show();
			$("#hp42").show();
			
			
        }
        else
        {

			$("#hp41").hide();
			$("#hp42").hide();
        }
            });

			$("#hp41").hide();
			$("#hp42").hide();
};
		begin();
</script>		
	
	
	
	
	
	<div align="center">
	<input type="submit" value="Siguiente">
	</div>
	</form>
</body>
</html>