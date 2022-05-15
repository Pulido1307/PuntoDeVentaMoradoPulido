<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta Auto</title>
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

    <div class="formulario" id="formAuto">
        <div class="container_triangle"></div>
        <h2 class="formulario_header">Alta de autos</h2>
        <form class="formulario_container" id="formulario" name="formulario" action="../Views/index.php" method="post">
            <p><input type="text" name="input_ns" id="input_ns" placeholder="Ingresa Número de Serie" required class="classinput"></p>
            <p><input type="text" name="input_marca" id="input_marca" placeholder="Ingresa la Marca" required class="classinput"></p>
            <p><input type="text" name="input_color" id="input_color" placeholder="Ingresa el Color" required class="classinput"></p>
            <p><input type="number" name="input_km" id="input_km" placeholder="Ingresa el KM" required class="classinput"></p>
            <p><input type="number" name="input_modelo" id="input_modelo" placeholder="Ingresa el Modelo" required class="classinput"></p>
            <p><input type="number" name="input_precio" id="input_precio" placeholder="Ingresa el Precio" required class="classinput"></p>
            <p>
                <select name="tipo">
                    <option value="placeholder">Selecciona el Tipo</option>
                    <option value="Manual">Manual</option>
                    <option value="Automatico">Automatico</option>
                </select>
            </p>
            <p><input type="submit" value="Registrar" class="classinput" name="registrar"></p>
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

</body>

</html>