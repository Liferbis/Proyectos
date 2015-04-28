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
						<label >Id del cliente</label>
						<input type="text" name="id" class="form-control" placeholder="Id del cliente">
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
			if(isset($_POST["id"]) & isset($_POST["ctv"])){
				$ctv=md5($_POST["ctv"]);
				$estado=BD::comprobar($_POST["id"], $ctv);
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
					$nombreClient=BD::nombreClient($_POST["id"]);
					$_SESSION["usuario"]=$nombreClient;
					$_SESSION["registro"]=$_POST["id"];
					header('Location: viajes.php');
					//echo "si";
				}
			}

require_once "pie.php";

		 ?>
		