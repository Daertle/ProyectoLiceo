<?php
class BaseDatos {
/********************************************************************************/
    private $servidor;      // En Xampp es "localhost"
    private $usuario;       // En Xampp es "root"
    private $password;      // En Xampp es ""
    private $base_datos;    // base datos en phpmyadmin
    private $conexion;      // Para las operaciones con MySQL
/********************************************************************************/	
    public function __construct() {
        $this->servidor = "localhost";
        $this->usuario = "root";
		$this->password = "";
		$this->base_datos = "luxurydriving";
		$this->conexion = $this->nueva("localhost","root","","luxurydriving");
    }
/*******************************************************************************/	
    private function nueva($server,$user,$pass,$base) {
        try {
            $conectar = mysqli_connect($server,$user,$pass,$base);
	    } catch (Exception $ex) {
            die($ex->getMessage());
	    }
	    return $conectar;
    }	
/********************************************************************************/
    public function ingresarAlumno($usuario) {
        $estadoTeorico = $usuario->getEstadoTeorico();
        $categoriaLibreta = $usuario->getCategoriaLibreta();
        $documento = $usuario->getDocumento();
        $nombre = $usuario->getNombre();
        $apellido = $usuario->getApellido();
        $username = $usuario->getUsername();
        $password = $usuario->getPassword();
        $edad = $usuario->getEdad();
        $telefono = $usuario->getTelefono();

        $insertar = "insert into alumnos values('$estadoTeorico','$categoriaLibreta','$documento','$nombre','$apellido','$username','$password','$edad','$telefono')";
    	return mysqli_query($this->conexion, $insertar);
    }

    public function ingresarInstructor($usuario) {
        $horarios = $usuario->getHorarios();
        $categoriaClase = $usuario->getCategoriaClase();
        $documento = $usuario->getDocumento();
        $nombre = $usuario->getNombre();
        $apellido = $usuario->getApellido();
        $username = $usuario->getUsername();
        $password = $usuario->getPassword();
        $edad = $usuario->getEdad();
        $telefono = $usuario->getTelefono();

        $insertar = "insert into instructor values('$horarios','$categoriaClase','$documento','$nombre','$apellido','$username','$password','$edad','$telefono')";
    	return mysqli_query($this->conexion, $insertar);
    }

    public function ingresarAdministrador($usuario) {
        $permisos = $usuario->getPermisos();
        $documento = $usuario->getDocumento();
        $nombre = $usuario->getNombre();
        $apellido = $usuario->getApellido();
        $username = $usuario->getUsername();
        $password = $usuario->getPassword();
        $edad = $usuario->getEdad();
        $telefono = $usuario->getTelefono();

        $insertar = "insert into administrador values('$permisos','$documento','$nombre','$apellido','$username','$password','$edad','$telefono')";
    	return mysqli_query($this->conexion, $insertar);
    }

/********************************************************************************/
    public function seleccionarAlumnos() {
    	$resultadoAlumnos = mysqli_query($this->conexion, "select * from alumnos");
    	$arreglo = mysqli_fetch_all($resultadoAlumnos,MYSQLI_ASSOC);
    	return $arreglo;
    }

    public function seleccionarInstructores() {
    	$resultadoInstructores = mysqli_query($this->conexion, "select * from instructor");
    	$arreglo = mysqli_fetch_all($resultadoInstructores,MYSQLI_ASSOC);
    	return $arreglo;
    }

    public function seleccionarAdministradores() {
    	$resultadoAdministrador = mysqli_query($this->conexion, "select * from administrador");
    	$arreglo = mysqli_fetch_all($resultadoAdministrador,MYSQLI_ASSOC);
    	return $arreglo;
    }

    	
/********************************************************************************/
}