<!DOCTYPE html>
<?php

error_reporting(0);
$aviso = $_GET['aviso'];

session_start();
$usuario = $_SESSION['usuario'];
$tipoUsuario = $_SESSION['tipoUsuario'];

if (!isset($usuario)) {
    header('Location: ../views/login.php');
} elseif($tipoUsuario == "admin" || $tipoUsuario == "Ventas") {

include '../controllers/config.php';


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
        <form role="form" action="controllersAdmin/nuevoUsuarioController.php" method="POST">
                <div class="card-body">
                <h2>Registrar nuevo usuario</h2>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre usuario</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="usuario" placeholder="Agregar nombre de usuario">
                    <?php if(isset($aviso)) { ?>
                        <small class=".text-danger"><?php echo $aviso; ?></small>
                     <?php } ?>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="pass" placeholder="Agregar contraseña">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Confirmar password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="confirmarPass" placeholder="Agregar contraseña">
                  </div>
                  <div class="form-group">
                  <label>Tipo de usuario</label>
                  <select class="form-control select2bs4" style="width: 100%;" name="tipoUsuario">
                    <option selected="selected">Pagina publicitaria</option>
                    <option>Almacen</option>
                    <option>Ventas</option>
                    <option>Proveedor</option>
                  </select>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Agregar usuario</button>
                </div>
              </form>
        </div>
        <?php include 'viewsAdmin/footerAdmin.php'; ?>
    </div>
    <?php include 'viewsAdmin/scriptsRequeridosAdmin.php'; ?>
</body>
<?php   }  else {  header('Location: viewsAdmin/error404.php');  }  ?><!-- aqui termina lo que debe mostrar la pagina si esta logeado -->
</html>