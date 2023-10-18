<?php

session_start();


include 'conexion_be.php';

$DNI = $_POST['DNI'];
$contrasena = $_POST['contrasena'];
$contrasena = hash('sha512',$contrasena);
$validar_login = mysqli_query($conexion, "SELECT DNI, contrasena FROM cliente WHERE DNI='$DNI' and contrasena=$contrasena" );

if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuario']=$DNI;
header("locatio: ../index.php");
exit;
}else{
echo '
<script>
    alert("Usuario no existe, por favor verifique los datos introducidos");
    window.location = "../login.php";

</script>
';
exit;

}





?>