<!DOCTYPE html>
<html lang="es">

<?php
session_start();
include 'php/conexion_be.php';

// Verificar si hay una sesión de usuario iniciada
if (!isset($_SESSION['usuario'])) {
    header("Location: ../login.php");
    exit;
}

$DNI = $_SESSION['usuario'];

// Preparar la consulta
$persona = mysqli_prepare($conexion, "SELECT * FROM persona WHERE DNI = ?");
mysqli_stmt_bind_param($persona, "s", $DNI);
mysqli_stmt_execute($persona);

// Definir variables para almacenar los resultados de la consulta
mysqli_stmt_bind_result($persona, $DNI_result, $nombre, $apellido, $correo, $telefono, $direccion);

// Obtener resultados
mysqli_stmt_fetch($persona);

?>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinica Montalban</title>
    <link rel="stylesheet" href="/assets/css/cuenta-style.css">
    <link href="https://db.onlinewebfonts.com/c/150037e11f159dca84bc4c04549094b6?family=Averta-Regular" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/images/logo-ico.png">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <header>
        <div id="espacio-blanco" style="width: 100px;">
            &nbsp;
        </div>
        <div class="logo-clinica">
            <a href="index.php">
                <div style="margin-top: 10px; margin-left: 15px;"><img src="/assets/img/LOGO-COLOR.png" width="80px"
                        height="80px" alt="LOGOTIPO DE LA EMPRESA"></div>
            </a>
            <div class="titulo">Clinica</div>
            <div class="titulo2">Montalban</div>
        </div>
        <div class="btn-group">
            <button class="btn btn-light btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Bienvenido, <?php echo $_SESSION['nombre']; ?>!
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="client.php">Servicios</a></li>
                <li><a class="dropdown-item" href="cuenta.php">Modificar Cuenta</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="php/cerrar_sesion.php">Cerrar Sesión</a></li>
            </ul>
        </div>
    </header>
    <form action="php/cuenta_be.php" method="POST" class="form">
        <div class="form-row">
            <div class="form-group col-md-6 nombre">
                <label for="inputName4">Nombre</label>
                <input type="text" class="form-control" id="inputName4" placeholder="Nombre" value="<?php echo $nombre; ?>">
            </div>
            <div class="form-group col-md-6 campo">
                <label for="inputSurname4">Apellidos</label>
                <input type="text" class="form-control" id="inputSurname4" placeholder="Apellidos" value="<?php echo $apellido; ?>">
            </div>
            <div class="form-group campo">
                <label for="inputAddress">Dirección</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Dirección" value="<?php echo $direccion; ?>">
            </div>
            <div class="form-group col-md-6 campo">
                <label for="inputPhone4">Telefono</label>
                <input type="tel" class="form-control" id="inputPhone4" placeholder="Telefono" value="<?php echo $telefono; ?>">
            </div>
        </div>
        </div>
        <div class="form-group campo">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Verificame
            </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Modificar la cuenta</button>
    </form>

    <script>
        $(document).ready(function () {
            // Deshabilitar el botón al cargar la página
            $('button[type="submit"]').prop('disabled', true);

            // Habilitar/deshabilitar el botón cuando el checkbox cambia
            $('#gridCheck').change(function () {
                if ($(this).is(':checked')) {
                    $('button[type="submit"]').prop('disabled', false);
                } else {
                    $('button[type="submit"]').prop('disabled', true);
                }
            });
        });
    </script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>