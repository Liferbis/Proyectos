<?php  
//////////////////////////////////////////////////
//////////////////////////////////////////////////
///////////// MYSQLi && PDO   ///////////////////
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


}

 ?>