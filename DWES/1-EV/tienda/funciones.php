<?php 
	function registrar($nombre, $dni, $ap1, $ap2, $dire, $cp, $a, $ctv){
		global $dwes;

		$dwes->autocommit(FALSE);

		$cons="INSERT INTO registro (dni,nombre,apellido1,apellido2,direccion,cp,autonoma,ctv ) VALUES ('$dni','$nombre','$ap1','$ap2','$dire',$cp,'$a','$ctv')";

		$resultado = $dwes->query($cons);

		if(!$dwes->commit()){
?>
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>FALLO</strong> Intentelo de nuevo Fallo en el servidor
			</div>
<?php 
    		exit();
		}else{
?>
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Se ha registrado correctamente</strong>
			</div>";
<?php 
		}
	}

	function cargaProductos(){
		global $dwes;

		$dwes->autocommit(FALSE);

		$cons="SELECT * FROM productos";

		$resultado = $dwes->query($cons);
		
		if(!$dwes->commit()){
?>
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>FALLO</strong> Intentelo de nuevo Fallo en el servidor
			</div>
<?php 
    		exit();
		}else{
?>
			<div class="row">
			
<?php 
				while($prod=$resultado->fetch_object()){
	?>
				
					<div class="col-sm-6 col-md-4">
					    <div class="thumbnail">
					      <img src="<?php echo $prod->ruta ?>" >

					      <div class="caption">
					        <h3>
					        	<?php 
					        		echo $prod->articulo;
					        	 ?>
					        </h3>
					        <p>
					        	<?php 
					        		echo "En stock tenemos: ".$prod->stock;
					        	 ?>
					        </p>
					        <p>
					        	<?php 
					        		echo "Precio unidad: ".$prod->precio;
					        	 ?>
					        </p>
					        <form>
					        	<a href="#" class="btn btn-primary" role="button">Al carrito</a>
					        </form>
					      </div>
					    </div>
					</div>
<?php 
				}
?>
			</div>

<?php 
		}
	}

	function modifica ($nombre, $dni, $ctv){
		global $dwes;

		$c="SELECT dni FROM registro WHERE dni=$dni";

		$resultado = $dwes->query($c);
		$acceso=$resultado->fetch_object();
		if(!$acceso){
?>
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>FALLO</strong> El dni no es correcto o no existe
			</div>
<?php 
		}else{

			$dwes->autocommit(FALSE);

			$cons="UPDATE registro SET ctv=$ctv WHERE dni=$dni";

			$resultado = $dwes->query($cons);
			
			if(!$dwes->commit()){
?>
				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>FALLO</strong> Intentelo de nuevo Fallo en el servidor
				</div>
<?php 
	    		exit();
			}else{
?>
				<div class="alert alert-info">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>CORRECTO</strong> Los datos se han modificado correctamente
				</div>
<?php 
			}
		}
	}

	function logea($nombre, $ctv){
		global $dwes;

		$c="SELECT nombre, ctv FROM registro WHERE ctv='$ctv'";

		$resultado = $dwes->query($c);

		$acceso=$resultado->fetch_object();

		if(!$acceso){
?>
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>FALLO</strong> La contraseña NO es correcta
			</div>
<?php 
		}else{
			echo $resultado;
			session_start();
			$_SESSION['usuario'] = $acceso->nombre;
		}
	}

 ?>