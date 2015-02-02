 <?php require_once "header.php"; ?>
		<div class="contenedor">
			<!-- <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12"> -->
				<form action="index.php" method="POST" role="form">
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
			<!-- </div> -->
		</div>

<?php require_once "pie.php"; ?>