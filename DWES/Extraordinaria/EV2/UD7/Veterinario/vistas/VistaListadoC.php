<?php 
require_once "head.php";
?>
<body>
	<div class="text-center well">
		<h1 class="text-center">Listado de Clientes</h1>		
	</div>
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>numero telefono</th>
					<th>E-mail</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($clientes as $c) { ?>
				<tr>
					<td>
						<?php echo $c->id; ?>
					</td>
					<td>
						<?php echo $c->nombre; ?>
						
					</td>
					<td>
						<?php echo $c->num; ?>
					</td>
					<td>
						<?php echo $c->email ?>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>




<?php 
require_once "pie.php";
 ?>