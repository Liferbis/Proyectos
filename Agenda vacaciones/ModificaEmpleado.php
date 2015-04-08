<?php 
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
								<select name="empleado" >
									<?php 
									$empleados=BD::CargaEmpleados();
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
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<button type="submit" name="emp" class="btn btn-success">MODIFICAR EL EMPLEADO</button>
							</div>
						</div>
					</tr>
				</form>
				<?php 
				if (isset($_POST["emp"])) {
					$empleado=BD::DameEmpleado($_POST["empleado"]);

					?>	
					<hr>

					<form action="" method="POST">

						<?php foreach ($empleado as $emple) { ?>
						<tr>
							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
									<h3>Codigo</h3>
								</div>
								<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
									<label><?php echo $emple->codigo; ?></label>
									<input type="hidden" name="cod" value="<?php echo $emple->codigo; ?>" id="input">
								</div>
							</div>
						</tr>
						<tr>
							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
									<h3>Nombre</h3>
								</div>
								<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
									<input type="text"  name="nombre" placeholder="
									<?php echo $emple->nombre; ?>
									">

					<!-- <input type="checkbox" value="nomb">
					<?php //echo $emple->nombre; ?> -->


				</div>
			</div>
		</tr>
		<tr>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<h3>DNI</h3>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<input type="text " name="dni" placeholder="
					<?php echo $emple->dni; ?>
					">('<?php echo $emple->dni; ?>')
				</div>
			</div>
		</tr>
		<tr>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<h3>1º Apellido</h3>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<input type="text"  name="apellido1" placeholder="
					<?php echo $emple->apellido1; ?>
					">('<?php echo $emple->apellido1; ?>')
				</div>
			</div>
		</tr>
		<tr>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<h3>2º Apellido </h3>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<input type="text"  name="apellido2"  placeholder="
					<?php echo $emple->apellido2; ?>
					">('<?php echo $emple->apellido2; ?>')
				</div>
			</div>
		</tr>
		<tr>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<h3>Localidad de trabajo</h3>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<input witype="text" width="60" name="localidad" placeholder="
					<?php echo $emple->localidad; ?>
					">('<?php echo $emple->localidad; ?>')
				</div>
			</div>
		</tr>
		<tr>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<h3>Telefono de contacto</h3>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

					<input type="text"  name="movil"placeholder="
					<?php echo $emple->movil; ?>
					">('<?php echo $emple->movil; ?>')

				</div>
			</div>
		</tr>
		<tr>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<h3>Saldo de dias de vacaciones</h3>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" >
					<input type="text" name="vacas" placeholder="
					<?php echo $emple->saldo; ?>
					">('<?php echo $emple->saldo; ?>')
				</div>
			</div>
		</tr>
		<tr>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<h3>Comentarios</h3>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" >
					<textarea class="form-control" name="comentario"  rows="3" placeholder="
					<?php echo $emple->comentarios; ?>
					">
				</textarea>
				<br>
				<label >('<?php echo $emple->comentarios; ?>')</label>

			</div>
		</div>
	</tr>
	<?php } ?>
	<tr>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<button type="submit" name="modifica" class="btn btn-success">MODIFICAR EL EMPLEADO</button>
		</div>
	</tr>
</form>
<hr>

<?php 
			if (isset($_POST["modifica"])) {
				echo "Nombre: ".$_POST["nombre"];
				echo "apellido1: ".$_POST["apellido1"];
				echo "apellido2: ".$_POST["apellido2"];
				if(BD::modificaEmpleado($_POST["cod"], $_POST["nombre"], $_POST["dni"], $_POST["apellido1"], $_POST["apellido2"],  $_POST["localidad"], $_POST["movil"], $_POST["vacas"], $_POST["comentario"])){
					echo "si";
			       //require_once "vistas/VistaTerminado.php";
				}else{
					echo "no";
			        ///require_once "vistas/VistaTerminadoE.php";
				}
			}
?>
</tbody>
</table>
			
</div>
</div>

<?php }else{ ?>  

		</tbody>
		</table>	

						
		</div>
		</div>
<?php 	} 
include_once "pie.php";
?>

