<?php
if (isset($_SESSION['codigo']) || isset($_POST['boton']) || isset($_POST['codigo']) ) { ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="../css/estilosMensaje.css">
    </head>

    <body>
        <div class="cont1">
            <div class="titu">
                <div>EL TEST YA HA SIDO ENVIADO</div>
            </div>
            <?php
            ?>
            <div class="cont2">
                <div class="formu">
                    <form action="../vistas/resultadoestudiante.php" method="post">
                        <input type="hidden" name="codigo" value="<?php echo $_SESSION['codigo']; ?>">
                        <button type="submit" class="btn btn-info">VER RESULTADO</button>
                    </form>
                </div>
                <div class="formu">
                    <form action="../controlador/controlnuevotest.php" method="post">
                        <input type="hidden" name="user" value="<?php echo $_SESSION['codigo']; ?>">
                        <input type="hidden" name="password" value="<?php echo $_SESSION['password']; ?>">
                        <input type="hidden" name="boton" value="1">
                        <button style="color: #66FCF1;background-color: #212529; padding: 11px;margin-top: -4px;" type="submit" class="btn btn-success">VOLVER A LLENAR CUESTIONARIO</button>
                    </form>
                </div>
                <div class="formu">
                    <a class="btn btn-danger" href="../cerrarsesion.php">Salir del Sistema</a>
                </div>
            </div>
        </div>
    </body>

    </html>
<?php
} else {
    include_once("../mensaje.php");
    $objMensaje = new Mensaje;
    $objMensaje->MostrarMensaje("Error, el usuario no existe, el password es incorrecto o el usuario esta deshabilitado, contacte con el administrador del sistema", "<a href='../index.php'>ir al inicio</a>");
}
?>