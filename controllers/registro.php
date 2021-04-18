<?php 

require 'config.php';

session_unset();
session_start();

$usuario = $_POST['usuario'];
$pass = $_POST['pass'];
$confPass = $_POST['confirmarPass'];



$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$datosUsers = "SELECT id,usuarios,password FROM usuarios WHERE usuarios = '{$usuario}'";

$consultaUser = $conexion->prepare($datosUsers);
$consultaUser->execute();

$resultado = $consultaUser->fetch(PDO::FETCH_ASSOC);

var_dump($resultado);


if(empty($resultado) && $usuario != ""){
    if($pass == $confPass && $pass != "" && $confPass != "") {
    try {
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $datosLogin = "INSERT INTO usuarios(id,usuarios,password) VALUES ('',:usuario,:pass)";
    
        $consulta = $conexion->prepare($datosLogin);
    
        $consulta->bindParam(':usuario',$usuario);
        $consulta->bindParam(':pass',$pass);

        $consulta->execute();
        
        $last_id = $conexion->lastInsertId();


    
    } catch (PDOException $e) {
    
        die($e->getMessage());
    }
    
    $_SESSION['id'] = $last_id;
    $_SESSION['usuario'] = $usuario;
    $_SESSION['tipoUsuario'] = "cliente";
    

    $conexion = null; 
    


            header('Location: ../views/infoCliente.php');
    } else {
    header('Location: ../views/register.php?aviso2=Las contraseñas no son iguales o no se escribieron.');
    }
} else {
    header('Location: ../views/register.php?aviso1=El usuario ya existe o no se escribio.');
}


    









?>