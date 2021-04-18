<!DOCTYPE html>
<html lang="en">

<?php 

error_reporting(0);

$aviso = $_GET['aviso'];
include '../controllers/config.php';

session_start();

$id = $_SESSION['id'];
$usuario = $_SESSION['usuario'];
$tipoUsuario = $_SESSION['tipoUsuario'];



if (!isset($usuario)) {
    header('Location: ../views/login.php');
} elseif ($tipoUsuario == 'cliente' || $tipoUsuario == 'admin') {


$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$datosCliente = "SELECT * FROM clientes WHERE id = '{$id}'";

$consultaCliente = $conexion->prepare($datosCliente);
  $consultaCliente->execute();

  // set the resulting array to associative
  $resultado = $consultaCliente->fetch(PDO::FETCH_ASSOC);


?>

<head>

  <title>Copiadoras Durango | Informacion del cliente</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

</head>
<body>
<hr>
<div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-12"><h1 class="text-center"><?php echo "Usuario: {$usuario}" ?></h1></div>
    	
    </div>
    <div class="row">

    	<div class="col-sm-12">

          <div class="tab-content">
            <div class="tab-pane active">
                <hr>
                  <form class="form" action="../controllers/modificarPerfil.php" method="post">
                  <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <label for="">RFC</label>
                        <input type="text" class="form-control" id="" name="rfc" pattern="[A-Z0-9]{12-13}" value="<?php echo "{$resultado['rfc']}"?>" placeholder="Clave Registro Federal del contribuyente" required>
                        <small id="" class="form-text text-muted">De 12 a 13 caracteres en mayusculas y numeros, sus datos seran guardados confidencialmente</small>
                    </div>
                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <label for="">Nombre(s)</label>
                        <input type="text" class="form-control" id="" name="nombres" placeholder="Nombre de pila" pattern="[A-Za-z\s]+" value="<?php echo "{$resultado['nombres']}"?>" required>
                    </div>
                    <div class="form-group col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                        <label for="">Apellido paterno</label>
                        <input type="text" class="form-control" id="" name="ape1" placeholder="Apellido paterno" pattern="[A-Za-z\s]+" value="<?php echo "{$resultado['ape1']}"?>" required>
                    </div>
                    <div class="form-group col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                        <label for="">Apellido materno</label>
                        <input type="text" class="form-control" id="" name="ape2" placeholder="Apellido materno" pattern="[A-Za-z\s]+" value="<?php echo "{$resultado['ape2']}"?>">
                    </div>
                    <h3 class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">Direccion</h3>
                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <label for="">Calle</label>
                        <input type="text" class="form-control" id="" name="calle" placeholder="Informacion de direccion" pattern="[0-9A-Za-z\s\.\-]+" value="<?php echo "{$resultado['calle']}"?>" required>
                    </div>
                    <div class="form-group col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                        <label for="">Colonia o fraccionamiento</label>
                        <input type="text" class="form-control" id="" name="col_fracc" placeholder="Informacion de direccion" pattern="[0-9A-Za-z\s\.\-]+" value="<?php echo "{$resultado['col_fracc']}"?>" required>
                    </div>
                    <div class="form-group col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <label for="">Numero</label>
                        <input type="text" class="form-control" id="" name="num_casa" placeholder="Numero de casa" pattern="[0-9A-Za-z\-\s]+" value="<?php echo "{$resultado['num_casa']}"?>" required>
                    </div>
                    <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <label for="">Estado</label>
                        <input type="text" class="form-control" id="" name="estado" placeholder="Estado de procedencia" pattern="[0-9A-Za-z\-\s]+" value="<?php echo "{$resultado['estado']}"?>" required>
                    </div>
                    <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <label for="">Localidad</label>
                        <input type="text" class="form-control" id="" name="localidad" placeholder="Localidad" pattern="[0-9A-Za-z\-\s]+" value="<?php echo "{$resultado['localidad']}"?>" required>
                    </div>
                    <h3 class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">Datos de contacto</h3>
                    <div class="form-group col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                        <label for="">Codigo Postal</label>
                        <input type="text" class="form-control" id="" name="cp" placeholder="Codigo postal" pattern="[0-9]{5}" value="<?php echo "{$resultado['cp']}"?>" required>
                        <small id="" class="form-text text-muted">Solo 5 numeros</small>
                    </div>
                    <div class="form-group col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                        <label for="">Telefono</label>
                        <input type="text" class="form-control" id="" name="telefono" placeholder="Telefono" pattern="[0-9\-]{10,13}" value="<?php echo "{$resultado['telefono']}"?>" required>
                        <small id="" class="form-text text-muted">Lada 3 digitos, mas numero. </small>
                    </div>
                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-4 col-xl-6">
                        <label for="">Correo electronico</label>
                        <input type="email" class="form-control" id="" name="correo" placeholder="Correo de contacto" value="<?php echo "{$resultado['correo_ele']}"?>" required>
                        <?php if (isset($aviso)) { ?>
                            <small class="form-text text-danger"><?php echo $aviso; ?></small>
                        <?php  } ?>
                    </div>
                    <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success pull-right" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Guardar</button>
                               	<!--<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>-->
                            </div>
                      </div>
              	</form>
              
              <hr>
              
             </div><!--/tab-pane-->
             
             
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
                                                          
</body>
<?php  }  else {  header('Location: ../admin/viewsAdmin/error404.php'); }  ?> <!-- aqui termina la else de la session -->
</html>



