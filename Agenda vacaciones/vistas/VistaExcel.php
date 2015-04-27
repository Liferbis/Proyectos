<?php 
include_once "header.php";
require_once "libreria\Excel-PHP\PHPExcel.php";

?>
<div class="text-center">
	<div class="row " >
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h1 class="text-center">EXCEL</h1>
			<hr>
		</div>
		<?php 
			require_once "include/ArchivoExcel.php";
		?>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h3>El archivo creado esta en la siguiente ruta:</h3>
				<h3>
					<a href="<?php echo $ruta ?>"><?php echo $ruta ?></a>
				</h3>
				<h4>Copiela y peguela en el explorador de carpetas</h4>
				<div class="text-center">
					<img id="imagen" src="include/nav.JPG" class="img-responsive" alt="Image">
				</div>
			</div>
		</div>
	</div><br>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<button type="submit"class="btn btn-success">
				<span class="glyphicon glyphicon-home"></span>
					<a href="index.php" style="color:white"> Pagina Principal </a>
				<span class="glyphicon glyphicon-home"></span>
			</button>
		</div>
	</div>
</div>
<?php 

			
include_once "pie.php";
?>