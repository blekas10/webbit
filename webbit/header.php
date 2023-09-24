<!DOCTYPE html>
<html lang="en">
<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JRY3V4N9C2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-JRY3V4N9C2');
    </script>
    <meta charset="utf-8">
    <title>Web Bit - inovatyvūs WEB sprendimai</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="webbit" name="keywords">
    <meta content="webbit" name="description">
    <meta name="google-site-verification" content="Nx6vUMqshm3Ch_SbeEAym0gBYjxwDRm2ROY7Yaa5_hc" />

    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
<div class="container-fluid position-relative p-0">
<!--    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">-->
<!--        <a href="/" class="navbar-brand p-0">-->
<!--            <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>Web Bit</h1>-->
<!--        </a>-->
<!--        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">-->
<!--            <span class="fa fa-bars"></span>-->
<!--        </button>-->
<!--        <div class="collapse navbar-collapse" id="navbarCollapse">-->
<!--            <div class="navbar-nav ms-auto py-0">-->
<!--                <a href="/" class="nav-item nav-link --><?php //if(is_front_page()) echo 'active'; ?><!--">Pradžia</a>-->
<!--                <a href="apie-mus" class="nav-item nav-link --><?php //if(is_page('apie-mus')) echo 'active'; ?><!--">Apie mus</a>-->
<!--                <a href="projektai" class="nav-item nav-link --><?php //if(is_page('projektai')) echo 'active'; ?><!--">Projektai</a>-->
<!--              <a href="paslaugos" class="nav-item nav-link">Paslaugos</a>-->
<!--                <a href="kontaktai" class="nav-item nav-link --><?php //if(is_page('kontaktai')) echo 'active'; ?><!--">Kontaktai</a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </nav>-->
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <a href="/" class="navbar-brand p-0">
            <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>Web Bit</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary', // Replace with your menu location
                    'container'      => 'div',
                    'container_class' => 'navbar-menu',
                    'menu_class'     => '',
                    'echo'           => true,
                    'fallback_cb'    => 'wp_page_menu', // Fallback function if menu isn't set
                ));
                ?>
            </div>
        </div>
    </nav>
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="<?= get_template_directory_uri() . "/img/carousel-1.jpg" ?>" alt="Nuotrauka">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h1 class="display-3 text-white mb-md-5 animated zoomIn">Individualus dėmesys kiekvienam mūsų projektui</h1>
                        <a href="/kontaktai" class="btn btn-primary py-md-3 px-md-5 header-carousel-href animated slideInLeft">Nemokama konsultacija</a>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="<?= get_template_directory_uri() . "/img/pexels-fauxels-3184454.jpg" ?>" alt="Nuotrauka">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h1 class="display-3 text-white mb-md-4 animated zoomIn">Kūrybiški ir inovatyvūs skaitmeniniai sprendimai</h1>
                        <a href="/kontaktai" class="btn btn-primary py-md-3 px-md-5 header-carousel-href animated slideInLeft">Nemokama konsultacija</a>

                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Ankstesnis</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Kitas</span>
        </button>
    </div>
</div>
