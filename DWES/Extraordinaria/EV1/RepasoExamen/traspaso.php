<?php 
require_once "head.php";
require_once "BD.php";

if(isset($_SESSION["usuario"])){
?>

<body>
	<h1 class="text-center">Traspaso de dinero</h1>
	<hr>
	<div class="row text-center">
		<form action="" method="POST" role="form">
			<div class="form-group">
				<label for="">Cuenta Origen</label>
				
				<select name="origen" id="input" class="form-control" required="required">
					<option value="0">Elija una cuenta</option>
					<?php 
						$cuentas=BD::cuenta($_SESSION["usuario"]);
						foreach ($cuentas as $c) {
					?>
						<option value="<?php echo $c[0]; ?>">
							<?php echo $c[0]; ?>
						</option>
					<?php 
						}
					 ?>
				</select>			
			</div>

			<div class="form-group">
				<label for="">Cuenta Destino</label>
				<input type="text" name="destino" class="form-control" placeholder="Inroduce la cuenta destino">
			</div>

			<div class="form-group">
				<label for="">Importe €</label>
				<input type="text" name="imp" class="form-control" placeholder="Importe €">
			</div>
			
			<button type="submit" name="trs" class="btn btn-primary">Traspasar</button>
		</form>
		<hr>
	</div>
	<div class="row text-center">
		<a href="resumen.php" style="color:white">
			<button type="button" class="btn btn-lg btn-success">Resumern</button>
		</a>
		<a href="logout.php" style="color:white">
			<button type="button" class="btn btn-lg btn-danger">Desconectar</button>
		</a>
	</div>

	<?php 
		if (isset($_POST["trs"])) {
			if (isset($_POST["destino"]) & isset($_POST["imp"])) {
				$d=$_POST["imp"];
				$tras=BD::dameDinero($_POST["origen"]);
				if($tras < $d ){
					echo "<h1 class='text-center'><strong>No tiene suficiente dinero para realizar este traspaso</strong></h1>";
				}else{
					$estado=BD::traspaso($_POST["origen"], $d, $_POST["destino"]);
					if($estado="true"){
						echo "<h1 class='text-center' style='color:red'><strong>Realizado CORRECTAMENTE !!!</strong></h1>";
					}else{
			?>
				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Error !!</strong> Revise los datos e intentelo de nuevo mas tarde ..
				</div>
			<?php
					}
				}
			}else{
	?>
				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Error !!</strong> Revise los datos e intentelo de nuevo mas tarde ..
				</div>
	<?php 
			}
		}
	

 
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