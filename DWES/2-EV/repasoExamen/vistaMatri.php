<?php 
require_once "head.php";
 ?>

	</head>
	<body>
		<div class="text-center">
			<h1 class="text-center">Matriculados</h1>
			<ul class="list-group">

			<?php foreach ($alumnos as $alumno) { ?>
				<li class="list-group-item"><?php echo $alumno->numMatricula; ?> -- <?php  echo $alumno->nombre; ?> -- <?php  echo $alumno->curso; ?></li>
			<?php } ?>
			</ul>
		</div>
<?php 
require_once "pie.php";
 ?>