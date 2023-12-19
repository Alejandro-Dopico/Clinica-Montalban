<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinica Montalban</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://db.onlinewebfonts.com/c/150037e11f159dca84bc4c04549094b6?family=Averta-Regular" rel="stylesheet"> 
    <link rel="icon" type="image/x-icon" href="assets/img/logo-ico.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
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
                  <a class="nav-link active" aria-current="page" href="#">INICIO</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">ESPECIALIDADES</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">QUIENES SOMOS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">CONTACTO</a>
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
      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner" style="max-height: 400px;">
            <div class="carousel-item active">
                <img src="assets/img/carousel1.jpg" class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/img/carousel2.jpg" class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/img/carousel3.jpg" class="d-block w-100 img-fluid" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="flex-pagina">
      <div class="flex1">
        <div class="texto1">
          <p style="font-size: 40px; font-weight: bolder;">Quienes somos</p>
          <p style="width: 600px; font-size: 30px;">El equipo de Clinica Montalban trabaja con gran profesionalidad para ofrecer y garantizar una asistencia de primera calidad.</p>
          <button style="border-radius: 10px; box-shadow: 0  2px 8px 5px rgba(0, 0, 0, 0.15);" type="button" class="btn btn-light">Saber más</button>
        </div>
        <img class="img1" style="border-radius: 20px; box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.15);" width="500px" src="assets/img/img1.jpg">
      </div>

      <div class="flex1 flex2">
        <img class="img2" style="border-radius: 20px; box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.15);" width="500px" src="assets/img/img1.jpg">
        <div class="texto1">
          <p style="font-size: 40px; font-weight: bolder;">Quienes somos</p>
          <p style="width: 600px; font-size: 30px;">El equipo de Clinica Montalban trabaja con gran profesionalidad para ofrecer y garantizar una asistencia de primera calidad.</p>
          <button style="border-radius: 10px; box-shadow: 0  2px 8px 5px rgba(0, 0, 0, 0.15);" type="button" class="btn btn-light">Saber más</button>
        </div>
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
              <a href="" class="instagram"><img width="30px" src="assets/img/instagram.png"></a>
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
    </footer>

    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/login_script.js"></script>
</body>
</html>