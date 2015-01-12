<?php 
/**
* 
*/
class utli
{
	
	public static function mostrar($array){
		foreach ($array as $p) {
	?>
					<div class="row well">
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 ">
						      <img class="imagen-responsive" src="<?php echo $p->ruta ?>" >
						</div>
						<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 ">		
							<h3><strong>
						        <?php 
							        echo $p->titulo;
							    ?>
							</strong></h3>
							<p class="text-justify">
							    <?php 
							        echo $p->noticia;
							     ?>
							</p>
							<p></p>
							<p></p>
							<a href="<?php $p->enlace ?>" target="_black">
								<button type="button" id="boton" class="btn btn-large btn-block btn-success" > 
									<span class="glyphicon glyphicon-eye-open"/>
									<b> Seguir leyendo</b>
								</button>
							</a>
						</div>
					</div>
<?php 
		}
?>
			
<?php 
		
	}


	
}

 ?>