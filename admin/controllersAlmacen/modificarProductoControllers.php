<?php

require '../../controllers/config.php';


$nombre = $_POST['nombre'];
$modelo = $_POST['modelo'];
$marca = $_POST['marca'];
$n_serie = $_POST['n_serie'];
$precio_venta = $_POST['precio_venta'];
$cantidad = $_POST['cantidad'];
$no_orden = $_POST['no_orden'];
$proveedor = $_POST['proveedor'];
$observaciones = $_POST['observaciones'];
$color = $_POST['color'];
$tamanio = $_POST['tamanio'];
$tipo_equipo = $_POST['tipo_equipo'];
$tipo_impresora = $_POST['tipo_impresora'];
$color_impresion = $_POST['color_impresion'];
$procesador = $_POST['procesador'];
$ram = $_POST['ram'];
$almacenamiento = $_POST['almacenamiento'];
$SSD = $_POST['SSD'];
$tarjeta_grafica = $_POST['tarjeta_grafica'];
$monitor = $_POST['monitor'];

$id = $_POST['id'];

var_dump($_POST);


try {
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sentencia= "UPDATE productos SET id={$id},nombre='{$nombre}',modelo='{$modelo}',marca='{$marca}',n_serie='{$n_serie}',precio_venta='{$precio_venta}',cantidad='{$cantidad}',no_orden='{$no_orden}',proveedor='{$proveedor}',observaciones='{$observaciones}',color='{$color}',tamanio='{$tamanio}',tipo_equipo='{$tipo_equipo}',tipo_impresora='{$tipo_impresora}',color_impresion='{$color_impresion}',procesador='{$procesador}',ram='{$ram}',almacenamiento='{$almacenamiento}',SSD='{$SSD}',tarjeta_grafica='{$tarjeta_grafica}',monitor='{$monitor}' WHERE id={$id}";

    $consulta = $conexion->prepare($sentencia);
    /*
    $consulta->bindParam(':id',$_GET['id']);
    $consulta->bindParam(':nombre',$_POST['nombre']);
    $consulta->bindParam(':modelo',$_POST['modelo']);
    $consulta->bindParam(':marca',$_POST['marca']);
    $consulta->bindParam(':n_serie',$_POST['n_serie']);
    $consulta->bindParam(':precio_venta',$_POST['precio_venta']);
    $consulta->bindParam(':cantidad',$_POST['cantidad']);
    $consulta->bindParam(':no_orden',$_POST['no_orden']);
    $consulta->bindParam(':proveedor',$_POST['proveedor']);
    $consulta->bindParam(':observaciones',$_POST['observaciones']);
    $consulta->bindParam(':color',$_POST['color']);
    $consulta->bindParam(':tamanio',$_POST['tamanio']);
    $consulta->bindParam(':tipo_equipo',$_POST['tipo_equipo']);
    $consulta->bindParam(':tipo_impresora',$_POST['tipo_impresora']);
    $consulta->bindParam(':color_impresion',$_POST['color_impresion']);
    $consulta->bindParam(':procesador',$_POST['procesador']);
    $consulta->bindParam(':ram',$_POST['ram']);
    $consulta->bindParam(':almacenamiento',$_POST['almacenamiento']);
    $consulta->bindParam(':SSD',$_POST['SSD']);
    $consulta->bindParam(':tarjeta_grafica',$_POST['tarjeta_grafica']);
    $consulta->bindParam(':monitor',$_POST['monitor']);
    */
    $consulta->execute();


} catch (PDOException $e) {

    die($e->getMessage());
}

$conexion = null; 

header('Location: ../almacen.php');

?>