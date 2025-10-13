<?
$lingua = 1;
require_once("inc/global.php");
require_once("inc/header.php");
require_once("inc/mysqli.php");
// $database = new DB();
$titleseo = "aster";
$descriptionseo = "descrizione";
$image = "/assets/img/global/logo.jpg";
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
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- CSS here -->
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
                                    <a class="banner-link" href="about.html">
                                        <span><i class="tji-arrow-right-big"></i></span>
                                    </a>
                                    <div class="banner-desc">Formazione costante, investimenti tecnologici, continuo impegno per migliorare processi e produzione.
                                    </div>
                                </div>
                            </div>
                            <div class="banner-shape">
                                <img src="assets/images/shape/pattern-bg.webp" alt="">
                            </div>
                        </div>
                        <div class="banner-right-box">
                            <div class="banner-img">
                                <img data-speed="0.8" src="assets/images/hero/hero-img.webp" alt="">
                            </div>
                            <div class="box-area">
                                <div class="customers-box">
                                    <div class="customers">
                                        <ul>
                                            <li class="wow fadeInLeft" data-wow-delay=".5s"><img src="assets/images/testimonial/client-1.webp"
                                                    alt=""></li>
                                            <li class="wow fadeInLeft" data-wow-delay=".6s"><img src="assets/images/testimonial/client-2.webp"
                                                    alt=""></li>
                                            <li class="wow fadeInLeft" data-wow-delay=".7s"><img src="assets/images/testimonial/client-3.webp"
                                                    alt=""></li>
                                            <li class="wow fadeInLeft" data-wow-delay=".8s"><span><i class="tji-plus"></i></span></li>
                                        </ul>
                                    </div>
                                    <div class="customers-number wow fadeInUp" data-wow-delay=".5s">30K</div>
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