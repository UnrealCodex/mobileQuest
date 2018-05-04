<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,  minimum-scale=1.0">
<title>Encuesta</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

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
	

<!------ Include the above in your HEAD tag ---------->

<div class="container" align="center">
    <div class="row">
		<div class="col-lg-1 col-centered" > 
		<h2>Herramienta de control</h2>
        
        
        <br /><br />
			
			<div align="left" >
			<label>1.Folio:</label>	<br>
			<input type="text" name="p1" value="" style="height:40px;font-size:14pt;width: 100%">
			</div>
			<br><br>
			
			<div align="left">
			<label>2.Familia:</label>	<br>
			<input type="text" name="p2" value="" style="height:40px;font-size:14pt;width: 100%">
			</div>
			<br><br>
			
			<div align="left">
			<label>3.Domicilio:</label>	<br>
			<input type="text" name="p3" value="" style="height:40px;font-size:14pt;width: 100%">
			</div>
			<br><br>

			<div align="left">
			<label>4.Número de manzana:</label>	<br>
			<input type="text" name="p4" value="" style="height:40px;font-size:14pt;width: 100%">
			</div>
			<br><br>
			
			<div align="left">
			<label>5.Nombre y matrícula del encuestador:</label>	<br>
			<input type="text" name="p5" value="" style="height:40px;font-size:14pt;width: 100%">
			</div>
			<br><br>			

			<div align="left">
			<label>6.Maestro:</label>	<br>
			<input type="text" name="p6" value="" style="height:40px;font-size:14pt;width: 100%">
			</div>
			<br><br>		
			
			<div align="left">
			<label>7.Grupo:</label>	<br>
			<input type="text" name="p7" value="" style="height:40px;font-size:14pt;width: 100%">
			</div>
			<br><br>	
			
			<div align="left">
			<label>8.Dia:</label>	<br>
			<input type="text" name="p8" value="" style="height:40px;font-size:14pt;width: 100%">
			</div>
			<br><br>	
			
			<div align="left">
			<label>9.Clase:</label>	<br>
			<input type="text" name="p9" value="" style="height:40px;font-size:14pt;width: 100%">
			</div>
			<br><br>				
			

			
       		 <div class="form-group" align="left">
        			<label for="fp10" >10.  ¿En los últimos 16 años ha ido al dentista para que le hagan una limpieza o aplicación de fluoruro?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group" >
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px ;" data-toggle="p10" data-title="0">No</a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p10" data-title="1">Si</a>	
    				</div>
    				<input type="hidden" name="fp10" id="fp10">
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
    				<input type="hidden" name="fp11" id="fp11">
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
    				<input type="hidden" name="fp12" id="fp12">
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
    				<input type="hidden" name="fp13" id="fp13">
    				</div>
    				</div>
    		</div>			
			<br><br>	
		
		
		
		<div align="left" >
			<label>14.¿Observa pérdida de piezas dentales (número)?</label>	<br>
			<input type="text" name="p14" value=""  style="height:40px;font-size:14pt;width: 100%">
			</div>
			<br><br>
		
		
	       		 <div class="form-group" align="left">
        			<label for="fp15" >15.  ¿Tiene problemas dentales que no han sido resueltos por falta de dinero?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p15" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p15" data-title="1"> Si</a>	
    				</div>
    				<input type="hidden" name="fp15" id="fp15">
    				</div>
    				</div>
    		</div>			
			<br><br>		
		
		
		
		
			
 <div class="form-group" align="left">
        			<label for="fp16" >16.¿Si es hombre mayor de 35, le han realizado examen de próstata o valoración de Antígeno Prostático Específico?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p16" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p16" data-title="1"> Si</a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p16" data-title="2">No aplica</a>
    				</div>
    				<input type="hidden" name="fp16" id="fp16">
    				</div>
    				</div>
    		</div>			
			<br><br>					
			
			
			
			
		<div align="left" >
			<label>17.¿Hace cuanto?</label>	<br>
			<input type="text" name="p17" value=""  style="height:40px;font-size:14pt;width: 100%">
			</div>
			<br><br>			
			
			
 <div class="form-group" align="left">
        			<label for="fp18" >18.  ¿Si es mujer mayor de 35, le han realizado examen de cáncer de mama?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p18" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p18" data-title="1"> Si</a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p18" data-title="2">No aplica</a>
    				</div>
    				<input type="hidden" name="fp18" id="fp18">
    				</div>
    				</div>
    		</div>			
			<br><br>			
			
			
			
 <div class="form-group" align="left">
        			<label for="fp19" >19. ¿Se autoexplora las mamas cada mes?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p19" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p19" data-title="1"> Si</a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p19" data-title="2">No aplica</a>
    				</div>
    				<input type="hidden" name="fp19" id="fp19">
    				</div>
    				</div>
    		</div>			
			<br><br>
			

 <div class="form-group" align="left">
        			<label for="fp20" >20. ¿Se ha realizado mastografía anual?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p20" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p20" data-title="1"> Si</a>
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p20" data-title="2">No aplica</a>
    				</div>
    				<input type="hidden" name="fp20" id="fp20">
    				</div>
    				</div>
    		</div>			
			<br><br>
						
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
    		</div>			
			<br><br>			
			
		<div align="left" >
			<label>22.  Número de gestas</label>	<br>
			<input type="text" name="p22" value="0"  style="height:40px;font-size:14pt;width: 100%">
			</div>
			<br><br>				
			
			
		<div align="left" >
			<label>23.  Número de abortos</label>	<br>
			<input type="text" name="p23" value="0"  style="height:40px;font-size:14pt;width: 100%">
			</div>
			<br><br>				
						
			
			<div align="left" >
			<label>24.  Número de partos</label>	<br>
			<input type="text" name="p24" value="0"  style="height:40px;font-size:14pt;width: 100%">
			</div>
			<br><br>		
			
			
				<div align="left" >
			<label>25.  Número de cesáreas</label>	<br>
			<input type="text" name="p25" value="0"  style="height:40px;font-size:14pt;width: 100%">
			</div>
			<br><br>			
			

			
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
						<input type="text" name="p34a" value="0"  style="height:40px;font-size:14pt;width: 100%">
			</div>
			<br><br>			
			
			
			
			
			
			
			
			
			
			
			
			
		
		
		
		
		------------------------------------------
		
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
</body>
</html>