<?
$lingua = 1;
require_once("../inc/global.php");
require_once("../inc/header.php");
require_once("../inc/mysqli.php");
// $database = new DB();
$titleseo = "aster";
$descriptionseo = "descrizione";
$image = $pathindex . "assets\images\favicon\Aster_Elettronica-Favicon.png";
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
                <section class="tj-page-header section-gap-x" data-bg-image="<?= $pathindex ?>assets/images/bg/pheader-bg.webp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="tj-page-header-content text-center">
                                    <h1 class="tj-page-title">About Us</h1>
                                    <div class="tj-page-link">
                                        <span><i class="tji-home"></i></span>
                                        <span>
                                            <a href="index.html">Home</a>
                                        </span>
                                        <span><i class="tji-arrow-right"></i></span>
                                        <span>
                                            <span>About Us</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-header-overlay" data-bg-image="assets/images/shape/pheader-overlay.webp"></div>
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
                            <div class="col-lg-6 col-md-6 order-lg-1 order-3">
                                <div class="countup-item style-2 wow fadeInUp" data-wow-delay=".1s">
                                    <span class="count-icon"><i class="tji-complete"></i></span>
                                    <span class="steps">01.</span>
                                    <div class="count-inner">
                                        <span class="count-text">Projects Completed.</span>
                                        <div class="inline-content">
                                            <span class="odometer countup-number" data-count="93"></span>
                                            <span class="count-plus">%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 order-lg-2 order-1">
                                <div class="about-content-area-2 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="about-content ms-0">
                                        <div class="sec-heading style-2">
                                            <span class="sub-title">Get to Know Us</span>
                                            <h2 class="sec-title title-highlight">Driving into Excellence & Innovation: Your Trusted Partner
                                                for
                                                Sustainable Business Success.
                                            </h2>
                                        </div>
                                        <div class="wow fadeInUp" data-wow-delay=".3s">
                                            <a class="text-btn" href="about.html">
                                                <span class="btn-text"><span>Scopri di più</span></span>
                                                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                            </a>
                                        </div>
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
                                        <img data-speed=".8" src="<?= $pathindex ?>assets/images/about/about-5.webp" alt="">
                                    </div>
                                    <div class="box-area style-2">
                                        <div class="progress-box wow fadeInUp" data-wow-delay=".3s">
                                            <h4 class="title">Business Progress</h4>
                                            <ul class="tj-progress-list">
                                                <li>
                                                    <h6 class="tj-progress-title">Revenue</h6>
                                                    <div class="tj-progress">
                                                        <span class="tj-progress-percent">82%</span>
                                                        <div class="tj-progress-bar" data-percent="82">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <h6 class="tj-progress-title">Satisfaction</h6>
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
                                        <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i>Get to Know
                                            Us</span>
                                        <h2 class="sec-title title-anim">Driving Innovation and Excellence for Sustainable Corporate Success
                                            <span>Worldwide.</span>
                                        </h2>
                                    </div>
                                </div>
                                <div class="about-bottom-area">
                                    <div class="mission-vision-box wow fadeInLeft" data-wow-delay=".5s">
                                        <h4 class="title">Our Mission</h4>
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
                                        <h4 class="title">Our Vision</h4>
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
                                <div class="wow fadeInUp mt-5" data-wow-delay=".3s">
                                    <a class="text-btn" href="about.html">
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
                <section class="tj-team-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="sec-heading text-center">
                                    <span class="sub-title wow fadeInUp" data-wow-delay=".1s"><i class="tji-box"></i>Meet Our Team</span>
                                    <h2 class="sec-title title-anim">People Behind <span>Bexon.</span></h2>
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-lg-5 row-cols-2">
                            <? for ($i = 0; $i < 10; $i++): ?>
                                <div class="col col-sm-6">
                                    <div class="team-item wow fadeInUp" data-wow-delay=".1s">
                                        <div class="team-img">
                                            <div class="team-img-inner">
                                                <img src="<?= $pathindex ?>assets/images/team/team-1.webp" alt="">
                                            </div>
                                            <div class="social-links">
                                                <ul>
                                                    <li><a href="https://www.facebook.com/" target="_blank"><i
                                                                class="fa-brands fa-facebook-f"></i></a>
                                                    </li>
                                                    <li><a href="https://www.instagram.com/" target="_blank"><i
                                                                class="fa-brands fa-instagram"></i></a>
                                                    </li>
                                                    <li><a href="https://x.com/" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                                                    <li><a href="https://www.linkedin.com/" target="_blank"><i
                                                                class="fa-brands fa-linkedin-in"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="title"><a href="team-details.html">Eade Marren</a></h4>
                                            <span class="designation">Chief Executive</span>
                                            <a class="mail-at" href="mailto:info@bexon.com"><i class="tji-at"></i></a>
                                        </div>
                                    </div>
                                </div>
                            <? endfor; ?>
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
                                    <h6 class="h6-client-title
              ">we’re proud to partner with best-in-class clients</h6>

                                </div>
                            </div>
                            <div class="col-12 d-flex gap-2 justify-content-around">
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
                <section class="h6-project section-gap section-gap-x">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="h6-project-inner wow fadeInUp" data-wow-delay="0.6s">
                                    <div class=" project-item h6-project-item ">
                                        <div class="project-item-inner h6-project-item-inner"
                                            data-bg-image="./assets/images/project/h6-project-1.webp">
                                            
                                        </div>
                                    </div>
                                    <div class=" project-item h6-project-item ">
                                        <div class="project-item-inner h6-project-item-inner"
                                            data-bg-image="./assets/images/project/h6-project-2.webp">
                                            <div class="project-content">
                                                <span class="categories"><a href="portfolio-details.html">Empower</a></span>
                                                <div class="project-text">
                                                    <h3 class="title"><a href="portfolio-details.html">Digital Marketing Campaign</a></h3>
                                                    <a class="project-btn" href="portfolio-details.html">
                                                        <i class="tji-arrow-right-long"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" project-item h6-project-item active">
                                        <div class="project-item-inner h6-project-item-inner"
                                            data-bg-image="./assets/images/project/h6-project-3.webp">
                                            <div class="project-content">
                                                <span class="categories"><a href="portfolio-details.html">Support</a></span>
                                                <div class="project-text">
                                                    <h3 class="title"><a href="portfolio-details.html">Interactive Learning Platform</a></h3>
                                                    <a class="project-btn" href="portfolio-details.html">
                                                        <i class="tji-arrow-right-long"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" project-item h6-project-item ">
                                        <div class="project-item-inner h6-project-item-inner"
                                            data-bg-image="./assets/images/project/h6-project-4.webp">
                                            <div class="project-content">
                                                <span class="categories"><a href="portfolio-details.html">Business</a></span>
                                                <div class="project-text">
                                                    <h3 class="title"><a href="portfolio-details.html">Environmental Impact Dashboard</a></h3>
                                                    <a class="project-btn" href="portfolio-details.html">
                                                        <i class="tji-arrow-right-long"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" project-item h6-project-item ">
                                        <div class="project-item-inner h6-project-item-inner"
                                            data-bg-image="./assets/images/project/h6-project-5.webp">
                                            <div class="project-content">
                                                <span class="categories"><a href="portfolio-details.html">Connect</a></span>
                                                <div class="project-text">
                                                    <h3 class="title"><a href="portfolio-details.html">Event Management Platform</a></h3>
                                                    <a class="project-btn" href="portfolio-details.html">
                                                        <i class="tji-arrow-right-long"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" project-item h6-project-item ">
                                        <div class="project-item-inner h6-project-item-inner"
                                            data-bg-image="./assets/images/project/h6-project-6.webp">
                                            <div class="project-content">
                                                <span class="categories"><a href="portfolio-details.html">Empower</a></span>
                                                <div class="project-text">
                                                    <h3 class="title"><a href="portfolio-details.html">Digital Marketing Campaign</a></h3>
                                                    <a class="project-btn" href="portfolio-details.html">
                                                        <i class="tji-arrow-right-long"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                <!-- end: Project Section -->
                <!-- start: Cta Section -->
                <section class="tj-cta-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="cta-area">
                                    <div class="cta-content">
                                        <h2 class="title title-anim">Let’s Build Future Together.</h2>
                                        <div class="cta-btn wow fadeInUp mt-60" data-wow-delay=".6s">
                                            <a class="tj-primary-btn " href="contact.html">
                                                <span class="btn-text"><span>Contattaci</span></span>
                                                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="cta-img">
                                        <img src="assets/images/cta/cta-bg.webp" alt="">
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