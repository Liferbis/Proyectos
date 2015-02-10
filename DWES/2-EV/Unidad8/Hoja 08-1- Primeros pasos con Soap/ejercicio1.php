<?php 
// ENUNCIADO
//
//1.- Crear una script php con un formulario que contenga 
//una caja de texto (para meter una cantidad) 
//y dos botones.
// Uno que pasará esa cantidad de dólares a euros 
//	y otra que la pasará de euros a dólares. 
//
//Para ello utilizaremos un servicio web llamado 
//“Currency Convertor” de webservicex.net 

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Conversor de moneda</title>

	<!-- Bootstrap CSS -->
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
			<![endif]-->
		</head>
		<body>
			<form action="" method="POST" role="form">
				<legend>Conversor de moneda</legend>
				<input type="double" name="dinero" class="form-control">
			</br>
				<button type="submit" name="conv" value="dolares" class="btn btn-primary">Euros-Dolares</button>
				<button type="submit" name="conv" value="euros" class="btn btn-primary">Dolares-Euros</button>
			</form>

			<?php 
			if(isset($_POST["conv"])){
				$cliente= new SoapClient("http://www.webservicex.net/CurrencyConvertor.asmx?WSDL");
				$dinero=$_POST["dinero"];
				if($_POST["conv"]=="dolares"){
					if(empty($_POST["dinero"])){
						echo "<p>No has introducido ningun importe</p>";
					}
					$parametros=array("FromCurrency"=>"EUR",
						"ToCurrency"=>"USD");
					$data=$cliente->ConversionRate($parametros);
					$dinero=$dinero*$data->ConversionRateResult;
					echo "<p>El cambio esta a: ".$data->ConversionRateResult."</p>";
					echo "<p>Tu dinero en Dolares es: ".$dinero."</p>";
				}else{
					$parametros=array("FromCurrency"=>"USD",
						"ToCurrency"=>"EUR");
					$data=$cliente->ConversionRate($parametros);
					$dinero=$dinero*$data->ConversionRateResult;
					echo "<p>El cambio esta a: ".$data->ConversionRateResult."</p>";
					echo "<p>Tu dinero en Euros es: ".$dinero."</p>";
				}
			}
			
			?>
			<!-- jQuery -->
			<script src="//code.jquery.com/jquery.js"></script>
			<!-- Bootstrap JavaScript -->
			<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		</body>
		</html>