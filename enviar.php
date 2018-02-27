<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
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
    echo 'Hola, '.$_POST["name"];
    $nombre = $_POST["name"];
} else {
       echo 'No has puesto tu nombre.';
       }
       
if(isset($_POST["email"])){
    echo 'Hola, '.$_POST["email"];
    $correo = $_POST["email"];
} else {
        echo 'No has puesto tu nombre.';
        }

if(isset($_POST["textarea"])){
    echo 'Hola, '.$_POST["textarea"];
    $texto = $_POST["textarea"];
} else {
        echo 'No has puesto tu nombre.';
        }

if(isset($contentHTMLAccept)){
    $contentHTML = '<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>';
}        

if(isset($contentHTMLDen)){
    $contentHTMLDen = '<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>';
}



//Configuración de correo electronico
$mail = new PHPMailer(true);
try{
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
    $mail->AddAddress(utf8_decode($correo), utf8_decode($nombre)); //Correo electronico  y nombre del destinatario
    
    $mail->Subject = 'Cotizaciones'; //Asunto del correo electronico
    $mail->Body = utf8_decode($texto); //Cuerpo del correo electronico
    
    //Envio del mail
    
    $mail->send();
    echo $contentHTMLAccept;
}catch(Exception $e){
    
}
?>
</body>
</html>

<!-- Inicio de codigo PHP -->
