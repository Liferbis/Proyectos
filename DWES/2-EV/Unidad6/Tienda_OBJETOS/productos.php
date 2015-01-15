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
				<?php 
					$productos=BD::cargaProductos();
					util::mostrar($productos);	 
				?>
			</div>	
				<?php 
					if ( isset($_POST["enviar"]) ){
						$codigo=$_POST['codigo'];
						CestaCompra::nuevoArticulo($codigo);
						// $producto['articulo']=$_POST["articulo"];
						// $producto['unidades']=1;
						// $producto['precio']=$_POST["precio"];
						//util::Productos($producto);
					}
				?>
		</div>
<?php 
		}
?>

<?php 
	include_once "pie.php";
 ?>