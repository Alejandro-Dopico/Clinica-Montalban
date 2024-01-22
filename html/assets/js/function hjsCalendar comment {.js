function hjsCalendar(e) {
    document.getElementById("hjsCalendar").innerHTML = `
        <div class="">
            <div class="justify-content-center d-md-flex">
            <div class="bg-white left">
                <div class="bg-white calendar mx-auto pb-3 px-2">
                <div class="d-flex align-items-center justify-content-between text-uppercase month py-4">
                    <div class="fw-bold text-primary ms-3" id="date"></div>
                    <div class="d-flex align-items-center justify-content-center gap-3">
                    <div class="d-flex align-items-center justify-content-center rounded-circle" id="prev">
                        <i class="fa fa-angle-left"></i>
                    </div>
                    <div class="d-flex align-items-center justify-content-center rounded-circle" id="nxt">
                        <i class="fa fa-angle-right"></i>
                    </div>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between text-uppercase fw-light h-100 mb-2 text-sm w-100 weekdays">
                    <div class="fw-bold">Dom</div>
                    <div class="fw-bold">Lun</div>
                    <div class="fw-bold">Mar</div>
                    <div class="fw-bold">Mié</div>
                    <div class="fw-bold">Jue</div>
                    <div class="fw-bold">Vie</div>
                    <div class="fw-bold">Sáb</div>
                </div>
                <div class="d-flex justify-content-between w-100 flex-wrap" id="days"></div>
                </div>
            </div>
            <div class="bg-white d-none px-3 right" id="rightContent">
                <div class="fw-bold text-primary d-flex py-5" id="today-date">
                <div id="event-day">Miércoles,</div>
                <div id="event-date">19 de abril</div>
                </div>
                <div class="text-center" style="width: 254px">
                <div class="events me-4" id="meeting_daily_timings"></div>
                </div>
            </div>
            </div>
        </div>
    `;

    document.getElementsByClassName("calendar"); // Recoge del HTML el elemento con la clase llamada calendar

    let t = document.getElementById("date"),
        n = document.getElementById("days"),
        i = document.getElementById("prev"),
        d = document.getElementById("nxt"),
        l = document.getElementById("rightContent");
    document.getElementById("activeEvent-time"), document.getElementById("activeConfirm-btn"), document.getElementsByClassName("event-time"); // No hace nada
    let a = new Date, // Nueva variable tipo date
        s = a.getMonth(), // Recoge el mes con una función de la variable date (hay una coma ya que se están creando variables del mismo tipo)
        c = a.getFullYear(), // Recoge el año con una función de date 
        r = a.getDate(); // Recoge el día actual con una función de date
    a.setMonth(a.getMonth() + 1); // Le da a la variable a el valor del primer día del mes siguiente
    let v = a.getMonth(), // Asigna el número de mes después de haber sido incrementado
        o = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"]; // Array con los meses escritos

    function m(e, t) { // La función de esta función es saber qué día son domingos 
        let n = [], // Creación array
            i = new Date(e, t, 1); // Crea variable i que va a ser una instancia de tipo date donde el primer argumento es año, el segundo es mes y el tercero día 
        for (; i.getMonth() === t;) 0 === i.getDay() && n.push(i.getDate()), i.setDate(i.getDate() + 1);
        return n; // Devuelve n que es un array 
    }
    var g = {}; // Crea un objeto vacío que luego puede almacenar datos o funciones 

    function u() {
        Date.now();
        let e = new Date(c, s, 1), // Variable tipo date con el año actual que es c(declarada arriba), s que es mes actual(declarado arriba) y 1 que es el día 
            i = new Date(c, s + 1, 0), // Lo mismo que lo de arriba la diferencia es que el mes es el mes actual +1, y el día es 0 que es el último día del mes anterior 
            d = new Date(c, s, 0), // Lo mismo que el primero con la diferencia de que es el último día del mes anterior al actual
            a = d.getDate(), // Le asigna a la variable a el último día del mes pasado 
            u = i.getDate(), // Le asigna a la variable u el último día del mes siguiente || este mes
            f = e.getDay(), // Le asigna a la variable el día de la semana en la variable e 
            b = 7 - i.getDay() - 1; // Se resta 7 al número actual de la semana para saber cuántos días quedan para que acabe la semana -1 para excluir el día actual 
        t.innerHTML = o[s] + " " + c; // Se añade al HTML el mes actual(o declarado arriba) más el año(c declarado arriba)
        let h = "";
        for (let p = f; p > 0; p--) h += `<div class='day prev-date'>${a - p + 1}</div>`;
        for (let $ = 1; $ <= u; $++)
            $ < new Date().getDate() && c === new Date().getFullYear() && s === new Date().getMonth() || m(c, s).includes($) ? h += `<div class='day tillCurrentDate'> ${$} </div>`
                : $ === new Date().getDate() && c === new Date().getFullYear() && s === new Date().getMonth() ? h += `<div class='day today'>${$} </div>`
                    : s === new Date().getMonth() && c === new Date().getFullYear() || s === v && c === new Date().getFullYear() ? h += `<div class="day">${$}</div>`
                        : h += `<div class="day futureDays">${$}</div>`;
        for (let x = 1; x <= b; x++) h += `<div class='day nxt-date'>${x}</div>`;
        n.innerHTML = h, // Añadimos h al HTML
            function e() {
                let t = document.querySelectorAll(".day"), // Asigna a t todos los elementos con clase(en el CSS) .day
                    n = m(c, s); // Le asigna a n los domingos 
                t.forEach(e => { // Por cada día(clase día en el CSS)
                    e.addEventListener("click", i => { // En cada click 
                        if (-1 !== n.indexOf(Number(e.textContent))) console.log("this is Sunday"); // Al hacer click en cada domingo imprime por consola que es domingo
                        else if (t.forEach(e => {
                            e.classList.remove("active")
                        }), e.textContent >= r && s === new Date().getMonth() || s === v && !n.includes(Number(e.textContent))) {
                            l.classList.remove("d-none"),
                                function e(t) {
                                    let n = new Date(c, s, t),
                                        i = n.toLocaleString("es-ES", {
                                            weekday: "long"
                                        });
                                    y.innerHTML = i, w.innerHTML = ", " + o[s] + " " + t
                                    // Se añade a 'y' que es el event day el valor de i y a 'w' que es event date el valor de o que es el array con los meses escrito en la posición s junto a  t que es la iteración
                                }(i.target.innerHTML), e.classList.add("active"); // Activa al día
                            let d = e.innerHTML,
                                a = document.getElementById("meeting_daily_timings"),
                                m = "",
                                u = "",
                                f = "";
                            for (let b = 8; b < 21; b++) {
                                let nuevaFecha = new Date(c, s, d, b, 0, 0, 0).getTime();
                                (nuevaFecha < Date.now() || nuevaFecha) ? (u = "disabled", f = "btnDisable") : (u = "", f = "");
                                var h = new Date(c, s, d, b, 0, 0, 0).toLocaleString("en-GB", {
                                    hour12: !0,
                                    // Esto indica que la hora se mostrará en un formato de 12 horas (es decir, con "AM" o "PM" después de la hora).
                                    hour: "numeric",
                                    // Indica que solo se debe incluir la hora en el formato.
                                    minute: "numeric"
                                    // Indica que solo se debe incluir el valor de los minutos en el formato.
                                });

                                g[new Date(c, s, d, b).toJSON()] > 2 ? m += `<div class="button-full" id="prepTime_${b}">
                                  <button class="event-time meeting btnDisable" disabled > ${12 === b ? "12:00 pm" : h}
                              </button></div>` : m += `<div class="button-full" id="prepTime_${b}">
                                  <button onclick="meetTime('prepTime_${b}')" class="event-time meeting ${f}" ${u} > ${12 === b ? "12:00 pm" : h}
                              </button>

                                  <button onclick="confirmMeeting('${new Date(c, s, d, b, 0, 0, 0).toJSON()}')" class="confirm-btn">Confirmar</button>
                              </div>`
                                // Si el condicional es cierto se añade el botón disable, si no lo es se llama a otras métodos para poder confirmar la cita 
                            }
                            return a.innerHTML = m, m
                        }
                    })
                })
            }()
    }
    u(), i.addEventListener("click", () => {
        --s < 0 && (s = 11, c--), u()
    }), d.addEventListener("click", () => {
        ++s > 11 && (s = 0, c++), u()
    });
    let f = null;
    this.meetTime = e => {
        var t = document.getElementById(e);
        null !== f && (f.children[0].classList.remove("activeEvent-time"), f.children[1].classList.remove("activeConfirm-btn")), t.children[0].classList.add("activeEvent-time"), t.children[1].classList.add("activeConfirm-btn"), f = t
    };
    let y = document.getElementById("event-day"),
        w = document.getElementById("event-date");
    // this.confirmMeeting = (t, idTrabajador, descripcion) => e(t, idTrabajador, descripcion)
    this.confirmMeeting = (t) => {
        // Realizar solicitud AJAX para enviar parámetros a PHP
        const apiUrl = '../php/insertCitas.php';
        var fechaAlm = new Date(t);
        const año = fechaAlm.getFullYear();
        const mes = fechaAlm.getMonth() + 1;
        const dia = fechaAlm.getDate();
        ; // Puedes proporcionar el valor correcto aquí si es necesario

        // Concatenar en un solo string
        const fechaString = `${año}-${mes < 10 ? '0' : ''}${mes}-${dia < 10 ? '0' : ''}${dia}`;

        var horaIn = fechaAlm.getHours();
        var minutos = fechaAlm.getMinutes();  // Obtener minutos
        var segundos = fechaAlm.getSeconds();  // Obtener segundos

        // Formatear las horas, minutos y segundos al formato de MySQL
        var horaString = `${horaIn < 10 ? '0' : ''}${horaIn}:${minutos < 10 ? '0' : ''}${minutos}:${segundos < 10 ? '0' : ''}${segundos}`;

        // Crear objeto FormData y agregar parámetros
        const datosCita = new FormData();
        //datosCita.append('hora', t);

        datosCita.append('fecha', fechaString);
        datosCita.append('hora', horaString);
        datosCita.append('idTrabajador', parseInt(window.medicoSeleccionado));
        datosCita.append('descripcion', window.motivoCita);

        citaExito(fechaString, horaString, window.medicoSeleccionado, window.motivoCita);
        // Realizar la solicitud fetch
        fetch(apiUrl, {
            method: 'POST',
            body: datosCita,
        })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Error en la solicitud');
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    // Mostrar "Realizada con éxito" en el modal-footer
                    let modalFooter = document.querySelector(".modal-footer");
                    modalFooter.innerHTML = "<p><strong>Realizada con éxito</strong></p>";
                } else {
                    // Mostrar un mensaje en el modal-footer si no se cumple la condición
                    let modalFooter = document.querySelector(".modal-footer");
                    modalFooter.innerHTML = `<p><strong>No se pudo realizar la acción: ${data.message}</strong></p>`;
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    };
}

/* 	Esta función se declara en este archivo porque así podemos pasar los parámetros por la función.
	recogemos los datos para luego imprimirlos una vez que se realice la cita, lo suyo es que cree el HTML
	desde la propia función.  */
	
function citaExito(fechaString, horaString, medicoSeleccionado, motivoCita) {
    // Ocultar el calendario
    document.getElementById('calendar').style.display = 'none';
    document.getElementById('calendar-finish').style.display = 'block';

    // Obtener el nombre del médico haciendo una solicitud AJAX
    obtenerNombreMedico(medicoSeleccionado, function(nombreMedico) {
        // Mostrar detalles de la cita en el div calendar-finish
        var citaFinishDiv = document.getElementById('calendar-finish-details');

		var titulo = document.createElement('h3');
		titulo.innerHTML = 'Cita solicitada!';
		titulo.style.color = 'green';

		var contenidoInicio = document.createElement('p');
		contenidoInicio.innerHTML = 'Gracias por solicitar cita con Clinica montalbán!<br><br><p><strong>Aquí tienes los datos de la cita</strong></p>';

        // Creamos una tabla para que se vea mehjor los resultados.
        var tabla = document.createElement('table');
        tabla.classList.add('table', 'table-bordered', 'table-striped');  // Agrega clases de Bootstrap

        var filaFecha = tabla.insertRow();
        var celdaFechaTitulo = filaFecha.insertCell(0);
        var celdaFechaValor = filaFecha.insertCell(1);
        celdaFechaTitulo.innerHTML = '<strong>Fecha:</strong>';
        celdaFechaValor.innerHTML = fechaString;

        var filaHora = tabla.insertRow();
        var celdaHoraTitulo = filaHora.insertCell(0);
        var celdaHoraValor = filaHora.insertCell(1);
        celdaHoraTitulo.innerHTML = '<strong>Hora:</strong>';
        celdaHoraValor.innerHTML = horaString;

        var filaMedico = tabla.insertRow();
        var celdaMedicoTitulo = filaMedico.insertCell(0);
        var celdaMedicoValor = filaMedico.insertCell(1);
        celdaMedicoTitulo.innerHTML = '<strong>Médico:</strong>';
        celdaMedicoValor.innerHTML = nombreMedico;
		
		var filaMotivo = tabla.insertRow();
		var celdaMotivoTitulo = filaMotivo.insertCell(0);
		var celdaMotivoValor = filaMotivo.insertCell(1);
		celdaMotivoTitulo.innerHTML = '<strong>Motivo de la Cita:</strong>';
		celdaMotivoValor.style.wordWrap = "break-word";
		celdaMotivoValor.innerHTML = motivoCita;
		
		var contenidoFooter = document.createElement('p');
		contenidoFooter.innerHTML = 'Cualquier duda contacta con nosotros! +34 <strong>999999999</strong>';
        // Limpiar el contenido anterior para que no se repita.
        citaFinishDiv.innerHTML = '';

        // Agregar los elementos al div para visualizarlo en el html.
		citaFinishDiv.appendChild(titulo);
		citaFinishDiv.appendChild(contenidoInicio);
		citaFinishDiv.appendChild(tabla);
		citaFinishDiv.appendChild(contenidoFooter);
    });
}

/* 	Función para obtener el nombre del médico haciendo una solicitud AJAX a el archivo del php
	para pasarle el "idTrabajador" para que sea más facil recoger los datos. Nuevamente igual que la anterior funcion. */
function obtenerNombreMedico(idTrabajador, callback) {
    // Realizar la solicitud fetch para obtener el nombre del médico
    const apiUrl = '../php/obtenerMedico.php?idTrabajador=' + idTrabajador;

    fetch(apiUrl)
        .then(response => response.text())  
        .then(nombreMedico => {
            callback(nombreMedico.trim());  // Trim para eliminar espacios en blanco alrededor.
        })
        .catch(error => {
            console.error('Error al obtener el nombre del médico');
            callback('Médico no encontrado');
        });
}