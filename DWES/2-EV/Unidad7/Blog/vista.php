<?php require_once "header.php"; ?>
 	<h1 class="text-center">Bienvenido a mi blog</h1>
 	
	<div class="contenedor">
		<div class="row">
			<form action="index.php" method="POST"  role="form">
				<button type="submit" name="submit" class="btn btn-primary">Cerrar Sesion</button>
			</form>
		</div>
 		<?php	foreach ($articulos as $a) : ?>
			<div class="row">	
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h3>
						    <?php 
						        echo $a->titulo;
						    ?>
					</h3>
					<small id="ch">
						    <?php 
						        echo $a->fecha;
						    ?>
						</small>	 
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
<?php require_once "pie.php"; ?>
 	