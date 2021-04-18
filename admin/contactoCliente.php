<!DOCTYPE html>
<?php

session_start();
$usuario = $_SESSION['usuario'];
$tipoUsuario = $_SESSION['tipoUsuario'];

if (!isset($usuario)) {
    header('Location: ../views/login.php');
} elseif ($tipoUsuario == 'Ventas' || $tipoUsuario == 'admin') {


include '../controllers/config.php';

$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$datosLogin = "SELECT * FROM formulario_contacto";

$consultaUser = $conexion->prepare($datosLogin);
$consultaUser->execute();


$resultado = $consultaUser->fetchAll(PDO::FETCH_ASSOC);

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
         
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Mensajes</h3>
            </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 20%">
                          Nombre
                      </th>
                      <th style="width: 20%">
                          Datos Contacto
                      </th>
                      <th>
                          Mensaje
                      </th>
                      <th style="width: 8%" class="text-center">
                          Status
                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody>
                    <?php foreach($resultado as $mensaje) {  ?>    
                    <tr>
                      <td>
                            <?php echo "{$mensaje['id']}"; ?> <!-- numero de la peticion -->
                      </td>
                      <td>
                          <a>
                            <?php echo "{$mensaje['nombre_com']}"; ?> <!-- Nombre de la persona  -->
                          </a>
                          <br/>
                          <small>
                              Creado <?php echo "{$mensaje['fecha_comentario']}"; ?> <!-- Fecha de peticion  -->
                          </small>
                      </td>
                      <td>
                            <small>
                            <?php echo "{$mensaje['correo_ele']}"; ?>    
                            <!-- correo  -->
                            </small><br>
                            <small>
                            <?php echo "{$mensaje['telefono']}"; ?>    
                            <!-- telefono  -->
                            </small>
                      </td>
                      <td class="project_progress">
                          <small>
                          <?php echo "{$mensaje['comentario']}"; ?> <!-- hola -->
                          </small>
                      </td>
                      <td class="project-state">
                      <select onchange="window.location=this.options[this.selectedIndex].value">
                            <option value="" selected="selected"><?php echo "{$mensaje['status_comentario']}"; ?></option>
                            <option value="controllersAdmin/actualizarEstadoComentarioController.php?status=Terminado&id_comentario=<?php echo $mensaje['id'];?>">Terminado</option>
                            <option value="controllersAdmin/actualizarEstadoComentarioController.php?status=En proceso&id_comentario=<?php echo $mensaje['id'];?>">En proceso</option>
                            <option value="controllersAdmin/actualizarEstadoComentarioController.php?status=Pendiente&id_comentario=<?php echo $mensaje['id'];?>">Pendiente</option>
                      </select>
                            <?php if ($mensaje['status_comentario']=='Terminado') { ?>
                              <span class="badge badge-success"><?php echo "{$mensaje['status_comentario']}"; ?></span>
                            <?php  }  ?>
                            <?php if ($mensaje['status_comentario']=='En proceso') { ?>
                              <span class="badge badge-warning"><?php echo "{$mensaje['status_comentario']}"; ?></span>
                            <?php  }  ?>
                            <?php if ($mensaje['status_comentario']=='Pendiente') { ?>
                              <span class="badge badge-danger"><?php echo "{$mensaje['status_comentario']}"; ?></span>  
                            <?php  }  ?>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-danger btn-sm" href="controllersAdmin/borrarComentarioController.php?noMensaje=<?php echo $mensaje['id'] ?>">
                              <i class="fas fa-trash">
                              </i>
                              Borrar
                        </a>
                      </td>
                  </tr>
                  <?php  }  ?>
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      
<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        </div>
        <?php include 'viewsAdmin/footerAdmin.php'; ?>
    </div>
    <?php include 'viewsAdmin/scriptsRequeridosAdmin.php'; ?>
</body>
<?php   }    ?><!-- aqui termina lo que debe mostrar la pagina si esta logeado -->
</html>