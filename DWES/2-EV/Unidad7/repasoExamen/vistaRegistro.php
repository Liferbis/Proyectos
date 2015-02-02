<?php include_once "head.php" ?>
<div id="cuerpo"class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<form action="index.php" method="POST" role="form">
			<h3 id="titulo">Registo de mascotas</h3>

			<div class="form-group">
				<label>Nombre</label>
				<input type="text" name="nombre" class="form-control" placeholder="Nombre de la mascota">
			</div>

			<div class="form-group">
				<label>Raza</label>
				<input type="text" name="raza" class="form-control" placeholder="Raza de la mascota">
			</div>

			<div class="form-group">
				<label>Fecha de nacimiento</label>
				<input type="date" name="fecha" class="form-control" placeholder="Fecha de nacimiento de la mascota">
			</div>
			
			<div class="form-group">
				<label>Observaciones</label>
				<input rows="4" cols="50" type="texarea" name="observaciones" class="form-control" placeholder="Observaciones">
			</div>
			
			<button type="submit" name="envio" value="1" class="btn btn-primary">Registrar</button>
			<button type="submit" name="envio" value="0" class="btn btn-danger">Cancelar</button>
		</form>
	</div>
</div>

<?php include_once "pie.php" ?>