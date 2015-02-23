<?php 
require_once "header.php";
?>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" role="form">
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
	<tr>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<h3>Fecha Inicio</h3>
			</div>
			<div class="col-xs-12 col-sm4 col-md-4 col-lg-4">
				<input type="date" name="fechaInicio" class="form-control">
				<p>
					<div class="checkbox">
						Medio Dia
						<input type="checkbox" name="medio1">
					</div>
				</p>
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
				<input type="date" name="fechaFin" class="form-control" >
				<p>
					<div class="checkbox">
						Medio Dia
						<input type="checkbox" name="medio2">
					</div>
				</p>
			</div>
		</div>
	</tr>
	<hr>
	<tr >
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<h3>Tipo:</h3>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<select name="" id="input" class="form-control" >
					<option value="">-- Selecciona Tipo --</option>
					<option value="vacaciones">Vacaciones	</option>
					<option value="pr">Permiso Retribuido</option>
					<option value="pnr">Permiso no retribuido</option>
					<option value="bec">Baja enfermedad comun</option>
					<option value="bal">Baja accidente laboral</option>
				</select>
			</div>
		</div>
	</tr>
	<hr>
	<tr>
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			
		</div>
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
			<input type="submit" name="aceptar" value="Aceptar" class="btn btn-success"/>
			<input type="submit" name="acepsol" value="Aceptar y solicitar" class="btn btn-success"/>
			<a class="navbar-brand" ><input type="button" name="cancelar" value="Cancelar" class="btn btn-success"/></a>
			<button type="button" href="index.php" class="btn btn-success">button</button>
		</div>
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

		</div>

	</tr>
</form>
<?php if(isset($_POST["aceptar"])){ 
	$cod_emple=$_POST["empleado"];

	$emp=BD::DameEmpleado($cod_emple);
	foreach ($emp as $emple) {
		$nombre=$emple->nombre;
		$apellido1=$emple->apellido1;
	}
	if(ex)
	$fecha=date('Y-m-d');
	$ruta="C:/GestorDeVacaciones/".$nombre."_".$apellido1."_".$fecha;
	$folder=mkdir($ruta, 0600, true);
	if(!$folder){
		die('Fallo en la ruta de la carpeta');
	}else{
		die('Creado correctamente');
		require_once "informe.php";
	}
}
if(isset($_POST["acepsol"])){
	echo "aceptar y solicitar";
	require_once "informe.php";
}
?>
</tbody>
</table>					
</div>
</div>


<?php 
require_once "pie.php";
?>