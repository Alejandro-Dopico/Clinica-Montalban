<?php

session_start();
include 'conexion_be.php';

$query = "SELECT pe.nombre AS nombreCliente, per.nombre AS nombreTrabajador, ci.fecha, ci.hora, ci.descripcion  
          FROM cliente c 
          JOIN cita ci ON (c.idCliente = ci.idCliente) 
          JOIN personal t ON (ci.idTrabajador = t.idTrabajador) 
          JOIN persona pe ON (c.DNI = pe.DNI) 
          JOIN persona per ON (t.DNI = per.DNI) WHERE c.DNI =  '$_SESSION[usuario]'";
          

$result = mysqli_query($conexion, $query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Trabajador: ' . $row['nombreTrabajador'] . '</h5>
                    <small>' . $row['fecha'] . ' ' . $row['hora'] . '</small>
                </div>
                <p class="mb-1">' . $row['descripcion'] . '</p>
                <small>Cliente: ' . $row['nombreCliente'] . '</small>
            </a>';
    }
} else {
    echo '<p>No hay visitas programadas.</p>';
}
?>
