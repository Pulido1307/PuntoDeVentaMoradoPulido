<?php
include_once('../Controllers/autoController.php');
include_once('../Controllers/clienteController.php');

$objAutoController = new AutoController();
$objClienteController = new ClienteController();

if (array_key_exists('eliminar', $_REQUEST)) {
    //print($_REQUEST['input_ns']);
    if (isset($_REQUEST['input_ns'])) {
        $res = $objAutoController->hacerBajaAuto($_REQUEST['input_ns']);
        echo "<script>alert('$res');</script>";
    }
} elseif (array_key_exists('registrar', $_REQUEST)) {
    if (
        isset($_REQUEST['input_ns']) and isset($_REQUEST['input_marca']) and
        isset($_REQUEST['input_color']) and isset($_REQUEST['input_km']) and isset($_REQUEST['input_modelo']) and
        isset($_REQUEST['tipo']) and isset($_REQUEST['input_precio'])
    ) {
        $res = $objAutoController->hacerAltaAuto(
            $_REQUEST['input_ns'],
            $_REQUEST['input_marca'],
            $_REQUEST['input_color'],
            $_REQUEST['input_km'],
            $_REQUEST['input_modelo'],
            $_REQUEST['tipo'],
            $_REQUEST['input_precio']
        );
        echo "<script>alert('$res');</script>";
    }
} elseif (array_key_exists('registrarCliente', $_REQUEST)) {
    if (
        isset($_REQUEST['input_rfc']) and isset($_REQUEST['input_nombre']) and
        isset($_REQUEST['input_apellido']) and isset($_REQUEST['input_domicilio'])
    ) {
        $res = $objClienteController->hacerAltaCliente($_REQUEST['input_rfc'], $_REQUEST['input_nombre'], $_REQUEST['input_apellido'], $_REQUEST['input_domicilio']);
        echo "<script>alert('$res');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Webpage Title -->
    <title>Autos del año</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="../../css/bootstrap.css" rel="stylesheet">
    <link href="../../css/fontawesome-all.css" rel="stylesheet">
    <link href="../../css/swiper.css" rel="stylesheet">
    <link href="../../css/magnific-popup.css" rel="stylesheet">
    <link href="../../css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/hojaEstilos.css">

    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">

    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">

</head>

<body data-spy="scroll" data-target=".fixed-top">
    <!-- Navigation -->


    <section>
        <div class="header">
            <div class="ocean">
                <div class="wave"></div>
                <div class="wave"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1 class="h1-large">Agencia de autos del año MSPA </h1>
                            <p class="p-large">Sitio web dedicado para la realización de altas, bajas modificaciones y
                                búsquedas de autos de la agencia MSPA. Así como también para la alta de los clientes y
                                creación de facturas. </p>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="../../images/favicon.png" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header -->
    </section>

    <section>
        <!-- Features -->
        <div id="features" class="basic-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="text-box bg-gray">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-car" width="75" height="75" viewBox="0 0 24 24" stroke-width="1.5" stroke="#6f32be" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <circle cx="7" cy="17" r="2" />
                                <circle cx="17" cy="17" r="2" />
                                <path d="M5 17h-2v-6l2 -5h9l4 5h1a2 2 0 0 1 2 2v4h-2m-4 0h-6m-6 -6h15m-6 0v-5" />
                            </svg>
                            <h4>Autos</h4>
                            <p><a class="" href="tablaModificarAuto.php" target="">Actualizar</a></p>
                            <p><a class="" href="formularioAutoAltaView.php" target="">Alta</a></p>
                            <p><a class="" href="formularioAutoBajaView.php" target="">Baja</a></p>
                            <p><a class="" href="formularioAutoConsultaView.php" target="">Consulta</a></p>
                        </div> <!-- end of text-box -->
                    </div> <!-- end of col -->
                    <div class="col-lg-4">
                        <div class="text-box bg-gray">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="75" height="75" viewBox="0 0 24 24" stroke-width="1.5" stroke="#6f32be" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                            </svg>
                            <h4>Clientes</h4>
                            <p><a class="" href="formularioAltaClienteView.php" target="">Alta</a></p>

                        </div> <!-- end of text-box -->
                    </div> <!-- end of col -->
                    <div class="col-lg-4">
                        <div class="text-box bg-gray">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-report-money" width="75" height="75" viewBox="0 0 24 24" stroke-width="1.5" stroke="#6f32be" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                                <rect x="9" y="3" width="6" height="4" rx="2" />
                                <path d="M14 11h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5" />
                                <path d="M12 17v1m0 -8v1" />
                            </svg>
                            <h4>Ventas</h4>
                            <p><a class="" href="formularioVentaView.php" target="">Realizar venta</a></p>
                        </div> <!-- end of text-box -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of basic-4 -->
        <!-- end of features -->
    </section>

    <footer>
        <div class="footer bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="social-container">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-pinterest-p fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-instagram fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-youtube fa-stack-1x"></i>
                                </a>
                            </span>
                        </div> <!-- end of social-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of footer -->

        <!-- Copyright -->
        <div class="copyright bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="p-small">Copyright © MSPA</p>
                    </div> <!-- end of col -->
                </div> <!-- enf of row -->
            </div> <!-- end of container -->
        </div> <!-- end of copyright -->
        <!-- end of copyright -->

    </footer>

    <!-- Scripts -->
    <script src="../../js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="../../js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="../../js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="../../js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="../../js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="../../js/scripts.js"></script> <!-- Custom scripts -->
</body>

</html>