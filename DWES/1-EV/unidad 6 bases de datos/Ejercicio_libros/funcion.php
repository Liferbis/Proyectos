<?php 

function cargadatos($nombre, $precio, $fecha, $anio){
	global $dwes;
	$int="INSERT INTO libros (nombre,fecha, anio, precio) VALUES ($nombre, $fecha, $anio, $precio)";
	$resultado = $dwes->query($int);
}

function muestra(){
	global $dwes;
	
?>
	<h3>Tabla Libros</h3>
			<div class='table-responsive'>
				<table class='table table-hover'>
					<thead>
						<tr>
							<th>Numero</th>
							<th>Nombre</th>
							<th>Fecha adquisición</th>
							<th>Año edición</th>
							<th>Precio</th>
							
						</tr>
					</thead>
					<tbody>
<?php 
	$int=" SELECT * FROM libros ";
	$resultado = $dwes->query($int);
	while($stock=$resultado->fetch_object()){
?>
						<tr>
							<td><?php echo $stock->numero ?></td>
							<td><?php echo $stock->nombre ?></td>
							<td><?php echo $stock->fecha ?></td>
							<td><?php echo $stock->anio ?></td>
							<td><?php echo $stock->precio  ?></td>	
						</tr>
<?php 
	}
?>
					</tbody> 
				</table>
			</div>
<?php 
	
}


?>