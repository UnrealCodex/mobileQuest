

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
	<form action="fp8_pro.php" method="post">
	<div class="container" align="center">
    <div class="row">
		<div class="col-lg-1 col-centered" > 
		<h2>Agregar familiares</h2>
        
	<input type="hidden" name="rand_fol" value="<?php echo $_REQUEST['rand_fol']; ?>" >
<input type="hidden" name="num" value="<?php echo $_REQUEST['num'] ; ?>">			
			
			
			<div align="left" >
			<br>52. Nombre
			<input type="text" name="p8_52" value=""  style="height:40px;font-size:14pt;width: 100%">	
			<br>
			<br>
			</div>
			<div align="left" >
			<br>53. Edad
			<input type="text" name="p8_53" value=""  style="height:40px;font-size:14pt;width: 100%">	
			<br>
			<br>
			</div>
			
			<div class="form-group" align="left">
        			<label for="fp8_54" >54. ¿Sabe Leer?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
						<div id="dhp8_54">
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p8_54" data-title="0">No   </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p8_54" data-title="1">Si    </a>
						
						</div>
    				</div>
    				<input type="hidden" name="p8_54" id="p8_54">
    				</div>
    				</div>
    		</div>				
			
			<div class="form-group" align="left">
        			<label for="fp8_55" >55. ¿Sabe Escribir?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
						<div id="dhp8_55">
						<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p8_55" data-title="0">No   </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p8_55" data-title="1">Si    </a>
						
						</div>
    				</div>
    				<input type="hidden" name="p8_55" id="p8_55">
    				</div>
    				</div>
    		</div>				
	
			<div class="form-group" align="left">
        			<label for="fp8_56" >56. Escolaridad</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
						<div id="dhp8_56">
						<table>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p8_56" data-title="0">Ninguno   </a></td></tr>
                        <tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p8_56" data-title="1">Primaria    </a></td></tr>
                        <tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p8_56" data-title="2">Secundaria    </a></td></tr>
                        <tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p8_56" data-title="3">Prepa o Técnica    </a></td></tr>
                        <tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p8_56" data-title="4">Profesional    </a></td></tr>
                        <tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p8_56" data-title="5">Maestría    </a></td></tr>
                        <tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p8_56" data-title="6">Doctorado    </a></td></tr>
							</table>
						
						</div>
    				</div>
    				<input type="hidden" name="p8_56" id="p8_56">
    				</div>
    				</div>
    		</div>				
			
			
	
<!-- PREGUNTA CON OPCION  57 -->			
			

			
 <div class="form-group" align="left">
        			<label for="p8_57" >57. ¿Fuma?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
						<div id="dhp8_57">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p8_57" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p8_57" data-title="1"> Si</a>
						</div>
    				</div>
    				<input type="hidden" name="p8_57" id="p8_57" value="">
    				</div>
    				</div>
    		</div>			
					
			
			
					<div align="left" id="p8_58" hidden="" >
			<label>¿Cuantos cigarros al dia?</label>	<br>
			<input type="text" name="p8_58" value=""  style="height:40px;font-size:14pt;width: 100%">
			</div>
			<br><br>	
			
		<script type="text/javascript">
$(document).ready(function()
                  {
                  $("#dhp8_57").on('click',function()
        {
            if($("#p8_57").val() == "1")
        {
            $("#p8_58").show();
        }
        else
        {
            $("#p8_58").hide();
        }
            });
			
            $("#p8_58").hide();
});
</script>		
			
			
<!-- FIN DE PREGUNTA CON OPCION 57 -->				
			
			
<!-- PREGUNTA CON OPCION  59 -->			
			

			
 <div class="form-group" align="left">
        			<label for="p8_59" >59. ¿Consume alcohol?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
						<div id="dhp8_59">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p8_59" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p8_59" data-title="1"> Si</a>
						</div>
    				</div>
    				<input type="hidden" name="p8_59" id="p8_59" value="">
    				</div>
    				</div>
    		</div>			
					
			
			
					<div align="left" id="p8_60" hidden="" >
			<label>Número de copas por semana</label>	<br>
			<input type="text" name="p8_60" value=""  style="height:40px;font-size:14pt;width: 100%">
			</div>
			<br><br>	
			
		<script type="text/javascript">
$(document).ready(function()
                  {
                  $("#dhp8_59").on('click',function()
        {
            if($("#p8_59").val() == "1")
        {
            $("#p8_60").show();
        }
        else
        {
            $("#p8_60").hide();
        }
            });
			
            $("#p8_60").hide();
});
</script>		
			
			
<!-- FIN DE PREGUNTA CON OPCION 59 -->				
			
<!-- PREGUNTA CON OPCION  61 -->			
			

			
 <div class="form-group" align="left">
        			<label for="p8_61" >61. Habla algún dialecto</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
						<div id="dhp8_61">
    					<a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p8_61" data-title="0">No </a>
                        <a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p8_61" data-title="1"> Si</a>
						</div>
    				</div>
    				<input type="hidden" name="p8_61" id="p8_61" value="">
    				</div>
    				</div>
    		</div>			
					
			<div class="form-group" align="left" id="ep8_62" hidden>
        			<label for="fp8_62" ></label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group">
						<table>
							
    					<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p8_62" data-title="0">Ninguno</a></td></tr>
    					<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p8_62" data-title="1">Náhuatl</a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p8_62" data-title="2">Huasteco</a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p8_62" data-title="3">Ostomí</a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p8_62" data-title="4">Zappoteco</a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p8_62" data-title="5">Maya</a></td></tr>
						<tr><td><a class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="p8_62" data-title="6">Otro</a></td></tr>
</table>
    				</div>
    				<input type="hidden" name="p8_62" id="p8_62">
    				</div>
    				</div>
    		</div>			
			
					
			
		<script type="text/javascript">
$(document).ready(function()
                  {
                  $("#dhp8_61").on('click',function()
        {
            if($("#p8_61").val() == "1")
        {
            $("#ep8_62").show();
        }
        else
        {
            $("#ep8_62").hide();
        }
            });
			
            $("#ep8_62").hide();
});
</script>		
			
			
<!-- FIN DE PREGUNTA CON OPCION 57 -->			
			
			
			
	<div align="left"  >
			<label>63. ¿Cuál es su peso en kg? ejemplo " 72.5 "</label>	<br>
			<input type="text" name="p8_63" value=""  style="height:40px;font-size:14pt;width: 100%">
			</div>
			<br><br>			
			
	<div align="left"  >
			<label>64. ¿Cuál es su estatura en cm.?</label>	<br>
			<input type="text" name="p8_64" value=""  style="height:40px;font-size:14pt;width: 100%">
			</div>
			<br><br>		
			
	
			

	<div align="left" >
			<label>65. Padecimiento actual:</label>	<br>
			 <div class="funkyradio">
        <div class="funkyradio-primary">
            <input type="checkbox" name="p8_65[]" id="ch_op65_0" value="0" />
            <label for="ch_op65_0">Ninguno</label>
        </div>
	 
	         <div class="funkyradio-primary">
            <input type="checkbox" name="p8_65[]" id="ch_op65_1" value="1" />
            <label for="ch_op65_1">Diabetes</label>
        </div>
	 
	         <div class="funkyradio-primary">
            <input type="checkbox" name="p8_65[]" id="ch_op65_2" value="2" />
            <label for="ch_op65_2">Hipertensión Arterial</label>
        </div>
	     <div class="funkyradio-primary">
            <input type="checkbox" name="p8_65[]" id="ch_op65_3" value="3" />
            <label for="ch_op65_3">Cáncer</label>
        </div>
	     <div class="funkyradio-primary">
            <input type="checkbox" name="p8_65[]" id="ch_op65_4" value="4" />
            <label for="ch_op65_4">Enfermedades Renales</label>
        </div>
	     <div class="funkyradio-primary">
            <input type="checkbox" name="p8_65[]" id="ch_op65_5" value="5" />
            <label for="ch_op65_5">Enfermedades Neurológicas</label>
        </div>
	     <div class="funkyradio-primary">
            <input type="checkbox" name="p8_65[]" id="ch_op65_6" value="6" />
            <label for="ch_op65_6">Enfermedades Oftalmológicas</label>
        </div>
	     <div class="funkyradio-primary">
            <input type="checkbox" name="p8_65[]" id="ch_op65_7" value="7" />
            <label for="ch_op65_7">Enfermedades Digestivas</label>
        </div>
	     <div class="funkyradio-primary">
            <input type="checkbox" name="p8_65[]" id="ch_op65_8" value="8" />
            <label for="ch_op65_8">Enfermedades Dermatológicas</label>
        </div>
	     <div class="funkyradio-primary">
            <input type="checkbox" name="p8_65[]" id="ch_op65_9" value="9" />
            <label for="ch_op65_9">Enfermedades En vías Urinarias</label>
        </div>
	     <div class="funkyradio-primary">
            <input type="checkbox" name="p8_65[]" id="ch_op65_10" value="10" />
            <label for="ch_op65_10">Discapacidad</label>
        </div>
	     <div class="funkyradio-primary">
            <input type="checkbox" name="p8_65[]" id="ch_op65_11" value="11" />
            <label for="ch_op65_11">Otras</label>
        </div>
				
				
				
			</div>
			<br><br>		
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
	
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
			
			
			
        }
        else
        {
			$("#p22").hide();
         
        }
            });
			$("#p22").hide();
          
};
		begin();
</script>		
	
	
	
	
	
<input type="submit" value="Guardar">
		</div>
			
			</form>
</body>
</html>