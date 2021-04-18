<!DOCTYPE html>

<html lang="en">
<?php 
//error_reporting(0);


session_start();
$id = $_SESSION['id'];
$cliente = $_SESSION['usuario'];
$tipoUsuario = $_SESSION['tipoUsuario'];



if (!isset($cliente)) {
     

    header("Location: ../tienda.php");
    
    
} elseif ($tipoUsuario == 'cliente' || $tipoUsuario == 'admin') {

        require '../controllers/config.php';

        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $datosRenta = "SELECT clientes.rfc,clientes.nombres,clientes.ape1,clientes.ape2,clientes.calle,clientes.col_fracc,clientes.num_casa,clientes.estado,clientes.localidad,clientes.cp,clientes.telefono,clientes.correo_ele,
                              modal_renta.id_renta,modal_renta.producto,modal_renta.caracteristicas,modal_renta.info_adicional,modal_renta.meses_renta,modal_renta.fecha_entrega,modal_renta.fecha_salida,modal_renta.cfdi,modal_renta.metodo_pago  
                        FROM clientes
                        INNER JOIN modal_renta ON clientes.id=modal_renta.id_cliente 
                        WHERE modal_renta.id_cliente = {$id} ORDER BY fecha_entrega DESC;";

        $consultaRenta = $conexion->prepare($datosRenta);
        $consultaRenta->execute();

        $resultadoRenta = $consultaRenta->fetch(PDO::FETCH_ASSOC);


?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmacion Info | Copiadoras Durango</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
<section class="container vh-70 border border-warning my-3">
    
    <form action="../controllers/rentaFinal.php" method="POST">
        <div class="form-row">
            <h2 class="mx-auto">Verifica tus datos porfavor: <?php echo "{$cliente}"; ?></h2>
            <h3 class="mx-auto">Agrega el uso de CFDI y el metodo de pago para continuar</h3>
            <h4 class="mx-auto">Su informacion es solo para facilitar la compra a la hora de confirmarla con el departamento de ventas mediante un correo o llamada telefonica</h4>
            
            <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <label for="">RFC</label>
                <input type="text" class="form-control" id="" name="rfc" pattern="[A-Z0-9]{12-13}" placeholder="Clave Registro Federal del contribuyente" value="<?php echo "{$resultadoRenta['rfc']}"; ?>" required>
                <small id="" class="form-text text-muted">De 12 a 13 caracteres en mayusculas y numeros, sus datos seran guardados confidencialmente</small>
            </div>
            <div class="form-group col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                <label for="">Nombre(s)</label>
                <input type="text" class="form-control" id="" name="nombres" placeholder="Nombre de pila" pattern="[A-Za-z\s]+" value="<?php echo "{$resultadoRenta['nombres']}"; ?>" required>
            </div>
            <div class="form-group col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                <label for="">Apellido paterno</label>
                <input type="text" class="form-control" id="" name="ape1" placeholder="Apellido paterno" pattern="[A-Za-z\s]+" value="<?php echo "{$resultadoRenta['ape1']}"; ?>" required>
            </div>
            <div class="form-group col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                <label for="">Apellido materno</label>
                <input type="text" class="form-control" id="" name="ape2" placeholder="Apellido materno" pattern="[A-Za-z\s]+" value="<?php echo "{$resultadoRenta['ape2']}"; ?>">
            </div>
            <h3 class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">Direccion</h3>
            <div class="form-group col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <label for="">Calle</label>
                <input type="text" class="form-control" id="" name="calle" placeholder="Informacion de direccion" pattern="[0-9A-Za-z\s\.\-\ñ]+" value="<?php echo "{$resultadoRenta['calle']}"; ?>" required>
            </div>
            <div class="form-group col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                <label for="">Colonia o fraccionamiento</label>
                <input type="text" class="form-control" id="" name="col_fracc" placeholder="Informacion de direccion" pattern="[0-9A-Za-z\s\.\-]+" value="<?php echo "{$resultadoRenta['col_fracc']}"; ?>" required>
            </div>
            <div class="form-group col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                <label for="">Numero</label>
                <input type="text" class="form-control" id="" name="num_casa" placeholder="Numero de casa" pattern="[0-9A-Za-z\-\s\.]+" value="<?php echo "{$resultadoRenta['num_casa']}"; ?>" required>
            </div>
            <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <label for="">Estado</label>
                <input type="text" class="form-control" id="" name="estado" placeholder="Estado de procedencia" pattern="[0-9A-Za-z\-\s]+" value="<?php echo "{$resultadoRenta['estado']}"; ?>" required>
            </div>
            <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <label for="">Localidad</label>
                <input type="text" class="form-control" id="" name="localidad" placeholder="Localidad" pattern="[0-9A-Za-z\-\s\.]+" value="<?php echo "{$resultadoRenta['localidad']}"; ?>" required>
            </div>
            <h3 class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">Datos de contacto</h3>
            <div class="form-group col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                <label for="">Codigo Postal</label>
                <input type="text" class="form-control" id="" name="cp" placeholder="Codigo postal" pattern="[0-9]{5}" value="<?php echo "{$resultadoRenta['cp']}"; ?>" required>
                <small id="" class="form-text text-muted">Solo 5 numeros</small>
            </div>
            <div class="form-group col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                <label for="">Telefono</label>
                <input type="text" class="form-control" id="" name="telefono" placeholder="Telefono" pattern="[0-9\-]{10,13}" value="<?php echo "{$resultadoRenta['telefono']}"; ?>" required>
                <small id="" class="form-text text-muted">+52 codigo de pais, lada 3 digitos, mas numero. </small>
            </div>
            <div class="form-group col-12 col-sm-12 col-md-6 col-lg-4 col-xl-6">
                <label for="">Correo electronico</label>
                <input type="email" class="form-control" id="" name="correo_ele" placeholder="Correo de contacto" value="<?php echo "{$resultadoRenta['correo_ele']}"; ?>" required>
            </div>
            <h3 class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">Informacion de la venta</h3>
            <input type="hidden" name="id_producto" value="<?php echo "{$resultadoRenta['id_renta']}";?>">
            <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <label for="">Producto</label>
                <select class="form-control" id="" name="producto" placeholder="Elija el producto deseado" required>
                    <option selected="selected"><?php echo "{$resultadoRenta['producto']}"; ?></option>
                    <option value="Equipo de Impresión y Multifuncionales">Equipo de Impresión y Multifuncionales</option>
                    <option value="Equipos de Cómputo">Equipos de Cómputo</option>
                    <option value="Monitores y TVs">Monitores y TVs</option>
                    <option value="Consumibles">Consumibles</option>
                    <option value="Accesorios">Accesorios</option>
                </select>
            </div>
            <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <label for="">Caracteristicas</label>
                <textarea class="form-control" id="" name="caracteristicas" rows="3" placeholder="Mencione las caracteristicas de lo que necesita" required><?php echo "{$resultadoRenta['caracteristicas']}"; ?></textarea>
            </div>
            <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <label for="">Informacion adicional</label>
                <textarea class="form-control" id="" name="info_adicional" rows="3" placeholder="Direccion de entrega adicional"><?php echo "{$resultadoRenta['info_adicional']}"; ?></textarea>
                <small id="" class="form-text text-muted">Aqui deben ir direcciones de entrega alternativas a la de facturacion</small>
            </div>
            <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <label for="">Meses de renta</label>
                <select class="form-control" id="" name="meses_renta" placeholder="Escoja las mensualidades" required>
                    <option selected><?php echo "{$resultadoRenta['meses_renta']}"; ?></option>
                    <option>3</option>
                    <option>6</option>
                    <option>12</option>
                    <option>24</option>
                    <option>36</option>
                </select>
            </div>
            <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <label for="">Uso que se le va a dar al CFDI</label>
                <select class="form-control" id="" name="cfdi" placeholder="Uso que se le va a dar al CFDI" required>
                    <option selected>G01 adquisicion de mercancias</option>
                    <option>G02 devoluciones descuentos o bonificaciones</option>
                    <option>G03 Gastos en General</option>
                    <option>I04 Equipo de cómputo y accesorios</option>
                    <option>P01 Por definir</option>
                </select>
                <small id="" class="form-text text-muted">Tipo de comprobante a usar para pagar</small>
            </div>
            <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <label for="">Forma de pago</label>
                <select class="form-control" id="" name="forma_pago" placeholder="Formas de pago" required>
                    <option selected>Efectivo</option>
                    <option>Tarjetas de credito</option>
                    <option>Tarjetas de debito</option>
                    <option>Cheque de caja</option>
                    <option>Transferencias interbancarias</option>
                    <option>Pago a plazos o por definir</option>
                </select>
            </div>
            <div class="form-group col-4 col-sm-4 col-md-4 col-lg-3 col-xl-3 mx-auto">
                <input type="submit" class="form-control bg-success" id="" value="Registrar">
            </div>

        </div>        
    </form>

</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
<?php   }  else {  header('Location: ../admin/viewsAdmin/error404.php');  }  ?><!-- aqui termina lo que debe mostrar la pagina si esta logeado -->
</html>