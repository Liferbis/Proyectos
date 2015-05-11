<?php 
require_once "Bombilla.php";
require_once "Coche.php";

function encender(encendible $algo){
	$algo->encender();
}

function apagar(encendible $algo){
	$algo->apagar();
}

$c1=new Coche();
$c1->repostar(10);
encender($c1);
echo "Si intentamos volver a encenter....";
 ?>