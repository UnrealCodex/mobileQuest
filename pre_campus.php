<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,  minimum-scale=1.0">
<title>Menu</title>
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
	
	
	<div class="container" align="center">
    <div class="row">
		<div class="col-lg-1 col-centered" > 
		<h2>Selecciona el campus</h2>
	
		
		<select>
		  <?php  include('opciones.php');  ?>
			<option value="-">-</option>
		</select>	
			
			
		<a href="p1.php" class="btn btn-primary "  style="font-size: 32px">NUEVO</a><br><br>
		
		<a href="retomar.php" class="btn btn-primary "  style="font-size: 32px">RETOMAR</a><br><br>
		
		<a href="info.php" class="btn btn-primary "  style="font-size: 32px">INFO</a><br><br>

		
		Rev 1.1
		
		
	</div></div></div>
</body>
</html>