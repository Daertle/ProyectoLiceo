<?php
require_once 'Clase.php';

$codigo = $_POST['txtCodigo'];
$hora = $_POST['hora'];
$fecha = $_POST['fecha'];
$tipoLibreta = $_POST['txtTipoDeLibreta'];


$clase = new clase($codigo, $hora, $fecha, $tipoLibreta);
    echo $clase; 
