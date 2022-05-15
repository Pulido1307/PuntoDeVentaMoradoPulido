<?php
include_once('../Controllers/autoController.php');
$objController = new AutoController();
if (array_key_exists('actualizar', $_REQUEST)) {
    //print($_REQUEST['input_ns']);
    if (isset($_GET['ns']) and isset($_REQUEST['input_marca']) and isset($_REQUEST['input_modelo']) and isset($_REQUEST['input_color']) and isset($_REQUEST['input_km']) and isset($_REQUEST['input_precio']) and isset($_REQUEST['tipo'])) {
        $res = $objController->hacerActualizarAuto($_GET['ns'], $_REQUEST['input_marca'], $_REQUEST['input_color'], $_REQUEST['input_km'], $_REQUEST['input_modelo'], $_REQUEST['tipo'], $_REQUEST['input_precio']);
        echo "<script>alert('$res');</script>";
    } else {
        echo "<script>alert('Datos invalidos');</script>";
    }
}
$objController->hacerConsultaTodosAutos();
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autos en stock</title>
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
        <table class="table table-primary table-striped table-bordered ">
            <thead>
                <tr>
                    <th scope="col">NS</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Color</th>
                    <th scope="col">KM</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Tipo</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($aux = $GLOBALS['autos']->fetch_assoc()) { ?>
                    <tr class="table-light">
                        <th scope="row"> <?php echo $aux['ns'] ?> </th>
                        <td><?php echo $aux['marca'] ?></td>
                        <td><?php echo $aux['color'] ?></td>
                        <td><?php echo $aux['km'] ?></td>
                        <td><?php echo $aux['precio'] ?></td>
                        <td><?php echo $aux['modelo'] ?></td>
                        <td><?php echo $aux['tipo'] ?></td>
                        <td>
                            <a href="formularioAutoModificarView.php?ns=<?php echo $aux['ns']; ?>&marca=<?php echo $aux['marca']; ?>&color=<?php echo $aux['color']; ?>&km=<?php echo $aux['km']; ?>&precio=<?php echo $aux['precio']; ?>&modelo=<?php echo $aux['modelo']; ?>&tipo=<?php echo $aux['tipo']; ?>">
                                <button type="button" class="btn btn-primary backop">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-pencil-square btn_eye" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                    </svg>
                                </button>
                            </a>
                        </td>
                    </tr>
                <?php   } ?>
            </tbody>
        </table>

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