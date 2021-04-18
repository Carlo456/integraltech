<?php

require '../../controllers/config.php';

//var_dump($_GET['noMensaje']);

try {
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $borrarComentario = "DELETE FROM formulario_contacto WHERE id={$_GET['noMensaje']}";

    $conexion->exec($borrarComentario);

} catch (PDOException $e) {

    die($e->getMessage());
}

$conexion = null; 

header('Location: ../contactoCliente.php');

?>