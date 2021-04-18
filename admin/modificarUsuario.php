<!DOCTYPE html>
<html lang="en">

<?php

session_start();
$usuario = $_SESSION['usuario'];
$tipoUser = $_SESSION['tipoUsuario'];

$id_user = $_GET['id_user'];



if (!isset($usuario) && !isset($tipoUser)) {
    header('Location: ../views/login.php');
} else {

  require '../controllers/config.php';

  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $datosUsuario = "SELECT * FROM usuarios WHERE id = '{$id_user}'";

  $consultaUsuario = $conexion->prepare($datosUsuario);
  $consultaUsuario->execute();

  $users = $consultaUsuario->fetch(PDO::FETCH_ASSOC);

  var_dump($users);


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
                <center><h3 class="card-title">Productos Pedidos</h3></center>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                <form role="form" action="controllersAdmin/modificarUsuarioController.php" method="POST">
                <div class="card-body">
                <h2>Modificar usuario</h2>
                <div class="form-group">
                    <label for="exampleInputEmail1">id</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="id_usuario" value="<?php echo $users['id'];?>" readonly>
                  </div>  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nuevo nombre usuario</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="usuario" placeholder="Agregar nombre de usuario" value="<?php echo $users['usuarios'];?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nuevo password</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="pass" placeholder="Agregar contraseña" value="<?php echo $users['password'];?>">
                  </div>
                  <div class="form-group">
                  <label>Tipo de usuario</label>
                  <select class="form-control select2bs4" style="width: 100%;" name="tipoUsuario">
                    <option selected="selected"><?php echo $users['tipo'];?></option>
                    <option>admin</option>
                    <option>Almacen</option>
                    <option>Ventas</option>
                    <option>Proveedor</option>
                    <option>Pagina publicitaria</option>
                  </select>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Modificar usuario</button>
                </div>
              </form>
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