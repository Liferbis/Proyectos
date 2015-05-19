<?php 
require_once "head.php";
?>
<body>
	<div class="text-center well">
		<h1 class="text-center">Registro de mascotas</h1>

		<form action="index.php" method="POST" role="form">
			<br>
			<div class="form-group">
				<label for="">Nombre</label>
				<input type="text" name="nombre" class="form-control" placeholder="Nombre">
			</div>
			<br>
			<label for="">Cliente</label>
			<select name="cliente" class="form-control" required="required">
				<option value="">-- Seleccione un cliente --</option>
				<?php foreach ($clientes as $c) { ?>
					<option value="<?php echo $c->id ?>"><?php echo $c->nombre ?></option>
				<?php } ?>
			</select>
			<br>
			<div class="form-group">
				<label for="raza">Raza</label>
				<input type="text" name="raza" class="form-control"  placeholder="Raza">
			</div>
			<br>
			<label for="">Especie: </label>
			<select name="especie" class="form-control" required="required">
				<option value="">-- Seleccione una especie --</option>
				<option value="Gato">Gato</option>
				<option value="Perro">Perro</option>
			</select>
			<br>
			<div class="form-group">
				<label for="raza">Fecha de nacimiento</label>
				<input type="date" name="fech" id="input" class="form-control" required="required" >
			</div>
			<br>
			<div class="form-group">
				<label for="">Historial: </label>
				<textarea class="form-control" name="historial" rows="3">Introduce el historial de tu mascota
				</textarea><br>
			</div>
			<button type="submit" name="regis" class="btn btn-success">Registrar!</button>
		</form>
	</div>




<?php 
require_once "pie.php";
 ?>