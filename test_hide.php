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
	
	<?php ${'a' . 'b'} = 'hello there';
echo $ab; // hello there
	?>
	
	
	
	
       		 <div class="form-group" align="left">
        			<label for="fp10" >10.  ¿En los últimos 16 años ha ido al dentista para que le hagan una limpieza o aplicación de fluoruro?</label>
    				<div>
    				<div class="input-group">
    				<div id="radioBtn" class="btn-group"  >
						<div id="dhp10">
    					<a  class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="hp10" data-title="0" >No</a>
                        <a  class="btn btn-primary btn-sm notActive" style="font-size: 32px" data-toggle="hp10" data-title="1" >Si</a>	
    				</div></div>
    				<input type="hidden" name="hp10" id="hp10" value="1">
						
    				</div>
    				</div>
    		</div>
			<br><br>	
	
	
	
	
	
	
	
		
		------------------------------------------
		
    <br /><br />
 </div>
</div>	
	</div>	






    
    
    <div id="test"  hidden>
        Price:
    <input type="text" name="test" id="test">
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
	
	



<script type="text/javascript">
$(document).ready(function()
                  {
                  $("#dhp10").on('click',function()
        {
            if($("#hp10").val() == "1")
        {
            $("#test").show();
        }
        else
        {
            $("#test").hide();
        }
            });
            $("#test").hide();
});
</script>
	















	
	<input type="submit" value="Enviar">
	
	</form>
</body>
</html>