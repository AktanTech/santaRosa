<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Santa Rosa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="home.css">
    <script src="gulpImage.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>

<link rel="stylesheet" href="home.css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="80">
    <div id="banner" class="container-fluid">
    <nav  id="navbar" class="navbar navbar-default navbar-fixed-top">

        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <div class="navbar-toggle collapsed" data-toggle="collapse" data-target="https://www.facebook.com/Santa-Rosa-F%C3%A1brica-140289986662439/">
                <a href="https://www.facebook.com/Santa-Rosa-F%C3%A1brica-140289986662439/" target="_blank" style="font-size:150%;color:#3B5998"><i class="fab fa-facebook-square"></i></a>
                </div>
                <a class="navbar-brand" href="">
                    <img src="media/compressImages/LogoSantaRosa.png" alt="Santa Rosa Fabrica" width="130em" style="margin-top:3px">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->

                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li id="opcion">
                           <a href="#Nosotros">NOSOTROS</a>
                        </li>
                        <li id="opcion">
                           <a href="#productos">PRODUCTOS</a>
                        </li>
                        <li id="opcion">
                           <a href="#contacto">CONTACTO</a>
                        </li>
                        <li id="opcion">
                            <a href="#cotizar">COTIZA CON NOSOTROS</a>
                        </li>
                        <li id="opcion">
                            <a href="media/docs/Catálogo_Final.pdf" download="Catálogo_Santa_Rosa">DESCARGAR CATÁLOGO</a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/Santa-Rosa-F%C3%A1brica-140289986662439/"  target="_blank" style="font-size:150%;color:#3B5998"><i class="fab fa-facebook-square"></i></a>
                        </li>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    </div>
    <!-- Carussel -->

            <div id="Carrusel">
            <div style="width:100%">
                <div class="container-flex">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">

                            <div class="item active" data-duration="3000">
                                <img src="./media/compressImages/Entrada.png" class="img-responsive" alt="Sin imagen">
                               <!-- <div class="imagen container-fluid" style="background-image: url('./media/compressImages/4_Negro.png') ;"></div>-->
                                <div class="carousel-caption">
                                    <div class="col-xs-12">
                                      <p>Vivimos el proceso</p>
                                    </div>
                                </div>
                            </div>

                            <div class="item" data-duration="3000">
                                <img src="./media/compressImages/Desde1980.png" alt="Sin Imagen">
                               <!-- <div class="imagen" style="background-image: url('./media/compressImages/Logo-Santa-Rosa-Azul 640x494.png');"></div>-->
                                <div class="carousel-caption">
                                    <p>40 años de experiencia</p>
                                </div>
                            </div>

                             <div class="item" data-duration="3000">
                                <img src="./media/compressImages/webpage.png" alt="Sin Imagen">
                               <!-- <div class="imagen" style="background-image: url('./media/compressImages/Logo-Santa-Rosa-Azul 640x494.png');"></div>-->
                                <div class="carousel-caption">
                                    <p>Calidad y servicio</p>
                                </div>
                            </div>

                             <div class="item" data-duration="3000">
                                <img src="./media/compressImages/Foto4.png" alt="Sin Imagen">
                               <!-- <div class="imagen" style="background-image: url('./media/compressImages/Logo-Santa-Rosa-Azul 640x494.png');"></div>-->
                                <div class="carousel-caption">
                                    <p> Procesos innovadores en construcción</p>
                                </div>
                            </div>

                             <div class="item" data-duration="3000">
                                <img src="./media/compressImages/Foto5.png" alt="Sin Imagen">
                               <!-- <div class="imagen" style="background-image: url('./media/compressImages/Logo-Santa-Rosa-Azul 640x494.png');"></div>-->
                                <div class="carousel-caption">
                                    <p>Somos fabricantes</p>
                                </div>
                            </div>

                             <div class="item" data-duration="3000">
                                <img src="./media/compressImages/Foto6.png" alt="Sin Imagen">
                               <!-- <div class="imagen" style="background-image: url('./media/compressImages/Logo-Santa-Rosa-Azul 640x494.png');"></div>-->
                                <div class="carousel-caption">
                                    <p>Procesos innovadores</p>
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
        <!-- Sobre Nosotros Section -->
        <div class="container-fluid" id="Nosotros">
            <h1>QUIENES SOMOS</h1>
            <ul class="nav nav-tabs nav-justified">
                <li style="font-size:160%; text-align:center;" class="active"><a data-toggle="tab" href="#Us">NOSOTROS</a></li>
                <li style="font-size:160%; text-align:center;" ><a data-toggle="tab" href="#Mision">MISIÓN</a></li>
                <li style="font-size:160%; text-align:center;" ><a data-toggle="tab" href="#Vision">VISIÓN</a></li>
            </ul>
            <div class="tab-content">

                 <div id="Us" class="tab-pane fade in active">
                    <h2>Nosotros</h2>
                    <div class="col-sm-9">
                        <p><strong>Santa Rosa Fábrica </strong>, es una empresa de tradición con  40 años de experiencia  en la que hemos
                        trabajado con los mejores procesos de vanguardia en la producción de materiales para la construcción, donde elegimos
                        concentrarnos en las áreas donde creamos un mayor impacto como los pretensados  y materiales a base de poliestireno
                        expandido.</p>
                    </div>
                    <div class="col-sm-3">
                        <div class="container-fluid" id="imagenTab">
                            <img src="./media/compressImages/32.png" alt="Sin imagen" class="">
                        </div>
                    </div>
                </div>

                <div id="Mision" class="tab-pane fade">
                    <h2>Misión</h2>
                    <div class="col-sm-9">
                        <p><strong>Santa Rosa</strong> fabrica y comercializa materiales para la construcción de la mejor calidad, precio y servicio
                            para cumplir con la demanda de los consumidores de la industria.</p>
                    </div>
                    <div class="col-sm-3">
                        <div class="container-fluid" id="imagenTab">
                            <img src="./media/compressImages/32.png" alt="Sin imagen" class="">
                        </div>
                    </div>
                </div>

                <div id="Vision" class="tab-pane fade">
                    <h2>Visión</h2>
                    <div class="col-sm-3">
                        <div class="container-fluid" id="imagenTab">
                            <img src="./media/compressImages/32.png" alt="Sin imagen" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <p>Nosotros creemos en el trabajo duro y en la atención amable a las personas, creemos en enfocarnos en las áreas en donde
                        podemos tener un mayor impacto para que de esta manera podamos contribuir en el desarrollo y crecimiento del país concentrándonos
                        en servir de la mejor manera posible.</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- Tarjetas de materiales -->
        <div class="container-fluid" id="productos">
            <h1>NUESTROS PRODUCTOS</h1>

            <div class="col-sm-6 col-md-6">
                <div class="thumbnail">
                <img src="./media/compressImages/Web1_SRF13.png" alt="Sin información">
                <div class="caption">
                    <h3 id="producto1">BOVEDILLA DE POLIESTIRENO</h3>
                    <p>La Bovedilla es un componente aligerante utilizado en la construcción como molde...</p>
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal" onclick="showProducto('1')">   Saber más </button>
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#cotizacion" onclick="asunto(1)" id="cotizar1">Cotizar</button>
                </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="thumbnail">
                <img src="./media/compressImages/Web1_SRF6.png" alt="Sin información">
                <div class="caption">
                    <h3 id="producto2">CASETÓN CON POLIESTIRENO</h3>
                    <p>Los Casetones son bloques de poliestireno expandido...</p>
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal" onclick="showProducto('2')">   Saber más </button>
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#cotizacion" id="cotizar2" onclick="asunto(2)">Cotizar</button>
                </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="thumbnail">
                <img src="./media/compressImages/Web1_SRF16.png" alt="Sin información">
                <div class="caption">
                    <h3 id="producto3">VIGUETA PRETENSADA</h3>
                    <p>Las viguetas son elementos de concreto hidráulico...</p>
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal" onclick="showProducto('3')">   Saber más </button>
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#cotizacion" id="cotizar3" onclick="asunto(3)">Cotizar</button>
                </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="thumbnail">
                <img src="./media/compressImages/Web1_SRF8.png" alt="Sin información">
                <div class="caption">
                    <h3 id="producto4">POLIESTIERNO EXPANDIDO EPS</h3>
                    <p>Material plástico celular rígido fabricado a partir... </p>
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal" onclick="showProducto('4')">   Saber más </button>
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#cotizacion" id="cotizar4" onclick="asunto(4)">Cotizar</button>
                </div>
                </div>
            </div>

        </div>

        <!-- Modales de tarjeta de materiales -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" style="text-align:center" id="modalHeader"></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                    <div class="thumbnail">
                    <img alt="Sin imagen" id="modalImg">
                    <div class="caption" id="txtHint">
                    </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
            </div>
        </div>
        </div>
<!-- Fin de tarjetas de materiales -->


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
                                <label for="email">Correo Electrónico</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="name@ejemplo.com">
                            </div>

                            <div class="form-group">
                                <label for="subject">Asunto</label>
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto">
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
        <div class="container-fluid" id="contacto">
            <!--<div class="row" >-->
            <div class="col-sm-4">
                <h1>Contacto</h1>
                <h4>SANTA ROSA FÁBRICA</h4>
                <h4 >Calle 42 Sur Col. Leona Vicario
                    <br> (999) 929 87 30
                    <br> (999) 929 43 59</h4>
                    <br><br>
                    <button id="cotizar" type="button" class="btn btn-md btn-primary" data-toggle="modal" data-target="#cotizacion">Cotiza con nosotros</button>
            </div>
            <div class="col-sm-8">
                <div class="container-fluid" id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5329.928832312058!2d-89.60600032028215!3d20.91692500518287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe6b0ba5af8913846!2sVigas+Preforzadas+Santa+Rosa!5e0!3m2!1ses-419!2smx!4v1524262299054"
                     width="100%" height="500" frameborder="0" style="border:0" allowfullscreen>
                    </iframe>
                </div>
            </div>

        </div>
</body>
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="productos.js"></script>
    <script src="menu.js"></script>
    <script>
    var extension = {
  cycle: function(e, extra) {
    e || (this.paused = false)

    this.interval && clearTimeout(this.interval)

    var nextInterval;
    var $active = this.$element.find('.item.active')
    if (!extra) {
      nextInterval = $active.data("duration") || this.options.interval;
    } else {
      var $next = this.getItemForDirection('next', $active)
      nextInterval = $next.data("duration") || this.options.interval;
    }

    console.log(nextInterval);

    !this.paused && (this.interval = setTimeout($.proxy(this.nextProxy, this), nextInterval))

    return this
  },
  pause: function(e) {
    e || (this.paused = true)

    if (this.$element.find('.next, .prev').length && $.support.transition) {
      this.$element.trigger($.support.transition.end)
      this.cycle(true)
    }
    this.interval = clearTimeout(this.interval)

    return this
  },
  nextProxy: function() {
    this.next()
    this.cycle(true, true)
  }
}

    //Cambio cuando existe una transicion en el carrusel
    /**
    $("#carousel-example-generic").on('slide.bs.carousel', function () {
        var posicion = ["center","center","right","left"];
        var aleatorio = Math.ceil(Math.random()*(posicion.length))
        if(posicion[aleatorio] != undefined){
            $("#Carrusel p").css({"text-align": posicion[aleatorio]})
        }


    });
    */
   $(".carousel-inner  .item  img").css("max-height",screen.availHeight-80)
   $(".carousel-inner .item a img").css("max-height",screen.availHeight-80)


$.extend($["fn"]["carousel"]["Constructor"].prototype, extension);

$(function() {
  $('#carousel-example-generic').carousel();
});

    </script>

    <script type="text/javascript">
      function asunto(ident) {
        switch (ident) {
          case 1:
            var product = document.getElementById('producto1');
            var subject = document.getElementById('subject');
            subject.value = "Cotizacion de " + product.innerText;
            break;

          case 2:
            var product = document.getElementById('producto2');
            var subject = document.getElementById('subject');
            subject.value = "Cotizacion de " + product.innerText;
            break;

          case 3:
            var product = document.getElementById('producto3');
            var subject = document.getElementById('subject');
            subject.value = "Cotizacion de " + product.innerText;
            break;

          case 4:
            var product = document.getElementById('producto4');
            var subject = document.getElementById('subject');
            subject.value = "Cotizacion de " + product.innerText;
            break;

            default:
            var subject = document.getElementById('subject');
            subject.value = "";
            break;
        }
      }
    </script>

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

if(isset($_POST["subject"])){
    $asunto = $_POST["subject"];
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
        $mail->Subject = utf8_decode(utf8_decode($asunto)); //Asunto del correo electronico
        $mail->Body = utf8_decode(
          'Datos del Solicitante: <br>'
          .utf8_decode($nombre).'<br>'
          .utf8_decode($celPhone).'<br>'
          .utf8_decode($correo).'<br>'
          . 'Me gustaría recibir una cotización de su empresa a nombre de ' . utf8_decode($nombre) .' con la siguiente descripción:<br>'
          . utf8_decode($texto) .'<br>'
          . 'De antemano muchas gracias <br>'
          . 'Atte: '. utf8_decode($nombre));
        //Envio del mail

        $mail->send();
        echo '<script>
        alert("Se ha enviado de forma correcta su mensaje");
            </script>';

    }catch(Exception $e){
        echo '<script>
        alert("ERROR: El mensaje no se ha enviado");
        window.location.replace("index.php");
        </script>';

    }
}
?>
