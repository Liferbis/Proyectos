<?php 
include_once "header.php";
?>
<div class="text-center">
	
	<div id='contenido' class='row responsive'>
		<table id='table' class="table table-hover">
			<thead>
				<h1 class="text-center row well">Modificación de credenciales</h1>
			</thead>
			<tbody>
				<form action="index.php" method="POST">
					<tr>
						<div class="row well">
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<h3>Nombre de usuario: </h3>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<h3><?php echo $sesion ?></h3>
							</div>
						</div>
					</tr>
					<tr>
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<h3>Contraseña:</h3>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<input type="password" name="cod1" >
							</div>
						</div>
					</tr>
					<tr>
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<h3>Nueva Contraseña:</h3>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<input type="password" name="cod2" >
							</div>
						</div>
					</tr>
					<tr>
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<h3>Repita la nueva contraseña:</h3>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<input type="password" name="cod3" >
							</div>
						</div>
					</tr>
					<br><hr>
					<tr>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<button type="submit" name="nlog" class="btn btn-success">MODIFICAR CREDENCIALES</button>
							<button type="submit" name="cancelar" class="btn btn-danger"/>Cancelar</button>
						</div>
					</tr>
				</form>
				
			</tbody>
		</table>	
	</div>
</div>

<?php 
include_once "pie.php";
?>
