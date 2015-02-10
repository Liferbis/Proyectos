<?php
require_once "modelo.php" ;
if(empty($_GET)){
	require_once "vista.php";
}

if(isset($_GET['futbolistaDorsal10'])){
	$empleados=null;
	$empleados=BD::getFutbolista(10);
	require_once "vistaEmpleados.php" ;
	
}
if(isset($_GET['vistaT'])){
	$empleados=null;
	$empleados=BD::getTecnicos();
	require_once "vistaEmpleados.php" ;
	
}



?>