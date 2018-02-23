<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//C:\xampp\htdocs\vendor\phpmailer\phpmailer\src
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

require 'vendor/autoload.php';

//Configuración de correo electronico
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com'; //Servidor smtp del correo
$mail->SMTPAuth = true;
$mail->Username = 'armandoecr96@gmail.com'; //Correo electronico del remitente
$mail->Password = 'teamoalizeebananera'; //Constraseña del remitente

$mail->SMTPSecure = 'tls'; //Tipo de seguridad
$mail->Port = 587; //Puerto del servidor smtp

//-------------------------------------------------------

// Datos del Correo

$mail->SetFrom('armandoecr96@gmail.com', "Nombre Persona"); //Correo electronico del remitente y nombre(debe coindidir con el username)
$mail->AddAddress('armandoecr_96@hotmail.com', "Nombre Persona"); //Correo electronico  y nombre del destinatario

$mail->Subject = 'Pruebas PHPmailer'; //Asunto del correo electronico
$mail->Body = 'Mensaje de prubeas PHPMailer para envio de mensajes'; //Cuerpo del correo electronico

//Envio del mail

$mail->send();
?>