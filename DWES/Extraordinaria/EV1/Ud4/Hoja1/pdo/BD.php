<?php  
//////////////////////////////////////////////////
//////////////////////////////////////////////////
///////////// PDO   ///////////////////
//////////////////////////////////////////////////
//////////////////////////////////////////////////
class BD {
	//const localhost="localhost";
	const usu="root";
	const ctv="";
	//const bd="funicular";


	public static function conectPDO(){
	 	$dwes = new PDO('mysql:host=localhost;dbname=funicular' , BD::usu , BD::ctv);
	 	return $dwes;
	}

	public static function llegada(){
	 	$dwes = BD::conectPDO();
	 	$todo_bien = true; 
		$dwes->beginTransaction();
	 	
	 	$c="UPDATE plazas SET reservada = '0'";
		$d="DELETE FROM pasajeros";
			 	
		if (($dwes->exec($c) == 0) || ($dwes->exec($d) == 0)){
			$todo_bien = false;
		}
		if ($todo_bien == true){
			$dwes->commit();
			unset($dwes);
			return true;
		} else{
			$dwes->rollback();
			unset($dwes);
			return true;
		} 
	}


	public static function asientos(){
		$dwes=BD::conectPDO();

		$plazas="SELECT * FROM plazas";
		$res = $dwes->query($plazas);	
				
		while($pl=$res->fetch()){
			if($pl['reservada']==0){
				echo "<option value=";
				echo 	$pl['numero'];	
				echo " >";
				echo 		$pl['numero'];
				echo  " ( ";
				echo 		$pl['precio'];
				echo	"€)</option>\n";	
			}		
		}
	}

	public static function modifica(){
		$dwes=BD::conectPDO();

		$plazas="SELECT * FROM plazas";
		$resultado = $dwes->query($plazas);	
		$i=0;	
		while($pl=$resultado->fetch()){
?>
			<div class="form-group">
				<label>
					<?php 
						echo "Plaza ".$pl['numero'].":"; 
					?>
				</label>
				<input type="text" name="<?php echo $i;?>" value="<?php echo $pl['precio'] ?>">€
			</div>
<?php 
			$i++;
		}
	}

	public static function reserva($nombre, $dni, $sex, $asiento){
	 	$dwes = BD::conectPDO();
	 	$todo_bien = true; 
		$dwes->beginTransaction();
	 	
	 	$c="INSERT INTO pasajeros (`dni`, `nombre`, `sexo`, `numero_plaza`) VALUES ('$dni', '$nombre', '$sex', '$asiento');";
	 	$d="UPDATE plazas SET reservada = '1' WHERE numero = $asiento ;";
	 	
	 	if (($dwes->exec($c) == 0) || ($dwes->exec($d) == 0)){
			$todo_bien = false;
		}
		if ($todo_bien == true){
			$dwes->commit();
			unset($dwes);
			return true;
		} else{
			$dwes->rollback();
			unset($dwes);
			return true;
		} 
	}

	public static function actualiza($plaza){
		$dwes = BD::conectPDO();
		$asiento=BD::numAsientos();
		$n=count($asiento);
		$filas=0;

		$dwes->beginTransaction();
		
		for ($i=0; $i < $n ; $i++) { 
				
			$aux=$plaza["$i"];
			$aux1=$asiento["$i"];
			
			$d="UPDATE plazas SET precio = $aux WHERE numero= $aux1;";

			if ($dwes->exec($d)){
				$filas++;
			}			
			
			
			
		}

		if ($filas>0){
			$dwes->commit();
			unset($dwes);
			return true;
		} else{
			$dwes->rollback();
			unset($dwes);
			return false;
		} 
	}

	public static function numAsientos(){
		$dwes=BD::conectPDO();

		$plazas="SELECT * FROM plazas";
		$resultado = $dwes->query($plazas);	
		$asiento=array();
		$i=0;	
		while($pl=$resultado->fetch()){
			$asiento["$i"]=$pl['numero'];
			$i++;
		}
		unset($dwes);
		return $asiento;
	}






}

 ?>