<?php 
include_once "header.php";
?>
<div class="text-center">
<form action="index.php" method="POST" role="form">

		<div class="row ">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<h3>Selecciona el empleado</h3>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<select  name="empleado" id="input" class="form-control" required>
					<option  value=" "> -- Seleciona un empleado -- </option>
					<?php 
					foreach ($empleados as $emple) { ?>
					<option  value="<?php echo $emple->codigo; ?>">
						<?php echo $emple->nombre." ".$emple->apellido1." ".$emple->apellido2; ?>
					</option>
					<?php 
				}
				?>		
			</select>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<h3>Fecha Inicio</h3>
		</div>
		<div class="col-xs-12 col-sm4 col-md-4 col-lg-4">
			<input type="date" name="fechaI" class="form-control" required>
			<p>
				<div class="checkbox">
					Medio Dia
					<input type="checkbox" value="1" name="medio1">
				</div>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<h3>Fecha Fin</h3>
		</div>
		<div class="col-xs-12 col-sm4 col-md-4 col-lg-4">
			<input type="date" name="fechaF" class="form-control" required>
			<p>
				<div class="checkbox">
					Medio Dia
					<input type="checkbox" name="medio2">
				</div>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<h3>Tipo:</h3>
		</div>
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			<select name="tipe" id="input" class="form-control" required>
				<option>-- Selecciona Tipo --</option>
				<option value="vacaciones">Vacaciones</option>
				<option value="PerRe">Permiso Retribuido</option>
				<option value="PerNoRe">Permiso no retribuido</option>
				<option value="bec">Baja enfermedad comun</option>
				<option value="bal">Baja accidente laboral</option>
			</select>
		</div>
	</div> 
	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<h3>Comentario: </h3>
		</div>
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			<textarea class="form-control" name="comentario" required rows="3">
			</textarea><br>
		</div>
	</div> 
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<input type="submit" name="aceptar" value="Aceptar" class="btn btn-success"/>
		<input type="submit" name="cancelar" value="Cancelar" class="btn btn-danger"/>
	</div>
</form>					
</div>
<?php 
require_once "pie.php";
?>
