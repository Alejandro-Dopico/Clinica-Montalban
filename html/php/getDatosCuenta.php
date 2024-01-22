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
