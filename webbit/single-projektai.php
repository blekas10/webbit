<?php
/*
Template Name: Single Projektai
*/
get_header(); // Include your header template
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php while (have_posts()) : the_post(); ?>

                <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="container py-5">
                        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                            <h1 class="fw-bold text-primary text-uppercase"><?php the_title(); ?></h1>
                        </div>
                        <div class="row g-5">

                            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="picture-container">
                                        <?php
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('thumbnail', array('class' => 'picture'));
                                        }
                                        ?>
                                    </div>
                                    <a class="btn btn-lg btn-primary rounded" target="_blank" rel="noopener noreferrer" href="<?php the_permalink(); ?>">
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>

                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .container-fluid -->

                <div class="container">
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </div><!-- .container -->

            <?php endwhile; ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer(); // Include your footer template
?>