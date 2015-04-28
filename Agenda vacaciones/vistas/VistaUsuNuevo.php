<?php
require_once "header.php"; 
?>

<div class="text-center">
	
	<div id='contenido' class='row responsive'>
		<table id='table' class="table table-hover">
			<thead>
				<tr>
					<h1>Introduce los datos del nuevo empleado</h1>
					<hr>
				</tr>
			</thead>
			<tbody>
				<form action="index.php" method="POST" role="form">
				<tr>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<h3>Nombre de usuario</h3>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
							<input type="text"  name="usuario" placeholder="Nombre de usuario">
						</div>
					</div>
				</tr>
				<tr>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<h3>DNI</h3>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
							<input type="text" name="dni" placeholder="DNI">
						</div>
					</div>
				</tr>
				<tr>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<h3>Contraseña</h3>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
							<input type="password"  name="ctv" placeholder="Contraseña">
						</div>
					</div>
				</tr>
				<tr>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<h3>Repita la contraseña</h3>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
							<input type="password"  name="ctv1" placeholder="Repita la contraseña">
						</div>
					</div>
				</tr>
				<hr>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<input type="submit" name="nuevoN" value="Crear" class="btn btn-success"/>
					<input type="submit" name="cancelar" value="Cancelar" class="btn btn-danger"/>
				</div>
			</form>

			<?php 
			include_once "pie.php";
			?>