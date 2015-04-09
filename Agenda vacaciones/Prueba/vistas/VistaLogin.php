<?php 
include_once "header.php";
?>
<div class="text-center">
	
	<div id='contenido' class='row responsive'>
		<table id='table' class="table table-hover">
			<thead>
				<tr>
					<h1>Verificación de identidad</h1>
					<hr>
				</tr>
			</thead>
			<tbody>
				<tr>
					<div class="row well">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<h3>Nombre de usuario</h3>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
							<input type="text" name="nombre" placeholder="Nombre de usuario">
						</div>
					</div>
				</tr>
				<tr>
					<div class="row well">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<h3>Introduzca la contraseña</h3>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
							<input type="text" name="ctv" placeholder="Introduzca la contraseña">
						</div>
					</div>
				</tr>
				<hr>
				<tr >
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button type="submit" name="login" class="btn btn-success">Logueate!</button>
					</div>
				</tr>
			</form>

		</tbody>
	</table>	
	<div class="text-center">
	<small>En caso de pérdida u olvido de credenciales consulte con el gestor <a href="tel:+34658412862">Lidia Fernández</a></small>
</div>
</div>
</div>


<?php 
include_once "pie.php";
?>