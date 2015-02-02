<?php include_once "head.php" ?>
<div id="cuerpo"class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<h3 id="titulo">Listado de clientes</h3>
		<div class="table-responsive">
			<table class="table table-hover">
				
				<thead>
					<tr>
						<th>Id</th>

						<th>Nombre</th>
					
						<th>Telefono</th>
					
						<th>e-mail</th>
					</tr>
				</thead>

				<tbody>
					
					<?php foreach ($clientess as $clien) {?>
					
					<tr>
						<td>
							<?php echo $clien->id ?>
						</td>
					
						<td>
							<?php echo $clien->nombre ?>
						</td>
				
						<td>
							<?php echo $clien->telefono ?>
						</td>
					
						<td>
							<?php echo $clien->email ?>
						</td>
					</tr>
					
					<?php } ?>
				
				</tbody>			
			</table>
		</div>		
	</div>
</div>

<?php include_once "pie.php" ?>