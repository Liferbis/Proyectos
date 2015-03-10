<?php
$cliente = new SoapClient("http://127.0.0.1/Examen/evaluacion2final/correccion_casa/ejercicio2/mediaMaraton.xml");

$tiempo = $cliente->getTiempo("33333333P");
$runners = $cliente->getMejores();
?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <?php
        echo "Tiempo: " . $tiempo;
        ?>
        <h4>PARTICIPANTES:</h4>
        <table border="1">
            <tr>
                <th>Dorsal</th>
                <th>Nombre</th>
                <th>Tiempo</th>
            </tr>
            <?php
            //var_dump($runners);
            foreach ($runners as $r) {
                echo "<tr>";
                echo "<td>" . $r->dorsal . "</td>";
                echo "<td>" . $r->nombreYApellidos . "</td>";
                echo "<td>" . $r->tiempo . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </body>
</html>