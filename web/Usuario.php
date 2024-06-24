<?php
class Usuario {
    private String $documento;
    private String $nombre;
    private String $apellido;
    private String $username;
    private String $password;
    private Int $edad;
    private String $telefono;

    public function __construct(String $documento, String $nombre, String $apellido, String $username, String $password, Int $edad, String $telefono){
        $this->documento = $documento;
        $this->nombre = $nombre;
        $this->apellido = $apellido;    
        $this->username = $username;
        $this->password = $password;
        $this->edad = $edad;    
        $this->telefono = $telefono;    
    }

/* Getters */

    public function getDocumento() {
        return $this->documento;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function getTelefono() {
        return $this->telefono;
    }

/* Setters */

    public function setDocumento(String $doc) {
        $this->documento = $doc;
    }

    public function setNombre(String $nom) {
        $this->nombre = $nom;
    }

    public function setApellido(String $ape) {
        $this->apellido = $ape;
    }

    public function setUsername(String $usr) {
        $this->username = $usr;
    }

    public function setPassword(String $pwd) {
        $this->password = $pwd;
    }

    public function setEdad(Int $age) {
        $this->edad = $age;
    }

    public function setTelefono(String $tel) {
        $this->telefono = $tel;
    }

/* To String */

    public function __toString(){
        return $this->documento.",".$this->nombre.",".$this->apellido.",".$this->username.",".$this->password.",".$this->edad.",".$this->telefono;
    }
}