<!DOCTYPE html>
<html>

<?php



require '../controllers/config.php';
session_start();

$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$datosUsers = "SELECT usuarios FROM usuarios WHERE tipo = 'cliente'";

$consultaUser = $conexion->prepare($datosUsers);
$consultaUser->execute();

$resultado = $consultaUser->fetchAll(PDO::FETCH_ASSOC);


?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Copiadoras Durango | Nuevo usuario</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../admin/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../admin/indexAdmin.php"><b>Copiadoras</b>Durango</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Registro de usuarios</p>

      <form action="../controllers/registro.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="usuario" placeholder="Usuario">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <?php if(isset($_GET['aviso1'])): ?>
          <small class="form-text text-danger"><?php echo "{$_GET['aviso1']}"; ?></small>
        <?php endif ?><br>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="pass" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="confirmarPass" placeholder="Rescriba password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <?php if(isset($_GET['aviso2'])): ?>
          <small class="form-text text-danger"><?php echo "{$_GET['aviso2']}"; ?></small>
        <?php endif ?><br>
        <div class="row">
          <div class="col-4 py-3">
            <button type="submit" class="btn btn-primary btn-block">Registrar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="login.php" class="text-center">Ya soy miembro</a>
    </div>
    <!-- /.form-box -->
  </div>
  <!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../admin/dist/js/adminlte.min.js"></script>
</body>
</html>
