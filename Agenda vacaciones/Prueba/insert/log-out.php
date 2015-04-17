<?php 
	if ( !isset($_SESSION["usuario"]) ) {
		header("Location: login.php");
	} else {
		require_once "header.php"; ?>
		
		<div class="row  text-center">
			<h1>Gestor de vacaciones y otros permisos</h1>
			<h1>Grupo Codelse</h1>
			<form action="" method="post">
				<h3>¿Está seguro de que desea cerrar la sesión?</h3>
				<button type="submit" class="btn btn-primary" name="sesion" value="1">Si</button>
				<button type="submit" class="btn btn-primary" name="sesion" value="0">No</button>
			</form>
		</div>
<?php 		
		if ( isset($_POST["sesion"]) ) {
			if($_POST["sesion"] == "1") {
			////////copia de seguridad////////
				header("Location: index.php");
			} else {
				header("Location: login.php");
			}
		}  
	} 

	
?>
<?php 
	include_once "pie.php";
 ?>