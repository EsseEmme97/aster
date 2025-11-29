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
                <section class="tj-page-header section-gap-x" data-bg-image="<?= $pathindex ?>assets/images/servizi/servizi-header.webp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="tj-page-header-content text-center">
                                    <h1 class="tj-page-title">Servizi</h1>
                                    <div class="tj-page-link">
                                        <span>
                                            <a href="<?= $pathindex ?>">Home</a>
                                        </span>
                                        <span><i class="tji-arrow-right text-blu-secondario"></i></span>
                                        <span>
                                            <span>Servizi</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-header-overlay"></div>
                </section>
                <!-- end: Breadcrumb Section <-->
                <section class="tj-working-process section-gap section-gap-x bg-grigio-chiaro">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="sec-heading-wrap">
                                    <span class="sub-title wow fadeInUp" data-wow-delay=".3s">Proud Projects</span>
                                    <div class="heading-wrap-content">
                                        <div class="sec-heading">
                                            <h2 class="sec-title">Breaking Boundaries, Building <span class="fw-bold">Dreams.</span></h2>
                                        </div>
                                        <div class="btn-wrap wow fadeInUp" data-wow-delay=".6s">
                                            <a class="text-btn" href="<?= $pathindex ?>contatti">
                                                <span class="btn-text"><span>Contattaci</span></span>
                                                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus magni rerum ipsam sit modi? Id in sed laborum eum totam dolorum fugiat officia, eius provident. Provident id tempora dicta culpa.</p>
                        <div class="row row-gap-4">
                            <? $titles = ["Servizio di consulenza prototipi e PCB", "Industrializzazione prodotto", "Produzione di campionature", "Servizio di ricerca componenti", "Servizio di approvigionamento materiali BOM", "Gestione e stocaggio di componenti in c/pieno e c/lavoro", "Montaggio scheda elettronica SMD", "Montaggio scheda elettronica PHT", "Test ottico", "Rework", "Raggi x", "Montaggio apparecchio, collaudo e imballaggio chiavi in mano", "Servizio di riparazione post vendita"] ?>
                            <? foreach ($titles as $title): ?>
                                <div class="col-lg-4 col-md-6">
                                    <div class="service-item style-4 wow fadeInUp" data-wow-delay=".1s">
                                        <div class="service-content">
                                            <span class="title h3"><a href="service-details.html"><?= $title  ?></a></span>
                                            <p class="desc mt-3">Customer Experience Solutions are designed to enhance every touchpoint of your
                                                customer
                                                journey, from first interaction.</p>
                                        </div>
                                    </div>
                                </div>
                            <? endforeach; ?>
                        </div>
                    </div>
                    <div class="bg-shape-1">
                        <img src="<?= $pathindex ?>assets/images/shape/pattern-2.svg" alt="pattern di sfondo">
                    </div>
                    <div class="bg-shape-2">
                        <img src="<?= $pathindex ?>assets/images/shape/pattern-3.svg" alt="pattern di sfondo">
                    </div>
                </section>
                <!-- end: Working process Section -->
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
                                <div class="cta-area">
                                    <div class="cta-content">
                                        <h2 class="title title-anim">Let’s Build Future Together.</h2>
                                        <div class="cta-btn wow fadeInUp" data-wow-delay=".6s">
                                            <a class="text-btn " href="<?= $pathindex ?>contatti">
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