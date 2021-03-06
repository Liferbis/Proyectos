<?php 
require_once "producto.php";

class BD {
	const localhost="localhost";
	const usu="root";
	const ctv="";
	const bd="tienda";


	public static function conect(){
        $dwes = new mysqli(BD::localhost, BD::usu , BD::ctv, BD::bd);
		return $dwes;
	}

	public static function desconect(){
		$dwes = BD::conect();
		$dwes->close();
	}

	public static function verifica($nombre, $ctv){
		$verifica=false;
		$dwes = BD::conect();
		$c="SELECT nombre, ctv FROM registro WHERE nombre='$nombre' AND ctv='$ctv'";

		$resultado = $dwes->query($c);

		$acceso=$resultado->fetch_object();

		if(!$acceso){
			$verifica=false;
		}else{
			$verifica=true;
		}
		$dwes->close();
		return $verifica;
	}

	public static function codigo($codigo){
		$dwes = BD::conect();

		$cons="SELECT * FROM productos WHERE codigo='$codigo'";
		$resultado = $dwes->query($cons);
		
		if($prod=$resultado->fetch_object()){
			$productos  = new producto( $prod->codigo, $prod->nombre, $prod->articulo, $prod->precio, $prod->stock, $prod->ruta );
		}
		$dwes->close();	
		return $productos;
	}

	public static function buscador($palabra){
		$string="%".$palabra."%";
		$dwes = BD::conect();

		$cons="SELECT * FROM productos WHERE nombre LIKE '$string'";
		$resultado = $dwes->query($cons);
		if(!$resultado){
			
		}
		if($prod=$resultado->fetch_object()){
			$productos  = new producto( $prod->codigo, $prod->nombre, $prod->articulo, $prod->precio, $prod->stock, $prod->ruta );
		}
		$dwes->close();	
		return $productos;
	}
	
	public static function getMayorPrecio(){
		$dwes = BD::conect();
		$auxarray=array();
		$cons="SELECT * FROM productos WHERE precio = (SELECT max(precio) FROM productos)";
		$resultado = $dwes->query($cons);
		
		if($prod=$resultado->fetch_object()){
			$producto  = new producto( $prod->codigo, $prod->nombre, $prod->articulo, $prod->precio, $prod->stock, $prod->ruta );
			
		}
		$dwes->close();	
		return $producto;
	}

	public static function registro($nombre, $dni, $ap1, $ap2, $dire, $cp, $a, $ctv){

		$dwes = BD::conect();

		$cons="INSERT INTO registro (dni,nombre,apellido1,apellido2,direccion,cp,autonoma,ctv ) VALUES ('$dni','$nombre','$ap1','$ap2','$dire',$cp,'$a','$ctv')";

		$resultado = $dwes->query($cons);
		if(!$resultado){
			$dwes->close();
			return false;
		}else{
			$dwes->close();
			return true;
		}
	}


	public function cargaProductos(){
		$dwes = BD::conect();

		$cons="SELECT * FROM productos";

		$resultado = $dwes->query($cons);
		
			$productos=array();
			while($prod=$resultado->fetch_object()){
				$productos [] = new producto( $prod->codigo,$prod->nomb, $prod->articulo, $prod->precio, $prod->stock, $prod->ruta );		
			}
			$dwes->close();	
			return $productos;
	}

	public static function dni($dni){
		$dwes = BD::conect();
		$c="SELECT dni FROM registro WHERE dni=$dni";
		$resultado = $dwes->query($c);
		$acceso=$resultado->fetch_object();
		if(!$acceso){
			$dwes->close();	
			return false;
		}else{
			$dwes->close();	
			return true;
		}
	}

	public static function modifica($nombre, $dni, $ctv){
		$dwes = BD::conect();
		if(BD::dni($dni)){
			$cons="UPDATE registro SET ctv=$ctv WHERE dni=$dni";
			$resultado = $dwes->query($cons);
			if(!$resultado){
				$dwes->close();
				return false;
			}else{
				$dwes->close();
				return true;
			}
		}else{
			$dwes->close();
			return true;
		}
	}

}
 ?>