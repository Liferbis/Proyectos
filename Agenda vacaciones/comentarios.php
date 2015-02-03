<?php 

http://www.desarrolloweb.com/articulos/1262.php


	include_once "header.php";
 ?>
	<div class="text-center">
	
		<div id='contenido' class='row responsive'>
			<table id='table' class="table table-hover">
				<thead>
					<tr>
						<h1>Escoge el empleado a modificar</h1>
						<hr>
					</tr>
				</thead>
				<tbody>
					<form action="" method="post" role="form">
						<tr id='tbody'>
							<div class="row ">
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
									<h3>Empleado ....</h3>
								</div>
								<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
									<select  id="input" class="form-control" >
										<?php 
											$empleados=BD::CargaEmpleados();
											foreach ($empleados as $emple) { 
												$coment=$emple->;
										?>
											<option name="empleado" value="<?php echo $emple->codigo; ?>">
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
						<tr>
							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
									<h3>Nombre</h3>
								</div>
								<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
									<input type="text"  name="nombre" required placeholder="Nombre">
								</div>
							</div>
						</tr>
						
						<hr>
						<div class="row">
							<button type="submit" class="btn btn-success">MODIFICAR</button>
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