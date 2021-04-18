<?php

require '../../controllers/config.php';

try {
     $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     if($_POST['titulo1']!=null || $_POST['descripcion1']!=null || $_POST['imgSlider1']!=null){

        $nombreImg = $_FILES['imgSlider1']['name'];
        $mimeImg = $_FILES['imgSlider1']['type'];
        $datosImg = file_get_contents($_FILES['imgSlider1']['tmp_name']);
  
        $sentencia= "UPDATE slider_publicitaria SET titulo1=:titulo1, descripcion1=:descripcion1, nombre_img1=:nombre_img1, mime1=:mime1, img1=:img1 WHERE id=21";

        $consulta = $conexion->prepare($sentencia);

        $consulta->bindParam(':titulo1',$_POST['titulo1']);
        $consulta->bindParam(':descripcion1',$_POST['descripcion1']);
        $consulta->bindParam(':nombre_img1',$nombreImg);
        $consulta->bindParam(':mime1',$mimeImg);
        $consulta->bindParam(':img1',$datosImg);

        $consulta->execute();
    
    }
    if($_POST['titulo2']!=null || $_POST['descripcion2']!=null || $_POST['imgSlider2']!=null){

        $nombreImg = $_FILES['imgSlider2']['name'];
        $mimeImg = $_FILES['imgSlider2']['type'];
        $datosImg = file_get_contents($_FILES['imgSlider2']['tmp_name']);

        $sentencia= "UPDATE slider_publicitaria SET titulo2=:titulo2, descripcion2=:descripcion2, nombre_img2=:nombre_img2, mime2=:mime2, img2=:img2 WHERE id=21";

        $consulta = $conexion->prepare($sentencia);

        $consulta->bindParam(':titulo2',$_POST['titulo2']);
        $consulta->bindParam(':descripcion2',$_POST['descripcion2']);
        $consulta->bindParam(':nombre_img2',$nombreImg);
        $consulta->bindParam(':mime2',$mimeImg);
        $consulta->bindParam(':img2',$datosImg);

        $consulta->execute();
    
    }
    if($_POST['titulo3']!=null || $_POST['descripcion3']!=null || $_POST['imgSlider3']!=null){
     
        $nombreImg = $_FILES['imgSlider3']['name'];
        $mimeImg = $_FILES['imgSlider3']['type'];
        $datosImg = file_get_contents($_FILES['imgSlider3']['tmp_name']);  
      
        $sentencia= "UPDATE slider_publicitaria SET titulo3=:titulo3, descripcion3=:descripcion3, nombre_img3=:nombre_img3, mime3=:mime3, img3=:img3 WHERE id=21";

        $consulta = $conexion->prepare($sentencia);

        $consulta->bindParam(':titulo3',$_POST['titulo3']);
        $consulta->bindParam(':descripcion3',$_POST['descripcion3']);
        $consulta->bindParam(':nombre_img3',$nombreImg);
        $consulta->bindParam(':mime3',$mimeImg);
        $consulta->bindParam(':img3',$datosImg);


        $consulta->execute();
    
    }
    if($_POST['titulo4']!=null || $_POST['descripcion4']!=null || $_POST['imgSlider4']!=null){
     
      $nombreImg = $_FILES['imgSlider4']['name'];
      $mimeImg = $_FILES['imgSlider4']['type'];
      $datosImg = file_get_contents($_FILES['imgSlider4']['tmp_name']);  
    
      $sentencia= "UPDATE slider_publicitaria SET titulo4=:titulo4, descripcion4=:descripcion4, nombre_img4=:nombre_img4, mime4=:mime4, img4=:img4 WHERE id=21";

      $consulta= $conexion->prepare($sentencia);

      $consulta->bindParam(':titulo4',$_POST['titulo4']);
      $consulta->bindParam(':descripcion4',$_POST['descripcion4']);
      $consulta->bindParam(':nombre_img4',$nombreImg);
      $consulta->bindParam(':mime4',$mimeImg);
      $consulta->bindParam(':img4',$datosImg);


      $consulta->execute();
    
    }

    if($_POST['titulo5']!=null || $_POST['descripcion5']!=null || $_POST['imgSlider5']!=null){
     
      $nombreImg = $_FILES['imgSlider5']['name'];
      $mimeImg = $_FILES['imgSlider5']['type'];
      $datosImg = file_get_contents($_FILES['imgSlider5']['tmp_name']);  
    
      $sentencia = "UPDATE slider_publicitaria SET titulo5=:titulo5, descripcion5=:descripcion5, nombre_img5=:nombre_img5, mime5=:mime5, img5=:img5 WHERE id=21";

      $consulta = $conexion->prepare($sentencia);

      $consulta->bindParam(':titulo5',$_POST['titulo5']);
      $consulta->bindParam(':descripcion5',$_POST['descripcion5']);
      $consulta->bindParam(':nombre_img5',$nombreImg);
      $consulta->bindParam(':mime5',$mimeImg);
      $consulta->bindParam(':img5',$datosImg);

      $consulta->execute();
    
    }


} catch (PDOException $e) {

    die($e->getMessage());
}

$conexion = null; 

header('Location: ../paginaPublicitaria.php');


?>