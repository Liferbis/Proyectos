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
			<h3>Aumentar o Disminucion de dias</h3>
		</div>
		<div class="col-xs-12 col-sm4 col-md-4 col-lg-4">
			<input type="number" name="num" class="form-control" >
		</div>
	</div>
	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<h3>Comentario: </h3>
		</div>
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			<textarea class="form-control" name="comentario" rows="3">
			</textarea><br>
		</div>
	</div> 
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<input type="submit" name="aumento" value="Aceptar" class="btn btn-success"/>
		<input type="submit" name="cancelar" value="Cancelar" class="btn btn-danger"/>
	</div>
</form>					
</div>
<?php 
require_once "pie.php";
?>