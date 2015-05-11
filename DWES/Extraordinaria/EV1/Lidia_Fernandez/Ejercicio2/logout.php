<?php 
require_once "head.php";
?>
<body>
<h1 class="text-center">Log-Out</h1>
<hr>
<div class="row  text-center">
			
	<form action=" " method="post">
		<h3>¿Está seguro de que desea cerrar la sesión?</h3>
		<button type="submit" class="btn btn-primary" name="sesion" value="1">Si</button>
		<button type="submit" class="btn btn-primary" name="sesion" value="0">No</button>
	</form>
</div>

		<?php 
			if(isset($_POST["sesion"])){
				if($_POST["sesion"]=="1"){
					session_destroy();
					header('Location: login.php');
				}else if($_POST["sesion"]=="0"){
					header('Location: viajes.php');
				}
			}
		 ?>

<?php 
require_once "pie.php";
?>