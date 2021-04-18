<!DOCTYPE html>
<html lang="en">

<?php  session_start();  ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>error 404</title>
</head>
<body>
    <h2>Ocurrio un error y no preguntes que ni yo se...</h2>

    <?php if($_SESSION['tipoUsuario']=="admin"){ ?>
        <a href="../nuevoUsuario.php">Volver al anterior...</a>
    <?php } elseif($_SESSION['tipoUsuario']=="Almacen"){ ?>
        <a href="../almacen.php">Volver al anterior...</a>
    <?php }  elseif($_SESSION['tipoUsuario']=="Provedor"){ ?>
        <a href="../provedor.php">Volver al anterior...</a>
    <?php }  elseif($_SESSION['tipoUsuario']=="Ventas"){ ?>
        <a href="../ventas.php">Volver al anterior...</a>
    <?php } elseif($_SESSION['tipoUsuario']=="Pagina publicitaria"){ ?>
        <a href="../paginaPublicitaria.php">Volver al anterior...</a>
    <?php }  elseif($_SESSION['tipoUsuario']=="cliente"){ ?>
        <a href="../../tienda.php">Volver al anterior...</a>
    <?php }  else {  ?>
        <a href="../../tienda.php">Volver al anterior...</a>
    <?php  }  ?>    

</body>
</html>

