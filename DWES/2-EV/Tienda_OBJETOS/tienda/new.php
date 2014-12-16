
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
									<h3>Nueva contraseña</h3>
								
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
										<label>Nueva Contraseña</label>
									</td>
									<td>
										<input type="password"  name="contra" required placeholder="Contraseña">
									</td>
								</div>
							</tr>
							<tr>
								<div class="form-group">
									<td>
										<label>Repita la contraseña</label>
									</td>
									<td>
										<input type="password"  name="contra1" required placeholder="Repita la contraseña">
									</td>
								</div>
							</tr>
						</tbody>
					</table>
					<br><br>
					<button type="submit" name="aceptar" class="btn btn-primary">Aceptar</button>
				</form>
				<?php 
					if( isset($_POST["nombre"]) && isset($_POST["dni"]) ){
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
							//echo $nombre.$dni.$ap1.$ap2.$dire.$cp.$a.$ctv;
							modifica ($nombre, $dni, $ctv);
						}
					}

				?>				

<?php 
	include_once "pie.php";
 ?>