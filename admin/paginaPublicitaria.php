<!DOCTYPE html>
<?php

require '../controllers/config.php';

session_start();
$usuario = $_SESSION['usuario'];
$tipoUsuario = $_SESSION['tipoUsuario'];

if (!isset($usuario)) {
    header('Location: ../views/login.php');
} elseif ($tipoUsuario == 'Pagina publicitaria' || $tipoUsuario == 'admin') {

  try {
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $conexion->beginTransaction();

    $datosSlider = "SELECT id,titulo1,titulo2,titulo3,titulo4,titulo5,descripcion1,descripcion2,descripcion3,descripcion4,descripcion5,nombre_img1,nombre_img2,nombre_img3,nombre_img4,nombre_img5 FROM slider_publicitaria";
    $datosNosotros = "SELECT titulo,descripcion,nombre_img FROM nosotros_publicitaria";
    $datosCasos = "SELECT titulo,descripcion,nombre_img1,nombre_img2,nombre_img3,nombre_img4,nombre_img5,nombre_img6,nombre_img7,nombre_img8,titulo1,titulo2,titulo3,titulo4,titulo5,titulo6,titulo7,titulo8,encabezado1,encabezado2,encabezado3,encabezado4,encabezado5,encabezado6,encabezado7,encabezado8 FROM casos_publicitaria";
    $datosDatos = "SELECT telefono,direccion,correo_ele,cp FROM datos_publicitaria";

    $consultaSlider = $conexion->prepare($datosSlider);
    $consultaNosotros = $conexion->prepare($datosNosotros);
    $consultaCasos = $conexion->prepare($datosCasos);
    $consultaDatos = $conexion->prepare($datosDatos);

    $consultaSlider->execute();
    $consultaNosotros->execute();
    $consultaCasos->execute();
    $consultaDatos->execute();

    $conexion->commit();

    $resultadoSlider = $consultaSlider->fetch(PDO::FETCH_ASSOC);
    $resultadoNosotros = $consultaNosotros->fetch(PDO::FETCH_ASSOC);
    $resultadoCasos = $consultaCasos->fetch(PDO::FETCH_ASSOC);
    $resultadoDatos = $consultaDatos->fetch(PDO::FETCH_ASSOC);
    

} catch (PDOException $e) {
    $conexion->rollback();
    die($e->getMessage());
}

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

<!-- Main content /////////////////////////////////////////////////////////////////////////////////////////// -->
<form role="form" method="POST" action="controllersTienda/insertarSlider.php" enctype="multipart/form-data">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Slider</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <!-- Titulo del Slider 1 (Inicio) -->

              
                <div class="card-body">
                    <h2>Imagen 1 del Slider</h2>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Título</label>
                    <input type="text" class="form-control"  name="titulo1"  id="exampleInputEmail1" value="<?php echo "{$resultadoSlider['titulo1']}";?>" placeholder="Agregar titulo para el slider">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Descripción</label>
                    <input type="text" class="form-control"   name="descripcion1"  id="exampleInputPassword1" value="<?php echo "{$resultadoSlider['descripcion1']}";?>" placeholder="Agregar descripción para que se muestre abajo del titulo">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Subir imágen</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile"  name="imgSlider1" required>
                        <label class="custom-file-label" for="exampleInputFile"><?php echo ($resultadoSlider['nombre_img1']=='') ? "Introduzca una imagen":"Campo obligatorio";  ?></label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Archivos</span>
                      </div>
                    </div>
                </div>
                </div>
               
            

              <!-- Titulo del Slider 1 (Fin) -->


              <!-- Titulo del Slider 2 (Inicio) -->

           
                <div class="card-body">
                <h2>Imagen 2 del Slider</h2>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Título</label>
                    <input type="text" class="form-control" name="titulo2" id="exampleInputEmail1" value="<?php echo "{$resultadoSlider['titulo2']}";?>" placeholder="Agregar titulo para el slider">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Descripción</label>
                    <input type="text" class="form-control" name="descripcion2" id="exampleInputPassword1" value="<?php echo "{$resultadoSlider['descripcion2']}";?>" placeholder="Agregar descripción para que se muestre abajo del titulo">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Subir imágen</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="imgSlider2" required>
                        <label class="custom-file-label" for="exampleInputFile"><?php echo ($resultadoSlider['nombre_img2']=='') ? "Introduzca una imagen":"Campo obligatorio";  ?></label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Archivos</span>
                      </div>
                    </div>
                  </div>
                </div>
                

              <!-- Titulo del Slider 2 (Fin) -->


              <!-- Titulo del Slider 3 (Inicio) -->

          
                <div class="card-body">
                <h2>Imagen 3 del Slider</h2>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Título</label>
                    <input type="text" class="form-control" name="titulo3" id="exampleInputEmail1" value="<?php echo "{$resultadoSlider['titulo3']}";?>" placeholder="Agregar titulo para el slider">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Descripción</label>
                    <input type="text" class="form-control" name="descripcion3" id="exampleInputPassword1" value="<?php echo "{$resultadoSlider['descripcion3']}";?>" placeholder="Agregar descripción para que se muestre abajo del titulo">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Subir imágen</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="imgSlider3" required>
                        <label class="custom-file-label" for="exampleInputFile"><?php echo ($resultadoSlider['nombre_img3']=='') ? "Introduzca una imagen":"Campo obligatorio";  ?></label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Archivos</span>
                      </div>
                    </div>
                  </div>
                </div>
               

              <!-- Titulo del Slider 3 (Fin) -->


              <!-- Titulo del Slider 4 (Inicio) -->

            
                <div class="card-body">
                <h2>Imagen 4 del Slider</h2>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Título</label>
                    <input type="text" class="form-control" name="titulo4" id="exampleInputEmail1" value="<?php echo "{$resultadoSlider['titulo4']}";?>" placeholder="Agregar titulo para el slider">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Descripción</label>
                    <input type="text" class="form-control" name="descripcion4" id="exampleInputPassword1" value="<?php echo "{$resultadoSlider['descripcion4']}";?>" placeholder="Agregar descripción para que se muestre abajo del titulo">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Subir imágen</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="imgSlider4" required>
                        <label class="custom-file-label" for="exampleInputFile"><?php echo ($resultadoSlider['nombre_img4']=='') ? "Introduzca una imagen":"Campo obligatorio";  ?></label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Archivos</span>
                      </div>
                    </div>
                  </div>
                </div>
              <!-- Titulo del Slider 4 (Fin) -->

               <!-- Titulo del Slider 5 (Inicio) -->

            
               <div class="card-body">
                <h2>Imagen 5 del Slider</h2>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Título</label>
                    <input type="text" class="form-control" name="titulo5" id="exampleInputEmail1" value="<?php echo "{$resultadoSlider['titulo5']}";?>" placeholder="Agregar titulo para el slider">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Descripción</label>
                    <input type="text" class="form-control" name="descripcion5" id="exampleInputPassword1" value="<?php echo "{$resultadoSlider['descripcion5']}";?>" placeholder="Agregar descripción para que se muestre abajo del titulo">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Subir imágen</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="imgSlider5" required>
                        <label class="custom-file-label" for="exampleInputFile"><?php echo ($resultadoSlider['nombre_img5']=='') ? "Introduzca una imagen":"Campo obligatorio";  ?></label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Archivos</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                 <input type="submit" class="btn btn-primary" value="Modificar" name="submit">
                </div>
              <!-- Titulo del Slider 5 (Fin) -->
            </div>
          </form>
            <!-- /.card -->

            <!-- Form Element sizes -->

              <!-- Titulo del Nosotros  (inicio) -->
            <div class="card card-success">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Nosotros</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form"  method="POST" action="controllersTienda/insertarNosotros.php" enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Título</label>
                      <input type="text" class="form-control" name="titulo" id="exampleInputEmail1" value="<?php echo "{$resultadoNosotros['titulo']}";?>" placeholder="Título del campo">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Descripción</label>
                      <input type="text" class="form-control" name="descripcion" id="exampleInputPassword1" value="<?php echo "{$resultadoNosotros['descripcion']}";?>" placeholder="Agregar descripción para que aparezca al lado de la imágen">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Subir archivos</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="exampleInputFile" name="imgNosotros" required>
                          <label class="custom-file-label" for="exampleInputFile"><?php echo ($resultadoNosotros['nombre_img']=='') ? "Introduzca una imagen":"Campo obligatorio";  ?></label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text" id="">Archivos</span>
                        </div>
                      </div>
                    </div>
                    <!-- /.card-body -->
    
                    <div class="card-footer">
                    <input type="submit" class="btn btn-primary" value="Modificar">
                    </div>
                  
                </div>
                </div>
              </form>
              <!-- /.card-body -->
            </div>
          </div>
            <!-- Titulo del Nosotros (Fin) -->


              <!-- Titulo del Servicios 1 (Inicio) -->
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
            <!-- general form elements disabled -->
            <div class="card card-warning">
             
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Servicios</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="POST" action="controllersTienda/insertarCasos.php" enctype="multipart/form-data">
                  
                <div class="card-body">
                  <h1>Servicios</h1>
                  <h2>Título seccion</h2>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Título</label>
                      <input type="text" class="form-control" name="titulo" id="exampleInputEmail1" value="<?php echo "{$resultadoCasos['titulo']}"; ?>" placeholder="Titulo">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Descripción</label>
                      <input type="text" class="form-control" name="descripcion" id="exampleInputPassword1" value="<?php echo "{$resultadoCasos['descripcion']}"; ?>" placeholder="Agregar encabezado para que aparezca en la imágen">
                    </div>
                    
                  </div>

                  <div class="card-body">
                  <h2>Servicio 1</h2>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Título 1</label>
                      <input type="text" class="form-control" name="tituloCaso1" value="<?php echo "{$resultadoCasos['titulo1']}"; ?>" id="exampleInputEmail1" placeholder="Titulo">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Encabezado 1</label>
                      <input type="text" class="form-control" name="encabezadoCaso1" id="exampleInputPassword1" value="<?php echo "{$resultadoCasos['encabezado1']}"; ?>" placeholder="Agregar encabezado para que aparezca en la imágen">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Subir archivos</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="exampleInputFile" name="imgServicio1" required>
                          <label class="custom-file-label" for="exampleInputFile"><?php echo ($resultadoCasos['nombre_img1']=='') ? "Introduzca una imagen":"Campo obligatorio";  ?></label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text" id="">Archivos</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                <!-- Titulo del Servicios 1 (Fin) -->


                <!-- Titulo del Servicios 2 (Inicio) -->

           
                  <div class="card-body">
                  <h2>Servicio 2 </h2>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Título 2</label>
                      <input type="text" class="form-control" name="tituloCaso2" id="exampleInputEmail1" value="<?php echo "{$resultadoCasos['titulo2']}"; ?>" placeholder="Titulo">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Encabezado 2</label>
                      <input type="text" class="form-control" name="encabezadoCaso2" id="exampleInputPassword1" value="<?php echo "{$resultadoCasos['encabezado2']}"; ?>" placeholder="Agregar encabezado para que aparezca en la imágen">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Subir archivos</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="exampleInputFile" name="imgServicio2" required>
                          <label class="custom-file-label" for="exampleInputFile"><?php echo ($resultadoCasos['nombre_img2']=='') ? "Introduzca una imagen":"Campo obligatorio";  ?></label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text" id="">Archivos</span>
                        </div>
                      </div>
                    </div>
                  </div>
                
                <!-- Titulo del Servicios 2 (Fin) -->

                <!-- Titulo del Servicios 3 (Inicio) -->

          
                  <div class="card-body">
                  <h2>Servicio 3 </h2>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Título 3</label>
                      <input type="text" class="form-control" name="tituloCaso3" id="exampleInputEmail1" value="<?php echo "{$resultadoCasos['titulo3']}"; ?>" placeholder="Titulo">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Encabezado 3</label>
                      <input type="text" class="form-control" name="encabezadoCaso3" id="exampleInputPassword1" value="<?php echo "{$resultadoCasos['encabezado3']}"; ?>" placeholder="Agregar encabezado para que aparezca en la imágen">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Subir archivos</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="exampleInputFile" name="imgServicio3" required>
                          <label class="custom-file-label" for="exampleInputFile"><?php echo ($resultadoCasos['nombre_img3']=='') ? "Introduzca una imagen":"Campo obligatorio";  ?></label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text" id="">Archivos</span>
                        </div>
                      </div>
                    </div>
                  </div>
               
                  <!-- Titulo del Servicios 3 (Fin) -->

                  <!-- Titulo del Servicios 4 (Inicio) -->
             
                    <div class="card-body">
                    <h2>Servicio 4</h2>
                      <div class="form-group">
                      <label for="exampleInputEmail1">Título 4</label>
                      <input type="text" class="form-control" name="tituloCaso4" id="exampleInputEmail1" value="<?php echo "{$resultadoCasos['titulo4']}"; ?>" placeholder="Titulo">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Encabezado 4</label>
                      <input type="text" class="form-control" name="encabezadoCaso4" id="exampleInputPassword1"  value="<?php echo "{$resultadoCasos['encabezado4']}"; ?>" placeholder="Agregar encabezado para que aparezca en la imágen">
                    </div>
                      <div class="form-group">
                        <label for="exampleInputFile">Subir archivos</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="imgServicio4" required>
                            <label class="custom-file-label" for="exampleInputFile"><?php echo ($resultadoCasos['nombre_img4']=='') ? "Introduzca una imagen":"Campo obligatorio";  ?></label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text" id="">Archivos</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  
                   <!-- Titulo del Servicios 4 (Fin) -->

                    <!-- Titulo del Servicios 5 (Inicio) -->
              
                    <div class="card-body">
                    <h2>Servicio 5</h2>
                      <div class="form-group">
                      <label for="exampleInputEmail1">Título 5</label>
                      <input type="text" class="form-control" name="tituloCaso5" id="exampleInputEmail1" value="<?php echo "{$resultadoCasos['titulo5']}"; ?>" placeholder="Titulo">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Encabezado 5</label>
                      <input type="text" class="form-control" name="encabezadoCaso5" id="exampleInputPassword1" value="<?php echo "{$resultadoCasos['encabezado5']}"; ?>" placeholder="Agregar encabezado para que aparezca en la imágen">
                    </div>
                      <div class="form-group">
                        <label for="exampleInputFile">Subir archivos</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="imgServicio5" required>
                            <label class="custom-file-label" for="exampleInputFile"><?php echo ($resultadoCasos['nombre_img5']=='') ? "Introduzca una imagen":"Campo obligatorio";  ?></label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text" id="">Archivos</span>
                          </div>
                        </div>
                      </div>
                    </div>
                <!-- Titulo del Servicios 5 (Fin) -->

                <!-- Titulo del Servicios 6 (Inicio) -->
              
                <div class="card-body">
                    <h2>Servicio 6</h2>
                      <div class="form-group">
                      <label for="exampleInputEmail1">Título 6</label>
                      <input type="text" class="form-control" name="tituloCaso6" id="exampleInputEmail1" value="<?php echo "{$resultadoCasos['titulo6']}"; ?>" placeholder="Titulo">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Encabezado 6</label>
                      <input type="text" class="form-control" name="encabezadoCaso6" id="exampleInputPassword1" value="<?php echo "{$resultadoCasos['encabezado6']}"; ?>" placeholder="Agregar encabezado para que aparezca en la imágen">
                    </div>
                      <div class="form-group">
                        <label for="exampleInputFile">Subir archivos</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="imgServicio6" required>
                            <label class="custom-file-label" for="exampleInputFile"><?php echo ($resultadoCasos['nombre_img6']=='') ? "Introduzca una imagen":"Campo obligatorio";  ?></label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text" id="">Archivos</span>
                          </div>
                        </div>
                      </div>
                    </div>
                <!-- Titulo del Servicios 6 (Fin) -->


              <!-- Titulo del Servicios 7 (inicio) -->
                <div class="card-body">
                      <h2>Servicio 7</h2>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Título 7</label>
                      <input type="text" class="form-control" name="tituloCaso7" id="exampleInputEmail1" value="<?php echo "{$resultadoCasos['titulo7']}"; ?>" placeholder="Titulo">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Encabezado 7</label>
                      <input type="text" class="form-control" name="encabezadoCaso7" id="exampleInputPassword1" value="<?php echo "{$resultadoCasos['encabezado7']}"; ?>" placeholder="Agregar encabezado para que aparezca en la imágen">
                    </div>
                        <div class="form-group">
                          <label for="exampleInputFile">Subir archivos</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="exampleInputFile" name="imgServicio7" required>
                              <label class="custom-file-label" for="exampleInputFile"><?php echo ($resultadoCasos['nombre_img7']=='') ? "Introduzca una imagen":"Campo obligatorio";  ?></label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text" id="">Archivos</span>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="card-body">
                    <h2>Servicio 8</h2>
                      <div class="form-group">
                      <label for="exampleInputEmail1">Título 8</label>
                      <input type="text" class="form-control" name="tituloCaso8" id="exampleInputEmail1" value="<?php echo "{$resultadoCasos['titulo8']}"; ?>" placeholder="Titulo">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Encabezado 8</label>
                      <input type="text" class="form-control" name="encabezadoCaso8" id="exampleInputPassword1" value="<?php echo "{$resultadoCasos['encabezado8']}"; ?>" placeholder="Agregar encabezado para que aparezca en la imágen">
                    </div>
                      <div class="form-group">
                        <label for="exampleInputFile">Subir archivos</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="imgServicio8" required>
                            <label class="custom-file-label" for="exampleInputFile"><?php echo ($resultadoCasos['nombre_img8']=='') ? "Introduzca una imagen":"Campo obligatorio";  ?></label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text" id="">Archivos</span>
                          </div>
                        </div>
                      </div>
                    </div>
                <!-- Titulo del Servicios 8 (Fin) -->


                      <div class="card-footer">
                        <input type="submit" class="btn btn-primary" value="Modificar">
                      </div>
                    </form>   
                    <!-- Titulo del Servicios 5 (Fin) -->
              </div> 
            </div>


            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Datos de la empresa</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form"   method="POST" action="controllersTienda/insertarDatos.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Teléfono</label>
                    <input type="text" class="form-control" name="telefono" id="exampleInputEmail1" value="<?php echo "{$resultadoDatos['telefono']}"; ?>" placeholder="Teléfono de la empresa">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Dirección</label>
                    <input type="text" class="form-control"  name="direccion" id="exampleInputPassword1" value="<?php echo "{$resultadoDatos['direccion']}"; ?>" placeholder="Dirección de la empresa">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Correo electrónico</label>
                    <input type="text" class="form-control" name="correo_ele" id="exampleInputPassword1" value="<?php echo "{$resultadoDatos['correo_ele']}"; ?>" placeholder="Correo electrónico de la empresa">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Código Postal</label>
                    <input type="text" class="form-control"  name="cp" id="exampleInputPassword1" value="<?php echo "{$resultadoDatos['cp']}"; ?>" placeholder="Código postal de la empresa">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <input type="submit" class="btn btn-primary" value="Modificar">
                </div>
              </form>
            </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>


<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        </div>
        <?php include 'viewsAdmin/footerAdmin.php'; ?>
    </div>
    <?php include 'viewsAdmin/scriptsRequeridosAdmin.php'; ?>
</body>
<?php   }  else {  header('Location: viewsAdmin/error404.php'); } ?><!-- aqui termina lo que debe mostrar la pagina si esta logeado -->
</html>