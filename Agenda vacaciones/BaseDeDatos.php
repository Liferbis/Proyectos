<?php 

//////////////////////////////////////////////////////////////
//////////// Esta es la clase baseDeDatos ////////////////////
//////////////////////////////////////////////////////////////
//////////// aqui se encuentran todos los metodos  ///////////
//////////// que hacen referencia a la base de datos /////////
/////////////se aconseja que si no sabes no toques ///////////
//////////////////////////////////////////////////////////////

require_once "class.empleados.php";

class BD {
	const localhost="localhost";
	const usu="root";
	const ctv="";
	const bd="vacaciones";

	public static function conect(){
		 $dwes = new mysqli(BD::localhost, BD::usu , BD::ctv, BD::bd);
		return $dwes;
	}

	public static function desconect(){
		$dwes = BD::conect();
		$dwes->close();
	}

//////////////////////   INSERT INTO   //////////////////////////////////////////////////////////////
	
	public static function registro($usuario,$ctv,$admin,$dni){

		$dwes = BD::conect();

		$cons="INSERT INTO usuarios (usuario, ctv,admin ) VALUES ('$usuario','$ctv','$admin')";

		$resultado = $dwes->query($cons);
		if(!$resultado){
			$dwes->close();
			return false;
		}else{
			$dwes->close();
			return true;
		}
	}
	
	public static function privilegios(){
		$sentencia="GRANT [permiso] ON [nombre de bases de datos].[nombre de tabla] TO '[nombre de usuario]'@'localhost'";
	}

	public static function nuevoEmpleado($dni, $nombre, $apellido1, $apellido2,  $localidad, $becario, $movil, $comentarios){
		$dwes = BD::conect();
		$c="INSERT INTO empleoficina (dni, nombre, apellido1, apellido2,  localidad, movil, comentarios) VALUES ('$dni','$nombre', '$apellido1', '$apellido2',  '$localidad', '$becario', '$movil', '$comentarios')";
		$resultado = $dwes->query($cons);
		if(!$resultado){
			$dwes->close();
			return false;
		}else{
			$dwes->close();
			return true;
		}
	}

///////////////////////   BORRAR    //////////////////////////////////////////////////////////////

	public static function borraEmpleado($codigo){
		$dwes=BD::conect();
		$c="DELETE FROM empleoficina (WHERE codigo = '$codigo');";
		$resultado = $dwes->query($c);
		$dwes->close();
	}

//////////////////////    SELECT    //////////////////////////////////////////////////////////////
	
	public static function verifica($usuario, $ctv){
		$dwes = BD::conect();
		$c="SELECT usuario, ctv FROM usuarios WHERE usuario='$usuario' AND ctv='$ctv'";

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
		//el siguiente metodo nos devuelve la tabla a la que tiene acceso el usuario que se ha logeado
	public function sesiones(){//($usu){ 
		$dwes = BD::conect();

		$c="SELECT tabla FROM usuarios WHERE usuario='$usu' ";

		$resultado = $dwes->query($c);
		$tabla=$resultado->fetch_object();

		if(!$tabla){
			$dwes->close();
			return "error";
		}else{
			$dwes->close();
			//return $tabla;
			return "empleoficina";
		}
	}

	public static function CargaEmpleados($tabla){
		$dwes = BD::conect();

		$c="SELECT * FROM $tabla ";

		$resultado = $dwes->query($c);
		
		$empleados=array();
		
		while($emple=$resultado->fetch_object()){
			$empleados [] = new Empleado( $emple->codigo,
											$emple->dni,
											$emple->nombre, 
											$emple->apellido1, 
											$emple->apellido2, 
											$emple->localidadDeTrabajo,
											$emple->movil,
											$emple->comentarios);	
		}
		$dwes->close();	
		return $empleados;
	}

	public static function DameEmpleado($sesion){
		
		$dwes = BD::conect();

		$tabla=BD::sesiones($sesion);

		$c="SELECT * FROM '$tabla' WHERE codigo='$codigo'";

		$resultado = $dwes->query($c);
		
		$empleado=array();
		
		while($emple=$resultado->fetch_object()){
			$empleado [] = new Empleado( $emple->codigo,
											$emple->dni,
											$emple->nombre, 
											$emple->apellido1, 
											$emple->apellido2, 
											$emple->localidadDeTrabajo,
											$emple->movil,
											$emple->comentarios);	
		}
		$dwes->close();	
		return $empleado;
	}

	public static function damefestivos(){
		$dwes = BD::conect();
		$festivos=array();
		$c="SELECT * FROM 'festivos' ORDER BY 'fecha' ASC";
		$resultado = $dwes->query($c);
		while($fes=$resultado->fetch_object()){
			$festivos [] =  $fes["ambito"];
			$festivos [] =	$fes["comentarios"];
			$festivos [] =	$fes["fecha"];
		}
		$dwes->close();	
		return $festivos;
	}

	public static function damedias(){
		$dwes = BD::conect();
		$dias=array();
		$dwes->close();
	}

	public static function dni($dni){
		$dwes = BD::conect();
		$c="SELECT dni FROM usuarios WHERE dni=$dni";
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

///////////////////////////////////////////////////////////////////////
////*/***EXCEL TODAS LAS FUNCIONES PARA EL EXCEL///*/***///////////////
///////   |   /////   |   //////////   |   ///////   |   //////////////
///////   V   /////   V   //////////   V   ///////   V   //////////////
/////// EXCEL ////////// Funcion que genera todos los datos del EXCEL /
///////    en funcion del CODIGO de empleado  /////////////////////////
	
	public static function cargaExcel($codigo){
		$dwes = BD::conect();
		
		$c="SELECT * FROM dias WHERE cod_empleado='$codigo'";

		$resultado = $dwes->query($c);
		
		$vbpcomen=array();
		
		while($vaca=$resultado->fetch_object()){
			$vbpcomen [] =  $vaca["cod_dias"],
							$vaca["cod_empleado"],
							$vaca["FechaInicio"],
							$vaca["FechaFin"],
							$vaca["dias_Natu"],
							$vaca["dias_lab"],
							$vaca["aumentoDias"],
							$vaca["SALDO_DIAS"],
							$vaca["vacaciones"],
							$vaca["PerRetri"],
							$vaca["PerNoRetri"],
							$vaca["Bec"],							
							$vaca["Bal"],
							$vaca["Comentarios"],
							$vaca["user_login"];
		}
		$dwes->close();	
		return $vbpcomen;

	}

//// EXCEL ////////// Funcion que genera todos los datos del EXCEL de ///
////////// TODOSSSS los empleados  //////////////////////////////////////
	public static function cargaExcel(){
		$dwes = BD::conect();
		
		$c="SELECT * FROM dias ";

		$resultado = $dwes->query($c);
		
		$vbpcomen=array();
		
		while($vaca=$resultado->fetch_object()){
			$vbpcomen [] = 
							$vaca["cod_dias"],
							$vaca["cod_empleado"],
							$vaca["FechaInicio"],
							$vaca["FechaFin"],
							$vaca["dias_Natu"],
							$vaca["dias_lab"],
							$vaca["aumentoDias"],
							$vaca["SALDO_DIAS"],
							$vaca["vacaciones"],
							$vaca["PerRetri"],
							$vaca["PerNoRetri"],
							$vaca["Bec"],							
							$vaca["Bal"],
							$vaca["Comentarios"],
							$vaca["user_login"];
		}

		$dwes->close();	
		return $vbpcomen;
	}

/////// EXCEL ////////// Funcion que genera todos los datos del EXCEL ///////
///////    en funcion del CODIGO de empleado y la CLASE de dias libre  //////
	
	public static function cargaExcel($codigo, $clase){
		
		if($clase=="vaca"){
			$dwes = BD::conect();
		
			$c="SELECT * FROM dias WHERE cod_empleado='$codigo' ";

			$resultado = $dwes->query($c);
			
			$vbpcomen=array();
			
			while($vaca=$resultado->fetch_object()){
				if(){
				$vbpcomen [] = 
								$vaca["cod_dias"],
								$vaca["cod_empleado"],
								$vaca["FechaInicio"],
								$vaca["FechaFin"],
								$vaca["dias_Natu"],
								$vaca["dias_lab"],
								$vaca["aumentoDias"],
								$vaca["SALDO_DIAS"],
								$vaca["vacaciones"],
								$vaca["Comentarios"],
								$vaca["user_login"];
			}
		}

		if($clase=="PerRetri"){
			$dwes = BD::conect();
		
			$c="SELECT * FROM dias WHERE cod_empleado='$codigo' ";

			$resultado = $dwes->query($c);
			
			$vbpcomen=array();
			
			while($vaca=$resultado->fetch_object()){
				if(){
				$vbpcomen [] = 
								$vaca["cod_dias"],
								$vaca["cod_empleado"],
								$vaca["FechaInicio"],
								$vaca["FechaFin"],
								$vaca["dias_Natu"],
								$vaca["dias_lab"],
								$vaca["aumentoDias"],
								$vaca["SALDO_DIAS"],
								$vaca["PerRetri"],
								$vaca["Comentarios"],
								$vaca["user_login"];
			}
		}

		if($case=="PerNoRetri"){
			$dwes = BD::conect();
		
			$c="SELECT * FROM dias WHERE cod_empleado='$codigo' ";

			$resultado = $dwes->query($c);
			
			$vbpcomen=array();
			
			while($vaca=$resultado->fetch_object()){
				if(){
				$vbpcomen [] = 
								$vaca["cod_dias"],
								$vaca["cod_empleado"],
								$vaca["FechaInicio"],
								$vaca["FechaFin"],
								$vaca["dias_Natu"],
								$vaca["dias_lab"],
								$vaca["aumentoDias"],
								$vaca["SALDO_DIAS"],
								$vaca["PerNoRetri"],
								$vaca["Comentarios"],
								$vaca["user_login"];
			}
		}

		if($clase=="Bec"){
			$dwes = BD::conect();
		
			$c="SELECT * FROM dias WHERE cod_empleado='$codigo' ";

			$resultado = $dwes->query($c);
			
			$vbpcomen=array();
			
			while($vaca=$resultado->fetch_object()){
				if(){
				$vbpcomen [] = 
								$vaca["cod_dias"],
								$vaca["cod_empleado"],
								$vaca["FechaInicio"],
								$vaca["FechaFin"],
								$vaca["dias_Natu"],
								$vaca["dias_lab"],
								$vaca["aumentoDias"],
								$vaca["SALDO_DIAS"],
								$vaca["Bec"],
								$vaca["Comentarios"],
								$vaca["user_login"];
			}
		}

		if($clase=="Bal"){
			$dwes = BD::conect();
		
			$c="SELECT * FROM dias WHERE cod_empleado='$codigo' ";

			$resultado = $dwes->query($c);
			
			$vbpcomen=array();
			
			while($vaca=$resultado->fetch_object()){
				if(){
				$vbpcomen [] = 
								$vaca["cod_dias"],
								$vaca["cod_empleado"],
								$vaca["FechaInicio"],
								$vaca["FechaFin"],
								$vaca["dias_Natu"],
								$vaca["dias_lab"],
								$vaca["aumentoDias"],
								$vaca["SALDO_DIAS"],							
								$vaca["Bal"],
								$vaca["Comentarios"],
								$vaca["user_login"];
			}
		}
		
		$dwes->close();	
		return $vbpcomen;	
	}

///////////////////////////////////////////////////////////////////////
////*/***//* COPIA SEGURIDAD DE LA BASE DE DATOS *//***/*//////////////
///////   |   /////   |   //////////   |   ///////   |   //////////////
///////   V   /////   V   //////////   V   ///////   V   //////////////
/////// BASE DE DATOS ////////// Funcion que genera todos los dias ////
///////    una copia de seguridad por lo que pueda pasar   ////////////
///////////////////////////////////////////////////////////////////////
	public static function copiabd(){

	}


////////////  CREA CARPETAS  /////////////////////////////////////////////////////////





}
?>