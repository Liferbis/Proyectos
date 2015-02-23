<?php 
require_once "BaseDEdatos.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>XAJAX</title>
	<?php 
		$xajax->printJavascript();
	 ?>
	 <script type="text/javascript" >
	 	function busqueda(){
			xajax_listadoFutbolistas(document.getElementsByName("txtbusqueda")[0].value);
		}

	 </script>
	 
</head>
<body>
	<div class="contenedor">
		<h1>Busca tu futbolista</h1>
		<hr>
		<input type="text" name="txtbusqueda" id="txtbusqueda" onkeypress="busqueda()">
		
		<div id="listado"></div>
	</div>
</body>
</html>