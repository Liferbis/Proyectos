<!DOCTYPE html>
<?php

date_default_timezone_set('Europe/Madrid');
if (isset($_COOKIE['ultimo_login'])) {
	$ultimo_login = $_COOKIE['ultimo_login'];
}
setcookie("ultimo_login", time(), time()+2);

?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Cookie</title>
</head>
<body>

<?php
$ahora=date("Y-m-d H:i:s");

if (!isset($ultimo_login)) {
      echo "<h1 class='text-center'>Bienvenido !! </h1>
			<br>
      		<h1 class='text-center'>Esta es tu primera visita !</h1>";
} else {
      echo "Último login: '" . $ahora . "' <br>";
      
}
?>
</body>
</html>