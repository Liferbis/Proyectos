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
						        	 
						        </h3><!-- 
						        <p>
						        	<?php 
						        		echo "En stock tenemos: ".$p->stock;
						        	 ?>
						        </p> -->
						        <p>
						        	<?php 
						        		echo "Precio unidad: ".$p->precio."€"; // € alt+0128
						        	 ?>
						        </p>
<!-- hidden te hace el input invisiible -->
								<input type="hidden" name="codigo" value="<?php echo $p->codigo ?>">
						       <!--  <input type="hidden" name="articulo" value="<?php //echo $p->articulo ?>">
						        <input type="hidden" name="precio" value="<?php //echo $p->precio ?>">
								<input type="hidden" name="stock" value="<?php //echo $p->stock ?>"> -->
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
		
		require_once "vista.php";	
	}
}
 ?>