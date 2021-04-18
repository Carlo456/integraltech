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

                $datosVenta = "SELECT clientes.id,clientes.rfc,clientes.nombres,clientes.ape1,clientes.ape2,clientes.calle,clientes.col_fracc,clientes.num_casa,clientes.estado,clientes.localidad,clientes.cp,clientes.telefono,clientes.correo_ele,
                              modal_venta.id_venta,modal_venta.producto,modal_venta.caracteristicas,modal_venta.info_adicional,modal_venta.fecha_entrega,modal_venta.cfdi,modal_venta.metodo_pago,modal_venta.status_venta  
                FROM clientes
                INNER JOIN modal_venta ON clientes.id=modal_venta.id_cliente WHERE modal_venta.status_venta <> 'Terminado'
                ORDER BY fecha_entrega ASC;";

        $consultaVenta = $conexion->prepare($datosVenta);
        $consultaVenta->execute();

        $resultadoVenta = $consultaVenta->fetchAll(PDO::FETCH_ASSOC);

        

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
        
        Bienvenido a ventas

<div class="card">
            <div class="card-header">
            <h3 class="card-title">Ventas </h3>
            <a href="controllersAlmacen/generarExcelVentas.php" style="padding-left: 80%;">Generar Excel</a>
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
                      <th style="width: 3%" class="table-dark table-bordered table-hover">
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
                        Fecha
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
              
                <?php foreach($resultadoVenta as $venta) {  ?>    
                    <tr>
                      <td class="table-warning">
                            <?php echo "{$venta['id']}"; ?> <!-- numero del producto -->
                      </td>
                      <td class="table-light">
                          <a>
                            <?php echo "{$venta['rfc']}"; ?> <!-- Nombre del producto  -->
                          </a>
                      </td>
                      <td class="table-light">
                            <small><?php echo "{$venta['nombres']}"; ?></small><br>
                            <small><?php echo "{$venta['ape1']} {$venta['ape2']}" ?></small>
                      </td class="table-light">
                      <td class="table-light">
                            <small><?php echo "Calle: {$venta['calle']}"; ?></small><br>
                            <small><?php echo "Col: {$venta['col_fracc']}, {$venta['num_casa']}"  ?> </small>
                      </td>
                      <td class="table-light">
                            <small><?php echo "{$venta['estado']}, {$venta['localidad']}"; ?></small><br>
                            <small><?php echo "CP: {$venta['cp']}"; ?></small><br>
                            <small><?php echo "Telefono: {$venta['telefono']}"; ?></small><br>
                            <small><?php echo "Correo: {$venta['correo_ele']}"; ?></small>
                      </td>
                      <td class="table-light">
                            <?php echo "{$venta['producto']}"; ?> <!-- numero del producto -->
                      </td>
                      <td class="table-light">
                            <?php echo "{$venta['caracteristicas']}"; ?> <!-- numero del producto -->
                      </td>
                      <td class="table-light">
                            <?php echo "{$venta['info_adicional']}"; ?> <!-- numero del producto -->
                      </td>
                      <td class="table-light">
                            <?php echo "{$venta['fecha_entrega']}"; ?> <!-- numero del producto -->
                      </td>
                      <td class="table-light">
                            <small><?php echo "CFDI: {$venta['cfdi']}"; ?></small><br>
                            <small><?php echo "Metodo de pago: {$venta['metodo_pago']}"; ?></small>
                      </td>
                      <td class="table-light">
                      <select onchange="window.location=this.options[this.selectedIndex].value">
                            <option value="" selected="selected"><?php echo "{$venta['status_venta']}"; ?></option>
                            <option value="controllersVentas/controllerModificarStatusVenta.php?status=Terminado&id_venta=<?php echo $venta['id_venta'];?>">Terminado</option>
                            <option value="controllersVentas/controllerModificarStatusVenta.php?status=En proceso&id_venta=<?php echo $venta['id_venta'];?>">En proceso</option>
                            <option value="controllersVentas/controllerModificarStatusVenta.php?status=Pendiente&id_venta=<?php echo $venta['id_venta'];?>">Pendiente</option>
                      </select>
                            <?php if ($venta['status_venta']=='Terminado') { ?>
                              <span class="badge badge-success"><?php echo "{$venta['status_venta']}"; ?></span>
                            <?php  }  ?>
                            <?php if ($venta['status_venta']=='En proceso') { ?>
                              <span class="badge badge-warning"><?php echo "{$venta['status_venta']}"; ?></span>
                            <?php  }  ?>
                            <?php if ($venta['status_venta']=='Pendiente') { ?>
                              <span class="badge badge-danger"><?php echo "{$venta['status_venta']}"; ?></span>  
                            <?php  }  ?>
                      </td>
                      <td class="table-light">
                        <a class="btn btn-danger btn-sm" href="controllersVentas/controllerBorrarVenta.php?id_venta=<?php echo $venta['id_venta'];?>">
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
</body>
<?php   }  else {  header('Location: viewsAdmin/error404.php');  }  ?><!-- aqui termina lo que debe mostrar la pagina si esta logeado -->
</html>