<?php require_once "header.php" ?>
<?php require_once "libreria/PHPExcel/Classes/PHPExcel.php" ?>
<?php require_once "header.php" ?>
<?php //require_once "libreria/PHPExcel/Classes/PHPExcel.php" ?>

<div class="table-responsive">
	<table class="table table-hover" id='infoTabla' >
		<thead>
			<tr>
				<th colspan="15" id="infoTi">Gestor</th>
			</tr>
			<tr >
				<th colspan="2" id="info1" >Empleados</th>
				<th colspan="5" id="info2" >Datos</th>
				<th colspan="3" id="info3">Tipo</th>
				<th colspan="2" id="info4">Baja</th>
				<th id="info5">Información</th>
				<th colspan="2" id="info6">Responsable</th>

			</tr>
			<tr class="text-center">
				
				<th id="info1">Nombre</th>
				<th id="info1">Apellido</th>
				<th id="info2">Fecha Inicio</th>
				<th id="info2">Fecha Fin</th>
				<th id="info2">Dias Naturales</th>
				<th id="info2">Dias laborables</th>
				<th id="info2">Saldo</th>
				<th id="info3">vacaciones</th>
				<th id="info3">PerRetri</th>
				<th id="info3">PerNoRetri</th>
				<th id="info4">Bec</th>
				<th id="info4">Bal</th>
				<th id="info5">Comentarios</th>
				<th id="info6">Usuario</th>
				<th id="info6">Fecha</th>
			</tr>
		</thead>

		<tbody >
			<?php foreach ($empleados as $em) { ?>
			<tr class="text-center">
				<td id="info1R">
					<?php echo $em->nombre; ?>
				</td>
				<td id="info1R">
					<?php echo $em->apellido1; ?>
				</td>
				<td id="info2R">
					<?php  echo $em->FechaInicio; ?>
				</td>
			
				<td id="info2R">
					<?php  echo $em->FechaFin; ?>
				</td>
			
				<td id="info2R">
					<?php echo $em->dias_Natu; ?>
				</td>
			
				<td id="info2R">
					<?php echo $em->dias_lab; ?>
				</td>
				<td id="info2R">
					<?php  echo $em->SALDO_DIAS; ?>
				</td>
			
				<td id="info3R">
					<?php echo $em->vacaciones; ?>
				</td>
			
				<td id="info3R">
					<?php echo $em->PerRetri; ?>
				</td>
			
				<td id="info3R">
					<?php echo $em->PerNoRetri; ?>
				</td>
			
				<td id="info4R">
					<?php  echo $em->Bec; ?>
				</td>
			
				<td id="info4R">
					<?php echo $em->Bal; ?>
				</td>
			
				<td id="info5R">
					<?php echo $em->Comentarios; ?>
				</td>
			
				<td id="info6R">
					<?php echo $em->user_login; ?>
				</td>
				<td id="info6R">
					<?php echo $em->hoy; ?>
				</td>
			</tr>
		<?php } ?>
		</tbody>
	</table>

	<hr>

	<div class="row text-center">
		<a href="index.php?gestor=excel" style="color:white"><button type="submit" class="btn btn-success">Excel .xls</button></a>
		<a href="index.php" style="color:white"><button type="submit" class="btn btn-danger">Cancelar</button></a>
	</div>

<?php require_once "pie.php" ?>
