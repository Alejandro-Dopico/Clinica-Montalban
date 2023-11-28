<!DOCTYPE html>
<html lang="es">
<?php

    session_start();
    if (!isset($_SESSION['usuario'])) {
        header("Location: ../login.php");
        exit;
    }
    
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinica Montalban</title>
    <link rel="stylesheet" href="/assets/css/client-style.css">
    <link href="https://db.onlinewebfonts.com/c/150037e11f159dca84bc4c04549094b6?family=Averta-Regular" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/images/logo-ico.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/hjsCalendar.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <header>
        <div class="gradient"></div>
        <div id="header">
            <a href="index.html">
                <div style="margin-top: 10px; margin-left: 15px;"><img src="/assets/img/LOGO-COLOR.png" width="80px"
                        height="80px" alt="LOGOTIPO DE LA EMPRESA"></div>
            </a>
            <div class="titulo">Clinica</div>
            <div class="titulo2">Montalban</div>
        </div>
        <hr class="header-separator">
    </header>

    <section class="title-top">
        <h1>Selección de servicios</h1>
    </section>

    <!-- Button trigger modal -->
    <div class="modals">
        <!-- |||| Para que los dos bloques esten juntos |||| -->
        <div class="juntos">

            <!-- Modal de Cita -->
            <div class="modal fade" id="cita" tabindex="-1" aria-labelledby="cita" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="titulo-cita">Calendario de citas - Medico Cabecera</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div id="hjsCalendar"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carta de Cita -->
            <div class="card" style="width: 18rem; max-width: 100%;">
                <img src="assets/img/clinica-cita.jpg" class="card-img-top" alt="Cita - Medico de cabecera">
                <div class="card-body">
                    <h5 class="card-title">Medico de cabeceraAAAA</h5>
                    <p class="card-text">Tienes un calendario en tiempo real para poder pedir cita.</p>
                    <a href="#" class="btn btn-primary" onclick="$('#cita').modal('show');">Abrir Calendario</a>
                </div>
            </div>

            <!-- Modal de Visitas-->
            <div class="modal fade" id="visitas" tabindex="-1" aria-labelledby="visitas" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Visitas Programadas</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div id="generarVisitas"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carta de Visita (vertical) -->
            <div class="card" style="width: 18rem; max-width: 100%;">
                <img class="card-img-top" src="assets/img/clinica-cita.jpg" alt="Visitas Programadas">
                <div class="card-body">
                    <h5 class="card-title">Visitas Programadas</h5>
                    <p class="card-text">Comprueba tus citas y registro de visitas.</p>
                    <a href="#" id="visitasBtn" class="btn btn-primary" onclick="$('#visitas').modal('show');">Abrir Visitas</a>
                </div>
            </div>
        </div>

        <div class="juntos">

            <!-- Modal de Informe -->
            <div class="modal fade" id="informe" tabindex="-1" aria-labelledby="informe" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="titulo-cita">Informes de las visitas</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Hola hola no funciono aún</p>
                            <!-- AQUI EL CONTENIDO QUE VA UN JS QUE GENERA UN HTML SEGUN LOS REGISTROS -->
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carta de informe -->
            <div class="card" style="width: 18rem; max-width: 100%;">
                <img src="assets/img/clinica-cita.jpg" class="card-img-top" alt="informe">
                <div class="card-body">
                    <h5 class="card-title">Informes de las visitas</h5>
                    <p class="card-text">Aquí podras comprobar los expedientes de las visitas que has hecho</p>
                    <a href="#" class="btn btn-primary" onclick="$('#informe').modal('show');">Abrir Informes</a>
                </div>
            </div>

        </div>
    </div>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/hjsCalendar.min.js"></script>
    <script src="assets/js/cliente-script.js"></script>
    <script src="assets/js/generarVisitas.js"></script>
</body>

</html>
