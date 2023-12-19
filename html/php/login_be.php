<?php

if(session_start()){

    include 'conexion_be.php';

    $DNI = $_POST['dni'];
    $contrasena = $_POST['contrasena'];

    // Escapar las variables antes de usarlas en una consulta SQL para prevenir SQL Injection
    $DNI = mysqli_real_escape_string($conexion, $DNI);

    // Hashear la contraseña antes de compararla con la base de datos
    $contrasena = hash('sha512', $contrasena);

    // Utiliza una consulta preparada para prevenir SQL Injection
    $validar_login = mysqli_prepare($conexion, "SELECT DNI, contrasena FROM cliente WHERE DNI=? and contrasena=?");
    mysqli_stmt_bind_param($validar_login, "ss", $DNI, $contrasena);
    mysqli_stmt_execute($validar_login);
    mysqli_stmt_store_result($validar_login);

    $consulta_nombre = mysqli_prepare($conexion, "SELECT nombre FROM persona WHERE DNI=?");
    mysqli_stmt_bind_param($consulta_nombre, "s", $DNI);
    mysqli_stmt_execute($consulta_nombre);
    mysqli_stmt_bind_result($consulta_nombre, $nombre_usuario);
    mysqli_stmt_fetch($consulta_nombre);

if (mysqli_stmt_num_rows($validar_login) > 0) {
    $_SESSION['usuario'] = $DNI;
    $_SESSION['nombre'] = $nombre_usuario;

    header("Location: ../client.php");
    exit;
} else {
    echo '
    <script>
        alert("Usuario no existe, por favor verifique los datos introducidos");
        window.location = "../login.php";
    </script>
    ';
    exit;
}

mysqli_stmt_close($validar_login);

}
?>
