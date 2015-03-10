<?php

include_once('include/BD_Modelo.php');
include_once('include/Runner.php');

if (isset($_GET['pagina'])) {
    $pagina = $_GET['pagina'];
    if ($pagina == "inscripcion") {
        include ('vistas/vistaInscripcion.php');
    } elseif ($pagina == "simularCarrera") {
        BD_Modelo::simular();
        include ('vistas/vistaPrincipal.php');
    } elseif ($pagina == "resultados") {
        include ('vistas/vistaResultados.php');
    }
} else {
    include ('vistas/vistaPrincipal.php');
}

if (isset($_POST['crearRunner'])) {
    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];
    $sexo = $_POST['sexo'];
    $talla = $_POST['talla'];

    $runner = new Runner($dni, $nombre, $sexo, $talla);
    BD_Modelo::guardaRunner($runner);
}
?>