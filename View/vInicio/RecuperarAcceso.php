<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/RepoProyectoAmbienteWeb/Controller/InicioController.php';
    include_once $_SERVER['DOCUMENT_ROOT'] . '/RepoProyectoAmbienteWeb/View/LayoutExterno.php';
?>

<!doctype html>
<html class="no-js" lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Recuperar Acceso - Topografía Proyecto</title>
    <meta name="description" content="Página para recuperar el acceso a la aplicación">
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
        <!-- Recuperar Password Form -->
        <form class="form-default" action="" method="POST">
            
            <div class="login-form">
                <!-- logo-login -->
                <div class="logo-login">
                    <a href="PantallaInicio.php"><img src="../img/logo/loder.png" alt=""></a>
                </div>
                <h2>Recuperar Acceso</h2>
                <p style="color: #666; text-align: center; margin-bottom: 20px;">
                    Introduce tu correo electrónico para recibir las instrucciones de restablecimiento de contraseña.
                </p>

                <div class="form-input">
                    <label for="correoElectronico">Correo Electrónico</label>
                    <input type="email" id="correoElectronico" name="correoElectronico" placeholder="Correo electrónico" required>
                </div>

                <div class="form-input pt-30">
                    <button type="submit" id="btnRecuperarAcceso" name="btnRecuperarAcceso" class="btn btn-primary w-100">Enviar Enlace</button>
                </div>
                
                <!-- Volver al Login -->
                <a href="InicioSesion.php" class="forget">Volver al inicio de sesión</a>
                <!-- Registro por si acaso -->
                <a href="RegistroUsuario.php" class="registration">Registrarse</a>
            </div>
        </form>
        <!-- /end login form -->
    </main>

    <?php
        ImportJS();
    ?>

    <!--Js -->
    <script src="js/recuperarAcceso.js"></script>
    
    </body>
</html>