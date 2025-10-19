<?
$lingua = 1;
require_once("inc/global.php");
require_once("inc/header.php");
require_once("inc/mysqli.php");
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
    <? require_once("inc/tagmanager.php") ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <? require_once("inc/htmlcx/meta-ita.php"); ?>
    <link rel="canonical" href="<?= $pageurlseolan ?>">
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= $image ?>" type="image/x-icon">
    <!-- CSS here -->
    <link rel="stylesheet" href="<?= $pathindex ?>./assets/css/style.css">
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

    <? require_once("inc/tagmanager_no.php") ?>

    <!-- ==================== Start Navbar ==================== -->

    <? require_once("inc/htmlcx/menu-ita.php") ?>

    <!-- ==================== End Navbar ==================== -->
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main id="primary" class="site-main">
                <div class="space-for-header"></div>
                <!-- start: Banner Section -->
                <section class="tj-banner-section section-gap-x">
                    <div class="banner-area">
                        <div class="banner-left-box">
                            <div class="banner-content">
                                <span class="sub-title wow fadeInDown" data-wow-delay=".2s">
                                    Recognized for Excellence
                                </span>
                                <h1 class="banner-title title-anim">Driving Excellence Through Evolution and
                                    <span>Trust.</span>
                                </h1>
                                <div class="banner-desc-area wow fadeInUp" data-wow-delay=".7s">
                                    <a class="banner-link" href="<?= $pathindex ?>about.html">
                                        <span><i class="tji-arrow-right-big"></i></span>
                                    </a>
                                    <div class="banner-desc">Formazione costante, investimenti tecnologici, continuo impegno per migliorare processi e produzione.
                                    </div>
                                </div>
                            </div>
                            <div class="banner-shape">
                                <img src="<?= $pathindex ?>assets/images/shape/pattern-bg.webp" alt="">
                            </div>
                        </div>
                        <div class="banner-right-box">
                            <div class="banner-img">
                                <img data-speed="0.8" src="<?= $pathindex ?>assets/images/hero/hero-img.webp" alt="">
                            </div>
                            <div class="box-area">
                                <div class="customers-box">
                                    <div class="customers">
                                        <ul>
                                            <li class="wow fadeInLeft" data-wow-delay=".5s"><img src="<?= $pathindex ?>assets/images/testimonial/client-1.webp"
                                                    alt=""></li>
                                            <li class="wow fadeInLeft" data-wow-delay=".6s"><img src="<?= $pathindex ?>assets/images/testimonial/client-2.webp"
                                                    alt=""></li>
                                            <li class="wow fadeInLeft" data-wow-delay=".7s"><img src="<?= $pathindex ?>assets/images/testimonial/client-3.webp"=""></li>
                                            <li class="wow fadeInLeft" data-wow-delay=".8s"><span><i class="tji-plus"></i></span></li>
                                        </ul>
                                    </div>
                                    <div class="customers-number wow fadeInUp" data-wow-delay=".5s">35+</div>
                                    <h6 class="customers-text wow fadeInUp" data-wow-delay=".5s">Happy customer we have world-wide.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner-scroll wow fadeInDown" data-wow-delay="2s">
                        <a href="#choose" class="scroll-down">
                            <span><i class="tji-arrow-down-long"></i></span>
                            Scroll Down
                        </a>
                    </div>
                </section>
                <!-- end: Banner Section -->
                <!-- start: About Section -->
                <section class="tj-about-section section-gap">
                    <div class="container">
                        <div class="row row-gap-4">
                            <div class="col-lg-4 col-md-6 order-lg-1 order-3">
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
                            <div class="col-lg-8 col-sm-12 order-lg-2 order-1">
                                <div class="about-content-area-2 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="about-content">
                                        <div class="sec-heading style-2">
                                            <span class="sub-title">Servizi</span>
                                            <h2 class="sec-title title-highlight">Driving into Excellence & Innovation: Your Trusted Partner
                                                for
                                                Sustainable Business Success.
                                            </h2>
                                        </div>
                                        <div class="wow fadeInUp" data-wow-delay=".3s">
                                            <a class="text-btn" href="<?= $pathindex ?>about.html">
                                                <span class="btn-text"><span>Scopri di più</span></span>
                                                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="video-img wow fadeInRight" data-wow-delay=".7s">
                                        <img src="<?= $pathindex ?>assets/images/about/about-3.webp" alt="Image">
                                        <a class="video-btn video-popup" data-autoplay="true" data-vbtype="video" data-maxwidth="1200px"
                                            href="https://www.youtube.com/watch?v=MLpWrANjFbI&amp;ab_channel=eidelchteinadvogados">
                                            <span><i class="tji-play"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 order-lg-3 order-2">
                                <div class="customers-box style-2 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="customers-bg" data-bg-image="assets/images/about/about-4.webp"></div>
                                    <div class="customers">
                                        <ul>
                                            <li class="wow fadeInLeft" data-wow-delay=".3s"><img src="<?= $pathindex ?>assets/images/testimonial/client-1.webp"
                                                    alt=""></li>
                                            <li class="wow fadeInLeft" data-wow-delay=".4s"><img src="<?= $pathindex ?>assets/images/testimonial/client-2.webp"
                                                    alt=""></li>
                                            <li class="wow fadeInLeft" data-wow-delay=".5s"><img src="<?= $pathindex ?>assets/images/testimonial/client-3.webp"
                                                    alt=""></li>
                                            <li class="wow fadeInLeft" data-wow-delay=".6s"><span><i class="tji-plus"></i></span></li>
                                        </ul>
                                    </div>
                                    <h6 class="customers-text wow fadeInLeft" data-wow-delay=".6s">We have 100+ happy customer.</h6>
                                    <div class="star-icon zoomInOut"><img src="<?= $pathindex ?>assets/images/shape/star.svg" alt=""></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 order-lg-4 order-4">
                                <div class="countup-item style-2 wow fadeInUp" data-wow-delay=".5s">
                                    <span class="count-icon"><i class="tji-worldwide"></i></span>
                                    <span class="steps">02.</span>
                                    <div class="count-inner">
                                        <span class="count-text">Reach Worldwide</span>
                                        <div class="inline-content">
                                            <span class="odometer countup-number" data-count="20"></span>
                                            <span class="count-plus">M</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 order-lg-5 order-5">
                                <div class="countup-item style-2 wow fadeInUp" data-wow-delay=".7s">
                                    <span class="count-icon"><i class="tji-growth"></i></span>
                                    <span class="steps">03.</span>
                                    <div class="count-inner">
                                        <span class="count-text">Faster Growth</span>
                                        <div class="inline-content">
                                            <span class="odometer countup-number" data-count="8.5"></span>
                                            <span class="count-plus">X</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end: About Section -->
                <!-- start: Service Section -->
                <section class="tj-service-section overflow-hidden section-gap section-gap-x">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="sec-heading text-center">
                                    <span class="sub-title wow fadeInUp" data-wow-delay=".3s">Our
                                        Solutions</span>
                                    <h2 class="sec-title text-white title-anim">Solutions to Transform Your <span>Business.</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid p-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="service-wrapper wow fadeInUp" data-wow-delay=".4s">
                                    <div class="swiper service-slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="service-item style-1">
                                                    <div class="service-img">
                                                        <img src="<?= $pathindex ?>assets/images/service/service-1.webp" alt="">
                                                    </div>
                                                    <div class="service-icon">
                                                        <i class="tji-service-1"></i>
                                                    </div>
                                                    <div class="service-content">
                                                        <h4 class="title"><a href="<?= $pathindex ?>service-details.html">Business Strategy Development</a></h4>
                                                        <p class="desc">Through a combination of data-driven insights and innovative approaches, we
                                                            work
                                                            closely with you to develop customized.</p>
                                                        <a class="text-btn" href="<?= $pathindex ?>service-details.html">
                                                            <span class="btn-text"><span>Learn More</span></span>
                                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="service-item style-1">
                                                    <div class="service-img">
                                                        <img src="<?= $pathindex ?>assets/images/service/service-5.webp" alt="">
                                                    </div>
                                                    <div class="service-icon">
                                                        <i class="tji-service-2"></i>
                                                    </div>
                                                    <div class="service-content">
                                                        <h4 class="title"><a href="<?= $pathindex ?>service-details.html">Customer Experience Solutions</a></h4>
                                                        <p class="desc">Developing personalized customer journeys to increase satisfaction and
                                                            loyalty
                                                            of our expansion to keep competitive.</p>
                                                        <a class="text-btn" href="<?= $pathindex ?>service-details.html">
                                                            <span class="btn-text"><span>Learn More</span></span>
                                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="service-item style-1">
                                                    <div class="service-img">
                                                        <img src="<?= $pathindex ?>assets/images/service/service-6.webp" alt="">
                                                    </div>
                                                    <div class="service-icon">
                                                        <i class="tji-service-3"></i>
                                                    </div>
                                                    <div class="service-content">
                                                        <h4 class="title"><a href="<?= $pathindex ?>service-details.html">Sustainability and ESG Consulting</a></h4>
                                                        <p class="desc">Provide tailored strategies that not only drive long-term value but also
                                                            build
                                                            trust with stakeholders, investors.</p>
                                                        <a class="text-btn" href="<?= $pathindex ?>service-details.html">
                                                            <span class="btn-text"><span>Learn More</span></span>
                                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="service-item style-1">
                                                    <div class="service-img">
                                                        <img src="<?= $pathindex ?>assets/images/service/service-7.webp" alt="">
                                                    </div>
                                                    <div class="service-icon">
                                                        <i class="tji-service-4"></i>
                                                    </div>
                                                    <div class="service-content">
                                                        <h4 class="title"><a href="<?= $pathindex ?>service-details.html">Training and Development Programs</a></h4>
                                                        <p class="desc">Training and Development Programs are designed to empower employees with the
                                                            skills, knowledge, and tools they need.</p>
                                                        <a class="text-btn" href="<?= $pathindex ?>service-details.html">
                                                            <span class="btn-text"><span>Learn More</span></span>
                                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-pagination-area white-pagination"></div>
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
                <!-- end: Service Section -->
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
                                        <span class="sub-title wow fadeInUp" data-wow-delay=".3s">RICERCA & SVILUPPO</span>
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
                                    <a class="text-btn" href="<?= $pathindex ?>about.html">
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
                <!-- start: Service Section -->
                <section class="tj-service-section service-3 section-gap">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-heading style-3 text-center">
                                    <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i>Our Solutions</span>
                                    <h2 class="sec-title title-anim">Tailor Business Solutions for Corporates.</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="service-wrapper">
                                    <div class="service-item style-3 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="service-content-wrap">
                                            <div class="service-title">
                                                <div class="service-icon">
                                                    <i class="tji-service-1"></i>
                                                </div>
                                                <h4 class="title"><a href="<?= $pathindex ?>service-details.html">Business Strategy Development</a></h4>
                                            </div>
                                            <div class="service-content">
                                                <p class="desc">Through a combination of data-driven insights and innovative approaches, we work
                                                    closely with you to develop customized.</p>
                                            </div>
                                        </div>
                                        <div class="service-reveal-bg" data-bg-image="assets/images/service/service-2.webp"></div>
                                    </div>
                                    <div class="service-item style-3 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="service-content-wrap">
                                            <div class="service-title">
                                                <div class="service-icon">
                                                    <i class="tji-service-2"></i>
                                                </div>
                                                <h4 class="title"><a href="<?= $pathindex ?>service-details.html">Customer Experience Solutions</a></h4>
                                            </div>
                                            <div class="service-content">
                                                <p class="desc">Customer Experience Solutions are designed to enhance every touchpoint of your
                                                    customer journey, from first interaction.</p>
                                            </div>
                                        </div>
                                        <div class="service-reveal-bg" data-bg-image="assets/images/service/service-3.webp"></div>
                                    </div>
                                    <div class="service-item style-3 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="service-content-wrap">
                                            <div class="service-title">
                                                <div class="service-icon">
                                                    <i class="tji-service-3"></i>
                                                </div>
                                                <h4 class="title"><a href="<?= $pathindex ?>service-details.html">Sustainability and ESG Consulting</a></h4>
                                            </div>
                                            <div class="service-content">
                                                <p class="desc">Provide tailored strategies that not only drive long-term value but also build
                                                    trust
                                                    with stakeholders, investors.</p>
                                            </div>
                                        </div>
                                        <div class="service-reveal-bg" data-bg-image="assets/images/service/service-4.webp"></div>
                                    </div>
                                    <div class="service-item style-3 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="service-content-wrap">
                                            <div class="service-title">
                                                <div class="service-icon">
                                                    <i class="tji-service-4"></i>
                                                </div>
                                                <h4 class="title"><a href="<?= $pathindex ?>service-details.html">Training and Development Programs</a></h4>
                                            </div>
                                            <div class="service-content">
                                                <p class="desc">Training and Development Programs are designed to empower employees with the
                                                    skills,
                                                    knowledge, and tools they need.</p>
                                            </div>
                                        </div>
                                        <div class="service-reveal-bg" data-bg-image="assets/images/service/service-6.webp"></div>
                                    </div>
                                </div>
                                <div class="service-btn-area text-center wow fadeInUp" data-wow-delay=".3s">
                                    <a class="tj-primary-btn" href="<?= $pathindex ?>service.html">
                                        <span class="btn-text"><span>Scopri di più</span></span>
                                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end: Service Section -->
                <!-- start: Marquee Section -->
                <section class="tj-marquee-section section-gap-x">
                    <div class="marquee-wrapper">
                        <div class="swiper marquee-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide marquee-item">
                                    <h4 class="marquee-text">Aster</h4>
                                    <div class="marquee-img">
                                        <img src="<?= $pathindex ?>assets/images/marquee/marquee-1.webp" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide marquee-item">
                                    <h4 class="marquee-text">Elettronica</h4>
                                    <div class="marquee-img">
                                        <img src="<?= $pathindex ?>assets/images/marquee/marquee-2.webp" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end: Marquee Section -->
                <!-- start: About Section -->
                <section class="tj-about-section-2 section-gap section-gap-x">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="about-content-area style-3 wow fadeInLeft" data-wow-delay=".3s">
                                    <div class="sec-heading style-4">
                                        <div class="subtitle-text">
                                            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i>Lavora con noi</span>
                                        </div>
                                        <h2 class="sec-title title-highlight">Scopri le <span class="text-blu-primario">posizioni aperte</span>, oppure invia la tua candidatura spontanea
                                        </h2>
                                    </div>
                                    <div class="about-bottom-area">
                                        <div class="customers-box style-3">
                                            <div class="customers">
                                                <ul>
                                                    <li class="wow fadeInLeft" data-wow-delay=".2s"><img
                                                            src="<?= $pathindex ?>assets/images/testimonial/client-1.webp" alt=""></li>
                                                    <li class="wow fadeInLeft" data-wow-delay=".3s"><img
                                                            src="<?= $pathindex ?>assets/images/testimonial/client-2.webp" alt=""></li>
                                                    <li class="wow fadeInLeft" data-wow-delay=".4s"><img
                                                            src="<?= $pathindex ?>assets/images/testimonial/client-3.webp" alt=""></li>
                                                    <li class="wow fadeInLeft" data-wow-delay=".5s"><span><i class="tji-plus"></i></span></li>
                                                </ul>
                                            </div>
                                            <h6 class="customers-text wow fadeInLeft" data-wow-delay=".6s">We have <span>100+</span> happy
                                                customer.
                                            </h6>
                                        </div>
                                        <div class="about-btn-area-2 wow fadeInUp" data-wow-delay="1s">
                                            <a class="tj-primary-btn" href="<?= $pathindex ?>about.html">
                                                <span class="btn-text">Scopri di più</span>
                                                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                            </a>
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
                <!-- end: About Section -->

                <!-- start: About Section -->
                <section class="tj-about-section section-gap">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 order-lg-1 order-2">
                                <div class="about-img-area wow fadeInLeft" data-wow-delay=".2s">
                                    <div class="about-img overflow-hidden">
                                        <img data-speed="0.8" src="assets/images/about/about-1.webp" alt="">
                                    </div>
                                    <div class="box-area">
                                        <div class="experience-box wow fadeInUp" data-wow-delay=".3s">
                                            <span class="sub-title">Experiences</span>
                                            <div class="customers-number">13+</div>
                                            <h6 class="customers-text">Decades of Experience, Endless Innovation</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 order-lg-2 order-1">
                                <div class="about-content-area style-1 wow fadeInLeft" data-wow-delay=".2s">
                                    <div class="sec-heading">
                                        <span class="sub-title wow fadeInUp bg-carta-da-zucchero" data-wow-delay=".3s"><i class="tji-box"></i>Get to Know
                                            Us</span>
                                        <h2 class="sec-title title-anim">Empowering Businesses with Innovation,
                                            Expertise, and for <span>Success.</span>
                                        </h2>
                                    </div>
                                    <div class="wow fadeInUp" data-wow-delay=".5s">
                                        <a class="text-btn" href="about.html">
                                            <span class="btn-text"><span>Learn More</span></span>
                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="about-bottom-area">
                                    <div class="client-review-cont wow fadeInUp" data-wow-delay=".7s">
                                        <p class="desc">We believe in building lasting relationships with our clients through trust,
                                            innovation,
                                            and
                                            exceptional service.</p>
                                        <div class="client-info-area">
                                            <div class="client-info">
                                                <h6 class="title">Esther Howard</h6>
                                                <span class="designation">Co.Founder</span>
                                            </div>
                                            <span class="quote-icon"><i class="tji-quote"></i></span>
                                        </div>
                                    </div>
                                    <div class="video-img  wow fadeInUp" data-wow-delay=".9s">
                                        <img src="assets/images/about/about-2.webp" alt="">
                                        <a class="video-btn video-popup" data-autoplay="true" data-vbtype="video" data-maxwidth="1200px"
                                            href="https://www.youtube.com/watch?v=MLpWrANjFbI&amp;ab_channel=eidelchteinadvogados">
                                            <span><i class="tji-play"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end: About Section -->

                <!-- start: Cta Section -->
                <section class="tj-cta-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="cta-area">
                                    <div class="cta-content">
                                        <h2 class="title title-anim">Let’s Build Future Together.</h2>
                                        <div class="cta-btn wow fadeInUp" data-wow-delay=".6s">
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
            <? require_once("inc/htmlcx/footer-ita.php") ?>
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