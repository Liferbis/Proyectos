<?php 
require_once "head.php";

if(isset($_SESSION["usuario"])){
?>

<body>
		<h1 class="text-center">Resumen</h1>
	<hr>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Código</th>
								<th>Nombre</th>
								<th>Cuenta</th>
								<th>Saldo</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$usu=BD::cuenta($_SESSION["usuario"]);
								foreach ($usu as $cuenta) {
							?>
							<tr>
								<td>
									<?php 
										echo $_SESSION["usuario"]; 
									?>
								</td>
								<td>
									<?php 
										echo $_SESSION["registro"]; 
									?>
								</td>
								<td>
									<?php echo $cuenta[0]; ?>
								</td>
								<td>
									<?php echo $cuenta[1]; ?>€
								</td>	
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="text-center">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<form action=" " method="POST" role="form">
						<button type="submit" name="tras" class="btn btn-lg btn-success">Realizar traspaso</button>
						<button type="submit" name="desc" class="btn btn-lg btn-danger">Desconectar <?php echo $_SESSION["registro"]; ?></button>
					</form>
				</div>
			</div>
		</div>
		<?php 
			if(isset($_POST["desc"])){
				header('Location: logout.php');
			}else if(isset($_POST["tras"])){
				header('Location: traspaso.php');
			}
		 ?>
		 
<?php 
}else{
?>
	<body>
	<h1 class="text-center" style="color:red">ACCESO DENEGADO </h1>
	<hr>
	<div class="text-center">
		<a href="login.php" style="color:white">
			<button type="button" class="btn btn-lg btn-success">Login</button>
		</a>
	</div>

<?php
}
require_once "pie.php";
?>