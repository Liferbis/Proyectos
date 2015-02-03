<?php 
	include_once "header.php";
 ?>
	<div class="text-center">
		<h1  >Bienvenido al gestor de vacaciones</h1>
	
		<div id='contenido' class='row responsive'>
			<table id='table' class="table table-hover">
				<thead>
					<tr>
						<h1>¿Qué deseas hacer?</h1>
						<hr>
					</tr>
				</thead>
				<tbody>
					<form method="post">
						<tr id='tbody'>
							<div class="row ">
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
									<h3>Ver vacaciones de ....</h3>
								</div>
								<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
									<select  id="input" class="form-control" >
										<?php 
											$empleados=BD::CargaEmpleados();
											foreach ($empleados as $emple) { ?>
											<option name="empleado" value="<?php echo $emple->codigo; ?>">
												<?php echo $emple->nombre." ".$emple->apellido1." ".$emple->apellido2; ?>
											</option>
										<?php } ?>	
									</select>
								</div>
							</div>
						</tr>
						<hr>
						<tr>
							<div id="vista" class="row">
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
									<h3>Formato de vista</h3>
								</div>
								<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
									<select id="input" class="form-control" >
										<option name="vista" value="calendario">Calendario</option>
										<option name="vista" value="informe">Informe</option>
									</select>
								</div>
							</div>
						</tr>
						<hr>
						<div class="row">
							<button type="submit" class="btn btn-success">Cargar</button>
						</div>
					</form>
				</tbody>
			</table>	
			<div class="row">
				<?php 
					if(isset($_POST["empleado"]) && isset($_POST["vista"])){
						echo $_POST["empleado"]."---".$_POST["vista"];
						
					}
				 ?>
			</div>				
			</div>
		</div>
		

<?php 
	include_once "pie.php";
 ?>

