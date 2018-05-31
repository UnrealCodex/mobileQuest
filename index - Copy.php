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
	
<form action="pregs_pro.php" method="post">
<!------ Include the above in your HEAD tag ---------->

<div class="container" align="center">
    <div class="row">
		<div class="col-lg-1 col-centered" > 
		<h2>Cuestionario DSS</h2>
        
        
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
			<label>5.1.Matrícula del encuestador:</label>	<br>
			<input type="text" name="p5_1" value="" style="height:40px;font-size:14pt;width: 100%">
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
    				<input type="hidden" name="p10" id="p10">
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
        			<label for="fp15" >15.  ¿Tiene caries?</label>
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
						<input type="text" name="p36a" value="0"  style="height:40px;font-size:14pt;width: 100%">
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
						<input type="text" name="p38a" value="0"  style="height:40px;font-size:14pt;width: 100%">
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
						
			
			
<div class="form-group" align="left">
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
    				<input type="hidden" name="fp41" id="fp41">
    				</div>
    				</div>
    		</div>			
			<br><br>				
			

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
    				<input type="hidden" name="fp42" id="fp42">
    				</div>
    				</div>
    				</div>			
					<br><br>		
			
			
			
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
							
			
						
					<div class="form-group" align="left">
        			<label for="fp61" >61. Habla algún dialecto</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
						<table>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p61" data-title="0">No</a></td></tr>
                        <tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p61" data-title="1">Si</a></td></tr>
					
                        </table>
    				</div>
    				<input type="hidden" name="fp61" id="fp61">
    				</div>
    				</div>
    				</div>			
					<br><br>
										
					<div class="form-group" align="left">
        			<label for="fp62" >62. En caso de “Sí” Especificar cuál.</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
						<table>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p62" data-title="0">Ninguno</a></td></tr>
                        <tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p62" data-title="1">Náhuatl</a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p62" data-title="2">Huasteco</a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p62" data-title="3">Ostomí</a></td></tr>	
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p62" data-title="4">Zappoteco</a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p62" data-title="5">Maya</a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p62" data-title="6">Otro</a></td></tr>
                        </table>
    				</div>
    				<input type="hidden" name="fp62" id="fp62">
    				</div>
    				</div>
    				</div>			
					<br><br>			
			
			
			<div align="left" >
			<label>63. ¿Cuál es su peso?</label>	<br>
			<input type="text" name="p63" value="0"  style="height:40px;font-size:14pt;width: 100%">
			</div>
			<br><br>				
			
			<div align="left" >
			<label>64. ¿Cuál es su estatura?</label>	<br>
			<input type="text" name="p64" value="0"  style="height:40px;font-size:14pt;width: 100%">
			</div>
			<br><br>				
						
			
			<div align="left" >
			<label>65. Padecimiento actual:</label>	<br>
			 <div class="funkyradio">
        <div class="funkyradio-primary">
            <input type="checkbox" name="checkbox" id="ch_op65_0" />
            <label for="ch_op65_0">Ninguno</label>
        </div>
	 
	         <div class="funkyradio-primary">
            <input type="checkbox" name="checkbox" id="ch_op65_1" />
            <label for="ch_op65_1">Diabetes</label>
        </div>
	 
	         <div class="funkyradio-primary">
            <input type="checkbox" name="checkbox" id="ch_op65_2" />
            <label for="ch_op65_2">Hipertensión Arterial</label>
        </div>
	     <div class="funkyradio-primary">
            <input type="checkbox" name="checkbox" id="ch_op65_3" />
            <label for="ch_op65_3">Cáncer</label>
        </div>
	     <div class="funkyradio-primary">
            <input type="checkbox" name="checkbox" id="ch_op65_4" />
            <label for="ch_op65_4">Enfermedades Renales</label>
        </div>
	     <div class="funkyradio-primary">
            <input type="checkbox" name="checkbox" id="ch_op65_5" />
            <label for="ch_op65_5">Enfermedades Neurológicas</label>
        </div>
	     <div class="funkyradio-primary">
            <input type="checkbox" name="checkbox" id="ch_op65_6" />
            <label for="ch_op65_6">Enfermedades Oftalmológicas</label>
        </div>
	     <div class="funkyradio-primary">
            <input type="checkbox" name="checkbox" id="ch_op65_7" />
            <label for="ch_op65_7">Enfermedades Digestivas</label>
        </div>
	     <div class="funkyradio-primary">
            <input type="checkbox" name="checkbox" id="ch_op65_8" />
            <label for="ch_op65_8">Enfermedades Dermatológicas</label>
        </div>
	     <div class="funkyradio-primary">
            <input type="checkbox" name="checkbox" id="ch_op65_9" />
            <label for="ch_op65_9">Enfermedades En vías Urinarias</label>
        </div>
	     <div class="funkyradio-primary">
            <input type="checkbox" name="checkbox" id="ch_op65_10" />
            <label for="ch_op65_10">Discapacidad</label>
        </div>
	     <div class="funkyradio-primary">
            <input type="checkbox" name="checkbox" id="ch_op65_11" />
            <label for="ch_op65_11">Otras</label>
        </div>
				
				
				
			</div>
			<br><br>				
			
			
			
		<strong>7. Determinantes Intermedios </strong>	
			
			
			
						<div class="form-group" align="left">
        			<label for="fp86" >86. Ocupación.</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
						<table>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p86" data-title="0">Ninguno</a></td></tr>
                        <tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p86" data-title="1">Asalariado</a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p86" data-title="2">no Asalariado</a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p86" data-title="3">Trabajo no remunerado</a></td></tr>	
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p86" data-title="4">Estudiante</a></td></tr>
						
                        </table>
    				</div>
    				<input type="hidden" name="fp86" id="fp86">
    				</div>
    				</div>
    				</div>			
					<br><br>			
					
			
			
			
			
			
	
			
			
			
			

	 
	 
       
        </div>
    </div>

			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
						
			
			
			
			
			
			
		
		
		
		
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
	
	
	
	<input type="submit" value="Enviar">
	
	</form>
</body>
</html>