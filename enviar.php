<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//C:\xampp\htdocs\vendor\phpmailer\phpmailer\src
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

require 'vendor/autoload.php';
//variables
if(isset($_POST["name"])){
    $nombre = $_POST["name"];
}

if(isset($_POST["phone"])){
    $celPhone = $_POST["phone"];
}
       
if(isset($_POST["email"])){
    $correo = $_POST["email"];
}

if(isset($_POST["textarea"])){
    $texto = $_POST["textarea"];
}
    $mail = new PHPMailer(true);
    try{
        $mail->isSMTP();
        $mail->Host = 'smtp.office365.com'; //Servidor smtp del correo
        $mail->SMTPAuth = true;
        $mail->Username = 'ventas@santarosa.mx'; //Correo electronico del remitente
        $mail->Password = 'Santarosa1980%'; //Constraseña del remitente
        
        $mail->SMTPSecure = 'tls'; //Tipo de seguridad
        $mail->Port = 587; //Puerto del servidor smtp
        
        //-------------------------------------------------------
        
        // Datos del Correo
        
        $mail->SetFrom('ventas@santarosa.mx', utf8_decode('Santa Rosa Fábrica')); //Correo electronico del remitente y nombre(debe coindidir con el username)
        $mail->AddAddress('ventas@santarosa.mx', utf8_decode($nombre)); //Correo electronico  y nombre del destinatario
        $mail->addReplyTo(utf8_decode($correo), utf8_decode($nombre));
        
        $mail->isHTML(true);
        $mail->Subject = 'Cotizaciones de '. utf8_decode($nombre); //Asunto del correo electronico
        $mail->Body = utf8_decode(
        utf8_decode($nombre).'</br>'
        .utf8_decode($celPhone).'</br>'
        .utf8_decode($correo).'</br></br>'
        . 'Me gustaría recibir una cotización de su empresa a nombre de ' . utf8_decode($nombre) .' con la siguiente descripción:</br>'
        . utf8_decode($texto) .'</br></br>'
        . 'De antemano muchas gracias</br>'
        . 'Atte: '. utf8_decode($nombre));
        //Envio del mail
        
        $mail->send();
        echo '<script>
        alert("Se ha enviado de forma correcta su mensaje");
        window.location.replace("index.html");
            </script>';
        
    }catch(Exception $e){
        echo '<script>
        alert("El mensaje no se ha enviado de forma correcta");
        window.location.replace("index.html");
        </script>';
        
    }
?>


