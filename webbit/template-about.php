<?php /* Template Name: About us */
get_header('page');
?>

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
                        <h4 class="text-primary mb-0">+370 (645) 69799</h4>
                    </div>
                </div>
                <a href="/kontaktai" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Prašyti pasiūlymo</a>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="<?= get_template_directory_uri() . "/img/about.jpg" ?>" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>