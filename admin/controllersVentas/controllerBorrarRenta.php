<?php 

session_start();
$id = $_SESSION['id'];
$usuario = $_SESSION['usuario'];
$tipoUsuario = $_SESSION['tipoUsuario'];

$id_renta = $_GET['id_renta'];

if (!isset($usuario)) {
    header('Location: ../views/login.php');
} elseif ($tipoUsuario == 'Ventas' || $tipoUsuario == 'admin') {

require '../../controllers/config.php'; 

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $borrarRenta = "DELETE FROM modal_renta WHERE id_renta='{$id_renta}'";

    $conexion->exec($borrarRenta);


header('Location: ../rentas.php');

}  else {  
    header('Location: viewsAdmin/error404.php');  
}  

?>