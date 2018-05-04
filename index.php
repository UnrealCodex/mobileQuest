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