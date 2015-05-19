<?php 
require_once "head.php";
 ?>
<body>
	<div class="text-center well">
		<?php if(isset($_SESSION['usuario'])){ ?>
		<h1>Ya estas Logueado!!! </h1>
		<h1><?php echo $_SESSION['usuario']; ?> !! </h1>


		<?php }else{ ?>
		<h1 class="text-center">Verificacion de datos</h1>

		<form action="index.php" method="POST" role="form">
			<div class="form-group">
				<label for="">Usuario</label>
				<input type="text" name="usu" class="form-control" placeholder="Usuario">
			</div>

			<div class="form-group">
				<label for="">Contraseña</label>
				<input type="password" name="ctv" class="form-control"  placeholder="Contraseña">
			</div>
		
			<button type="submit" name="confirm" class="btn btn-success">Comprobar!</button>
		</form>
		<?php } ?>
	</div>
<?php 
require_once "pie.php";
 ?>