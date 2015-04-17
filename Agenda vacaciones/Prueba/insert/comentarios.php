<?php 

// http://www.desarrolloweb.com/articulos/1262.php


	include_once "header.php";
 ?>
	<div class="text-center">
	
		<div id='contenido' class='row responsive'>
			<h1>Escoge el empleado a modificar</h1>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<div class="table-responsive">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Codigo</th>
									<th>Nombre y apellidos</th>
									<th> Comentario</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									$empleados=BD::CargaEmpleados();
									foreach ($empleados as $emple) { 
								?>
								<tr>
									<td>
										<?php echo $emple->codigo; ?>
									</td>
									<td>
										<?php echo $emple->nombre." ".$emple->apellido1." ".$emple->apellido2; ?>
									</td>
									<td>
										<?php echo $emple->comentarios; ?>
									</td>
								</tr>
									<?php 
										}
								 ?>
							</tbody>
						</table>
					</div>	
				</div>					
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<form action="" method="POST" role="form">
						<legend>Introduce los datos del empleado</legend>
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<h3>Codigo</h3>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<input type="int"  name="codigo" required placeholder="Codigo">
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<h3>Nuevo comentario</h3>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<input type="text"  name="comen" required placeholder="Nuevo omentario">
							</div>
						</div>
						<button type="submit" class="btn btn-primary">Modificar</button>
					</form>
				</div>				
				
				<?php 
					if(isset($_POST["empleado"]) && isset($_POST["vista"])){
						echo $_POST["empleado"]."---".$_POST["vista"];
						
					}
				 ?>	

			</div>
		</div>
		

<?php 
	include_once "pie.php";
 ?>