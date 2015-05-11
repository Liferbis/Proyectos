<?php 
require_once "Medico.php";
require_once "Urgencia.php";
require_once "Familia.php";

?>


<html>
<head>
	<title>Medico-Familia-Urgencia</title>
</head>
<body>
<?php 
	$medico=array(
		new Familia("Luis ", 63, "tarde",7),
		new Familia("Pepito ", 35, "mañana",4),
		new Familia("Lorena ", 45, "tarde",5),
		new Urgencia("Andres ", 50, "mañana","Enfermera"),
		new Urgencia("Mario ", 42, "tarde","Cirujano"),
		new Urgencia("Grillo ", 67, "mañana","Celador") 
		);
?>
	
	<h1 style="color:red">TODOS LOS MEDICOS</h1>
<?php 	
	foreach ($medico as $key ) {
		echo $key->mostrar();
		echo "<hr>";
	}
?>
	 <hr>
	 <h1 style="color:blue">Medicos mayores de 60 años con turno de tarde</h1>

	 <?php 
	 	foreach ($medico as $key=> $value) {
	 		if($value->GetEdad()>60 && $value->GetTurno()=="tarde"){
	 			echo $value->mostrar();
	 		}
	 	}
	  ?>
	  <hr>
	  <h1 style='color:DarkViolet'>Introduce numero de pacientes</h1>
	  <form action="" method="POST" role="form">
	  	<input type="int" name="pre"class="form-control">
	  	<button name="cues"type="submit" class="btn btn-primary">Enviar</button>
	  </form>
	  <?php 
	  	if(isset($_POST["pre"]) && isset($_POST["cues"])){
	  		foreach ($medico as $value) {
		 		if($value instanceof Familia && $value->GetNP()>=$_POST["pre"]){
		 			echo $value->mostrar();	
		 		}
		 		
	 		}
	  	}
	   ?>
</body>
</html>