
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio sesion/Registro</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login_style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- |||| Registro |||| -->
    <div class="container-form register">
        <div class="information">
            <div class="info-childs">
                <h2>Contactanos</h2>
                <p>inicia sesión y beneficiate de todos nuestros servicios!</p>
                <p>Contacta para más información</p>
                <input type="button" value="Iniciar Sesión" id="sign-in">
            </div>
        </div>
        <div class="form-information">
            <div class="form-information-childs">
                <h2>Registrate aquí</h2>
                <p>Introduce tu información</p>
                <form action="php/registro_be.php" method="POST" class="form">
                    <label>
                        <i class='bx bx-user-circle'></i>
                        <input type="text" placeholder="Nombre" name="nombre" required>
                        <input type="text" placeholder="Apellidos" name="apellidos" required>
                    </label>
                    <label>
                        <i class='bx bx-sidebar'></i>
                        <input type="text" placeholder="NIF/DNI" maxlength="9" name="dni" required>
                        <i class='bx bx-calendar' ></i>
                        <input placeholder="Fecha Nacimiento" name="nacimiento" class="textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" />
                    </label>   
                    <label>
                        <i class='bx bx-envelope' ></i>
                        <input type="text" placeholder="Correo Electronico" name="correo" required>
                    </label>
                    <label>
                        <i class='bx bx-lock' ></i>
                        <input type="password" placeholder="Contraseña" name="contrasena"required>
                    </label>
                    <label>
                        <i class='bx bx-phone-call'></i>    
                        <input type="text" placeholder="Telefono Personal" name="telefono" maxlength="9" required>
                    </label>
                    <label>
                        <i class='bx bx-home-alt-2'></i>
                        <input type="text" placeholder="Dirección" name="direccion" required>
                    </label>

                
                    <input type="submit" value="Registrate">
                </form>
            </div>
        </div>
    </div>

     <!-- |||| Inicio Sesion |||| -->
    <div class="container-form login hide">
        <div class="information">
            <div class="info-childs">
                <h2>Registrate</h2>
                <p>Crea una cuenta y beneficiate de todos nuestros servicios!</p>
                <p>Click en Registrate</p>
                <input type="button" value="Registrate" id="sign-up">
            </div>
        </div>
        <div class="form-information">
            <div class="form-information-childs">
                <h2>Inicia sesion</h2>
                <p>Introduce tus datos</p>
                <form class="form">
                    <label>
                        <i class='bx bx-envelope' ></i>
                        <input type="text" placeholder="Correo Electronico" required>
                    </label>
                    <label>
                        <i class='bx bx-lock' ></i>
                        <input type="password" placeholder="Contraseña" required>
                    </label>
                    <input type="submit" value="Iniciar Sesión">
                </form>
            </div>
        </div>
    </div>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/login_script.js"></script>
</body>
</html>