<?php 

require 'config.php';
require 'phpmailer/PHPMailerAutoload.php';

$queryContacto = $_GET;

// aqui empieza la consulta para mandar el correo 


$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$datosMensaje = "SELECT * FROM formulario_contacto WHERE correo_ele = '{$queryContacto['correo']}' ORDER BY fecha_comentario DESC";

$consultaMensaje = $conexion->prepare($datosMensaje);
$consultaMensaje->execute();

$resultado = $consultaMensaje->fetch(PDO::FETCH_ASSOC); 


$message = file_get_contents('../views/emailContacto2.html');
$message = str_replace('%nombre%', $resultado['nombre_com'], $message); 
$message = str_replace('%telefono%', $resultado['telefono'], $message); 
$message = str_replace('%correo%', $resultado['correo_ele'], $message); 
$message = str_replace('%mensaje%', $resultado['comentario'], $message); 

//setup
$mail = new PHPMailer; //inicia el objeto de mailer

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp01.servage.net';  // Specify main and backup SMTP servers aqui iria el de google y el de hotmail y esas cosas
$mail->SMTPAuth = true;                               // Enable SMTP authentication authenticacion cabiar la seguridad cuenta google admitir aplicaciones sospechosas o externas
$mail->Username = 'carlo@copiadorasdurango.siadurangomex.com';                 // SMTP username
$mail->Password = 'Carlo2020';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('carlo@copiadorasdurango.siadurangomex.com');       // de quien va 
$mail->addAddress('integraltechso@gmail.com');     // Add a recipient quien lo recibe

//$mail->addAddress('ellen@example.com');                Name is optional
$mail->addReplyTo($resultado['correo_ele']);    // si se responde quien lo recibiria

//añadir los CC o los BCC no se q
 
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//incluir archivos

//$mail->addAttachment('kama2.png');         // Add attachments archivos si se requiere acepta imagenes base 64 utf-8 y binarios
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

//setup para correos que incluyan html aqui iria la factura 

$mail->msgHTML($message); //se puede poner un archivo html como formato aqui se dee icluir antes y sutituir las variables
$mail->isHTML(true);                                  // Set email format to HTML
//$mail->CharSet = PHPMailer::CHARSET_UTF8;
$mail->Subject = 'Correo automatico de la empresa';  // titulo del correo
//$mail->Body    = "<h2> Correo de prueba </h2> <br><h2>{$resultado['nombre_com']}</h2><br><h2>{$resultado['telefono']}</h2><br><h2>{$resultado['comentario']}</h2><br>";           // si el correo es html aqui iria el codigo html 
//$mail->AltBody = strip_tags($message);

if(!$mail->send()) {
    echo 'El mensaje no fue enviado';
    echo 'Error: ' . $mail->ErrorInfo;
    header('Location: ../index.php');
} else {
    echo 'El mensaje se envio';
}

header('Location: ../index.php');

?>