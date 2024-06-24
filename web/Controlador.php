<?php
    require_once 'Usuario.php';
    require_once 'Instructor.php';
    require_once 'Administrador.php';
    require_once 'Alumno.php';
    require_once 'BaseDatos.php';
    
    class Controlador{
    
        private $base;
    
        public function __construct(){
            $this->base = new BaseDatos();
        }               

        /* Casos de uso */


        /* Alta Usuarios */

        public function altaAlumno(String $estadoTeorico, String $categoriaLibreta,String $documento, String $nombre, String $apellido, String $username, String $password, Int $edad, String $telefono){
            $alumno = new Alumno($estadoTeorico, $categoriaLibreta, $documento, $nombre, $apellido, $username, $password, $edad, $telefono);
            $this->base->ingresarAlumno($alumno);
        }
        
        public function altaInstructor(String $horarios, String $categoriaClase, String $documento, String $nombre, String $apellido, String $username, String $password, Int $edad, String $telefono){
            $instructor = new Instructor($horarios, $categoriaClase, $documento, $nombre, $apellido, $username, $password, $edad, $telefono);
            $this->base->ingresarInstructor($instructor);
        }

        public function altaAdministrador(String $permisos, String $documento, String $nombre, String $apellido, String $username, String $password, Int $edad, String $telefono){
            $administrador = new Administrador($permisos, $documento, $nombre, $apellido, $username, $password, $edad, $telefono);
            $this->base->ingresarAdministrador($administrador);
        }
        
        /* Traer Tabla */

        public function traerTablaAlumnos() {
            echo('<pre>');
            echo('Alumnos');
            print_r($this->base->seleccionarAlumnos());
            echo('</pre>');
        }
        
        public function traerTablaInstructores() {
            echo('<pre>');
            echo('Instructores');
            print_r($this->base->seleccionarInstructores());
            echo('</pre>');
        }
        
        public function traerTablaAdministradores() {
            echo('<pre>');
            echo('Administradores');
            print_r($this->base->seleccionarAdministradores());
            echo('</pre>');
        }
    }
