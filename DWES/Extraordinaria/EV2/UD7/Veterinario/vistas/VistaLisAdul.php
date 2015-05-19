<?php 
require_once "head.php";
?>
<body>
	<div class="text-center well">
		<h1 class="text-center">Mascotas mayores de 5 años</h1>
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
				<?php 
						$cont=0;
						foreach ($mascotas as $m) { 
							if($m->getEdad()>5){
								$cont++;
				?>
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
				<?php 
							}
						}
				 ?>
			</tbody>
		</table>
	</div>
	<?php 
		if($cont==0){
	?>
	<div class="row well">
		<h1 class="text-center"> <strong>No </strong> tiene ninguna mascota <strong>mayor de 5 años </strong></h1>
	</div>
	<?php 
		}
	 ?>



<?php 
require_once "pie.php";
 ?>