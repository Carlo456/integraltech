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

var_dump($_POST);

try {
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sentencia= "INSERT INTO productos(id,nombre,modelo,marca,n_serie,precio_venta,cantidad,no_orden,fecha_recibido,proveedor,observaciones,color,tamanio,tipo_equipo,tipo_impresora,color_impresion,procesador,ram,almacenamiento,SSD,tarjeta_grafica,monitor) VALUES ('',:nombre,:modelo,:marca,:n_serie,:precio_venta,:cantidad,:no_orden,now(),:proveedor,:observaciones,:color,:tamanio,:tipo_equipo,:tipo_impresora,:color_impresion,:procesador,:ram,:almacenamiento,:SSD,:tarjeta_grafica,:monitor)";

    $consulta = $conexion->prepare($sentencia);

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

    // use exec() because no results are returned
    $consulta->execute();


} catch (PDOException $e) {

    die($e->getMessage());
}

$conexion = null; 

header('Location: ../almacen.php');

?>