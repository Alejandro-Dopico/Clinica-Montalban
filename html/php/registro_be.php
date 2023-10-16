<?php

include 'conexion_be.php';

/*Creacion de las variables con el metodo POST para 
    recoger los valores del registro y subirlos a 
    la base de datos.
*/

    $nombre = $_POST['nombre'];
    $apellidos = $_POST ['apellidos'];
    $dni = $_POST['dni'];
    $nacimiento = $_POST['nacimiento'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];

    $query = "INSERT INTO persona (DNI,nombre,apellido,correo,contrasena,telefono,direccion)
    VALUES('$dni','$nombre','$apellidos','$correo','$contrasena','$telefono','$direccion')";

    $enviar = mysqli_query($conexion, $query);




/*Condicional para redireccion a la pagina de login 
en caso de que la query se ejecute de forma corecta

*/

    if($enviar){

        echo'
            <script>
            
            </script>
        ';
    }

?>