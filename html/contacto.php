<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinica Montalban | Contacto</title>
    <link rel="stylesheet" href="assets/css/contacto_style.css">
    <link href="https://db.onlinewebfonts.com/c/150037e11f159dca84bc4c04549094b6?family=Averta-Regular" rel="stylesheet"> 
    <link rel="icon" type="image/x-icon" href="assets/img/logo-ico.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="gradient"></div>

    <header class="main-header">

      <nav class="navbar navbar-expand-lg bg-body-tertiary custom-nav" style="background-color: white !important;">

          <a href="index.html">
            <div><img src="assets/img/LOGO-COLOR.png" width="80px" class="imagenlogo" height="80px" alt="LOGOTIPO DE LA EMPRESA"></div>
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
                  <a class="nav-link "href="index.php">INICIO</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="eindex.php">ESPECIALIDADES</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="qsindex.php">QUIÉNES SOMOS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active"  aria-current="page"  href="contacto.php">CONTACTO</a>
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
      <br><br><br><br><br><br>

      <div class="flexlocal">
        <div class="flexcontacto">
          <p class="titulocontacto">CONTACTO Y UBICACIÓN</p>
          <p>C/ Sant Mateu, 24-26<br>
            08950 Esplugues del Llobregat,<br>
            Barcelona</p>
          <a href="mailto:contacto@clinicamontalban.com">contacto@clinicamontalban.com</a>
          <p style="padding-top: 30px;"><b>HORARIO</b></p>
          <ul>
            <li><b>Lunes</b> de 9:00 a 19:00.</li>
            <li><b>Martes</b> de 9:00 a 19:00.</li>
            <li><b>Miercoles</b> de 9:00 a 19:00.</li>
            <li><b>Jueves</b> de 9:00 a 19:00.</li>
            <li><b>Viernes</b> de 9:00 a 19:00.</li>
            <li><b>Sabado</b> de 9:00 a 14:00.</li>
            <li><b>Domingo</b> cerrado.</li>
          </ul>
        </div>
        <div class="mapa">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993.7870375077496!2d2.0974744999999997!3d41.37871139999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4990646aa9b71%3A0x212fc56f8df8d689!2sCarrer%20de%20Sant%20Mateu%2C%2024%2C%2026%2C%2008950%20Esplugues%20de%20Llobregat%2C%20Barcelona!5e0!3m2!1sca!2ses!4v1699987339280!5m2!1sca!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

      
      <div class="flexinicial">
        <div class="areaContacto">
          <h2 class="nombrecontacto">Formulario Contacto</h2>
          <form action="php/contacto_be.php" method="POST" class="form">
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
              <label for="floatingInput">Correo Electronico</label>
            </div>
            <div class="form-floating" style="margin-bottom: 40px;">
              <textarea type="text" class="form-control" style="resize: none; height: 20rem;" id="floatingInput" placeholder="Motivo de contacto" required></textarea>
              <label for="floatingInput">Motivo</label>
            </div>
            <br>
            <input type="submit" class="botonenviar" value="Enviar"></input>
          </form>
        </div>
      </div>



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
            <a href="">Politica de privacidad</a>
            <a href="">Política de cookies</a>
            <a href="">Aviso Legal</a>
            <a href="">Cumplimiento Normativo</a>
            <a href="">Código ético y de conducta</a>
          </div>
  
  
  
          <div class="flexfooter4">
            <a href="">Documentación de interés</a>
            <a href="">FAQS</a>
            <a href="">Servicios externos vinculados</a>
          </div>
        </div>
        <div class="Copyright">© Copyright 2023. Clínica Montalban S.A.</div>
      </footer>
      <script src="bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/js/login_script.js"></script>
</body>
</html>