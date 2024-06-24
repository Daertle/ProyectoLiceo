<?php
require_once 'Usuario.php';

class Instructor extends Usuario {
        private String $horarios;
        private String $categoriaClase;
        
    public function __construct(String $horarios, String $categoriaClase, String $documento, String $nombre, String $apellido, String $username, String $password, Int $edad, String $telefono){
        parent::__construct($documento, $nombre, $apellido, $username, $password, $edad, $telefono);
        $this->horarios = $horarios;
        $this->categoriaClase = $categoriaClase;
    }

    /* Getters */

    public function getHorarios() {
        return $this->horarios;
    }

    public function getCategoriaClase() {
        return $this->categoriaClase;
    }

    
    /* Setters */

    public function setHorarios(String $hor){
        $this->horarios = $hor;
    }

    public function setCategoriaClase(String $cc) {
        $this->categoriaClase = $cc;
    }

    /* Funciones */

}

