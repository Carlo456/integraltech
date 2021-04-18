<?php

require '../../controllers/config.php';

//var_dump($_GET['noMensaje']);

try {
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $borrarProducto = "DELETE FROM productos WHERE id={$_GET['noProducto']}";

    $conexion->exec($borrarProducto);

} catch (PDOException $e) {

    die($e->getMessage());
}

$conexion = null; 

header('Location: ../almacen.php');

?>