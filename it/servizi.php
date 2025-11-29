<?
$lingua = 1;
require_once("../inc/global.php");
require_once("../inc/header.php");
require_once("../inc/mysqli.php");
// $database = new DB();
$titleseo = "Assemblaggio conto terzi: Servizi | Aster Elettronica";
$descriptionseo = "Aster Elettronica offre montaggio conto terzi e assemblaggi
elettronici di schede elettroniche su misura, garantendo alta qualità e
precisione costante.";
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
                                    <span class="sub-title wow fadeInUp" data-wow-delay=".3s">MONTAGGI ELETTRONICI</span>
                                    <div class="heading-wrap-content">
                                        <div class="sec-heading">
                                            <h2 class="sec-title">Assemblaggio conto terzi, con tante <span class="fw-bold">soluzioni</span></h2>
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
                        <p ><a href="<?= $pathindex ?>aster-elettronica" class="text-link">Aster Elettronica</a> offre un servizio completo di assemblaggio conto terzi,
                            progettato per supportare le <a href="<?= $pathindex ?>settori" class="text-link">aziende</a> che necessitano di dispositivi elettronici
                            affidabili, personalizzati e ad alte prestazioni. Dal 1990 operiamo come
                            partner tecnico nella produzione di schede ed apparecchi elettronici, su
                            progetto del cliente, garantendo qualità, personalizzazione ed un approccio
                            flessibile in ogni fase del processo.</p>
                        <p>Il nostro obiettivo è <strong>accompagnare il cliente dalla sua idea</strong> alla
                            prototipazione, <strong>fino alla produzione in serie</strong>, integrando esigenze
                            progettuali, ottimizzazione dei materiali e controllo di qualità rigoroso.
                            <strong>Investiamo costantemente nella formazione del personale e
                                nell’aggiornamento delle nostre tecnologie</strong>, così da offrire montaggi
                            elettronici avanzati, sicuri e conformi agli standard internazionali.
                        </p>
                        <p>
                            Siamo in grado di operare in conto lavoro pieno, parziale o misto, adattandoci
                            alle specifiche richieste del progetto. Ciò significa poter affiancare il cliente
                            sia nell’approvvigionamento dei componenti, sia nella gestione della
                            produzione e dei test, assicurando soluzioni su misura per schede
                            elettroniche e dispositivi di ogni complessità.
                        </p>
                        <p class="mb-5">
                            Grazie ad un’organizzazione solida, alla lunga esperienza e ad un impegno
                            costante nel miglioramento, Aster Elettronica rappresenta un partner
                            affidabile per chi cerca assemblaggi elettronici di qualità, precisione tecnica e
                            supporto continuativo.
                        </p>
                        <div class="row row-gap-4">
                            <? $servizi = [
                                [
                                    "titolo" => "Servizio di consulenza prototipi e PCB",
                                    "testo" => "Supporto tecnico per sviluppare prototipi e PCB ottimizzati, pronti per una produzione industriale efficiente."
                                ],
                                [
                                    "titolo" => "Industrializzazione prodotto",
                                    "testo" => "Convertiamo il tuo progetto in un processo produttivo stabile, garantendo costi ottimizzati e competitività sul mercato."
                                ],
                                [
                                    "titolo" => "Produzione di campionature",
                                    "testo" => "Realizziamo campioni funzionali e prototipi rapidi per test, validazioni e verifiche pre-produzione."
                                ],
                                [
                                    "titolo" => "Servizio di ricerca componenti",
                                    "testo" => "Ricerchiamo componenti elettronici affidabili attraverso fornitori qualificati, garantendo compatibilità e continuità produttiva."
                                ],
                                [
                                    "titolo" => "Approvvigionamento materiali BOM",
                                    "testo" => "Gestiamo l’intera BOM assicurando reperibilità, qualità e tracciabilità dei componenti elettronici."
                                ],
                                [
                                    "titolo" => "Gestione e stoccaggio componenti in conto pieno e conto lavoro",
                                    "testo" => "Organizziamo materiali in conto pieno e conto lavoro con stoccaggio sicuro e tracciabile."
                                ],
                                [
                                    "titolo" => "Montaggio scheda elettronica SMD",
                                    "testo" => "Montaggio SMD automatizzato con linee dedicate per garantire precisione, velocità e qualità costante."
                                ],
                                [
                                    "titolo" => "Montaggio scheda elettronica PHT",
                                    "testo" => "Assemblaggio PHT con macchine preformatrici per assiali e radiali e stazioni di montaggio singole o in linea."
                                ],
                                [
                                    "titolo" => "Test ottico",
                                    "testo" => "Ispezioni accurate con standard di qualità elevati, applicate a tutte le fasi del processo."
                                ],
                                [
                                    "titolo" => "Rework",
                                    "testo" => "Interventi di rework su schede difettose o da aggiornare, eseguiti da personale specializzato."
                                ],
                                [
                                    "titolo" => "Raggi X",
                                    "testo" => "Controlli a raggi X per verificare connessioni, difetti e componenti nascosti con massima precisione."
                                ],
                                [
                                    "titolo" => "Montaggio apparecchio, collaudo e imballaggio chiavi in mano",
                                    "testo" => "Produzione completa di apparecchi elettronici con collaudo funzionale e imballaggio chiavi in mano."
                                ],
                                [
                                    "titolo" => "Servizio di riparazione post vendita",
                                    "testo" => "Supporto tecnico continuativo con riparazioni e manutenzioni su prodotti elettronici già in uso."
                                ]
                            ];
                            ?>
                            <? foreach ($servizi as $servizio): ?>
                                <div class="col-lg-4 col-md-6">
                                    <div class="service-item style-4 wow fadeInUp min-h-267px" data-wow-delay=".1s">
                                        <div class="service-content">
                                            <span class="title h3"><a href="service-details.html"><?= $servizio["titolo"]  ?></a></span>
                                            <p class="desc mt-3"><?= $servizio["testo"] ?></p>
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