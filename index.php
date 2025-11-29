<?
$lingua = 1;
require_once("inc/global.php");
require_once("inc/header.php");
require_once("inc/mysqli.php");
// $database = new DB();
$titleseo = "Produzione schede elettroniche | Aster Elettronica";
$descriptionseo = "Aster Elettronica, produttori di schede elettroniche di
qualità. Siamo specializzati in produzione di schede elettroniche e
componenti elettronici per l’industria.";
$image = $pathindex . "assets/images/Aster_Elettronica-Favicon.png";
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
                                    BENVENUTI IN ASTER ELETTRONICA
                                </span>
                                <h1 class="banner-title title-anim">Portiamo l’Eccellenza
                                    nella Produzione di
                                    <span>Schede Elettroniche.</span>
                                </h1>
                                <div class="banner-desc-area wow fadeInUp" data-wow-delay=".7s">
                                    <a class="banner-link" href="<?= $pathindex ?>azienda">
                                        <span><i class="tji-arrow-right-big"></i></span>
                                    </a>
                                    <div class="banner-desc">Formazione costante, investimenti tecnologici, continuo impegno per migliorare processi e produzione.
                                    </div>
                                </div>
                            </div>
                            <div class="banner-shape">
                                <img src="<?= $pathindex ?>assets/images/shape/pattern-bg.webp" alt="pattern di sfondo">
                            </div>
                        </div>
                        <div class="banner-right-box">
                            <div class="banner-img">
                                <img data-speed="0.8" src="<?= $pathindex ?>assets/images/home/home-hero.webp" alt="immagine banner">
                            </div>
                            <div class="box-area">
                                <div class="customers-box">
                                    <div class="customers">
                                        <ul>
                                            <li class="wow fadeInLeft" data-wow-delay=".5s"><img src="<?= $pathindex ?>assets/images/home/aster-avatar-carriera-1.webp"
                                                    alt="avatar dipendente"></li>
                                            <li class="wow fadeInLeft" data-wow-delay=".6s"><img src="<?= $pathindex ?>assets/images/home/aster-avatar-carriera-2.webp"
                                                    alt="avatar dipendente"></li>
                                            <li class="wow fadeInLeft" data-wow-delay=".7s"><img src="<?= $pathindex ?>assets/images/home/aster-avatar-carriera-3.webp" alt="avatar dipendente"></li>
                                            <li class="wow fadeInLeft" data-wow-delay=".8s"><span><i class="tji-plus"></i></span></li>
                                        </ul>
                                    </div>
                                    <div class="customers-number wow fadeInUp" data-wow-delay=".5s">35+</div>
                                    <span class="customers-text wow fadeInUp" data-wow-delay=".5s">Anni di esperienza al vostro servizio.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner-scroll wow fadeInDown" data-wow-delay="2s">
                        <a href="#choose" class="scroll-down">
                            <span><i class="tji-arrow-down-long"></i></span>
                            Scorri la pagina
                        </a>
                    </div>
                </section>
                <!-- end: Banner Section -->
                <!-- start: About Section -->
                <section class="tj-about-section section-gap">
                    <div class="container">
                        <div class="row row-gap-4">
                            <div class="col-lg-4 col-md-6 order-lg-1 order-3">
                                <div class="countup-item style-2 wow fadeInUp border-primary-color" data-wow-delay=".1s">
                                    <span class="count-icon"><img src="<?= $pathindex ?>assets/images/home/home-intro.svg" alt="icona aster"></span>
                                    <span class="steps">01.</span>
                                    <div class="count-inner">
                                        <div>
                                            <span class="h3 fw-bold">Dalla consulenza all’industrializzazione del prodotto</span>
                                        </div>
                                        <span class="count-text mt-2">Accompagniamo il cliente in tutte le fasi: definizione delle distinte base, scelta
                                            dei componenti, <a class="text-link" href="<?= $pathindex ?>produzione-e-assemblaggio">produzione e assemblaggio</a> dei prodotti elettronici,
                                            consulenza post vendita e ottimizzazione dei tempi.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-sm-12 order-lg-2 order-1">
                                <div class="about-content-area-2 wow fadeInUp " data-wow-delay=".3s">
                                    <div class="about-content">
                                        <div class="sec-heading style-2">
                                            <span class="sub-title">Servizi</span>
                                            <h2 class="sec-title title-highlight">Produttori di schede elettroniche e assemblaggio di prodotti elettronici
                                                per la tua azienda, dal 1990
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
                            <div class="col-lg-4 col-md-6 order-lg-3 order-2">
                                <div class="customers-box style-2 wow fadeInUp border-primary-color" data-wow-delay=".3s">
                                    <div class="customers-bg" data-bg-image="assets/images/home/home-intro-1.webp"></div>
                                    <span class="customers-text wow fadeInLeft" data-wow-delay=".6s">Dal 1996, prodotti “chiavi in mano”</span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 order-lg-4 order-4">
                                <div class="countup-item style-2 wow fadeInUp border-primary-color" data-wow-delay=".5s">
                                    <span class="count-icon"><img src="<?= $pathindex ?>assets/images/home/home-intro.svg" alt="icona aster"></span>
                                    <span class="steps">02.</span>
                                    <div class="count-inner">
                                        <div>
                                            <span class="h3 fw-bold">Prototipizzazione <br></span>
                                        </div>
                                        <span class="count-text mt-2">Trasformiamo una tua idea o progetto in una campionatura pronta alla
                                            produzione, garantendo test, ottimizzazioni e massima qualità.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 order-lg-5 order-5">
                                <div class="countup-item style-2 wow fadeInUp border-primary-color" data-wow-delay=".7s">
                                    <span class="count-icon"><img src="<?= $pathindex ?>assets/images/home/home-intro.svg" alt="icona aster"></span>
                                    <span class="steps">03.</span>
                                    <div class="count-inner">
                                        <div>
                                            <span class="h3 fw-bold">Assemblaggio di serie e di piccoli lotti</span>
                                        </div>
                                        <span class="count-text mt-2">Linee automatizzate SMD e PTH, controlli ottici e reparti specializzati
                                            garantiscono produzioni precise, affidabili e conformi.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end: About Section -->
                <!-- start: Service Section -->
                <?
                $settori = [
                    [
                        "titolo" => "Edilizia civile/industriale",
                        "icona" => "edilizia-civile.svg",
                        "id" => "edilizia-civile-industriale"
                    ],
                    [
                        "titolo" => "Prestazioni sportive",
                        "icona" => "prestazioni-sportive.svg",
                        "id" => "prestazioni-sportive"
                    ],
                    [
                        "titolo" => "Lighting",
                        "icona" => "illuminazione.svg",
                        "id" => "lighting"
                    ],
                    [
                        "titolo" => "Meteo & traffico",
                        "icona" => "meteo-traffico.svg",
                        "id" => "meteo-traffico"
                    ],
                    [
                        "titolo" => "Elettromedicale",
                        "icona" => "elettromedicale.svg",
                        "id" => "elettromedicale"
                    ],
                    [
                        "titolo" => "Soluzioni audio professionali",
                        "icona" => "broadcast.svg",
                        "id" => "audio-professionale"
                    ],
                    [
                        "titolo" => "Sistemi di controllo motore",
                        "icona" => "controllo-motore.svg",
                        "id" => "controllo-motore"
                    ],
                    [
                        "titolo" => "Sistemi di controllo industriale",
                        "icona" => "controllo-industriale.svg",
                        "id" => "controllo-industriale"
                    ],
                    [
                        "titolo" => "Vending machines",
                        "icona" => "vending-machines.svg",
                        "id" => "vending-machines"
                    ],
                    [
                        "titolo" => "Sistemi destinati alla ricerca scientifica",
                        "icona" => "ricerca-scientifica.svg",
                        "id" => "ricerca-scientifica"
                    ],
                    [
                        "titolo" => "Cantieri edili e navali",
                        "icona" => "cantieri-edili-navali.svg",
                        "id" => "cantieri-edili-navali"
                    ],
                    [
                        "titolo" => "Sistemi APR di pilotaggio remoto",
                        "icona" => "pilotaggio-remoto.svg",
                        "id" => "sistemi-apr"
                    ],
                ];

                $basePath = "assets/images/icon set/settori/"
                ?>
                <section class="tj-service-section overflow-hidden section-gap section-gap-x">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="sec-heading text-center">
                                    <span class="sub-title wow fadeInUp" data-wow-delay=".3s">LE NOSTRE PRODUZIONI</span>
                                    <h2 class="sec-title text-white title-anim">Dispositivi elettronici avanzati
                                        per aziende orientate <span>alla qualità.</span></h2>
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
                                            <? foreach ($settori as $index => $settore): ?>
                                                <? $settore_corretto = $index == 0 || $index == 1 ? "settori" : $settori[$index - 2]["id"] ?>
                                                <div class="swiper-slide">
                                                    <div class="service-item style-1">
                                                        <div class="service-icon">
                                                            <img src="<?= $pathindex . $basePath . $settore["icona"] ?>" alt="icona settore">
                                                        </div>
                                                        <div class="service-content">
                                                            <a class="title text-white" href="<?= $pathindex . "settori#" . $settore_corretto ?>"><?= $settore["titolo"] ?></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            <? endforeach; ?>
                                        </div>
                                        <div class="swiper-pagination-area white-pagination"></div>
                                    </div>
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
                <!-- end: Service Section -->

                <!-- start: About Section -->
                <section class="tj-about-section-2 mt-15px section-gap section-gap-x">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 order-lg-1 order-2">
                                <div class="about-img-area style-2 wow fadeInLeft" data-wow-delay=".3s">
                                    <div class="about-img overflow-hidden">
                                        <img data-speed=".8" src="<?= $pathindex ?>assets/images/home/home-ricerca-sviluppo.webp" alt="immagine stock">
                                    </div>
                                    <div class="box-area style-2">
                                        <div class="progress-box wow fadeInUp" data-wow-delay=".3s">
                                            <span class="title h3">I nostri risultati</span>
                                            <ul class="tj-progress-list">
                                                <li>
                                                    <span class="tj-progress-title">Qualità</span>
                                                    <div class="tj-progress">
                                                        <span class="tj-progress-percent">82%</span>
                                                        <div class="tj-progress-bar" data-percent="82">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="tj-progress-title">Affidabilità</span>
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
                                        <h2 class="sec-title title-anim">Tecnologia innovativa, metodo
                                            e formazione per prodotti elettronici
                                            <span>impeccabili.</span>
                                        </h2>
                                    </div>
                                </div>
                                <div class="about-bottom-area">
                                    <div class="mission-vision-box wow fadeInLeft" data-wow-delay=".5s">
                                        <span class="title h3">Ricerca dettagliata</span>
                                        <p class="desc mt-3">Grazie al continuo scambio di informazioni con il cliente, individuiamo le
                                            soluzioni tecniche più adatte, selezioniamo i migliori componenti elettronici e
                                            definiamo processi sicuri e ripetibili.
                                        </p>
                                    </div>
                                    <div class="mission-vision-box wow fadeInRight" data-wow-delay=".5s">
                                        <span class="title h3">Sviluppo certosino</span>
                                        <p class="desc mt-3">Ogni fase produttiva viene analizzata, controllata e ottimizzata per garantire
                                            efficienza, qualità e continuità. Il nostro è un approccio certosino, che ci
                                            distingue tra i principali produttori di schede elettroniche in Veneto.
                                        </p>
                                    </div>
                                </div>
                                <div class="wow fadeInUp my-5 mb-lg-0" data-wow-delay=".3s">
                                    <a class="text-btn" href="<?= $pathindex ?>ricerca-e-sviluppo">
                                        <span class="btn-text"><span>Scopri di più</span></span>
                                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                    </a>
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
                <!-- end: About Section -->
                <!-- start: Service Section -->
                <section class="tj-service-section service-3 section-gap">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-heading style-3 text-center">
                                    <span class="sub-title wow fadeInUp p-1" data-wow-delay=".3s">ASTER ELETTRONICA</span>
                                    <h2 class="sec-title title-anim">Precisione elettronica, senza compromessi.</h2>
                                </div>
                            </div>
                            <p class="mb-5">Dal oltre 35 anni, Aster Elettronica affianca aziende di numerosi <a href="<?= $pathindex ?>settori" class="text-link">settori</a> nella
                                produzione di schede elettroniche e apparecchiature elettroniche assemblate,
                                su progetto del cliente. Siamo un partner strategico, affidabile e aggiornato:
                                dall’approvvigionamento di componenti all’assemblaggio di schede e prodotti
                                elettronici, i nostri <a href="<?= $pathindex ?>" class="text-link">servizi</a> includono test, collaudi e prototipi, fino
                                all’industrializzazione. Per la tua azienda, offriamo massima efficienza e
                                qualità nei processi produttivi.</p>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="service-wrapper">
                                    <div class="service-item style-3 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="service-content-wrap">
                                            <div class="service-title">
                                                <div class="service-icon">
                                                    <img src="<?= $pathindex ?>assets/images/home/produzione-assemblaggio-fase-01.svg" alt="immagine aster">
                                                </div>
                                                <span class="title h3">Produzione elettronica conto terzi</span>
                                            </div>
                                            <div class="service-content">
                                                <p class="desc">Realizziamo, su progetto del cliente, schede elettroniche, apparecchi e
                                                    sistemi elettronici per ogni esigenza: dall’assemblaggio elettronico, alla
                                                    prototipazione e produzione in serie.</p>
                                            </div>
                                        </div>
                                        <div class="service-reveal-bg" data-bg-image="assets/images/service/service-2.webp"></div>
                                    </div>
                                    <div class="service-item style-3 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="service-content-wrap">
                                            <div class="service-title">
                                                <div class="service-icon">
                                                    <img src="<?= $pathindex ?>assets/images/home/produzione-assemblaggio-fase-02.svg" alt="immagine aster">
                                                </div>
                                                <span class="title h3">Flessibilità e personalizzazione</span>
                                            </div>
                                            <div class="service-content">
                                                <p class="desc">Ogni cliente è unico: per questo sviluppiamo dispositivi elettronici su misura,
                                                    adattandoci ad esigenze specifiche e a contesti operativi diversi.</p>
                                            </div>
                                        </div>
                                        <div class="service-reveal-bg" data-bg-image="assets/images/service/service-3.webp"></div>
                                    </div>
                                    <div class="service-item style-3 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="service-content-wrap">
                                            <div class="service-title">
                                                <div class="service-icon">
                                                    <img src="<?= $pathindex ?>assets/images/home/produzione-assemblaggio-fase-03.svg" alt="immagine aster">
                                                </div>
                                                <span class="title h3">Supporto tecnico costante</span>
                                            </div>
                                            <div class="service-content">
                                                <p class="desc">Il nostro team specializzato affianca il cliente in ogni fase. Competenze
                                                    aggiornate e interventi tempestivi assicurano precisione e continuità
                                                    operativa.</p>
                                            </div>
                                        </div>
                                        <div class="service-reveal-bg" data-bg-image="assets/images/service/service-4.webp"></div>
                                    </div>
                                    <div class="service-item style-3 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="service-content-wrap">
                                            <div class="service-title">
                                                <div class="service-icon">
                                                    <img src="<?= $pathindex ?>assets/images/home/produzione-assemblaggio-fase-04.svg" alt="immagine aster">
                                                </div>
                                                <span class="title h3">Fornitura di componenti elettronici</span>
                                            </div>
                                            <div class="service-content">
                                                <p class="desc">Su richiesta del cliente, selezioniamo e approvvigioniamo componenti
                                                    elettronici per ogni esigenza, garantendo massima qualità e affidabilità.</p>
                                            </div>
                                        </div>
                                        <div class="service-reveal-bg" data-bg-image="assets/images/service/service-6.webp"></div>
                                    </div>
                                </div>
                                <div class="service-btn-area text-center wow fadeInUp" data-wow-delay=".3s">
                                    <a class="text-btn" href="<?= $pathindex ?>produzione-e-assemblaggio">
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
                                    <span class="marquee-text">Aster</span>
                                    <div class="marquee-img">
                                        <img src="<?= $pathindex ?>assets/images/home/home-animazione-1.webp" alt="immagine animazione">
                                    </div>
                                </div>
                                <div class="swiper-slide marquee-item">
                                    <span class="marquee-text">Elettronica</span>
                                    <div class="marquee-img">
                                        <img src="<?= $pathindex ?>assets/images/home/home-animazione-2.webp" alt="immagine animazione">
                                    </div>
                                </div>
                                <div class="swiper-slide marquee-item">
                                    <span class="marquee-text">Elettronica</span>
                                    <div class="marquee-img">
                                        <img src="<?= $pathindex ?>assets/images/home/home-animazione-3.webp" alt="immagine animazione">
                                    </div>
                                </div>
                                <div class="swiper-slide marquee-item">
                                    <span class="marquee-text">Elettronica</span>
                                    <div class="marquee-img">
                                        <img src="<?= $pathindex ?>assets/images/home/home-animazione-4.webp" alt="immagine animazione">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end: Marquee Section -->
                <!-- start: About Section -->
                <section class="tj-about-section-2 section-gap-3 section-gap-x mt-15px">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="about-content-area style-3 wow fadeInLeft" data-wow-delay=".3s">
                                    <div class="sec-heading style-4">
                                        <div class="subtitle-text">
                                            <span class="sub-title wow fadeInUp" data-wow-delay=".3s">Lavora con noi</span>
                                        </div>
                                        <h2 class="sec-title title-highlight">Scopri le <span class="text-blu-primario">posizioni aperte</span>, oppure invia la tua candidatura spontanea
                                        </h2>
                                    </div>
                                    <div class="about-bottom-area mt-5">
                                        <div class="customers-box style-3 no-border">
                                            <div class="customers">
                                                <ul class="gap-3">
                                                    <li class="wow fadeInLeft" data-wow-delay=".2s"><img
                                                            src="<?= $pathindex ?>assets/images/home/aster-avatar-carriera-1.webp" alt="avatar carriera"></li>
                                                    <li class="wow fadeInLeft" data-wow-delay=".3s"><img
                                                            src="<?= $pathindex ?>assets/images/home/aster-avatar-carriera-2.webp" alt="avatar carriera"></li>
                                                    <li class="wow fadeInLeft" data-wow-delay=".4s"><img
                                                            src="<?= $pathindex ?>assets/images/home/aster-avatar-carriera-3.webp" alt="avatar carriera"></li>
                                                    <li class="wow fadeInLeft" data-wow-delay=".5s"><span><i class="tji-plus"></i></span></li>
                                                </ul>
                                            </div>
                                            <span class="customers-text wow fadeInLeft d-block mt-4" data-wow-delay=".6s">Entra anche tu nella squadra!
                                            </span>
                                        </div>
                                        <div class="about-btn-area-2 wow fadeInUp" data-wow-delay="1s">
                                            <a class="text-btn" href="<?= $pathindex ?>lavora-con-noi">
                                                <span class="btn-text"><span>Scopri di più</span></span>
                                                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                            </a>
                                        </div>
                                    </div>
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
                <!-- end: About Section -->

                <!-- start: About Section -->
                <section class="tj-about-section section-gap">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 order-lg-1 order-2">
                                <div class="about-img-area wow fadeInLeft h-100" data-wow-delay=".2s">
                                    <div class="about-img overflow-hidden">
                                        <img data-speed="0.8" src="<?= $pathindex ?>" alt="immagine da inserire">
                                    </div>
                                    <div class="box-area">
                                        <div class="border-primary-color p-4 rounded bg-white">
                                            <span class="h3">Vai alla sezione news</span>
                                            <div class="wow fadeInUp mt-5" data-wow-delay=".5s">
                                                <a class="text-btn" href="<?= $pathindex  ?>news">
                                                    <span class="btn-text"><span>Scopri di più</span></span>
                                                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 order-lg-2 order-1">
                                <div class="about-content-area style-1 wow fadeInLeft" data-wow-delay=".2s">
                                    <div class="sec-heading">
                                        <span class="sub-title wow fadeInUp bg-carta-da-zucchero" data-wow-delay=".3s">Get to Know
                                            Us</span>
                                        <h2 class="sec-title">Da oggi siamo partner di Luminovo: la filosofia <span>Kaizen</span> applicata.
                                        </h2>
                                    </div>
                                    <div class="wow fadeInUp" data-wow-delay=".5s">
                                        <a class="text-btn" href="<?= $pathindex  ?>news">
                                            <span class="btn-text"><span>Leggi tutto</span></span>
                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="about-bottom-area">
                                    <div class="client-review-cont wow fadeInUp" data-wow-delay=".7s">
                                        <p class="desc">Siamo orgogliosi di annunciare la nuova partnership, per migliorare l’efficienza operativa e offrire un valore maggiore ai nostri clienti.</p>
                                        <div class="client-info-area">
                                            <img style="max-width: 36px;" src="<?= $pathindex ?>assets/images/home/home-news-virgolette.svg" alt="virgolette">
                                        </div>
                                    </div>
                                    <div class="video-img  wow fadeInUp" data-wow-delay=".9s">
                                        <img src="<?= $pathindex ?>assets/images/home/home-news-azienda.webp" alt="immagine servizio">
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
                                            <a class="text-btn" href="<?= $pathindex  ?>contatti">
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