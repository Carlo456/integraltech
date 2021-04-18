<?php

require '../../controllers/config.php';

$id_usuario = $_POST['id_usuario'];
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];
$tipoUsuario = $_POST['tipoUsuario'];



    try {
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $datosUsuario = "UPDATE usuarios SET usuarios='{$usuario}',password='{$pass}',tipo='{$tipoUsuario}' WHERE id='{$id_usuario}'";
    
        $consulta = $conexion->prepare($datosUsuario);

    
        $consulta->execute();
    
    } catch (PDOException $e) {

        die($e->getMessage());
    }
    
    $conexion = null; 
    
    header('Location: ../indexAdmin.php');


?>