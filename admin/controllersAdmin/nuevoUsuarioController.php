<?php

require '../../controllers/config.php';

$usuario = $_POST['usuario'];
$pass = $_POST['pass'];
$confPass = $_POST['confirmarPass'];
$tipoUsuario = $_POST['tipoUsuario'];
if ($pass != $confPass) {
    echo 'Las contrasenias no coinciden';
    header('Location: ../nuevoUsuario.php');
} else {
    
    
    try {
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $datosLogin = "INSERT INTO usuarios(usuarios,password,tipo) VALUES (:usuario,:pass,:tipoUsuario)";
    
        $consulta = $conexion->prepare($datosLogin);
    
        $consulta->bindParam(':usuario',$usuario);
        $consulta->bindParam(':pass',$pass);
        $consulta->bindParam(':tipoUsuario',$tipoUsuario);
    
        $consulta->execute();
    
    } catch (PDOException $e) {
        echo "<h2>El usaurio ya existe</h2>";
        echo '<a href="../nuevoUsuario.php">Volver..</a>';
        die();
    }
    
    $conexion = null; 
    
    if($tipoUsuario == 'Provedor'){
        header('Location: ../nuevoProvedor.php');    
    }

    header('Location: ../nuevoUsuario.php');
}



?>