<?php 
include_once "header.php";
?>
<div class="text-center">
	
	<div id='contenido' class='row responsive'>
		<table id='table' class="table table-hover">
			<thead>
				<tr>
					<h1>Ya estas logeado como "<?php echo $_SESSION["usuario"]; ?>"</h1>
					<hr>
				</tr>
			</thead>
			<tbody>
				<tr >
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button type="submit"class="btn btn-success">
							<span class="glyphicon glyphicon-home"></span>
							<a href="index.php" style="color:white"> Pagina Principal </a>
							<span class="glyphicon glyphicon-home"></span>
						</button>
					</div>
				</tr>
			</tbody>
		</table>	
	<div class="text-center">
	<small>En caso de pérdida u olvido de credenciales consulte con <a href="mailto:l.fernandez@codelse.com">Lidia Fernández</a></small>
</div>
</div>
</div>


<?php 
include_once "pie.php";
?>