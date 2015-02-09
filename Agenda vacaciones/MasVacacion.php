<?php 
	include_once "header.php";
 ?>
	<div class="text-center">
		<h1  >Introducir vacaciones y otros permisos</h1>
	
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
									<select name="empleado" id="input" class="form-control" >
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
						<!-- <tr>
							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
									<h3>Fecha Inicio</h3>
								</div>
								<div class="col-xs-12 col-sm4 col-md-4 col-lg-4">
									<input type="date" name="" id="input" class="form-control" value="" required="required" title="">
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
									<input type="date" name="" id="input" class="form-control" value="" required="required" title="">
								</div>
							</div>
						</tr>
						<hr>
						<tr >
							<div class="group-radio" >
								<div class="row">
									<div  class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
										<h3>Tipo: </h3>
									</div>
									<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
										Vacaciones										
										<input type="radio" name="tipo" id="input" value="v" checked="checked">	
									</div>
									<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
										Permiso Retribuido
										<input type="radio" name="tipo" id="input" value="pr" >
									</div>
								</div>	
								<div  class="row">
										<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
											Permiso NO Retribuido
											<input type="radio" name="tipo" id="input" value="pnr" >
										</div>
										<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
											Baja Enfermedad Comun
											<input type="radio" name="tipo" id="input" value="bec" >
										</div>
										<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
											Baja accidente de trabajo
											<input type="radio" name="tipo" id="input" value="bat" >
										</div>
								</div>
							</div>	
						</tr>
						<hr> -->
						<tr>
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<button type="submit" name="aceptar" value="0" class="btn btn-success">Aceptar</button>
								<button type="submit" name="aceptar" value="1" class="btn btn-success">Aceptar y solicitar</button>
								<button type="submit" name="aceptar" value="2" class="btn btn-success">Cancelar</button>
							</div>
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								
							</div>
							
						</tr>
					</form>
					<?php if(isset($_POST["aceptar"])){ 
							if($_POST["aceptar"]==0){
								
								$cod_emple=$_POST["empleado"];
								echo "cod_emple: ".$cod_emple;

								$emp=BD::DameEmpleado($cod_emple);
								foreach ($emp as $emple) {
									$nombre=$emple->nombre;
									$apellido1=$emple->apellido1;
								}
								$fecha=date('Y-m-d');
								$ruta="C:\Users\l.fernandez\Desktop\Pruebas\ ".$nombre."_".$apellido1."_".$fecha;
								if(!mkdir($ruta, 0600, true)){
									die('Fallo en la ruta de la carpeta');
								}else{
									die('Creado correctamente');
								}
							}else if($_POST["aceptar"]==1){
								header("Location: informe.php");
							}else if ($_POST["aceptar"]==2){
								header("Location: index.php");
							}

					} ?>

				<!-- 	<?php //if(isset($_POST["consulta"]) ){ ?>
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
						
					</tr>
					<hr> -->
					
				</tbody>
			</table>					
		</div>
	</div>
		

<?php 
	include_once "pie.php";
 ?>