<!DOCTYPE html>
<html lang="en">
<?php

error_reporting(0);

$aviso = $_GET['aviso'];



require '../controllers/config.php';

session_start();

$usuario = $_SESSION['usuario'];
$tipoUsuario = $_SESSION['tipoUsuario'];


if(!isset($usuario)) {
    header('Location: ../views/login.php');
} elseif ($tipoUsuario == 'cliente') {

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Copiadoras Durango | Informacion del cliente</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    
<section class="container vh-70 border border-warning my-3">
    
            <form action="../controllers/registroInfoCliente.php" method="POST">
                <div class="form-row">
                    <h2 class="mx-auto">Ingresa tus datos <?php echo "{$usuario}"; ?></h2>
                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <label for="">RFC</label>
                        <input type="text" class="form-control" id="" name="rfc" pattern="[A-Z0-9]{12-13}" placeholder="Clave Registro Federal del contribuyente" required>
                        <small id="" class="form-text text-muted">De 12 a 13 caracteres en mayusculas, sus datos seran guardados confidencialmente</small>
                    </div>
                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <label for="">Nombre(s)</label>
                        <input type="text" class="form-control" id="" name="nombres" placeholder="Nombre de pila" pattern="[A-Za-z\s]+" required>
                    </div>
                    <div class="form-group col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                        <label for="">Apellido paterno</label>
                        <input type="text" class="form-control" id="" name="ape1" placeholder="Apellido paterno" pattern="[A-Za-z\s]+" required>
                    </div>
                    <div class="form-group col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                        <label for="">Apellido materno</label>
                        <input type="text" class="form-control" id="" name="ape2" placeholder="Apellido materno" pattern="[A-Za-z\s]+">
                    </div>
                    <h3 class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">Direccion</h3>
                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <label for="">Calle</label>
                        <input type="text" class="form-control" id="" name="calle" placeholder="Informacion de direccion" pattern="[0-9A-Za-z\s\.\-]+" required>
                    </div>
                    <div class="form-group col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                        <label for="">Colonia o fraccionamiento</label>
                        <input type="text" class="form-control" id="" name="col_frac" placeholder="Informacion de direccion" pattern="[0-9A-Za-z\s\.\-]+" required>
                    </div>
                    <div class="form-group col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <label for="">Numero</label>
                        <input type="text" class="form-control" id="" name="numero_casa" placeholder="Numero de casa" pattern="[0-9A-Za-z\-\s]+" required>
                    </div>
                    <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <label for="">Estado</label>
                        <input type="text" class="form-control" id="" name="estado" placeholder="Estado de procedencia" pattern="[0-9A-Za-z\,\.\-\s]+" required>
                    </div>
                    <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <label for="">Localidad</label>
                        <input type="text" class="form-control" id="" name="localidad" placeholder="Localidad" pattern="[0-9A-Za-z\,\.\-\s]+" required>
                    </div>
                    <h3 class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">Datos de contacto</h3>
                    <div class="form-group col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                        <label for="">Codigo Postal</label>
                        <input type="text" class="form-control" id="" name="cp" placeholder="Codigo postal" pattern="[0-9]{5}" required>
                        <small id="" class="form-text text-muted">Solo 5 numeros</small>
                    </div>
                    <div class="form-group col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                        <label for="">Telefono</label>
                        <input type="text" class="form-control" id="" name="telefono" placeholder="Telefono" pattern="[0-9\-]{10,13}" required>
                        <small id="" class="form-text text-muted">Lada 3 digitos, mas numero. </small>
                    </div>
                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-4 col-xl-6">
                        <label for="">Correo electronico</label>
                        <input type="email" class="form-control" id="" name="correo" placeholder="Correo de contacto" required>
                        <?php if (isset($aviso)) { ?>
                            <small class="form-text text-danger"><?php echo $aviso; ?></small>
                        <?php  } ?>
                         
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
<?php   } else { header('Location: ../admin/viewsAdmin/error404.php');  }    ?> <!-- si pasa algo raro te manda al error -->
</html>