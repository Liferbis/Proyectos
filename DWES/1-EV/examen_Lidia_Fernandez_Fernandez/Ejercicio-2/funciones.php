<?php 
	function logea($num_cliente, $password){
		global $dwes;
		$c="SELECT num_cliente, password FROM clientes WHERE password='$password'";

		$resultado = $dwes->query($c);

		$acceso=$resultado->fetch_object();

		if(!$acceso){
?>
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>FALLO</strong> La contraseña NO es correcta
			</div>
<?php 
		}else{
			session_start();
			$_SESSION['usuario'] = $acceso->num_cliente;
			header('Location: resumen.php');
		}
	}

	function cargatabla(){
		session_start();
		global $dwes;
		$num_cliente=$_SESSION['usuario'];
		
		$c="SELECT * FROM cuentas WHERE num_cliente='$num_cliente'";

		$resultado = $dwes->query($c);

		while($prod=$resultado->fetch_object()){
?>
			<tr>
				<td>
					<?php 
						echo $prod->num_cuenta;
					 ?>
				</td>
				<td>
					<?php 
						echo $prod->saldo;
					 ?>
				</td>
			</tr>
<?php 
		}
	}

	function cargaSelec(){
		session_start();
		global $dwes;
		$num_cliente=$_SESSION['usuario'];
		$c="SELECT * FROM cuentas WHERE num_cliente='$num_cliente'";
		$resultado = $dwes->query($c);
		while($prod=$resultado->fetch_object()){
			echo "<option value='";
			echo $prod->num_cuenta;
			echo "'>";
			echo $prod->num_cuenta;
			echo "</option>\n";
		}
	}

	function tras($a){
		global $dwes;
		$c="SELECT num_cuenta FROM cuentas ";
		$resultado = $dwes->query($c);
		while($prod=$resultado->fetch_object()){
			if($prod->num_cuenta == $a){
				return "true";
			}
		}
	}

	function traspaso($c1, $c, $i){
		global $dwes;
		$c="SELECT saldo FROM cuentas WHERE num_cuenta='$c1'";
		$resultado = $dwes->query($c);
		while($prod=$resultado->fetch_object()){
			if($prod->saldo >= $i){
				$resta=$prod->saldo-$i;
				$c="UPDATE cuentas SET saldo=$resta WHERE num_cuenta='$c1'";
			}
		}
		$c="SELECT saldo FROM cuentas WHERE num_cuenta='$c'";
		$resultado = $dwes->query($c);
		while($prod=$resultado->fetch_object()){
				$suma=$prod->saldo-$i;
				$c="UPDATE cuentas SET saldo=$suma WHERE num_cuenta='$c1'";
		}
	}
?>