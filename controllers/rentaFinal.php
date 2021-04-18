<?php 
session_start();
$id = $_SESSION['id'];
$cliente = $_SESSION['usuario'];
$tipoUsuario = $_SESSION['tipoUsuario'];

$rfc = $_POST['rfc'];
$nombres = $_POST['nombres'];
$ape1 = $_POST['ape1'];
$ape2 = $_POST['ape2'];
$calle = $_POST['calle'];
$col_fracc = $_POST['col_fracc'];
$num_casa = $_POST['num_casa'];
$estado = $_POST['estado'];
$localidad = $_POST['localidad'];
$cp = $_POST['cp'];
$telefono = $_POST['telefono'];
$correo_ele = $_POST['correo_ele'];

$id_producto = $_POST['id_producto'];
$producto = $_POST['producto'];
$meses_renta = $_POST['meses_renta'];
$caracteristicas = $_POST['caracteristicas'];
$info_adicional = $_POST['info_adicional'];
$cfdi = $_POST['cfdi'];
$metodo_pago = $_POST['forma_pago'];


var_dump($_POST);


if (!isset($cliente)) {
    

    header("Location: ../tienda.php");
    
    
} elseif ($tipoUsuario == 'cliente' || $tipoUsuario == 'admin') {
require 'config.php';


try {
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $datosProductoUser= "UPDATE modal_renta SET producto='{$producto}', caracteristicas='{$caracteristicas}', info_adicional='{$info_adicional}', meses_renta='{$meses_renta}', cfdi='{$cfdi}', metodo_pago='{$metodo_pago}' WHERE id_cliente='{$id}' AND id_renta='{$id_producto}'";
        $consulta = $conexion->prepare($datosProductoUser);
        $consulta->execute();

        $conexion2 = new PDO($base, $usuario, $password);
        $conexion2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $datosCliente = "UPDATE clientes SET rfc='{$rfc}',nombres='{$nombres}',ape1='{$ape1}',ape2='{$ape2}',calle='{$calle}',col_fracc='{$col_fracc}',num_casa='{$num_casa}',estado='{$estado}',localidad='{$localidad}',cp='{$cp}',telefono='{$telefono}',correo_ele='{$correo_ele}' WHERE id = '{$id}'";
        $consulta2 = $conexion2->prepare($datosCliente);
        $consulta2->execute();


} catch (PDOException $e) {

    die($e->getMessage());
}

$conexion = null; 
$conexion2 = null;

header('Location: ../tienda.php');

}
?>