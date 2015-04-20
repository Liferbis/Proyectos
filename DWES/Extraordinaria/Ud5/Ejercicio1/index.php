<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AUTENTIFICACIÓN</title>

        <!-- Bootstrap CSS -->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <h1 class="text-center">AUTENTIFICACIÓN</h1>
        <div class="row well">  
        <?php
            if (isset($_SERVER['PHP_AUTH_USER'])) {
                echo "<h1 class='text-center'>Nombre de usuario: " . $_SERVER['PHP_AUTH_USER'] . "<h1 />";
                echo "<h1 class='text-center'>Contraseña: " . $_SERVER['PHP_AUTH_PW'] . "<h1 />";
                echo "<h1 class='text-center'>Método de autentificación: " . $_SERVER['AUTH_TYPE'] . "<h1 />";
            }else{
        ?>
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>EROOR!</strong> Usuario Incorrecto
                </div>
        <?php 
            }
        ?>
        </div>
        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    </body>
</html>

        
        
