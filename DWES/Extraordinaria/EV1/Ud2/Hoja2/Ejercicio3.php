<html>
<head>
	<title>Ejercicio 3 Lidia</title>
</head>
<body>
	<form action=" " method="POST" role="form">
		<legend>Comprobador de fechas</legend>

		<div class="form-group">
			<label for="">La fecha a comprobar</label>
			<input type="int" name="dia" placebol=" DD " >
			<input type="int" name="mes" placebol=" MM ">
			<input type="int" name="anio" placebol=" YYYY ">
		</div>
	
		<button type="submit" class="btn btn-primary">Comprobar</button>
	</form>

	<?php 
		if (isset($_POST["dia"]) & isset($_POST["mes"]) &isset($_POST["anio"])){
			$dia=$_POST["dia"];
			$mes=$_POST["mes"];
			$anio=$_POST["anio"];
			$fecha=$dia."-".$mes."-".$anio;
			if(checkdate(  $mes, $dia, $anio)){
				echo " <h1> La fecha ".$fecha." es: CORRECTA </h1>";
			}else{
				echo " <h1> La fecha ".$fecha." es: INCORRECTA!!! </h1>";
			}
		}	
			
		
	?>
</body>
</html>