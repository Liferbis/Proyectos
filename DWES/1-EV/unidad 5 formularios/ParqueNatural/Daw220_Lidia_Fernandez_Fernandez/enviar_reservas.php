<?php 
$cont=0;
if( empty($_POST["name"]) ){
	echo "<p> No has introducido nombre </p>";
	$cont++;
}
if( empty($_POST["mail"]) ){
	echo "<p> No has introducido el E-mail </p>";
	$cont++;
}
if( empty($_POST["fecha"]) ){
	echo "<p> No has introducido la fecha </p>";
	$cont++;
}
if( empty($_POST["num"]) ){
	echo "<p> No has introducido numero de personas  </p>";
	$cont++;
}
if( empty($_POST["edad"]) ){
	echo "<p> No has introducido edad del grupo  </p>";
	$cont++;
}
if( empty($_POST["nenes"]) ){
	echo "<p> No hareis visita educativa  </p>";
	$cont++;
}
if($cont==6){
	echo "<h1>NO HAS MARCADO NADA!!!</h1>";
}
if($cont==0){
	echo "<h1>LO HAS MARCADO TODO!!!</h1>";
}
 ?>