<?php 

require 'config.php';

session_start();
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];


$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$datosLogin = "SELECT id,usuarios,password,tipo FROM usuarios WHERE usuarios = '{$usuario}' AND password = '{$pass}'";

$consultaUser = $conexion->prepare($datosLogin);
$consultaUser->execute();


$resultado = $consultaUser->fetch(PDO::FETCH_ASSOC);




    if ($resultado) {
        
        if($usuario == $resultado['usuarios'] && $pass == $resultado['password']){
            $_SESSION['id'] = $resultado['id'];
            $_SESSION['usuario'] = $resultado['usuarios'];
            $_SESSION['tipoUsuario'] = $resultado['tipo']; 
        
            switch ($resultado['tipo']) {
                
                case 'admin':
                    header('Location: ../admin/indexAdmin.php');
                break;    

                case 'Almacen':
                    header('Location: ../admin/almacen.php');
                break;

                case 'Ventas':
                    header('Location: ../admin/ventas.php');
                break;

                case 'Provedor':
                    header('Location: ../admin/provedor.php');
                break;

                case 'Pagina publicitaria':
                    header('Location: ../admin/paginaPublicitaria.php');
                break;

                case 'cliente':
                    header('Location: ../tienda.php');
                break;

                default:
                    ('Location: ../admin/viewsAdmin/error404.php'); 
                break;
            }
        } else {
            header('Location: ../views/login.php?aviso=Ingreso los datos incorrectos o el usuario ya existe');
        }   
    } else {
        header('Location: ../views/login.php?aviso=Los datos son incorrectos o el usuario ya existe');
    }
    

?>