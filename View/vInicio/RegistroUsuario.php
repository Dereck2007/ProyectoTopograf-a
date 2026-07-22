<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/RepoProyectoAmbienteWeb/Controller/InicioController.php';
    include_once $_SERVER['DOCUMENT_ROOT'] . '/RepoProyectoAmbienteWeb/View/LayoutExterno.php';
?>

<!doctype html>
<html class="no-js" lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Registro de usuario | Topografía Proyecto</title>
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


<!-- Registro -->

<main class="login-body" style="background-color: #FFF1E6;">
    <!-- Formulario de registro -->
    <form class="form-default" action="" method="POST">
        
        <div class="login-form">
            <!-- logo-login -->
            <div class="logo-login">
                <a href="PantallaInicio.php"><img src="../img/logo/loder.png" alt=""></a>
            </div>
            <h2>Registro</h2>

            <div class="form-input">
                <label for="nombre">Nombre completo</label>
                <input  type="text" id="nombre" name="nombre" placeholder="Nombre completo">
            </div>
            <div class="form-input">
                <label for="correoElectronico">Correo electrónico</label>
                <input type="email" id="correoElectronico" name="correoElectronico" placeholder="Correo electrónico">
            </div>
            <div class="form-input">
                <label for="contrasenna">Contraseña</label>
                <input type="password" id="contrasenna" name="contrasenna" placeholder="Contraseña">
            </div>
            <div class="form-input">
                <label for="confirmarContrasenna">Confirmar contraseña</label>
                <input type="password" id="confirmarContrasenna" name="confirmarContrasenna" placeholder="Confirmar contraseña">
            </div>
            <div class="form-input pt-30">
            <button id="btnRegistrar" name="btnRegistrar" type="submit" class="btn btn-primary w-100">Registrar</button>
            </div>
            <!-- Ir al inicio de sesión -->
            <a href="InicioSesion.php" class="registration">Iniciar sesión</a>
        </div>
    </form>
    <!-- /end login form -->
</main>
    <?php
        ImportJS();
    ?>

    <!-- JS -->
    <script src="js/registro.js"></script>

    
    </body>
</html>