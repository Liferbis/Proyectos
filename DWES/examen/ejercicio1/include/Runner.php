<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Runner
 *
 * @author usuario
 */
class Runner {

    /**
     *
     * @var string 
     */
    public $dni;
    /**
     *
     * @var string 
     */
    public $nombreYApellidos;
    /**
     *
     * @var string
     */
    public $sexo;
    /**
     *
     * @var string 
     */
    public $tallaCamiseta;
    /**
     *
     * @var int 
     * 
     */
    public $dorsal;
    /**
     *
     * @var int
     */
    public $tiempo;

    public function __construct($dni, $nombreYApellidos, $sexo, $tallaCamiseta) {
        $this->dni = $dni;
        $this->nombreYApellidos = $nombreYApellidos;
        $this->sexo = $sexo;
        $this->tallaCamiseta = $tallaCamiseta;
    }

    public function getDni() {
        return $this->dni;
    }

    public function getNombreYApellidos() {
        return $this->nombreYApellidos;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function getTallaCamiseta() {
        return $this->tallaCamiseta;
    }

    public function getDorsal() {
        return $this->dorsal;
    }

    public function getTiempo() {
        return $this->tiempo;
    }

    public function setDni($dni) {
        $this->dni = $dni;
    }

    public function setNombreYApellidos($nombreYApellidos) {
        $this->nombreYApellidos = $nombreYApellidos;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function setTallaCamiseta($tallaCamiseta) {
        $this->tallaCamiseta = $tallaCamiseta;
    }

    public function setDorsal($dorsal) {
        $this->dorsal = $dorsal;
    }

    public function setTiempo($tiempo) {
        $this->tiempo = $tiempo;
    }

    public function mostrar() {
        $string = $this->nombre . ", dorsal " . $this->dorsal;
        $tiempo = $this->tiempo;
        if ($tiempo > 0) {
            $tiempoMin = $tiempo / 60;
            $string .= ", un tiempo de " . $tiempoMin . " minutos";
        }
        return $string;
    }

}
