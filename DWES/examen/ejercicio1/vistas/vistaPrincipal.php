<!DOCTYPE>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html" charset="UTF-8">
        <title>Media Maratón</title>
        <link href="include/validar.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h3>REGISTRO DE PARTICIPANTES</h3>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <table>    
                <tr>
                    <td style="padding: 10px;"></td>
                </tr>
                <tr>
                    <td><a href="index.php?pagina=inscripcion">Inscripción de participante</a></td>
                </tr>
                <tr>
                    <td style="padding: 10px;"></td>
                </tr>
                <tr>
                    <td><a href="index.php?pagina=simularCarrera">Ir a simular carrera</a></td>
                </tr>
                <tr>
                    <td style="padding: 10px;"></td>
                </tr>
                <tr>
                    <td><a href="index.php?pagina=resultados">Resultados de la carrera</a></td>
                </tr>
            </table>
        </form>
        <?php
        include_once('pie.php');
        ?>