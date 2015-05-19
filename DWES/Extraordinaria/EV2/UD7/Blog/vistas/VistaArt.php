<?php 
require_once "head.php";
?>
<body>
	<div class="row">
		<?php 
			foreach ($articulo as $artis) {
		?>
			<div class="text-center row well">
				<h1 class="text-center"><?php echo $artis->titulo;?></h1>
				<h3 class="text-center">Fecha: <?php echo $artis->fecha;?></h3>
			</div>
			<div class="text-center row well">
				<?php echo $artis->descripcion; ?>
			</div>
		<?php }	?>
	</div>
<?php 
require_once "pie.php";
?>