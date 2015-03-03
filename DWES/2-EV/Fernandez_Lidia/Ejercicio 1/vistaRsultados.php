<?php 
require_once "xajax.php";

require_once "head.php";

$xajax->printJavascript();

?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 </head>
	<body>
		<h1 class="text-center">Carrera Terminada</h1>
		<button type="button" name='btn' value='1' id="btn" onclick="xajax_pulsaBoton()">Menos de 1 hora 45 min</button>
		<button type="button" name='btn' value='2' id="btn" onclick="xajax_pulsaBoton()">Mas de 1 hora 45 min</button>
	
		<div id='mensaje'></div>

<?php
require_once "pie.php";

 ?>