<?php  include_once "header.php";?>
 	<h1 class="text-center">Bienvenido a mi blog</h1>
 	
	<div class="contenedor">
 		<?php	foreach ($articulos as $a) : ?>
			<div class="row">	
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h3>
						    <?php 
						        echo $a->titulo;
						    ?>
						</h3>
						<h5>
						    <?php 
						        echo $a->fecha;
						    ?>
						</h5>	 
						<p>
						    <?php 
						        echo $a->descripcion;
						    ?>
						</p>
						<hr>
				</div>
			</div>
		<?php endforeach;?>
 	</div>	
<?php include_once "pie.php"; ?>
 	