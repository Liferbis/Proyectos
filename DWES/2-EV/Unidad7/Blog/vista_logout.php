<?php require_once "header.php"; ?>

	<form action="index.php" method="POST">
		<h3>¿Está seguro de que desea cerrar la sesión?</h3>

		<button type="submit" class="btn btn-primary" name="sesion" value="1">Si</button>

		<button type="submit" class="btn btn-primary" name="sesion" value="0">No</button>
	</form>

<?php require_once "pie.php"; ?>