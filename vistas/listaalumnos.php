<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion Personal</title>
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

<body>

    <?php 
        include('nav.php');
        require_once("../controlador/conexion.php");
         $conexion = new Conexion();
         $consulta = "SELECT * FROM usuarios WHERE rol='estudiante' ";
         $resultado = $conexion->consultar($consulta);
         $estudiantes = $resultado->fetch_all(MYSQLI_ASSOC);   
    ?>
    <div class="card">
        <div class="card-body">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Rol</th>
                    </tr>
                </thead>
                <tbody>
                 <?php   foreach ($estudiantes as $estudiante) { ?>
                    <tr>
                        <td>
                            <?php echo $estudiante['codigo'] ?>
                        </td>
                        <td>
                            <?php echo $estudiante['nombre'] ?>
                        </td>
                        <td>
                            <?php echo $estudiante['apellido'] ?>
                        </td>
                        <td>
                            <?php echo $estudiante['rol'] ?>
                        </td>
                    </tr>
                    <?php
                        }
                        ?>
                </tbody>
            </table>
        </div>
    </div>
    <a href="../cerrarsesion.php" class="btn btn-danger text-center">CERRAR SESION</a>
</body>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
</html>