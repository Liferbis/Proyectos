<?php 
	if ( !isset($_SESSION["usuario"]) ) {
		header("Location: login.php");
	} else {

	include_once "header.php";
 ?>
	<div class="text-center">
		<h1  >Gestor de vacaciones y otros permisos</h1>
	
		<div id='contenido' class='row responsive'>
			<table id='table' class="table table-hover">
				<thead>
					<tr>
						<h1>Grupo Codelse</h1>
						<hr>
					</tr>
				</thead>
				<tbody id='tbody'>
					<form action="" method="POST" role="form">
					<tr>
						<div class="row ">
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<h3>Selecciona el empleado</h3>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<select  name="empleado" id="input" class="form-control" >
									<?php 
										$empleados=BD::CargaEmpleados();
										foreach ($empleados as $emple) { ?>
										<option  value="<?php echo $emple->codigo; ?>">
											<?php echo $emple->nombre." ".$emple->apellido1." ".$emple->apellido2; ?>
										</option>
									<?php } ?>	
								</select>
							</div>
						</div>
					</tr>
					<hr>
					<tr>
						<div class="row " >
							<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
								<h3>Opciones</h3>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
									<button type="submit" name="introducir"  class="btn btn-success">Introducir Vacaciones</button>
								</div>
								<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
									<button type="submit" name="consulta" class="btn btn-success">Consultar</button>
								</div>
							</div>
						</div>
					</tr>
					<hr>
					<?php if(isset($_POST["consulta"]) ){ ?>
					<tr>
						<form action="" method="POST" role="form">
							<div id="vista" class="row">
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
									<h3>Formato de vista</h3>
								</div>
								<div id="tipo" class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
									<select  class="form-control" >
											<option name="vista" value="calendario">
												Calendario
											</option>
											<option name="vista" value="informe">
												Informe
											</option>
									</select>
								</div>
							</div>
					</tr>
					<hr>
					<tr>
							<div class="row">
								<button type="submit" name="cargar" class="btn btn-success">Cargar</button>
							</div>
						</form>
					</tr>
					<hr>
					<?php }else if(isset($_POST["introducir"])){ 
						$cod_emple=$_POST["empleado"];
						require_once "MasVacacion.php";
					} ?>
				</tbody>
			</table>					
		</div>
	</div>
		

<?php 
	include_once "pie.php";
}
 ?>

