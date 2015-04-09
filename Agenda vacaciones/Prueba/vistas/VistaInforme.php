<?php require_once "header.php" ?>

<div class="text-center">
	<h1 class="text-center" >Informe de vacaciones y otros permisos</h1>
	
	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
           <span class="glyphicon glyphicon-chevron-down"></span>
           <strong>~ Ver codigo de los empleados ~</strong>
           <span class="glyphicon glyphicon-chevron-down"></span>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <table class="table table-hover">
			<thead>
				<tr class="text-center">
					<th class="text-center">
						Nombre y apellido
					</th>
					<th class="text-center">
						Código
					</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($empleados as $emple) { ?>
				<tr>
					<td>
						<?php echo $emple->nombre." ".$emple->apellido1." ".$emple->apellido2; ?>
					</td>
					<td>
						<?php echo $emple->codigo; ?>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
      </div>
    </div>
  </div>
</div>
	<form action="index.php" method="POST">
		<div class="row well">
			<h4 class="text-center">Seleccionando TODO </h4>	
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<input type="radio" name="excel" value="0" checked="checked">
					Generar TODO de TODOS
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<input type="radio" name="excel" value="1">
					Generar TODO de un empleado especifico
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<input type="int" name="num1" placeholder="codigo de empleado">
				</div>
			</div>

			<h4 class="text-center">Selección por tipo </h4>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					Seleccione tipo:
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<select name="tipo">
						<option>---- Seleccione tipo ----</option>
						<option value="vaca">Vacaciones</option>
						<option value="pnr">Permiso no retribuido</option>
						<option value="pr">Permiso retribuido</option>
						<option value="bec">Baja enfermedad comun</option>
						<option value="bal">Baja accidente laboral</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<input type="radio" name="excel" value="2">
					Generar tipo de TODOS
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<input type="radio" name="excel" value="3">
					Generar tipo de un empleado especifico
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<input type="int" name="num2" placeholder="codigo de empleado">
				</div>
			</div>
			</br>
			<h4 class="text-center">Selección por año</h4>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<input type="radio" name="excel" value="4">
					Generar año de TODOS
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<input type="int" name="anio1" placeholder="año de busqueda (YYYY)">
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<input type="radio" name="excel" value="5">
					Generar año de un empleado especifico
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<input type="int" name="anio2" placeholder="año de busqueda (YYYY)">
					<input type="int" name="num3" placeholder="codigo de empleado">
				</div>
			</div>
		</div>
		<div class="text-center">
			<button type="submit" name="generar" class="btn btn-success">Gernerar informe</button>
		</div>
	</form>
</div>
<?php require_once "pie.php" ?>
