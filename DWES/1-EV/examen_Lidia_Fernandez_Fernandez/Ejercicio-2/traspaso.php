<?php 
	session_start();
	if ( !isset($_SESSION["usuario"]) ) {
		header("Location: login.php");
	} else {
		include_once "conecta.php";
		include_once "funciones.php";
?>
		<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Ejercicio-2</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>


		<div class="row  text-center">
			<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" role="form">
					<table id="tabla" class="table ">
						<thead>
							<tr>
								<h1 class="text-center">Traspado de cuentas</h1>								
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Cuenta Origen</td>
								<td>
									<select name="cuenta" id="input" class="form-control">
										<?php  cargaSelec() ?>
									</select>
								</td>
							</tr>
							<tr>
								<td>Cuenta Destino</td>
								<td>
									<input type="text"  name="cuen" placeholder="Cuenta de destino">
								</td>
							</tr>
							<tr>
								<td>Importe</td>
								<td>
									<input type="text"  name="importe" placeholder="Introduce el Importe">
								</td>
							</tr>	
						</tbody>
					</table>
					<br><br>
				
					<button type="submit" name="traspaso" class="btn btn-primary">Traspasar</button>
					<button type="submit" name="logout" class="btn btn-primary">Desconectar </button>
					<button type="submit" name="ret" class="btn btn-primary">Volver a resume</button>
				</form>	
		</div>

<?php 		
		if( isset($_POST["traspaso"])  ){
			if( isset($_POST["cuen"]) && isset($_POST["importe"]) ){
				$dwes->autocommit(false);
				$a=$_POST["cuen"];
				$importe=$_POST["importe"];
				$c1=$_POST["cuenta"];
				if (tras($a)=="true"){
					traspaso($c1, $a, $i);
				}else{
					echo "ERROR CUENTA NO EXISTENTE";
				}
				$dwes->commit();
			}
		}else if( isset($_POST["logout"]) ){
			header('Location: logout.php');
		}else if( isset($_POST["ret"]) ){
			header('Location: resumen.php');
		} 
	}
?>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</body>
</html>