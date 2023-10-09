/* Aquí creamos las variables y le indicamos con que ID esta trabajando,
 tambien con la clase que es el "query". */
const btnSignIn = document.getElementById("sign-in"),
      btnSignUp = document.getElementById("sign-up"),
      formRegister = document.querySelector(".register"),
      formLogin = document.querySelector(".login");

    /* Aquí "ON CLICK" Escondemos nuestra otra parte de html
    y aparece la otra. */
      btnSignIn.addEventListener("click", e => {
        formRegister.classList.add("hide");
        formLogin.classList.remove("hide");
      })

      /* Lo mismo vicebersa. */
      btnSignUp.addEventListener("click", e => {
        formRegister.classList.remove("hide");
        formLogin.classList.add("hide");
      })
