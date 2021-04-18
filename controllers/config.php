<?php  
//$base = 'mysql:host=localhost;dbname=integraltech';
$base = 'mysql:host=10.209.81.2;dbname=1006416-copi';
//$usuario = 'root';
$usuario = '1006416_nl62878';
//$password = '';
$password = 'Estadias_copi';

try {

    $conexion = new PDO($base, $usuario, $password);    
    //header('Location: ../admin/indexAdmin.html');
    //echo 'Si funciono la conexion';

} catch (PDOException $e) {
    echo 'no funciona la conexion';
    //header('Location: ../index.html');
}


?>