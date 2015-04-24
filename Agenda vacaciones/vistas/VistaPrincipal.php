<?php 
include_once "header.php";
?>
<div class="text-center">
	<h1>Gestor de vacaciones y otros permisos</h1>
	
	<div id='contenido' class='row responsive'>

		<h1>Grupo Codelse</h1>

		<form action="index.php" method="POST" role="form">
			<div class="row " >
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-12">
					<h3>Opciones</h3><br>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<button type="submit" name="introducir"  class="btn btn-success">Introducir Vacaciones</button>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<button type="submit" name="consultar" class="btn btn-success">Consultar</button>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<button type="submit" name="genexcel" class="btn btn-success">Excel</button>
				</div>
			</div>
		</form>
	</div>	
</div>		


<?php 
include_once "pie.php";
?>