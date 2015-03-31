<html>
<head>
	<title>Ejercicio 1 Lidia</title>
</head>
<body>
<h3>INTERES</h3>
	
	<h5 >
		
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
		<form action=" " method="POST" role="form">
			<legend>Introduce tu capital</legend>
			<div class="form-group">
				<input type="int"name="cap" autofocus placeholder="Capital">€
			</div>
			<legend>Introduce el interes</legend>
			<div class="form-group">
				<input type="int" name="int" autofocus placeholder="interes">%
				
			</div>
			<legend>Introduce el tiempo</legend>
			<div class="form-group">
				<input type="int" name="ti" autofocus placeholder="años">años
				
			</div>
			<button type="submit" class="btn btn-primary">Calcula</button>
		</form>

		<?php
			function i_simple ($capital, $fecha, $interes){
				$capitalsim=($capital*(1+$interes*$fecha))/100;
				return $capitalsim;
			}

			function i_comp ($capital, $fecha, $interes){
				$capitalcom=($capital*pow((1+$interes),$fecha)/100);
				return $capitalcom;
			}

			function compara($capitalsim , $capitalcom){
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
				$simple=i_simple($capital, $fecha, $interes);
				$compuesto=i_comp($capital, $fecha, $interes);
				echo "<ul>
						<li>Tu capital: ".$capital."</li>
						<li>El interes: ".$interes."</li>
						<li>El tiempo: ".$fecha."</li>
						<ul>
							<li>Interes Simple: ".$simple."</li>
							<li>Interes compuesto: ".$compuesto."</li>
							<li>".compara($simple, $compuesto)."</li>
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