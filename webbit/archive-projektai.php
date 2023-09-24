<?php get_header('page'); ?>

<div class="container">
    <main id="primary" class="site-main">
        <div class="row g-5">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="col-md-4 wow slideInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="picture-container">
                            <?php
                            if (has_post_thumbnail()) {
                                $image_id = get_post_thumbnail_id();
                                $image_url = wp_get_attachment_image_src($image_id, 'full');
                                if ($image_url) {
                                    echo '<img src="' . esc_url($image_url[0]) . '" alt="Post Thumbnail" class="picture" />';
                                }
                            }
                            ?>
                        </div>

                        <a class="btn btn-lg btn-primary rounded" target="_blank" rel="noopener noreferrer" href="<?php the_title(); ?>">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

            <?php endwhile; ?>

        </div>
        <?php the_posts_pagination(); ?>
    </main>
</div>

<?php get_footer(); ?>