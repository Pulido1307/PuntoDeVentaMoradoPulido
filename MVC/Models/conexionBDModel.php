<?php
class ConexionDBModel
{
    private  $user = "root";
    private $pass = "";
    private $host = "127.0.0.1"; //localhost
    private $db = "agencia";
    private $con; //conexion

    public function __construct()
    {
        try {
            $this->con = new mysqli($this->host, $this->user, $this->pass, $this->db);
            //print("Conexion exitosa!!!");
        } catch (Exception $e) {
            print($e->getMessage());
            print("Error!!!");
        }
    }

    public function altaAuto($ns, $marca, $color, $km, $modelo, $tipo, $precio)
    {
        try {
            if (!$this->consultarAutoAux($ns) == true) {
                $sentenciaSQL = "INSERT INTO auto (ns, marca, color, km, modelo, tipo, precio) VALUES('$ns', '$marca', '$color', '$km', '$modelo', '$tipo', '$precio');";
                $this->con->query($sentenciaSQL);
                //print("Datos ingresados correctamente!");
                return "Datos ingresados correctamente!";
            } else {
                //print("Ya existe en la base de datos un auto con este ns!");
                return "Ya existe en la base de datos un auto con este ns!";
            }
        } catch (Exception $e) {
            //print("Error al insertar los datos en la BD! $e");
            return "Error al insertar los datos en la BD! $e";
        }
    }

    public function bajaAuto($ns)
    {
        try {
            if ($this->consultarAutoAux($ns) == true) {
                $sentenciaSQL = "DELETE FROM auto WHERE ns='$ns';";
                $this->con->query($sentenciaSQL);
                //print("Se elimino el auto con el ns $ns!");
                return "Se elimino el auto con el ns $ns!";
            } else {
                //print("No existe el ns $ns!");
                return "No existe el ns $ns!";
            }
        } catch (Exception $e) {
            //print("Error al eliminar al auto $ns de la BD!");
            return "Error al eliminar al auto $ns de la BD!";
        }
    }

    public function actualizarAuto($ns, $marca, $color, $km, $modelo, $tipo, $precio)
    {
        try {
            if ($this->consultarAutoAux($ns) == true) {
                $sentenciaSQL = "UPDATE  auto SET marca='$marca', color='$color', km='$km', modelo='$modelo', tipo='$tipo', precio='$precio' WHERE ns='$ns';";
                $this->con->query($sentenciaSQL);
                //print("Se actualizarón los datos del auto con ns  $ns!");
                return "Se actualizarón los datos del auto con ns  $ns!";
            } else {
                //print("No existe el ns $ns que se desea actualizar!");
                return "No existe el ns $ns que se desea actualizar!";
            }
        } catch (Exception $e) {
            //print("Error al actualizar los datos del auto con ns $ns!");
            return "Error al actualizar los datos del auto con ns $ns!";
        }
    }

    public function consultarAuto($ns)
    {
        try {
            $sentenciaSQL = "SELECT * FROM auto WHERE ns='" . $ns . "';";
            //print("Si existe el usuario $ns!");
            return $this->con->query($sentenciaSQL);
        } catch (Exception $e) {
            //print("Error $e");
            //print("No existe el usuario $ns!");
            return 'Error';
        }
    }

    public function consultarAutoAux($ns)
    {
        try {
            $sentenciaSQL = "SELECT * FROM auto WHERE ns='" . $ns . "';";
            $res = $this->con->query($sentenciaSQL)->fetch_assoc();

            if (!is_null($res)) {
                $GLOBALS['auto'] = $res;
                return true;
            } else {
                $GLOBALS['auto'] = "";
                return false;
            }
        } catch (Exception $e) {
            $GLOBALS['auto'] = "";
            return false;
        }
    }

    public function consultaTodosAutos()
    {
        $sentenciasSQL = "SELECT * FROM auto";
        try {
            return $this->con->query($sentenciasSQL);
            //regresa todos los registros
        } catch (Exception $e) {
            echo $e;
        }
    }

    public function altaCliente($rfc, $nombre, $apellido, $domicilio)
    {
        try {
            if (!$this->consultarClienteAux($rfc) == true) {
                $sentenciaSQL = "INSERT INTO cliente (rfc, nombre, apellido, domicilio) VALUES('$rfc', '$nombre', '$apellido', '$domicilio');";
                $this->con->query($sentenciaSQL);
                return "Datos ingresados correctamente!";
            } else {
                return "Ya existe en la base de datos un cliente con este rfc!";
            }
        } catch (Exception $e) {
            return "Error al insertar los datos en la BD! $e";
        }
    }

    public function consultarClienteAux($rfc)
    {
        try {
            $sentenciaSQL = "SELECT * FROM cliente WHERE rfc='" . $rfc . "';";
            $res = $this->con->query($sentenciaSQL)->fetch_assoc();

            if (!is_null($res)) {
                $GLOBALS['cliente'] = $res;
                return true;
            } else {
                $GLOBALS['cliente'] = "";
                return false;
            }
        } catch (Exception $e) {
            $GLOBALS['cliente'] = "";
            return false;
        }
    }
}
