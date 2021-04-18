<!DOCTYPE html>
<html lang="en">
<?php

require '../controllers/config.php';

session_start();
$usuario = $_SESSION['usuario'];
$tipoUsuario = $_SESSION['tipoUsuario'];


if (!isset($usuario)) {
    header('Location: ../views/login.php');
} elseif ($tipoUsuario == 'Almacen' || $tipoUsuario == 'admin') {

  
?>


<html lang="es">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php include 'viewsAdmin/headAdmin.php'; ?>
<head>
    <title>Copiadoras Durango | Agregar productos</title>
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
            <center><h3 class="card-title">Nuevo producto</h3></center>
            </div>
      
        <section class="container vh-70  my-3">   

<form class="needs-validation"  action="controllersAlmacen/agregarProductoControllers.php" method="POST">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Nombre:</label>
      <input type="text" class="form-control" name="nombre" id="validationCustom01" placeholder="Nombre del producto que se va a ingresar" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Modelo: </label>
      <input type="text" class="form-control" name="modelo" id="validationCustom02" placeholder="Modelo del producto que se va a ingresar" 
        required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Marca: </label>
      <input type="text" class="form-control" name="marca" id="validationCustom02" placeholder="Marca del producto que se va a ingresar" 
        required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">No. serie: </label>
      <input type="text" class="form-control" name="n_serie" id="validationCustom02" placeholder="No. serie del producto que se va a ingresar" 
        required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Precio: </label>
      <input type="float" class="form-control" name="precio_venta" id="validationCustom02" placeholder="precio del producto que se va a ingresar" 
        required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Cantidad: </label>
      <input type="number" class="form-control" name="cantidad" id="validationCustom02" placeholder="Cantidad del producto que se va a ingresar" 
        required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">No. orden: </label>
      <input type="number" class="form-control" name="no_orden" id="validationCustom02" placeholder="No. orden del producto que se va a ingresar" 
        required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Proveedor: </label>
      <input type="text" class="form-control" name="proveedor" id="validationCustom02" placeholder="Proveedor del producto que se va a ingresar" 
        required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Observaciones: </label>
      <input type="text" class="form-control" name="observaciones" id="validationCustom02" placeholder="Nombre del producto que se va a ingresar" 
        required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Color: </label>
      <input type="text" class="form-control" name="color" id="validationCustom02" placeholder="Color del producto que se va a ingresar" 
        required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
                  <label>Tamaño:</label>
                  <select class="form-control select2bs4" style="width: 100%;" name="tamanio">
                    <option selected="selected">Ch</option>
                    <option>M</option>
                    <option>G</option>
                    <option>10"</option>
                    <option>14"</option>
                    <option>15"</option>
                    <option>15.6"</option>
                    <option>18.5"</option>
                    <option>21.5"</option>
                    <option>23.5"</option>
                    <option>32"</option>
                    <option>40"</option>
                    <option>50"</option>
                    <option>55"</option>
                  </select>
                </div>


    <div class="col-md-4 mb-3">
                  <label>Categoría:</label>
                  <select class="form-control select2bs4" style="width: 100%;" name="tipo_equipo">
                    <option selected="selected"> Equipo de impresión y multifuncionales</option>
                    <option>Equipos de Computo</option>
                    <option>Monitores y TVs</option>
                    <option>Consumibles</option>
                    <option>Accesorios</option>
                  </select>
                </div>


    <div class="col-md-4 mb-3">
                  <label>Tipo de impresora:</label>
                  <select class="form-control select2bs4" style="width: 100%;" name="tipo_impresora">
                    <option selected="selected"> Multifuncional</option>
                    <option>N/A</option>
                    <option>Deskjet</option>
                    <option>Lasér</option>
                    <option>Inyección continua</option>
                    <option>Multifuncional deskjet</option>
                    <option>Multifuncional láser</option>
                    <option>Multifuncional inyección continua</option>
                  </select>
                </div>



    <div class="col-md-4 mb-3">
                  <label>Color de impresión:</label>
                  <select class="form-control select2bs4" style="width: 100%;" name="color_impresion">
                    <option selected="selected"> Blanco y negro</option>
                    <option>Colores</option>
                    <option>N/A</option>
                  </select>
                </div>


    <div class="col-md-4 mb-3">
      <label for=" ">Procesador </label>
      <input type="text" class="form-control" name="procesador" id=" " placeholder="Procesador del producto que se va a ingresar">
    </div>
    <div class="col-md-4 mb-3">
      <label for=" ">RAM: </label>
      <input type="text" class="form-control" name="ram" id=" " placeholder="RAM del producto que se va a ingresar">
    </div>
    <div class="col-md-4 mb-3">
      <label for=" ">Almacenamiento: </label>
      <input type="text" class="form-control" name="almacenamiento" id=" " placeholder="Almacenamiento del producto que se va a ingresar">
    </div>
    <div class="col-md-4 mb-3">
                  <label>SSD:</label>
                  <select class="form-control select2bs4" style="width: 100%;" name="SSD">
                    <option selected="selected">Si</option>
                    <option>No</option>
                  </select>
                </div>

    <div class="col-md-4 mb-3">
                  <label>Tarjeta gráfica:</label>
                  <select class="form-control select2bs4" style="width: 100%;" name="tarjeta_grafica">
                    <option selected="selected">Si</option>
                    <option>No</option>
                  </select>
                </div>


                <div class="col-md-4 mb-3">
                  <label>Monitor:</label>
                  <select class="form-control select2bs4" style="width: 100%;" name="monitor">
                    <option selected="selected">Si</option>
                    <option>No</option>
                  </select>
                </div>
    
  </div>
  
  <br><br>
  <center><button class="btn btn-primary btn-sm form-group col-4 col-sm-4 col-md-4 col-lg-3 col-xl-3 mx-auto type="submit">Agregar</button></center>
</form>


</section>























        
        <?php include 'viewsAdmin/footerAdmin.php'; ?>
    </div>
    <?php include 'viewsAdmin/scriptsRequeridosAdmin.php'; ?>
</body>
<?php   }    ?><!-- aqui termina lo que debe mostrar la pagina si esta logeado -->
</html>