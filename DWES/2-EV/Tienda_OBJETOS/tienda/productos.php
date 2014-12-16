<?php 
	include_once "header.php";
	include_once "conecta.php";
	include_once "funciones.php";
	
		if(!$_SESSION['usuario']){
			header('Location: login.php');
		}else{
?>
		<div class="row  text-center">
			<h1>La Tienduca</h1>
			<h3>Nuestros Productos</h3>
		
			<div class="row">
				<?php 
					cargaProductos();

				 ?>
			</div>	
				<?php 
					if ( isset($_POST["enviar"]) ){
						$unidades=1;
						$producto['codigo']=$_POST['codigo'];
						$producto["articulo"]=$_POST["articulo"];
						$producto["unidades"]=$unidades;
						$producto["precio"]=$_POST["precio"];
						$_SESSION['cesta'][]=$producto;
					}
				?>
		</div>
<?php 
		}
?>

<?php 
	include_once "pie.php";
 ?>