<?php

// incluir la librerIa xajax
include_once("../../lib/xajax/xajax_core/xajax.inc.php");
include_once("include/BD_Modelo.php");

// crear un objeto de la clase xajax
$xajax = new xajax();

// depurador, muestra lo que se envIa y lo que recibe
//$xajax->configure("debug", true);

/* registrar las funciones para convertirlas a jscript
  $xajax->register(XAJAX_FUNCTION,"nombre de la funciOn") tantas veces como
  funciones se tengan */
$xajax->register(XAJAX_FUNCTION, "miFuncion1");
$xajax->register(XAJAX_FUNCTION, "miFuncion2");

$xajax->configure("javascript URI", "../../lib/xajax");

// crea un archivo HTML con el nombre de cada funciOn xajax_
// procesar el registro
$xajax->processRequest();

// creacion de las funciones
function miFuncion1() {
    // crear una respuesta tipo xajax
    $respuesta = new xajaxResponse();
    $error = FALSE;
    $rapidos = BD_Modelo::getRunnersPorResultado(0, 6300);
    if (!$rapidos) {
        // mensaje que muestro
        $respuesta->assign("mensaje", "innerHTML", "<p>Ningún corredor está en ese tiempo</p>");
        $error = TRUE;
    } else
        $respuesta->clear("mensaje", "innerHTML");

    if (!$error) {
        $mensaje = "<table>";
        foreach ($rapidos as $r) {
            $mensaje .= "<tr><td>" . $r->getNombreYApellidos()." con un tiempo de ".$r->getTiempo() . " segundos</td></tr>";
        }
        $mensaje .= "</table>";
        $respuesta->assign("mensaje", "innerHTML", $mensaje);
    }
    return $respuesta;
}

function miFuncion2() {
    // crear una respuesta tipo xajax
    $respuesta = new xajaxResponse();
    $error = FALSE;
    $lentos = BD_Modelo::getRunnersPorResultado(6300, 90000);
    if (!$lentos) {
        // mensaje que muestro
        $respuesta->assign("mensaje", "innerHTML", "<p>Ningún corredor está en ese tiempo</p>");
        $error = TRUE;
    } else
        $respuesta->clear("mensaje", "innerHTML");

    if (!$error) {
        $mensaje = "<table><tr>";
        foreach ($lentos as $r) {
            $mensaje .= "<tr><td>" . $r->getNombreYApellidos()." con un tiempo de ".$r->getTiempo() . " segundos</td></tr>";
        }
        $mensaje .= "</tr></table>";
        $respuesta->assign("mensaje", "innerHTML", $mensaje);
    }
    return $respuesta;
}

?>
