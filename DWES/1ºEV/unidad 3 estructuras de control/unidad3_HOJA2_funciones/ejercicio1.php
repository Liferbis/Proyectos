<html>
<head>
	<title>Ej1</title>
	<meta charset="UTF-8" />
</head>
<body>
	<h3>Dados los valores capital, rédito y tiempo define las funciones:</h3>
	<h3>
		<ul class="list-group">
			<li class="list-group-item">interesSimple: calcula lo que produce el capital a interés simple.</li>
			<li class="list-group-item">interesCompuesto: calcula lo que produce el capital a interés compuesto.</li>
		</ul>
	</h3>
	<h3>Indica cuál de los dos métodos es más beneficioso.</h3>
	
	<h4 style="color:red;">SOLUCION:</h4>
	<h5 style="color:blue;">
		
		<table class="table table-hover" border='1'>
			<thead>
				<tr>
					<th colspan="3">Interes Simple:</th>
				</tr>
				<tr>
					<th>Concepto</th>
					<th>Nombre</th>
					<th>Simbolo</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Cantidad prestada</td>
					<td>Capital</td>
					<td> C </td>
				</tr>
				<tr>
					<td>Tiempo del préstamo</td>
					<td> Tiempo</td>
					<td> t </td>
				</tr>
				<tr>
					<td>Un beneficio por 100 € en un año</td>
					<td>Rédito</td>
					<td>r</td>
				</tr>
				<tr>
					<td>Beneficio del prestamo</td>
					<td>Interes</td>
					<td>I</td>
				</tr>
			</tbody>
		</table>
		</br>
		<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" role="form">
			<legend>Introduce tu capital</legend>
			<div class="form-group">
				<input type="number" class="form-control" name="cap" autofocus placeholder="Capital">€
			</div>
			<legend>Introduce el interes</legend>
			<div class="form-group">
				<input type="number" class="form-control" name="int" autofocus placeholder="interes">%
				
			</div>
			<legend>Introduce el tiempo</legend>
			<div class="form-group">
				<input type="number" class="form-control" name="ti" autofocus placeholder="años">años
				
			</div>
			<button type="submit" class="btn btn-primary">Calcula</button>
		</form>

		<?php
			function i_simple ($capital, $fecha, $interes){
				$capitalsim=$capital*(1+$interes*$fecha);
				return $capitalsim;
			}

			function i_comp ($capital, $fecha, $interes){
				$capitalcom=$capital*pow((1+$interes),$fecha);
				return $capitalcom;
			}

			function compara(){
				if($capitalsim > $capitalcom){
					return "El mas beneficioso es el interes COMPUESTO";
				}else if($capitalsim == $capitalcom){
					return "Los dos son iguales";
				}else if($capitalsim < $capitalcom){
					return "El mas beneficioso es el interes SIMPLE";
				}
			}

			if ( (isset($_POST["cap"])) && (isset($_POST["int"])) && (isset($_POST["ti"])) ){
				$cs=0;
				$capital=$_POST["cap"];
				$fecha=$_POST["ti"];
				$interes=$_POST["int"];;
				
				echo "<ul>
						<li>Tu capital: ".$capital."</li>
						<li>El interes: ".$interes."</li>
						<li>El tiempo: ".$fecha."</li>
						<ul>
							<li>Interes Simple: ".i_simple($capital, $fecha, $interes)."</li>
							<li>Interes compuesto: ".i_comp($capital, $fecha, $interes)."</li>
							<li>".compara()."</li>
						</ul>
					  
					  </ul>"; 

			}else{
				$fecha="";
				$capita="";
			}

			

			
		?>
	</h5>
</body>
</html>