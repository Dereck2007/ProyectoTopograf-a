<?php
if (!function_exists('ImportCSS')) {
    function ImportCSS($basePath = '../')
    {
        echo '
        <link rel="stylesheet" href="' . $basePath . 'css/bootstrap.min.css">
        <link rel="stylesheet" href="' . $basePath . 'css/owl.carousel.min.css">
        <link rel="stylesheet" href="' . $basePath . 'css/slicknav.css">
        <link rel="stylesheet" href="' . $basePath . 'css/flaticon.css">
        <link rel="stylesheet" href="' . $basePath . 'css/progressbar_barfiller.css">
        <link rel="stylesheet" href="' . $basePath . 'css/gijgo.css">
        <link rel="stylesheet" href="' . $basePath . 'css/animate.min.css">
        <link rel="stylesheet" href="' . $basePath . 'css/animated-headline.css">
        <link rel="stylesheet" href="' . $basePath . 'css/magnific-popup.css">
        <link rel="stylesheet" href="' . $basePath . 'css/fontawesome-all.min.css">
        <link rel="stylesheet" href="' . $basePath . 'css/themify-icons.css">
        <link rel="stylesheet" href="' . $basePath . 'css/slick.css">
        <link rel="stylesheet" href="' . $basePath . 'css/nice-select.css">
        <link rel="stylesheet" href="' . $basePath . 'css/style.css">
        ';
    }
}

if (!function_exists('ImportJS')) {
    function ImportJS($basePath = '../')
    {
        echo '
        <script src="' . $basePath . 'js/vendor/jquery-1.12.4.min.js"></script>
        <script src="' . $basePath . 'js/popper.min.js"></script>
        <script src="' . $basePath . 'js/bootstrap.min.js"></script>
        <script src="' . $basePath . 'js/vendor/modernizr-3.5.0.min.js"></script>
        
        <script src="' . $basePath . 'js/jquery.counterup.min.js"></script>
        <script src="' . $basePath . 'js/waypoints.min.js"></script>
        <script src="' . $basePath . 'js/jquery.countdown.min.js"></script>
        <script src="' . $basePath . 'js/hover-direction-snake.min.js"></script>
        <script src="' . $basePath . 'js/jquery.barfiller.js"></script>
        <script src="' . $basePath . 'js/jquery.nice-select.min.js"></script>
        <script src="' . $basePath . 'js/jquery.sticky.js"></script>
        <script src="' . $basePath . 'js/gijgo.min.js"></script>
        <script src="' . $basePath . 'js/wow.min.js"></script>
        <script src="' . $basePath . 'js/animated.headline.js"></script>
        <script src="' . $basePath . 'js/jquery.magnific-popup.js"></script>
        <script src="' . $basePath . 'js/owl.carousel.min.js"></script>
        <script src="' . $basePath . 'js/slick.min.js"></script>
        <script src="' . $basePath . 'js/jquery.vide.js"></script>
        <script src="' . $basePath . 'js/jquery.slicknav.min.js"></script>
        <script src="' . $basePath . 'js/plugins.js"></script>
        <script src="' . $basePath . 'js/main.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vide/0.5.1/jquery.vide.min.js"></script>
        ';
    }
}
?>