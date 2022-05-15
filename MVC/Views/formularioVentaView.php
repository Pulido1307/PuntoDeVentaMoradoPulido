<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venta</title>
    <link rel="stylesheet" href="../../css//hojaFormulario.css">
    <link rel="stylesheet" href="../../css/estilosheader.css">
    <link rel="stylesheet" href="../../css/estilosFooter.css">
</head>

<body>

    <header id="header-container">
        <span id="logo-nav">
            <a href="index.php" id="logo_link">
                <img src="../../images/itsulogo.png" alt="" id="img_logo">
            </a>
        </span>
    </header>

    <div class="formulario" id="formVenta">
        <div class="container_triangle"></div>
        <h2 class="formulario_header">Ventas</h2>
        <form class="formulario_container" id="formulario" name="formulario" action="tablaVentaView.php" method="post">
            <p><input type="text" name="input_ns" id="input_ns" placeholder="Número de Serie del Auto" required class="classinput"></p>
            <p><input type="text" name="input_rfc" id="input_rfc" placeholder="RFC del Cliente" required class="classinput"></p>
            <p><input type="submit" value="Generar venta" class="classinput" name="venta"></p>
        </form>
    </div>

    <footer>
        <div class="footer bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

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