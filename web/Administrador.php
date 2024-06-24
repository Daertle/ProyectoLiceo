<?php
require_once 'Usuario.php';

class Administrador extends Usuario {
        private String $permisos;
        
    public function __construct(String $permisos, String $documento, String $nombre, String $apellido, String $username, String $password, Int $edad, String $telefono){
        parent::__construct($documento, $nombre, $apellido, $username, $password, $edad, $telefono);
        $this->permisos = $permisos;
    }

    
    /* Getters */

    public function getPermisos() {
        return $this->permisos;
    }
    
    /* Setters */

    public function setPermisos(String $per) {
        $this->permisos = $per;
    }

    
    /* Funciones */

}

