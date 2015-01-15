<?php 
	include_once "header.php";
	include_once "conecta.php";
	include_once "funciones.php";
?>
		<div class="row  text-center">
			<h1>La Tienduca</h1>

			<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" role="form">
					<table id="tabla" class="table ">
						<thead>
							<tr>
								<h3>Rellene los campos</h3>
							</tr>
						</thead>
						<tbody>
							<tr>
								<div class="form-group">
								<td>
									<label>Nombre</label>
								</td>
								<td>
									<input type="text"  name="nombre" required placeholder="Nombre">
								</td>
								</div>
							</tr>
							<tr>
								<div class="form-group">
									<td>
										<label>DNI</label>
									</td>
									<td>
										<input type="text "  required name="dni" placeholder="DNI">
									</td>
								</div>
							</tr>
							<tr>
								<div class="form-group">
									<td>
										<label>e-mail</label>
									</td>
									<td>
										<input type="email"  name="mail" required placeholder="ejemplo@ejemplo.ej">
									</td>
								</div>
							</tr>
							<tr>
								<div class="form-group">
									<td>
										<label>Asunto</label>
									</td>
									<td>
										<input type="text"  name="asunto" required placeholder="Asunto">
									</td>
								</div>
							</tr>
							<tr>
								<div class="form-group">
									<td>
										<label>Mensaje </label>
									</td>
									<td>
										<textarea rows="4" cols="50" type="text" name="sms" required placeholder="Mensaje" >
										</textarea>
									</td>
								</div>
							</tr>
						</tbody>
					</table>
					<br><br>
					<button type="submit" class="btn btn-primary">Enviar</button>
				</form>
				
		<?php 

			if( isset($_POST["nombre"]) && isset($_POST["dni"]) && isset($_POST["mail"])&& isset($_POST["asunto"]) && isset($_POST["sms"]) ){	
?>	
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Lo Sentimos</strong> Estamos trabajando en este enlace, pronto estara hablilitado. Disculpe las molestias
				</div>	
<?php 
				//$nombre=$_POST["nombre"];
				//$dni=$_POST["dni"];
				//$mail=$_POST["mail"];
				//$sms=$_POST["sms"];
				//$asunto=$_POST["asunto"];
				//echo $nombre."<br>".$dni."<br>".$mail."<br>".$asunto."<br>".$sms;
				//formulario($nombre, $dni, $mail, $asunto, $sms);
			}
?>
<?php 
	include_once "pie.php";
 ?>