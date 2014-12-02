<?php 

	$asiento=0;

	function llegada(){
		global $dwes;
		$bp="DELETE FROM pasajeros";
		$resultado = $dwes->query($bp);

		$ca="UPDATE plazas SET reservada=0 WHERE reservada=1 ";
		$resultado = $dwes->query($ca);

		echo "<hr>";
		echo "Los cambios se han hecho correctamente ";
	}

	function asientos(){
		global $dwes;

		$plazas="SELECT * FROM plazas";
		$resultado = $dwes->query($plazas);	
				
		while($pl=$resultado->fetch_object()){
			$numero=$pl->numero;
			$precio=$pl->precio	;
			if($pl->reservada==0){
				echo "<option value=";
				echo 	$numero;	
				echo " selected='true'>";
				echo 		$numero;
				echo  " ( ";
				echo 		$precio;
				echo	"€)</option>\n";	
			}		
		}	
	}

	function insertar ($nombre, $dni, $a){
		global $dwes;
		$s="-";

		$cons="INSERT INTO pasajeros (dni,nombre,sexo,numero_plaza) VALUES ('$dni','$nombre','$s',$a)";

 		$resultado = $dwes->query($cons);

 		$c="UPDATE plazas SET reservada=1 WHERE numero=$a";
		$resultado = $dwes->query($c);
		echo "Se ha reservado el asiento $a";
	}
	function cargaTabla (){
		global $dwes;

		$plazas="SELECT * FROM plazas";
		$resultado = $dwes->query($plazas);	
				
		while($pl=$resultado->fetch_object()){
?>
		<div class="form-group">
			<label>
				<?php 
					echo $pl->numero; 
				?>
			</label>
			<input type="text " class="precio" name=
				<?php 
				 	echo '"'.$pl->numero.'"';
				?>
			value=
				 <?php 
				 	echo '"'.$pl->precio.'"';
				?>
			>
		</div>
<?php 
		}
	}

	function DESLOGUEA(){
		header("HTTP/1.0 401 Unauthorized");
		exit();
	}

	
?>