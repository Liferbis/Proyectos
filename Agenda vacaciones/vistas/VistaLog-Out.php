<?php 
require_once "header.php"; 
?>

<div class="row  text-center">
	<h1>Gestor de vacaciones y otros permisos</h1>
	<h1>Grupo Codelse</h1>
	<form action="index.php" method="post">
		<h3>¿Está seguro de que desea cerrar la sesión?</h3>
		<button type="submit" class="btn btn-success" name="sesion" value="1">Si</button>
		<button type="submit" class="btn btn-danger" name="sesion" value="0">No</button>
	</form>
</div>

<?php 
require_once "pie.php";
 ?>