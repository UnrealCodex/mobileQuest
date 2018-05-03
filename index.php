<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Encuesta</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

	<style>
	#radioBtn .notActive{
    color: #3276b1;
    background-color: #ffFFFf;
}
	</style>
	
	
	
	</head>

<body>
	

<!------ Include the above in your HEAD tag ---------->

<div class="container-fluid" align="center">
    <div class="row">
		<div class="col-md-8 "> 
		<h2>Herramienta de control</h2>
        
        
        <br /><br />
        <div class="form-group">
        	<label for="fun" class="col-md-8 ">10.  ¿En los últimos 2 años ha ido al dentista para que le hagan una limpieza o aplicación de fluoruro?</label>
    		<div class="col-md-8 ">
    			<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm active" data-toggle="p10" data-title="Y">Si</a>
                        <a class="btn btn-primary btn-sm notActive" data-toggle="p10" data-title="X">No</a>
    					<a class="btn btn-primary btn-sm notActive" data-toggle="p10" data-title="N">Que es un dentista?</a>
    				</div>
    				<input type="hidden" name="fun" id="fun">
    			</div>
    		</div>
    	</div>
	</div>
    <br /><br />
 
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