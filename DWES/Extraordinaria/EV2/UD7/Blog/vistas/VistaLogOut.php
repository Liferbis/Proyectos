<?php 
require_once "head.php";
 ?>
<body>
	<div class="text-center well">
		<h1 class="text-center">¿Esta seguro que desea cerrar la sesion?</h1>

		<form action="index.php" method="POST" role="form">
			<button type="submit" name="sesion" value="1" class="btn btn-success">Si</button>
			<button type="submit" name="sesion" value="0" class="btn btn-success">No</button>
		</form>
	</div>
<?php 
require_once "pie.php";
 ?>