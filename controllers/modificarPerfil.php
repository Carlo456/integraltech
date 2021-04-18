<?php
include 'config.php';
session_start();



$rfc = $_POST['rfc'];
$nombres = $_POST['nombres'];
$apellidoPaterno = $_POST['ape1'];
$apellidoMaterno = $_POST['ape2'];
$calle = $_POST['calle'];
$colFrac = $_POST['col_fracc'];
$numeroCasa = $_POST['num_casa'];
$estado = $_POST['estado'];
$localidad = $_POST['localidad'];
$cp = $_POST['cp'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];

$id = $_SESSION['id'];

try {
    
    $conexion2 = new PDO($base, $usuario, $password);
    $conexion2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $correoExiste = "SELECT correo_ele from clientes WHERE correo_ele='{$correo}'";
    
    $consulta2 = $conexion2->prepare($correoExiste);
    $consulta2->execute();
    
    $resultadoCorreo = $consulta2->fetch();
    } catch (PDOException $e) {
        
        header('Location: ../views/perfilCliente.php?aviso="Hola"');
    }

    if(!$resultadoCorreo['correo_ele'] || $resultadoCorreo['correo_ele'] == $correo){

            try{
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $consulta = "UPDATE clientes SET rfc='{$rfc}',nombres='{$nombres}',ape1='{$apellidoPaterno}',ape2='{$apellidoMaterno}',calle='{$calle}',col_fracc='{$colFrac}',num_casa='{$numeroCasa}',estado='{$estado}',localidad='{$localidad}',cp='{$cp}',telefono='{$telefono}',correo_ele='{$correo}' WHERE id = {$id}"; 

            $actualizarCliente = $conexion->prepare($consulta);

            $actualizarCliente->execute();

            header('Location: ../tienda.php');

            $conexion = null;
            $conexion2 = null;
            } catch (PDOException $e) {
        
                header('Location: ../views/perfilCliente.php?aviso="El correo ya existe"');
            }
         
            

} else {

    header('Location: ../views/perfilCliente.php?aviso="El correo ya existe"');

}



?>