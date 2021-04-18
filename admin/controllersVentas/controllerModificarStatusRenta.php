<?php

var_dump($_GET['status']);

session_start();
$id = $_SESSION['id'];
$usuario = $_SESSION['usuario'];
$tipoUsuario = $_SESSION['tipoUsuario'];

$id_renta = $_GET['id_renta'];
$status = $_GET['status'];


if (!isset($usuario)) {
    header('Location: ../views/login.php');
} elseif ($tipoUsuario == 'Ventas' || $tipoUsuario == 'admin') {

    require '../../controllers/config.php'; 

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $actualizarStatus = "UPDATE modal_renta SET status_renta = '{$status}' WHERE id_renta = '{$id_renta}'";

    $nuevoStatus = $conexion->prepare($actualizarStatus);
    $nuevoStatus->execute();


header('Location: ../rentas.php');

}  else {  
    header('Location: viewsAdmin/error404.php');  
}  


?>