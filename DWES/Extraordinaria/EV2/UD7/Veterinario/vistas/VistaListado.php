<?php 
require_once "head.php";
?>
<body>
	<div class="text-center well">
		<h1 class="text-center">Listado de Mascotas</h1>		
	</div>
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Cliente</th>
					<th>Nombre</th>
					<th>Raza</th>
					<th>Fecha Nac.</th>
					<th>Edad</th>
					<th>Historial</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($mascotas as $m) { ?>
				<tr>
					<td>
						<?php echo $m->id; ?>
					</td>
					<td>
						<?php 
							$codigo=$m->idCliente;
							echo $nombre=BD::dameNombreC($codigo)." (".$codigo.")";
						 ?>
					</td>
					<td>
						<?php echo $m->nombre; ?>
						
					</td>
					<td>
						<?php echo $m->raza; ?>
					</td>
					<td>
						<?php echo $m->fech; ?>
					</td>
					<td>
						<?php echo $m->getEdad(); ?>
						
					</td>
					<td>
						<?php echo $m->historial; ?>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>




<?php 
require_once "pie.php";
 ?>