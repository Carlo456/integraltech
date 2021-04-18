<?php

require 'config.php';

$usuario = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

    try {
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $datosContacto = "INSERT INTO formulario_contacto(nombre_com,telefono,correo_ele,comentario,fecha_comentario) VALUES (:nombre,:telefono,:correo,:mensaje,now())";
    
        $consulta = $conexion->prepare($datosContacto);
    
        $consulta->bindParam(':nombre',$usuario);
        $consulta->bindParam(':telefono',$telefono);
        $consulta->bindParam(':correo',$correo);
        $consulta->bindParam(':mensaje',$mensaje);
    
        $consulta->execute();
    
    } catch (PDOException $e) {

        die($e->getMessage());

    }
    
    $conexion = null;    

    $mensajeContacto = array(null=>$usuario,'correo'=>$correo,'telefono'=>$telefono,'mensaje'=>$mensaje);
    $queryContacto = http_build_query($mensajeContacto);

    header('Location: mail.php?usuario'.$queryContacto);

?>