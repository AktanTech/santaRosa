<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Santa Rosa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="home.css">
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
    
<link rel="stylesheet" href="home.css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="20">
    <nav  id="navbar" class="navbar navbar-default navbar-fixed-top">
        <!-- Función para aumentar la transparencia del menú -->
        <script>
            $(window).scroll(function() {
                if ($("#navbar").offset().top < 56) {

                    $("#navbar").css("opacity", "1");
                } else { 
                    if($("#navbar").offset().top < 68){
                        $("#navbar").css("opacity", ".8334");
                    }else  {
                           if($("#navbar").offset().top < 80){
                             $("#navbar").css("opacity", ".6668");
                           }  else {
                                 $("#navbar").css("opacity", ".5");
                                   }
                           }
                    
                        }
                });
        </script>
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                    aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">
                    <img src="media/imagenes/Logo-Santa-Rosa-Azul 640x494.png" alt="Santa Rosa Fabrica" width="130em" style="margin-top:3px">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->

                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                           <a href="#mivideo">CONTACTO</a>
                        </li>
                        <li>
                            <a href="#cotizar">COTIZA CON NOSOTROS</a>
                        </li>
                        <li>
                            <a href="media/docs/Catálogo_Final.pdf" download="Catálogo_Santa_Rosa">DESCARGAR CATÁLOGO</a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/Santa-Rosa-F%C3%A1brica-140289986662439/"><i class="fab fa-facebook-square"></i></a>
                        </li>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Carussel -->

            <div class="Carrusel">
            <div class="row">
                <div class="col-md-12">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">

                        <div class="item active">
                            <div id="mivideo" class="video-container container-flex">
                                <video  id="Video" class="fillWidth" autoplay muted playsinline preload="auto">
                                    <source src="./media/videos/SRF_Loop.mp4" type="video/mp4" /> Your browser does not support the video tag.
                                </video>
                                <!-- Detecta que el video ha finalizado -->
                                <script>
                                    $(document).ready(function(){
	                                 $("#Video").on('ended', function(){
	                                 });
                                    });
                                </script>
                            </div>
                        </div>
                            <div class="item">
                                <img src="./media/imagenes/En-Construccion.jpeg" alt="Sin imagen">
                                <div class="carousel-caption">
                                    <h1>Lorem ipsum</h1>
                                    <p>dolor sit amet, consectetur adipiscing elit</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="./media/imagenes/Logo-Santa-Rosa-Azul 640x494.png" alt="Sin Imagen">
                                <div class="carousel-caption">
                                    <h1>Lorem ipsum</h1>
                                    <p>dolor sit amet, consectetur adipiscing elit</p>
                                </div>
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Fin de Carrusel -->

        <!-- Tarjetas de materiales -->
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                <img src="./media/imagenes/En-Construccion.jpeg" alt="Sin información">
                <div class="caption">
                    <h3>Lorem ipsum</h3>
                    <p>In at condimentum leo, tempor porta tortor. Pellentesque et mattis eros. Pellentesque luctus sollicitudin cursus. Etiam egestas libero ut mollis egestas.</p>
                    <p><a href="#" class="btn btn-default" role="button">Saber más</a>
                </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                <img src="./media/imagenes/En-Construccion.jpeg" alt="Sin información">
                <div class="caption">
                    <h3>Lorem ipsum</h3>
                    <p>In at condimentum leo, tempor porta tortor. Pellentesque et mattis eros. Pellentesque luctus sollicitudin cursus. Etiam egestas libero ut mollis egestas.</p>
                    <p><a href="#" class="btn btn-default" role="button">Saber más</a>
                </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                <img src="./media/imagenes/En-Construccion.jpeg" alt="Sin información">
                <div class="caption">
                    <h3>Lorem ipsum</h3>
                    <p>In at condimentum leo, tempor porta tortor. Pellentesque et mattis eros. Pellentesque luctus sollicitudin cursus. Etiam egestas libero ut mollis egestas.</p>
                    <p><a href="#" class="btn btn-default" role="button">Saber más</a>
                </div>
                </div>
            </div>
        </div>

         <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                <img src="./media/imagenes/En-Construccion.jpeg" alt="Sin información">
                <div class="caption">
                    <h3>Lorem ipsum</h3>
                    <p>In at condimentum leo, tempor porta tortor. Pellentesque et mattis eros. Pellentesque luctus sollicitudin cursus. Etiam egestas libero ut mollis egestas.</p>
                    <p><a href="#" class="btn btn-default" role="button">Saber más</a>
                </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                <img src="./media/imagenes/En-Construccion.jpeg" alt="Sin información">
                <div class="caption">
                    <h3>Lorem ipsum</h3>
                    <p>In at condimentum leo, tempor porta tortor. Pellentesque et mattis eros. Pellentesque luctus sollicitudin cursus. Etiam egestas libero ut mollis egestas.</p>
                    <p><a href="#" class="btn btn-default" role="button">Saber más</a>
                </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                <img src="./media/imagenes/En-Construccion.jpeg" alt="Sin información">
                <div class="caption">
                    <h3>Lorem ipsum</h3>
                    <p>In at condimentum leo, tempor porta tortor. Pellentesque et mattis eros. Pellentesque luctus sollicitudin cursus. Etiam egestas libero ut mollis egestas.</p>
                    <p><a href="#" class="btn btn-default" role="button">Saber más</a>
                </div>
                </div>
            </div>
        </div>

         <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                <img src="./media/imagenes/En-Construccion.jpeg" alt="Sin información">
                <div class="caption">
                    <h3>Lorem ipsum</h3>
                    <p>In at condimentum leo, tempor porta tortor. Pellentesque et mattis eros. Pellentesque luctus sollicitudin cursus. Etiam egestas libero ut mollis egestas.</p>
                    <p><a href="#" class="btn btn-default" role="button">Saber más</a>
                </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                <img src="./media/imagenes/En-Construccion.jpeg" alt="Sin información">
                <div class="caption">
                    <h3>Lorem ipsum</h3>
                    <p>In at condimentum leo, tempor porta tortor. Pellentesque et mattis eros. Pellentesque luctus sollicitudin cursus. Etiam egestas libero ut mollis egestas.</p>
                    <p><a href="#" class="btn btn-default" role="button">Saber más</a>
                </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                <img src="./media/imagenes/En-Construccion.jpeg" alt="Sin información">
                <div class="caption">
                    <h3>Lorem ipsum</h3>
                    <p>In at condimentum leo, tempor porta tortor. Pellentesque et mattis eros. Pellentesque luctus sollicitudin cursus. Etiam egestas libero ut mollis egestas.</p>
                    <p><a href="#" class="btn btn-default" role="button">Saber más</a>
                </div>
                </div>
            </div>
        </div>
<!-- Fin de tarjetas de materiales -->

    <div id="imagen" class="media" align="center">
            <img class="img-responsive" src="./media/imagenes/En-Construccion.jpeg" alt="Not Found">
    </div>

        <!-- Modal -->
        <div class="modal fade" id="cotizacion" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" style="text-align:center">Cotización</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <!-- Inicio del form -->
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" id="form-coti">

                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Nombre">
                            </div>

                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                            </div>

                            <div class="form-group">
                                <label for="phone">Número de celular</label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Télefono">
                            </div>

                            <div class="form-group">
                                <label for="textarea">Descripción breve de lo que necesita</label>
                                <textarea class="form-control" name="textarea" id="textarea" rows="3"></textarea>
                            </div>

                            <!-- Fin del form -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <input type="submit" class="btn btn-default" value="Enviar" aria-label="Close" name="submit">
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Footer Start-->
        <div class="container-fluid" id="footer">
            <!--<div class="row" >-->
            <div class="col-sm-12">
                <h1>Contacto</h1>
                <h4>VIGAS PRETENSADAS, BOVEDILLA DE POLIESTIRENO Y PANEL</h4>
                <h4 >Santa Rosa Fábrica
                    <br> Calle 42 Sur Col. Leona Vicario
                    <br> (999) 929 87 30
                    <br> (999) 929 43 59</h4>
                    <!-- Google maps -->
                    <div id="map"></div>
    <script>
      function initMap() {
        var myLatLng = {lat: -25.363, lng: 131.044};

        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          zoom: 4
        });

        // Create a marker and set its position.
        var marker = new google.maps.Marker({
          map: map,
          position: myLatLng,
          title: 'Hello World!'
        });
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYqL_anXa7DZgrjF7ahXaaQY5Empwt6GY&callback=initMap"
        async defer></script>
    <!-- Fin de Google Maps -->
                <button id="cotizar" type="button" class="btn btn-md" data-toggle="modal" data-target="#cotizacion">Cotiza con nosotros</button>
            </div>
            <!--</div>-->
        </div>
</body>
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</html>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//C:\xampp\htdocs\vendor\phpmailer\phpmailer\src
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

require 'vendor/autoload.php';
//variables
if (isset($_POST["submit"])) {


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
	$mail->Host = 'relay-hosting.secureserver.net'; //'smtp.office365.com'; //Servidor smtp del correo
        $mail->SMTPAuth = false;
        $mail->Username = 'ventas@santarosa.mx'; //Correo electronico del remitente
        $mail->Password = 'Santarosa1980%'; //Constraseña del remitente
        
        $mail->SMTPSecure = false; //Tipo de seguridad
        $mail->Port = 25; //Puerto del servidor smtp
        
        //-------------------------------------------------------
        
        // Datos del Correo
        
        $mail->SetFrom('ventas@santarosa.mx', utf8_decode("Santa Rosa Fábrica")); //Correo electronico del remitente y nombre(debe coindidir con el username)
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
            </script>';
        
    }catch(Exception $e){
        echo '<script>
        alert("El mensaje no se ha enviado de forma correcta");
        window.location.replace("index.php");
        </script>';
        
    }
}
?>