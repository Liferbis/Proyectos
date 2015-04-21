<?php 
require_once "head.php";
?>
<body>
<h1 class="text-center">Log-Out</h1>
<hr>
<div class="row  text-center">
			
			<form action=" " method="post">
				<h3>¿Está seguro de que desea cerrar la sesión?</h3>
				<button type="submit" class="btn btn-primary" name="out">Si</button>
				<button type="submit" class="btn btn-primary" name="rem">No</button>
			</form>
		</div>

		<?php 
			if(isset($_POST["out"])){
				session_destroy();
			} else if(isset($_POST["rem"])){
				header('Location: resumen.php');
			}
		 ?>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</body>
</html>