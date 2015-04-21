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

		$dwes=BD::conect();

		$plazas="SELECT * FROM plazas";
		$resultado = $dwes->query($plazas);	
		$i=0;	
		while($pl=$resultado->fetch_object()){
?>
			<div class="form-group">
				<label>
					<?php 
						echo "Plaza ".$pl->numero.":"; 
					?>
				</label>
				<input type="text" name="<?php echo $i;?>" value="<?php echo $pl->precio ?>">€
			</div>
<?php 
			$i++;
		}
	}

	public static function numAsientos(){
		$dwes=BD::conect();

		$plazas="SELECT * FROM plazas";
		$resultado = $dwes->query($plazas);	
		$asiento=array();
		$i=0;	
		while($pl=$resultado->fetch_object()){
			$asiento["$i"]=$pl->numero;
			$i++;
		}
		$dwes->close();
		return $asiento;
	}

	public static function actualiza($plaza){
		$dwes=BD::conect();
		$asiento=BD::numAsientos();
		$dwes->autocommit(false);
		$n=count($asiento);
		for ($i=0; $i < $n ; $i++) { 
				
			$aux=$plaza["$i"];
			$aux1=$asiento["$i"];
			
			$d="UPDATE plazas SET precio = '$aux' WHERE numero= '$aux1';";
			
			$res = $dwes->query($d);
			
			if(!$dwes->commit()){
				$dwes->rollback();
				$dwes->close();
 				return false;
	 		}
		}

		if($dwes->commit()){
			$dwes->close();
			return true;
		}
	}

}

 ?>