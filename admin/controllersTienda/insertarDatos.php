<?php

require '../../controllers/config.php';

try {
     $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       
$sentencia= "UPDATE datos_publicitaria SET telefono=:telefono, direccion=:direccion, correo_ele=:correo_ele, cp=:cp  WHERE id=1";

$consulta = $conexion->prepare($sentencia);

$consulta->bindParam(':telefono',$_POST['telefono']);
$consulta->bindParam(':direccion',$_POST['direccion']);
$consulta->bindParam(':correo_ele',$_POST['correo_ele']);
$consulta->bindParam(':cp',$_POST['cp']);



$consulta->execute();



} catch (PDOException $e) {

    die($e->getMessage());
}

$conexion = null; 

header('Location: ../paginaPublicitaria.php');

?>