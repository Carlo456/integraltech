<?php

var_dump($_GET);



session_start();
$id = $_SESSION['id'];
$usuario = $_SESSION['usuario'];
$tipoUsuario = $_SESSION['tipoUsuario'];

$id_mensaje = $_GET['id_comentario'];
$status = $_GET['status'];


if (!isset($usuario)) {
    header('Location: ../../views/login.php');
} elseif ($tipoUsuario == 'Ventas' || $tipoUsuario == 'admin') {

    require '../../controllers/config.php'; 

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $actualizarStatus = "UPDATE formulario_contacto SET status_comentario = '{$status}' WHERE id = '{$id_mensaje}'";

    $nuevoStatus = $conexion->prepare($actualizarStatus);
    $nuevoStatus->execute();


header('Location: ../contactoCliente.php');

}  else {  
    header('Location: ../viewsAdmin/error404.php');  
}  


?>