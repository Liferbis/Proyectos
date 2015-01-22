<?php 
	include_once "header.php";
 ?>
	<div class="text-center">
		<h1  >Bienvenido al gestor de vacaciones</h1>
	
		<div id='contenido' class='row responsive'>
			<table id='table' class="table table-hover">
				<thead>
					<tr>
						<h1>¿Qué deseas hacer?</h1>
						<hr>
					</tr>
				</thead>
				<tbody>
					<tr id='tbody'>
						<a href="#"><h3>Ver vacaciones de ....</h3></a>
					</tr>
				</tbody>
			</table>	
				
				<hr>
				

				<form method="post">
					<input type="month" name="year">
					<input type="submit">		
				</form>
			</div>
		</div>
		

<?php 
	include_once "pie.php";
 ?>

