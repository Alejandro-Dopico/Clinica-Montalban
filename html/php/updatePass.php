<?php

include "conexion_be.php";

            $token = $_GET['token'];
            $contrasena = $_POST['contrasena'];
            $contrasena = hash('sha512', $contrasena);
            $selectDniQuery = "SELECT dni FROM persona WHERE reset_token = '$token'";
            $resultDni = mysqli_query($conexion, $selectDniQuery);


            if ($resultDni && mysqli_num_rows($resultDni) > 0) {
                $row = mysqli_fetch_assoc($resultDni);
                $dniUsuario = $row['dni'];
            
                // Consulta para actualizar la contraseña en la tabla cliente

                $updateContra = "UPDATE cliente SET contrasena = '$contrasena' WHERE dni = '$dniUsuario'";

            
                // Realizar la actualización

                $resultUpdate = mysqli_query($conexion, $updateContra);

            
                // Verificar si la actualización fue exitosa

                if ($resultUpdate) {

			echo '<script>alert("La contraseña se ha actualizado correctamente!"); window.location.href="../index.php";</script>';


                } else {

                    echo 'Error al actualizar la contraseña: ' . mysqli_error($conexion);
                    
                }
            } else {
                echo 'No se encontró un usuario con el correo especificado.';
            }
?>
