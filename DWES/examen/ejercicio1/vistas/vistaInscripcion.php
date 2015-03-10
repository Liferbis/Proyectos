<?php
include_once("../../lib/jQuery4PHP/lib/YepSua/Labs/RIA/jQuery4PHP/YsJQueryAutoloader.php");
YsJQueryAutoloader::register();
YsJQuery::usePlugin(YsJQueryConstant::PLUGIN_JQVALIDATE);
?>
<!DOCTYPE>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html" charset="UTF-8">
        <title>Media Maratón</title>
        <link href="include/validar.css" rel="stylesheet" type="text/css">

        <script type="text/javascript" src="../../lib/jQuery4PHP/jquery.min.js"></script>
        <script type="text/javascript" src="../../lib/jQuery4PHP/jquery.validate.min.js"></script>
        <script type="text/javascript" src="include/validarDNI.js"></script>
        <script type="text/javascript" src="include/validarTallaCamiseta.js"></script>

    </head>
    <body>
        <h3>NUEVO PARTICIPANTE</h3>
        <form id="datos" action="index.php" method="post">
            <table>
                <tr>
                    <!-- caja de texto para dni -->
                    <td>DNI: </td>
                    <td>
                        <input id="dni" type="text" name="dni" size="15" style="margin-left: 5px;"/>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px;"></td>
                </tr>
                <tr>
                    <!-- caja de texto para nombre y apellidos -->
                    <td>Nombre y Apellidos: </td>
                    <td>
                        <input id="nombre" type="text" name="nombre" size="50" style="margin-left: 5px;"/>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px;"></td>
                </tr>
                <tr>
                    <!-- desplegable con valores para el sexo -->
                    <td>Sexo: </td>
                    <td>
                        <select id="sexo" name="sexo" style="margin-left: 5px;width: 50%;">
                            <option value=""></option>
                            <option value="M">M</option>
                            <option value="F">F</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px;"></td>
                </tr>
                <tr>
                    <!-- caja de texto para meter la talla de la camiseta -->
                    <td>Talla de camiseta: </td>
                    <td>
                        <input id="talla" type="text" name="talla" size="3" style="margin-left: 5px;"/>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px;"></td>
                </tr>
                <tr>
                    <td><input type="submit" id="enviar" name="crearRunner" value="Inscripción" /></td>
                </tr>
                <tr>
                    <td style="padding: 10px;"></td>
                </tr>
                <tr>
                    <td><a href="index.php">Volver vista principal</a></td>
                </tr>
            </table>
        </form>
        <?php
        // pluggin para traducir los mensajes de error
        echo YsJQueryAssets::loadScripts('../../lib/jQuery4PHP/showcase/jquery4php-assets/js/plugins/bassistance/validate/localization/messages_es.js')->execute();

        echo YsJQuery::newInstance()
                ->onClick()
                ->in("#enviar")
                ->execute(YsJQValidate::build()->in('#datos')
                        ->_rules(
                                array(
                                    'dni' => array('required' => true, 'comprobarDNI' => true),
                                    'nombre' => array('required' => true, 'minlength' => 4),
                                    'talla' => array('required' => true, 'tallaCamiseta' => true, 'maxlength' => 3),
                        ))
        );
        include_once('pie.php');
        ?>
