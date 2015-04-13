<?php  
//////////////////////////////////////////////////
//////////////////////////////////////////////////
///////////// MYSQLi && PDO   ///////////////////
//////////////////////////////////////////////////
//////////////////////////////////////////////////
class BD {
	const localhost="localhost";
	const usu="root";
	const ctv="";
	const bd="funicular";


	public static function conect(){
        $dwes = new mysqli(BD::localhost, BD::usu , BD::ctv, BD::bd);
		return $dwes;
	}

	public static function llegada(){
		$dwes = BD::conect();
		$c="UPDATE plazas SET reservada = '0'";
		$d="DELETE FROM pasajeros";
		$dwes->autocommit(false);
		$res = $dwes->query($c);
		$res1 = $dwes->query($d);

		if($dwes->commit()){
			$dwes->close();
			return true;
		}else{
			$dwes->rollback();
 			$dwes->close();
 			return false;
	 	}
	}



	public static function asientos(){
		$dwes=BD::conect();

		$plazas="SELECT * FROM plazas";
		$resultado = $dwes->query($plazas);	
				
		while($pl=$resultado->fetch_object()){
			if($pl->reservada==0){
				echo "<option value=";
				echo 	$pl->numero;	
				echo " >";
				echo 		$pl->numero;
				echo  " ( ";
				echo 		$pl->precio;
				echo	"€)</option>\n";	
			}		
		}
	}

	public static function reserva($nombre, $dni, $sex, $asiento){
		$dwes=BD::conect();

		$c="INSERT INTO pasajeros (`dni`, `nombre`, `sexo`, `numero_plaza`) VALUES ('$dni', '$nombre', '$sex', '$asiento');";
		$d="UPDATE plazas SET reservada = '1' WHERE numero = $asiento ;";
		$dwes->autocommit(false);
		$res = $dwes->query($c);
		$res1 = $dwes->query($d);

		if($dwes->commit()){
			$dwes->close();
			return true;
		}else{
			$dwes->rollback();
 			$dwes->close();
 			return false;
	 	}
	}

	public static function modifica(){
		
	}

}

 ?>