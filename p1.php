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
	
<form action="p2.php" method="post">
<!------ Include the asddsbove in your HEAD tag ---------->

<div class="container" align="center">
    <div class="row">
		<div class="col-lg-1 col-centered" > 
		<h2>Cuestionario DSS</h2>
        
        
        <br /><br />
			
			<div align="left" >
			<label>Campus:</label>	<br>
			<select name="reg_by" id="reg_by" style="height:40px;font-size:14pt;width: 100%">
			  <option value="Campus CdMx">Campus CdMx</option>
			  <option value="Campus Chihuahua">Campus Chihuahua</option>
			  <option value="Campus Guadalajara">Campus Guadalajara</option>
			  <option value="Campus Monterrey">Campus Monterrey</option>
			</select>	
				
			
			</div>
			<br><br>
			
			
			<div align="left" >
			<label>1.Folio:</label>	<br>
			<input name="p1" type="text" required="required" style="height:40px;font-size:14pt;width: 100%" value="">
			</div>
			<br><br>
			
			<div align="left">
			<label>2.Familia:</label>	<br>
			<input name="p2" type="text" required="required" style="height:40px;font-size:14pt;width: 100%" value="">
			</div>
			<br><br>
			
			<div align="left">
			<label>3.Domicilio:</label>	<br>
			<input name="p3" type="text" required="required" style="height:40px;font-size:14pt;width: 100%" value="">
			</div>
			<br><br>

			<div align="left">
			<label>4.Número de manzana:</label>	<br>
			<input name="p4" type="text" required="required" style="height:40px;font-size:14pt;width: 100%" value="">
			</div>
			<br><br>
			
			<div align="left" hidden>
			<label>5.Nombre:</label>	<br>
			<input type="hidden" name="p5" value="" style="height:40px;font-size:14pt;width: 100%">
			</div>
				
			
			<div align="left">
			<label>5.1.Matrícula del encuestador:</label>	<br>
			<input name="p5_1" type="text" required="required" style="height:40px;font-size:14pt;width: 100%" value="">
			</div>
			<br><br>

			<div align="left">
			<label>6.Maestro:</label>	<br>
			<input name="p6" type="text" required="required" style="height:40px;font-size:14pt;width: 100%" value="">
			</div>
			<br><br>		
			
			<div align="left">
			<label>7.Grupo:</label>	<br>
			<input name="p7" type="text" required="required" style="height:40px;font-size:14pt;width: 100%" value="">
			</div>
			<br><br>	
			
			<div align="left">
			<label>8.Dia: Formato (DD/MM/AAAA)</label>	<br>
			<input name="p8" type="text" required="required" style="height:40px;font-size:14pt;width: 100%" value="">
			</div>
			<br><br>	
			
			<div align="left">
			<label>9.Clase:</label>	<br>
			<input name="p9" type="text" required="required" style="height:40px;font-size:14pt;width: 100%" value="Comunidad I">
			</div>
			<br><br>				
			

			
			
			
			
			
			
			<!-- HOMBRE O MUJER -->		
		
			
 <div class="form-group" align="left">
        			<label for="fp0" >La persona entrevistada es de sexo:</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
						<div id="dhp0">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="hp0" data-title="M">Masculino </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="hp0" data-title="F">Femenino</a>
						
						</div>
    				</div>
    				<input type="hidden" name="hp0" id="hp0">
    				</div>
    				</div>
    		</div>			
			<br><br>					
			
		
			
		
	
			
			
<!-- FIN DE PREGUNTA CON OPCION 16 -->			
			
			
			
			
			
			
			
			
			
			
			
			
       		 <div class="form-group" align="left">
        			<label for="fp10" >10.  ¿En los últimos 16 años ha ido al dentista para que le hagan una limpieza o aplicación de fluoruro?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group" >
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px ;" data-toggle="p10" data-title="0">No</a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p10" data-title="1">Si</a>	
    				</div>
    				<input type="hidden" name="p10" id="p10" >
    				</div>
    				</div>
    		</div>
			<br><br>	
			
			
			
			
			
			
			
			
			
			
			
			
			
       		 <div class="form-group" align="left">
        			<label for="fp11" >11.  ¿Lava sus dientes con pasta dentífrica y cepillo dental?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p11" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p11" data-title="1"> Si</a>	
    				</div>
    				<input type="hidden" name="p11" id="p11" value="">
    				</div>
    				</div>
    		</div>			
			<br><br>	
			
       		 <div class="form-group" align="left">
        			<label for="fp12" >12.¿Con qué frecuencia lava sus dientes?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
						<table>
    					<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p12" data-title="0">Nunca </a></td></tr>
                        <tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p12" data-title="1">Diario</a>	</td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p12" data-title="2">Cada dos dias </a></td></tr>
                       <tr><td> <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p12" data-title="3"> Una vez a la semana</a></td></tr>
						</table>
							</div>
    				<input type="hidden" name="p12" id="p12" value="">
    				</div>
    				</div>
    		</div>				
			
			
			
	
		
		
	       		 <div class="form-group" align="left">
        			<label for="fp13" >13.  ¿Tiene problemas dentales que no han sido resueltos por falta de dinero?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p13" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p13" data-title="1"> Si</a>	
    				</div>
    				<input type="hidden" name="p13" id="p13" value="">
    				</div>
    				</div>
    		</div>			
			<br><br>	
		
		
		
		<div align="left" >
			<label>14.¿Observa pérdida de piezas dentales (número)?</label>	<br>
			<input type="text" name="p14" style="height:40px;font-size:14pt;width: 100%" onfocus="if(this.value == '0') { this.value = ''; }" value="0">
			</div>
			<br><br>
		
		
	       		 <div class="form-group" align="left">
        			<label for="fp15" >15.  ¿Tiene caries?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p15" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p15" data-title="1"> Si</a>	
    				</div>
    				<input type="hidden" name="p15" id="p15" value="">
    				</div>
    				</div>
    		</div>			
			<br><br>		
		
		
<!-- PREGUNTA CON OPCION  16 -->		
		
	<div id="p16" hidden>		
 <div class="form-group" align="left">
        			<label for="fp16" >16.¿Si es hombre mayor de 35, le han realizado examen de próstata o valoración de Antígeno Prostático Específico?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
						<div id="dhp16">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="hp16" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="hp16" data-title="1">Si</a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="hp16" data-title="2">No aplica</a>
						</div>
    				</div>
    				<input type="hidden" name="hp16" id="hp16" value="">
    				
    				</div>
    				</div>
    					
			<br><br></div>				
			
		
			
		<div align="left" id="p17" hidden>
			<label>17.¿Hace cuanto?</label>	<br>
			<input type="text" name="p17" value=""  style="height:40px;font-size:14pt;width: 100%">
			
			<br><br>			
			</div></div>	
			
	<script type="text/javascript">
$(document).ready(function()
                  {
                  $("#dhp16").on('click',function()
        {
            if($("#hp16").val() == "1")
        {
            $("#p17").show();
        }
        else
        {
            $("#p17").hide();
        }
            });
			
            $("#p17").hide();
});
</script>		
			
			
<!-- FIN DE PREGUNTA CON OPCION 16 -->			
			
			
			
			
			
			
			
			
			<div id="p18" hidden>
			
 <div class="form-group" align="left" >
        			<label for="fp18" >18.  ¿Si es mujer mayor de 35, le han realizado examen de cáncer de mama?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="hp18" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="hp18" data-title="1"> Si</a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="hp18" data-title="2">No aplica</a>
    				</div>
    				<input type="hidden" name="p18" id="hp18" value="">
    				</div>
    				</div>
    					
			<br><br></div>	</div>		
			
			
			<div id="p19" hidden>
 <div class="form-group" align="left">
        			<label for="fp19" >19. ¿Se autoexplora las mamas cada mes?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="hp19" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="hp19" data-title="1"> Si</a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="hp19" data-title="2">No aplica</a>
    				</div>
    				<input type="hidden" name="p19" id="hp19" value="">
    				</div>
    				</div>
    					
			<br><br></div></div>
			
<div id="p20" hidden>
 <div class="form-group" align="left">
        			<label for="fp20" >20. ¿Se ha realizado mastografía anual?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="hp20" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="hp20" data-title="1"> Si</a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="hp20" data-title="2">No aplica</a>
    				</div>
    				<input type="hidden" name="p20" id="hp20" value="">
    				</div>
    				</div>
    					
			<br><br></div></div>
						
			
			
			
			
			
	
<div id="hp21" >
 <div class="form-group" align="left">
        			<label for="p21" >21.¿Se ha realizado Papanicolaou anual?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p21" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p21" data-title="1"> Si</a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p21" data-title="2">No aplica</a>
    				</div>
    				<input type="hidden" name="p21" id="p21" value="" >
    				</div>
    				</div>
    					
			<br><br></div>	</div>		
			
		<div align="left" id="p22" hidden>
			<label>22.  Número de gestas</label>	<br>
			<input type="text" name="p22"   style="height:40px;font-size:14pt;width: 100%" onfocus="if(this.value == '0') { this.value = ''; }" value="0">
			
			<br><br>	</div>			
			
			
		<div align="left" id="p23" hidden>
			<label>23.  Número de abortos</label>	<br>
			<input type="text" name="p23"   style="height:40px;font-size:14pt;width: 100%" onfocus="if(this.value == '0') { this.value = ''; }" value="0">
			
			<br><br></div>				
						
			
			<div align="left" id="p24" hidden >
			<label>24.  Número de partos</label>	<br>
			<input type="text" name="p24"   style="height:40px;font-size:14pt;width: 100%" onfocus="if(this.value == '0') { this.value = ''; }" value="0">
			
			<br><br></div>		
			
			
				<div align="left" id="p25" hidden >
			<label>25.  Número de cesáreas</label>	<br>
			<input type="text" name="p25"   style="height:40px;font-size:14pt;width: 100%" onfocus="if(this.value == '0') { this.value = ''; }" value="0">
			
			<br><br></div>			
			
			
			

	 
	 
       
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
			$("#p16").hide();
            $("#p18").show();
			$("#p19").show();
			$("#p20").show();
			$("#hp21").show();
			$("#p22").show();
			$("#p23").show();
			$("#p24").show();
			$("#p25").show();
			
			
        }
        else
        {
			$("#p16").show();
            $("#p18").hide();
			$("#p19").hide();
			$("#p20").hide();
			$("#hp21").hide();
			$("#p22").hide();
			$("#p23").hide();
			$("#p24").hide();
			$("#p25").hide();
        }
            });
			$("#p16").hide();
            $("#p18").hide();
			$("#p19").hide();
			$("#p20").hide();
			$("#hp21").hide();
			$("#p22").hide();
			$("#p23").hide();
			$("#p24").hide();
			$("#p25").hide();
});
</script>		
	
	
	
	
	
	<div align="center">
	<input type="submit" class="btn" value="Guardar y Continuar" style="font-size: 18px; color: darkred"><br>
<br>
<br>
<br>

	</div>
	</form>
</body>
</html>