
<?php /* Template Name: Home */
get_header(); ?>
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
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Apie mus</h5>
                        <h1 class="mb-0">Ilgametė IT sferos patirtis</h1>
                    </div>
                    <p class="mb-4">Puikiai suprantame sparčiai kintančią technologijų ir verslo aplinką bei esame pasirengę padėti jums išnaudoti visas galimybes. Mūsų profesionali komanda ir aukštos kvalifikacijos specialistai nuolat seka naujausius IT naujienas ir tendencijas, kad galėtume jums pasiūlyti efektyvius ir inovatyvius sprendimus.</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Duomenų apsauga</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Profesionalus aptarnavimas</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Pagalba 24/7</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Darbų garantija</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Skambinkite, jei turite klausimų</h5>
                            <h4 class="text-primary mb-0"><a href="tel:+370 (645) 69799">+370 (645) 69799</a></h4>
                        </div>
                    </div>
                    <a href="/kontaktai" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Prašyti pasiūlymo</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="<?= get_template_directory_uri() . "/img/pexels-matheus-bertelli-3321795.jpg" ?>" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Kodėl rinktis mus</h5>
                <h1 class="mb-0">Mes čia, kad padėtume jūsų verslui sparčiai augti</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                            <h4>Geriausi rinkoje</h4>
                            <p class="mb-0">esame pirmaujanti IT sferos įmonė Lietuvoje</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <h4>Privatumas</h4>
                            <p class="mb-0">skiriame didelį dėmesį jūsų duomenų saugumui</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="<?= get_template_directory_uri() . "/img/feature.jpg" ?>" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-users-cog text-white"></i>
                            </div>
                            <h4>Profesionalus aptarnavimas</h4>
                            <p class="mb-0">profesionalų aptarnavimą užtikrina mūsų specialistai</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <h4>Pagalba 24/7</h4>
                            <p class="mb-0">esame pasiekiami ir pasirengę padėti bet kuriuo metu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Mūsų paslaugos</h5>
                <h1 class="mb-0">Individualūs IT sprendimai jūsų sėkmingam verslui</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-code text-white"></i>
                        </div>
                        <h4 class="mb-3">Tinklapio kūrimas</h4>
                        <p class="m-0">Kurkite profesionalius tinklalapius, pritaikytus jūsų verslo poreikiams</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fab fa-android text-white"></i>
                        </div>
                        <h4 class="mb-3">Mobiliųjų aplikacijų kūrimas</h4>
                        <p class="m-0">Kurkite inovatyvias ir funkcionalias mobiliasias aplikacijas</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-search text-white"></i>
                        </div>
                        <h4 class="mb-3">SEO optimizacija</h4>
                        <p class="m-0">Padidinkite savo svetainės matomumą paieškos sistemose</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-chart-pie text-white"></i>
                        </div>
                        <h4 class="mb-3">Duomenų analitika</h4>
                        <p class="m-0">Tyrimai ir analizės, padedantys išgauti naudingą informaciją iš duomenų</p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-shield-alt text-white"></i>
                        </div>
                        <h4 class="mb-3">WEB apsauga</h4>
                        <p class="m-0">
                            Apsaugokite verslą ir duomenis nuo išorinių grėsmių.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                        <h3 class="text-white mb-3">Skambinkite, norėdami gauti pasiūlymą</h3>
                        <p class="text-white mb-3">Suteiksime jums konsultaciją ir pasiūlysime tinkamiausią sprendimą</p>
                        <h2 class="text-white mb-0"><a class="text-white" href="tel:+370 (645) 69799">+370 (645) 69799</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5 justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Teiraukitės pasiūlymo</h5>
                        <h1 class="mb-0">Reikia nemokamo pasiūlymo? Drąsiai susisiekite su mumis</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Atsakome per 24 valandas</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>24 valandų telefoninė pagalba</h5>
                        </div>
                    </div>
                    <p class="mb-4">Mes su džiaugsmu pasiūlysime jums nemokamą pasiūlymą, atitinkantį jūsų poreikius ir tikslus. Pasitikėkite mūsų įmonės profesionalumu ir patikimumu, kad gautumėte aukštos kokybės sprendimą, pritaikytą jūsų verslui. Susisiekite su mumis šiandien ir pradėkite savo sėkmingą interneto projektą!</p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Skambinkite, jei turite klausimų</h5>
                            <h4 class="text-primary mb-0"><a href="tel:+370 (645) 69799">+370 (645) 69799</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">

            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <!-- <h5 class="fw-bold text-primary text-uppercase">Mūsų paslaugos</h5> -->
                <h1 class="mb-0">Mumis Pasitiki</h1>
            </div>
        </div>
        <div class="bg-white">
            <div class="img-vendor">
                <div class="d-flex align-items-center justify-content-center">
                    <a href="https://gaisrine.lt" target="_blank">
                        <img class="img-fluid" src="<?= get_template_directory_uri() . "/img/logo-gaisrine.png" ?>">
                    </a>
                </div>

                <div class="d-flex align-items-center justify-content-center">
                    <a href="https://sa.lt" target="_blank">
                        <img class="img-fluid" src="<?= get_template_directory_uri() . "/img/sa-logo.svg" ?>">
                    </a>
                </div>

                <div class="d-flex align-items-center justify-content-center">
                    <a href="https://rivile.lt" target="_blank">
                        <img class="img-fluid" src="<?= get_template_directory_uri() . "/img/logo-black-2.svg" ?>">
                    </a>
                </div>

            </div>
        </div>
    </div>
    </div>

<?php get_footer(); ?>