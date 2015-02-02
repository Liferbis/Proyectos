<?php include_once "head.php" ?>
<div id="cuerpo"class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<h3 id="titulo">Listado de clientes</h3>
		<div class="table-responsive">
			<table class="table table-hover">
				
				<thead>
					<tr>
						<th>Id</th>

						<th>Id Cliente</th>

						<th>Nombre</th>
					
						<!-- <th>Especie</th> -->
					
						<th>Raza</th>

						<th>Nacimiento</th>

						<th>Edad</th>

						<th>Historial</th>
					</tr>
				</thead>

				<tbody>
					
					<?php foreach ($mascotass as $masc) {?>
					
					<tr>
						<td>
							<?php echo $masc->id ?>
						</td>
					
						<td>
							<?php echo $masc->idcliente ?>
						</td>
				
						<td>
							<?php echo $masc->nombre ?>
						</td>
					
						<!-- <td>
							<?php echo $masc->especie ?>
						</td> -->

						<td>
							<?php echo $masc->raza ?>
						</td>

						<td>
							<?php echo $masc->fechaNacimiento ?>
						</td>

						<td>
							<?php echo $masc->getEdad() ?>
						</td>

						<td>
							<?php echo $masc->historial ?>
						</td>

					</tr>
					
					<?php } ?>
				
				</tbody>			
			</table>
		</div>		
	</div>
</div>

<?php include_once "pie.php" ?>