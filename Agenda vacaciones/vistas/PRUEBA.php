<?php 
//require_once "include/BaseDeDatos.php"
 ?>
<?php require_once "header.php" ?>
<?php //require_once "libreria/PHPExcel/Classes/PHPExcel.php" ?>

<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th class="text-center" colspan="6"><h3>Vacaciones</h3></th>
			</tr>
			<tr>
				<th colspan="2">Empleados</th>

				<th>Fecha Inicio</th>
				<th>Fecha Fin</th>
				<th>Dias Naturales</th>
				<th>Dias laborables</th>
				<th>Saldo</th>
				<th>vacaciones</th>
				<th>PerRetri</th>
				<th>PerNoRetri</th>
				<th>Bec</th>
				<th>Bal</th>
				<th>Comentarios</th>
				<th>Usuario</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($empleados as $em) { ?>
			<tr>
				<td>
					<?php echo $em->nombre; ?>
				</td>
				<td>
					<?php echo $em->apellido1; ?>
				</td>
				<td>
					<?php  echo $em->FechaInicio; ?>
				</td>
			
				<td>
					<?php  echo $em->FechaFin; ?>
				</td>
			
				<td>
					<?php echo $em->dias_Natu; ?>
				</td>
			
				<td>
					<?php echo $em->dias_lab; ?>
				</td>
			
				<td>
					<?php  echo $em->aumentoDias; ?>
				</td>
			
				<td>
					<?php  echo $em->SALDO_DIAS; ?>
				</td>
			
				<td>
					<?php echo $em->vacaciones; ?>
				</td>
			
				<td>
					<?php echo $em->PerRetri; ?>
				</td>
			
				<td>
					<?php echo $em->PerNoRetri; ?>
				</td>
			
				<td>
					<?php  echo $em->Bec; ?>
				</td>
			
				<td>
					<?php echo $em->Bal; ?>
				</td>
			
				<td>
					<?php echo $em->Comentarios; ?>
				</td>
			
				<td>
					<?php echo $em->user_login; ?>
				</td>
			</tr>
		<?php } ?>
		</tbody>
	</table>


































 


