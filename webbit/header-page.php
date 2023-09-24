<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Web Bit - inovatyvūs WEB sprendimai</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>


<body>
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <a href="/" class="navbar-brand p-0">
            <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>Web Bit</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
<!--        <div class="collapse navbar-collapse" id="navbarCollapse">-->
<!--            <div class="navbar-nav ms-auto py-0">-->
<!--                <a href="/" class="nav-item nav-link --><?php //if(is_front_page()) echo 'active'; ?><!--">Pradžia</a>-->
<!--                <a href="apie-mus" class="nav-item nav-link --><?php //if(is_page('apie-mus')) echo 'active'; ?><!--">Apie mus</a>-->
<!--                <a href="projektai" class="nav-item nav-link --><?php //if(is_page('projektai')) echo 'active'; ?><!--">Projektai</a>-->
<!--              <a href="paslaugos" class="nav-item nav-link">Paslaugos</a>-->
<!--                <a href="kontaktai" class="nav-item nav-link --><?php //if(is_page('kontaktai')) echo 'active'; ?><!--">Kontaktai</a>-->
<!--            </div>-->
<!--        </div>-->
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

    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">
                    <?php
                    echo (is_archive()) ? post_type_archive_title() : get_the_title();
                    ?>
                </h1>
            </div>
        </div>
    </div>
</div>