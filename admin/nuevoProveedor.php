<!DOCTYPE html>
<?php

session_start();
$usuario = $_SESSION['usuario'];
$tipoUsuario = $_SESSION['tipoUsuario'];


if (!isset($usuario)) {
    header('Location: ../views/login.php');
    
} elseif ($tipoUsuario == 'admin' || $tipoUsuario == 'Ventas') {

   // include '../controllers/config.php';
        

?>
<html lang="es">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php include 'viewsAdmin/headAdmin.php'; ?>
<head>
    <title>Copiadoras Durango | Informacion del Proveedor</title>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
    <?php include 'viewsAdmin/navbarAdmin.php'; ?>
    <?php include 'viewsAdmin/asideDepartamentos.php'; ?>
        <div class="content-wrapper">
        <?php include 'viewsAdmin/headerAdmin.php' ?>
        <!-- Contendido de toda la pagina formularios y demas -->
        <div class="card">
            <div class="card-header">
            <center><h3 class="card-title">Registro de proveedores </h3></center>
            </div>
      
        <section class="container vh-70  my-3">   

<form class="needs-validation"  action="controllersAdmin/nuevoProveedorControllers.php" method="POST">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">RFC</label>
      <input type="text" class="form-control" name="rfc" id="validationCustom01" placeholder="Clave Registro Federal del contribuyente" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Nombre(s): </label>
      <input type="text" class="form-control" name="nombre" id="validationCustom02" placeholder="Escriba su nombre(s)" 
        required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Apellido Paterno: </label>
      <input type="text" class="form-control" name="ape1" id="validationCustom02" placeholder="Escriba su apellido paterno" 
        required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Apellido Materno: </label>
      <input type="text" class="form-control" name="ape2" id="validationCustom02" placeholder="Escriba su apellido materno" 
        required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Calle: </label>
      <input type="text" class="form-control" name="calle" id="validationCustom02" placeholder="Escriba la calle de su direccion" 
        required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Colonia o fraccionamiento: </label>
      <input type="text" class="form-control" name="col_fracc" id="validationCustom02" placeholder="Escriba su colonia o fraccionamiento" 
        required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Número: </label>
      <input type="text" class="form-control" name="numero" id="validationCustom02" placeholder="Escriba su numero de casa" 
        required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Código Postal: </label>
      <input type="text" class="form-control" name="cp" id="validationCustom02" placeholder="Escriba su codigo postal" 
        required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Teléfono: </label>
      <input type="text" class="form-control" name="telefono" id="validationCustom02" placeholder="Escriba su telefono" 
        required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Status: </label>
      <input type="text" class="form-control" name="estatus" id="validationCustom02" placeholder="Escriba si esta activo o no el proveedor" 
        required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Correo Electrónico</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
        </div>
        <input type="text" class="form-control" name="correo_ele" id="validationCustomUsername" placeholder="Correo electronico"
          aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Por favor escoge los datos apropiados.
        </div>
      </div>
    </div>
  </div>
  
  <br><br>
  <center><button class="btn btn-primary btn-sm form-group col-4 col-sm-4 col-md-4 col-lg-3 col-xl-3 mx-auto type="submit">Registrar</button></center>
</form>


</section>

        <?php include 'viewsAdmin/footerAdmin.php'; ?>
    </div>
    <?php include 'viewsAdmin/scriptsRequeridosAdmin.php'; ?>
</body>
<?php   }    ?><!-- aqui termina lo que debe mostrar la pagina si esta logeado -->
</html>