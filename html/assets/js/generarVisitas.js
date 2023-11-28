let boton = document.getElementById("visitasBtn");
boton.addEventListener("click", generarVisitas);

function generarVisitas() {
    $.ajax({
        url: '../php/getVisitas.php',
        method: 'GET',
        success: function (data) {
            console.log('Respuesta del servidor:', data);

            var container = document.getElementById("generarVisitas");

            // Envuelve el contenido en un div
            var contenido = '<div class="list-group">' + data + '</div>';

            // Establece el contenido en el contenedor principal
            container.innerHTML = contenido;
        },
        error: function (xhr, status, error) {
            console.log('Error en la solicitud AJAX:', xhr.responseText);
            console.log('Estado:', status);
            console.log('Error:', error);
        }
    });
}
