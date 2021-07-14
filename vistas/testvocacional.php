<!DOCTYPE html>
<html lang="es-PE">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Vocacional</title>
    
    <link rel="stylesheet" href="../css/index.css">
    <script type="text/javascript" src="../js/index.js"> </script>
    <script type="text/javascript" src="../js/resultado.js"> </script>
    <script type="text/javascript" src="../js/tau-prolog.js"> </script>
    <script type="text/javascript" src="../js/testVocacional.js"> </script>

</head>

<body style="background-color:#C5C6C7">
    <div class="padre1">
        <img class="padre" src="../img/descarga.png">
    </div>
    <nav>
    </nav>
    <aside></aside>
    <main>
        <div style="color:#212529" id="styleE">
            <p id="inicio">Test Vocacional</p>

            <div class="indi">
                <p id="indicacion">Seleccione las respuestas y después presione el <strong>boton de evaluar</strong>. <br>
                <br> Cada pregunta
                está basada en
                una habilidad del perfil de <strong>ingreso</strong> de cada carrera que oferta la Universidad Nacional
                Tecnologica de Lima Sur.</p>
            </div>
        </div>
        <div id=primeras>
            <div id="p1">
                <p><strong> 1. ¿Se te da con facilidad resolver problemas de la vida cotidiana?</p></strong>
                <form name="FORMP1">
                    <input type="radio" id="idP1R1" name="idP1" value="1">
                    <label for="No">a) No.</label><br>
                    <input type="radio" id="idP1R2" name="idP1" value="2">
                    <label for="No">b) Sí.</label>
                </form>
            </div>
            <div id="p2">
                <strong>
                    <p>2. ¿Una de tus mayores virtudes es el razonamiento lógico-matemático?</p>
                </strong>
                <form name="FORMP2">
                    <input type="radio" id="idP2R1" name="idP2" value="1">
                    <label for="No">a) No, no se me da.</label><br>
                    <input type="radio" id="idP2R2" name="idP2" value="2">
                    <label for="No">b) Sí, pero no soy tan bueno.</label><br>
                    <input type="radio" id="idP2R3" name="idP2" value="3">
                    <label for="No">c) Sí, soy excelente.</label>

                </form>
            </div>
            <div id="p3">
                <p><strong>3. ¿Disfrutas hacer experimentos y trabajo de laboratorio?</strong></p>
                <form name="FORMP3">
                    <input type="radio" id="idP3R1" name="idP3" value="1">
                    <label for="No">a) Poco.</label><br>
                    <input type="radio" id="idP3R2" name="idP3" value="2">
                    <label for="No">b) Sí.</label><br>
                    <input type="radio" id="idP3R3" name="idP3" value="3">
                    <label for="No">c) Bastante.</label>
                </form>
            </div>
            <div id="p4">
                <strong>
                    <p>4. ¿Te sientes capacitado para contribuir a un mejor rendimiento de una empresa?</p>
                </strong>
                <form name="FORMP4">
                    <input type="radio" id="idP4R1" name="idP4" value="1">
                    <label for="No">a) Poco.</label><br>
                    <input type="radio" id="idP4R2" name="idP4" value="2">
                    <label for="No">b) Sí.</label><br>
                    <input type="radio" id="idP4R3" name="idP4" value="3">
                    <label for="No">c) Mucho.</label>
                </form>
            </div>
            <div id=p5>
                <strong>
                    <p>5. ¿Te mantienes al día de la nuevas tendencias tecnológicas?</p>
                </strong>
                <form name="FORMP5">
                    <input type="radio" id="idP5R1" name="idP5" value="1">
                    <label for="No">a) No lo hago.</label><br>
                    <input type="radio" id="idP5R2" name="idP5" value="2">
                    <label for="No">b) A veces.</label><br>
                    <input type="radio" id="idP5R3" name="idP5" value="3">
                    <label for="No">c) Sí, bastante.</label>
                </form>
            </div>
            <div id="p6">
                <strong>
                    <p>6. ¿Consideras que eres emprendedor?</p>
                </strong>
                <form name="FORMP6">
                    <input type="radio" id="idP6R1" name="idP6" value="1">
                    <label for="No">a) No.</label><br>
                    <input type="radio" id="idP6R2" name="idP6" value="2">
                    <label for="No">b) Tal vez.</label><br>
                    <input type="radio" id="idP6R3" name="idP6" value="3">
                    <label for="No">c) Sí, me considero emprendedor.</label>
                </form>
            </div>
            <div id="p7">
                <strong>
                    <p>7. ¿De qué nivel es tu conocimiento geográfico?</p>
                </strong>
                <form name="FORMP7">
                    <input type="radio" id="idP7R1" name="idP7" value="1">
                    <label for="No">a) Bajo.</label><br>
                    <input type="radio" id="idP7R2" name="idP7" value="2">
                    <label for="No">b) Normal.</label><br>
                    <input type="radio" id="idP7R3" name="idP7" value="3">
                    <label for="No">c) Alta.</label>
                </form>
            </div>
            <div id="p8">
                <strong>
                    <p>8. ¿Tienes liderazgo al trabajar en grupo?</p>
                </strong>
                <form name="FORMP8">
                    <input type="radio" id="idP8R1" name="idP8" value="1">
                    <label for="No">a) No, dejo que otros decidan.</label><br>
                    <input type="radio" id="idP8R2" name="idP8" value="2">
                    <label for="No">b) Solo tomo la iniciativa cuando nadie más quiere.</label><br>
                    <input type="radio" id="idP8R3" name="idP8" value="3">
                    <label for="No">c) Sí, soy un líder nato.</label>
                </form>
            </div>
            <div id="p9">
                <strong>
                    <p>9. ¿Tienes bases de programación o informática?</p>
                </strong>
                <form name="FORMP9">
                    <input type="radio" id="idP9R1" name="idP9" value="1">
                    <label for="No">a) No se me da muy bien.</label><br>
                    <input type="radio" id="idP9R2" name="idP9" value="2">
                    <label for="No">b) Sí, lo suficiente.</label><br>
                    <input type="radio" id="idP9R3" name="idP9" value="3">
                    <label for="No">c) Sí, sé mucho.</label>
                </form>
            </div>
            <div id="p10">
                <strong>
                    <p>10. ¿Te gustaría colaborar implementando y evaluando sistemas de producción?</p>
                </strong>
                <form name="FORMP10">
                    <input type="radio" id="idP10R1" name="idP10" value="1">
                    <label for="No">a) Poco.</label><br>
                    <input type="radio" id="idP10R2" name="idP10" value="2">
                    <label for="No">b) Tal vez.</label><br>
                    <input type="radio" id="idP10R3" name="idP10" value="3">
                    <label for="No">c) Bastante.</label>
                </form>
            </div>
        </div>
        <div id="segundas">
            <div id="p11">
                <strong>
                    <p>11. ¿Sientes interés por la electrónica y los componentes de las máquinas?</p>
                </strong>
                <form name="FORMP11">
                    <input type="radio" id="idP11R1" name="idP11" value="1">
                    <label for="No">a) Por lo general no.</label><br>
                    <input type="radio" id="idP11R2" name="idP11" value="2">
                    <label for="No">b) Sí, me gusta.</label><br>
                    <input type="radio" id="idP11R3" name="idP11" value="3">
                    <label for="No">c) Es algo que me encanta.</label>
                </form>
            </div>
            <div id="p12">
                <strong>
                    <p>12. ¿Consideras que las energías renovables son el futuro?</p>
                </strong>
                <form name="FORMP12">
                    <input type="radio" id="idP12R1" name="idP12" value="1">
                    <label for="No">a) No, dependeremos de combustibles fósiles.</label><br>
                    <input type="radio" id="idP12R2" name="idP12" value="2">
                    <label for="No">b) Sí, pero todavia queda mucho.</label><br>
                    <input type="radio" id="idP12R3" name="idP12" value="3">
                    <label for="No">c) Sí, muy pronto estaran completamente integradas en nuestra sociedad.</label>
                </form>
            </div>
            <div id="p13">
                <strong>
                    <p>13. ¿Se te da bien el dibujo técnico?</p>
                </strong>
                <form name="FORMP13">
                    <input type="radio" id="idP13R1" name="idP13" value="1">
                    <label for="No">a) No demasiado.</label><br>
                    <input type="radio" id="idP13R2" name="idP13" value="2">
                    <label for="No">b) Sí, lo necesario.</label><br>
                    <input type="radio" id="idP13R3" name="idP13" value="3">
                    <label for="No">c) Sí, se me da realmente.</label>
                </form>
            </div>
            <div id="p14">
                <strong>
                    <p>14. ¿Te interesa el estudio de los hidrocarburos?</p>
                </strong>
                <form name="FORMP14">
                    <input type="radio" id="idP14R1" name="idP14" value="1">
                    <label for="No">a) No me interesa.</label><br>
                    <input type="radio" id="idP14R2" name="idP14" value="2">
                    <label for="No">b) Tal vez.</label><br>
                    <input type="radio" id="idP14R3" name="idP14" value="3">
                    <label for="No">c) Me interesa bastante.</label>
                </form>
            </div>
            <div id="p15">
                <strong>
                    <p>15. ¿Te importa la naturaleza y los animales?</p>
                </strong>
                <form name="FORMP15">
                    <input type="radio" id="idP15R1" name="idP15" value="1">
                    <label for="No">a) No mucho.</label><br>
                    <input type="radio" id="idP15R2" name="idP15" value="2">
                    <label for="No">b) A veces.</label><br>
                    <input type="radio" id="idP15R3" name="idP15" value="3">
                    <label for="No">c) Me importa mucho.</label>
                </form>
            </div>
            <div id="p16">
                <strong>
                    <p>16. ¿Te gusta la exploración de campo?</p>
                </strong>
                <form action="/index.html" name="FORMP16">
                    <input type="radio" id="idP16R1" name="idP16" value="1">
                    <label for="No">a) No me gusta.</label><br>
                    <input type="radio" id="idP16R2" name="idP16" value="2">
                    <label for="No">b) Tal vez.</label><br>
                    <input type="radio" id="idP16R3" name="idP16" value="3">
                    <label for="No">c) Me fascina.</label>
                </form>
            </div>
            <div id="p17">
                <strong>
                    <p>17. ¿Te interesa saber de qué está conformada la materia y los organismos?</p>
                </strong>
                <form name="FORMP17">
                    <input type="radio" id="idP17R1" name="idP17" value="1">
                    <label for="No">a) No me imteresa.</label><br>
                    <input type="radio" id="idP17R2" name="idP17" value="2">
                    <label for="No">b) Sí.</label><br>
                    <input type="radio" id="idP17R3" name="idP17" value="3">
                    <label for="No">c) Me interesa mucho.</label>
                </form>
            </div>
            <div id="p18">
                <strong>
                    <p>18. ¿Quieres aprender los fundamentos físicos del electromagnetismo?</p>
                </strong>
                <form name="FORMP18">
                    <input type="radio" id="idP18R1" name="idP18" value="1">
                    <label for="No">a) No, prefiere saber de otras materias.</label><br>
                    <input type="radio" id="idP18R2" name="idP18" value="2">
                    <label for="No">b) Sí, tengo interés</label><br>
                    <input type="radio" id="idP18R3" name="idP18" value="3">
                    <label for="No">c) ¡Me encantaría!</label>
                </form>
            </div>
            <div id="p19">
                <strong>
                    <p>19. ¿Te gustaría saber cómo se desarrollan las aplicaciones que utilizas diariamente en tu
                        celular, computadora
                        u otro dispositvo?</p>
                </strong>
                <form name="FORMP19">
                    <input type="radio" id="idP19R1" name="idP19" value="1">
                    <label for="No">a) No, no me llama la atención.</label><br>
                    <input type="radio" id="idP19R2" name="idP19" value="2">
                    <label for="No">b) Sí, me gustaría.</label><br>
                    <input type="radio" id="idP19R3" name="idP19" value="3">
                    <label for="No">c) Sí, tengo muchas ganas de saber.</label>

                </form>
            </div>
            <div id="p20">
                <strong>
                    <p>20. ¿Quieres saber cómo funciona el mundo de las telecomunicaciones?</p>
                </strong>
                <form name="FORMP20">
                    <input type="radio" id="idP20R1" name="idP20" value="1">
                    <label for="No">a) Me es indiferente.</label><br>
                    <input type="radio" id="idP20R2" name="idP20" value="2">
                    <label for="No">b) Tal vez.</label><br>
                    <input type="radio" id="idP20R3" name="idP20" value="3">
                    <label for="No">c) Sí, me interesa mucho.</label>
                </form>
            </div>
        </div>
        <div id="styleB">
            <button type="button" id="btnEvaluar">Evaluar</button>
            <button type="button" id="btnRecargar">Recargar</button>
        </div>
    </main>
    <footer>
        <form id="formGuardar" action="controltest.php" method="post">
            <input type="hidden" name="codigo" value=" <?php echo $_SESSION['codigo']; ?> ">
            <input type="hidden" name="nombre" value=" <?php echo $_SESSION['nombre']; ?> ">
            <input type="hidden" name="apellido" value=" <?php echo $_SESSION['apellido']; ?> ">
            <input type="hidden" id="carrera1" name="carrera1">
            <input type="hidden" id="porcentaje1" name="porcentaje1">
            <input type="hidden" id="carrera2" name="carrera2">
            <input type="hidden" id="porcentaje2" name="porcentaje2">
            <input type="hidden" id="carrera3" name="carrera3">
            <input type="hidden" id="porcentaje3" name="porcentaje3">
            <input type="hidden" id="carrera4" name="carrera4">
            <input type="hidden" id="porcentaje4" name="porcentaje4">
            <input type="hidden" id="carrera5" name="carrera5">
            <input type="hidden" id="porcentaje5" name="porcentaje5">
            <input type="hidden" id="carrera6" name="carrera6">
            <input type="hidden" id="porcentaje6" name="porcentaje6">
            <input type="hidden" id="carrera7" name="carrera7">
            <input type="hidden" id="porcentaje7" name="porcentaje7">
            <input type="hidden" id="carrera8" name="carrera8">
            <input type="hidden" id="porcentaje8" name="porcentaje8">
            <input type="hidden" id="carrera9" name="carrera9">
            <input type="hidden" id="porcentaje9" name="porcentaje9">
            <div id="styleG">
                <button type="submit" id="btnGuardar">Guardar y Salir</button>
            </div>
            
        </form>
    </footer>
</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script>
    //obtenemos la altura del documento
    var altura = $(document).height();
    $("#btnEvaluar").click(function() {
        $("html, body").animate({
            scrollTop: altura + "px"
        });
    });
</script>

</html>
