<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php require_once "valida.php" ?>
<html>
<head>
	<title>ud9</title>
	<style type="text/css"> 
		body{
			background: #000;
			color: #fff;
		}
		.contenedor{
			text-align: center;
			margin: 0 auto;
		}
		.table{
			border: 5 #FFF;
			margin: 0 auto;
		}
		.oculto{
			display:none;
		}
		.error{
			color: #cc0000;
		}
		.boton{
			text-align: center;
		}

	</style>
</head>
<body>
<div class="contenedor">
	<table class="table">
		<thead>
			<tr>
				<th colspan="2">
					<h3>Validación de datos</h3>
				</th>
			</tr>
		</thead>
		<tbody>
			<form id="datos" action="" method="POST">
				<tr>
					<td>
						Nombre:
					</td>
					<td>
						<input type="text" name="nombre" id="nombre" value="<?php if(isset( $_POST['nombre'])) echo $_POST['nombre'] ?>" />
						<span id='errorNombre' for='nombre' class='<?php if(!isset($_POST['enviar']) || validarNombre($_POST['nombre'])) echo "oculto "; ?>error'>
							El nombre debe tener más de 3 caracteres.
						</span>
					</td>
				</tr>
				<tr>
					<td>
						DNI:
					</td>
					<td>
						<input name="DNI" id="DNI"type="text" class="form-control" value="<?php if(isset( $_POST['DNI'])) echo $_POST['DNI'] ?>">
						<span id='errorDNI' for='DNI' class='<?php if(!isset($_POST['enviar']) || validarDNI($_POST['DNI'])) echo "oculto "; ?>error'>
							El DNI es incorrecto
						</span>
					</td>
				</tr>
				<tr>
					<td>
						Contraseña
					</td>
					<td>
						<input name="password1" type="password" id='password1' value="<?php if(isset( $_POST['password1'])) echo $_POST['password1'] ?>" >
						<span id='errorPassword' for='password' class='<?php if(!isset($_POST['enviar']) || validarPasswords($_POST['password1'], $_POST['password2'])) echo "oculto "; ?>error'>
							Debe ser mayor de 5 caracteres o no coinciden.
						</span>
					</td>
				</tr>
				<tr>
					<td>
						Repita la contaseña:
					</td>
					<td>
						<input name="password2" type="password" id='password2' value="<?php if(isset( $_POST['password2'])) echo $_POST['password1'] ?>">
					</td>
				</tr>
				<tr>
					<td colspan="2" >
						<input type='submit' name='enviar' value='Enviar' />
					</td>
				</tr>
			</form>
		</tbody>
	</table>
</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="valida.js"></script>
</body>
</html>


 
 
