<?php 


////// BASE DE DATOS /////

class BD{
	const localhost="localhost";
	const usu="root";
	const ctv="";
	const bd="banco";


	public static function conect(){
        $dwes = new mysqli(BD::localhost, BD::usu , BD::ctv, BD::bd);
		return $dwes;
	}

	public static function comprobar($nombre, $ctv){
		$dwes=BD::conect();
		
		$c="SELECT * FROM clientes WHERE nombre='$nombre' AND password='$ctv'";
		
		$resultado = $dwes->query($c);	

		if(!$resultado){
			$dwes->close();
			return "false";
		}else{
			$dwes->close();
			return "true";
		}
	}

	public static function numC($nombre){
		$dwes=BD::conect();

		$c="SELECT num_cliente FROM clientes WHERE nombre='$nombre'";
		
		$resultado = $dwes->query($c);	
	
		while($num=$resultado->fetch_object()){
			$n=$num->num_cliente;

		}

		$dwes->close();
		return $n;
	}

	public static function cuenta($num_cliente){
		$dwes=BD::conect();

		$c="SELECT * FROM cuentas WHERE num_cliente='$num_cliente'";

		$resultado = $dwes->query($c);

		$n=array();

		while($num=$resultado->fetch_object()){
			$n[]=array($num->num_cuenta, 
						$num->saldo);
		}

		$dwes->close();
		return $n;
	}

	public static function dameDinero($ncu){
		$dwes=BD::conect();

		$c="SELECT saldo FROM cuentas WHERE num_cuenta='$ncu'";
		
		$resultado = $dwes->query($c);	
	
		while($num=$resultado->fetch_object()){
			$n=$num->saldo;

		}

		$dwes->close();
		return $n;
	}	

	public static function traspaso($origen, $d, $destino){
		$dwes = BD::conect();
		$saldo = BD::dameDinero($origen);
		$saldo = $saldo-$d;
		$nsaldo = BD::dameDinero($destino);
		$nsaldo = $nsaldo+$d;

		$c="UPDATE cuentas SET saldo= '$saldo' WHERE num_cuenta = '$origen';";
		$d="UPDATE cuentas SET saldo= '$nsaldo' WHERE num_cuenta = '$destino';";

		$dwes->autocommit(false);
		$res = $dwes->query($c);
		$res1 = $dwes->query($d);

		if($dwes->commit()){
			$dwes->close();
			return "true";
		}else{
			$dwes->rollback();
 			$dwes->close();
 			return "false";
	 	}
	}
}

 ?>