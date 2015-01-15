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
					      	<form action="" method="POST" role="form">

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
						        		echo "Precio unidad: ".$prod->precio."€"; // € alt+0128
						        	 ?>
						        </p>
<!-- hidden te hace el input invisiible -->
								<input type="hidden" name="codigo" value="<?php echo $prod->codigo ?>">
						        <input type="hidden" name="articulo" value="<?php echo $prod->articulo ?>">
						        <input type="hidden" name="precio" value="<?php echo $prod->precio ?>">
								<input type="hidden" name="stock" value="<?php echo $prod->stock ?>">
						        <button type="submit" name="enviar" class="btn btn-primary">Al carrito</button>
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
			session_start();
			$_SESSION['usuario'] = $acceso->nombre;
			$_SESSION['cesta'];
			header('Location: productos.php');
		}
	}
?>
<?php 
	function formulario($nombre, $dni, $mail, $asunto, $sms){
		$to      = "liferbis@gmail.com";
		$from 	   = $mail;
		$titulo    = $asunto;
		$mensaje   = $sms;
		$cabeceras = 'From: $from' . "\r\n" .
		    'CC: liferbis@gmail.com' ;
		mail($para, $titulo, $mensaje, $cabeceras);
	}
?>