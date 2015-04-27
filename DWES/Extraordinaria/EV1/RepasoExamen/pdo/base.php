<?php 

/**
* Clase Base de datos con consultas de PDO
*/

class BD {
	const usu="root";
	const ctv="";


	public static function conect(){
	 	$dwes = new PDO('mysql:host=localhost;dbname=banco' , BD::usu , BD::ctv);
	 	return $dwes;
	}

	public static function comprobar($nombre, $ctv){
		$dwes = BD::conect();

		$c="SELECT * FROM clientes WHERE nombre='$nombre' AND password='$ctv'";

		$resultado = $dwes->query($c);	
		$acceso= $resultado->fetch();

		if(!$acceso){
			unset($dwes);
			return "false";
		}else{
			unset($dwes);
			return "true";
		}
	}

	public static function numC($nombre){
		$dwes=BD::conect();

		$c="SELECT num_cliente FROM clientes WHERE nombre='$nombre'";
		
		$resultado = $dwes->query($c);	
	
		while($num=$resultado->fetch()){
			$n=$num['num_cliente'];
		}
		unset($dwes);
		return $n;
	}

	public static function cuenta($num_cliente){
		$dwes=BD::conect();

		$c="SELECT * FROM cuentas WHERE num_cliente='$num_cliente'";

		$resultado = $dwes->query($c);

		$n=array();

		while($num=$resultado->fetch()){
			$n[]=array($num['num_cuenta'], 
						$num['saldo']);
		}

		unset($dwes);
		return $n;
	}

	public static function dameDinero($ncu){
		$dwes=BD::conect();

		$c="SELECT saldo FROM cuentas WHERE num_cuenta='$ncu'";
		
		$resultado = $dwes->query($c);	
	
		while($num=$resultado->fetch()){
			$n=$num['saldo'];
		}

		unset($dwes);
		return $n;
	}

	public static function traspaso($origen, $d, $destino){
		$dwes = BD::conect();
		$saldo = BD::dameDinero($origen);
		$saldo = $saldo-$d;
		$nsaldo = BD::dameDinero($destino);
		$nsaldo = $nsaldo+$d;

		$dwes->beginTransaction();

		$c="UPDATE cuentas SET saldo= '$saldo' WHERE num_cuenta = '$origen';";
		$d="UPDATE cuentas SET saldo= '$nsaldo' WHERE num_cuenta = '$destino';";

		
		$res = $dwes->exec($c);
		$res1 = $dwes->exec($d);

		if($dwes->commit()){
			unset($dwes);
			return "true";
		}else{
			$dwes->rollback();
 			unset($dwes);
 			return "false";
	 	}
	}




}
 ?>