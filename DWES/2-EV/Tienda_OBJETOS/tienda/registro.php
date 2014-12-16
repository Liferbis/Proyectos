<?php 
	include_once "header.php";
	include_once "conecta.php";
	include_once "funciones.php";
?>

		<div class="row text-center">
			<h1>La Tienduca</h1>			

			<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" role="form">
					<table id="tabla" class="table ">
						<thead>
							<tr>
								<h3>Registrate</h3>
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
										<label>DNI</label>
									</td>
									<td>
										<input type="text "  required name="dni" placeholder="DNI">
									</td>
								</div>
							</tr>
							<tr>
								<div class="form-group">
									<td>
										<label>1º Apellido</label>
									</td>
									<td>
										<input type="text"  name="apellido1" required placeholder="1º apellido">
									</td>
								</div>
							</tr>
							<tr>
								<div class="form-group">
									<td>
										<label>2º Apellido </label>
									</td>
									<td>
										<input type="text"  name="apellido2" required placeholder="2º Apellido">
									</td>
								</div>
							</tr>
							<tr>
								<div class="form-group">
									<td>
										<label>Direccion</label>
									</td>
									<td>
										<input type="text"  name="direccion" required placeholder="Direccion">
									</td>
								</div>
							</tr>
							<tr>
								<div class="form-group">
									<td>
										<label>Codigo postal</label>
									</td>
									<td>
										<input type="text"  name="cp" required placeholder="Codigo postal">
									</td>
								</div>
							</tr>
							<tr>
								<div class="form-group">
									<td>
										<label>Comunidad autonoma</label>
									</td>
									<td>
										<input type="text"  name="autonoma" required placeholder="Comunidad autonoma">
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
							<tr>
								<div class="form-group">
									<td>
										<label>Repita Contraseña</label>
									</td>
									<td>
										<input type="password"  name="contra1" required placeholder="Repita la contraseña">
									</td>
								</div>
							</tr>
							<tr>
								<div class="form-group">
									<td>
										<label>Provincia</label>
									</td>
									<td>
										<label>España</label>
									</td>
								</div>
							</tr>
						</tbody>
					</table>
					<br><br>
					<button type="submit" class="btn btn-primary">REGISTRARSE</button>
				</form>

				<hr>
			
				<?php 
					$guarda=false;
					if(isset($_POST["nombre"]) && isset($_POST["dni"])&& isset($_POST["apellido1"]) && isset($_POST["apellido2"]) && isset($_POST["direccion"]) && isset($_POST["cp"]) && isset($_POST["autonoma"]) ){

						if( isset($_POST["contra"]) && isset($_POST["contra1"]) ){
							$ctv=$_POST["contra"];
							$aux=$_POST["contra1"];
							if($ctv==$aux){
								$guarda=true;
							}else{
				?>
								<div class="alert alert-danger">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
									<strong>ERROR</strong> Las contraseñas no coinciden !!!!!
								</div>
				<?php 
							}
						}
						if($guarda==true){
							$ctv=md5($ctv);	
							$nombre=$_POST["nombre"];
							$dni=$_POST["dni"];
							$ap1=$_POST["apellido1"];
							$ap2=$_POST["apellido2"];
							$dire=$_POST["direccion"];
							$cp=$_POST["cp"];
							$a=$_POST["autonoma"];
							//echo $nombre.$dni.$ap1.$ap2.$dire.$cp.$a.$ctv;
							registrar ($nombre, $dni, $ap1, $ap2, $dire, $cp, $a, $ctv);
						}
					}

				?>
			</div>
		</div>
<?php 
	include_once "pie.php";
?>