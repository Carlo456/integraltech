<?php 



require 'phpspreadsheet/vendor/autoload.php';
require '../../controllers/config.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Writer\IOFactory;


$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$documento = new Spreadsheet();
$documento
    ->getProperties()
    ->setCreator("Copiadoras Durango")
    ->setLastModifiedBy('Una persona')
    ->setTitle('Productos de Copiadoras durango')
    ->setDescription('Inventario de la empresa.');


# Como ya hay una hoja por defecto, la obtenemos, no la creamos
$hojaDeProductos = $documento->getActiveSheet();
$hojaDeProductos->setTitle("Productos");

# Escribir encabezado de los productos
$encabezado = ["ID", "Nombre", "Modelo", "Marca", "n_serie","Precio","Cantidad","Prod pendientes","Prod dañados","no_orden","Fecha recibido","Fecha salida","Proveedor","Observaciones","Color","Tamañoo","Tipo equipo","Tipo impresora","Color impresion","Procesador","RAM","Almacenamiento","SSD","Tarjeta grafica","Monitor"];
# El último argumento es por defecto A1 pero lo pongo para que se explique mejor
$hojaDeProductos->fromArray($encabezado, null, 'A1');

$consulta = "SELECT * FROM productos";
//$consulta = "SELECT id,nombre,modelo,marca,n_serie,precio_venta,cantidad FROM productos";

$sentencia = $conexion->prepare($consulta, [
    PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL,
]);
$sentencia->execute(); 

$numeroDeFila = 2;
while ($producto = $sentencia->fetchObject()) {
    # Obtener los datos de la base de datos
    $id = $producto->id;
    $nombre = $producto->nombre;
    $modelo = $producto->modelo;
    $marca = $producto->marca;
    $n_serie = $producto->n_serie;
    $precio_venta = $producto->precio_venta;
    $cantidad = $producto->cantidad;
    $cantidad_pend = $producto->cantidad_pend;
    $cantidad_daniada = $producto->cantidad_daniada;
    $no_orden = $producto->no_orden;
    $fecha_recibido = $producto->fecha_recibido;
    $fecha_salida = $producto->fecha_salida;
    $proveedor = $producto->proveedor;
    $observaciones = $producto->observaciones;
    $color = $producto->color;
    $tamanio = $producto->tamanio;
    $tipo_equipo = $producto->tipo_equipo;
    $tipo_impresora = $producto->tipo_impresora;
    $color_impresion = $producto->color_impresion;
    $procesador = $producto->procesador;
    $ram = $producto->ram;
    $almacenamiento = $producto->almacenamiento;
    $SSD = $producto->SSD;
    $tarjeta_grafica = $producto->tarjeta_grafica;
    $monitor = $producto->monitor;

    # Escribirlos en el documento
    $hojaDeProductos->setCellValueByColumnAndRow(1, $numeroDeFila, $id);
    $hojaDeProductos->setCellValueByColumnAndRow(2, $numeroDeFila, $nombre);
    $hojaDeProductos->setCellValueByColumnAndRow(3, $numeroDeFila, $modelo);
    $hojaDeProductos->setCellValueByColumnAndRow(4, $numeroDeFila, $marca);
    $hojaDeProductos->setCellValueByColumnAndRow(5, $numeroDeFila, $n_serie);
    $hojaDeProductos->setCellValueByColumnAndRow(6, $numeroDeFila, $precio_venta);
    $hojaDeProductos->setCellValueByColumnAndRow(7, $numeroDeFila, $cantidad);
    $hojaDeProductos->setCellValueByColumnAndRow(8, $numeroDeFila, $cantidad_pend);
    $hojaDeProductos->setCellValueByColumnAndRow(9, $numeroDeFila, $cantidad_daniada);
    $hojaDeProductos->setCellValueByColumnAndRow(10, $numeroDeFila, $no_orden);
    $hojaDeProductos->setCellValueByColumnAndRow(11, $numeroDeFila, $fecha_recibido);
    $hojaDeProductos->setCellValueByColumnAndRow(12, $numeroDeFila, $fecha_salida);
    $hojaDeProductos->setCellValueByColumnAndRow(13, $numeroDeFila, $proveedor);
    $hojaDeProductos->setCellValueByColumnAndRow(14, $numeroDeFila, $observaciones);
    $hojaDeProductos->setCellValueByColumnAndRow(15, $numeroDeFila, $color);
    $hojaDeProductos->setCellValueByColumnAndRow(16, $numeroDeFila, $tamanio);
    $hojaDeProductos->setCellValueByColumnAndRow(17, $numeroDeFila, $tipo_equipo);
    $hojaDeProductos->setCellValueByColumnAndRow(18, $numeroDeFila, $tipo_impresora);
    $hojaDeProductos->setCellValueByColumnAndRow(19, $numeroDeFila, $color_impresion);
    $hojaDeProductos->setCellValueByColumnAndRow(20, $numeroDeFila, $procesador);
    $hojaDeProductos->setCellValueByColumnAndRow(21, $numeroDeFila, $ram);
    $hojaDeProductos->setCellValueByColumnAndRow(22, $numeroDeFila, $almacenamiento);
    $hojaDeProductos->setCellValueByColumnAndRow(23, $numeroDeFila, $SSD);
    $hojaDeProductos->setCellValueByColumnAndRow(24, $numeroDeFila, $tarjeta_grafica);
    $hojaDeProductos->setCellValueByColumnAndRow(25, $numeroDeFila, $monitor);
    
    $numeroDeFila++;
}

# Crear un "escritor"
$writer = new Xlsx($documento);
# Le pasamos la ruta de guardado
#$writer->save('C:/Inventario.xlsx');

$file = "Inventario.xlsx";


header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename='.$file);
header('Content-Length: ' . filesize($file));
header('Content-Transfer-Encoding: binary');
header('Cache-Control: must-revalidate');
header('Pragma: public');
flush(); 
readfile($file);


#$writer = IOFactory::createWriter($documento,'Xlsx');
ob_clean();
$writer->save('php://output');


/*
$filename = 'Inventario.xlsx';
 
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename='. $filename);
header('Cache-Control: max-age=0');
*/


//ob_end_clean();
//$writer->save('php://output');

$conexion = null;

//header('Location: ../almacen.php');

?>