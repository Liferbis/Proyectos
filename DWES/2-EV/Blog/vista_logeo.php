<?php  include_once "header.php";?>
 	<h1 class="text-center">Bienvenido a mi blog</h1>
 	
	<div class="contenedor">
		div class="row text-center">
				<h1>La Tienduca</h1>
			<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" role="form">
					<table id="tabla" class="table ">
						<thead>
							<tr>
									<h3>LOGEATE</h3>								
							</tr>
						</thead>
						<tbody>
							<tr>
								<div class="form-group">
								<td>
									<label>Nombre</label>
								</td>
								<td>
									<input type="text"  name="nombre" required placeholder="Nombre">
								</td>
								</div>
							</tr>
							<tr>
								<div class="form-group">
									<td>
										<label>Contraseña</label>
									</td>
									<td>
										<input type="password"  name="contra" required placeholder="Contraseña">
									</td>
								</div>
							</tr>
						</tbody>
					</table>
					<br><br>
					<button type="submit" class="btn btn-primary">LOGIN</button>
				</form>
				
				
				<?php 
					if( isset($_POST["nombre"]) && isset($_POST["contra"]) ){
						$nombre=$_POST["nombre"];
						$ctv=md5($_POST["contra"]);
					}
				?>


						
	</div>
<?php include_once "pie.php";  ?>