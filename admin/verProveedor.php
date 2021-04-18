<!DOCTYPE html>
<html lang="en">
<?php

session_start();
$usuario = $_SESSION['usuario'];
$tipoUsuario = $_SESSION['tipoUsuario'];


if (!isset($usuario)) {
    header('Location: ../views/login.php');
} elseif ( $tipoUsuario == 'admin' ) {

    include '../controllers/config.php';

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $datosLogin = "SELECT * FROM proveedores";
    
    $consultaUser = $conexion->prepare($datosLogin);
    $consultaUser->execute();
    
    
    $resultado = $consultaUser->fetchAll(PDO::FETCH_ASSOC);
    
    
    ?>
    
    <?php include 'viewsAdmin/headAdmin.php'; ?>
    <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
        <div class="wrapper">
    
        <?php include 'viewsAdmin/navbarAdmin.php'; ?>
        <?php include 'viewsAdmin/asideDepartamentos.php'; ?>
            <div class="content-wrapper">
            <?php include 'viewsAdmin/headerAdmin.php' ?>
            <!-- Contendido de toda la pagina formularios y demas -->
    
            <div class="card">
                <div class="card-header">
                <h1 class="card-title">Lista de proveedores</h1>
                </div>
            </div>
            <!-- Contendido de toda la pagina formularios y demas -->
    
            <div class="card-body p-0">
              <table class="table table-striped projects">
                  <thead >
                      <tr >
                    <tr>
                      <th style="width: 1% " class="table-dark table-bordered table-hover">id</th>
                      <th style="width: 1% " class="table-dark table-bordered table-hover">RFC</th>
                      <th style="width: 1% " class="table-dark table-bordered table-hover">Nombre</th>
                      <th style="width: 1% " class="table-dark table-bordered table-hover">Apellido Paterno</th>
                      <th style="width: 1% " class="table-dark table-bordered table-hover">Apellido Materno</th>
                      <th style="width: 1% " class="table-dark table-bordered table-hover">Calle</th>
                      <th style="width: 1% " class="table-dark table-bordered table-hover">Colonia o fraccionamiento</th>
                      <th style="width: 1% " class="table-dark table-bordered table-hover">Número</th>
                      <th style="width: 1% " class="table-dark table-bordered table-hover">Código Postal</th>
                      <th style="width: 1% " class="table-dark table-bordered table-hover">Teléfono</th>
                      <th style="width: 1% " class="table-dark table-bordered table-hover">Fecha y hora</th>
                      <th style="width: 1% " class="table-dark table-bordered table-hover">Status</th>
                      <th style="width: 1% " class="table-dark table-bordered table-hover">Correo electrónico</th>

                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach($resultado as $proveedor) {  ?>    
                        <tr>
                      <td class="table-warning""><?php echo $proveedor['id']; ?></td>
                      <td class="table-light"><?php echo $proveedor['rfc']; ?></td>
                      <td class="table-light"><?php echo $proveedor['nombre']; ?></td>
                      <td class="table-light"><?php echo $proveedor['ape1']; ?></td>
                      <td class="table-light"><?php echo $proveedor['ape2']; ?></td>
                      <td class="table-light"><?php echo $proveedor['calle']; ?></td>
                      <td class="table-light"><?php echo $proveedor['col_fracc']; ?></td>
                      <td class="table-light"><?php echo $proveedor['numero']; ?></td>
                      <td class="table-light"><?php echo $proveedor['cp']; ?></td>
                      <td class="table-light"><?php echo $proveedor['telefono']; ?></td>
                      <td class="table-light"><?php echo $proveedor['fecha']; ?></td>
                      <td class="table-light"><?php echo $proveedor['estatus']; ?></td>
                      <td class="table-light"><?php echo $proveedor['correo_ele']; ?></td>



                     
                     
                    </tr>
                    <?php  } ?>

                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

          <div class="col-md-4">
           
           
          
           
            <!-- /.info-box -->

            <div class="card">
              
              <!-- /.card-header -->
             
              <!-- /.card-body -->
              <div class="card-footer bg-white p-0">
                <ul class="nav nav-pills flex-column">
                  
                  
                
                </ul>
              </div>
              <!-- /.footer -->
            </div>
            <!-- /.card -->

            <!-- PRODUCT LIST -->

              <!-- /.card-header -->

              <!-- /.card-body -->

              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>  <!--  aqui termina el div que tiene todos los elementos  -->
  <!-- /.content-wrapper -->


  <!-- Footer de pagina aqui vaaa --> 
  <?php include 'viewsAdmin/footerAdmin.php'; ?>
  
</div> <!-- Div que comprende todos los elementos de la pagina va despues del body  -->
<!-- ./wrapper -->

<!-- Aqui van los scripts requeridos --> 
<?php include 'viewsAdmin/scriptsRequeridosAdmin.php'; ?>



</body>

<?php   }    ?><!-- aqui termina lo que debe mostrar la pagina si esta logeado -->

</html>
