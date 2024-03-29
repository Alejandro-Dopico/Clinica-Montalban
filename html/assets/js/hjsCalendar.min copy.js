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

document.getElementsByClassName("calendar");

	let t = document.getElementById("date"),
		n = document.getElementById("days"),
		i = document.getElementById("prev"),
		d = document.getElementById("nxt"),
		l = document.getElementById("rightContent");
	document.getElementById("activeEvent-time"), document.getElementById("activeConfirm-btn"), document.getElementsByClassName("event-time");
	let a = new Date,
		s = a.getMonth(),
		c = a.getFullYear(),
		r = a.getDate();
	a.setMonth(a.getMonth() + 1);
	let v = a.getMonth(),
        o = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];


	function m(e, t) {
		let n = [],
			i = new Date(e, t, 1);
		for (; i.getMonth() === t;) 0 === i.getDay() && n.push(i.getDate()), i.setDate(i.getDate() + 1);
		return n
	}
	var g = {};

	function u() {
		Date.now();
		let e = new Date(c, s, 1),
			i = new Date(c, s + 1, 0),
			d = new Date(c, s, 0),
			a = d.getDate(),
			u = i.getDate(),
			f = e.getDay(),
			b = 7 - i.getDay() - 1;
		t.innerHTML = o[s] + " " + c;
		let h = "";
		for (let p = f; p > 0; p--) h += `<div class='day prev-date'>${a - p + 1}</div>`;
		for (let $ = 1; $ <= u; $++) $ < new Date().getDate() && c === new Date().getFullYear() && s === new Date().getMonth() || m(c, s).includes($) ? h += `<div class='day tillCurrentDate'> ${$} </div>` : $ === new Date().getDate() && c === new Date().getFullYear() && s === new Date().getMonth() ? h += `<div class='day today'>${$} </div>` : s === new Date().getMonth() && c === new Date().getFullYear() || s === v && c === new Date().getFullYear() ? h += `<div class="day">${$}</div>` : h += `<div class="day futureDays">${$}</div>`;
		for (let x = 1; x <= b; x++) h += `<div class='day nxt-date'>${x}</div>`;
		for (let $ = 8; $ <= 20; $++) {
			let hora = ($ < 10 ? "0" : "") + $ + ":00"; // Formato de hora: "08:00", "09:00", ...
			let disponible = horas_disponibles.includes(hora);
			let btnClass = disponible ? "event-time meeting" : "event-time meeting btnDisable";
			
			h += `<div class="button-full" id="prepTime_${$}">
				<button onclick="meetTime('prepTime_${$}')" class="${btnClass}" ${disponible ? "" : "disabled"} >${hora}</button>
				${disponible ? `<button onclick="confirmMeeting('${hora}')" class="confirm-btn">Confirmar</button>` : ""}
			</div>`;
		}

		n.innerHTML = h,
			function e() {
				let t = document.querySelectorAll(".day"),
					n = m(c, s);
				t.forEach(e => {
					e.addEventListener("click", i => {
						if (-1 !== n.indexOf(Number(e.textContent))) console.log("this is sunday");
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
								}(i.target.innerHTML), e.classList.add("active");
							let d = e.innerHTML,
								a = document.getElementById("meeting_daily_timings"),
								m = "",
								u = "",
								f = "";
							for (let b = 8; b < 21; b++) {
								new Date(c, s, d, b, 0, 0, 0).getTime() < Date.now() ? (u = "disabled", f = "btnDisable") : (u = "", f = "");
								var h = new Date(c, s, d, b, 0, 0, 0).toLocaleString("en-GB", {
									hour12: !0,
									hour: "numeric",
									minute: "numeric"
								});
								g[new Date(c, s, d, b).toJSON()] > 2 ? m += `<div class="button-full" id="prepTime_${b}">
                  <button class="event-time meeting btnDisable" disabled > ${12 === b ? "12:00 pm" : h}
              </button></div>` : m += `<div class="button-full" id="prepTime_${b}">
                  <button onclick="meetTime('prepTime_${b}')" class="event-time meeting ${f}" ${u} > ${12 === b ? "12:00 pm" : h}
              </button>
                  <button onclick="confirmMeeting('${new Date(c, s, d, b, 0, 0, 0).toJSON()}')" class="confirm-btn">Confirmar</button>
              </div>`
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
	this.confirmMeeting = t => e(t)
}