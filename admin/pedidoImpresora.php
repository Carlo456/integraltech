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

    echo $_POST['exampleFormControlTextarea1'];
    echo $_POST['exampleFormControlTextarea2'];
    echo $_POST['seleccion_pro'];

    if($_POST['exampleFormControlTextarea1']!=null || $_POST['exampleFormControlTextarea2']!=null){
    
       $sentencia= "INSERT INTO modal_renta (caracteristicas, info_adicional, producto, meses_renta, fecha_entrega, fecha_salida, cliente,id_cliente) values (:caracteristicas, :info_adicional, :producto, :meses_renta, now(), DATE_ADD(now(), INTERVAL :meses_renta MONTH), :cliente,:id_cliente)";

       $consulta = $conexion->prepare($sentencia);

       $consulta->bindParam(':caracteristicas',$_POST['exampleFormControlTextarea1']);
       $consulta->bindParam(':info_adicional',$_POST['exampleFormControlTextarea2']);
       $consulta->bindParam(':producto',$_POST['seleccion_pro']);
       $consulta->bindParam(':meses_renta',$_POST['exampleFormControlTextarea5']);
       $consulta->bindParam(':cliente',$cliente); 
       $consulta->bindParam(':id_cliente',$id);
       $consulta->execute();
   
   }
} catch (PDOException $e) {
   

    die($e->getMessage());
}

$conexion = null; 

header('Location: ../views/confirmarInfoRenta.php');

}

?>