	<?php
require_once  'conexion.php'; //conexion a la BD
//	$reg_by = $_REQUEST['reg_by'];
//	$page_stat = $_REQUEST['page_stat'];	



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


echo $p26."=p26<br>";
echo $p27."=p27<br>";
echo $p28."=p28<br>";
echo $p29."=p29<br>";
echo $p30."=p30<br>";
echo $p31."=p31<br>";
echo $p32."=p32<br>";
echo $p33."=p33<br>";
echo $p34."=p34<br>";
echo $p34_1."=p34_1<br>";
echo $p35."=p35<br>";
echo $p36."=p36<br>";
echo $p37."=p37<br>";
echo $p38."=p38<br>";
echo $p38_1."=p38_1<br>";
echo $p39."=p39<br>";
echo $p40."=p40<br>";
echo $p41."=p41<br>";
echo $p42."=p42<br>";
echo $p43."=p43<br>";
echo $p44."=p44<br>";
echo $p45."=p45<br>";
echo $p46."=p46<br>";
echo $p47."=p47<br>";
echo $p48."=p48<br>";
echo $p49."=p49<br>";
echo $p50."=p50<br>";
echo $p51."=p51<br>";
echo $rand_fol;
	
		
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

	
	
	
	
	?>

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
	
<!--HOMBRE O MUJER ; GET-->	
	<input type="hidden" name="hp0" id="hp0" value="<?php echo $_POST['hp0'];  ?>">
	
<form action="pregs_pro.php" method="post">
<!------ Include the above in your HEAD tag ---------->

<div class="container" align="center">
    <div class="row">
		<div class="col-lg-1 col-centered" > 
		<h2>Herramienta de control</h2>
        
        
        <br /><br />
	
			
			
			
				
									
			
			
			
		
		
		
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