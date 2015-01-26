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
					<tr id='tbody'>
						<div class="row ">
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<h3>Ver vacaciones de ....</h3>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<select name="empleado" id="input" class="form-control" >
									<option value="emple">empleado1</option>
									<option value="emple">empleado2</option>
								</select>
							</div>
						</div>
					</tr>
					<hr>
					<tr>
						<diw class="row">
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<h3>Ver vacaciones de ....</h3>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<select name="empleado" id="input" class="form-control" >
									<option value="emple">empleado1</option>
									<option value="emple">empleado2</option>
								</select>
							</div>
						</diw>
					</tr>
					<hr>
				</tbody>
			</table>	
				
				
				

				<form method="post">
					<input type="month" name="year">
					<input type="submit">		
				</form>
			</div>
		</div>
		

<?php 
	include_once "pie.php";
 ?>

