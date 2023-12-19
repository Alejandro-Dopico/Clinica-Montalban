<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinica Montalban | Especialidades</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://db.onlinewebfonts.com/c/150037e11f159dca84bc4c04549094b6?family=Averta-Regular" rel="stylesheet"> 
    <link rel="icon" type="image/x-icon" href="assets/img/logo-ico.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="gradient"></div>

    <header class="main-header">

      <nav class="navbar navbar-expand-lg bg-body-tertiary custom-nav" style="background-color: white !important;">

          <a href="index.html">
            <div><img src="assets/img/LOGO-COLOR.png" width="80px" height="80px" alt="LOGOTIPO DE LA EMPRESA"></div>
          </a> 
          <div class="titulo">Clinica</div>
          <div class="titulo2">Montalban</div>

          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">INICIO</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page"  href="eindex.php">ESPECIALIDADES</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="qsindex.php">QUIÉNES SOMOS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contacto.php">CONTACTO</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="flexiniciosesion">
            <div class="rectangulo">

              <?php
                  // Verificar si la sesión está iniciada
                  session_start();
                  if (isset($_SESSION['usuario'])) {
                      // Si está iniciada, mostrar el botón con la función onclick
                      echo '<a class="linksindecoracion" href="client.php"><div style="color: white; font-weight: bold;" class="entraryregistrarse">MI CUENTA</div></a>';
                  } else {
                      // Si no está iniciada, mostrar el enlace normal
                      echo '<a class="linksindecoracion" href="login.php"><div style="color: white; font-weight: bold;" class="entraryregistrarse">PEDIR CITA</div></a>';
                  }
              ?>

            </div>
            </div>
        </nav>
      </header>



      <section id="ginecologia">
        <h2>Ginecología</h2>
        <img src="assets/img/ginecologo.jpg" alt="Imagen Ginecólogo">
        <p>
            La ginecología es la especialidad médica que se encarga del estudio de las enfermedades del sistema reproductor femenino. Nuestros profesionales altamente calificados brindan atención integral a las mujeres en todas las etapas de su vida.
        </p>
    </section>

    <section id="cardiologia">
        <h2>Cardiología</h2>
        <img src="assets/img/cardiologo.jpg" alt="Imagen Cardiólogo">
        <p>
            La cardiología se especializa en el diagnóstico y tratamiento de enfermedades del corazón y del sistema circulatorio. Contamos con un equipo de cardiólogos dedicados a proporcionar la mejor atención a nuestros pacientes.
        </p>
    </section>

    <section id="dermatologia">
        <h2>Dermatología</h2>
        <img src="assets/img/dermatologo.jpg" alt="Imagen Dermatólogo">
        <p>
            La dermatología se ocupa de las enfermedades de la piel, cabello y uñas. Nuestros dermatólogos expertos ofrecen diagnóstico y tratamiento para una amplia variedad de afecciones dermatológicas.
        </p>
    </section>

    <section id="neurologia">
        <h2>Neurología</h2>
        <img src="assets/img/neurologo.jpg" alt="Imagen Neurólogo">
        <p>
            La neurología se centra en el estudio y tratamiento de las enfermedades del sistema nervioso. Contamos con neurólogos capacitados para abordar diversas condiciones neurológicas y brindar el mejor cuidado posible.
        </p>
    </section>

    <section id="ortopedia">
        <h2>Ortopedia</h2>
        <img src="assets/img/ortopedia.webp" alt="Imagen Ortopedista">
        <p>
            La ortopedia se especializa en el diagnóstico y tratamiento de enfermedades y lesiones del sistema musculoesquelético. Nuestros ortopedistas trabajan para mejorar la movilidad y calidad de vida de nuestros pacientes.
        </p>
    </section>



      <footer>
        <div class="columnas">
          <div class="columna1">
            <div class="flexfooter1">
                <a href="index.php"><img src="assets/img/LOGO-COLOR.png" width="52px" height="52px" alt="LOGOTIPO DE LA EMPRESA"></a>  
                <div class="titulo3">Clinica</div>
                <div class="titulo4">Montalban</div>
            </div>
            <p class="textodireccion">
              C/ Sant Mateu, 24-26<br>
              08950 Esplugues del Llobregat,<br>
              Barcelona<br>
              contacto@clinicamontalban.com<br>
            </p>
            <div class="flexfooter2">
                <a href="https://www.instagram.com/clinica.montalban/" class="instagram"><img width="30px" src="assets/img/instagram.png"></a>
                <a href="" class="instagram"><img width="30px" src="assets/img/facebook.png"></a>
                <a href="" class="instagram"><img width="30px" src="assets/img/twitter.png"></a>
            </div>
          </div>
        
  
          <div class="flexfooter3">
            <a class="footertext" href="">Politica de privacidad</a>
            <a class="footertext"  href="">Política de cookies</a>
            <a class="footertext"  href="">Aviso Legal</a>
            <a class="footertext"  href="">Cumplimiento Normativo</a>
            <a class="footertext"  href="">Código ético y de conducta</a>
          </div>
  
  
  
          <div class="flexfooter4">
            <a class="footertext"  href="">Documentación de interés</a>
            <a class="footertext"  href="">FAQS</a>
            <a class="footertext"  href="">Servicios externos vinculados</a>
          </div>
        </div>
      </footer>
  
      <script src="bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/js/login_script.js"></script>
</body>
</html>