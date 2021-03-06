<?php 

//////////////////////////////////////////////////////////////
//////////// Esta es la clase baseDeDatos ////////////////////
//////////////////////////////////////////////////////////////
//////////// aqui se encuentran todos los metodos  ///////////
//////////// que hacen referencia a la base de datos /////////
/////////////se aconseja que si no sabes no toques ///////////
//////////////////////////////////////////////////////////////

require_once "classes.php";

class BD {
	const localhost="localhost";
	const usu="root";
	const ctv="";
	const bd="vacaciones";

	public static function conect(){
		$dwes = new mysqli(BD::localhost, BD::usu , BD::ctv, BD::bd);
		$dwes->set_charset("utf8");
		return $dwes;
	}

//////////////////////   COPIA DE SEGURIDAD  ////////////////////////////////////////////////////////
	// public static function copiaSeg(){
		// variables
		// $dbhost = BD::localhost;
		// $dbname = BD::bd;
		// $dbuser = BD::usu;
		// $dbpass = BD::ctv;

		// $dwes = BD::conect();

		// $ruta="C:/GestorDeVacaciones/CopiaSeguridadBaseDeDatos/" . $dbname . date("Y-m-d-H-i-s"); 
		// $filename = $dbname . date("Y-m-d-H-i-s") . '.sql';

		// $tables=array();

		// $c="Show tables;";

		// $resultado = $dwes->query($cons);

		// while($tab=$resultado->fetch_object()){
		// 	$tables[]=
		// }
		// header("Pragma: no-cache"); 
		// header("Expires: 0"); 
		// header("Content-Transfer-Encoding: binary"); 
		// header("Content-type: application/force-download"); 
		// header("Content-Disposition: attachment; filename=$filename"); 
		 
		// comandos a ejecutar
		// $commands = array("mysqldump --opt -h $dbhost -u $dbuser -p $dbpass -v $dbname > $backup_file", "bzip2 $backup_file");
		// exec($command);
		//$executa = "c://mysql//bin//mysqldump.exe -u $dbuser --password=$dbpass --opt $dbname"; 
		//system($executa, $resultado); 
		// ejecución y salida de éxito o errores
		 // foreach ( $commands as $command ) {
		 //         system($command,$output);
		 //         echo $output;
		 // }
		//if ($resultado) { echo "<H1>Error ejecutando comando: $executa</H1>\n"; } 
	// }

	

//////////////////////   INSERT INTO   //////////////////////////////////////////////////////////////
	
	public static function registro($sesion, $usuario, $ctv, $dni){

		$dwes = BD::conect();

		$tabla=BD::sesiones($sesion);

		$cons="INSERT INTO usuarios (usuario, ctv, tabla, dni) VALUES ('$usuario', '$ctv', '$tabla', '$dni');";

		$resultado = $dwes->query($cons);
		if(!$resultado){
			$dwes->close();
			return "false";
		}else{
			$dwes->close();
			return "true";
		}
	}
	

	public static function nuevoEmpleado($sesion, $dni, $nombre, $apellido1, $apellido2, $localidad, $movil, $saldo, $comentarios){
		$dwes = BD::conect();
		$verifica="false";

		$tabla=BD::sesiones($_SESSION["usuario"]);
		
		$a="SELECT * FROM $tabla";
		
		$res = $dwes->query($a);

		$n = $res->num_rows;
		
		
		if($tabla=="empleoficina"){
			$codigo="eo".($n+1);
			
		}else if($tabla=="emplealmacen"){
			$codigo="ea".($n+1);
			
		}
		$cons="INSERT INTO $tabla (codigo, dni, nombre, apellido1, apellido2,  localidad, movil, saldo, comentarios) VALUES ('$codigo','$dni','$nombre', '$apellido1', '$apellido2',  '$localidad', '$movil', $saldo, '$comentarios')";
		
		$resultado = $dwes->query($cons);
		
		if(!$resultado){
			$dwes->close();
			return $verifica;
		}else{
			$dwes->close();
			$verifica="true";
			return $verifica;
		}
	}

	public static function dias($cEmpleado, $fechaI, $fechaF, $diasN, $diasL, $tipo, $comentario, $sesion){
		
		$dwes=BD::conect();

		$dwes->autocommit(false);

		//echo $_SESSION["usuario"];

		$tabla=BD::sesiones($_SESSION["usuario"]);

		//echo $tabla."-".$cEmpleado;
		$empleado=BD::DameEmpleado($_SESSION["usuario"], $cEmpleado);

		foreach ($empleado as $emple) {
			$nombre=$emple->nombre;
			$apellido1=$emple->apellido1;
			$apellido2=$emple->apellido2;
			$saldo=$emple->saldo;
			$coment=$emple->comentarios;
		}
		
		$hoy=date("Y-m-d H:i:s");

		if(empty($tipo)){
			return "true";
		}else{
			if($tipo=="vacaciones"){
				$saldo= $saldo-$diasL;
				$c="INSERT INTO `vacaciones`.`dias` (`cod_dias`, `cod_empleado`, `nombre`, `apellido1`, `apellido2`, `FechaInicio`, `FechaFin`, `dias_Natu`, `dias_lab`, `aumentoDias`, `SALDO_DIAS`, `vacaciones`, `PerRetri`, `PerNoRetri`, `Bec`, `Bal`, `Comentarios`, `user_login`, `hoy`) VALUES (NULL, '$cEmpleado', '$nombre', '$apellido1', '$apellido2', '$fechaI', '$fechaF', '$diasN', '$diasL', '-', '$saldo', 'Si', '-', '-', '-', '-', '$comentario', '$sesion', '$hoy');";
				
				$coment=$coment."****---****".$hoy.": Vacaciones->".$comentario;
				
				$d="UPDATE $tabla SET comentarios = '$coment', saldo = '$saldo' WHERE codigo = '$cEmpleado' ;";
				
				$r1 = $dwes->query($c);
				$r2 = $dwes->query($d);
					
				if($dwes->commit()){
					$dwes->close();
					return "true";
				}else{
					$dwes->rollback();
					$dwes->close();
					return "false";
				}
			}else if($tipo=="PerRe"){
				$c="INSERT INTO dias (`cod_dias`, `cod_empleado`, `nombre`, `apellido1`, `apellido2`, `FechaInicio`, `FechaFin`, `dias_Natu`, `dias_lab`, `aumentoDias`, `SALDO_DIAS`, `vacaciones`, `PerRetri`, `PerNoRetri`, `Bec`, `Bal`, `Comentarios`, `user_login`, `hoy`) VALUES (NULL, '$cEmpleado', '$nombre', '$apellido1', '$apellido2', '$fechaI', '$fechaF', '$diasN', '$diasL', '-', '$saldo', '-', 'Si', '-', '-', '-', '$comentario', '$sesion', '$hoy');";
				
				$coment=$coment."****---****".$hoy.": Permiso retribuido ->".$comentario;

				$d="UPDATE $tabla SET comentarios = '$coment' WHERE codigo = '$cEmpleado' ;";

				$r1 = $dwes->query($c);
				$r2 = $dwes->query($d);

				if($dwes->commit()){
					$dwes->close();
					return "true";
				}else{
					$dwes->rollback();
					$dwes->close();
					return "false";
				}

			}else if($tipo=="PerNoRe"){
				$c="INSERT INTO dias (`cod_dias`, `cod_empleado`, `nombre`, `apellido1`, `apellido2`, `FechaInicio`, `FechaFin`, `dias_Natu`, `dias_lab`, `aumentoDias`, `SALDO_DIAS`, `vacaciones`, `PerRetri`, `PerNoRetri`, `Bec`, `Bal`, `Comentarios`, `user_login`, `hoy`) VALUES (NULL, '$cEmpleado', '$nombre', '$apellido1', '$apellido2', '$fechaI', '$fechaF', '$diasN', '$diasL', '-', '$saldo', '-', '-', 'Si', '-', '-', '$comentario', '$sesion', '$hoy');";
				
				$coment=$coment."****---****".$hoy.": Permiso no retribuido ->".$comentario;

				$d="UPDATE $tabla SET comentarios = '$coment' WHERE codigo = '$cEmpleado' ;";

				$r1 = $dwes->query($c);
				$r2 = $dwes->query($d);

				if($dwes->commit()){
					$dwes->close();
					return "true";
				}else{
					$dwes->rollback();
					$dwes->close();
					return "false";
				}

			}else if($tipo=="bec"){
				$c="INSERT INTO dias (`cod_dias`, `cod_empleado`, `nombre`, `apellido1`, `apellido2`, `FechaInicio`, `FechaFin`, `dias_Natu`, `dias_lab`, `aumentoDias`, `SALDO_DIAS`, `vacaciones`, `PerRetri`, `PerNoRetri`, `Bec`, `Bal`, `Comentarios`, `user_login`, `hoy`) VALUES (NULL, '$cEmpleado', '$nombre', '$apellido1', '$apellido2', '$fechaI', '$fechaF', '$diasN', '$diasL', '-', '$saldo', '-', '-', '-', 'Si', '-', '$comentario', '$sesion', '$hoy');";
				
				$coment=$coment."****---****".$hoy.": Baja enfermedad común ->".$comentario;

				$d="UPDATE $tabla SET comentarios = '$coment' WHERE codigo = '$cEmpleado' ;";

				$r1 = $dwes->query($c);
				$r2 = $dwes->query($d);

				if($dwes->commit()){
					$dwes->close();
					return "true";
				}else{
					$dwes->rollback();
					$dwes->close();
					return "false";
				}

			}else if($tipo=="bal"){
				$c="INSERT INTO dias (`cod_dias`, `cod_empleado`, `nombre`, `apellido1`, `apellido2`, `FechaInicio`, `FechaFin`, `dias_Natu`, `dias_lab`, `aumentoDias`, `SALDO_DIAS`, `vacaciones`, `PerRetri`, `PerNoRetri`, `Bec`, `Bal`, `Comentarios`, `user_login`, `hoy`) VALUES (NULL, '$cEmpleado', '$nombre', '$apellido1', '$apellido2', '$fechaI', '$fechaF', '$diasN', '$diasL', '-', '$saldo', '-', '-', '-', '-', 'Si', '$comentario', '$sesion', '$hoy');";
				
				$coment=$coment."****---****".$hoy.": Baja accidente laboral ->".$comentario;

				$d="UPDATE $tabla SET comentarios = '$coment' WHERE codigo = '$cEmpleado' ;";

				$r1 = $dwes->query($c);
				$r2 = $dwes->query($d);

				if($dwes->commit()){
					$dwes->close();
					return "true";
				}else{
					$dwes->rollback();
					$dwes->close();
					return "false";
				}
				
			}
			$dwes->close();
			
		}
	}

///////////////////////  MODIFICAR  //////////////////////////////////////////////////////////////

	public static function modificaEmpleado($sesion, $cod, $nombre, $dni, $apellido1, $apellido2, $localidad, $movil, $saldo, $comentarios ){
		$verifica="false";
		$dwes=BD::conect();
		$tabla=BD::sesiones($sesion);
		//UPDATE `vacaciones`.`empleoficina` SET `nombre` = 'Lidia55' WHERE `empleoficina`.`codigo` = 15;
		$c="UPDATE $tabla SET dni = '$dni', nombre = '$nombre', apellido1 = '$apellido1', apellido2 = '$apellido2', localidad = '$localidad', movil = '$movil', comentarios = '$comentarios', saldo = '$saldo' WHERE codigo = '$cod' ;";
		
		$resultado = $dwes->query($c);
		
		//$acceso=$resultado->fetch_object();

		if(!$resultado){
			
			$dwes->close();
			return $verifica;
		}else{
			$dwes->close();
			$verifica="true";
			return $verifica;
		}	
	}

	public static function modificaAumento($codigo, $num, $comentario){
		$verifica="false";
		$dwes=BD::conect();
		$aDias=0;
		$hoy=date("Y-m-d H:i:s");
		$aTexto=" ";
		$aux=BD::DameEmpleado($codigo);
		foreach ($aux as $a) {
			$aTexto=$a->comentarios;
			$aDias=$a->saldo;
		}

		$coment=$aTexto."****---****".$hoy.": Modificacion de aumento ->".$comentario;

		$saldo=$aDias+$num;

		$c="UPDATE empleoficina SET comentarios = '$coment', saldo = '$saldo' WHERE codigo = '$codigo' ;";
		
		$resultado = $dwes->query($c);
		
		//$acceso=$resultado->fetch_object();

		if(!$resultado){
			
			$dwes->close();
			return $verifica;
		}else{
			$dwes->close();
			$verifica="true";
			return $verifica;
		}	
	}

	public static function logEdit($usuario, $ctv, $Nctv){
		$dwes = BD::conect();
		$verifica="false";
		$c="UPDATE usuarios SET ctv='$Nctv' WHERE usuario='$usuario' AND ctv='$ctv'";

		$resultado = $dwes->query($c);

		//$acceso=$resultado->fetch_object();

		if(!$resultado){
			$dwes->close();
			return $verifica;
		}else{
			$dwes->close();
			$verifica="true";
			return $verifica;
		}
	}


///////////////////////   BORRAR    //////////////////////////////////////////////////////////////

	public static function borraEmpleado($sesion, $codigo){
		$dwes=BD::conect();
		$verifica="false";
		$tabla=BD::sesiones($sesion);
		$c="DELETE FROM '$tabla' WHERE codigo = '$codigo';";
		$resultado = $dwes->query($c);
		if(!$resultado){
			$dwes->close();
			return $verifica;
		}else{
			$dwes->close();
			$verifica="true";
			return $verifica;
		}
	}

//////////////////////    SELECT    //////////////////////////////////////////////////////////////
	
	public static function verifica($usuario, $ctv){
		$dwes = BD::conect();
		$verifica="false";
		$c="SELECT usuario, ctv FROM usuarios WHERE usuario='$usuario' AND ctv='$ctv'";

		$resultado = $dwes->query($c);

		$acceso=$resultado->fetch_object();

		if(!$acceso){
			$dwes->close();
			return $verifica;
		}else{
			$dwes->close();
			$verifica="true";
			return $verifica;
		}
	}
		//el siguiente metodo nos devuelve la tabla a la que tiene acceso el usuario que se ha logeado
	public function sesiones($usu){
		$dwes = BD::conect();
		$c="SELECT tabla FROM usuarios WHERE usuario='$usu' ";

		$resultado = $dwes->query($c);
		$usu=$resultado->fetch_array();
		$tabla=$usu["tabla"];	
		$dwes->close();	
		return $tabla;
	}

	public static function TodosEmpleados(){
		$dwes = BD::conect();
		
		$c="SELECT * FROM empleoficina ";

		$resultado = $dwes->query($c);
		
		$empleados=array();
		
		while($emple=$resultado->fetch_object()){
			$empleados [] = new Empleado( $emple->codigo,
				$emple->dni,
				$emple->nombre, 
				$emple->apellido1, 
				$emple->apellido2, 
				$emple->localidad,
				$emple->movil,
				$emple->comentarios,
				$emple->saldo);	
		}

		$c="SELECT * FROM emplealmacen ";

		$resultado = $dwes->query($c);
		
		while($emple=$resultado->fetch_object()){
			$empleados [] = new Empleado( $emple->codigo,
				$emple->dni,
				$emple->nombre, 
				$emple->apellido1, 
				$emple->apellido2, 
				$emple->localidad,
				$emple->movil,
				$emple->comentarios,
				$emple->saldo);	
		}
		$dwes->close();	
		return $empleados;
	}

	public static function CargaEmpleados($usuario){
		$dwes = BD::conect();
		$tabla=BD::sesiones($usuario);
		
		$c="SELECT * FROM $tabla ";

		$resultado = $dwes->query($c);
		
		$empleados=array();
		
		while($emple=$resultado->fetch_object()){
			$empleados [] = new Empleado( $emple->codigo,
				$emple->dni,
				$emple->nombre, 
				$emple->apellido1, 
				$emple->apellido2, 
				$emple->localidad,
				$emple->movil,
				$emple->comentarios,
				$emple->saldo);	
		}
		$dwes->close();	
		return $empleados;
	}

	public static function UnEmpleado( $codigo){
		$co=substr($codigo, 0,2);
		if($co=="eo"){
			$tabla="empleoficina";
		}else{
			$tabla="emplealmacen";
		}

		$dwes = BD::conect();
		
		$c="SELECT * FROM $tabla WHERE codigo ='$codigo' ";

		$resultado = $dwes->query($c);
		
		$empleado=array();
		
		while($emple=$resultado->fetch_object()){
			$empleado [] = new Empleado( $emple->codigo,
				$emple->dni,
				$emple->nombre, 
				$emple->apellido1, 
				$emple->apellido2, 
				$emple->localidad,
				$emple->movil,
				$emple->comentarios,
				$emple->saldo);	
		}
		$dwes->close();	
		return $empleado;
	}

	public static function DameEmpleado($usu, $codigo){
		
		$dwes = BD::conect();

		$tabla= BD::sesiones($usu);

		$c="SELECT * FROM $tabla WHERE codigo ='$codigo' ";

		$resultado = $dwes->query($c);
		
		$empleado=array();
		
		while($emple=$resultado->fetch_object()){
			$empleado [] = new Empleado( $emple->codigo,
				$emple->dni,
				$emple->nombre, 
				$emple->apellido1, 
				$emple->apellido2, 
				$emple->localidad,
				$emple->movil,
				$emple->comentarios,
				$emple->saldo);	
		}
		$dwes->close();	
		return $empleado;
	}

	public static function DameSaldo($usuario, $codigo){
		$dwes = BD::conect();

		$tabla=BD::sesiones($usuario);

		$c="SELECT * FROM '$tabla' WHERE codigo='$codigo'";

		$resultado = $dwes->query($c);
		
		$empleado=array();
		
		while($emple=$resultado->fetch_object()){
			$empleado [] = new Empleado( $emple->codigo,
				$emple->dni,
				$emple->nombre, 
				$emple->apellido1, 
				$emple->apellido2, 
				$emple->localidad,
				$emple->movil,
				$emple->comentarios,
				$emple->saldo);	
		}
		$saldo=$empleado["saldo"];
		$dwes->close();	
		return $saldo;
	}

	public static function damefestivos(){
		$dwes = BD::conect();
		$festivo=array();

		$c="SELECT * FROM festivos ORDER BY fecha ASC";
		//  SELECT * FROM `festivos` ORDER BY fecha ASC

		$resultado = $dwes->query($c);

		

		while($fes= $resultado->fetch_object() ){
			$festivo [] =  new fiestas( 
				$fes->ambito,
				$fes->fecha,
				$fes->comentarios);
		}
		$dwes->close();	
		return $festivo;
	}

	public static function damefestivosfechas(){
		$dwes = BD::conect();
		$festivos=BD::damefestivos();
		$festivo=array();

		foreach ($festivos as $f) {
			$festivo [] =	$f->fecha;
		}
		
		$dwes->close();	
		return $festivo;
	}

	// public static function damedias(){
	// 	$dwes = BD::conect();
	// 	$dias=array();
	// 	$dwes->close();
	// }

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
	
	public static function cargarExcel($codigo){
		$dwes = BD::conect();

		$c="SELECT * FROM dias WHERE cod_empleado = '$codigo'";

		$resultado = $dwes->query($c);
		
		$n = $resultado->num_rows;

		if($n==0){
			$vbpcu=0;
			$dwes->close();	
			return $vbpcu;
		}else{	
			$vbpcu=array();
			while($vaca=$resultado->fetch_object()){
				$vbpcomen [] =  new vacacion ( 
					$vaca->cod_dias,
					$vaca->cod_empleado,
					$vaca->nombre,
					$vaca->apellido1,
					$vaca->apellido2,
					$vaca->FechaInicio,
					$vaca->FechaFin,
					$vaca->dias_Natu,
					$vaca->dias_lab,
					$vaca->aumentoDias,
					$vaca->SALDO_DIAS,
					$vaca->vacaciones,
					$vaca->PerRetri,
					$vaca->PerNoRetri,
					$vaca->Bec,	
					$vaca->Bal,
					$vaca->Comentarios,
					$vaca->user_login,
					$vaca->hoy);
			}
			$dwes->close();	
			return $vbpcomen;
		}

	}

//// EXCEL ////////// Funcion que genera todos los datos del EXCEL de ///
////////// TODOSSSS los empleados segun el USUARIO //////////////////////////////////////

	public static function cargaExcel($usuario){
		$dwes = BD::conect();
		
		$tabla=BD::sesiones($usuario);

		if($tabla=="empleoficina"){
			$c="SELECT *  FROM dias WHERE cod_empleado LIKE   'eo%'";
		}else{
			$c="SELECT *  FROM dias WHERE cod_empleado LIKE   'ea%'";
		}
		
		$resultado = $dwes->query($c);
		
		$n = $resultado->num_rows;

		if($n==0){
			$vbpcu=0;
			$dwes->close();	
			return $vbpcu;
		}else{	
			$vbpcu=array();
		
			while($vaca=$resultado->fetch_object()){
				$vbpcu [] = new vacacion ( 
					$vaca->cod_dias,
					$vaca->cod_empleado,
					$vaca->nombre,
					$vaca->apellido1,
					$vaca->apellido2,
					$vaca->FechaInicio,
					$vaca->FechaFin,
					$vaca->dias_Natu,
					$vaca->dias_lab,
					$vaca->aumentoDias,
					$vaca->SALDO_DIAS,
					$vaca->vacaciones,
					$vaca->PerRetri,
					$vaca->PerNoRetri,
					$vaca->Bec,	
					$vaca->Bal,
					$vaca->Comentarios,
					$vaca->user_login,
					$vaca->hoy);
			}

			$dwes->close();
			return $vbpcu;
		}
	}

/////// EXCEL ////////// Funcion que genera todos los datos del EXCEL ///////
///////    en funcion del CODIGO de empleado y la CLASE de dias  //////
	
	public static function cargaExcels($codigo, $clase){
		$dwes = BD::conect();

		if($clase=="vaca"){
			$c="SELECT * FROM dias WHERE cod_empleado='$codigo' AND vacaciones='Si'";	
				
		}else if($clase=="PerRetri"){
			$c="SELECT * FROM dias WHERE cod_empleado='$codigo' AND PerRetri='Si'";
			
		}else if($clase=="PerNoRetri"){
			$c="SELECT * FROM dias WHERE cod_empleado='$codigo' AND PerNoRetri='Si'";
			
		}else if($clase=="Bec"){
			$c="SELECT * FROM dias WHERE cod_empleado='$codigo' AND Bec='Si'";
			
		}else if($clase=="Bal"){
			$c="SELECT * FROM dias WHERE cod_empleado='$codigo' AND Bal='Si'";	
					
		}

		$resultado = $dwes->query($c);
		
		$n = $resultado->num_rows;

		if($n==0){
			$vbpcu=0;
			$dwes->close();	
			return $vbpcu;
		}else{	
			$vbpcu=array();
			
			while($vaca=$resultado->fetch_object()){
				
				$vbpcu [] = new vacacion ( 
					$vaca->cod_dias,
				$vaca->cod_empleado,
				$vaca->nombre,
				$vaca->apellido1,
				$vaca->apellido2,
				$vaca->FechaInicio,
				$vaca->FechaFin,
				$vaca->dias_Natu,
				$vaca->dias_lab,
				$vaca->aumentoDias,
				$vaca->SALDO_DIAS,
				$vaca->vacaciones,
				$vaca->PerRetri,
				$vaca->PerNoRetri,
				$vaca->Bec,	
				$vaca->Bal,
				$vaca->Comentarios,
				$vaca->user_login,
				$vaca->hoy);
			}
			$dwes->close();	
			return $vbpcu;
		}	
	}

	/////// EXCEL ////////// Funcion que genera todos los datos del EXCEL ///////
///////    en funcion de la CLASE de dias Y DEL USUARIO //////
	
	
	public static function cargarExcels($usuario, $clase){
		$dwes = BD::conect();
		
		$tabla=BD::sesiones($usuario);
		
		if($tabla=="empleoficina"){
			$d="cod_empleado LIKE 'eo%'";
		}else{
			$d="cod_empleado LIKE 'ea%'";
		}

		if($clase=="vaca"){
			$c="SELECT * FROM dias WHERE $d AND vacaciones='Si'";	
			
		}else if($clase=="PerRetri"){
			$c="SELECT * FROM dias WHERE $d AND PerRetri='Si'";
			
		}else if($clase=="PerNoRetri"){
			$c="SELECT * FROM dias WHERE $d AND PerNoRetri='Si'";
			
		}else if($clase=="Bec"){
			$c="SELECT * FROM dias WHERE $d AND Bec='Si'";
			
		}else if($clase=="Bal"){
			$c="SELECT * FROM dias WHERE $d AND Bal='Si'";	
					
		}
		$resultado = $dwes->query($c);
		
		$n = $resultado->num_rows;

		if($n==0){
			$vbpcu=0;
			$dwes->close();	
			return $vbpcu;
		}else{	
			$vbpcu=array();
			
			while($vaca=$resultado->fetch_object()){
				
				$vbpcu [] = new vacacion ( 
					$vaca->cod_dias,
					$vaca->cod_empleado,
					$vaca->nombre,
					$vaca->apellido1,
					$vaca->apellido2,
					$vaca->FechaInicio,
					$vaca->FechaFin,
					$vaca->dias_Natu,
					$vaca->dias_lab,
					$vaca->aumentoDias,
					$vaca->SALDO_DIAS,
					$vaca->vacaciones,
					$vaca->PerRetri,
					$vaca->PerNoRetri,
					$vaca->Bec,	
					$vaca->Bal,
					$vaca->Comentarios,
					$vaca->user_login,
					$vaca->hoy);
			}
			$dwes->close();	
			return $vbpcu;
		}			
	}

/////// EXCEL ////////// Funcion que genera todos los datos del EXCEL ///////
///////    en funcion del anio Y DEL USUARIO  //////

	public static function carganExcel($usuario, $anio){
		$dwes = BD::conect();
		
		$tabla=BD::sesiones($usuario);
		
		if($tabla=="empleoficina"){
			$d="cod_empleado LIKE 'eo%' AND FechaInicio LIKE '$anio%'";
		}else{
			$d="cod_empleado LIKE 'ea%' AND FechaInicio LIKE '$anio%'";
		}
		
		$c="SELECT * FROM dias WHERE $d ";	
			
		$resultado = $dwes->query($c);
		
		$n = $resultado->num_rows;

		if($n==0){
			$vbpcu=0;
			$dwes->close();	
			return $vbpcu;
		}else{	
			$vbpcu=array();
			
			while($vaca=$resultado->fetch_object()){
				
				$vbpcu [] = new vacacion ( 
					$vaca->cod_dias,
					$vaca->cod_empleado,
					$vaca->nombre,
					$vaca->apellido1,
					$vaca->apellido2,
					$vaca->FechaInicio,
					$vaca->FechaFin,
					$vaca->dias_Natu,
					$vaca->dias_lab,
					$vaca->aumentoDias,
					$vaca->SALDO_DIAS,
					$vaca->vacaciones,
					$vaca->PerRetri,
					$vaca->PerNoRetri,
					$vaca->Bec,	
					$vaca->Bal,
					$vaca->Comentarios,
					$vaca->user_login,
					$vaca->hoy);
			}
			$dwes->close();	
			return $vbpcu;
		}			
	}

/////// EXCEL ////////// Funcion que genera todos los datos del EXCEL ///////
///////    en funcion del anio y el codigo del empleado  //////

	public static function carganExcels($codigo, $anio){
		$dwes = BD::conect();
		
		$c="SELECT * FROM dias WHERE cod_empleado='$codigo' AND FechaInicio LIKE '$anio%'";	
				
		$resultado = $dwes->query($c);
		
		$n = $resultado->num_rows;

		if($n==0){
			$vbpcu=0;
			$dwes->close();	
			return $vbpcu;
		}else{	
			$vbpcu=array();
			
			while($vaca=$resultado->fetch_object()){
				
				$vbpcu [] = new vacacion ( 
					$vaca->cod_dias,
					$vaca->cod_empleado,
					$vaca->nombre,
					$vaca->apellido1,
					$vaca->apellido2,
					$vaca->FechaInicio,
					$vaca->FechaFin,
					$vaca->dias_Natu,
					$vaca->dias_lab,
					$vaca->aumentoDias,
					$vaca->SALDO_DIAS,
					$vaca->vacaciones,
					$vaca->PerRetri,
					$vaca->PerNoRetri,
					$vaca->Bec,	
					$vaca->Bal,
					$vaca->Comentarios,
					$vaca->user_login,
					$vaca->hoy);
			}
			$dwes->close();	
			return $vbpcu;
		}			
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







}
?>