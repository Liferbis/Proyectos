<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MediaMaratonWebService
 *
 * @author usuario
 */
include_once('../ejercicio1/include/BD_Modelo.php');

class MediaMaratonWebService {

    /**
     * getMejores que devuelve el tiempo (en minutos) de un determinado participante
     * @param string $dni
     * @return float
     */
    public function getTiempo($dni) {
        $tiempo = BD_Modelo::getTiempo($dni);
        return $tiempo;
    }

    /**
     * getMejores que devuelve un array con los 3 mejores tiempos de la carrera
     * @return Runner[]
     */
    public function getMejores() {
        $mejores = BD_Modelo::getMejores();
        return $mejores;
    }

}
