<?php 

session_start();
$id = $_SESSION['id'];
$usuario = $_SESSION['usuario'];
$tipoUsuario = $_SESSION['tipoUsuario'];

$id_venta = $_GET['id_venta'];

if (!isset($usuario)) {
    header('Location: ../views/login.php');
} elseif ($tipoUsuario == 'Ventas' || $tipoUsuario == 'admin') {

require '../../controllers/config.php'; 

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $borrarVenta = "DELETE FROM modal_venta WHERE id_venta='{$id_venta}'";

    $conexion->exec($borrarVenta);


header('Location: ../ventas.php');

}  else {  
    header('Location: viewsAdmin/error404.php');  
}  

?>