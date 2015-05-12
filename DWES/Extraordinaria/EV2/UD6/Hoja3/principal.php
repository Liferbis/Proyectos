<html>
 <head>
 	<title>Coche-Bombilla-Encendible</title>
 	<link href="estilo.css" rel="stylesheet">
 
<?php 
require_once "Bombilla.php";
require_once "Coche.php";

function encender(Encendible $algo){
	$algo->encender();
}

function apagar(Encendible $algo){
	$algo->apagar();
}
?>
</head>
 <body>
 <!-- coche -->
 	<h1 id="coche"> COCHE</h1>
	<h1 id="coche">Creamos un nuevo coche </h1>
	<h5 id="coche">$c=new Coche();</h5>
	<?php 
		$c=new Coche();
	?>
	<h5 id="coche" >Si intentamos arrancarle sin gasolina ni bateria....</h5>
	<h5 id="coche" >encender($c);</h5>
	<h5 id="coche" ><?php encender($c); ?></h5>
	<h1  id="coche">Repostamos el coche y le arrancamos</h1>
	<h5 id="coche" >$c->repostar(10);</h5>
	<h5 id="coche" >encender($c);</h5>
	<h5 id='coche' >
		<?php 
			$c->repostar(10);
			encender($c);
		?>
	</h5>
	<h1 id="coche"> Si intentamos volver a encender....</h1>
	<h5 id="coche"> <?php encender($c);	?></h5>
	<h1 id="coche"> Apagamos el cohe</h1>
	<h5 id="coche"> apagar($c)</h5>
	<h5 id="coche"> <?php apagar($c); ?></h5>
	<hr>
<!-- bombilla -->
	<h1 id="bombilla"> BOMBILLA</h1>
	<h1 id="bombilla"> Creamos una nueva bombilla con 2 hora de vida</h1>
	<h5 id="bombilla"> $bombi=new Bombilla(2);</h5>
	<?php 
		$bombi=new Bombilla(2);
	?>
	<h5 id="bombilla"> Si la encendemos.... </h5>
	<h5 id="bombilla"> encender($bombi); </h5>
	<h5 id="bombilla"> <?php encender($bombi); ?> </h5>
	 
	<h1 id="bombilla"> Si intentamos volver a encenter.... </h1>
	<h5 id="bombilla"> encender($bombi); </h5>
	<h5 id="bombilla"> <?php encender($bombi);?> </h5>
	<h1 id="bombilla"> Apagamos la bombilla.... </h1>
	<h5 id="bombilla"> apagar($bombi); </h5>
	<h5 id="bombilla"> <?php apagar($bombi); ?> </h5>
	<h1 id="bombilla"> Si intentamos volver a encender.... </h1>
	<h5 id="bombilla"> encender($bombi); </h5>
	<h5 id="bombilla"> <?php encender($bombi); ?> </h5>
 
 </body>
 </html>