<html>
<head>
	<title>Ejercicio 4 Lidia</title>
</head>
<body>
	<form action=" " method="POST">
		<legend>Introduce la cuenta corriente</legend>
		<div class="form-group">
			<input type="int" name="num" >
			
			<button type="submit" class="btn btn-primary">validator de CC</button>
		</div>
		
	</form>
	<?php 
	if(isset($_POST["num"])){
		$cuenta=$_POST["num"];
		codEntidad($cuenta);
		codOfi($cuenta);
		numCuenta($cuenta);
		codControl($cuenta);
		comprobar_codigo_control ($cuenta);
	}

	function codEntidad($cuenta) {
		$codigo_entidad = substr($cuenta, 0, 4);
		echo "<li>El codigo de entidad es".$codigo_entidad."</li>";
	}

	function codOfi($cuenta) {
		$codigo_oficina = substr($cuenta, 4, 4);
		echo "<li>El codigo de oficina es ".$codigo_oficina."</li>";

	}

	function numCuenta($cuenta) {
		$numero_cuenta = substr($cuenta, 10, 10);
		echo "<li>El numero de cuenta es ".$numero_cuenta."</li>";
	}

	function codControl() {
		$multi = Array(4, 8, 5, 10, 9, 7, 3, 6,1,2,4,8,5,10,9,7,3,6);
		$ofi = Array(1, 0, 1, 0);
		$entid = Array(1, 2, 3, 4);
		$aCuenta = Array(7, 7, 7, 7, 7, 7, 7, 7, 7, 7);

		$num1 = $ofi[0] * $multi [0];
		$num2 = $ofi[1] * $multi [1];
		$num3 = $ofi[2] * $multi [2];
		$num4 = $ofi[3] * $multi [3];
		$num5 = $entid[0] * $multi [4];
		$num6 = $entid[1] * $multi [5];
		$num7 = $entid[2] * $multi [6];
		$num8 = $entid[3] * $multi [7];

		$suma = $num1+ $num2+ $num3 + $num4 + $num5 + $num6 + $num7  + $num8;
		$resto = $suma%11;
		$resta = 11 - $resto;

		$num9 = $aCuenta[0] * $multi [8];
		$num10 = $aCuenta[1] * $multi [9];
		$num11 = $aCuenta[2] * $multi [10];
		$num12 = $aCuenta[3] * $multi [11];
		$num13 = $aCuenta[4] * $multi [12];
		$num14 = $aCuenta[5] * $multi [13];
		$num15 = $aCuenta[6] * $multi [14];
		$num16 = $aCuenta[7] * $multi [15];
		$num17 = $aCuenta[8] * $multi [16];
		$num18 = $aCuenta[9] * $multi [17];
		$suma_cuenta_total = $num9+$num10+$num11+$num12+$num13+$num14+$num15+$num16+$num17+$num18;
		$resto_cuenta = $suma_cuenta_total%11;
		$resta2 = 11 - $resto_cuenta;
		if ($resta2===11) {  
			$resta2=0;  
		}
		echo "<li>El codigo de control es : *Primer numero:".$resta."*Segundo numero:".$resta2."</li>";

	}

	function comprobar_codigo_control ($cuenta) {
		$codigo_control = (int)substr($cuenta,8,2);   
		if ($codigo_control === 10) {
			echo "<li>El codigo de control es correcto</li>";   
		}else {
			echo "<li>El codigo de control es incorrecto</li>";  
		}
	}
?>
</body>
</html>