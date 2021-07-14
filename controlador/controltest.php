<?php
require_once("../controlador/conexion.php");
$conexion = new Conexion();
$codigo        = (isset($_POST['codigo'])) ? $_POST['codigo'] : '';
$nombre        = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$apellido     = (isset($_POST['apellido'])) ? $_POST['apellido'] : '';
$ncarrera1     = (isset($_POST['carrera1'])) ? $_POST['carrera1'] : '';
$porcentaje1     = (isset($_POST['porcentaje1'])) ? $_POST['porcentaje1'] : '';
$ncarrera2     = (isset($_POST['carrera2'])) ? $_POST['carrera2'] : '';
$porcentaje2     = (isset($_POST['porcentaje2'])) ? $_POST['porcentaje2'] : '';
$ncarrera3     = (isset($_POST['carrera3'])) ? $_POST['carrera3'] : '';
$porcentaje3     = (isset($_POST['porcentaje3'])) ? $_POST['porcentaje3'] : '';
$ncarrera4     = (isset($_POST['carrera4'])) ? $_POST['carrera4'] : '';
$porcentaje4     = (isset($_POST['porcentaje4'])) ? $_POST['porcentaje4'] : '';
$ncarrera5     = (isset($_POST['carrera5'])) ? $_POST['carrera5'] : '';
$porcentaje5     = (isset($_POST['porcentaje5'])) ? $_POST['porcentaje5'] : '';
$ncarrera6     = (isset($_POST['carrera6'])) ? $_POST['carrera6'] : '';
$porcentaje6     = (isset($_POST['porcentaje6'])) ? $_POST['porcentaje6'] : '';
$ncarrera7     = (isset($_POST['carrera7'])) ? $_POST['carrera7'] : '';
$porcentaje7     = (isset($_POST['porcentaje7'])) ? $_POST['porcentaje7'] : '';
$ncarrera8     = (isset($_POST['carrera8'])) ? $_POST['carrera8'] : '';
$porcentaje8     = (isset($_POST['porcentaje8'])) ? $_POST['porcentaje8'] : '';
$ncarrera9     = (isset($_POST['carrera9'])) ? $_POST['carrera9'] : '';
$porcentaje9     = (isset($_POST['porcentaje9'])) ? $_POST['porcentaje9'] : '';

$ncarrera1 = trim($ncarrera1);
$ncarrera2 = trim($ncarrera2);
$ncarrera3 = trim($ncarrera3);
$ncarrera4 = trim($ncarrera4);
$ncarrera5 = trim($ncarrera5);
$ncarrera6 = trim($ncarrera6);
$ncarrera7 = trim($ncarrera7);
$ncarrera8 = trim($ncarrera8);
$ncarrera9 = trim($ncarrera9);
$porcentaje1 = trim($porcentaje1);
$porcentaje2 = trim($porcentaje2);
$porcentaje3 = trim($porcentaje3);
$porcentaje4 = trim($porcentaje4);
$porcentaje5 = trim($porcentaje5);
$porcentaje6 = trim($porcentaje6);
$porcentaje7 = trim($porcentaje7);
$porcentaje8 = trim($porcentaje8);
$porcentaje9 = trim($porcentaje9);
$carrera1 = $ncarrera1 . $porcentaje1;
$carrera2 = $ncarrera2 . $porcentaje2;
$carrera3 = $ncarrera3 . $porcentaje3;
$carrera4 = $ncarrera4 . $porcentaje4;
$carrera5 = $ncarrera5 . $porcentaje5;
$carrera6 = $ncarrera6 . $porcentaje6;
$carrera7 = $ncarrera7 . $porcentaje7;
$carrera8 = $ncarrera8 . $porcentaje8;
$carrera9 = $ncarrera9 . $porcentaje9;

$conexion = new Conexion();
$consulta = "SELECT * FROM estudiantes WHERE codigo='$codigo' ";
$resultado = $conexion->consultar($consulta);
$filares = mysqli_fetch_array($resultado);
/////////////////////////////////////////////////////////////
if (is_array($filares)) {

    $consulta = "SELECT * FROM estudiantes WHERE codigo='$codigo'";
    $resultado = $conexion->consultar($consulta);
    $resultado = mysqli_fetch_array($resultado);
    $carreraescojida = $resultado['carrera1'];
    $newcarreraescojida = trim($carreraescojida);
    $newcarreraescojida = substr($newcarreraescojida, 0, -2);
    if ($newcarreraescojida == "Ing.Gestión") {
        $consulta = "SELECT * FROM carreramas WHERE id='1' ";
        $resultado = $conexion->consultar($consulta);
        $resultado = mysqli_fetch_array($resultado);
        $numdato = $resultado['Gestion'];
        $guardarnuevodato = $numdato - 1;
        $consulta = "UPDATE carreramas SET Gestion='$guardarnuevodato' WHERE id='1' ";
        $respuesta = $conexion->consultar($consulta);
    } elseif ($newcarreraescojida == "Ing.Sistemas") {
        $consulta = "SELECT * FROM carreramas WHERE id='1' ";
        $resultado = $conexion->consultar($consulta);
        $resultado = mysqli_fetch_array($resultado);
        $numdato = $resultado['Sistemas'];
        $guardarnuevodato = $numdato - 1;
        $consulta = "UPDATE carreramas SET Sistemas='$guardarnuevodato' WHERE id='1' ";
        $respuesta = $conexion->consultar($consulta);
    } elseif ($newcarreraescojida == "Ing.Industrial") {
        $consulta = "SELECT * FROM carreramas WHERE id='1' ";
        $resultado = $conexion->consultar($consulta);
        $resultado = mysqli_fetch_array($resultado);
        $numdato = $resultado['Industrial'];
        $guardarnuevodato = $numdato - 1;
        $consulta = "UPDATE carreramas SET Industrial='$guardarnuevodato' WHERE id='1' ";
        $respuesta = $conexion->consultar($consulta);
    } elseif ($newcarreraescojida == "Ing.Redes") {
        $consulta = "SELECT * FROM carreramas WHERE id='1' ";
        $resultado = $conexion->consultar($consulta);
        $resultado = mysqli_fetch_array($resultado);
        $numdato = $resultado['Redes'];
        $guardarnuevodato = $numdato - 1;
        $consulta = "UPDATE carreramas SET Redes='$guardarnuevodato' WHERE id='1' ";
        $respuesta = $conexion->consultar($consulta);
    } elseif ($newcarreraescojida == "Ing.Civil") {
        $consulta = "SELECT * FROM carreramas WHERE id='1' ";
        $resultado = $conexion->consultar($consulta);
        $resultado = mysqli_fetch_array($resultado);
        $numdato = $resultado['Civil'];
        $guardarnuevodato = $numdato - 1;
        $consulta = "UPDATE carreramas SET Civil='$guardarnuevodato' WHERE id='1' ";
        $respuesta = $conexion->consultar($consulta);
    } elseif ($newcarreraescojida == "Ing.Mecánica") {
        $consulta = "SELECT * FROM carreramas WHERE id='1' ";
        $resultado = $conexion->consultar($consulta);
        $resultado = mysqli_fetch_array($resultado);
        $numdato = $resultado['Mecanica'];
        $guardarnuevodato = $numdato - 1;
        $consulta = "UPDATE carreramas SET Mecanica='$guardarnuevodato' WHERE id='1' ";
        $respuesta = $conexion->consultar($consulta);
    } elseif ($newcarreraescojida == "Ing.Petrolera") {
        $consulta = "SELECT * FROM carreramas WHERE id='1' ";
        $resultado = $conexion->consultar($consulta);
        $resultado = mysqli_fetch_array($resultado);
        $numdato = $resultado['Petrolera'];
        $guardarnuevodato = $numdato - 1;
        $consulta = "UPDATE carreramas SET Petrolera='$guardarnuevodato' WHERE id='1' ";
        $respuesta = $conexion->consultar($consulta);
    } elseif ($newcarreraescojida == "Ing.Ambiental") {
        $consulta = "SELECT * FROM carreramas WHERE id='1' ";
        $resultado = $conexion->consultar($consulta);
        $resultado = mysqli_fetch_array($resultado);
        $numdato = $resultado['Ambiental'];
        $guardarnuevodato = $numdato - 1;
        $consulta = "UPDATE carreramas SET Ambiental='$guardarnuevodato' WHERE id='1' ";
        $respuesta = $conexion->consultar($consulta);
    } elseif ($newcarreraescojida == "Ing.Bioquímica") {
        $consulta = "SELECT * FROM carreramas WHERE id='1' ";
        $resultado = $conexion->consultar($consulta);
        $resultado = mysqli_fetch_array($resultado);
        $numdato = $resultado['Bioquímica'];
        $guardarnuevodato = $numdato - 1;
        $consulta = "UPDATE carreramas SET Bioquímica='$guardarnuevodato' WHERE id='1' ";
        $respuesta = $conexion->consultar($consulta);
    }

    if ($ncarrera1 == "Ing.Gestión") {
        $consulta = "SELECT * FROM carreramas";
        $resultado = $conexion->consultar($consulta);
        $resultado = mysqli_fetch_array($resultado);
        $numdato = $resultado['Gestion'];
        $guardarnuevodato = $numdato + 1;
        $consulta = "UPDATE carreramas SET Gestion='$guardarnuevodato' WHERE id='1' ";
        $respuesta = $conexion->consultar($consulta);
    } elseif ($ncarrera1 == "Ing.Sistemas") {
        $consulta = "SELECT * FROM carreramas";
        $resultado = $conexion->consultar($consulta);
        $resultado = mysqli_fetch_array($resultado);
        $numdato = $resultado['Sistemas'];
        $guardarnuevodato = $numdato + 1;
        $consulta = "UPDATE carreramas SET Sistemas='$guardarnuevodato' WHERE id='1' ";
        $respuesta = $conexion->consultar($consulta);
    } elseif ($ncarrera1 == "Ing.Industrial ") {
        $consulta = "SELECT * FROM carreramas";
        $resultado = $conexion->consultar($consulta);
        $resultado = mysqli_fetch_array($resultado);
        $numdato = $resultado['Industrial'];
        $guardarnuevodato = $numdato + 1;
        $consulta = "UPDATE carreramas SET Industrial='$guardarnuevodato' WHERE id='1' ";
        $respuesta = $conexion->consultar($consulta);
    } elseif ($ncarrera1 == "Ing.Redes") {
        $consulta = "SELECT * FROM carreramas";
        $resultado = $conexion->consultar($consulta);
        $resultado = mysqli_fetch_array($resultado);
        $numdato = $resultado['Redes'];
        $guardarnuevodato = $numdato + 1;
        $consulta = "UPDATE carreramas SET Redes='$guardarnuevodato' WHERE id='1' ";
        $respuesta = $conexion->consultar($consulta);
    } elseif ($ncarrera1 == "Ing.Civil") {
        $consulta = "SELECT * FROM carreramas";
        $resultado = $conexion->consultar($consulta);
        $resultado = mysqli_fetch_array($resultado);
        $numdato = $resultado['Civil'];
        $guardarnuevodato = $numdato + 1;
        $consulta = "UPDATE carreramas SET Civil='$guardarnuevodato' WHERE id='1' ";
        $respuesta = $conexion->consultar($consulta);
    } elseif ($ncarrera1 == "Ing.Mecánica") {
        $consulta = "SELECT * FROM carreramas";
        $resultado = $conexion->consultar($consulta);
        $resultado = mysqli_fetch_array($resultado);
        $numdato = $resultado['Mecanica'];
        $guardarnuevodato = $numdato + 1;
        $consulta = "UPDATE carreramas SET Mecanica='$guardarnuevodato' WHERE id='1' ";
        $respuesta = $conexion->consultar($consulta);
    } elseif ($ncarrera1 == "Ing.Petrolera") {
        $consulta = "SELECT * FROM carreramas";
        $resultado = $conexion->consultar($consulta);
        $resultado = mysqli_fetch_array($resultado);
        $numdato = $resultado['Petrolera'];
        $guardarnuevodato = $numdato + 1;
        $consulta = "UPDATE carreramas SET Petrolera='$guardarnuevodato' WHERE id='1' ";
        $respuesta = $conexion->consultar($consulta);
    } elseif ($ncarrera1 == "Ing.Ambiental") {
        $consulta = "SELECT * FROM carreramas";
        $resultado = $conexion->consultar($consulta);
        $resultado = mysqli_fetch_array($resultado);
        $numdato = $resultado['Ambiental'];
        $guardarnuevodato = $numdato + 1;
        $consulta = "UPDATE carreramas SET Ambiental='$guardarnuevodato' WHERE id='1' ";
        $respuesta = $conexion->consultar($consulta);
    } elseif ($ncarrera1 == "Ing.Bioquímica") {
        $consulta = "SELECT * FROM carreramas";
        $resultado = $conexion->consultar($consulta);
        $resultado = mysqli_fetch_array($resultado);
        $numdato = $resultado['Bioquímica'];
        $guardarnuevodato = $numdato + 1;
        $consulta = "UPDATE carreramas SET Bioquímica='$guardarnuevodato' WHERE id='1' ";
        $respuesta = $conexion->consultar($consulta);
    }
    $consulta = "UPDATE estudiantes SET carrera1='$carrera1', carrera2='$carrera2', carrera3='$carrera3', carrera4='$carrera4', carrera5='$carrera5', carrera6='$carrera6', carrera7='$carrera7', carrera8='$carrera8', carrera9='$carrera9' WHERE codigo = '$codigo' ";
    $respuesta = $conexion->consultar($consulta);
    require('../vistas/mensaje.php');
} else {
    $ncarrera1 = trim($ncarrera1);
    if ($ncarrera1 =="Ing.Gestion") {
        $consulta = "SELECT * FROM carreramas";
        $resultado = $conexion->consultar($consulta);
        $resultado = mysqli_fetch_array($resultado);
        $numdato = $resultado['Gestion'];
        $guardarnuevodato = $numdato + 1;
        $consulta = "UPDATE carreramas SET Gestion='$guardarnuevodato' WHERE id='1' ";
        $respuesta = $conexion->consultar($consulta);
    } elseif ($ncarrera1 =="Ing.Sistemas") {
        $consulta = "SELECT * FROM carreramas";
        $resultado = $conexion->consultar($consulta);
        $resultado = mysqli_fetch_array($resultado);
        $numdato = $resultado['Sistemas'];
        $guardarnuevodato = $numdato + 1;
        $consulta = "UPDATE carreramas SET Sistemas='$guardarnuevodato' WHERE id='1' ";
        $respuesta = $conexion->consultar($consulta);
    } elseif ($ncarrera1 =="Ing.Industrial") {
        $consulta = "SELECT * FROM carreramas";
        $resultado = $conexion->consultar($consulta);
        $resultado = mysqli_fetch_array($resultado);
        $numdato = $resultado['Industrial'];
        $guardarnuevodato = $numdato + 1;
        $consulta = "UPDATE carreramas SET Industrial='$guardarnuevodato' WHERE id='1' ";
        $respuesta = $conexion->consultar($consulta);
    } elseif ($ncarrera1 =="Ing.Redes") {
        $consulta = "SELECT * FROM carreramas";
        $resultado = $conexion->consultar($consulta);
        $resultado = mysqli_fetch_array($resultado);
        $numdato = $resultado['Redes'];
        $guardarnuevodato = $numdato + 1;
        $consulta = "UPDATE carreramas SET Redes='$guardarnuevodato' WHERE id='1' ";
        $respuesta = $conexion->consultar($consulta);
    } elseif ($ncarrera1 =="Ing.Civil") {
        $consulta = "SELECT * FROM carreramas";
        $resultado = $conexion->consultar($consulta);
        $resultado = mysqli_fetch_array($resultado);
        $numdato = $resultado['Civil'];
        $guardarnuevodato = $numdato + 1;
        $consulta = "UPDATE carreramas SET Civil='$guardarnuevodato' WHERE id='1' ";
        $respuesta = $conexion->consultar($consulta);
    } elseif ($ncarrera1 =="Ing.Mecánica") {
        $consulta = "SELECT * FROM carreramas";
        $resultado = $conexion->consultar($consulta);
        $resultado = mysqli_fetch_array($resultado);
        $numdato = $resultado['Mecanica'];
        $guardarnuevodato = $numdato + 1;
        $consulta = "UPDATE carreramas SET Mecanica='$guardarnuevodato' WHERE id='1' ";
        $respuesta = $conexion->consultar($consulta);
    } elseif ($ncarrera1 =="Ing.Petrolera") {
        $consulta = "SELECT * FROM carreramas";
        $resultado = $conexion->consultar($consulta);
        $resultado = mysqli_fetch_array($resultado);
        $numdato = $resultado['Petrolera'];
        $guardarnuevodato = $numdato + 1;
        $consulta = "UPDATE carreramas SET Petrolera='$guardarnuevodato' WHERE id='1' ";
        $respuesta = $conexion->consultar($consulta);
    } elseif ($ncarrera1 =="Ing.Ambiental") {
        $consulta = "SELECT * FROM carreramas";
        $resultado = $conexion->consultar($consulta);
        $resultado = mysqli_fetch_array($resultado);
        $numdato = $resultado['Ambiental'];
        $guardarnuevodato = $numdato + 1;
        $consulta = "UPDATE carreramas SET Ambiental='$guardarnuevodato' WHERE id='1' ";
        $respuesta = $conexion->consultar($consulta);
    } elseif ($ncarrera1 =="Ing.Bioquímica") {
        $consulta = "SELECT * FROM carreramas";
        $resultado = $conexion->consultar($consulta);
        $resultado = mysqli_fetch_array($resultado);
        $numdato = $resultado['Bioquímica'];
        $guardarnuevodato = $numdato + 1;
        $consulta = "UPDATE carreramas SET Bioquímica='$guardarnuevodato' WHERE id='1' ";
        $respuesta = $conexion->consultar($consulta);
    }
    $consulta = "INSERT INTO estudiantes(codigo,nombre, apellido, carrera1,carrera2, carrera3, carrera4,carrera5,carrera6,carrera7,carrera8,carrera9) 
    VALUES('$codigo','$nombre', '$apellido', '$carrera1','$carrera2', '$carrera3', '$carrera4','$carrera5','$carrera6','$carrera7','$carrera8','$carrera9') ";
    $resultado = $conexion->consultar($consulta);

    require('../vistas/mensaje.php');
}
?>