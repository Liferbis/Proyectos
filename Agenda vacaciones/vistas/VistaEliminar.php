<?php 
include_once "header.php";
?>
<div class="text-center">
	
	<div id='contenido' class='row responsive'>
		<table id='table' class="table table-hover">
			<thead>
				<tr>
					<h1>Escoge al empleado</h1>
					<hr>
				</tr>
			</thead>
			<tbody>
				<tr id='tbody'>
					<div class="row ">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<h3>Empleado ....</h3>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
							<form action="index.php" method="POST">
							<select  name="empleado" id="input" class="form-control" >
								<option name="empleado" value="0"> ---- Seleccione empleado ---- </option>
								
								<?php 
								
								foreach ($empleados as $emple) { 
									?>
									
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
				<hr>
				<tr >
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button type="submit" name="borra" class="btn btn-success">Borrar</button>
						<button type="submit" name="cancelar" class="btn btn-danger"/>Cancelar</button>
					</div>
									</form>
				</tr>
</tbody>
		</table>	
	</div>
</div>


<?php 
include_once "pie.php";
?>