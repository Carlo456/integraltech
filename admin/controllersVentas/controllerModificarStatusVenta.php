<?php

var_dump($_GET['status']);

session_start();
$id = $_SESSION['id'];
$usuario = $_SESSION['usuario'];
$tipoUsuario = $_SESSION['tipoUsuario'];

$id_venta = $_GET['id_venta'];
$status = $_GET['status'];


if (!isset($usuario)) {
    header('Location: ../views/login.php');
} elseif ($tipoUsuario == 'Ventas' || $tipoUsuario == 'admin') {

    require '../../controllers/config.php'; 

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $actualizarStatus = "UPDATE modal_venta SET status_venta = '{$status}' WHERE id_venta = '{$id_venta}'";

    $nuevoStatus = $conexion->prepare($actualizarStatus);
    $nuevoStatus->execute();


header('Location: ../ventas.php');

}  else {  
    header('Location: viewsAdmin/error404.php');  
}  


?>