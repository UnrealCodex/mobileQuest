	<?php
require_once  'conexion.php'; //conexion a la BD
//	$reg_by = $_REQUEST['reg_by'];
//	$page_stat = $_REQUEST['page_stat'];	
	
	$reg_by = "Caox";
	$page_stat = "1_5";	
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
	
	
	
	
	mysqli_select_db($link,"db_quest"); //mysql_select_db("agro_db",$conexion) or die("Problemas en la seleccion de la base de datos");

//Inserccion de Datos del Formulario a la BD//

mysqli_query($link , "insert into quest (
reg_by,
page_stat,
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
p20
) values (
'".$reg_by."',
'".$page_stat."',
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
'".$p20."'
)") ;/*MUESTRA UN MENSAJE DE ERROR EN CASO DE QUE ALGO VALLA MAL*/ 

	
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
			
		
				<div id="p21" hidden>
 <div class="form-group" align="left">
        			<label for="fp21" >21.¿Se ha realizado Papanicolaou anual?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p21" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p21" data-title="1"> Si</a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p21" data-title="2">No aplica</a>
    				</div>
    				<input type="hidden" name="fp21" id="fp21">
    				</div>
    				</div>
    					
			<br><br></div>	</div>		
			
		<div align="left" id="p22" hidden>
			<label>22.  Número de gestas</label>	<br>
			<input type="text" name="p22" value="0"  style="height:40px;font-size:14pt;width: 100%">
			
			<br><br>	</div>			
			
			
		<div align="left" id="p23" hidden>
			<label>23.  Número de abortos</label>	<br>
			<input type="text" name="p23" value="0"  style="height:40px;font-size:14pt;width: 100%">
			
			<br><br></div>				
						
			
			<div align="left" id="p24" hidden >
			<label>24.  Número de partos</label>	<br>
			<input type="text" name="p24" value="0"  style="height:40px;font-size:14pt;width: 100%">
			
			<br><br></div>		
			
			
				<div align="left" id="p25" hidden >
			<label>25.  Número de cesáreas</label>	<br>
			<input type="text" name="p25" value="0"  style="height:40px;font-size:14pt;width: 100%">
			
			<br><br></div>			
			

			
 <div class="form-group" align="left">
        			<label for="fp26" >26.  ¿Consume algún medicamento de forma constante?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p26" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p26" data-title="1"> Si</a>

    				</div>
    				<input type="hidden" name="fp26" id="fp26">
    				</div>
    				</div>
    		</div>			
			<br><br>			
			
			
					<div align="left" >
			<label>27.  ¿Cuál medicamento?</label>	<br>
			<input type="text" name="p27" value="0"  style="height:40px;font-size:14pt;width: 100%">
			</div>
			<br><br>	
			
			
 <div class="form-group" align="left">
        			<label for="fp28" >28.  ¿Es frecuente que interrumpa los medicamentos prescritos para enfermedades crónicas?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p28" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p28" data-title="1"> Si</a>

    				</div>
    				<input type="hidden" name="fp28" id="fp28">
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
    				<input type="hidden" name="fp29" id="fp29">
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
    				<input type="hidden" name="fp30" id="fp30">
    				</div>
    				</div>
    		</div>			
			<br><br>		
			
			
		 <div class="form-group" align="left">
        			<label for="fp31" >31.  ¿Les falta alguna vacuna?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p31" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p31" data-title="1"> Si</a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p31" data-title="2"> No se</a>

    				</div>
    				<input type="hidden" name="fp31" id="fp31">
    				</div>
    				</div>
    		</div>			
			<br><br>			
			
					<div align="left" >
			<label>32.  ¿Cuál vacuna les falta?</label>	<br>
			<input type="text" name="p32" value="0"  style="height:40px;font-size:14pt;width: 100%">
			</div>
			<br><br>			
			
			 <div class="form-group" align="left">
        			<label for="fp33" >33.  ¿Se le ha realizado alguna cirugía?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p33" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p33" data-title="1"> Si</a>
						

    				</div>
    				<input type="hidden" name="fp33" id="fp33">
    				</div>
    				</div>
    		</div>			
			<br><br>		
			
			
					<div align="left" >
			<label>34.  Número de veces y motivo de la cirugía</label>	<br>Veces:
			<input type="text" name="p34" value="0"  style="height:40px;font-size:14pt;width: 100%">
						<br>Motivo:
						<input type="text" name="p34_1" value="0"  style="height:40px;font-size:14pt;width: 100%">
			</div>
			<br><br>			
			
			
			
		 <div class="form-group" align="left">
        			<label for="fp35" >35.  ¿Ha tenido algún accidente?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p35" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p35" data-title="1"> Si</a>
						

    				</div>
    				<input type="hidden" name="fp35" id="fp35">
    				</div>
    				</div>
    		</div>			
			<br><br>			
			
			
			
			
						<div align="left" >
			<label>36.  Número de veces y motivo del accidente</label>	<br>Veces:
			<input type="text" name="p36" value="0"  style="height:40px;font-size:14pt;width: 100%">
						<br>Motivo:
						<input type="text" name="p36_1" value="0"  style="height:40px;font-size:14pt;width: 100%">
			</div>
			<br><br>		
			
			
			
			
			 <div class="form-group" align="left">
        			<label for="fp37" >37.  ¿Ha estado internado en un hospital?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p37" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p37" data-title="1"> Si</a>
						

    				</div>
    				<input type="hidden" name="fp37" id="fp37">
    				</div>
    				</div>
    		</div>			
			<br><br>		
			
			
			
							<div align="left" >
			<label>38.  Número de veces y motivo de internación</label>	<br>Veces:
			<input type="text" name="p38" value="0"  style="height:40px;font-size:14pt;width: 100%">
						<br>Motivo:
						<input type="text" name="p38_1" value="0"  style="height:40px;font-size:14pt;width: 100%">
			</div>
			<br><br>
			
			
			
			
			
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
    				<input type="hidden" name="fp39" id="fp39">
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
    				<input type="hidden" name="fp40" id="fp40">
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
$(document).ready(function()
                  {
                  $("#dhp0").on('click',function()
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
});
</script>		
	
	
	
	
	
	<div align="center">
	<input type="submit" value="Siguiente">
	</div>
	</form>
</body>
</html>