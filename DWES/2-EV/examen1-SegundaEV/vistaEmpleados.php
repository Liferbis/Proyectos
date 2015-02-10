<?php include_once "head.php" ?>
<div id="cuerpo"class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<h3 id="titulo">Listado de Empleados</h3>
		<div class="table-responsive">
			<table class="table table-hover">
				
				<thead>
					<tr>
						<th>DNI</th>

						<th>Nombre</th>
					
						<th>Sueldo</th>
					</tr>
				</thead>

				<tbody>
					
					<?php foreach ($empleados as $emple) {?>
					
					<tr>
						<td>
							<?php echo $emple->dni ?>
						</td>
				
						<td>
							<?php echo $emple->nombre ?>
						</td>

						<td>
							<?php echo $emple->sueldo ?>
						</td>

					</tr>
					
					<?php } ?>
				
				</tbody>			
			</table>
		</div>		
	</div>
</div>

<?php include_once "pie.php" ?>