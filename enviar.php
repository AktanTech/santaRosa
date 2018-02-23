<?php
$nombre = $_POST['NombreCotizacionControlInput'];
$mail = $_POST['EmailCotizacionesControlInput'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = $_POST['MaterialesCotizacionControlTextarea'];

$para = 'armandoecr_96@hotmail.com';
$asunto = 'Cotización';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo 'Mensaje enviado correctamente';
?>