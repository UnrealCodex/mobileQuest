<?php 
require_once  'conexion.php';
$query2       = sprintf("SELECT rand_fol,page_stat,numdefam,fam_listo FROM quest WHERE rand_fol='$_REQUEST[rand_fol]' AND fam_listo != 0");
$result2      = @mysqli_query($link,$query2);
//$rowAccount2  = @mysqli_fetch_array($result2);


while($rowAccount2  = @mysqli_fetch_array($result2))
{
		echo ('<option value="').$rowAccount2[''].('">').$rowAccount2[''].('</option>');
		
		
}

