<?php 
$g=true;
	function productos($p){
		global $dwes;
		global $g;
		$prod=$p;
		$int="SELECT * FROM producto";
		$resultado = $dwes->query($int);		
		while($stock=$resultado->fetch_object()){
			echo "<option value=";
			echo 		$stock->cod;

			if($prod==$stock->cod){
				echo " selected='true'>";
				echo 		$stock->nombre_corto;
				echo  "</option>\n";
				$g=false;

			}else{   
				echo 	">";
				echo 		$stock->nombre_corto;
				echo  "</option>\n";
			}
		}
	}

	function mostrarprod($p){
		global $dwes;
		global $g;

		if($g==false){
?>
		<p></p>
		<h3>Stock del producto en las tiendas:</h3>
		<p></p>
				<div class='table-responsive'>
					<table class='table table-hover'>
						<thead>
							<tr>
								<th>Nombre</th>
								<th>Unidades (Stock)</th>
							</tr>
						</thead>
						<tbody>
<?php 
			$int="SELECT tienda.nombre, stock.unidades FROM tienda INNER JOIN stock ON tienda.cod=stock.tienda WHERE stock.producto='$p'";
			$resultado = $dwes->query($int);		
			while($stock=$resultado->fetch_object()){
?>
							<tr>
								<td><?php echo $stock->nombre ?></td>
								<td><?php echo $stock->unidades ?></td>
							</tr>

<?php 
			}
?>
						</tbody>
					</table>
				</div>
				<p></p>
<?php 
		}
	}

	function familia (){
		global $dwes;
		echo "
			<h3>Tabla de Familia</h3>
			<div class='table-responsive'>
				<table class='table table-hover'>
					<thead>
						<tr>
							<th>Codigo</th>
							<th>Nombre</th>
						</tr>
					</thead>
					<tbody>
				";
				$int="SELECT * FROM familia";
				$resultado = $dwes->query($int);		
				while($stock=$resultado->fetch_object()){
					echo "<tr>
							<td> $stock->cod </td>
							<td> $stock->nombre </td>
						  </tr>";
						}
				echo "
						</tbody>
					</table>
				</div>";
	}

	function producto(){
		global $dwes;
				echo "
					<h3>Tabla de producto</h3>
					<div class='table-responsive'>
						<table class='table table-hover'>
							<thead>
								<tr>
									<th>Codigo</th>
									<th>nombre_corto</th>
									<th>descripcion</th>
									<th>PVP</th>
									<th>familia</th>
								</tr>
							</thead>
							<tbody>
				";
				$int="SELECT * FROM producto";
				$resultado = $dwes->query($int);		
				while($stock=$resultado->fetch_object()){
							echo "<tr>
									<td> $stock->cod </td>
									<td> $stock->nombre_corto </td>
									<td> $stock->descripcion</td>
									<td> $stock->PVP </td>
									<td> $stock->familia </td>
							      </tr>";
						}
				echo "
							</tbody>
						</table>
					</div>";
	}

	function tienda(){
		global $dwes;
				echo "
					<h3>Tabla de tienda</h3>
					<div class='table-responsive'>
						<table class='table table-hover'>
							<thead>
								<tr>
									<th>Codigo</th>
									<th>nombre</th>
									<th>telefono</th>
								</tr>
							</thead>
							<tbody>
				";
				$int="SELECT * FROM tienda";
				$resultado = $dwes->query($int);		
				while($stock=$resultado->fetch_object()){
							echo "<tr>
									<td> $stock->cod </td>
									<td> $stock->nombre</td>
									<td> $stock->tlf</td>
							      </tr>";
						}
				echo "
							</tbody>
						</table>
					</div>";
	}

	function stock (){
				global $dwes;
				echo "
				<h3>Tabla de stock</h3>
					<div class='table-responsive'>
						<table class='table table-hover'>
							<thead>
								<tr>
									<th>Producto</th>
									<th>Tienda</th>
									<th>Unidades</th>
								</tr>
							</thead>
							<tbody>
				";
				$int="SELECT * FROM stock";
				$resultado = $dwes->query($int);		
				while($stock=$resultado->fetch_object()){
							echo "<tr>
									<td> $stock->producto </td>
									<td> $stock->tienda </td>
									<td> $stock->unidades </td>
							      </tr>";
						}
				echo "
							</tbody>
						</table>
					</div>";
	}

	function realizaconsulta($text){
		global $dwes;
		echo $text;
		$resultado = $dwes->query($text);	
		print_r($resultado);	
		$stock=$resultado->fetch_array();
		print_r($stock);
		
	}


 ?>