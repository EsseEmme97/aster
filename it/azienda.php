<?
$lingua = 1;
require_once("../inc/global.php");
require_once("../inc/header.php");
require_once("../inc/mysqli.php");
// $database = new DB();
$titleseo = "Elettronica a Vicenza - Su di noi | Aster Elettronica";
$descriptionseo = "scopri Aster Elettronica: assemblaggio componenti
elettronici a Vicenza, vendita componenti elettronici personalizzati e di
qualità, ad uso industriale.";
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
                <section class="tj-page-header section-gap-x" data-bg-image="<?= $pathindex ?>assets/images/su-di-noi/su-di-noi-header.webp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="tj-page-header-content text-center">
                                    <h1 class="tj-page-title">Su di noi</h1>
                                    <div class="tj-page-link">
                                        <span>
                                            <a href="<?= $pathindex ?>">Home</a>
                                        </span>
                                        <span><i class="tji-arrow-right text-blu-secondario"></i></span>
                                        <span>
                                            <span>Su di noi</span>
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
                        <div>
                            <h2 class="fw-bold mb-5">Elettronica su misura, dal 1990</h2>
                            <p>Fondata oltre 35 anni fa, <a href="<?= $pathindex ?>" class="text-link">Aster Elettronica</a> è cresciuta fino a diventare una
                                realtà consolidata nel settore elettronico vicentino: un punto di riferimento per
                                chi cerca qualità, precisione e affidabilità nella fornitura di prodotti elettronici.
                                Da azienda specializzata nell’assemblaggio di schede e apparecchi
                                elettronici conto terzi, negli anni Aster Elettronica ha ampliato competenze,
                                strumenti e processi, fino a costituire un team di oltre 50 dipendenti dedicati
                                all’eccellenza.</p>
                            <p>Il rapporto con il cliente è al centro del nostro modo di operare: crediamo nel
                                confronto costante e nella costruzione di un percorso comune. Tale approccio
                                ci consente di garantire <strong>standard elevati di qualità, precisione e
                                    innovazione nei nostri prodotti elettronici,</strong> indipendentemente dalla
                                complessità dei progetti affidati.</p>
                            <p>Oggi siamo un partner strategico per aziende che necessitano di <a href="<?= $pathindex ?>servizi" class="text-link">soluzioni su
                                    misura</a> , capaci di rispondere alle esigenze dell’elettronica industriale e
                                professionale. Le basi del nostro sviluppo sono radicate nella nostra mission:
                                 innovazione, qualità e supporto costante sono presenti in ogni fase
                                dell’industrializzazione del prodotto.</p>
                            <p class="mb-5">
                                La nostra crescita non si ferma in azienda: sosteniamo attivamente attività
                                sportive e realtà locali, convinti che il valore di un’impresa derivi anche dal
                                suo contributo alla comunità.
                            </p>
                            <div class="row row-gap-4">
                                <div class="col-lg-4 col-md-6 order-lg-1 order-3">
                                    <div class="countup-item style-2 wow fadeInUp h-100 justify-content-end align-items-start" data-wow-delay=".1s" data-bg-image="<?= $pathindex ?>assets/images/su-di-noi/su-di-noi-intro-1.webp">
                                    </div>
                                </div>
                                <div class="col-lg-8 col-sm-12 order-lg-2 order-1 min-h-lg-260">
                                    <div class="about-content-area-2 wow fadeInUp " data-wow-delay=".3s">
                                        <div class="about-content mx-auto">
                                            <div class="sec-heading style-2">
                                                <span class="sub-title">Servizi</span>
                                                <h2 class="sec-title title-highlight">Soluzioni elettroniche complete, per ogni esigenza
                                                </h2>
                                            </div>
                                            <div class="wow fadeInUp" data-wow-delay=".3s">
                                                <a class="text-btn" href="<?= $pathindex ?>contatti">
                                                    <span class="btn-text"><span>Contattaci</span></span>
                                                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="video-img wow fadeInRight" data-wow-delay=".7s">
                                            <img src="<?= $pathindex ?>assets/images/home/home-intro-1.webp" alt="immagine servizio">
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
                                        <img data-speed=".8" src="<?= $pathindex ?>assets/images/su-di-noi/su-di-noi-mission-vision.webp" alt="immagine servizi">
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
                                        <span class="sub-title wow fadeInUp" data-wow-delay=".3s">QUALITÀ GARANTITA</span>
                                        <h2 class="sec-title">Montaggio elettronico per produzioni
                                            <span>su misura</span>
                                        </h2>
                                    </div>
                                </div>
                                <div class="about-bottom-area">
                                    <div class="mission-vision-box wow fadeInLeft" data-wow-delay=".5s">
                                        <span class="title h3">La nostra Mission</span>
                                        <p class="desc">Assemblare componenti elettronici con precisione ed affidabilità, per prodotti
                                            di alta qualità.
                                        </p>
                                        <ul class="list-items">
                                            <li><img style="width: 16px;" src="<?= $pathindex ?>assets/images/settori/aster-punto-elenco.svg" alt="icona aster">Assemblaggi elettronici</li>
                                            <li><img style="width: 16px;" src="<?= $pathindex ?>assets/images/settori/aster-punto-elenco.svg" alt="icona aster">Supporto tecnico</li>
                                            <li><img style="width: 16px;" src="<?= $pathindex ?>assets/images/settori/aster-punto-elenco.svg" alt="icona aster">Qualità</li>
                                        </ul>
                                    </div>
                                    <div class="mission-vision-box wow fadeInRight" data-wow-delay=".5s">
                                        <span class="title h3">La nostra Vision</span>
                                        <p class="desc">Innovare costantemente e personalizzare ogni prodotto elettronico, per offrire
                                            sempre il meglio.
                                        </p>
                                        <ul class="list-items">
                                            <li><img style="width: 16px;" src="<?= $pathindex ?>assets/images/settori/aster-punto-elenco.svg" alt="icona aster">Innovazione</li>
                                            <li><img style="width: 16px;" src="<?= $pathindex ?>assets/images/settori/aster-punto-elenco.svg" alt="icona aster"></i>Flessibilità</li>
                                            <li><img style="width: 16px;" src="<?= $pathindex ?>assets/images/settori/aster-punto-elenco.svg" alt="icona aster">Competenza e Formazione</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="wow fadeInUp my-5 mb-lg-0" data-wow-delay=".3s">
                                    <a class="text-btn" href="<?= $pathindex ?>contatti">
                                        <span class="btn-text"><span>Scopri di più</span></span>
                                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-shape-1">
                        <img src="<?= $pathindex ?>assets/images/shape/pattern-2.svg" alt="immagine di sfondo">
                    </div>
                    <div class="bg-shape-2">
                        <img src="<?= $pathindex ?>assets/images/shape/pattern-3.svg" alt="immagine di sfondo">
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

</html>