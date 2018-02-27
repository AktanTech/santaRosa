<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    $nombre = $_POST["name"];
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
        <div class="modal" tabindex="-1" role="dialog" id="myModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Modal body text goes here.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>


