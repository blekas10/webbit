<?php
get_header('page');
?>
    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="mb-5">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <img class="img-fluid w-100 rounded mb-5" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>">
                        <?php endif; ?>

                        <h1 class="mb-4"><?php the_excerpt(); ?></h1>
                        <p><?php get_template_part('template-parts/content', 'article')?></p>
                    </div>
                    <!-- Blog Detail End -->

                    <!-- Comment List Start -->
<!--                    <div class="mb-5">-->
<!--                        <div class="section-title section-title-sm position-relative pb-3 mb-4">-->
<!--                            <h3 class="mb-0">3 Comments</h3>-->
<!--                        </div>-->
<!--                        <div class="d-flex mb-4">-->
<!--                            <img src="img/user.jpg" class="img-fluid rounded" style="width: 45px; height: 45px;">-->
<!--                            <div class="ps-3">-->
<!--                                <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>-->
<!--                                <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore-->
<!--                                    accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed eirmod</p>-->
<!--                                <button class="btn btn-sm btn-light">Reply</button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="d-flex mb-4">-->
<!--                            <img src="img/user.jpg" class="img-fluid rounded" style="width: 45px; height: 45px;">-->
<!--                            <div class="ps-3">-->
<!--                                <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>-->
<!--                                <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore-->
<!--                                    accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed eirmod</p>-->
<!--                                <button class="btn btn-sm btn-light">Reply</button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="d-flex ms-5 mb-4">-->
<!--                            <img src="img/user.jpg" class="img-fluid rounded" style="width: 45px; height: 45px;">-->
<!--                            <div class="ps-3">-->
<!--                                <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>-->
<!--                                <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore-->
<!--                                    accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed eirmod</p>-->
<!--                                <button class="btn btn-sm btn-light">Reply</button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                    <!-- Comment List End -->

                    <!-- Comment Form Start -->
<!--                    <div class="bg-light rounded p-5">-->
<!--                        <div class="section-title section-title-sm position-relative pb-3 mb-4">-->
<!--                            <h3 class="mb-0">Leave A Comment</h3>-->
<!--                        </div>-->
<!--                        <form>-->
<!--                            <div class="row g-3">-->
<!--                                <div class="col-12 col-sm-6">-->
<!--                                    <input type="text" class="form-control bg-white border-0" placeholder="Your Name" style="height: 55px;">-->
<!--                                </div>-->
<!--                                <div class="col-12 col-sm-6">-->
<!--                                    <input type="email" class="form-control bg-white border-0" placeholder="Your Email" style="height: 55px;">-->
<!--                                </div>-->
<!--                                <div class="col-12">-->
<!--                                    <input type="text" class="form-control bg-white border-0" placeholder="Website" style="height: 55px;">-->
<!--                                </div>-->
<!--                                <div class="col-12">-->
<!--                                    <textarea class="form-control bg-white border-0" rows="5" placeholder="Comment"></textarea>-->
<!--                                </div>-->
<!--                                <div class="col-12">-->
<!--                                    <button class="btn btn-primary w-100 py-3" type="submit">Leave Your Comment</button>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </form>-->
<!--                    </div>-->
                    <!-- Comment Form End -->
                </div>

                <!-- Sidebar Start -->
                <div class="col-lg-4">
                    <!-- Search Form Start -->
<!--                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">-->
<!--                        <div class="input-group">-->
<!--                            <input type="text" class="form-control p-3" placeholder="Keyword">-->
<!--                            <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>-->
<!--                        </div>-->
<!--                    </div>-->
                    <!-- Search Form End -->

                    <!-- Category Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Kategorijos</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <?php
                            $categories = get_the_category(); // Get the categories for the current post

                            if ($categories) {
                                foreach ($categories as $category) {
                                    echo '<a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="' . esc_url(get_category_link($category->term_id)) . '">';
                                    echo '<i class="bi bi-arrow-right me-2"></i>';
                                    echo esc_html($category->name); // Output the category name
                                    echo '</a>';
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <!-- Category End -->

                    <!-- Recent Post Start -->
<!--                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">-->
<!--                        <div class="section-title section-title-sm position-relative pb-3 mb-4">-->
<!--                            <h3 class="mb-0">Recent Post</h3>-->
<!--                        </div>-->
<!--                        <div class="d-flex rounded overflow-hidden mb-3">-->
<!--                            <img class="img-fluid" src="img/blog-1.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">-->
<!--                            <a href="" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">Lorem ipsum dolor sit amet adipis elit-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="d-flex rounded overflow-hidden mb-3">-->
<!--                            <img class="img-fluid" src="img/blog-2.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">-->
<!--                            <a href="" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">Lorem ipsum dolor sit amet adipis elit-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="d-flex rounded overflow-hidden mb-3">-->
<!--                            <img class="img-fluid" src="img/blog-3.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">-->
<!--                            <a href="" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">Lorem ipsum dolor sit amet adipis elit-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="d-flex rounded overflow-hidden mb-3">-->
<!--                            <img class="img-fluid" src="img/blog-1.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">-->
<!--                            <a href="" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">Lorem ipsum dolor sit amet adipis elit-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="d-flex rounded overflow-hidden mb-3">-->
<!--                            <img class="img-fluid" src="img/blog-2.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">-->
<!--                            <a href="" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">Lorem ipsum dolor sit amet adipis elit-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="d-flex rounded overflow-hidden mb-3">-->
<!--                            <img class="img-fluid" src="img/blog-3.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">-->
<!--                            <a href="" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">Lorem ipsum dolor sit amet adipis elit-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
                    <!-- Recent Post End -->

                    <!-- Image Start -->
<!--                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">-->
<!--                        <img src="img/blog-1.jpg" alt="" class="img-fluid rounded">-->
<!--                    </div>-->
                    <!-- Image End -->

                    <!-- Tags Start -->
<!--                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">-->
<!--                        <div class="section-title section-title-sm position-relative pb-3 mb-4">-->
<!--                            <h3 class="mb-0">Tag Cloud</h3>-->
<!--                        </div>-->
<!--                        <div class="d-flex flex-wrap m-n1">-->
<!--                            <a href="" class="btn btn-light m-1">Design</a>-->
<!--                            <a href="" class="btn btn-light m-1">Development</a>-->
<!--                            <a href="" class="btn btn-light m-1">Marketing</a>-->
<!--                            <a href="" class="btn btn-light m-1">SEO</a>-->
<!--                            <a href="" class="btn btn-light m-1">Writing</a>-->
<!--                            <a href="" class="btn btn-light m-1">Consulting</a>-->
<!--                            <a href="" class="btn btn-light m-1">Design</a>-->
<!--                            <a href="" class="btn btn-light m-1">Development</a>-->
<!--                            <a href="" class="btn btn-light m-1">Marketing</a>-->
<!--                            <a href="" class="btn btn-light m-1">SEO</a>-->
<!--                            <a href="" class="btn btn-light m-1">Writing</a>-->
<!--                            <a href="" class="btn btn-light m-1">Consulting</a>-->
<!--                        </div>-->
<!--                    </div>-->
                    <!-- Tags End -->

                    <!-- Plain Text Start -->
<!--                    <div class="wow slideInUp" data-wow-delay="0.1s">-->
<!--                        <div class="section-title section-title-sm position-relative pb-3 mb-4">-->
<!--                            <h3 class="mb-0">Plain Text</h3>-->
<!--                        </div>-->
<!--                        <div class="bg-light text-center" style="padding: 30px;">-->
<!--                            <p>Vero sea et accusam justo dolor accusam lorem consetetur, dolores sit amet sit dolor clita kasd justo, diam accusam no sea ut tempor magna takimata, amet sit et diam dolor ipsum amet diam</p>-->
<!--                            <a href="" class="btn btn-primary py-2 px-4">Read More</a>-->
<!--                        </div>-->
<!--                    </div>-->
                    <!-- Plain Text End -->
                </div>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Blog End -->


<?php get_footer(); ?>