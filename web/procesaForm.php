<?php
    require_once 'Controlador.php';
    $controla = new Controlador();

    $tipo = $_POST['txtOpcion'];
        

    if ($tipo == "alumno") {
        $controla->altaAlumno($_POST['txtEstadoTeorico'],$_POST['txtCategoriaLibreta'],$_POST['txtDocumento'],$_POST['txtNombre'],$_POST['txtApellido'],$_POST['txtUsername'],$_POST['txtPassword'],$_POST['txtEdad'],$_POST['txtTelefono']);
    } else if($tipo == "instructor") { 
        $controla->altaInstructor($_POST['txtHorarios'],$_POST['txtCategoriaClase'],$_POST['txtDocumento'],$_POST['txtNombre'],$_POST['txtApellido'],$_POST['txtUsername'],$_POST['txtPassword'],$_POST['txtEdad'],$_POST['txtTelefono']);
    } else if($tipo == "administrador"){
        $controla->altaAdministrador($_POST['txtPermisos'],$_POST['txtDocumento'],$_POST['txtNombre'],$_POST['txtApellido'],$_POST['txtUsername'],$_POST['txtPassword'],$_POST['txtEdad'],$_POST['txtTelefono']);
    }

    header('Location: vista.html.php');
?>