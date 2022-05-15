<?php
include_once('MVC/Models/conexionBDModel.php');
if(array_key_exists('eliminar', $_REQUEST)){
    $con = new ConexionDBModel();
    print($_REQUEST['input_ns']);
    if(isset($_REQUEST['input_ns'])){
        $con->bajaAuto($_REQUEST['input_ns']);
    }
}else{
    print('No entre');
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link rel="stylesheet" href="../css/hojaFormulario.css">
</head>

<body>
    <?php
    if (isset($_GET["form"])) {
        $aux = $_GET["form"];
        //echo "<br>Tipo de form = $aux";
        switch ($aux) {
            case "alta":
                echo
        '<div class="formulario" id="formAuto">
            <div class="container_triangle"></div>
            <h2 class="formulario_header">Alta de autos</h2>
            <form class="formulario_container" id="formulario" name="formulario" action="php/matriz.php" method="post">
                <p><input type="text" name="input_ns" id="input_ns" placeholder="Ingresa Número de Serie" required class="classinput"></p>
                <p><input type="text" name="input_marca" id="input_marca" placeholder="Ingresa la Marca" required class="classinput"></p>
                <p><input type="text" name="input_color" id="input_color" placeholder="Ingresa el Color" required class="classinput"></p>
                <p><input type="number" name="input_km" id="input_km" placeholder="Ingresa el KM" required class="classinput"></p>
                <p><input type="number" name="input_modelo" id="input_modelo" placeholder="Ingresa el Modelo" required class="classinput"></p>
                <p>
                    <select name="tipo">
                        <option value="placeholder">Selecciona el Tipo</option>
                        <option value="Manual">Manual</option>
                        <option value="Automatico">Automatico</option>
                    </select>
                </p>
                <p><input type="submit" value="Registrar" class="classinput"></p>
            </form>
        </div>';
                break;

            case "consulta":
                echo 
        '<div class="formulario" id="formAuto">
            <div class="container_triangle"></div>
            <h2 class="formulario_header">Buscar auto</h2>
            <form class="formulario_container" id="formulario" name="formulario" action="php/matriz.php" method="post">
                <p><input type="text" name="input_ns" id="input_ns" placeholder="Ingresa Número de Serie" required
                        class="classinput"></p>
                <p><input type="submit" value="Buscar" class="classinput"></p>
            </form>
            <div class="formulario_container">
                <p><input type="text" name="input_marca" id="input_marca" class="classinput" disabled value="Marca: "></p>
                <p><input type="text" name="input_color" id="input_color" class="classinput" disabled value="Color: "></p>
                <p><input type="text" name="input_km" id="input_km" class="classinput" disabled value="KM: "></p>
                <p><input type="text" name="input_modelo" id="input_modelo" class="classinput" disabled value="Modelo: "></p>
                <p><input type="text" name="input_tipo" id="input_tipo" class="classinput" disabled value="Tipo: "></p>
            </div>
        </div>';
                break;
            
            case "baja":
                echo 
            '<div class="formulario" id="formAuto">
                <div class="container_triangle"></div>
                <h2 class="formulario_header">Baja de auto</h2>
                <form class="formulario_container" id="formulario" name="formulario" action="" method="post">
                    <p><input type="text" name="input_ns" id="input_ns" placeholder="Ingresa Número de Serie" required
                            class="classinput"></p>
                    <p><input type="submit" value="Eliminar" name="eliminar" class="classinput"></p>
                </form>
            </div>';
                break;

            case "actualizar":
                echo
            '<div class="formulario" id="formAuto">
                <div class="container_triangle"></div>
                <h2 class="formulario_header">Actualizar auto</h2>
                <form class="formulario_container" id="formulario" name="formulario" action="php/matriz.php" method="post">
                    <p><input type="text" name="input_ns" id="input_ns" placeholder="Ingresa Número de Serie" required
                            class="classinput"></p>
                    <p><input type="text" name="input_marca" id="input_marca" placeholder="Ingresa la Marca" required class="classinput"></p>
                        <p><input type="text" name="input_color" id="input_color" placeholder="Ingresa el Color" required class="classinput"></p>
                        <p><input type="number" name="input_km" id="input_km" placeholder="Ingresa el KM" required class="classinput"></p>
                        <p><input type="number" name="input_modelo" id="input_modelo" placeholder="Ingresa el Modelo" required class="classinput"></p>
                        <p>
                            <select name="tipo">
                                <option value="placeholder">Selecciona el Tipo</option>
                                <option value="Manual">Manual</option>
                                <option value="Automatico">Automatico</option>
                            </select>
                        </p>
                        <p><input type="submit" value="Actualizar" class="classinput"></p>
                </form>
            </div>';
                break; 
        }
    }
    ?>

</body>

</html>