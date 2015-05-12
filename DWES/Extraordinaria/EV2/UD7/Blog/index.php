<?php 
require_once "includes/BD.php";
require_once "includes/clases.php";

session_start();

if (isset($_SESSION["usuario"])){

	if (isset($_GET['blog'])) {
        $blog = $_GET['blog'];
        
        if ($blog == "logeo") {
        	include ('vistas/VistaLogin.php');
            
        }else if($blog == "articulos"){
        	$articulos=BD::Tarticulos();
        	include ('vistas/VistaArticulos.php');
            
        }else if($blog=="log-out"){
        	include ('vistas/VistaLogOut.php');
        }
    }else if(isset($_POST["sesion"])){
    	if($_POST["sesion"]=="1"){
    		session_unset();
            header('Location: index.php');
    	}else{
    		include ('vistas/VistaArticulos.php');
    	}
    }else{
        include ('vistas/VistaPrincipal.php');
    }

}else if(isset($_POST["confirm"])){
	$ctv=md5($_POST["ctv"]);
	$estado=BD::verifica($_POST["usu"], $ctv);
	if($estado=="true"){
		$_SESSION["usuario"]=$_POST["usu"];
		include ('vistas/VistaPrincipal.php');
	}else{
		include ('vistas/VistaLogin.php');
	}

}else{
	require_once "vistas/VistaLogin.php";
}

 ?>