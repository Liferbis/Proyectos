<?php 
require_once "head.php";

if(isset($_SESSION["usuario"])){
?>

<body>
	<h1 class="text-center">Bienvenido <?php echo $_SESSION["usuario"]; ?></h1>
	<hr>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Nombre</th>
								<th>Precio</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$viaje=BD::CargaViajes();
								foreach ($viaje as $v) {
							?>
							<tr>
								<td>
									<?php 
										echo $v[0]; 
									?>
								</td>
								<td>
									<?php 
										echo $v[1]; 
									?>
								</td>	
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="text-center">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<form action="reserva.php" method="POST" role="form">
						<button type="submit" name="tras" class="btn btn-lg btn-success">Realizar reserva</button>
					</form>
					<a href="logout.php" style="color:white">
						<button type="button" class="btn btn-lg btn-danger">
							Desconectar <?php echo $_SESSION["usuario"]; ?>
						</button>
					</a>
				</div>
			</div>
		</div>
		 
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