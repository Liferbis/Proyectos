<div class="text-center">
	
	<div id='contenido' class='row responsive'>
		<table id='table' class="table table-hover">
			<thead>
				<tr>
					<h2>Datos del empleado</h2>
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
		</div>
	</div>
</tr>
<tr>
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<h3>Nombre</h3>
		</div>
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
			<input type="text"  name="nombre" required placeholder="
			<?php echo $emple->nombre; ?>
			">('<?php echo $emple->nombre; ?>')
		</div>
	</div>
</tr>
<tr>
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<h3>DNI</h3>
		</div>
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
			<input type="text " required name="dni" placeholder="
			<?php echo $emple->dni; ?>
			">('<?php echo $emple->dni; ?>')
		</div>
	</div>
</tr>
<tr>
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<h3>1º Apellido</h3>
		</div>
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
			<input type="text"  name="apellido1" required placeholder="
			<?php echo $emple->apellido1; ?>
			">('<?php echo $emple->apellido1; ?>')
		</div>
	</div>
</tr>
<tr>
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<h3>2º Apellido </h3>
		</div>
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
			<input type="text"  name="apellido2" required placeholder="
			<?php echo $emple->apellido2; ?>
			">('<?php echo $emple->apellido2; ?>')
		</div>
	</div>
</tr>
<tr>
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<h3>Localidad de trabajo</h3>
		</div>
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
			<input witype="text" width="60" name="localidad" required placeholder="
			<?php echo $emple->localidad; ?>
			">('<?php echo $emple->localidad; ?>')
		</div>
	</div>
</tr>
<tr>
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<h3>Telefono de contacto</h3>
		</div>
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

			<input type="text"  name="movil" required placeholder="
			<?php echo $emple->movil; ?>
			">('<?php echo $emple->movil; ?>')

		</div>
	</div>
</tr>
<tr>
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<h3>Saldo de dias de vacaciones</h3>
		</div>
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" >
			<input type="text" name="vacas" required placeholder="
			<?php echo $emple->saldo; ?>
			">('<?php echo $emple->saldo; ?>')
		</div>
	</div>
</tr>
<tr>
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<h3>Comentarios</h3>
		</div>
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" >
			<textarea class="form-control" name="comentario" required rows="3" placeholder="
			<?php echo $emple->comentarios; ?>
			">
			</textarea>
			<br>
			<label >('<?php echo $emple->comentarios; ?>')</label>
			
</div>
</div>
</tr>
<?php } ?>
<tr>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<button type="submit" name="modifica" class="btn btn-success">MODIFICAR EL EMPLEADO</button>
	</div>
</tr>
<hr>

</form>
</tbody>
		</table>	
	</div>
</div>
