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
    echo '<script>
    function activar(){
        $("#confirmPositive").modal("show");
        {
    </scrpt>';
}catch(Exception $e){
    echo '<script>
    function activar(){
        $("#confirmNegative").modal("show");
        {
    </scrpt>';
}
?>


<!-- Inicio de codigo PHP -->
