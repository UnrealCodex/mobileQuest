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

	$rand_fol = $_REQUEST['rand_fol'];
	$reg_by = "Caox";
	$page_stat = "2_5";	
	$p106 = $_POST['p106'];	
	$p107 = $_POST['p107'];
	$p108 = $_POST['p108'];
	$p109 = $_POST['p109'];
	$p110 = $_POST['p110'];
	$p111 = $_POST['p111'];
	$p112 = $_POST['p112'];
	$p113 = $_POST['p113'];
	$p114 = $_POST['p114'];	
	$p115 = $_POST['p115'];
	$p116 = $_POST['p116'];
	$p117 = $_POST['p117'];
	$p118 = $_POST['p118'];
	$p118_1 = $_POST['p118_1'];
	$p119 = $_POST['p119'];
	$p119_1 = $_POST['p119_1'];
	$p120 = $_POST['p120'];
	$p121 = $_POST['p121'];
	



echo $p106."=p106<br>";
echo $p107."=p107<br>";
echo $p108."=p108<br>";
echo $p109."=p109<br>";
echo $p110."=p110<br>";
echo $p111."=p111<br>";
echo $p112."=p112<br>";
echo $p113."=p113<br>";
echo $p114."=p114<br>";
echo $p115."=p115<br>";
echo $p116."=p116<br>";
echo $p117."=p117<br>";
echo $p118."=p118<br>";
echo $p119."=p119<br>";
echo $p120."=p120<br>";
echo $p121."=p121<br>";


echo $rand_fol;
	
		
		mysqli_query($link ,"UPDATE `quest` SET 


page_stat='Listo',
p106='$p106',
p107='$p107',
p108='$p108',
p109='$p109',
p110='$p110',
p111='$p111',
p112='$p112',
p113='$p113',
p114='$p114',
p115='$p115',
p116='$p116',
p117='$p117',
p118='$p118',
p119='$p119',
p120='$p120',
p121='$p121'



WHERE `quest`.`rand_fol`='$rand_fol'");	
	
	mysqli_select_db($link,"db_quest"); //mysql_select_db("agro_db",$conexion) or die("Problemas en la seleccion de la base de datos");

//Inserccion de Datos del Formulario a la BD//

mysqli_close($link);

	
	
}
	
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
	<input type="hidden" name="rand_fol" value="<?php if (isset($_REQUEST['ret']))
{
	echo $_REQUEST['rand_fol'];
}else{
	
	echo $rand_fol ;}  ?>" >
	
	
	
	
	
	
	
    <br /><br />

	
	
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