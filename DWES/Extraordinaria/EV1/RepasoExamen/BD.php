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
		
		$c="SELECT * FROM clientes WHERE nombre='$nombre' AND ctv='$ctv'";
		
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

}

 ?>