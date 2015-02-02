<?php include_once "head.php" ?>
<div id="cuerpo"class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<form action="index.php" method="POST" role="form">
			<h3 id="titulo">Registo de clientes</h3>

			<div class="form-group">
				<label>Nombre</label>
				<input type="text" name="nombre" class="form-control" placeholder="Nombre del cliente">
			</div>

			<div class="form-group">
				<label>Telefono</label>
				<input type="text" name="tel" class="form-control" placeholder="Telefono del cliente">
			</div>

			<div class="form-group">
				<label>E-mail</label>
				<input type="email" name="mail" class="form-control" placeholder="E-mail del cliente">
			</div>
			
			<button type="submit" name="envio" value="1" class="btn btn-primary">Registrar</button>
			<button type="submit" name="envio" value="0" class="btn btn-danger">Cancelar</button>
		</form>
	</div>
</div>

<?php include_once "pie.php" ?>