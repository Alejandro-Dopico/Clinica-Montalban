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
        <p>Tu cuenta:</p>
    </header>
    <form>
        <div class="form-row">
            <div class="form-group col-md-6 campo">
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
        <div class="form-group col-md-4 campo">
            <label for="inputState">País</label>
            <select id="inputState" class="form-control">
                <option selected>Selecciona...</option>
                <option>España</option>
                <option>Francia</option>
            </select>
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

    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>