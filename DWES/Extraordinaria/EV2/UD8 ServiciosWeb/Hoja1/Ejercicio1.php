
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Conversor - Lidia</title>

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
		<h1>Conversor</h1>
		<form action="" method="POST" role="form">
		 	<div class="form-group">
		 		<input type="text" name="num" class="form-control" required placeholder="Introduce una cantidad">
		 	</div>
		 	<button type="submit" name="converse" value="eur" class="btn btn-success">De € a $</button>
		 	<button type="submit" name="converse" value="usd" class="btn btn-success">De $ a €</button>

		</form>

	<?php 

		if(isset($_POST["converse"])){
			if($_POST["converse"] == "eur"){
				$cliente = new SoapClient ("http://www.webservicex.net/CurrencyConvertor.asmx?WSDL");
				$parametros=array("FromCurrency"=>"EUR","ToCurrency"=>"USD");
				$data=$cliente->ConversionRate($parametros)->ConversionRateResult;
				echo "<h3>Su conversion de ".$_POST["num"]." € es de :".$data*$_POST["num"]." $</h3>";
			}else{
				$cliente = new SoapClient ("http://www.webservicex.net/CurrencyConvertor.asmx?WSDL");
				$parametros=array("FromCurrency"=>"USD","ToCurrency"=>"EUR");
				$data=$cliente->ConversionRate($parametros)->ConversionRateResult;
				echo "<h3>Su conversion de ".$_POST["num"]." $ es de :".$data*$_POST["num"]." €</h3>";
			}
		}
		
	?>


		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</body>
</html>
