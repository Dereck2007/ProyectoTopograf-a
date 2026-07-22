<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/RepoProyectoAmbienteWeb/Controller/UsuarioController.php';
    include_once $_SERVER['DOCUMENT_ROOT'] . '/RepoProyectoAmbienteWeb/View/LayoutInterno.php';

    if (!isset($mensaje)) {
        $mensaje = "";
    }
?>

<!doctype html>
<html class="no-js" lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cambiar contraseña | Topografía Proyecto</title>
    <meta name="description" content="Página para cambiar contraseña de usuario">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">

    <?php 
         ImportCSS('../'); 
    ?>
</head>
<body>
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

    <main class="login-body" data-vide-bg="../img/login.mp4" data-vide-options="posterType: none">
        <form class="form-default" action="" method="POST">
            <div class="login-form">
                <div class="logo-login">
                    <a href="PantallaInicio.php"><img src="../img/logo/loder.png" alt=""></a>
                </div>
                <h2>Cambiar contraseña</h2>

                <?php if(!empty($mensaje)): ?>
                    <div class="alert alert-info" role="alert"><?php echo htmlspecialchars($mensaje); ?></div>
                <?php endif; ?>

                <div class="form-input">
                    <label for="contrasennaActual">Contraseña actual</label>
                    <input type="password" id="contrasennaActual" name="contrasennaActual" placeholder="Contraseña actual" required>
                </div>

                <div class="form-input">
                    <label for="nuevaContrasenna">Nueva contraseña</label>
                    <input type="password" id="nuevaContrasenna" name="nuevaContrasenna" placeholder="Nueva contraseña" required>
                </div>

                <div class="form-input">
                    <label for="confirmarContrasenna">Confirmar contraseña</label>
                    <input type="password" id="confirmarContrasenna" name="confirmarContrasenna" placeholder="Confirmar contraseña" required>
                </div>

                <div class="form-input pt-30">
                    <button type="submit" name="btnCambiarContrasenna" class="btn btn-primary w-100">Guardar cambios</button>
                </div>

                <a href="PantallaInicio.php" class="registration">Volver al inicio</a>
            </div>
        </form>
    </main>

    <?php 
         ImportJS('../'); 
    ?>
    <script src="../js/cambiarContrasenna.js"></script>

</body>
</html>