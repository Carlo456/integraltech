<!DOCTYPE html>
<html lang="en">

<?php

session_start();
$usuario = $_SESSION['usuario'];
$tipoUser = $_SESSION['tipoUsuario'];




if (!isset($usuario) && !isset($tipoUser)) {
    header('Location: ../views/login.php');
} else {

  require '../controllers/config.php';

  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $datosUsuarios = "SELECT * FROM usuarios ORDER BY fecha DESC";

  $consultaUsuarios = $conexion->prepare($datosUsuarios);
  $consultaUsuarios->execute();

  $users = $consultaUsuarios->fetchAll(PDO::FETCH_ASSOC);

  

?>

<!-- Aqui va el head -->
<?php include 'viewsAdmin/headAdmin.php'; ?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper"> <!-- Div que comprende todos los elementos de la pagina va despues del body  -->
  
<!--Aqui va la barra de navegacion -->  
<?php include 'viewsAdmin/navbarAdmin.php'; ?>
  
<!-- Aqui va el sidebar de los departamentos --> 
<?php include 'viewsAdmin/asideDepartamentos.php'; ?>

  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> <!-- div que engloba toda la pagina en sus elementos  -->
  <!-- Aqui va el header de la pagina  --> 
  <?php include 'viewsAdmin/headerAdmin.php' ?>
    

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
                  
              
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-8">
            <!-- MAP & BOX PANE -->
           
            <!-- /.card -->
           
            <!-- /.row -->

            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <center><h3 class="card-title">Usuarios</h3></center>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Usuario</th>
                      <th>Contraseña</th>
                      <th>Tipo</th>
                      <th>Acciones</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($users as $user) { ?>
                      <tr>
                      <td><?php echo $user['id']; ?></td>
                      <td><?php echo $user['usuarios']; ?></td>
                      <td><?php echo $user['password']; ?></td>
                      <td><?php echo $user['tipo']; ?></td>
                      <td>
                        <a class="btn btn-info btn-sm" href="modificarUsuario.php?id_user=<?php echo $user['id'] ?>">
                          <i class="fas fa-pencil-alt">
                          </i>
                              Modificar
                        </a>
                      </td>
                     
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



