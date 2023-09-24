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
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
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
        </div>

    </nav>

    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn"><?php
                    if ( is_category() ) {
                        single_cat_title();
                    } elseif ( is_tag() ) {
                        single_tag_title();
                    } elseif ( is_author() ) {
                        the_post();
                        echo 'Author Archives: ' . get_the_author();
                        rewind_posts();
                    } elseif ( is_day() ) {
                        echo 'Daily Archives: ' . get_the_date();
                    } elseif ( is_month() ) {
                        echo 'Monthly Archives: ' . get_the_date( 'F Y' );
                    } elseif ( is_year() ) {
                        echo 'Yearly Archives: ' . get_the_date( 'Y' );
                    }
                    ?></h1>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <main id="primary" class="site-main">

        <header class="archive-header">
            <h1 class="archive-title">

            </h1>
        </header>

        <div class="row g-5">

            <?php while ( have_posts() ) : the_post(); ?>

                <div class="col-md-4 wow slideInUp" data-wow-delay="0.1s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <?php the_post_thumbnail( 'medium', array( 'class' => 'img-fluid' ) ); ?>

                        </div>
                        <!--                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">-->
                        <!--                            --><?php //the_category(', '); ?>
                        <!--                        </a>-->
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <!--                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>--><?php //the_author(); ?><!--</small>-->
                                <!--                                <small><i class="far fa-calendar-alt text-primary me-2"></i>--><?php //the_date(); ?><!--</small>-->
                            </div>
                            <h5 class="mb-3"><?php the_title(); ?></h5>
                            <p class="blog-excerpt"><?php the_excerpt(); ?></p>
                            <a class="text-uppercase btn btn-primary" href="<?php the_permalink(); ?>">Plačiau</a>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>

        </div>

        <?php the_posts_pagination(); ?>



    </main>
</div>

<?php get_footer(); ?>