<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/RepoProyectoAmbienteWeb/Controller/InicioController.php';
    include_once $_SERVER['DOCUMENT_ROOT'] . '/RepoProyectoAmbienteWeb/View/LayoutInterno.php';
?>

<!doctype html>
<html class="no-js" lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Topografía Proyecto | Inicio</title>
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
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">                                                                                          
                                                <li class="active" ><a href="PantallaInicio.php">Inicio</a></li>
                                                <li><a href="../vUsuario/CambiarContrasenna.php">Cambiar contraseña</a></li>
                                                <li><a href="about.html">Nosotros</a></li>
                                                <li><a href="#">Blog</a>
                                                    <ul class="submenu">
                                                        <li><a href="blog.html">Blog</a></li>
                                                        <li><a href="blog_details.html">Detalles del Blog</a></li>
                                                        <li><a href="elements.html">Elementos</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact.html">Contacto</a></li>
                                                <!-- Button -->
                                                <?php if(isset($_SESSION["NombreUsuario"])): ?>
                                                    <li class="button-header margin-left "><a href="#" class="btn"><i class="fas fa-user"></i> <?php echo $_SESSION["NombreUsuario"]; ?></a></li>
                                                    <form method="POST" action="" style="display:inline; margin-left: 10px;">
                                                        <li class="button-header"><button type="submit" name="btnSalir" class="btn btn3">Cerrar Sesión</button></li>
                                                    </form>
                                                <?php else: ?>
                                                    <li class="button-header margin-left "><a href="RegistroUsuario.php" class="btn">Registrar</a></li>
                                                    <li class="button-header"><a href="InicioSesion.php" class="btn btn3">Iniciar Sesión</a></li>
                                                <?php endif; ?>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div> 
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? slider Area Start-->
        <section class="slider-area ">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-12">
                                
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </section>
        <!-- ? services-area -->
        <div class="services-area">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-30">
                            <div class="features-icon">
                                
                            </div>
                            <div class="features-caption">
                                <h3>Levantamientos Topográficos</h3>
                                <p>Medición precisa de terrenos, fincas y parcelas con tecnología GPS de alta precisión.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-30">
                            <div class="features-icon">
                                
                            </div>
                            <div class="features-caption">
                                <h3>Replanteo de Obras</h3>
                                <p>Marcación exacta de ejes, niveles y estructuras para proyectos civiles y de construcción.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-30">
                            <div class="features-icon">
                                
                            </div>
                            <div class="features-caption">
                                <h3>Levantamientos de Planos</h3>
                                <p>Creación de planos topográficos detallados para proyectos de ingeniería y construcción.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Courses area start -->
        <div class="courses-area section-padding40 fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            
                        </div>
                    </div>
                </div>
                <div class="courses-actives">
                    <!-- Single -->
                    <div class="properties pb-20">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <a href="#"><img src="../img/gallery/featured1.png" alt=""></a>
                            </div>
                            <div class="properties__caption">
                                <p>Topografía</p>
                                <h3><a href="#">Levantamiento Topográfico y Planos de Catastro</a></h3>
                                <p>Medición precisa de terrenos, fincas y parcelas urbanas. Elaboramos los planos oficiales necesarios para la inscripción, visado y procesos legales de su propiedad.

                                </p>
                                <div class="properties__footer d-flex justify-content-between align-items-center">
                                    <div class="restaurant-name">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half"></i>
                                        </div>
                                        <p><span>(4.5)</span> basado en 120</p>
                                    </div>
                                    <div class="price">
                                    </div>
                                </div>
                                <a href="#" class="border-btn border-btn2">Más información</a>
                            </div>

                        </div>
                    </div>
                    <!-- Single -->
                    
                    <!-- Single -->
                    <!-- Single -->
                    <div class="properties pb-20">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <a href="#"><img src="../img/gallery/featured3.png" alt=""></a>
                            </div>
                            <div class="properties__caption">
                                <p>Topografía</p>
                                <h3><a href="#">Control y Replanteo de Obras</a></h3>
                                <p>Trasladamos los planos de su proyecto al terreno con milímetro de precisión. Control de niveles, movimiento de tierras y seguimiento de ejes estructurales.

                                </p>
                                <div class="properties__footer d-flex justify-content-between align-items-center">
                                    <div class="restaurant-name">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half"></i>
                                        </div>
                                        <p><span>(4.5)</span> basado en 120</p>
                                    </div>
                                    <div class="price">
                                    </div>
                                </div>
                                <a href="#" class="border-btn border-btn2">Más información</a>
                            </div>

                        </div>
                    </div>
                    <!-- Single -->
                    <!-- Single -->
                    <div class="properties pb-20">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <a href="#"><img src="../img/gallery/featured2.png" alt=""></a>
                            </div>
                            <div class="properties__caption">
                                <p>Topografía</p>
                                <h3><a href="#">Fotogrametría con Drones y Modelado 3D</a></h3>
                                <p>Mapeo aéreo de grandes extensiones de terreno en tiempo récord. Obtenga curvas de nivel detalladas, nubes de puntos y ortomosaicos de alta resolución.

                                </p>
                                <div class="properties__footer d-flex justify-content-between align-items-center">
                                    <div class="restaurant-name">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half"></i>
                                        </div>
                                        <p><span>(4.5)</span> basado en 120</p>
                                    </div>
                                    <div class="price">
                                    </div>
                                </div>
                                <a href="#" class="border-btn border-btn2">Más información</a>
                            </div>

                        </div>
                    </div>
                    <!-- Single -->
                </div>
            </div>
        </div>
        <!-- Courses area End -->
        <!--? About Area-1 Start -->
        <section class="about-area1 fix pt-10">
            <div class="support-wrapper align-items-center">
                <div class="col-md-8 mx-auto">
                    <div class="about-icon">
                        <img src="../img/icon/about.svg" alt="">
                    </div>
                    <!-- section tittle -->
                    <div class="section-tittle section-tittle2 mb-55">
                        <div class="front-text">
                            <h2 class="">Soluciones topográficas con respaldo profesional y precisión garantizada</h2>
                            <p>Desarrollamos proyectos de medición y análisis de terrenos utilizando tecnología de vanguardia y metodologías geoespaciales óptimas. Nos aseguramos de que cada plano cumpla con las normativas técnicas y legales vigentes para proteger su inversión.</p>
                        </div>
                    </div>
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="../img/icon/right-icon.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Uso de equipos GNSS/GPS de alta precisión y estaciones totales de última generación.</p>
                        </div>
                    </div>
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="../img/icon/right-icon.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Procesamiento de datos y modelado digital de terrenos con altos estándares técnicos..</p>
                        </div>
                    </div>

                    <div class="single-features">
                        <div class="features-icon">
                            <img src="../img/icon/right-icon.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Asesoría integral en trámites catastrales, visados municipales y validaciones registrales..</p>
                        </div>
                    </div>
                </div>
                <div class="right-content1">

                        
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
        <!--? top subjects Area Start -->
        <div class="topic-area section-padding40">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Temas por Explorar</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                                <img src="../img/gallery/topic1.png" alt="">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3><a href="#">REPLANTEO DE EJES</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                                <img src="../img/gallery/topic2.png" alt="">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3><a href="#">MEDICIÓN DE TIERRAS</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                                <img src="../img/gallery/topic3.png" alt="">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3><a href="#">PLANOS DE CATASTRO</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                                <img src="../img/gallery/topic4.png" alt="">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3><a href="#">CONTROL DE OBRAS</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                                <img src="../img/gallery/topic5.png" alt="">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3><a href="#">URBANIZACIONES</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                                <img src="../img/gallery/topic6.png" alt="">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3><a href="#">MAPPING CON DRONES</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                                <img src="../img/gallery/topic7.png" alt="">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3><a href="#">CURVAS DE NIVEL</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                                <img src="../img/gallery/topic8.png" alt="">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3><a href="#">MOVIMIENTO DE TIERRAS</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="section-tittle text-center mt-20">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- top subjects End -->
        <!--? About Area-3 Start -->
        <section class="about-area3 fix">
            <div class="support-wrapper align-items-center">
                <div class="right-content3">
                    <!-- img -->
                
                    </div>
                </div>
                <div class="left-content3">
                    
        <!-- About Area End -->
        
       
        </section>
        <!-- About Area End -->
    </main>
    <footer>
     <div class="footer-wrappper footer-bg">
        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-4 col-lg-5 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo mb-25">
                                    <a href="PantallaInicio.php"><img src="../img/logo/logo2_footer.png" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>El proceso automatizado comienza tan pronto como su ropa entra en la máquina.</p>
                                    </div>
                                </div>
                                <!-- social -->
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Nuestras soluciones</h4>
                                <ul>
                                    <li><a href="#">Diseño y creatividad</a></li>
                                    <li><a href="#">Telecomunicaciones</a></li>
                                    <li><a href="#">Restauración</a></li>
                                    <li><a href="#">Programación</a></li>
                                    <li><a href="#">Arquitectura</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Soporte</h4>
                                <ul>
                                    <li><a href="#">Diseño y creatividad</a></li>
                                    <li><a href="#">Telecomunicaciones</a></li>
                                    <li><a href="#">Restauración</a></li>
                                    <li><a href="#">Programación</a></li>
                                    <li><a href="#">Arquitectura</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Empresa</h4>
                                <ul>
                                    <li><a href="#">Diseño y creatividad</a></li>
                                    <li><a href="#">Telecomunicaciones</a></li>
                                    <li><a href="#">Restauración</a></li>
                                    <li><a href="#">Programación</a></li>
                                    <li><a href="#">Arquitectura</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Footer End-->
      </div>
  </footer> 
  <!-- Scroll Up -->
  <div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<?php
    ImportJS();
?>

</body>
</html>