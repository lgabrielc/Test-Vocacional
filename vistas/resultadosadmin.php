<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
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

<body style="background-color: #0B0C10;">


    <?php
    require_once("../controlador/conexion.php");
    $conexion = new Conexion();
    $consulta = "SELECT * FROM carreramas WHERE id='1'";
    $resultado = $conexion->consultar($consulta);
    $respdraw = mysqli_fetch_array($resultado); 
    $totalpuntaje=$respdraw['Gestion']+$respdraw['Sistemas']+$respdraw['Industrial']+$respdraw['Redes']+$respdraw['Civil']+$respdraw['Mecanica']+$respdraw['Petrolera']+$respdraw['Ambiental']+$respdraw['Bioquímica'];
    $porgest=$respdraw['Gestion']*100/$totalpuntaje;
    $porsistemas=$respdraw['Sistemas']*100/$totalpuntaje;
    $porindustrial=$respdraw['Industrial']*100/$totalpuntaje;
    $porredes=$respdraw['Redes']*100/$totalpuntaje;
    $porcivil=$respdraw['Civil']*100/$totalpuntaje;
    $pormecanica=$respdraw['Mecanica']*100/$totalpuntaje;
    $porpetrolera=$respdraw['Petrolera']*100/$totalpuntaje;
    $porambiental=$respdraw['Ambiental']*100/$totalpuntaje;
    $porbioquimica=$respdraw['Bioquímica']*100/$totalpuntaje;
    $dataPoints = array(
        array("label"=>"Ing. Gestion ", "y"=> $porgest),
        array("label"=>"Ing. Sistemas", "y"=>$porsistemas),
        array("label"=>"Ing. Industrial", "y"=>$porindustrial),
        array("label"=>"Ing. Redes", "y"=>$porredes),
        array("label"=>"Ing. Civil", "y"=>$porcivil),
        array("label"=>"Ing. Mecánica", "y"=>$pormecanica),
        array("label"=>"Ing. Petrolera", "y"=>$porpetrolera),
        array("label"=>"Ing. Ambiental", "y"=>$porambiental),
        array("label"=>"Ing. Bioquímica", "y"=>$porbioquimica),
    );
    
    $consulta = "SELECT * FROM estudiantes ";
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
                        <th>Carrera 1°</th>
                        <th>Carrera 2°</th>
                        <th>Carrera 3°</th>
                        <th>Carrera 4°</th>
                        <th>Carrera 5°</th>
                        <th>Carrera 6°</th>
                        <th>Carrera 7°</th>
                        <th>Carrera 8°</th>
                        <th>Carrera 9°</th>
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
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <a href="../cerrarsesion.php" class="btn btn-danger text-center">CERRAR SESION</a>
</body>
<script>
    window.onload = function() {
 
 
 var chart = new CanvasJS.Chart("chartContainer", {
     animationEnabled: true,
     title: {
         text: "Carreras con más coincidencias"
     },
     subtitles: [{
         text: "Julio 2021"
     }],
     data: [{
         type: "pie",
         yValueFormatString: "#,##0.00\"%\"",
         indexLabel: "{label} ({y})",
         dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
     }]
 });
 chart.render();
  
 }
</script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
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