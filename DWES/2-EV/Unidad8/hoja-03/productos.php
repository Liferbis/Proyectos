<?php 
	include_once "header.php";
	include_once "BaseDeDatos.php";
	include_once "funciones.php";
	include_once "CestaCompra.php";
	
		if(!$_SESSION['usuario']){
			header('Location: login.php');
		}else{
?>
		<div class="row  text-center">
			<h1>La Tienduca!!!</h1>
			<h3>Nuestros Productos</h3>
		
			<div class="row">
				<?php $productos=BD::cargaProductos(); ?>
				<?php foreach ($productos as $p) { ?>
					<div class="col-sm-6 col-md-4">
					    <div class="thumbnail">
					      <img src="<?php echo $p->ruta ?>" >

					      <div class="caption">
					      	<form action="" method="POST" role="form">
								<h3>
									<?php echo $p->articulo; ?> 
								</h3>
								 <p>Precio unidad:
						        	<?php echo $p->precio; ?>€
						        </p>
						      	<input type="hidden" name="codigo" value="<?php echo $p->codigo ?>">
						      	<button type="submit" name="enviar" class="btn btn-primary">Al carrito</button>
					        </form>
					      </div>
					    </div>
					</div>

				<?php } ?>
			</div>	
				<?php 
					if ( isset($_POST["enviar"]) ){
						$codigo=$_POST['codigo'];
						CestaCompra::nuevoArticulo($codigo);
						
					}
				?>
		</div>
<?php 
		}
?>

<?php 
	include_once "pie.php";
 ?>