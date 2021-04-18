<?php

require '../../controllers/config.php';



$rfc = $_POST['rfc'];
$nombre = $_POST['nombre'];
$ape1 = $_POST['ape1'];
$ape2 = $_POST['ape2'];
$calle = $_POST['calle'];
$col_fracc = $_POST['col_fracc'];
$numero = $_POST['numero'];
$cp = $_POST['cp'];
$telefono = $_POST['telefono'];
$estatus = $_POST['estatus'];
$correo_ele = $_POST['correo_ele'];




    try {
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $datosLogin = "INSERT INTO proveedores(rfc,nombre,ape1,ape2,calle,col_fracc,numero,cp,telefono,fecha,estatus,correo_ele) VALUES (:rfc,:nombre,:ape1,:ape2,:calle,:col_fracc,:numero,:cp,:telefono,now(),:estatus,:correo_ele)";
    
        $consulta = $conexion->prepare($datosLogin);
    
        $consulta->bindParam(':rfc',$rfc);
        $consulta->bindParam(':nombre',$nombre);
        $consulta->bindParam(':ape1',$ape1);
        $consulta->bindParam(':ape2',$ape2);
        $consulta->bindParam(':calle',$calle);
        $consulta->bindParam(':col_fracc',$col_fracc);
        $consulta->bindParam(':numero',$numero);
        $consulta->bindParam(':cp',$cp);
        $consulta->bindParam(':telefono',$telefono);
        $consulta->bindParam(':estatus',$estatus);
        $consulta->bindParam(':correo_ele',$correo_ele);





    
        $consulta->execute();
    
    } catch (PDOException $e) {

        die($e->getMessage());
    }
    
    $conexion = null; 
    
    header('Location: ../nuevoProveedor.php');




?>