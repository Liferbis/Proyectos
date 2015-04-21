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

///MYSQLi /////
	public static function conect(){
        $dwes = new mysqli(BD::localhost, BD::usu , BD::ctv, BD::bd);
		return $dwes;
	}
/// PDO /////
/// 
/// public static function conectPDO(){
/// 	$dwes = new PDO('mysql:host=BD::localhost ; dbname=BD::bd' , BD::usu , BD::ctv);
/// 	return $dwes;
/// }
/// 
/// 
/// 
/// 
/// 
/// 

	
///MYSQLi /////
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

/// PDO /////
/// 
/// public static function llegada(){
/// 	$dwes = BD::conectPDO();
/// 	$dwes->autocommit(false);
/// 	
/// 	try{
///		 	$c="UPDATE plazas SET reservada = '0'";
///		 	$d="DELETE FROM pasajeros";
///		 	
///		 	$res = $dwes->exec($c);	
///		 	$res = $dwes->exec($d);
///		 	
///		 	if($res & $res1){
///		 		$dwes->commit();
///		 		unset($dwes);
///		 		return true;
///		 	}else{
///		 		throw new Exception('error!');
///		 	}
///		 }catch (Exception $e){
///		 	$dwes->rollback();
///		 	unset($dwes);
///		 	return false;
///		 }
/// }

/////// MYSQLi /////////////////////

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
/// PDO /////
/// 
/// public static function reserva($nombre, $dni, $sex, $asiento){
/// 	$dwes = BD::conectPDO();
/// 	$dwes->autocommit(false);
/// 	try{
/// 		$c="INSERT INTO pasajeros (`dni`, `nombre`, `sexo`, `numero_plaza`) VALUES ('$dni', '$nombre', '$sex', '$asiento');";
//		$d="UPDATE plazas SET reservada = '1' WHERE numero = $asiento ;";
/// 	
/// 		$res = $dwes->exec($c);	
/// 		$res = $dwes->exec($d);
/// 		
/// 		if($res & $res1){
///		 		$dwes->commit();
///		 		unset($dwes);
///		 		return true;
///		 	}else{
///		 		throw new Exception('error!');
///		 	}
///		 }catch (Exception $e){
///		 	$dwes->rollback();
///		 	unset($dwes);
///		 	return false;
///		 }
/// }


}

 ?>