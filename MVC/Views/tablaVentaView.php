<?php
include_once('../Controllers/ventaController.php');
include_once('../Controllers/autoController.php');

$objVentaController = new VentaController();
$objAutoController = new AutoController();

if (array_key_exists('venta', $_REQUEST)) {
    //print($_REQUEST['input_ns']);
    if (isset($_REQUEST['input_ns']) and isset($_REQUEST['input_rfc'])) {
        $res = $objVentaController->hacerVenta($_REQUEST['input_ns'], $_REQUEST['input_rfc']);
        echo "<script>alert('$res');</script>";
    }
}
$objAutoController->hacerConsultaTodosAutos();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura de Venta</title>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="../../css/bootstrap.css" rel="stylesheet">
    
    <link rel="stylesheet" href="../../css/formularioSelect.css">
    <link rel="stylesheet" href="../../css/estilosheader.css">
    <link rel="stylesheet" href="../../css/estilosFooter.css">
    


    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">

</head>

<body>


    <header id="header-container">
        <span id="logo-nav">
            <a href="index.php" id="logo_link">
                <img src="../../images/itsulogo.png" alt="" id="img_logo">
            </a>
        </span>
    </header>


    <div class="formulario" id="formAuto">
        <div class="container_triangle"></div>
        <h2 class="formulario_header">Agregar autos</h2>
        <form class="formulario_container" id="formularioAgregarAuto" name="formularioAgregarAuto" action="" method="post">
            <p>

                <select name="selectAuto" id="selectAuto" aria-placeholder="Selecciona un auto...">
                    <option value="vacio">Selecciona un auto...</option>
                    <?php  while ($aux = $GLOBALS['autos']->fetch_assoc()) { ?>
                        <option value="<?php echo $aux['ns'].' - '.$aux['marca'].' - '.$aux['precio']?>">
                         <?php echo $aux['ns'].' - '.$aux['marca'].' - $'.$aux['precio'] ?> </option>
                    <?php } ?>

                </select>
            </p>
            <p><input type="submit" value="Agregar" class="classinput" name="agregarAuto" id="agregarAuto"></p>
        </form>
    </div>


    <div class="container_tabla">
        <?php
        if (strcmp($res, "Datos correctos") == 0) { ?>
            <table class="table table-light table-striped table-hover table-bordered">
                <th>Factura de venta</th>
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
                        <th>Números de Serie</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td><div id="contenedor_ns"></div></td><!--Número de serie-->
                        <td><div id="contenedor_marca"></div></td><!--Marca del auto-->
                        <td><div id="contenedor_precio"></div></td><!--Precio-->
                    </tr>
                    <tr>
                        <td></td>
                        <td>Subtotal</td>
                        <td><div id="contendor_subtotal"></div></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>IVA</td>
                        <td><div id="contenedor_iva"></div></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Total</td>
                        <td><div id="contenedor_precio_total"></div></td>
                    </tr>
                </tbody>
            </table>
        <?php } else { ?>

        <?php } ?>
        <button id="button_guardar">Guardar</button>
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
    <script src="../../js/jsAgregarAuto.js"></script>

</body>

</html>