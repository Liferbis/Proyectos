<?php 
include_once "header.php";
?>
<div class="text-center">
	
	<div id='contenido' class='row responsive'>
		<table id='table' class="table table-hover">
			<thead>
				<tr>
					<h2>Datos del empleado</h2><small>Si no quiere modificar los datos, marque la casilla<br>En caso de no marcar ni escribir, el campo queda vacio</small>
					<hr>
				</tr>
			</thead>
			<tbody>


<form action="index.php" method="POST">

<?php foreach ($empleado as $emple) { ?>
<tr>
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<h3>Codigo</h3>
		</div>
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
			<label><?php echo $emple->codigo; ?></label>
			<input type="hidden" name="cod" value="<?php echo $emple->codigo; ?>">
		</div>
	</div>
</tr>
<tr>
	<div class="row well">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<h3>Nombre</h3>
		</div>
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
			<input type="text" name="nombre" placeholder="<?php echo $emple->nombre; ?>">
			<br>
			<input type="checkbox" name="c1">
			<?php echo $emple->nombre; ?> 
		</div>
	</div>
</tr>
<tr>
	<div class="row well">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<h3>DNI</h3>
		</div>
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
			<input type="text " name="dni" placeholder="<?php echo $emple->dni; ?>">
			<br>
			<input type="checkbox" name="c2">
			<?php echo $emple->dni; ?>
		</div>
	</div>
</tr>
<tr>
	<div class="row well">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<h3>1º Apellido</h3>
		</div>
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
			<input type="text"  name="apellido1" placeholder="<?php echo $emple->apellido1; ?>">
			<br>
			<input type="checkbox" name="c3">
			<?php echo $emple->apellido1; ?>
		</div>
	</div>
</tr>
<tr>
	<div class="row well">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<h3>2º Apellido </h3>
		</div>
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
			<input type="text"  name="apellido2"  placeholder="<?php echo $emple->apellido2; ?>">
			<br>
			<input type="checkbox" name="c4">
			<?php echo $emple->apellido2; ?>
		</div>
	</div>
</tr>
<tr>
	<div class="row well">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<h3>Localidad de trabajo</h3>
		</div>
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
			<input type="text" name="localidad" placeholder="<?php echo $emple->localidad; ?>">
			<br>
			<input type="checkbox" name="c5">
			<?php echo $emple->localidad; ?>
		</div>
	</div>
</tr>
<tr>
	<div class="row well">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<h3>Telefono de contacto</h3>
		</div>
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

			<input type="text" name="movil" placeholder="<?php echo $emple->movil; ?>">
			<br>
			<input type="checkbox" name="c6">
			<?php echo $emple->movil; ?>

		</div>
	</div>
</tr>
<tr>
	<div class="row well">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<h3>Saldo de dias de vacaciones</h3>
		</div>
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" >
			<input type="text" name="vacas" placeholder="<?php echo $emple->saldo; ?>">
			<br>
			<input type="checkbox" name="c7">
			<?php echo $emple->saldo; ?>
		</div>
	</div>
</tr>
<tr>
	<div class="row well">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<h3>Comentarios</h3>
		</div>
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" >
			<textarea class="form-control" name="comentario"  rows="3" placeholder="<?php echo $emple->comentarios; ?>">
			</textarea>
			<br>
			<label >
				<input type="checkbox" name="c8">
				<?php echo $emple->comentarios; ?>
			</label>
			
</div>
</div>
</tr>
<?php } ?>
<tr>

	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<button type="submit" name="modifica" class="btn btn-success">MODIFICAR EL EMPLEADO</button>
		<button type="submit" name="cancelar" class="btn btn-danger"/>Cancelar</button>
	</div>
</tr>
</form>
<hr>


</tbody>
		</table>	
	</div>
</div>

<?php 
include_once "pie.php";
?>
