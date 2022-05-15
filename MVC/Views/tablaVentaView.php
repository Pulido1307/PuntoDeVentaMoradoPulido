<?php
include_once('../Controllers/ventaController.php');

$objVentaController = new VentaController();

if (array_key_exists('venta', $_REQUEST)) {
    //print($_REQUEST['input_ns']);
    if (isset($_REQUEST['input_ns']) and isset($_REQUEST['input_rfc'])) {
        $res = $objVentaController->hacerVenta($_REQUEST['input_ns'], $_REQUEST['input_rfc']);
        echo "<script>alert('$res');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venta</title>
    <link rel="stylesheet" href="../../css/estilosTabla.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="../../css/bootstrap.css" rel="stylesheet">
    <link href="../../css/fontawesome-all.css" rel="stylesheet">
    <link href="../../css/swiper.css" rel="stylesheet">
    <link href="../../css/magnific-popup.css" rel="stylesheet">
    <link href="../../css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/hojaEstilos.css">
    <link rel="stylesheet" href="../../css/styles2.css">
    <link rel="stylesheet" href="../../css/estilos.css">

</head>

<body>

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
        <div class="container">
            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Name</a> -->

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="index.php"><img src="../../images/itsulogo.png" alt="alternative"></a>


        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->

    <!-- Header -->
    <header class="ex-header">

    </header>
    <!-- Fin de Header -->

    <div class="container_tabla">
        <?php
        if (strcmp($res, "Datos correctos") == 0) { ?>
            <table class="table table-light table-striped table-hover table-bordered">
                <th >Factura de venta</th>
                <td>
                    <tr class="">
                        <td>RFC</td>
                        <td><?php echo $GLOBALS['cliente']['rfc'] ?></td>
                    </tr>
                    <tr class="">
                        <td>Nombre</td>
                        <td><?php echo $GLOBALS['cliente']['nombre'] . " " . $GLOBALS['cliente']['apellido'] ?></td>
                    </tr>
                    <tr class="">
                        <td>Domicilio</td>
                        <td><?php echo $GLOBALS['cliente']['domicilio'] ?></td>
                    </tr>
                </td>
            </table>

            <table class="table table-light table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>NS</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td><?php echo $GLOBALS['auto']['ns'] ?></td>
                        <td><?php echo $GLOBALS['auto']['marca'] ?></td>
                        <td>$<?php echo $GLOBALS['auto']['precio'] ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Subtotal</td>
                        <td>$<?php echo $GLOBALS['auto']['precio'] ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>IVA</td>
                        <td>$<?php $iva = $GLOBALS['auto']['precio'] * 0.16;
                            echo $iva; ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Total</td>
                        <td>$<?php $total = $iva + $GLOBALS['auto']['precio'];
                            echo $total; ?></td>
                    </tr>
                </tbody>
            </table>
        <?php } else { ?>

        <?php } ?>

    </div>

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