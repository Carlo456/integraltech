<?php 
session_start();
$id = $_SESSION['id'];
$cliente = $_SESSION['usuario'];
$tipoUsuario = $_SESSION['tipoUsuario'];


if (!isset($cliente)) {
    

    header("Location: ../views/login.php?mensaje22=<script>alert('Necesita esta conectado para iniciar sesión');</script>");
    
    
} elseif ($tipoUsuario == 'cliente') {
require '../controllers/config.php';


try {
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo $_POST['exampleFormControlTextarea3'];
    echo $_POST['exampleFormControlTextarea4'];

    if($_POST['exampleFormControlTextarea3']!=null || $_POST['exampleFormControlTextarea4']!=null){
    
       $sentencia= "INSERT INTO modal_venta (caracteristicas, info_adicional, fecha_entrega, cliente, producto,id_cliente) values (:caracteristicas, :info_adicional, now(), :cliente, :producto, :id_cliente)";

       $consulta = $conexion->prepare($sentencia);

       $consulta->bindParam(':caracteristicas',$_POST['exampleFormControlTextarea3']);
       $consulta->bindParam(':info_adicional',$_POST['exampleFormControlTextarea4']);
       $consulta->bindParam(':cliente',$cliente);
       $consulta->bindParam(':producto',$_POST['seleccion_pro']);
       $consulta->bindParam(':id_cliente',$id);

       $consulta->execute();
   
   }
} catch (PDOException $e) {

    die($e->getMessage());
}

$conexion = null; 

header('Location: ../views/confirmarInfoVenta.php');

}
?>