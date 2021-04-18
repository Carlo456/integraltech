<!DOCTYPE html>
<?php

session_start();
$usuario = $_SESSION['usuario'];
$tipoUsuario = $_SESSION['tipoUsuario'];


if (!isset($usuario)) {
    header('Location: ../views/login.php');
    
} elseif ($tipoUsuario == 'Ventas' || $tipoUsuario == 'admin' || $tipoUsuario == 'Almacen' ) {

    include '../controllers/config.php';
        
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $datosLogin = "SELECT * FROM productos";
        
        $consultaUser = $conexion->prepare($datosLogin);
        $consultaUser->execute();
        
        
        $resultado = $consultaUser->fetchAll(PDO::FETCH_ASSOC);
    

?>
<html lang="es">
<?php include 'viewsAdmin/headAdmin.php'; ?>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="../css/estilos_buscador.css">

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="" id="background-head container-nuevo">
    <div class="wrapper">
    <?php include 'viewsAdmin/navbarAdmin.php'; ?>
    <?php include 'viewsAdmin/asideDepartamentos.php'; ?>
        <div class="content-wrapper">
        <?php include 'viewsAdmin/headerAdmin.php' ?>
        <!-- Contendido de toda la pagina formularios y demas -->
       
        
        
        <!-- Contendido de toda la pagina formularios y demas -->
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">Búsqueda de Productos </h3>
            <a href="controllersAlmacen/generarExcel.php" style="margin-left: 85%;">Generar Excel</a>
            </div>

        <!-- Contendido de toda la pagina formularios y demas -->

        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar por nombre del producto">

        <table id="myTable">
                <tr class="header">
                <th style="width: 1% " class="table-dark table-bordered table-hover">Id</th>
                <th style="width: 1% " class="table-dark table-bordered table-hover">Nombre</th>
                <th style="width: 1% " class="table-dark table-bordered table-hover">Marca</th>
                <th style="width: 1% " class="table-dark table-bordered table-hover">Categoría</th>
                <th style="width: 1% " class="table-dark table-bordered table-hover">Color</th>
                <th style="width: 1% " class="table-dark table-bordered table-hover">Proveedor</th>
                <th style="width: 1% " class="table-dark table-bordered table-hover">Especificaciones</th>
                <th style="width: 1% " class="table-dark table-bordered table-hover">Productos Total</th>
                <th style="width: 1% " class="table-dark table-bordered table-hover">Productos apartados</th>
                <th style="width: 1% " class="table-dark table-bordered table-hover">Productos dañados</th>
                <th style="width: 1% " class="table-dark table-bordered table-hover">Productos Disponibles</th>
                <th style="width: 1% " class="table-dark table-bordered table-hover">Acciones</th>


      <tbody>
              
              <?php foreach($resultado as $producto) {  ?>    
                                <tr>
                                  <td class="table-warning">
                                        <?php echo "{$producto['id']}"; ?> <!-- numero del producto -->
                                  </td>
                                  <td id="nombre" class="table-light" value="nombre"> 
                                        <?php echo "{$producto['nombre']}"; ?> <!-- Nombre del producto  -->
                                  </td>
                                  <td class="table-light">
                                  <small><strong>Marca:</strong>
                                        <?php echo "{$producto['marca']}"; ?> <!-- numero del producto -->
                                        </small>
                                        <small>
                                      <br><br>
                                      <strong>Modelo:</strong> <?php echo "{$producto['modelo']}"; ?> <!-- Fecha de peticion  -->
                                      </small>
                                      <small>
                                      <br><br>
                                      <strong>No. Serie:</strong> <?php echo "{$producto['n_serie']}"; ?> <!-- Fecha de peticion  -->
                                      </small>
                                  </td>
                                  <td class="table-light">
                                  <small><strong>Categoria:</strong>
                                        <?php echo "{$producto['tipo_equipo']}"; ?> <!-- numero del producto -->
                                        </small>
                                        <small>
                                      <br><br>
                                      <strong>Tamaño:</strong> <?php echo "{$producto['tamanio']}"; ?> <!-- Fecha de peticion  -->
                                      </small>
                                  </td>
                                  <td class="table-light">
                                  <small><strong>Color:</strong>
                                        <?php echo "{$producto['color']}"; ?> <!-- numero del producto -->
                                        </small>
                                        <small>
                                      <br><br>
                                      <strong>Color impresión:</strong> <?php echo "{$producto['color_impresion']}"; ?> <!-- Fecha de peticion  -->
                                      </small>
                                      <small>
                                      <br><br>
                                      <strong>Tipo de impresora:</strong> <?php echo "{$producto['tipo_impresora']}"; ?> <!-- Fecha de peticion  -->
                                      </small>
                                  </td>
                                  <td class="table-light">
                                  <small><strong>Proveedor:</strong>
                                        <?php echo "{$producto['proveedor']}"; ?> <!-- numero del producto -->
                                        </small>
                                        <small>
                                      <br><br>
                                      <strong>Fecha y hora:</strong> <?php echo "{$producto['fecha_recibido']}"; ?> <!-- Fecha de peticion  -->
                                      </small>
                                  </td>
                                  <td class="table-light">
                                  <small><strong>Procesador:</strong>
                                        <?php echo "{$producto['procesador']}"; ?> <!-- numero del producto -->
                                        </small>
                                        <small>
                                      <br>
                                      <strong>RAM:</strong> <?php echo "{$producto['ram']}"; ?> <!-- Fecha de peticion  -->
                                      </small>
                                      <small>
                                      <br>
                                      <strong>Almacenamiento:</strong> <?php echo "{$producto['almacenamiento']}"; ?> <!-- Fecha de peticion  -->
                                      </small>
                                      <small>
                                      <br>
                                      <strong>SSD:</strong> <?php echo "{$producto['SSD']}"; ?> <!-- Fecha de peticion  -->
                                      </small>
                                      <small>
                                      <br>
                                      <strong>Tarjeta grafica:</strong> <?php echo "{$producto['tarjeta_grafica']}"; ?> <!-- Fecha de peticion  -->
                                      </small>
                                      <small>
                                      <br><br>
                                      <strong>Monitor:</strong> <?php echo "{$producto['monitor']}"; ?> <!-- Fecha de peticion  -->
                                      </small>
                                  </td>
                                  <td>
                                  <small><strong>Productos total:</strong>
                                <?php echo "{$producto['cantidad']}"; ?> <!-- numero de la peticion -->
                                </small>
                                    </td>

                          <td>
                          <small><strong>Productos apartados:</strong>
                                <?php 
                                  $prodApartados = (int)$producto['cantidad_pend'];
                                  $prodDaniados=(int)$producto['cantidad_daniada'];
                                  $tempProd = $prodApartados + $prodDaniados;
                                
                                ?>
                                <span><?php  echo "{$prodApartados}"; ?></span>
                                <form action="controllersAlmacen/modificarStock.php" method="POST">
                                    <input type="hidden" name="id_producto" value="<?php echo "{$producto['id']}";?>">
                                    <?php $cant = (int)$producto['cantidad']; //(int)cast ** int_val($variable)?>
                                    <input class="w-100" type="number" name="stock_pendiente" min="0" max="<?php echo $cant-$tempProd;  ?>" placeholder="Pendientes">
                                    <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash">
                                    </i>
                                    Apartar
                                    </button>
                                </form>
                                </small>
                          </td>
                         <td>
                         <small><strong>Productos dañados:</strong>
                                <span class="text-center"><?php  echo "{$prodDaniados}"; ?></span>
                                <form action="controllersAlmacen/modificarStockdaniado.php" method="POST">
                                    <input  type="hidden" name="id_producto" value="<?php echo "{$producto['id']}";?>">
                                    <?php $cant = (int)$producto['cantidad']; //(int)cast ** int_val($variable)?>
                                    <input class="w-100" type="number" name="stock_daniada" min="0" max="<?php echo $cant-$tempProd;  ?>" placeholder="Dañados">
                                    <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash">
                                    </i>
                                    Dañados
                                    </button>
                                </form>
                                </small>   
                          </td>
                         
                          <td>
                          <small><strong>Productos Disponibles:</strong>
                                <?php 
                                    $stock = (int)$producto['cantidad'];
                                    $stockPendiente= (int)$producto['cantidad_pend'];
                                    $stockDaniado = (int)$producto['cantidad_daniada'];
                                    $stockFinal = $stock - ($stockPendiente+$stockDaniado);
                                    echo "$stockFinal";

                                ?>
                                </small>
                          </td>                        

                         
                    <?php if ($tipoUsuario != 'Ventas') {  ?>    
                          <td class="project-actions text-right" >
                
                              <a class="btn btn-info btn-sm" href="modificarProducto.php?modificarProducto=<?php echo "{$producto['id']}"; ?>">
                                  <i class="fas fa-pencil-alt">
                                  </i>
                                  Modificar
                              </a>
                            
                                <a class="btn btn-danger btn-sm" href="controllersAlmacen/borrarProductoControllers.php?noProducto=<?php echo "{$producto['id']}"; ?>">
                                  <i class="fas fa-trash">
                                  </i>
                                  Borrar
                                </a>
                            
                          </td>
                         
                      </tr>
                      <?php } ?>

                                  </tr >
                                  
                                 
                                    
                                  <!--<?php //if(categoria = laptops){} ?> -->
                                  <tr>
                                      
                                  


                                  

    
                                
                                  
                            
                              <?php  }  ?>    
                          </tbody>
            </tr>
</table>
  

   
        <script>
            function myFunction() {
                // Declare variables
                var td, a, tr, input, filter, table, tr, td, i, txtValue, small;
                    input = document.getElementById("myInput");
                    filter = input.value.toUpperCase();
                    table = document.getElementById("myTable");
                    tr = table.getElementsByTagName("tr");

                // Loop through all table rows, and hide those who don't match the search query
                    for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td")[1];
                    if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                    } else {
                    tr[i].style.display = "none";
                            }
                         }
                    }

                    for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("th")[0];
                    if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                    } else {
                    tr[i].style.display = "none";
                            }
                         }
                    }


                }                       
        </script>
            </div>
            





            </div>
  <!-- Fin de Contendido de toda la pagina formularios y demas -->

    </div>
    <?php include 'viewsAdmin/footerAdmin.php'; ?>
</div>
<?php include 'viewsAdmin/scriptsRequeridosAdmin.php'; ?>
</body>
<?php   }  else {  header('Location: viewsAdmin/error404.php'); } ?><!-- aqui termina lo que debe mostrar la pagina si esta logeado -->
