<?php

var_dump($_POST);

$id = $_POST['id_usuario'];
$password = $_POST['nuevoPass'];



require 'config.php';
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$datosCliente = "UPDATE usuarios SET password='{$_POST['nuevoPass']}' WHERE id='{$id}'";



$actualizarCliente = $conexion->prepare($datosCliente);
$actualizarCliente->execute();



$conexion = null;

header('Location: ../views/login.php');




?>