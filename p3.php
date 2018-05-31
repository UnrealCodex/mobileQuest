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

	$rand_fol = $_POST['rand_fol'];
	$reg_by = "Caox";
	$page_stat = "2_5";	
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
	$p43 = $_POST['p43'];
	$p44 = $_POST['p44'];
	$p45 = $_POST['p45'];
	$p46 = $_POST['p46'];
	$p47 = $_POST['p47'];
	$p48 = $_POST['p48'];
	$p49 = $_POST['p49'];
	$p50 = $_POST['p50'];
	$p51 = $_POST['p51'];


//echo $p26."=p26<br>";
//echo $p27."=p27<br>";
//echo $p28."=p28<br>";
//echo $p29."=p29<br>";
//echo $p30."=p30<br>";
//echo $p31."=p31<br>";
//echo $p32."=p32<br>";
//echo $p33."=p33<br>";
//echo $p34."=p34<br>";
//echo $p34_1."=p34_1<br>";
//echo $p35."=p35<br>";
//echo $p36."=p36<br>";
//echo $p37."=p37<br>";
//echo $p38."=p38<br>";
//echo $p38_1."=p38_1<br>";
//echo $p39."=p39<br>";
//echo $p40."=p40<br>";
//echo $p41."=p41<br>";
//echo $p42."=p42<br>";
//echo $p43."=p43<br>";
//echo $p44."=p44<br>";
//echo $p45."=p45<br>";
//echo $p46."=p46<br>";
//echo $p47."=p47<br>";
//echo $p48."=p48<br>";
//echo $p49."=p49<br>";
//echo $p50."=p50<br>";
//echo $p51."=p51<br>";
//echo $rand_fol;
//	
		
		mysqli_query($link ,"UPDATE `quest` SET 


page_stat='p3',
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
p42='$p42',
p43='$p43',
p44='$p44',
p45='$p45',
p46='$p46',
p47='$p47',
p48='$p48',
p49='$p49',
p50='$p50',
p51='$p51'



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
		
<form action="p4.php" method="post">
<!------ Include the above in your HEAD tag ---------->
<!--HOMBRE O MUJER ; GET-->	
	<input type="hidden" name="hp0" id="hp0" value="<?php echo $_POST['hp0'];  ?>">
	<input type="hidden" name="rand_fol" value="<?php if (isset($_REQUEST['ret']))
{
	echo $_REQUEST['rand_fol'];
}else{
	
	echo $rand_fol ;}  ?>" >


<div class="container" align="center">
    <div class="row">
		<div class="col-lg-1 col-centered" > 
		<h2>Cuestionario DSS</h2>
        
        
        <br /><br />
	

			
<div class="form-group" align="left">
        			<label for="fp86" >86. Ocupación</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p86" data-title="0">Ninguna </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p86" data-title="1"> Asalariado</a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p86" data-title="2">No Asalariado</a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p86" data-title="3">Trabajo no remunerado</a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p86" data-title="4">Estudiante</a>

    				</div>
    				<input type="hidden" name="p86" id="p86">
    				</div>
    				</div>
    		</div>			
			<br><br>		
			
			
			
			<div class="form-group" align="left">
        			<label for="fp87" >87. ¿De donde obtiene el agua?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
						<table>
							
    					<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p87" data-title="1">Pozo</a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p87" data-title="2"> Rio, Lago, Arroyo</a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 28px" data-toggle="p87" data-title="3"> Pipa expendedora</a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 28px; text-align: left;" data-toggle="p87" data-title="4"> Entubada por acarreo<br> de otra vivienda,<br> lugar público o hidrante</a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p87" data-title="5"> Entubada</a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p87" data-title="6"> Agua Embotellada</a></td></tr>
</table>
    				</div>
    				<input type="hidden" name="p87" id="p87">
    				</div>
    				</div>
    		</div>			
			<br><br>		
			
<div class="form-group" align="left">
        			<label for="fp88" >88. ¿Les lava las manos a sus hijos antes de comer?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p88" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p88" data-title="1"> Si</a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p88" data-title="2">Algunas Veces</a>

    				</div>
    				<input type="hidden" name="p88" id="p88">
    				</div>
    				</div>
    		</div>			
			<br><br>					
			
			
<div class="form-group" align="left">
        			<label for="fp89" >89. ¿Acostumbra lavar sus manos después de ir al baño?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p89" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p89" data-title="1"> Si</a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p89" data-title="2">Algunas Veces</a>
    				</div>
    				<input type="hidden" name="p89" id="p89">
    				</div>
    				</div>
    		</div>			
			<br><br>					
			
<div class="form-group" align="left">
        			<label for="fp90" >90. ¿Acostumbra lavar sus manos antes de cocinar?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p90" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p90" data-title="1"> Si</a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p90" data-title="2">Algunas Veces</a>
    				</div>
    				<input type="hidden" name="p90" id="p90">
    				</div>
    				</div>
    		</div>			
			<br><br>					
			
<div class="form-group" align="left">
        			<label for="fp91" >91. ¿Usa leña o carbón para cocinar sin chimenea como medio predominante de cocinar?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p91" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p91" data-title="1"> Si</a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p91" data-title="2">Algunas Veces</a>
    				</div>
    				<input type="hidden" name="p91" id="p91">
    				</div>
    				</div>
    		</div>			
			<br><br>					
			
<div class="form-group" align="left">
        			<label for="fp92" >92. ¿Número de habitantes en la vivienda?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p92" data-title="1">1 </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p92" data-title="2">2 </a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p92" data-title="3">3 o más</a>
    				</div>
    				<input type="hidden" name="p92" id="p92">
    				</div>
    				</div>
    		</div>			
			<br><br>					
	<div class="form-group" align="left">
        			<label for="fp93" >93. ¿Número de personas que duermen por habitación?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p93" data-title="1">1 </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p93" data-title="2">2 </a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p93" data-title="3">3 o más</a>
    				</div>
    				<input type="hidden" name="p93" id="p93">
    				</div>
    				</div>
    		</div>			
			<br><br>				
<div class="form-group" align="left">
        			<label for="fp94" >94. ¿El material del piso de la vivienda es de tierra?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p94" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p94" data-title="1"> Si</a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p94" data-title="2">Otros</a>
    				</div>
    				<input type="hidden" name="p94" id="p94">
    				</div>
    				</div>
    		</div>			
			<br><br>				
			
<div class="form-group" align="left">
        			<label for="fp95" >95. ¿El material del techo de la vivienda es de lámina de cartón o desechos?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p95" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p95" data-title="1"> Si</a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p95" data-title="2">Otros</a>
    				</div>
    				<input type="hidden" name="p95" id="p95">
    				</div>
    				</div>
    		</div>			
			<br><br>					
<div class="form-group" align="left">
        			<label for="fp96" >96. ¿Las paredes de la vivienda están hechas de barro o lámina?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p96" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p96" data-title="1"> Si</a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p96" data-title="2">Otros</a>
    				</div>
    				<input type="hidden" name="p96" id="p96">
    				</div>
    				</div>
    		</div>			
			<br><br>			
	
<div class="form-group" align="left">
        			<label for="fp97" >97. ¿Alcanza la canasta básica alimentaria? (Leche Huevos Frijol
Tortilla Arroz azúcar
harina  verduras y frutas
de temporada).
</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p97" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p97" data-title="1"> Si</a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p97" data-title="2">Algunas Veces</a>
    				</div>
    				<input type="hidden" name="p97" id="p97">
    				</div>
    				</div>
    		</div>			
			<br><br>					
			
<div class="form-group" align="left">
        			<label for="fp98" >98. En los últimos tres meses, por falta de dinero o recursos ¿algún adulto en el hogar tuvo una alimentación basada en muy poca variación de alimentos?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p98" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p98" data-title="1"> Si</a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p98" data-title="2">Algunas Veces</a>
    				</div>
    				<input type="hidden" name="p98" id="p98">
    				</div>
    				</div>
    		</div>			
			<br><br>					
			
<div class="form-group" align="left">
        			<label for="fp99" >99. En los últimos tres meses, por falta de dinero ¿algún adulto en el hogar dejó de desayunar, comer o cenar?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p99" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p99" data-title="1"> Si</a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p99" data-title="2">Algunas Veces</a>
    				</div>
    				<input type="hidden" name="p99" id="p99">
    				</div>
    				</div>
    		</div>			
			<br><br>
			
	<div class="form-group" align="left">
        			<label for="fp100" >100. En los últimos tres meses, por falta de dinero ¿algún adulto en el hogar comió menos de lo que piensa debía comer?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p100" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p100" data-title="1"> Si</a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p100" data-title="2">Algunas Veces</a>
    				</div>
    				<input type="hidden" name="p100" id="p100">
    				</div>
    				</div>
    		</div>			
			<br><br>				
			
	<div class="form-group" align="left">
        			<label for="fp101" >101. En los últimos tres meses, por falta de dinero ¿se quedaron sin comida en el hogar?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p101" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p101" data-title="1"> Si</a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p101" data-title="2">Algunas Veces</a>
    				</div>
    				<input type="hidden" name="p101" id="p101">
    				</div>
    				</div>
    		</div>			
			<br><br>		
			
<div class="form-group" align="left">
        			<label for="fp102" >102. En los últimos tres meses, por falta de dinero ¿alguna persona en el hogar sintió hambre, pero no comió?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p102" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p102" data-title="1"> Si</a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p102" data-title="2">Algunas Veces</a>
    				</div>
    				<input type="hidden" name="p102" id="p102">
    				</div>
    				</div>
    		</div>			
			<br><br>				
			
<div class="form-group" align="left">
        			<label for="fp103" >103. En los últimos tres meses, por falta de dinero o recursos, ¿Alguna persona en el hogar se fue a dormir con hambre?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p103" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p103" data-title="1"> Si</a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p103" data-title="2">Algunas Veces</a>
    				</div>
    				<input type="hidden" name="p103" id="p103">
    				</div>
    				</div>
    		</div>			
			<br><br>					
			
<div class="form-group" align="left">
        			<label for="fp104" >104. ¿Su localidad se encuentra a más de tres kilómetros de un camino pavimentado?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p104" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p104" data-title="1">Si</a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p104" data-title="2">No sé</a>
    				</div>
    				<input type="hidden" name="p104" id="p104">
    				</div>
    				</div>
    		</div>			
			<br><br>				
			
<div class="form-group" align="left">
        			<label for="fp105" >105. ¿Su localidad tiene acceso a alcantarillado?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p105" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p105" data-title="1">Si</a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p105" data-title="2">No sé</a>
    				</div>
    				<input type="hidden" name="p105" id="p105">
    				</div>
    				</div>
    		</div>			
			<br><br>					
			
			
			
			
			
			
			
			
			
			
			
				
									
			
			
			
		
		
		
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