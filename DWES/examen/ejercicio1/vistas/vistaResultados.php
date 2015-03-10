<?php
include_once("include/xajaxInclude.php");
?>
<!DOCTYPE>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html" charset="UTF-8">
        <title>Media Maratón</title>
        <?php
        $xajax->printJavascript();
        ?>
    </head>
    <body>
        <h3>RESULTADOS</h3>
        <div id="mensaje"></div>

        <form id="datos" action="javascript:void(null);">
            <input type="submit" name="lentos" value="Mostrar lentos" onclick="xajax_miFuncion2()" />
            <input type="submit" name="rápidos" value="Mostrar rápidos" onclick="xajax_miFuncion1()" style="margin-left: 5px;"/>
        </form>
        <table>
            <tr>
                <td><a href="index.php">Volver vista principal</a></td>
            </tr>
        </table>
        <?php
        include_once('pie.php');
        ?>