<!DOCTYPE html>

<html lang="en">
<?php 

require 'controllers/config.php';

error_reporting(0);

session_start();
$id = $_SESSION['id'];
$usuario = $_SESSION['usuario'];
$tipoUsuario = $_SESSION['tipoUsuario'];

$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>

  <head>
    <title> Integral Tech Solution </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Muli:300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital@1&family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital@1&family=Ubuntu:ital,wght@1,300&family=Varela+Round&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@1,500&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Kodchasan:ital,wght@1,500&display=swap" rel="stylesheet"> 






    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <!-- Links de estilos de plantillas -->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
            <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
            <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
            <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
            <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
            <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
            <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

    <!-- Links de Plantilla de contacto -->
            
    <!--Links de css propios -->
        <link rel="stylesheet" type="text/css" href="css/estilosPaginaPublicitaria.css">
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/datosEmpresa.css">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
          <!-- final de links C -->

          <!-- inicio estilos de la tienda 2 -->
<!-- Site Icons -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap1.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="css/style1.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="css/responsive1.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/custom.css">


 <!-- fin estilos de la tienda 2 -->

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
	
   	<!-- links tienda -->

  </head>
   <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    
   
    
  	<!-- inicio de la tienda -->
    <body>



<!-- Start Main Top -->
<header class="main-header">
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
        <div class="container">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
                <a class="navbar-brand" href="index.php"><img src="images/logo_integral.jpg" class="logo" alt="" width="120" height="35"></a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="row">
            <div class="our-link right-phone-box" >
                <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">

                    <li class="nav-item active"><a class="nav-link" href="tienda.php">Galería</a></li>

                    <li  data-toggle="modal" data-target="#modalTransferencia" class="nav-item active"><a class="nav-link">Datos de Transferencia</a></li>

                    <li  class="nav-item active"><a class="nav-link" href="">+52 618 310 68 09</a></li>
                    
                    
                    
                    <?php if(!empty($_SESSION)) {   ?>
                    
                    
                  
                      <li  class="nav-item active" >
                        <a class="nav-link" href="#">Usuario: <?php echo "{$usuario}"; ?></a> 
                      </li>
                      <li  class="nav-item active" >
                        <a class="nav-link" href="views/perfilCliente.php">Actualizar datos</a>
                      </li>
                      <li  class="nav-item active" >
                        <a class="nav-link" href="controllers/salir.php">Cerrar sesión</a> 
                      </li>
                   
                    <?php } else{?>

                      <li  class="nav-item active"><a  class="nav-link"href="views/login.php">Iniciar sesión</a></li>

                    <?php } ?>
                </ul>
                </div>                  
        </div>
     </div>
                                    <!-- end col-3 -->
    </nav>
    <!-- End Navigation -->
</header>
<!-- End Main Top -->






<!-- Start Products  -->
<div class="products-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-all text-center">
                    <h1 id="titulo1">Copiadoras De Durango</h1>
                    <p>Nuestra línea de productos</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="special-menu text-center">
                    <div class="button-group filter-button-group">
                        <button data-filter=".top-featured">Impresoras y Multifuncionales</button>
                        <button data-filter=".best-seller">Laptops y PC's</button>
                        <button data-filter=".best-moni">Monitores y tv's</button>
                        <button data-filter=".best-consu">Consumibles</button>
                        <button data-filter=".best-access">Accesorios</button>
                    </div>
                </div>
            </div>
        </div>
<!-- 1 -->
<script>
    function renta(id){
        alert(id);
        document.getElementById("seleccion_pro").value=id;
    }
</script>
<?php
include 'controllers/config.php';
try {
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $cont=1;
    $sql = 'SELECT id, link, nombre, categoria FROM img_productos ORDER BY id';
    foreach ($conexion->query($sql) as $row) {
            
        if($cont==1){ 
          
            echo "<div class=\"row special-list\">";

            echo "<div class=\"col-lg-3 col-md-6 special-grid ".$row['categoria']."\">";
            echo    "<div class=\"products-single fix\">";
            echo        "<div class=\"box-img-hover\">";
            echo            "<div class=\"type-lb\">";
            echo            "<a id=\"venta1\" onclick=\"aviso();\" class=\"card\" data-toggle=\"modal\"  href=\"#modalCompra1\">Venta</a>";
            echo            "</div>";
            echo            "<img height=\"255px\" src=\"".$row['link']."\" class=\"img-fluid\" alt=\"Image\">";
            echo            "<div  class=\"mask-icon\">";
                            
            echo            "<a class=\"cart\" onclick=\"aviso();\" data-toggle=\"modal\" href=\"#modalRenta1\">Renta</a>";
            echo            "</div>";
            echo        "</div>";
            echo        "<div class=\"why-text\">";
            echo            "<h4>".$row['nombre']."</h4>";
                        
            echo        "</div>";
            echo    "</div>";
            echo "</div>";
            $cont+=1;
        } elseif($cont>1 && $cont<4){
            echo "<div class=\"col-lg-3 col-md-6 special-grid ".$row['categoria']."\">";
            echo    "<div class=\"products-single fix\">";
            echo        "<div class=\"box-img-hover\">";
            echo            "<div class=\"type-lb\">";
            echo            "<a id=\"venta1\" onclick=\"aviso();\" class=\"card\" data-toggle=\"modal\"  href=\"#modalCompra1\">Venta</a>";
            echo            "</div>";
            echo            "<img height=\"255px\" src=\"".$row['link']."\" class=\"img-fluid\" alt=\"Image\">";
            echo            "<div class=\"mask-icon\">";
                            
            echo            "<a class=\"cart\" onclick=\"aviso();\" data-toggle=\"modal\" href=\"#modalRenta1\">Renta</a>";
            echo            "</div>";
            echo        "</div>";
            echo        "<div class=\"why-text\">";
            echo            "<h4>".$row['nombre']."</h4>";
                        
            echo        "</div>";
            echo    "</div>";
            echo "</div>";
            $cont+=1;
        } elseif($cont==4){
            echo "<div class=\"col-lg-3 col-md-6 special-grid ".$row['categoria']."\">";
            echo    "<div class=\"products-single fix\">";
            echo        "<div class=\"box-img-hover\">";
            echo            "<div class=\"type-lb\">";
            echo            "<a id=\"venta1\" onclick=\"aviso();\" class=\"card\" data-toggle=\"modal\"  href=\"#modalCompra1\">Venta</a>";
            echo            "</div>";
            echo            "<img height=\"255px\" src=\"".$row['link']."\" class=\"img-fluid\" alt=\"Image\">";
            echo            "<div class=\"mask-icon\">";
                            
            echo            "<a class=\"cart\" onclick=\"aviso();\" data-toggle=\"modal\" href=\"#modalRenta1\">Renta</a>";
            echo            "</div>";
            echo        "</div>";
            echo        "<div class=\"why-text\">";
            echo            "<h4>".$row['nombre']."</h4>";
                        
            echo        "</div>";
            echo    "</div>";
            echo "</div>";
            echo "</div>";
            $cont=1;
        }
    }
    if($cont>1){
        echo "</div>";
    }
}
catch (PDOException $e) {

    die($e->getMessage());
}
?>
    
          
</div>

<!--fin monitores-->

            </div>
    </div>
  </body>
<!-- End Products  -->

    <?php
        $img="images/todo1.png";
    ?>
  

  
</script>

<!-- Start Blog  -->
<div class="latest-blog">
    <div class="container">
        
            <div class="col-lg-12">
                <div class="title-all text-center">
                    <h1 id="titulo2">La mejor opción para impresoras, cómputo y mucho más</h1>
                    <p>Para más información consulta con nuestro departamento de ventas.</p> 
                </div>
            </div>
         </div>
    </div>
        <!-- End Blog  -->
 <!-- fin de la tienda -->


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
              
                          <form class="contact100-form validate-form" action="controllers/contacto.php" method="POST">
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
                                  <input class="contact100-form-btn" type="submit" onclick="camposCompletos();">
                                      
                                  </input>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  



 <!-- inico footer-->
 <footer class="page-footer pt-1 footerPublicitaria">
    <div class="container-fluid text-center text-md-left">
        <div class="row">
        <div class="col-12 col-md-2 col-lg-2 text-center py-4 iconos estiloLetra">
                <p id="p1">Redes Sociales</p>
                <i class="fab fa-youtube" aria-hidden="true"></i>
                <i class="fab fa-facebook" aria-hidden="true"></i>
                <i class="fab fa-twitter" aria-hidden="true"></i>
            </div>
            <div class="col-12 col-md-8 col-lg-8 py-3 iconos">
                <center><p id="p1">Teléfono y Correo electrónico</p></center>
                <p class="text-center font-weight-bold" id="p1">618 310 68 09</p>
                <p class="text-center font-weight-bold" id="p1">CopiadorasDurango@gmail.com</p>
            </div>
            <button class="col-12 col-md-2 col-lg-2 text-center py-4 iconos estiloLetra" data-toggle="modal" data-target="#modalTransferencia">
            <p id="p1">Formas de pago</p>
                <i class="fa fa-credit-card fa-1x" aria-hidden="true"></i>
                <i class="fab fa-paypal" aria-hidden="true"></i>
                <i class="fab fa-cc-stripe" aria-hidden="true"></i>
                <i class="fab fa-cc-mastercard" aria-hidden="true"></i>
            </button>
            <!-- Modal de la transferencia bancaria -->

            <div class="modal fade right" id="modalTransferencia" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
                <div class="modal-dialog modal-full-height modal-right modal-notify modal-info" role="document">
                  <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header w-100 HeaderTransferencia">
                      <p class="heading lead mx-auto py-auto text-center font-weight-bold fuenteTransferencia">
                        Datos de transferencia bancaria <span class="ml-5" style="cursor: pointer;" data-dismiss="modal">X</span>
                      </p>
                    </div>

                    <!--Body-->
                    <div class="modal-body">
                      <div class="text-center">
                        <i class="fa fa-credit-card fa-4x mb-3" aria-hidden="true"></i>
                        <p>
                          <strong>Para hacer cualquier pago contamos con estos datos para hacer tu transferencia bancaria </strong>
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
                          <strong>Para aclaraciones acudir con el departamento de ventas</strong>
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


<!-- Modal: inicio modal renta producto 1 -->
<div class="modal fade" id="modalRenta1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-5">
            <!--Carousel Wrapper-->
            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails"
              data-ride="carousel">
              <!--Slides-->
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <img class="d-block w-100"
                    src="<?php echo $img ?>"
                 alt="First slide">
                </div>              
              </div> 
              <h3>Elija el Tipo de Producto a Rentar</h3>
                <form action="admin/pedidoImpresora.php" method="POST">
                  <select class="form-control" id="productoRenta" name="seleccion_pro">
                    <option value="Equipo de Impresión y Multifuncionales" selected>Equipo de Impresión y Multifuncionales</option>
                    <option value="Equipos de Cómputo">Equipos de Cómputo</option>
                    <option value="Monitores y TVs">Monitores y TVs</option>
                   

                  </select> 
                        
            </div>
          </div>
          
          <div class="col-lg-7">
            
            <h2 class="h2-responsive product-name">
              <strong>
              <div id="rentapro1">Renta de productos</div>
            </strong>

            </h2>
            
            <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
               <div class="card">
                <div class="card-header" role="tab" id="headingOne1">
                  <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                    aria-controls="collapseOne1">
                    <h5 class="mb-0">
                    Ofrecemos <i class="fa fa-angle-right rotate-icon"></i>
                    </h5>
                  </a>
                </div>
                <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                  data-parent="#accordionEx">
                  <div class="card-body">
                  Productos de alta calidad, entre los cuales tenemos impresoras, accesorios para computadoras, consumibles 
                  y mucho más. 
                  </div>
                </div>
              </div>
              <div class="card">
                
                <!-- Card header -->

                <div class="card-header" role="tab" id="headingTwo2">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
                    aria-expanded="false" aria-controls="collapseTwo2">
                    <h5 class="mb-0">
                      Caracteristicas <i class="fa fa-angle-right rotate-icon"></i>
                    </h5>
                  </a>
                </div>
                <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
                  data-parent="#accordionEx">
                  <div class="card-body">
                  <div class="card-body">  <!-- Aqui empieza cuerpo de la carta -->
                    <div class="row">
                      <div class="col-12">
                      <textarea class="form-control" name="exampleFormControlTextarea1" id="caracteristicasRenta" rows="3" placeholder="Si tienes algun requerimiento especifico o conoces las caracteristicas tecnicas del equipo que necestias, escribelo aqui." required></textarea>
                      </div> 
                    </div>
                    </div> <!-- Aqui empieza cuerpo de la carta -->
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" role="tab" id="headingThree3">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
                    aria-expanded="false" aria-controls="collapseThree3">
                    <h5 class="mb-0">
                      Dirección adicional <i class="fa fa-angle-right rotate-icon"></i>
                    </h5>
                  </a>
                </div>
                <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3" data-parent="#accordionEx">
                  <div class="card-body">
                  <div class="row">
                      <div class="col-12 form-group">
                          <textarea class="form-control" name="exampleFormControlTextarea2" id="exampleFormControlTextarea2" rows="3" placeholder="Dirección alterna en la que se va a entregar el producto(s)"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <form action="admin/pedidoImpresora.php" method="POST">
                <!-- Card header -->

                <div class="card-header" role="tab" id="headingFour4">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseFour4"
                    aria-expanded="false" aria-controls="collapseFour4">
                    <h5 class="mb-0">
                      Contamos con estas mensualidades <i class="fa fa-angle-right rotate-icon"></i>
                    </h5>
                  </a>
                </div>
                <div id="collapseFour4" class="collapse" role="tabpanel" aria-labelledby="headingFour4"
                  data-parent="#accordionEx">
                  <div class="card-body">
                  <div class="card-body">  <!-- Aqui empieza cuerpo de la carta -->
                    <div class="row">
                      <div class="col-12">
                      <select class="form-control" name="exampleFormControlTextarea5" id="mensualidadesRenta" required>
                        <option value="3" selected>3</option>
                        <option value="6">6</option>
                        <option value="12">12</option>
                        <option value="24">24</option>
                        <option value="36">36</option>
                      </select>
                      <!-- <textarea class="form-control" name="exampleFormControlTextarea5" id="exampleFormControlTextarea5" rows="3" placeholder="Por favor introduzca la cantidad de meses a rentar el producto."></textarea> -->
                      </div> 
                    </div>
                    </div> <!-- Aqui empieza cuerpo de la carta -->
                  </div>
                </div>


                
              </div>
            </div>
            <div class="card-body">
              <div class="text-center">
              <?php if(!empty($_SESSION)) {  ?>
                <button type="submit" class="btn btn-success" onclick="camposCompletosRenta();">Enviar</button>
              <?php  }  else {  ?>
                <div class="bg-info text-black">Necesita iniciar sesion o registrarse para poder pedir cotizaciones, si no desea registrarse llame al 618-166-76-05 en horarios de oficina de 8am a 5pm.</div>
              <?php } ?>  
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </form> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal: inicio modal de compra del producto 1 -->
<div class="modal fade" id="modalCompra1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-5">
            <!--Carousel Wrapper-->
            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails"
              data-ride="carousel">
              <!--Slides-->
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <img class="d-block w-100"
                  src="<?php echo $img ?>"
                  alt="First slide">
                </div>              
              </div> 
                  
              <h3>Elija el Tipo de Producto a Comprar</h3>
                <form action="admin/pedidoImpresora2.php" method="POST">
                  <select class="form-control" id="productoCompra" name="seleccion_pro">
                    <option value="Equipo de Impresión y Multifuncionales" selected>Equipo de Impresión y Multifuncionales</option>
                    <option value="Equipos de Cómputo">Equipos de Cómputo</option>
                    <option value="Monitores y TVs">Monitores y TVs</option>
                    <option value="Consumibles">Consumibles</option>
                    <option value="Accesorios">Accesorios</option>

                  </select> 
                     
            </div>
          </div>
          <div class="col-lg-7">
            <h2 class="h2-responsive product-name">
              <strong>Compra de productos</strong>
            </h2>
            <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
               <div class="card">
                <div class="card-header" role="tab" id="headingOne1">
                  <a data-toggle="collapse" data-parent="#accordionEx" href="#modalCompra1" aria-expanded="true"
                    aria-controls="modalCompra1">
                    <h5 class="mb-0">
                    Ofrecemos <i class="fa fa-angle-right rotate-icon"></i>
                    </h5>
                  </a>
                </div>
                <div id="modalCompra1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                  data-parent="#accordionEx">
                  <div class="card-body">
                  Productos de alta calidad, entre los cuales tenemos impresoras, accesorios para computadoras, consumibles 
                  y mucho más.                   </div>
                </div>
              </div>
              <div class="card">
                <form action="admin/pedidoImpresora2.php" method="POST">
                <!-- Card header -->
                <div class="card-header" role="tab" id="modalCompra11">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#caracteristicas1"
                    aria-expanded="false" aria-controls="caracteristicas1">
                    <h5 class="mb-0">
                      ¿Qué caracteristicas necesitas? <i class="fa fa-angle-right rotate-icon"></i>
                    </h5>
                  </a>
                </div>
                <div id="caracteristicas1" class="collapse" role="tabpanel" aria-labelledby="modalCompra11"
                  data-parent="#accordionEx">
                  <div class="card-body">
                  <div class="card-body">  <!-- Aqui empieza cuerpo de la carta -->
                    <div class="row">
                      <div class="col-12">
                      <textarea class="form-control" name="exampleFormControlTextarea3" id="caracteristicasVenta" rows="3" pattern="[0-9A-Za-z\s\.\-\ñ]+" placeholder="Si tienes algun requerimiento especifico o conoces las caracteristicas tecnicas del equipo que necesitas, escribelo aqui." required></textarea>
                      </div> 
                    </div>
                    </div> <!-- Aqui empieza cuerpo de la carta -->
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" role="tab" id="direccion1">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#direccion11"
                    aria-expanded="false" aria-controls="direccion11">
                    <h5 class="mb-0">
                      Dirección adicional de entrega(opcional) <i class="fa fa-angle-right rotate-icon"></i>
                    </h5>
                  </a>
                </div>
                <div id="direccion11" class="collapse" role="tabpanel" aria-labelledby="direccion1" data-parent="#accordionEx">
                  <div class="card-body">
                  <div class="row">
                      <div class="col-12 form-group">
                          <textarea class="form-control" name="exampleFormControlTextarea4" id="" pattern="[0-9A-Za-z\s\.\-\ñ]+" rows="3" placeholder="Dirección alterna en la que se va a entregar el producto(s)"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="text-center">
              <?php if(!empty($_SESSION)) {  ?>
                <button type="submit" class="btn btn-success" onclick="camposCompletosVenta();">Enviar</button>
              <?php  }  else {  ?>
                <div class="bg-info text-black">Necesita iniciar sesion o registrarse para poder pedir cotizaciones, si no desea registrarse llame al 618-166-76-05 en horarios de oficina de 8am a 5pm.</div>
              <?php } ?>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </form> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<a class="whats" target="_blank" href="https://api.whatsapp.com/send?phone=+526181667605&text=Hola!&nbsp;en&nbsp;que&nbsp;le&nbsp;podemos&nbsp;ayudar?">
    Contactanos!!!
    <img src="images/what.png" alt="whatsapp">
</a>

</body>
</html>






<!-- Terminacion del primer producto con su formulario de renta y compra -->


 <!-- Javascript -->
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- seccion de javascript importadas de plantillas -->
  <!-- Seccion de javascript de bootstrap -->
  
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

 function camposCompletosVenta(){
   let producto = document.getElementById("productoVenta").value;
   let caracteristicas = document.getElementById("caracteristicasVenta").value;

   if(!producto || !caracteristicas){
      alert('Llena los campos..');
   } else {
      alert('Recibira un correo con la propuesta de producto y una llamada para su confirmacion...');
   }
 }
 function camposCompletosRenta(){
   let producto = document.getElementById("productoRenta").value;
   let caracteristicas = document.getElementById("caracteristicasRenta").value;
   let mensualidades = document.getElementById("mensualidadesRenta").value;


   if(!producto || !caracteristicas || !mensualidades){
      alert('Llena los campos..');
   } else {
      alert('Recibira un correo con la propuesta de producto y una llamada para su confirmacion...');
   }
 }

function aviso(){
  alert('Necesita iniciar sesion o registrarse para poder pedir cotizaciones, si no desea registrarse llame al 618-166-76-05 en horarios de oficina de 8am a 5pm.');
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

  <script src="js/jquery-3.2.1.js"></script>
    <script src="js/script.js"></script>
    


    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>


        <!-- ALL JS FILES -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- ALL PLUGINS -->
        <script src="js/jquery.superslides.min.js"></script>
        <script src="js/bootstrap-select.js"></script>
        <script src="js/inewsticker.js"></script>
        <script src="js/bootsnav.js."></script>
        <script src="js/images-loded.min.js"></script>
        <script src="js/isotope.min.js"></script>
        <script src="js/owl.carousel1.min.js"></script>
        <script src="js/baguetteBox.min.js"></script>
        <script src="js/form-validator.min.js"></script>
        <script src="js/contact-form-script.js"></script>
        <script src="js/custom.js"></script>