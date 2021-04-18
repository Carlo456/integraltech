<?php

$usuario = $_SESSION['usuario'];
$tipoUsuario = $_SESSION['tipoUsuario'];

?>

<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <center><span class="brand-text font-weight-light"><?php echo "{$tipoUsuario}"; ?></span></center>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block"><?php echo "Hola {$usuario}"; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <?php  if($tipoUsuario == 'admin') {  ?>
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Administrador
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="nuevoUsuario.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nuevo Usuario</p></a>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview"> <!-- Talvez se quite  -->
              <li class="nav-item">
                <a href="nuevoProveedor.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nuevo Proveedor</p></a>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview"> <!-- Talvez se quite  -->
              <li class="nav-item">
                <a href="verProveedor.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Proveedores</p></a>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview"> <!-- Talvez se quite  -->
              <li class="nav-item">
                <a href="indexAdmin.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Usuarios</p></a>
                </a>
              </li>
            </ul>
          </li>
          <?php } ?> 
<!-- Se cambiara si al agregar un usuario de ser un proveedor te lleva al formulario de agregar el proveedor para ligar los datos  -->
          
<?php  if ($tipoUsuario == 'Almacen' || $tipoUsuario == 'admin') {  ?>
  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Almacen
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="almacen.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Productos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="agregarProducto.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Agregar producto</p>
                </a>
              </li>
            </ul>
          </li>
<?php } ?>
<?php  if ($tipoUsuario == 'Ventas' || $tipoUsuario == 'admin') {  ?>
  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Ventas 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="nuevoUsuario.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nuevo Usuario</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="ventas.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ventas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="rentas.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rentas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="almacen.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Productos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="contactoCliente.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mensajes</p>
                </a>
              </li>
            </ul>
          </li>

<?php } ?>
<?php  if ($tipoUsuario == 'Provedor' || $tipoUsuario == 'admin') {  ?>
  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Proveedor
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="provedor.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Productos</p>
                </a>
              </li>
            </ul>
          </li>
<?php } ?>
<?php  if($tipoUsuario == 'Pagina publicitaria' || $tipoUsuario == 'admin') {  ?>

  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Diseño pag. publicitaria
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="paginaPublicitaria.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cambiar diseño</p>
                </a>
              </li>
            </ul>
          </li>
<?php } ?>

          <li class="nav-item">
            <a href="../controllers/salir.php" class="nav-link">
                <i class="nav-icon far fa-circle text-danger"></i>
                <p class="text">Cerrar Sesion</p>  <!--  ///////////////////////////////////////////////////////////////////////////     -->
              </a>
          </li>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>