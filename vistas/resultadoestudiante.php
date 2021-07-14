<?php
session_start();
if (isset($_SESSION['codigo'])) { ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../css/index.css">

    <body style="background-color:#1F2833">
        <?php
        require_once("../controlador/conexion.php");
        $codigo = $_SESSION['codigo'];
        $conexion = new Conexion();
        $consulta = "SELECT * FROM estudiantes WHERE codigo='$codigo'";
        $resultado = $conexion->consultar($consulta);
        $estudiantes = $resultado->fetch_all(MYSQLI_ASSOC);
        //       var_dump($estudiantes);
        include('nav.php');
        ?>
        <div class="card">
            <div class="card-body">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Carrera 1° %</th>
                            <th>Carrera 2° %</th>
                            <th>Carrera 3° %</th>
                            <th>Carrera 4° %</th>
                            <th>Carrera 5° %</th>
                            <th>Carrera 6° %</th>
                            <th>Carrera 7° %</th>
                            <th>Carrera 8° %</th>
                            <th>Carrera 9° %</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($estudiantes as $estudiante) { ?>
                            <tr>
                                <td>
                                    <?php echo $estudiante['codigo']; ?>
                                </td>
                                <td>
                                    <?php echo $estudiante['nombre']; ?>
                                </td>
                                <td>
                                    <?php echo $estudiante['apellido']; ?>
                                </td>
                                <td>
                                    <?php echo $estudiante['carrera1']; ?>
                                </td>
                                <td>
                                    <?php echo $estudiante['carrera2']; ?>
                                </td>
                                <td>
                                    <?php echo $estudiante['carrera3']; ?>
                                </td>
                                <td>
                                    <?php echo $estudiante['carrera4']; ?>
                                </td>
                                <td>
                                    <?php echo $estudiante['carrera5']; ?>
                                </td>
                                <td>
                                    <?php echo $estudiante['carrera6']; ?>
                                </td>
                                <td>
                                    <?php echo $estudiante['carrera7']; ?>
                                </td>
                                <td>
                                    <?php echo $estudiante['carrera8']; ?>
                                </td>
                                <td>
                                    <?php echo $estudiante['carrera9']; ?>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <div class="d-flex justify-content-center">
            <form action="mensaje.php" method="post">
                <?php $codigo=$_SESSION['codigo'] ?>
                <input type="hidden" name="codigo" value=<?php echo $codigo ?>>
                <input type="hidden" name="boton" value="boton">
                <button type="submit" class="btn btn-success m-4">HACER OTRO TEST</button>
            </form>

            <a href="../cerrarsesion.php" class="btn btn-danger m-4">CERRAR SESION</a>
        </div>


    </body>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

    </html>
<?php
} else {
    include_once("../mensaje.php");
    $objMensaje = new Mensaje;
    $objMensaje->MostrarMensaje("Error, el usuario no existe, el password es incorrecto o el usuario esta deshabilitado, contacte con el administrador del sistema", "<a href='../index.php'>ir al inicio</a>");
}
?>