<?php 
	require_once "classes.php";
	include_once "header.php";
 ?>

	<h1 class="text-center">Año 2015</h1>

		<div id='contenido' class='row responsive'>
				<?php 
					 $hoy=new Calendario();
					 $hoy->getTodosMeses();
				 ?>
		</div>
		


	<!-- jQuery -->
	<script src="//code.jquery.com/jquery.js"></script>
	<!-- Bootstrap JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>

