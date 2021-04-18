<?php

require '../../controllers/config.php';

try {
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $nombreImg = $_FILES['imgNosotros']['name'];
    $mimeImg = $_FILES['imgNosotros']['type'];
    $datosImg = file_get_contents($_FILES['imgNosotros']['tmp_name']);

    $sentencia= "UPDATE nosotros_publicitaria SET titulo=:titulo, descripcion=:descripcion, nombre_img=:nombre_img, mime=:mime, img=:img WHERE id=9";

    $consulta = $conexion->prepare($sentencia);

    $consulta->bindParam(':titulo',$_POST['titulo']);
    $consulta->bindParam(':descripcion',$_POST['descripcion']);
    $consulta->bindParam(':nombre_img',$nombreImg);
    $consulta->bindParam(':mime',$mimeImg);
    $consulta->bindParam(':img',$datosImg);

    $consulta->execute();

} catch (PDOException $e) {

    die($e->getMessage());
}

$conexion = null; 

header('Location: ../paginaPublicitaria.php');

?>