<?php 
	require_once "productos.php";
//	require_once "constantes.php";
 
	$n= new producto();

	//$n->codigo="001";
	$n->nombre="impresora";
	$n->familia="multifuncion";
	$n->precio="35";

	echo $n->mostrar();
/*
	echo DB::localhost;
	echo DB::usu;
	echo DB::ctv;

	$p = new Persona();
	$p->nombre = "Pepe";
	$n =new Persona();
	echo $p->nombre;
*/
?>