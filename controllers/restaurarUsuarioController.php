<?php   

require 'config.php';
require 'phpmailer/PHPMailerAutoload.php';

$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




if ($_POST['correo']!="") {
    $correo = $_POST['correo'];

    $datosCliente = "SELECT usuarios.id,usuarios.usuarios,clientes.correo_ele 
                        FROM usuarios
                        INNER JOIN clientes ON usuarios.id=clientes.id 
                        WHERE clientes.correo_ele = '{$correo}';";
    
    $consultaCliente = $conexion->prepare($datosCliente);
    $consultaCliente->execute();

    $resultadoCliente = $consultaCliente->fetch(PDO::FETCH_ASSOC);

    var_dump($resultadoCliente);
    
    if(!empty($resultadoCliente)){
        
        $url = "http://{$_SERVER['SERVER_NAME']}/views/nuevoPassword.php?user_id={$resultadoCliente['id']}";

        $mail = new PHPMailer;

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp01.servage.net';  // Specify main and backup SMTP servers aqui iria el de google y el de hotmail y esas cosas
        $mail->SMTPAuth = true;                               // Enable SMTP authentication authenticacion cabiar la seguridad cuenta google admitir aplicaciones sospechosas o externas
        $mail->Username = 'carlo@copiadorasdurango.siadurangomex.com';                 // SMTP username
        $mail->Password = 'Carlo2020';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->setFrom('carlo@copiadorasdurango.siadurangomex.com');       // de quien va 

        $mail->addAddress("{$resultadoCliente['correo_ele']}");
        $mail->isHTML(true);
        $mail->Subject = 'Restaurar contrasenas Copiadoras durango';
        $mail->Body = "<h2> Correo de restauracion de contraseña </h2> <br><h2>{$resultadoCliente['usuarios']}: Pulsa el link para restaurar tu contraseña</h2><br><h2><a href='{$url}'>Link para restaurar</a></h2><br></a></h2><br>";

        if(!$mail->send()) {
            echo 'El mensaje no fue enviado';
            echo 'Error: ' . $mail->ErrorInfo;
            header('Location: ../tienda.php');
        } else {
            echo 'El mensaje se envio';
        }
        
        header('Location: ../index.php');

    } else{
        header('Location: ../views/restaurarUsuario.php?aviso=El Correo no existe');    
    }

} else {
    header('Location: ../views/restaurarUsuario.php?aviso=No ingresaste correo');
}



?>