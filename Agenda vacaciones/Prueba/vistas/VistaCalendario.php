<?php 
require_once "header.php";
 ?>

<h1 class="text-center">
	<span  class="glyphicon glyphicon-menu-left" ></span>
	Año 2015
	<span id="gliphicon" class="glyphicon glyphicon-menu-right" ></span>
</h1>

<div id='contenido' class='row responsive'>
	<?php 
		$hoy=new Calendario();
		$hoy->getTodosMeses();
	?>
</div>
<?php 
include_once "pie.php";
?>