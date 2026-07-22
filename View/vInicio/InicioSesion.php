<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/RepoProyectoAmbienteWeb/Controller/InicioController.php';
    include_once $_SERVER['DOCUMENT_ROOT'] . '/RepoProyectoAmbienteWeb/View/LayoutInterno.php';
?>

<!doctype html>
<html class="no-js" lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Inicio de sesión | Topografía Proyecto</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">

<?php
    ImportCSS();
?>

</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="../img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start-->


    <main class="login-body" style="background-color: #FFF1E6;">
        <!-- Login Admin -->
        <form class="form-default" action="" method="POST">
            
            <div class="login-form">
                <!-- logo-login -->
                <div class="logo-login">
                    <a href="PantallaInicio.php"><img src="../img/logo/loder.png" alt=""></a>
                </div>
                <h2>Inicio de sesión</h2>
                <div class="form-input">
                    <label for="correoElectronico">Correo Electrónico</label>
                    <input  type="email" id="correoElectronico" name="correoElectronico" placeholder="Correo electrónico">
                </div>
                <div class="form-input">
                    <label for="contrasenna">Contraseña</label>
                    <input type="password" id="contrasenna" name="contrasenna" placeholder="Contraseña">
                </div>
                <div class="form-input pt-30">
                <button type="submit" id="btnIniciarSesion" name="btnIniciarSesion" class="btn btn-primary w-100">Iniciar sesión</button>
                </div>
                
                <!-- Recuperar contraseña -->
                <a href="RecuperarAcceso.php" class="forget">¿Olvidaste tu contraseña?</a>
                <!-- Recuperar contraseña -->
                <a href="RegistroUsuario.php" class="registration">Registrarse</a>
            </div>
        </form>
        <!-- /end login form -->
    </main>

    <?php
        ImportJS();
    ?>
    <!-- JS -->
    <script src="../js/iniciarSesion.js"></script>

    </body>
</html>