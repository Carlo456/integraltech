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
    ->setTitle('Rentas de Copiadoras durango')
    ->setDescription('Rentas de la empresa.');

# Como ya hay una hoja por defecto, la obtenemos, no la creamos
$hojaDeProductos = $documento->getActiveSheet();
$hojaDeProductos->setTitle("Rentas");

# Escribir encabezado de los productos
$encabezado = ["ID","RFC","Nombres","Apellido paterno","Apellido Materno","Calle","Col. Fracc.","num casa","estado","localidad","CP","Telefono","Correo","Id Venta","Producto","Caracteristicas","Info Adicional","Fecha Entrega","Fecha Salida","CFDI","Metodo Pago","Status"];
# El último argumento es por defecto A1 pero lo pongo para que se explique mejor
$hojaDeProductos->fromArray($encabezado, null, 'A1');

$datosRenta = "SELECT clientes.id,clientes.rfc,clientes.nombres,clientes.ape1,clientes.ape2,clientes.calle,clientes.col_fracc,clientes.num_casa,clientes.estado,clientes.localidad,clientes.cp,clientes.telefono,clientes.correo_ele,
                              modal_renta.id_renta,modal_renta.producto,modal_renta.caracteristicas,modal_renta.info_adicional,modal_renta.meses_renta,modal_renta.fecha_entrega,modal_renta.fecha_salida,modal_renta.cfdi,modal_renta.metodo_pago,modal_renta.status_renta  
                FROM clientes
                INNER JOIN modal_renta ON clientes.id=modal_renta.id_cliente 
                ORDER BY fecha_entrega ASC;";
//$consulta = "SELECT id,nombre,modelo,marca,n_serie,precio_venta,cantidad FROM productos";

$sentencia = $conexion->prepare($datosRenta, [
    PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL,
]);
$sentencia->execute(); 

$numeroDeFila = 2;
while ($renta = $sentencia->fetchObject()) {
    # Obtener los datos de la base de datos
    $id = $renta->id;
    $rfc = $renta->rfc;
    $nombres = $renta->nombres;
    $ape1 = $renta->ape1;
    $ape2 = $renta->ape2;
    $calle = $renta->calle;
    $col_fracc = $renta->col_fracc;
    $num_casa = $renta->num_casa;
    $estado = $renta->estado;
    $localidad = $renta->localidad;
    $cp = $renta->cp;
    $telefono = $renta->telefono;
    $correo_ele = $renta->correo_ele;
    $id_venta = $renta->id_venta;
    $producto = $renta->producto;
    $caracteristicas = $renta->caracteristicas;
    $info_adicional = $renta->info_adicional;
    $fecha_entrega = $renta->fecha_entrega;
    $fecha_salida = $renta->fecha_salida;
    $cfdi = $renta->cfdi;
    $metodo_pago = $renta->metodo_pago;
    $status_renta = $renta->status_renta;


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
    $hojaDeProductos->setCellValueByColumnAndRow(19, $numeroDeFila, $fecha_salida);
    $hojaDeProductos->setCellValueByColumnAndRow(20, $numeroDeFila, $cfdi);
    $hojaDeProductos->setCellValueByColumnAndRow(21, $numeroDeFila, $metodo_pago);
    $hojaDeProductos->setCellValueByColumnAndRow(22, $numeroDeFila, $status_renta);

    
    $numeroDeFila++;
}

# Crear un "escritor"
$writer = new Xlsx($documento);
# Le pasamos la ruta de guardado
#$writer->save('C:/Inventario.xlsx');

$file = "Rentas.xlsx";


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