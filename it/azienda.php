<?
$lingua = 1;
require_once("../inc/global.php");
require_once("../inc/header.php");
require_once("../inc/mysqli.php");
// $database = new DB();
$titleseo = "aster";
$descriptionseo = "descrizione";
$image = $pathindex . "assets/images/Aster_Elettronica-Favicon.png";
$widthseo = "400";
$heightseo = "115";
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <? require_once($pathindex . "inc/tagmanager.php") ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <? require_once($pathindex . "inc/htmlcx/meta-ita.php"); ?>
    <link rel="canonical" href="<?= $pageurlseolan ?>">
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= $image ?>" type="image/x-icon">
    <!-- CSS here -->
    <link rel="stylesheet" href="<?= $pathindex ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= $pathindex ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $pathindex ?>assets/css/font-awesome-pro.min.css">
    <link rel="stylesheet" href="<?= $pathindex ?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?= $pathindex ?>assets/css/bexon-icons.css">
    <link rel="stylesheet" href="<?= $pathindex ?>assets/css/nice-select.css">
    <link rel="stylesheet" href="<?= $pathindex ?>assets/css/swiper.min.css">
    <link rel="stylesheet" href="<?= $pathindex ?>assets/css/venobox.min.css">
    <link rel="stylesheet" href="<?= $pathindex ?>assets/css/odometer-theme-default.css">
    <link rel="stylesheet" href="<?= $pathindex ?>assets/css/meanmenu.css">
    <link rel="stylesheet" href="<?= $pathindex ?>assets/css/main.css">
</head>

<body>

    <? require_once($pathindex . "inc/tagmanager_no.php") ?>

    <!-- ==================== Start Navbar ==================== -->

    <? require_once($pathindex . "inc/htmlcx/menu-ita.php") ?>

    <!-- ==================== End Navbar ==================== -->
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main id="primary" class="site-main">
                <div class="space-for-header"></div>
                <!-- start: Breadcrumb Section -->
                <section class="tj-page-header section-gap-x" data-bg-image="<?= $pathindex ?>assets/images/su-di-noi/su-di-noi-gallery-8.webp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="tj-page-header-content text-center">
                                    <h1 class="tj-page-title">Azienda</h1>
                                    <div class="tj-page-link">
                                        <span>
                                            <a href="<?= $pathindex ?>">Home</a>
                                        </span>
                                        <span><i class="tji-arrow-right text-blu-secondario"></i></span>
                                        <span>
                                            <span>About Us</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-header-overlay"></div>
                </section>
                <!-- end: Breadcrumb Section -->
                <!-- start: About Section -->
                <section class="tj-about-section section-gap">
                    <div class="container">
                        <div class="mb-5">
                            <h2 class="fw-bold">Testo introduttivo</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus suscipit explicabo, reiciendis commodi quos quidem neque eum sequi reprehenderit dolores quas nesciunt inventore ipsum officiis fuga illum totam a dolorem.</p>
                        </div>
                        <div class="row row-gap-4">
                            <div class="col-lg-4 col-md-6 order-lg-1 order-3">
                                <div class="countup-item style-2 wow fadeInUp h-100 justify-content-end align-items-start" data-wow-delay=".1s" data-bg-image="<?= $pathindex ?>assets/images/su-di-noi/su-di-noi-mission-vision.webp">
                                    <span class="h3 text-white">al fianco delle aziende dal 1996</span>
                                </div>
                            </div>
                            <div class="col-lg-8 col-sm-12 order-lg-2 order-1">
                                <div class="about-content-area-2 wow fadeInUp " data-wow-delay=".3s">
                                    <div class="about-content mx-auto">
                                        <div class="sec-heading style-2">
                                            <span class="sub-title">Servizi</span>
                                            <h2 class="sec-title title-highlight">Driving into Excellence & Innovation: Your Trusted Partner
                                                for
                                                Sustainable Business Success.
                                            </h2>
                                        </div>
                                        <div class="wow fadeInUp" data-wow-delay=".3s">
                                            <a class="text-btn" href="<?= $pathindex ?>servizi">
                                                <span class="btn-text"><span>Scopri di più</span></span>
                                                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="video-img wow fadeInRight" data-wow-delay=".7s">
                                        <img src="<?= $pathindex ?>assets/images/home/home-intro-2.webp" alt="immagine servizio">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end: About Section -->

                <!-- start: About Section -->
                <section class="tj-about-section-2 section-gap section-gap-x">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 order-lg-1 order-2">
                                <div class="about-img-area style-2 wow fadeInLeft" data-wow-delay=".3s">
                                    <div class="about-img overflow-hidden">
                                        <img data-speed=".8" src="<?= $pathindex ?>assets/images/su-di-noi/su-di-noi-intro-1.webp" alt="immagine servizi">
                                    </div>
                                    <div class="box-area style-2">
                                        <div class="progress-box wow fadeInUp" data-wow-delay=".3s">
                                            <span class="title h3">Business Progress</span>
                                            <ul class="tj-progress-list">
                                                <li>
                                                    <span class="tj-progress-title">Revenue</span>
                                                    <div class="tj-progress">
                                                        <span class="tj-progress-percent">82%</span>
                                                        <div class="tj-progress-bar" data-percent="82">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="tj-progress-title">Satisfaction</span>
                                                    <div class="tj-progress">
                                                        <span class="tj-progress-percent">90%</span>
                                                        <div class="tj-progress-bar" data-percent="90">
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 order-lg-2 order-1">
                                <div class="about-content-area">
                                    <div class="sec-heading">
                                        <span class="sub-title wow fadeInUp" data-wow-delay=".3s">Get to Know
                                            Us</span>
                                        <h2 class="sec-title title-anim">Driving Innovation and Excellence for Sustainable Corporate Success
                                            <span>Worldwide.</span>
                                        </h2>
                                    </div>
                                </div>
                                <div class="about-bottom-area">
                                    <div class="mission-vision-box wow fadeInLeft" data-wow-delay=".5s">
                                        <span class="title h3">Our Mission</span>
                                        <p class="desc">our mission is empower businesses through innovate best solution, exceptional
                                            service.
                                        </p>
                                        <ul class="list-items">
                                            <li><i class="tji-list"></i>Innovation & Excellence</li>
                                            <li><i class="tji-list"></i>Exceptional Customer</li>
                                            <li><i class="tji-list"></i>Business Growth</li>
                                        </ul>
                                    </div>
                                    <div class="mission-vision-box wow fadeInRight" data-wow-delay=".5s">
                                        <span class="title h3">Our Vision</span>
                                        <p class="desc">Our vision is to become a global leader in providing transformative business
                                            solutions.
                                        </p>
                                        <ul class="list-items">
                                            <li><i class="tji-list"></i>Global Leadership</li>
                                            <li><i class="tji-list"></i>Transformative Impact</li>
                                            <li><i class="tji-list"></i>Sustainable Success</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="wow fadeInUp my-5 mb-lg-0" data-wow-delay=".3s">
                                    <a class="text-btn" href="<?= $pathindex ?>/contatti">
                                        <span class="btn-text"><span>Scopri di più</span></span>
                                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-shape-1">
                        <img src="<?= $pathindex ?>assets/images/shape/pattern-2.svg" alt="">
                    </div>
                    <div class="bg-shape-2">
                        <img src="<?= $pathindex ?>assets/images/shape/pattern-3.svg" alt="">
                    </div>
                </section>
                <!-- end: About Section -->

                <!-- start: Team Section -->
                <?
                $people = [
                    [
                        "name" => "Marcante Giampaolo",
                        "role" => "Commercial&Sales Dep",
                        "email" => "gmarcante@asterelettronica.com",
                        "image" => "aster-elettronica-team-1.webp"
                    ],
                    [
                        "name" => "Canale Pierluigi",
                        "role" => "Production&Planning Dep",
                        "email" => "pcanale@asterelettronica.com",
                        "image" => "aster-elettronica-team-2.webp"
                    ],
                    [
                        "name" => "Facchinelli Laura",
                        "role" => "Administration&Purchasing Dep",
                        "email" => "lfacchinelli@asterelettronica.com",
                        "image" => "aster-elettronica-team-3.webp"
                    ],
                    [
                        "name" => "Nome Cognome",
                        "role" => "Dipartimento",
                        "email" => "",
                        "image" => "aster-elettronica-team-4.webp"
                    ],
                    [
                        "name" => "De Gerone Pierluigi",
                        "role" => "Technical Process Dep",
                        "email" => "pdegerone@asterelettronica.com",
                        "image" => "aster-elettronica-team-5.webp"
                    ],
                    [
                        "name" => "Marcante Alex",
                        "role" => "Technical&Quality Dep",
                        "email" => "amarcante@asterelettronica.com",
                        "image" => "aster-elettronica-team-6.webp"
                    ],
                    [
                        "name" => "Capuzzo Martina",
                        "role" => "Test Dep",
                        "email" => "mcapuzzo@asterelettronica.com",
                        "image" => "aster-elettronica-team-7.webp"
                    ],
                    [
                        "name" => "Generico 1",
                        "role" => "Dipartimento",
                        "email" => "prova@mail.com",
                        "image" => "aster-elettronica-team-8.webp"
                    ],
                    [
                        "name" => "Maddalena Annachiara",
                        "role" => "Warehouse Dep",
                        "email" => "amaddalena@asterelettronica.com",
                        "image" => "aster-elettronica-team-9.webp"
                    ],
                    [
                        "name" => "Generico 2",
                        "role" => "Dipartimento",
                        "email" => "prova@mail.com",
                        "image" => "aster-elettronica-team-10.webp"
                    ]
                ];
                ?>
                <section class="tj-team-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="sec-heading text-center">
                                    <span class="sub-title wow fadeInUp" data-wow-delay=".1s">Meet Our Team</span>
                                    <h2 class="sec-title title-anim">People Behind <span>Bexon.</span></h2>
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-lg-5 row-cols-2">
                            <? foreach ($people as $member): ?>
                                <div class="col col-sm-6">
                                    <div class="team-item wow fadeInUp" data-wow-delay=".1s">
                                        <div class="team-img">
                                            <div class="team-img-inner">
                                                <img src="<?= $pathindex . "assets/images/su-di-noi/" . $member["image"] ?>" alt="immagine membro del team">
                                            </div>
                                        </div>
                                        <div class="team-content">
                                            <span class="title d-block"><a href="team-details.html"><?= $member["name"] ?></a></span>
                                            <span class="designation d-block"><?= $member["role"] ?></span>
                                            <a class="mail-at" href="mailto:<?= $member["email"] ?>"><i class="tji-at"></i></a>
                                        </div>
                                    </div>
                                </div>
                            <? endforeach; ?>
                        </div>
                    </div>
                </section>
                <!-- end: Team Section -->
                <!-- start: Client Section -->
                <section class="tj-client-section-2 h6-client section-gap-x wow fadeInUp" data-wow-delay=".4s">
                    <div class="container-fluid client-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="h6-client-title-wrapper">
                                    <span class="h6-client-title
              ">Sosteniamo lo sport, i giovani e le attività locali</span>

                                </div>
                            </div>
                            <div class="col-12 d-flex gap-5 justify-content-center">
                                <? for ($i = 0; $i < 4; $i++): ?>
                                    <div class="client-logo">
                                        <img src="<?= $pathindex ?>assets/images/brands/brand-1-light.webp" alt="">
                                    </div>
                                <? endfor; ?>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end: Client Section -->
                <!-- start: Project Section -->
                <?
                $images = array_slice(scandir($pathindex . "assets/images/su-di-noi"), 15, 8);
                ?>
                <section class="h6-project section-gap section-gap-x">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="h6-project-inner wow fadeInUp" data-wow-delay="0.6s">
                                    <? for ($i = 0; $i < count($images); $i++): ?>
                                        <div class=" project-item h6-project-item ">
                                            <div class="project-item-inner h6-project-item-inner"
                                                data-bg-image="<?= $pathindex . "assets/images/su-di-noi/" . $images[$i] ?>">
                                                <div class="project-content">
                                                    <span class="categories"><a href="portfolio-details.html">Empower</a></span>
                                                    <div class="project-text">
                                                        <span class="title"><a href="portfolio-details.html">Digital Marketing Campaign</a></span>
                                                        <a class="project-btn" href="portfolio-details.html">
                                                            <i class="tji-arrow-right-long"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <? endfor; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-shape-1">
                        <img src="<?= $pathindex ?>assets/images/shape/pattern-2.svg" alt="pattern di sfondo">
                    </div>
                    <div class="bg-shape-2">
                        <img src="<?= $pathindex ?>assets/images/shape/pattern-3.svg" alt="pattern di sfondo">
                    </div>
                </section>
                <!-- end: Project Section -->
                <!-- start: Cta Section -->
                <section class="tj-cta-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="cta-area" data-bg-image="<?= $pathindex ?>assets/images/su-di-noi/su-di-noi-cta.webp">
                                    <div class="cta-content">
                                        <h2 class="title title-anim">Let’s Build Future Together.</h2>
                                        <div class="cta-btn wow fadeInUp" data-wow-delay=".6s">
                                            <a class="tj-primary-btn " href="<?= $pathindex ?>contatti">
                                                <span class="btn-text"><span>Contattaci</span></span>
                                                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end: Cta Section -->
            </main>
            <!-- ==================== Start Footer ==================== -->
            <? require_once($pathindex . "inc/htmlcx/footer-ita.php") ?>
            <!-- ==================== End Footer ==================== -->
        </div>
    </div>


    <!-- JS here -->
    <script src="<?= $pathindex ?>assets/js/jquery.min.js"></script>
    <script src="<?= $pathindex ?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= $pathindex ?>assets/js/gsap.min.js"></script>
    <script src="<?= $pathindex ?>assets/js/ScrollSmoother.js"></script>
    <script src="<?= $pathindex ?>assets/js/gsap-scroll-to-plugin.min.js"></script>
    <script src="<?= $pathindex ?>assets/js/gsap-scroll-trigger.min.js"></script>
    <script src="<?= $pathindex ?>assets/js/gsap-split-text.min.js"></script>
    <script src="<?= $pathindex ?>assets/js/jquery.nice-select.min.js"></script>
    <script src="<?= $pathindex ?>assets/js/swiper.min.js"></script>
    <script src="<?= $pathindex ?>assets/js/odometer.min.js"></script>
    <script src="<?= $pathindex ?>assets/js/venobox.min.js"></script>
    <script src="<?= $pathindex ?>assets/js/appear.min.js"></script>
    <script src="<?= $pathindex ?>assets/js/wow.min.js"></script>
    <script src="<?= $pathindex ?>assets/js/meanmenu.js"></script>
    <script src="<?= $pathindex ?>assets/js/main.js"></script>
</body>

</html>