<?php 
	header("Content-type: application/vnd.ms-word");
	header("Content-Disposition: attachment;Filename=documento.doc");
 ?>
 <html>
 	<meta http-equiv=\'Content-Type\'content=\'text/html; charset=Windows-1252\'>
 	<body>
 		<h1> <?php echo $cod_emple ?></h1>
		<?php 
			foreach ($emple as $empleado) {
				$nombre=$empleado->nombre;
				$apellido1=$empleado->apellido1;
			} 
		?>
		<h1>Nombre: <?php echo $nombre; ?></h1>
		<h1>Apellido: <?php echo $apellido1; ?></h1>
 	</body>
 </html>