<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Modelo
 *
 * @author usuario
 */
include ('Runner.php');

class BD_Modelo {
    /* declaraciOn de constantes para las conexiones */

    const DB_HOST = "localhost";
    const DB_USUARIO = "root";
    const DB_PSWD = "";
    const DB_BBDD = "mediamaraton";

    private static function ejecutarConsulta($sql) {
        $conexion = mysqli_connect(self::DB_HOST, self::DB_USUARIO, self::DB_PSWD);
        $conexion->set_charset("utf8");
        mysqli_select_db($conexion, self::DB_BBDD);
        @$error = mysqli_connect_errno();
        if ($error == null) {
            $resultado = $conexion->query($sql);
        } else {
            return $mensaje1 = "No se ha podido realizar la conexión";
            exit();
        }
        mysqli_close($conexion);
        return $resultado;
    }

    public static function guardaRunner($runner) {
        $dni = $runner->getDni();
        $nombre = $runner->getNombreYApellidos();
        $sexo = $runner->getSexo();
        $talla = $runner->getTallaCamiseta();
        $sql = "INSERT INTO runners (dni, nombre, sexo, talla) VALUES ('" . $dni . "','" . $nombre . "','" . $sexo . "','" . $talla . "');";
        $resultado = self::ejecutarConsulta($sql);
    }

    public static function simular() {
        $sql = "UPDATE runners SET tiempo = ((RAND()*(9000-3600))+3600);";
        $resultado = self::ejecutarConsulta($sql);
    }

    public static function getRunnersPorResultado($tiempoDesde, $tiempoHasta) {
        $sql = "SELECT * FROM runners WHERE tiempo BETWEEN '" . $tiempoDesde . "' AND '" . $tiempoHasta . "';";
        $resultado = self::ejecutarConsulta($sql);
        $runners = array();
        if ($resultado) {
            /* creo un objeto runner */
            while ($row = mysqli_fetch_assoc($resultado)) {
                $tiempo = $row['tiempo'];
                $dni = $row['dni'];
                $nombre = $row['nombre'];
                $sexo = $row['sexo'];
                $talla = $row['talla'];
                $runner = new Runner($dni, $nombre, $sexo, $talla);
                $runner->setDorsal($row['dorsal']);
                $runner->setTiempo($tiempo);
                $runners[] = $runner;
            }
        }
        return $runners;
    }

    public static function getTiempo($dni) {
        $sql = "SELECT tiempo FROM runners WHERE dni = '" . $dni . "';";
        // llamo al método ejecutarConsulta() con la consulta
        $resultado = self::ejecutarConsulta($sql);
        if (isset($resultado)) {
            $row = mysqli_fetch_assoc($resultado);
            $tiempo = $row['tiempo'] / 60;
        }
        return $tiempo . " minutos";
    }

    public static function getMejores() {
        $sql = "SELECT * FROM runners ORDER BY tiempo ASC LIMIT 3;";
        // llamo al método ejecutarConsulta() con la consulta
        $resultado = self::ejecutarConsulta($sql);
        $runners = array();
        if ($resultado) {
            /* creo un objeto runner */
            while ($row = mysqli_fetch_assoc($resultado)) {
                $dni = $row['dni'];
                $nombre = $row['nombre'];
                $sexo = $row['sexo'];
                $talla = $row['talla'];
                $tiempo = $row['tiempo'];
                $runner = new Runner($dni, $nombre, $sexo, $talla);
                $runner->setDorsal($row['dorsal']);
                $runner->setTiempo($tiempo);
                $runners[] = $runner;
            }
        }
        return $runners;
    }

}
