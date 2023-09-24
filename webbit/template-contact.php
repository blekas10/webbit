<?php /* Template Name: Contact */
get_header('page');?>

    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                        <!-- <h5 class="fw-bold text-primary text-uppercase">Susisiekite su mumis</h5> -->
                        <h1 class="mb-0">Jei turite klausimų, drąsiai susisiekite su mumis</h1>
                    </div>
                    <div class="row g-5 mb-5">
                        <div class="col-lg-4">
                            <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                                <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                                    <i class="fa fa-phone-alt text-white"></i>
                                </div>
                                <div class="ps-4">
                                    <h5 class="mb-2">Skambinkite ir užduokite klausimus</h5>
                                    <h4 class="text-primary mb-0"><a href="tel:+370 (645) 69799">+370 (645) 69799</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                                <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                                    <i class="fa fa-envelope-open text-white"></i>
                                </div>
                                <div class="ps-4">
                                    <h5 class="mb-2">Rašykite el. laiškus ir gaukite nemokamą pasiūlymą</h5>
                                    <h4 class="text-primary mb-0"><a href="mailto:info@webbit.lt">info@webbit.lt </a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                                <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                                    <i class="fa fa-map-marker-alt text-white"></i>
                                </div>
                                <div class="ps-4">
                                    <h5 class="mb-2">Aplankykite mūsų biurą</h5>
                                    <h4 class="text-primary mb-0">Vytauto g. 17, Marijampolė</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>