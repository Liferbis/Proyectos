<?php 
require_once "head.php";
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
								<th>Nombre</th>
								<th>Cuenta</th>
								<th>Saldo</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<?php 
										echo $_SESSION["usuario"]; 
									?>
								</td>
							<?php 
								$usu=BD::cuenta($_SESSION["usuario"]);
								foreach ($usu as $cuenta) {
							?>
									<td>
										<?php echo $cuenta[0]; ?>
									</td>
									<td>
										<?php echo $cuenta[1]; ?>€
									</td>
							<?php } ?>
								
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<form action=" " method="POST" role="form">
					<button type="submit" name="tras" class="btn btn-lg btn-success">Realizar traspaso</button>
					<button type="submit" name="desc" class="btn btn-lg btn-danger">Desconectar <?php echo $_SESSION["usuario"]; ?></button>
				</form>
			</div>
		</div>
		<?php 
			if(isset($_POST["desc"])){
				header('Location: logout.php');
			}else if(isset($_POST["tras"])){
				header('Location: logout.php');
			}
		 ?>
		

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</body>
</html>