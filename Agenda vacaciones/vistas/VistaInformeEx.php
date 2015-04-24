<?php 
include_once "header.php";
?>
<div class="text-center">
	
	<table id='table' class="table table-hover">
		<thead>
			<tr>
				<h1>Escoge la opción para generar el informe</h1>
				<hr>
			</tr>
		</thead>
		<tbody>
			<form action="index.php" method="POST" role="form">
				<tr id="infoTi1">
					<td  colspan="2">
						<label>Seleccionando TODO</label>
					</td>
				</tr>
				<tr id="info1R">
					<td>De Todos</td>
					<td>De empleados especificos</td>
				</tr>
				<tr id="info1R" >
					<td>
						<div class="input-group">
							<span class="input-group-addon">
								<input type="checkbox" name="e0" aria-label="...">
							</span>
							<input type="text" disabled="true" class="form-control" value="Generar TODO de TODOS">
						</div>
					</td>
					<td>
						<div class="input-group">
							<span class="input-group-addon">
								<input type="checkbox" name="e1" aria-label="...">
							</span>
							<select  name="num1" id="input" class="form-control" required>
								<option  value=" "> -- Seleciona un empleado -- </option>
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
							<!-- <input type="text" class="form-control" aria-label="..."> -->
						</div><!-- /input-group -->
					</td>
				</tr>
				<tr><td></td></tr>
				<tr id="infoTi2" >
					<td colspan="2">
						<label>Selección por tipo</label>
					</td>
				</tr>

				<tr id="info2R" >
					<td colspan="2">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<select name="tipo" class="form-control">
								<option class="" >---- Seleccione tipo ----</option>
								<option class="text-center" value="vaca">Vacaciones</option>
								<option class="text-center" value="PerNoRetri">Permiso no retribuido</option>
								<option class="text-center" value="PerRetri">Permiso retribuido</option>
								<option class="text-center" value="Bec">Baja enfermedad comun</option>
								<option class="text-center" value="Bal">Baja accidente laboral</option>
							</select>
						</div>
					</td>
				</tr>
				<tr id="info2R" >
					<td>De Todos</td>
					<td>De empleados especificos</td>
				</tr>
				<tr id="info2R" >
					<td>
						<div class="input-group">
							<span class="input-group-addon">
								<input type="checkbox" name="e2" >
							</span>
							<input type="text" disabled="true" class="form-control" value="Generar TIPO de TODOS" >
						</div>
					</td>
					<td>
						<div class="input-group">
							<span class="input-group-addon">
								<input type="checkbox" name="e3" aria-label="...">
							</span>
							<select  name="num2" id="input" class="form-control" required>
								<option  value=" "> -- Seleciona un empleado -- </option>
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
							<!-- <input type="text" class="form-control" aria-label="..."> -->
						</div><!-- /input-group -->
					</td>
				</tr>
				<tr><td></td></tr>
				<tr  id="infoTi3" >
					<td colspan="2">
						<label>Selección por AÑO</label>
					</td>
				</tr>
				<tr id="info3R" >
					<td>De Todos</td>
					<td>De empleados especificos</td>
				</tr>
				<tr id="info3R" >
					<td>
						<div class="input-group">
							<span class="input-group-addon">
								<input type="checkbox" name="e4" >
							</span>
							<input type="text" name="anio1" class="form-control" placeholder="Introduce el año" aria-label="...">
						</div>
					</td>
					<td>
						<div class="input-group">
							<span class="input-group-addon">
								<input type="checkbox" name="e5" aria-label="...">
							</span>
							<input type="text" name="anio2" class="form-control" placeholder="Introduce el año">
							<select  name="num3" id="input" class="form-control" required>
								<option  value=" "> -- Seleciona un empleado -- </option>
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
							<!-- <input type="text" class="form-control" aria-label="..."> -->
						</div><!-- /input-group -->
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<button type="submit" name="generarE" class="btn btn-success">Gernerar excel</button>
					</td>
				</tr>
			</form>
		</tbody>
	</table>
</div>
<?php require_once "pie.php" ?>