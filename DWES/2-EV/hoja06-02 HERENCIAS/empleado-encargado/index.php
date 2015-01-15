<?php 
require_once "empleado.php";
require_once "encargado.php";

$yo=new empleado('Lidia', '700');
echo "empleado: ".$yo->getNombre()." Sueldo:".$yo->getSueldo();
$yo=new encargado('Lia', '700');
echo "encargado: ".$yo->getNombre()." Sueldo:".$yo->getSueldo();

 ?>