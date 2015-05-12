<?php 
require_once "head.php";
?>
<body>
	<div class="text-center well">
		<h1 class="text-center">Coleccion de articulos</h1>
		
		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			<?php 
				foreach ($articulos as $arti) {
			 ?>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingOne">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								<?php echo $artis->titulo." ->".$artis->fecha; ?>
							</a>
						</h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
						<div class="panel-body">
							<?php echo $artis->descripcion ?>
						</div>
					</div>
				</div>
			<?php 
				}
			?>	
		</div>
	</div>
	<?php 
	require_once "pie.php";
	?>