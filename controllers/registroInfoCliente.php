<?php 

session_start();

require 'config.php';

$rfc = $_POST['rfc'];
$nombres = $_POST['nombres'];
$apellidoPaterno = $_POST['ape1'];
$apellidoMaterno = $_POST['ape2'];
$calle = $_POST['calle'];
$colFrac = $_POST['col_frac'];
$numeroCasa = $_POST['numero_casa'];
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
    $conexion2 = null;
    header('Location: ../views/infoCliente.php?aviso="El correo ya existe"');
}


if(empty($resultadoCorreo)){
    try {
       

        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $datosCliente = "INSERT INTO clientes(id,rfc,nombres,ape1,ape2,calle,col_fracc,num_casa,estado,localidad,cp,telefono,correo_ele) VALUES (:id,:rfc,:nombres,:ape1,:ape2,:calle,:col_fracc,:num_casa,:estado,:localidad,:cp,:telefono,:correo_ele)";

        $consulta = $conexion->prepare($datosCliente);
    
        $consulta->bindParam(':id',$id);
        $consulta->bindParam(':rfc',$rfc);
        $consulta->bindParam(':nombres',$nombres);
        $consulta->bindParam(':ape1',$apellidoPaterno);
        $consulta->bindParam(':ape2',$apellidoMaterno);
        $consulta->bindParam(':calle',$calle);
        $consulta->bindParam(':col_fracc',$colFrac);
        $consulta->bindParam(':num_casa',$numeroCasa);
        $consulta->bindParam(':estado',$estado);
        $consulta->bindParam(':localidad',$localidad);
        $consulta->bindParam(':cp',$cp);
        $consulta->bindParam(':telefono',$telefono);
        $consulta->bindParam(':correo_ele',$correo);

        $consulta->execute();
    
    } catch (PDOException $e) {
        
        die($e->getMessage());
        
    }
    
    $conexion = null; 
    
    header('Location: ../tienda.php'); // pagina de gracias por registrarse con redireccion a tienda  o redireccion


} else { 
    header('Location: ../views/infoCliente.php?aviso="El correo ya existe"');
}


    

?>