<!DOCTYPE html>
<?php

session_start();
$id = $_SESSION['id'];
$usuario = $_SESSION['usuario'];
$tipoUsuario = $_SESSION['tipoUsuario'];

if (!isset($usuario)) {
    header('Location: ../views/login.php');
} elseif ($tipoUsuario == 'Ventas' || $tipoUsuario == 'admin') {

    include '../controllers/config.php';

        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $datosRenta = "SELECT clientes.id,clientes.rfc,clientes.nombres,clientes.ape1,clientes.ape2,clientes.calle,clientes.col_fracc,clientes.num_casa,clientes.estado,clientes.localidad,clientes.cp,clientes.telefono,clientes.correo_ele,
                              modal_renta.id_renta,modal_renta.producto,modal_renta.caracteristicas,modal_renta.info_adicional,modal_renta.meses_renta,modal_renta.fecha_entrega,modal_renta.fecha_salida,modal_renta.cfdi,modal_renta.metodo_pago,modal_renta.status_renta  
                FROM clientes
                INNER JOIN modal_renta ON clientes.id=modal_renta.id_cliente WHERE modal_renta.status_renta <> 'Terminado'
                ORDER BY fecha_entrega ASC;";

        $consultaRenta = $conexion->prepare($datosRenta);
        $consultaRenta->execute();

        $resultadoRenta = $consultaRenta->fetchAll(PDO::FETCH_ASSOC);

        
?>
<html lang="en">
<?php include 'viewsAdmin/headAdmin.php'; ?>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
    <?php include 'viewsAdmin/navbarAdmin.php'; ?>
    <?php include 'viewsAdmin/asideDepartamentos.php'; ?>
        <div class="content-wrapper">
        <?php include 'viewsAdmin/headerAdmin.php' ?>
        <!-- Contendido de toda la pagina formularios y demas -->
        
        Bienvenido a rentas


<div class="card">
            <div class="card-header">
            <h3 class="card-title">Rentas </h3>
            <a href="controllersAlmacen/generarExcelRentas.php" style="padding-left: 80%;">Generar Excel</a>
            </div>
        <div class="card-body p-0">
        <table class="table table-striped projects table-bordered table-hover table-sm">
              

         
          <thead>
                  <tr>
                    <th style="width: 1% " class="text-center table-dark table-bordered table-hover">
                          Id Cliente
                    </th>
                     
                     <th style="width: 1%" class="table-dark table-bordered table-hover">
                          RFC
                      </th>
                      <th style="width: 1%" class="table-dark table-bordered table-hover">
                          Nombre
                      </th>
                      <th style="width: 3%" class="table-dark table-bordered table-hover">
                          Dirección
                      </th>
                      <th style="width: 3%" class="table-dark table-bordered table-hover">
                          Datos personales
                      </th> 
                      <th style="width: 2%" class="table-dark table-bordered table-hover">
                          Producto
                      </th>
                      <th style="width: 1%" class="table-dark table-bordered table-hover">
                          Características
                      </th>
                      
                      <th style="width: 2%" class="table-dark table-bordered table-hover">
                          Info adicional
                      </th>
                      <th style="width: 1%" class="table-dark table-bordered table-hover">
                        Fechas de renta
                      </th>
                      <th style="width: 2%" class="table-dark table-bordered table-hover">
                        Facturación
                      </th>
                      <th style="width: 1%" class="table-dark table-bordered table-hover">
                        Status
                      </th>
                      <th style="width: 1%" class="table-dark table-bordered table-hover">
                        Acciones
                      </th>
        
                   
                  </tr>
              </thead>

            <tbody>
              
                <?php foreach($resultadoRenta as $renta) {  ?>    
                    <tr>
                      <td class="table-warning">
                            <?php echo "{$renta['id']}"; ?> <!-- numero del producto -->
                      </td>
                      <td class="table-light">
                          <a>
                            <?php echo "{$renta['rfc']}"; ?> <!-- Nombre del producto  -->
                          </a>
                          
                      </td>
                      <td class="table-light">
                            <small><?php echo "{$renta['nombres']}"; ?></small><br>
                            <small><?php echo "{$renta['ape1']} {$renta['ape2']}" ?></small>
                      </td class="table-light">
                      <td class="table-light">
                            <small><?php echo "Calle: {$renta['calle']}"; ?></small><br>
                            <small><?php echo "Col: {$renta['col_fracc']}, {$renta['num_casa']}"  ?> </small>
                      </td>
                      <td class="table-light">
                            <small><?php echo "{$renta['estado']}, {$renta['localidad']}"; ?></small><br>
                            <small><?php echo "CP: {$renta['cp']}"; ?></small><br>
                            <small><?php echo "Telefono: {$renta['telefono']}"; ?></small><br>
                            <small><?php echo "Correo: {$renta['correo_ele']}"; ?></small>
                      </td>
                      <td class="table-light">
                            <?php echo "{$renta['producto']}"; ?> 
                      </td>
                      <td class="table-light">
                            <small><?php echo "{$renta['caracteristicas']}"; ?></small> 
                      </td>
                      <td class="table-light">
                            <small><?php echo "{$renta['info_adicional']}"; ?></small> 
                      </td>
                      <td class="table-light">
                            <small><?php echo "Renta por: {$renta['meses_renta']} meses"; ?> </small><br>
                            <small><?php echo "De: {$renta['fecha_entrega']}"; ?> </small><br>
                            <small><?php echo "A: {$renta['fecha_salida']}"; ?> </small><br> 
                      </td>
                      <td class="table-light">
                            <small><?php echo "CFDI: {$renta['cfdi']}"; ?></small><br>
                            <small><?php echo "Metodo de pago: {$renta['metodo_pago']}"; ?></small>
                      </td>
                      <td class="table-light">
                      <select onchange="window.location=this.options[this.selectedIndex].value">
                            <option value="" selected="selected"><?php echo "{$renta['status_renta']}"; ?></option>
                            <option value="controllersVentas/controllerModificarStatusRenta.php?status=Terminado&id_renta=<?php echo $renta['id_renta'];?>">Terminado</option>
                            <option value="controllersVentas/controllerModificarStatusRenta.php?status=En proceso&id_renta=<?php echo $renta['id_renta'];?>">En proceso</option>
                            <option value="controllersVentas/controllerModificarStatusRenta.php?status=Pendiente&id_renta=<?php echo $renta['id_renta'];?>">Pendiente</option>
                      </select>
                            <?php if ($renta['status_renta']=='Terminado') { ?>
                              <span class="badge badge-success"><?php echo "{$renta['status_renta']}"; ?></span>
                            <?php  }  ?>
                            <?php if ($renta['status_renta']=='En proceso') { ?>
                              <span class="badge badge-warning"><?php echo "{$renta['status_renta']}"; ?></span>
                            <?php  }  ?>
                            <?php if ($renta['status_renta']=='Pendiente') { ?>
                              <span class="badge badge-danger"><?php echo "{$renta['status_renta']}"; ?></span>  
                            <?php  }  ?>
                      </td>
                      <td class="table-light">
                        <a class="btn btn-danger btn-sm" href="controllersVentas/controllerBorrarRenta.php?id_renta=<?php echo $renta['id_renta'];?>">
                              <i class="fas fa-trash">
                              </i>
                              Borrar
                        </a>
                      </td>
                    </tr >
                
                <?php  }  ?>    
              </tbody>


            </table>


<!-- Fin de agregar los datos desde la BD-->


            
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

        </div>
        <?php include 'viewsAdmin/footerAdmin.php'; ?>
    </div>
    <?php include 'viewsAdmin/scriptsRequeridosAdmin.php'; ?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>

    <script type="text/javascript">
            $(function () {
                $('#datetimepicker4').datetimepicker({
                    format: 'L'
                });
            });
      </script>
</body>
<?php   }  else {  header('Location: viewsAdmin/error404.php');  }  ?><!-- aqui termina lo que debe mostrar la pagina si esta logeado -->
</html>