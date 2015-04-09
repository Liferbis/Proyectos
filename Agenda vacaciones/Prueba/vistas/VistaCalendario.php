<?php 
require_once "header.php";
 ?>
<h1 class="text-center">Año 2015</h1>

<div id='contenido' class='row responsive'>
	<?php 
		$hoy=new Calendario();
		$hoy->getTodosMeses();
	?>
</div>
<?php 
include_once "pie.php";
?>