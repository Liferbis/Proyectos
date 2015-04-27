<?php 
require_once "head.php";
?>

<body>
		<h1 class="text-center">Login</h1>
<hr>		
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<form action="" method="POST" role="form">
				
					<div class="form-group">
						<label >Nombre</label>
						<input type="text" name="nombre" class="form-control" placeholder="Nombre">
					</div>
					
					<div class="form-group">
						<label for="">Contraseña</label>
						<input type="password" name="ctv" class="form-control" placeholder="Contraseña">
					</div>
					
					<button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
				</form>
			</div>
		</div>

		<?php 
			if(isset($_POST["nombre"]) & isset($_POST["ctv"])){
				$ctv=md5($_POST["ctv"]);
				$estado=BD::comprobar($_POST["nombre"], $ctv);
				if($estado=="false"){
		?>
					<div class="row">
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>ERROR!!</strong> Datos incorrectos!!
						</div>
					</div>
		<?php 			
				}else{
					$numCliente=BD::numC($_POST["nombre"]);
					$_SESSION["usuario"]=$numCliente;
					$_SESSION["registro"]=$_POST["nombre"];
					header('Location: resumen.php');
				}
			}

require_once "pie.php";

		 ?>
		