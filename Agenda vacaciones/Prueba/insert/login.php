<?php require_once "header.php"; ?>
<div  id='contenido' class="text-center">
	<h1  >Gestor de vacaciones y otros permisos</h1>
	<h1  >Grupo Codelse</h1>
	<table class="table table-responsive">
		<tbody>
			<form action="" method="post" role="form">
				<tr>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<h3>Nombre</h3>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
							<input type="text"  name="nombre" required placeholder="Nombre">
						</div>
					</div>
				</tr>
				<tr>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<h3>Contraseña</h3>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
							<input type="password" required name="ctv1" placeholder="Contraseña">
						</div>
					</div>
				</tr>
				<!-- <tr>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<h3>Repita la Contraseña</h3>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
							<input type="password" required name="ctv2" placeholder="Contraseña">
						</div>
					</div>
				</tr> -->
				<tr>
					<div class="row">
						<button type="submit" name="enviar" class="btn btn-success">Enviar</button>
					</div>
				</tr>
			</form>
		</tbody>
	</table>
</div>
<?php 
if(isset($_POST["enviar"])){
	$nombre=$_POST["nombre"];
	//if($_POST["ctv1"]==$_POST["ctv2"]){
	$password=md5($_POST["ctv1"]);
	echo "Nombre: ".$nombre." ctv: ".$password;
		if(BD::verifica($nombre, $password)){
			$_SESSION['usuario'] = $nombre;
			header("Location: index.php");
		}else{
			echo "<h1>Datos incorrectos</h1>";
		}
	//}else {
	//	echo "<h1>La contraseña es incorrecta</h1>";
	//}
}

?>
<?php require_once "pie.php"; ?>