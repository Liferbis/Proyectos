<?php 
require_once "../include/BaseDeDatos.php"
 ?>

<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th><?php 
						$_SESSION["usuario"]="usu1";
						$tabla= BD::sesiones($_SESSION["usuario"]);
						print_r($tabla);
				 ?></th>
			</tr>
		</thead>
		<?php foreach ($empleados as $em) { ?>
		<tbody>
			<tr>
				<td>
					<?php echo $em->cod_dias; ?>
           		</td>
			</tr>
			<tr>
				<td>
					<?php echo $em->cod_empleado; ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php  echo $em->FechaInicio; ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php  echo $em->FechaFin; ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $em->dias_Natu; ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $em->dias_lab; ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php  echo $em->aumentoDias; ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php  echo $em->SALDO_DIAS; ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $em->vacaciones; ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $em->PerRetri; ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $em->PerNoRetri; ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php  echo $em->Bec; ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $em->Bal; ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $em->Comentarios; ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $em->user_login; ?>
				</td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</div>
