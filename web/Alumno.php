<?php
require_once 'Usuario.php';

class Alumno extends Usuario {
        private String $estadoTeorico;
        private String $categoriaLibreta;
        
    public function __construct(String $estadoTeorico, String $categoriaLibreta,String $documento, String $nombre, String $apellido, String $username, String $password, Int $edad, String $telefono){
        parent::__construct($documento, $nombre, $apellido, $username, $password, $edad, $telefono);
        $this->estadoTeorico = $estadoTeorico;
        $this->categoriaLibreta = $categoriaLibreta;
    }

    
    /* Getters */

    public function getEstadoTeorico() {
        return $this->estadoTeorico;
    }

    public function getCategoriaLibreta() {
        return $this->categoriaLibreta;
    }

    
    /* Setters */

    public function setEstadoTeorico(String $et) {
        $this->estadoTeorico = $et;
    }

    public function setCategoriaLibreta(String $cl) {
        $this->categoriaLibreta = $cl;
    }

    /* Funciones */
    

}

