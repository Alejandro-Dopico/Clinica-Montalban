let boton2 = document.getElementById("generarJSON");
boton2.addEventListener("click", almacenarJSON);

function almacenarJSON(){
    $.ajax({
         url:'../php/getVisitas2.php',
         method:'GET',
         success: function (data){
            console.log(data);
         },
         error: function(xhr, status, error){
            console.log('Error en la solicitud AJAX:', xhr.responseText);
            console.log('Estado:', status);
            console.log('Error:', error);
         }
    });

    console.log("me hace el ajax correctamente");
}