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
	$page_stat = "2_5";	
	$p86 = $_POST['p86'];	
	$p87 = $_POST['p87'];
	$p88 = $_POST['p88'];
	$p89 = $_POST['p89'];
	$p90 = $_POST['p90'];
	$p91 = $_POST['p91'];
	$p92 = $_POST['p92'];
	$p93 = $_POST['p93'];
	$p94 = $_POST['p94'];	
	$p95 = $_POST['p95'];
	$p96 = $_POST['p96'];
	$p97 = $_POST['p97'];
	$p98 = $_POST['p98'];
	$p99 = $_POST['p99'];
	$p100 = $_POST['p100'];
	$p101 = $_POST['p101'];
	$p102 = $_POST['p102'];
	$p103 = $_POST['p103'];
	$p104 = $_POST['p104'];
	$p105 = $_POST['p105'];



//echo $p86."=p86<br>";
//echo $p87."=p87<br>";
//echo $p88."=p88<br>";
//echo $p89."=p89<br>";
//echo $p90."=p90<br>";
//echo $p91."=p91<br>";
//echo $p92."=p92<br>";
//echo $p93."=p93<br>";
//echo $p94."=p94<br>";
//echo $p95."=p95<br>";
//echo $p96."=p96<br>";
//echo $p97."=p97<br>";
//echo $p98."=p98<br>";
//echo $p99."=p99<br>";
//echo $p100."=p100<br>";
//echo $p101."=p101<br>";
//echo $p102."=p102<br>";
//echo $p103."=p103<br>";
//echo $p104."=p104<br>";
//echo $p105."=p105<br>";

//echo $rand_fol;
	
		
		mysqli_query($link ,"UPDATE `quest` SET 


page_stat='p4',
p86='$p86',
p87='$p87',
p88='$p88',
p89='$p89',
p90='$p90',
p91='$p91',
p92='$p92',
p93='$p93',
p94='$p94',
p95='$p95',
p96='$p96',
p97='$p97',
p98='$p98',
p99='$p99',
p100='$p100',
p101='$p101',
p102='$p102',
p103='$p103',
p104='$p104',
p105='$p105'



WHERE `quest`.`rand_fol`='$rand_fol'");	
	
	mysqli_select_db($link,"db_quest"); //mysql_select_db("agro_db",$conexion) or die("Problemas en la seleccion de la base de datos");

//Inserccion de Datos del Formulario a la BD//

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
<form action="p5.php" method="post">
<!------ Include the above in your HEAD 	
<!--HOMBRE O MUJER ; GET-->	
	<input type="hidden" name="hp0" id="hp0" value="<?php echo $_POST['hp0'];  ?>">
	<input type="hidden" name="rand_fol" value="<?php if (isset($_REQUEST['ret']))
{
	echo $_REQUEST['rand_fol'];
}else{
	
	echo $rand_fol ;}  ?>" >
	
tag ---------->

<div class="container" align="center">
    <div class="row">
		<div class="col-lg-1 col-centered" > 
		<h2>Cuestionario DSS</h2>
        
        
        <br /><br />
	
	
<div class="form-group" align="left">
        			<label for="fp106" >106. ¿Su localidad cuenta con electrificación pública?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p106" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p106" data-title="1">Si</a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p106" data-title="2">Algunas Veces</a>
    				</div>
    				<input type="hidden" name="p106" id="p106">
    				</div>
    				</div>
    		</div>			
			<br><br>					
			
			
<div class="form-group" align="left">
        			<label for="fp107" >107. ¿Su localidad cuenta con algún servicio de eliminación de basura?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p107" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p107" data-title="1">Si</a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p107" data-title="2">Algunas Veces</a>
    				</div>
    				<input type="hidden" name="p107" id="p107">
    				</div>
    				</div>
    		</div>			
			<br><br>					
			
<div class="form-group" align="left">
        			<label for="fp108" >108. ¿Cómo percibe el obtener ayuda para que la cuiden en caso de una enfermedad?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p108" data-title="0">Difícil </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p108" data-title="1">No tan sencillo </a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p108" data-title="2">Sencillo</a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p108" data-title="3">Muy sencillo</a>
    				</div>
    				<input type="hidden" name="p108" id="p108">
    				</div>
    				</div>
    		</div>			
			<br><br>		
<div class="form-group" align="left">
        			<label for="fp109" >109. ¿Cómo percibe que le sería obtener ayuda para conseguir un trabajo?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p109" data-title="0">Difícil </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p109" data-title="1">No tan sencillo </a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p109" data-title="2">Sencillo</a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p109" data-title="3">Muy sencillo</a>
    				</div>
    				<input type="hidden" name="p109" id="p109">
    				</div>
    				</div>
    		</div>			
			<br><br>			
			
<div class="form-group" align="left">
        			<label for="fp110" >110. ¿Cómo percibe el obtener ayuda para que lo acompañen al doctor?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p110" data-title="0">Difícil </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p110" data-title="1">No tan sencillo </a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p110" data-title="2">Sencillo</a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p110" data-title="3">Muy sencillo</a>
    				</div>
    				<input type="hidden" name="p110" id="p110">
    				</div>
    				</div>
    		</div>			
			<br><br>					
			
<div class="form-group" align="left">
        			<label for="fp111" >111. ¿Cómo percibe que le sería obtener cooperación para realizar mejoras en su localidad?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p111" data-title="0">Difícil </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p111" data-title="1">No tan sencillo </a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p111" data-title="2">Sencillo</a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p111" data-title="3">Muy sencillo</a>
    				</div>
    				<input type="hidden" name="p111" id="p111">
    				</div>
    				</div>
    		</div>			
			<br><br>		
			
	<div class="form-group" align="left">
        			<label for="fp112" >112. ¿Está inscrito a alguna institución de salud??</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
						<table>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p112" data-title="0">Ninguno   </a></td></tr>
                        <tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p112" data-title="1">IMSS    </a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p112" data-title="2">ISSSTE  </a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p112" data-title="3">SSA  </a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p112" data-title="4">Dispensario     </a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p112" data-title="5">Seguro Popular</a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p112" data-title="6">Consultorio privado</a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p112" data-title="7">Médico tradicional</a></td></tr>
						</table>
    				</div>
    				<input type="hidden" name="p112" id="p112">
    				</div>
    				</div>
    		</div>			
			<br><br>				
			
	<div class="form-group" align="left">
        			<label for="fp113" >113. Cuando se enferma ¿a qué institución asiste?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
						<table>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p113" data-title="0">Ninguno   </a></td></tr>
                        <tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p113" data-title="1">IMSS    </a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p113" data-title="2">ISSSTE  </a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p113" data-title="3">SSA  </a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p113" data-title="4">Dispensario     </a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p113" data-title="5">Consultorio popular</a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p113" data-title="6">Consultorio privado</a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p113" data-title="7">Médico tradicional</a></td></tr>
						</table>
    				</div>
    				<input type="hidden" name="p113" id="p113">
    				</div>
    				</div>
    		</div>			
			<br><br>				
			
	<div class="form-group" align="left">
        			<label for="fp114" >114. ¿Tiene algún tipo de apoyo federal, municipal o estatal?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
							<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p114" data-title="0">No   </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p114" data-title="1">Si    </a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p114" data-title="2">En  trámite  </a>
						
    				</div>
    				<input type="hidden" name="p114" id="p114">
    				</div>
    				</div>
    		</div>			
			<br><br>		
			

	<div class="form-group" align="left">
        			<label for="fp115" >115.¿Qué principales problemas considera que existen en su comunidad?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
						<table>
						
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p115" data-title="0">Ninguno   </a></td></tr>
                        <tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 28px" data-toggle="p115" data-title="1">Delincuencia e inseguridad</a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 28px" data-toggle="p115" data-title="2">Drogadicción y alcoholismo</a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p115" data-title="3">Iluminación    </a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p115" data-title="4">Pavimentación  </a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p115" data-title="5">Servicios públicos</a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p115" data-title="6">Otros</a></td></tr>
						</table>
    				</div>
    				<input type="hidden" name="p115" id="p115">
    				</div>
    				</div>
    		</div>			
			<br><br>				
			
			
			
			<div class="form-group" align="left">
        			<label for="fp116" >116.¿En su domicilio hay plagas?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
						<div id="dhp116">
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p116" data-title="0">No   </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p116" data-title="1">Si    </a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p116" data-title="2">Por temporada  </a>
						</div>
    				</div>
    				<input type="hidden" name="p116" id="p116">
    				</div>
    				</div>
    		</div>			
			<br><br>		
			
			
	<div align="left"  id="p117" hidden>
			<br>117.¿Cuál (es)  plaga (s) ?
			<input type="text" name="p117" value=""  style="height:40px;font-size:14pt;width: 100%">
						
			
			<br><br>			
			</div>
			
	
		<script type="text/javascript">
$(document).ready(function()
                  {
                  $("#dhp116").on('click',function()
        {
            if($("#p116").val() != "0")
        {
            $("#p117").show();
        }
        else
        {
            $("#p117").hide();
        }
            });
			
            $("#p117").hide();
});
</script>		
			
			
<!-- FIN DE PREGUNTA CON OPCION 116 -->					
			
			<div class="form-group" align="left">
        			<label for="fp118" >118.¿Dentro de su hogar tiene mascotas?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
						<div id="dhp118">
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p118" data-title="0">No   </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p118" data-title="1">Perros    </a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p118" data-title="2">Gatos  </a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p118" data-title="3">Otros</a>
						</div>
    				</div>
    				<input type="hidden" name="p118" id="p118">
    				</div>
    				</div>
    		</div>			
					
			
			
	<div align="left"  id="p118_1" hidden>
			<br>Alguna otra mascota.
			<input type="text" name="p118_1" value=""  style="height:40px;font-size:14pt;width: 100%">
						
			
			<br><br>			
			</div>
			
<div class="form-group" align="left" id="dhp119" hidden>
        			<label for="fp119" >119.¿Estan vacunados?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
							<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p119" data-title="0">No   </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p119" data-title="1">Si    </a>
						
	
    				</div>
    				<input type="hidden" name="p119" id="p119">
    				</div>
    				</div>
    		</div>			
						
			
	<div align="left"  id="p119_1" hidden>
			<br>Les falta alguna vacuna?
			<input type="text" name="p119_1" value=""  style="height:40px;font-size:14pt;width: 100%">
						
			
			<br><br>			
			</div>			
			
			
			
			
		<script type="text/javascript">
$(document).ready(function()
                  {
                  $("#dhp118").on('click',function()
        {
            if($("#p118").val() != "0")
        {
            $("#p118_1").show();
			$("#dhp119").show();
			$("#p119_1").show();
        }
        else
        {
            $("#p118_1").hide();
            $("#dhp119").hide();
            $("#p119_1").hide();
        }
            });
			
            $("#p118_1").hide();
            $("#dhp119").hide();
            $("#p119_1").hide();
});
</script>		
			
			
<!-- FIN DE PREGUNTA CON OPCION 118 -->		
			
			
			
	<div align="left"   >
			<br>120.<strong>(NO PREGUNTAR, SOLO ANOTAR)</strong> ¿Existe algún problema de salud del entrevistado o de la familia?
			
		<textarea name="p120" rows="10"  style="height:40px;font-size:14pt;width: 100%;height: 200px" value=""> </textarea>			
			
			<br><br>			
		  </div>			
			
	<div align="left"   >
			<br>121.<strong>(OBSERVACIONES)</strong> 
			
		<textarea name="p121" rows="10"  style="height:40px;font-size:14pt;width: 100%;height: 200px" > </textarea>			
			
			<br><br>			
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