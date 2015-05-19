<?php 
require_once "head.php";
?>
<body>
	<div class="text-center well">
		<h1 class="text-center">Coleccion de articulos</h1>
		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			<?php 
			$i=0;
			foreach ($articulos as $artis) {
		?>
			
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="heading<?php echo $i;?>">
						<h4 class="panel-title">
							<a <?php if($i!=0){ ?> class="collapsed" aria-expanded="false"<?php }else{ ?> aria-expanded="true" <?php } ?>data-toggle="collapse" data-parent="#accordion" href="#<?php echo $i;?>" aria-controls="<?php echo $i;?>">
								<?php echo $artis->titulo." -> ".$artis->fecha." <-"; ?>
							</a><a href="index.php?blog=art&id=<?php echo $artis->id; ?>"><small> //->Ver articulo completo <-\\</small></a>
						</h4>
					</div>
					<div id="<?php echo $i;?>" <?php if($i!=0){ ?> class="panel-collapse collapse"<?php }else{ ?> class="panel-collapse collapse in" <?php } ?> role="tabpanel" aria-labelledby="headingOne">
						<div class="panel-body">
							<?php echo $artis->descripcion; ?>
						</div>
					</div>
				</div>
			
		<?php 
				$i++;
			}
			?>
		</div>
	</div>
	<?php 
	require_once "pie.php";
	?>