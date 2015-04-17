<?php 
include_once "header.php";
?>
<div class="text-center">
	<h1>Gestor de vacaciones y otros permisos</h1>
	
	<div id='contenido' class='row responsive'>
		<table id='table' class="table table-hover">
			<thead>
				<tr>
					<h1>Grupo Codelse</h1>
					<hr>
				</tr>
			</thead>
			<tbody id='tbody'>
				<hr>
				<tr>
					<form action="index.php" method="POST" role="form">
						<div class="row " >
							<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
								<h3>Opciones</h3>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
									<button type="submit" name="introducir"  class="btn btn-success">Introducir Vacaciones</button>
								</div>
								<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
									<button type="submit" name="consultar" class="btn btn-success">Consultar</button>
								</div>
							</div>
						</div>
					</form>
				


<?php 
include_once "pie.php";
?>