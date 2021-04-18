<!DOCTYPE html>
<html lang="es">
  <head>
    <title> Integral Tech Solution </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Muli:300,400,700,900" rel="stylesheet">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Links de estilos de plantillas -->
    <!-- Links de Plantilla de contacto -->
            <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
            <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
            <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
            <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
            <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
            <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
            <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--Links de css propios -->
        <link rel="stylesheet" type="text/css" href="css/estilosPaginaPublicitaria.css">
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        
        <link rel="stylesheet" type="text/css" href="css/estilos.css">

          <!-- final de links propios -->

    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
         
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      
      <div class="container-fluid ">
        <div class="d-flex align-items-center">
        <div class="site-logo"><a href="index.php" class="text-uppercase" >  <img src="images/logo_integral.jpg" alt="Image" width="120" height="35">  </a></div>
          <div>
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-xl-block">
              <li><a href="#home-section" class="nav-link">Inicio</a></li>
                <li><a href="#nosotros" class="nav-link">Nosotros</a></li>
                <li><a href="#servicios" class="nav-link">Servicios</a></li>
                <li><a href="#formulario" class="nav-link" >Contacto</a></li>
              </ul>
            </nav>
          </div>
          <div class="ml-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-xl-block">
                
                <li class="cta"><a href="tienda.php" onclick="myFunction1();" target="_self" class="nav-link"><span class="border rounded text-white btnColor">Tienda</span></a></li>
                <li class="cta"><a href="views/login.php" onclick="myFunction2();" target="_self" class="nav-link"><span class="border rounded text-white btnColor">Login</span></a></li>
              </ul>
            </nav>
            <a href="#" class="d-inline-block d-xl-none site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>
      
    </header>

<?php
include 'controllers/config.php';

$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$datosLogin = "SELECT * FROM slider_publicitaria"; 



$consultaUser = $conexion->prepare($datosLogin);
$consultaUser->execute();


$resultado = $consultaUser->fetch(PDO::FETCH_ASSOC);


?>
    <div class="intro-section custom-owl-carousel" id="home-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 mr-auto" data-aos="fade-up">

            <div class="owl-carousel slide-one-item-alt-text">
              <div class="slide-text">
                <h1><?php echo "{$resultado['titulo1']}"; ?></h1><br><br>
                <p class="mb-5"><?php echo "{$resultado['descripcion1']}"?></p>
                <p><a href="tienda.php"  class="btn btn-outline-light py-3 px-5 btnColor">Tienda</a></p>
              </div>
              <div class="slide-text">
                <h1><?php echo "{$resultado['titulo2']}"; ?></h1><br><br>
                <p class="mb-5"><?php echo "{$resultado['descripcion2']}"?></p>
                <p><a href="tienda.php"  class="btn btn-outline-light py-3 px-5 btnColor">Tienda</a></p>
              </div>
              <div class="slide-text">
                <h1><?php echo "{$resultado['titulo3']}"; ?></h1><br><br>
                <p class="mb-5"><?php echo "{$resultado['descripcion3']}"?></p>
                <p><a href="tienda.php" class="btn btn-outline-light py-3 px-5 btnColor">Tienda</a></p>
              </div>
              <div class="slide-text">
                <h1><?php echo "{$resultado['titulo4']}"; ?></h1><br><br>
                <p class="mb-5"><?php echo "{$resultado['descripcion4']}"?></p>
                <p><a href="tienda.php"  class="btn btn-outline-light py-3 px-5 btnColor">Tienda</a></p>
              </div>
              <div class="slide-text">
                <h1><?php echo "{$resultado['titulo5']}"; ?></h1><br><br>
                <p class="mb-5"><?php echo "{$resultado['descripcion5']}"?></p>
                <p><a href="tienda.php"  class="btn btn-outline-light py-3 px-5 btnColor">Tienda</a></p>
              </div>
            </div>

          </div>
          <div class="col-lg-6 ml-auto"  data-aos="fade-up" data-aos-delay="100">
                        
            
            <div class="owl-carousel slide-one-item-alt">
              <?php $resultado['img1'] = base64_encode($resultado['img1']); ?>
              <?php $resultado['img2'] = base64_encode($resultado['img2']); ?>
              <?php $resultado['img3'] = base64_encode($resultado['img3']); ?>
              <?php $resultado['img4'] = base64_encode($resultado['img4']); ?>
              <?php $resultado['img5'] = base64_encode($resultado['img5']); ?>
              <?php echo "<img src='data:{$resultado['mime1']};base64,{$resultado['img1']}' alt='No se encuentra imagen' class='img-fluid'>" ?>
              <?php echo "<img src='data:{$resultado['mime2']};base64,{$resultado['img2']}' alt='No se encuentra imagen' class='img-fluid'>" ?>
              <?php echo "<img src='data:{$resultado['mime3']};base64,{$resultado['img3']}' alt='No se encuentra imagen' class='img-fluid'>" ?>
              <?php echo "<img src='data:{$resultado['mime4']};base64,{$resultado['img4']}' alt='No se encuentra imagen' class='img-fluid'>" ?>
              <?php echo "<img src='data:{$resultado['mime5']};base64,{$resultado['img5']}' alt='No se encuentra imagen' class='img-fluid'>" ?>
            </div>
            

            <div class="owl-custom-direction btnColor">
              <a href="#" class="custom-prev btnColor"><span class="icon-keyboard_arrow_left btnColor"></span></a>
              <a href="#" class="custom-next btnColor"><span class="icon-keyboard_arrow_right btnColor"></span></a>
            </div>

          </div>
        </div>
      </div>
    </div>



  <?php
include 'controllers/config.php';

$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$datosNosotros = "SELECT * FROM nosotros_publicitaria"; 



$consultaNosotros = $conexion->prepare($datosNosotros);
$consultaNosotros->execute();


$resultadoNosotros = $consultaNosotros->fetch(PDO::FETCH_ASSOC);


?>
    <br>
    <br>
    <br>
    <div class="site-section section-1  py-0 my-0">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-5 mr-auto"  data-aos="fade-up">

            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <h2 class="section-title" id="nosotros"><?php echo "{$resultadoNosotros['titulo']}"; ?></h2>
              <p> <?php echo "{$resultadoNosotros['descripcion']}"; ?>  </p>
            </div>

            
          </div>

          <div class="col-12 col-sm-12 col-md-12 col-lg-6"  data-aos="fade-up" data-aos-delay="100">
            <div class="image-absolute-box">
              <div class="box">
                <div class="icon-wrap"><span class="flaticon-vector"></span></div>
                <h3>Valores de nuestra empresa</h3>
                
                <p class="mb-0">--<a href="#" class="valores">Excelencia</a></p>
                <p class="mb-0">--<a href="#" class="valores">Calidad</a></p>
                <p class="mb-0">--<a href="#" class="valores">Honestidad</a></p>
                <p class="mb-0">--<a href="#" class="valores">Compromiso Social</a></p>
                
              </div>
              <?php $resultadoNosotros['img'] = base64_encode($resultadoNosotros['img']); ?>
              <?php echo "<img src='data:{$resultadoNosotros['mime']};base64,{$resultadoNosotros['img']}' alt='No se encuentra imagen' class='img-fluid'>" ?>
            </div>
          </div>
        </div>
      </div>

    </div>

    <?php
include 'controllers/config.php';

$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$datosCasos = "SELECT * FROM casos_publicitaria"; 



$consultaCasos = $conexion->prepare($datosCasos);
$consultaCasos->execute();


$resultadoCasos = $consultaCasos->fetch(PDO::FETCH_ASSOC);


?>


    



    <div class="site-section2 section-2  py-0 my-0" id="servicios" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-5">
            <h2 class="section-title"><?php echo "{$resultadoCasos['titulo']}"; ?></h2>
            <p> <?php echo "{$resultadoCasos['descripcion']}"; ?></p>
          </div>
        </div>

      </div>
        



      <div class="owl-carousel nonloop-block-13">

<a class="work-thumb" href="#" data-fancybox="gallery">
  <div class="work-text">
    <h3><?php echo "{$resultadoCasos['titulo1']}"; ?></h3>
    <span class="category"><?php echo "{$resultadoCasos['encabezado1']}"; ?></span>
  </div>
  <?php $resultadoCasos['img1'] = base64_encode($resultadoCasos['img1']); ?>
  <?php echo "<img width=337.25px heigth=337.25px src='data:{$resultadoCasos['mime1']};base64,{$resultadoCasos['img1']}' alt='No se encuentra imagen' class='img-fluid'>"; ?>
</a> 

<a class="work-thumb" href="#">
  <div class="work-text">
    <h3><?php echo "{$resultadoCasos['titulo2']}"; ?></h3>
    <span class="category"><?php echo "{$resultadoCasos['encabezado1']}"; ?></span>
  </div>
  <?php $resultadoCasos['img2'] = base64_encode($resultadoCasos['img2']); ?>
  <?php echo "<img width=337.25px heigth=337.25px src='data:{$resultadoCasos['mime2']};base64,{$resultadoCasos['img2']}' alt='No se encuentra imagen' class='img-fluid'>"; ?>
</a>

<a class="work-thumb" href="#">
  <div class="work-text">
    <h3><?php echo "{$resultadoCasos['titulo3']}"; ?></h3>
    <span class="category"><?php echo "{$resultadoCasos['encabezado3']}"; ?></span>
  </div>
  <?php $resultadoCasos['img3'] = base64_encode($resultadoCasos['img3']); ?>
  <?php echo "<img width=337.25px heigth=337.25px src='data:{$resultadoCasos['mime3']};base64,{$resultadoCasos['img3']}' alt='No se encuentra imagen' class='img-fluid'>"; ?>
</a>

<a  class="work-thumb" href="#">
  <div class="work-text">
    <h3><?php echo "{$resultadoCasos['titulo4']}"; ?></h3>
    <span class="category"><?php echo "{$resultadoCasos['encabezado4']}"; ?></span>
  </div>
  <?php $resultadoCasos['img4'] = base64_encode($resultadoCasos['img4']); ?>
  <?php echo "<img width=337.25px heigth=337.25px src='data:{$resultadoCasos['mime4']};base64,{$resultadoCasos['img4']}' alt='No se encuentra imagen' class='img-fluid'>"; ?>
</a>

<a class="work-thumb" href="#">
  <div class="work-text">
    <h3><?php echo "{$resultadoCasos['titulo5']}"; ?></h3>
    <span class="category"><?php echo "{$resultadoCasos['encabezado5']}"; ?></span>
  </div>
  <?php $resultadoCasos['img5'] = base64_encode($resultadoCasos['img5']); ?>
  <?php echo "<img width=337.25px heigth=337.25px src='data:{$resultadoCasos['mime5']};base64,{$resultadoCasos['img5']}' alt='No se encuentra imagen' class='img-fluid'>"; ?>
</a>

<a class="work-thumb" href="#">
  <div class="work-text">
    <h3><?php echo "{$resultadoCasos['titulo6']}"; ?> </h3>
    <span class="category"><?php echo "{$resultadoCasos['encabezado6']}"; ?></span>
  </div>
  <?php $resultadoCasos['img6'] = base64_encode($resultadoCasos['img6']); ?>
  <?php echo "<img width=337.25px heigth=337.25px src='data:{$resultadoCasos['mime6']};base64,{$resultadoCasos['img6']}' alt='No se encuentra imagen' class='img-fluid'>"; ?>
</a>

<a class="work-thumb" href="#">
  <div class="work-text">
    <h3><?php echo "{$resultadoCasos['titulo7']}"; ?> </h3>
    <span class="category"><?php echo "{$resultadoCasos['encabezado7']}"; ?></span>
  </div>
  <?php $resultadoCasos['img7'] = base64_encode($resultadoCasos['img7']); ?>
  <?php echo "<img width=337.25px heigth=337.25px src='data:{$resultadoCasos['mime7']};base64,{$resultadoCasos['img7']}' alt='No se encuentra imagen' class='img-fluid'>"; ?>
</a>
<a class="work-thumb" href="#">
  <div class="work-text">
    <h3><?php echo "{$resultadoCasos['titulo8']}"; ?> </h3>
    <span class="category"><?php echo "{$resultadoCasos['encabezado8']}"; ?></span>
  </div>
  <?php $resultadoCasos['img8'] = base64_encode($resultadoCasos['img8']); ?>
  <?php echo "<img width=337.25px heigth=337.25px src='data:{$resultadoCasos['mime8']};base64,{$resultadoCasos['img8']}' alt='No se encuentra imagen' class='img-fluid'>"; ?>
</a>

</div>
    </div>





   
    <!-- Inicio del formulario del contacto -->

    <?php
include 'controllers/config.php';

$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$datosEmpresa = "SELECT * FROM datos_publicitaria"; 



$consultaEmpresa = $conexion->prepare($datosEmpresa);
$consultaEmpresa->execute();


$resultadoEmpresa = $consultaEmpresa->fetch(PDO::FETCH_ASSOC);


?>

     <!-- Seccion de formulario de contacto -->
     
     <!-- Seccion de formulario de contacto -->
     <section class="m-3">
      <div class="container py-0 my-0">
          <div class="row">
              <!-- Datos de la empresa  -->
           
                          <div class="col-12 col-md-6 col-lg-6 mt-5 md-5 text-center">
                              <div class="my-5 iconos_datos">
                                  <i class="fa fa-phone fa-3x"></i>
                                  <h3 class="py-3">Teléfono</h3>
                                  <p><?php echo "{$resultadoEmpresa['telefono']}"; ?> </p>
                              </div>
                              <div class="my-5  iconos_datos">
                                  <i class="fa fa-compass fa-3x"></i>
                                  <h3 class="py-3">Dirección</h3>
                                  <p><?php echo "{$resultadoEmpresa['direccion']}"; ?></p>
                              </div>
                              <div class="my-5  iconos_datos">
                                  <i class="fa fa-at fa-3x"></i>
                                  <h3 class="py-3">Correo Electrónico</h3>
                                  <p><?php echo "{$resultadoEmpresa['correo_ele']}"; ?></p>
                              </div>
                              <div class="my-5  iconos_datos">
                                  <i class="fa fa-envelope fa-3x"></i>
                                  <h3 class="py-3">Código postal</h3>
                                  <p><?php echo "{$resultadoEmpresa['cp']}"; ?></p>
                              </div>
                          </div>
              <!-- Formulario de la empresa -->
              <div class="col-12 col-md-6 col-lg-6" id="formulario">
                  <div class="container-contact100">
                      <div class="wrap-contact100">
                          <div class="contact100-form-title imgTituloContacto">
                              <span>Contáctanos</span>
                          </div>
              
                          <form class="contact100-form validate-form" action="controllers/contacto.php" method="POST" >
                              <div class="wrap-input100 validate-input">
                                  <input id="name" class="input100" type="text" name="nombre" placeholder="Nombre completo">
                                  <span class="focus-input100"></span>
                                  <label class="label-input100" for="name">
                                      <span class="lnr lnr-user m-b-2"></span>
                                  </label>
                              </div>
              
                              <div class="wrap-input100 validate-input">
                                  <input id="phone" class="input100" type="text" name="telefono" placeholder="Ej. 618 123 45 67">
                                  <span class="focus-input100"></span>
                                  <label class="label-input100" for="phone">
                                      <span class="lnr lnr-smartphone m-b-2"></span>
                                  </label>
                              </div>
              
                              <div class="wrap-input100 validate-input">
                                  <input id="email" class="input100" type="text" name="correo" placeholder="ejemplo@email.com">
                                  <span class="focus-input100"></span>
                                  <label class="label-input100" for="email">
                                      <span class="lnr lnr-envelope m-b-5"></span>
                                  </label>
                              </div>
                              
                              <div class="wrap-input100 validate-input">
                                  <textarea id="message" class="input100" name="mensaje" placeholder="Comentario o Sugerencia"></textarea>
                                  <span class="focus-input100"></span>
                                  <label class="label-input100 rs1" for="message">
                                      <span class="lnr lnr-bubble"></span>
                                  </label>
                              </div>
              
                              <div class="container-contact100-form-btn">
                                  <button class="contact100-form-btn" type="submit" onclick="camposCompletos();">
                                    Enviar consulta
                                  </button>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  
  <!-- Seccion de footer  --> 
  <footer class="page-footer pt-1 footerPublicitaria mh-100">
      <div class="container-fluid text-center text-md-left">
          <div class="row">
              <div class="col-12 col-md-2 col-lg-2 text-center py-4 iconos estiloLetra">
                  <p id="p1">Redes Sociales</p>
                  <i class="fa fa-youtube fa-1x" aria-hidden="true"></i>
                  <i class="fa fa-facebook-square fa-1x" aria-hidden="true"></i>
                  <i class="fa fa-tumblr-square fa-1x" aria-hidden="true"></i>
              </div>
              <div class="col-12 col-md-8 col-lg-8 py-3 iconos">
                  <center><p id="p1">Teléfono y Correo electrónico</p></center>
                  <p class="text-center font-weight-bold" id="p1"><?php echo "{$resultadoEmpresa['telefono']}"; ?></p>
                  <p class="text-center font-weight-bold" id="p1"><?php echo "{$resultadoEmpresa['correo_ele']}"; ?></p>
              </div>
              <button class="col-12 col-md-2 col-lg-2 text-center py-4 iconos estiloLetra" data-toggle="modal" data-target="#modalTransferencia">
                  <p id="p1">Formas de pago</p>
                  <i class="fa fa-credit-card fa-1x" aria-hidden="true"></i>
                  <i class="fa fa-paypal fa-1x" aria-hidden="true"></i>
                  <i class="fa fa-cc-stripe fa-1x" aria-hidden="true"></i>
                  <i class="fa fa-cc-mastercard fa-1x" aria-hidden="true"></i>
              </button>
              <!-- Modal de la transferencia bancaria -->

              <div class="modal fade right" id="modalTransferencia" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
                <div class="modal-dialog modal-full-height modal-right modal-notify modal-info" role="document">
                  <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header w-100 mx-0 HeaderTransferencia row">
                      <div class="col-10 col-md-11 col-lg-11 pt-3 heading lead">
                      <p class="text-left font-weight-bold fuenteTransferencia">
                        Datos de transferencia bancaria
                      </p>
                      </div>
                      <div class="col-1 col-md-1 col-lg-1">
                      <span class="text-right" style="cursor: pointer;" data-dismiss="modal"><i class="fa fa-times"></i></span>
                      </div>
                    </div>

                    <!--Body-->
                    <div class="modal-body">
                      <div class="text-center">
                        <i class="fa fa-credit-card fa-4x mb-3" aria-hidden="true"></i>
                        <p>
                          <strong>Con estos datos debes presentarte si deseas pagar con transferencia bancaria.</strong>
                        </p>
                      </div>

                      <hr>

                      <!-- Lista -->
                      <ul class="text-left check_list">
                        <li class="fuenteTransferencia">Integral Tech</li>
                        <li class="fuenteTransferencia">Cuenta: 1234567890 </li>
                        <li class="fuenteTransferencia">Santander</li>
                        <li class="fuenteTransferencia">CLABE: 123456789123456789</li>
                        <li class="fuenteTransferencia">Beneficiario</li>
                        <li class="fuenteTransferencia">Concepto de pago</li>
                      </ul>
                      <!-- Lista -->
                      <!-- footer -->
                      <div class="modal-footer justify-content-center">
                        <p class="text-center">
                          <strong>Para aclaraciones con el departamento de ventas</strong>
                        </p>
                      </div>
                      <p class="text-center">
                        <a type="button" class="btn btn-primary waves-effect waves-light btn-lg btnCerrarTransferencia" data-dismiss="modal">Cerrar
                        </a>
                      </p>
                      <!-- footer fin -->
                    </div>
                  </div>
                </div>
              </div>

              <!-- Fin Modal de la transferencia bancaria -->
          </div>
      </div>
  </footer>


  <a class="whats" target="_blank" href="https://api.whatsapp.com/send?phone=+526181667605&text=Buen dia!&nbsp;podria&nbsp;ayudarme&nbsp;porfavor?">
    Contáctanos!!!
    <img src="images/what.png" alt="whatsapp">
</a>



































  <!-- Javascript -->
  <!-- Seccion de javascript de bootstrap -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- seccion de javascript importadas de plantillas -->
  <!-- plantillas de contacto -->

  
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendor/animsition/js/animsition.min.js"></script>
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendor/select2/select2.min.js"></script>
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
  <script src="vendor/countdowntime/countdowntime.js"></script>
  

  <!-- Javascript propio -->
  <script src="js/main.js"></script>



<script type="text/javascript">
 function camposCompletos(){
   let nombre = document.getElementById("name").value;
   let telefono = document.getElementById("phone").value;
   let correo = document.getElementById("email").value;
   let mensaje = document.getElementById("message").value;

   if(!nombre || !telefono || !correo || !mensaje){
      alert('Llena los campos..');
   } else {
      alert('Gracias por enviarnos sus comentarios..');
   }
 }

function myFunction1() {
  window.open("http://copiadorasdurango.siadurangomex.com/tienda.php",'_self');
}

function myFunction2() {
  window.open("http://copiadorasdurango.siadurangomex.com/views/login.php",'_self');
}
</script>  
















  <!-- librerias Pagina Publicitaria -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/main.js"></script>
    
  
  </body>
</html>