<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

$para = 'armandoecr_96@hotmail.com';
$titulo = 'Prueba'
//$nombre = $_POST['NombreCotizacionControlInput'];
//$mail = 'armandoecr96@gmail.com'//$_POST['EmailCotizacionesControlInput'];
$mensaje = 'Prueba envio de correos'//$_POST['MaterialesCotizacionControlTextarea'];

$cabeceras = 'From: armandoecr96@gmail.com' . "\r\n" . //La direccion de correo desde donde supuestamente se envió
    'Reply-To: armandoecr96@gmail.com' . "\r\n" . //La direccion de correo a donde se responderá (cuando el recepto haga click en RESPONDER)
    'X-Mailer: PHP/' . phpversion();  //información sobre el sistema de envio de correos, en este caso la version de PHP        


//$asunto = 'Cotización';

mail($para, $titulo, $mensaje, $cabeceras);

//echo 'Mensaje enviado correctamente';
?>