<html>
<head>
	<title>ejemplo</title>
</head>
<body>
	<h1>EJEMPLOS DE ARRAY</h1>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 well">
			<h1>Array unidimensional</h1>
			<?php 
				$array1=array(
						0=>"Programacion",
						1=>"DEWS",
						2=>"");

				$array2=array(
							"PR"=>"programacion",
							"otro"=>"otroDMW",
							"ult"=>"DAMotro"
							);

				$ciclos=array(
						"DAM"=>array(
							"PR"=>"programacion",
							"otro"=>"otroDMW",
							"ult"=>"DAMotro"
							),
						"DAW"=>array(
							"PR"=>"progDAW",
							"otro"=>"otroDAW",
							"ult"=>"DAWotro"
							)
						);
			?>	
		</div>
		<pre><?php print_r($array1); ?></pre>
		<pre><?php print_r($array2); ?></pre>
		<pre><?php print_r($ciclos); ?></pre>
	</div>
</div>
</body>
</html>