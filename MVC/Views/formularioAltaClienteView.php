<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar cliente</title>
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

    <div class="formulario" id="formCliente" name="formCliente">
        <div class="container_triangle"></div>
        <h2 class="formulario_header">Registro de cliente</h2>
        <form class="formulario_container" id="formulario" name="formulario" action="index.php" method="post">
            <p><input type="text" name="input_rfc" id="input_rfc" placeholder="Ingresa el RFC" required class="classinput"></p>
            <p><input type="text" name="input_nombre" id="input_nombre" placeholder="Ingresa el nombre" required class="classinput"></p>
            <p><input type="text" name="input_apellido" id="input_apellido" placeholder="Ingresa el apellido" required class="classinput"></p>
            <p><input type="text" name="input_domicilio" id="input_domicilio" placeholder="Ingresa el domicilio" required class="classinput"></p>
            <p><input type="submit" value="Registrar" class="classinput" name="registrarCliente"></p>
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