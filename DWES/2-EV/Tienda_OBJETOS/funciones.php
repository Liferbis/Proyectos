<?php 

class util {

	
	public static function ctvs($ctv, $aux){
		if($ctv==$aux){
			return true;
		}else{
			return false;
		}
	}

	public static function mostrar($productos){
?>
			<div class="row">	
<?php 
				foreach ($productos as $p) {
	?>
				
					<div class="col-sm-6 col-md-4">
					    <div class="thumbnail">
					      <img src="<?php echo $p->ruta ?>" >

					      <div class="caption">
					      	<form action="" method="POST" role="form">

						        <h3>
						        	<?php 
						        		echo $p->articulo;
						        	 ?>
						        	 
						        </h3>
						        <p>
						        	<?php 
						        		echo "En stock tenemos: ".$p->stock;
						        	 ?>
						        </p>
						        <p>
						        	<?php 
						        		echo "Precio unidad: ".$p->precio."€"; // € alt+0128
						        	 ?>
						        </p>
<!-- hidden te hace el input invisiible -->
								<input type="hidden" name="codigo" value="<?php echo $p->codigo ?>">
						        <input type="hidden" name="articulo" value="<?php echo $p->articulo ?>">
						        <input type="hidden" name="precio" value="<?php echo $p->precio ?>">
								<input type="hidden" name="stock" value="<?php echo $p->stock ?>">
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

	public static function Productos($producto){
		foreach ($_SESSION['cesta'] as $p) {
			if($p->codigo==$producto->codigo){
				$p->unidades++;
				echo "dsgfsdgavs";
			}else{
				$_SESSION['cesta'][]=$producto;
				echo "else";
			}
		}
	}

	public static function muestraCesta(){
		$suma=0;
		foreach ($_SESSION['cesta'] as $producto) {
			echo "<tr>";
				echo "<td>";
					echo $producto['codigo'];
				echo "</td>";
				echo "<td>";
					echo $producto['articulo'];
				echo "</td>";
				echo "<td>";
					echo $producto['unidades'];
				echo "</td>";
				echo "<td>";
					echo $producto['precio'];
				echo "</td>";
			echo "</tr>";

			$suma= $suma+$producto['precio'];
		}
		return $suma;
	}
 
	public static function formulario($nombre, $dni, $mail, $asunto, $sms){
		$to      = "liferbis@gmail.com";
		$from 	   = $mail;
		$titulo    = $asunto;
		$mensaje   = $sms;
		$cabeceras = 'From: $from' . "\r\n" .
		    'CC: liferbis@gmail.com' ;
		mail($para, $titulo, $mensaje, $cabeceras);
	}

}
?>