<?php

// Si el usuario aún no se ha autentificado, pedimos las credenciales
if (!isset($_SERVER['PHP_AUTH_USER'])) 
{
    header('WWW-Authenticate: Basic realm="Contenido restringido"');
    header("HTTP/1.0 401 Unauthorized");
    exit;
}

// Si ya ha enviado las credenciales, las comprobamos con la base de datos
else 
{
    // Conectamos a la base de datos
    $dwes = new mysqli("localhost", "root", "", "funicular");
    $error = $dwes->connect_errno;
    
    // Si se estableció la conexión
    if ($error == null) 
    {
        // Ejecutamos la consulta para comprobar si existe esa combinación de usuario y contraseña
        $sql = "SELECT * FROM usuarios
                WHERE nombre='$_SERVER[PHP_AUTH_USER]' AND
                ctv=md5('$_SERVER[PHP_AUTH_PW]')";
        $resultado = $dwes->query($sql);
        
        // Si no existe, se vuelven a pedir las credenciales
        if( $resultado->num_rows == 0)
        {
                header('WWW-Authenticate: Basic realm="El usuario o la password son incorrectos"');
                header("HTTP/1.0 401 Unauthorized");
                exit();
            
        }
        
        $resultado->close();
        $dwes->close();
    }
}
?>
<DOCTYPE>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Lidia</title>
        <link href="dwes.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>ej13</h1>
        <h3>Bienvenido</h3>
        <?php
        echo "Nombre de usuario: " . $_SERVER['PHP_AUTH_USER'] . "<br />";
        echo "Hash de la contraseña: " . md5($_SERVER['PHP_AUTH_PW']) . "<br />";

        session_start();

        $_SESSION['misvisitas'][]=date('d/m/y H:i:s');

        foreach ($_SESSION['misvisitas'] as $value) {
                echo $value.'<br>';
        }
        
            ?>
        <form action="" method="POST">
            <button type="submit" name="limpia" class="btn btn-large btn-block btn-info">Limpiar</button>
        </form>

        <?php 
            if(isset($_POST['limpia'])){
                session_unset($_SESSION["misvisitas"]);

            }
        ?>
    </body>
</html>
