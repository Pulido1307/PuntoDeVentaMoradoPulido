<?php
include_once('../Controllers/autoController.php');
$objAutoController = new AutoController();
$res = null;
$flag = false;
if (array_key_exists('buscar', $_REQUEST)) {
    if (isset($_REQUEST['input_ns'])) {
        $res = $objAutoController->hacerConsultarAuto($_REQUEST['input_ns']);
        if (empty($res)) {
            $flag = true;
        }
        //echo "<script>alert('$res');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Auto</title>
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
        <h2 class="formulario_header">Buscar auto</h2>
        <form class="formulario_container" id="formulario" name="formulario" action="" method="post">
            <?php
            if (is_null($res)) {
                echo '<p><input type="text" name="input_ns" id="input_ns" placeholder="Ingresa Número de Serie" required class="classinput"></p>';
            } else {
                echo '<p><input type="text" name="input_ns" id="input_ns" placeholder="Ingresa Número de Serie" required class="classinput" value= ' . $res['ns'] . ' ></p>';
            }
            ?>
            <p><input type="submit" value="Buscar" class="classinput" name="buscar"></p>
        </form>
        <div class="formulario_container">
            <?php
            if ($flag) {
                echo "<script>alert('No existe este ns en la base de datos');</script>";
            }

            if (is_null($res)) {
                echo '<p><input type="text" name="input_marca" id="input_marca" class="classinput" disabled value="Marca: "></p>
                <p><input type="text" name="input_color" id="input_color" class="classinput" disabled value="Color: "></p>
                <p><input type="text" name="input_km" id="input_km" class="classinput" disabled value="KM: "></p>
                <p><input type="text" name="input_modelo" id="input_modelo" class="classinput" disabled value="Modelo: "></p>
                <p><input type="text" name="input_tipo" id="input_tipo" class="classinput" disabled value="Tipo: "></p>
                <p><input type="text" name="input_precio" id="input_precio" class="classinput" disabled value="Precio:$ "></p>';
            } else {
                echo '<p><input type="text" name="input_marca" id="input_marca" class="classinput" disabled value="Marca: ' . $res['marca'] . '"></p>
                <p><input type="text" name="input_color" id="input_color" class="classinput" disabled value="Color: ' . $res['color'] . '"></p>
                <p><input type="text" name="input_km" id="input_km" class="classinput" disabled value="KM: ' . $res['km'] . '"></p>
                <p><input type="text" name="input_modelo" id="input_modelo" class="classinput" disabled value="Modelo: ' . $res['modelo'] . '"></p>
                <p><input type="text" name="input_tipo" id="input_tipo" class="classinput" disabled value="Tipo: ' . $res['tipo'] . ' "></p>
                <p><input type="text" name="input_precio" id="input_precio" class="classinput" disabled value="Precio:$ ' . $res['precio'] . '"></p>';
            }
            ?>
        </div>
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