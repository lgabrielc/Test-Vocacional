<nav>
    <section class="ftco-section">
        <div class="padre1">
            <img class="padre2" src="../img/descarga.png">
        </div>

        <nav style="background-color: #0b0c10!important;" class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div style="margin-left: 40px !important;" class="container">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span> Menu
                </button>
                <form action="#" class="searchform order-lg-last">
                </form>
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"><a href="../vistas/infopersonal.php" class="nav-link">Mi información</a></li>
                        <?php
                        if ($_SESSION['rol'] == 'admin') { ?>
                            <li class="nav-item"><a href="../vistas/listaalumnos.php" class="nav-link">Ver lista de Alumnos</a></li>
                            <li class="nav-item"><a href="../vistas/resultadosadmin.php" class="nav-link">Ver Reporte</a></li>
                        <?php
                        }else{?>
                            <li class="nav-item"><a href="../vistas/resultadoestudiante.php" class="nav-link">Ver Mi Reporte</a></li>
                       <?php }

                        ?>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END nav -->

    </section>
</nav>