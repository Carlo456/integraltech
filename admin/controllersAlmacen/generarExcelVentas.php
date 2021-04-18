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
    ->setTitle('Ventas de Copiadoras durango')
    ->setDescription('Ventas de la empresa.');

# Como ya hay una hoja por defecto, la obtenemos, no la creamos
$hojaDeProductos = $documento->getActiveSheet();
$hojaDeProductos->setTitle("Ventas");

# Escribir encabezado de los productos
$encabezado = ["ID","RFC","Nombres","Apellido paterno","Apellido Materno","Calle","Col. Fracc.","num casa","estado","localidad","CP","Telefono","Correo","Id Venta","Producto","Caracteristicas","Info Adicional","Fecha Entrega","CFDI","Metodo Pago","Status"];
# El último argumento es por defecto A1 pero lo pongo para que se explique mejor
$hojaDeProductos->fromArray($encabezado, null, 'A1');

$datosVenta = "SELECT clientes.id,clientes.rfc,clientes.nombres,clientes.ape1,clientes.ape2,clientes.calle,clientes.col_fracc,clientes.num_casa,clientes.estado,clientes.localidad,clientes.cp,clientes.telefono,clientes.correo_ele,
                              modal_venta.id_venta,modal_venta.producto,modal_venta.caracteristicas,modal_venta.info_adicional,modal_venta.fecha_entrega,modal_venta.cfdi,modal_venta.metodo_pago,modal_venta.status_venta  
                FROM clientes
                INNER JOIN modal_venta ON clientes.id=modal_venta.id_cliente 
                ORDER BY fecha_entrega ASC;";
//$consulta = "SELECT id,nombre,modelo,marca,n_serie,precio_venta,cantidad FROM productos";

$sentencia = $conexion->prepare($datosVenta, [
    PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL,
]);
$sentencia->execute(); 

$numeroDeFila = 2;
while ($venta = $sentencia->fetchObject()) {
    # Obtener los datos de la base de datos
    $id = $venta->id;
    $rfc = $venta->rfc;
    $nombres = $venta->nombres;
    $ape1 = $venta->ape1;
    $ape2 = $venta->ape2;
    $calle = $venta->calle;
    $col_fracc = $venta->col_fracc;
    $num_casa = $venta->num_casa;
    $estado = $venta->estado;
    $localidad = $venta->localidad;
    $cp = $venta->cp;
    $telefono = $venta->telefono;
    $correo_ele = $venta->correo_ele;
    $id_venta = $venta->id_venta;
    $producto = $venta->producto;
    $caracteristicas = $venta->caracteristicas;
    $info_adicional = $venta->info_adicional;
    $fecha_entrega = $venta->fecha_entrega;
    $cfdi = $venta->cfdi;
    $metodo_pago = $venta->metodo_pago;
    $status_venta = $venta->status_venta;


    # Escribirlos en el documento
    $hojaDeProductos->setCellValueByColumnAndRow(1, $numeroDeFila, $id);
    $hojaDeProductos->setCellValueByColumnAndRow(2, $numeroDeFila, $rfc);
    $hojaDeProductos->setCellValueByColumnAndRow(3, $numeroDeFila, $nombres);
    $hojaDeProductos->setCellValueByColumnAndRow(4, $numeroDeFila, $ape1);
    $hojaDeProductos->setCellValueByColumnAndRow(5, $numeroDeFila, $ape2);
    $hojaDeProductos->setCellValueByColumnAndRow(6, $numeroDeFila, $calle);
    $hojaDeProductos->setCellValueByColumnAndRow(7, $numeroDeFila, $col_fracc);
    $hojaDeProductos->setCellValueByColumnAndRow(8, $numeroDeFila, $num_casa);
    $hojaDeProductos->setCellValueByColumnAndRow(9, $numeroDeFila, $estado);
    $hojaDeProductos->setCellValueByColumnAndRow(10, $numeroDeFila, $localidad);
    $hojaDeProductos->setCellValueByColumnAndRow(11, $numeroDeFila, $cp);
    $hojaDeProductos->setCellValueByColumnAndRow(12, $numeroDeFila, $telefono);
    $hojaDeProductos->setCellValueByColumnAndRow(13, $numeroDeFila, $correo_ele);
    $hojaDeProductos->setCellValueByColumnAndRow(14, $numeroDeFila, $id_venta);
    $hojaDeProductos->setCellValueByColumnAndRow(15, $numeroDeFila, $producto);
    $hojaDeProductos->setCellValueByColumnAndRow(16, $numeroDeFila, $caracteristicas);
    $hojaDeProductos->setCellValueByColumnAndRow(17, $numeroDeFila, $info_adicional);
    $hojaDeProductos->setCellValueByColumnAndRow(18, $numeroDeFila, $fecha_entrega);
    $hojaDeProductos->setCellValueByColumnAndRow(19, $numeroDeFila, $cfdi);
    $hojaDeProductos->setCellValueByColumnAndRow(20, $numeroDeFila, $metodo_pago);
    $hojaDeProductos->setCellValueByColumnAndRow(21, $numeroDeFila, $status_venta);

    
    $numeroDeFila++;
}

# Crear un "escritor"
$writer = new Xlsx($documento);
# Le pasamos la ruta de guardado
#$writer->save('C:/Inventario.xlsx');

$file = "Ventas.xlsx";


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