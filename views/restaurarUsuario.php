<!DOCTYPE html>
<html>
<?php  

error_reporting(0);


?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Copiadoras Durango | Iniciar sesion</title>
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
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Copiadoras</b>Durango</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Introdusca su correo para mandarle un mensaje para que reestablesca su contraseña</p>

      <form method="post" action="../controllers/restaurarUsuarioController.php">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name='correo' placeholder="Correo">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <?php if(isset($_GET['aviso'])): ?>
          <small class="form-text text-danger"><?php echo "{$_GET['aviso']}"; ?></small>
        <?php endif ?><br>
        <div class="row">
          <!-- /.col -->
          <div class="col-5 my-3">
            <button type="submit" class="btn btn-primary btn-block">Restaurar contraseña</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-0">
        <a href="login.php" class="text-center">Inciar sesion</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../admin/dist/js/adminlte.min.js"></script>

</body>
</html>
