<?php

require '../../controllers/config.php';

$id = $_POST['id_producto'];
$stock = (int)$_POST['stock_pendiente'];


echo "$id"."$stock";

try {
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sentencia= "UPDATE productos SET cantidad_pend='{$stock}' WHERE id={$id}";


    $consulta = $conexion->prepare($sentencia);

    $consulta->execute();


} catch (PDOException $e) {

    die($e->getMessage());
}

$conexion = null; 

header('Location: ../almacen.php');

?>