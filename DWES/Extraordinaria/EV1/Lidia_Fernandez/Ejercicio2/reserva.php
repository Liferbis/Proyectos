<?php 
require_once "head.php";
require_once "BD.php";

if(isset($_SESSION["usuario"])){
?>

<body>
	<h1 class="text-center">Hola <?php echo $_SESSION["usuario"]; ?> - Reserva tu viaje</h1>
	<hr>
	<div class="row text-center">
		<form action="" method="POST" role="form">
			<div class="form-group">
				<label for="">Viajes</label>
				<select name="vires" id="input" class="form-control">
					<option value="0">Elija un viaje</option>
					<?php 
						$viaje=BD::CargaViajes();
						foreach ($viaje as $v) {
					?>
						<option value="<?php echo $v[0]; ?>">
							<?php echo $v[0]." ( ".$v[1]." €) "; ?>
						</option>
					<?php 
						}
					 ?>
				</select>			
			</div>

			<div class="form-group">
				<label for="">Numero de personas</label>
				<input type="number" name="personas" class="form-control" placeholder="Inroduce numero de personas">
			</div>
			
			<button type="submit" name="trs" class="btn btn-primary">Reservar</button>
			<button type="submit" name="ver" class="btn btn-success">Ver reservas</button>
		</form>
		<hr>
	</div>
	<div class="row text-center">
		<a href="viajes.php" style="color:white">
			<button type="button" class="btn btn-lg btn-success">Viajes</button>
		</a>
		<a href="logout.php" style="color:white">
			<button type="button" class="btn btn-lg btn-danger">Desconectar <?php echo $_SESSION["usuario"]; ?></button>
		</a>
	</div>

	<?php 
		if (isset($_POST["trs"])) {
			if (isset($_POST["personas"])) {
				$d=$_POST["personas"];
				$id=$_SESSION["registro"];
				$estado=BD::reserva($_POST["vires"], $d, $id);
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
				
			}else{
	?>
				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Error !!</strong> Revise los datos e intentelo de nuevo mas tarde ..
				</div>
	<?php 
			}
		}else if(isset($_POST["ver"])){
			header('Location: VerReservas.php');
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