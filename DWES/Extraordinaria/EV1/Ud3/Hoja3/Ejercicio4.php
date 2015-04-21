<html>
<head>
	<title>Ejercicio 4 Lidia</title>
</head>
<body>
	<h1>EJEMPLOS DE ARRAY</h1>
	<div class="container">
		<div class="table-responsive">
			<table class="table table-hover well">
				<thead>
					<tr>
						<th>Variable</th>
						<th>Valor</th>
					</tr>
				</thead>
				<tbody>
					<?php 

					foreach ($_SERVER as $key => $value) {
						echo "<tr><td>".$key."</td><td>".$value."</td></tr>"; 
					}
				?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>