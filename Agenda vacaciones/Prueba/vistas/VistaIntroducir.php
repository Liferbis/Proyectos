<?php 
require_once "header.php";
?>
<form action="index.php" method="POST" role="form">
	<tr>
		<div class="row ">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<h3>Selecciona el empleado</h3>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<select  name="empleado" id="input" class="form-control" >
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
</tr>
<tr>
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<h3>Fecha Inicio</h3>
		</div>
		<div class="col-xs-12 col-sm4 col-md-4 col-lg-4">
			<input type="date" name="fechaInicio" class="form-control">
			<p>
				<div class="checkbox">
					Medio Dia
					<input type="checkbox" name="medio1">
				</div>
			</p>
		</div>
	</div>
</tr>
<hr>
<tr>
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<h3>Fecha Fin</h3>
		</div>
		<div class="col-xs-12 col-sm4 col-md-4 col-lg-4">
			<input type="date" name="fechaFin" class="form-control" >
			<p>
				<div class="checkbox">
					Medio Dia
					<input type="checkbox" name="medio2">
				</div>
			</p>
		</div>
	</div>
</tr>
<hr>
<tr >
	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<h3>Tipo:</h3>
		</div>
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			<select name="" id="input" class="form-control" >
				<option value="">-- Selecciona Tipo --</option>
				<option value="vacaciones">Vacaciones	</option>
				<option value="pr">Permiso Retribuido</option>
				<option value="pnr">Permiso no retribuido</option>
				<option value="bec">Baja enfermedad comun</option>
				<option value="bal">Baja accidente laboral</option>
			</select>
		</div>
	</div>
</tr>
<hr>
<tr>
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<input type="submit" name="aceptar" value="Aceptar" class="btn btn-success"/>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<input type="submit" name="acepsol" value="Aceptar y solicitar" class="btn btn-success"/>
	</div>
</tr>
</form>
</tbody>
</table>					
</div>
</div>
<?php 
require_once "pie.php";
?>
