<?php

require '../../controllers/config.php';

var_dump($_POST);




try {
     $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     if ($_POST['titulo']!=null || $_POST['descripcion']!=null) {
        $sentencia= "UPDATE casos_publicitaria SET titulo=:titulo, descripcion=:descripcion WHERE id=1";
        $consulta = $conexion->prepare($sentencia);

        $consulta->bindParam(':titulo',$_POST['titulo']);
        $consulta->bindParam(':descripcion',$_POST['descripcion']);

        $consulta->execute();
     }   
     
     if($_POST['tituloCaso1']!=null || $_POST['encabezadoCaso1']!=null || $_POST['imgServicio1']!=null){
     
        $nombreImg = $_FILES['imgServicio1']['name'];
        $mimeImg = $_FILES['imgServicio1']['type'];
        $datosImg = file_get_contents($_FILES['imgServicio1']['tmp_name']);
    
        $sentencia= "UPDATE casos_publicitaria SET titulo1=:titulo1, encabezado1=:encabezado1, nombre_img1=:nombre_img1, mime1=:mime1, img1=:img1 WHERE id=1";
    
        $consulta = $conexion->prepare($sentencia);
    
        $consulta->bindParam(':titulo1',$_POST['tituloCaso1']);
        $consulta->bindParam(':encabezado1',$_POST['encabezadoCaso1']);
        $consulta->bindParam(':nombre_img1',$nombreImg);
        $consulta->bindParam(':mime1',$mimeImg);
        $consulta->bindParam(':img1',$datosImg);
    
        $consulta->execute();
    
    }
    if($_POST['tituloCaso2']!=null || $_POST['encabezadoCaso2']!=null || $_POST['imgServicio2']!=null){
     
        $nombreImg = $_FILES['imgServicio2']['name'];
        $mimeImg = $_FILES['imgServicio2']['type'];
        $datosImg = file_get_contents($_FILES['imgServicio2']['tmp_name']);
    
        $sentencia= "UPDATE casos_publicitaria SET titulo2=:titulo2, encabezado2=:encabezado2, nombre_img2=:nombre_img2, mime2=:mime2, img2=:img2 WHERE id=1";
    
        $consulta = $conexion->prepare($sentencia);
    
        $consulta->bindParam(':titulo2',$_POST['tituloCaso2']);
        $consulta->bindParam(':encabezado2',$_POST['encabezadoCaso2']);
        $consulta->bindParam(':nombre_img2',$nombreImg);
        $consulta->bindParam(':mime2',$mimeImg);
        $consulta->bindParam(':img2',$datosImg);
    
        $consulta->execute();
    
    }
    if($_POST['tituloCaso3']!=null || $_POST['encabezadoCaso3']!=null || $_POST['imgServicio3']!=null){
     
        $nombreImg = $_FILES['imgServicio3']['name'];
        $mimeImg = $_FILES['imgServicio3']['type'];
        $datosImg = file_get_contents($_FILES['imgServicio3']['tmp_name']);
    
        $sentencia= "UPDATE casos_publicitaria SET titulo3=:titulo3, encabezado3=:encabezado3, nombre_img3=:nombre_img3, mime3=:mime3, img3=:img3 WHERE id=1";
    
        $consulta = $conexion->prepare($sentencia);
    
        $consulta->bindParam(':titulo3',$_POST['tituloCaso3']);
        $consulta->bindParam(':encabezado3',$_POST['encabezadoCaso3']);
        $consulta->bindParam(':nombre_img3',$nombreImg);
        $consulta->bindParam(':mime3',$mimeImg);
        $consulta->bindParam(':img3',$datosImg);
    
        $consulta->execute();
    
    }
    if($_POST['tituloCaso4']!=null || $_POST['encabezadoCaso4']!=null || $_POST['imgServicio4']!=null){
     
        $nombreImg = $_FILES['imgServicio4']['name'];
        $mimeImg = $_FILES['imgServicio4']['type'];
        $datosImg = file_get_contents($_FILES['imgServicio4']['tmp_name']);
    
        $sentencia= "UPDATE casos_publicitaria SET titulo4=:titulo4, encabezado4=:encabezado4, nombre_img4=:nombre_img4, mime4=:mime4, img4=:img4 WHERE id=1";
    
        $consulta = $conexion->prepare($sentencia);
    
        $consulta->bindParam(':titulo4',$_POST['tituloCaso4']);
        $consulta->bindParam(':encabezado4',$_POST['encabezadoCaso4']);
        $consulta->bindParam(':nombre_img4',$nombreImg);
        $consulta->bindParam(':mime4',$mimeImg);
        $consulta->bindParam(':img4',$datosImg);
    
        $consulta->execute();
    
    }
    if($_POST['tituloCaso5']!=null || $_POST['encabezadoCaso5']!=null || $_POST['imgServicio5']!=null){
     
        $nombreImg = $_FILES['imgServicio5']['name'];
        $mimeImg = $_FILES['imgServicio5']['type'];
        $datosImg = file_get_contents($_FILES['imgServicio5']['tmp_name']);
    
        $sentencia= "UPDATE casos_publicitaria SET titulo5=:titulo5, encabezado5=:encabezado5, nombre_img5=:nombre_img5, mime5=:mime5, img5=:img5 WHERE id=1";
    
        $consulta = $conexion->prepare($sentencia);
    
        $consulta->bindParam(':titulo5',$_POST['tituloCaso5']);
        $consulta->bindParam(':encabezado5',$_POST['encabezadoCaso5']);
        $consulta->bindParam(':nombre_img5',$nombreImg);
        $consulta->bindParam(':mime5',$mimeImg);
        $consulta->bindParam(':img5',$datosImg);
    
        $consulta->execute();
    
    }
    if($_POST['tituloCaso6']!=null || $_POST['encabezadoCaso6']!=null || $_POST['imgServicio6']!=null){
     
        $nombreImg = $_FILES['imgServicio6']['name'];
        $mimeImg = $_FILES['imgServicio6']['type'];
        $datosImg = file_get_contents($_FILES['imgServicio6']['tmp_name']);
    
        $sentencia= "UPDATE casos_publicitaria SET titulo6=:titulo6, encabezado6=:encabezado6, nombre_img6=:nombre_img6, mime6=:mime6, img6=:img6 WHERE id=1";
    
        $consulta = $conexion->prepare($sentencia);
    
        $consulta->bindParam(':titulo6',$_POST['tituloCaso6']);
        $consulta->bindParam(':encabezado6',$_POST['encabezadoCaso6']);
        $consulta->bindParam(':nombre_img6',$nombreImg);
        $consulta->bindParam(':mime6',$mimeImg);
        $consulta->bindParam(':img6',$datosImg);
    
        $consulta->execute();
    
    }
    if($_POST['tituloCaso7']!=null || $_POST['encabezadoCaso7']!=null || $_POST['imgServicio7']!=null){
     
        $nombreImg = $_FILES['imgServicio7']['name'];
        $mimeImg = $_FILES['imgServicio7']['type'];
        $datosImg = file_get_contents($_FILES['imgServicio7']['tmp_name']);
    
        $sentencia= "UPDATE casos_publicitaria SET titulo7=:titulo7, encabezado7=:encabezado7, nombre_img7=:nombre_img7, mime7=:mime7, img7=:img7 WHERE id=1";
    
        $consulta = $conexion->prepare($sentencia);
    
        $consulta->bindParam(':titulo7',$_POST['tituloCaso7']);
        $consulta->bindParam(':encabezado7',$_POST['encabezadoCaso7']);
        $consulta->bindParam(':nombre_img7',$nombreImg);
        $consulta->bindParam(':mime7',$mimeImg);
        $consulta->bindParam(':img7',$datosImg);
    
        $consulta->execute();
    
    }
    if($_POST['tituloCaso8']!=null || $_POST['encabezadoCaso8']!=null || $_POST['imgServicio8']!=null){
     
        $nombreImg = $_FILES['imgServicio8']['name'];
        $mimeImg = $_FILES['imgServicio8']['type'];
        $datosImg = file_get_contents($_FILES['imgServicio8']['tmp_name']);
    
        $sentencia= "UPDATE casos_publicitaria SET titulo8=:titulo8, encabezado8=:encabezado8, nombre_img8=:nombre_img8, mime8=:mime8, img8=:img8 WHERE id=1";
    
        $consulta = $conexion->prepare($sentencia);
    
        $consulta->bindParam(':titulo8',$_POST['tituloCaso8']);
        $consulta->bindParam(':encabezado8',$_POST['encabezadoCaso8']);
        $consulta->bindParam(':nombre_img8',$nombreImg);
        $consulta->bindParam(':mime8',$mimeImg);
        $consulta->bindParam(':img8',$datosImg);
    
        $consulta->execute();
    
    }

} catch (PDOException $e) {

    die($e->getMessage());
}

$conexion = null; 

header('Location: ../paginaPublicitaria.php');





?>