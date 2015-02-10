		<?php 
			require_once "BaseDeDatos.php";
			//require_once "CestaCompra.php";
			include_once "header.php";




			if ( !isset($_SESSION['usuario']) ){
				header('Location: login.php');
			}else{
				if(isset($_SESSION['usuario']) && empty($_SESSION['cesta']) ) {
		?>
					<div class="row  text-center">	
						<h1>La Tienduca</h1>
						<h3>La cesta está vacia</h3>
					</div>
		<?php 
				}else {
		?>
					<div class="row  text-center">
						<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<table id="tabla" class="table ">
								<thead>
									<tr>
										<h3>TU CARRITO</h3>
											
									</tr>
									<tr>
										<th>Codigo</th>
										<th>Articulo</th>
										<th>Precio Unidad</th>
									</tr>
								</thead>
								<tbody>			
									<?php
										$suma=0;
										
										foreach ($_SESSION['cesta'] as $producto) { ?>
									<tr>
										<td>
											<?php echo $producto->codigo; ?>	
										</td>
										<td>
											<?php echo $producto->articulo; ?>	
										</td>
										<td>
											<?php echo $producto->precio; ?>	
										</td>
									</tr>

										
									<?php
											$suma=$suma+$producto->precio;
									 }
									 ?>
								</tbody>
						</table>
						<hr>
						<h3 class="text-center">
							Productos totales: 
								<?php 
									echo count($_SESSION['cesta']); 
								?>  
							TOTAL: 
								<?php echo $suma; ?>
						</h3>
					</div>
				</div>
				<div class="row text-center">
			 		<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
			 			<form action="" method="POST" role="form">
			 				<button type="submit" name="btn" value="1" class="btn btn-danger">Vaciar</button>
			 				<button type="submit" name="btn"  value="0" class="btn btn-danger">Pagar</button>
			 			</form>
			 		</div>
			 	</div>
		<?php 
				}
			}
		 ?>
			 	

		<?php 
				if( isset($_POST['btn']) ){
					if ( $_POST["btn"]==1 ){
						unset($_SESSION['cesta']);
					}else {
						header("Location: pago.php");

					}
				} 

				
		?>
		<br><br>
<?php 
	include_once "pie.php";
 ?>