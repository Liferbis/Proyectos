 <?php 
 require_once "modelo.php";
session_start();
if(isset($_SESSION['usuario'])){
	$articulos=BD::cargaArticulos();
 	require_once "vista.php";	
 	if(isset($_POST["submit"])){
 		require_once "vista_logout.php";
 		if(isset($_POST["sesion"])){
 			if($_POST["sesion"] == "1") {
 				$_SESSION['usuario']=null;
 				session_destroy();
 				header("location: index.php");
			} 
 		}
 	}
}else{
	if( isset($_POST["nombre"]) && isset($_POST["contra"]) ){
		$nombre=$_POST["nombre"];
		$ctv=md5($_POST["contra"]);
		$usuario=BD::verifica($nombre, $ctv);
		if($usuario!=null){
			$_SESSION['usuario']=$usuario;
			$articulos=BD::cargaArticulos();
			require_once "vista.php";
			if(isset($_POST["submit"])){
		 		require_once "vista_logout.php";
		 		if(isset($_POST["sesion"])){
		 			if($_POST["sesion"] == "1") {
		 				$_SESSION['usuario']=null;
 						session_destroy();
 						header("location: index.php");
					} 
		 		}
		 	}
		}else{
			require_once "vista_logeo.php";
		}
	}else{
		require_once "vista_logeo.php";
	}
}	

  ?>