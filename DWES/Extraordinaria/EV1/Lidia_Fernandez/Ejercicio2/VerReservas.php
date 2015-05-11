<?php 
require_once "head.php";

if(isset($_SESSION["usuario"])){
?>

<body>
		<h1 class="text-center">Todas las reservas realizadas</h1>
	<hr>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Cliente</th>
								<th>Viaje</th>
								<th>Personas</th>
								<th>Precio Total</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$reservas=BD::verReservas();
								foreach ($reservas as $vr) {
							?>
							<tr>
								<td>
									<?php 
										echo $_SESSION["usuario"]; 
									?>
								</td>
								<td>
									<?php
										$nombre=BD::nomViaje($vr[1]);
										echo $nombre; 
									?>
								</td>
								<td>
									<?php echo $vr[2]; ?>
								</td>
								<td>
									<?php 
										$p=BD::precioV($vr[1]);
										$pTotal=($p)*($vr[2]);
										echo $pTotal ?>€
								</td>	
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row text-center">
				<a href="viajes.php" style="color:white">
					<button type="button" class="btn btn-lg btn-success">Viajes</button>
				</a>
				<a href="logout.php" style="color:white">
					<button type="button" class="btn btn-lg btn-danger">Desconectar <?php echo $_SESSION["usuario"]; ?></button>
				</a>
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